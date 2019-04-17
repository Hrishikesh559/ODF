<?php require_once("utility.php"); 
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="support_files/bootstrap/css/bootstrap.min.css">
  <script src="support_files/bootstrap/js/jquery-1.11.3.js"></script>
  <script src="support_files/bootstrap/js/bootstrap.min.js"></script>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background-color:Snow">
  <h1 align="center">Online Discussion Forum</h1>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
    </div>
</div>

 <a class="navbar-brand" href="#">Online Discussion Forum</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
          <li><a href="home.php" id="ahome"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
            <li>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="amanage" style="background-color: lightblack">Manage
                    <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="background-color: white">
                            <li><a href="topic.php">Manage Topic</a></li>
                            <li><a href="subtopic.php">Manage SubTopic</a></li>
                        </ul>
            </div>
            </li>
          <li><a href="messages.php" id="amessage"><span class="l"></span><span class="r"></span><span class="t">Message</span></a></li>
        </ul>
          </li>
      </ul>

      </div>
    </div>
  </div>
</nav>
