<?php
$host = 'localhost'; // or '127.0.0.1' depending on your setup
$port = 3307; // Your custom port
$username = 'root'; // Your database username
$password = ''; // Your database password
$database = 'icatermoako'; // Your database name

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Sorry, Connection cannot be established: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>iCaterMoAko | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css">    
    <!-- Date Picker
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-datepicker.css">    -->
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
            <li><a href="#mu-restaurant-menu">MENU</a></li>                       
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

  <!-- Start Restaurant Menu. To be changed into PHP. -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>
            
            <?php
            
            ?>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#meals" data-toggle="tab">Meals</a></li>
                <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                <li><a href="#package-deals" data-toggle="tab">Package Deals</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Adobong Manok</a></h4>
                                  <span class="mu-menu-price">₱550.00</span>
                                  <p>A classic Filipino dish made with chicken simmered in a savory soy sauce and vinegar marinade, seasoned with garlic, bay leaves, and black peppercorns.</p>
                                  <button class="button" style="vertical-align:middle"><span>Add</span></button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-2.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Kare Kare</a></h4>
                                  <span class="mu-menu-price">₱550.00</span>
                                  <p>A Filipino stew made with oxtail, tripe, and vegetables in a rich peanut sauce, served with shrimp paste on the side.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Sinigang na Baboy</a></h4>
                                  <span class="mu-menu-price">₱550.00</span>
                                  <p>A sour soup made with pork, tamarind, and vegetables such as radish, eggplant, and spinach.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Tokwa't Baboy</a></h4>
                                  <span class="mu-menu-price">₱450.00</span>
                                  <p>A Filipino appetizer made with fried tofu (tokwa) and boiled pork (baboy), served with a soy-vinegar dipping sauce.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Lumpiang Shanghai</a></h4>
                                  <span class="mu-menu-price">₱450.00</span>
                                  <p>Crispy Filipino-style spring rolls filled with ground pork, carrots, and spices. Served with sweet and sour sauce.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ensaladang Talong</a></h4>
                                  <span class="mu-menu-price">₱350.00</span>
                                  <p>Grilled eggplant salad with tomatoes, onions, and salted eggs, dressed with vinegar and fish sauce.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Leche Flan</a></h4>
                                  <span class="mu-menu-price">₱69.00</span>
                                  <p>A rich and creamy caramel custard dessert made with egg yolks, condensed milk, and caramelized sugar.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-13.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Halo Halo</a></h4>
                                  <span class="mu-menu-price">₱89.00</span>
                                  <p>A popular Filipino dessert consisting of a mix of shaved ice, sweetened fruits, beans, jelly, and evaporated milk, topped with a scoop of ice cream.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-15.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Maja Blanca</a></h4>
                                  <span class="mu-menu-price">₱400.00</span>
                                  <p>A traditional Filipino coconut pudding delicately sweetened and infused with the rich flavor of coconut milk, creating a creamy, indulgent treat perfect for any occasion.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Bibingka</a></h4>
                                  <span class="mu-menu-price">₱50.00</span>
                                  <p>A traditional Filipino rice cake made with glutinous rice flour, coconut milk, and topped with salted eggs and grated cheese.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-16.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Biko</a></h4>
                                  <span class="mu-menu-price">₱350.00</span>
                                  <p> A classic Filipino dessert made from glutinous rice, coconut milk, and brown sugar, resulting in a sticky, caramelized rice cake that's both comforting and satisfying, ideal for those with a sweet tooth.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-14.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Karioka Sweet Rice Balls</a></h4>
                                  <span class="mu-menu-price">₱350.00</span>
                                  <p>Sweet rice balls deep-fried to golden perfection and coated in a luscious caramel glaze, offering a delightful blend of chewy, crunchy, and sweet flavors, a delightful Filipino street food favorite transformed into an elegant catering option.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-19.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Mango Juice</a></h4>
                                  <span class="mu-menu-price">₱75.00</span>
                                  <p> Refreshingly sweet and tangy, our mango juice bursts with tropical flavor, offering a delightful taste of sunshine in every sip.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-12.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Sago't Gulaman</a></h4>
                                  <span class="mu-menu-price">₱89.00</span>
                                  <p>A refreshing Filipino drink made with tapioca pearls (sago) and jelly cubes (gulaman) mixed with brown sugar syrup and water.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-11.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Lemon Juice</a></h4>
                                  <span class="mu-menu-price">₱75.00</span>
                                  <p>Zesty and invigorating, our lemon juice is a perfect balance of tartness and sweetness, awakening the senses with its vibrant citrus notes.
                                  </p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-17.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Oreo Milkshake</a></h4>
                                  <span class="mu-menu-price">₱150.00</span>
                                  <p> Indulge in creamy decadence with our Oreo milkshake, blending rich, velvety vanilla ice cream with chunks of everyone's favorite chocolate cookie for a blissful treat.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Strawberry Milkshake</a></h4>
                                  <span class="mu-menu-price">₱150.00</span>
                                  <p>Experience pure delight with our strawberry milkshake, crafted from luscious strawberries and smooth, creamy milk, delivering a burst of fruity sweetness in every sip.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-18.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Blue Rapsberry Lemonade</a></h4>
                                  <span class="mu-menu-price">₱120.00</span>
                                  <p>Cool off with a twist! Our blue raspberry lemonade combines the tartness of lemonade with the bold flavor of blue raspberries, creating a refreshing beverage that's both tangy and sweet.</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                      </div>
                   </div>
                 </div>
                 </div>

                 <div class="tab-pane fade" id="package-deals">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-20.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Tropical Delight Package</a></h4>
                                  <span class="mu-menu-price">₱2500</span>
                                  <p>Experience the taste of the tropics with this refreshing package, featuring tangy mango juice paired with classic Filipino favorites, including savory Adobong Manok and comforting Sinigang na Baboy, rounded off with a sweet finale of creamy Leche Flan. (Serves 4-6 people)</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-21.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Fiesta Frenzy Package</a></h4>
                                  <span class="mu-menu-price"> ₱3000</span>
                                  <p>Dive into a festival of flavors with this vibrant package, showcasing the zesty Blue Raspberry Lemonade alongside crispy Lumpiang Shanghai, hearty Kare Kare, and the colorful medley of textures and tastes in Halo Halo for a truly festive dining experience. (Serves 6-8 people)</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-22.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Comfort Cravings Package</a></h4>
                                  <span class="mu-menu-price"> ₱2250</span>
                                  <p>Indulge in the comforting delights of home with this package, offering the refreshing tang of Lemon Juice alongside the satisfying crunch of Tokwat Baboy, followed by the warm sweetness of Bibingka and the creamy richness of Maja Blanca.(Serves 4-6 people)</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                      

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-23.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Sweet & Savory Sampler Package</a></h4>
                                  <span class="mu-menu-price">₱2750</span>
                                  <p> Explore the harmonious blend of sweet and savory flavors with this sampler package, featuring the indulgent Oreo Milkshake alongside the freshness of Ensaldadang Talong, followed by the sticky sweetness of Biko and the delightful crunch of Karioka Sweet Rice Balls. (Serves 4-6 people)</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-24.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Ultimate Filipino Feast Package</a></h4>
                                  <span class="mu-menu-price">₱3500</span>
                                  <p>Elevate your dining experience with the ultimate Filipino feast, combining the refreshing Sagot Gulaman and Mango Juice with the iconic flavors of Adobong Manok and Sinigang na Baboy, capped off with the creamy indulgence of Leche Flan for a feast fit for royalty. (Serves 6-8 people)</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-25.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Summer Sips & Sizzles Package</a></h4>
                                  <span class="mu-menu-price">₱3250</span>
                                  <p>Beat the heat with this summer-inspired package, featuring the luscious Strawberry Milkshake alongside the crispy Tokwat Baboy, the icy indulgence of Halo Halo, and the refreshing tang of Blue Raspberry Lemonade, a perfect combination for a sunny day's delight. (Serves 6-8 people)</p>
                                  <button type="submit" class="mu-send-btn">Add to Cart</button>
                                </div>
                              </div>
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
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

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
                          <input type="number" name="estHeadcount" class="form-control" placeholder="Estimated Headcount">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="date" name="date" class="form-control" id="datepicker" placeholder="Date">              
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
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
	                    <figure class="mu-single-gallery-img">
	                      <a class="mu-imglink" href="assets/img/gallery/1.jpg">
                          <img alt="img" src="assets/img/gallery/1.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
	                    </figure>            
                  	</div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                  	 <div class="mu-single-gallery-item">
                        <figure class="mu-single-gallery-img">
                          <a class="mu-imglink" href="assets/img/gallery/2.jpg">
                            <img alt="img" src="assets/img/gallery/2.jpg">
                             <div class="mu-single-gallery-info">
                                <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                            </div> 
                          </a>
                        </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	 <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/3.jpg">
                          <img alt="img" src="assets/img/gallery/3.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/4.jpg">
                          <img alt="img" src="assets/img/gallery/4.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/5.jpg">
                          <img alt="img" src="assets/img/gallery/5.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->  

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                   <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/6.jpg">
                          <img alt="img" src="assets/img/gallery/6.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/7.jpg">
                          <img alt="img" src="assets/img/gallery/7.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/8.jpg">
                          <img alt="img" src="assets/img/gallery/8.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>               
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">                  
                  	<div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/9.jpg">
                          <img alt="img" src="assets/img/gallery/9.jpg">
                           <div class="mu-single-gallery-info">
                              <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div> 
                        </a>
                      </figure>            
                    </div>
                </div>
                <!-- End single gallery image -->  

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
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>"I hosted a gathering with the Tropical Delight Package, and everyone couldn't stop raving about the flavors! The mango juice was so refreshing, and the Adobong Manok and Sinigang na Baboy were cooked to perfection. And don't even get me started on the Leche Flan – it was heavenly!"</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>"The Fiesta Frenzy Package was a hit at our family reunion! The Blue Raspberry Lemonade was a unique twist, and paired perfectly with the crispy Lumpiang Shanghai. Kare Kare was a crowd favorite, and ending the meal with Halo Halo brought back childhood memories. Highly recommend!"</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>"I ordered the Comfort Cravings Package for a cozy dinner at home, and it exceeded my expectations! The Lemon Juice added a refreshing touch, and the Tokwat Baboy was crispy and flavorful. The Bibingka and Maja Blanca were the perfect ending to a comforting meal. Will definitely order again!"</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
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

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Aling Adela</h4>
                      <span>Master of Adobong Manok</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-1.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Mang Kardo</h4>
                      <span>Kare Kare Connoisseur</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Siling Labuyo</h4>
                      <span>Sinigang Specialist</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-4.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Tatay Turo</h4>
                      <span>Tokwa't Baboy Virtuoso</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Nanay Nene</h4>
                      <span>Lumpiang Shanghai Maestro</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-1.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Manang Chitang</h4>
                      <span>Ensaladang Talong Expert</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Inay Irene</h4>
                      <span>Leche Flan Artisan</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Chef Bosing Benjie</h4>
                      <span>Halo Halo Maestro</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>                      
              </ul>
            </div>
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
                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
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
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
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
  <!-- Date Picker
  <script type="text/javascript" src="./assets/js/bootstrap-datepicker.js"></script>  -->
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