<?php
include "conn.php";

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  
  // Delete the user record from the database
  $sql = "DELETE FROM house WHERE id = $id";
  if(mysqli_query($conn, $sql)) {
    echo "User deleted successfully";
  } else {
    echo "Error deleting user: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
