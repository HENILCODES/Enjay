
<?php
session_start();
if(isset($_REQUEST['logout'])){
    session_destroy();
    unset($_SESSION['Active_Admin_name']);
    header('location: ../login.php');
}
?>