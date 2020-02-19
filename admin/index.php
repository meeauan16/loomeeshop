<?php session_start();
    # connect Database Code 
    include '../php/connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">
    <!--Include Head Zone -->
    <head>
        <?php include '../php/head.php' ?>
        <title>Admin : Login </title>
        
    </head>
    <body style="background-color:#d3d3d3;">
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- menu phone screen size -->
            <div class="navbar-header" style="padding-left: 2%">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> เมนู <i class="fa fa-bars"></i> </button>
                <img src="../pic/logo.png"  style="padding-top: 8px; width:150px;">
            </div>
 
            <!-- Collect the nav links, forms, and other content for toggling -->
        </nav>
    </div>
        <div>
            <div>
                <img src="../img/bgg.png" style="position: absolute;width:auto">
            </div>
            <div class="wrap" style="padding-left: 70%; padding-right: 2%;padding-top:15%;">
            
                <form class="form-group" align="center" action="php/login.php" method="POST" style="position: absolute;"> 
                    <h2 style="color: wheat;text-shadow: 2px 2px #060058;">ลงชื่อเข้าใช้งาน</h2><br>
                    <input name="email" type="text" class="form-control" placeholder="ชื่อผู้ใช้" required style="width: 300px"> <br>
                    <input name="password" type="password" class="form-control" placeholder="รหัสผ่าน" required > <br>
                    <input type="submit" class="btn btn-primary" value="เข้าสู่ระบบ" style="width: 30%">
                </form>
            </div>
        </div>
         
    </body>

</html>