<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<!-- register -->
<?php
include "db.php";

if (isset($_POST['Register'])) {

    $Name = $_REQUEST['Name'];
    $Password = $_REQUEST['Password'];
    $Email = $_REQUEST['Email'];

    $select = "SELECT * FROM users WHERE email = '$Email'";
    $select_Result = mysqli_query($conn, $select);

    if (mysqli_num_rows($select_Result) > 0) {
?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
            Email Address already exists. <a href="../register.php" class="alert-link">try again</a>
        </div>
    <?php
    } else {
        $insert_query = "insert into user_detail (name, password, email) values ('$Name','$Password','$Email')";
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result) {
            header("location: ../login.php");
        }
    }
}


// Log in
if (isset($_POST['Login'])) {

    $Email = $_REQUEST['Email'];
    $Password = $_REQUEST['Password'];

    $select = "SELECT * FROM users WHERE email = '$Email' AND password = '$Password'";
    $select_Result = mysqli_query($conn, $select);

    if (mysqli_num_rows($select_Result) > 0) {
        echo "Use";
        session_start();
        $_SESSION['Active_Email'] = $Email;
        header("location: ../index.php");
    } else {
    ?>
        <div class="alert alert-danger w-50 m-auto text-center" role="alert">
        record not found. <a href="../login.php" class="alert-link">try again</a>
        </div>
<?php
    }
}

?>