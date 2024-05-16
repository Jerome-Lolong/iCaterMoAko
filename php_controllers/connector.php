<?php

$conn = new mysqli("localhost", "root", "", "icatermoako", 3307);

if(!$conn){
    die("Sorry, Connection cannot be established.").$conn->error;
}