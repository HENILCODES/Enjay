<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "../../database/security.php";
    ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update...</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>

    <?php
    include "../../database/connection.php";

    if (isset($_REQUEST['Admin_id'])) {
        $query = "select * from admin where id=$_REQUEST[Admin_id]";
        $execute = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_array($execute)) {
            $id = $row['id'];
            $name = $row['name'];
            $password = $row['password'];
        }
    }
    ?>

    <div class="container my-3">
        <div class="my-5 text-center">
            <h1 class="text-success">Update Admin</h1>
        </div>
        <form class="row g-3 w-50 m-auto" autocomplete="off" method="post">
            <div class="input-group w-25">
                <spna class="input-group-text justify-content-center"> Id</spna>
                <input required type="text" class="form-control" disabled value="<?php echo $id; ?>" name="id" placeholder="Product Name">
            </div>
            <div class="input-group">
                <spna class="input-group-text justify-content-center"> Name</spna>
                <input required type="text" class="form-control" value="<?php echo $name; ?>" name="AdminName" placeholder="Product Name">
            </div>
            <div class="input-group">
                <spna class="input-group-text justify-content-center">Password</spna>
                <input required type="password" class="form-control" name="AdminPassword" placeholder="Password">
            </div>
            <div class="mt-5 text-center">
                <button type="submit" class="btn btn-primary w-50" name="updateAdmin">update</button>
            </div>
        </form>
    </div>
</body>
<?php

if (isset($_REQUEST['updateAdmin'])) {
    $id = $id;
    $name = $_REQUEST['AdminName'];
    $password = $_REQUEST['AdminPassword'];

    $query = "UPDATE admin SET name='$name',password='$password' WHERE id = $id";
    $execQuery = mysqli_query($conn, $query);
    if ($execQuery) {
        header("location: ../../html/admin/");
    }
}
?>

</html>