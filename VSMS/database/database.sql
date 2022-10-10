-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 07:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'admin', 'admin@vsms', 'Karanbir Singh', 'kbsingh0008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pnumber` bigint(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `email`, `pnumber`, `address`, `dob`, `username`, `password`) VALUES
(1, 'Zipeng Wang', 'karanbir.singh6@email.kpu.ca', 1457888129, '1245 8 ave', '2001-03-01', 'emp1', 'emp1@vsms'),
(3, 'Raaman Sandhu', 'kbsingh2323@gmail.com', 458794280, '8931 Street 85', '1998-05-19', 'emp2', 'emp2@vsms'),
(5, 'Manveer Kaur', 'kbsingh2323@gmail.com', 7856231247, '82326 45ave', '1999-02-06', 'emp3', 'emp3@vsms'),
(8, 'Karanbir Singh', 'kbsingh2323@gmail.com', 4578963451, '4459 150st', '2001-05-21', 'emp4', 'emp4@vsms');

-- --------------------------------------------------------

--
-- Table structure for table `gardener`
--

CREATE TABLE `gardener` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pnumber` bigint(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gardener`
--

INSERT INTO `gardener` (`id`, `fullname`, `email`, `pnumber`, `address`, `dob`, `username`, `password`) VALUES
(1, 'Wit Danica', 'kbsingh2323@gmail.com', 7089456441, '123 147a St, Delta', '2002-03-30', 'gard1', 'gard1@vsms'),
(2, 'Mathew James', 'kbsingh2323@gmail.com', 6045718945, '12117 150a st', '2001-02-20', 'gard2', 'gard2@vsms'),
(5, 'Jon Denis', 'kbsingh2323@gmail.com', 9556471005, '7828 119st', '1996-09-01', 'gard3', 'gard3@vsms'),
(6, 'Clare Davin', 'kbsingh2323@gmail.com', 2368789015, '7452 126A st', '1998-01-05', 'gard4', 'gard4@vsms'),
(7, 'Roger Poppy', 'kbsingh2323@gmail.com', 6048688115, '8292 78ave', '1994-06-14', 'gard5', 'gard5@vsms'),
(8, 'Lois Joy', 'kbsingh2323@gmail.com', 7758128110, '92262 112st', '1995-07-01', 'gard6', 'gard6@vsms');

-- --------------------------------------------------------

--
-- Table structure for table `lessquantity`
--

