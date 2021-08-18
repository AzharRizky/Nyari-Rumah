-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2021 at 07:44 AM
-- Server version: 10.3.30-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minevers_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `description` text NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`description`, `admin`) VALUES
('<p>Kami merupakan agen properti independen yang menawarkan properti seperti rumah, gudang, apartment, ruko, dan tanah kosong.</p>', 'Ivana Gabriela Manurung');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Azhar Rizki Zulma', 'joe', 'joe@mineversal.com', '$2y$10$V.NjEBplrnW4WFCqNreBs.5dvgLx2.RAkXXAI6PA7ZH4YN6ltaZhW'),
(2, 'Ivana Gabriela Manurung', 'ivana', 'justmevan19@gmail.com', '$2y$10$CpwxpTI9u/8/qNa1Y8yo6OGWGlVXSsTIHs6xKuNsRuhR/lRe4gib2'),
(3, 'Huala Manurung', 'huala', 'hualamanurung568@gmail.com', '$2y$10$RzrdAj./clyd8B8ZJuKkJeskAcP/fCsJNrCj.Kyf2oZHx0dildzOm');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`name`, `email`, `subject`, `message`, `phone`) VALUES
('Test Form', 'Test@mail.com', 'Test Form', 'Test 1234', '+6285777818191');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `url` text NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdateDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `img9` varchar(255) NOT NULL,
  `img10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `luas_tanah`, `luas_bangunan`, `description`, `price`, `url`, `PostingDate`, `UpdateDate`, `Is_Active`, `admin`, `location`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`) VALUES
(2, 'DIJUAL RUMAH DAERAH HARAPAN INDAH', 135, 180, '<p>-PLN 3500 kWh</p>\r\n<p>-Kamar Tidur 5+1 (3 di Lantai Bawah)</p>\r\n<p>-Kamar Mandi 2</p>\r\n<p>-Jet Pump + Torn</p>\r\n<p>-Jalan Depan 7m</p>\r\n<p>-Tidak pernah banjir</p>\r\n<p>-Rumah menghadap ke Barat</p>\r\n<p>-Jarak 300m ke Masjid Al-Furqon</p>', 1400000000, 'DIJUAL-RUMAH-DAERAH-HARAPAN-INDAH', '2021-03-24 07:53:31', NULL, 1, 'Ivana Gabriela Manurung', 'Bulevar Hijau Blok G, Harapan Indah, Bekasi', 'IMG-20210316-WA0014.jpg', 'IMG-20210316-WA0013.jpg', 'IMG-20210316-WA0012.jpg', 'IMG-20210316-WA0010.jpg', 'IMG-20210316-WA0009.jpg', 'IMG-20210316-WA0008.jpg', 'IMG-20210316-WA0007.jpg', 'IMG-20210316-WA0006.jpg', 'IMG-20210316-WA0005.jpg', 'IMG-20210316-WA0004.jpg'),
(3, 'DIJUAL RUMAH DAERAH JAKARTA BARAT', 385, 274, '<p>-Kamar Tidur: 5</p>\r\n<p>-Kamar Mandi: 3</p>\r\n<p>-Kamar Pembantu: 2</p>\r\n<p>-Kamar Mandi Pembantu: 2</p>\r\n<p>-Toren Air Stainless 2000 liter</p>\r\n<p>-Garasi: 4 mobil</p>\r\n<p>-Depan rumah papasan 2 mobil</p>\r\n<p>-Rumah menghadap Barat</p>\r\n<p>&nbsp;</p>\r\n<p>Properti Bank Syariah Bukopin</p>', 3650000000, 'DIJUAL-RUMAH-DAERAH-JAKARTA-BARAT', '2021-03-25 10:51:24', NULL, 1, 'Ivana Gabriela Manurung', 'Jakarta Barat', 'IMG-20210325-WA0005.jpg', 'IMG-20210325-WA0006.jpg', 'IMG-20210325-WA0007.jpg', 'IMG-20210325-WA0008.jpg', 'IMG-20210325-WA0009.jpg', 'IMG-20210325-WA0010.jpg', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
