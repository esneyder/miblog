<?php
ob_start();
error_reporting(E_ALL);
try
{
  $m    = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
  $db   = $m->miblog;
  $coll = $db->usuario;
}
catch (MongoConnectionException $e)
{
  die('Error c al conectar con el servidor MongoDB');
} 
catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
include_once("functions.php");
session_start();
session_register("login");
session_register("password");
session_register("loggedIn");
?>
 