<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh->prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!DOCTYPE HTML>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
<title>sign in </title>
<style type="text/css">	
	* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
  border-radius: 10px;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
  background-color:gray;
  color: white;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 5px;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signup {
  background-color: black;
  text-align: center;
  border-radius: 15px;
  color: white;
}
body{
	background-color:lightblue;
}
.heading{
	text-align: center;
	color: white;
	font-weight: 20px;
	background-color: blue;
	padding: 3px;
	border-radius: 10px;
}
.lbox{
	border:2px solid blue;
	border-radius: 8px;
	border-bottom-color: black;
}
</style>
</head>
<body>

  <div class="navbar">
  <a href="index.php">Home</a>
  <a  href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>

</div>
<div class="same">

<div>
<form method="post" style="margin-top: 20px;" >
	<div class="heading" >
<h3>Signin with your account </h3>
</div>
<div class="lbox">
<input type="email" name="email" id="email" placeholder="Enter your Email"  required="">
<input type="password" name="password" id="password" placeholder="Password" value="" required="">
<label>
<input type="checkbox" onclick="myFunction()">Show Password</label>
<h4><a href="forgot-password.php">Forgot password ?</a></h4>
<input type="submit" class="registerbtn" name="signin" value="SIGNIN">
</div>
</form>

</div>
<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
<div class="container signup">
    <p>Don't have an account? <a href="signup.php">Sign up</a>.</p>
  </div>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</div>
</body>
</html>