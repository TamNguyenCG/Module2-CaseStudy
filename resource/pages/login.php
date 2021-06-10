<?php
use App\Controller\AuthController;

require_once "../../vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $authController = new AuthController();
    if (!$authController->login()) {
        $error = 'Invalid Email or Password';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../public/css/login/style.css">
    <!-- main css -->
    <link rel="stylesheet" href="../../public/css/style.css">

</head>
<body class="login-container">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap py-5" style="background-color: !important">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url('../../public/css/mileka.png');"></div>
                    <h3 class="text-center mb-0">Welcome</h3>
                    <p class="text-center">To the Phantasmal Dream's Bookstore</></p>
                    <?php
                    if (isset($error)) :?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $error ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <form action="#" class="login-form">
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-100 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn form-control btn-primary rounded submit px-3">LOG IN</button>
                        </div>
                    </form>
                    <div class="w-100 text-center mt-4 text">
                        <p class="mb-0">Don't have an account?</p>
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../public/js/login/jquery.min.js"></script>
<script src="../../public/js/login/popper.js"></script>
<script src="../../public/js/login/bootstrap.min.js"></script>
<script src="../../public/js/login/main.js"></script>

</body>
</html>
