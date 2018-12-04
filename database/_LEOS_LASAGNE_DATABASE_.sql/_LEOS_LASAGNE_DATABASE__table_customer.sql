
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
-- Creation: Nov 28, 2018 at 10:57 PM
--

CREATE TABLE `customer` (
  `customerid` int(5) UNSIGNED NOT NULL,
  `customertypeid` int(5) NOT NULL,
  `customerPhone` varchar(14) DEFAULT NULL,
  `customerName` varchar(40) DEFAULT NULL,
  `customerAddress` varchar(45) DEFAULT NULL,
  `customerCity` varchar(20) DEFAULT NULL,
  `customerState` varchar(20) DEFAULT NULL,
  `customerZip` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `customertypeid`, `customerPhone`, `customerName`, `customerAddress`, `customerCity`, `customerState`, `customerZip`) VALUES
(1, 1, '(212)784-8545', 'Justin Bieber', '825 8th Avenue 28th Floor', 'New York', 'NY', 10019),
(2, 3, '(421)910-7462', 'Kanye West', '11790 Southampton Ct', 'Los Angeles', 'CA', 90077),
(3, 1, '(421)910-7462', 'Nicole Polizzi', '165 Summit Road', 'Florham Park', 'NJ', 7932),
(4, 2, '(212) 586-7000', 'Hotel New York Hilton Midtown', '1335 6th Ave', 'New York', 'NY', 10019),
(5, 2, '(212)398-1900', 'New York Marriott Marquis', '1535 Broadway', 'New York', 'NY', 10036),
(6, 2, '(212) 581-1000', 'Sheraton New York Times Square Hotel', '811 7th Avenue', 'New York', 'NY', 10019),
(7, 2, '(212) 736-5000', 'Hotel Pennsylvania', '401 7th Ave', 'New York', 'NY', 10001),
(8, 2, '(212) 883-1234', 'Grand Hyatt New York', '109 E 42nd St', 'New York', 'NY', 10017),
(9, 2, '(212)971-0101', 'The New Yorker, A Wyndham Hotel', '481 8th Ave,', 'New York', 'NY', 10001),
(10, 2, '(212) 201-2700', 'The Westin New York at Times Square', '270 W 43rd St', 'New York', 'NY', 10036),
(11, 2, '(646) 826-8600', 'W New York – Downtown', '8 Albany St, New York', 'New York', 'NY', 10006),
(12, 2, '(212) 755-4000', 'New York Marriott East Side', '525 Lexington Avenue at, E 49th St', 'New York', 'NY', 10017);
