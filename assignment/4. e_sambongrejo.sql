-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 07:04 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_sambongrejo`
--
CREATE DATABASE IF NOT EXISTS `e_sambongrejo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_sambongrejo`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$UlHqP9XdY3URg9LPLIUL6.MfARk6J352lhulkgAejx5QmIgYE6NWi', '2022-01-19 10:32:32', '2022-01-19 19:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category` int NOT NULL,
  `image` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `source` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category`, `image`, `content`, `source`, `created_at`, `updated_at`) VALUES
(1, 'Prediksi NFT Tahun 2022', 1, 'ilustrasi-nft_169.jpg', 'Prediksi NFT Tahun 2022 Menurut Saya', 'https://nft.com', '2022-01-20 03:12:54', '2022-01-21 09:31:51'),
(2, 'Olimpiade Nasional', 2, '1282684160.jpg', 'Olimpiade Matematika Nasional', 'https://olim.com', '2022-01-20 03:22:55', '2022-01-21 09:33:20'),
(3, 'Lomba Mancing', 3, 'mancing.jpg', 'Perlombaan mancing', 'https://jateng.com', '2022-01-20 04:13:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(5000) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `item` varchar(5000) NOT NULL,
  `category` int NOT NULL,
  `quantity` int NOT NULL,
  `unit` int NOT NULL,
  `item_descript` longtext NOT NULL,
  `descript` longtext,
  `shipping_cost` int NOT NULL,
  `total` int NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `item`, `category`, `quantity`, `unit`, `item_descript`, `descript`, `shipping_cost`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Renji', '08123456789', 'Jl. Sukses', 'Lunpia', 1, 2, 1, 'Lunpia isi 12pcs/pack', 'Tolong dipacking dengan aman', 10000, 50000, 1, '2022-01-20 05:42:27', NULL),
(2, 'Renji', '08123456789', 'Jl. Sukses', 'Lunpia', 1, 2, 1, 'Lunpia isi 12pcs/pack', 'Tolong dipacking dengan aman', 10000, 50000, 2, '2022-01-20 05:42:27', NULL),
(3, 'Renji', '08123456789', 'Jl. Sukses', 'Lunpia', 1, 2, 1, 'Lunpia isi 12pcs/pack', 'Tolong dipacking dengan aman', 10000, 50000, 3, '2022-01-20 05:42:27', NULL),
(4, 'Renji', '08123456789', 'Jl. Sukses', 'Lunpia', 1, 2, 1, 'Lunpia isi 12pcs/pack', 'Tolong dipacking dengan aman', 10000, 50000, 2, '2022-01-20 05:42:27', '2022-01-21 08:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(5000) NOT NULL,
  `category` int NOT NULL,
  `quantity` int NOT NULL,
  `unit` int NOT NULL,
  `image` varchar(5000) NOT NULL,
  `descript` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `quantity`, `unit`, `image`, `descript`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Lunpia', 1, 100, 1, '9289dacfeb83aaa10ba3ee7452e2b3dd.jpg', 'Lunpia isi 12pcs/pack', 20000, '2022-01-19 22:08:31', '2022-01-20 02:41:32'),
(2, 'Wingko', 1, 20, 1, 'Resep-Wingko-Babat.jpg', 'Wingko isi 12pcs/pack', 22000, '2022-01-20 02:48:14', '2022-01-20 09:13:05'),
(3, 'Moci', 1, 10, 1, '025964600_1616443705-Kue_2.jpg', 'Moci isi 12pcs/pack', 20000, '2022-01-19 22:08:31', '2022-01-21 09:35:03'),
(4, 'Yoghurt', 2, 20, 2, 'a4a4deda-0947-4c8a-8e33-116461cbb3b1.jpg', 'Yoghurt isi 300ml', 22000, '2022-01-20 02:48:14', '2022-01-21 09:35:39'),
(5, 'Susu Sapi', 2, 10, 2, '088090200_1511410761-Susu-Soya-dan-Susu-Sapi-Samakah-Kualitasnya.jpg', 'Susu Sapi isi 500ml', 20000, '2022-01-19 22:08:31', '2022-01-21 09:37:51'),
(6, 'Wedang Ronde', 2, 10, 2, 'ronde.jpg', 'Wedang Ronde isi 300ml', 22000, '2022-01-20 02:48:14', '2022-01-21 09:38:02'),
(7, 'Cangkir', 3, 100, 3, 'souvenir-pernikahan.jpg', 'Cangkir terbuat dari besi', 20000, '2022-01-19 22:08:31', '2022-01-21 09:45:30'),
(8, 'Kipas', 3, 20, 3, '1e206ab8f6c1946989a3ab9b6ea2ab75.jpg', 'Lunpia Ayam isi 12pcs/pack', 22000, '2022-01-20 02:48:14', '2022-01-21 09:46:25'),
(9, 'Mangkok Bola', 3, 20, 3, '075deec4b7458e1dca287f68091f587e.jpg', 'Mangkok kaca berbentuk bola', 22000, '2022-01-20 02:48:14', '2022-01-21 09:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$wKgXaAwVyOVPq67OqbpJ9eICSdSVpafXW7XZMh0waN4w2gAwyC0Fi', '2022-01-19 19:37:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `title` varchar(5000) NOT NULL,
  `vid_id` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `vid_id`, `created_at`, `updated_at`) VALUES
(1, 'UBAY DAN MACE SEBAGAI RUMAH | LAKON', '1qjWGU6QqCA', '2022-01-19 20:08:40', '2022-01-20 04:16:27'),
(2, 'TIPE-TIPE REMAJA SETELAH LULUS SEKOLAH\n', 'lbwg8_7Uf-w', '2022-01-19 20:08:40', '2022-01-21 09:50:53'),
(3, 'JADI REMAJA SEHAT SE-KABUPATEN | KELUARIN AJA\n', 'lMl5qvKPjVM', '2022-01-19 20:08:40', '2022-01-21 09:51:22'),
(4, 'KESEHATAN MENTAL SELAMA PANDEMI?? | NGOBROL TIPIS-TIPIS', 'cqaS81bfuLY', '2022-04-09 16:16:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
