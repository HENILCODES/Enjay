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
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
    <section style="background-color: #eee;" class="pt-3">
        <div class="container py-5 ">
            <div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center flex-wrap">
                    <?php
                    $select_product = "select * from products ORDER BY id DESC";
                    $result_select_product = mysqli_query($conn, $select_product);

                    while ($row = mysqli_fetch_array($result_select_product)) {
                    ?>

                        <div class="col mb-5" style="width: 420px;">
                            <div class="card text-black mb-5 shadow-lg rounded-5">
                                <div class="card-img-top imgSet" style=" background: url('upload/<?php echo $row['photo']; ?>')" alt="Apple Computer"></div>
                                <div class="card-body" >
                                    <div style="height: 75px;" class="mb-2">
                                        <p class="card-title"> <span class="badge bg-primary me-2 fw-bold">#<?php echo $row['id'] ?> </span> <span class="fs-5 fw-bold" style="font-family: monospace;"><?php echo $row['name'] ?></span> </p>
                                    </div>
                                    <div class="text-end">
                                        <form method="get" action="PHP/buy.php">
                                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                            <p class="fw-bolder fs-4 text-danger mb-1"><sup>₹</sup> <?php echo $row['price'] ?></p>
                                            <?php
                                            if (isset($_SESSION['Active_User'])) {
                                            ?>
                                                <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                            <?php
                                            }
                                            ?>
                                        </form>
                                    </div>
                                    <div class="container my-3">
                                        <hr>
                                        <?php
                                        if (isset($_SESSION['Active_User'])) {
                                        ?>
                                            <form class="row g-3" action="PHP/reviewSend.php" method="post">
                                                <div class="input-group">
                                                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                                    <input autocomplete="off" required type="text" class="form-control" name="reviews" placeholder="type reviewss hear" id="sname">
                                                    <button type="submit" class="input-group-text fw-bold justify-content-center" name="send">send</button>
                                                </div>
                                            </form>
                                            <hr>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <span>Reviewss</span>
                                    <div>
                                        <div class="container mt-2" style="height: 100px; overflow-y: auto;">
                                            <?php
                                            $select_reviews = "SELECT reviews.name,customers.name as customer_name from reviews INNER JOIN customers ON reviews.customer_id = customers.id WHERE product_id='$row[id]' ORDER by reviews.id DESC";
                                            $execute_select_reviews = mysqli_query($conn, $select_reviews);
                                            while ($row = mysqli_fetch_array($execute_select_reviews)) {
                                            ?>
                                                <div class="box ps-2">
                                                    <span class="badge bg-secondary"><?php echo $row['customer_name']; ?></span>
                                                    <div class="ms-2">
                                                        <p><?php echo $row['name']; ?></p>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="JS/bootstrap.bundle.min.js"></script>

</html>