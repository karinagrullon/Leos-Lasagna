
-- --------------------------------------------------------

--
-- Table structure for table `airport_has_airline`
--
-- Creation: Nov 28, 2018 at 10:56 PM
--

CREATE TABLE `airport_has_airline` (
  `airport_has_airlineid` int(5) NOT NULL,
  `airlineId` int(5) NOT NULL,
  `airportId` int(5) NOT NULL,
  `dailyFlightCount` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport_has_airline`
--

INSERT INTO `airport_has_airline` (`airport_has_airlineid`, `airlineId`, `airportId`, `dailyFlightCount`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 2),
(3, 1, 3, 1),
(4, 1, 4, 2),
(5, 1, 5, 3),
(6, 1, 14, 2),
(7, 1, 6, 2),
(8, 1, 7, 1),
(9, 1, 8, 2),
(10, 2, 9, 2),
(11, 2, 3, 1),
(12, 2, 5, 3),
(13, 2, 10, 3),
(14, 2, 8, 3),
(15, 2, 11, 3),
(16, 2, 12, 2),
(17, 2, 13, 3);
