<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-success">
                Account created. Please login.
            </div>
        <?php endif ?>
        <h1 class="text-center my-4">User Management System</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 shadow">
                <form action="_action/validation.php" method="post">
                    <div class="mb-2">
                        <h2 class="text-center my-3">Register</h2>
                    </div>
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name">
                        <?php if (isset($_GET['nameEmpty'])) : ?>
                            <small style="color: red;"><?php echo $_GET['nameEmpty']; ?></small>
                        <?php endif ?>
                    </div>

                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                        <?php if (isset($_GET['emailEmpty'])) : ?>
                            <small style="color: red;"><?php echo $_GET['emailEmpty']; ?></small>
                        <?php endif ?>
                        <?php if (isset($_GET['invalidEmail'])) : ?>
                            <small style="color: red;"><?php echo $_GET['invalidEmail']; ?></small>
                        <?php endif ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone" placeholder="phone">
                        <?php if (isset($_GET['phoneEmpty'])) : ?>
                            <small style="color: red;"><?php echo $_GET['phoneEmpty']; ?></small>
                        <?php endif ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        <?php if (isset($_GET['pwEmpty'])) : ?>
                            <small style="color: red;"><?php echo $_GET['pwEmpty']; ?></small>
                        <?php endif ?>
                        <?php if (isset($_GET['pwNeedChar'])) : ?>
                            <small style="color: red;"><?php echo $_GET['pwNeedChar']; ?></small>
                        <?php endif ?>
                        <?php if (isset($_GET['pwNeedSpeChar'])) : ?>
                            <small style="color: red;"><?php echo $_GET['pwNeedSpeChar']; ?></small>
                        <?php endif ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                        <?php if (isset($_GET['conPwEmpty'])) : ?>
                            <small style="color: red;"><?php echo $_GET['conPwEmpty']; ?></small>
                        <?php endif ?>
                        <?php if (isset($_GET['conPwNoMatch'])) : ?>
                            <small style="color: red;"><?php echo $_GET['conPwNoMatch']; ?></small>
                        <?php endif ?>
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="w-100 btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>