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
                <div>
                    <div class="tes" style="display:flex; margin-top:20px; align-items:center;">
                        <div style="width:80px; height:80px; background:yellow;border-radius:50%; margin-bottom:10px;">
                            <i style="font-size:80px; color:black; margin:auto;" class="la la-expeditedssl"></i>
                        </div>
                        <h1 style="margin-left:15px;">Dashboard Admin Arsipel</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card" style="background:#417cfc;">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-codepen" style="color:#fff; background:#417cfc; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Cetak Ktp</p>
                                        <h3 class="text-white"><?= $j_ktp; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-info">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-envelope-square bg-info" style="color:#fff; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Izin Acara</p>
                                        <h3 class="text-white"><?= $j_izin; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card" style="background:blue;">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-users" style="color:#fff; background:blue; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Dispen NIkah</p>
                                        <h3 class="text-white"><?= $j_nikah; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-danger">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-repeat bg-danger" style="color:#fff; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Sktm</p>
                                        <h3 class="text-white"><?= $j_sktm; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-success">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-random bg-success" style="color:#fff; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Pindah Penduduk</p>
                                        <h3 class="text-white"><?= $j_pindah; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-toggle-down bg-primary" style="color:#fff; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Kedatangan Penduduk</p>
                                        <h3 class="text-white"><?= $j_datang; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
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