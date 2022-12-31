<?php
session_start();
include "db.php";

if (isset($_REQUEST['buy'])) {
    
    $product_id = $_REQUEST['product_id'];
    $customer_id = $active_user_id;

    $insert_order = "insert into customer_products (customer_id,product_id) values ($customer_id,$product_id)";
    $execut_insert = mysqli_query($conn,$insert_order);
    if ($execut_insert) {
        header("location: ../cartFile.php");
    }
}

?>