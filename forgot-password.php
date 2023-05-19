<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit50']))
	{
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
	$sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Email id or Mobile no is invalid";	
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
<title>Password Change</title>

  <style>
  	
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
.fbox{
	border:2px solid blue;
	border-radius: 8px;
	border-bottom-color: black;
}
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: red;
    color: white;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    color: white;
    background: green;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>

  <div class="navbar">
  <a href="index.php">Home</a>
  <a  href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>
 <!-- <a href="signin.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Register</a>-->
</div>
<div class="same">


	<div>
		<div class="heading" style="margin-top: 10px;">
		<h3>Recover Password</h3>
		</div>
		<form name="chngpwd" method="post" onSubmit="return valid();">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<div class="fbox">
		<input type="email" name="email" id="email" placeholder="Registered Email"  required="">	
		<input type="text" name="mobile"  id="mobile" placeholder="Registered Mobile no"  pattern="[1-9]{1}[0-9]{9}" required="">
        <input type="password"  name="newpassword" id="newpassword"   placeholder="New Password" required="">
	    <input type="password"  name="confirmpassword" id="confirmpassword"  placeholder="Confrim Password" required="">
	    <label>
        <input type="checkbox" onclick="myFunction()">Show Password</label>
	    <button type="submit" name="submit50" class="registerbtn">Change</button>

		</div>
			</form>

		
	</div>

	<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("newpassword");
  var y=document.getElementById("confirmpassword");
  if (x.type === "password" || y.type === "password" ) {
    x.type = "text";
    y.type="text";
  } else {
    x.type = "password";
    y.type="password";
  }
}

</script>
</div>
</body>
</html>