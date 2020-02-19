<?php
	session_start();
	include 'php/connectdb.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>หน้าแรก</title>
	<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover {
		  background-color: #111;
		}

		img {
			width: 100%;
		}

		#login {
			float: right;
		}


	</style>
</head>
<body>

<?php include 'php/menu.php' ?>
		<h1>โปรดกรอกข้อมูลเพื่อสมัครสมาชิก</h1> <br>
		<form action="php/reg.php" method="POST">
			<table>
				<tr>
					<td>
						Username :
					</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>
						Password :
					</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td>
						Name :
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						Birthday :
					</td>
					<td>
						<input type="text" name="bd">
					</td>
				</tr>
				<tr>
					<td>
						Sex :
					</td>
					<td>
						<input type="text" name="sex">
					</td>
				</tr>
				<tr>
					<td>
						Address :
					</td>
					<td>
						<input type="text" name="address">
					</td>
				</tr>
				<tr>
					<td>
						Tel. :
					</td>
					<td>
						<input type="text" name="tel">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="สมัครสมาชิกเลยจ้าาา">
					</td>
				</tr>
			</table>
			
		</form>
		
</body>
</html>

