-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 08:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumId` int(11) NOT NULL,
  `Albumname` varchar(100) DEFAULT NULL,
  `Writer` varchar(100) DEFAULT NULL,
  `AlbumImage` varchar(255) DEFAULT NULL,
  `CategoryId_Fk` int(11) DEFAULT NULL,
  `CreatedAt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumId`, `Albumname`, `Writer`, `AlbumImage`, `CategoryId_Fk`, `CreatedAt`) VALUES
(1, 'Ek Villain Returns', 'Mohit Suri', 'EkVillan_250x370.jpg', 3, '2022-10-24 09:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `ID_Signup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `name`, `ID_Signup`) VALUES
(3, 'Hollywood', 1),
(4, 'Bollywood', 1),
(5, 'Tollywood', 1),
(6, 'Kollywood', 1),
(7, 'Lollywood', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Roles` varchar(40) DEFAULT NULL,
  `CreateAt` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `Username`, `Email`, `Password`, `Roles`, `CreateAt`) VALUES
(1, 'Admin', 'Admin@gmail.com', '1234', 'Admin', '2022-10-18 03:28:28'),
(2, 'Asad Ali', 'Asad@gmail.com', '12345', 'User', '2022-10-18 03:30:19'),
(4, 'Basit', 'Basit@gmail.com', '1234', 'User', '2022-10-21 06:46:25'),
(5, 'Zeeshan', 'Zeeshan@gmail.com', '1234', 'User', '2022-10-21 06:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `SongID` int(11) NOT NULL,
  `SongName` varchar(100) DEFAULT NULL,
  `UploadedSong` varchar(250) DEFAULT NULL,
  `SongUploadedDate` varchar(100) DEFAULT NULL,
  `AlbumId_Fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`SongID`, `SongName`, `UploadedSong`, `SongUploadedDate`, `AlbumId_Fk`) VALUES
(1, 'Shaamat', 'Shaamat.mp3', '2022-10-24 09:40:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumId`),
  ADD KEY `CategoryId_Fk` (`CategoryId_Fk`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`),
  ADD KEY `ID_Signup` (`ID_Signup`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `AlbumId_Fk` (`AlbumId_Fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `AlbumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`CategoryId_Fk`) REFERENCES `category` (`CategoryId`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ID_Signup`) REFERENCES `signup` (`ID`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`AlbumId_Fk`) REFERENCES `album` (`AlbumId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
