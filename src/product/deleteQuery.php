<?php
include_once __DIR__ . '/../MySQL.php';

$product_id = $_GET['id'];

$query = mysqli_query(MySQL::connection(), "DELETE FROM `product` WHERE `product_id` = '$product_id'");

header("location: ./deleteMsg.php");
?>