<?php
// Include database connection
include 'conn.php';

// Get user ID and form data from POST request
$id = $_POST['id'];
$houseid = $_POST['houseid'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Update user details in the database
$sql = "UPDATE house SET houseid = '$houseid', password = '$password', user_type = '$user_type' WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  // Return success message
  echo json_encode(array('success' => true, 'message' => 'User details updated successfully.'));
} else {
  // Return error message
  echo json_encode(array('success' => false, 'message' => 'Error updating user details.'));
}
?>
