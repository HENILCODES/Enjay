<?php
include "../../database/connection.php";

if (isset($_REQUEST['AddAdmin'])) {

    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    
        $inseet = "INSERT INTO admin (name, password) VALUES ('$name','$password')";
        $execute = mysqli_query($conn, $inseet);

        if ($execute) {
            header("location: ../../html/admin/");
        }
    }
