
-- --------------------------------------------------------

--
-- Table structure for table `truck`
--
-- Creation: Nov 28, 2018 at 11:17 PM
--

CREATE TABLE `truck` (
  `truckId` int(5) NOT NULL,
  `truckPlate` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`truckId`, `truckPlate`) VALUES
(1, 'GAP-4563'),
(2, 'EEV-2967');
