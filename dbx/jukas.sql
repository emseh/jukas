-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Mar 2019 pada 15.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jukas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_cp`
--

CREATE TABLE `cms_cp` (
  `id` INT(11) NOT NULL,
  `nama` VARCHAR(70) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `telpon` VARCHAR(15) DEFAULT NULL,
  `subjek` VARCHAR(100) DEFAULT NULL,
  `pesan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cms_cp`
--

INSERT INTO `cms_cp` (`id`, `nama`, `email`, `telpon`, `subjek`, `pesan`) VALUES
(1, 'saya', 'example@mail.com', '08123456789', 'subnya', 'ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan ini pesan '),
(2, 'test nama', 'mail@mail.com', '9489104018', 'subsject', 'tidak ada pesan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_upload`
--

CREATE TABLE `cms_upload` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `desk` varchar(255) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cms_upload`
--

INSERT INTO `cms_upload` (`id`, `judul`, `harga`, `desk`, `nama_file`) VALUES
(4, 'Bass Fender Jazz Bass Squier Custome Second/Bekas', 1300000, 'Bass second pemakaian sendiri buat latihan dan buat manggung kondisi 85% mulus sound lumayan buat manggung. enak dipakai bass manja.\r\nsenar minta di ganti. Free:\r\n-softcase\r\n-tuner\r\n-jack', '../assets/uploads/Bass_Fender_jazz_bass_Squier_custome_Second_bekas.jpg'),
(5, 'Gibson Less Paul', 4500000, 'mulus', '../assets/uploads/gitar-elektrik-stinge-alat-musik-gitar-bass-8775809.jpg'),
(6, 'Gitar listrik original Caraya Black', 500000, 'minus : spull karatan', '../assets/uploads/Gitar_listrik_original_Caraya_Black.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_user`
--

CREATE TABLE `cms_user` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `sandi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `alamat` text,
  `file_image` varchar(50) DEFAULT NULL,
  `stat` enum('0','1','2') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cms_user`
--

INSERT INTO `cms_user` (`id_user`, `full_name`, `username`, `sandi`, `email`, `tel`, `alamat`, `file_image`, `stat`) VALUES
(1, 'ini nama mu', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'example@mail.com', '0812345678910', 'disini aja', '../assets/uploads/LinuxWindows-730x350.jpg', '0'),
(2, NULL, 'penjual1', '7fede5a7930d9ffafdf87bc536d39312', 'usernamenya@mail.com', NULL, NULL, NULL, '1'),
(3, 'Pembeli', 'pembeli1', '0e68c82f5923d0edae2cc5523e2a21ad', 'pembeli1@gmail.com', '081555555277', 'jalan laswi 123 kota banjar bandung', NULL, '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cms_cp`
--
ALTER TABLE `cms_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cms_upload`
--
ALTER TABLE `cms_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cms_cp`
--
ALTER TABLE `cms_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cms_upload`
--
ALTER TABLE `cms_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
