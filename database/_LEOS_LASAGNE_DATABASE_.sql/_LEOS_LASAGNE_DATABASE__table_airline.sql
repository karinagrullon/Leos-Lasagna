
-- --------------------------------------------------------

--
-- Table structure for table `airline`
--
-- Creation: Nov 28, 2018 at 10:54 PM
--

CREATE TABLE `airline` (
  `airlineId` int(5) UNSIGNED NOT NULL,
  `airlineName` varchar(30) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`airlineId`, `airlineName`, `phone`, `email`) VALUES
(1, 'Air France', '(800)237-2747', 'mail.internet.afc@airfrance.fr'),
(2, 'Air Italy', '(718)751-4499', 'callcenter@airitaly.com'),
(3, 'Alaska Airlines', '(800)252-7522', 'last@alaskaair.com'),
(4, 'Alitalia', '(800)223-5730', 'Customer.relationsBe@alitalia.it'),
(5, 'American Airlines', '(800)433-7300', 'sean.bentel@aa.com'),
(6, 'British Airways', '(800)247-9297', 'DPO@BA.com'),
(7, 'Brussels Airlines', '(866)308-2230', 'callcenter.en@brusselsairlines.com'),
(8, 'Jetblue', '(800)538-2583', 'CustomerRecovery@jetblue.com'),
(9, 'Air Canada', '(888)247-2262', 'communication@aircanada.c'),
(10, 'Delta Airlines', '(800)433-7300', 'edward.bastian@delta.com'),
(11, 'Southwest airlines', '(800)435-9792', 'contact@swa.com'),
(12, 'Spirit', '(801)401-2222', 'contact@spirit.com'),
(13, 'United Airlines', '(800)241-6522', 'contact@united.com'),
(14, 'Austrain Airlines', '(310)616-5585', 'contact.austrian@ausairlines.com');
