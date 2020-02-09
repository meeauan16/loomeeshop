<?php
	session_start();

	$server = '127.0.0.1';
	$username = 'root';
	$password = '';
	$db = 'lookmeeshop';

	$conn = mysqli_connect($server,$username,$password,$db);
	$sql = 'select * from member';
	$query = mysqli_query($conn,$sql);

	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>หน้าแรก</title>
	<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover {
		  background-color: #111;
		}

		img {
			width: 100%;
		}

		#login {
			float: right;
		}


	</style>
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
			<?php } ?>
		</table>
</body>
</html>

