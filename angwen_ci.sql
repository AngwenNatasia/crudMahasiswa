-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 06:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angwen_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `email`, `prodi`, `asal_sekolah`, `no_hp`, `alamat`) VALUES
(7, 'Fathur ', '12314', 'Laki-laki', 'fathur@pcr.ac.id', 4, 'MAN 1 Dumai', '1325', 'Umban Sari'),
(19, 'Arif Fathur Rahman', '2255301029', 'Laki-laki', 'arif@gmail.com', 4, 'SMAN 1', '08232321312', 'Jl mutiara');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `jurusan` enum('JTI','JTIN') NOT NULL,
  `akreditasi` varchar(15) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `tahun_berdiri` int(10) NOT NULL,
  `output_lulusan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`, `ruangan`, `jurusan`, `akreditasi`, `nama_kaprodi`, `tahun_berdiri`, `output_lulusan`, `gambar`) VALUES
(4, 'Teknik Informatika', '328', 'JTI', 'A', 'Kartina Diah Kesuma Wardhani S.T.,M.T.', 2008, 'Multimedia', 'default1.jpg'),
(5, 'Sistem Informasi', '310', 'JTI', 'A', 'Indah Lestari, S.T.,M.T.', 2008, 'Business', 'default.jpg'),
(6, 'Teknik Elektro Telekomunikasi', '123', 'JTIN', 'A', 'Andy', 2005, 'Engineer', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, 'Arif Fathur Rahman', 'arif@gmail.com', '$2y$10$fVL56W2fBBZ1TEqo2X452e3CW8VFG.ryEUjaJTod0C6mButgOptoe', 'default.jpg', 'User', 1696819255),
(2, 'admin', 'admin@gmail.com', '$2y$10$DI6Ig0P5z8hN2jfK6oglreoI4urRm9P6GhkxxiXbtBIkC/y7.eFh.', 'default.jpg', 'Admin', 1696819381),
(3, 'b', 'b@gmail.com', '$2y$10$aDyfpcKWvs.LaZh/DPX0X.L6yv/7Otym6uKJy1Q.rEGm24SzZ/KJq', 'default.jpg', 'User', 1696819519),
(4, 'Asia', 'asia@gmail.com', '$2y$10$lbOasyVCq3p86z94ajQmqu2mCZpNefGWGyyL3VYaUr29fRXboyUmO', 'default.jpg', 'User', 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `prodi` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
