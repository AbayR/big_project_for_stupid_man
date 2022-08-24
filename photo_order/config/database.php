<?php
$hostname     = "localhost"; // Enter Your Host Name
$username     = "u1741384_default";      // Enter Your Table username
$password     = "Gd2ERToyl2i99YRY";          // Enter Your Table Password
$databasename = "u1741384_default"; // Enter Your database Name


$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

