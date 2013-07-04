-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2013 at 09:58 AM
-- Server version: 5.6.10
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `live_search`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `fnStripTags`( Dirty varchar(21844) ) RETURNS varchar(21844) CHARSET utf8
    DETERMINISTIC
BEGIN
  DECLARE iStart, iEnd, iLength int;
    WHILE Locate( '<', Dirty ) > 0 And Locate( '>', Dirty, Locate( '<', Dirty )) > 0 DO
      BEGIN
        SET iStart = Locate( '<', Dirty ), iEnd = Locate( '>', Dirty, Locate('<', Dirty ));
        SET iLength = ( iEnd - iStart) + 1;
        IF iLength > 0 THEN
          BEGIN
            SET Dirty = Insert( Dirty, iStart, iLength, '');
          END;
        END IF;
      END;
    END WHILE;
    RETURN Dirty;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `se_info`
--

CREATE TABLE IF NOT EXISTS `se_info` (
  `id` int(11) NOT NULL,
  `cars` varchar(255) DEFAULT NULL,
  `for_sale` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_info`
--

INSERT INTO `se_info` (`id`, `cars`, `for_sale`, `name`) VALUES
(1, 'vw', 'yes', NULL),
(2, 'vF', 'yes', NULL),
(3, 'Mustang', 'yes', NULL),
(4, 'ford', 'yes', NULL),
(5, 'Honda', 'yes', NULL),
(6, 'Suzuki', 'yes', NULL),
(7, 'Mazda', 'yes', NULL),
(8, 'Daihatsu', 'yes', NULL),
(9, 'Chevy', 'yes', NULL),
(10, 'BMW', 'yes', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
