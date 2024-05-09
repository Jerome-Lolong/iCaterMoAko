<?php
    require "connector.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $owner_name = 'owner_name';
        $business_name = 'business_name';
        $address = 'address';
        $tin = 'tin';
        $date_founded = 'date_founded';
        $email = 'email';
        $password = 'password';
    }

    $query = "INSERT INTO caterer_info('owner's_name', 'business_name', 'address', 'tin', 'date_founded', 'email', 'password') VALUES (?, ?, ?, ?, ?, ?, ?);";

    $result = mysqli_prepare($conn, $query);

    if($result){
        mysqli_stmt_bind_param($result, 'sssssss', $owner_name, $business_name, $address, $tin, $date_founded, $email, $password);
    }

    if(mysqli_stmt_execute($result)){
        echo "
        Congratulations. You are now part of the team. Good Luck on your ventures.
        ";

        header("index.php");
    }

