-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:55 PM
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
-- Database: `portalberita_rizky`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenisvaksin`
--

CREATE TABLE `jenisvaksin` (
  `id_jenisvaksin` int(11) NOT NULL,
  `nama_vaksin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenisvaksin`
--

INSERT INTO `jenisvaksin` (`id_jenisvaksin`, `nama_vaksin`) VALUES
(1, 'Sinovac'),
(2, 'Pfizer'),
(3, 'Moderna'),
(4, 'AstraZeneca');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(12, 'ayam'),
(13, 'apa aja');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_posts` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_posts`, `judul`, `gambar`, `isi`, `id_kategori`, `id_user`, `tanggal`) VALUES
(1, 'Harga kopi update', '099632200_1589527804-shutterstock_1455941861.jpg', '<div>update bana</div>', 12, 7, '0000-00-00'),
(8, 'si adit gacor bana', '4e2b584bedd89073ab61b54060db7551.jpg', '<div>fhdudsji</div>', 13, 1, '0000-00-00'),
(10, 'wkwkwk', 'fishbone diagaram kelompok 4 trpl 2b.png', '<div>hahaha</div>', 13, 1, '0000-00-00'),
(11, 'sor', '74c222186d9f1c716086e62bcad16999-removebg-preview.png', '<div>iya</div>', 13, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `label` varchar(200) NOT NULL,
  `body` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `label`, `body`, `gambar`) VALUES
(5, 'ini aja', 'itu aja', '1697788733644-nugget.jpg'),
(6, 'ini lagi', 'itu lagi', 'Iced-Matcha-Latte-Starbucks-Copycat-image-1-650x975.jpg'),
(7, 'slide ini', 'slide ini lagi', 'tumblr_e0c82b27163b91ecd8411fcc57f02ea5_4dbdfb2f_1280.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `level` enum('1','2') DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `gambar`, `level`) VALUES
(1, 'Muhammad Rizky', 'rizky.btr99@gmail.com', '12345', 'buy-1-get-1-free-banner-template-shop-now-vector.jpg', '2'),
(4, 'kirul anjay mabar', 'mabar@gmail.com', 'dhbhdd', '1697788733644-nugget.jpg', '1'),
(6, 'rrre ganteng', 'asep@gmail.com', 'ww332', 'Screenshot 2024-01-10 120454.png', '2'),
(7, 'siki bana', 'siki@gmail.com', '111111', 'salted-caramel-latte4.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_telpon` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `alamat` text NOT NULL,
  `id_vaksinke` int(11) NOT NULL,
  `id_jenisvaksin` int(11) NOT NULL,
  `tempat_vaksin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `no_ktp`, `nama_lengkap`, `no_telpon`, `jenis_kelamin`, `alamat`, `id_vaksinke`, `id_jenisvaksin`, `tempat_vaksin`) VALUES
(1, '12345', 'Susisusanti', '083456766', 'Wanita', 'padang', 2, 1, 'pos dua'),
(33322, '444444444444444444444444444444', 'suhu', '4567546757', 'Pria', 'sini', 2, 2, 'siko'),
(112233, '12345678', 'suhu', '99988', 'Pria', 'sinan', 2, 3, 'polsek sini aja');

-- --------------------------------------------------------

--
-- Table structure for table `vaksinke`
--

CREATE TABLE `vaksinke` (
  `id_vaksinke` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaksinke`
--

INSERT INTO `vaksinke` (`id_vaksinke`, `jumlah`) VALUES
(1, 'Pertama'),
(2, 'Kedua'),
(3, 'Ketiga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenisvaksin`
--
ALTER TABLE `jenisvaksin`
  ADD PRIMARY KEY (`id_jenisvaksin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- Indexes for table `vaksinke`
--
ALTER TABLE `vaksinke`
  ADD PRIMARY KEY (`id_vaksinke`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenisvaksin`
--
ALTER TABLE `jenisvaksin`
  MODIFY `id_jenisvaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaksinke`
--
ALTER TABLE `vaksinke`
  MODIFY `id_vaksinke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
