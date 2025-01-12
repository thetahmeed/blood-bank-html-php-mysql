<?php
session_start();
include('../db/config.php');

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE email = '$email' AND active = 1";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
        $_SESSION["user"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        header("Location: ../admin");
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "Invalid email or password";
}
?>