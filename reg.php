<?php 
	session_start();

	$server = '127.0.0.1';
	$username = 'root';
	$password = '';
	$db = 'lookmeeshop';

	$conn = mysqli_connect($server,$username,$password,$db);
	$sql = "insert into member(username,password,mem_id,mem_name,birthday,sex,address,tel) values('".$_POST['username']."','".$_POST['password']."',null,'".$_POST['name']."','".$_POST['bd']."','".$_POST['sex']."','".$_POST['address']."',".$_POST['tel'].")";
	$query = mysqli_query($conn,$sql);
	header( "location: index.php" );

?>