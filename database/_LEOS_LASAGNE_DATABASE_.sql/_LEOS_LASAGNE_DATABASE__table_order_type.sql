
-- --------------------------------------------------------

--
-- Table structure for table `order_type`
--
-- Creation: Nov 28, 2018 at 10:50 PM
-- Last update: Nov 28, 2018 at 10:51 PM
--

CREATE TABLE `order_type` (
  `orderTypeId` int(5) NOT NULL,
  `orderTypeDescription` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_type`
--

INSERT INTO `order_type` (`orderTypeId`, `orderTypeDescription`) VALUES
(1, 'Regular'),
(2, 'Recurring');
