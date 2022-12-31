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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "Group/nav.php";
    ?>
    <section style="background-color: #eee;">

        <div class="container py-5 ">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">

                    <?php
                    $select_product = "select * from products ORDER BY id DESC";
                    $result_select_product = mysqli_query($conn, $select_product);

                    while ($row = mysqli_fetch_array($result_select_product)) {
                    ?>

                        <div class="card text-black mb-5">
                            <img src="upload/lap.jpeg" class="card-img-top" alt="Apple Computer" />
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title"> <span class="badge bg-primary"># <?php echo $row['id'] ?> </span> <?php echo $row['name'] ?></h5>
                                </div>
                                <div class="text-end">
                                    <form method="get" action="PHP/buy.php">
                                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                        <p class="text-muted mb-1">$ <?php echo $row['price'] ?></p>
                                        <div class="mb-3 text-left d-flex justify-content-end">
                                            <label class="form-label me-2">Quantity : </label>
                                            <select class="form-select form-select-sm w-25" name="quantity">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
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
                                                <input autocomplete="off" required type="text" class="form-control" name="reviews" placeholder="type reviews hear" id="sname">
                                                <button type="submit" class="input-group-text justify-content-center" name="send">send</button>
                                            </div>
                                        </form>
                                        <hr>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <span>Reviews</span>
                                <div>
                                    <div class="container" style="height: 100px; overflow-y: auto;">
                                        <?php
                                        $select_review = "select customers.name,review.name from customers INNER JOIN review ON customers.id = review.customer_id ORDER BY review.id DESC";
                                        $execute_select_review = mysqli_query($conn, $select_review);
                                        while ($row = mysqli_fetch_array($execute_select_review)) {
                                            // print_r($row);
                                        ?>
                                            <div class="box">
                                                <span class="badge bg-secondary"><?php echo $row[0]; ?></span>
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
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>