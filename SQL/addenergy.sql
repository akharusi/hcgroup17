-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 02:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addenergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `userID`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `wordID` int(11) NOT NULL,
  `keyWord` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`wordID`, `keyWord`) VALUES
(48, 'activism'),
(4, 'armed'),
(38, 'authoritarian'),
(25, 'breaches'),
(11, 'Brexit'),
(56, 'brutality'),
(7, 'change'),
(54, 'climate change'),
(21, 'conflict'),
(10, 'corruption'),
(1, 'crime'),
(57, 'criminal indictment'),
(27, 'cyber-crime'),
(36, 'data use'),
(24, 'deterrence'),
(53, 'digital disruption'),
(45, 'Disruption'),
(40, 'domestic policy'),
(13, 'failure'),
(29, 'foreign policy'),
(35, 'GDPA'),
(50, 'geopolitical risk'),
(49, 'global risk'),
(32, 'gun control'),
(22, 'hackers'),
(5, 'high'),
(30, 'impeachment'),
(43, 'inquiry'),
(12, 'instability'),
(39, 'lacking'),
(42, 'mass debt'),
(46, 'mass protests'),
(44, 'militarisation'),
(16, 'mistrust'),
(3, 'nationalisation'),
(37, 'nationalism'),
(26, 'offensive'),
(55, 'political violence'),
(28, 'populism'),
(52, 'protectionism'),
(47, 'protest'),
(41, 'religious divides'),
(19, 'retaliated'),
(20, 'retaliation'),
(51, 'revolutions'),
(8, 'riot'),
(2, 'risk'),
(33, 'rivalry'),
(17, 'scepticism'),
(34, 'security'),
(58, 'security law'),
(59, 'security laws'),
(15, 'tensions'),
(31, 'threats'),
(18, 'trade war'),
(23, 'unprecedented'),
(6, 'unpredictable'),
(9, 'violence'),
(14, 'war');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `userID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `message`, `userID`, `status`) VALUES
(1, 'I have a login issue, could you please take a look at it.', 1, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `rawrisks`
--

CREATE TABLE `rawrisks` (
  `riskID` int(11) NOT NULL,
  `riskTitle` varchar(1000) NOT NULL,
  `riskDescription` varchar(1000) NOT NULL,
  `riskType` varchar(255) NOT NULL,
  `riskProbability` varchar(255) NOT NULL,
  `riskConsequence` varchar(255) NOT NULL,
  `raw` varchar(255) NOT NULL,
  `riskDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawrisks`
--

INSERT INTO `rawrisks` (`riskID`, `riskTitle`, `riskDescription`, `riskType`, `riskProbability`, `riskConsequence`, `raw`, `riskDate`) VALUES
(1, 'Test', 'Hello there', 'Political', 'High', 'High', 'Moderate', 'January 15th, 2021'),
(2, ' 				Reality of Post-Communist Transitions Risks Entrenching EU-Central Europe Divide 			', 'Hungary’s prime minister, Viktor Orban, and his Polish counterpart, Mateusz Morawiecki, argue that new powers handed to the European Commission, allowing the EU to withhold payments of the €750bn Covid recovery package from member states that fail to meet EU standards on the rule of law, are a politically motivated attempt to target their countries. ', 'Political', 'Medium', 'Low', 'Tolerable', ' 			 							  			 									 						January 15, 2021					 											  		'),
(3, ' 				Belarus: Democratic awakening in stalemate 			', 'While Belarusian strongman Lukashenko has held onto power since the highly contested August 2020 presidential election, public discontent with the regime has persisted in the face of police brutality and human rights abuses. As the West increases sanctions on Belarusian officials and the Kremlin’s support transforms into pressure, it is critical to assess whether Europe’s last authoritarian stronghold will survive in 2021.', 'Political', 'High', 'High', 'Intolerable', ' 			 							  			 									 						January 15, 2021					 											  		'),
(4, ' 				Forever War: The Unfulfilled Peace in Colombia 			', 'Despite the signing of a peace agreement between the Colombian government and the FARC guerrilla organization in June 2016, Colombia continues to struggle with armed violence by far-left guerrilla groups including the ELN (Ejército de Liberación Nacional) and FARC dissidents, as well as by right wing paramilitaries and criminal cartels. The causes of this continued violence are numerous and range from the attitude of the Duque administration towards the peace agreement, to the situation in neighbouring Venezuela.', 'Political', 'High', 'High', 'Intolerable', ' 			 							  			 									 						January 13, 2021					 											  		'),
(5, ' 				A New Italian Hard-Right Coalition 			', 'Giorgia Meloni, leader of the Italian hard-right Brothers of Italy party, is successfully presenting herself as a viable, palatable and credible coalition candidate for the rightwing Northern League party, whose leader’s current reputation as an unreliable careerist is costing the League crucial votes.', 'Political', 'Medium', 'Low', 'Tolerable', ' 			 							  			 									 						January 13, 2021					 											  		'),
(6, ' 				The West Watches for a Sino-Russian Military Alliance 			', 'As a way to counterbalance a newly unified West under the Biden administration, China and Russia are steadily closing ranks. What was once a relatively cold relationship between Beijing and Moscow is now gradually evolving into a tacit, yet firm, geo-political and military cooperation.', 'Political', 'Medium', 'Low', 'Tolerable', ' 			 							  			 									 						January 11, 2021					 											  		'),
(7, ' 				Latin America &#8211; Russia&#8217;s Game in 2021: an Outlook 			', 'Latin America is at a turning point and there will be a lot at stake for Russia’s influence building in the region in 2021. The instability created by an unprecedented recession and an increased political polarisation in what promises to be a hectic electoral year as well as a more active US foreign policy after Trump’s neglect will probably increase Moscow’s appetite for the subcontinent.', 'Political', 'High', 'High', 'Intolerable', ' 			 							  			 									 						January 11, 2021					 											  		'),
(8, ' 				Italy: Will the Government Fall (Again)? 			', 'Amid a global pandemic and with 209 billion euros to be spent to counter the effects of the economic downturn (-9.9% GDP), the Italian government is facing yet another crisis. Will this lead to the third change in the executive in less than three years? Or will the majority find a compromise before it is too late?', 'Political', 'High', 'Medium', 'Moderate', ' 			 							  			 									 						January 10, 2021					 											  		'),
(9, ' 				Sweden’s Identity Crisis and the Rise of the Far Right 			', 'The rise of the populist, anti-immigrant, far-right Sweden Democrats party is accelerating the erosion of Swedish exceptionalism as we know it. Today, the central tenets of Swedish politics, culture and identity have never been more threatened.', 'Political', 'Medium', 'Low', 'Tolerable', ' 			 							  			 									 						January 2, 2021					 											  		');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `replyID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `reply` varchar(45) NOT NULL,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`replyID`, `postID`, `reply`, `adminID`) VALUES
(1, 1, 'An admin will reply back shortly.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `residualrisks`
--

CREATE TABLE `residualrisks` (
  `resID` int(11) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `mitigation` varchar(255) NOT NULL,
  `residualProbability` varchar(255) NOT NULL,
  `residualConsequence` varchar(255) NOT NULL,
  `residual` varchar(255) NOT NULL,
  `riskID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residualrisks`
--

INSERT INTO `residualrisks` (`resID`, `treatment`, `mitigation`, `residualProbability`, `residualConsequence`, `residual`, `riskID`) VALUES
(1, 'Update', 'Update', 'Update', 'Update', 'Update', 1),
(114, 'Update', 'Update', 'Update', 'Update', 'Update', 2),
(115, 'Avoid', 'hello', 'Low', 'Low', 'Prepare', 3),
(116, 'Avoid', 'Test again', 'Low', 'Medium', 'Prepare', 4),
(117, 'Avoid', 'Test', 'High', 'Medium', 'Prepare', 5),
(118, 'Update', 'Update', 'Update', 'Update', 'Update', 6),
(119, 'Update', 'Update', 'Update', 'Update', 'Update', 7),
(120, 'Update', 'Update', 'Update', 'Update', 'Update', 8),
(121, 'Update', 'Update', 'Update', 'Update', 'Update', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `contactNo` varchar(45) NOT NULL,
  `password` varchar(1000) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `firstName`, `lastName`, `contactNo`, `password`) VALUES
(1, 'A.Kharusi@edu.salford.ac.uk', 'AHMED', 'KHARUSI', '07787881231', '$2y$10$89w8.xIJV/XBItdAevdkxOyQYcII7XqhzUVohuckQYIKTFtxqDG2i'),
(2, 'A.Kharusi@edu.salford.ac.uk', 'Admin', 'Jake', '07787881231', '$2y$10$89w8.xIJV/XBItdAevdkxOyQYcII7XqhzUVohuckQYIKTFtxqDG2i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`wordID`),
  ADD UNIQUE KEY `keyWord_UNIQUE` (`keyWord`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID_idx` (`userID`);

--
-- Indexes for table `rawrisks`
--
ALTER TABLE `rawrisks`
  ADD PRIMARY KEY (`riskID`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`replyID`),
  ADD KEY `postID_idx` (`postID`),
  ADD KEY `adminID_idx` (`adminID`);

--
-- Indexes for table `residualrisks`
--
ALTER TABLE `residualrisks`
  ADD PRIMARY KEY (`resID`),
  ADD KEY `fk_risk_id` (`riskID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `wordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rawrisks`
--
ALTER TABLE `rawrisks`
  MODIFY `riskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `replyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residualrisks`
--
ALTER TABLE `residualrisks`
  MODIFY `resID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `adminID` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postID` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `residualrisks`
--
ALTER TABLE `residualrisks`
  ADD CONSTRAINT `fk_risk_id` FOREIGN KEY (`riskID`) REFERENCES `rawrisks` (`riskID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
