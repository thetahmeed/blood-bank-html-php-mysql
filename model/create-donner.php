<?php
include("../db/config.php");

$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$image = $_FILES['image']['name'];
$target = "../images/" . basename($image);

$sql = "INSERT INTO donners (name, blood_group, age, city, phone, image) VALUES ('$name', '$blood_group', '$age', '$city', '$phone', '$image')";

if (mysqli_query($con, $sql)) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>