<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456789";
$dbname = "ajaxdatabase";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) ;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>
