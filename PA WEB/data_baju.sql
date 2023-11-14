-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 05:35 PM
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
-- Database: `endugi_clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_baju`
--

CREATE TABLE `data_baju` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_baju`
--

INSERT INTO `data_baju` (`id`, `nama`, `harga`, `warna`, `ukuran`, `gambar`) VALUES
(32, 'Mock Neck Short Sleeve T-Shirts', 300000, 'Khaki', 'L', '2023-10-24.Mock Neck Short Sleeve T-Shirts.b2804f2915a4c7e284aa05be5caecdad.jpg'),
(33, 'Cotton Ukiyoe Print Round T-Shirt', 644000, 'Black', 'XL', '2023-10-24.Cotton Ukiyoe Print Round T-Shirt.cotton ukiyoe print round t-shirt.jpg'),
(34, '3-Ply Cashmere Cardigan Sweater', 2500000, 'Navy', 'M', '2023-10-24.3-Ply Cashmere Cardigan Sweater.3-ply cashmere cardigan sweater.jpeg'),
(35, '3-Ply Cashmere Turtleneck Sweater', 3400000, 'Grey', 'L', '2023-10-24.3-Ply Cashmere Turtleneck Sweater.3-ply cashmere turtleneck sweater.jpeg'),
(36, 'Brushed Wool Raglan Crewneck Sweater', 750000, 'Pink', 'XXL', '2023-10-24.Brushed Wool Raglan Crewneck Sweater.brushed wool raglan crewneck sweater.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_baju`
--
ALTER TABLE `data_baju`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_baju`
--
ALTER TABLE `data_baju`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
