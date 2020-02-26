-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 05:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `bima_korp`
--

CREATE TABLE `bima_korp` (
  `id` int(30) NOT NULL,
  `nama_Lembaga` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tgl_berdiri` varchar(50) NOT NULL,
  `bln_berdiri` varchar(50) NOT NULL,
  `thn_berdiri` varchar(50) NOT NULL,
  `bentuk_usaha` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` int(50) NOT NULL,
  `RW` int(50) NOT NULL,
  `zip` int(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `noTelp` varchar(10) NOT NULL,
  `noFax` varchar(10) NOT NULL,
  `noNPWP` int(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status_gedung` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_1` varchar(50) NOT NULL,
  `noAkta` varchar(50) NOT NULL,
  `tgl_aktaBerdiri` varchar(50) NOT NULL,
  `bln_aktaBerdiri` varchar(50) NOT NULL,
  `thn_aktaBerdiri` varchar(50) NOT NULL,
  `noBerubah` varchar(50) NOT NULL,
  `tgl_aktaBerubah` varchar(50) NOT NULL,
  `bln_aktaBerubah` varchar(50) NOT NULL,
  `thn_aktaBerubah` varchar(50) NOT NULL,
  `noIzin` varchar(50) NOT NULL,
  `tgl_izin` varchar(10) NOT NULL,
  `bln_izin` varchar(10) NOT NULL,
  `thn_izin` varchar(10) NOT NULL,
  `jenis_Penghasilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bima_korp`
--
ALTER TABLE `bima_korp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bima_korp`
--
ALTER TABLE `bima_korp`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
