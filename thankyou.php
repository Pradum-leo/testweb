<?php
session_start();
error_reporting(0);
include('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TRIP Confirmation </title>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">


</head>
<body style="background-color: lightblue;">
	<div class="navbar">
  <a href="index.php">Home</a>
  <a  href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>
  <a href="signin.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Register</a>
</div>
<div class="same">
<?php include('header.php');?>
<div >
	<div >
		<h1 </h1>
	</div>
</div>

<div >
	<div >
	<h3 style="font-size: 30px;"> Confirmation</h3>
		<div >
			<div>
	

              <h4 style="font-size: 25px;">  <?php echo htmlentities($_SESSION['msg']);?></h4>
            
			</div>
		
			
	</div>
</div>
</div>
</h1>
</body>
</html>