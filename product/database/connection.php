<?php
$activeUserName = "";
session_start();
if (isset($_SESSION['ActiveUser'])) {
    $activeUserId = $_SESSION['ActiveUser'];
}
if (isset($_SESSION['ActiveUserName'])) {
    $activeUserName = $_SESSION['ActiveUserName'];
}
$conn = mysqli_connect("localhost", "root", "", "store");
if (!$conn) {
    echo "Not Connect";
}else{
    echo "A";
}
