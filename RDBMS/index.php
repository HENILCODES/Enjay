<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "PHP/db.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"> Home</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['Active_User'])) {
                    ?>
                        <a href="PHP/logout.php?logout=true" class="nav-link "> <?php echo $_SESSION['Active_User']; ?> <i class="bi bi-box-arrow-right"></i></a>
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
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                        <img src="lap.jpeg" class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title">Believing is seeing</h5>
                                <p class="text-muted mb-4">Apple pro display XDR</p>
                            </div>
                            <div class="container my-3">
                                <?php
                                if (isset($_SESSION['Active_User'])) {
                                ?>
                                    <form class="row g-3" action="PHP/reviewSend.php" method="post">
                                        <div class="input-group">
                                            <input autocomplete="off" required type="text" class="form-control" name="reviews" placeholder="type reviews hear" id="sname">
                                            <button type="submit" class="input-group-text justify-content-center" name="send">send</button>
                                        </div>
                                    </form>
                                <?php
                                }
                                ?>

                            </div>
                            <hr>
                            <span>Reviews</span>
                            <div>
                                <div class="container">
                                    <?php
                                    $select_review = "select * from review ORDER BY id DESC";
                                    $execute_select_review = mysqli_query($conn, $select_review);

                                    while ($row = mysqli_fetch_array($execute_select_review)) {
                                    ?>
                                        <div class="box">
                                            <span class="badge bg-secondary">user</span>
                                            <div class="ms-2">
                                                <p><?php echo $row['name']; ?></p>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>