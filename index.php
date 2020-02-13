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
	<img src="https://thumbs.dreamstime.com/z/bright-banner-page-online-shopping-store-template-modern-flat-webpage-design-concept-website-mobile-happy-girl-vector-136259459.jpg">
		<table>
			<tr>
				<td>รหัสลูกค้า</td>
				<td>ชื่อลูกค้า</td>
				<td>เพศ</td>
			</tr>
			<?php foreach ($query as $query ) { ?>
				<tr>
				<td><?php echo $query['mem_id']; ?></td>
				<td><?php echo $query['mem_name']; ?></td>
				<td><?php echo $query['sex']; ?></td>
			</tr>
			<?php }; ?>
		</table>
</body>
</html>

