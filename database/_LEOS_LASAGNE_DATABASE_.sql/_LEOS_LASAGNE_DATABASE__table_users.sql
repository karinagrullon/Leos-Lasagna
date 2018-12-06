
-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Nov 17, 2018 at 04:19 PM
--

CREATE TABLE `users` (
  `user_id` int(9) UNSIGNED NOT NULL,
  `user_type_id` int(9) DEFAULT NULL,
  `user_client_id` int(9) UNSIGNED DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `user_middle_initial` varchar(5) DEFAULT NULL,
  `user_last` varchar(30) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_mobile` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_city` varchar(20) DEFAULT NULL,
  `user_state` varchar(255) DEFAULT NULL,
  `user_zipcode` varchar(255) DEFAULT NULL,
  `user_token` varchar(255) DEFAULT NULL,
  `user_salt` varchar(255) DEFAULT NULL,
  `user_login` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `user_client_id`, `user_name`, `user_middle_initial`, `user_last`, `user_email`, `user_phone`, `user_mobile`, `user_address`, `user_city`, `user_state`, `user_zipcode`, `user_token`, `user_salt`, `user_login`, `user_password`) VALUES
(41, 2, 38, 'MOCHEZ', NULL, NULL, 'SUPPORT@VITALS.AGENCY', '347-903-2727', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$11$af1732832b1f96a8fec53d', 'MO@VITALS.AGENCY', '$2y$11$af1732832b1f96a8fec53OKGS/rA2QHGAUk9RXYi0ZvI1Ypc7AXpm'),
(153, 2, 38, 'ADMIN', NULL, NULL, 'ADMIN@LC.CUNY.EDU', '347-903-2727', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$11$af1732832b1f96a8fec53d', 'ADMIN@LC.CUNY.EDU', '$2y$11$af1732832b1f96a8fec53OKGS/rA2QHGAUk9RXYi0ZvI1Ypc7AXpm'),
(154, 5, 38, 'AIRLINE', NULL, NULL, 'AIRLINE@LC.CUNY.EDU', '347-903-2727', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$11$af1732832b1f96a8fec53d', 'AIRLINE@LC.CUNY.EDU', '$2y$11$af1732832b1f96a8fec53OKGS/rA2QHGAUk9RXYi0ZvI1Ypc7AXpm');
