<?php
include("connection.php");

$sql = "select * from items";
$result = mysqli_query($conn, $sql);


echo ' <tr> 
              <th>#</th> 
              <th>Goods</th> 
              <th>Price</th> 
              <th>Category</th> 
              <th>Edit</th> 
              <th>Delete</th> 
              </tr>';

$i = 1;
while ($data = mysqli_fetch_array($result)) {
    $selling_price = $data['price'] - ($data['price'] * (10 / 100));
    if ($data['price'] > 40000) {
        $price = $selling_price;
        $discount = ' (Discount 10%)';
    } else {
        $price = $data['price'];
        $discount = '';
    }
    echo ' 
    <tr>
        <td>' . $i . '</td>
        <td>' . $data['goods'] . '</td>
        <td>' . number_format($price) . $discount . '</td>
        <td>' . $data['category'] . '</td>
        <td><a href="edit.php?edit_id=' . $data['id'] . '">edit</a></td>
        <td><a href="index.php?del_id=' . $data['id'] . '" >delete</a></td> 
    </tr>';

    $i++;
}
