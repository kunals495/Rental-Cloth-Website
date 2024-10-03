<?php

// Database connection parameters
$host = "localhost";
$username = "root";
$password = '';
$database = "id11147977_register";





$con = mysqli_connect($host,$username,$password,$database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>