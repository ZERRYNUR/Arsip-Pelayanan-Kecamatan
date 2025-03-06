-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipkec`
--

-- --------------------------------------------------------

--
-- Table structure for table `blangko_ktp`
--

CREATE TABLE `blangko_ktp` (
  `id_ktp` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_cetak` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blangko_ktp`
--

INSERT INTO `blangko_ktp` (`id_ktp`, `nama`, `nik`, `alamat`, `tgl_cetak`, `keterangan`) VALUES
(10302, 'KASMINI', '3524115509840006', 'SIDOKUMPUL\r\n', '2022-07-05', 'CETAK 050722\r\n'),
(10303, 'SUJIANTO', '3524112002740002', 'SIDOKUMPUL\r\n', '2022-07-05', 'CETAK 050722\r\n'),
(10304, 'LAILATUL MAGHFIROH', '3524113702010001', 'BARUREJO\r\n', '2022-07-05', 'CETAK 050722\r\n'),
(10305, 'AHMAD JONO', '2171021201840006', 'JATIPANDAK\r\n', '2022-07-05', 'CETAK 050722'),
(10306, 'APRILIYANI', '3524114704970002', 'NOGOJATISARI\r\n', '2022-07-05', 'CETAK 050722\r\n'),
(10307, 'ENDEKE KHIFITIYAH', '3524114705950001', 'PAMOTAN\r\n', '2022-07-05', 'CETAK 050722'),
(10308, 'SULIK EKO', '3524115608820002', 'KEDUNGWANGI\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10309, 'PRABDI', '3524110101810007', 'SELOREJO\r\n', '2022-07-08', 'CETAK 080722'),
(10310, 'PRABDI', '3524110101810007', 'SELOREJO\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10311, 'PUNTIANI', '3524116601930001', 'PAMOTAN\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10312, 'FANIA INTAN', '3524116207010001', 'SELOREJO\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10313, 'LADI LESWANTO', '6409041701840002', 'CANDISARI\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10314, 'ELLY ISMAWATI', '6409046901930003', 'CANDISARI\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10315, 'AGUSTIONO', '3526121008920001', 'JATIPANDAK\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10316, 'NITA  AGUSTINA', '3524115207900004', 'KEDUNGWANGI\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10317, 'MARIYEM', '3524115107640002', 'KEDUNGWANGI\r\n', '2022-07-08', 'CETAK 080722\r\n'),
(10318, 'EDI KUSPRIANTO', '3519032710810001', 'KEDUNGWANGI\r\n', '2022-08-01', 'CETAK 010822\r\n'),
(10319, 'HERLIN WURYANTI', '3519035308860003', 'KEDUNGWANGI\r\n', '2022-08-01', 'CETAK 010822\r\n'),
(10320, 'HARIYANTO', '3524111707590002', 'CANDISARI\r\n', '2022-08-03', 'CETAK 030822\r\n'),
(10321, 'SULISTYORINI', '3524115009700001', 'ARDIREJO\r\n', '2022-08-04', 'CETAK 040822\r\n'),
(10322, 'EKA ASTRI APRILLIANI', '3524115404960001', 'KEDUNGWANGI\r\n', '2022-08-05', 'CETAK 050822\r\n'),
(10323, 'SUTIANI', '3524115507770003', 'GEMPOLMANIS\r\n', '2022-08-11', 'CETAK 110822\r\n'),
(10324, 'RUSWANTO', '3524111703920001', 'SEMAMPIREJO\r\n', '2022-08-22', 'CETAK 220822\r\n'),
(10325, 'ARIFIN', '3524111412820001', 'PATAAN\r\n', '2022-08-23', 'CETAK 230822\r\n'),
(10326, 'SUMIARSIH', '3524115310830002', 'SUMBERSARI\r\n', '2022-08-24', 'CETAK 240822\r\n'),
(10327, 'HENIK PURWANINGSIH', '3524115107820001', 'KRETERANGGON\r\n', '2022-08-25', 'CETAK 250822\r\n'),
(10328, 'SULTOM', '3524112502950002', 'KRETERANGGON\r\n', '2022-08-29', 'CETAK 290822\r\n'),
(10329, 'KASIANTO', '3524110108890004', 'SUMBERSARI', '2022-08-29', 'CETAK 290822\r\n'),
(10330, 'SUWANDI', '3524111801850003', 'PAMOTAN\r\n', '2022-09-01', 'CETAK 010922\r\n'),
(10331, 'SUPRIYATIN', '324114612830001', 'SEMAMPIREJO\r\n', '2022-09-02', ''),
(10332, 'RYOEDI PRATAMA', '3524113110010001', 'PASARLEGI\r\n', '2022-09-05', 'CETAK 050922\r\n'),
(10333, 'YUSUF RIZKY CHOIRULLOH', '3524111212960001', 'SUMBERSARI\r\n', '2022-09-05', 'CETAK 050922\r\n'),
(10334, 'SUTA\'IN', '3524111311920002', 'ARDIREJO\r\n', '2022-09-06', 'CETAK 060922\r\n'),
(10335, 'HAQIQI DWI SAPUTRA', '3524111407000002', 'JATIPANDAK\r\n', '2022-09-08', 'CETAK 080922\r\n'),
(10336, 'SUGIYATI', '3510194202010003', 'BARUREJO\r\n', '2022-09-09', 'CETAK 090922\r\n'),
(10337, 'RENDI K', '3524112904040006', 'WATES WINANGUN\r\n', '2022-10-24', 'CETAK 241022\r\n'),
(10338, 'VASI AOLAN', '3524112502950002', 'GARUNG\r\n', '2022-10-24', 'CETAK 241022\r\n'),
(10339, 'ROLLA IRLAMSYA SAPUTRA', '3524112907000001', 'ARDIREJO\r\n', '2022-10-25', 'CETAK 251022\r\n'),
(10342, 'RYAN PURWO SETIAWAN', '3524110506970001', 'CANDISARI', '2022-11-16', 'CARD PRINT');

-- --------------------------------------------------------

--
-- Table structure for table `dispen_nikah`
--

CREATE TABLE `dispen_nikah` (
  `id_nikah` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `no_pengantar` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `alamat_suami` text NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `alamat_istri` text NOT NULL,
  `tempat_nikah` text NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispen_nikah`
