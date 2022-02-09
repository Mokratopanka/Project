<?php 
ob_start(); //output buffering on

// __FILE__ returns path
// dirname() returns parent dir
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PROJECT_PATH . '/shared');

define("WWW_ROOT", '');
//defines root url as contant
//$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
//$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
//define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('db_connect.php');
require_once('db_query_fx.php');

$db = db_connect();

?>