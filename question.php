<?php  session_start();
 require("header.php"); 
	require("checkuser.php");
?>
	<script type="text/javascript">
		function check(f)
		{
			if(f.head.value=="")
			{
				document.getElementById("a").innerHTML="Please,Enter the heading";
				//alert("Please,Enter The Heading");
				f.head.focus();
				return false;
				
				}
				else if(f.ta.value=="")
				{
					document.getElementById("b").innerHTML="Please,Enter The Question";
					//alert("Please,Enter The Question")}
					f.ta.focus();
					return false;
		}
			   else
			   return true;
			}
			
			
	</script>

<form action="questionH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" value="<?php echo $_GET["stid"] ?>" name="stid" />

<div class="form-group">
  <label class="control-label col-sm-2" for="comment">Heading:</label>
  <div class="row">
  	<div class="col-sm-4" align="left">
  		<textarea class="form-control" name="head" rows="1" cols="5"  id="a"></textarea>
	</div>
   </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="comment">Enter Your Question:</label>
  <div class="row">
  	<div class="col-sm-4" align="left">
  		<textarea class="form-control" name="ta" rows="5" cols="5"  id="b"></textarea>
	</div>
   </div>
</div>

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" value="Go">Post</button>
      <button type="reset" class="btn btn-default" value="Clear">Clear</button>
    </div>
</div>
</form>
<br>
<br>
<br>


<?php require("footer.php"); ?>