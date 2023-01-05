<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title> Log in </title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <a href="index.php"> Home </a>
        <div class="w-100 p-4 d-flex justify-content-center pb-4">
            <form action="Php/Adminlog.php" method="POST">
                <div class="form-outline mb-4">
                    <label class="form-label" >Admin Name</label>
                    <input required type="text" name="Name" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input required type="password" name="Password" id="password" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100 mb-4" name="Login">Log in</button>
            </form>
        </div>
    </div>
</body>

</html>