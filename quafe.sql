-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 02:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `name`, `email`, `password`, `position`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$5v828IzUo3PqLt/ihDA5Be2mkMFx/eYIpQppxre5.nZ9UKZMLjwbG', 'admin'),
(2, 'John Doe', 'John Dhoe', 'doe@gmail.com', '$2y$10$G8XsKYwSFcTWm6d4dp04wOyX5S5OUQPbsaaH.bcco8mttgVsEooiy', ''),
(3, 'James Smith', 'James', 'smith@gmail.com', '$2y$10$8U2lCPL6KfFo4zhvpzxCveswAspk3ScOzr2g29jVC0rEzUABFhsxu', ''),
(4, 'Shinobi', 'Naruto', 'uzumaki@gmail.com', '$2y$10$/61gQ09oKY6TABTPtIxte.mBetlK0t60tQTy2vPMrCSiWHTCdWbrm', ''),
(5, 'Iron Man', 'Tony Stark', 'stark@gmail.com', '$2y$10$a/Et/K7mFvWMzTK9dyI.1ePsd2DwQjC8ETp1KowaMy4lq5pj2qR2C', ''),
(6, 'yenni', 'yenni zalukhu', 'yenni@gmail.com', '$2y$10$uSLycwUk6.Im3MJBIgWT1uNnIr3iD3oE2TXaVGEOZKWUsINJMirES', ''),
(7, 'Sarah', 'Sarah Marpaung', 'sarah@gmail.com', '$2y$10$5VOcAtxb90/RWSk91Z7rl.dJn9UqeD5hZx4J2ZF4CP8dyTywEHKma', ''),
(8, 'Ken Hermanto', 'KENWARD KEENE', 'kenward123@gmail.com', '$2y$10$alAzNokeBUtGZodxPVHTkO4BfW.ysFU4FWZSAuLEmWNOdO0V3lnuG', '');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `atas_nama` varchar(200) NOT NULL,
  `daftar_pesanan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `username`, `atas_nama`, `daftar_pesanan`, `harga`, `tanggal`) VALUES
(1, 'Harry Potter', 'Potta', 'Cappucino(2), Sandwich Beef', 43000, '2023-12-22 12:45:22'),
(2, 'John Doe', 'doe', 'Cappucino(2)', 38000, '2023-12-22 12:45:29'),
(3, 'James Smith', 'Smith', 'Expresso(2)', 214000, '2023-12-22 12:45:40'),
(4, 'Harry Potter', 'Hermonie', 'sandwich beef', 50000, '2023-12-22 12:45:53'),
(5, 'yenni', 'Yenni', 'Americano(1) Buttermilk Waffle(1) Ice Cream Sundae(1) ', 64000, '2023-12-22 12:46:01'),
(6, 'yenni', 'THERESIA', 'Bubble milk tea(1) Smoothie(1) ', 41000, '2023-12-22 12:46:08'),
(7, 'yenni', 'CINDY', 'Bubble milk tea(1) Beef Sandwich(1) Espresso(1) ', 68000, '2023-12-22 12:46:14'),
(8, 'Sarah', 'Hermonie', 'Cappucino(1) Beef Sandwich(1) ', 43000, '2023-12-22 12:46:20'),
(9, 'Iron Man', 'Rifa', 'Americano(1) Espresso(1) ', 44000, '2023-12-22 12:46:28'),
(10, 'Sarah', 'Fauzan', 'Mocha Latte(1) Espresso(1) ', 40000, '2023-12-22 12:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `masukan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id`, `username`, `name`, `email`, `masukan`) VALUES
(1, 'Harry Potter', 'Harry', 'magic@gmail.com', 'Harganya Kemahalan'),
(2, 'John Doe', 'John', 'doe@gmail.com', 'Kopinya kemanisan'),
(3, 'James Smith', 'James', 'smith@gmail.com', 'Porsinya terlalu sedikit. Akan tetapi, makanannya enak dan minumannya segar dan manis. Akan tetapi tolong murahin harganya.'),
(4, 'Sarah', 'Sarah Marpaung', 'sarah@gmail.com', 'Pengemasannya kurang safety dan tolong diberikan free tisu dalam setiap pemesanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
