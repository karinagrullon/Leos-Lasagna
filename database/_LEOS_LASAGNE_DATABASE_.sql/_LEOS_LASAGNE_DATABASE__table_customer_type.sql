
-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--
-- Creation: Nov 28, 2018 at 10:59 PM
--

CREATE TABLE `customer_type` (
  `customerTypeId` int(5) UNSIGNED NOT NULL,
  `customerTypeDescription` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`customerTypeId`, `customerTypeDescription`) VALUES
(1, 'Online'),
(2, 'Hotel'),
(3, 'Regular');
