<?php
	session_start();
	include 'php/connectdb.php';

	$sql = "select * from product where type = 'ตุ๊กตา'";
	$query = mysqli_query($conn,$sql);
 ?>

<!-- HTML Zone  -->
<!DOCTYPE html>
<html>
	<head>
		<title>Lookmeeshop : สินค้า </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>

    <body>
		<div> 
			<ul>
				<li><a href="index.php">หน้าแรก</a></li>
				<li><a href="product.php">สินค้า</a></li>
				<li><a href="about.php">เกี่ยวกับเรา</a></li>
				<li><a href="contact.php">ติดต่อเรา</a></li>

				<li id="login"><a href="register.php">สมัครสมาชิก</a></li>
				<li id="login"><a href="contact.php">ล็อคอิน</a></li>
				
			</ul>
		</div>

		<section>
			<h3>สินค้า</h3>
			<hr>
			<form method="GET" action="product.php" align="right">
				<input type="text" name="search"  placeholder="กรอกชื่อสินค้า" style="width: 20%" id="input">
				<input type="submit" class="btn btn-primary" value="ค้นหา">
				<a class="btn btn-default" href="product.php">รีเซ็ต</a>
			</form>
		</section>
    </body>
</html>

