-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 06:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(13) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `angkatan` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `angkatan`) VALUES
('2010031803003', 'Agus Wijaya', 'Teknologi Informasi', 2020),
('2110031802001', 'Budi Santoso', 'Teknik Informatika', 2021),
('2210031801002', 'Citra Lestari', 'Sistem Informasi', 2022),
('2410031805004', 'Dewi Anggraini', 'Informatika Medis', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `tanggal_bayar` datetime NOT NULL,
  `jumlah_bayar` decimal(15,2) NOT NULL,
  `status_verifikasi` enum('Pending','Diverifikasi','Ditolak') NOT NULL DEFAULT 'Pending',
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nim`, `tanggal_bayar`, `jumlah_bayar`, `status_verifikasi`, `keterangan`) VALUES
(1, '2110031802001', '2024-08-15 09:30:00', 700000.00, 'Diverifikasi', 'Pembayaran Uang Kerja Praktek'),
(2, '2210031801002', '2024-08-16 11:05:00', 2250000.00, 'Diverifikasi', 'Pembayaran Uang Semester Ganjil 2024/2025 Tahap 1'),
(3, '2210031801002', '2024-06-20 14:00:00', 750000.00, 'Diverifikasi', 'Pembayaran Uang Semester Ganjil 2024/2025 Tahap 2'),
(4, '2010031803003', '2025-01-10 10:15:00', 300000.00, 'Ditolak', 'Pembayaran Uang Ujian Akhir Semester 2024/2025'),
(5, '2410031805004', '2025-06-21 16:45:00', 6000000.00, 'Pending', 'Pembayaran Sidang Komprehensif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
