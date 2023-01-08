<?php
include "../../database/connection.php";

if (isset($_REQUEST['Product_id'])) {
    $Product_id = $_REQUEST['Product_id'];

    $delete_review = "delete from reviews where product_id = $Product_id";
    mysqli_query($conn, $delete_review);

    $delete_order = "delete from customer_products where product_id = $Product_id";
    mysqli_query($conn, $delete_order);

    $delete_query = "delete from products where id = $Product_id";
    $execute_delet = mysqli_query($conn, $delete_query);
    if ($execute_delet) {
        header("location: ../../product/");
    }
}
