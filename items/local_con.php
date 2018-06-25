<?php
$username = "root";
$password = "root";
$hostname = "your-09dedafe33";
$dbh = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
mysql_select_db("cdri");


//print "hello i m connected to database"	;
?>