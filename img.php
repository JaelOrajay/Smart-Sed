<?php
$url = 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=31sdfasdf12saasdasd';
$img = 'C:\xampp\htdocs\smart\img.jpg';
file_put_contents($img, file_get_contents($url));
?>