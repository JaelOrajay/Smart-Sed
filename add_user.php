<?php
include "conn.php";

if(isset($_POST['submit'])) {
    $houseid = $_POST['houseid'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    
    // Insert new user data into the house table
    $sql = "INSERT INTO house (houseid, password, user_type) VALUES ('$houseid', '$password', '$user_type')";
    if(mysqli_query($conn, $sql)) {
        // If the user data is added successfully, redirect to the same page
        header("Location: activity_log.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

