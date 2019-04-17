<?php 
	if(!isset($_SESSION["fn"]))
		header("location:./login.php");
?>
<br><br><br><br><br><br>
<span style="float:right">
welcome<a href="aedit.php"><img src="../res/images/useri.jpg" class="imagedel" height="100" width="100"><?php echo $_SESSION["fn"];?></a>, [ <a href="logout.php">log-out</a> ] 
</span>