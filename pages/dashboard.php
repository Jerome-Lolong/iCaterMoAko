<?php 
/*
    session_start();
    if(!isset($_SESSION['food_caterer_id'])){
        header("Location: login.php");
        exit();
    }

    $food_caterer_id = $_SESSION['food_caterer_id'];
    */
    require "../php_controllers/connector.php";
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
        <title>iCaterMoAko | Dashboard</title>
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
        <!-- Google Fonts -->

        <!-- Prata for body  -->
        <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
        <!-- Tangerine for small title -->
        <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
        <!-- Open Sans for title -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            </div>
        </div>
        </header>
        <!-- End header section -->

        <div class="container mt-5">
        <div class="row mb-4">
            <!-- Total Sales This Month -->
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Sales This Month</h3>
                        <?php
                            $sql = "SELECT total_sales FROM catering_sales WHERE caterer_id = ?;";
                            $stmt1 = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt1, "i", $food_caterer_id);
                            mysqli_stmt_execute($stmt1);
                            $sales_result = mysqli_stmt_get_result($stmt1);                

                            if(mysqli_num_rows($sales_result)){
                                $row_sales = mysqli_fetch_assoc($sales_result);
                                echo "<strong>".$row_sales["total_sales"]."</strong>";
                            } else {
                                echo "<p>You have not generated a sale this month.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Sales by Food Package -->
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Sales by Food Package</h3>
                        <?php
                            $sql = "SELECT food_pckgeninfo_id, package_name, number_of_orders, sales_per_foodpackage FROM food_pck_gen_info WHERE food_caterer_id = ? LIMIT 5";
                            $stmt2 = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt2, "i", $food_caterer_id);
                            mysqli_stmt_execute($stmt2);
                            $fp_result = mysqli_stmt_get_result($stmt2);                

                            if(mysqli_num_rows($fp_result) > 0){
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Food Package ID</th>
                                    <th>Package Name</th>
                                    <th>Number of Orders</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($row_fp = mysqli_fetch_assoc($fp_result)){
                                        echo "<tr>";
                                        echo "<td>".$row_fp['food_pckgeninfo_id']."</td>";
                                        echo "<td>".$row_fp['package_name']."</td>";
                                        echo "<td>".$row_fp['number_of_orders']."</td>";
                                        echo "<td>".$row_fp['sales_per_foodpackage']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>  
                        <?php
                            } else {
                                echo "<p>You don't have any food packages yet. Go to Food Packages and start adding new food packages.</p>";
                            }
                        ?>          
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <!-- Your Pending Appointments -->
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Your Pending Appointments</h3>
                        <?php
                            $stmt4 = mysqli_prepare($conn, "SELECT appointment_id, event_name, CONCAT(first_name, ' ', last_name) AS organizers, event_date, event_time, number_of_guests FROM appointment_schedule WHERE caterer_id = ? LIMIT 5");
                            mysqli_stmt_bind_param($stmt4, "i", $food_caterer_id);
                            mysqli_stmt_execute($stmt4);
                            $ap_result = mysqli_stmt_get_result($stmt4);                

                            if(mysqli_num_rows($ap_result) > 0){
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Appointment ID</th>
                                    <th>Event Name</th>
                                    <th>Organizers</th>
                                    <th>Event Date</th>
                                    <th>Event Time</th>
                                    <th>Number of Guests</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($row_ap = mysqli_fetch_assoc($ap_result)){
                                        echo "<tr>";
                                        echo "<td>".$row_ap['appointment_id']."</td>";
                                        echo "<td>".$row_ap['event_name']."</td>";
                                        echo "<td>".$row_ap['organizers']."</td>";
                                        echo "<td>".$row_ap['event_date']."</td>";
                                        echo "<td>".$row_ap['event_time']."</td>";
                                        echo "<td>".$row_ap['number_of_guests']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>  
                        <?php
                            } else {
                                echo "<p>You have no pending appointments yet.</p>";
                            }
                        ?> 
                    </div>
                </div>
            </div>   

            <!-- Average Feedback on Your Business -->
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Average Feedback on Your Business</h3>
                        <?php
                            $stmt5 = mysqli_prepare($conn, "SELECT AVG(rating) AS service_rating FROM feedback WHERE caterer_id = ?;");
                            mysqli_stmt_bind_param($stmt5, "i", $food_caterer_id);
                            mysqli_stmt_execute($stmt5);
                            $feedback = mysqli_stmt_get_result($stmt5);

                            if(mysqli_num_rows($feedback) > 0){
                                $feedbackRow = mysqli_fetch_assoc($feedback);
                                echo "<strong>".$feedbackRow['service_rating']."</strong>";
                            } else {
                                echo "<p>No feedback received yet.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>   
        </div>

        <!-- New container for charts -->
        <div class="row mb-4">
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Sales Per Month</h3>
                        <canvas id="salesPerMonthChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Pending vs Accomplished Appointments</h3>
                        <canvas id="appointmentsPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- jQuery library -->
        <script src="../assets/js/jquery.min.js"></script>  
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../assets/js/bootstrap.js"></script>   
        <!-- Slick slider -->
        <script type="text/javascript" src="../assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="../assets/js/simple-animated-counter.js"></script>
        <!-- Gallery Lightbox -->
        <script type="text/javascript" src="../assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Date Picker -->
        <script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script> 
        <!-- Ajax contact form  -->
        <script type="text/javascript" src="../assets/js/app.js"></script>
        
        <!-- Custom js -->
        <script src="../assets/js/custom.js"></script> 

        <!-- Chart.js scripts -->
            <!-- Pass PHP variables to JavaScript -->
        <script>
            var monthlySales = <?php echo json_encode($monthly_sales); ?>;
            var pendingAppointments = <?php echo $pending_appointments; ?>;
            var accomplishedAppointments = <?php echo $accomplished_appointments; ?>;
        </script>
    </body>
</html>