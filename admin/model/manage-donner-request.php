<?php
$action = $_GET['action'];
$id = $_GET['id'];

include("../../db/config.php");

if ($action == 'approve') {
    $sql = "UPDATE donners SET active = 1 WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: ../");
} else if ($action == "delete") {
    $sql = "UPDATE donners SET deleted = 1 WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: ../");
}

?>