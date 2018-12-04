
-- --------------------------------------------------------

--
-- Table structure for table `employee`
--
-- Creation: Nov 24, 2018 at 11:15 PM
-- Last update: Nov 24, 2018 at 11:37 PM
--

CREATE TABLE `employee` (
  `employeeId` int(5) UNSIGNED NOT NULL,
  `employeeSSN` varchar(12) DEFAULT NULL,
  `employeeFirstName` varchar(25) DEFAULT NULL,
  `employeeSecondName` varchar(25) DEFAULT NULL,
  `employeeAddress` varchar(45) DEFAULT NULL,
  `employeePhone` varchar(14) DEFAULT NULL,
  `employeeEmail` varchar(35) DEFAULT NULL,
  `employeeTitle` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeId`, `employeeSSN`, `employeeFirstName`, `employeeSecondName`, `employeeAddress`, `employeePhone`, `employeeEmail`, `employeeTitle`) VALUES
(1, '121-854-9645', 'John', 'Doe', '103rd St Apt 14 NY 10010', '(345)924-0010', 'johndoe@aol.com', 'Truck Driver'),
(2, '236-965-1232', 'Gertrude', 'Elion', '2121 41st Ave Long Island City NY 11101', '(345)965-1255', 'geliol@hotmail.com', 'Truck Driver'),
(3, '852-964-7395', 'Issac', 'Newton', '200 W 40th St New York NY 11101', '(345)965-1255', 'i.newtom@hotmail.com', 'Head of Operations'),
(4, '789-900-6700', 'Michael', 'Jackson', '33 E 17th St New York, NY 10003', '(212)965-8596', 'm.jackson@yahoo.com', 'Chief Financial Officer'),
(5, '965-746-1123', 'Leo', 'Rizzo', '535 Madison Ave New York, NY1 10022', '(917)450-2030', 'leo.rizzo@yahoo.com', 'Chief Executive Officer');
