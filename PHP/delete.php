<?php

include "db.php";


if (isset($_REQUEST['deleteData'])) {
    
    $delete_query = "delete from student where id = '$_REQUEST[deleteData]'";
    $exec_delete = mysqli_query($conn,$delete_query);
    if ($exec_delete) {
        header("location: ../index.php");
    }else{
        echo "delete 0";
    }
}
