-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 05:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it3ahcts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(200) NOT NULL,
  `adminfullname` varchar(300) NOT NULL,
  `adminusername` varchar(300) NOT NULL,
  `adminpassword` varchar(200) NOT NULL,
  `admindept` varchar(200) NOT NULL,
  `adminstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminfullname`, `adminusername`, `adminpassword`, `admindept`, `adminstatus`) VALUES
(1, 'Kenneth Axl Virtucio', 'KennethAdmin', 'MarketingAdmin', 'MARKETING', 'ACTIVE'),
(2, 'Sebastian Villanueva', 'SebastianAdmin', 'PurchasingAdmin', 'PURCHASING', 'ACTIVE'),
(3, 'Darwin Luis M. Sanchez', 'DarwinAdmin', 'defaultpass123', 'ACCOUNTINGandFINANCE', 'ACTIVE'),
(4, 'Anne Queny C. Alejandre', 'QuenyAdmin', 'HumanResourcesAdmin', 'HUMANRESOURCES', 'ACTIVE'),
(5, 'Joshua Abraham L. Mosca', 'JoshuaAdmin', 'ProductionAdmin', 'PRODUCTION', 'ACTIVE'),
(6, 'Franze V. Garcia', 'FranzeSuperAdmin', 'superman123', 'SUPERADMIN', 'ACTIVE'),
(7, 'Jheyren S. Calanog', 'JheyrenAdmin', 'defaultpass123', 'ACCOUNTINGandFINANCE', 'ACTIVE'),
(8, 'Renzo L. De Ocampo', 'RenzoAdmin', 'defaultpass123', 'ACCOUNTINGandFINANCE', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `af_fund`
--

CREATE TABLE `af_fund` (
  `fundid` int(11) NOT NULL,
  `fundamount` int(255) NOT NULL,
  `funddate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `af_fund`
--

INSERT INTO `af_fund` (`fundid`, `fundamount`, `funddate`) VALUES
(1, 49971300, 'May 30, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `af_loan`
--

CREATE TABLE `af_loan` (
  `requestid` int(11) NOT NULL,
  `requestname` varchar(500) NOT NULL,
  `requestdepartment` varchar(500) NOT NULL,
  `requestposition` varchar(250) NOT NULL,
  `requestemail` varchar(250) NOT NULL,
  `loanamount` int(250) NOT NULL,
  `requeststatus` varchar(250) NOT NULL,
  `requeststatushr` varchar(500) NOT NULL,
  `requestreason` varchar(1000) NOT NULL,
  `requestdateofassessment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `af_loan`
--

INSERT INTO `af_loan` (`requestid`, `requestname`, `requestdepartment`, `requestposition`, `requestemail`, `loanamount`, `requeststatus`, `requeststatushr`, `requestreason`, `requestdateofassessment`) VALUES
(5, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 500, 'APPROVED', '', 'Christmas Party', 'May 24, 2018'),
(6, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'DISAPPROVED', '', 'Christmas Party', 'May 24, 2018'),
(7, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 10000, '', '', 'For health bills', ''),
(8, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 250, '', '', 'For maintenance purposes', '');

-- --------------------------------------------------------

--
-- Table structure for table `af_payroll`
--

CREATE TABLE `af_payroll` (
  `employeeid` int(11) NOT NULL,
  `employeefullname` varchar(1000) NOT NULL,
  `employeedepartment` varchar(500) NOT NULL,
  `employeeposition` varchar(500) NOT NULL,
  `employeemail` varchar(500) NOT NULL,
  `employeerenderedhours` int(255) NOT NULL,
  `employeededuction` int(255) NOT NULL,
  `employeetax` int(250) NOT NULL,
  `employeeaddition` int(255) NOT NULL,
  `employeeinitialsalary` int(255) NOT NULL,
  `employeetaxated` int(250) NOT NULL,
  `employeefinalsalary` int(255) NOT NULL,
  `employeepayrelease` varchar(250) NOT NULL,
  `employeestatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `af_payroll`
--

INSERT INTO `af_payroll` (`employeeid`, `employeefullname`, `employeedepartment`, `employeeposition`, `employeemail`, `employeerenderedhours`, `employeededuction`, `employeetax`, `employeeaddition`, `employeeinitialsalary`, `employeetaxated`, `employeefinalsalary`, `employeepayrelease`, `employeestatus`) VALUES
(1, 'Monique Fontijon Pitel', 'Accounting and Finance', 'Staff', 'monique_pitel@dlsl.edu.ph', 160, 0, 5, 1500, 56000, 28000, 29500, 'June 2018', 'COMPUTED'),
(3, 'Janine Rosela Mendoza', 'Accounting and Finance', 'Staff', 'janine_mendoza@dlsl.edu.ph', 160, 0, 5, 1500, 56000, 28000, 29500, 'June 2018', 'COMPUTED');

-- --------------------------------------------------------

--
-- Table structure for table `af_payrollvariables`
--

CREATE TABLE `af_payrollvariables` (
  `varid` int(11) NOT NULL,
  `payrolltax` int(255) NOT NULL,
  `payrollrate` int(255) NOT NULL,
  `payrolladdition` int(255) NOT NULL,
  `payrollposition` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `af_payrollvariables`
--

INSERT INTO `af_payrollvariables` (`varid`, `payrolltax`, `payrollrate`, `payrolladdition`, `payrollposition`) VALUES
(1, 5, 350, 1500, 'Staff'),
(2, 5, 1000, 0, 'Office Head'),
(3, 5, 0, 0, 'Administrator'),
(4, 5, 350, 550, 'Laborer'),
(5, 5, 250, 0, 'Contructual');

-- --------------------------------------------------------

--
-- Table structure for table `af_requestbudget`
--

CREATE TABLE `af_requestbudget` (
  `requestid` int(11) NOT NULL,
  `requestname` varchar(500) NOT NULL,
  `requestdepartment` varchar(500) NOT NULL,
  `requestposition` varchar(250) NOT NULL,
  `requestemail` varchar(250) NOT NULL,
  `requestamount` int(250) NOT NULL,
  `requeststatus` varchar(250) NOT NULL,
  `requestreason` varchar(1000) NOT NULL,
  `requestdateofassessment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `af_requestbudget`
--

INSERT INTO `af_requestbudget` (`requestid`, `requestname`, `requestdepartment`, `requestposition`, `requestemail`, `requestamount`, `requeststatus`, `requestreason`, `requestdateofassessment`) VALUES
(37, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 550, 'APPROVED', 'Christmas Party', 'May 24, 2018'),
(38, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 500, 'APPROVED', 'Christmas Party', 'May 29, 2018'),
(43, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 250, 'APPROVED', 'Christmas Party', 'May 30, 2018'),
(44, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 250, 'DISAPPROVED', 'For maintenance purposes', 'May 30, 2018'),
(45, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 25000, 'APPROVED', 'For maintenance purposes', 'May 30, 2018'),
(46, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 250, 'APPROVED', 'For health bills', 'May 30, 2018'),
(47, 'Monique Fontijon Pitel', 'Accounting and Finance', 'Staff', 'monique_pitel@dlsl.edu.ph', 250, '', 'Christmas Party', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceid` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `employeename` varchar(255) NOT NULL,
  `timein` varchar(255) NOT NULL,
  `timeout` varchar(255) NOT NULL,
  `attendancedate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceid`, `employeeid`, `employeename`, `timein`, `timeout`, `attendancedate`) VALUES
(3, 7, 'Anne Queny Alejandre', '08:00', '16:00', '2018-05-07'),
(3, 7, 'Anne Queny Alejandre', '08:00', '16:00', '2018-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`fullname`, `email`, `contact`, `resume`, `id`) VALUES
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, '4. Design ethodolgy.pptx', 1),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'ALI_Minutes-of-the-Meeting_October.docx', 2),
('Khrystel Lubrin', 'khrystel.lubrin@dlsl.edu.ph', 915267899, 'careers.php', 3),
('l', 'l', 0, 'Bachelor_of_Science_ in_Information_Technology_2015-2016.pdf', 4),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, '4. Design ethodolgy.pptx', 1),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'ALI_Minutes-of-the-Meeting_October.docx', 2),
('Khrystel Lubrin', 'khrystel.lubrin@dlsl.edu.ph', 915267899, 'careers.php', 3),
('l', 'l', 0, 'Bachelor_of_Science_ in_Information_Technology_2015-2016.pdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Construction'),
(2, 'Hardware'),
(3, 'Electric Supplies'),
(4, 'Pipes and Fittings'),
(1, 'Construction'),
(2, 'Hardware'),
(3, 'Electric Supplies'),
(4, 'Pipes and Fittings'),
(1, 'Construction'),
(2, 'Hardware'),
(3, 'Electric Supplies'),
(4, 'Pipes and Fittings'),
(1, 'Construction'),
(2, 'Hardware'),
(3, 'Electric Supplies'),
(4, 'Pipes and Fittings');

-- --------------------------------------------------------

--
-- Table structure for table `comments_rd`
--

CREATE TABLE `comments_rd` (
  `comment_num` int(250) NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `customer_email` varchar(300) NOT NULL,
  `contactnum` varchar(300) NOT NULL,
  `comment_text` varchar(300) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_rd`
--

INSERT INTO `comments_rd` (`comment_num`, `customer_name`, `customer_email`, `contactnum`, `comment_text`, `date`, `time`, `status`) VALUES
(1, 'Keith Reyes', 'keithreyes@gmail.com', '09182273645', 'Excellent materials to choose from! ', 'June 7, 2018', '9:45:13am', 'APPROVED'),
(2, 'Noli Faustino', 'noli12@gmail.com', '09187798675', 'Best products for construction!', 'June 5, 2018', '11:15:10am', 'FOR APPROVAL'),
(5, 'Marc Atienza', 'marc_atienza@gmail.com', '09187765432', 'Has a high quality of materials for construction!!! ', 'June 6, 2018', '1:08:20pm', 'APPROVED'),
(7, 'Drince Duno', 'drince002@gmail.com', '09452236678', 'High quality materials for a better match!', 'June 2, 2018', '8:26:30pm', 'APPROVED'),
(9, 'Ericka Landicho', 'erickarizzelle@gmail.com', '09054676057', 'Amazing Products', 'June 7, 2018', '10:55:55am', 'APPROVED'),
(1, 'Keith Reyes', 'keithreyes@gmail.com', '09182273645', 'Excellent materials to choose from! ', 'June 7, 2018', '9:45:13am', 'APPROVED'),
(2, 'Noli Faustino', 'noli12@gmail.com', '09187798675', 'Best products for construction!', 'June 5, 2018', '11:15:10am', 'FOR APPROVAL'),
(5, 'Marc Atienza', 'marc_atienza@gmail.com', '09187765432', 'Has a high quality of materials for construction!!! ', 'June 6, 2018', '1:08:20pm', 'APPROVED'),
(7, 'Drince Duno', 'drince002@gmail.com', '09452236678', 'High quality materials for a better match!', 'June 2, 2018', '8:26:30pm', 'APPROVED'),
(9, 'Ericka Landicho', 'erickarizzelle@gmail.com', '09054676057', 'Amazing Products', 'June 7, 2018', '10:55:55am', 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE `customer_account` (
  `customerid` int(11) NOT NULL,
  `customerusername` varchar(255) NOT NULL,
  `customerpassword` varchar(255) NOT NULL,
  `customerstatus` varchar(255) NOT NULL,
  `customfirstname` varchar(255) NOT NULL,
  `customlastname` varchar(255) NOT NULL,
  `customercontact` int(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`customerid`, `customerusername`, `customerpassword`, `customerstatus`, `customfirstname`, `customlastname`, `customercontact`, `customeremail`) VALUES
(1, 'Ericka', 'user123', 'ACTIVE', 'Ericka', 'Landicho', 9238888, 'ericka_rizzelle_landicho@dlsl.edu.ph'),
(2, 'Khrysta', 'user123', 'ACTIVE', 'Khrystel', 'Lubrin', 905467605, 'khrystel.lubrin@dlsl.edu.ph'),
(1, 'Ericka', 'user123', 'ACTIVE', 'Ericka', 'Landicho', 9238888, 'ericka_rizzelle_landicho@dlsl.edu.ph'),
(2, 'Khrysta', 'user123', 'ACTIVE', 'Khrystel', 'Lubrin', 905467605, 'khrystel.lubrin@dlsl.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `home_phone` varchar(255) NOT NULL,
  `alternate_phone` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `sss` varchar(255) NOT NULL,
  `pagibig` varchar(255) NOT NULL,
  `philhealth` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `work_location` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `emergency_lastname` varchar(255) NOT NULL,
  `emergency_firstname` varchar(255) NOT NULL,
  `emergency_middlename` varchar(255) NOT NULL,
  `emergency_address` varchar(255) NOT NULL,
  `emergency_primary_phone` varchar(255) NOT NULL,
  `emergency_alternate_phone` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `lastname`, `firstname`, `middlename`, `address`, `home_phone`, `alternate_phone`, `email1`, `bday`, `civilstatus`, `sss`, `pagibig`, `philhealth`, `position`, `department`, `supervisor`, `work_location`, `work_phone`, `cellphone`, `email2`, `start_date`, `salary`, `emergency_lastname`, `emergency_firstname`, `emergency_middlename`, `emergency_address`, `emergency_primary_phone`, `emergency_alternate_phone`, `relationship`) VALUES
(3, 'De Sagun', 'Cristine', 'Perez', 'Tawilisan', '123-4567', '789-1011', 'cristine_desagun@dlsl.edu.ph', '2018-05-12', 'Single', '12-6584965-6', '123-456-789', '123-96854789-9', 'Staff', 'Human Resource', 'Mr. Garcia', 'Makati Building', '128-9685', '09568547985', 'cristine_desagun@dlsl.edu.ph', '2018-05-21', '25000', 'De Sagun', 'Lagrimas', 'Perez', 'Tawilisan', '255-9685', '156-9654', 'Mother'),
(4, 'Razel Eunice', 'Olea', 'Manalo', 'Tanauan', '965-9785', '789-9645', 'razel_eunice_olea@dlsl.edu.ph', '2018-05-05', 'Single', '456-9797976-96', '12-9655128-97', '7-7458966-96', 'Staff', 'Human Resorce', 'Mr. Garcia', 'Makati Building', '555-5555', '09999895854', 'razel_eunice_olea@dlsl.edu.ph', '2018-05-05', '25000', 'Olea', 'Mary', 'Manalo', 'Tanauan', '456-9874', '859-9654', 'Mother'),
(5, 'Narvez', 'Neil', 'Cuevas', 'Lipa', '857-9658', '254-6984', 'neil_narvaez@dlsl.edu.ph', '2018-05-04', 'Single', '123-9988854-98', '32-96857458-98', '12-99556471-7', 'Office Head', 'Research and Documentation', 'Mr. Garcia', 'Makating Building', '859-9874', '09175458963', 'neil_narvaez@dlsl.edu.ph', '2018-05-03', '35000', 'Narvaez', 'Ana', 'Sulayao', 'Lipa', '255-9874', '125-9873', 'Aunt'),
(6, 'ee', 'e', 'e', 'e', 'e', 'e', 'e@s.d', '2018-06-08', 'e', 'e', 'e', 'e', 'e', 'Purchasing', 'e', 'e', 'e', 'e', 'e@s.d', '2018-06-08', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(3, 'De Sagun', 'Cristine', 'Perez', 'Tawilisan', '123-4567', '789-1011', 'cristine_desagun@dlsl.edu.ph', '2018-05-12', 'Single', '12-6584965-6', '123-456-789', '123-96854789-9', 'Staff', 'Human Resource', 'Mr. Garcia', 'Makati Building', '128-9685', '09568547985', 'cristine_desagun@dlsl.edu.ph', '2018-05-21', '25000', 'De Sagun', 'Lagrimas', 'Perez', 'Tawilisan', '255-9685', '156-9654', 'Mother'),
(4, 'Razel Eunice', 'Olea', 'Manalo', 'Tanauan', '965-9785', '789-9645', 'razel_eunice_olea@dlsl.edu.ph', '2018-05-05', 'Single', '456-9797976-96', '12-9655128-97', '7-7458966-96', 'Staff', 'Human Resorce', 'Mr. Garcia', 'Makati Building', '555-5555', '09999895854', 'razel_eunice_olea@dlsl.edu.ph', '2018-05-05', '25000', 'Olea', 'Mary', 'Manalo', 'Tanauan', '456-9874', '859-9654', 'Mother'),
(5, 'Narvez', 'Neil', 'Cuevas', 'Lipa', '857-9658', '254-6984', 'neil_narvaez@dlsl.edu.ph', '2018-05-04', 'Single', '123-9988854-98', '32-96857458-98', '12-99556471-7', 'Office Head', 'Research and Documentation', 'Mr. Garcia', 'Makating Building', '859-9874', '09175458963', 'neil_narvaez@dlsl.edu.ph', '2018-05-03', '35000', 'Narvaez', 'Ana', 'Sulayao', 'Lipa', '255-9874', '125-9873', 'Aunt'),
(6, 'ee', 'e', 'e', 'e', 'e', 'e', 'e@s.d', '2018-06-08', 'e', 'e', 'e', 'e', 'e', 'Purchasing', 'e', 'e', 'e', 'e', 'e@s.d', '2018-06-08', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_availablejob`
--

CREATE TABLE `hrd_availablejob` (
  `JobID` int(11) NOT NULL,
  `JobPosition` varchar(255) NOT NULL,
  `JobStatus` varchar(255) NOT NULL,
  `JobNumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_availablejob`
--

INSERT INTO `hrd_availablejob` (`JobID`, `JobPosition`, `JobStatus`, `JobNumber`) VALUES
(1, 'Sales Agent', 'Available', 10),
(2, 'Delivery Guy', 'Available', 5),
(3, 'Construction Worker', 'Available', 3),
(1, 'Sales Agent', 'Available', 10),
(2, 'Delivery Guy', 'Available', 5),
(3, 'Construction Worker', 'Available', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees`
--

CREATE TABLE `hr_employees` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `home_phone` varchar(255) NOT NULL,
  `alternate_phone` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `sss` varchar(255) NOT NULL,
  `pagibig` varchar(255) NOT NULL,
  `philhealth` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `work_location` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `emergency_lastname` varchar(255) NOT NULL,
  `emergency_firstname` varchar(255) NOT NULL,
  `emergency_middlename` varchar(255) NOT NULL,
  `emergency_address` varchar(255) NOT NULL,
  `emergency_primary_phone` varchar(255) NOT NULL,
  `emergency_alternate_phone` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `attendance_date` varchar(255) DEFAULT NULL,
  `totalrenderedhours` int(250) NOT NULL,
  `payrollstatus_af` varchar(500) NOT NULL,
  `payrollstatus_hr` varchar(500) NOT NULL,
  `dateofrelease` varchar(500) NOT NULL,
  `employeepassword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_employees`
--

INSERT INTO `hr_employees` (`id`, `lastname`, `firstname`, `middlename`, `address`, `home_phone`, `alternate_phone`, `email1`, `bday`, `civilstatus`, `sss`, `pagibig`, `philhealth`, `position`, `department`, `supervisor`, `work_location`, `work_phone`, `cellphone`, `email2`, `start_date`, `salary`, `emergency_lastname`, `emergency_firstname`, `emergency_middlename`, `emergency_address`, `emergency_primary_phone`, `emergency_alternate_phone`, `relationship`, `attendance`, `attendance_date`, `totalrenderedhours`, `payrollstatus_af`, `payrollstatus_hr`, `dateofrelease`, `employeepassword`) VALUES
(6, 'Pitel', 'Monique', 'Fontijon', 'Rosario, Batangas', '4562333', '6969696', 'monique_pitel@dlsl.edu.ph', 'Octoer 28, 1998', 'Double', '--', '--', '--', 'Staff', 'Accounting and Finance', '--', '--', '01888888888', '06999999969', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', NULL, NULL, 160, 'COMPUTED', '', 'June 2018', 'defaultpass123'),
(7, 'Mendoza', 'Janine', 'Rosela', 'Rosario, Batangas', '--', '--', 'janine_mendoza@dlsl.edu.ph', '--', '--', '--', '--', '--', 'Staff', 'Accounting and Finance', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', NULL, NULL, 160, 'COMPUTED', '', 'June 2018', 'defaultpass123');

-- --------------------------------------------------------

--
-- Table structure for table `inquire`
--

CREATE TABLE `inquire` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquire`
--

INSERT INTO `inquire` (`fullname`, `email`, `contact`, `message`, `id`) VALUES
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 707070707, 'Hello World HEHEHE', 1),
('Ericka Landicho', 'erickarizzelle@gmail.com', 912345678, 'Lumber\r\nPlywood\r\nCement\r\nWire\r\nNails', 2),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'Lolololo', 3),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 870808080, 'sndkasdkasd', 4),
('Franze Garcia', 'franze.garcia@gmail,com', 2147483647, 'LOLOLOLOL', 5),
('h', 'h', 0, 'h', 8),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'Paints\r\nNails\r\nHammer', 9),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 707070707, 'Hello World HEHEHE', 1),
('Ericka Landicho', 'erickarizzelle@gmail.com', 912345678, 'Lumber\r\nPlywood\r\nCement\r\nWire\r\nNails', 2),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'Lolololo', 3),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 870808080, 'sndkasdkasd', 4),
('Franze Garcia', 'franze.garcia@gmail,com', 2147483647, 'LOLOLOLOL', 5),
('h', 'h', 0, 'h', 8),
('Kenneth Axl Virtucio', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'Paints\r\nNails\r\nHammer', 9);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_list`
--

CREATE TABLE `inventory_list` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(500) NOT NULL,
  `prod_desc` longtext NOT NULL,
  `prod_image` varchar(500) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `prod_supplier` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_list`
--

INSERT INTO `inventory_list` (`prod_id`, `prod_name`, `prod_desc`, `prod_image`, `prod_price`, `prod_quantity`, `prod_supplier`) VALUES
(1, 'Ace Paintbrush', 'The Ace Paintbrush Black 3\" is made of 100% pure bristle and is an ideal bursh for your general painting needs.', 'item1.jpg', 40, 12, 'Ace'),
(2, 'BOSNY SPRAY PAINT 1200F HI-TEMP SPRAY', 'Formulated from high-performance resin, Bosny Spray Paint 1200F Hi-Temp Spray is heat resistant up to 1200F. It will not flake or peel off when exposed to High Temperature. Best for use on stacks, mufflers, boilers, heater, jet engines, heat exchange, and other high temperature equipment.', 'item2.jpg', 500, 10, 'Bsny'),
(3, 'PRIMERO MULSEAL 4L', 'PRIMERO MULTISEAL 4L is a water based elastomeric sealant which is ready to use on wood, cement, hardiflex, plastics and properly primed metals.', 'item3.jpg', 510, 15, 'PRIMERO'),
(4, 'P ACE MASKING TAPE 50MMx75YDS (2)', 'The ACE masking tape 50mmx75yds (2”) is used for masking the corners and other surfaces while painting. It offers high-grade adhesion and is easy to strip from walls and other surfaces.', 'item4.jpg', 15, 5, 'ACE');

-- --------------------------------------------------------

--
-- Table structure for table `lleave`
--

CREATE TABLE `lleave` (
  `id` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lleave`
--

INSERT INTO `lleave` (`id`, `employeeid`, `firstname`, `lastname`, `department`, `message`, `status`) VALUES
(1, 3, 'Regine', 'Castillo', 'Production', 'Leave for Personal reason', 'Pending'),
(2, 85, 'Kamila Leigh', 'Pabillano', 'Human Resource', 'Leave for Vacation', 'Approved'),
(3, 5, 'Jomar', 'Lopez', 'Purchasing', 'Leave for Personal reason', 'Disapproved'),
(4, 11, 'Raniel', 'Cuevas', 'Sales', 'Leave for Health reason', 'Pending'),
(5, 8, 'CJ', 'Umali', 'Accounting and Finance', 'Vacation Leave', 'Approved'),
(1, 3, 'Regine', 'Castillo', 'Production', 'Leave for Personal reason', 'Pending'),
(2, 85, 'Kamila Leigh', 'Pabillano', 'Human Resource', 'Leave for Vacation', 'Approved'),
(3, 5, 'Jomar', 'Lopez', 'Purchasing', 'Leave for Personal reason', 'Disapproved'),
(4, 11, 'Raniel', 'Cuevas', 'Sales', 'Leave for Health reason', 'Pending'),
(5, 8, 'CJ', 'Umali', 'Accounting and Finance', 'Vacation Leave', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `loanaf`
--

CREATE TABLE `loanaf` (
  `id` int(11) NOT NULL,
  `requestname` varchar(500) NOT NULL,
  `requestdepartment` varchar(500) NOT NULL,
  `requestposition` varchar(250) NOT NULL,
  `requestemail` varchar(250) NOT NULL,
  `loanamount` int(250) NOT NULL,
  `requeststatus` varchar(250) NOT NULL,
  `requeststatushr` varchar(500) NOT NULL,
  `requestreason` varchar(1000) NOT NULL,
  `requestdateofassessment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanaf`
--

INSERT INTO `loanaf` (`id`, `requestname`, `requestdepartment`, `requestposition`, `requestemail`, `loanamount`, `requeststatus`, `requeststatushr`, `requestreason`, `requestdateofassessment`) VALUES
(4, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 50, 'APPROVED', 'DISAPPROVED', 'Pamasahe', 'May 24, 2018'),
(5, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 500, 'APPROVED', '', 'Christmas Party', 'May 24, 2018'),
(6, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'DISAPPROVED', 'APPROVED', 'Christmas Party', 'May 24, 2018'),
(7, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 2147483647, 'DISAPPROVED', '', 'Christmas Party', 'May 24, 2018'),
(8, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 500, 'APPROVED', '', 'Pamasahe', 'May 27, 2018'),
(9, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 200, '', '', 'Wala lang', ''),
(11, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 250, '', '', 'Christmas Party', ''),
(4, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 50, 'APPROVED', 'DISAPPROVED', 'Pamasahe', 'May 24, 2018'),
(5, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 500, 'APPROVED', '', 'Christmas Party', 'May 24, 2018'),
(6, 'Kenneth Virtucio', 'Marketing Department', 'Office Head', 'kenneth_axl_virtucio@dlsl.edu.ph', 2147483647, 'DISAPPROVED', 'APPROVED', 'Christmas Party', 'May 24, 2018'),
(7, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 2147483647, 'DISAPPROVED', '', 'Christmas Party', 'May 24, 2018'),
(8, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 500, 'APPROVED', '', 'Pamasahe', 'May 27, 2018'),
(9, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 200, '', '', 'Wala lang', ''),
(11, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique_pitel@dlsl.edu.ph', 250, '', '', 'Christmas Party', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_from_supplier`
--

CREATE TABLE `order_from_supplier` (
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(500) NOT NULL,
  `prod_supplier` varchar(500) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payrollaf`
--

CREATE TABLE `payrollaf` (
  `employeeid` int(11) NOT NULL,
  `employeefullname` varchar(1000) NOT NULL,
  `employeedepartment` varchar(500) NOT NULL,
  `employeeposition` varchar(500) NOT NULL,
  `employeemail` varchar(500) NOT NULL,
  `employeerenderedhours` int(255) NOT NULL,
  `employeededuction` int(255) NOT NULL,
  `employeetax` int(250) NOT NULL,
  `employeeaddition` int(255) NOT NULL,
  `employeeinitialsalary` int(255) NOT NULL,
  `employeetaxated` int(250) NOT NULL,
  `employeefinalsalary` int(255) NOT NULL,
  `employeepayrelease` varchar(250) NOT NULL,
  `employeestatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payrollaf`
--

INSERT INTO `payrollaf` (`employeeid`, `employeefullname`, `employeedepartment`, `employeeposition`, `employeemail`, `employeerenderedhours`, `employeededuction`, `employeetax`, `employeeaddition`, `employeeinitialsalary`, `employeetaxated`, `employeefinalsalary`, `employeepayrelease`, `employeestatus`) VALUES
(1, 'Jheyren Calanog', 'Accounting and Finance Department', 'Staff', 'jheyrencalanog@gmail.com', 160, 0, 2, 1500, 56000, 44800, 46300, 'MAY 2018', 'COMPUTED'),
(2, 'Darwin Luis Sanchez', 'Accounting and Finance Department', 'Office Head', 'darwin@gmail.com', 160, 0, 2, 0, 160000, 32000, 128000, 'MAY 2018', 'COMPUTED'),
(3, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique@gmail.com', 160, 0, 2, 1500, 56000, 11200, 46300, 'MAY 2018', 'COMPUTED'),
(4, 'Janine Mendoza', 'Accounting and Finance Department', 'Staff', 'janine@gmail.com', 160, 0, 0, 0, 0, 0, 0, 'MAY 2018', ''),
(1, 'Jheyren Calanog', 'Accounting and Finance Department', 'Staff', 'jheyrencalanog@gmail.com', 160, 0, 2, 1500, 56000, 44800, 46300, 'MAY 2018', 'COMPUTED'),
(2, 'Darwin Luis Sanchez', 'Accounting and Finance Department', 'Office Head', 'darwin@gmail.com', 160, 0, 2, 0, 160000, 32000, 128000, 'MAY 2018', 'COMPUTED'),
(3, 'Monique Pitel', 'Accounting and Finance Department', 'Staff', 'monique@gmail.com', 160, 0, 2, 1500, 56000, 11200, 46300, 'MAY 2018', 'COMPUTED'),
(4, 'Janine Mendoza', 'Accounting and Finance Department', 'Staff', 'janine@gmail.com', 160, 0, 0, 0, 0, 0, 0, 'MAY 2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `productid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `productprice` double NOT NULL,
  `productdescription` varchar(255) NOT NULL,
  `productcategory` varchar(255) NOT NULL,
  `productquantity` int(255) NOT NULL,
  `productsupplier` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`productid`, `productname`, `productimage`, `productprice`, `productdescription`, `productcategory`, `productquantity`, `productsupplier`) VALUES
(1, 'Hollow Blocks', 'hollowblock.jpg', 17, '6\" per piece', 'Construction', 5000, 'Supplier Name3'),
(2, 'Sand', 'sand.jpg', 700, 'washed sand per cubic meter', 'Construction', 1000, 'Supplier Name3'),
(3, 'Lumber', 'lumber.jpg', 265, '2 x 4 x 8', 'Construction', 3000, 'Supplier Name2'),
(4, 'Steel Bars', 'bars.jpg', 230, '9 meters', 'Construction', 5000, ''),
(5, 'GI Sheets', 'sheet.jpg', 350, '30 mm', 'Construction', 3000, ''),
(6, 'Bolts & Nuts', 'boltsnuts.jpg', 50, 'per set', 'Hardware', 1000, ''),
(7, 'Plywood', 'plywood.jpg', 360, '1/4\"', 'Construction', 800, ''),
(8, 'Lan Cable', 'lan.jpg', 30, '1 meter', 'Electric Supplies', 500, ''),
(9, 'Pipes', 'pipes.jpg', 125, '(1\") Gray', 'Pipes and Fittings', 1000, ''),
(11, 'Gypsum Screws', 'gypsumscrews.jpg', 70, 'Grip-Rite 158CDWS1 1-5/8-Inch 6 Coarse', 'Hardware', 500, ''),
(12, 'Electric Meter', 'electricmeter.jpg', 760, 'Digital Electronic Display Reading kilowatt hour Sub Meter square', 'Electric Supplies', 0, 'Supplier Name2'),
(1, 'Hollow Blocks', 'hollowblock.jpg', 17, '6\" per piece', 'Construction', 5000, 'Supplier Name3'),
(2, 'Sand', 'sand.jpg', 700, 'washed sand per cubic meter', 'Construction', 1000, 'Supplier Name3'),
(3, 'Lumber', 'lumber.jpg', 265, '2 x 4 x 8', 'Construction', 3000, 'Supplier Name2'),
(4, 'Steel Bars', 'bars.jpg', 230, '9 meters', 'Construction', 5000, ''),
(5, 'GI Sheets', 'sheet.jpg', 350, '30 mm', 'Construction', 3000, ''),
(6, 'Bolts & Nuts', 'boltsnuts.jpg', 50, 'per set', 'Hardware', 1000, ''),
(7, 'Plywood', 'plywood.jpg', 360, '1/4\"', 'Construction', 800, ''),
(8, 'Lan Cable', 'lan.jpg', 30, '1 meter', 'Electric Supplies', 500, ''),
(9, 'Pipes', 'pipes.jpg', 125, '(1\") Gray', 'Pipes and Fittings', 1000, ''),
(11, 'Gypsum Screws', 'gypsumscrews.jpg', 70, 'Grip-Rite 158CDWS1 1-5/8-Inch 6 Coarse', 'Hardware', 500, ''),
(12, 'Electric Meter', 'electricmeter.jpg', 760, 'Digital Electronic Display Reading kilowatt hour Sub Meter square', 'Electric Supplies', 0, 'Supplier Name2');

-- --------------------------------------------------------

--
-- Table structure for table `purchd_orders`
--

CREATE TABLE `purchd_orders` (
  `orderid` int(11) NOT NULL,
  `orderitem` varchar(650) NOT NULL,
  `orderquantity` varchar(1000) NOT NULL,
  `ordersingleprice` varchar(1000) NOT NULL,
  `ordertotalprice` varchar(1000) NOT NULL,
  `orderdateoforder` varchar(500) NOT NULL,
  `orderpaystatus` varchar(250) NOT NULL,
  `orderreleasestatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchd_orders`
--

INSERT INTO `purchd_orders` (`orderid`, `orderitem`, `orderquantity`, `ordersingleprice`, `ordertotalprice`, `orderdateoforder`, `orderpaystatus`, `orderreleasestatus`) VALUES
(1, 'Sand', '100', '150', '15000', 'June 7, 2018', 'PAID', 'June 8, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `pu_deliveryaddress`
--

CREATE TABLE `pu_deliveryaddress` (
  `id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pu_deliveryaddress`
--

INSERT INTO `pu_deliveryaddress` (`id`, `address`, `name`, `email`, `phone`, `status`) VALUES
(1, 'IT3A hardware Office, Lipa City Batangas', 'Patrick Smith', 'PatSmith32@gmail.com', '09356897415', '1'),
(1, 'IT3A hardware Office, Lipa City Batangas', 'Patrick Smith', 'PatSmith32@gmail.com', '09356897415', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pu_deliveryinfo`
--

CREATE TABLE `pu_deliveryinfo` (
  `id` int(11) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `requested_by` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pu_deliveryinfo`
--

INSERT INTO `pu_deliveryinfo` (`id`, `delivery_date`, `requested_by`, `approved_by`, `department`) VALUES
(1, '06/28/2018', 'Patrick Smith', 'Admin', 'Purchasing Department'),
(1, '06/28/2018', 'Patrick Smith', 'Admin', 'Purchasing Department');

-- --------------------------------------------------------

--
-- Table structure for table `stock_request`
--

CREATE TABLE `stock_request` (
  `requestid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `requestquantity` int(11) NOT NULL,
  `productname` varchar(500) NOT NULL,
  `productsupplier` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `af_fund`
--
ALTER TABLE `af_fund`
  ADD PRIMARY KEY (`fundid`);

--
-- Indexes for table `af_loan`
--
ALTER TABLE `af_loan`
  ADD PRIMARY KEY (`requestid`);

--
-- Indexes for table `af_payroll`
--
ALTER TABLE `af_payroll`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `af_payrollvariables`
--
ALTER TABLE `af_payrollvariables`
  ADD PRIMARY KEY (`varid`);

--
-- Indexes for table `af_requestbudget`
--
ALTER TABLE `af_requestbudget`
  ADD PRIMARY KEY (`requestid`);

--
-- Indexes for table `hr_employees`
--
ALTER TABLE `hr_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_list`
--
ALTER TABLE `inventory_list`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `purchd_orders`
--
ALTER TABLE `purchd_orders`
  ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `af_fund`
--
ALTER TABLE `af_fund`
  MODIFY `fundid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `af_loan`
--
ALTER TABLE `af_loan`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `af_payroll`
--
ALTER TABLE `af_payroll`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `af_payrollvariables`
--
ALTER TABLE `af_payrollvariables`
  MODIFY `varid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `af_requestbudget`
--
ALTER TABLE `af_requestbudget`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inventory_list`
--
ALTER TABLE `inventory_list`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchd_orders`
--
ALTER TABLE `purchd_orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
