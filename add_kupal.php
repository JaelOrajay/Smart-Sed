<?php
include "conn.php";
session_start();

if(isset($_POST['submit'])) {
    $houseid = $_POST['houseid'];
    $name = $_POST['name'];
$date = date('Y-m-d'); // This will give you the date in the format of YYYY-MM-DD
$time = date('H:i:s'); // This will give you the time in the format of HH:MM:SS



$remarks = $_POST['remarks'];

    // Insert new user data into the house table
    $sql = "INSERT INTO logs (houseid, name, date, time, remarks) VALUES ('$houseid', '$name', '$date', '$time', '$remarks')";
    if(mysqli_query($conn, $sql)) {
        // If the user data is added successfully, redirect to the same page
        echo '<script>window.location.href="qr.php?qrcode=' . $_SESSION['qr']. '";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

