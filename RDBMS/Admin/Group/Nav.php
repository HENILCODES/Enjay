<?php
session_start();
include "Php/security.php";
?>
<head>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<nav class="navbar navbar-expand-lg sticky-top shadow navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fs-3 fw-bold" href="index.php">Shopping Mart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-2 ">
                <li class="nav-item dropdown pe-2">
                    <a href="Php/logout.php?logout=true" class="btn btn-danger">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="../JS/bootstrap.bundle.min.js"></script>
<script src="../JS/jquery-3.6.0.js"></script>