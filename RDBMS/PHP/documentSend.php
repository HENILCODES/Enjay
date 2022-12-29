<?php
session_start();
include "db.php";

if (isset($_REQUEST['sendDocument'])) {

    $AdNumber = $_REQUEST['ADnumber'];
    

    $select_document = "select * from document where id= $active_user_id";
    $execut_quer = mysqli_query($conn, $select_document);
    $result_execu_quer = mysqli_fetch_array($execut_quer);

    if (empty($result_execu_quer)) {
        $insert = "insert into document values($active_user_id,$AdNumber)";
        $execut = mysqli_query($conn, $insert);
        if ($execut) {
            header("location: ../documents.php");
        }
    } else {
        echo "<h2>403 Data Already exists</h2>";
    }
}


