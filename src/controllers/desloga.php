<?php 

session_start();
session_destroy();
header('Location: /cgophp/login.php');

?>