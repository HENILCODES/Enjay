<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Orders</title>
</head>

<body>
    <?php
    include "Group/Nav.php";
    include "Php/db.php";
    ?>
    <div class="modal" id="AddProduct">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="container my-3">
                        <form class="row g-3 m-auto" autocomplete="off" action="Php/addProducts.php" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center"> Name</spna>
                                <input required type="text" class="form-control" name="Product_name" placeholder="Product Name">
                            </div>
                            <div class="input-group">
                                <spna class="input-group-text justify-content-center">Price</spna>
                                <input required type="text" class="form-control" name="Product_price" placeholder="Price">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text justify-content-center">Photo</span>
                                <input required type="file" class="form-control form-control-lg" name="Product_photo" accept="image/*">
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary" name="AddProducts">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">
                <div class="text-center">
                    <h2 class="fw-bold">Orders Table</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                </div>
                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>order id</th>
                        <th>customer id</th>
                        <th>product id</th>
                        <th>customer name</th>
                        <th>quantity</th>
                        <th>product name</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody  id="Search_table">
                        <?php
                        $select_product = "SELECT customer_products.id AS order_id,customer_products.id AS customer_id ,products.id AS product_id,customers.name AS customer_name,customer_products.quantity,products.name AS product_name,products.price AS product_price,products.photo FROM customer_products INNER JOIN customers ON customer_products.customer_id = customers.id INNER JOIN products ON customer_products.product_id = products.id ORDER BY customer_products.id DESC";
                        $result_select_product = mysqli_query($conn, $select_product);
                        while ($row = mysqli_fetch_array($result_select_product)) {
                        ?>
                            <tr>
                                <td><?php echo $row['order_id'] ?></td>
                                <td><?php echo $row['customer_id'] ?></td>
                                <td><?php echo $row['product_id'] ?></td>
                                <td><?php echo $row['customer_name'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td><?php echo $row['product_price'] ?></td>
                                <td> <img src="../upload/<?php echo $row['photo'] ?>" width="80px"> </td>
                                <td>
                                    <a href="Php/deleteRecord.php?Order_id=<?php echo $row['order_id'] ?>" class="btn btn-danger bi bi-trash"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
<script src="../JS/search.js"></script>

</html>