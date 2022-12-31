<!DOCTYPE html>
<?php
session_start();
include "PHP/db.php";
include "PHP/security.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="JS/bootstrap.bundle.min.js"></script>
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
                            <label for="document" class="form-label">Proof Type</label>
                            <select class="form-select form-select-lg" id="document" name="document">
                                <option value="Adhar Card">Aadhar Card</option>
                                <option value="Voter Card">Voter Card</option>
                                <option value="Pan Card">Pan card</option>
                                <option value="Driving Licence">Driving Licence</option>
                            </select>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="Document">Proof Number</label>
                            <input required type="text" name="DocumentNumber" id="Document" class="form-control" />
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
                            $select_document = "select * from document where customers_id= $active_user_id";
                            $execut_quer = mysqli_query($conn, $select_document);
                            $result_execu_quer = mysqli_fetch_array($execut_quer);
                            ?>
                            <?php
                            if (!empty($result_execu_quer)) {
                            ?>
                                <div class="mb-4">
                                    <h6><span class="badge bg-secondary me-2">User Id :</span><?php echo $active_user_id; ?></h6>
                                    <h6><span class="badge bg-secondary me-2">Proof Type :</span><?php echo $result_execu_quer['name']; ?></h6>
                                    <h5 class="card-title"> <span class="badge bg-secondary me-2">Proof Number :</span><?php echo $result_execu_quer['number']; ?></h5>
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