CREATE TABLE `lessquantity` (
  `id` int(11) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `scat` varchar(250) NOT NULL,
  `squan` int(15) NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessquantity`
--

INSERT INTO `lessquantity` (`id`, `sname`, `scat`, `squan`, `edate`) VALUES
(1, 'empty', 'empty', 0, '0000-00-00'),
(83, 'Raddish', 'harvested', 317, '2022-12-21'),
(84, 'Cabbage', 'purchased', 400, '2022-11-16'),
(85, 'Cucumber', 'purchased', 248, '2024-02-21'),
(86, 'Beans', 'purchased', 165, '2021-04-22'),
(87, 'Gaarlic', 'purchased', 97, '2019-12-30'),
(88, 'Potatoes', 'harvested', 368, '2020-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `monthlylist`
--

CREATE TABLE `monthlylist` (
  `id` int(10) UNSIGNED NOT NULL,
  `month` varchar(15) NOT NULL,
  `seedname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthlylist`
--

INSERT INTO `monthlylist` (`id`, `month`, `seedname`) VALUES
(1, 'January', 'Cabbage'),
(2, 'February', 'Cauliflower'),
(3, 'March', 'Lettuce'),
(4, 'April', 'Peas'),
(5, 'May', 'Broccoli'),
(6, 'June', 'Corn'),
(7, 'July', 'Cucumber'),
(8, 'August', 'Tomatoes'),
(9, 'September', 'Spinach'),
(10, 'October', 'Pumpkin'),
(11, 'January', 'Mushroom'),
(12, 'December', 'Raddish');

-- --------------------------------------------------------

--
-- Table structure for table `nearexpiry`
--

CREATE TABLE `nearexpiry` (
  `id` int(11) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `scat` varchar(250) NOT NULL,
  `squan` int(15) NOT NULL,
  `expdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nearexpiry`
--

INSERT INTO `nearexpiry` (`id`, `sname`, `scat`, `squan`, `expdate`) VALUES
(1, 'empty', 'empty', 0, '0000-00-00'),
(39, 'Raddish', 'harvested', 317, '2022-12-21'),
(40, 'Cabbage', 'purchased', 400, '2022-11-16'),
(41, 'Lettuce', 'harvested', 1254, '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `plantedseed`
--

CREATE TABLE `plantedseed` (
  `id` int(11) NOT NULL,
  `gname` varchar(250) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `squan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plantedseed`
--

INSERT INTO `plantedseed` (`id`, `gname`, `sname`, `squan`) VALUES
(4, 'gard2', 'Broccoli', 10),
(5, 'gard4', 'Raddish', 18),
(6, 'gard5', 'Spinach', 30),
(8, 'gard3', 'Lettuce', 60),
(10, 'gard6', 'Tomatoes', 43),
(11, 'gard1', 'Peas', 80);

-- --------------------------------------------------------

--
-- Table structure for table `seed`
--

CREATE TABLE `seed` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `category` varchar(50) NOT NULL,
  `ptime` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `edate` date NOT NULL,
  `simage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seed`
--

INSERT INTO `seed` (`id`, `name`, `category`, `ptime`, `quantity`, `edate`, `simage`) VALUES
(17, 'Peas', 'purchased', 'Spring', 2360, '2024-12-11', 'peas.jpg'),
(18, 'Raddish', 'harvested', 'Fall', 317, '2022-12-21', 'radish.jpg'),
(20, 'Cabbage', 'purchased', 'Fall', 400, '2022-11-16', 'cabbage.jpg'),
(21, 'Cauliflower', 'purchased', 'Fall', 3014, '2022-02-02', 'cauliflower.jpg'),
(22, 'Lettuce', 'harvested', 'Spring', 1254, '2022-07-12', 'lettuce.jpg'),
(24, 'Broccoli', 'purchased', 'Spring', 2465, '2024-10-22', 'broccoli.jpg'),
(25, 'Corn', 'harvested', 'Summer', 954, '2020-11-12', 'corn.jpg'),
(26, 'Cucumber', 'purchased', 'Summer', 248, '2024-02-21', 'cucumber.jpg'),
(27, 'Tomatoes', 'harvested', 'Summer', 1980, '2023-09-26', 'tomatoes.png'),
(28, 'Spinach', 'harvested', 'Fall', 1381, '2024-04-15', 'spinach.jfif'),
(34, 'Pumpkin', 'purchased', 'Fall', 3650, '2024-08-25', 'pumpkin.webp');

-- --------------------------------------------------------

--
-- Table structure for table `sentseed`
--

CREATE TABLE `sentseed` (
  `id` int(11) NOT NULL,
  `gardname` varchar(250) NOT NULL,
  `seedname` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentseed`
--

INSERT INTO `sentseed` (`id`, `gardname`, `seedname`, `quantity`) VALUES
(5, 'gard1', 'raddish', 10),
(7, 'gard3', 'broccoli', 50),
(10, 'gard3', 'Cucumber', 10),
(11, 'gard2', 'Cabbage', 12),
(15, 'gard4', 'broccoli', 45),
(16, 'gard5', 'Tomatoes', 64),
(17, 'gard1', 'Spinach', 23),
(19, 'gard6', 'Spinach', 12);

-- --------------------------------------------------------

--
-- Table structure for table `wastedseed`
--

CREATE TABLE `wastedseed` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `quantity` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wastedseed`
--

INSERT INTO `wastedseed` (`id`, `name`, `category`, `quantity`, `date`) VALUES
(1, 'Carrot', 'purchased', 2198, '2021-05-20'),
(2, 'Potatoes', 'harvested', 368, '2020-05-27'),
(3, 'Onion', 'harvested', 1200, '2021-05-25'),
(4, 'Gaarlic', 'purchased', 97, '2019-12-30'),
(5, 'Eggplant', 'harvested', 789, '2020-02-15'),
(7, 'Beans', 'purchased', 4500, '2020-12-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gardener`
--
ALTER TABLE `gardener`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessquantity`
--
ALTER TABLE `lessquantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthlylist`
--
ALTER TABLE `monthlylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearexpiry`
--
ALTER TABLE `nearexpiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantedseed`
--
ALTER TABLE `plantedseed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sentseed`
--
ALTER TABLE `sentseed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wastedseed`
--
ALTER TABLE `wastedseed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gardener`
--
ALTER TABLE `gardener`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lessquantity`
--
ALTER TABLE `lessquantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `monthlylist`
--
ALTER TABLE `monthlylist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nearexpiry`
--
ALTER TABLE `nearexpiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `plantedseed`
--
ALTER TABLE `plantedseed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seed`
--
ALTER TABLE `seed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sentseed`
--
ALTER TABLE `sentseed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wastedseed`
--
ALTER TABLE `wastedseed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
