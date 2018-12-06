
-- --------------------------------------------------------

--
-- Table structure for table `access_control_list`
--
-- Creation: Nov 24, 2018 at 10:39 PM
-- Last update: Nov 24, 2018 at 10:47 PM
--

CREATE TABLE `access_control_list` (
  `id` int(11) NOT NULL,
  `access_level` int(9) DEFAULT NULL,
  `menu_item` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_control_list`
--

INSERT INTO `access_control_list` (`id`, `access_level`, `menu_item`, `url`, `date_created`) VALUES
(1, 1, 'Dashboard', 'dashboard.php', '2018-11-24 22:44:50'),
(2, 1, 'View Orders', 'orders.php', '2018-11-24 22:44:50'),
(3, 1, 'Print Reports', 'reports.php', '2018-11-24 22:44:50'),
(4, 1, 'Clients', 'clients.php', '2018-11-24 22:44:50'),
(5, 2, 'Place Order', 'placeOrder.php', '2018-11-24 22:44:50'),
(6, 2, 'View Orders', 'orders.php', '2018-11-24 22:44:50'),
(7, 3, 'Place Order', 'placeOrder.php', '2018-11-24 00:00:00'),
(8, 3, 'View Orders', 'orders.php', '2018-11-24 00:00:00');
