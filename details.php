<!-- php zone -->
<?php 
    session_start();
    include 'php/connectdb.php' ;
    
    $sql = "select * from product where pro_id = ".$_GET['id'];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if (!$result) die('Query error: ');
?>

<!-- HTML Zone  -->
<!DOCTYPE html>
<html lang="en">
    <!--Include Head Zone -->
    <head>
        <title>Lookmeeshop : รายละเอียด </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
        <?php include 'php/head.php' ?>
    </head>
    

    <!-- Body Zone -->
    <body class="bg">
        <!-- Menu,Banner Zone -->
        <?php include 'php/menu.php' ?><br>
        <div class="container container-fluid">
            <!-- Brand / Name -->
            <div class="row">
                <div class="col-sm-10">
                    <h2>&nbsp;<?php echo $row['brand']," ",$row['pro_name'] ?></h2> <br>
                </div>
                <div class="col-sm-2">
                    <!-- Add to Cart -->
                    <?php 
                    if(!empty($_SESSION["mem_id"])){
                    ?>
                    <form action="cart.php?action=add&id=<?php echo $_GET['id'] ?>" method="POST">
                            <input type="hidden" name="id" value= "<?php echo $_GET['id'] ?>"> 
                            <input type="hidden" name="name" value= "<?php echo $row['pro_name'] ?>"> 
                            <input type="hidden" name="price" value= "<?php echo $row['price'] ?>"> 
                            <input type="hidden" name="pic" value= "<?php echo $row['picture'] ?>"> 
                            <input type="hidden" name="q" value= "<?php echo "1" ?>"> 
                            <input type="submit" class="btn btn-primary" name="add_product" value="เพิ่มลงในตระกร้า">
                    </form>
                    <?php } ?>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- images -->    
                        <div class="col-sm-5"><br>
                            <img src="pic/<?php echo $row['picture'] ?>" class="card-img-top" style="width: 300px ;">
                        </div>
                        
                        <!-- Phone Details -->
                        <div class="col-sm-7">
                            <h3><b>ข้อมูลทั่วไป</b></h3> 
                            <table id="detail_table" style="width: 80%; height:250px;">
                                <tr>
                                    <td><b>ชนิด </b></td><td><?php echo $row['type'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>แบรนด์ </b></td><td><?php echo $row['brand'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>ชื่อสินค้า </b></td><td><?php echo $row['pro_name'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>ขนาด </b></td><td><?php echo $row['size'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>รายละเอียด </b></td><td><?php echo $row['details'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>คงเหลือ(ชิ้น) </b></td><td><?php echo $row['amount'] ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>ราคา </b></td><td><?php echo $row['price'] ?> บาท</td>
                                </tr>
                            </table>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
        <br>
    </body>
</html>