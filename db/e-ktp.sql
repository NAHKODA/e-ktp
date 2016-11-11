-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2016 at 04:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ktp`
--

CREATE TABLE `tbl_ktp` (
  `nik` bigint(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `rtrw` varchar(50) NOT NULL,
  `keldes` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_kawin` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `berlaku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ktp`
--

INSERT INTO `tbl_ktp` (`nik`, `nama`, `ttl`, `jk`, `alamat`, `rtrw`, `keldes`, `kecamatan`, `agama`, `status_kawin`, `pekerjaan`, `kewarganegaraan`, `berlaku`) VALUES
(3321081702960002, 'FIKA RIDAUL MAULAYYA', 'DEMAK, 17-02-1996', 'LAKI-LAKI', 'GEDANG ALAS', '008/002', 'GEDANG ALAS', 'GAJAH', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', '17-02-2019'),
(3517090402950008, 'FAISAL MAHADI', 'JOMBANG, 04-02-1995', 'LAKI-LAKI', 'TAMBAK BERAS', '003/004', 'TAMBAK REJO', 'JOMBANG', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', '04-02-2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `email`) VALUES
(1, 'admin', '0d572e628632f17a78e05f5cfe2836db13f2e453', 'Fika Ridaul Maulayya', 'ridaulmaulayya@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
