<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include "Group/nav.php";
    include "PHP/db.php";
    $select_profile = "SELECT customers.id,customers.password,customers.name AS Customer_name,customers.email, document.name,document.number
    FROM customers 
        LEFT JOIN document ON document.customers_id = customers.id
    WHERE customers.id = $active_user_id";
    $execut_select_profile = mysqli_query($conn, $select_profile);
    $rowsP = mysqli_fetch_array($execut_select_profile);
    if (!empty($rowsP)) {
    ?>
        <div class="modal" id="deleteDocument">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Document</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="PHP/documentSend.php" method="POST" autocomplete="off">
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
        <div class="modal" id="EditProfile">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="PHP/userLog.php" method="POST" autocomplete="off">
                            <div class="form-outline mb-4">
                                <label class="form-label">User Name</label>
                                <input required type="text" value="<?php echo $rowsP['Customer_name']; ?>" name="Name" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label">New Password</label>
                                <input required type="password" name="Password" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block w-100 mb-4" name="Update">Update</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <section style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 mb-4 mb-lg-0">
                        <div class="card mb-3 shadow" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-black" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="upload/download.png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                    <h2><?php echo $rowsP['Customer_name']; ?></h2>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h5 class="text-danger">Information</h5>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6 class="fw-bold">Email</h6>
                                                <p class="text-muted"><?php echo $rowsP['email'] ?></p>
                                            </div>
                                            <div class="col-3 mb-3">
                                                <h6 class="fw-bold">Password</h6>
                                                <p class="text-muted"><?php echo $rowsP['password'] ?></p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditProfile">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <h5 class="text-danger">Document Details</h5>
                                        <hr class="mt-0 mb-4">
                                        <?php
                                        $select_document = "select * from document where customers_id= $active_user_id";
                                        $execut_quer = mysqli_query($conn, $select_document);
                                        $result_execu_quer = mysqli_fetch_array($execut_quer);
                                        ?>
                                        <?php
                                        if (!empty($result_execu_quer)) {
                                        ?>
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Type</h6>
                                                    <p class="text-muted"><?php echo $rowsP['name']; ?></p>
                                                </div>
                                                <div class="col-3 mb-3">
                                                    <h6>Number</h6>
                                                    <p class="text-muted"><?php echo $rowsP['number'] ?></p>
                                                </div>
                                                <div class="col">
                                                    <a type="button" class="btn btn-danger" href="PHP/documentSend.php?deleteDocument=<?php echo $active_user_id; ?>">
                                                        <i class="bi bi-trash "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="text-center">
                                            <?php
                                            if (empty($result_execu_quer)) {
                                            ?>
                                                <h5 class="card-title">No Data Found</h5>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteDocument">
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
                    </div>
                </div>
            </div>
        </section>
    <?php
    }else{
        echo "<h1 class='text-center pt-5 text-danger fw-bold'> No Data Found </h1>";
    }
    ?>
</body>

</html>