--

INSERT INTO `dispen_nikah` (`id_nikah`, `no_surat`, `no_pengantar`, `nama_suami`, `alamat_suami`, `nama_istri`, `alamat_istri`, `tempat_nikah`, `tanggal`, `keterangan`, `berkas`) VALUES
(1272, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-02-01', 'tes', ''),
(1273, 'etxr', 'b423bh', 'gggg', 'ccjgvhbj,nm', 'tes', 'tes', 'tes', '2023-03-01', 'coba', '1a434c7b-63fa-4eb5-be25-283ebe9d1881.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `izin_keramaian`
--

CREATE TABLE `izin_keramaian` (
  `id_izin` int(11) NOT NULL,
  `no_regester` varchar(100) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `pukul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `izin_keramaian`
--

INSERT INTO `izin_keramaian` (`id_izin`, `no_regester`, `nama_pemohon`, `alamat`, `jenis_kegiatan`, `tanggal`, `pukul`, `keterangan`, `berkas`) VALUES
(31093, 'estrjk', 'gfchgvhbnkml', 'hj', 'n', '2023-03-06', '12', '-', 'T-01.docx'),
(31094, '265148gjhvjdc', 'tes', 'tes1', 'tyrx hgjhkjnkl', '2023-03-04', '12am-12pm', 'cetak', 'LKM Kegiatan 2 (2).docx'),
(31095, 'tes jir', 'tes', 'Lamongan', 'ELEKTON1', '2023-03-01', '12am-12pm', 'tes', '1.jpg'),
(31097, '265148gjhvjdc', 'SEGER', 'Lamongan', 'pria', '2023-03-06', '12am-12pm', 'cetak', 'Tugas Basis Data I.docx');

-- --------------------------------------------------------

--
-- Table structure for table `kedatangan`
--

CREATE TABLE `kedatangan` (
  `id_datang` int(11) NOT NULL,
  `no_pindah` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(40) DEFAULT NULL,
  `alamat_asal` text NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `stat` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kedatangan`
--

INSERT INTO `kedatangan` (`id_datang`, `no_pindah`, `nama`, `nik`, `alamat_asal`, `alamat_tujuan`, `stat`, `tanggal`, `keterangan`, `berkas`) VALUES
(50129, '35set44', 'Ahmad Dahlan', '44444', 'lgufvyi', 'mbuh', 'vyvyjhgvh', '2023-02-01', 'cetak', 'Screenshot (54).png'),
(50130, 'SKPWNI/ 3524/ 15032022/ 0041', 'FITRIA YULIATI', '352412810800003', 'Tunggunjagir Mantup, Lamongan', 'Wonorejo Sambeng, Lmg', 'Numpang', '2023-03-03', '-', 'Screenshot (36).png');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `id_pindah` int(11) NOT NULL,
  `nomor_pindah` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `alamat_asal` text NOT NULL,
  `alasan_pindah` text NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`id_pindah`, `nomor_pindah`, `nik`, `nama_pemohon`, `alamat_asal`, `alasan_pindah`, `alamat_tujuan`, `tanggal`, `keterangan`, `berkas`) VALUES
(81201, 'tesu23', '56346879785643', 'tes3', 'tes6', 'tes1', 'tes9', '2023-02-09', 'cetakruss', '12-Article Text-16-2-10-20210211.pdf'),
(81206, 'l23r3bhbh', '3516176909910002', 'SEGER', 'lgufvyi', 'tgb', 'mbuh', '2023-03-04', 'tes', 'Screenshot (42).png'),
(81207, 'SKPWNI/ 3524/ 22032022/ 0082', '3516176909910002', 'WAHYU DEWI SEKARSARI', 'Ds. Pamotan, sambeng, Lamongan', 'Keluarga', 'Ds menturus Kudu , Jombang', '2023-03-23', 'sendiri', 'Screenshot (53).png');

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `id_sktm` int(11) NOT NULL,
  `no_register` varchar(100) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keperluan` text NOT NULL,
  `tujuan` text NOT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sktm`
--

INSERT INTO `sktm` (`id_sktm`, `no_register`, `nomor_surat`, `nama_pemohon`, `alamat`, `tanggal`, `keperluan`, `tujuan`, `keterangan`, `berkas`) VALUES
(71207, 's6tffgjhbjnkml,', '12121768790', 'tes1', 'surabaya', '2023-03-04', 'teshfjhmj,', ' fduih iudu', 'tesfhcgjvhbj', '03Latihan 2.pdf'),
(71208, '5yhy566', '6ftffyf5', 'saldjkab', 'berjo', '2023-03-25', 'tes', ' fduih iudu', 'cetak', 'Screenshot (35).png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `user_name`, `password`, `level`) VALUES
(1, 'user', 'user', 'user123', 'pegawai'),
(4, 'admin bin super', 'admin', 'admin123', 'admin'),
(5, 'agus ok', 'agusnew', 'agus123', 'pegawai'),
(7, 'andi', 'pegawai', '12345', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blangko_ktp`
--
ALTER TABLE `blangko_ktp`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indexes for table `dispen_nikah`
--
ALTER TABLE `dispen_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indexes for table `izin_keramaian`
--
ALTER TABLE `izin_keramaian`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`id_datang`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blangko_ktp`
--
ALTER TABLE `blangko_ktp`
  MODIFY `id_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10344;

--
-- AUTO_INCREMENT for table `dispen_nikah`
--
ALTER TABLE `dispen_nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1275;

--
-- AUTO_INCREMENT for table `izin_keramaian`
--
ALTER TABLE `izin_keramaian`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31098;

--
-- AUTO_INCREMENT for table `kedatangan`
--
ALTER TABLE `kedatangan`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50131;

--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81208;

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71209;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
