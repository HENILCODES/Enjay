<!DOCTYPE html>
<?php
session_start();
include "PHP/db.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Document</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="PHP/documentSend.php" method="POST">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="Anumber">Adhar Number</label>
                            <input required type="number" name="ADnumber" id="Anumber" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block w-100 mb-4" name="sendDocument">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "Group/nav.php";
    ?>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                        <div class="card-body">
                            <?php
                            $select_document = "select * from document where id= $active_user_id";
                            $execut_quer = mysqli_query($conn, $select_document);
                            $result_execu_quer = mysqli_fetch_array($execut_quer);
                            ?>
                            <?php
                            if (!empty($result_execu_quer)) {
                            ?>
                                <div class="mb-4">
                                    <h6 ><span class="badge bg-secondary me-2">User Id :</span><?php echo $active_user_id; ?></h6>
                                    <h5 class="card-title"> <span class="badge bg-secondary me-2">Adhar Number :</span><?php echo $result_execu_quer['number']; ?></h5>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="text-center">
                                <?php
                                if (empty($result_execu_quer)) {
                                ?>
                                    <h5 class="card-title">No Data Found</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                        <i class="bi bi-plus-square fs-4"></i>
                                    </button>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>