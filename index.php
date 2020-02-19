<?php
	session_start();
	include 'php/connectdb.php';

	$sql = "select * from member";
	$query = mysqli_query($conn,$sql);
	$re ='test';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lookmeeshop : หน้าแรก</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<?php include 'php/head.php' ?>
</head>
<body>
	<?php include 'php/menu.php' ?>
	<img src="pic/Slide3.jpg">
</body>
</html>

