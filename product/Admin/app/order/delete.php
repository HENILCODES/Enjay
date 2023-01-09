<?php
include "../../database/connection.php";

if (isset($_REQUEST['Order_id'])) {
    $OrderId = $_REQUEST['Order_id'];

    $deleteQuery = "delete from customer_products where id = $OrderId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: ../../html/order/");
    }
}
