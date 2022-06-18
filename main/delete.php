<?php

include 'mainconnect.php';
$id = $_GET['id'];
$delete = " DELETE FROM `insertdata` where `id` = '$id'";
$query = mysqli_query($conn,$delete);
header('location:display.php');
?>