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
  </style>
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
          
          <li><a href="index.php" id="auhome"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
          <li><a href="index.php" id="aaboutus"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
          <li><a href="index.php">Contact Us</a></li>
          <li><a href="index.php">Reach Me</a></li>
          <li><a href="regiSter.php">Sign Up<span class="glyphicon glyphicon-user"></span></a></li>
          <li><a href="login.php" >Sign In<span class="glyphicon glyphicon-log-in"></span></a></li>
          <li><a href="#">Forum</a></li>
          <li><a href="messages.php" id="amessage"><span class="l"></span><span class="r"></span><span class="t">Message</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<script type="text/javascript">
	function check(form1)
	{
		if( form1.u_name.value == "" )
		{
			alert ("in empty");
		// 	if (form1.u_name.value == "")
		// 	{
		// 		document.getElementById("a").innerHTML = "Please, Enter user name.";
		// 		//alert("Please, Enter The Username");
		// 		form1.u_name.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("a").innerHTML = "";
		// 		//alert("Please, Enter The Username");
		// 		form1.u_name.focus();
				
		// 	}
		// 	 if (form1.f_name.value == "")
		// 	{
		// 		document.getElementById("b").innerHTML = "Please, Enter full name.";
		// 		//alert ("Please,Please Enter The Fullname");
		// 		form1.f_name.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("b").innerHTML = "";
		// 		//alert ("Please,Please Enter The Fullname");
		// 		form1.f_name.focus();
		// 	}
		// 	 if (form1.pwd.value == "")
		// 	{
		// 		document.getElementById("c").innerHTML = "Please, Enter password.";
		// 		//alert ("Please,Please Enter The Password");
		// 		form1.pwd.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("c").innerHTML = "";
		// 		//alert ("Please,Please Enter The Password");
		// 		form1.pwd.focus();

		// 	}
			
		// 	 if (form1.e_mail.value == "")
		// 	{
		// 		document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
		// 		//alert ("Please,Please Enter The E-mail Address");
		// 		form1.e_mail.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("d").innerHTML = "";
		// 		//alert ("Please,Please Enter The E-mail Address");
		// 		form1.e_mail.focus();
		// 	}
		// 	 if (form1.gender.value == "")
		// 	{
		// 		document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
		// 		//alert("Please,Please Enter The Gender");
		// 		// form1.gender.focus();
				
		// 	}else
		// 	{
		// 		document.getElementById("spuid").innerHTML = "";
		// 		//alert("Please,Please Enter The Gender");
		// 		// form1.gender.focus();
		// 	}
		// 	 if (form1.dob.value == "")
		// 	{
		// 		document.getElementById("e").innerHTML = "Please, Enter date of birth.";
		// //		alert ("Please,Please Enter The Date Of Birth");
		// 		form1.dob.focus();
				
		// 	}
		// 	else
		// 	{
		// 		alert ("dob is", form1.dob.value, form1.u_name.value)
		// 		document.getElementById("e").innerHTML = "";
		// //		alert ("Please,Please Enter The Date Of Birth");
		// 		form1.dob.focus();

		// 	}
		// 	 if (form1.add.value == "")
		// 	{
		// 		document.getElementById("f").innerHTML = "Please, Enter address.";
		// 		//alert ("Please,Please Enter The Address");
		// 		form1.add.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("f").innerHTML = "";
		// 		//alert ("Please,Please Enter The Address");
		// 		form1.add.focus();
		// 	}
		// 	 if (form1.sta.value == "")
		// 	{
		// 		document.getElementById("g").innerHTML = "Please, Enter state.";
		// 		//alert ("Please,Please Enter The State");
		// 		form1.sta.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("g").innerHTML = "";
		// 		//alert ("Please,Please Enter The State");
		// 		form1.sta.focus();

		// 	}
		// 	 if (form1.cou.value == "")
		// 	{
		// 		document.getElementById("h").innerHTML = "Please, Enter country.";
		// 		//alert ("Please,Please Enter The Country");
		// 		form1.cou.focus();
				
		// 	}
		// 	else
		// 	{
		// 		document.getElementById("h").innerHTML = "";
		// 		//alert ("Please,Please Enter The Country");
		// 		form1.cou.focus();
		// 	}
			return false;
		}
		else{
			alert("data is", form1.u_name.value);
			return true;
		}
	}
</script>


<div>

<h1>Register User</h1>
<form class="form-horizontal" role="form" method="post" action="registerH.php" onsubmit="return check(this)" enctype="multipart/form-data" style="background-color:cobalt">
    <div class="form-group">
        <label class="control-label col-sm-2" for="username">Username *</label>
            <div class="col-sm-4">
                <input type="username" name="u_name" class="form-control" id="a" placeholder="Choose Username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$" title="Must starts with one alphabet and may be combination of alphanumeric" required>
            </div>
  </div>
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Fullname *</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="b" name="f_name" placeholder="fullname" value="" pattern="^[a-zA-Z]{5,20}$" title="Must be combination of alphabets and atleast 5 letters" required>
        </div>
</div>
<div class="form-group">
    <label  for="pwd" class="control-label col-sm-2" >Password *</label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="c" name="pwd" placeholder="" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>
</div>

<div class="form-group">
    <label for="email" class="col-sm-2 control-label">E_mail *</label>
        <div class="col-sm-4">
            <input type="email" class="form-control" id="d" name="e_mail" placeholder="example@domain.com" value="" required>
        </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Gender *</label>
        <div class="radio">
            <label><input type="radio" name="gender" value="1" required>Male</label>
            <label><input type="radio" name="gender" value="2" required>Female</label><span id='spuid' style="color: red;"></span>
        </div>
</div>
            
<!-- <div class="form-group">
    <label class="col-sm-2 control-label input -sm stronly" for="txt_dob">Date Of Birth</label>
        <input type="text" id="e" name="dob" class="form-control input-sm" style="width: 150px" placeholder="DDMMYYYY" required maxlength="8" data-validation-required-message="DOB is required"></input>
</div> -->
        	

<div class="form-group">
    <label class="col-sm-2 control-label" for="profile pic">Image</label>
        <input type="file" id="profie pic" name="ima"></input>
</div>

<div class="form-control-group">
    <label class="col-sm-2 control-label" for="message" >Address</label>
      <div class="controls">
            <textarea class="input-xlarge" name="add" id="f" rows="3" cols="57"></textarea>
      </div>
</div>


<div class="form-group">
    <label for="state" class="col-sm-2 control-label">State</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="g" name="sta" placeholder="" value="">
        </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Country</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="h" name="cou" placeholder="India" value="India" readonly="">
        </div>
</div>


<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
</div>
</div>
<! Will be used to display an alert to the user>
</form>
</div>





<?php require("footer.php");?>
</body>
</html>
