<?php
$houseid = $_GET['houseid'];
 // Connecting to database 
 $db = mysqli_connect('localhost','root','','u627005231_airbnb');
 
 
 //$query = mysqli_query($db,"SELECT * FROM ( SELECT * FROM accounts WHERE house = '$houseid' ORDER BY id DESC LIMIT 1 ) sub ORDER BY id ASC ") or die(mysqli_error($query));


$query = mysqli_query($db,"SELECT * FROM ( SELECT * FROM accounts WHERE house = '$houseid' ORDER BY id DESC LIMIT 1 ) sub ORDER BY id ASC ") or die(mysqli_error($db));

 $result = mysqli_fetch_array($query);
 echo 'qr='.$result['qrcode'];
?>


