<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>

<a href="javascript:void()" onclick="history.back()">Back</a>

<hr/>

<?php
	$rows = ExecuteQuery ("SELECT user_id_from, (select fullname from user where user_id=user_id_from) as fromname,  user_id_to, (select fullname from user where user_id=user_id_to) as toname FROM chatmaster where chat_id=$_GET[id]");
	
	$row = mysql_fetch_array ($rows);
	
	$fromid = $row["user_id_from"];
	$toid = $row["user_id_to"];
	$from = $row["fromname"];
	$to = $row["toname"];

	$sql = "SELECT * FROM chat WHERE chat_id=$_GET[id] ORDER BY cdatetime ASC";
	$rows = ExecuteQuery ($sql);


	while ($row = mysql_fetch_array($rows))
	{
		if ($row["user_id"] == $fromid)
			echo "<strong>$from</strong><br/><br/>";
		else
			echo "<strong>$to</strong><br/><br/>";
			
		echo "$row[message]";
		
		echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>
<script type="text/javascript">
	function check(f)
	{
		if(f.tt.value=="")
		{
			document.getElementById("a").innerHTML="Please,Enter the reply message";
			//alert("Please,Enter The Reply Message");
			f.tt.focus();
			return false;
			
			}
			else
			return true;
		}
</script>
<form action="writemsg.php" method="POST" onsubmit="return check(this)">
    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="chid" />
		<div class="form-group">
  <label class="control-label col-sm-2" for="comment">Write:</label>
  <div class="row">
  	<div class="col-sm-4" align="left">
  		<textarea class="form-control" name="tt" rows="1" cols="5"  id="a"></textarea>
	</div>
   </div>
</div>


<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="SEND">Send</button>

</div>
</form>
<br>
<br>

<?php require("footer.php");?>