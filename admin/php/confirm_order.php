<?php
 include '../../php/connectdb.php';

    $sql ="UPDATE `order` SET status = 'ได้รับการยืนยัน' WHERE order_no = ".$_GET['id'].";";
    $query = mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้วค่ะ');window.history.go(-1);</script>";
?>