-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2019 pada 11.40
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_media`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `username`, `password`, `tanggal_lahir`, `usia`, `alamat`, `kecamatan`, `telephone`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'taylor', 'taylor95', 'taylor@95', '1995-01-23', '24', 'kost', 'kedoya', '08123654789', 'taylor@gmail.com', 'foto_data/IzJQdaq9yBNwU9WWKNpB8DqdNet474p63ZDFx1nN.jpeg', '2019-12-17 00:03:29', '2019-12-17 03:25:27'),
(2, 'feny', 'feny95', 'feny@95', '1995-01-23', '24', 'Kost Idola Residence', 'kedoya', '081236985214', 'feny@gmail.com', NULL, '2019-12-17 02:37:19', '2019-12-17 03:25:48'),
(3, 'abdul', 'abdul12', 'abdul12!', '1932-02-12', '87', NULL, 'kebon jeruk', '08813834066', 'abdul@gmail.com', NULL, '2019-12-17 02:38:53', '2019-12-17 03:25:03'),
(4, 'kojisingga', 'koji30', 'koji@66', '1996-12-02', '23', 'jl.anggrek', 'Palmerah', '08813834066', 'kojaysingga@gmail.com', 'foto_data/5ZISRnWMhD2mWRVVtvYvHkTEZgHZ5T16OmHFoXEG.jpeg', '2019-12-17 03:30:29', '2019-12-17 03:30:29'),
(5, 'kartini', 'kartini879', 'kartini@879', '1879-04-21', '140', 'Jepara', 'Jepara', '08123654789', 'kartini@gmail.com', 'foto_data/hv16YqAUUvxmbZBvWf6kmaP27ijPJWDqW3f3y54g.jpeg', '2019-12-17 03:32:06', '2019-12-17 03:32:06'),
(6, 'Rahmat', 'rahmat99', 'rahmat@99', '1999-11-11', '20', 'Siantar', 'Siantar', '0245813212151', 'rahmat@gmail.com', NULL, '2019-12-17 03:33:05', '2019-12-17 03:33:05'),
(7, 'abu', 'abu11', 'abu@11', '1999-02-04', '20', NULL, 'jatinegara', '08813834066', 'abu@gmail.com', 'foto_data/4RAGVfaM9kCUzDPUQ40XHRV23Em2NfsIMhl6bcGJ.jpeg', '2019-12-17 03:35:10', '2019-12-17 03:35:10'),
(8, 'umay', 'umay94', 'umay@94', '1994-11-04', '25', 'Cipayung', 'jatinegara', '081245698246', 'Umay@gmail.com', NULL, '2019-12-17 03:37:03', '2019-12-17 03:37:03'),
(9, 'Santi', 'santuy97', 'santuy@97', '1997-11-23', '22', 'cengkareng', 'kalideres', '0852147965', 'santi@gmail.com', NULL, '2019-12-17 03:38:13', '2019-12-17 03:38:13'),
(10, 'panjaitan', 'panjaitan54', 'panjaitan@54', '1954-06-28', '65', 'Tomuan', 'Panribuan', '081279782589', 'panjaitan@gmail.com', 'foto_data/EdET9AqETBKbLXr4Pq4hIk1u8IfZuyLKpKDgs1t5.jpeg', '2019-12-17 03:39:30', '2019-12-17 03:39:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
