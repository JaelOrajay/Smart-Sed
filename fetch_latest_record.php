<?php
include("include/config.php");

// define query to select latest record from invalids table
$sql = "SELECT * FROM invalids ORDER BY id DESC LIMIT 1";

// execute query and fetch latest record
$result = mysqli_query($con, $sql);
$latest_record = mysqli_fetch_assoc($result);

// set new timestamp
$new_timestamp = time();

// close connection
mysqli_close($con);

// add new timestamp to latest record
$latest_record["timestamp"] = $new_timestamp;

// return latest record as JSON
echo json_encode($latest_record);
?>

