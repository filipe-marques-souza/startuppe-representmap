<?php
include "./include/db.php";

// connect to db
//mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
//mysql_select_db($db_name) or die(mysql_error());
global $connection;

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

error_reporting(E_ALL ^ E_DEPRECATED);


// if map is in Startup Genome mode, check for new data
if($sg_enabled) {
  require_once("include/http.php");
  include_once("startupgenome_get.php");
}

// input parsing
function parseInput($value) {
  $value = htmlspecialchars($value, ENT_QUOTES);
  $value = str_replace("\r", "", $value);
  $value = str_replace("\n", "", $value);
  return $value;
}


?>