-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 11:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_alejandro_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_alejandro_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_alejandro_petadoption`;

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animal_id` int(5) NOT NULL,
  `animal_size` enum('small','large') NOT NULL,
  `animal_name` varchar(64) NOT NULL,
  `animal_image` varchar(64) NOT NULL,
  `animal_desc` varchar(254) NOT NULL,
  `animal_hobbies` varchar(254) NOT NULL,
  `animal_age` int(5) NOT NULL,
  `animal_location` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animal_id`, `animal_size`, `animal_name`, `animal_image`, `animal_desc`, `animal_hobbies`, `animal_age`, `animal_location`) VALUES
(1, 'small', 'Viruta', 'viruta.jpg', 'Viruta es una gata que duerme todo el día.', 'Sleeping, eating', 13, 'Rio Bueno, Chile'),
(2, 'small', 'Dummyname', 'dummy.jpg', 'dummy description', 'dummyhobbie1, dummyhobbie2', 5, 'dummylocation'),
(3, 'large', 'Big meow', 'bigmeow.jpg', 'He is the main suspect of dissapearance of the former admin', 'eating, sleeping, playing', 25, 'Sabanastrasse 999, 1050 Vienna'),
(4, 'small', 'Mini Meow', 'minimeow.jpg', 'He just came to existance, still doesn\'t know how to hunt', 'Sleeping, playing, running', 1, 'Dummylocation, 123, 1020 Vienna'),
(5, 'large', 'elephant', 'elephant.jpg', 'lorem ipsum dolor sit amet', 'Hobbie 1, hobbie2, hobbie 3', 45, 'Sabanastrasse 5, 1030 Vienna'),
(6, 'large', 'bear', 'bear.jpg', 'lorem ipsum dolor sit amet', 'Hobbie 1, hobbie 2, hobbie 3, hobbie 4', 3, 'foreststrasse 14, 1060 Wien'),
(7, 'large', 'Human v0.8', 'simio.jpg', 'lorem ipsum dolor sit amet', 'Hobbie1, hobbie2, hobbie3', 17, 'Sabanastrasse 5, 1030 Vienna'),
(8, 'small', 'Ratatouille', 'mouse.jpg', 'lorem ipsum dolor sit amet', 'hobbie1, hobbie2, hobbie3', 4, 'everywherestrasse 999, 9999 Wien');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(64) NOT NULL,
  `user_type` enum('admin','superadmin','user','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `user_type`) VALUES
(3, 'Super Admin', 'e34f92a20532a873cb3184398070b4b82a8fa29cf48572c203dc5f0fa6158231', 'admin@admin.com', 'superadmin'),
(4, 'Admin', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 'normaladmin@admin.com', 'admin'),
(5, 'Alejandro', 'e606e38b0d8c19b24cf0ee3808183162ea7cd63ff7912dbb22b5e803286b4446', 'alejandro@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `animal_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
