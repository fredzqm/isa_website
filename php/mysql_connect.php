<?php
// Content of database.php
 
$mysql = new mysqli('localhost', 'root', 'root', 'test');
 
if($mysql->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>