<?php

function addFoodPackage($pkg_name, $details, $price, $food_name, $description, $imagePath, $ser_min, $ser_max){
    try{
        require "connector.php";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
        $fd_pck_info_stmt = mysqli_prepare($conn, "INSERT INTO food_pck_gen_info(package_name, details, price) VALUES (?, ?, ?);");
        mysqli_stmt_bind_param($fd_pck_info_stmt, 'ssd', $pkg_name, $details, $price);
        $result = mysqli_stmt_execute($fd_pck_info_stmt);

        if($result){
            $fd_pck_info_id = mysqli_insert_id($conn);
    
            $fd_pck_details_stmt = mysqli_prepare($conn, "INSERT INTO food_packages(food_pckgen_info, name, description, imagepath, servings_min, servings_max) VALUES (?, ?, ?, ?, ?, ?);");
            mysqli_stmt_bind_param($fd_pck_details_stmt, 'isssii', $fd_pck_info_id, $food_name, $description, $imagePath, $ser_min, $ser_max);
            if(mysqli_stmt_execute($fd_pck_details_stmt)){return true;} else{return false;}
        }else{
            return false;
        }
    }catch(Exception){
        return false;
    }
}

function updateFoodPackage(){

}

function incrementFoodPackage($food_pckgeninfo_id){
    require "connector.php";

    $fd_pck_update_stmt = mysqli_prepare($conn, "UPDATE FoodPackage SET number_of_orders = number_of_orders + 1 WHERE food_pckgeninfo_id = ?");
    mysqli_stmt_bind_param($fd_pck_update_stmt, 'i', $food_pckgeninfo_id);
    $result = mysqli_stmt_execute($fd_pck_info_stmt);

    if($result){
        return true;
    }else{
        return false;
    }
}

function deleteFoodPackage($food_pck_gen_id){
    require "connector.php";

    $del_fd_pck_info_stmt = mysqli_prepare($conn, "DELETE FROM food_packages WHERE food_pckgeninfo= ?;");
    mysqli_stmt_bind_param($del_fd_pck_info_stmt, 'i', $food_pck_gen_id);
    $result = mysqli_stmt_execute($del_fd_pck_info_stmt);

    if(mysqli_stmt_affected_rows($del_fd_pck_info_stmt)){
        return true;
    }else{return false;}
}