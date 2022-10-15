-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2022 pada 10.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devoyage_bogor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `development_web`
--

CREATE TABLE `development_web` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `development_web`
--

INSERT INTO `development_web` (`id`, `email`, `password`) VALUES
(1, 'marcom@gmail.com', '$2y$10$XOblgmjjFMN.pvUwQc9OjuXiaToeb9QSSjmy7Jdsp3aO0dfgJ3Oaq'),
(2, 'marcom@gmail.com', '$2y$10$6k6cU4FU3gBgirJOeJCkTOEv7uObmm1YPsW1O9M0tJy/3sS5voD9S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(11) NOT NULL,
  `title_gallery` varchar(100) NOT NULL,
  `caption_gallery` varchar(255) NOT NULL,
  `img_gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallerys`
--

INSERT INTO `gallerys` (`id`, `title_gallery`, `caption_gallery`, `img_gallery`) VALUES
(1, 'Brother Hood', 'Outbond Indoor', 'IMG_1899-min.JPG'),
(2, 'Cannoe Boat', 'Like a Pirates', 'IMG_9046-min.JPG'),
(3, 'Pissa Toscana', 'Best Place for Photo', 'IMG_4729-min.JPG'),
(4, 'Hayestown House', 'Best Place for Photo', 'IMG_6164-min.JPG'),
(5, 'Main Wall', 'Best Place for Photo', 'IMG_7895-min.JPG'),
(8, 'With Family', 'The Best Moment', 'IMG_7898-min.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `img_games` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption_games` varchar(100) NOT NULL,
  `text_games` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `img_games`, `title`, `caption_games`, `text_games`, `price`, `periode`, `status`) VALUES
(1, 'IMG_0692-min.JPG', 'Robin Hood', 'Berpanahan dengan Costume layaknya Robin Hood.', 'Ajak teman, keluarga, pasangan, rekan untuk berfoto di Spot Robin Hood. dan Dapatkan Bonusnya.', '150K', 'Weekday & Weekand', 1),
(2, 'IMG_5562-min.JPG', 'Gondola Boat', 'Berswafoto di Atas Gondolla Boat, seperti Bajak Laut yang tersasar.', 'Berfoto bareng keluarga, teman dan pasangan. dan dapatkan Bonusnya.', 'Free', 'Weekand & Weekday', 1),
(3, 'IMG_1883-min.JPG', 'Brother Hood', 'Mari Berpetualang menegangkan di sini.', 'Ajak Teman atau pasangan kamu untuk merasakan ketegangan bersama.', '50K / Orang', 'Weekday & Weekand', 1),
(5, 'IMG_7898-min.JPG', 'Family Day', 'Berlibur bareng keluarga nomor 1', 'Dapatkan Bonus Makan di Devoyage dan Cashback Sebesar 35%', '350K / Keluarga', 'Oktober 2022', 1),
(6, 'IMG_7895-min.JPG', 'Gathering Day', 'Berlibur panjang enaknya di Devoyage Bogor', 'Berpesta Riya dengan keluarga besar atau teman kantor', '1 Juta / Group', 'Oktober 2022', 1),
(7, 'IMG_1921-min.JPG', 'Brother Hood Creepy', 'Keseruan Outbond di Indoor. anti mainstream', 'Ketegangan Selalu menghantui kamu.', '50K / Orang', 'Weekday & Weekand', 1),
(8, 'IMG_4729-min.JPG', 'Afternoon Site', 'Photo Gratis + Free Cetak Photo 10', 'Nikamti Pemandangan Pissa Toscana', '200K / Orang', 'Oktober 2022', 1),
(9, 'IMG_5564-min.JPG', 'Gondolla Boat', 'Nuansa Berpusing di Devoyage', 'Nikmati Pemandangan Purple Light', 'Free', 'Weekday & Weekand', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parallax`
--

CREATE TABLE `parallax` (
  `id` int(1) NOT NULL,
  `img_parallax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parallax`
--

INSERT INTO `parallax` (`id`, `img_parallax`) VALUES
(1, 'IMG_4729-min.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `img_promo` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id`, `title`, `caption`, `periode`, `price`, `img_promo`, `status`, `date`) VALUES
(1, 'Gathering Hemat', 'Harus Melakukan Reservasi, Min 50 Pax.', 'Weekand & Weekday', '135K / Pax.', '6.jpg', 1, 1664860813),
(2, 'Nutella Coffee', 'Pesan sekarang, Free Ticket Devoyage.', 'Weekand & Weekday', '55K', '8.jpg', 1, 1664861304),
(3, 'Year Book Students', 'Price for Students + Book Album', 'School Graduation Day', '210 / Pax', '5.jpg', 1, 1664861459),
(5, 'Paket Terusan Games', 'Include Rumah Air & Devoyage', 'Weekand & Weekday', '200K', '7.jpg', 1, 1664861582);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `title_ss` varchar(100) NOT NULL,
  `animation` varchar(50) NOT NULL,
  `text_ss` varchar(50) NOT NULL,
  `addons` varchar(255) NOT NULL,
  `img_slides` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slideshow`
--

INSERT INTO `slideshow` (`id`, `title_ss`, `animation`, `text_ss`, `addons`, `img_slides`) VALUES
(1, 'Devoyageurs', 'right-align', 'Lovely, Friendly, Cuty', 'Get Ticket', 'IMG_6164-min.JPG'),
(3, 'Devoyage Bogor', 'left-align', 'Holidays, Selfies, Foodies', 'Get Promo', 'IMG_0638-min.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `development_web`
--
ALTER TABLE `development_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parallax`
--
ALTER TABLE `parallax`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `development_web`
--
ALTER TABLE `development_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `parallax`
--
ALTER TABLE `parallax`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
