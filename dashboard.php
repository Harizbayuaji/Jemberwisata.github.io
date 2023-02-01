<!DOCTYPE html>

<?php
ob_start();
session_start();
if (!isset($_SESSION['id_user'])) {
    die(header('location:../web/error_404.php'));
}
include "php/koneksi.php";

$tampilPeg    = mysqli_query($db, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
$peg    = mysqli_fetch_array($tampilPeg);
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DASHBOARD</title>
    <link rel="icon" href="assets/images/teluk2.jpg">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
</head>
<style>
    .main-panel{
        margin: 0px;
        padding: 0;
        background-image: url('assets/images/jemberbg.jpg');
        background-size:cover;
        background-position:left;
    }
    .container-wrapper{
        padding-top: 10px;
        margin-top: 80px;
    }
</style>


<body>

    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="dashboard.php"
                    style="color: white;text-decoration: none;font-weight: bolder;">OCEAN</a>
                <a class="sidebar-brand brand-logo-mini" href="dashboard.php"
                    style="color: white;text-decoration: none;font-weight: bolder;"></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="assets/images/faces/face22.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?php echo $peg['nama'] ?></h5>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Menu</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="dashboard.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="table.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Table</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img
                            src="assets/images/faces/face1.jpg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <marquee behavior="" direction="">Selamat datang di halaman Dashboard <b>OCEAN TELUK LOVE</b>
                            </marquee>
                        </li>
                    </ul>

                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/images/faces/face22.jpg" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $peg['nama'] ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Menu</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="php/logout.php">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="container-wrapper">


                    <?php
                    include "php/koneksi.php";


                    $data = mysqli_query($db, "SELECT * FROM dt_table where role='Diterima'");
                    $data1 = mysqli_query($db, "SELECT * FROM dt_table where role='Menunggu'");
                    $sql3 = mysqli_query($db, "SELECT SUM(total) FROM dt_table where role='Diterima'");

                    // menghitung data barang
                    $jumlah_diterima = mysqli_num_rows($data);
                    $jumlah_menunggu = mysqli_num_rows($data1);
                    $data3 = mysqli_fetch_array($sql3);
                    ?>

                    <div style="margin-top: 6vh;" class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                <h5>Jumlah Order Diterima</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0"><?php echo $jumlah_diterima ?></h2>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Jumlah order yang diterima
                                                <b> <?php echo $jumlah_diterima ?> </b>
                                            </h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Dana</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0">
                                                    <?php echo "Rp." . number_format($data3['SUM(total)']); ?>
                                                </h2>

                                            </div>
                                            <h6 class="text-muted font-weight-normal"> Total dana yang terkumpul
                                                <b><?php echo "Rp." . number_format($data3['SUM(total)']); ?></b>
                                            </h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Jumlah Order Menunggu</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h2 class="mb-0"><?php echo $jumlah_menunggu ?></h2>
                                                <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                                            </div>
                                            <h6 class="text-muted font-weight-normal">Jumlah order yang Menunggu
                                                <b><?php echo $jumlah_menunggu ?> </b>
                                            </h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                        <div style="margin-top:21vh;" class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    "HELLO WORLD"
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            ~ 2022</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">
                                </a> from ~</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>