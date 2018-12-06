
-- --------------------------------------------------------

--
-- Table structure for table `airport`
--
-- Creation: Nov 28, 2018 at 10:55 PM
--

CREATE TABLE `airport` (
  `airportId` int(5) UNSIGNED NOT NULL,
  `airportCode` varchar(3) DEFAULT NULL,
  `airportName` varchar(45) DEFAULT NULL,
  `airportAddress` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airportId`, `airportCode`, `airportName`, `airportAddress`) VALUES
(1, 'JFK', 'John F. Kennedy International Airport', 'Jamaica, NY 11430'),
(2, 'LGA', 'LaGuardia', 'Queens, NY 11371');
