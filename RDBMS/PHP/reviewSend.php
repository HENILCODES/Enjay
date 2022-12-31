<?php
session_start();
include "db.php";

if (isset($_REQUEST['send'])) {

    $U_reviews = $_REQUEST['reviews'];
    $user = $active_user_id;

    $insert = "insert into review (name,customer_id) VALUES ('$U_reviews',$user)";
    $exe_query = mysqli_query($conn, $insert);

    if ($exe_query) {
        header("location: ../index.php");
    }
}
