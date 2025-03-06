<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'function.php';

// menangkap data yang dikirim dari form login
$user_name = $_POST['user_name'];
$password = $_POST['password'];


// menyeleksi data user dengan user_name dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from user where user_name='$user_name' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah user_name dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan user_name
		$_SESSION['user_name'] = $user_name;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

		// cek jika user login sebagai pegawai
	} else if ($data['level'] == "pegawai") {
		// buat session login dan user_name
		$_SESSION['user_name'] = $user_name;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:index.php");
	} else {

		echo '<script>
        alert("user_name atau password salah")
        window.location.href="login.php"
        </script>';
	}
} else {
	echo '<script>
        alert("user_name atau password salah")
        window.location.href="login.php"
        </script>';
}
