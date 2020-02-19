<?php 
    include 'connectdb.php';
    @session_start();
    
        if($_POST['email'] == 'admin' and $_POST['password'] == '1234' ){
            # Add name to session "login"
            $_SESSION["admin_login"] = $_POST['email'];
            header("Location: ../order.php");
        } else {
            echo "<script>alert('ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง โปรดตรวจสอบอีกครั้ง');window.history.back();</script>";
        }
?>