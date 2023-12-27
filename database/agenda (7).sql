-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 04:41 PM
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
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_rapat` int(11) NOT NULL,
  `judul_rapat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pimpinan_rapat` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `hasil_rapat` text NOT NULL,
  `undangan_data` mediumblob DEFAULT NULL,
  `dokumentasi_data` mediumblob DEFAULT NULL,
  `presensi_data` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_rapat`, `judul_rapat`, `tanggal`, `waktu`, `pimpinan_rapat`, `tempat`, `hasil_rapat`, `undangan_data`, `dokumentasi_data`, `presensi_data`) VALUES
(2, 'Rapat Meja Segitiga', '2022-09-01', '15:27:16', 'Pak moko', 'Vokasi Dieng', '', NULL, NULL, NULL),
(3, 'Rapat Pleno', '2023-12-28', '10:00:00', 'Maulid Rifky Munajat ', 'Dieng', '', NULL, NULL, NULL),
(4, 'Rapat Rapatan', '2023-12-30', '19:48:00', 'kkk', 'Rumah', '', NULL, NULL, NULL),
(6, 'Rapat Pleno', '2023-12-14', '21:33:00', 'rifky', 'Vokasi UB', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` enum('TI','SI','MP','Keubank') NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `level` enum('Admin','Sekertaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `prodi`, `jabatan`, `level`) VALUES
(8, 'admin', 'admin', 'admin', 'TI', 'ketua TU', 'Admin'),
(10, 'Mawl1d', 'rifky1234', 'Maulid Rifky Munajat ', 'Keubank', 'Mahasiswa', 'Admin'),
(11, 'Munajat', 'admin', 'MNJT', 'SI', 'Dosen', 'Admin'),
(12, 'halo1', 'halo1', 'halo', 'Keubank', 'Mahasiswa', 'Admin'),
(13, 'halo2', 'halo2', 'halohalo', 'SI', 'Dosen', 'Sekertaris'),
(14, 'Diluam', 'admin', 'rifky', 'Keubank', 'Dosen', 'Sekertaris'),
(16, 'Maulid Munajat', 'maulid', 'MawL1d', 'SI', 'REKTOR', 'Admin'),
(17, 'Maulid Munajat', 'maulid', 'rifky123', 'SI', 'Mahasiswa', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_rapat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
