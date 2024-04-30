-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql8.freesqldatabase.com
-- Generation Time: Apr 30, 2024 at 03:18 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql8697588`
--
CREATE DATABASE IF NOT EXISTS `sql8697588` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql8697588`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `contactNumber` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `subject` tinytext NOT NULL,
  `idDoctor` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `dateTime`, `subject`, `idDoctor`, `idPatient`) VALUES
(1, '2024-05-12 14:50:00', 'Breathing issues', 3, 2),
(2, '2024-05-26 12:15:00', 'Heart problems', 4, 3),
(3, '2024-05-14 09:45:00', 'Sudden spots allover skin', 6, 6),
(4, '2024-05-02 10:30:00', 'Injured knee', 2, 4),
(5, '2024-05-16 12:00:00', 'Hair growth', 5, 7),
(6, '2024-04-26 10:45:00', 'Muscle pain', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` char(2) NOT NULL,
  `country_name` varchar(40) DEFAULT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `region_id`) VALUES
('AR', 'Argentina', 2),
('AU', 'Australia', 3),
('BE', 'Belgium', 1),
('BR', 'Brazil', 2),
('CA', 'Canada', 2),
('CH', 'Switzerland', 1),
('CN', 'China', 3),
('DE', 'Germany', 1),
('DK', 'Denmark', 1),
('EG', 'Egypt', 4),
('FR', 'France', 1),
('HK', 'HongKong', 3),
('IL', 'Israel', 4),
('IN', 'India', 3),
('IT', 'Italy', 1),
('JP', 'Japan', 3),
('KW', 'Kuwait', 4),
('MX', 'Mexico', 2),
('NG', 'Nigeria', 4),
('NL', 'Netherlands', 1),
('SG', 'Singapore', 3),
('UK', 'United Kingdom', 1),
('US', 'United States of America', 2),
('ZM', 'Zambia', 4),
('ZW', 'Zimbabwe', 4);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `location_id`) VALUES
(1, 'Emergency', 1700),
(2, 'Surgery', 1800),
(3, 'Internal medicine', 1700),
(4, 'Obstetrics & Gynecology', 2400),
(5, 'Pediatrics', 1500),
(6, 'Radiology', 1400),
(7, 'Oncology', 2700),
(8, 'Neurology', 2500),
(9, 'Dermatology', 1700),
(10, 'Urology', 1700),
(11, 'Cardiology', 1700);

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE `dependents` (
  `dependent_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `relationship` varchar(25) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`dependent_id`, `first_name`, `last_name`, `relationship`, `employee_id`) VALUES
(1, 'Penelope', 'Gietz', 'Child', 206),
(2, 'Nick', 'Higgins', 'Child', 205),
(3, 'Ed', 'Whalen', 'Child', 200),
(4, 'Jennifer', 'King', 'Child', 100),
(5, 'Johnny', 'Kochhar', 'Child', 101),
(6, 'Bette', 'De Haan', 'Child', 102),
(7, 'Grace', 'Faviet', 'Child', 109),
(8, 'Matthew', 'Chen', 'Child', 110),
(9, 'Joe', 'Sciarra', 'Child', 111),
(10, 'Christian', 'Urman', 'Child', 112),
(11, 'Zero', 'Popp', 'Child', 113),
(12, 'Karl', 'Greenberg', 'Child', 108),
(13, 'Uma', 'Mavris', 'Child', 203),
(14, 'Vivien', 'Hunold', 'Child', 103),
(15, 'Cuba', 'Ernst', 'Child', 104),
(16, 'Fred', 'Austin', 'Child', 105),
(17, 'Helen', 'Pataballa', 'Child', 106),
(18, 'Dan', 'Lorentz', 'Child', 107),
(19, 'Bob', 'Hartstein', 'Child', 201),
(20, 'Lucille', 'Fay', 'Child', 202),
(21, 'Kirsten', 'Baer', 'Child', 204),
(22, 'Elvis', 'Khoo', 'Child', 115),
(23, 'Sandra', 'Baida', 'Child', 116),
(24, 'Cameron', 'Tobias', 'Child', 117),
(25, 'Kevin', 'Himuro', 'Child', 118),
(26, 'Rip', 'Colmenares', 'Child', 119),
(27, 'Julia', 'Raphaely', 'Child', 114),
(28, 'Woody', 'Russell', 'Child', 145),
(29, 'Alec', 'Partners', 'Child', 146),
(30, 'Sandra', 'Taylor', 'Child', 176);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `hire_date` date NOT NULL,
  `job_id` int(11) NOT NULL,
  `salary` decimal(8,2) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `email`, `phone_number`, `hire_date`, `job_id`, `salary`, `manager_id`, `department_id`) VALUES
