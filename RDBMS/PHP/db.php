<?php
$active_user_id = $_SESSION['Active_User'];
$conn = mysqli_connect("localhost", "root", "", "store");
if (!$conn) {
    die("Data Base error");
}
?>