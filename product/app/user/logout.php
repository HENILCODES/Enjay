
<?php
session_start();
if(isset($_REQUEST['logout'])){
    unset($_SESSION['ActiveUser']);
    unset($_SESSION['ActiveUserName']);
    header("location: ../../html/user/login/");

}
?>