-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 05:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `productin`
--

CREATE TABLE `productin` (
  `productin_id` int(11) NOT NULL,
  `ProductCode` int(11) NOT NULL,
  `prin_date` date NOT NULL,
  `prin_Quantity` mediumtext NOT NULL,
  `prin_Unit_price` mediumtext NOT NULL,
  `prin_TotalPrice` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productin`
--

INSERT INTO `productin` (`productin_id`, `ProductCode`, `prin_date`, `prin_Quantity`, `prin_Unit_price`, `prin_TotalPrice`) VALUES
(6, 14, '2024-06-18', '30', '400', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `productout`
--

CREATE TABLE `productout` (
  `productOut_id` int(11) NOT NULL,
  `ProductCode` int(11) NOT NULL,
  `prOut_date` date NOT NULL,
  `prOut_Quantity` mediumtext NOT NULL,
  `prOut_price` mediumtext NOT NULL,
  `prOut_TotalPrice` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductCode` int(11) NOT NULL,
  `ProductName` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductCode`, `ProductName`) VALUES
(14, 'ibijumba');

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper`
--

CREATE TABLE `storekeeper` (
  `storekeeperId` int(11) NOT NULL,
  `userName` mediumtext NOT NULL,
  `Password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storekeeper`
--

INSERT INTO `storekeeper` (`storekeeperId`, `userName`, `Password`) VALUES
(1, 'fiston', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` mediumtext NOT NULL,
  `Password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `Password`) VALUES
(1, 'fiston', 'password'),
(2, 'hakiza', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productin`
--
ALTER TABLE `productin`
  ADD PRIMARY KEY (`productin_id`),
  ADD KEY `ProductCode` (`ProductCode`);

--
-- Indexes for table `productout`
--
ALTER TABLE `productout`
  ADD PRIMARY KEY (`productOut_id`),
  ADD KEY `ProductCode` (`ProductCode`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductCode`);

--
-- Indexes for table `storekeeper`
--
ALTER TABLE `storekeeper`
  ADD PRIMARY KEY (`storekeeperId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productin`
--
ALTER TABLE `productin`
  MODIFY `productin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productout`
--
ALTER TABLE `productout`
  MODIFY `productOut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `storekeeper`
--
ALTER TABLE `storekeeper`
  MODIFY `storekeeperId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productin`
--
ALTER TABLE `productin`
  ADD CONSTRAINT `productin_ibfk_1` FOREIGN KEY (`ProductCode`) REFERENCES `products` (`ProductCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productout`
--
ALTER TABLE `productout`
  ADD CONSTRAINT `productout_ibfk_1` FOREIGN KEY (`ProductCode`) REFERENCES `products` (`ProductCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
