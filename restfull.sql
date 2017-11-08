-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Nov 2017 pada 06.06
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restfull`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_ktp`, `email`, `password`, `created_at`) VALUES
(0, 'Anonymous', '00027031995', 'admin@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '2017-11-01 05:05:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` varchar(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat`, `created_at`) VALUES
('t1', 'ALYOSHA COMPUTER YOGYAKARTA', 'Jogjatronik Mall, Lantai 2 No. 87 Jl. Brigjend Katamso 75-77 Yogyakarta', '2017-11-01 04:49:51'),
('t10', 'PITSTOP', 'Jl. Affandi No.25, Yogyakarta', '2017-11-01 04:49:51'),
('t11', 'ANANDAM', 'Jl. Gejayan No.17, Yogyakarta', '2017-11-01 04:49:51'),
('t12', 'QUADRA', 'Jalan Kaliurang KM.5 Blok CT 3 No. 6, Yogyakarta', '2017-11-01 04:49:51'),
('t13', 'AIZZA COMPUTER', 'Jl. Monjali No. 78A Yogyakarta', '2017-11-01 04:49:51'),
('t14', 'ELS COMPUTER', ' Jl. C. Simanjuntak No. 38, Yogyakarta', '2017-11-01 04:49:51'),
('t15', 'ASC COMPUTER', 'Kompleks Ruko Babarsari 53-55, Yogyakarta', '2017-11-01 04:49:51'),
('t16', 'TECS COMPUTER', 'Jl. Nusa Indah no. 2j Yogyakarta', '2017-11-01 04:49:51'),
('t17', 'DEMANK COMPUTER', 'Ramai Mall Centra Computer lt 2', '2017-11-01 04:49:51'),
('t18', 'CANOE COMPUTER', 'Ramai Mall Centra Computer lt 2 Blok B 7', '2017-11-01 04:49:51'),
('t19', 'NOTEBOOK CITY', 'Jogjatronik Mall, Lantai 2 No. 4-5 Jl. Brigjend Katamso 75-77 Yogyakarta', '2017-11-01 04:49:51'),
('t2', 'SG COMPUTER', 'Jl. Cempaka CT X No. 28 Deresan Yogyakarta.', '2017-11-01 04:49:51'),
('t20', 'MY NOTEBOOK', 'Jogjatronik Mall, Lantai 2 No, 35 Jl. Brigjend Katamso 75-77 Yogyakarta', '2017-11-01 04:49:51'),
('t21', 'BUANA JAYA COMPUTER', 'Jl. Kaliurang Km. 7,3 Yogyakarta', '2017-11-01 04:49:51'),
('t22', 'ABSOLUTE COMPUTER', 'Ramai Mall Centra Computer lt 2', '2017-11-01 04:49:51'),
('t23', 'EVER TECH', 'Jl. Kaliurang Km. 5 Yogyakarta', '2017-11-01 04:49:51'),
('t24', 'YOGYA COMPUTER', 'Jl. Kaliurang Km. 6,8 No. 7 Yogyakarta', '2017-11-01 04:49:51'),
('t3', 'SG COMPUTER JOGJATRONIK', ' Jogjatronik Mall, Lantai 2 No. 82 Jl. Brigjend Katamso 75-77 Yogyakarta ', '2017-11-01 04:49:51'),
('t4', 'KANA COMP GEJAYAN', 'Jl. Gejayan Deresan CT X/1A Yogyakarta. Jl. Cempaka 6A Deresam Yogyakarta', '2017-11-01 04:49:51'),
('t5', 'JJ COMPUTER (CV.KANA)', ' Jogjatronik Mall, Lantai 2 Jl. Brigjend Katamso 75-77 Yogyakarta ', '2017-11-01 04:49:51'),
('t6', 'LENOVO STORE (CV. KANA)', ' Jogjatronik Mall, Lantai 2 No. 84 Jl. Brigjend Katamso 75-77 Yogyakarta ', '2017-11-01 04:49:51'),
('t7', 'KANA COMP JT', ' Jogjatronik Mall, Lantai 2 Jl. Brigjend Katamso 75-77 Yogyakarta ', '2017-11-01 04:49:51'),
('t8', 'ASUS STORE (CV.KANA)', 'Ruko Gejayan Point Kav. C, Jl. Gejayan CTX No. 22', '2017-11-01 04:49:51'),
('t9', 'HARRISMA YOGYA', 'Jl. C. Simanjuntak No. 33-37 Yogyakarta 55223', '2017-11-01 04:49:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(11) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `id_toko` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','karyawan') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `no_ktp`, `nama_user`, `telp`, `id_toko`, `email`, `password`, `level`, `created_at`) VALUES
('u1', '00011031995', 'Nugrahantoro', '081904584775', 't1', 'nugrahantoro0@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'karyawan', '2017-11-01 03:36:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
