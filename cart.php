<?php 
    session_start();
    include 'php/connectdb.php' ;
    if(empty($_SESSION["mem_id"])){
        echo "<script>alert('โปรดลงชื่อเข้าใช้งาน);window.history.back();</script>";
    }
    

    
    if(isset($_POST['add_product'])){
        #check shoping cart session
        if(isset($_SESSION['shopping_cart'])){
            $item_array_id = array_column($_SESSION['shopping_cart'],'item_id');
            if(!in_array($_GET['id'],$item_array_id)){
                $item_array = array(
                    'item_id' => $_POST['id'],
                    'item_name' => $_POST['name'],
                    'item_q' => $_POST['q'],
                    'item_price' => $_POST['price'],
                    'item_pic' => $_POST['pic'],
                );
                $_SESSION['shopping_cart'][$_POST['id']] = $item_array;
            }else
            {   
                $q = $_SESSION['shopping_cart'][$_POST['id']]['item_q'];
                $_SESSION['shopping_cart'][$_POST['id']]['item_q'] = $q + 1;
                
            }
        }else{
            $item_array = array(
                'item_id' => $_POST['id'],
                'item_name' => $_POST['name'],
                'item_q' => $_POST['q'],
                'item_price' => $_POST['price'],
                'item_pic' => $_POST['pic'],
            );
            $_SESSION['shopping_cart'][$_POST['id']] = $item_array;
        }}
        if(isset($_GET['action'])){
            if($_GET['action']=='delete'){
                foreach($_SESSION['shopping_cart'] as $key => $value1){
                    if($value1['item_id'] == $_GET['id']){
                        unset($_SESSION['shopping_cart'][$key]);
                        echo "<script>alert('ลบสินค้าออกจากตะกร้าแล้ว')</script>";
                    }
                }
            }
    
        }
?>

<html>
        <head>
            <title>Lookmeeshop : รายละเอียด </title>
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <?php include 'php/head.php' ?>
        </head>
        <body>
        <?php include 'php/menu.php' ?><br>
        <div class="container container-fluid">
                <div class="row">
                    <h2>&nbsp;&nbsp;ตะกร้าของคุณ</h2><br>
                    <div class="container">
                    <table class="table">
                    <!-- pop data -->
                        <?php if(!empty($_SESSION['shopping_cart'])){
                            $total = 0;
                            foreach($_SESSION['shopping_cart'] as $key => $value1){ ?>
                        <tbody>
                            <tr>
                                <td align="center"><img id="img" src="pic/<?php echo $value1['item_pic'] ?>" style="width: 90px"></td>
                                <td>
                                    <table class="table ">
                                        <thead>
                                            <td id="t1" style="width: 40%"><b><a href="details.php?id=<?php echo $value1['item_id'] ?>"><?php echo $value1['item_name'] ?></a></b></td>
                                            <td><?php echo $value1['item_price'] ?></td>
                                            <td><?php echo $value1['item_q'] ?></td>
                                            <td><?php echo number_format($value1['item_price']*$value1['item_q']) ?></td>
                                        </thead>
                                        <tbody>
                                            <td colspan="3">ดำเนินการจัดส่งภายใน 3 - 7 วันทำการ - ราคารวมภาษี 7% - ไม่มีค่าธรรมเนียมการจัดส่ง </td>    
                                            <td><a href="cart.php?action=delete&id=<?php echo $value1['item_id']; ?>" style="color: #3366BB">ลบสินค้า</a></td>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>   <!-- Update Total -->
                        <?php $total = $total+($value1['item_price']*$value1['item_q']); } ?>
                            <tr>
                                <td></td>
                                <td align="right" >
                                    <table align="right">
                                        <tr>
                                            <td align="right">ราคาสินค้าในตะกร้า &nbsp;&nbsp;&nbsp; </td>
                                            <td align="right"><?php echo number_format($total*0.93,2) ?></td>
                                            <td>&nbsp; ฿ </td>
                                        </tr>
                                        <tr>
                                            <td align="right">ค่าจัดส่ง &nbsp;&nbsp;&nbsp; </td>
                                            <td align="right">0</td>
                                            <td>&nbsp; ฿ </td>
                                        </tr>
                                        <tr>
                                            <td align="right" >ภาษี(7%)&nbsp;&nbsp;&nbsp;</td>
                                            <td align="right"><?php echo number_format(($total*7)/100,2) ?></td>
                                            <td>&nbsp; ฿ </td>
                                        </tr>
                                        <tr>      
                                            <td align="right" colspan="3"><h4><b>ยอดที่ต้องชำระ <?php echo number_format($total,2) ; $_SESSION['total'] = $total;  ?> ฿</b></h4></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right" ><a href="payment.php" class="btn btn-success">ดำเนินการชำระเงิน</a></td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                        <?php } else { ?> 
                        <h4> &nbsp;&nbsp;&nbsp;&nbsp;ตะกร้าของคุณว่างเปล่า ไปช็อปปิ้งกันนนนน :) <a class="btn btn-default" href="product.php">สินค้าทั้งหมด</a> </h4>  <?php } ?>
                </div>
            </div>
        </body>
</html>