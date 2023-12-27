<?php
include "conn.php";

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  
  // Delete the user record from the database
  $sql = "DELETE FROM invalids WHERE id = $id";
  if(mysqli_query($conn, $sql)) {
    echo "Invalid Log deleted successfully";
  } else {
    echo "Error deleting Invalid Log: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
