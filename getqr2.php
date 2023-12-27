<?php
$houseid = $_GET['houseid'];
$conn = mysqli_connect("localhost","root","","u627005231_airbnb");
$stmt = $conn->prepare("SELECT * FROM accounts where house = '$houseid'");
$stmt-> execute();
$stmt-> bind_result($id,$qrcode);
$status= array();
while($stmt -> fetch()){
	$temp = array();
	$temp['id'] = $id;
	$temp['qrcode'] = $qrcode;
}
echo $qrcode;
?>

