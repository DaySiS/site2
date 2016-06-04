<?
session_start();
	Error_Reporting(E_ALL & ~E_NOTICE);

	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('HOST_NAME', $_SERVER['HTTP_HOST']);

	require_ONCE(ROOT."/config/config.php");
    require_ONCE ROOT."/apps/smarty/libs/Smarty.class.php";
    //require_ONCE ROOT."/apps/smarty/libs/SmartyBC.class.php";
    require_ONCE(ROOT."/components/dataBase.php"); new dataBase();
    require_ONCE(ROOT."/models/modelCommon.php"); //new modelCommon();
	require_ONCE ROOT . "/components/commonClass.php";
	
	
	require(ROOT.'/components/Router.php'); new Router();










