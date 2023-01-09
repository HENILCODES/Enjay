
<?php
session_start();
if(isset($_REQUEST['logout'])){
    unset($_SESSION['ActiveAdminName']);
    header('location: ../../html/login/');
}
?>