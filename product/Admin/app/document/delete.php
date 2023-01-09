<?php
include "../../database/connection.php";

if (isset($_REQUEST['Document_id'])) {
    $DocumentId = $_REQUEST['Document_id'];

    $deleteQuery = "delete from document where id = $DocumentId";
    $executeDelet = mysqli_query($conn, $deleteQuery);
    if ($executeDelet) {
        header("location: ../../html/document/");
    }
}
