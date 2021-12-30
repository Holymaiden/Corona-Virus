<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['l'])) {
    if ($_SESSION['l'] == 1)
        header("Location:dashboard/");
    else
        header("Location:index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="dashboard/assets/media/image/favicon.png" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="dashboard/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="dashboard/assets/css/app.min.css" type="text/css">
</head>

<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">

        <!-- logo -->
        <div id="logo">
            <a href="index.php"><img src="assets/images/logo/01.png" alt="image"></a>
        </div>
        <!-- ./ logo -->


        <h5>Sign in</h5>

        <!-- form -->
        <form id="formLogin" action="" method="POST">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Username or email" required autofocus>
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
                <a href="recovery-password.php">Reset password</a>
            </div>
            <button type="submit" value="Login" class="btn btn-primary btn-block">Sign in</button>
            <hr>
            <p class="text-muted">Login with your social media account.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-google">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-behance">
                        <i class="fa fa-behance"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <hr>
            <p class="text-muted">Don't have an account?</p>
            <a href="register.php" class="btn btn-outline-light btn-sm">Register now!</a>
        </form>
        <!-- ./ form -->


    </div>

    <!-- Plugin scripts -->
    <script src="dashboard/vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="dashboard/assets/js/app.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#formLogin').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'login_req.php',
                    data: $(this).serialize(),
                }).then(function(response) {
                    console.log(response);
                    var jsonData = JSON.parse(response);

                    if (jsonData.success == "1") {
                        location.href = 'login.php';
                    } else if (jsonData.success == "2") {
                        alert('Username atau Password Salah!');
                    } else {
                        alert('Invalid Credentials!');
                    }
                });
            });
        });
    </script>
</body>

</html>