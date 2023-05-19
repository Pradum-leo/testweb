<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
<title> TRIP</title>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
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
<style>

  @media screen and (max-width: 1000px) {
  .res img {
    width: 100%;
    height:200px;
    
  }
}
.bimg {
  /* The image used */
  background-image: url("backhom.jpg");

  min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 40px;
  text-align: center;
  background: black;
  color: white;
}

/* Increase the font size of the h1 element */
.header span {
  font-size: 40px;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: black;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}  


       #footer_social
       {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
font-size: 50px;
line-height: 1.125em;
font-weight: normal;
text-rendering: optimizeLegibility;
-webkit-font-smoothing: antialiased;
color: #333;
font-family: 'proxima-nova';
text-align: center;
box-sizing: border-box;
}
@media (max-width: 991px)
.room-left {
    float: left;
    width: 30%;
}
.rom-btm {
    margin-top: 2em;
    box-shadow: 0px 0px 5px -1px rgba(0, 0, 0, 0.37);
}

.img-responsive {
    display: block;
    width:450px;
    height: 318px;
   float: right;
}
@media (max-width: 991px)
.room-midle {
    padding: 0.5em 0.5em;
    float: left;
    width: 51%;
}
.pn{
  font-size: 25px;
  color: green;
}
.pt{
  font-size: 15px;
}
.pp{
  padding-left: 20px;
  font-size: 25px;
  color: black;
}
.holiday h3 {
    font-size: 2em;
    font-weight: 700;
    color:orange ;
}
a.view{
  padding: 6px 18px;
  font-weight: 700;
  color: white;
  background-color: blue;
  border:0;
  font-size: 30px;
  border-radius: 3px;
  margin-top: 20px;
  display: inline-block;
  text-decoration: none;
}
.clearfix{
display: table;
content: " ";
}

.lbox .rbox{
  position: relative;
  min-height: 1px;
  padding: 15px;
  padding-left: 15px;
}

.mbox{
 border:2px solid black;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
</style>
</head>
<body>
 <div class="bimg">
  <div class="header">
  <span>T R I P</span>
</div>
<div class="navbar">
  <a class="hactive"  href="index.php">Home</a>
  <a href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>
  <a href="signin.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Register</a>
</div>
<div class="same">
<div class="res">
  <img class="mySlides" src="summer.jpg"  width="100%">
  <img class="mySlides" src="winter.jpg" width="100%">
  <img class="mySlides" src="rain.jpg" width="100%">
  <a href="flight.php"><img class="mySlides" src="foffer.jpg" width="100%"></a>
  <img class="mySlides" src="hoffer.jpg" width="100%">
</div>
<hr>


<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
			  <div class="container">
    <div class="rom-btm">
        <div class="lbox room-left" >
          <img src="pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
        </div>
        <div class="mbox room-midle" >
          <h4 class="pn">Package Name: <?php echo htmlentities($result->PackageName);?></h4>
          <h6 class="pt">Package Type : <?php echo htmlentities($result->PackageType);?></h6>
          <p class="pl"><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
          <p class="pf"><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
          <h5 class="pp">Rate : ₹<?php echo htmlentities($result->PackagePrice);?></h5>
           <h3 style="font-size: 25px;color: green">Package Details</h3>
				<p style="padding-top: 1%;"><?php echo htmlentities($result->PackageDetails);?> </p>	
        </div>
      
 </div>

	
		</form>
<?php }} ?>


	</div>
</div>



<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</div>
</div>
</body>
</html>

