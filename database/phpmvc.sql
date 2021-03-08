-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 09:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `no` int(50) NOT NULL,
  `no_buku` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` int(50) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`no`, `no_buku`, `judul`, `pengarang`, `tahun_terbit`, `jenis_buku`, `status`) VALUES
(1, 723432, 'Jago Laravel 8', 'Galih Pratama', 2021, 'Pembelajaran', 'Ready'),
(2, 187239182, 'Jago react native', 'Prawito Hudoro', 2020, 'Pembelajaran Mobile Apps', 'Ready'),
(3, 182741, 'Bahasa Python', 'Ivan', 2021, 'Pembelajaran', 'Ready'),
(4, 7325923, 'Belajar UI/UX', 'Angga Risky', 2021, 'Belajar Design Research', 'No Ready '),
(7, 2147483647, 'Belajar Frontend VueJS', 'Galih Pratama', 2020, 'Pembelajaran Dong', 'Ready'),
(10, 1312, 'Belajar ReactJS', 'Prawito Hudoro', 2019, 'Pembelajaran Framework', 'Ready'),
(12, 1312, 'Belajar ReactJS Framework', 'Prawito Hudoro', 2019, 'Pembelajaran Framework', 'Ready'),
(13, 1312, 'Belajar ReactJS Framework 12', 'Prawito Hudoro', 2019, 'Pembelajaran Framework', 'Ready'),
(23, 324623, 'Belajar Networking MTCNA', 'Ivan Aliss', 2020, 'Pembelajaran Mengenai Jaringan', 'Ready'),
(24, 2147483647, 'Belajar Golang', 'Agung Setiawan', 2019, 'Buku Pembelajaran', 'No Ready ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