(100, 'Steven', 'King', 'steven.king@sqltutorial.org', '515.123.4567', '1987-06-17', 4, '24000.00', NULL, 9),
(101, 'Neena', 'Kochhar', 'neena.kochhar@sqltutorial.org', '515.123.4568', '1989-09-21', 5, '17000.00', 100, 9),
(102, 'Lex', 'De Haan', 'lex.de haan@sqltutorial.org', '515.123.4569', '1993-01-13', 5, '17000.00', 100, 9),
(103, 'Alexander', 'Hunold', 'alexander.hunold@sqltutorial.org', '590.423.4567', '1990-01-03', 9, '9000.00', 102, 6),
(104, 'Bruce', 'Ernst', 'bruce.ernst@sqltutorial.org', '590.423.4568', '1991-05-21', 9, '6000.00', 103, 6),
(105, 'David', 'Austin', 'david.austin@sqltutorial.org', '590.423.4569', '1997-06-25', 9, '4800.00', 103, 6),
(106, 'Valli', 'Pataballa', 'valli.pataballa@sqltutorial.org', '590.423.4560', '1998-02-05', 9, '4800.00', 103, 6),
(107, 'Diana', 'Lorentz', 'diana.lorentz@sqltutorial.org', '590.423.5567', '1999-02-07', 9, '4200.00', 103, 6),
(108, 'Nancy', 'Greenberg', 'nancy.greenberg@sqltutorial.org', '515.124.4569', '1994-08-17', 7, '12000.00', 101, 10),
(109, 'Daniel', 'Faviet', 'daniel.faviet@sqltutorial.org', '515.124.4169', '1994-08-16', 6, '9000.00', 108, 10),
(110, 'John', 'Chen', 'john.chen@sqltutorial.org', '515.124.4269', '1997-09-28', 6, '8200.00', 108, 10),
(111, 'Ismael', 'Sciarra', 'ismael.sciarra@sqltutorial.org', '515.124.4369', '1997-09-30', 6, '7700.00', 108, 10),
(112, 'Jose Manuel', 'Urman', 'jose manuel.urman@sqltutorial.org', '515.124.4469', '1998-03-07', 6, '7800.00', 108, 10),
(113, 'Luis', 'Popp', 'luis.popp@sqltutorial.org', '515.124.4567', '1999-12-07', 6, '6900.00', 108, 10),
(114, 'Den', 'Raphaely', 'den.raphaely@sqltutorial.org', '515.127.4561', '1994-12-07', 14, '11000.00', 100, 3),
(115, 'Alexander', 'Khoo', 'alexander.khoo@sqltutorial.org', '515.127.4562', '1995-05-18', 13, '3100.00', 114, 3),
(116, 'Shelli', 'Baida', 'shelli.baida@sqltutorial.org', '515.127.4563', '1997-12-24', 13, '2900.00', 114, 3),
(117, 'Sigal', 'Tobias', 'sigal.tobias@sqltutorial.org', '515.127.4564', '1997-07-24', 13, '2800.00', 114, 3),
(118, 'Guy', 'Himuro', 'guy.himuro@sqltutorial.org', '515.127.4565', '1998-11-15', 13, '2600.00', 114, 3),
(119, 'Karen', 'Colmenares', 'karen.colmenares@sqltutorial.org', '515.127.4566', '1999-08-10', 13, '2500.00', 114, 3),
(120, 'Matthew', 'Weiss', 'matthew.weiss@sqltutorial.org', '650.123.1234', '1996-07-18', 19, '8000.00', 100, 5),
(121, 'Adam', 'Fripp', 'adam.fripp@sqltutorial.org', '650.123.2234', '1997-04-10', 19, '8200.00', 100, 5),
(122, 'Payam', 'Kaufling', 'payam.kaufling@sqltutorial.org', '650.123.3234', '1995-05-01', 19, '7900.00', 100, 5),
(123, 'Shanta', 'Vollman', 'shanta.vollman@sqltutorial.org', '650.123.4234', '1997-10-10', 19, '6500.00', 100, 5),
(126, 'Irene', 'Mikkilineni', 'irene.mikkilineni@sqltutorial.org', '650.124.1224', '1998-09-28', 18, '2700.00', 120, 5),
(145, 'John', 'Russell', 'john.russell@sqltutorial.org', NULL, '1996-10-01', 15, '14000.00', 100, 8),
(146, 'Karen', 'Partners', 'karen.partners@sqltutorial.org', NULL, '1997-01-05', 15, '13500.00', 100, 8),
(176, 'Jonathon', 'Taylor', 'jonathon.taylor@sqltutorial.org', NULL, '1998-03-24', 16, '8600.00', 100, 8),
(177, 'Jack', 'Livingston', 'jack.livingston@sqltutorial.org', NULL, '1998-04-23', 16, '8400.00', 100, 8),
(178, 'Kimberely', 'Grant', 'kimberely.grant@sqltutorial.org', NULL, '1999-05-24', 16, '7000.00', 100, 8),
(179, 'Charles', 'Johnson', 'charles.johnson@sqltutorial.org', NULL, '2000-01-04', 16, '6200.00', 100, 8),
(192, 'Sarah', 'Bell', 'sarah.bell@sqltutorial.org', '650.501.1876', '1996-02-04', 17, '4000.00', 123, 5),
(193, 'Britney', 'Everett', 'britney.everett@sqltutorial.org', '650.501.2876', '1997-03-03', 17, '3900.00', 123, 5),
(200, 'Jennifer', 'Whalen', 'jennifer.whalen@sqltutorial.org', '515.123.4444', '1987-09-17', 3, '4400.00', 101, 1),
(201, 'Michael', 'Hartstein', 'michael.hartstein@sqltutorial.org', '515.123.5555', '1996-02-17', 10, '13000.00', 100, 2),
(202, 'Pat', 'Fay', 'pat.fay@sqltutorial.org', '603.123.6666', '1997-08-17', 11, '6000.00', 201, 2),
(203, 'Susan', 'Mavris', 'susan.mavris@sqltutorial.org', '515.123.7777', '1994-06-07', 8, '6500.00', 101, 4),
(204, 'Hermann', 'Baer', 'hermann.baer@sqltutorial.org', '515.123.8888', '1994-06-07', 12, '10000.00', 101, 7),
(205, 'Shelley', 'Higgins', 'shelley.higgins@sqltutorial.org', '515.123.8080', '1994-06-07', 2, '12000.00', 101, 11),
(206, 'William', 'Gietz', 'william.gietz@sqltutorial.org', '515.123.8181', '1994-06-07', 1, '8300.00', 205, 11);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(35) NOT NULL,
  `min_salary` decimal(8,2) DEFAULT NULL,
  `max_salary` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `min_salary`, `max_salary`) VALUES
