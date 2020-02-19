<?php 
    include 'connectdb.php';
    @session_start();
    
    $sql = "SELECT * FROM `member` where `username` ='".$_POST['username']."' AND `password` ='".$_POST['password']."'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
    $total = mysqli_num_rows($query);

        if($total > 0){
            $login = $result["mem_name"];
            $cus_id = $result["mem_id"];
            # Add name to session "login"
            $_SESSION["login"] = $login;
            $_SESSION["mem_id"] = $cus_id;

            echo "<script>window.history.go(-2);</script>";
        } else {
            echo "<script>alert('อีเมล์ หรือ รหัสผ่านไม่ถูกต้อง โปรดลงชื่อเข้าใช้ใหม่อีกครั้ง');window.history.back();</script>";
        }
?>