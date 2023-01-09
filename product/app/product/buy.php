<link rel="stylesheet" href="../CSS/bootstrap.min.css">
<?php
include "../../database/connection.php";


if (isset($_REQUEST['quantity'])) {

    $product_id = $_REQUEST['product_id'];
    $customer_id = $active_user_id;
    $quantity = $_REQUEST['quantity'];
    $insert_order = "insert into customer_products (customer_id,product_id,quantity) values ($customer_id,$product_id,$quantity)";
    $execut_insert = mysqli_query($conn, $insert_order);
    if ($execut_insert) {
        header("location: ../../html/order/");
    }
}
