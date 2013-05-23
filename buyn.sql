-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2013 at 08:15 PM
-- Server version: 5.1.68-cll
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buyn`
--

-- --------------------------------------------------------

--
-- Table structure for table `accel`
--

CREATE TABLE IF NOT EXISTS `accel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `suburb` varchar(30) NOT NULL,
  `postcode` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `approval` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `accel`
--

INSERT INTO `accel` (`ID`, `type`, `company`, `title`, `firstname`, `lastname`, `state`, `email`, `address1`, `address2`, `suburb`, `postcode`, `phone`, `mobile`, `password`, `source`, `approval`) VALUES
(1, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'QLD', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', '123', 'Event', 'approved'),
(2, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'NT', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', '4444', 'Friend', 'approved'),
(3, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'NT', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'aaa', 'Event', '65731344046071'),
(5, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'SA', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'sss', 'Event', 'approved'),
(6, 'Architect', 'fffff', 'Mr', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', 'Close', 'yy', 'Wyoming', 2250, '612431999', '612461999', 'abc', 'Internet', '50820784969255'),
(7, 'Architect', 'fffff', 'mr', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', ' Close', '', 'Wyoming', 2250, '612261999', '61261999', 'abc', 'Internet', '7534694904461'),
(8, 'Architect', 'fffff', 'In-line table e', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', '12 Hakea Close', '', 'Wyoming', 2250, '63261999', '63261999', 'abc', 'Friend', '56474755518138'),
(9, 'Architect', 'fffff', 'In-line table e', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', '12 Hakea Close', '', 'Wyoming', 2250, '63261999', '63261999', 'abc', 'Friend', '24253706727176'),
(10, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'QLD', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'ffff', 'Event', '62284364923834'),
(11, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'VIC', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'fff', 'Event', '28058703802525'),
(12, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'QLD', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'fff', 'Internet', '51045863935723'),
(13, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'SA', 'rejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'fff', 'JH Employee', '86197526613250'),
(14, 'Architect', 'aaa', 'easyyest', 'Peter', 'Blonner', 'NT', 'peter@blonner.com', '2 Gibbes St', '', 'Brighton', 2250, '4444444564', '555', 'abc', 'Friend', '32357389619573'),
(15, 'Architect', 'aaa', 'testWeatherb', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', '2 Gies St', '', 'Brighton', 2131, '289583671', '555', 'abc', 'Friend', 'approved'),
(16, 'Architect', 'aaa', 'Mr', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', '2 Gies St', '', 'Brighton', 2131, '4444444564', '555', '123', 'Friend', '82488443842157'),
(17, 'Architect', 'aaa', 'Mr', 'Peter', 'Blonner', 'NSW', 'peter@blonner.com', '2 Gies St', '', 'Brighton', 2250, '4444444564', '555', '123', 'Friend', '97588500380516'),
(18, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'SA', 'rejauldu@yahoo.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'fff', 'Event', '11080542253330'),
(19, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'QLD', 'rejauldu@hotmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'ff', 'Event', '53540831990540'),
(20, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'QLD', 'reja@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'ff', 'Event', '77752954186871'),
(21, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'QLD', 'rejauffldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'ff', 'JH Employee', '14618771849200'),
(22, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'TAS', 'rffejauldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'ff', 'Internet', '87969540338963'),
(23, 'Architect', 'Anonymous', 'Do not apply', 'Rejaul', 'Karim', 'SA', 'rejaussldu@gmail.com', 'University of Dhaka', 'f', 'Dhaka', 1000, 'f', 'rejauldu', 'ff', 'Event', '21142281545326'),
(24, 'Architect', 'asss', 'aa', 'aa', 'ss', 'NSW', '', 'sss', 'df', 'df', 0, 'df', 'df', 'df', 'Print', '58096784772351');

-- --------------------------------------------------------

--
-- Table structure for table `halifax`
--

CREATE TABLE IF NOT EXISTS `halifax` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `project_status` varchar(30) NOT NULL DEFAULT '(empty)',
  `originator` varchar(30) NOT NULL DEFAULT '(empty)',
  `originator_email` varchar(50) NOT NULL DEFAULT '(empty)',
  `project_name` varchar(200) NOT NULL DEFAULT '(empty)',
  `project_description` varchar(400) NOT NULL DEFAULT '(empty)',
  `site_address` varchar(50) NOT NULL DEFAULT '(empty)',
  `suburb` varchar(30) NOT NULL DEFAULT '(empty)',
  `postcode` int(11) NOT NULL DEFAULT '0',
  `source` varchar(35) NOT NULL DEFAULT '(empty)',
  `segment` varchar(35) NOT NULL DEFAULT '(empty)',
  `category` varchar(35) NOT NULL DEFAULT '(empty)',
  `type` varchar(35) NOT NULL DEFAULT '(empty)',
  `follow_up_date` varchar(12) NOT NULL DEFAULT '(empty)',
  `est_project_run` int(3) NOT NULL DEFAULT '0',
  `est_delivery` varchar(12) NOT NULL,
  `project_area` int(11) NOT NULL DEFAULT '0',
  `cost_per_m2` int(11) NOT NULL DEFAULT '0',
  `estimated_value` int(11) NOT NULL DEFAULT '0',
  `product` varchar(50) NOT NULL DEFAULT '(empty)',
  `colour` varchar(40) NOT NULL DEFAULT '(empty)',
  `finish` varchar(10) NOT NULL DEFAULT '(empty)',
  `remarks` varchar(500) NOT NULL DEFAULT '(empty)',
  `state` varchar(30) NOT NULL DEFAULT '(empty)',
  `job_entered` varchar(100) NOT NULL DEFAULT '(empty)',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=318 ;

--
-- Dumping data for table `halifax`
--

INSERT INTO `halifax` (`ID`, `project_status`, `originator`, `originator_email`, `project_name`, `project_description`, `site_address`, `suburb`, `postcode`, `source`, `segment`, `category`, `type`, `follow_up_date`, `est_project_run`, `est_delivery`, `project_area`, `cost_per_m2`, `estimated_value`, `product`, `colour`, `finish`, `remarks`, `state`, `job_entered`) VALUES
(166, 'OPEN', 'Originato', 'ffff@tyy.com', 'Project name', 'descriptionss', 'Site address', '10/12/13', 1002, 'Cold call', 'Medium Density', 'Retail', 'Extension & Addition', '', 30, '', 18, 18, 29, 'Products', 'Toast ChromaShieldâ„¢ 205 ', 'Satins', 'Hbhjnnnnjnbbbbbbbbbbb\n\n\n\nremark', '-1', '03/06/2013'),
(303, 'CLOSED', '', 'abc@abc.com', '', '', '', '', 17, 'Marketting', 'Home Improvement', 'Public Building & Facilities', 'Extension & Addition', '', 100, '', 0, 0, 0, '', '-1', '', '', 'ACT', '12/06/2013'),
(304, 'CLOSED', 'APECE', 'apece@yahoo.codfgdfgdfgdfgdfgmbvv. Ccghhb vjhbvggg', 'Test project', 'Website', 'Dhaka', 'Dhaka', 57, 'Cordell', '0', 'Defence & Military', 'Extension & Addition', '10/06/2015', 56, '05/07/2017', 42, 45, 29, 'Software', 'Rawform ChromaShieldâ„¢ 203 ', 'Gloss', 'Good website', 'ACT', '04/11/2015'),
(305, 'CLOSED', 'Apece', 'ap@yahoo.com', 'Test project', 'Website', 'Dhaka', 'Dhaka', 57, 'Customer Link', 'Custom build house', 'Entertainment', 'Extension & Addition', '30/03/2013', 56, '26/07/2015', 42, 45, 29, 'Software', 'Stone ChromaShieldâ„¢ 204 ', 'Gloss', 'Good website', 'QLD', '01/01/2013'),
(306, 'CLOSED', 'APECE', 'apece@yahoo.com', 'Test project', 'Websites', 'Dhaka', 'Dhaka', 57, 'Customer Link', 'Custom build house', 'Defence & Military', 'Extension & Addition', '29/03/2013', 56, '30/03/2013', 42, 45, 29, 'Software', 'Blanc ChromaShieldâ„¢ 201 ', 'Gloss', 'Good website', 'QLD', '17/05/2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
