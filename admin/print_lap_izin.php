<?php ob_start();

session_start();
if(!isset($_SESSION['user_name'])){
    header("location:../login.php");
}
require 'function.php';
?>

<html>

<head>
    <title>Cetak PDF</title>
    <style>
        .table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 550px;
        }

        .table th {
            padding: 5px;
        }

        .table td {
            word-wrap: break-word;
            width: 15%;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
    $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
    if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
        // Buat query untuk menampilkan semua data transaksi
        $query = "SELECT * FROM izin_keramaian";
        $label = "Semua Data Izin Keramaian";
    } else { // Jika terisi
        // Buat query untuk menampilkan data transaksi sesuai periode tanggal
        $query = "SELECT * FROM izin_keramaian WHERE (tanggal BETWEEN '" . $tgl_awal . "' AND '" . $tgl_akhir . "')";
        $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
        $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
        $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
    }
    ?>
    <div style="text-align:center; margin-bottom:20px;">
        <h4 style="margin-bottom: 5px;">KECAMATAN SAMBENG KABUPATEN LAMONGAN</h4>
        <?php echo $label ?><br>
    </div>
    <table class="table" border="1" width="100%" style="margin-top: 10px;">
        <tr>
            <th>NO.Reg</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Pukul</th>
            <th>Keterangan</th>
        </tr>
        <?php
        $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
        if ($row > 0) { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                $tgl = date('d-m-Y', strtotime($data['tanggal'])); // Ubah format tanggal jadi dd-mm-yyyy
                echo "<tr>";
                echo "<td>" . $data['no_regester'] . "</td>";
                echo "<td>" . $data['nama_pemohon'] . "</td>";
                echo "<td>" . $data['alamat'] . "</td>";
                echo "<td>" . $data['jenis_kegiatan'] . "</td>";
                echo "<td>" . $tgl . "</td>";
                echo "<td>" . $data['pukul'] . "</td>";
                echo "<td>" . $data['keterangan'] . "</td>";
                echo "</tr>";
            }
        } else { // Jika data tidak ada
            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
        }
        ?>
    </table>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require 'vendor/html2pdf/autoload.php';
$pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
$pdf->WriteHTML($html);
$pdf->Output('Data Laporan.pdf', 'I');
?>