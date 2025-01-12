<?php
session_start();
include('config.php');

// Donners table
$donner_tbl = "CREATE TABLE IF NOT EXISTS donners (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    age INT(3) NOT NULL,
    city VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    image VARCHAR(100)  NOT NULL,
    active INT(1) DEFAULT 0,
    deleted INT(1) DEFAULT 0 
)";

$donner_tbl_result = mysqli_query($con, $donner_tbl);

if ($donner_tbl_result) {
    echo "Donner table created successfully<br>";
}

// User table
$user_table = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    active INT(1) DEFAULT 0 
)";

$user_result = mysqli_query($con, $user_table);

if ($user_result) {
    echo "User table created successfully<br>";
}

?>