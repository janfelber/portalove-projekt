-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 04:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florist-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `page_name` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `url_page` longtext COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `page_name`, `url_page`) VALUES
(1, 'Contact Us', 'contact.php'),
(2, 'About Us', 'about-us.php'),
(3, 'Admin Page', 'admin/home.php');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_slovak_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image_link` longtext COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `price`, `image_link`) VALUES
(1, 'Tulipan', 20, 'https://www.floristik24.sk/media/images/popup/Kunstblumen_Tulpe_Pink_-Fruehlingsblume_5er-Bund_07724.jpg'),
(2, 'Ruza', 10, 'https://www.floristik24.sk/media/images/popup/Rose_Orange_73cm_02434-002.jpg'),
(3, 'Orchidea', 17, 'https://www.floristik24.sk/media/images/popup/Phalaenopsis_33cm_purple_im_Keramiktopf_60407-09_2.jpg'),
(4, 'Lalia', 14, 'https://www.floristik24.sk/media/images/popup/Lilie_am_Draht_mittel_25St_170895.jpg'),
(5, 'Kytica Hortenzie', 20, 'https://www.floristik24.sk/media/images/popup/Kunstblumenstrauss_Hortensien_Strauss_mit_Rosen_Rosa_32cm_08231-01.jpg'),
(6, 'Vlci Mak', 28, 'https://www.floristik24.sk/media/images/popup/Mohn_im_Topf_weiss_44cm_11930-3.jpg'),
(7, 'Kytica z ruzi', 25, 'https://www.floristik24.sk/media/images/popup/Strauss_Drylook_apricot_30cm_09416_1.jpg'),
(8, 'Sukulent hadi', 8, 'https://www.floristik24.sk/media/images/popup/Sukkulente_Topf_16cm_57149.jpg'),
(10, 'Echeveria ', 4, 'https://www.floristik24.sk/media/images/popup/Sukkulenten_12cm_sort__57340-33_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
