-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2020 pada 09.23
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
-- Database: `bi_korp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(50) NOT NULL,
  `nama_Lembaga` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_berdiri` int(20) NOT NULL,
  `bln_berdiri` int(20) NOT NULL,
  `thn_berdiri` int(20) NOT NULL,
  `usaha` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` int(10) NOT NULL,
  `RW` int(10) NOT NULL,
  `zip` int(10) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `noTelp` int(20) NOT NULL,
  `noFax` int(20) NOT NULL,
  `noNPWP` bigint(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `status_gedung` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_1` varchar(50) NOT NULL,
  `noAkta` int(100) NOT NULL,
  `tgl_aktaBerdiri` int(10) NOT NULL,
  `bln_aktaBerdiri` int(10) NOT NULL,
  `thn_aktaBerdiri` int(10) NOT NULL,
  `noBerubah` int(20) NOT NULL,
  `tgl_aktaBerubah` int(10) NOT NULL,
  `bln_aktaBerubah` int(10) NOT NULL,
  `thn_aktaBerubah` int(11) NOT NULL,
  `noIzin` int(20) NOT NULL,
  `tgl_izin` int(10) NOT NULL,
  `bln_izin` int(10) NOT NULL,
  `thn_izin` int(10) NOT NULL,
  `jenis_Penghasilan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nama_Lembaga`, `bidang`, `tempat`, `tgl_berdiri`, `bln_berdiri`, `thn_berdiri`, `usaha`, `alamat`, `RT`, `RW`, `zip`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `noTelp`, `noFax`, `noNPWP`, `jabatan`, `status_gedung`, `nama`, `alamat_1`, `noAkta`, `tgl_aktaBerdiri`, `bln_aktaBerdiri`, `thn_aktaBerdiri`, `noBerubah`, `tgl_aktaBerubah`, `bln_aktaBerubah`, `thn_aktaBerubah`, `noIzin`, `tgl_izin`, `bln_izin`, `thn_izin`, `jenis_Penghasilan`) VALUES
(15, 'jfw', 'efw', 'feg', 0, 2, 1999, 'Organisasi', 'sfjsjf', 11, 1, 231234, 'fsdf', 'ddg', 'fvd', 'coba', 221, 23443, 2147483647, 'fdv', 'Milik Badan/HM', 'jonathan', 'coba', 123, 1, 1, 11, 111, 1, 1, 1111, 1111, 1, 1, 1, 5000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
