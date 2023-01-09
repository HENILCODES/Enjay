<?php
session_start();

if (!$_SESSION['ActiveAdminName']) {
    header("location: ../login/");
}
?>