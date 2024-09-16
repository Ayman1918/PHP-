-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 12:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbl_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(8, 'Islamabad'),
(10, 'multan'),
(11, 'karachi'),
(14, 'faislabad city');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'Ayman12@gmail.com', 'yahoo123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoinment`
--

CREATE TABLE `tbl_appoinment` (
  `app_id` int(11) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `patien_email` varchar(50) NOT NULL,
  `patient_phone` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `app_date` varchar(50) NOT NULL,
  `app_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appoinment`
--

INSERT INTO `tbl_appoinment` (`app_id`, `patient_id`, `patien_email`, `patient_phone`, `dr_id`, `app_date`, `app_time`, `status`) VALUES
(4, 11, 'khan23@gmail.com', 122222, 9, '2023-08-25', '13:13', 0),
(5, 9, 'khan23@gmail.com', 122222, 5, '2023-08-25', '13:13', 0),
(7, 17, 'javeria@gmail.com', 456789, 11, '2023-09-11', '16:30', 0),
(9, 14, 'jk7777123@gmail.com', 4534556, 7, '2023-11-01', '15:49', 1),
(24, 16, 'db123@gmail.com', 1345679, 7, '2023-10-25', '16:07', 0),
(33, 9, 'khan23@gmail.com', 122222, 5, '2023-08-25', '13:13', 0),
(34, 9, 'nawab33@yahoo.com', 123456, 7, '10/21/2023', '10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_phone` int(11) NOT NULL,
  `dr_city` int(11) NOT NULL,
  `dr_email` varchar(50) NOT NULL,
  `dr_password` varchar(50) NOT NULL,
  `dr_Specialist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`dr_id`, `dr_name`, `dr_phone`, `dr_city`, `dr_email`, `dr_password`, `dr_Specialist`) VALUES
(5, 'Ali khan', 21568745, 8, 'ali@gmail.com', 'abc123', 'Cardiologist'),
(6, 'bilal', 21358999, 11, 'bilal@gmail.com', 'bilal123', 'Pathologist'),
(7, '  Zeeshan ALI', 321654987, 10, 'zeeshan@gmail.com', 'zeeshan123', 'Dentist'),
(9, 'shariq', 32158, 11, 'sh@gmail.com', '12854', 'Neurologist\n'),
(10, 'komal ', 123678, 8, 'komal12@gmail.com', '123123', 'Family medicine'),
(11, ' Ayman', 12121212, 11, 'ayman1@gmail.com', '123456', 'Infectious disease'),
(13, 'sana khan', 9832145, 8, 'sana1@gmail.com', '12345', 'Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_email` varchar(50) NOT NULL,
  `f_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `f_name`, `f_email`, `f_message`) VALUES
(1, 'Taha', 'taha@gmail.com', 'hello world...!'),
(2, 'Ayman Waseem', 'abc@gmail.com', 'abc xyz 123\r\n'),
(3, 'Jaweria ', 'na11@gmail.com', 'thanks!'),
(4, 'Jaweria ', 'na11@gmail.com', 'thanks!'),
(5, 'Jaweria ', 'na11@gmail.com', 'thanks!'),
(6, 'Jaweria ', 'na11@gmail.com', 'thanks!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_contact` int(11) NOT NULL,
  `patient_gender` varchar(50) NOT NULL,
  `patient_email` varchar(50) NOT NULL,
  `patient_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patient_id`, `patient_name`, `patient_contact`, `patient_gender`, `patient_email`, `patient_password`) VALUES
(9, 'ahmed khn', 321654987, 'Male', 'ahmed11@gmail.com', '111'),
(11, 'ahmed ali', 321654987, 'Male', 'ah@gmail.com', 'ahmed123'),
(14, 'jia', 1234567, 'Female', 'jk12@gmail.com', '234234'),
(16, 'Darab khan', 123456, 'Male', 'darab@gmail.com', '123098'),
(17, 'javeria', 456789, 'Female', 'javeria@gmail.com', '909090'),
(19, 'rubab ali', 123567, 'Female', 'rubab@gmail.com', '12345'),
(21, 'nazia sheik', 123456, 'Female', 'naz@gmail.com', '123451');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `dr_id` (`dr_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`dr_id`),
  ADD KEY `dr_city` (`dr_city`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  ADD CONSTRAINT `tbl_appoinment_ibfk_1` FOREIGN KEY (`dr_id`) REFERENCES `tbl_doctor` (`dr_id`),
  ADD CONSTRAINT `tbl_appoinment_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patient` (`patient_id`);

--
-- Constraints for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD CONSTRAINT `tbl_doctor_ibfk_1` FOREIGN KEY (`dr_city`) REFERENCES `city` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
