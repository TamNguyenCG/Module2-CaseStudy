
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phantasmal Dream Bookstore</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="public/css/mileka.png" alt="Bookstore Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Phantasmal Dream</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="public/css/bookgirl.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">DarkVioletFairy</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="fa-solid fa-table-columns"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-thumbs-up"></i>
                            <p>
                                Recommended
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-medal"></i>
                            <p>
                                Best-selling Book
                                <span class="right badge badge-danger">Hot</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bookmark"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Romance</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Education</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/inline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Action</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/uplot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Horror</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-feather-alt"></i>
                            <p>
                                Author
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Authors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nearly Published Author</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Authors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book"></i>
                            <p>
                                Books
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="resource/views/book/list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Book's List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-user"></i>
                            <p>
                                Account Manager
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Login & Register
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/examples/login.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Login</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/register.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Register</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/forgot-password.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Forgot Password</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/recover-password.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Recover Password</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-image: url('public/css/box.jpeg'); background-size: cover; background-position:center ">
                            <div class="inner">
                                <h3 style="font-family: fantasy;color: red">33</h3>
                                <p style="font-family: fantasy;color: red">News</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-image: url('public/css/box3.jpg'); background-size: cover; background-position:center ">
                            <div class="inner">
                                <h3 style="font-family: fantasy;color: gold">7</h3>
                                <p style="font-family: fantasy;color: gold">Rewards</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-sta   ts-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background-image: url('public/css/box2.jpg'); background-size: cover; background-position:center ">
                            <div class="inner">
                                <h3 style="font-family: fantasy;color: cyan">44</h3>

                                <p style="font-family: fantasy;color: cyan">Library</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12">
                        <div class="img-slide img-slid-media d-flex justify-content-between mt-3">
                            <div class="owl-carousel owl-theme">
                                <div class="slide slide-1">
                                    <div class="slide-content">
                                    </div>
                                </div>
                                <div class="slide slide-2">
                                    <div class="slide-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- right col -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
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
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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
