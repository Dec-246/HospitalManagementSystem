-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql8.freesqldatabase.com
-- Generation Time: May 10, 2024 at 12:31 AM
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
-- Table structure for table `admin_`
--

CREATE TABLE `admin_` (
  `adminID` int(10) UNSIGNED NOT NULL,
  `adminPassword` varchar(60) NOT NULL,
  `contactNumber` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `staffID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_`
--

INSERT INTO `admin_` (`adminID`, `adminPassword`, `contactNumber`, `email`, `staffID`) VALUES
(1, 'one', '+44142142452', 'Lando@admin.com', NULL),
(2, '$2y$10$4psRpdn7R0qjkYDS8Seo6uaqCqnC3S9B4YoimjDysHiQwyW.zt4NG', '+44333333333', 'admin@admin.com', NULL),
(3, '$2y$10$UYVGZFQLuyKYdz.A0gla..jUoNJUrQ6UUcOxku8jsTJYlKsbK8F5a', '+44333333333', 'admin@test.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `subject` tinytext NOT NULL,
  `idPatient` int(11) DEFAULT NULL,
  `idDoctor` int(11) DEFAULT NULL,
  `idTreatment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `dateTime`, `subject`, `idPatient`, `idDoctor`, `idTreatment`) VALUES
(1, '2024-05-12 14:50:00', 'Breathing issues', 2, 4, NULL),
(2, '2024-05-26 12:15:00', 'Heart problems', 3, 3, NULL),
(3, '2024-05-14 09:45:00', 'Sudden spots allover skin', 6, 1, NULL),
(4, '2024-05-02 10:30:00', 'Injured knee', 4, 6, NULL),
(5, '2024-05-16 12:00:00', 'Hair growth', 7, 2, NULL),
(6, '2024-04-26 10:45:00', 'Muscle pain', 1, 4, NULL),
(8, '2024-05-16 00:00:00', 'Swelling', 4, 2, NULL),
(9, '2024-05-09 00:00:00', 'Injured ankle', 6, 1, NULL),
(10, '2024-05-16 00:00:00', 'Swelling', 3, 4, NULL),
(11, '0000-00-00 00:00:00', '', NULL, 5, NULL);

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
-- Table structure for table `pastAppointments`
--

CREATE TABLE `pastAppointments` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `doctorNotes` tinytext,
  `Advisories` tinytext NOT NULL,
  `patientID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastAppointments`
--

INSERT INTO `pastAppointments` (`ID`, `date`, `doctorNotes`, `Advisories`, `patientID`) VALUES
(1, '2023-12-26', NULL, 'Rest for 2 weeks', 1),
(2, '2024-02-12', NULL, 'Apply less pressure to muscle', 2),
(3, '2023-10-06', NULL, 'Keep ice packs rested on sore area', 3),
(4, '2024-10-16', NULL, 'Eat more healthy foods', 2),
(5, '2023-07-30', NULL, 'Exercise more often', 5),
(6, '2023-02-06', NULL, 'Stretch daily', 2);

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
  `lastName` tinytext NOT NULL,
  `assignedStaffID` int(11) DEFAULT NULL,
  `patientPassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `phoneNumber`, `email`, `dateOfBirth`, `gender`, `registeredDoctor`, `postCode`, `address_`, `firstName`, `lastName`, `assignedStaffID`, `patientPassword`) VALUES
(1, '+442234358356', 'JamieHudson@example.com', '1998-12-25', 'M', 'Doc Hudson', 'D75WD', '24 Cradle Lane', 'Jamie', 'Hudson', 1, 'asdasd'),
(2, '+449987876543', 'DavidCrossie@example.com', '2002-11-02', 'M', 'Daniel Bedile', 'S56TL', '101 Zoo Street', 'David', 'Crossie', 3, '424rw'),
(3, '+44121345392', 'PeterHire@example.com', '2004-07-03', 'M', 'Jacob Alsop', 'N81QP', '74 Runtop Lane', 'Peter', 'Hire', 4, '42342ded'),
(4, '+44435432665', 'JakeAllstar@example.com', '2000-01-04', 'M', 'Craig Crossie', 'W37TR', '45 Zebra Street', 'Jake', 'Allstar', 2, 'wewr'),
(5, '+44833489543', 'RichardCarlo@example.com', '2023-04-01', 'M', 'Joseph Ester', 'T53DF', '12 Crystal Lane', 'Richard', 'Carlo', 5, '23eqwe'),
(6, '+44234956154', 'JustinGrey@example.com', '1990-06-20', 'M', 'Mohammed Eldo', 'B72OL', '214 Distant Street', 'Justin', 'Grey', 6, '23424qqw'),
(7, '+44565734436', 'MilliePlatts@example.com', '1985-10-15', 'F', 'Joseph Ester', 'L29BN', '02 View Street', 'Millie', 'Platts', 5, '32ewq'),
(8, '+44676232934', 'ImogenDixon@example.com', '1974-08-26', 'F', 'Daniel Bedile', 'O75DM', '92 Curfer Street', 'Imogen', 'Dixon', 3, '42eqeqweq'),
(43, '', 'test@test.com', '0000-00-00', '', '', '', '', '', '', NULL, '$2y$10$JJ7meqkAKX9a5D5Dsv5EW.AGB2ajyZuN9G6WNb'),
(44, '', 'test1@example.com', '0000-00-00', '', '', '', '', '', '', NULL, '$2y$10$2jGISCwG/tXyj1qeZzrsM.Fy4mfOwOYoFzdxoq61fGJtSnnSqqHy6'),
(45, '', 'test2@example.com', '0000-00-00', '', '', '', '', '', '', NULL, '$2y$10$H/psWaUNhmy.OyBJQBjsaO9lKyVNaZIXxkxMbdRa8p0jX/F0dz9CW'),
(46, '', 'testing@testing.com', '0000-00-00', '', '', '', '', '', '', NULL, '$2y$10$U/kmLs.N9.o9.PMFx9NLUOfvxyL0KEkevxfo6QODFHusha6TfrKq2'),
(47, '+44123123123', 'Millie@test.com', '2020-06-11', 'Female', '', 'asd6a7a', 'asd7asdf', 'Millie', 'Hopkins', NULL, '$2y$10$bX2LoDScG7EIfK1U4np9juBfgLIy2y/8ise97u30sdpiY0JnuVUai');

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
(1, 1, '2024-05-16 00:00:00', '2024-05-30 00:00:00', '2 tabl', '10mg', 'tablets');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ID` int(11) NOT NULL,
  `Diagnosis` tinytext NOT NULL,
  `healthAssessment` text,
  `tests` tinytext,
  `appointmentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ID`, `Diagnosis`, `healthAssessment`, `tests`, `appointmentID`) VALUES
(1, 'Suffering from stress management', 'Need to work on breathing patterns and distractions from stress-causing actions', 'None', 1),
(2, 'Possible heart condition', 'Avoid intensive exercise', 'ECG', 2),
(3, 'Possible heat spots', 'Keep aware of any changes', 'None', 3),
(4, 'Possible breakage', 'Keep leg rested and hold ice pack within towel onto leg', 'Xray', 2),
(5, 'Possible lack of healthy diet', 'Pay attention to diet', 'Bloods', 5),
(6, 'Muscle strain', 'Avoid intensive workload or long periods of walking/ standing', 'None', 2);

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
  `staffPassword` varchar(60) NOT NULL
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
(9, 'Geoff', 'Michaelson', '+47718275722', 'cheese@gmail.com', 'M', 'Admin', 100000, '0000-00-00 00:00:00', 1, 'hello123!'),
(11, 'James', 'Bob', '+44123123123', 'JamesB@example.com', 'M', 'Doctor', 6545645, '2024-05-17 00:00:00', 2, '$2y$10$2OZ1BUPNSnmNJZ3O1m5EaOuAtm83ja11z6mNPZ'),
(16, 'Millie', 'Hob', '+44123123123', 'MH@gmail.com', 'Female', 'Doctor', 31231, '2024-05-01 00:00:00', 2, '$2y$10$NO8Bv6voSKyPvbTChJUPTeNtrTYMUHxApLrxYJ'),
(17, 'Finley', 'Blob', '+44183182341', 'FinleyB@gmail.com', 'Male', 'Doctor', 23423, '2024-05-15 00:00:00', 2, '$2y$10$DNBb9c3yARxWgrNFTo2p8OfK6.XyRrh2ql1rN9'),
(18, 'Daisy', 'Croe', '+44262363936', 'Daisy@test.com', 'Female', 'Consultant', 32000, '2024-05-10 00:00:00', 3, '$2y$10$qvMIpFbUNv32SQpyZtNizumsWXFJ8nqmSV12GKt5D9XR2fs1KE4tC');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_`
--
ALTER TABLE `admin_`
  ADD PRIMARY KEY (`adminID`),
  ADD KEY `staffID_idx` (`staffID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idPatient_idx` (`idPatient`),
  ADD KEY `idDoctor_idx` (`idDoctor`),
  ADD KEY `idTreatment_idx` (`idTreatment`);

--
-- Indexes for table `medicalHistory`
--
ALTER TABLE `medicalHistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idPatient_idx` (`idPatient`),
  ADD KEY `idDoctor_idx` (`idDoctor`);

--
-- Indexes for table `pastAppointments`
--
ALTER TABLE `pastAppointments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `patientID_idx` (`patientID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_idx` (`assignedStaffID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `treatmentID_idx` (`treatmentID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `appointmentID_idx` (`appointmentID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_`
--
ALTER TABLE `admin_`
  MODIFY `adminID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `medicalHistory`
--
ALTER TABLE `medicalHistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pastAppointments`
--
ALTER TABLE `pastAppointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_`
--
ALTER TABLE `admin_`
  ADD CONSTRAINT `staffID` FOREIGN KEY (`staffID`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `idTreatment` FOREIGN KEY (`idTreatment`) REFERENCES `treatment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_doctor` FOREIGN KEY (`idDoctor`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_patient` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalHistory`
--
ALTER TABLE `medicalHistory`
  ADD CONSTRAINT `idDoctor` FOREIGN KEY (`idDoctor`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idPatient` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pastAppointments`
--
ALTER TABLE `pastAppointments`
  ADD CONSTRAINT `patientID` FOREIGN KEY (`patientID`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `assignedStaffID` FOREIGN KEY (`assignedStaffID`) REFERENCES `staff` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `treatmentID` FOREIGN KEY (`treatmentID`) REFERENCES `treatment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `appointmentID` FOREIGN KEY (`appointmentID`) REFERENCES `appointment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
