<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
    $imgid = $_POST['id'];
    include "conn.php";
    $sql = "SELECT * FROM invalids WHERE id = $imgid";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        //echo $row['image'];
        echo '<img src="'.$row['image'].'" alt="Image Unavailable">';
    }
?>


</body>