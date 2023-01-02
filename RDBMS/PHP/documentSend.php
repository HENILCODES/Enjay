<?php
session_start();
include "db.php";

if (isset($_REQUEST['sendDocument'])) {

    $DocumentNumber = $_REQUEST['DocumentNumber'];
    $DocumentType = $_REQUEST['document'];

    $select_document = "select * from document where customers_id= $active_user_id";
    $execut_quer = mysqli_query($conn, $select_document);
    $result_execu_quer = mysqli_fetch_array($execut_quer);

    if (empty($result_execu_quer)) {
        $insert = "insert into document (customers_id,number,name) values($active_user_id,'$DocumentNumber','$DocumentType')";
        $execut = mysqli_query($conn, $insert);
        if ($execut) {
            header("location: ../documents.php");
        }
    } else {
        echo "<h2>403 Data Already exists</h2>";
    }
}


if (isset($_REQUEST['deleteDocument'])) {
    $deleteDocument = $_REQUEST['deleteDocument'];
    echo $deleteDocument;
    $deleteQuery = "DELETE FROM document WHERE customers_id = $deleteDocument";
    $executDelete = mysqli_query($conn,$deleteQuery);
    if ($executDelete) {
        header("location: ../documents.php");
    }
}

