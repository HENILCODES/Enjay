<?php
// session_start();

if (!$_SESSION['Active_User']) {
    header("location: ../user/login/");
}
?>