(1, 'Public Accountant', '4200.00', '9000.00'),
(2, 'Accounting Manager', '8200.00', '16000.00'),
(3, 'Administration Assistant', '3000.00', '6000.00'),
(4, 'President', '20000.00', '40000.00'),
(5, 'Administration Vice President', '15000.00', '30000.00'),
(6, 'Accountant', '4200.00', '9000.00'),
(7, 'Finance Manager', '8200.00', '16000.00'),
(8, 'Human Resources Representative', '4000.00', '9000.00'),
(9, 'Programmer', '4000.00', '10000.00'),
(10, 'Marketing Manager', '9000.00', '15000.00'),
(11, 'Marketing Representative', '4000.00', '9000.00'),
(12, 'Public Relations Representative', '4500.00', '10500.00'),
(13, 'Purchasing Clerk', '2500.00', '5500.00'),
(14, 'Purchasing Manager', '8000.00', '15000.00'),
(15, 'Sales Manager', '10000.00', '20000.00'),
(16, 'Sales Representative', '6000.00', '12000.00'),
(17, 'Shipping Clerk', '2500.00', '5500.00'),
(18, 'Stock Clerk', '2000.00', '5000.00'),
(19, 'Stock Manager', '5500.00', '8500.00');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `street_address` varchar(40) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `state_province` varchar(25) DEFAULT NULL,
  `country_id` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `street_address`, `postal_code`, `city`, `state_province`, `country_id`) VALUES
