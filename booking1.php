<?php 
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']){
	?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="Font/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="Font/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="booking.css">
	<script>
    function validateDates() {
        var currentDate = new Date();
        var checkinDate = new Date(document.getElementById("chkinDate").value);
        var checkoutDate = new Date(document.getElementById("chkoutDate").value);

        if (checkinDate < currentDate || checkoutDate < currentDate) {
            alert("Please select dates starting from today or later.");
            return false;
        }
        if (checkoutDate <= checkinDate) {
            alert("Check-out date must be after the check-in date.");
            return false;
        }
        return true;
    }
</script>
</head>
<body style="background-image:url(beach2.jpg);">
	<nav>
		<div id="login"><a href="Home.html">Logout</a></div>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Home.php #about">About</a></li>
				<li><a href="Home.php #gallary">Gallery</a></li>
				<li><a href="Room.php">Room</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="Contact.php">Contact</a></li>
				
				
			</ul>
		</nav>
	<div class="wrapper">
		<div class="hotel">
			<h2>Make A Reservation</h2>
			<form id="bookForm" action="book2.php" method="POST" onsubmit="return validateDates()">
			<ul id="info" >
			
			<li>Name<input type="text" name="name" required placeholder="Enter Your Name" class="inputClass1"></li>
			<li>Email<input type="email" name="email" required placeholder="Enter your Email" class="inputClass1"></li>
			<li>Check-In<input type="Date" name="chkinDate" required id="dateIn" class="inputClass2" min="<?php echo date('Y-m-d'); ?>"></li>
			<li>Check-Out<input type="Date" name="chkoutDate" required id="dateOut" class="inputClass3" min="<?php echo date('Y-m-d'); ?>"></li>
			
			<li>Rooms Type<select class="inputClass5" name="room_type">
				<option disabled> Select Rooms Type </option>
			     <option value="VVIP">VVIP</option>
			     <option value="Duluxe">Duluxe</option>
			     <option value="Superior">Superior</option>
			     <option value="Standard">Standard</option>
			     <option value="Guest House">Guest House</option>
			 </select>
			 </li>
			 <li>Bedroom<select  class="inputClass4" name="bed_room">
				<option disabled>Select Rooms</option>
			     <option value="Single">Single</option>
			     <option value="Double">Double</option>
			     <option value="Triple">Triple</option>
			     <option value="Guest Room">Guest Room</option>

			 </select></li>


              <div id="pay" name="payment_type">
			     <input type="radio" id="cash" value="Cash" name="payment_type">
			     <label for="radio"> Cash</label> 
		         <input type="radio" id="prepaid" value="Prepaid" name="payment_type">
		          <label for="radio"> Online Payment </label>
		          
             </div>

             <div>

             	<img class="logo" src="image/klogo.jpg" >
             	<img src="image/kpay.jpg" class="pay">
             	<img class="logo" src="image/wlogo.jpg" >
             	<img src="image/wave.jpg" class="pay">
          
             </div>

		  </ul>

          <!-- <input type="submit" value="BOOK NOW" id="booknow" name="book_now" onclick="validateForm()"> -->
		  <button type="submit" onclick="validateForm()" id="booknow" name="book_now" >Book Now</button>
          </form>
		</div>
		<div class="hotel1">
		<div class="Let">
			<h1>Grand Beach Hotel</h1>
			<p>Each of our guest rooms feature a private bath,wifi,cable televison and also other more specialist services.We are very glad to serve you.<br><br>
			<span class="span2">Contact : <i class="fa-solid fa-phone"></i>+1 305-538-8666 or
			<i class="fa-solid fa-phone"></i>+877-538-8666 for More information.
			It's toll free.</span></p>

			
		</div>
	</div>
	</div>
</body>
</html>
	<?php
}else{
	header('Location: ls_for_room/login.php');
}
?>


