-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 29, 2024 at 09:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rentals_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `CarMaintenance`
--

CREATE TABLE `CarMaintenance` (
  `MaintenanceID` int(11) NOT NULL,
  `CarID_FK` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CarMaintenance`
--

INSERT INTO `CarMaintenance` (`MaintenanceID`, `CarID_FK`, `Date`, `Description`, `Cost`) VALUES
(1, 6, '2024-01-24', 'Major service', '1500.00'),
(2, 1, '2024-02-27', 'Minor Service', '450.00'),
(3, 1, '2024-02-05', 'Gasket Repair, hydraulics leak fixed.', '650.00'),
(4, 2, '2023-11-23', 'Inspection and minor service', '5500.00');

-- --------------------------------------------------------

--
-- Table structure for table `Cars`
--

CREATE TABLE `Cars` (
  `CarID` int(11) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `LicensePlate` varchar(20) DEFAULT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Cars`
--

INSERT INTO `Cars` (`CarID`, `Make`, `Model`, `Image`, `Year`, `LicensePlate`, `Status`) VALUES
(1, 'BMW', '5 Series', 'images/bmw.png', 2010, 'CRY123', 'Available'),
(2, 'Ferrari', 'F8 Berlinetta', 'images/ferrari_sports.png', 2023, 'CRY124', 'Available'),
(3, 'Ferrari', 'Spyder', 'images/ferrari.png', 2023, 'CRY125', 'Available'),
(4, 'Kia', 'Sorrento', 'images/kia.png', 2022, 'CRY126', 'Available'),
(5, 'Mercedes', 'S-Class', 'images/mercedes.png', 2020, 'CRY127', 'Available'),
(6, 'Volkswagen', 'VW Transporter', 'images/VW_van.png', 1970, 'CRY128', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `LicenseNumber` varchar(50) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `EmployeeID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`EmployeeID`, `Name`, `Role`, `Phone`, `Email`) VALUES
(1, 'Joseph Borg', 'Manager', '21432234', 'jb@rentals.com'),
(2, 'Philip Vella', 'Manager', '21222333', 'pv@rentals.com'),
(3, 'Raquel Borg', 'Clerk', '21333444', 'rb@rentals.com'),
(4, 'Jason Cutajar', 'Clerk', '21666777', 'jc@rentals.com'),
(5, 'Roberta Vella', 'Manager', '21888888', 'rv@rentals.com'),
(6, 'Donald Cauchi', 'Clerk', '21999888', 'dc@rentals.com'),
(7, 'Ivan Cardona', 'Clerk', '21555444', 'ic@rentals.com');

-- --------------------------------------------------------

--
-- Table structure for table `RentalLocations`
--

CREATE TABLE `RentalLocations` (
  `LocationID` int(11) NOT NULL,
  `Address` text DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `ManagerID_FK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `RentalLocations`
--

INSERT INTO `RentalLocations` (`LocationID`, `Address`, `Phone`, `ManagerID_FK`) VALUES
(1, 'Triq il-pitkali, Attard.\r\n', '21222333', 2),
(2, 'Triq il-Kbira, Valletta.', '21432234', 1),
(3, 'Triq Principali, Naxxar', '21888999', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Rentals`
--

CREATE TABLE `Rentals` (
  `RentalID` int(11) NOT NULL,
  `CustomerID_FK` int(11) NOT NULL,
  `CarID_FK` int(11) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `ActualReturnDate` date DEFAULT NULL,
  `DailyRate` decimal(10,2) DEFAULT NULL,
  `TotalCost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CarMaintenance`
--
ALTER TABLE `CarMaintenance`
  ADD PRIMARY KEY (`MaintenanceID`),
  ADD KEY `CarID_FK` (`CarID_FK`);

--
-- Indexes for table `Cars`
--
ALTER TABLE `Cars`
  ADD PRIMARY KEY (`CarID`),
  ADD UNIQUE KEY `LicensePlate` (`LicensePlate`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `RentalLocations`
--
ALTER TABLE `RentalLocations`
  ADD PRIMARY KEY (`LocationID`),
  ADD KEY `ManagerID_FK` (`ManagerID_FK`);

--
-- Indexes for table `Rentals`
--
ALTER TABLE `Rentals`
  ADD PRIMARY KEY (`RentalID`),
  ADD KEY `CustomerID_FK` (`CustomerID_FK`),
  ADD KEY `CarID_FK` (`CarID_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CarMaintenance`
--
ALTER TABLE `CarMaintenance`
  MODIFY `MaintenanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Cars`
--
ALTER TABLE `Cars`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Employees`
--
ALTER TABLE `Employees`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `RentalLocations`
--
ALTER TABLE `RentalLocations`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Rentals`
--
ALTER TABLE `Rentals`
  MODIFY `RentalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CarMaintenance`
--
ALTER TABLE `CarMaintenance`
  ADD CONSTRAINT `carmaintenance_ibfk_1` FOREIGN KEY (`CarID_FK`) REFERENCES `Cars` (`CarID`);

--
-- Constraints for table `RentalLocations`
--
ALTER TABLE `RentalLocations`
  ADD CONSTRAINT `rentallocations_ibfk_1` FOREIGN KEY (`ManagerID_FK`) REFERENCES `Employees` (`EmployeeID`);

--
-- Constraints for table `Rentals`
--
ALTER TABLE `Rentals`
  ADD CONSTRAINT `rentals_ibfk_1` FOREIGN KEY (`CustomerID_FK`) REFERENCES `Customers` (`CustomerID`),
  ADD CONSTRAINT `rentals_ibfk_2` FOREIGN KEY (`CarID_FK`) REFERENCES `Cars` (`CarID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
