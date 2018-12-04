
-- --------------------------------------------------------

--
-- Table structure for table `terminals`
--
-- Creation: Nov 28, 2018 at 11:13 PM
--

CREATE TABLE `terminals` (
  `terminalid` int(5) UNSIGNED NOT NULL,
  `terminalName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terminals`
--

INSERT INTO `terminals` (`terminalid`, `terminalName`) VALUES
(1, 'Terminal 1'),
(2, 'Terminal 7'),
(3, 'Terminal 8'),
(4, 'Terminal 5'),
(5, 'Terminal B'),
(6, 'Terminal A'),
(7, 'Terminal C/D'),
(8, 'Terminal C'),
(9, 'Terminal 4'),
(10, 'Terminal D');
