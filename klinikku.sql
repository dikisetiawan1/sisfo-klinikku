-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 08:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikku`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nomor_antrean`
--

CREATE TABLE `nomor_antrean` (
  `id_antrian` int(11) NOT NULL,
  `id_riwayatP` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nomor_antrean`
--

INSERT INTO `nomor_antrean` (`id_antrian`, `id_riwayatP`, `id_pasien`) VALUES
(1, 18, 21),
(2, 19, 22),
(3, 31, 28),
(4, 20, 21),
(5, 33, 28),
(6, 34, 29),
(7, 35, 30),
(10, 36, 31),
(11, 37, 32),
(12, 38, 33);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` int(4) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `jenis_obat`, `nama`, `qty`, `tgl_kadaluarsa`, `harga`) VALUES
(9, 'tablet', 'vitazim plus', 20, '2023-12-26', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nama_ortu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `alamat`, `jk`, `nama_ortu`) VALUES
(21, 'Diki Setiawan', 'kp. segaran', 'laki-laki', 'Nasan'),
(22, 'fahmi sovi shobandi', 'kp. Segaran city', 'laki-laki', 'Nasan'),
(28, 'Prita', 'Kp. kopas', 'perempuan', 'Warca'),
(29, 'Eko ', 'Kp. kopel klari jabar indonesia', 'laki-laki', 'Warca'),
(30, 'Fina', 'Kp. cibulus', 'perempuan', 'Padil'),
(31, 'Siti nisa', 'Kp. buluk', 'perempuan', 'Dadang'),
(32, 'Jono', 'Kp. Tambun selatan', 'laki-laki', 'Junu'),
(33, 'Miftahudin', 'Jln. Bekasi barat', 'laki-laki', 'Miskah');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pasien`
--

CREATE TABLE `riwayat_pasien` (
  `id_riwayatP` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_berobat` date NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `tensi_darah` varchar(50) NOT NULL,
  `usia` int(10) NOT NULL,
  `catatan` text NOT NULL,
  `jenis_sakit` varchar(227) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_pasien`
--

INSERT INTO `riwayat_pasien` (`id_riwayatP`, `id_pasien`, `tgl_berobat`, `berat_badan`, `tensi_darah`, `usia`, `catatan`, `jenis_sakit`) VALUES
(18, 21, '2023-12-15', '75', '120/80', 24, 'Sakit maag dapat disebabkan oleh penyakit pada organ di saluran pencernaan, seperti tukak lambung, infeksi bakteri H. pylori, peradangan di lambung (gastritis), dan penyakit refluks asam lambung (GERD). Selain penyakit, penggunaan obat-obatan, seperti obat antiinflamasi nonsteroid (OAINS), seperti aspirin atau ibuprofen, antibiotik seperti ciprofloxacin atau azithromycin, serta obat kortikosteroid juga dapat menyebabkan sakit maag..', 'Batuk pilek, Sakit Magh, Kolesterol, Diare'),
(19, 22, '2023-12-15', '54', '120/80', 12, 'Sakit maag dapat disebabkan oleh penyakit pada organ di saluran pencernaan, seperti tukak lambung, infeksi bakteri H. pylori, peradangan di lambung (gastritis), dan penyakit refluks asam lambung (GERD). Selain penyakit, penggunaan obat-obatan, seperti obat antiinflamasi nonsteroid (OAINS), seperti aspirin atau ibuprofen, antibiotik seperti ciprofloxacin atau azithromycin, serta obat kortikosteroid juga dapat menyebabkan sakit maag..', 'Batuk pilek, Sakit Magh, Kolesterol, Diare'),
(20, 21, '2023-12-18', '68', '120/80', 25, 'Sakit maag dapat disebabkan oleh penyakit pada organ di saluran pencernaan, seperti tukak lambung, infeksi bakteri H. pylori, peradangan di lambung (gastritis), dan penyakit refluks asam lambung (GERD). Selain penyakit, penggunaan obat-obatan, seperti obat antiinflamasi nonsteroid (OAINS), seperti aspirin atau ibuprofen, antibiotik seperti ciprofloxacin atau azithromycin, serta obat kortikosteroid juga dapat menyebabkan sakit maag..', 'Batuk pilek, Sakit Magh, Kolesterol, Diare'),
(31, 28, '2023-12-15', '56', '120/80', 15, 'Sakit maag dapat disebabkan oleh penyakit pada organ di saluran pencernaan, seperti tukak lambung, infeksi bakteri H. pylori, peradangan di lambung (gastritis), dan penyakit refluks asam lambung (GERD). Selain penyakit, penggunaan obat-obatan, seperti obat antiinflamasi nonsteroid (OAINS), seperti aspirin atau ibuprofen, antibiotik seperti ciprofloxacin atau azithromycin, serta obat kortikosteroid juga dapat menyebabkan sakit maag..', 'Batuk pilek, Sakit Magh, Kolesterol, Diare'),
(33, 28, '2023-12-18', '68', '120/90', 56, 'sjsjhjs', 'shsjhjs'),
(34, 29, '2023-12-20', '56', '120/80', 31, '', ''),
(35, 30, '2023-12-20', '66', '120/80', 22, '', ''),
(36, 31, '2023-12-20', '26', '120/90', 22, '', ''),
(37, 32, '2023-12-21', '75', '120/80', 30, 'Habiskan Obatnya yaaa', 'Diare, flu batuk, demam'),
(38, 33, '2023-12-21', '56', '120/90', 38, 'Jangan lupa istirahat secukupnya ya', 'Diare, flu batuk, demam');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama`, `status`) VALUES
(1, 'Admin', 'aktif'),
(2, 'Dokter', 'aktif'),
(3, 'Apoteker', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(127) NOT NULL,
  `id_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `phone`, `password`, `id_role`) VALUES
(1, 'Diki Setiawan', 'dikisetia101@gmail.com', '085777613672', 'cae55bba2bdb58141037032e450b9372', 1),
(3, 'fahmi sovi shobandi', 'fahmi@gmail.com', '085603038015', 'f11d50d63d3891a44c332e46d6d7d561', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `nomor_antrean`
--
ALTER TABLE `nomor_antrean`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `riwayat_pasien`
--
ALTER TABLE `riwayat_pasien`
  ADD PRIMARY KEY (`id_riwayatP`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nomor_antrean`
--
ALTER TABLE `nomor_antrean`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_pasien`
--
ALTER TABLE `riwayat_pasien`
  MODIFY `id_riwayatP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
