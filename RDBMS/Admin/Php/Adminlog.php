<link rel="stylesheet" href="../CSS/bootstrap.min.css">
<?php

include "db.php";

if (isset($_POST['Login'])) {

    $name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];

    $select = "SELECT * FROM admin WHERE name = '$name' AND password = '$Password'";
    $select_Result = mysqli_query($conn, $select);
    $fetch_row = mysqli_fetch_array($select_Result);

    if (mysqli_num_rows($select_Result) > 0) {
        session_start();
        $_SESSION['Active_Admin_name'] = $fetch_row['name'];
        header("location: ../index.php");
    } else {
?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
            record not found. <a href="../login.php" class="alert-link">try again</a>
        </div>
<?php
    }
}
