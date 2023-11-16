-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 12.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `data_akun`
--

CREATE TABLE `data_akun` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_akun`
--

INSERT INTO `data_akun` (`id`, `username`, `password`) VALUES
(9, 'admin', '$2y$10$IauXz8vmyyubQnvzFs9l8uLDGQYWgD9rATEvqcwtIYLUfqz6JKreq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_baju`
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
-- Dumping data untuk tabel `data_baju`
--

INSERT INTO `data_baju` (`id`, `nama`, `harga`, `warna`, `ukuran`, `gambar`) VALUES
(32, 'Mock Neck Short Sleeve T-Shirts', 300000, 'Khaki', 'L', '2023-10-24.Mock Neck Short Sleeve T-Shirts.b2804f2915a4c7e284aa05be5caecdad.jpg'),
(33, 'Cotton Ukiyoe Print Round T-Shirt', 644000, 'Black', 'XL', '2023-10-24.Cotton Ukiyoe Print Round T-Shirt.cotton ukiyoe print round t-shirt.jpg'),
(34, '3-Ply Cashmere Cardigan Sweater', 2500000, 'Navy', 'M', '2023-10-24.3-Ply Cashmere Cardigan Sweater.3-ply cashmere cardigan sweater.jpeg'),
(35, '3-Ply Cashmere Turtleneck Sweater', 3400000, 'Grey', 'L', '2023-10-24.3-Ply Cashmere Turtleneck Sweater.3-ply cashmere turtleneck sweater.jpeg'),
(36, 'Brushed Wool Raglan Crewneck Sweater', 750000, 'Pink', 'XXL', '2023-10-24.Brushed Wool Raglan Crewneck Sweater.brushed wool raglan crewneck sweater.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kontak`
--

CREATE TABLE `data_kontak` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kontak`
--

INSERT INTO `data_kontak` (`id`, `nama`, `email`, `nomor_hp`, `pesan`) VALUES
(11, 'abdullah', 'abdullah@gmail.com', '08123653424', 'Mantap websitenya bisa di tingkatkan lagi'),
(12, 'udin', 'udin@gmail.com', '085342463564', 'Harus di kembangkan lagi websitenya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_baju`
--
ALTER TABLE `data_baju`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kontak`
--
ALTER TABLE `data_kontak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_akun`
--
ALTER TABLE `data_akun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_baju`
--
ALTER TABLE `data_baju`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `data_kontak`
--
ALTER TABLE `data_kontak`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
