-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 11:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plant_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Py_ID` int(11) NOT NULL,
  `U_ID` int(11) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `P_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `P_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Taka` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`P_ID`, `Name`, `Taka`, `Image`, `Type`) VALUES
(12, 'Rose', '80', '', 'Flower'),
(13, 'Mango', '60', '', 'Fruit'),
(14, 'Snake Plant', '250', '', 'Indoor'),
(15, 'Apple', '200', '', 'Fruit'),
(16, 'Red Hibiscus', '150', '', 'Flower'),
(17, 'Jui', '80', '', 'Flower'),
(18, 'Aparajita', '120', '', 'Flower'),
(19, 'Gondhoraj', '80', '', 'Flower'),
(20, 'Jasmine Plant', '90', '', 'Flower'),
(21, 'Kamini', '70', '', 'Flower'),
(22, 'Madhobilota', '120', '', 'Flower'),
(23, 'Morning Glory', '70', '', 'Flower'),
(24, 'Amra', '100', '', 'Fruit'),
(25, 'Guava', '100', '', 'Fruit'),
(26, 'Avocado', '100', '', 'Fruit'),
(27, 'Banana', '100', '', 'Fruit'),
(28, 'Blackberry', '100', '', 'Fruit'),
(29, 'Chalta', '120', '', 'Fruit'),
(30, 'Jackfruit', '80', '', 'Fruit'),
(31, 'jambura', '70', '', 'Fruit'),
(32, 'Antherium', '850', '', 'Indoor'),
(33, 'Areca Palm', '700', '', 'Indoor'),
(34, 'Caladium', '160', '', 'Indoor'),
(35, 'Christmas Tree', '500', '', 'Indoor'),
(36, 'Hanging Basket', '600', '', 'Indoor'),
(37, 'Money Plant', '130', '', 'Indoor'),
(38, 'Kamini Bonsai', '450', '', 'Indoor'),
(39, 'Silver Queen', '300', '', 'Indoor'),
(40, 'Bean', '60', '', 'Seed'),
(41, 'Brinjal', '70', '', 'Seed'),
(42, 'Broccoli', '90', '', 'Seed'),
(43, 'Cauliflower', '55', '', 'Seed'),
(44, 'Groud', '50', '', 'Seed'),
(45, 'Green Chili', '50', '', 'Seed'),
(46, 'Pumpkin', '30', '', 'Seed'),
(47, 'Radish', '50', '', 'Seed'),
(48, 'Tomato', '40', '', 'Seed'),
(49, 'Bone Meal-1kg', '60', '', 'Fertilizer'),
(50, 'Dap Garden', '40', '', 'Fertilizer'),
(51, 'Urea-1kg', '50', '', 'Fertilizer'),
(52, 'MOP-300g', '60', '', 'Fertilizer'),
(53, 'Root Hormone Powder-100g', '70', '', 'Fertilizer'),
(54, 'TSP-500gm', '80', '', 'Fertilizer'),
(55, 'Di Ammonium Phospate-100g', '90', '', 'Fertilizer'),
(56, 'Vermicompost', '70', '', 'Fertilizer'),
(57, 'Zinc Sulphate-500g', '60', '', 'Fertilizer'),
(58, 'Bouquet-1', '850', '', 'Bouquet'),
(59, 'Bouquet-2', '700', '', 'Bouquet'),
(60, 'Bouquet-3', '800', '', 'Bouquet'),
(61, 'Bouquet-4', '600', '', 'Bouquet'),
(62, 'Bouquet-5', '550', '', 'Bouquet'),
(63, 'Bouquet-6', '600', '', 'Bouquet'),
(64, 'Bouquet-7', '700', '', 'Bouquet'),
(65, 'Bouquet-8', '800', '', 'Bouquet'),
(66, 'Bouquet-9', '900', '', 'Bouquet');

-- --------------------------------------------------------

--
-- Table structure for table `plantae`
--

CREATE TABLE `plantae` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plantae`
--

INSERT INTO `plantae` (`id`, `image`, `name`, `price`, `discount`) VALUES
(1, 'akhrot.jpg', 'akhrot', 100, 20),
(2, 'amra.jpg', 'amra', 100, 20),
(3, 'apple.jpg', 'apple', 120, 20),
(4, 'apricot.jpg', 'apricot', 150, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL DEFAULT '0',
  `Password` varchar(50) NOT NULL DEFAULT '0',
  `First_Name` varchar(50) NOT NULL DEFAULT '0',
  `Last_Name` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `Email`, `Password`, `First_Name`, `Last_Name`) VALUES
(1, 'tashfiahossain@yahoo.com', '1234', 'arittra', 'Das'),
(2, 'mumu@gmail.com', '1234', 'mumu', 'takla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Py_ID`),
  ADD KEY `FK__user_2` (`U_ID`),
  ADD KEY `FK__plant` (`P_ID`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `plantae`
--
ALTER TABLE `plantae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Py_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `plantae`
--
ALTER TABLE `plantae`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK__plant` FOREIGN KEY (`P_ID`) REFERENCES `plant` (`P_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__user_2` FOREIGN KEY (`U_ID`) REFERENCES `user` (`U_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
