<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location:../login.php");
}
require 'function.php';

// hotung jumlah data
$user = mysqli_query($koneksi, "SELECT * from user where level='pegawai'");
$j_user = mysqli_num_rows($user);


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
    <script src="js/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
                <div class="judul" style="display:flex; align-items:center;">
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card" style="background:green;">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-users" style="color:#fff; background:green; border-radius:50%; padding:4px; "></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Jumlah User</p>
                                        <h3 class="text-white"><?= $j_user; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btntambah" style="margin:0 0 0 40px;">
                        <!-- Large modal -->
                        <button type="button" class="btn" style="background:#2a94f7;color:#fff; padding:10px 17px;" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="width:500px;">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah User </h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <!-- isi -->
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;">Nama</label>
                                                <input style="margin-left:auto; width:350px;" type="text" name="nama" class="form-control" required>
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;">Username</label>
                                                <input style="margin-left:auto; width:350px;" type="text" name="user_name" class="form-control" required>
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;">Password</label>
                                                <input style="margin-left:auto; width:350px;" type="text" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="add_user">Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Info User</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Information</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabel User</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $getuser = mysqli_query($koneksi, "SELECT * from  user where level='pegawai'");
                                            while ($user = mysqli_fetch_array($getuser)) {
                                                $id_user = $user['id_user'];
                                                $nama = $user['nama'];
                                                $user_name = $user['user_name'];
                                                $password = $user['password'];

                                            ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $nama; ?></td>
                                                    <td><?= $user_name; ?></td>
                                                    <td><?= $password; ?></td>
                                                    <td style="display: flex;">
                                                        <div class="edit" style="margin:0 2px;">
                                                            <!-- edit -->
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicModal<?= $id_user; ?>"><i class="fas fa-edit"></i></button>
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
                                                                                    <input style="margin-left:48px;" type="text" name="nama" class="form-control" value="<?= $nama; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Username</label>
                                                                                    <input style="margin-left:68px;" type="text" name="user_name" class="form-control" value="<?= $user_name; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Password</label>
                                                                                    <input style="margin-left:43px;" type="text" name="password" class="form-control" value="<?= $password; ?>">
                                                                                </div>
                                                                                <input type="hidden" name="id_user" class="form-control" value="<?= $id_user; ?>">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="edit_user" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- DELETE -->
                                                        <div class="delete" style="margin:0 2px;">
                                                            <!-- Small modal -->
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $id_user; ?>"><i class="fas fa-trash"></i></button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="delete<?= $id_user; ?>">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Hapus : <?= $nama; ?></h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form method="POST">
                                                                            <div class="modal-body">
                                                                                <!-- isi -->
                                                                                Apakah Anda Yakin Menghapus <?= $nama; ?> ?
                                                                                <input type="hidden" name="id_user" class="form-control" value="<?= $id_user; ?>">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="hapus_user" class="btn btn-primary">Hapus</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            };
                                            ?>
                                        </tbody>
                                    </table>
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
    <script src="js/custom.js"></script>



</body>

</html>