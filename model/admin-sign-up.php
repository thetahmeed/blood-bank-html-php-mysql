<?php
include('../db/config.php');

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

$result = mysqli_query($con, $sql);

if ($result) {
    header("Location: ../admin");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>