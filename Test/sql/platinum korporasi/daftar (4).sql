-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2020 pada 09.25
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
-- Database: `pl_korp`
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
  `tanggal` int(10) NOT NULL,
  `bulan` int(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `usaha` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` int(10) NOT NULL,
  `RW` int(10) NOT NULL,
  `zip` int(10) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `noTelp` int(20) NOT NULL,
  `noFax` int(20) NOT NULL,
  `nomerNpwp` bigint(20) NOT NULL,
  `Negaraan` varchar(20) NOT NULL,
  `jen_kel` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `namakantor` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alm_kantor` varchar(100) NOT NULL,
  `tel_kantor` bigint(20) NOT NULL,
  `jenis_Penghasilan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nama_Lembaga`, `bidang`, `tempat`, `tanggal`, `bulan`, `tahun`, `usaha`, `alamat`, `RT`, `RW`, `zip`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `noTelp`, `noFax`, `nomerNpwp`, `Negaraan`, `jen_kel`, `status`, `agama`, `pendidikan`, `pekerjaan`, `namakantor`, `jabatan`, `alm_kantor`, `tel_kantor`, `jenis_Penghasilan`) VALUES
(22, 'jfw', 'efw', 'feg', 2, 2, 1999, 'Yayasan', 'sfjsjf', 11, 1, 12345, 'coba', 'ddg', 'fvd', 'vvdf', 221, 23443, 2147483647, 'WNA', 'Pria', 'Kawin', 'Islam', 'S2', 'PNS', 'coba', 'Kepala Divisi Perenc', 'jhdsjhfjdhsjfhdjshf', 2147483647, 5000000);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
