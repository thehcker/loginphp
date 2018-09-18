<?php
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin()){
	header('Location: index.html');
}else{
	include 'loginform.inc.php';
}
?>
