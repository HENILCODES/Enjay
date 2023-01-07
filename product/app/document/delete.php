<?php
include "../../database/connection.php";
if (isset($_REQUEST['deleteDocument'])) {
    $deleteDocument = $_REQUEST['deleteDocument'];
    echo $deleteDocument;
    $deleteQuery = "DELETE FROM document WHERE customers_id = $deleteDocument";
    $executDelete = mysqli_query($conn, $deleteQuery);
    if ($executDelete) {
        header("location: ../../html/user/profile/");
    }
}
