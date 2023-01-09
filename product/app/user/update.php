<?php
include "../../database/connection.php";

if (isset($_REQUEST['Update'])) {
    $Name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];
    
    $insertQuery = "UPDATE customers SET name='$Name',password='$Password' WHERE id = $activeUserId";
    $insertResult = mysqli_query($conn, $insertQuery);
    if ($insertResult) {
        header("location: ../../html/user/profile/");
    }
}

?>