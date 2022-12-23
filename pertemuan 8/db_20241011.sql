-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 10:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_20241011`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Angan Febriana', '20241011', 'anganfebriana90@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(2, 'Toibatun Wahidah', '20241031', 'toibatunwahidah@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(3, 'Salsa Oktariani', '20241032', 'salsa@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(4, 'Ahmad Nabil Fikri', '20241033', 'nabil@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(5, 'Ika Arisandi', '20241034', 'ikaarisandi@gmail.com', 'Pendidikan teknologi Informasi', ''),
(6, 'Fandi Resa Raditia', '20241035', 'fandi@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(7, 'Eka Bagas Karyatma', '20241036', 'ekabagas@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(8, 'Dewi Agustina', '20241037', 'dewiagustina@gmail.com', 'Pendidikan Teknologi Informasi', ''),
(9, 'Jihansah', '20241038', 'jihansah@gmail.com', 'Pendidikan Teknologi Informasi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
