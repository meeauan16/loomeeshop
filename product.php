<?php
	session_start();
	include 'php/connectdb.php';

	$sql = "select * from product where type = 'ตุ๊กตา'";
	$query = mysqli_query($conn,$sql);
 ?>

<html>
    <body>
    
    </body>
</html>

