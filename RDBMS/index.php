<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "PHP/db.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    .imgSet {
        height: 200px;
        display: block;
        background-position: center !important;
        background-size: cover !important;
    }
</style>

<body>
    <?php
    include "Group/nav.php";
    ?>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center flex-wrap">
                    <?php
                    $select_product = "select * from products ORDER BY id DESC";
                    $result_select_product = mysqli_query($conn, $select_product);
                    while ($row = mysqli_fetch_array($result_select_product)) {
                    ?>
                        <div class="col mb-5" style="width: 420px;">
                            <a href="product.php?q=<?php echo $row['id'] ?>" class="text-decoration-none">
                                <div class="card text-black mb-5 pb-2 shadow-lg rounded-5">
                                    <div class="card-img-top imgSet" style=" background: url('upload/<?php echo $row['photo']; ?>')" alt="Apple Computer"></div>
                                    <div class="card-body">
                                        <div style="height: 75px;" class="mb-2">
                                            <p class="card-title"> <span class="badge bg-primary me-2 fw-bold">#<?php echo $row['id'] ?> </span> <span class="fs-5 fw-bold" style="font-family: monospace;"><?php echo $row['name'] ?></span> </p>
                                        </div>
                                        <div class="text-end">
                                            <p class="fw-bolder fs-4 text-danger mb-1"><sup>₹</sup> <?php echo $row['price'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Shopping Mart</a>
        </div>
    </footer>
</body>

</html>