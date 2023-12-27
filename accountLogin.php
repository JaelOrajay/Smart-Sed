<?php
include("include/config.php");

if (isset($_POST['login'])) {
  // Retrieve the username and password from the form
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  // Retrieve the user's data from the database
  $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password' LIMIT 1";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) == 1) {
    // If the login credentials are correct, store the username and QR code in session variables
    $row = mysqli_fetch_assoc($result);
    // Return the URL to which the user should be redirected in the AJAX response
    echo "http://localhost/test/qr.php?qrcode=" . $row['qrcode'];
    exit();
  } else {
    // If the login credentials are incorrect, display an error message
    echo "Invalid username or password.";
    exit();
  }
}


