<?php
error_reporting(0);
session_start();
include('config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('Location:thankyou.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('Location:thankyou.php');
}
}
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
	<title>sign up</title>
<style type="text/css">	
	* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email]{
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
.signin {
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
.rbox{
	border:2px solid blue;
	border-radius: 8px;
	border-bottom-color: black;
}
</style>
	
</head>
<body>

  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>

</div>
<div class="same">


<form name="signup" method="post" style="margin-top: 20px;">
	
		<div class="heading">
<h3 >Create your account </h3>
</div>
<div class="rbox">
<input type="text" value="" placeholder="Full Name" name="fname" autocomplete="off" required="">
<input type="text" value="" placeholder="Mobile number" maxlength="10" name="mobilenumber"  pattern="[1-9]{1}[0-9]{9}" autocomplete="off" required="">
<input type="email" value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">	
<span id="user-availability-status" style="font-size:12px;"></span> 
<input type="password" value="" placeholder="Password" id="password" name="password" required="">	
<label>
<input type="checkbox" onclick="myFunction()">Show Password</label>
<input type="submit" name="submit" class="registerbtn" id="submit" value="CREATE ACCOUNT">
</div>
</form>

							

<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>



<div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
<!--Javascript for check email availability-->
<script type="text/Javascript">
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").php(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
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