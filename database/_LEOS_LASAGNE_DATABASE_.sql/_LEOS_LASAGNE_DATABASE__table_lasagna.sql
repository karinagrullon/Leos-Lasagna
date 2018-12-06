
-- --------------------------------------------------------

--
-- Table structure for table `lasagna`
--
-- Creation: Nov 28, 2018 at 10:57 PM
-- Last update: Nov 28, 2018 at 10:58 PM
--

CREATE TABLE `lasagna` (
  `lasagnaId` int(5) UNSIGNED NOT NULL,
  `lasagnaType` varchar(30) DEFAULT NULL,
  `lasState` varchar(25) DEFAULT NULL,
  `unitPrice` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lasagna`
--

INSERT INTO `lasagna` (`lasagnaId`, `lasagnaType`, `lasState`, `unitPrice`) VALUES
(1, 'Plain Cheese', 'Frozen', 4),
(2, 'Spinach', 'Frozen', 4),
(3, 'Garlic Cheese', 'Frozen', 4),
(4, 'Vegetarian', 'Frozen', 4),
(5, 'Super Vegan', 'Frozen', 4),
(6, 'Plain Cheese', 'Pre-Cooked', 4),
(7, 'Garlic Cheese', 'Pre-Cooked', 4),
(8, 'Vegetarian', 'Pre-Cooked', 4),
(9, 'Super Vegan', 'Pre-Cooked', 4),
(10, 'Spinach', 'Pre-Cooked', 4);
