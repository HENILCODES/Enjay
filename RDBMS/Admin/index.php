<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <?php
    include "Group/Nav.php";
    include "Php/db.php";

    $select_product = "SELECT COUNT(id) As Total FROM products";
    $execute_product = mysqli_query($conn, $select_product);
    $total_product = mysqli_fetch_array($execute_product);

    $select_customer = "SELECT COUNT(id) As Total FROM customers";
    $execute_customer = mysqli_query($conn, $select_customer);
    $total_customer = mysqli_fetch_array($execute_customer);
    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow ps-5 pe-5">
            <div class="container my-5 py-5">
                <div class="d-flex justify-content-evenly">
                    <a href="product.php" class="text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_product['Total']; ?> </p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Products</p>
                            </div>
                        </div>
                    </a>
                    <a href="customer.php" class="text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_customer['Total']; ?> </p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Customer</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>