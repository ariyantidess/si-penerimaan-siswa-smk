-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 17.19
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenerimaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_induk` varchar(23) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `tahun_lulus` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL,
  `bi` varchar(30) NOT NULL,
  `bing` varchar(34) NOT NULL,
  `mm` varchar(23) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `putusan_hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_induk`, `nama_siswa`, `tempat_lahir`, `alamat`, `tgl_lahir`, `asal_sekolah`, `tahun_lulus`, `jurusan`, `agama`, `jenis_kelamin`, `bi`, `bing`, `mm`, `jumlah`, `putusan_hasil`) VALUES
('1012', 'siska', 'sungai merembang', 'air joman', '2001-01-20', 'smp n 1 air joman', '2017', 'Rpl', 'HINDU', 'Laki-laki', '45', '56', '67', '157', 'Lulus'),
('233', '23', '33', '43', '0000-00-00', '434', '343', 'Rpl', 'HINDU', 'Laki-laki', '45', '67', '78', '168', 'Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seleksi`
--

CREATE TABLE `seleksi` (
  `no_induk` varchar(23) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `jurusan` varchar(29) NOT NULL,
  `jenis_kelamin` varchar(23) NOT NULL,
  `bi` varchar(20) NOT NULL,
  `bing` varchar(25) NOT NULL,
  `mm` varchar(20) NOT NULL,
  `jumlah` varchar(34) NOT NULL,
  `putusan_hasil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seleksi`
--

INSERT INTO `seleksi` (`no_induk`, `nama_siswa`, `jurusan`, `jenis_kelamin`, `bi`, `bing`, `mm`, `jumlah`, `putusan_hasil`) VALUES
('1', 'sri damai', 'Rpl', 'perempuan', '69', '70', '50', '189', 'tolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'admin', 'Smk negeri 1 air joman', 1, 'smk asahan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indeks untuk tabel `seleksi`
--
ALTER TABLE `seleksi`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
