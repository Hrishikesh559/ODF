<?php require("header.php");?>
<br><br><br><br><br><br>
<?php 
session_start();
session_destroy();
?>
<h1>log out</h1>
<p>
	You have logged out.  <a href="../index.php">Click here</a> to login again.
</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
<?php require("footer.php");?>