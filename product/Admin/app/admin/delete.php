<?php
include "../../database/connection.php";

if (isset($_REQUEST['Admin_id'])) {
    $AdminId = $_REQUEST['Admin_id'];

    $deleteQuery = "delete from admin where id = $AdminId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: ../../html/admin/");
    }
}
