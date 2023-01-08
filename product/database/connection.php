<?php
$active_user_name = "";
session_start();
if (isset($_SESSION['Active_User'])) {
    $active_user_id = $_SESSION['Active_User'];
}
if (isset($_SESSION['Active_User_name'])) {
    $active_user_name = $_SESSION['Active_User_name'];
}
$conn = mysqli_connect("localhost", "root", "", "store");
if (!$conn) {
    die("Data Base error");
}
