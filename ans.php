<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<?php
$sql="SELECT * from  answer,question where answer.user_id=$_SESSION[uid] and answer.question_id=question.question_id";
$result=ExecuteQuery($sql);

		while($row = mysql_fetch_array($result))
		{
		echo "<div class='panel panel-default'>";
		echo "<div class='panel body'>";
		/*echo "<span class='box2'>";*/
		echo "<div class='well well-sm'><a href='questionview.php?qid=$row[question_id]'><b><h5>$row[heading]</b></h5></a></div>";
		echo "</span>";
		echo  "<br/>";
		
		echo $row['answer_detail'];
		echo  "<br/>";
		
		
		echo $row['datetime'];
		echo  "<br/>";
		echo "</div>";
		echo "</div>";
		}
	

?>
<?php require("footer.php");?>