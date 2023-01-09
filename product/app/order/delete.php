<?php
include "../../database/connection.php";

if (isset($_REQUEST['orderId'])) {
    $orderId = $_REQUEST['orderId'];

    $deleteQuery = "delete from customer_products where id = $orderId";
    $executeDelet = mysqli_query($conn,$deleteQuery);
    if ($executeDelet) {
        header("location: ../../html/order/");
    }
}

?>