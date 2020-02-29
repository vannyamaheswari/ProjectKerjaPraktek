-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2020 pada 09.26
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
-- Database: `dplk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` int(10) NOT NULL,
  `bulan` int(10) NOT NULL,
  `tahun` int(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jen_kel` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `RT` int(10) NOT NULL,
  `RW` int(10) NOT NULL,
  `zip` int(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` int(20) NOT NULL,
  `nonpwp` int(20) NOT NULL,
  `negaraan` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gaji` int(100) NOT NULL,
  `pendapatan_lain` int(100) NOT NULL,
  `investasi` varchar(50) NOT NULL,
  `usia_pensiun` int(20) NOT NULL,
  `iuran_kerja` int(100) NOT NULL,
  `iuran_peserta` int(50) NOT NULL,
  `firstName2` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` int(10) NOT NULL,
  `bulan_lahir` int(10) NOT NULL,
  `tahun_lahir` int(10) NOT NULL,
  `alamat_w` varchar(20) NOT NULL,
  `kecamatan_w` varchar(10) NOT NULL,
  `kota_w` varchar(10) NOT NULL,
  `zip_w` int(10) NOT NULL,
  `tlp_rmh` int(20) NOT NULL,
  `nomerhp_w` bigint(20) NOT NULL,
  `hub_peserta` varchar(20) NOT NULL,
  `kerabat` varchar(20) NOT NULL,
  `noKerabat` int(20) NOT NULL,
  `ktr_Nama` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alm_ktr` varchar(50) NOT NULL,
  `kec_ktr` varchar(20) NOT NULL,
  `tel_kantor` bigint(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `l_tempat` varchar(20) NOT NULL,
  `lahir_tanggal` int(10) NOT NULL,
  `lahir_bulan` int(10) NOT NULL,
  `lahir_tahun` int(20) NOT NULL,
  `no_Induk` bigint(20) NOT NULL,
  `no_alamat` varchar(20) NOT NULL,
  `no_kec` varchar(20) NOT NULL,
  `no_kota` varchar(20) NOT NULL,
  `no_zip` int(10) NOT NULL,
  `telp_No` int(20) NOT NULL,
  `kerja` varchar(50) NOT NULL,
  `kantor_nama` varchar(50) NOT NULL,
  `jenis_usaha` varchar(20) NOT NULL,
  `jabat` varchar(20) NOT NULL,
  `penghasilan` bigint(100) NOT NULL,
  `no_rek` bigint(100) NOT NULL,
  `nama_rek` varchar(50) NOT NULL,
  `tgl_debet` varchar(50) NOT NULL,
  `nominal_debet` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `jenis`, `firstName`, `tempat`, `tanggal`, `bulan`, `tahun`, `agama`, `jen_kel`, `status`, `nik`, `alamat`, `RT`, `RW`, `zip`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `email`, `noHp`, `nonpwp`, `negaraan`, `pekerjaan`, `gaji`, `pendapatan_lain`, `investasi`, `usia_pensiun`, `iuran_kerja`, `iuran_peserta`, `firstName2`, `tempat_lahir`, `tanggal_lahir`, `bulan_lahir`, `tahun_lahir`, `alamat_w`, `kecamatan_w`, `kota_w`, `zip_w`, `tlp_rmh`, `nomerhp_w`, `hub_peserta`, `kerabat`, `noKerabat`, `ktr_Nama`, `jabatan`, `alm_ktr`, `kec_ktr`, `tel_kantor`, `nama_lengkap`, `l_tempat`, `lahir_tanggal`, `lahir_bulan`, `lahir_tahun`, `no_Induk`, `no_alamat`, `no_kec`, `no_kota`, `no_zip`, `telp_No`, `kerja`, `kantor_nama`, `jenis_usaha`, `jabat`, `penghasilan`, `no_rek`, `nama_rek`, `tgl_debet`, `nominal_debet`) VALUES
(42, 'Peserta Pemberi Kerja', 'Ari Hilda', 'dsfsf', 2, 2, 2019, 'Islam', 'Pria', 'Kawin', 2147483647, 'sfjsjf', 11, 1, 12345, '12345', 'ddg', 'fvd', 'vvdf', '111201710405@mhs.dinus.ac.id', 0, 2147483647, 'WNI', 'Karyawan', 0, 0, 'Pasar Uang', 40, 5000000, 2500000, 'ari hilda', 'coba', 1, 2, 1999, 'coba', 'coba', 'coba', 12345, 452666, 81393720562, 'cob', 'coba', 452666, 'coba', 'Kepala Divisi Perencanaan dan Pengembangan Bisnis', 'coba', 'coba', 99082973942648, 'ari hilda m', 'coba', 1, 1, 1, 123456789012345, 'pati', 'coba', 'coba', 12345, 452666, 'Karyawan', 'coba', 'Pertanian', 'coba', 2000000, 123456789, 'coba', '23 Jan 2020', 5000000);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
