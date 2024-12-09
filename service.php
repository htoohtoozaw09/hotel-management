<?php
session_start();
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper JS CSS-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- Scroll Reveal -->
    <link rel="stylesheet" href="css/scrollreveal.min.js">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
    <!-- CSS -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="./Font/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./Font/css/all.min.css">
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
<!-- Header -->
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
    

<!-- Home Section -->
    <main>
        <section class="home" id="home">
                <div class="home-content">
                        <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <img src="image/s4.jpg" alt="" class="home-img">

                                                <div class="home-details">
                                                        <div class="home-text">
                                                                <h4 class="homeSubtitle">We really like what ours.</h4>
                                                                <h2 class="homeTitle">"Service is what life is all about."</h2>
                                                        </div>

                                                        
                                                </div>
                                        </div>

                                        <div class="swiper-slide">
                                                <img src="image/s7.jpg" alt="" class="home-img">

                                                <div class="home-details">
                                                        <div class="home-text">
                                                                <h4 class="homeSubtitle">Enjoy the finest spa with us.</h4>
                                                                <h2 class="homeTitle">Enjoy Your Exclusive moments</h2>
                                                        </div>

                                                        
                                                </div>
                                        </div>

                                        <div class="swiper-slide">
                                                <img src="image/s12.jpg" alt="" class="home-img">

                                                <div class="home-details">
                                                        <div class="home-text">
                                                                <h4 class="homeSubtitle">Making Our memorable moments with lover.</h4>
                                                                <h2 class="homeTitle">“Service to others is the rent you pay for your room here on earth.</h2>
                                                        </div>

                                                        
                                                </div>
                                        </div>
                                </div>

                                <div class="swiper-button-next swiper-navBtn"></div>
                                <div class="swiper-button-prev swiper-navBtn"></div>
                                <div class="swiper-pagination"></div>
                        </div>
                </div>
        </section>
    <div class="color">
<!-- About Section -->
        <section class="section about" id="about">
                <div class="about-content container">
                        <div class="about-imageContent">
                                <img src="image/s14.webp" alt="" class="about-img">

                                <div class="aboutImg-textBox">
                                        <i class='bx bx-heart heart-icon flex'></i>
                                        <p class="content-description">At the end of the day, the goals are simple: "Safety and security."</p>
                                </div>
                        </div>

                        <div class="about-details">
                                <div class="about-text">
                                        <h4 class="content-subtitle"><i>Our Security</i></h4>
                                        <h2 class="content-title">We Combine high quality<br> and up to the level Security</h2>
                                        <p class="content-description">"Every accident is a notice that something is wrong with  methods, or material — investigate — then act.” </p>

                                            <p>And We have</p>

                                        <ul class="about-lists flex">
                                             <li class="about-list dot">.</li>
                                                <li class="about-list">Video Surveillance Systems</li>
                                                <li class="about-list dot">.</li>
                                                <li class="about-list">Alarm Systems</li>
                                                <li class="about-list dot">.</li>
                                                <li class="about-list">Sprinkler Systems And Carbon Monoxide Detectors.</li>
                                        </ul>
                                </div>

                               
                        </div>

                </div>
        </section>

    
<!-- Menu Section -->
        <section class="section menu" id="menu">
            <div class="menu-container container">
                    <div class="meu-text">
                            <h4 class="section-subtitle"><i>Our Restaurant</i></h4>
                            <h2 class="section-title">Menu options may be subject to change.</h2>
                            <p class="section-description">
                               All our dishes are prepared to order so you may request alterations to the dish so it is prepared to suit your individual taste.
                            </p>
                    </div>

                    <div class="menu-content">
                            <div class="menu-items">
                                    <div class="menu-item flex">
                                            <img src="image/s16.jpeg" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">Filet Mignon</h4>
                                                    <p class="menuItem-des">Filet Mignon is undoubtedly the most widely encountered cut of steak there is.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$18.99</span>
                                                    <span class="real-price">$20.66</span>
                                            </div>
                                    </div>
                                    <div class="menu-item flex">
                                            <img src="image/s17.jpg" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">15-Minute Baked Salmon with Lemon</h4>
                                                    <p class="menuItem-des">Fifteen minutes, and some salt, pepper, and lemon are all that's needed for perfectly cooked simple salmon fillets.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$18.99</span>
                                                    <span class="real-price">$20.66</span>
                                            </div>
                                    </div>
                                    <div class="menu-item flex">
                                            <img src="image/s18.jpg" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">Garlic Confit Butter Butterflied BBQ Prawns</h4>
                                                    <p class="menuItem-des">These BBQ butterflied prawns are charred to perfection and doused in the most decadently delicious garlic confit butter.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$18.99</span>
                                                    <span class="real-price">$20.66</span>
                                            </div>
                                    </div>
                                    <div class="menu-item flex">
                                            <img src="image/s21.jpg" alt="" class="menu-img">

                                            <div class="menuItem-details">
                                                    <h4 class="menuItem-topic">Peking Duck With Honey and Five-Spice Glaze</h4>
                                                    <p class="menuItem-des">A simple honey and five-spice glaze creates a beautiful mahogany lacquer on the finished duck.</p>
                                            </div>

                                            <div class="menuItem-price flex">
                                                    <span class="discount-price">$18.99</span>
                                                    <span class="real-price">$20.66</span>
                                            </div>
                                    </div>
                            </div>

                            <div class="time-table">
                                    <span class="time-topic">Exclusively Buffet</span>

                                    <ul class="time-lists">
                                            <li class="time-list flex">
                                                    <span class="open-day"><img src="image/s29.webp"></span>
                                                    
                                            </li>
                                            <li class="time-list flex">
                                                    <span class="open-day"><img src="image/s24.jpg"></span>
                                                    
                                            </li>

                                            </li>

                                    </ul>
                                     
                                              <br><a href="menu.php"><button><h4>View Detail</h4></button></a>
                                         
                            </div>
                              
                    </div>
            </div>
        </section>

    
 <div class="third">
       
       <div class="con">
         <p>Entertainment<br>We have live music events, plays, conferences, exhibitions, and other entertainment shows</p>
      <div class="gallery">
        <div class="img-box"><h3></h3></div>
        <div class="img-box"><h3></h3></div>
        <div class="img-box"><h3></h3></div>
      </div>  
  </div>
      <div class="fourth">
       <div class="con1">
         <p>Wellness<br>We also serve you wellness such as Yoga,Gym and spa.Have a relaxing moment with our specialist services.</p>
      <div class="gallery1">
        <div class="img-box1"><h3></h3></div>
        <div class="img-box1"><h3></h3></div>
        <div class="img-box1"><h3></h3></div>
      </div>  
     </div>
  </div>
    </div></div></main>
</body>
     <footer class="footer">
    <div class="container_f">
      <div class="row">
        <div class="footer-col1">
          <h4>Hotel Grand Beach</h4><br>
          <h5>We are delighted to have you as our guest and are committed to providing you with a comfortable and memorable stay. As a first-time guest, we want to ensure that you have a seamless and enjoyable experience with us.</h5>
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
<!-- Scroll Up -->
        <a href="#home" class="scrollUp-btn flex">
                <i class='bx bx-up-arrow-alt scrollUp-icon'></i>
        </a>



<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- Scroll Reveal -->
<script src="js/scrollreveal.js"></script>

<!-- JavaScript -->
    <script src="js/script.js"></script>
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
</html>