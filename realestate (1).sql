-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `BHK` varchar(255) NOT NULL,
  `f_type` varchar(255) NOT NULL,
  `sqft` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `amenities` varchar(2000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `username`, `phone`, `email`, `address`, `city`, `BHK`, `f_type`, `sqft`, `price`, `amenities`, `photo`) VALUES
(13, 'Chirag Jadav', '7715646134', 'chiragd454@gmail.com', 'Pimple Gurav', 'Pune', '3', 'Semi-Furnished', '1545', '1.10cr', '24 x 7 Security, Balcony, Clubhouse, Gymnasium, Jogging / Cycle Track, Kids Play Areas, Power Backup, Swimming Pool', 'buyimages/1.1.jpeg'),
(14, 'Dhruv Deshmuk', '9551813545', 'dhruvdeshmukh@gmail.com', 'Pimple Nilakh', 'Pune', '2', 'Fully-Furnished', '900', '78 Lac', '24 x 7 Security,Built in Wardrobes,Gymnasium,Home Automation,Kids Play Areas,Swimming Pool,View of Landmark,Visitors Parking,Walk-in Closet', 'buyimages/2.2.jpeg'),
(15, 'Chaintanya Mane', '8451246821', 'chaintanyamane@gmail.com', 'Moshi', 'Pune', '1', 'Un-Furnished', '450', '28 Lac', '24 x 7 Security, Balcony, Clubhouse, Gymnasium, High Speed Elevators, Power Backup, Swimming Pool, View of Landmark, View of Water', 'buyimages/3.1.jpeg'),
(16, 'Rohan Pasalkar', '9858963225', 'rohanpasalkar@gmail.com', 'Rahatani', 'Pune', '1', 'Un-Furnished', '400', '38 Lac', 'ATMs, Food Court, Private Gym, Restaurant, View of Landmark,', 'buyimages/5.1.jpeg'),
(17, 'Rohan Pasalkar', '5697513', 'rohanpasalkar@gmail.com', 'Chinchwad', 'Pune', '3', 'Semi-Furnished', '1200', '75Lak', '24X4 Security', 'buyimages/5.2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `comment`) VALUES
(5, 'Ashish Wagharalkar', 'Good Service'),
(6, 'Rohan Pasalkar', 'Nice Interference'),
(7, 'Atharva kate', 'BETTER SERVICE'),
(8, 'Rohan Devadkar', 'Over budget');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(5, 'Ashish Wagharalkar', 'ashishwagharalkar@gmail.com', '7776813342', '123', '123'),
(6, 'Rohan Pasalkar', 'rohanpasalkar@gmail.com', '8965147358', 'asd', 'asd'),
(7, 'Atharva kate', 'atharvakate@gmail.com', '1236549877', '123', '123'),
(8, 'Mohmmad', 'mohmmad@gmail.c0m', '365842138', 'asdfg', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `BHK` varchar(255) NOT NULL,
  `f_type` varchar(255) NOT NULL,
  `sqft` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `username`, `phone`, `email`, `address`, `city`, `BHK`, `f_type`, `sqft`, `price`, `deposit`, `photo`) VALUES
(1, 'Suraj Patil', '9545128462', 'surajpatil445@gmail.com', 'Wakad', 'Pune', '1', 'Un-Furnished', '510', '11000', '25000', 'rentimages/2.1.jpg'),
(2, 'Atharva Kate', '8541652345', 'kateatharva@gmail.com', 'Hinjewadi', 'Pune', '2', 'Un-Furnished', '658', '15000', '35000', 'rentimages/3.1.jpg'),
(4, 'Ashish Wagharalkar', '7776813342', 'ashishwagharalkar@gmail.com', 'Pimpri', 'Pune', '2', 'Semi-Furnished', '1158', '20000', '60000', 'rentimages/6.1.jpg'),
(5, 'Rohan Devadkar', '4674854321321', 'sjhfhjafshihvs@gmail.com', 'Rahatani', 'Pune', '1', 'Null', '100', '5000', '10000', 'rentimages/6.1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
