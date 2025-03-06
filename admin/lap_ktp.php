<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location:../login.php");
}
require 'function.php';
$ktp = mysqli_query($koneksi, "SELECT * from blangko_ktp");
$j_ktp = mysqli_num_rows($ktp);
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
    <link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Include File jQuery -->
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
        <div class="nav-header" style="background:red;">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/icon-arsip.png" alt="">
                <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt="">
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
                            <h4>Laporan Cetak KTP</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Ktp</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Blangko</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="margin-bottom: 5px;"><b>Data Ktp</b></h4>
                            </div>
                            <h4 style="margin-left:48px;">Filter Tanggal</h4>
                            <div style="margin:5px 0 5px 60px;">
                                <form method="get" action="lap_ktp.php">
                                    <div class="row">
                                        <div class="form-group" style="display:flex; justify-content:space-between;">
                                            <!-- <label style="margin-right:10px;">Filter Tanggal</label> -->

                                            <input type="text" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" placeholder="Tanggal Awal" style="border:1px solid black;">
                                            <span class="input-group-addon" style="margin:5px; font-size:16px;"><b>s/d</b></span>
                                            <input type="text" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" placeholder="Tanggal Akhir" style="border:1px solid black;">
                                        </div>

                                    </div>
                                    <button type="submit" name="filter" value="true" class="btn" style="background-color:#0cff00; color:#fff;"><b>TAMPILKAN</b></button>
                                    <?php
                                    if (isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                                        echo '<a href="lap_ktp.php" style="padding:9px; background-color:#ff6e00; color:#fff; border-radius:6px; margin-left:18px;"><b>RESET</b></a>';
                                    ?>


                                </form>
                                <?php
                                $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
                                $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
                                if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
                                    // Buat query untuk menampilkan semua data transaksi
                                    $query = "SELECT * FROM blangko_ktp";
                                    $url_cetak = 'print_lap_ktp.php';
                                    $label = "Semua Data Transaksi";
                                } else { // Jika terisi
                                    // Buat query untuk menampilkan data transaksi sesuai periode tanggal
                                    $query = "SELECT * FROM blangko_ktp WHERE (tgl_cetak BETWEEN '" . $tgl_awal . "' AND '" . $tgl_akhir . "')";
                                    $url_cetak = "print_lap_ktp.php?tgl_awal=" . $tgl_awal . "&tgl_akhir=" . $tgl_akhir . "&filter=true";
                                    $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
                                    $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
                                    $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
                                }
                                ?>
                                <a href="<?php echo $url_cetak ?>" style="padding:10px; color:#fff; background-color:cyan; border-radius:6px; position:relative; bottom:31px; left:220px;"><b>CETAK PDF</b></a>
                            </div>
                            <div class="col-xl-3 col-xxl-3 col-sm-6" style="position:absolute; top:50px; left:650px;">
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
                            <div class="card-body">

                                <?php echo $label ?><br />
                                <div style="margin-top: 5px;">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead style="border: 1px solid black;">
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Nik</th>
                                                    <th>Alamat</th>
                                                    <th>Tanggal</th>
                                                    <th>Keteragan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
                                                $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                                                if ($row > 0) { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                                                    while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                                                        $tgl = date('d-m-Y', strtotime($data['tgl_cetak'])); // Ubah format tanggal jadi dd-mm-yyyy
                                                        echo "<tr>";
                                                        echo "<td>" . $data['nama'] . "</td>";
                                                        echo "<td>" . $data['nik'] . "</td>";
                                                        echo "<td>" . $data['alamat'] . "</td>";
                                                        echo "<td>" . $tgl . "</td>";
                                                        echo "<td>" . $data['keterangan'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else { // Jika data tidak ada
                                                    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                                                }
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
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">Zerry Nur Rifa'i</a> 2023</p>
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

    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Include File JS Custom (untuk fungsi Datepicker) -->
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            setDateRangePicker(".tgl_awal", ".tgl_akhir")
        })
    </script>



</body>

</html>