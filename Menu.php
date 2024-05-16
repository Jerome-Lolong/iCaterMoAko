<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCaterMoAko | Menu</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

     <!-- Font awesome -->
     <link href="assets/css/font-awesome.css" rel="stylesheet">
     <!-- Bootstrap -->
     <link href="assets/css/bootstrap.css" rel="stylesheet">   
     <!-- Slick slider -->
     <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
     <!-- Date Picker -->
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
      <!-- Gallery Lightbox -->
     <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
     <!-- Theme color -->
     <link id="switcher" href="assets/css/theme-color/red-theme.css" rel="stylesheet">     
     <!-- Main Stylesheet -->
    <link rel="stylesheet" href="menu.css">

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

              <!--  Image based logo  -->
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>

          <!--  Text based logo  -->
         <a class="navbar-brand" href="index.html">iCaterMoAko</a> 

         </div>

         <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
              <li><a href="index.html">HOME</a></li>
              <li><a href="#mu-about-us">ABOUT US</a></li>                       
              <li><a href="#mu-restaurant-menu">MENU</a></li>                       
              <li><a href="#mu-reservation">RESERVATION</a></li>                       
              <li><a href="#mu-gallery">GALLERY</a></li>
              <li><a href="#mu-chef">OUR CHEFS</a></li> 
              <li><a href="#mu-contact">CONTACT</a></li> 
              <li><a href="#mu-contact">SIGN OUT</a></li> 
              <br>
              <div class="iconCart">
                <img src="images/icon.png">
                <div class="totalQuantity">0</div>
            </div>
            </ul>                            
          </div><!--/.nav-collapse -->       
        </div>          
      </nav> 
    </header>
    <!-- End header section --> 
    
    <div class="container">

            <center><h1>Product List</h1></center>
            <div class="iconCart">
                <img src="">
                <div class="totalQuantity"></div>
            </div>
        </header>

        <div class="listProduct">

            <div class="item">
                <img src="images/1.webp" alt="">
                <h2>CoPilot / Black / Automatic</h2>
                <div class="price">₱550</div>
                <button>Add To Cart</button>
            </div>

        </div>
    </div>

    <div class="cart">
        <h2>
            CART
        </h2>

        <div class="listCart">


            <div class="item">
                <img src="images/item-1.jpg">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">₱550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>


        </div>

        <div class="buttons">
            <div class="close">
                CLOSE
            </div>
            <div class="checkout">
                <a href="checkouts.php">CHECKOUT</a>
            </div>
        </div>
    </div>

    <!-- Popup container -->
<div id="popup-container" class="popup-container">
  <div class="popup-content">
      <span class="close-btn" onclick="closePopup()">&times;</span>
      <h2 id="popup-product-name"></h2>
      <p id="popup-product-description"></p>
      <div class="price" id="popup-product-price"></div>
  </div>
</div>  

    <script src="app.js"></script>
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
            <p>&copy; Copyright @2024 iCaterMoAko. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
    
</body>
</html>