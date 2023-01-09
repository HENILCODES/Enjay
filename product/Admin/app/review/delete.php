<?php
include "../../database/connection.php";

if (isset($_REQUEST['review_id'])) {
    $review_id = $_REQUEST['review_id'];

    $delete_query = "delete from reviews where id = $review_id";
    $execute_delet = mysqli_query($conn, $delete_query);
    if ($execute_delet) {
        header("location: ../../review/");
    }
}
