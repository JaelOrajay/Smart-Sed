<?php
$qrcode = $_GET['qrcode'];
$houseid = $_GET['houseid'];
$remarks = $_GET['remarks'];
 // Connecting to database 
 $db = mysqli_connect('localhost','root','','u627005231_airbnb');
 $query = mysqli_query($db,"SELECT * FROM accounts WHERE qrcode = '$qrcode'") or die(mysqli_error($query));
 if ($result = mysqli_fetch_array($query)){
	$fullname = $result['fullname'];
  }else{
	  $fullname = 'unknown '.$qrcode;
  }
 //echo $fullname;
 $query = mysqli_query($db,"INSERT INTO logs (houseid,name,remarks) VALUES ('$houseid','$fullname','$remarks')") or die(mysqli_error($query));
?>