(1400, '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US'),
(1500, '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US'),
(1700, '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US'),
(1800, '147 Spadina Ave', 'M5V 2L7', 'Toronto', 'Ontario', 'CA'),
(2400, '8204 Arthur St', 'S47SJ', 'London', NULL, 'UK'),
(2500, 'Magdalen Centre, The Oxford Science Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'UK'),
(2700, 'Schwanthalerstr. 7031', '80925', 'Munich', 'Bavaria', 'DE');

-- --------------------------------------------------------

--
-- Table structure for table `medicalHistory`
--

CREATE TABLE `medicalHistory` (
  `ID` int(11) NOT NULL,
  `investigationReason` text NOT NULL,
  `previousInvestigationDate` date NOT NULL,
  `doctorsNotes` text NOT NULL,
  `idDoctor` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalHistory`
--

INSERT INTO `medicalHistory` (`ID`, `investigationReason`, `previousInvestigationDate`, `doctorsNotes`, `idDoctor`, `idPatient`) VALUES
(1, 'Mole checkup.', '2024-02-24', 'No concerns or advisories.', 2, 4),
(2, 'Rash on skin.', '2024-03-15', 'Keep reapplying subscribed cream.', 3, 8),
(3, 'Injured Leg', '2024-11-22', 'Keep leg well rested.', 4, 3),
(4, 'Chemical in eye socket', '2024-07-30', 'Kepp applying eye drops four times a day', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(100) NOT NULL,
  `phoneNumber` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` tinytext NOT NULL,
  `registeredDoctor` tinytext NOT NULL,
  `postCode` char(8) NOT NULL,
  `address_` varchar(45) NOT NULL,
  `firstName` tinytext NOT NULL,
  `lastName` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `phoneNumber`, `email`, `dateOfBirth`, `gender`, `registeredDoctor`, `postCode`, `address_`, `firstName`, `lastName`) VALUES
(1, '+442234358356', 'JamieHudson@example.com', '1998-12-25', 'M', 'Doc Hudson', 'D75WD', '24 Cradle Lane', 'Jamie', 'Hudson'),
(2, '+449987876543', 'DavidCrossie@example.com', '2002-11-02', 'M', 'Daniel Bedile', 'S56TL', '101 Zoo Street', 'David', 'Crossie'),
(3, '+44121345392', 'PeterHire@example.com', '2004-07-03', 'M', 'Jacob Alsop', 'N81QP', '74 Runtop Lane', 'Peter', 'Hire'),
(4, '+44435432665', 'JakeAllstar@example.com', '2000-01-04', 'M', 'Craig Crossie', 'W37TR', '45 Zebra Street', 'Jake', 'Allstar'),
(5, '+44833489543', 'RichardCarlo@example.com', '2023-04-01', 'M', 'Joseph Ester', 'T53DF', '12 Crystal Lane', 'Richard', 'Carlo'),
(6, '+44234956154', 'JustinGrey@example.com', '1990-06-20', 'M', 'Mohammed Eldo', 'B72OL', '214 Distant Street', 'Justin', 'Grey'),
(7, '+44565734436', 'MilliePlatts@example.com', '1985-10-15', 'F', 'Joseph Ester', 'L29BN', '02 View Street', 'Millie', 'Platts'),
(8, '+44676232934', 'ImogenDixon@example.com', '1974-08-26', 'F', 'Daniel Bedile', 'O75DM', '92 Curfer Street', 'Imogen', 'Dixon');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `ID` int(11) NOT NULL,
  `treatmentID` int(11) NOT NULL,
  `prescriptionStartDate` datetime NOT NULL,
  `prescriptionEndDate` datetime NOT NULL,
  `dosage` char(6) NOT NULL,
  `strength` varchar(45) NOT NULL,
  `form` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`ID`, `treatmentID`, `prescriptionStartDate`, `prescriptionEndDate`, `dosage`, `strength`, `form`) VALUES
(1, 1, '2024-05-16 00:00:00', '2024-05-30 00:00:00', '2 tabl', '10mg', 'tablets'),
(2, 2, '2024-04-20 00:00:00', '2024-05-15 00:00:00', '2 tabl', '500mg', 'tablets');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Europe'),
(2, 'Americas'),
(3, 'Asia'),
(4, 'Middle East and Africa');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ID` int(11) NOT NULL,
  `Diagnosis` tinytext NOT NULL,
  `healthAssessment` text,
  `tests` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ID`, `Diagnosis`, `healthAssessment`, `tests`) VALUES
