<?php
session_start();
error_reporting(0);
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
<title> TRIP</title>
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

/* Style header */
.header {
  padding: 40px;
  text-align: center;
  background: black;
  color: white;
}

/* font +1*/
.header span {
  font-size: 40px;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* side */
/*recover*/
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

/*eg */
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

/* Responsive */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}  


#footer_social{
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
    width:400px;
    height: 222px;
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
        <div class="holiday">
			<h3>Package List</h3>
		</div>		
<?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
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
        </div>
        <div class="rbox">
          <h5 class="pp">₹<?php echo htmlentities($result->PackagePrice);?></h5>
          <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
        </div>
        <div class="clearfix"></div>
      
 </div>
<?php }} ?>
			
		
		
		</div>
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

