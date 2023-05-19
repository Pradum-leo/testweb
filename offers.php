<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">


	<title>Offers</title>
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.grid1 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.grid2 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color:blue;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .grid1,
  .grid2 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
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

.coupon {
  border: 5px double #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
</style>
</head>
<body>
	
<div class="bimg">
  <div class="header">
  <span>OFFERS ON FLIGHTS AND HOTELS</span>
</div>
  <div class="navbar">
  <a href="index.php">Home</a>
  <a class="oactive" href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>
  <a href="signin.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Register</a>
</div>
<div class="same">


<div class="container">
  <div class="row">
    <div class="grid1">
      <h1 class="xlarge-font"><b>FLIGHTS</b></h1>
      <h1 class="large-font" style="color:green;"><b>APPLY COUPON AND GET UPTO 30% OFF</b></h1>
      <p style="font-size: 30px;"><span style="font-size:36px">Avail</span>  your coupon before it ends</p>
      <a  style="text-decoration:none" href="flight.php" class="button">BOOK NOW</a>
    </div>
    <div class="grid2">

    	<div class="coupon">
  <div class="pcontainer">
     <h3><span>T R I P</span></h3>
  </div>
  <img src="flight.jpg">
  <div class="pcontainer" style="background-color:white">
    <h2><b>30% OFF ON FLIGHTS</b></h2> 
    <p>Offer valid for limited time only</p>
  </div>
  <div class="pcontainer">
    <p>Use Promo Code: <span class="promo">flights4you</span></p>
    <p class="expire">Expires: Dec 01, 2019</p>
  </div>
</div>

       
  </div>
</div>


<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="grid2">
       	<div class="coupon">
  <div class="pcontainer">
    <h3><span>T R I P</span></h3>
  </div>
  <img src="hotel.jpg">
  <div class="pcontainer" style="background-color:white">
    <h2><b>30% OFF ON HOTELS</b></h2> 
     <p>Offer valid for limited time only</p>
  </div>
  <div class="pcontainer">
    <p>Use Promo Code: <span class="promo">hotels4you</span></p>
    <p class="expire">Expires: Dec 01, 2019</p>
  </div>
</div>
    </div>
    <div class="grid1">
      <h1 class="xlarge-font"><b>HOTELS</b></h1>
      <h1 class="large-font" style="color:green;"><b>APPLY COUPON AND GET UPTO 30% OFF</b></h1>
      <p style="font-size: 30px;"><span style="font-size:36px">Avail</span>  your coupon before it ends</p>
      <a style="text-decoration:none" href="hotel.php" class="button">BOOK NOW</a>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="grid1">
      <h1 class="xlarge-font"><b>CAB</b></h1>
      <h1 class="large-font" style="color:green;"><b>GET UPTO ₹150 CASHBACK</b></h1>
      <p style="font-size: 30px;"><span style="font-size:36px">Avail</span>  your coupon before it ends</p>
      <a  style="text-decoration:none" href="cab.php" class="button">BOOK NOW</a>
    </div>
    <div class="grid2">
         	<div class="coupon">
  <div class="pcontainer">
     <h3><span>T R I P</span></h3>
  </div>
  <img src="cab.jpg">
  <div class="pcontainer" style="background-color:white">
    <h2><b>10% OFF ON YOUR RIDES</b></h2> 
     <p>Offer valid for limited time only</p>
  </div>
  <div class="pcontainer">
    <p>Use Promo Code: <span class="promo">cab4you</span></p>
    <p class="expire">Expires: Dec 01, 2019</p>
  </div>
</div>
    </div>
  </div>
</div>

</body>
</html>

<div>


</div>









</div>

</body>
</html>

