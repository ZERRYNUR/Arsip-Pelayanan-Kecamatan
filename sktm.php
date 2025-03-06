<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location:login.php");
}
require 'function.php';

$sktmj = mysqli_query($koneksi, "SELECT * from sktm");
$j_sktm = mysqli_num_rows($sktmj);
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
    <!-- Datatable -->
    <link rel="stylesheet" href="vendor/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin.css">
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
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" style="background-color:cyan; border-radius:50%;">
                                        <img src="images/iconuser.jpg" width="20" alt="">
                                    </a>
                                    <p><b>User</b></p>
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
                    <li><a class="ai-icon" href="ktp.php" aria-expanded="false">
                            <i class="la la-suitcase"></i>
                            <span class="nav-text">Arsip KTP</span>
                        </a>
                    </li>
                    <li><a class="ai-icon" href="izin.php" aria-expanded="false">
                            <i class="la la-file-archive-o"></i>
                            <span class="nav-text">Izin Keramaian</span>
                        </a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-clipboard"></i>
                            <span class="nav-text">Pelayanan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="nikah.php">Dispensasi Nikah</a></li>
                            <li><a href="sktm.php">Ket. Tidak Mampu</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-exchange"></i>
                            <span class="nav-text">Perpindahan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="pindah.php">Pindah Penduduk</a></li>
                            <li><a href="datang.php">Kedatangan Penduduk</a></li>
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
                    <div class="btntambah" style="margin:0 0 0 40px;">
                        <!-- Large modal -->
                        <button type="button" class="btn" style="background:#2a94f7;color:#fff; padding:10px 17px;" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><b>Tambah sktm </b></h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <!-- isi -->
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>No.Reg</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="no_register" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>No.surat</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="nomor_surat" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>Nama</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="nama_pemohon" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>Alamat</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="alamat" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>Tanggal</b></label>
                                                <input style="margin-left:auto; width:660px;" name="tanggal" type="date" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>Keperluan</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="keperluan" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>Tujuan</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="tujuan" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>Keterangan</b></label>
                                                <input style="margin-left:auto; width:660px;" type="text" name="keterangan" class="form-control">
                                            </div>
                                            <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                <label style="margin:auto; margin-left:5px;"><b>File</b></label>
                                                <input style="margin-left:auto; width:660px;" type="file" name="berkas">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="add_sktm">Simpan</button>
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
                            <h4>Surat Keterangan Tidak Mampu</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">SKTM</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pengajuan</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabel SKTM Diajukan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead style="border: 1px solid black;">
                                            <tr>
                                                <th>No.Reg</th>
                                                <th>No.surat</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tanggal</th>
                                                <th>Keperluan</th>
                                                <th>Tujuan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $getsktm = mysqli_query($koneksi, "SELECT * from sktm");
                                            while ($sktm = mysqli_fetch_array($getsktm)) {
                                                $id_sktm = $sktm['id_sktm'];
                                                $no_register = $sktm['no_register'];
                                                $nomor_surat = $sktm['nomor_surat'];
                                                $nama_pemohon = $sktm['nama_pemohon'];
                                                $alamat = $sktm['alamat'];
                                                $tanggal = $sktm['tanggal'];
                                                $keperluan = $sktm['keperluan'];
                                                $tujuan = $sktm['tujuan'];
                                                $keterangan = $sktm['keterangan'];
                                                $berkas = $sktm['berkas'];

                                            ?>
                                                <tr>
                                                    <td><?= $no_register; ?></td>
                                                    <td><?= $nomor_surat; ?></td>
                                                    <td><?= $nama_pemohon; ?></td>
                                                    <td><?= $alamat; ?></td>
                                                    <td><?= $tanggal; ?></td>
                                                    <td><?= $keperluan; ?></td>
                                                    <td><?= $tujuan; ?></td>
                                                    <td><?= $keterangan; ?></td>
                                                    <td style="display: flex;">
                                                        <div class="download" style="margin:0 2px;">
                                                            <a style="color:#2a94f7;" href="file/download_sktm.php?filename=<?= $berkas; ?>"><i style="width:23px; height:23px;" class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="edit" style="margin:0 2px;">
                                                            <!-- edit -->
                                                            <!-- Button trigger modal -->
                                                            <button type="button" style="border:none; color:green; background:none;" data-toggle="modal" data-target="#basicModal<?= $id_sktm; ?>"><i class="fas fa-edit" style="width:23px; height:23px;"></i></button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="basicModal<?= $id_sktm; ?>">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content" style="width:700px; height:580px;">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Edit : <?= $nama_pemohon; ?></h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form method="POST" enctype="multipart/form-data">
                                                                            <div class="modal-body">
                                                                                <!-- isi -->
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">No.Reg</label>
                                                                                    <input style="margin-left:auto; width:560px" type="text" name="no_register" class="form-control" value="<?= $no_register; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">No. Surat</label>
                                                                                    <input style="margin-left:auto; width:560px" type="text" name="nomor_surat" class="form-control" value="<?= $nomor_surat; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Nama</label>
                                                                                    <input style="margin-left:auto; width:560px" type="text" name="nama_pemohon" class="form-control" value="<?= $nama_pemohon; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Alamat</label>
                                                                                    <input style="margin-left:auto; width:560px" type="text" name="alamat" class="form-control" value="<?= $alamat; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Tanggal</label>
                                                                                    <input style="margin-left:auto; width:560px" name="tanggal" type="date" class="form-control" value="<?= $tanggal; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Keperluan</label>
                                                                                    <input style="margin-left:auto; width:560px" name="keperluan" type="text" class="form-control" value="<?= $keperluan; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Tujuan</label>
                                                                                    <input style="margin-left:auto; width:560px" name="tujuan" type="text" class="form-control" value="<?= $tujuan; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">Keterangan</label>
                                                                                    <input style="margin-left:auto; width:560px" type="text" name="keterangan" class="form-control" value="<?= $keterangan; ?>">
                                                                                </div>
                                                                                <div class="add" style="display:flex; justify-content:center; margin-bottom:8px;">
                                                                                    <label style="margin:auto; margin-left:5px;">File</label>
                                                                                    <input style="margin-left:auto; width:560px" type="file" name="berkas" value="<?= $berkas; ?>">
                                                                                </div>
                                                                                <input type="hidden" name="id_sktm" class="form-control" value="<?= $id_sktm; ?>">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="editsktm" class="btn" style="background:#2a94f7; color:#fff;">Save</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- DELETE -->
                                                        <div class="delete" style="margin:0 2px;">
                                                            <!-- Small modal -->
                                                            <button type="button" style="border:none; color:red; background:none;" data-toggle="modal" data-target="#delete<?= $id_sktm; ?>"><i class="fas fa-trash" style="width:23px; height:23px;"></i></button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="delete<?= $id_sktm; ?>">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Hapus : <?= $nama_pemohon; ?></h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form method="POST">
                                                                            <div class="modal-body">
                                                                                <!-- isi -->
                                                                                Apakah Anda Yakin Menghapus <?= $nama_pemohon; ?> ?
                                                                                <input type="hidden" name="id_sktm" class="form-control" value="<?= $id_sktm; ?>">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="hapussktm" class="btn" style="background:#36d820; color:#fff;">Hapus</button>
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