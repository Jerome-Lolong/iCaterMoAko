<?php /*
    session_start();
    if(!isset($_SESSION['food_caterer_id'])){
        header("Location: login.php");
        exit();
    }*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>iCaterMoAko | Current Appointments</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link href="../styles/styles.css" rel="stylesheet">    
        <!-- Google Fonts -->

        <!-- Prata for body  -->
        <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
        <!-- Tangerine for small title -->
        <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
        <!-- Open Sans for title -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start header section -->
        <header>  
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img class="bi me-2" width="60" height="60" src="../assets/img/logo.png" alt="Logo img"> <!--Logo-->
                <span class="fs-4">iCaterMoAko</span> <!--Company Title-->
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        DASHBOARD
                        </a>
                    </li>
                    <li>
                        <a href="appointments.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                        APPOINTMENTS
                        </a>
                    </li>
                    <li>
                        <a href="food_packages.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                        YOUR FOOD PACKAGES
                        </a>
                    </li>
                    <li>
                        <a href="feedback.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                        FEEDBACK
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    JuanDelaCruz
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        </header>
        <!-- End header section -->
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"></div> <!-- Empty column for spacing -->
            
                <?php
                // Check if caterer_id is set in the session
if(isset($_SESSION['caterer_id'])) {
    $caterer_id = $_SESSION['caterer_id'];

    // Include the database connector
    require "../php_controllers/connector.php";

    // Prepare and execute SQL query to fetch appointments for the specific caterer
    $sql = "SELECT * FROM appointment_schedule WHERE caterer_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $caterer_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        ?>
        
            <table class="db_table">
                <thead>
                    <tr>
                        <th>Appointment ID</th>
                        <th>Date</th>
                        <th>Event Name</th>
                        <th>Customer Name</th>
                        <th>Location</th>
                        <th>Number of Guests</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each appointment and display its details
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row['appointment_id']."</td>";
                        echo "<td>".$row['appointment_date']."</td>";
                        echo "<td>".$row['event_name']."</td>";
                        echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
                        echo "<td>".$row['location']."</td>";
                        echo "<td>".$row['number_of_guests']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <!-- End of appointments table -->

        </body>
        </html>
        <?php
    } else {
        // If no appointments found, display a message
        echo "<p>You don't have any appointments yet.</p>";
    }
} else {
    // If caterer_id is not set in the session, display an error message
    echo "<p>Go Back to your home.</p>";
}
                ?>
            </div>
        </div>
    </div>


        <!-- jQuery library -->
        <script src="/assets/js/jquery.min.js"></script>  
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/assets/js/bootstrap.js"></script>   
        <!-- Slick slider -->
        <script type="text/javascript" src="/assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="/assets/js/simple-animated-counter.js"></script>
        <!-- Gallery Lightbox -->
        <script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Date Picker -->
        <script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script> 
        <!-- Ajax contact form  -->
        <script type="text/javascript" src="/assets/js/app.js"></script>
        
        <!-- Custom js -->
        <script src="/assets/js/custom.js"></script> 
    </body>
</html>