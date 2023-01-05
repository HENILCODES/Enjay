<?php
session_start();
include "db.php";

if (isset($_REQUEST['AddProducts'])) {

    $product_name = $_REQUEST['Product_name'];
    $price = $_REQUEST['Product_price'];
    $photos = $_FILES['Product_photo']['name'];

    if (move_uploaded_file($_FILES['Product_photo']['tmp_name'], "../../upload/" . $photos)) {
        $inseet_Product = "INSERT INTO products (name, price,photo) VALUES ('$product_name',$price,'$photos')";
        $execute_insert_product = mysqli_query($conn, $inseet_Product);

        if ($execute_insert_product) {
            header("location: ../product.php");
        }
    }
}
