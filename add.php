<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Data Using AJAX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container py-5">
        <h2>Data Input</h2>
        <!-- <p class="text-right"><a href="index.php" class="btn btn-primary">View All Blogs</a></p>  -->
        <form>
            <div class="form-group">
                <label for="goods">Goods : </label>
                <input type="text" class="form-control" id="goods">
                <!-- <input type="text" class="form-control" id="title">  -->
            </div>
            <div class="form-group">
                <label for="category">Category : </label>
                <input type="text" class="form-control" id="category">
                <!-- <textarea class="form-control" id="description"></textarea>  -->
            </div>

            <div class="form-group">
                <label for="price">Price : </label>
                <input type="number" class="form-control" id="price">
                <!-- <textarea class="form-control" id="description"></textarea>  -->
            </div>

            <button type="button" id="save" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script>
        $('#save').click(function() {

            $goods = $('#goods').val();
            $category = $("#category").val();
            $price = $('#price').val();



            $.ajax({
                url: "insert.php",
                method: "POST",
                data: {
                    goodscol: $goods,
                    categorycol: $category,
                    pricecol: $price
                },
                success: function(dataabc) {
                    window.location.href = "index.php";
                }
            });


        });
    </script>


</body>

</html>