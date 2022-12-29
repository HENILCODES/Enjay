<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title> Register </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <a href="index.php"> Home </a>

        <div class="w-100 p-4 d-flex justify-content-center pb-4">
            <form action="PHP/userLog.php" method="POST">
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">User Name</label>
                    <input required type="text" name="Name" id="name" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input required type="email" name="Email" id="email" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input required type="password" name="Password" id="password" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100 mb-4" name="Register">Register</button>
                <div class="text-center">
                    <p>have an account ? <a href="login.php">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>