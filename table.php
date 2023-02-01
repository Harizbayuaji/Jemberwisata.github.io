<!DOCTYPE html>

<?php
ob_start();
session_start();
if (!isset($_SESSION['id_user'])) {
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");
}
include "php/koneksi.php";

$tampilPeg    = mysqli_query($db, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
$peg          = mysqli_fetch_array($tampilPeg);
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TABLE</title>
    <link rel="icon" href="assets/images/teluk2.jpg">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
    .main-panel {
        margin: 0px;
        padding: 0;
        background-image: url('assets/images/jemberbg.jpg');
        background-size:cover;
        background-position:center;
    }
    .container-wrapper{
        padding-top: 70px;
        margin-top: 90px;
    }

.search-box{
  width: fit-content;
  padding: 5px;
  margin-top: -3vh;
  height: fit-content;
  position: relative;
}


.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 70px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
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
                    <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo-mini.svg"
                            alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

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
                                <a class="dropdown-item preview-item">
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
            <div  class="main-panel">
                <div style="padding: 20px;" class="container-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div style="margin-top: 5vh;" class="card">
                                <h2 class="card-title" style="margin-left: 28px; margin-top: 19px;">DAFTAR TABLE
                                </h2>

                                <div class="card-header" style="margin-left: 6px;">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Tambah
                                    </button>   
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                    <form action="table.php" method="post">
                                    <?php
                                        $kata_kunci = "";
                                            if (isset($_POST['kata_kunci'])) {
                                                $kata_kunci = $_POST['kata_kunci'];
                                            }
                                        ?>
                             <div class="search-box">
                                <button class="btn-search"><i class="fa fa-search"></i></button>
                                <input type="text" name="kata_kunci" class="input-search" placeholder="Type to Search...">
                            </div>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class=".btn-outline-link" type="button">
                                                <i class="fas fa-search "></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Email</td>
                                            <td>Harga</td>
                                            <td>Jumlah</td>
                                            <td>Total</td>
                                            <td>Tanggal</td>
                                            <td>Kategori</td>
                                            <td>Aksi</td>
                                        </tr>

                                        <?php
                                        include "php/koneksi.php";
                                        $no = 1;

                                        if (isset($_POST['kata_kunci'])) {
                                            $kata_kunci = trim($_POST['kata_kunci']);
                                            $sql = "select * from dt_table where id like
                                            '%" . $kata_kunci . "%' or nama like
                                            '%" . $kata_kunci . "%' or email like
                                            '%" . $kata_kunci . "%' order by id asc";
                                        } else {
                                            $sql = "select * from dt_table where role='Menunggu'";
                                        }
                                        $hasil = mysqli_query($db, $sql);
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                        ?>

                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?php echo "Rp". $data['harga'] ?></td>
                                            <td><?= $data['jumlah'] ?></td>
                                            <td><?php echo "Rp". $data['total'] ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['role'] ?></td>

                                            <td>
                                                <a href="php/role_0.php?id=<?php echo $data['0']; ?>"><i
                                                        class="bi bi-x-square-fill"></i></a>
                                                <a href="php/role_1.php?id=<?php echo $data['0']; ?>"><i
                                                        class="bi bi-check-square-fill"></i></i></a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12">
                            <div style="margin-top: 10vh;" class="card">
                            <h2 class="card-title" style="margin-left: 28px; margin-top: 20px;">PESERTA YANG MASUK
                                </h2>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">

                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Email</td>
                                            <td>Harga</td>
                                            <td>Jumlah</td>
                                            <td>Total</td>
                                            <td>Tanggal</td>
                                            <td>Kategori</td>
                                            <td>Aksi</td>
                                        </tr>

                                        <?php
                                        include "php/koneksi.php";
                                        $no = 1;
                                        $query = mysqli_query($db, "select * from dt_table where role='Diterima'  ");
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?php echo "Rp". $data['harga'] ?></td>
                                            <td><?= $data['jumlah'] ?></td>
                                            <td><?php echo "Rp". $data['total'] ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['role'] ?></td>

                                            <td>
                                                <a href="php/delete.php?id=<?php echo $data['id']; ?>"><i
                                                        class="bi bi-trash-fill"></i></a>
                                                <a href="form_edit.php?id=<?php echo $data['id']; ?>"><i
                                                        class="bi bi-pencil-square"></i></a>
                                            </td>

                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer style="margin-top: 30vh"; class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            ~ 2022</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">
                                </a> from ~</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <style>
    
    option {
        color: white;
    }

    select:hover {
        color: white;
    }

    td:hover {
        color: white;
    }
    </style>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="php/ftambahtable.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama</label>
                                    <input type="text" class="form-control input-modal" id="exampleInputUsername1"
                                        placeholder="Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control input-modal" id="exampleInputEmail1"
                                        placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control input-modal" id="exampleInputEmail1"
                                        name="tanggal" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <select name="harga" id="harga" class="form-control">
                                        <option value="" hidden>Pilih Ticket</option>
                                        <option value="10000">Rp 10000  </option>
                                        <option value="20000">Rp 20000  </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah </label>
                                    <input type="number" class="form-control input-modal" id="exampleInputEmail1"
                                        placeholder="Masukkan jumlah tiket" name="jumlah">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>


    <!-- container-scroller -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
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