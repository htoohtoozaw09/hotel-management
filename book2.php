<?php
	$connection = mysqli_connect("localhost","root", "");
	$db = mysqli_select_db($connection,'hotelms');

	if(isset($_POST['book_now']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$chkinDate = $_POST['chkinDate'];
		$chkoutDate = $_POST['chkoutDate'];
		$room_type = $_POST['room_type'];
		$bed_room = $_POST['bed_room'];
		$payment_type = $_POST['payment_type'];

		$query = "INSERT INTO `reserve_data` (`name`, `email`, `chkinDate`, `chkoutDate`, `room_type`, `bed_room`, `payment_type`) VALUES ('$name', '$email', '$chkinDate', '$chkoutDate', '$room_type', '$bed_room', '$payment_type')";

		$query_run = mysqli_query($connection ,$query);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="booking.css">
</head>
<body style="background-image:url('beach2.jpg');">
	<div class="wrapper">
		<nav>
		<div id="login"><a href="ls/logout.php">Logout</a></div>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Home.php#about">About</a></li>
				<li><a href="Home.php#gallary">Gallery</a></li>
				<li><a href="Room.php">Room</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="contact.php">Contact</a></li>
				
				
			</ul>
		</nav>

		<form name="thank" action="Room.php" >
	     <div class="thanks">
       
	   <br><h2>Booking Complete <i class="fa-solid fa-check"></i></h2><br>
		<p> We are very happy that you have chosen us to serve you.Hope you will have a fantastic moments with us.We'll check your reservation. If data is valid, we'll contact you via your email or phone. See you soon! </p><br><br>
		<button type="submit" id="okbtn">OK</button>
	

	</div>
	</form>
	</div>
</body>
</html>