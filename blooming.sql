-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 02:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooming`
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
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `id_costumer` int(11) NOT NULL,
  `nama_costumer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id_costumer`, `nama_costumer`, `email`, `alamat`, `no_tlp`, `username`, `password`, `id_beli`) VALUES
(7, 'Salsa', 'salsa@gmail.com', 'Plosokuning', '12345678', 'salsa', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id_detail_beli` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_tanaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_beli`
--

INSERT INTO `detail_beli` (`id_detail_beli`, `jml_beli`, `sub_total`, `id_beli`, `id_tanaman`) VALUES
(1, 2, 444, 1, 3),
(2, 1, 10, 2, 3),
(3, 1, 14, 2, 7);

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
(2, '2023-01-15 14:03:02', 24, 2);

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
(2, 'Syafa', 'Wedomartani', 986537);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama_tanaman` varchar(100) NOT NULL,
  `harga_tanaman` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `harga_tanaman`, `deskripsi`, `qty`, `gambar`) VALUES
(3, 'Aglaonema', 10, 'Helps to improve and filter indoor air pollutants on your room', 5, 'Aglaonema-gambar.jpg'),
(7, 'Calathea', 15, 'Contribution to a better and healthier indoor climate', 10, 'Calathea-gambar.jfif'),
(8, 'Spider Plant', 10, 'Thick, fleshy roots allow spider plant to tolerate inconsistent watering.', 7, 'Spider Plant-gambar.jpg'),
(9, 'Peace Lily', 15, 'Elaborate and decorative look to make your room more gorgeous', 9, 'Peace Lily-gambar.jfif'),
(12, 'Purple Orchid', 14, 'Make your room looking so beautiful and fresh', 3, 'Purple Orchid-gambar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id_costumer`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `id_beli_2` (`id_beli`);

--
-- Indexes for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id_detail_beli`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `fk_tanaman_id` (`id_tanaman`);

--
-- Indexes for table `dibeli`
--
ALTER TABLE `dibeli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id_costumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id_detail_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dibeli`
--
ALTER TABLE `dibeli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD CONSTRAINT `detail_beli_ibfk_1` FOREIGN KEY (`id_beli`) REFERENCES `dibeli` (`id_beli`),
  ADD CONSTRAINT `fk_tanaman_id` FOREIGN KEY (`id_tanaman`) REFERENCES `tanaman` (`id_tanaman`);

--
-- Constraints for table `dibeli`
--
ALTER TABLE `dibeli`
  ADD CONSTRAINT `fk_pembeli_id` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
