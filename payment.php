<!-- php zone -->
<?php 
    session_start();
    include 'php/connectdb.php' ;
    if(empty($_SESSION["mem_id"])){
        echo "<script>alert('โปรดลงชื่อเข้าใช้งาน);window.history.back();</script>";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lookmeeshop : จ่ายตัง </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<?php include 'php/head.php' ?>
    </head>
    <body>
    <?php include 'php/menu.php' ?>
        
        <div class="container container-fluid">
                <div class="row">
                    <h2>&nbsp;&nbsp;ยอดที่ต้องชำระ : <?php echo $_SESSION['total'] ?> </h2><br>
                    <div class="container">
                    <form action="success.php" method="POST" enctype="multipart/form-data">
                        <div class="container" id="credit"> 
                        <h3>โอนเงินที่ พร้อมเพย์ 0904295715 น.ส.สิรินาฎ บุญมา</h3>
                            <div class="form-group col-md-12">
                                <label for="card-number">อัพโหลดหลักฐานการโอนเงิน</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="fileToUpload" id="card-number" data-bluesnap="ccn">
                                    <div id="card-logo" class="input-group-addon"><img src="https://files.readme.io/d1a25b4-generic-card.png" height="20px"></div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="card-number">ที่อยู่ในการจัดส่งสินค้า</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" id="card-number" data-bluesnap="ccn">
                                    <div id="card-logo" class="input-group-addon"><img src="https://files.readme.io/d1a25b4-generic-card.png" height="20px"></div>
                                </div>
                            </div>
                        </div>
                        <div align="right" id="credit">
                                <a href="cart.php" class="btn btn-default">ยกเลิก</a>
                                <input class="btn btn-success" type="submit" style="width: 15%" value="ถัดไป"> <br><br><br><br><br> <hr class="style1">
                        </div>
                        &nbsp;&nbsp;&nbsp; ต้องการความช่วยเหลือเพิ่มเติม ติดต่อ 044-007-215 (จ-ศ 8:30-18:00, ส-อ 11:00- 15:00 ) <br> <div>&nbsp;</div>   
                    </form>
                    </div>
                </div>
            </div>
    </body>
</html>