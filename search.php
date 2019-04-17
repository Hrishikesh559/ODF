<?php 
session_start();
require("header.php");
require("checkUser.php")
?>
<script type="text/javascript">
function check(f)
{
 if (f.utos.value == "")
		{ document.getElementById("spuid").innerHTML="Please enter the name of the person that you want to chat...";
			
			//alert ("Please,Please Enter The Name Of The Person That You Want To Chat With.....");
			f.utos.focus();
			return false;
		}
		else 
		return true;
}
</script>

<form action="" method="post" onsubmit="return check(this)">
    	 

		<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Enter name to search</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="spuid" name="utos" value="">
        </div>
</div>

    	 <div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<input id="submit" name="submit" type="submit" value="Click Me" class="btn btn-primary">
</div>
       
</form>

<?php
if (isset($_POST['utos']))
{
$uto=$_POST['utos'];

$sql="SELECT * FROM user WHERE fullname LIKE '$uto%'";
$rows=ExecuteQuery($sql);

if (mysql_num_rows($rows) > 0)
{
	echo "<table cellpadding='2' cellspacing='2'>";
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<tr>";
		echo "<td valign='top'><img src='$row[uimg]' alt='' style='height:100px; width:100px;' />";
		echo "<td valign='top'><a href=message.php?id=$row[user_id] style='font-weight:bold;'>$row[fullname]</a> <br/>";
		echo ($row['gender'] == 1 ? "Male" : "Female")."<br/>";
		echo $row['country'];
		echo "<br/>";
		echo "<br/>";
		echo "<a href=message.php?id=$row[user_id] style='font-weight:bold;'><input type='btn btn-primary' value='Send Message'></a>";
		echo "</tr>";
	}
	
	echo "</table>";
}
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require("footer.php")?>