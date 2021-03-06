<?php
/**
 * base class for the real ConversionEngines in the system - ffmpeg,menconder and flix. 
 * 
 * @package Scheduler
 * @subpackage Conversion
 */
class KSingleOutputOperationEngine extends KOperationEngine
{
	/**
	 * @var string
	 */
	protected $outFilePath;
	
	protected function getCmdLine()
	{
		$exec_cmd = $this->cmd . " " . 
			str_replace ( 
				array(KDLCmdlinePlaceholders::InFileName, KDLCmdlinePlaceholders::OutFileName, KDLCmdlinePlaceholders::ConfigFileName), 
				array($this->inFilePath, $this->outFilePath, $this->configFilePath),
				$this->operator->command);
				
		$exec_cmd .= " >> \"{$this->logFilePath}\" 2>&1";
		
		return $exec_cmd;
	}

	public function __construct($cmd, $outFilePath)
	{
		parent::__construct($cmd);
		
		$this->outFilesPath[] = $outFilePath;
		$this->outFilePath = $outFilePath;
		$this->logFilePath = "$outFilePath.log";
	}
}


