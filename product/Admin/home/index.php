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
    include "../database/connection.php";
    include "../master/Nav.php";

    $select_product = "SELECT COUNT(id) As Total FROM products";
    $execute_product = mysqli_query($conn, $select_product);
    $total_product = mysqli_fetch_array($execute_product);

    $select_customer = "SELECT COUNT(id) As Total FROM customers";
    $execute_customer = mysqli_query($conn, $select_customer);
    $total_customer = mysqli_fetch_array($execute_customer);

    $select_orders = "SELECT COUNT(id) As Total FROM customer_products";
    $execute_orders = mysqli_query($conn, $select_orders);
    $total_orders = mysqli_fetch_array($execute_orders);
    ?>
    <div class="container">
        <section style="background-color: #eee;" class="shadow ps-5 pe-5">
            <div class="container my-5 py-5">
                <div class="pb-5">
                    <h4> <span class="badge bg-success">Admin : </span> <b><?php echo $_SESSION['Active_Admin_name']; ?></b></h4>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 flex-wrap justify-content-evenly">
                    <a href="../product/" class="col text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_product['Total']; ?> </p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Products</p>
                            </div>
                        </div>
                    </a>
                    <a href="../customer/" class="col text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_customer['Total']; ?> </p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Customer</p>
                            </div>
                        </div>
                    </a>
                    <a href="../order/" class="col text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo $total_orders['Total']; ?> </p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Orders</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>