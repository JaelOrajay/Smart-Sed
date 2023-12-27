<?php
$conn = new mysqli("localhost","root","","u627005231_airbnb");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>