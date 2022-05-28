<?php

include_once('connection.php');

$id = $_GET['edit_id'];
$sql = "select * from items where id='" . $id . "'";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($result);

if(empty($id) || empty($_GET['edit_id'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Using AJAX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Edit Data</h2>
        <p class="text-right"><a href="index.php" class="btn btn-primary">View All Blogs</a></p>
        <form>
            <div class="form-group">
                <input type="hidden" id="postid" value="<?php echo $_GET['edit_id']; ?>">
                <label for="goods">Goods :</label>
                <input type="text" class="form-control" id="goods" value="<?php echo $data['goods']; ?>">
            </div>

            <div class="form-group">
                <label for="price">Price :</label>
                <input type="number" class="form-control" id="price" value="<?php echo $data['price']; ?>">
            </div>

            <div class="form-group">
                <label for="price">Category :</label>
                <input type="text" class="form-control" id="category" value="<?php echo $data['category']; ?>">
            </div>



            <button type="button" id="save" class="btn btn-primary">Submit</button>
        </form>
    </div>




    <script>
        $('#save').click(function() {

            $id = $("#postid").val();

            //alert($id); 

            $goods = $('#goods').val();
            $price = $("#price").val();
            $category = $("#category").val();


            $.ajax({
                url: "update.php",
                method: "POST",
                data: {
                    postid: $id,
                    goodscol: $goods,
                    pricecol: $price,
                    categorycol: $category
                },
                success: function(dataabc) {
                    window.location.href = "index.php";
                }
            });


        });
    </script>


</body>

</html>