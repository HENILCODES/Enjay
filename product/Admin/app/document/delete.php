<?php
include "../../database/connection.php";

if (isset($_REQUEST['Document_id'])) {
    $Document_id = $_REQUEST['Document_id'];

    $delete_query = "delete from document where id = $Document_id";
    $execute_delet = mysqli_query($conn, $delete_query);
    if ($execute_delet) {
        header("location: ../../document/");
    }
}
