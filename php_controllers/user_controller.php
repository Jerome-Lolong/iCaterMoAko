<?php

    function Register($owner_name, $business_name, $address, $tin, $date_founded, $email, $password){
        require "connector.php";

        $stmt = mysqli_prepare($conn, "INSERT INTO caterer_info( owner's_name ,  business_name ,  address ,  tin ,  date_founded ,  email ,  password ) VALUES (?, ?, ?, ?, ?, ?, ?);");

        if($stmt == false){
            error_log(mysqli_error($conn));
            return false;
        }

        mysqli_stmt_bind_param($stmt, 'sssssss', $owner_name, $business_name, $address, $tin, $date_founded, $email, $password);
    
        if(mysqli_stmt_execute($stmt)){
            return true;
        }else{
            error_log(mysqli_error($conn));
            return false;
        }
    }

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




