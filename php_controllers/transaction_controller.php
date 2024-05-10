<?php

function customerAppointment($event, $fname, $lname, $description, $event_location, $guests, $caterer_id, $payment_id, $food_package_id){
    require "connector.php";

    $query = "INSERT INTO  VALUES appintment_schedule('event_name', 'first_name', 'last_name', 'description', 'location', 'number_of_guests', 'caterer_id', 'payment_id', 'food_package_id') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $result = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($result, 'sssssiiii', $event, $fname, $lname, $description, $event_location, $guests, $caterer_id, $payment_id, $food_package_id);

    if(mysqli_stmt_execute($result)){
        return true;
    }else{
        return false;
    }
}

function paymentProcessing(){
    require "connector.php";

    $query = "INSERT INTO feedback('caterer_id', 'appointment_id', 'rating', 'feedback_message') VALUES (?, ?, ?, ?);";

    $result = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($result, 'iiis', $caterer_id, $appointment_id, $rating, $feedback_message);

    if(mysqli_stmt_execute($result)){
        return true;
    }else{
        return false;
    }    
}

function sendFeedback($caterer_id, $appointment_id, $rating, $feedback_message){
    require "connector.php";

    $query = "INSERT INTO feedback('caterer_id', 'appointment_id', 'rating', 'feedback_message') VALUES (?, ?, ?, ?);";

    $result = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($result, 'iiis', $caterer_id, $appointment_id, $rating, $feedback_message);

    if(mysqli_stmt_execute($result)){
        return true;
    }else{
        return false;
    }
}