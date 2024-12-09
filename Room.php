<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Room</title>
  <link rel="stylesheet" type="text/css" href="Room.css">
  <link rel="stylesheet" type="text/css" href="Font/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="Font/css/all.min.css">
  <style>
    #myBtn {
      display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color:skyblue;
    color: white;
    cursor: pointer;
    width:60px;
    height:60px;
    
    border-radius: 50%;
  }
  
  @keyframes moveUpDown {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px); /* Adjust the distance as needed */
    }
    100% {
      transform: translateY(0);
    }
  }
  #myBtn {
    animation: moveUpDown 1s infinite; /* Adjust the duration as needed */
  }
  </style>
</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"animate__animated animate__slideInDown></i></button>
    <div id="wrapper">
    <nav>
      <?php 
            if (isset($_SESSION['login']) && $_SESSION['login']) {
            ?>
                <div id="login"><a href="ls/logout.php">Logout</a></div>
            <?php } else { ?>
                <div id="login"><a href="./ls/index.php">Login</a></div>
            <?php } ?>
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Home.php#about">About</a></li>
        <li><a href="Home.php#gallary">Gallery</a></li>
        <li><a href="Room.php">Room</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="Contact.php">Contact</a></li>
        
        
      </ul>
    </nav>

     
    
  <div class="slider">
    <figure>
      <div class="slide">
        <img src="image/final1.jpg">
      </div>
      <div class="slide">
        <img src="image/fro4.jpg">
      </div>
      <div class="slide">
        <img src="image/44.jpg">
      </div>
      <div class="slide">
        <img src="image/fro3.jpg">
      </div>
      <div class="slide">
        <img src="image/fro2.jpg">
      </div>
    </figure>
   
  </div><br><br>
  <div class="body">
    <div class="container">
      <div class="card card1">
        <div class="card-content">
          <h2>VVIP ROOM</h2><br>
          <p>If you choose it,you can access private gym room,pool,sky bar,beach view bedroom.</p>
          <h5>$3360/Per Day</h5><br>
          <a href="diamond.html"><h4>View Detail</h4></a>
          <a href="./ls_for_room/index.php"><h3>Book Now</h3></a>
          
        </div>
      </div>
       <div class="main-content">
       <div class="box">
         <img src="image/de1.jpg" alt="">
         <div class="img-text">
           <div class="content">
             <h2>DELUXE ROOM</h2><br>
               <a href="./roomdetail/deluxe.php"><h4>View Detail</h4></a>
                
           </div>
         </div>
       </div>
         <div class="box">
         <img src="image/su.jpg" alt="">
         <div class="img-text">
           <div class="content">
             <h2>SUPERIOR ROOM</h2><br>
             <a href="./roomdetail/superior.php"><h4>View Detail</h4></a>
                
           </div>
         </div>
       </div>
     </div>
          <div class="main-content1">
                <div class="box1">
         <img src="image/stand3.jfif" alt="">
         <div class="img-text">
           <div class="content">
             <h2>STANDARD ROOM</h2><br>
            <a href="./roomdetail/standrad.php"><h4>View Detail</h4></a>
                
           </div>
         </div>
       </div>
          <div class="box1">
         <img src="image/guest.jpg" alt="">
         <div class="img-text">
           <div class="content">
             <h2>GUEST ROOM</h2><br>
            <a href="./roomdetail/guesthouse.php"><h4>View Detail</h4></a>
                
           
           </div>
         </div>
       </div>
      </div>
    
  </div>
</div>
  </div>
  <footer class="footer">
    <div class="container_f">
      <div class="row">
        <div class="footer-col1">
          <h4>Hotel Grand Beach</h4><br>
          <h5>We are delighted to have you as our guest and are committed to providing you with a comfortable and memorable stay.We want to ensure that you have a seamless and enjoyable experience with us.</h5>
        </div>
        <div class="footer-col3">
          <h4>Follow Us</h4>
          <ul>
           <li><a href="https://www.facebook.com/GrandBeachMiami/"><i class="fa-brands fa-facebook" ></i></a></li>
            <li><a href="https://twitter.com/GrandBeachMiami?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/grandsurfside/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/grand-beach-hotel-miami-beach-&-grand-beach-hotel-surfside"><i class="fa-brands fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="footer-col4">
          <h4>Find us</h4>
          <ul>
            <li><a href="https://goo.gl/maps/ANQbo85w6xK2qKto8"><i class="fa-solid fa-location-dot"></i></a>4835 Collins Ave, Miami Beach, FL 33140,USA</li>
            <li><a href="#"><i class="fa-solid fa-phone"></i>+1 305-538-8666</a></li>
            <li><a href="mailto:yoonthiriaung04@gmail.com"><i class="fa-solid fa-envelope"></i>grandbeachmiami@email.com</a></li>
          </ul>
        </div>

        <div class="footer-col2">
          <h4>Quick links</h4>
          <ul>
            <li><a href="Home.php"><i class="fa-solid fa-arrow-right"></i>Home</a></li>
            <li><a href="Room.php"><i class="fa-solid fa-arrow-right"></i>Rooms</a></li>
                        <li><a href="service.php"><i class="fa-solid fa-arrow-right"></i>Services</a></li>
                        <li><a href="Contact.php"><i class="fa-solid fa-arrow-right"></i>Contact</a></li>
                        <li><a href="Contact.php#Acc"><i class="fa-solid fa-arrow-right"></i>FAQ</a></li>
          </ul>
        </div>
    
        
      </div>
    </div>
    
  </footer>
  <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
      } else {
      mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      
    }
    function topFunction() {
    // Set the duration for scrolling animation in milliseconds
    const duration = 300; // Adjust as needed
  
    // Calculate how far to scroll based on the current scroll position
    const scrollStep = -window.scrollY / (duration / 15);
    
    // Define a function to perform the scrolling animation
    const scrollInterval = setInterval(function(){
      if(window.scrollY != 0) {
        window.scrollBy(0, scrollStep);
      } else {
        clearInterval(scrollInterval);
      }
    }, 15); // Adjust the interval for smoother scrolling
  }
  
  function topFunction() {
  
  
    // Scroll to the top of the document smoothly
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
    </script>
</body>
</html>