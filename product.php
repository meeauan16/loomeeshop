<?php
	session_start();
	include 'php/connectdb.php';

	if(empty($_GET['search'])){
        $sql = "select * from product";
        $result = mysqli_query($conn,$sql);
        if (!$result) die('Query error: ');
    } else {
        $search = $_GET['search'];
        $s = '%'.$search.'%';
        $sql = "select * from product where type = '$s' OR pro_name LIKE '$s'";
        $result = mysqli_query($conn,$sql);
        if (!$result) die('Query error: ');
    }
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
	<?php include 'php/menu.php' ?>
	
		<div class="container">
		<h3>สินค้า</h3>
		<form method="GET" action="product.php" align="right">
					<input type="text" name="search"  placeholder="กรอกชื่อสินค้า" style="width: 20%" id="input">
					<input type="submit" class="btn btn-primary" value="ค้นหา">
					<a href="product.php" class="btn btn-primary" value="รีเซ็ต">รีเซ็ต</a>
		</form>
			<section id="1">
				<hr>
				<?php foreach($result as $result){ ?>
					<form action="details.php" method="get">
						<div class="col-sm-3" style="padding-top: 20px;">
							<div class="card" style="width: 18rem;height:270px">
								<img src="pic/<?php echo $result['picture'] ?> " class="card-img-top" style="width: 150px; height:180px">
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

