<?php
session_start();
include "db.php";

if (isset($_REQUEST['buy'])) {
    
    $product_id = $_REQUEST['product_id'];
    $customer_id = $active_user_id;
    $quantity = $_REQUEST['quantity'];

    $insert_order = "insert into orders (quantity,customer_id,product_id) values ($quantity,$customer_id,$product_id)";
    $execut_insert = mysqli_query($conn,$insert_order);
    if ($execut_insert) {
        echo "Add";
        header("location: ../cartFile.php");
    }
}

?>