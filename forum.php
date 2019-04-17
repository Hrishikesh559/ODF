<?php session_start();
 require("header.php");
 
 if ($_SESSION["fn"] == null){
 	header("location:unreg.php");
	exit();
 }
 
 require("checkUser.php");
 ?>
 
 <script type="text/javascript">
	document.getElementById("aforum").className="active";
</script>

<?php
	$topic = ExecuteQuery ("SELECT * FROM topic");
	
	while ($r1 = mysql_fetch_array($topic))
	{
			echo "<div class='table'>";
			echo "<div class='well well-sm' style='background-color:lightblack'>";
			echo "<div class='heading'>$r1[topic_name]</div></div>";
		
			$stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");	
			
			while ($r2 = mysql_fetch_array ($stopic) )
			{
				echo "<div class='box'>";
				echo "<div class='sub-heading'>
						<a href='questions.php?id=$r2[subtopic_id]'><b> $r2[subtopic_name]</b></a></div>";
				echo "<p>$r2[subtopic_description]</p>";
				echo "</div>";
			}
	}
	
	
?>

<?php require("footer.php"); ?>