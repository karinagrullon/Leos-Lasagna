
-- --------------------------------------------------------

--
-- Table structure for table `deliveryintervals`
--
-- Creation: Nov 24, 2018 at 11:04 PM
-- Last update: Nov 24, 2018 at 11:40 PM
--

CREATE TABLE `deliveryintervals` (
  `deliveryIntervalsId` int(5) NOT NULL,
  `deliveriesIntervalsDesc` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryintervals`
--

INSERT INTO `deliveryintervals` (`deliveryIntervalsId`, `deliveriesIntervalsDesc`) VALUES
(1, 'Daily'),
(2, 'Weekly'),
(3, 'Monthly');
