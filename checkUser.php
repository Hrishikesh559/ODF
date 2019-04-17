<?php 
	if(!isset($_SESSION["fn"]))
		header("location:index.php");
?>
<br>
<br>
<br>
<br>
<br>
<br>
<span style="text-align:right ;width:90%; display:block; margin-bottom:5px;">
	welcome <a href="uedit.php"><img src="res/images/1.jpg" class="imagedel" height="100" width="100"/><?php echo $_SESSION["fn"];
	?></a>, [ <a href="logout.php">log-out</a> ] 
</span>