<?php 

session_start();
session_destroy();
header('Location: https://localhost:3000');

?>