<?php session_start();
    # connect Database Code 
    include '../php/connectdb.php'; 
    
    $sql1 = "select * from `order` where order_no =".$_GET['order_id'];
    $result1 = mysqli_query($conn,$sql1);
    $query = mysqli_fetch_array($result1);

    $sql = "select o.*,p.picture,p.pro_name from order_details o ,product p where p.pro_id = o.pro_id and order_no =".$_GET['order_id'];
    $result = mysqli_query($conn,$sql);
?>

<!-- HTML Zone  -->
<!DOCTYPE html>
<html lang="en">
    <!--Include Head Zone -->
    <head>
        <title>Admin : Order Details</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <?php include '../php/head.php' ?>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>
    <body style="background-color:#e6e6e6;">
        <!-- Menu Zone -->
        <?php include '../php/menu.php' ?>
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" >
                    <div class="panel panel-info">
                        <div class="panel-heading" style="text-align: right;font-size:16px;"> ยอดชำระ <?php echo $query['price'] ?> 
                        </div>
                        <div class="panel-body">
                        <h3 class="card-title" >รายละเอียดคำสั่งซื้อ : เลขที่ <?php echo $_GET['order_id'] ?></h3>
                            <div>
                                    <table class="table" style="width: 70%;" align="center">
                                        <thead>
                                            <tr>
                                                <th>ภาพสินค้า</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวน</th>
                                                <th>ราคา</th>
                                                <th>สลีป</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($result as $result){?>
                                        <tr>
                                            <td>
                                                <img src="../pic/<?php echo $result['picture'] ?>" style="width: 90px">
                                            </td>
                                            <td>
                                                <?php echo $result['pro_name'] ?>
                                            </td>
                                            <td>
                                                <?php echo $result['amount'] ?>
                                            </td>
                                            <td>
                                                <?php echo $result['price'] ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php 
                                    $sql = "select * from `order` where order_no =".$_GET['order_id'];
                                    $query = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_array($query)) {
                                        $address = $row['address'];}
                                ?>
                                สถานที่จัดส่ง : <?php echo $address ?>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>