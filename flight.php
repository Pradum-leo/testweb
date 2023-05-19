<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "icon" href = "trip.jpg"   type = "image/x-icon">
    <title> Flight Booking Form</title>
    <style>
      *{
  box-sizing: border-box;
  font-size: 18px;
}
body{
  background: #999;
  font-family: 'Franklin Gothic Medium', 'Helvetica', 'Arial', 'sans-serif';
}
form{
  width: 920px;
  margin: auto;
  padding: 70px 20px;
  background: #fff;
  align-content: center;
  margin-top: 5px
}
fieldset{
  border: none;
}
.radio-group label{
  padding-right: 90px;
}
.from-place, .to-place, .airline-name{
  width: 90%;
  height: 36px;
  padding: 2px 8px;
  border: 1px solid #dcdcdc;
  outline: none;
}
.group-field label{
  display: block;
  padding: 10px 0;
}
fieldset div{
  display: inline-block;
  padding: 10px 0px;
  float: left;
}    
.group-field{
    width: 420px;
    height: auto;
}
.group-select-field{
  width: 210px;
  height: auto;
}
.group-select-field label{
  display: block;
  padding: 5px 0px;
}
.ticket-count {
    width: 120px;
}
.search-btn{
  float: right;
  padding: 10px 22px;
  border-radius: 6px;
  outline: none;
  font-weight: bold;
  background: #ff7600;
  color: white;
  border: none;
  margin-top: 20px;
}
.place-swap-btn{
  background: transparent;
  border: none;
  font-size: 32px;
  cursor: pointer;
}
.more-link{
  color: #4071e8;
  outline: none;
}
select{
  border: 1px solid #dcdcdc;
  background: white;
  outline: none;
}
.bold-type{
  font-weight: bold;
}
::placeholder{
  color: #999999;
}
.label-hint{
  color: #999999;
}

input[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  95% 50% no-repeat ;
  height: 36px;
  border: 1px solid #dcdcdc;
  outline: none;
}
input[type="date"]::-webkit-inner-spin-button {
  display: none;
}
input[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

.more-option{
  border-bottom: 1px dotted #dcdcdc;
  padding-bottom: 20px;
}
.bimg {
  /* The image used */
  background-image: url("ffflight.jpg");

  min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;

}
    </style>
  </head>
  <body>
    <div class="bimg">
     <div class="header">
  <span>Flight</span>
</div>
  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="offers.php">Offers</a>
  <a href="contact.php">Contact</a>
  <a href="about us.php">About Us</a>
  <a href="signin.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Register</a>
</div>
  <div class="same">
    
    <form action="" method="post" class="trip-form">
      <fieldset class="radio-group">
       <label for="one-way" class="bold-type">
         <input type="radio" id="one-way" name="trip-type" value="oneWay" />
         One Way 
      </label>
      <label for="round-trip" class="bold-type">
        <input type="radio" id="round-trip" name="trip-type" value="roundTrip" checked="checked" />
        Round trip
      </label>
      <label for="multi-city" class="bold-type">
        <input type="radio" id="multi-city" name="trip-type" value="multiCity" />
        Multi City
      </label>
    </fieldset>
      
      <fieldset>
        <div class="group-field">
          <label for="from" class="bold-type">From </label>
          <input class="from-place" type="text" name="from" maxlength="100" placeholder="Any world wide city or airport">
        </div>
        <div class="group-field">
          <label for="to" class="bold-type">To </label>
          <input class="to-place" type="text" name="to"  maxlength="100" placeholder="Any world wide city or airport">
        </div>
      </fieldset>
      <fieldset>
        <div class="group-field">
          <label for="depart" class="bold-type">Depart on</label>
          <input placeholder="Pick a date" type="date" name="depart" />
        </div>
        <div class="group-field">
          <label for="return" class="bold-type">Return on</label>
          <input placeholder="Pick a date" type="date" name="return" />
        </div>
      </fieldset>
      
      <fieldset>
        <div class="group-select-field">
          <label for="adults" class="bold-type">Adults</label> 
          <select name="adults" class="ticket-count">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">3</option>
            <option value="5">3</option>
          </select>
        </div>
         <div class="group-select-field">
          <label for="children">Children</label>
           <select name="children" class="ticket-count">
             <option value="0">0</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">3</option>
             <option value="5">3</option>
           </select>
           <label class="label-hint"> 2&hyphen;11 years</label>
        </div>
         <div class="group-select-field">
          <label for="infants">Infants</label>
           <select name="children" class="ticket-count">
             <option value="0">0</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">3</option>
             <option value="5">3</option>
           </select>
           <label class="label-hint">Below 2 yrs</label>
        </div>
      </fieldset>
      <fieldset class="more-option">
        <details>
          <summary class="more-link"> <b>More options: </b>Class of travel, Airline Preference</summary>
           <div class="group-field">
          <label for="class-of-travel">Class of travel</label>
          <select name="class-of-travel" class="travel-class-select">
            <option value="economy">Economy</option>
            <option value="business">Business class</option>
            <option value="firstClass">First class</option>
          </select>
        </div>
        <div class="group-field">
          <label for="airline-name">Preferred Airline</label> 
          <input class="airline-name" type="text" name="airline-name" size="30" maxlength="100" placeholder="Airline name"/> 
        </div>
      </details> 
      </fieldset>
      
      <input class="search-btn" type="submit" value="Search flights"/>
    </form>
  
</div>
</div>
  </body>
</html>

 