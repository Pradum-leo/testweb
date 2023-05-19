<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$email=$_POST['email']; 
//$mobile=$_POST['mobileno'];
$message=$_POST['message']; 
$sql="INSERT INTO  tblcontact(FullName,EmailId,Message) VALUES(:firstname,:email,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=email], select, textarea {
  border-radius: 15px;
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  border-radius:15px;
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: cyan;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color:lightgreen;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
   
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.bimg {
  /* The image used */
  background-image: url("backcontact.jpg");

  min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.fa {
  padding: 20px;
  font-size: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white; 
}

.fa-google {
  background: #dd4b39;
  color: white;
}




.content {
  border-radius: 5px;
  margin: 5px;
  background: white;
  padding-top: 15px;
  padding-bottom: 25px;
  background-color:gray;
  display: flex;
  align-items: center;
  justify-content: center;

}
  
  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

.navbar {
  overflow: hidden;
  position: fixed;
  top: 0;
  left:0;
  width: 100%;
  background-color: black; 
  
}


.navbar a {
  border-radius: 5px;
  float: left;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: lightblue;
}
.navbar a:hover:not(.aactive,.oactive,.hactive,.cactive) {
  background-color:lightblue;
}

.aactive,.oactive,.hactive,.cactive {
  background-color: red;
}
.same {
  padding: 16px;
  margin-top: 30px;
  height: auto;
}






</style>

	<title>TRIP</title>
</head>
<body>
<div class="bimg">
<div class="navbar">
  <a href="index.php">Home</a>
  <a href="offers.php">Offers</a>
  <a class="cactive" href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>
 <a style="float:right" href="signin.php">Login</a>
  <a style="float:right" href="signup.php">Register</a>

</div>

<div class="same">
	<h2></h2>
	<p></p>

<div class="container">
 

  <div style="text-align:center">
    <h2 style="color: white">Contact Us</h2>
    <p style="color: white">Leave us a message:</p>
  </div>
  <hr>
  <div class="row">

    <div class="column">
      <img src="flip.jpg" style="width:100%">
    </div>

    <div class="column">
      
      <form name="contact" method="post">
     <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <label style="color: white" for="name">Name</label>
        <input type="text" name="firstname" id="firstname"  placeholder="Your name.." required="">
        <label style="color: white" for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="EmailId" required="">
        <label style="color: white" for="message" >Subject</label>
        <textarea  name="message"  id="message" placeholder="Write something.." required="" style="height:170px"></textarea>
        <input type="submit" name="submit" value="Submit">
      </form>

    </div>
  </div>
</div>

<div class="content" style="font-size: 20px;font-weight: bold;text-align: center;">
	
	<div class="rate">RATE US: <br>
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="">1 star</label>
  </div>

</div>


</div>
<div class="content" >
<div>
<h1 style="text-align: center"> CONTACT US </h1>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>

</div>
</div>
</div>
</body>
</html> 

