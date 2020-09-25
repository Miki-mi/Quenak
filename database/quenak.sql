-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2020 pada 05.02
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quenak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti`
--

CREATE TABLE `bukti` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `coupon`
--

CREATE TABLE `coupon` (
  `couponid` int(11) NOT NULL,
  `couponname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coupon`
--

INSERT INTO `coupon` (`couponid`, `couponname`) VALUES
(1, 'W3LC0M3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paymentdetail`
--

CREATE TABLE `paymentdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addressop` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `productimages` varchar(255) NOT NULL,
  `productimages2` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productweight` varchar(255) NOT NULL,
  `productdescription` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`productimages`, `productimages2`, `productname`, `productprice`, `productweight`, `productdescription`, `id`) VALUES
('imagescookie/nastar.png', 'imagescookie/nastarfoto.jpg', 'Pineapple Cookie', 90000, '1 Toples berat 500gr', 'Kue kering dari adonan tepung terigu, mentega dan telur yang diisi dengan selai buah nanas.', 1),
('imagescookie/nastar_coklat.png', 'imagescookie/coklatnastarfoto.jpg', 'Chocolate Pineapple Cookies', 90000, '1 Toples berat 500gr', 'Sama seperti pineapple cookie biasa, hanya saja terdapat tambahan cokelat pada bahannya.', 2),
('imagescookie/sagu.png', 'imagescookie/sagufoto.jpg', 'Sago Cookie', 80000, 'Satu Toples dengan berat 560gr', 'Kue Sagu merupakan kue yang dibuat dengan srundeng terlebih dahulu. Srundeng ini dicampur dengan sagu, telur, gula merah, dan santan.', 3),
('imagescookie/mentega.png', 'imagescookie/mentegafoto.jpg', 'Butter Cookie', 80000, 'Satu toples dengan berat 460gr', 'Butter cookie adalah kue yang dibuat tanpa menggunakan ragi atau pengembang, dengan bahan-bahan mentega, tepung terigu dan gula', 4),
('imagescookie/kacang.png', 'imagescookie/kacangfoto.jpg', 'Peanut Cookie', 80000, 'Berat satu toples 580gr', '', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `email`, `password`) VALUES
(14, '1@gmail.com', '$2y$10$OiqNxQS7Qt6Fjv4L./zikeiDHqQDwoogqWsaMUOmxKKnUmjIXhm6m');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`couponid`);

--
-- Indeks untuk tabel `paymentdetail`
--
ALTER TABLE `paymentdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `coupon`
--
ALTER TABLE `coupon`
  MODIFY `couponid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paymentdetail`
--
ALTER TABLE `paymentdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
