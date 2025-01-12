<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";

$myconnection = mysqli_connect($dbhost, $dbuser, $dbpass);

$dbcreatesql = "CREATE DATABASE `blood-bank`";

$result = mysqli_query($myconnection, $dbcreatesql);

if ($result) {
    echo "Database created";
} else {
    echo mysqli_connect_error();
}
?>