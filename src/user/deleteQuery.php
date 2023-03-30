<?php
include_once __DIR__ . '/../MySQL.php';

$user_id = $_GET['id'];

$query = mysqli_query(MySQL::connection(), "DELETE FROM `user` WHERE `user_id` = '$user_id'");

header("location: ./deleteMsg.php");
?>