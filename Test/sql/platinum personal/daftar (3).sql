-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2020 pada 09.24
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_personal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `nik` int(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` int(10) NOT NULL,
  `RW` int(10) NOT NULL,
  `zip` int(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` int(10) NOT NULL,
  `bln_lahir` int(10) NOT NULL,
  `thn_lahir` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `noRum` bigint(20) NOT NULL,
  `noHp` bigint(20) NOT NULL,
  `noNPWP` bigint(20) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `jen_kel` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alm_kantor` int(30) NOT NULL,
  `tel_kantor` bigint(20) NOT NULL,
  `jenis_Penghasilan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`nik`, `firstName`, `alamat`, `RT`, `RW`, `zip`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `tempat`, `tgl_lahir`, `bln_lahir`, `thn_lahir`, `email`, `noRum`, `noHp`, `noNPWP`, `kewarganegaraan`, `jen_kel`, `status`, `agama`, `pendidikan`, `pekerjaan`, `nama_kantor`, `jabatan`, `alm_kantor`, `tel_kantor`, `jenis_Penghasilan`) VALUES
(1, 'Ari Hilda', 'sfjsjf', 11, 1, 231234, 'fsdf', 'ddg', 'coba', 'vvdf', 'coba', 12, 6, 1999, '111201710405@mhs.din', 295, 295, 2147483647, 'WNA', 'Pria', 'Kawin', 'Kristen', 'S3', 'PNS', '1', 'Kepala Divisi Perencanaan dan Pengembangan Bisnis', 0, 2147483647, 2500000),
(2, 'Laksita Maulisa', 'sfjsjf', 11, 1, 12345, 'fsdf', 'coba', 'coba', 'vvdf', 'feg', 12, 6, 1999, '111201710405@mhs.din', 295, 2147483647, 2147483647, 'WNA', 'Pria', 'Kawin', 'Kristen', 'S3', 'PNS', '2', 'Kepala Divisi Perencanaan dan Pengembangan Bisnis', 0, 2147483647, 7500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `nik` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
