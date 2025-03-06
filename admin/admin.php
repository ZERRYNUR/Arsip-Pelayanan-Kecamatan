<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location:../login.php");
}
require 'function.php';

// hotung jumlah data
$ktp = mysqli_query($koneksi, "SELECT * from blangko_ktp");
$j_ktp = mysqli_num_rows($ktp);
$izin = mysqli_query($koneksi, "SELECT * from izin_keramaian");
$j_izin = mysqli_num_rows($izin);
$nikah = mysqli_query($koneksi, "SELECT * from dispen_nikah");
$j_nikah = mysqli_num_rows($nikah);
$sktm = mysqli_query($koneksi, "SELECT * from sktm");
$j_sktm = mysqli_num_rows($sktm);
$pindah = mysqli_query($koneksi, "SELECT * from pindah");
$j_pindah = mysqli_num_rows($pindah);
$datang = mysqli_query($koneksi, "SELECT * from kedatangan");
$j_datang = mysqli_num_rows($datang);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Arsip </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <!-- Datatable -->
    <link rel="stylesheet" href="vendor/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin.css">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background:red; height:80px;">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/icon-arsip.png" alt="">
                <img class="logo-compact" src="images/iconarsip.png" alt="">
                <img class="brand-title" src="images/iconarsip.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <div class="tes" style="display:block; text-align:center; margin-top:20px;">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" style="background-color:yellow; border-radius:50%;">
                                        <img src="images/iconuser.jpg" width="20" alt="">
                                    </a>
                                    <p><b>Admin</b></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class=ai-icon" href="index.php" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-clipboard"></i>
                            <span class="nav-text">Laporan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="lap_ktp.php">Cetak KTP</a></li>
                            <li><a href="lap_izin.php">Izin Keramaian</a></li>
                            <li><a href="lap_nikah.php">Dispensasi Nikah</a></li>
                            <li><a href="lap_sktm.php">Ket. Tidak Mampu</a></li>
                            <li><a href="lap_pindah.php">Pindah Penduduk</a></li>
                            <li><a href="lap_datang.php">Kedatangan Penduduk</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-edit"></i>
                            <span class="nav-text">Edit Profile</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="user.php">User</a></li>
                        </ul>
                    </li>
                    <li><a class="ai-icon" href="logout.php" aria-expanded="false">
                            <i class="la la-mail-reply"></i>
                            <span class="nav-text">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Profile Admin</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Menu</a></li>
                        </ol>
                    </div>
                </div>
                <div class="carditem">
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0" style="margin:0 auto; background:blue;">

                        <div class="card">
                            <div class="card-body" style="width:300px; margin:0 auto; height:500px;">

                                <h4 style="color:black; margin: 50px 0 40px 0;"><b>Profile Admin Arsipel</b></h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <?php
                                    $i = 1;
                                    $getadmin = mysqli_query($koneksi, "SELECT * from user where level='admin'");
                                    while ($admin = mysqli_fetch_array($getadmin)) {
                                        $id_user = $admin['id_user'];
                                        $nama = $admin['nama'];
                                        $user_name = $admin['user_name'];
                                        $password = $admin['password'];
                                        $level = $admin['level'];

                                    ?>
                                        <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">Nama :</span>
                                            <a href="javascript:void(0);"></a><strong><?= $nama; ?></strong></a>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Username :</span><strong><?= $user_name; ?></strong>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">Password :</span><strong><?= $password; ?></strong>
                                        </li>

                                        <button type="button" class="btn btn-primary" style="width:100px; margin:50px 0;" data-toggle="modal" data-target="#basicModal<?= $id_user; ?>">Edit Admin</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="basicModal<?= $id_user; ?>">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit : <?= $nama; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST">
                                                        <div class="modal-body">
                                                            <!-- isi -->
                                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                <label style="margin:auto; margin-left:5px;">Nama</label>
                                                                <input style="margin-left:auto; width:370px;" type="text" name="nama" class="form-control" value="<?= $nama; ?>">
                                                            </div>
                                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                <label style="margin:auto; margin-left:5px;">Username</label>
                                                                <input style="margin-left:auto; width:370px;" type="text" name="user_name" class="form-control" value="<?= $user_name; ?>">
                                                            </div>
                                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                <label style="margin:auto; margin-left:5px;">Password</label>
                                                                <input style="margin-left:auto; width:370px;" type="text" name="password" class="form-control" value="<?= $password; ?>">
                                                            </div>
                                                            <input type="hidden" name="id_user" class="form-control" value="<?= $id_user; ?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="editadmin" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    };
                                    ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">Zerry Nur Rifa'i </a> 2023</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>

        <!-- Chart Morris plugin files -->
        <script src="vendor/raphael/raphael.min.js"></script>
        <script src="vendor/morris/morris.min.js"></script>

        <!-- Datatable -->
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script>

        <!-- Chart piety plugin files -->
        <script src="vendor/peity/jquery.peity.min.js"></script>

        <!-- Demo scripts -->
        <script src="js/dashboard/dashboard-2.js"></script>

        <!-- Svganimation scripts -->
        <script src="vendor/svganimation/vivus.min.js"></script>
        <script src="vendor/svganimation/svg.animation.js"></script>
        <!-- <script src="js/styleSwitcher.js"></script> -->



</body>

</html>