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

  <style>
body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:300px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:530px;color:; background-color:lightblue;}
  #section3 {padding-top:50px;height:380px;color:; background-color:green;}
  #section4 {padding-top:50px;height:450px;color: ;background-color:; } 
  </style>
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
          
          <li><a href="#section1" id="auhome"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
          <li><a href="#section2" id="aaboutus"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
          <li><a href="#section3">Contact Us</a></li>
          <li><a href="#section4">Reach Me</a></li>
          <li><a href="regiSter.php">Sign Up<span class="glyphicon glyphicon-user"></span></a></li>
          <li><a href="login.php" >Sign In<span class="glyphicon glyphicon-log-in"></span></a></li>
          <li><a href="forum.php">Forum</a></li>
          <li><a href="messages.php" id="amessage"><span class="l"></span><span class="r"></span><span class="t">Message</span></a></li>
          <li><a href="uhome.php" id="uhome"><span class="l"></span><span class="r"></span><span class="t">UHome</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br><br><br><br><br>

<div id="section1" class="container-fluid">
    <div  class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!--<li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>-->
  </ol>

  <!-- Wrapper for slides-->
<div class="row">
  <div class="col-sm-12" align="center">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Images/1.jpg" align="center" alt="Apple" height="1366" width="768">
    </div>

    <div class="item">
      <img src="Images/2.jpg" align="center" alt="Apple" height="1366" width="768">
    </div>

    <!--<div class="item">
      <img src="Images/applie3.jpg"  align="center" alt="Apple" height="1366" width="768">
    </div>

    <div class="item">
      <img src="Images/applie4.jpg"  align="center" alt="Apple" height="1366" width="768">
    </div>-->
  </div>
<!--Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>  
  </div>
</div>
</div>
</div>
</div>

<div id="section2" class="container-fluid">
<div class="container-fluid">
  <section id="section2">
      <div class="row">
        <div class="col-md-12"> 
          <div class="icon-wrap">
              <i class="fa fa-group"></i>
          </div>

           <h1 align="center">About Us.</h1>

           <p class="lead" align="center"><b>The Online Discussion Forum(ODS)</b> is a discussion forum that gives information about various programming languages, general knowledge related questions, information related to Asp.net,Vb.net,Php,Os related questions ,etc. </p>


         </div>

      </div>end section-header                

      <div class="row section-content">
        
      <div class="col-md-6">
          <h3>Our Process.</h3>

          <p>This forum is useful for the beginners to get information  related to  various topics. There is a centralized database in which all the information is managed. The administrator acts as the highest authority and has the rights to update the database. <!--There are also connected user who acts as an intermediate user who can also answer the questions of the end-user if they know it. The intermediate user can also cache the information provided by the administrator to the end-user.This cached information is useful when the same question is repeated some another user , then the intermediate user can get the information from cache memory and reply to the end-user. This reduces the response time.--></p> 
        </div>

        <div class="col-md-6">
          <h3>Our Approach.</h3>
          <p >Whenever a question is asked by the end-user to get information ,it is received by the administrator who fetches the information from the database and reply to the end-user. Whenever the new information is arrived it is updated by the end-user.<!-- The end-user is provided with the access rights which is  managed by the administrator. The access to the database is provided to the end-user according to these rights only.--></p>
        </div> 
        <div class="col-md-6">
          <h3>Our Vision.</h3>
          <p>The technological discussion form gives specific information to the programmers about programming languages.It is also helpful for the beginners to gain information about programming languages from the same site only.<!--It is very useful site for the beginners to gain information as well as learn new programming languages very easily.The goal of this site is to provide information about the technical related questions and language related questions to the end user-->.</p>

        </div>
        <div class="col-md-6">
          <h3>Our Objectives.</h3>
          <p>the questions is replied by either the administrator or the admin-connected user.When the administrator replies to the questions the admin-connected user will cache them in the memory.This will  helpful when the<!-- user again ask about the same questions the admin-connected will the  reply the answer of the question directly from the cache-memory--></p>
        </div>            
      </div>
      </div>
</section>
      </div>
</div>

<form class="form-horizontal" role="form" action="QueriesH.php" method="POST" >
<div id="section3" class="container-fluid">
<div class="container-fluid" >

      <h4 align="centre">Queries? Write To Me</h4>
  <section id="Contact Us">
  <form class="form-horizontal" role="form">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Full Name:</label>
        <div class="col-sm-4">
            <input type="name" class="form-control" id="name" placeholder="Enter Full name">
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="comment">Message:</label>
        <div class="row">
          <div class="col-sm-4" align="center">
              <textarea class="form-control" rows="5" cols="5"  id="comment"></textarea>
          </div>
        </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default">send</button>
       <button type="reset" class="btn btn-default">reset</button>
   </div>
  </div>
</form>
</section>
</div>
</div>

<div id="section4" class="container-fluid">
<div class="container-fluid" >
<div class="row">
        <div class="panel panel-default"  >
           <div class="panel-body">
            <h2>Reach Me </h2>
              <div class="col-xs-3">
                <div style="text-align:center">
                <img src="images/coader.png" align="center" height="30px" weight="30px">
                <h3>Programmer</h3>
                You can thank all the crazy programming here to this guy.
              </div>  
            </div>
            <div class="col-xs-3">
              <div style="text-align:center">
                <img src="images/artist.svg" align="center" height="30px" weight="30px">              
              <h3>Artist</h3>
              All the images here are hand drawn by this man.
              </div>  
            </div>
            <div class="col-xs-3">
              <div style="text-align:center">
                <img src="images/designer.png" align="center" height="30px" weight="30px">
                <h3>Designer</h3>
                This pretty site and the copy it holds are all thanks to this guy.
              </div>
            </div>
            <div class="col-xs-3">
              <div style="text-align:center">
                <h3>Reach Me</h3>
                Have a question or feedback? Contact me!</br>
                <a href="http://gmail.com"><img src="images/mail.png" height="20" width="20"> Contact</a>
                <h3>Follow Me</h3>
                <a href="http://fb.com"><img src="images/fb.png" height="20" width="20"> Facebook</a>
                <a href="http://twitter.com"><img src="images/twitter.png" height="20" width="20"> Twitter</a></br>
              </div>
            </div>

            </div>
          <div class="panel-footer" style="background-color: green">
            <h6 align="center">Copyright &#169; Naresh 2k16</h6>
          </div>
        </div>
        </div>
  </div>
</div>
</body>
</html>
