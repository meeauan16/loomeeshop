<?php
	session_start();
	include 'php/connectdb.php';

	$sql = "select * from product where type = 'ตุ๊กตา'";
	$query = mysqli_query($conn,$sql);

	$sql1 = "select * from product where type = 'พวงกุญแจ";
	$query1 = mysqli_query($conn,$sql1);

	$sql2 = "select * from product where type = 'กระเป๋า";
	$query2 = mysqli_query($conn,$sql2);

	$sql3 = "select * from product where type = 'หมอนผ้าห่ม";
	$query3 = mysqli_query($conn,$sql3);

	$sql4 = "select * from product where type = 'โคมไฟ";
	$query4 = mysqli_query($conn,$sql4);

	$sql5 = "select * from product where type = 'ถุงเท้า";
	$query5 = mysqli_query($conn,$sql5);

	$sql6 = "select * from product where type = 'แก้ว";
	$query6 = mysqli_query($conn,$sql6);

	$sql7 = "select * from product where type = 'เข็มกลัด";
	$query7 = mysqli_query($conn,$sql7);

	$sql8 = "select * from product where type = 'รองเท้า";
	$query8 = mysqli_query($conn,$sql8);
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
				<hr>
				<?php foreach($query1 as $result1){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result1['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result1['brand'] ?>&nbsp; <?php echo $result1['pro_name'] ?><br>
								ราคา : <?php echo $result1['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result111['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="3">
				<h4>กระเป๋า</h4>
				<hr>
				<?php foreach($query2 as $result2){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result2['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result2['brand'] ?>&nbsp; <?php echo $result2['pro_name'] ?><br>
								ราคา : <?php echo $result2['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result3['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="4">
				<h4>หมอนผ้าห่ม</h4>
				<hr>
				<?php foreach($query3 as $result3){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result3['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result3['brand'] ?>&nbsp; <?php echo $result3['pro_name'] ?><br>
								ราคา : <?php echo $result3['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result3['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="5">
				<h4>โคมไฟ</h4>
				<hr>
				<?php foreach($query4 as $result4){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result4['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result4['brand'] ?>&nbsp; <?php echo $result4['pro_name'] ?><br>
								ราคา : <?php echo $result4['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result4['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="6">
				<h4>ถุงเท้า</h4>
				<hr>
				<?php foreach($query5 as $result5){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result5['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result5['brand'] ?>&nbsp; <?php echo $result5['pro_name'] ?><br>
								ราคา : <?php echo $result5['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result5['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="7">
				<h4>แก้ว</h4>
				<hr>
				<?php foreach($query6 as $result6){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result6['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result6['brand'] ?>&nbsp; <?php echo $result6['pro_name'] ?><br>
								ราคา : <?php echo $result6['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result6['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="8">
				<h4>เข็มกลัด</h4>
				<hr>
				<?php foreach($query7 as $result7){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result7['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result7['brand'] ?>&nbsp; <?php echo $result7['pro_name'] ?><br>
								ราคา : <?php echo $result7['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result7['pro_id'] ?>"> 
								<input type="submit" class="btn btn-success" value="เพิ่มเติม">
								</div>
							</div>
						</div>
					</form>
				<?php } ?> 
			</section>

			<section id="9">
				<h4>รองเท้า</h4>
				<hr>
				<?php foreach($query8 as $result8){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;">
								<img src="pic/<?php echo $result8['picture'] ?> " class="card-img-top" style="width: 150px ;">
								<div class="card-body">
								<p class="card-text"><?php echo $result['brand'] ?>&nbsp; <?php echo $result8['pro_name'] ?><br>
								ราคา : <?php echo $result8['price'] ?></p>
								<input type="hidden" name="id" value="<?php echo $result8['pro_id'] ?>"> 
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

