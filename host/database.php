<?php
$host = 'localhost';
$user = 'root';
$password = '';

$db = 'mail';
$conn = mysql_connect($host,$user,$password);
$mydb = mysql_select_db($db);
if (!$conn && !$mydb) {
	echo 'There was an erro:' .mysql_error();
}

?>