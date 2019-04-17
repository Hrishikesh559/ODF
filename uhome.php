<?php 
	session_start();
	require("header1.php");
	require("checkUser.php");
?>
<br>
<br>


<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

<h4><a href="que.php">Questions</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answers </a></h4>
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			echo "<div class='panel panel-default'>";
			echo "<div class='panel body'> ";
			echo "<div class='well well-sm'><span class='head'><b><a href='questionview.php?qid=$row[question_id]' >$row[heading]</b></a></span></div>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg' height='100' width='100'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>";
			
			
			echo "</table></span><div class='h10'></div>";
			echo "</div>";
			echo  "</div>";
		}
	
?>

<?php require("footer.php");?>