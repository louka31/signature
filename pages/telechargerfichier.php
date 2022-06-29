<?php 
$x=$_GET['id'];

		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$x");
		header("Content-Type: application/pdf");
		header("Content-Transfer-Emcoding: binary");

		readfile('C:\xampp\htdocs\imagesss\ '.$x);
		exit;

	

 ?>