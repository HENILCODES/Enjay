<?php

include "Php/db.php";
if (isset($_REQUEST['updateProduct'])) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['Product_name'];
    $price = $_REQUEST['Product_price'];


    if (isset($_REQUEST['Product_photo'])) {
        $query = "UPDATE products SET name='$name',price=$price WHERE id = $id";
    } else {
        $s_photo = $_FILES['Product_photo']['name'];
        move_uploaded_file($_FILES['Product_photo']['tmp_name'], "../upload/" . $s_photo);
        $query = "UPDATE products SET name='$name',price=$price,photo='$s_photo' WHERE id = $id";
    }
    $exec_query = mysqli_query($conn, $query);
    if ($exec_query) {
        header("location: index.php");
    }
}
