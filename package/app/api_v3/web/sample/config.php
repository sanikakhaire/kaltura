<?php
$databaseManager = new DbManager();
$configPath = realpath(KALTURA_API_PATH . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "database.ini");
$databaseManager->setConfig(new Zend_Config_Ini($configPath));

$databaseManager->initialize();
$partner = PartnerPeer::retrieveByPK(1);

if (!$partner)
	die("Default partner with ID \"1\" was not found!");
	
define("SAMPLE_ABSOUTE_PATH", dirname(__FILE__) . DIRECTORY_SEPARATOR);
define("PARTNER_ID", $partner->getId());
define("SECRET", $partner->getSecret());
define("ADMIN_SECRET", $partner->getAdminSecret());
if (strpos(kConf::get('www_host'), "http://") === 0)
	define("SERVER_URL", kConf::get('www_host'));
else
	define("SERVER_URL", "http://".kConf::get('www_host'));
?>