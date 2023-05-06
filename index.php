<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: black;
        }
        .test{
            border-color: green;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center my-4">User Management System</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 shadow">
                <form action="_action/login.php" method="post">
                    <div class="mb-3">
                        <h2 class="text-center my-4">Login</h2>
                    </div>
                    <?php if (isset($_GET['registered'])) : ?>
                        <div class="alert alert-success">
                            Account created. Please login.
                        </div>
                    <?php endif ?>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control test" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="w-100 btn btn-primary">Submit</button>
                    </div>
                </form>
                <a href="register.php" class="w-100 mb-3 btn btn-primary">Register</a>
            </div>
        </div>

        <script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>