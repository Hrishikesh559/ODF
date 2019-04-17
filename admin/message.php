<?php 
session_start();
require("header.php");
require("checkUser.php");

$sql="SELECT * from user where user_id=$_GET[id]";

$rows=ExecuteQuery($sql);
$row = mysql_fetch_array($rows);
?>
<script type="text/javascript">
function check(f)
{
	if(f.tt.value=="")	
	{
		document.getElementById("a").innerHTML="Please,Enter the message";
		//alert("Please,Enter The Question");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}

</script>
<br><br><br>
<form action="messageH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" name="uto" value="<?php echo $_GET['id'] ?>" />

<div class="form-group">
  <label class="control-label col-sm-2" for="comment">To:<?php echo $row['fullname']; ?></label>
  <div class="row">
  	<div class="col-sm-4" align="left">
  		<textarea class="form-control" name="tt" rows="5" cols="5"  id="a"></textarea>
	</div>
   </div>
</div>

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="Go">Send</button>
    </div>
</div>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php require("footer.php")?>