(1, 'Suffering from stress management', 'Need to work on breathing patterns and distractions from stress-causing actions', 'None'),
(2, 'Possible heart condition', 'Avoid intensive exercise', 'ECG'),
(3, 'Possible heat spots', 'Keep aware of any changes', 'None'),
(4, 'Possible breakage', 'Keep leg rested and hold ice pack within towel onto leg', 'Xray'),
(5, 'Possible lack of healthy diet', 'Pay attention to diet', 'Bloods'),
(6, 'Muscle strain', 'Avoid intensive workload or long periods of walking/ standing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `firstName` tinytext NOT NULL,
  `lastName` tinytext NOT NULL,
  `phoneNumber` tinytext NOT NULL,
  `email` char(30) NOT NULL,
  `gender` tinytext NOT NULL,
  `staffRole` tinytext NOT NULL,
  `salary` int(11) NOT NULL,
  `hireDate` datetime NOT NULL,
  `department_id` int(11) NOT NULL,
  `staffPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `firstName`, `lastName`, `phoneNumber`, `email`, `gender`, `staffRole`, `salary`, `hireDate`, `department_id`, `staffPassword`) VALUES
(1, 'Doc', 'Hudson', '+44275283752', 'DocHudson@example.com', 'M', 'Doctor', 22000, '2024-07-15 12:30:00', 5, '1212'),
(2, 'Craig', 'Crossie', '+44273648626', 'CraigCrossie@example.com', 'M', 'General Practitioner', 20000, '2024-12-23 14:00:00', 7, 'ssfs'),
(3, 'Daniel', 'Bedile', '+44274927455', 'DanielBedile@example.com', 'M', 'Doctor', 32000, '2024-05-20 11:00:00', 8, 'wrew'),
(4, 'Jacob', 'Alsop', '+44334564347', 'JacobAlsop@example.com', 'M', 'Doctor', 35000, '0000-00-00 00:00:00', 2, 'ewrwe'),
(5, 'Joseph', 'Ester', '+44223433578', 'JosephEster@example.com', 'M', 'General Practitioner', 17000, '0000-00-00 00:00:00', 4, 'wrwer'),
(6, 'Mohammed', 'Eldo', '+44334563844', 'MohammedEldo@example.com', 'M', 'Consultant', 23000, '0000-00-00 00:00:00', 5, 'sdfsf'),
(7, 'Syafiq', 'Zolkeply', '+4455678871', 'syafiq@gmail.com', 'Male', 'Doctor', 2344, '2022-01-18 00:00:00', 9, '\\func '),
(9, 'Geoff', 'Michaelson', '+47718275722', 'cheese@gmail.com', 'M', 'Admin', 100000, '0000-00-00 00:00:00', 1, 'hello123!');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `ID` int(11) NOT NULL,
  `medication` tinytext,
  `treatmentType` tinytext NOT NULL,
  `followUp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`ID`, `medication`, `treatmentType`, `followUp`) VALUES
(1, 'Co codamol', 'Medication', 'Phone call checkup'),
(2, 'Penicillin', 'Medication', 'physical appointment'),
(3, NULL, 'physical therapy', 'physical appointment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `patient_id`, `username`, `password_hash`) VALUES
(5, NULL, 'Geoff', '8e7847119b10e2bc93c11a9c0a25515ed4c68a1fa0c8b0b308fc8f4bc03d2710'),
(7, NULL, 'Mike', 'f905024bd96c770881009fd87b22dd8d6831595072312a251cd3fa37f6861bc5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idDoctor_idx` (`idDoctor`),
  ADD KEY `idPatient_idx` (`idPatient`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD PRIMARY KEY (`dependent_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `medicalHistory`
--
ALTER TABLE `medicalHistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idPatient_idx` (`idPatient`),
  ADD KEY `idDoctor_idx` (`idDoctor`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `treatmentID_idx` (`treatmentID`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_UNIQUE` (`username`),
  ADD KEY `user_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dependents`
--
ALTER TABLE `dependents`
  MODIFY `dependent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2701;
--
-- AUTO_INCREMENT for table `medicalHistory`
--
ALTER TABLE `medicalHistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `id_Doctor` FOREIGN KEY (`idDoctor`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_Patient` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `locations` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dependents`
--
ALTER TABLE `dependents`
  ADD CONSTRAINT `dependents_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`manager_id`) REFERENCES `employees` (`employee_id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalHistory`
--
ALTER TABLE `medicalHistory`
  ADD CONSTRAINT `idDoctor` FOREIGN KEY (`idDoctor`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idPatient` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `treatmentID` FOREIGN KEY (`treatmentID`) REFERENCES `treatment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `bookingAppointmentID` FOREIGN KEY (`ID`) REFERENCES `appointment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `ID` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
