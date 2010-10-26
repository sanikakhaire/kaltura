<?php
/**
 * Will provision new live stram.
 *
 * 
 * @package Scheduler
 * @subpackage Provision
 */
class KAsyncProvisionProvide extends KBatchBase
{
	/**
	 * @return int
	 */
	public static function getType()
	{
		return KalturaBatchJobType::PROVISION_PROVIDE;
	}
	
	protected function init()
	{
		$this->saveQueueFilter(self::getType());
	}
	
	public function run($jobs = null)
	{
		KalturaLog::info("Provision live stream batch is running");
		
		if($this->taskConfig->isInitOnly())
			return $this->init();
		
		if(is_null($jobs))
			$jobs = $this->kClient->batch->getExclusiveProvisionProvideJobs($this->getExclusiveLockKey(), $this->taskConfig->maximumExecutionTime, 1, $this->getFilter());
		
		KalturaLog::info(count($jobs) . " provision jobs to perform");
		
		if(! count($jobs) > 0)
		{
			KalturaLog::info("Queue size: 0 sent to scheduler");
			$this->saveSchedulerQueue(self::getType());
			return null;
		}
	
		foreach($jobs as &$job)
		{
			try
			{
				$job = $this->provision($job, $job->data);
			}
			catch(KalturaException $kex)
			{
				return $this->closeJob($job, KalturaBatchJobErrorTypes::KALTURA_API, $kex->getCode(), "Error: " . $kex->getMessage(), KalturaBatchJobStatus::FAILED);
			}
			catch(KalturaClientException $kcex)
			{
				return $this->closeJob($job, KalturaBatchJobErrorTypes::KALTURA_CLIENT, $kcex->getCode(), "Error: " . $kcex->getMessage(), KalturaBatchJobStatus::RETRY);
			}
			catch(Exception $ex)
			{
				return $this->closeJob($job, KalturaBatchJobErrorTypes::RUNTIME, $ex->getCode(), "Error: " . $ex->getMessage(), KalturaBatchJobStatus::FAILED);
			}
		}
		
		return $jobs;
	}
	
	protected function provision(KalturaBatchJob $job, KalturaProvisionJobData $data)
	{
		KalturaLog::notice ( "Provision entry");
		
		$job = $this->updateJob($job, null, KalturaBatchJobStatus::QUEUED, 1);
	
		$engine = KProvisionEngine::getInstance( $job->jobSubType , $this->taskConfig );
		
		if ( $engine == null )
		{
			$err = "Cannot find provision engine [{$job->jobSubType}] for job id [{$job->id}]";
			return $this->closeJob($job, KalturaBatchJobErrorTypes::APP, KalturaBatchJobAppErrors::ENGINE_NOT_FOUND, $err, KalturaBatchJobStatus::FAILED, KalturaEntryStatus::ERROR_CONVERTING);
		}
		
		KalturaLog::info( "Using engine: " . $engine->getName() );
	
		$results = $engine->provide($job, $data);

		if($results->status == KalturaBatchJobStatus::FINISHED)
			return $this->closeJob($job, null, null, null, KalturaBatchJobStatus::FINISHED, null, $results->data);
			
		return $this->closeJob($job, KalturaBatchJobErrorTypes::APP, null, $results->errMessage, $results->status, null, $results->data);
	}
	
	protected function updateExclusiveJob($jobId, KalturaBatchJob $job, $entryStatus = null)
	{
		return $this->kClient->batch->updateExclusiveProvisionProvideJob($jobId, $this->getExclusiveLockKey(), $job, $entryStatus);
	}
	
	protected function freeExclusiveJob(KalturaBatchJob $job)
	{
		$resetExecutionAttempts = false;
		if($job->status == KalturaBatchJobStatus::ALMOST_DONE)
			$resetExecutionAttempts = true;
	
		$response = $this->kClient->batch->freeExclusiveProvisionProvideJob($job->id, $this->getExclusiveLockKey(), $resetExecutionAttempts);
		
		KalturaLog::info("Queue size: $response->queueSize sent to scheduler");
		$this->saveSchedulerQueue(self::getType(), $response->queueSize);
		
		return $response->job;
	}
}
?>