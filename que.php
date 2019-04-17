<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	echo "<h4>My Question<img src='res/images/askq.jpg'  class='imagedel' width='50' height='50'/></h4>";
?>
<br>
<br>
<br>
<br>
<br>
<?php

$sql="SELECT * from question where user_id=$_SESSION[uid]";
$result=ExecuteQuery($sql);
	
		while($row = mysql_fetch_array($result))
		{
		echo "<div class='panel panel-default'>";
		echo "<div class='panel body'>";
		echo "<span class='box2'>";
		echo "<div class='well well-sm'><span class='head'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		echo "</span></div></div>";
		echo  "<br/>";
		echo $row['question_detail'];
		echo  "<br/>";
		
		echo $row['datetime'];
		echo "<div class='line'></div>";
				

		}

?>
<?php require("footer.php")?>