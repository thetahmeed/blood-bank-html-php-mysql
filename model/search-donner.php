<?php
$bloog_group = $_POST['blood_group'];
$city = $_POST['city'];

// A+ should be on url as A%2B
// B- should be on url as A%2D

$url_encode_blood_group = urlencode($bloog_group);

header("Location: ../view/search-result.php?blood_group=$url_encode_blood_group&city=$city");
?>