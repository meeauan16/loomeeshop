<?php 
	session_start();

	include 'connectdb.php';
	$sql = "insert into member(username,password,mem_name,birthday,sex,address,tel) values('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."','".$_POST['bd']."','".$_POST['sex']."','".$_POST['address']."',".$_POST['tel'].")";
	$query = mysqli_query($conn,$sql);
	header( "location: ../index.php" );

?>