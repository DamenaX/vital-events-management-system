-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 10:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veradb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`uid`, `username`, `password`, `status`) VALUES
(13, 'waliewuleta', 'f3347c3b84a21c7b4f3dba004ae4975f0f2fd89f', 'active'),
(22, 'teku', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(24, 'ayu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(26, 'meseret', '24395e6ac79961202c2747de9fdae00b86eaf2a6', 'active'),
(27, 'abebe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(29, 'muler', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(30, 'woreda', 'f3347c3b84a21c7b4f3dba004ae4975f0f2fd89f', 'active'),
(31, 'bereket', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(32, 'alex', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(33, 'alexso', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f', 'active'),
(34, 'abex', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(35, 'belie', 'f3347c3b84a21c7b4f3dba004ae4975f0f2fd89f', 'active'),
(37, 'selam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(38, 'federal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(39, 'region', 'f3347c3b84a21c7b4f3dba004ae4975f0f2fd89f', 'active'),
(40, 'zone', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active'),
(41, 'kebele', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `birthtable`
--

CREATE TABLE `birthtable` (
  `birthid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `motherfname` varchar(50) DEFAULT NULL,
  `mothermname` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `registrationdate` date DEFAULT NULL,
  `birthregion` varchar(50) DEFAULT NULL,
  `birthzone` varchar(50) DEFAULT NULL,
  `birthcity` varchar(50) DEFAULT NULL,
  `birthworeda` varchar(50) DEFAULT NULL,
  `birthkebele` varchar(50) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `countryname` varchar(50) NOT NULL,
  `socialsecurityno` varchar(50) NOT NULL,
  `statusformrg` varchar(50) NOT NULL,
  `birthstatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthtable`
--

INSERT INTO `birthtable` (`birthid`, `fname`, `mname`, `lname`, `motherfname`, `mothermname`, `sex`, `birthdate`, `nationality`, `registrationdate`, `birthregion`, `birthzone`, `birthcity`, `birthworeda`, `birthkebele`, `kebeleofficerid`, `statename`, `countryname`, `socialsecurityno`, `statusformrg`, `birthstatus`) VALUES
(9, 'meselu', 'negash', 'alebachew', 'aster', 'mamo', 'male', '2010-02-03', 'Ethiopian', '2013-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'died'),
(10, 'c', 'negash', 'alebachew', 'aster', 'fff', 'female', '2000-11-01', 'Ethiopian', '2013-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(11, 'abebe', 'alemu', 'alebachew', 'ffff', 'fff', 'female', '2010-02-03', 'Ethiopian', '2014-05-18', 'amhara', 'm/gojjam', 'm/m', 'gozamen', '012', '24', '', '', '', '', 'born'),
(12, 'abebe', 'alemu', 'alebachew', 'aster', 'mamo', 'male', '2010-02-03', 'Ethiopian', '2014-05-18', 'amhara', 'm/gojjam', 'm/m', 'gozamen', '015', '20', '', '', '', '', 'born'),
(13, 'meselu', 'negash', 'c', 'aster', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2014-05-18', 'afar', 'harerie', 'm/m', 'addegrat', '01', '27', '', '', '', '', 'born'),
(14, 'abebe', 'alemu', 'alebachew', 'ffff', 'fff', 'female', '2010-02-03', 'Ethiopian', '2014-05-19', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', '', 'died'),
(15, 'meselu', 'negash', 'alebachew', 'aster', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2014-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', 'married', 'died'),
(16, 'abebe', 'negash', 'bewustie', 'alebachewu', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2015-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(17, 'hana', 'tila', 'alebachew', 'ffff', 'mamo', 'male', '2000-02-03', 'Ethiopian', '2015-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(18, 'tsegawu', 'alem', 'alem', 'alem', 'enatneh', 'male', '2000-02-03', 'Ethiopian', '2015-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', 'married', 'born'),
(19, 'aster', 'awoke', 'ynges', 'tilanesh', 'bewuketu', 'female', '2000-02-03', 'Ethiopian', '2015-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', '', 'died'),
(20, 'wuleta', 'yehu', 'rtte', 'ffd', 'ddd', 'male', '2000-02-03', 'Ethiopian', '2016-05-18', 'tigray', 'mekele', 'm/m', 'addegrat', '01', '26', '', '', '', '', 'born'),
(21, 'meselu', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2000-02-03', 'Ethiopian', '2016-05-18', 'amhara', 'm/gojjam', 'm/m', 'gozamen', '015', '20', '', '', '', '', 'born'),
(22, 'abebe', 'negash', 'alebachew', 'ffff', 'mamo', 'male', '2010-02-03', 'Ethiopian', '2016-05-18', 'afar', 'mekele', 'm/m', 'addegrat', '02', '33', '', '', '', '', 'born'),
(23, 'c', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2010-02-03', 'Ethiopian', '2017-05-18', 'amhara', 'sdfg', 'asdfg', 'asdfg', '02', '13', '', '', '', '', 'born'),
(24, 'awoke', 'aschalew', 'girma', 'aster', 'melesech', 'female', '2010-02-03', 'Ethiopian', '2017-05-18', 'afar', 'arsie', 'asdfg', 'addegrat', '01', '35', '', '', '', '', 'born'),
(25, 'meselu', 'negash', 'alebachew', 'aster', 'bewuketu', 'female', '2000-02-03', 'Ethiopian', '2017-05-18', 'afar', 'arsie', 'asdfg', 'addegrat', '01', '35', '', '', '', '', 'born'),
(26, 'abebu', 'negash', 'alem', 'aster', 'bewuketu', 'female', '2018-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', 'married', 'born'),
(27, 'abebe', 'negash', 'c', 'ffff', 'mamo', 'female', '2018-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'america', '', '', 'unmarried', 'born'),
(28, 'awoke', 'alemu', 'alebachew', 'aster', 'bewuketu', 'male', '2018-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'swidden', '', '', 'unmarried', 'born'),
(29, 'tariku', 'bekele', 'teka', 'mother', 'fmf', 'male', '1985-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'ethiopia', '', '', 'married', 'born'),
(30, 'ayantu', 'misganew', 'temesgen', 'geletta', 'geletuma', 'female', '1990-05-17', 'Ethiopian', '2017-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'swidden', '', '', 'married', 'born'),
(31, 'wuletaw', 'yehuala', 'bamilaku', 'etagagegnew', 'mamo', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'sdfg', 'asdfg', 'asdfg', '02', '13', 'america', '', '', 'unmarried', 'died'),
(32, 'hanex', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'america', '', '', 'married', 'born'),
(33, 'tariku', 'bekele', 'teka', 'mother', 'gmother', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'swidden', '', '', 'married', 'born'),
(34, 'meselu', 'alemu', 'teka', 'aster', 'mamo', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'swidden', '', '', 'married', 'born'),
(35, 'asnaku', 'kebede', 'lema', 'asichalech', 'mamo', 'female', '2010-05-18', 'Ethiopian', '2018-05-18', 'tigray', 'mekele', 'asdf', 'bole', '01', '41', 'ethiopia', '', '', 'married', 'born'),
(36, 'teku', 'negash', 'alebachew', 'aster', 'mamo', 'male', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'swidden', '', '', 'married', 'died'),
(37, 'alem', 'negash', 'teka', 'alebachewu', 'bewuketu', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'america', '', '', 'married', 'born'),
(38, 'federal', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2000-02-03', 'Ethiopian', '2018-05-18', 'afar', 'mekele', ' sdd', 'addegrat', '02', '38', 'semerland', 'swidden', '34hh', 'unmarried', 'born'),
(39, 'federal', 'negash', 'alebachew', 'ffff', 'mamo', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', 'semerland', 'swidden', '34wertt', 'unmarried', 'born'),
(40, 'dfgdfg', 'bekele', 'alebachew', 'aster', 'mamo', 'female', '2018-05-18', 'Ethiopian', '2018-05-18', 'amhara', 'm/gojjam', 'm/lemar', 'gozamen', '012', '22', '', '', '', '', 'born'),
(41, 'John', 'Michael', 'Doe', 'Mary', 'Elizabeth', 'Male', '1985-03-10', 'USA', '2024-01-03', 'West', 'Zone 1', 'Los Angeles', 'Woreda 5', 'Kebele 32', '1001', 'California', 'United States', '123-45-6789', 'Married', 'Live'),
(42, 'Emily', 'Grace', 'Smith', 'Jennifer', 'Ann', 'Female', '1990-08-22', 'Canada', '2024-01-03', 'East', 'Zone 3', 'Toronto', 'Woreda 12', 'Kebele 45', '1002', 'Ontario', 'Canada', '987-65-4321', 'Single', 'Live'),
(43, 'Ahmed', 'Ali', 'Hassan', 'Fatima', 'Nur', 'Male', '1982-05-05', 'Ethiopia', '2024-01-03', 'Oromia', 'Zone 4', 'Adama', 'Woreda 7', 'Kebele 18', '1003', 'Oromia', 'Ethiopia', '456-78-9012', 'Married', 'Live'),
(44, 'Maria', 'Isabel', 'Rodriguez', 'Sofia', 'Elena', 'Female', '1995-11-18', 'Mexico', '2024-01-03', 'Central', 'Zone 2', 'Mexico City', 'Woreda 3', 'Kebele 12', '1004', 'Mexico City', 'Mexico', '789-01-2345', 'Single', 'Live'),
(45, 'James', 'Robert', 'Wilson', 'Linda', 'Susan', 'Male', '1988-02-28', 'UK', '2024-01-03', 'South', 'Zone 5', 'London', 'Woreda 20', 'Kebele 8', '1005', 'England', 'United Kingdom', '234-56-7890', 'Married', 'Live'),
(46, 'Sarah', 'Jane', 'Brown', 'Elizabeth', 'Louise', 'Female', '1992-07-12', 'Australia', '2024-01-03', 'North', 'Zone 6', 'Sydney', 'Woreda 15', 'Kebele 22', '1006', 'New South Wales', 'Australia', '345-67-8901', 'Single', 'Live'),
(47, 'Michael', 'Quang', 'Nguyen', 'Thu', 'Thi', 'Male', '1987-12-05', 'Vietnam', '2024-01-03', 'South East', 'Zone 2', 'Ho Chi Minh City', 'Woreda 10', 'Kebele 37', '1007', 'Ho Chi Minh City', 'Vietnam', '012-34-5678', 'Married', 'Live'),
(48, 'Aisha', 'Zahra', 'Al-Farsi', 'Fatima', 'Said', 'Female', '1994-04-01', 'Oman', '2024-01-03', 'Middle East', 'Zone 3', 'Muscat', 'Woreda 8', 'Kebele 19', '1008', 'Muscat', 'Oman', '789-01-2345', 'Single', 'Live'),
(49, 'Daniel', 'Gonzalez', 'Garcia', 'Ana', 'Maria', 'Male', '1983-10-20', 'Spain', '2024-01-03', 'Southern Europe', 'Zone 1', 'Madrid', 'Woreda 14', 'Kebele 28', '1009', 'Madrid', 'Spain', '567-89-0123', 'Married', 'Live'),
(50, 'Chen', 'Wei', 'Li', 'Liu', 'Mei', 'Male', '1990-05-25', 'China', '2024-01-03', 'East Asia', 'Zone 4', 'Beijing', 'Woreda 4', 'Kebele 15', '1010', 'Beijing', 'China', '901-23-4567', 'Single', 'Live'),
(51, 'Sophie', 'Marie', 'Dubois', 'Isabelle', 'Claire', 'Female', '1986-02-18', 'France', '2024-01-03', 'Western Europe', 'Zone 2', 'Paris', 'Woreda 6', 'Kebele 23', '1011', 'ÃŽle-de-France', 'France', '234-56-7890', 'Married', 'Live'),
(52, 'Muhammad', 'Iqbal', 'Khan', 'Ayesha', 'Parveen', 'Male', '1998-09-05', 'Pakistan', '2024-01-03', 'South Asia', 'Zone 3', 'Karachi', 'Woreda 11', 'Kebele 31', '1012', 'Sindh', 'Pakistan', '678-90-1234', 'Single', 'Live'),
(53, 'Isabella', 'Rosa', 'Ricci', 'Elena', 'Giovanni', 'Female', '1985-07-30', 'Italy', '2024-01-03', 'Southern Europe', 'Zone 1', 'Rome', 'Woreda 9', 'Kebele 27', '1013', 'Lazio', 'Italy', '890-12-3456', 'Married', 'Live'),
(54, 'Ravi', 'Prakash', 'Patel', 'Anita', 'Kumari', 'Male', '1993-04-14', 'India', '2024-01-03', 'South Asia', 'Zone 5', 'Mumbai', 'Woreda 13', 'Kebele 26', '1014', 'Maharashtra', 'India', '012-34-5678', 'Single', 'Live'),
(55, 'Mia', 'Elisabeth', 'Andersson', 'Anna', 'Kristina', 'Female', '1987-03-08', 'Sweden', '2024-01-03', 'Northern Europe', 'Zone 2', 'Stockholm', 'Woreda 16', 'Kebele 29', '1015', 'Stockholm County', 'Sweden', '567-89-0123', 'Married', 'Live'),
(56, 'Javier', 'Alejandro', 'Moreno', 'Ana', 'Luisa', 'Male', '1990-12-23', 'Argentina', '2024-01-03', 'South America', 'Zone 4', 'Buenos Aires', 'Woreda 12', 'Kebele 35', '1016', 'Buenos Aires', 'Argentina', '901-23-4567', 'Single', 'Live'),
(101, 'Abebe', 'Tesfaye', 'Hailu', 'Meron', 'Tadesse', 'Male', '1995-03-10', 'Ethiopian', '2022-06-01', 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '123', 'Tigray State', 'Ethiopia', '123456789', 'Registered', 'Alive'),
(102, 'Mulugeta', 'Fekadu', 'Girma', 'Azeb', 'Yohannes', 'Male', '1993-07-15', 'Ethiopian', '2021-10-05', 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '456', 'Amhara State', 'Ethiopia', '987654321', 'Registered', 'Alive'),
(103, 'Ephrem', 'Dawit', 'Berhanu', 'Hanna', 'Tekle', 'Male', '1987-12-22', 'Ethiopian', '2022-04-18', 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '789', 'Oromia State', 'Ethiopia', '567890123', 'Registered', 'Alive'),
(104, 'Tesfaye', 'Getachew', 'Woldemichael', 'Fikirte', 'Haile', 'Male', '1990-11-05', 'Ethiopian', '2021-09-30', 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '234', 'Tigray State', 'Ethiopia', '234567890', 'Registered', 'Alive'),
(105, 'Fisseha', 'Alemayehu', 'Abebe', 'Selam', 'Getachew', 'Male', '1994-05-15', 'Ethiopian', '2022-11-20', 'Amhara', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '567', 'Amhara State', 'Ethiopia', '789012345', 'Registered', 'Alive'),
(106, 'Getachew', 'Negash', 'Tesfaye', 'Alemnesh', 'Dawit', 'Male', '1988-10-30', 'Ethiopian', '2021-04-10', 'Oromia', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '890', 'Oromia State', 'Ethiopia', '345678901', 'Registered', 'Alive'),
(107, 'Alemayehu', 'Berhanu', 'Abebe', 'Azeb', 'Girma', 'Male', '1989-06-15', 'Ethiopian', '2022-08-12', 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '123', 'Tigray State', 'Ethiopia', '901234567', 'Registered', 'Alive'),
(108, 'Girma', 'Mulugeta', 'Molla', 'Etenesh', 'Abera', 'Male', '1993-04-28', 'Ethiopian', '2021-12-01', 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '456', 'Amhara State', 'Ethiopia', '789012345', 'Registered', 'Alive'),
(109, 'Mekonnen', 'Abebe', 'Gebre', 'Alemnesh', 'Alemu', 'Male', '1985-02-15', 'Ethiopian', '2022-03-05', 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '789', 'Oromia State', 'Ethiopia', '123456789', 'Registered', 'Alive'),
(110, 'Birhanu', 'Negussie', 'Alemayehu', 'Wubete', 'Negussie', 'Male', '1989-10-10', 'Ethiopian', '2021-05-18', 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '234', 'Tigray State', 'Ethiopia', '567890123', 'Registered', 'Alive'),
(201, 'Meron', 'Abebe', 'Hailu', 'Azeb', 'Yohannes', 'Female', '1997-08-20', 'Ethiopian', '2023-02-14', 'Amhara', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '123', 'Amhara State', 'Ethiopia', '456789012', 'Registered', 'Alive'),
(202, 'Azeb', 'Mulugeta', 'Girma', 'Meron', 'Tadesse', 'Female', '1995-12-12', 'Ethiopian', '2024-01-03', 'Oromia', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '456', 'Oromia State', 'Ethiopia', '789012345', 'Registered', 'Alive'),
(203, 'Hanna', 'Ephrem', 'Berhanu', 'Alemnesh', 'Dawit', 'Female', '1998-05-25', 'Ethiopian', '2023-11-08', 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '789', 'Tigray State', 'Ethiopia', '234567890', 'Registered', 'Alive'),
(204, 'Fikirte', 'Tesfaye', 'Woldemichael', 'Fikirte', 'Haile', 'Female', '1996-10-18', 'Ethiopian', '2024-03-20', 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '234', 'Amhara State', 'Ethiopia', '567890123', 'Registered', 'Alive'),
(205, 'Selam', 'Fisseha', 'Abebe', 'Azeb', 'Girma', 'Female', '1999-02-05', 'Ethiopian', '2023-09-15', 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '567', 'Oromia State', 'Ethiopia', '901234567', 'Registered', 'Alive'),
(206, 'Alemnesh', 'Getachew', 'Tesfaye', 'Selam', 'Getachew', 'Female', '1993-06-30', 'Ethiopian', '2022-12-10', 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '890', 'Tigray State', 'Ethiopia', '345678901', 'Registered', 'Alive'),
(207, 'Abebe', 'Alemayehu', 'Abebe', 'Azeb', 'Girma', 'Female', '1994-11-15', 'Ethiopian', '2024-02-18', 'Amhara', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '123', 'Amhara State', 'Ethiopia', '567890123', 'Registered', 'Alive'),
(208, 'Etenesh', 'Girma', 'Molla', 'Etenesh', 'Abera', 'Female', '1998-04-28', 'Ethiopian', '2023-06-01', 'Oromia', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '456', 'Oromia State', 'Ethiopia', '789012345', 'Registered', 'Alive'),
(209, 'Alemnesh', 'Mekonnen', 'Abebe', 'Alemnesh', 'Alemu', 'Female', '1990-02-15', 'Ethiopian', '2022-09-05', 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '789', 'Tigray State', 'Ethiopia', '123456789', 'Registered', 'Alive');

-- --------------------------------------------------------

--
-- Table structure for table `citytable`
--

CREATE TABLE `citytable` (
  `cityid` varchar(50) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citytable`
--

INSERT INTO `citytable` (`cityid`, `cityname`, `woredaid`) VALUES
('asdf', '', ''),
('asdf', '', ''),
('asdf', 'asdf', ''),
('asdf', 'zxcvg', 'w4');

-- --------------------------------------------------------

--
-- Table structure for table `deathtable`
--

CREATE TABLE `deathtable` (
  `deathid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthregion` varchar(50) DEFAULT NULL,
  `birthzone` varchar(50) DEFAULT NULL,
  `birthcity` varchar(50) DEFAULT NULL,
  `birthworeda` varchar(50) DEFAULT NULL,
  `birthkebele` varchar(50) DEFAULT NULL,
  `dateofdeath` date DEFAULT NULL,
  `workposition` varchar(50) DEFAULT NULL,
  `deathregion` varchar(50) DEFAULT NULL,
  `deathworeda` varchar(50) DEFAULT NULL,
  `deathcity` varchar(50) DEFAULT NULL,
  `deathkebele` varchar(10) DEFAULT NULL,
  `deathreason` varchar(100) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deathtable`
--

INSERT INTO `deathtable` (`deathid`, `fname`, `lname`, `sex`, `nationality`, `birthdate`, `birthregion`, `birthzone`, `birthcity`, `birthworeda`, `birthkebele`, `dateofdeath`, `workposition`, `deathregion`, `deathworeda`, `deathcity`, `deathkebele`, `deathreason`, `kebeleofficerid`) VALUES
(42, 'Abel', 'Tesfaye', 'Male', 'Ethiopia', '1992-09-28', 'Amhara', 'East', 'Addis Ababa', 'Woreda 12', 'Kebele 45', '2023-04-12', 'Engineer', 'Amhara', 'Woreda 8', 'Hawassa', 'Kebele 9', 'Accidental Fall', '5678'),
(43, 'Abeba', 'Tadesse', 'Female', 'Ethiopia', '1990-05-15', 'Oromia', 'West', 'Gondar', 'Woreda 5', 'Kebele 32', '2023-07-20', 'Doctor', 'SNNPR', 'Woreda 10', 'Bahir Dar', 'Kebele 15', 'Heart Failure', '4321'),
(44, 'Berhanu', 'Negash', 'Male', 'Ethiopia', '1985-12-10', 'SNNPR', 'South', 'Jimma', 'Woreda 7', 'Kebele 18', '2023-11-05', 'Teacher', 'Oromia', 'Woreda 15', 'Addis Ababa', 'Kebele 9', 'Respiratory Infection', '1234'),
(45, 'Birtukan', 'Girma', 'Female', 'Ethiopia', '1998-03-22', 'Amhara', 'North', 'Hawassa', 'Woreda 3', 'Kebele 12', '2023-01-30', 'Nurse', 'Tigray', 'Woreda 5', 'Bishoftu', 'Kebele 10', 'Traffic Accident', '8765'),
(46, 'Dawit', 'Mekonnen', 'Male', 'Ethiopia', '1982-07-03', 'SNNPR', 'East', 'Addis Ababa', 'Woreda 20', 'Kebele 8', '2023-09-18', 'IT Specialist', 'South', 'Woreda 18', 'Dire Dawa', 'Kebele 11', 'Stroke', '2345'),
(47, 'Etenesh', 'Alemu', 'Female', 'Ethiopia', '1990-01-12', 'Tigray', 'North', 'Mekele', 'Woreda 15', 'Kebele 22', '2023-02-25', 'Engineer', 'Afar', 'Woreda 7', 'Gondar', 'Kebele 14', 'Pneumonia', '6789'),
(48, 'Fikru', 'Kassa', 'Male', 'Ethiopia', '1987-08-08', 'Oromia', 'South', 'Dessie', 'Woreda 10', 'Kebele 37', '2023-06-10', 'Architect', 'Benishangul-Gumuz', 'Woreda 12', 'Bahir Dar', 'Kebele 2', 'Drowning', '5432'),
(49, 'Genet', 'Assefa', 'Female', 'Ethiopia', '1995-04-01', 'Amhara', 'East', 'Dire Dawa', 'Woreda 8', 'Kebele 19', '2023-03-15', 'Pharmacist', 'Harari', 'Woreda 5', 'Harar', 'Kebele 1', 'Drug Overdose', '7890'),
(50, 'Haile', 'Mulugeta', 'Male', 'Ethiopia', '1984-11-20', 'SNNPR', 'South', 'Arba Minch', 'Woreda 14', 'Kebele 28', '2023-10-02', 'Police Officer', 'Oromia', 'Woreda 8', 'Hosanna', 'Kebele 14', 'Gunshot Wound', '8765'),
(51, 'Helina', 'Teshome', 'Female', 'Ethiopia', '1993-06-25', 'Amhara', 'East', 'Hawassa', 'Woreda 4', 'Kebele 15', '2023-08-28', 'Software Engineer', 'Oromia', 'Woreda 9', 'Addis Ababa', 'Kebele 2', 'Car Accident', '4321'),
(52, 'Jemal', 'Mengistu', 'Male', 'Ethiopia', '1989-02-18', 'Oromia', 'Central', 'Addis Ababa', 'Woreda 6', 'Kebele 23', '2023-05-14', 'Chef', 'Amhara', 'Woreda 11', 'Adama', 'Kebele 12', 'Food Poisoning', '2345'),
(53, 'Kidist', 'Berhanu', 'Female', 'Ethiopia', '1981-10-05', 'SNNPR', 'North', 'Jinka', 'Woreda 11', 'Kebele 31', '2023-12-07', 'Businesswoman', 'Amhara', 'Woreda 14', 'Arba Minch', 'Kebele 7', 'Heart Attack', '6789'),
(54, 'Mekonnen', 'Haile', 'Male', 'Ethiopia', '1996-07-30', 'Tigray', 'West', 'Axum', 'Woreda 9', 'Kebele 27', '2023-09-03', 'Graphic Designer', 'Tigray', 'Woreda 6', 'Mekele', 'Kebele 6', 'Fall from Height', '5432'),
(55, 'Meseret', 'Abebe', 'Female', 'Ethiopia', '1986-04-14', 'Amhara', 'West', 'Bahir Dar', 'Woreda 13', 'Kebele 26', '2023-11-20', 'Doctor', 'Amhara', 'Woreda 10', 'Gondar', 'Kebele 9', 'COVID-19', '9876'),
(56, 'Nebiyu', 'Getachew', 'Male', 'Ethiopia', '1994-03-08', 'SNNPR', 'East', 'Hawassa', 'Woreda 16', 'Kebele 29', '2023-07-02', 'Translator', 'Afar', 'Woreda 7', 'Dilla', 'Kebele 2', 'Allergic Reaction', '3456');

-- --------------------------------------------------------

--
-- Table structure for table `divorce`
--

CREATE TABLE `divorce` (
  `divorceid` int(11) NOT NULL,
  `hasbandfname` varchar(50) DEFAULT NULL,
  `hasbandlname` varchar(50) DEFAULT NULL,
  `wifefname` varchar(50) DEFAULT NULL,
  `wifelname` varchar(50) DEFAULT NULL,
  `divorcedate` date DEFAULT NULL,
  `divorcereason` varchar(100) DEFAULT NULL,
  `divorceregion` varchar(50) DEFAULT NULL,
  `divorcezone` varchar(50) NOT NULL,
  `divorceworeda` varchar(50) DEFAULT NULL,
  `divorcecity` varchar(50) DEFAULT NULL,
  `divorcekebele` varchar(50) DEFAULT NULL,
  `numberofchild` int(11) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divorce`
--

INSERT INTO `divorce` (`divorceid`, `hasbandfname`, `hasbandlname`, `wifefname`, `wifelname`, `divorcedate`, `divorcereason`, `divorceregion`, `divorcezone`, `divorceworeda`, `divorcecity`, `divorcekebele`, `numberofchild`, `kebeleofficerid`) VALUES
(1, 'Abebe', 'Hailu', 'Meron', 'Tadesse', '2022-05-10', 'Irreconcilable Differences', 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', 2, '123'),
(2, 'Mulugeta', 'Girma', 'Azeb', 'Yohannes', '2021-08-15', 'Infidelity', 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', 1, '456'),
(3, 'Ephrem', 'Berhanu', 'Hanna', 'Tekle', '2022-03-22', 'Domestic Violence', 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', 0, '789'),
(4, 'Tesfaye', 'Woldemichael', 'Fikirte', 'Haile', '2021-11-18', 'Financial Issues', 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', 2, '234'),
(5, 'Fisseha', 'Abebe', 'Selam', 'Getachew', '2022-09-05', 'Communication Breakdown', 'Amhara', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', 1, '567'),
(6, 'Getachew', 'Tesfaye', 'Alemnesh', 'Dawit', '2021-12-30', 'Substance Abuse', 'Oromia', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', 0, '890'),
(7, 'Alemayehu', 'Abebe', 'Azeb', 'Girma', '2022-06-15', 'Cultural Differences', 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', 3, '123'),
(8, 'Girma', 'Mulugeta', 'Etenesh', 'Abera', '2021-04-28', 'Religious Disagreements', 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', 2, '456'),
(9, 'Mekonnen', 'Gebre', 'Alemnesh', 'Alemu', '2022-02-15', 'Infertility Issues', 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', 0, '789'),
(10, 'Birhanu', 'Alemayehu', 'Wubete', 'Negussie', '2021-10-10', 'Incompatibility', 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', 1, '234');

-- --------------------------------------------------------

--
-- Table structure for table `federalofficertable`
--

CREATE TABLE `federalofficertable` (
  `federalofficerid` varchar(50) NOT NULL,
  `federalofficerfname` varchar(50) NOT NULL,
  `federalofficermname` varchar(50) NOT NULL,
  `federalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `feedbackid` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`feedbackid`, `role`, `username`, `email`, `comment`, `status`, `dates`) VALUES
(1, 'kebeleofficer', 'fgh', '', 'dfghj', '', '0000-00-00'),
(2, 'woredaofficer', 'mahlet', '', 'wellcome', '', '2010-01-03'),
(3, 'Admin', 'wuletaye', 'ww@gmail.com', 'well come for conference', '', '2013-05-18'),
(4, 'kebeleofficer', 'wuletaye', 'ww@gmail.com', 'how was registration', '', '2013-05-18'),
(5, 'kebeleofficer', 'wuletaye', 'ww@gmail.com', 'call for conference', '', '2013-05-18'),
(6, 'woredaofficer', 'hana', 'ha@gmail.com', 'call for cermony', '', '2014-05-18'),
(7, 'statician', 'wuletayeneh', 'ww@gmail.com', ' wellcome\r\n					', '', '2014-05-18'),
(8, 'statician', 'wuletayeneh', 'ww@gmail.com', ' wellcome\r\n					', '', '2014-05-18'),
(9, '', NULL, 'ww@gmail.com', 'ERTYUWERTYUI', '', '2016-05-18'),
(10, 'statician', NULL, 'ha@gmail.com', 'asdfghjk', '', '2017-05-18'),
(11, 'statician', NULL, 'ha@gmail.com', 'asdfghjk', '', '2017-05-18'),
(12, 'statician', NULL, 'ww@gmail.com', 'WWWWWWWWWWWW', 'New', '2017-05-18'),
(13, 'kebeleofficer', NULL, 'ww@gmail.com', 'Hello Evrybody', 'New', '2017-05-18'),
(14, 'kebeleofficer', NULL, 'ha@gmail.com', 'hell', 'New', '2017-05-18'),
(15, 'kebeleofficer', NULL, 'ww@gmail.com', 'asjemreshignal', 'New', '2018-05-18'),
(16, 'kebeleofficer', NULL, 'ww@gmail.com', 'wellcome to our sendfeedback', 'New', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `kebeleofficertable`
--

CREATE TABLE `kebeleofficertable` (
  `kebeleofficerid` varchar(50) NOT NULL,
  `kebeleofficerfname` varchar(50) NOT NULL,
  `kebeleofficermname` varchar(50) NOT NULL,
  `kebeleofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `kebeleid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeleofficertable`
--

INSERT INTO `kebeleofficertable` (`kebeleofficerid`, `kebeleofficerfname`, `kebeleofficermname`, `kebeleofficerlname`, `sex`, `mobile`, `email`, `photo`, `kebeleid`) VALUES
('', 'abebe', 'kebede', 'asefa', 'male', '0909560110', 'asdfg@gmail.com', '', 'k1'),
('asdf', 'sdfg', 'asdf', 'asdf', 'male', '9052412412', 'zxcvzx@gmail.com', '', 'k2'),
('SDFGH', 'DFG', 'FGHCV', 'FGH', 'male', '0618404296', 'DFGH@gmail.com', '', 'k2');

-- --------------------------------------------------------

--
-- Table structure for table `kebeletable`
--

CREATE TABLE `kebeletable` (
  `kebeleid` varchar(50) NOT NULL,
  `kebelename` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebeletable`
--

INSERT INTO `kebeletable` (`kebeleid`, `kebelename`, `woredaid`) VALUES
('asdfg', 'zxasdf', 'w4'),
('k1', '01', 'w1'),
('k2', '02', 'w1'),
('k3', '014', 'w4');

-- --------------------------------------------------------

--
-- Table structure for table `marriagetable`
--

CREATE TABLE `marriagetable` (
  `marriageid` int(11) NOT NULL,
  `birthid` int(11) DEFAULT NULL,
  `hasbandfname` varchar(50) DEFAULT NULL,
  `hasbandlname` varchar(50) DEFAULT NULL,
  `hasbandage` int(11) DEFAULT NULL,
  `wifefname` varchar(50) DEFAULT NULL,
  `wifelname` varchar(50) DEFAULT NULL,
  `wifeage` int(11) DEFAULT NULL,
  `wifebirthid` int(11) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `woreda` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `kebele` varchar(50) DEFAULT NULL,
  `marragedate` date DEFAULT NULL,
  `marragecondition` varchar(100) DEFAULT NULL,
  `marriagestatus` varchar(50) DEFAULT NULL,
  `kebeleofficerid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriagetable`
--

INSERT INTO `marriagetable` (`marriageid`, `birthid`, `hasbandfname`, `hasbandlname`, `hasbandage`, `wifefname`, `wifelname`, `wifeage`, `wifebirthid`, `region`, `zone`, `woreda`, `city`, `kebele`, `marragedate`, `marragecondition`, `marriagestatus`, `kebeleofficerid`) VALUES
(1, 101, 'Abebe', 'Hailu', 30, 'Meron', 'Tadesse', 25, 201, 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '2022-05-10', 'Consensual', 'Married', '123'),
(2, 102, 'Mulugeta', 'Girma', 28, 'Azeb', 'Yohannes', 24, 202, 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '2021-08-15', 'Arranged', 'Married', '456'),
(3, 103, 'Ephrem', 'Berhanu', 35, 'Hanna', 'Tekle', 30, 203, 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '2022-03-22', 'Love Marriage', 'Married', '789'),
(4, 104, 'Tesfaye', 'Woldemichael', 32, 'Fikirte', 'Haile', 28, 204, 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '2021-11-18', 'Consensual', 'Married', '234'),
(5, 105, 'Fisseha', 'Abebe', 29, 'Selam', 'Getachew', 26, 205, 'Amhara', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '2022-09-05', 'Arranged', 'Married', '567'),
(6, 106, 'Getachew', 'Tesfaye', 34, 'Alemnesh', 'Dawit', 31, 206, 'Oromia', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '2021-12-30', 'Love Marriage', 'Married', '890'),
(7, 107, 'Alemayehu', 'Abebe', 33, 'Azeb', 'Girma', 29, 207, 'Tigray', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '2022-06-15', 'Consensual', 'Married', '123'),
(8, 108, 'Girma', 'Mulugeta', 28, 'Etenesh', 'Abera', 25, 208, 'Amhara', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '2021-04-28', 'Arranged', 'Married', '456'),
(9, 109, 'Mekonnen', 'Gebre', 37, 'Alemnesh', 'Alemu', 34, 209, 'Oromia', 'ZoneA', 'Woreda1', 'CityA', 'Kebele1', '2022-02-15', 'Consensual', 'Married', '789'),
(10, 110, 'Birhanu', 'Alemayehu', 31, 'Wubete', 'Negussie', 29, 210, 'Tigray', 'ZoneB', 'Woreda2', 'CityB', 'Kebele2', '2021-10-10', 'Arranged', 'Married', '234');

-- --------------------------------------------------------

--
-- Table structure for table `regionalofficertable`
--

CREATE TABLE `regionalofficertable` (
  `regionalofficerid` varchar(50) NOT NULL,
  `regionalofficerfname` varchar(50) NOT NULL,
  `regionalofficermname` varchar(50) NOT NULL,
  `regionalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regionalofficertable`
--

INSERT INTO `regionalofficertable` (`regionalofficerid`, `regionalofficerfname`, `regionalofficermname`, `regionalofficerlname`, `sex`, `mobile`, `email`, `photo`) VALUES
('r3', 'rr', 'rrrr', 'rrrr', 'male', '0909563252', 'a@gmail.com', 'aa.jpg'),
('rw', 'rr', 'rrrr', 'rrrr', 'female', '0909563277', 'bb@gmail.com', 'aa.jpg'),
('z1', 'tariku', 'bekele', 'teka', 'male', '0909563266', 'tark@gmail.com', 'aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regiontable`
--

CREATE TABLE `regiontable` (
  `regionid` varchar(50) NOT NULL,
  `regionname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiontable`
--

INSERT INTO `regiontable` (`regionid`, `regionname`) VALUES
('region2', 'afar'),
('r3', 'amhara'),
('43', 'benshangul'),
('r4', 'oromia'),
('region1', 'tigray');

-- --------------------------------------------------------

--
-- Table structure for table `staticiantable`
--

CREATE TABLE `staticiantable` (
  `staticianid` varchar(50) NOT NULL,
  `staticianfname` varchar(50) NOT NULL,
  `staticianmname` varchar(50) NOT NULL,
  `staticianlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `ufname` varchar(50) DEFAULT NULL,
  `umname` varchar(50) DEFAULT NULL,
  `ulname` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `woreda` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `kebele` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `ufname`, `umname`, `ulname`, `sex`, `mobile`, `email`, `photo`, `role`, `nationality`, `region`, `zone`, `woreda`, `city`, `kebele`) VALUES
(1, 'wuletaw', 'yehuala', 'bamilak', 'male', '0942861337', 'w@gmail.com', 'aa.jpg', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'walie', 'sishaw', 'maru', 'male', '0623521474', 'aaa@gmail.com', '', 'Admin', 'Ethiopian', 'amhara', 'sdfg', 'asdfg', 'asdfg', '02'),
(14, 'mahlet', 'zewudu', 'abebe', 'male', '0945212331', 'm@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '01'),
(15, 'wuletaw', 'yehuala', 'bamilaku', 'male', '0942863137', 'wu@gmail.com', '', 'statician', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '01'),
(16, 'hana', 'tilahun', 'asres', 'female', '0909563231', 'hana@gmail.com', 'aa.jpg', 'reginalofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '012'),
(17, 'wuletaw', 'bekele', 'bamilaku', 'male', '0909563363', 'wel@gmail.com', 'aa.jpg', 'zonalofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/lemar', '014'),
(19, 'abie', 'kebede', 'teka', 'male', '0914563212', 'ab@gmail.com', 'aa.jpg', 'zonalofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '015'),
(20, 'lamesgn', 'bekele', 'abebe', 'male', '0966563242', 'yeku@gmail.com', 'aa.jpg', 'federaloficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '015'),
(21, 'tilaye', 'yehuala', 'teka', 'male', '0909563214', 'tilaye@gmail.com', 'aa.jpg', 'woredaofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '014'),
(22, 'we', 'ye', 'ab', 'male', '0909563252', 'add@gmail.com', '', 'kebeleofficer', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/lemar', '012'),
(24, 'ayana', 'genet', 'abate', 'male', '0918404296', 'ayu@gmail.com', 'aa.jpg', 'branchadmin', 'Ethiopian', 'amhara', 'm/gojjam', 'gozamen', 'm/m', '012'),
(26, 'meseret', 'yehu', 'bam', 'male', '093570143', 'mesie@gmail.com', '', 'kebeleofficer', 'Ethiopian', 'tigray', 'mekele', 'addegrat', 'm/m', '01'),
(27, 'abebe', 'yehu', 'bamilaku', 'male', '0923521235', 'abe@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'afar', 'harerie', 'addegrat', 'm/m', '01'),
(28, 'hana', 'bekele', 'teka', 'male', '0909500052', 'zem@gmail.com', 'aa.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/lemar', ' '),
(29, 'meseret', 'bekele', 'teka', 'male', '0909563221', 'aaaa@gmail.com', 'aa.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'harerie', 'addegrat', 'm/m', '01'),
(30, 'mesenbet', 'teshome', 'moges', 'male', '0909511252', 'ayayuu@gmail.com', 'w.jpg', 'woredaofficer', 'Ethiopian', 'afar', 'harerie', 'addegrat', 'm/lemar', '02'),
(31, 'bereket', 'yehuala', 'mablaku', 'male', '0961863251', 'berie@gmail.cop', 'wuleta.jpg', 'Admin', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/m', '02'),
(32, 'hanna', 'alemu', 'sita', 'female', '0909511152', 'hanex@gmail.com', 'w.jpg', 'branchadmin', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/m', '01'),
(33, 'alexs', 'bekele', 'teka', 'female', '0909562142', 'alex@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', 'm/m', '02'),
(34, 'melkam', 'aderawu', 'meku', 'male', '0909563102', 'meku@gmail.com', 'aa.jpg', 'Admin', 'Ethiopian', 'afar', 'arsie', 'addegrat', 'm/m', '02'),
(35, 'df', 'asdfg', 'asdfgh', 'male', '0909563137', 'ad@gmail.com', 'aa.jpg', 'statician', 'Ethiopian', 'afar', 'arsie', 'addegrat', 'asdfg', '01'),
(36, 'asdfg', 'dfgh', 'dfg', 'male', '0909565552', 'ff@gmail.com', '', 'statician', 'Ethiopian', 'amhara', 'mekele', 'enebsie', ' ', '01'),
(37, 'dfg', 'dfgh', 'dfg', 'male', '0909563200', 'f@gmail.com', 'aa.jpg', 'statician', 'Ethiopian', 'tigray', 'mekele', 'addegrat', ' ', '01'),
(38, 'walelign', 'bekele', 'teka', 'male', '0909563201', 'xx@gmail.com', 'aa.jpg', 'federaloficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', ' ', '02'),
(39, 'ye', 'a', 'teka', 'male', '0904425124', 'fgh@gmail.com', 'aa.jpg', 'reginalofficer', 'Ethiopian', 'afar', 'arsie', 'enebsie', ' ', '02'),
(40, 'hana', 'yehuala', 'teka', 'male', '0905563252', 'dfg@gmail.com', '', 'zonalofficer', 'Ethiopian', 'afar', 'mekele', 'addegrat', ' ', '02'),
(41, 'meselech', 'mel', 'teka', 'male', '0901563252', 'zxcvxcv@gmail.com', 'aa.jpg', 'kebeleofficer', 'Ethiopian', 'tigray', 'mekele', 'bole', 'asdf', '01');

-- --------------------------------------------------------

--
-- Table structure for table `woredaofficer`
--

CREATE TABLE `woredaofficer` (
  `woredaofficerid` varchar(50) NOT NULL,
  `woredaofficerfname` varchar(50) NOT NULL,
  `woredaofficermname` varchar(50) NOT NULL,
  `woredaofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `woredaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `woredatable`
--

CREATE TABLE `woredatable` (
  `woredaid` varchar(50) NOT NULL,
  `woredaname` varchar(50) NOT NULL,
  `zoneid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woredatable`
--

INSERT INTO `woredatable` (`woredaid`, `woredaname`, `zoneid`) VALUES
('w1', 'addegrat', 'zone1'),
('w4', 'enebsie', 'z3'),
('we', 'bole', 'z3');

-- --------------------------------------------------------

--
-- Table structure for table `zonalofficertable`
--

CREATE TABLE `zonalofficertable` (
  `zonalofficerid` varchar(50) NOT NULL,
  `zonalofficerfname` varchar(50) NOT NULL,
  `zonalofficermname` varchar(50) NOT NULL,
  `zonalofficerlname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `zoneid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonalofficertable`
--

INSERT INTO `zonalofficertable` (`zonalofficerid`, `zonalofficerfname`, `zonalofficermname`, `zonalofficerlname`, `sex`, `mobile`, `email`, `photo`, `zoneid`) VALUES
('z2sdf', 'DFG', 'kebede', 'asefa', 'male', '0909563002', 'asdfgh@gmail.com', '', 'arsie');

-- --------------------------------------------------------

--
-- Table structure for table `zonetable`
--

CREATE TABLE `zonetable` (
  `zoneid` varchar(50) NOT NULL,
  `zonename` varchar(50) NOT NULL,
  `regionid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonetable`
--

INSERT INTO `zonetable` (`zoneid`, `zonename`, `regionid`) VALUES
('z2df', 'sdfgh', 'region2'),
('z3', 'arsie', 'r3'),
('zone1', 'mekele', 'region1'),
('zone2', 'harerie', 'region2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `birthtable`
--
ALTER TABLE `birthtable`
  ADD PRIMARY KEY (`birthid`);

--
-- Indexes for table `deathtable`
--
ALTER TABLE `deathtable`
  ADD PRIMARY KEY (`deathid`);

--
-- Indexes for table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`divorceid`);

--
-- Indexes for table `federalofficertable`
--
ALTER TABLE `federalofficertable`
  ADD PRIMARY KEY (`federalofficerid`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `kebeleofficertable`
--
ALTER TABLE `kebeleofficertable`
  ADD PRIMARY KEY (`kebeleofficerid`);

--
-- Indexes for table `kebeletable`
--
ALTER TABLE `kebeletable`
  ADD PRIMARY KEY (`kebeleid`);

--
-- Indexes for table `marriagetable`
--
ALTER TABLE `marriagetable`
  ADD PRIMARY KEY (`marriageid`),
  ADD KEY `birthid` (`birthid`);

--
-- Indexes for table `regionalofficertable`
--
ALTER TABLE `regionalofficertable`
  ADD PRIMARY KEY (`regionalofficerid`);

--
-- Indexes for table `regiontable`
--
ALTER TABLE `regiontable`
  ADD PRIMARY KEY (`regionid`),
  ADD UNIQUE KEY `regionname` (`regionname`);

--
-- Indexes for table `staticiantable`
--
ALTER TABLE `staticiantable`
  ADD PRIMARY KEY (`staticianid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `woredaofficer`
--
ALTER TABLE `woredaofficer`
  ADD PRIMARY KEY (`woredaofficerid`);

--
-- Indexes for table `woredatable`
--
ALTER TABLE `woredatable`
  ADD PRIMARY KEY (`woredaid`);

--
-- Indexes for table `zonalofficertable`
--
ALTER TABLE `zonalofficertable`
  ADD PRIMARY KEY (`zonalofficerid`);

--
-- Indexes for table `zonetable`
--
ALTER TABLE `zonetable`
  ADD PRIMARY KEY (`zoneid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthtable`
--
ALTER TABLE `birthtable`
  MODIFY `birthid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `divorce`
--
ALTER TABLE `divorce`
  MODIFY `divorceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `deathtable`
--
ALTER TABLE `deathtable`
  ADD CONSTRAINT `deathtable_ibfk_1` FOREIGN KEY (`deathid`) REFERENCES `birthtable` (`birthid`);

--
-- Constraints for table `divorce`
--
ALTER TABLE `divorce`
  ADD CONSTRAINT `divorce_ibfk_1` FOREIGN KEY (`divorceid`) REFERENCES `marriagetable` (`marriageid`);

--
-- Constraints for table `marriagetable`
--
ALTER TABLE `marriagetable`
  ADD CONSTRAINT `marriagetable_ibfk_1` FOREIGN KEY (`birthid`) REFERENCES `birthtable` (`birthid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
