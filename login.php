<?php
	session_start();
	include 'php/connectdb.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>หน้าแรก</title>
    <?php include 'php/head.php' ?>
</head>
<body>

	<?php include 'php/menu.php' ?>
		<h1>เข้าสู่ระบบ</h1> <br>
		<form action="php/login.php" method="POST">
			<table>
				<tr>
					<td>
						Username :
					</td>
					<td>
                    &nbsp;&nbsp;<input type="text" name="username" class="form-group">
					</td>
				</tr>
				<tr>
					<td>
						Password :
					</td>
					<td>
                    &nbsp;&nbsp;<input type="password" name="password" class="form-group">
					</td>
				</tr>
				<tr>
					<td colspan="2">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="เข้าสู่ระบบเลยจ้าาา" class="btn btn-primary">
					</td>
				</tr>
			</table>
			
		</form>
		
</body>
</html>

