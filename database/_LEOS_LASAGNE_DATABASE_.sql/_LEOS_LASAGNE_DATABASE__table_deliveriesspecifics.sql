
-- --------------------------------------------------------

--
-- Table structure for table `deliveriesspecifics`
--
-- Creation: Nov 28, 2018 at 11:01 PM
--

CREATE TABLE `deliveriesspecifics` (
  `deliveriesSpecificsId` int(5) NOT NULL,
  `deliveryIntervalsId` int(5) NOT NULL,
  `orderId` int(5) DEFAULT NULL,
  `deliveriesAmount` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveriesspecifics`
--

INSERT INTO `deliveriesspecifics` (`deliveriesSpecificsId`, `deliveryIntervalsId`, `orderId`, `deliveriesAmount`) VALUES
(1, 2, 1, 200),
(2, 2, 2, 150),
(5, 2, 3, 350),
(6, 2, 4, 120);
