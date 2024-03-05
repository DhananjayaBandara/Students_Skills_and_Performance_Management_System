-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 07:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `did` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`did`, `name`, `fid`) VALUES
(1, 'Department of Physical Science', 1),
(2, 'Department of Bio-Science', 1),
(3, 'Department of Business Economics', 2),
(4, 'Department of Finance and Accountancy', 2),
(5, 'Department of Human Resource Management', 2),
(6, 'Department of Management and Entrepreneurship', 2),
(7, 'Department of Marketing Management', 2),
(8, 'Department of Project Management', 2),
(9, 'Department of English Language Teaching', 2),
(10, 'Department of ICT', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `name`) VALUES
(1, 'Faculty of Applied Sciences'),
(2, 'Faculty of Business Studies'),
(3, 'Faculty of Technological Studies');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `regNo` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`regNo`, `project_link`, `project_description`) VALUES
('2019/ASP/69', 'http://localhost/CSC3132SkillRecoardApp/', 'Student skills and performance management platform'),
('2019/ASP/13', 'https://github.com/AyeshChanukaS/todo_app_flutter', 'To Do APP'),
('2019/ICT/104', 'https://github.com/deemanthasandun/automated-adb-hotspot-connector', 'ADB Tool for auto connect via wifi'),
('2019/ASB/75', 'https://github.com/Mahashaya99/github-slideshow', 'hotel application '),
('2019/ASB/75', 'https://github.com/Mahashaya99/web1.dev', 'web application ');

-- --------------------------------------------------------

--
-- Table structure for table `searcher_register`
--

