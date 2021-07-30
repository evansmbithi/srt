<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'JOBPORTAL');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
//require_once(LIB_PATH.DS."config.php");
// require_once(LIB_PATH.DS."function.php");
// require_once(LIB_PATH.DS."session.php");
// require_once(LIB_PATH.DS."accounts.php");
// require_once(LIB_PATH.DS."autonumbers.php");  
// require_once(LIB_PATH.DS."companies.php");  
// require_once(LIB_PATH.DS."job.php");  
// require_once(LIB_PATH.DS."employees.php");  
// require_once(LIB_PATH.DS."categories.php");  
// require_once(LIB_PATH.DS."applicant.php");  
// require_once(LIB_PATH.DS."jobregistration.php");

require_once("config.php");
require_once("function.php");
require_once("session.php");
require_once("accounts.php");
require_once("autonumbers.php");  
require_once("companies.php");  
require_once("job.php");  
require_once("employees.php");  
require_once("categories.php");  
require_once("applicant.php");  
require_once("jobregistration.php");
  

//require_once(LIB_PATH.DS."database.php");
require_once("database.php");
?>