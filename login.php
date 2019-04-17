<?php require("header.php");?>

<br>
<br>
<br>
<br>
<br>
<br>
<script type="text/javascript">
	function check(f)
	{
		if (f.uid.value == "")
		{
			//alert("Please, enter user id");
			document.getElementById("spuid").innerHTML = "Please, Enter user id.";
			
			f.uid.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
//			alert ("Please, enter password");
document.getElementById("a").innerHTML = "Please,Enter the password";
			
			f.pwd.focus();
			return false;
		}
		else
			return true;
	}
</script>
<h3>Login Page</h3>
<form class="form-horizontal" role="form" action="loginH.php" method="POST" >

<div class="form-group">
	<label for="username" class="col-sm-2 control-label">username</label>
		<div class="col-sm-4">
			<input type="username" class="form-control" id="spuid" name="uid" placeholder="" value="">
		</div>
</div>

<div class="form-group">
    <label  for="pwd" class="control-label col-sm-2" >password</label>
    <div class="col-sm-4">
		<input type="password" class="form-control" id="a" name="pwd" placeholder="" value="">
	</div>
</div>
<div class="form-group">
	<div class="col-sm-10 col-sm-offset-2">
		<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
	</div>
</div>


<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php require("footer.php");?>

</body>
</html>
