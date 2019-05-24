-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2019 at 08:31 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8990160_tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uid` int(11) NOT NULL,
  `cucd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `uid`, `cucd`) VALUES
('mauu', 'maur@gmail.com', 1, 5000),
('tejas', 'teja4@gmail.com', 2, 6000),
('diz', 'hari1@gmail.com', 3, 4000),
('sarav', 'sarav44@gmail.com', 4, 6000),
('pratyay', 'pra67@gmail.com', 5, 1010),
('tapug', 'tapugada@hotmail.com', 6, 9300),
('sanaya', 'sanaya@hotmail.com', 7, 9000),
('masterbloster4', 'mb4@hotmail.com', 8, 1500),
('wadu', 'wadu123@yahoo.com', 9, 1250),
('spawner', 'spawner44@yahoo.com', 10, 9100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
