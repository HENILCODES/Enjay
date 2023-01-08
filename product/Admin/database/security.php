<?php
session_start();

if (!$_SESSION['Active_Admin_name']) {
    header("location: ../login/");
}
?>