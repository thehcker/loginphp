<?php
require 'core.inc.php';
require 'index.html';
session_destroy();
header('Location: connect.php');
?>