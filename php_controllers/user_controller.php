<?php

    require "connector.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $owner_name = $_POST['owner_name'];
    $business_name = $_POST['business_name'];
    $address = $_POST['address'];
    $tin = $_POST['tin'];
    $date_founded = $_POST['date_founded'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    }

    $stmt = mysqli_prepare($conn, "INSERT INTO caterer_info(`owner_name`, `business_name`, `address`, `tin`, `date_founded`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?);");

    if($stmt == false){
        error_log(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'sssssss', $owner_name, $business_name, $address, $tin, $date_founded, $email, $password);

    if(mysqli_stmt_execute($stmt)){
    echo"
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
            Added Your Account Successfully. Welcome to the Team.
            </div>
            <div class='modal-footer'>
            <button type='button' class='btn btn-primary'>Proceed to the Dashboard.</button>
            </div>
        </div>
        </div>
    </div>
    ";
    }else{
    echo"
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
            An Error Occured while Creating Your Account.
            </div>
            <div class='modal-footer'>
            <button type='button' class='btn btn-primary'>Proceed to the Dashboard.</button>
            </div>
        </div>
        </div>
    </div>
    ";
    }
    mysqli_close($conn);

    function Login($email, $password){
        require "connector.php";
        $query = "SELECT COUNT(1) FROM caterer_info WHERE email = ? AND password = ?;";

        $verify = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($verify, 'ss', $email, $password);

        if(mysqli_stmt_execute($verify)){
            return true;
        }else{
            return false;
        }
    }




