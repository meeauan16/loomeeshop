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
	<h3>สินค้า</h3>
		<section>
			<h5>ตุ๊กตา</h5>
			<hr>
			<form method="GET" action="product.php" align="right">
				<input type="text" name="search"  placeholder="กรอกชื่อสินค้า" style="width: 20%" id="input">
				<input type="submit" class="btn btn-primary" value="ค้นหา">
				<input type="reset" class="btn btn-primary" value="ค้นหา">
			</form>

			<?php foreach($query as $result){ ?>
                            <form action="details.php" method="get">
                                <div class="col-sm-3" style="padding-top: 20px;">
                                    <div class="card" style="width: 18rem;">
                                        <img src="img/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px ;">
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
                        <hr>
		</section>
    </body>
</html>

