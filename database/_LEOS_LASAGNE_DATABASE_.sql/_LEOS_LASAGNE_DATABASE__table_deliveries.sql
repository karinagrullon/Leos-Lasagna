
-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--
-- Creation: Nov 28, 2018 at 11:00 PM
--

CREATE TABLE `deliveries` (
  `deliverieId` int(5) UNSIGNED NOT NULL,
  `orderId` int(5) DEFAULT NULL,
  `employeeId` int(5) DEFAULT NULL,
  `deliveryStatus` varchar(12) DEFAULT NULL,
  `delieveryDeparturedate` date DEFAULT NULL,
  `delieveryDeparturetime` time DEFAULT NULL,
  `deliveryArrivaldate` date DEFAULT NULL,
  `deliveryArrivaltime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`deliverieId`, `orderId`, `employeeId`, `deliveryStatus`, `delieveryDeparturedate`, `delieveryDeparturetime`, `deliveryArrivaldate`, `deliveryArrivaltime`) VALUES
(1, 1, 2, 'Delivered', '2018-11-04', '06:00:00', '2018-11-04', '10:00:00'),
(2, 1, 2, 'Delivered', '2018-11-11', '06:00:00', '2018-11-11', '12:00:00'),
(3, 2, 1, 'On Route', '2018-11-29', '10:00:00', NULL, NULL),
(4, 2, 1, 'On Route', '2018-11-29', '09:38:00', NULL, NULL),
(5, 3, 1, 'Pending', NULL, NULL, NULL, NULL),
(6, 4, 1, 'Pending', NULL, NULL, NULL, NULL),
(7, 3, 1, 'Pending', NULL, NULL, NULL, NULL),
(8, 4, 1, 'Pending', NULL, NULL, NULL, NULL);
