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
	
		<div class="container">
		<h3>สินค้า</h3>
		<form method="GET" action="product.php" align="right">
					<input type="text" name="search"  placeholder="กรอกชื่อสินค้า" style="width: 20%" id="input">
					<input type="submit" class="btn btn-primary" value="ค้นหา">
					<input type="reset" class="btn btn-primary" value="ค้นหา">
		</form>
			<section id="1">
				<h4>ตุ๊กตา</h4>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="2">
				<h4>พวงกุญแจ</h4>
				<?php
					$sql = "select * from product where type = 'พวงกุญแจ";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="3">
				<h4>กระเป๋า</h4>
				<?php
					$sql = "select * from product where type = 'กระเป๋า";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="4">
				<h4>หมอนผ้าห่ม</h4>
				<?php
					$sql = "select * from product where type = 'หมอนผ้าห่ม";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="5">
				<h4>โคมไฟ</h4>
				<?php
					$sql = "select * from product where type = 'โคมไฟ";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="6">
				<h4>ถุงเท้า</h4>
				<?php
					$sql = "select * from product where type = 'ถุงเท้า";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="7">
				<h4>แก้ว</h4>
				<?php
					$sql = "select * from product where type = 'แก้ว";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="8">
				<h4>เข็มกลัด</h4>
				<?php
					$sql = "select * from product where type = 'เข็มกลัด";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="9">
				<h4>โคมไฟ</h4>
				<?php
					$sql = "select * from product where type = 'รองเท้า";
					$query = mysqli_query($conn,$sql);
				?>
				<hr>
				<?php foreach($query as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result['pro_name'] ?><br>
								ราคา : <?php echo $result['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>
		</div>
    </body>
</html>

