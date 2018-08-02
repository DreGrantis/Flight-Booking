-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 05:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(4) NOT NULL,
  `FlightID` int(6) NOT NULL,
  `Customer` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Origin` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` varchar(10) NOT NULL,
  `Passengers` int(1) NOT NULL,
  `Cost` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BookingID`, `FlightID`, `Customer`, `FirstName`, `LastName`, `Origin`, `Destination`, `Date`, `Time`, `Passengers`, `Cost`) VALUES
(8, 3001, 'Guest', 'Vybz', 'Kartel', 'Kingston', 'New York', '2018-05-30', '11:00 AM', 1, 360),
(9, 3002, 'jen@mail.com', 'Jenny', 'Banks', 'Kingston', 'New York', '2018-05-30', '1:00 PM', 1, 372),
(10, 3003, 'Betty@mail.com', 'Betty', 'White', 'Kingston', 'New York', '2018-05-30', '2:30 PM', 1, 388),
(11, 3003, 'Jovan@mail.com', 'Jovan', 'Brown', 'Kingston', 'New York', '2018-05-30', '2:30 PM', 1, 388),
(12, 3003, 'Guest', 'Andre', 'Smith', 'Kingston', 'New York', '2018-05-30', '2:30 PM', 1, 485);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `Flight_Number` varchar(50) NOT NULL,
  `Airline` varchar(50) NOT NULL,
  `FlyFrom` varchar(50) NOT NULL,
  `FlyTo` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `FlightTime` varchar(10) NOT NULL,
  `ArrivalTime` varchar(8) NOT NULL,
  `Price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`Flight_Number`, `Airline`, `FlyFrom`, `FlyTo`, `Date`, `FlightTime`, `ArrivalTime`, `Price`) VALUES
('1001', 'American Airline', 'Kingston', 'Miami', '2018-04-28', '9:00 AM', '11:30 AM', 450),
('1002', 'Delta', 'Kingston', 'Atlanta', '2018-05-30', '11:00 AM', '2:30 PM', 500),
('1003', 'JetBlue', 'Miami', 'Kingston', '2018-04-28', '1:30 PM', '3:30 PM', 1450),
('1004', 'Caribbean Airlines', 'Kinston', 'Miami', '2018-05-31', '9:00 AM', '11:30 AM', 370),
('2001', 'Delta', 'Kingston', 'Miami', '2018-05-17', '11:00 AM', '1:30 PM', 370),
('3001', 'Delta', 'Kingston', 'New York', '2018-05-30', '11:00 AM', '3:30 PM', 455),
('3002', 'American Airline', 'Kingston', 'New York', '2018-05-30', '1:00 PM', '5:30 PM', 465),
('3003', 'Caribbean Airlines', 'Kingston', 'New York', '2018-05-30', '2:30 PM', '6:00 PM', 485);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Phone_Number` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Password`, `FirstName`, `LastName`, `Phone_Number`) VALUES
('Admin@Mail.com', 'Administrator', 'Admin', '', 0),
('Betty@mail.com', 'bettywhite', 'Betty', 'White', 3765248),
('drewbral@email.com', 'dreagrant', 'Andrea', 'Grant', 3905044),
('jen@mail.com', 'jenbanks', 'Jenny', 'Banks', 98765445),
('Jovan@mail.com', '12345678', 'Jovan', 'Brown', 2841675);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`Flight_Number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
