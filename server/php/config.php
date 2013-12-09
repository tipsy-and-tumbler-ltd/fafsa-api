<?php
$dbserver = "[path to database server]";
$dbname = "[database name]";
$dbuser = "[database user]";
$dbpassword = "[database pwd]";

mysql_connect($dbserver,$dbuser,$dbpassword) or die('Could not connect: ' . mysql_error());
mysql_select_db($dbname);

$three_scale_provider_key = "[your 3Scale ID - For Server Deployment, not individual developers]";

?>