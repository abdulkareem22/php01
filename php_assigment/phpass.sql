-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 06:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `iphones`
--

CREATE TABLE `iphones` (
  `StdId` int(11) NOT NULL,
  `StdFirstName` varchar(225) NOT NULL,
  `StdAddress` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Courses` varchar(225) NOT NULL,
  `StdPicture` varchar(225) NOT NULL,
  `StdEmail` varchar(225) NOT NULL,
  `StdPhoneNum` varchar(225) NOT NULL,
  `StdNickName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iphones`
--

INSERT INTO `iphones` (`StdId`, `StdFirstName`, `StdAddress`, `Gender`, `City`, `Courses`, `StdPicture`, `StdEmail`, `StdPhoneNum`, `StdNickName`) VALUES
(62, 'david micheal', 'Street:  3750 Cardinal Lane  City:  Westville  State/province/area:   Illinois  Phone number  217-267-9811  Zip code  61883  Country calling code  +1  Country  United States', 'Male', 'Karachi', 'Phyton,C++,Flutter', 'images/IMAGE4.jpeg', 'davidmicheal34e@gmail.com', '03182215521', 'john'),
(63, 'kim stone', 'Street:  315, Jail Road,  City:   Lahore  State/province/area:    Punjab  Phone number  9242-7585885 / 7574548  Country calling code  +92  Country  Pakistan', 'Male', 'Lahore', 'Phyton,C++,Flutter', 'images/img6.jpg', 'kito23@gmail.com', '03333988789', ''),
(64, 'john warn', 'Street:  Allama Iqbal Rd.PECHS,  City:   Islamabad  State/province/area:    Sindh  Phone number  9221-4555172 / 4550697  Country calling code  +92  Country  Pakistan', 'Male', 'Islamabad', 'C++,Flutter', 'images/images3.jpeg', 'john45@gmail.com', '03999999999', 'john'),
(65, 'javed khan', 'Street:  26 2nd Floor Husain Plaza Shoba Chowk  City:   Nwfp  State/province/area:   Peshawar  Phone number  9291-2591388  Country calling code  +92  Country  Pakistan', 'Male', 'Peshawar', 'Phyton,Flutter', 'images/img7.png', 'javadkhan232@gmail.com', '03007878654', 'khan'),
(66, 'latif kashif', 'Street:  Latif Cloth Market M.A.Jinnah Road,  City:   Karachi  State/province/area:    Sindh  Phone number  9221-2436035 / 2435826 / 2419930  Country calling code  +92  Country  Pakistan', 'Male', 'Karachi', 'C++', 'images/IMAGE5.png', 'latif45@gmail.com', '03182215521', 'amir'),
(67, 'amjad asif', 'Street:  Suraj Gunj Bazar  City: lahore  State/province/area:    Pakistan  Phone number  (92 81) 2821812  Country calling code  +92  Country  Pakistan', 'Male', 'Lahore', 'Phyton,C++,Flutter', 'images/img8.jpeg', 'amjad788@gmail.com', '03174729998', 'alam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iphones`
--
ALTER TABLE `iphones`
  ADD PRIMARY KEY (`StdId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iphones`
--
ALTER TABLE `iphones`
  MODIFY `StdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
