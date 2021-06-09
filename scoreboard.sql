-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 12:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoreboard`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ADD` (IN `MAT` VARCHAR(60), IN `TEAM1` VARCHAR(20), IN `TEAM2` VARCHAR(20), IN `V_ID` INT(11), IN `DATE_OF_MATCH` VARCHAR(30))  BEGIN
	INSERT INTO featured_matches VALUES(MAT,TEAM1,TEAM2,V_ID,DATE_OF_MATCH);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `batsmen`
--

CREATE TABLE `batsmen` (
  `BT_ID` int(11) NOT NULL,
  `T_ID` int(11) DEFAULT NULL,
  `BT_NAME` varchar(20) DEFAULT NULL,
  `RUNS_SCORED` int(3) DEFAULT NULL,
  `BOWLS` int(11) DEFAULT NULL,
  `FOURS` int(11) DEFAULT NULL,
  `SIXES` int(11) DEFAULT NULL,
  `ST_RATE` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batsmen`
--

INSERT INTO `batsmen` (`BT_ID`, `T_ID`, `BT_NAME`, `RUNS_SCORED`, `BOWLS`, `FOURS`, `SIXES`, `ST_RATE`) VALUES
(1, 1, 'D Arcy', 34, 38, 3, 0, '89.47'),
(2, 1, 'Finch(c)', 35, 26, 5, 1, '134.62'),
(3, 1, 'Smith', 12, 9, 0, 1, '133.33'),
(4, 1, 'Maxwell', 2, 3, 0, 0, '66.67'),
(5, 1, 'Henriques', 30, 20, 1, 1, '150.00'),
(6, 1, 'Wade(wk)', 7, 9, 0, 0, '77.78'),
(7, 1, 'Sean', 12, 8, 0, 1, '150.00'),
(8, 1, 'Starc', 1, 2, 0, 0, '50.00'),
(9, 1, 'Mitchell', 12, 5, 1, 1, '240.00'),
(10, 1, 'Zampa', NULL, NULL, NULL, NULL, NULL),
(11, 1, 'Hazelwood', NULL, NULL, NULL, NULL, NULL),
(12, 2, 'Rahul(wk)', 51, 40, 5, 1, '127.50'),
(13, 2, 'Dhavan', 1, 6, 0, 0, '16.67'),
(14, 2, 'Kohli(c)', 9, 9, 1, 0, '100.00'),
(15, 2, 'Samson', 23, 15, 1, 1, '153.33'),
(16, 2, 'Manish', 2, 8, 0, 0, '25.00'),
(17, 2, 'Hardik', 16, 15, 0, 1, '106.67'),
(18, 2, 'Jadeja', 44, 23, 5, 1, '191.30'),
(19, 2, 'Sundar', 7, 5, 1, 0, '140.00'),
(20, 2, 'Chahar', 0, 0, 0, 0, '0.00'),
(21, 2, 'Shami', NULL, NULL, NULL, NULL, NULL),
(22, 2, 'Natarajan', NULL, NULL, NULL, NULL, NULL),
(23, 2, 'Chahal', NULL, NULL, NULL, NULL, NULL),
(24, 3, 'Wade(c)(wk)', 58, 32, 3, 0, '181.25'),
(25, 3, 'D Arcy', 9, 9, 1, 0, '100.00'),
(26, 3, 'Smith', 46, 38, 3, 2, '121.05'),
(27, 3, 'Maxwell', 22, 13, 0, 2, '169.23'),
(28, 3, 'Henriques', 26, 18, 0, 1, '144.44'),
(29, 3, 'Stoinis', 16, 7, 0, 1, '228.57'),
(30, 3, 'Sams', 8, 3, 1, 0, '266.67'),
(31, 3, 'Abbott', NULL, NULL, NULL, NULL, NULL),
(32, 3, 'Swepson', NULL, NULL, NULL, NULL, NULL),
(33, 3, 'Zampa', NULL, NULL, NULL, NULL, NULL),
(34, 3, 'Tye', NULL, NULL, NULL, NULL, NULL),
(35, 4, 'Rahul(wk)', 30, 22, 2, 1, '136.36'),
(36, 4, 'Dhavan', 52, 36, 4, 2, '144.44'),
(37, 4, 'Kohli(c)', 40, 24, 2, 2, '166.66'),
(38, 4, 'Samson', 15, 10, 1, 1, '150.00'),
(39, 4, 'Hardik', 42, 22, 3, 2, '190.91'),
(40, 4, 'Iyer', 12, 5, 1, 1, '240.00'),
(41, 4, 'Sundar', NULL, NULL, NULL, NULL, NULL),
(42, 4, 'Thakur', NULL, NULL, NULL, NULL, NULL),
(43, 4, 'Chahar', NULL, NULL, NULL, NULL, NULL),
(44, 4, 'Natarajan', NULL, NULL, NULL, NULL, NULL),
(45, 4, 'Chahal', NULL, NULL, NULL, NULL, NULL),
(46, 5, 'Wade(wk)', 80, 53, 7, 2, '150.94'),
(47, 5, 'Finch(c)', 0, 2, 0, 0, '0.00'),
(48, 5, 'Smith', 24, 23, 2, 20, '104.35'),
(49, 5, 'Maxwell', 54, 36, 3, 3, '150.00'),
(50, 5, 'Henriques', 5, 2, 1, 0, '250.00'),
(51, 5, 'D Arcy', 7, 3, 1, 0, '233.33'),
(52, 5, 'Sams', 4, 2, 1, 0, '200.00'),
(53, 5, 'Abbott', NULL, NULL, NULL, NULL, NULL),
(54, 5, 'Swepson', NULL, NULL, NULL, NULL, NULL),
(55, 5, 'Zampa', NULL, NULL, NULL, NULL, NULL),
(56, 5, 'Tye', NULL, NULL, NULL, NULL, NULL),
(57, 6, 'Rahul(wk)', 0, 2, 0, 0, '0.00'),
(58, 6, 'Dhavan', 28, 21, 3, 0, '133.33'),
(59, 6, 'Kohli(c)', 85, 61, 4, 3, '139.34'),
(60, 6, 'Samson', 10, 9, 0, 0, '111.11'),
(61, 6, 'Iyer', 0, 1, 0, 0, '0.00'),
(62, 6, 'Hardik', 20, 13, 1, 2, '153.85'),
(63, 6, 'Sundar', 7, 6, 1, 0, '116.67'),
(64, 6, 'Thakur', 17, 7, 0, 2, '242.86'),
(65, 6, 'Chahar', 0, 0, 0, 0, '0.00'),
(66, 6, 'Natarajan', NULL, NULL, NULL, NULL, NULL),
(67, 6, 'Chahal', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bowlers`
--

CREATE TABLE `bowlers` (
  `BW_ID` int(11) NOT NULL,
  `T_ID` int(11) DEFAULT NULL,
  `BW_NAME` varchar(20) DEFAULT NULL,
  `OVERS_BOWLED` decimal(3,1) DEFAULT NULL,
  `RUNS_GOT` int(11) DEFAULT NULL,
  `WICKETS_TAKEN` int(11) DEFAULT NULL,
  `ECNO` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bowlers`
--

INSERT INTO `bowlers` (`BW_ID`, `T_ID`, `BW_NAME`, `OVERS_BOWLED`, `RUNS_GOT`, `WICKETS_TAKEN`, `ECNO`) VALUES
(1, 1, 'Starc', '4.0', 34, 2, '8.5'),
(2, 1, 'Hazlewood', '4.0', 39, 0, '9.8'),
(3, 1, 'Zampa', '4.0', 20, 1, '5.0'),
(4, 1, 'Abbott', '2.0', 23, 0, '11.5'),
(5, 1, 'Swepson', '2.0', 20, 1, '10.5'),
(6, 1, 'Henriques', '4.0', 22, 3, '5.5'),
(7, 2, 'Chahar', '4.0', 29, 1, '7.2'),
(8, 2, 'Sundar', '4.0', 16, 0, '4.0'),
(9, 2, 'Shami', '4.0', 46, 0, '11.5'),
(10, 2, 'Natrajan', '4.0', 30, 3, '7.5'),
(11, 2, 'Chahal', '4.0', 25, 3, '6.2'),
(12, 3, 'Sams', '3.4', 41, 1, '11.2'),
(13, 3, 'Abbott', '2.0', 17, 0, '8.5'),
(14, 3, 'Tye', '4.0', 47, 1, '11.8'),
(15, 3, 'Maxwell', '1.0', 19, 0, '19.0'),
(16, 3, 'Swepson', '4.0', 25, 1, '6.2'),
(17, 3, 'Henriques', '1.0', 9, 0, '9.0'),
(18, 3, 'Zampa', '4.0', 36, 1, '9.0'),
(19, 4, 'Chahar', '4.0', 48, 0, '12.0'),
(20, 4, 'Sundar', '4.0', 35, 0, '8.8'),
(21, 4, 'Thakur', '4.0', 39, 1, '9.8'),
(22, 4, 'Natrajan', '4.0', 20, 2, '5.0'),
(23, 4, 'Chahal', '4.0', 51, 1, '12.8'),
(24, 5, 'Maxwell', '3.0', 20, 1, '6.7'),
(25, 5, 'Abbott', '4.0', 49, 1, '12.2'),
(26, 5, 'Sams', '2.0', 29, 1, '14.5'),
(27, 5, 'Tye', '4.0', 31, 1, '7.8'),
(28, 5, 'Swepson', '4.0', 23, 3, '5.8'),
(29, 5, 'Zampa', '3.0', 21, 1, '7.0'),
(31, 6, 'Chahar', '4.0', 34, 0, '8.5'),
(32, 6, 'Sundar', '4.0', 34, 2, '8.5'),
(33, 6, 'Natrajan', '4.0', 33, 1, '8.2'),
(34, 6, 'Chahal', '4.0', 41, 0, '10.2'),
(35, 6, 'Thakur', '4.0', 43, 1, '10.8');

-- --------------------------------------------------------

--
-- Table structure for table `featured_matches`
--

CREATE TABLE `featured_matches` (
  `MATCH_NAME` varchar(60) DEFAULT NULL,
  `TEAM1` varchar(20) DEFAULT NULL,
  `TEAM2` varchar(20) DEFAULT NULL,
  `V_ID` int(11) DEFAULT NULL,
  `DATE_OF_MATCH` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_matches`
--

INSERT INTO `featured_matches` (`MATCH_NAME`, `TEAM1`, `TEAM2`, `V_ID`, `DATE_OF_MATCH`) VALUES
('New Zealand vs Sri Lanka 1st T20', 'New Zealand', 'Sri Lanka', 6, 'Feb 22 2021, Mon'),
('South Africa vs England 1st ODI', 'South Africa', 'England', 5, 'Feb 22 2021, Mon'),
('India vs Pakistan 1st ODI', 'India', 'Pakistan', 1, 'Feb 24 2021, Wed'),
('Australia vs West Indies 3rd ODI', 'Australia', 'West Indies', 6, 'Feb 25 2021, Thurs'),
('New Zealand vs Sri Lanka 2nd T20', 'New Zealand', 'Sri Lanka', 2, 'Feb 26 2021, Fri'),
('India vs Pakistan 2nd ODI', 'India', 'Pakistan', 4, '27 Feb 2021, Sat');

--
-- Triggers `featured_matches`
--
DELIMITER $$
CREATE TRIGGER `increment_team1` AFTER INSERT ON `featured_matches` FOR EACH ROW BEGIN
    	UPDATE recent_matches
        set matches=matches+1
        where team_name=new.TEAM1;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `increment_team2` AFTER INSERT ON `featured_matches` FOR EACH ROW BEGIN
    	UPDATE recent_matches
        set matches=matches+1
        where team_name=new.TEAM2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `MATCH_ID` int(11) NOT NULL,
  `TOSS` varchar(10) DEFAULT NULL,
  `BAT_FIRST` varchar(10) DEFAULT NULL,
  `BAT_SECOND` varchar(10) DEFAULT NULL,
  `DATE_OF_MATCH` date DEFAULT NULL,
  `WON` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MATCH_ID`, `TOSS`, `BAT_FIRST`, `BAT_SECOND`, `DATE_OF_MATCH`, `WON`) VALUES
(100, 'Australia', 'India', 'Australia', '2020-12-04', 'India'),
(101, 'India', 'Australia', 'India', '2020-12-06', 'India'),
(102, 'India', 'Australia', 'India', '2020-12-08', 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `recent_matches`
--

CREATE TABLE `recent_matches` (
  `TEAM_NAME` varchar(30) DEFAULT NULL,
  `MATCHES` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent_matches`
--

INSERT INTO `recent_matches` (`TEAM_NAME`, `MATCHES`) VALUES
('Australia', 1),
('India', 2),
('England', 1),
('Pakistan', 2),
('West Indies', 1),
('South Africa', 1),
('Sri Lanka', 2),
('New Zealand', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `T_ID` int(11) NOT NULL,
  `MATCH_ID` int(11) DEFAULT NULL,
  `T_NAME` varchar(10) DEFAULT NULL,
  `TOTAL_RUNS` int(11) DEFAULT NULL,
  `TOTAL_WICKETS` int(11) DEFAULT NULL,
  `EXTRAS_GOT` int(11) DEFAULT NULL,
  `OVERS_PLAYED` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`T_ID`, `MATCH_ID`, `T_NAME`, `TOTAL_RUNS`, `TOTAL_WICKETS`, `EXTRAS_GOT`, `OVERS_PLAYED`) VALUES
(1, 100, 'Australia', 150, 7, 5, '20.0'),
(2, 100, 'India', 161, 7, 8, '20.0'),
(3, 101, 'Australia', 194, 7, 9, '20.0'),
(4, 101, 'India', 195, 4, 4, '19.4'),
(5, 102, 'Australia', 186, 5, 12, '20.0'),
(6, 102, 'India', 174, 7, 7, '20.0');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `V_ID` int(11) NOT NULL,
  `MATCH_ID` int(11) DEFAULT NULL,
  `STADIUM_NAME` varchar(20) DEFAULT NULL,
  `PLACE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`V_ID`, `MATCH_ID`, `STADIUM_NAME`, `PLACE`) VALUES
(1, 100, 'Manuka Oval', 'Canberra'),
(2, 101, 'Sydney Cricket Groun', 'Sydney'),
(4, NULL, 'Bay Oval', 'Mount Maunganui'),
(5, NULL, 'Hagley Oval', 'Christchurch'),
(6, NULL, 'Galle International ', 'Galle'),
(7, NULL, 'Riverside Ground', 'Chester-le-Street');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batsmen`
--
ALTER TABLE `batsmen`
  ADD PRIMARY KEY (`BT_ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `bowlers`
--
ALTER TABLE `bowlers`
  ADD PRIMARY KEY (`BW_ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `featured_matches`
--
ALTER TABLE `featured_matches`
  ADD KEY `V_ID` (`V_ID`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MATCH_ID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `MATCH_ID` (`MATCH_ID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`V_ID`),
  ADD KEY `MATCH_ID` (`MATCH_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batsmen`
--
ALTER TABLE `batsmen`
  ADD CONSTRAINT `batsmen_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `teams` (`T_ID`);

--
-- Constraints for table `bowlers`
--
ALTER TABLE `bowlers`
  ADD CONSTRAINT `bowlers_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `teams` (`T_ID`);

--
-- Constraints for table `featured_matches`
--
ALTER TABLE `featured_matches`
  ADD CONSTRAINT `featured_matches_ibfk_1` FOREIGN KEY (`V_ID`) REFERENCES `venue` (`V_ID`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`MATCH_ID`) REFERENCES `matches` (`MATCH_ID`);

--
-- Constraints for table `venue`
--
ALTER TABLE `venue`
  ADD CONSTRAINT `venue_ibfk_1` FOREIGN KEY (`MATCH_ID`) REFERENCES `matches` (`MATCH_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
