
<?php

include "/opt/lampp/htdocs/PHP/Enjay/product/Admin/database/connection.php";

if (isset($_POST['Login'])) {

    $name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];

    $select = "SELECT * FROM admin WHERE name = '$name' AND password = '$Password'";
    $selectResult = mysqli_query($conn, $select);
    $fetchRow = mysqli_fetch_array($selectResult);

    if (mysqli_num_rows($selectResult) > 0) {
        session_start();
        $_SESSION['ActiveAdminName'] = $fetchRow['name'];
        header("location: ../../html/home/");
    } else {
?>
        <h1 class="alert alert-danger w-50 m-auto text-center" role="alert">
            record not found. <a href="../login.php" class="alert-link">try again</a>
        </h1>
<?php
    }
}
