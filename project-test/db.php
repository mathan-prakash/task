<?php
// db connection
ob_start();
ob_clean();
session_start();
 error_reporting(1);
 date_default_timezone_set('Asia/Kolkata');
$con = mysql_connect("localhost", "root", "") or die("Couldn't make connection.");
mysql_select_db("testing") or die("Couldn't select database");


?>