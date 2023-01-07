<?php

include "../../database/connection.php";

if (isset($_POST['Update'])) {
    $Name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];
    $Email = $_REQUEST['Email'];
    $insert_query = "UPDATE customers SET name='$Name',password='$Password' WHERE id = $active_user_id";
    $insert_result = mysqli_query($conn, $insert_query);
    if ($insert_result) {
        header("location: ../../html/home/");
    }
}

?>