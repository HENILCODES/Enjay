<?php

include "db.php";

if (isset($_REQUEST['orderId'])) {
    $orderId = $_REQUEST['orderId'];

    $delete_query = "delete from orders where id = $orderId";
    $execute_delet = mysqli_query($conn,$delete_query);
    if ($execute_delet) {
        header("location: ../cartFile.php");
    }
}

?>