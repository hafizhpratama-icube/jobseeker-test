<?php
include("connection.php");

$id = $_POST['postid'];
$goods = $_POST['goodscol'];
$price = $_POST['pricecol'];
$category = $_POST['categorycol'];


//echo $id; 

$sql = 'UPDATE items SET price='.$price.',goods="'.$goods.'",category="'.$category.'" WHERE id='.$id;
mysqli_query($conn, $sql);
