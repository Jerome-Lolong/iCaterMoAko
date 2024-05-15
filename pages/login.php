<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <title>iCaterMoAko | Login</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">

  <!-- Font awesome -->
  <link href="../assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">   
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">    
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datepicker.css">   
  <!-- Gallery Lightbox -->
  <link href="../assets/css/magnific-popup.css" rel="stylesheet"> 
  <!-- Theme color -->
  <link id="switcher" href="../assets/css/theme-color/red-theme.css" rel="stylesheet">     

  <!-- Main style sheet -->
  <link href="../styles/style.css" rel="stylesheet">    

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
          <a class="navbar-brand" href="../index.php"><img src="../assets/img/logo.png" alt="Logo img"></a>
          <!--  Text based logo  -->
          <a class="navbar-brand" href="../index.php">iCaterMoAko</a> 

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../index.php#mu-about-us">ABOUT US</a></li>                       
            <li><a href="../index.php#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="../index.php#mu-reservation">RESERVATION</a></li>                       
            <li><a href="../index.php#mu-gallery">GALLERY</a></li>
            <li><a href="../index.php#mu-chef">OUR CATERERS</a></li> 
            <li><a href="../index.php#mu-contact">CONTACT</a></li> 
            <li><a href="login.php">LOG IN</a></li> <!-- PLEASE PUT THE link of the log in page -->
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->

  <!-- Start Login Section -->
  <div class="auth-content">
    <form action="login.php" method="post">
      <h2>Login</h2>
      <input type="text" name="email" placeholder="Your Email" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
  </div>
  <!-- End Login Section -->

  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $emaillogin = 'email';
      $password = 'password';

      $password = hash('sha256', $password);

      $result = login($emaillogin, $password);

      if($result){
        echo "
          <div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
          <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalCenterTitle'>Modal title</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                Successfully Logged In.
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-primary'>Proceed to the Dashboard.</button>
              </div>
            </div>
          </div>
        </div>
        ";

        header("dashboard.php");
      }else{
        echo "
          <div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
          <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalCenterTitle'>Modal title</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                Your Email and/or Password were Incorrect.
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-primary'>Ok.</button>
              </div>
            </div>
          </div>
        </div>
        ";
      }
    }
  ?>

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
              <p>&copy; Copyright @2024iCaterMoAko. All right reserved.</p>
            </div>         
          </div>
        </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    
  <!-- JavaScript Files -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../assets/js/bootstrap.js"></script> 
  <!-- Slick slider -->
  <script type="text/javascript" src="../assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="../assets/js/waypoints.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.counterup.js"></script>  
  <!-- Date Picker -->
  <script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="../assets/js/app.js"></script>
  
</body>
</html>
