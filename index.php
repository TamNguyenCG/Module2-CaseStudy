<?php
session_start();

use App\Midd\Auth;

require_once "vendor/autoload.php";

$auth = new Auth();
$auth->isLogin();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phantasmal Dream Bookstore</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="public/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="public/css/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="public/css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="public/css/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="public/css/summernote-bs4.min.css">
    <!-- lazy owl -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="public/css/mileka.png" alt="Bookstore Logo" height="300" width="240">
    </div>

    <!-- Navbar -->
    <?php include_once "resource/core/navbar.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once "resource/core/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <?php include_once "router.php" ?>
    <!-- /.content -->


    <!-- /.content-wrapper -->
    <footer class="main-footer">
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="public/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/js/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="public/js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="public/js/sparkline.js"></script>
<!-- JQVMap -->
<script src="public/js/jquery.vmap.min.js"></script>
<script src="public/js/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="public/js/moment.min.js"></script>
<script src="public/js/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="public/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="public/js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="public/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/js/dashboard.js"></script>
<!-- MAIN JS -->
<script src="public/js/my.js"></script>
<!-- LAZY OWL -->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
</body>
</html>
