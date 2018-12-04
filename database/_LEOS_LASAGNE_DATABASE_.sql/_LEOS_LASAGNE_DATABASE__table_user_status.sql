
-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--
-- Creation: Nov 17, 2018 at 04:19 PM
-- Last update: Nov 17, 2018 at 04:19 PM
-- Last check: Nov 17, 2018 at 10:12 PM
--

CREATE TABLE `user_status` (
  `id` int(9) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Comment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `status`, `Comment`) VALUES
(1, 'A', 'Active'),
(2, 'I', 'Inactive'),
(3, 'B', 'Blocked'),
(4, 'R', 'Registered');
