<?php
require "php_controllers/connector.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>iCaterMoAko | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-datepicker.css">
     <!-- Gallery Lightbox -->
    <link href="./assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="./assets/css/theme-color/red-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="./styles/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

          <!--  Image based logo  -->
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Logo img"></a>

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.php">iCaterMoAko</a> 
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT US</a></li>                       
            <li><a href="Menu.php">MENU</a></li>                       
            <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">OUR CATERERS</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li> 
            <li><a href="pages/login.php">SIGN OUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/1.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">To iCaterMoAko</h2>   
            <p></p>       
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
            <a href="Menu.html" class="mu-readmore-btn mu-reservation-btn">Shop now</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/2.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Catering Made Easy</span>
            <h2 class="mu-slider-title">Tailored just for You</h2> 
            <p></p>         
           <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
           <a href="Menu.html" class="mu-readmore-btn mu-reservation-btn">Shop Now!</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/3.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Catering Convenience</span>
            <h2 class="mu-slider-title">Right at your Fingertips</h2>
            <p></p>
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
            <a href="Menu.html" class="mu-readmore-btn mu-reservation-btn">Shop Now!</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>iCaterMoAko</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="assets/img/about-us.png" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                 <div class="mu-about-us-right">
                <p>iCaterMoAko, your one stop shop for all catering needs! We offer you a wide range of tasty and customized catering options, no matter what kind of gathering or event you have planned.  iCaterMoAko understand the importance of creating memorable experiences by means of food. This is why we are committed to providing the highest quality cuisine that not only satisfies your taste buds, but also leaves a lasting impression on your guests.
                   Each menu is carefully selected by our team of experienced CATERERS and culinary experts to ensure a perfect balance of flavour, texture and presentation. 
                  We offer a wide range of dishes to suit every taste and occasion, from traditional favorites to modern twists. But it's not only about food; we also have a special focus on excellent service and attention to detail.
                     iCaterMoAko is here to make it memorable, whether you are planning a corporate event, a wedding reception, a birthday party, or any other special occasion. You can discuss your catering needs with us today, and we'll take care of the rest! I'd like to thank you for choosing iCaterMoAko, a place where great food and good service go hand in hand.</p>                              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section. To be Changed into PHP. -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">

              <ul class="mu-counter-nav">

                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Fresh</span>
                    <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>
                    <p>Breakfast Items</p>
                  </div>
                </li>

                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Delicious</span>
                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>
                    <p>Lunch Items</p>
                  </div>
                </li>

                 <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Hot</span>
                     <h3><span class="counter-value" data-count="45">0</span><sup>+</sup></h3>
                    <p>Coffee Items</p>
                  </div>
                </li>

                 <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Satisfied</span>
                    <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>
                    <p>Customers</p>
                  </div>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Reservation section. To be changed into Php. -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Make A</span>
              <h2>Reservation</h2>
            </div>

            <div class="mu-reservation-content">
              <p>Ready to elevate your event with delicious food? Simply fill out the form below to secure your booking.</p>

              <div class="col-md-6">
                <div class="mu-reservation-left">
                  <form class="mu-reservation-form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">                       
                          <input type="text" name="fullName" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="text" name="phoneNum" class="form-control" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-md-12">
                      <div class="form-group">                        
                          <input type="number" class="form-control" placeholder="Estimated Headcount">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="date" class="form-control" id="datepicker" placeholder="Date">              
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                        
                          <input type="text" name="venue" class="form-control" placeholder="Venue">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="mu-readmore-btn">Make Reservation</button>
                    </div>
                  </form>    
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <div class="mu-reservation-right">
                  <div class="mu-opening-hour">
                    <h2>Opening Hours</h2>
                      <ul class="list-unstyled">
                        <li>
                            <p>Monday &amp; Tuesday</p>
                            <p>9:00 AM - 4:00 PM</p>
                        </li>
                        <li>
                            <p>Wednesday &amp; Thursday</p>
                            <p>9:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Friday &amp; Saturday</p>
                            <p>9:00 AM - Midnight</p>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <p>9:00 AM - 11:00 PM</p>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Gallery. Also PHP. -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
            </div>

            <div class="mu-gallery-content">
            
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
              <?php
                $image_data = $conn->query("SELECT imagepath FROM food_packages;");

                if($image_data->num_rows > 0){
                  while($row = $image_data->fetch_assoc()){
                    echo "<div class='mu-single-gallery col-md-4'>";
                    echo "<div class='mu-single-gallery-item'>";
	                  echo "  <figure class='mu-single-gallery-img'>";
                    echo "    <a class='mu-imglink' href='".$row["imagepath"]."'>";
	                      
                    echo "      <img alt='img' src='".$row["imagepath"]."'>";
                    echo "       <div class='mu-single-gallery-info'>";
                    echo "          <img class='mu-view-btn' src='".$row["imagepath"]."' alt='plus icon img'>";
                    echo "
                                </div> 
                                </a>
                              </figure>            
                            </div>
                        </div>                       
                    ";                 
                  }
                }else{
                  echo "<p>We have no images, for now.</p>";
                }
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section. Change into PHP. -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">

              <div class="mu-title">
                <span class="mu-subtitle">Testimonials</span>
                <h2>What Customers Say</h2>
              </div>

              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <?php
                  // testimonial
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->
  
  <!-- Start Chef Section. Change into Catering Owners from PHP. -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Our Current Caterers</span>
              <h2>HIGHLY-RATED CATERERS</h2>
            </div>

            <?php
              $sql = "SELECT owner_name, business_name, caterer_image_path FROM caterer_info;";
              $result = $conn->query($sql);

              if($result->num_rows > 0){
                ?>
            <div class="mu-chef-content">
              <ul class="mu-chef-nav">                
                <?php
                while($row = $result->fetch_assoc()){
                  echo "
                  <li>
                  <div class='mu-single-chef'>
                    <figure class='mu-single-chef-img'>
                      <img src=".$row["caterer_image_path"]." alt='chef img'>
                    </figure>                  
                  ";
                  echo "
                  <div class='mu-single-chef-info'>
                    <h4>".$row["owner_name"]."</h4>
                    <span>".$row["business_name"]."</span>
                  </div>    
                  <div>              
                    <div class='mu-single-chef-social'>
                      <a href='#><i class='fa fa-facebook'></i></a>
                      <a href='#'><i class='fa fa-twitter'></i></a>
                      <a href='#'><i class='fa fa-google-plus'></i></a>
                      <a href='#'><i class='fa fa-linkedin'></i></a>
                    </div>
                  </div>
                  ";
                }?>
                </div>
                <!-- <div class="mu-single-chef-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div> -->
              </div>
              <?php
              }else{
                echo "<p>We do not have caterers yet.</p>";
              }
            ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

 

  <!-- Start Contact and Feedback section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

              <div class="col-md-6">
                <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post"class="mu-contact-form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>                      
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>                        
                            <textarea class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                        </div>                      
                        <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
                </div>
                <!-- Feedback Thank You Modal -->
                <div id="feedbackThankYouModal" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); padding:20px; background-color:white; border:1px solid #ccc; box-shadow:0 0 10px rgba(0,0,0,0.1); z-index:1000;">
                    <br><br><h2>Thank You for Your Feedback!</h2>
                    <br><p>We appreciate your feedback and will use it to improve our services. Thank you for taking the time to share your thoughts with us.</p><br><br>
                    <div style="position: absolute; top: 10px; left: 10px; ">
                        <button id="closeFeedbackModal" style="padding: 5px 10px; background-color: #ee4532; color: #fff; border: none; cursor: pointer; z-index: 1;">Close</button>
                    </div>
                </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Contact Information</h3>
                      <address>
                        <p><i class="fa fa-phone"></i> (850) 457 6688</p>
                        <p><i class="fa fa-envelope-o"></i>icater-e.ph@gmail.com</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Service Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Legazpi%20City+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright @2024 ICaterMoAko. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="./assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="./assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="./assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="./assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="./assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Date Picker -->
  <script type="text/javascript" src="./assets/js/bootstrap-datepicker.js"></script>
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="./assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="./assets/js/custom.js"></script> 
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.mu-reservation-form');
    const thankYouModal = document.getElementById('thankYouModal');
    const modalOverlay = document.getElementById('modalOverlay');
    const closeModal = document.getElementById('closeModal');

    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Show the pop-up
      thankYouModal.style.display = 'block';
      modalOverlay.style.display = 'block';
    });

    closeModal.addEventListener('click', function() {
      // Hide the pop-up
      thankYouModal.style.display = 'none';
      modalOverlay.style.display = 'none';
    });

    modalOverlay.addEventListener('click', function() {
      // Hide the pop-up when clicking outside of it
      thankYouModal.style.display = 'none';
      modalOverlay.style.display = 'none';
    });
  });
  </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('ajax-contact');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            // Log a message to the console to check if the event listener is triggered
            console.log('Form submitted!');

            // Handle the form submission here
            // For example, you can show a modal or perform any other action
            alert('Form submitted!');
        });
    });
</script>

  <!-- Popup Modal -->
  <div id="thankYouModal" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); padding:20px; background-color:white; border:1px solid #ccc; box-shadow:0 0 10px rgba(0,0,0,0.1); z-index:1000;">
    <br><br><h2>Thank You for Your Reservation!</h2>
    <br><p>We are thrilled to confirm your reservation! Your event is important to us, and we are dedicated to providing you with an exceptional catering experience.</p><br><br>
    <div style="position: absolute; top: 10px; left: 10px; ">
    <button id="closeModal" style="padding: 5px 10px; background-color: #ee4532; color: #fff; border: none; cursor: pointer; z-index: 1;">Go Back</button>
    </div>
  </div>
  <!-- Overlay for Modal -->
  <div id="modalOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:999;"></div>
  </body>
</html>