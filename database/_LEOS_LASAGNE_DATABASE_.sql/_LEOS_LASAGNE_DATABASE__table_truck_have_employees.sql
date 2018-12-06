
-- --------------------------------------------------------

--
-- Table structure for table `truck_have_employees`
--
-- Creation: Nov 28, 2018 at 11:11 PM
-- Last update: Nov 28, 2018 at 11:11 PM
--

CREATE TABLE `truck_have_employees` (
  `truck_have_employeesId` int(5) NOT NULL,
  `truckId` int(5) DEFAULT NULL,
  `employeeId` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
