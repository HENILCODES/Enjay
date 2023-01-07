<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<!-- register -->
<?php

include "../../database/connection.php";




// Log in
if (isset($_POST['Login'])) {

    $Email = $_REQUEST['Email'];
    $Password = $_REQUEST['Password'];

    $select = "SELECT * FROM customers WHERE email = '$Email' AND password = '$Password'";
    $select_Result = mysqli_query($conn, $select);
    $fetch_row = mysqli_fetch_array($select_Result);

    if (mysqli_num_rows($select_Result) > 0) {
        session_start();
        $_SESSION['Active_User'] = $fetch_row['id'];
        $_SESSION['Active_User_name'] = $fetch_row['name'];
        header("location: ../../html/home/");
    } else {
    ?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
            record not found. <a href="../login.php" class="alert-link">try again</a>
        </div>
<?php
    }
}

?>