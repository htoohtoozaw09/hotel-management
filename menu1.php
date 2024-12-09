<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Menu</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link href="menu.css" rel="stylesheet">
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
   <nav>
      <div id="login" ><a href="menu.php">LOGOUT</a></div>
      <ul>
        <li><a href="Home1.html">Home</a></li>
        <li><a href="Home1.html#about">About</a></li>
        <li><a href="Home1.html#gallery">Gallery</a></li>
        <li><a href="Room1.html">Room</a></li>
        <li><a href="service1.html">Services</a></li>
        <li><a href="Contact1.php">Contact</a></li>
        
        
      </ul>
    </nav>
    <div class="color">
  <div class="container">
    <div class="menu">
      <h2 class="menu-group-heading">
       Best Seller Items⭐️⭐️⭐️⭐️⭐️
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (1).jpg"alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Burger</span>
              <span class="menu-item-price">$10.90</span>
            </h3>
            <p class="menu-item-description">
          Burger

            These burger  is simply seasoned and ready to grill in minutes. Enjoy on ciabatta, Kaiser, or potato rolls topped with your favorite condiments.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (2).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name"> Lasagna</span>
              <span class="menu-item-price">$15.90</span>
            </h3>
            <p class="menu-item-description">
            

              Layers of pasta, sausage studded tomato sauce, chopped spinach and 3 Italian cheeses make this lasagna recipe awesome. Assemble this make ahead recipe for spinach and sausage lasagna in advance, and dinner will be waiting for you.
            </p>
          </div>
        </div>
      </div>
      <h2 class="menu-group-heading">
        Signature Menu⭐️⭐️⭐️
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (3).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Steak</span>
              <span class="menu-item-price">$20.90</span>
            </h3>
            <p class="menu-item-description">
          

          Here, roasted garlic and rich beef demi-glace mingle with the fond. Speaking of delicious things to drizzle with sauce, we're serving up sides of chive-flecked mashed potatoes and crisp roasted asparagus.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (4).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">  Chicken kabab </span>
              <span class="menu-item-price">$12.90</span>
            </h3>
            <p class="menu-item-description">
             Chicken kabab 

            Chicken pieces are soaked in a bright, citrusy, well season marinade then threaded onto skewers along with fresh bell peppers and onions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="menu">
      <h2 class="menu-group-heading">
        Chef's Choices⭐️⭐️
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (5).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Pizza</span>
              <span class="menu-item-price">$11.90</span>
            </h3>
            <p class="menu-item-description">
             
              This cast iron pizza with spicy Italian sausage is prepared with an easy, no-knead pizza dough and is a scrumptious offering for pizza night!
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (6).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Pasta</span>
              <span class="menu-item-price">$14.90</span>
            </h3>
            <p class="menu-item-description">
             

              Penne Arrabbiata is spicy, saucy, and so easy! The combination of penne noodles, spicy tomato sauce, and parmesan cheese is simply irresistible. But the best part is this Italian pasta recipe is ready in about 20 minutes.
            </p>
          </div>
        </div>
      </div>
      <h2 class="menu-group-heading">
       
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (7).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">  Dumplings</span>
              <span class="menu-item-price">$16.90</span>
            </h3>
            <p class="menu-item-description">
          
            These dumplings are formed into little "purses" and are filled with a simple yet flavorful filling of ground pork, chives, cabbage and ginger. .
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (8).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Spaghetti</span>
              <span class="menu-item-price">$10.90</span>
            </h3>
            <p class="menu-item-description">

          This pasta bolognese is a savory meat sauce tossed with spaghetti and served with parmesan and fresh basil. A classic Italian meal.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
    <div class="menu">
      <h2 class="menu-group-heading">
     Today Special⭐️
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (9).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Sushi</span>
              <span class="menu-item-price">$13.90</span>
            </h3>
            <p class="menu-item-description">
 

            Wondering about the difference between nigiri vs sashimi? Sashimi is simply raw sliced fish. Nigiri is often made with raw fish on top of a small piece of rice. Here's how to make easy plant-based nigiri at home.
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (10).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Brownie</span>
              <span class="menu-item-price">$7.90</span>
            </h3>
            <p class="menu-item-description">
            Brownie
            Individual Fruit and Brownie Trifles star layers of fudgy dark chocolate brownie croutons, homemade whipped cream and fresh fruit.
            </p>
          </div>
        </div>
      </div>
      <h2 class="menu-group-heading">
     
      </h2>
      <div class="menu-group">
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (11).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">      Croissant</span>
              <span class="menu-item-price">$9.90</span>
            </h3>
            <p class="menu-item-description">
     

            This delicious Nutella Strawberry Croissant is an easy recipe and has only 3 ingredients. Ready to eat in 5 minutes!
            </p>
          </div>
        </div>
        <div class="menu-item">
          <img class="menu-item-image" src="image/a (12).jpg" alt="Bruschetta">
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="menu-item-name">Mojito</span>
              <span class="menu-item-price">$5.90</span>
            </h3>
            <p class="menu-item-description">
            

            The classic mojito is a refreshing summer favorite made with white rum, fresh mint leaves, lime juice (or wedges), sugar (simple syrup), and soda water for a little fizz.
            </p>
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
            <li><a href="Home1.html"><i class="fa-solid fa-arrow-right"></i>Home</a></li>
            <li><a href="Room1.html"><i class="fa-solid fa-arrow-right"></i>Rooms</a></li>
                        <li><a href="service1.html"><i class="fa-solid fa-arrow-right"></i>Services</a></li>
                        <li><a href="Contact1.php"><i class="fa-solid fa-arrow-right"></i>Contact</a></li>
                        <li><a href="Contact1.php#Acc"><i class="fa-solid fa-arrow-right"></i>FAQ</a></li>
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
<php></php>