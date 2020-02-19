<?php session_start();
    # connect Database Code 
    include '../php/connectdb.php'; 
    
    $sqll = "SELECT * FROM `order` ORDER BY order_no DESC";
    $resultl= mysqli_query($conn,$sqll);
?>

<!-- HTML Zone  -->
<!DOCTYPE html>
<html lang="en">
    <!--Include Head Zone -->
    <head>
        <title>Admin : Order</title>
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
                        <div class="card" style="background-color: white;" id="example2" >
                            <div class="card-header " style="padding: 2%">
                                <h3 class="card-title" >คำสั่งซื้อทั้งหมด</h3>
                            </div>
                            <div class="card-body">
                                <div>
                                    <table class="table table-hover" style="width: 95%" align="center">
                                        <thead>
                                            <tr>
                                                <th>เลขที่คำสั่งซื้อ</th>
                                                <th>ยอดชำระ</th>
                                                <th>สถานะคำสั่งซื้อ</th>
                                                <th>สลีป</th>
                                                <th>ปรับปรุงสถานะ</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($resultl as $resultl){?>
                                            <form action="order_detail.php" method="get">
                                        <tr>
                                            <td>
                                                <?php echo $resultl['order_no'] ?>
                                            </td>
                                            <td>
                                                <?php echo $resultl['price'] ?>
                                            </td>
                                            <td>
                                                <?php echo $resultl['status'] ?>
                                            </td>
                                            <td>
                                                <?php echo $resultl['payment'] ?>
                                            </td>
                                            <td><form action="order_detail.php" method="get">
                                                <a href="php/confirm_order.php?id=<?php echo $resultl['order_no'] ?> " class="btn btn-success">ยืนยัน</a>
                                                <a href="php/ship_order.php?id=<?php echo $resultl['order_no'] ?> " class="btn btn-success">จัดส่งแล้ว</a>
                                                
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-info" value="รายละเอียด">
                                                <input type="hidden" value="<?php echo $resultl['order_no'] ?>" name="order_id">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div><hr>
                                <div class="update">
                                    &nbsp;&nbsp; รีเฟรชเมื่อ <?php echo date("Y/m/d h:i:sa") ?><br>&nbsp;
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>