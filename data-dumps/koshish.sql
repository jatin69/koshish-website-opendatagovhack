-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 01:45 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koshish`
--
CREATE DATABASE IF NOT EXISTS `koshish` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `koshish`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `value_class` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_class`, `value_class`) VALUES
(1, 'class-1-3'),
(2, 'class-4-7'),
(3, 'class-8-10');

-- --------------------------------------------------------

--
-- Table structure for table `statewise_literacy_rate`
--

CREATE TABLE `statewise_literacy_rate` (
  `id` int(11) NOT NULL,
  `state` varchar(45) DEFAULT NULL,
  `average` decimal(65,10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statewise_literacy_rate`
--

INSERT INTO `statewise_literacy_rate` (`id`, `state`, `average`) VALUES
(1, 'Andaman and Nicobar Islands', '60.8042857100'),
(2, 'Andhra Pradesh', '42.1616666700'),
(3, 'Arunachal Pradesh', '34.2166666700'),
(4, 'Assam', '45.6266666700'),
(5, 'Bihar', '33.8885714300'),
(6, 'Chandigarh', '78.1960000000'),
(7, 'Chhattisgarh', '37.4471428600'),
(8, 'Dadra and Nagar Haveli', '45.1140000000'),
(9, 'Daman and Diu', '78.8266666700'),
(10, 'Delhi', '73.6883333300'),
(11, 'Goa', '60.3971428600'),
(12, 'Gujarat', '49.0842857100'),
(13, 'Haryana', '52.4400000000'),
(14, 'Himachal Pradesh', '74.3800000000'),
(15, 'Jammu and Kashmir', '37.6040000000'),
(16, 'Jharkhand', '36.3314285700'),
(17, 'Karnataka', '51.8200000000'),
(18, 'Kerala', '75.0757142900'),
(19, 'Lakshadweep', '60.4000000000'),
(20, 'Madhya Pradesh', '39.7400000000'),
(21, 'Maharashtra', '55.7214285700'),
(22, 'Manipur', '49.1514285700'),
(23, 'Meghalaya', '47.4200000000'),
(24, 'Mizoram', '64.4557142900'),
(25, 'Nagaland', '46.3385714300'),
(26, 'Orissa', '40.3328571400'),
(27, 'Pondicherry', '67.3250000000'),
(28, 'Punjab', '56.2900000000'),
(29, 'Rajasthan', '34.9085714300'),
(30, 'Sikkim', '51.7880000000'),
(31, 'Tamil Nadu', '58.7316666700'),
(32, 'Tripura', '53.6916666700'),
(33, 'Uttar Pradesh', '36.3157142900'),
(34, 'Uttarakhand', '46.3528571400'),
(35, 'West Bengal', '49.8885714300');

-- --------------------------------------------------------

--
-- Table structure for table `t_class`
--

CREATE TABLE `t_class` (
  `id_t_class` int(11) NOT NULL,
  `fk_id_teacher` int(11) NOT NULL,
  `fk_id_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id_teachers` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(45) NOT NULL,
  `district` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `pincode` int(11) NOT NULL,
  `qualificarion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id_teachers`, `name`, `gender`, `dob`, `email`, `contact`, `address`, `city`, `district`, `state`, `pincode`, `qualificarion`) VALUES
(1, 'Jatin', 'male', '02-10-1998', 'jatin@gmail.com', '8950636065', 'sector-2', 'bahadurgarh', 'jhajjar', 'haryana', 124507, ''),
(2, 'Jatin Rohilla', 'male', '1996-10-21', 'jatinrohilla69@gmail.com', '8950636065', 'h.no-688 , first floor , sector-2', 'Bahadurgarh', 'jhajjar', 'Haryana', 124507, 'jghjkl'),
(3, 'Jatin Rohilla', 'male', '1996-10-21', 'jatinrohilla69@gmail.com', '8950636065', 'h.no-688 , first floor , sector-2', 'Bahadurgarh', 'jhajjar', 'Haryana', 124507, 'gjhkhbvg vjhkbj'),
(4, 'Jatin Rohilla', 'male', '1996-10-21', 'jatinrohilla69@gmail.com', '8950636065', 'h.no-688 , first floor , sector-2', 'Bahadurgarh', 'bvbmnj,km.', 'Haryana', 124507, 'gj hvbjnkml/,'),
(5, 'Jatin Rohilla', 'male', '1996-10-21', 'jatinrohilla69@gmail.com', '8950636065', 'h.no-688 , first floor , sector-2', 'Bahadurgarh', 'fghvjbkn', 'thbjnl', 124507, 'fgvjhbknlml');

-- --------------------------------------------------------

--
-- Table structure for table `yearwise_dropout_rate`
--

CREATE TABLE `yearwise_dropout_rate` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `class_1to5_boys` decimal(12,2) DEFAULT NULL,
  `class_1to5_girls` decimal(12,2) DEFAULT NULL,
  `class_1to8_boys` decimal(12,2) DEFAULT NULL,
  `class_1to8_girls` decimal(12,2) DEFAULT NULL,
  `class_1to10_boys` decimal(12,2) DEFAULT NULL,
  `class_1to10_girls` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearwise_dropout_rate`
--

INSERT INTO `yearwise_dropout_rate` (`id`, `year`, `class_1to5_boys`, `class_1to5_girls`, `class_1to8_boys`, `class_1to8_girls`, `class_1to10_boys`, `class_1to10_girls`) VALUES
(1, 1995, '41.40', '43.00', '56.60', '61.70', '66.70', '73.70'),
(2, 1996, '39.70', '40.90', '54.30', '59.50', '67.30', '73.70'),
(3, 1997, '37.50', '41.50', '53.80', '59.30', '66.60', '73.00'),
(4, 1998, '40.90', '42.30', '54.20', '59.20', '64.50', '69.80'),
(5, 1999, '39.80', '41.00', '53.30', '57.70', '64.90', '69.90'),
(6, 2000, '39.70', '41.90', '50.30', '57.70', '66.40', '71.50'),
(7, 2001, '38.40', '39.90', '52.90', '56.90', '64.20', '68.60'),
(8, 2002, '35.90', '33.70', '52.30', '53.50', '60.70', '65.00'),
(9, 2003, '33.70', '28.60', '51.90', '52.90', '61.00', '64.90'),
(10, 2004, '31.80', '25.40', '50.50', '51.30', '60.40', '63.90'),
(11, 2005, '28.70', '21.80', '48.70', '49.00', '60.10', '63.60'),
(12, 2006, '24.60', '26.80', '46.40', '45.20', '58.60', '61.50'),
(13, 2007, '25.70', '24.40', '43.70', '41.30', '56.60', '57.30'),
(14, 2008, '29.60', '25.80', '41.10', '36.90', '54.00', '54.40'),
(15, 2009, '31.80', '28.50', '41.10', '44.20', '53.30', '51.80'),
(16, 2010, '29.00', '25.40', '40.60', '41.20', '50.20', '47.70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `statewise_literacy_rate`
--
ALTER TABLE `statewise_literacy_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_class`
--
ALTER TABLE `t_class`
  ADD PRIMARY KEY (`id_t_class`),
  ADD KEY `fk_id_teacher_idx` (`fk_id_teacher`),
  ADD KEY `fk_id_class_idx` (`fk_id_class`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teachers`);

--
-- Indexes for table `yearwise_dropout_rate`
--
ALTER TABLE `yearwise_dropout_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_index` (`year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_class`
--
ALTER TABLE `t_class`
  MODIFY `id_t_class` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teachers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_class`
--
ALTER TABLE `t_class`
  ADD CONSTRAINT `fk_id_class` FOREIGN KEY (`fk_id_class`) REFERENCES `class` (`id_class`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_teacher` FOREIGN KEY (`fk_id_teacher`) REFERENCES `teachers` (`id_teachers`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
