<?php
include("connection.php");

$goods = $_POST['goodscol'];
$rice = $_POST['pricecol'];
$category = $_POST['categorycol'];


$sql = "insert into items (goods,price,category) values ('" . $goods . "','" . $rice . "','" . $category . "')";

mysqli_query($conn, $sql);
