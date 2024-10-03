<?php
session_start();
if(!isset($_SESSION["username"])){
header('Location: login.php',true,301);
exit(); }
?>
