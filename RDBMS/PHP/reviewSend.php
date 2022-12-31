<?php
session_start();
include "db.php";

if (isset($_REQUEST['send'])) {

    $U_reviews = $_REQUEST['reviews'];
    $product_id = $_REQUEST['product_id'];
    $user = $active_user_id;

    $insert = "insert into review (name,customer_id,product_id) VALUES ('$U_reviews',$user,$product_id)";
    $exe_query = mysqli_query($conn, $insert);

    if ($exe_query) {
        header("location: ../index.php");
    }
}
