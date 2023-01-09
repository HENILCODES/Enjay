<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<?php

include "../../database/connection.php";

if (isset($_POST['Register'])) {
    $Name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];
    $Email = $_REQUEST['Email'];

    $select = "SELECT * FROM customers WHERE email = '$Email'";
    $select_Result = mysqli_query($conn, $select);

    if (mysqli_num_rows($select_Result) > 0) {
?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
            Email Address already exists. <a href="../register.php" class="alert-link">try again</a>
        </div>
<?php
    } else {
        $insertQuery = "insert into customers (name, password, email) values ('$Name','$Password','$Email')";
        $insertResult = mysqli_query($conn, $insertQuery);
        if ($insertResult) {
            header("location: ../../html/product/");
        }
    }
}
?>