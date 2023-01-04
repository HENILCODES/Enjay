<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "Group/nav.php";
    ?>
    <div class="container my-3">
        <form class="row g-3 w-50 m-auto" autocomplete="off" action="PHP/addProducts.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center"> Name</spna>
                <input required type="text" class="form-control" name="Product_name" placeholder="Product Name" >
            </div>
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Price</spna>
                <input required type="text" class="form-control" name="Product_price" placeholder="Price">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Photo</span>
                <input required type="file" class="form-control form-control-lg" name="Product_photo" accept="image/*">
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50" name="AddProducts">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>