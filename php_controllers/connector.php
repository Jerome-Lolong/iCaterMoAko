<?php

$conn = mysqli_connect("localhost", "root", "", "icatermoako");

if(!$conn){
    die("Sorry, Connection cannot be established.").mysqli_connect_error();
}