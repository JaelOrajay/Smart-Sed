<?php
include "conn.php";

if(isset($_GET['count'])) {
  $count = $_GET['count'];
  
  // Delete the user record from the database
  $sql = "DELETE FROM logs WHERE count = $count";
  if(mysqli_query($conn, $sql)) {
    echo "Logs deleted successfully";
  } else {
    echo "Error deleting Logs: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
