<?php
include "../../database/connection.php";

if (isset($_REQUEST['Update'])) {
    $Name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];
    
    $insert_query = "UPDATE customers SET name='$Name',password='$Password' WHERE id = $active_user_id";
    $insert_result = mysqli_query($conn, $insert_query);
    if ($insert_result) {
        header("location: ../../html/user/profile/");
    }
}

?>