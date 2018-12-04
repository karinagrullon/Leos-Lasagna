
-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--
-- Creation: Nov 17, 2018 at 04:19 PM
--

CREATE TABLE `user_type` (
  `user_type_id` int(9) UNSIGNED NOT NULL,
  `user_description` varchar(50) NOT NULL DEFAULT '',
  `user_comments` varchar(100) DEFAULT NULL,
  `user_access_level` int(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_description`, `user_comments`, `user_access_level`) VALUES
(2, 'ADMIN', 'ADMIN FUNCTIONS WITH LIMITED CLIENT AND DATA ACCESS', 1),
(4, 'AIRLINE', 'ACCESS TO CLIENT ONLY FUNCTIONALITY', 2),
(5, 'HOTEL', 'ACCESS TO CLIENT ONLY FUNCTIONALITY', 3),
(6, 'REGULAR', 'REGULAR USERS WITH PUBLIC ACCESS ONLY. THEY CAN ONLY ENTER ORDERS THROUGH THE SITE ON THE ORDER ENTR', 4);
