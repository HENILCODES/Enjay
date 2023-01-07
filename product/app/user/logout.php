
<?php
session_start();
if(isset($_REQUEST['logout'])){
    unset($_SESSION['Active_User']);
    unset($_SESSION['Active_User_name']);
    header("location: ../../html/user/login/");

}
?>