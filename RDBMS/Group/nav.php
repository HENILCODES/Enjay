<nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"> Home</a>
                </li>
                <li class="nav-item">
                    <a href="documents.php" class="nav-link"> Documents</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['Active_User'])) {
                    ?>
                        <a href="PHP/logout.php?logout=true" class="nav-link "> <?php echo $_SESSION['Active_User_name']; ?> <i class="bi bi-box-arrow-right"></i></a>
                    <?php
                    } else {
                    ?>
                        <a href="login.php" class="nav-link "> Log in </a>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>