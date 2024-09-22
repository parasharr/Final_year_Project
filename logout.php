<?php
require 'config.php';
$_SESSION = [];
session_destroy();
header('location: login.php');
?>