-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2020 at 09:10 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ontario_summer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

DROP TABLE IF EXISTS `tbl_content`;
CREATE TABLE IF NOT EXISTS `tbl_content` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(50) NOT NULL,
  `destination` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL,
  `activity1` varchar(60) NOT NULL,
  `activity2` varchar(60) NOT NULL,
  `activity3` varchar(60) NOT NULL,
  `icon1` varchar(60) NOT NULL,
  `icon2` varchar(60) NOT NULL,
  `icon3` varchar(60) NOT NULL,
  `link1` varchar(60) NOT NULL,
  `link2` varchar(60) NOT NULL,
  `link3` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`ID`, `image_name`, `destination`, `description`, `activity1`, `activity2`, `activity3`, `icon1`, `icon2`, `icon3`, `link1`, `link2`, `link3`) VALUES
(1, 'Toronto.png', 'Toronto', 'Toronto is Canada\'s largest city and a world leader in such areas as business, finance,\r\ntechnology, entertainment and culture. Its large population of immigrants from all over\r\nthe globe has also made Toronto one of the most multicultural cities in the world.', 'CN Tower', 'Blue Jays Game', 'Brewery Tour', 'fas fa-building', 'fas fa-baseballl-ball', 'fas fa-beer', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html'),
(2, 'Algonquin.jpg', 'Algonquin', 'The oldest provincial park in Ontario and the first provincial park in Canada, Algonquin Provincial Park (established 27 May 1893, 7723 km2) is located 250 km north of Toronto. The park is famous for its wildlife, which includes a large population of moose.', 'Hiking', 'Camping', 'Site seeing', 'fas fa-hiking', 'fas fa-campground', 'fas fa-binoculars', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html'),
(3, 'Niagara.jpg', 'Niagara', 'Niagara Falls is to waterfalls as the Great Wall of China is to walls, which is to say, it&#39;s not your average waterfall. Niagara Falls is really the collective name for three falls that straddle the United States/Canada border, as well as the names of the New York and Ontario cities that share the border.', 'Niagara Fall', 'Fallsview Casino', 'Ripleys Museum', 'fas fa-water', 'fas fa-dollar-sign', 'fas fa-hotel', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html'),
(4, 'Muskoka.jpg', 'Muskoka', 'Muskoka is an iconic area of Ontario&#39;s cottage country located approximately 200 km north of Toronto. A destination for seasonal residents and tourists who have been drawn by its natural beauty since the late 1800s, the district has equally been home to generations of permanent residents.', 'Camping', 'Fishing', 'Hiking', 'fas fa-campground', 'fas fa-helicopter', 'fas fa-hiking', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html'),
(5, 'Tobermory.jpg', 'Tobermory', 'Tobermory is a small community located at the northern tip of the Bruce Peninsula in the municipality of Northern Bruce Peninsula. It is 300 kilometres (190 miles) northwest of Toronto.', 'Hiking', 'Sight Seeing', 'Brewery Tour', 'fas fa-hiking', 'fas fa-binoculars', 'fas fa-beers', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html'),
(6, 'Ottawa.jpg', 'Ottawa', 'Ottawa, in the province of Ontario, is the capital of Canada. This picturesque and safe\r\ncity is the fourth largest city in the country, with a population of 883,391 as of the 2011\r\nCanadian census. It&#39;s on the eastern border of Ontario, just across the Ottawa River\r\nfrom Gatineau, Quebec.', 'Parliament Hill', 'Rideau Canal', 'CFL Game', 'fas fa-building', 'fas fa-water', 'fas fa-football-ball', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html', 'https://www.cntower.ca/en-ca/home.html');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

DROP TABLE IF EXISTS `tbl_signup`;
CREATE TABLE IF NOT EXISTS `tbl_signup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `country` varchar(74) NOT NULL,
  `subdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_email` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`ID`, `fname`, `lname`, `country`, `subdate`, `lastupdate`, `user_email`) VALUES
(1, 'Guilherme', 'Bueno da Silva', 'Canada', '2020-02-10 22:20:47', '2020-02-11 07:25:51', 'guilhermebueno6'),
(2, 'jon', 'teves', 'CA', '2020-02-10 22:20:47', '2020-02-10 22:22:49', 'jon@jon'),
(50, 'Guilherme', 'Bueno da Silva', 'Canada', '2020-02-10 23:57:43', '2020-02-11 07:35:17', 'guilhermebueno6@gmail.com'),
(51, 'Guilherme', 'Bueno da Silva', 'Canada', '2020-02-11 00:28:38', '2020-02-11 00:44:55', '89'),
(52, 'Guilherme', 'Bueno da Silva', 'Canada', '2020-02-11 07:11:43', '2020-02-11 07:11:43', 'hello');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
