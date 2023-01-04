<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .imgSet {
        height: 200px;
        width: 200px;
        display: block;
        background-position: center !important;
        background-size: cover !important;
    }
</style>

<body>
    <?php
    include "Group/nav.php";
    include "PHP/db.php";

    $select = "SELECT * FROM products";
    $result_select = mysqli_query($conn, $select);
    $rows = mysqli_fetch_array($result_select);
    ?>
    <div class="container py-5 text-center">

        <div class="row row-cols-lg-2 row-col-md-2 row-cols-mb-1">
            <div class="col text-start">
                <span class="badge mb-3 bg-primary"><?php echo $rows['id'] ?></span>
                <div class="imgSet" style=" background: url('upload/<?php echo $rows['photo']; ?>')" alt="Apple Computer">
                </div>
            </div>
            <div class="col">
                <h1><?php echo $rows['name'];?></h1>
            </div>
        </div>
    </div>
</body>

</html>