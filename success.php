<!-- php zone -->
<?php 
    session_start();
    include 'php/connectdb.php' ;

    if(empty($_SESSION["mem_id"])){
        echo "<script>alert('โปรดลงชื่อเข้าใช้งาน);window.history.back();</script>";
    }
    
    $mem_id = $_SESSION['mem_id'];
    $total = $_SESSION['total'];
    $address = $_POST['address'];

    $target_dir = "payment/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "insert into `order`(order_no,mem_id,price,address,status,payment) values (NULL,".$mem_id.",".$total.",'".$_POST['address']."','คำสั่งซื้อใหม่','".$_FILES['fileToUpload']['name']."')";
        $result = mysqli_query($conn,$sql);
        if (!$result) die('Query error: '.mysqli_error($result));
        
    }} 

    $sql2 = "SELECT MAX(order_no) AS order_id FROM `order` WHERE mem_id = " . $mem_id ."";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_array($result2);
    if (!$result2) die('Query error: ' . mysqli_error($result2));

    $order_id = $row2['order_id'];

    foreach($_SESSION['shopping_cart'] as $key => $value){

        $sub_total = $value['item_price']*$value['item_q'];
        $sql3 = "insert into order_details(order_no,pro_id,price,amount) values (". $order_id .",".$value['item_id'].",".$sub_total.",".$value['item_q'].")";
        $result3 = mysqli_query($conn,$sql3);
    }

    unset($_SESSION['shopping_cart']);
    echo "<script>alert('สั่งซื้อสินค้าเรียบร้อยและค่ะ');</script>";

?>

<!-- HTML Zone -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lookmeeshop : ขอบคุณค่ะ </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<?php include 'php/head.php' ?>
    </head>

    <!-- Body Zone -->
    <body class="bg">
        <!-- Menu,Banner Zone -->
        <?php include 'php/menu.php' ?>
        <br>

        <div class="container container-fluid">
            <div class="row">
                <h2>&nbsp;เราได้รับคำสั่งซื้อของคุณแล้ว</h2><br>
                <div class="container">
                <h4>ขอบคุณที่เลือกซื้อสินค้าจาก Fesival <br><br>
                ติดตามสถานะคำสั่งซื้อของคุณได้ <a href="myorder.php">ที่นี่</a> <br></br>
                ต้องการความช่วยเหลือเพิ่มเติม ติดต่อ 044-007-215 (จ-ศ 8:30-18:00, ส-อ 11:00- 15:00 )</h4>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </body>
</html>