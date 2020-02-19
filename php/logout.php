<?php 
    @session_start();
    
    session_destroy();
    echo "<script>alert('ลงชื่อออกสำเร็จ');window.history.back();</script>";
?>