CREATE TABLE `searcher_register` (
  `username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searcher_register`
--

INSERT INTO `searcher_register` (`username`, `firstName`, `lastName`, `email`, `password`) VALUES
('CIC', 'Tiran', 'Jayarathna', 'anjanatiran4321@gmail.com', '$2y$10$3a783E6JkOayvKymCK1HcutcGuIO4CpSUo1uS4xCNlY4O/QrGdsYq'),
('NEWPHARMACY', 'Savindu', 'Nawagamuwa', 'mahindasnawagamuwa@gmail.com', '$2y$10$EEAn6zwpzyiKk2xOQKn3O.rwL9TXNQQ59gLhl5Y1l1plIQ9yPVuvm'),
('EXCELVISION', 'Dhananjaya', 'Bandara', 'prasannadhananjaya100@gmail.com', '$2y$10$D9J4XyK.JmbJ.u5qSi53WuDCVZSjYk44Gd5TXgec0lwBa9Q7cW0ha'),
('Verdant', 'Sandun', 'Deemantha', 'sadundeemantha@gmail.com', '$2y$10$jzHTxo81eV7uggHJaooZAeaU6GpoU4sAUfeKA38E2ne16UCakwbX6');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `regNo` varchar(50) NOT NULL,
  `initialName` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `district` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobileNo` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `academicYear` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `credits` int(10) NOT NULL,
  `class` varchar(255) NOT NULL,
  `extra` text NOT NULL,
  `progLanguage` varchar(255) NOT NULL,
  `webDesign` varchar(255) NOT NULL,
  `framework` varchar(255) NOT NULL,
  `database` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`regNo`, `initialName`, `fullName`, `bio`, `district`, `school`, `birthday`, `age`, `gender`, `mobileNo`, `email`, `address`, `faculty`, `department`, `course`, `academicYear`, `level`, `gpa`, `credits`, `class`, `extra`, `progLanguage`, `webDesign`, `framework`, `database`) VALUES
('2017/asp/30', 'wcj', 'wcjo', '', 'Matale', 'stmarys', '1997-06-19', 27, 'Male', '0774561235', 'lahirukumara12@gmail.com', '12/6,Main street, Hambantota', 'Faculty of Applied Sciences', 'amc', 'applied', '2019', 'Third Year', '2', 90, 'General Class', '', 'C,C++,C#,Java,Python,Ruby,Assembly,Machine Language,Perl,COBOL,Rust,Fortran,', 'HTML,CSS,JavaScript,PHP,NodeJS,PHP,Foundation,webflow,shopify,WordPress,GitHub,', 'Django,Angular,ASP.NET Core,Flask,CakePHP,Apache Wicket,Yesod,Drupal,Sinatra,Rubi on Rails,Bootstrap,Express.js,AngularJS,JQuery,FuelPHP,', 'MySQL,Redis,SQLite,'),
('2019/ASB/08', 'N.G.B.S.M.Nawagamuwa', 'Nawagamuwa Gamageralalage Binuwan Savindu Mahinderathna Nawagamuwa', 'Environmental Science enthusiast; searching for an environmental related career.', 'Kegalle', 'Kegalu Vidyalaya', '1999-09-20', 25, 'Male', '787426685', 'mahindasnawagamuwa@gmail.com', 'No.19, Iriyagolla, Dehiowita', 'Faculty of Applied Sciences', 'Bio-science', 'Environmental Science', '2019/2020', 'Third Year', '3.89', 60, 'First Class', 'Secretary of Environmental Society in University of Vavuniya', '', 'HTML,CSS,', '', ''),
('2019/ASB/56', 'H.M.A.T.Jayarathna', 'Herath Mudiyanselage Anjana Tiran', '', 'Polonnaruwa', 'Po/Royal College ', '1999-03-02', 25, 'Male', '0714591075', 'anjanatiran4321@gmail.com', 'No 23, Sudarmarama pedesa, New town,Polonnaruwa', 'Faculty of Applied Sciences', 'Bio sciences', 'Environmental Science ', '2019/2020', 'Third Year', '2.5', 75, 'General Class', 'Cricket Captain ', '', '', '', ''),
('2019/ASB/75', 'K.H.P.M.Guanrathna', 'Karavita Hewage Pupudu Mahashaya Gunarathna', '', 'Hambantota', 'D.A.Rajapaksha College', '1999-10-09', 25, 'Male', '0761621293', 'mahashaya1999@gmail.com', '86/4,Tangalla,Hambantota', 'Faculty of Applied Sciences', 'Bio Science', 'Environmental Science ', '2019/2020', 'Third Year', '2.5', 75, 'General Class', 'Software Engineering\r\nIEEE member\r\nphotographer\r\nUI/UX design\r\nBit one year competed\r\nCIMA level 1\r\n', 'C++,C#,Java,Python,Machine Language,', 'HTML,CSS,JavaScript,PHP,NodeJS,React,WordPress,GitHub,', 'ASP.NET Core,Flask,Apache Wicket,Bootstrap,JQuery,', 'MySQL,PostgreSQL,Microsoft Access,oracle,MongoDB,MariaDB,SQLite,Microsoft SQL Server,'),
('2019/ASB/79', 'M.H.D.L.Wishwajith', 'Migamu Hettiarachchige Don Lanka Wishwajith', '', 'Gampaha', 'Gurukula College,Gampaha', '1999-03-03', 25, 'Male', '0705836174', 'lanakawishwajith@gmail.com', 'C 3/71,Ragama,Gampaha', 'Faculty of Applied Sciences', 'Bio Science', 'Environmental Science ', '2019/2020', 'Third Year', '2.7', 75, 'Second Class Lower', 'Music\r\nPhotography\r\nSoftware Engineering', 'Java,Python,', 'HTML,CSS,PHP,', 'Django,Bootstrap,', 'MySQL,Microsoft Access,'),
('2019/ASP/13', 'M. A. Chanuka', 'Merenchige Ayesh Chanuka', '', 'Hambantota', 'RVC', '2024-01-11', 25, 'Male', '0787878788', 'ayesh@gmail.com', '172, Beliatta', 'Faculty of Applied Sciences', 'DOP', 'AMC', '2019/2020', 'Third Year', '2.7', 90, 'General Class', 'Music', 'Python,', 'HTML,CSS,NodeJS,React,', '', 'MySQL,PostgreSQL,SQLite,'),
('2019/ASP/69', 'P.G.R.P.D.Bandara', 'Pahalagama Ralalage Prashanna Dhananjaya  Bandara', '', 'Kegalle', 'Dudley Senanayake Central College, Tholangamuwa', '2000-02-09', 23, 'Male', '0704694294', 'prasannadhananjaya4@gmail.com', 'C72/2, Palapoluwa,Yattogoda', 'Faculty of Applied Sciences', 'Physical Science', 'Computer Science', '2019/2020', 'Third Year', '3.0', 75, 'Second Class Lower', 'Scouting', 'C,C++,Java,', 'HTML,CSS,JavaScript,PHP,', '', 'MySQL,Microsoft Access,'),
('2019/ICT/104', 'S D Dissanayaka', 'Sandun Deemantha Dissanyaka', '', 'Colombo', 'D S Senanayake College', '1999-12-25', 24, 'Male', '771858549', 'sadundeemantha@gmail.com', '803/2,Dhanawardana mawatha,Koralaima,Gonapola', 'Faculty of Applied Sciences', 'Physical Science', 'IT', '2019', 'Third Year', '3.00', 75, 'First Class', 'Director of IT of Leo Club', 'C,C++,C#,Java,', 'HTML,CSS,JavaScript,PHP,NodeJS,React,shopify,WordPress,GitHub,', 'Angular,Express.js,', 'MySQL,Microsoft Access,MongoDB,MariaDB,');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `regNo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`regNo`, `email`, `password`) VALUES
('2017/asp/30', 'warnakulasuriyajayan@gmail.com', '$2y$10$YlilJ4E6Igk1VzJir5cHPehSyXMBaTixw5.yIgAEbUmIzkRcY5RMm'),
('2019/ASB/08', 'mahindasnawagamuwa@gmail.com', '$2y$10$Y1DBiW37n08ROy8GSgpZnuhlk1JynJnFGnq5KONsju3km6kv9Mdvm'),
('2019/ASB/56', 'anjanatiran4321@gmail.com', '$2y$10$UbDwTF8gmLTj9LTpBRJU2udJLBKxnAGj6VE7oPgvrShxgk7DO.qk.'),
('2019/ASB/75', 'pupudu@gmail.com', '$2y$10$kpe7E.VkcZABN/7QQi17eOrHE2/VT9hQrWWYXKOz9ZkSehKl45xG.'),
('2019/ASB/79', 'lankavishwajith@gmail.com', '$2y$10$UxnNk3NdvXHbzQzCxGmYqO9hOswrnklZfKaYGRS0FOCWWs/Y4G4pu'),
('2019/ASP/13', 'ayesh@gmail.com', '$2y$10$Hm4pG.SyAo0FOSNrtZMuFuYja5Jw9wt7T8EO76VLWRalbYK3Alw8.'),
('2019/ASP/22', 'ranjulasandeepa@gmail.com', '$2y$10$aRE63Dx9gk/W.KhnorgWtOsWCDXv.6gmlD1iL49ykSMiSU9hrSUvi'),
('2019/ASP/69', 'prasannadhananjaya4@gmail.com', '$2y$10$U5Ib7xtoZ.ByLzn9uwz...Ir8svYsFfQv4nQ7K13f13jldsGnxJ92'),
('2019/ASP/90', 'mahesh3171999@gmail.com', 'Mahe23SHks'),
('2019/ICT/104', 'sadundeemantha@gmail.com', '$2y$10$vj8RQpvMKYVByDAGgbqgce9ovBcyT8Nu5FjV.lK3drz99YAtvO52e');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `no` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`no`, `regNo`, `title`, `company_name`, `duration`, `description`) VALUES
(63, '2019/ICT/104', 'Technical officer', 'NowHere', '2019-present', 'CCTV surveillance systems instalation and configuration '),
(65, '2019/ASP/69', 'Senior Supervisor', 'Excel Vision', '2020-2021', 'Business management and Marketing supervisor'),
(66, '2019/ASB/08', 'Cashier', 'new pharmacy', '1 year', 'Financial management'),
(67, '2019/ASB/56', 'trainee', 'CIC', '2019-2020', 'Plant nursery '),
(68, '2019/ASB/79', 'Software Engineer', 'Institute of Software Engineering', '2019-2020', ''),
(69, '2019/ASB/75', 'web developers ', 'Rooms.net', '2022-2023', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_link`);

--
-- Indexes for table `searcher_register`
--
ALTER TABLE `searcher_register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
