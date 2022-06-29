<?php
$x=$_GET['id'];
header('Content-type: application/pdf');
readfile('C:\xampp\htdocs\imagesss\ '.$x);
?>