<?php

if (!$_SESSION['Active_Email']) {
    header("location: login.php");
}

?>