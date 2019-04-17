
<?php session_start();
require("header.php");
require("checkUser.php")?>
<button><a class=".back_button" href="javascript:history.back(1)">Back</a></button>
<script>
.back_button {
display:block;
width:100px;
height:30px;
text­align:center;
background­color:yellow;
border:1px solid #000000;
}
</script>
<script type="text/javascript">
	function check(f)
	{
		if(f.ata.value=="")
		{
			document.getElementById("spuid").innerHTML = "Please, Enter Answer.";
			//alert("Please,Enter The Answer")
			f.ata.focus();
			return false;
			}
			else
			return true;
		}

</script>

<?php
$sql="SELECT heading from question where question_id=$_GET[id]";
$rows=ExecuteQuery($sql);
$row=mysql_fetch_array($rows);
?>

<form action="answerH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["id"] ?>" name="qid" />

<b>RE : <?php echo $row["heading"] ?></b>
<div class="form-group">
  <label class="control-label col-sm-2" for="comment">Answer:</label>
  <div class="row">
  	<div class="col-sm-4" align="left">
  		<textarea class="form-control" name="ata" rows="5" cols="5"  id="spuid"></textarea>
	</div>
   </div>
</div>


<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="Go">submit</button>
      <button type="reset" class="btn btn-default">reset</button>
    </div>
</div>


</form>
<br>

<br>
<br>
<br>
<br>


<?php require("footer.php")?>