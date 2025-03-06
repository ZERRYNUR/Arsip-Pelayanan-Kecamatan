<?php
$koneksi = mysqli_connect("localhost", "root", "", "arsipkec");

//KTP
// tambah ktp
if (isset($_POST['add_ktp'])) {
    $id_ktp = $_POST['id_ktp'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $tgl_cetak = $_POST['tgl_cetak'];
    $keterangan = $_POST['keterangan'];

    $addktp = mysqli_query($koneksi, "INSERT INTO blangko_ktp (nama, nik, alamat, tgl_cetak, keterangan) VALUES ('$nama','$nik','$alamat','$tgl_cetak','$keterangan')");

    if ($addktp) {
        header('location:ktp.php');
    } else {
        echo '<script>
        alert("Tambah Produk Gagal")
        window.location.href="ktp.php"
        </script>';
    }
}
//edit ktp
if (isset($_POST['editktp'])) {
    $id_ktp = $_POST['id_ktp'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $tgl_cetak = $_POST['tgl_cetak'];
    $keterangan = $_POST['keterangan'];

    $edit_ktp = mysqli_query($koneksi, "UPDATE blangko_ktp set nama='$nama', nik='$nik', alamat='$alamat', tgl_cetak='$tgl_cetak', keterangan='$keterangan' where id_ktp ='$id_ktp'");

    if ($edit_ktp) {
        header('location:ktp.php');
    } else {
        echo '
            <script>
            alert("Gagal Update Barang")
            window.location.href="ktp.php"
            </script>
            ';
    }
}
// hapus ktp
if (isset($_POST['hapusktp'])) {
    $idktp = $_POST['id_ktp'];

    $hapusktp = mysqli_query($koneksi, "DELETE from blangko_ktp where id_ktp='$idktp'");
    if ($hapusktp) {
        header('location:ktp.php');
    } else {
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="ktp.php"
            </script>
            ';
    }
}

//IZIN
//tambah izin
if (isset($_POST['add_izin'])) {
    $no_regester = htmlentities($_POST['no_regester'], ENT_QUOTES);
    $nama_pemohon = htmlentities($_POST['nama_pemohon'], ENT_QUOTES);
    $alamat = htmlentities($_POST['alamat'], ENT_QUOTES);
    $jenis_kegiatan = htmlentities($_POST['jenis_kegiatan'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $pukul = htmlentities($_POST['pukul'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/izin/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "INSERT INTO izin_keramaian VALUES('', '$no_regester','$nama_pemohon','$alamat','$jenis_kegiatan','$tanggal','$pukul','$keterangan','$berkas')");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus berupa PDF!');
            document.location.href='izin.php';
            </script>";
    } 
}
// edit izin
if (isset($_POST['editizin'])) {
    $id_izin =  $_POST['id_izin'];
    $no_regester = htmlentities($_POST['no_regester'], ENT_QUOTES);
    $nama_pemohon = htmlentities($_POST['nama_pemohon'], ENT_QUOTES);
    $alamat = htmlentities($_POST['alamat'], ENT_QUOTES);
    $jenis_kegiatan = htmlentities($_POST['jenis_kegiatan'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $pukul = htmlentities($_POST['pukul'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg');
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/izin/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "UPDATE  izin_keramaian set no_regester='$no_regester',nama_pemohon='$nama_pemohon',alamat='$alamat',jenis_kegiatan='$jenis_kegiatan',tanggal='$tanggal',pukul='$pukul',keterangan='$keterangan',berkas='$berkas' where id_izin ='$id_izin'");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Ekstensi harus berupa PDF!');
            document.location.href='izin.php';
            </script>";
    }
}

// hapus izin
if (isset($_POST['hapusizin'])) {
    $id_izin = $_POST['id_izin'];
    $berkas = $_FILES['berkas']['name'];

    $hapusizin = mysqli_query($koneksi, "DELETE from izin_keramaian where id_izin='$id_izin'");
    if ($hapusizin) {
        header('location:izin.php');
    } else {
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="izin.php"
            </script>
            ';
    }
}



//SKTM
//tambah sktm
if (isset($_POST['add_sktm'])) {
    $no_register = htmlentities($_POST['no_register'], ENT_QUOTES);
    $nomor_surat = htmlentities($_POST['nomor_surat'], ENT_QUOTES);
    $nama_pemohon = htmlentities($_POST['nama_pemohon'], ENT_QUOTES);
    $alamat = htmlentities($_POST['alamat'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keperluan = htmlentities($_POST['keperluan'], ENT_QUOTES);
    $tujuan = htmlentities($_POST['tujuan'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/sktm/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "INSERT INTO sktm VALUES('', '$no_register','$nomor_surat','$nama_pemohon','$alamat','$tanggal','$keperluan','$tujuan','$keterangan','$berkas')");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus sesuai!');
            document.location.href='sktm.php';
            </script>";
    } 
}
// edit sktm
if (isset($_POST['editsktm'])) {
    $id_sktm = htmlentities($_POST['id_sktm'], ENT_QUOTES);
    $no_register = htmlentities($_POST['no_register'], ENT_QUOTES);
    $nomor_surat = htmlentities($_POST['nomor_surat'], ENT_QUOTES);
    $nama_pemohon = htmlentities($_POST['nama_pemohon'], ENT_QUOTES);
    $alamat = htmlentities($_POST['alamat'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keperluan = htmlentities($_POST['keperluan'], ENT_QUOTES);
    $tujuan = htmlentities($_POST['tujuan'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/sktm/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "UPDATE sktm set no_register='$no_register', nomor_surat='$nomor_surat', nama_pemohon='$nama_pemohon', alamat='$alamat', tanggal='$tanggal', keperluan='$keperluan', tujuan='$tujuan', keterangan='$keterangan', berkas='$berkas' where id_sktm ='$id_sktm'");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus sesuai!');
            document.location.href='sktm.php';
            </script>";
    } 
}

// hapus sktm
if (isset($_POST['hapussktm'])) {
    $id_sktm = $_POST['id_sktm'];

    $hapus_nikah = mysqli_query($koneksi, "DELETE from sktm where id_sktm='$id_sktm'");
    if ($hapus_nikah) {
        header('location:sktm.php');
    } else {
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="sktm.php"
            </script>
            ';
    }
}

//NIKAH
//tambah nikah
if (isset($_POST['add_nikah'])) {
    $no_surat = htmlentities($_POST['no_surat'], ENT_QUOTES);
    $no_pengantar = htmlentities($_POST['no_pengantar'], ENT_QUOTES);
    $nama_suami = htmlentities($_POST['nama_suami'], ENT_QUOTES);
    $alamat_suami = htmlentities($_POST['alamat_suami'], ENT_QUOTES);
    $nama_istri = htmlentities($_POST['nama_istri'], ENT_QUOTES);
    $alamat_istri = htmlentities($_POST['alamat_istri'], ENT_QUOTES);
    $tempat_nikah = htmlentities($_POST['tempat_nikah'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/nikah/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "INSERT INTO dispen_nikah VALUES('', '$no_surat','$no_pengantar','$nama_suami','$alamat_suami','$nama_istri','$alamat_istri','$tempat_nikah','$tanggal','$keterangan','$berkas')");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus berupa PDF!');
            document.location.href='nikah.php';
            </script>";
    } 
}
// edit nikah
if (isset($_POST['editnikah'])) {
    $id_nikah = htmlentities($_POST['id_nikah'], ENT_QUOTES);
    $no_surat = htmlentities($_POST['no_surat'], ENT_QUOTES);
    $no_pengantar = htmlentities($_POST['no_pengantar'], ENT_QUOTES);
    $nama_suami = htmlentities($_POST['nama_suami'], ENT_QUOTES);
    $alamat_suami = htmlentities($_POST['alamat_suami'], ENT_QUOTES);
    $nama_istri = htmlentities($_POST['nama_istri'], ENT_QUOTES);
    $alamat_istri = htmlentities($_POST['alamat_istri'], ENT_QUOTES);
    $tempat_nikah = htmlentities($_POST['tempat_nikah'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/nikah/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "UPDATE dispen_nikah set no_surat='$no_surat', no_pengantar='$no_pengantar', nama_suami='$nama_suami', alamat_suami='$alamat_suami', nama_istri='$nama_istri', alamat_istri='$alamat_istri', tempat_nikah='$tempat_nikah', tanggal='$tanggal', keterangan='$keterangan', berkas='$berkas' where id_nikah ='$id_nikah'");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi tidak sesuai!');
            document.location.href='nikah.php';
            </script>";
    } 
}

// hapus nikah
if (isset($_POST['hapusnikah'])) {
    $id_nikah = $_POST['id_nikah'];

    $hapus_nikah = mysqli_query($koneksi, "DELETE from dispen_nikah where id_nikah='$id_nikah'");
    if ($hapus_nikah) {
        header('location:nikah.php');
    } else {
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="nikah.php"
            </script>
            ';
    }
}



//SKCK
//tambah skck
if (isset($_POST['add_skck'])) {
    $id_skck = $_POST['id_skck'];
    $no_regester = $_POST['no_regester'];
    $no_pengantar = $_POST['no_pengantar'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $keperluan = $_POST['keperluan'];
    $keterangan = $_POST['keterangan'];

    $add_skck = mysqli_query($koneksi, "INSERT INTO skck (no_regester, no_pengantar, nama_pemohon, alamat, tanggal, keperluan, keterangan) VALUES ('$no_regester','$no_pengantar','$nama_pemohon','$alamat','$tanggal','$keperluan','$keterangan')");

    if ($add_skck) {
        header('location:skck.php');
    } else {
        echo '<script>
        alert("Tambah Produk Gagal")
        window.location.href="skck.php"
        </script>';
    }
}
// edit skck
if (isset($_POST['editskck'])) {
    $id_skck = $_POST['id_skck'];
    $no_regester = $_POST['no_regester'];
    $no_pengantar = $_POST['no_pengantar'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $keperluan = $_POST['keperluan'];
    $keterangan = $_POST['keterangan'];

    $edit_skck = mysqli_query($koneksi, "UPDATE skck set no_regester='$no_regester', no_pengantar='$no_pengantar', nama_pemohon='$nama_pemohon', alamat='$alamat', tanggal='$tanggal', keperluan='$keperluan',  keterangan='$keterangan' where id_skck ='$id_skck'");

    if ($edit_skck) {
        header('location:skck.php');
    } else {
        echo '
            <script>
            alert("Gagal Update Barang")
            window.location.href="skck.php"
            </script>
            ';
    }
}

// hapus skck
if (isset($_POST['hapusskck'])) {
    $id_skck = $_POST['id_skck'];

    $hapus_skck = mysqli_query($koneksi, "DELETE from skck where id_skck='$id_skck'");
    if ($hapus_skck) {
        header('location:skck.php');
    } else {
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="skck.php"
            </script>
            ';
    }
}


//PINDAH
//tambah Pindah
if (isset($_POST['add_pindah'])) {
    $nomor_pindah = htmlentities($_POST['nomor_pindah'], ENT_QUOTES);
    $nik = htmlentities($_POST['nik'], ENT_QUOTES);
    $nama_pemohon = htmlentities($_POST['nama_pemohon'], ENT_QUOTES);
    $alamat_asal = htmlentities($_POST['alamat_asal'], ENT_QUOTES);
    $alasan_pindah = htmlentities($_POST['alasan_pindah'], ENT_QUOTES);
    $alamat_tujuan = htmlentities($_POST['alamat_tujuan'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/pindah/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "INSERT INTO pindah VALUES('', '$nomor_pindah','$nik','$nama_pemohon','$alamat_asal','$alasan_pindah','$alamat_tujuan','$tanggal','$keterangan','$berkas')");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus sesuai!');
            document.location.href='pindah.php';
            </script>";
    } 
}
// edit pindah
if (isset($_POST['editpindah'])) {
    $id_pindah = $_POST['id_pindah'];
    $nomor_pindah = $_POST['nomor_pindah'];
    $nik = $_POST['nik'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $alamat_asal = $_POST['alamat_asal'];
    $alasan_pindah = $_POST['alasan_pindah'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/pindah/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "UPDATE pindah set nomor_pindah='$nomor_pindah', nik='$nik', nama_pemohon='$nama_pemohon', alamat_asal='$alamat_asal', alasan_pindah='$alasan_pindah', alamat_tujuan='$alamat_tujuan', tanggal='$tanggal',  keterangan='$keterangan',berkas='$berkas' where id_pindah ='$id_pindah'");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus sesuai!');
            document.location.href='pindah.php';
            </script>";
    } 
}

// hapus pindah
if (isset($_POST['hapuspindah'])) {
    $id_pindah = $_POST['id_pindah'];

    $hapus_pindah = mysqli_query($koneksi, "DELETE from pindah where id_pindah='$id_pindah'");
    if ($hapus_pindah) {
        header('location:pindah.php');
    } else { 
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="pindah.php"
            </script>
            ';
    }
}


//DATANG
//tambah datang
if (isset($_POST['add_datang'])) {
    $no_pindah = htmlentities($_POST['no_pindah'], ENT_QUOTES);
    $nama = htmlentities($_POST['nama'], ENT_QUOTES);
    $nik = htmlentities($_POST['nik'], ENT_QUOTES);
    $alamat_asal = htmlentities($_POST['alamat_asal'], ENT_QUOTES);
    $alamat_tujuan = htmlentities($_POST['alamat_tujuan'], ENT_QUOTES);
    $stat = htmlentities($_POST['stat'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/datang/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "INSERT INTO kedatangan VALUES('', '$no_pindah','$nama','$nik','$alamat_asal','$alamat_tujuan','$stat','$tanggal','$keterangan','$berkas')");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus sesuai!');
            document.location.href='datang.php';
            </script>";
    } 
}
// edit datang
if (isset($_POST['editdatang'])) {
    $id_datang = htmlentities($_POST['id_datang'], ENT_QUOTES);
    $no_pindah = htmlentities($_POST['no_pindah'], ENT_QUOTES);
    $nik = htmlentities($_POST['nik'], ENT_QUOTES);
    $nama = htmlentities($_POST['nama'], ENT_QUOTES);
    $alamat_asal = htmlentities($_POST['alamat_asal'], ENT_QUOTES);
    $alamat_tujuan = htmlentities($_POST['alamat_tujuan'], ENT_QUOTES);
    $stat = htmlentities($_POST['stat'], ENT_QUOTES);
    $tanggal = htmlentities($_POST['tanggal'], ENT_QUOTES);
    $keterangan = htmlentities($_POST['keterangan'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf','docx','png','jpg',);
    $berkas = $_FILES['berkas']['name'];
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name']; 
    $folder = "file/datang/$berkas";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        // maka tambahkan ke folder assets
        if(move_uploaded_file($file_tmp, "$folder")){    
            $query  = mysqli_query($koneksi, "UPDATE kedatangan set no_pindah='$no_pindah', nik='$nik', nama='$nama', alamat_asal='$alamat_asal', alamat_tujuan='$alamat_tujuan', stat='$stat', tanggal='$tanggal',  keterangan='$keterangan', berkas='$berkas' where id_datang ='$id_datang'");
            if($query){
                echo '<script>alert("File berhasil di upload!");</script>';
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    }else{
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Harus Ada File Atau Ekstensi harus sesuai!');
            document.location.href='datang.php';
            </script>";
    } 
}

// hapus datang
if (isset($_POST['hapusdatang'])) {
    $id_datang = $_POST['id_datang'];

    $hapus_datang = mysqli_query($koneksi, "DELETE from kedatangan where id_datang='$id_datang'");
    if ($hapus_datang) {
        header('location:datang.php');
    } else { 
        echo '
            <script>
            alert("Gagal Hapus Barang")
            window.location.href="datang.php"
            </script>
            ';
    }
}