<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "PHP/db.php";
include "PHP/security.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart File</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "Group/nav.php";
    ?>
    <div class="container my-3">
        <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                            <div>
                                Customer id : <?php echo $active_user_id; ?>
                            </div>
                        </div>
                        <?php
                        $seletc_order = "select customers.id AS customer_id ,orders.id,orders.product_id,orders.quantity,products.name AS product_name from customers INNER JOIN orders ON orders.customer_id=$active_user_id INNER JOIN products ON products.id = orders.product_id";
                        $execute_select_order = mysqli_query($conn, $seletc_order);

                        while ($rows = mysqli_fetch_array($execute_select_order)) {
                            print_r($rows)
                        ?>
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="upload/lap.jpeg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2"><?php echo $rows['product_name'] ?></p>
                                            <span class="badge bg-primary"># <?php echo $rows['product_id']; ?></span>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex" style="justify-content: space-between;">
                                            <h5 class="mb-0">$ 499.00</h5>
                                            <span class="badge bg-secondary fs-6"> X </span>
                                            <h5 class="mb-0"> <?php echo $rows['quantity']; ?> </h5>
                                        </div>
                                        Cust_Id :<?php echo $rows['customer_id']; ?>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <?php echo $rows['id']; ?>
                                            <a href="PHP/deleteOrder.php?&orderId=<?php echo $rows['id']; ?>" class="text-danger"><i class="bi bi-trash fs-3"></i></a>
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
    </div>
</body>

</html>