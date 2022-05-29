-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 04:18 AM
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
-- Database: `pwl_tugas10_read`
--
CREATE DATABASE IF NOT EXISTS `pwl_tugas10_read` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `pwl_tugas10_read`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `content` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `source` varchar(3000) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(3000) COLLATE latin1_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `source`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bill Gates Ungkap Alasan Tidak Punya Uang Kripto', 'Jakarta - Bill Gates sudah cukup lama dikenal tidak mendukung mata uang kripto seperti Bitcoin dan tidak juga memilikinya. Kini, dia mengungkapkan apa alasannya. \"Aku tidak punya (uang kripto) apapun. Aku suka berinvestasi pada hal-hal yang punya output bernilai,\" kata dia dalam tanya jawab di forum reddit. Dengan kata lain, Bill Gates menganggap Bitcoin tidak punya nilai yang bagus. Ia menganggap Bitcoin bukan investasi yang bermanfaat. \"Value perusahaan berdasarkan pada bagaimana mereka membuat produk yang bagus. Value kripto hanyalah apa yang diputuskan seseorang bahwa orang lain akan membayarnya, jadi tidak menambah manfaat di masyarakat seperti investasi lain,\" papar sang pendiri Microsoft. Di masa silam, Bill Gates sudah sering mengkritik uang kripto. Kala itu tahun 2018. Bitcoin sudah lumayan populer, tapi kadang digunakan untuk transaksi narkoba. Selain itu menurut sang pendiri Microsoft, anonimitas mata uang digital bisa saja dimanfaatkan teroris dan pencucian uang.\r\n\r\n\"Fitur utama mata uang kripto adalah anonimitasnya. Aku pikir ini bukan hal baik. Pada saat ini, mata uang kripto digunakan untuk membeli fentanyl dan narkoba lainnya sehingga ini adalah teknologi langka yang menyebabkan kematian dalam cara yang cukup langsung,\" katanya kala itu seperti dikutip detikINET dari BBC. Di tahun yang sama, Bill Gates juga berkomentar negatif terhadap mata uang kripto terutama Bitcoin. Bahkan ia mau saja bertaruh bahwa Bitcoin tidak akan sukses. \"Sebagai sebuah aset, Bitcoin tidak memproduksi apa-apa, dan kamu tidak seharusnya mengharapkan bahwa nilai Bitcoin akan terus naik. Ini seperti sebuah teori yang benar-benar bodoh dalam investasi,\" ujarnya. Bill Gates juga tidak berminat punya bitcoin. \"Seseorang pernah memberiku sejumlah Bitcoin sebagai kado ulang tahun, tapi aku menjualnya beberapa tahun setelahnya,\" ucapnya menambahkan.', 'https://inet.detik.com/cyberlife/d-6093767/bill-gates-ungkap-alasan-tidak-punya-uang-kripto?_ga=2.67891282.231123110.1653462772-1253624658.1640045585', '4_1399461e-7332-4cde-a326-30c00a7f9478_169.jpg', '2022-05-24 13:00:00', NULL),
(2, 'Elon Musk Mau Bikin Restoran dan Bioskop Drive-in, Bayarnya Pake Dogecoin', 'Jakarta - Empat tahun lalu Elon Musk mencuit tentang \'Roller skates & rock restaurant\' yang juga berfungsi sebagai stasiun pengisian untuk kendaraan listrik. Sekarang bos Tesla Inc ini sedang ancang-ancang untuk mulai mewujudkannya. Mengutip dari Bloomberg, Rabu (25/5/2022), Tesla menyerahkan sejumlah dokumen ke pemerintah Kota Los Angeles pada tanggal 19 Mei untuk restoran Tesla yang direncanakan buka 24 jam di 7001 W. Santa Monica Blvd di Hollywood. Berdasarkan laporan Electrek, lahan seluas 9.300 kaki persegi sudah dipersiapkan, termasuk rencana membangun bioskop drive-in dan 28 stasiun pengisian kendaraan listrik di dalamnya. Rencananya restoran akan dibuat dua lantai dengan 200 kursi yang terletak di dalam dan di luar ruangan. Jajaran kursi di luar akan mengarah langsung ke dua layar film LED berukuran besar. Makanan pun akan diantar menuju mobil pelanggan oleh pelayan.\r\n\r\nHampir setahun lalu Tesla mengajukan rencana ini ke Kantor Paten dan Merek Dagang Amerika Serikat (AS) untuk menggunakan trademark logo T di restorannya. Santa Monica dipilih sebagai lokasi untuk restoran Tesla kali ini. Sebelumnya kios supercharger sudah buka pada Februari tanpa ada pilihan makanan untuk pengunjung. Terkait rencana ini, Tesla belum mengumumkan detail lengkap terkait tanggal pembukaan dan menu makanan yang akan disediakan. Restoran Hollywood Supercharger yang digagas Tesla masih butuh persetujuan pemerintah kota. Desain restoran akan dibuat futuristik meskipun awalnya Elon Musk mencuit jika konsep restoran sama seperti konsep drive-in jadul. Direncanakan pembayaran bisa menggunakan mata uang kripto Dogecoin.', 'https://finance.detik.com/berita-ekonomi-bisnis/d-6094372/elon-musk-mau-bikin-restoran-dan-bioskop-drive-in-bayarnya-pake-dogecoin?_ga=2.165411196.231123110.1653462772-1253624658.1640045585', '5_elon-musk-twitter_169.jpeg', '2022-05-25 03:55:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
