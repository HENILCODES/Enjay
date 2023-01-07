<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
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
    include "../master/nav.php";

    $select = "SELECT * FROM products where id=$_REQUEST[q]";
    $result_select = mysqli_query($conn, $select);
    $rows = mysqli_fetch_array($result_select);
    ?>
    <div class="py-5">
        <div class="container py-5 text-center">
            <div class="row row-cols-lg-2 row-col-md-2 row-cols-mb-1">
                <div class="col col-lg-4 text-start">
                    <span class="badge mb-3 bg-primary"><?php echo $rows['id'] ?></span><br>
                    <img class="col-10" src="../upload/<?php echo $rows['photo'] ?>" alt="">
                </div>
                <div class="col">
                    <div class="container text-start">
                        <div class="title">
                            <h1><?php echo $rows['name']; ?></h1>
                        </div>
                        <div class="description py-3 ">
                            <!-- <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore fugit doloribus consectetur.</p> -->
                        </div>
                        <div class="text-end">
                            <form method="get" action="../../app/product/buy.php">
                                <input type="hidden" name="product_id" value="<?php echo $rows['id']; ?>">
                                <p class="fw-bolder fs-4 text-danger mb-1"><sup>₹</sup> <?php echo $rows['price'] ?></p>
                                <?php
                                if (isset($_SESSION['Active_User'])) {
                                ?>
                                    <div class="d-flex mt-3 justify-content-end">
                                        <div class="input-group me-3" style="width: 200px;">
                                            <label class="input-group-text">Quantity</label>
                                            <input type="number" max="10" min="1" value="1" maxlength="10" class="form-control" name="quantity">
                                        </div>
                                        <div class="bo">
                                            <button class="btn btn-success" type="submit" name="buy">Buy</button>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>

                    <!-- reviews -->
                    <div class="container w-75">
                        <div class="container mt-5">
                            <hr>
                            <?php
                            if (isset($_SESSION['Active_User'])) {
                            ?>
                                <form method="post">
                                    <div class="input-group">
                                        <input type="hidden" name="product_id" value="<?php echo $rows['id']; ?>">
                                        <input autocomplete="off" required type="text" class="form-control" name="reviews" placeholder="type reviewss hear" id="sname">
                                        <button type="submit" class="input-group-text fw-bold justify-content-center" name="send">send</button>
                                    </div>
                                </form>
                                <hr>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="text-start">
                            <span>Reviews</span>
                            <div class="container mt-2" style="height: 250px; overflow-y: auto;">
                                <?php
                                $select_reviews = "SELECT reviews.name,customers.name as customer_name from reviews INNER JOIN customers ON reviews.customer_id = customers.id WHERE product_id='$rows[id]' ORDER by reviews.id DESC";
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
        </div>
    </div>
</body>
<?php
if (isset($_REQUEST['send'])) {

    $U_reviews = $_REQUEST['reviews'];
    $product_id = $_REQUEST['product_id'];
    $user = $active_user_id;

    $insert = "insert into reviews (name,customer_id,product_id) VALUES ('$U_reviews',$user,$product_id)";
    $exe_query = mysqli_query($conn, $insert);
    if ($exe_query) {
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
?>

</html>