<?php
include "../../database/connection.php";

if (isset($_REQUEST['Order_id'])) {
    $Order_id = $_REQUEST['Order_id'];

    $delete_query = "delete from customer_products where id = $Order_id";
    $execute_delet = mysqli_query($conn, $delete_query);
    if ($execute_delet) {
        header("location: ../../order/");
    }
}
