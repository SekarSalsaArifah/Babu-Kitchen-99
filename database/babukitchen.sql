-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 08:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babukitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id_detail_beli` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_beli`
--

INSERT INTO `detail_beli` (`id_detail_beli`, `jml_beli`, `sub_total`, `id_beli`, `id_menu`) VALUES
(11, 1, 10, 11, 41),
(12, 2, 2, 11, 22),
(13, 2, 20, 12, 22),
(14, 1, 12, 12, 23);

-- --------------------------------------------------------

--
-- Table structure for table `dibeli`
--

CREATE TABLE `dibeli` (
  `id_beli` int(11) NOT NULL,
  `tgl_beli` datetime NOT NULL,
  `total_beli` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dibeli`
--

INSERT INTO `dibeli` (`id_beli`, `tgl_beli`, `total_beli`, `id_pembeli`) VALUES
(1, '2023-01-09 11:55:42', 444, 1),
(10, '2024-07-13 22:57:46', 12, 10),
(11, '2024-07-13 22:58:58', 12, 11),
(12, '2024-07-18 12:25:03', 32, 12);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_menu` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `deskripsi`, `qty`, `gambar`) VALUES
(22, 'Nasi Goreng Biasa', '10.000', '-', 1, 'Nasi Goreng Biasa-gambar.png'),
(23, 'Nasi Goreng Belacan', '12.000', '-', 1, 'Nasi Goreng Belacan-gambar.png'),
(24, 'Nasi Goreng Magelangan', '12.000', '-', 1, 'Nasi Goreng Magelangan-gambar.png'),
(25, 'Nasi Goreng China', '15.000', '-', 1, 'Nasi Goreng China-gambar.png'),
(26, 'Nasi Goreng Pattaya', '15.000', '-', 1, 'Nasi Goreng Pattaya-gambar.png'),
(27, 'Nasi Goreng Udang', '20.000', '-', 1, 'Nasi Goreng Udang-gambar.png'),
(28, 'Nasi Goreng Cumi', '20.000', '-', 1, 'Nasi Goreng Cumi-gambar.png'),
(29, 'Nasi Goreng Ayam Kunyit', '20.000', '-', 1, 'Nasi Goreng Ayam Kunyit-gambar.png'),
(30, 'Nasi Goreng Daging', '20.000', '-', 1, 'Nasi Goreng Daging-gambar.png'),
(31, 'Nasi Goreng USA', '25.000', '-', 1, 'Nasi Goreng USA-gambar.png'),
(32, 'Nasi Goreng Chiken Wings', '15.000', '-', 1, 'Nasi Goreng Chiken Wings-gambar.png'),
(33, 'Nasi Goreng Breast', '20.000', '-', 1, 'Nasi Goreng Breast-gambar.png'),
(34, 'Nasi Goreng Drum Stick', '20.000', '-', 1, 'Nasi Goreng Drum Stick-gambar.png'),
(35, 'Tomyam Ayam', '15.000', '-', 1, 'Tomyam Ayam-gambar.jpg'),
(36, 'Tomyam Udang', '17.000', '-', 1, 'Tomyam Udang-gambar.jpg'),
(37, 'Tomyun Cumi', '17.000', '-', 1, 'Tomyun Cumi-gambar.jpg'),
(38, 'Tomyam Daging', '20.000', '-', 1, 'Tomyam Daging-gambar.jpg'),
(39, 'Sup Ayam', '15.000', '-', 1, 'Sup Ayam-gambar.png'),
(40, 'Sup Daging', '20.000', '-', 1, 'Sup Daging-gambar.png'),
(41, 'Mie Goreng Bihun', '10.000', '-', 1, 'Mie Goreng Bihun-gambar.png'),
(42, 'Mie Goreng Kuning', '12.000', '-', 1, 'Mie Goreng Kuning-gambar.png'),
(43, 'Mie Goreng Lethek', '15.000', '-', 1, 'Mie Goreng Lethek-gambar.png'),
(44, 'Mie Goreng Kwetiau', '15.000', '-', 1, 'Mie Goreng Kwetiau-gambar.png'),
(45, 'Mie Goreng Mamak', '15.000', '-', 1, 'Mie Goreng Mamak-gambar.png'),
(46, 'Mie Godok Bihun', '10.000', '-', 1, 'Mie Godok Bihun-gambar.png'),
(47, 'Mie Godok Kuning', '10.000', '-', 1, 'Mie Godok Kuning-gambar.png'),
(48, 'Mie Godok Lethek', '10.000', '-', 1, 'Mie Godok Lethek-gambar.png'),
(49, 'Mie Godok Kwetiau', '12.000', '-', 1, 'Mie Godok Kwetiau-gambar.png'),
(50, 'Limau Kasturi', '3.000', '-', 1, 'Limau Kasturi-gambar.png'),
(51, 'Teh', '3.000', '-', 1, 'Teh-gambar.png'),
(52, 'T 0 Limau', '3.000', '-', 1, 'T 0 Limau-gambar.png'),
(53, 'Kopi 0', '3.000', '-', 1, 'Kopi 0-gambar.png'),
(54, 'Teh Halia', '4.000', '-', 1, 'Teh Halia-gambar.png'),
(55, 'Teh Susu', '5.000', '-', 1, 'Teh Susu-gambar.png'),
(56, 'Susu', '5.000', '-', 1, 'Susu-gambar.png'),
(57, 'Kopi Susu', '5.000', '-', 1, 'Kopi Susu-gambar.png'),
(58, 'Teh Tarik', '5.000', '-', 1, 'Teh Tarik-gambar.png'),
(59, 'Kopi Tarik', '5.000', '-', 1, 'Kopi Tarik-gambar.png'),
(60, 'Sirap Bandung', '6.000', '-', 1, 'Sirap Bandung-gambar.png'),
(61, 'Three Sour', '6.000', '-', 1, 'Three Sour-gambar.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `telepon`) VALUES
(1, 'sals', 'plosokuning', 9876543),
(2, 'Syafa', 'Wedomartani', 986537),
(3, 'Salsa', 'Plosokuning 5', 2147483647),
(4, 'Salsa', 'Plosokuning 5', 2147483647),
(5, 'sa', 'Plosokuning 5', 2147483647),
(6, 's', 'Plosokuning 5', 2147483647),
(7, 'cvbnbv', 'vgkhkj', 98765),
(8, 'a', 'a', 1236667),
(9, 'a', 'b', 518219),
(10, 'coba', 'cobaaa', 2147483647),
(11, 'coba', 'cobaaa', 2147483647),
(12, 'abc', 'Plosokuning 5', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `alamat`, `no_tlp`, `username`, `password`, `id_beli`) VALUES
(8, 'aiko', 'aikohendry.7@gmail.com', 'Yogyakarta', '23456789', 'aiko', 'aiko123', 0),
(9, 'isma', 'isma@gmail.com', 'Plosokuning 5', '23456789', 'isma', 'isma', 0),
(10, 'salsa', 'salsa@gmail.com', 'Plosokuning 5', '23456789', 'salsa', 'salsa', 0),
(11, 'abc', 'a@gmail.com', 'Plosokuning 5', '23456789', 'abc123', 'abc123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id_detail_beli`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `fk_tanaman_id` (`id_menu`);

--
-- Indexes for table `dibeli`
--
ALTER TABLE `dibeli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `id_beli_2` (`id_beli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id_detail_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dibeli`
--
ALTER TABLE `dibeli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD CONSTRAINT `detail_beli_ibfk_1` FOREIGN KEY (`id_beli`) REFERENCES `dibeli` (`id_beli`),
  ADD CONSTRAINT `fk_tanaman_id` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

--
-- Constraints for table `dibeli`
--
ALTER TABLE `dibeli`
  ADD CONSTRAINT `fk_pembeli_id` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
