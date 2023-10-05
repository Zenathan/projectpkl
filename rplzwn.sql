-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 06:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rplzwn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin` enum('Laki Laki','Perempuan','Non-Binary') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `no_hp`, `email`, `jeniskelamin`) VALUES
(1, 'Ghazia Zidane Octavarian', 'Cigantang', '081024912', 'ghazia@gmail.com', 'Laki Laki'),
(2, 'Akbar Syam Al Ghamar', 'Lembur Waroeng', '081261782529', 'akbar@gmail.com', 'Laki Laki'),
(9, 'Rizkia Ramdania', 'Lembur Waroeng', '082357825292', 'rizkia@gmail.com', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`id`, `id_karyawan`, `nama`, `waktu`) VALUES
(11, '114450', 'Abdul Hafiz', 'Thursday, 21-09-2023 02:19:40 pm'),
(12, '114450', 'Abdul Hafiz', 'Sunday, 24-09-2023 09:05:01 pm'),
(13, '114450', 'Abdul Hafiz', 'Monday, 25-09-2023 10:50:44 am');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jeniskel` varchar(255) NOT NULL,
  `tanglahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `ntelp` varchar(18) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `username`, `password`, `nama`, `agama`, `jeniskel`, `tanglahir`, `alamat`, `ntelp`, `foto`) VALUES
(1, 'yawn', 'yawn', 'rahmat', 'Islam', 'Laki Laki', 'Jakarta 20/01/1995', 'Jember', '0988786', '123.jpeg'),
(114450, 'red', 'red', 'Abdul Hafiz', 'Islam', 'Laki Laki', 'Tasikmalaya 2001-10-19', 'Bandung Barat,Kecamatan Cikoneng', '0898129425', 'test.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id`, `id_karyawan`, `nama`, `keterangan`, `alasan`, `waktu`, `bukti`) VALUES
(1, '114450', 'Abdul Hafiz', 'Sakit', 'malas', 'Monday, 25-09-2023 10:30:03 am', '2509202305301133939a123613bbfd8b56bc39203a789a-rem'),
(2, '114450', 'Abdul Hafiz', 'Izin', 'Di ajak mamah ke kawinan', 'Monday, 25-09-2023 11:31:35 am', '25092023063146348661109_199789556284079_4815189336');

-- --------------------------------------------------------

--
-- Table structure for table `userz`
--

CREATE TABLE `userz` (
  `id_user` int(15) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `showpassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userz`
--

INSERT INTO `userz` (`id_user`, `username`, `password`, `showpassword`) VALUES
(7, 'zenathan', '202cb962ac59075b964b07152d234b70', '123'),
(8, 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9', 'aldi'),
(9, 'ridho', '202cb962ac59075b964b07152d234b70', '123'),
(10, 'adrian', '202cb962ac59075b964b07152d234b70', '123'),
(11, 'fikri', '202cb962ac59075b964b07152d234b70', '123'),
(14, 'evan', '202cb962ac59075b964b07152d234b70', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userz`
--
ALTER TABLE `userz`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56788659;

--
-- AUTO_INCREMENT for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userz`
--
ALTER TABLE `userz`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
