<?php

$conn = mysqli_connect("localhost", "root", "", "icatermoako", 3307);

if(!$conn){
    die("Sorry, Connection cannot be established.").mysqli_connect_error();
}