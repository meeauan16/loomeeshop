<?php 
    if(empty($_SESSION['mem_id'])){
?>
<div> 
		<ul>
			<li><a href="index.php">หน้าแรก</a></li>
			<li><a href="product.php">สินค้า</a></li>
			<li><a href="about.php">เกี่ยวกับเรา</a></li>
			<li><a href="contact.php">ติดต่อเรา</a></li>
			<li id="login"><a href="register.php">สมัครสมาชิก</a></li>
			<li id="login"><a href="login.php">ล็อคอิน</a></li>
		</ul>
    </div>
    <?php } else { ?>
        <div> 
		<ul>
			<li><a href="index.php">หน้าแรก</a></li>
			<li><a href="product.php">สินค้า</a></li>
			<li><a href="about.php">เกี่ยวกับเรา</a></li>
			<li><a href="contact.php">ติดต่อเรา</a></li>
			<li id="login"><a href="cart.php">ตะกร้า</a></li>
			<li id="login"><a href="php/logout.php">ออกจากระบบ</a></li>
		</ul>
    </div> <?php } ?>
    
