<?php  require("header.php"); ?>
<script type="text/javascript">
	document.getElementById("acontact").className="active";
</script>
<br>
<br>
<br>
<br>
<br>

<h1>Contact Us</h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="support_files/bootstrap/css/bootstrap.min.css">
  <script src="support_files/bootstrap/js/jquery-1.11.3.js"></script>
  <script src="support_files/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Modal -->
       <form class="form-horizontal  " role="form">
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

    
<?php require("footer.php"); ?>