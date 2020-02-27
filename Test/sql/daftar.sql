-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2020 pada 14.56
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
-- Database: `bima_personal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `nik` bigint(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `RT` int(10) NOT NULL,
  `RW` int(10) NOT NULL,
  `zip` int(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` int(10) NOT NULL,
  `bln_lahir` int(10) NOT NULL,
  `thn_lahir` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noRum` int(10) NOT NULL,
  `noHp` int(10) NOT NULL,
  `noNPWP` bigint(20) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `status` enum('kawin','belum') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alm_kantor` varchar(100) NOT NULL,
  `tel_kantor` int(20) NOT NULL,
  `jenis_Penghasilan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`nik`, `nama`, `alamat`, `RT`, `RW`, `zip`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `tempat`, `tgl_lahir`, `bln_lahir`, `thn_lahir`, `email`, `noRum`, `noHp`, `noNPWP`, `kewarganegaraan`, `gender`, `status`, `agama`, `pendidikan`, `pekerjaan`, `nama_kantor`, `jabatan`, `alm_kantor`, `tel_kantor`, `jenis_Penghasilan`) VALUES
(1234567890123456, 'emanuel', 'sfjsjf', 11, 1, 12345, 'fsdf', 'ddg', 'fvd', 'vvdf', 'feg', 12, 6, 1999, '111201710405@mhs.dinus.ac.id', 295, 2147483647, 23424938401041, 'WNI', 'f', 'belum', 'Islam', 'S3', 'PNS', '1234567890123456', 'Kepala Divisi Perencanaan dan Pengembangan Bisnis', 'jhdsjhfjdhsjfhdjshf', 2147483647, 2000000);

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
  MODIFY `nik` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567890123457;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
