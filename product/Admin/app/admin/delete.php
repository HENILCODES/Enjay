<?php
include "../../database/connection.php";

if (isset($_REQUEST['Admin_id'])) {
    $Admin_id = $_REQUEST['Admin_id'];

    $delete_query = "delete from admin where id = $Admin_id";
    $execute_delet = mysqli_query($conn, $delete_query);
    if ($execute_delet) {
        header("location: ../../admin/");
    }
}
