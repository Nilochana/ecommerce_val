-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 12:08 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecom`
--

CREATE TABLE `ecom` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `tag` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecom`
--

INSERT INTO `ecom` (`id`, `name`, `image`, `price`, `discount`, `tag`, `description`) VALUES
(1, 'Apple MacBook Pro 13-inch Laptop', 'Images/Laptop.png', 200, 10, 'latest', 'Fastest dual-core processor available Thunderbolt technology FaceTime HD camera Long lasting battery...'),
(2, 'Canon EOS 200D Digital SLR Camera with EF-S 18', 'Images/Canon_Camera.png', 300, 20, 'latest', 'Fastest dual-core processor available Thunderbolt technology FaceTime HD camera Long lasting battery...'),
(3, 'HP Envy 4527 All-in-One Printe', 'Images/38_Printers.png', 250, 10, 'latest', 'Fastest dual-core processor available Thunderbolt technology FaceTime HD camera Long lasting battery...'),
(4, 'DESTEK V4 VR Headset', 'Images/1_VR.png', 200, 10, 'featured', 'Put on the Gear VR and go from front-row experience'),
(5, 'Samsung', 'Images/434_Refrigerator.png', 300, 10, 'featured', 'Put on the Gear VR and go from front-row experience'),
(6, 'cvdj', 'Images/3_Iron.png', 200, 10, 'featured', 'mfbnm'),
(7, 'vcfx', 'Images/83_Spekers.png', 200, 90, 'featured', 'bvcx'),
(8, 'bvcx', 'Images/53_Drone.png', 400, 10, 'bvcx', 'bvcfdxz'),
(9, 'vcxdz', 'Images/6-video-camera-png-image.png', 200, 10, 'bvcx', 'vcfdxsz'),
(10, 'fcxdz', 'Images/6-video-camera-png-image.png', 20, 1, 'specials', 'vcfdxsz'),
(11, 'fds', 'Images/6-video-camera-png-image.png', 300, 3, 'specials', 'vcxz'),
(12, 'gfds', 'Images/6-video-camera-png-image.png', 300, 3, 'specials', 'gvfcdx'),
(13, 'fcdx', 'Images/6-video-camera-png-image.png', 300, 4, 'specials', 'gvfcdxsz'),
(14, 'gfds', 'Images/6-video-camera-png-image.png', 20, 1, 'specials', 'vcxdz'),
(15, 'fds', 'Images/6-video-camera-png-image.png', 20, 1, 'specials', 'vcxdsz'),
(16, 'fdxsz', 'Images/6-video-camera-png-image.png', 300, 2, 'specials', 'gvfcdxsz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecom`
--
ALTER TABLE `ecom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecom`
--
ALTER TABLE `ecom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
