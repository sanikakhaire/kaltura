<?php
class countryRestriction extends baseRestriction
{
	const COUNTRY_RESTRICTION_TYPE_RESTRICT_LIST = 0;
	const COUNTRY_RESTRICTION_TYPE_ALLOW_LIST = 1;
	
	/**
	 * Allow or restrict
	 * 
	 * @var int
	 */
	protected $type;
	
	/**
	 * List of countries (comma delimited)
	 * 
	 * @var string
	 */
	protected $countryList;
	
	/**
	 * Current country for validation
	 * 
	 * @var string
	 */
	protected $country;
	
	/**
	 * @param int $type
	 */
	function setType($type)
	{
		$this->type = $type;
	}
	
	/**
	 * @param string $countryList
	 */
	function setCountryList($countryList)
	{
		$list = explode(",", $countryList);
		$newList = array();
		foreach($list as $item)
		{
			if (trim($item) != "")
				$newList[] = strtoupper(trim($item));
		}
		
		$this->countryList = implode(",", $newList);
	}
	
	/**
	 * @return int
	 */
	function getType()
	{
		return $this->type;	
	}
	
	/**
	 * @return string
	 */
	function getCountryList()
	{
		return $this->countryList;
	}
	
	/**
	 * @return bool
	 */
	function isValid()
	{
		if ($this->type == self::COUNTRY_RESTRICTION_TYPE_ALLOW_LIST)
			return $this->matchCountry();
		else if ($this->type == self::COUNTRY_RESTRICTION_TYPE_RESTRICT_LIST)
			return !$this->matchCountry();
		else
			return false;
	}
	
	/**
	 * @return bool
	 */
	protected function matchCountry()
	{
		$accessControlScope = $this->getAccessControlScope();
		$ip = $accessControlScope->getIp();
		$ipGeo = new myIPGeocoder();
		$country = $ipGeo->iptocountry($ip);
		$countryList = explode(",", $this->countryList);
		return (in_array($country, $countryList));
	}
}