<?php

if (!$_SESSION['ActiveAdminName']) {
    header("location: ../login/");
}
?>