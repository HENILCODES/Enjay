<?php

if (!$_SESSION['Active_User']) {
    header("location: login.php");
}

?>