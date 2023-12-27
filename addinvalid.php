<?php
$imgtxt = $_POST['imgtxt'];
$db = mysqli_connect('localhost','root','','u627005231_airbnb');
$query = mysqli_query($db,"INSERT INTO invalids (image) VALUES ('$imgtxt')") or die(mysqli_error($query));


?>

<!--$conn = new mysqli("localhost","u627005231_airbnbuser","kM2s2I8VcyT?","u627005231_airbnb");-->