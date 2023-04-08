-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 07:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aloha`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE IF NOT EXISTS `addcart` (
  `ad_id` int(100) NOT NULL AUTO_INCREMENT,
  `adl_id` int(100) NOT NULL,
  `adp_id` int(100) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_price` varchar(100) NOT NULL,
  `ad_quantity` varchar(100) NOT NULL DEFAULT '1',
  `ad_total` varchar(100) NOT NULL,
  `ad_status` varchar(100) NOT NULL DEFAULT 'not payed',
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`ad_id`, `adl_id`, `adp_id`, `ad_name`, `ad_price`, `ad_quantity`, `ad_total`, `ad_status`) VALUES
(1, 3, 7, 'Window Ac-2-5 Star(LW19I52MZ)', '36990', '2', '73980', 'payed'),
(2, 3, 9, 'Portable Ac-1-0 Star(LP12B01TP)', '28990', '1', '28990', 'payed'),
(3, 3, 3, 'Split Ac-2-5 Star(GLS24I56WBEL)', '38600', '1', '38600', 'not payed'),
(4, 3, 7, 'Window Ac-2-5 Star(LW19I52MZ)', '36990', '1', '36990', 'not payed'),
(5, 15, 3, 'Split Ac-2-5Â Star(GLS24I56WBEL)', '38600', '1', '38600', 'not payed');

-- --------------------------------------------------------

--
-- Table structure for table `credit_debit`
--

CREATE TABLE IF NOT EXISTS `credit_debit` (
  `cr_id` int(100) NOT NULL AUTO_INCREMENT,
  `crl_id` int(100) NOT NULL,
  `cr_cname` varchar(100) NOT NULL DEFAULT '0',
  `cr_cnumber` int(100) NOT NULL DEFAULT '0',
  `cr_cvv` int(100) NOT NULL DEFAULT '0',
  `cr_date` varchar(100) NOT NULL DEFAULT '0',
  `cr_name` varchar(100) NOT NULL,
  `cr_phone` varchar(100) NOT NULL,
  `cr_landmark` varchar(100) NOT NULL,
  `cr_town` varchar(100) NOT NULL,
  `cr_address` varchar(100) NOT NULL,
  `cr_status` varchar(100) NOT NULL,
  `cr_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `credit_debit`
--

INSERT INTO `credit_debit` (`cr_id`, `crl_id`, `cr_cname`, `cr_cnumber`, `cr_cvv`, `cr_date`, `cr_name`, `cr_phone`, `cr_landmark`, `cr_town`, `cr_address`, `cr_status`, `cr_time`) VALUES
(1, 3, 'john', 1234, 2, '01 / 01', 'john', '9876543210', 'near petrol pumb', 'thrissur', 'abcd[h] abc nagar,thrissur', 'credit/debit', '2022-01-14 05:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(100) NOT NULL AUTO_INCREMENT,
  `cl_id` int(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `cl_id`, `c_name`, `c_email`, `c_address`, `c_password`, `c_phone`) VALUES
(6, 15, 'Gautham', 'gauthamreghu@gmail.com', 'Pallath', 'rahulji', '566889998'),
(4, 13, 'Rahul', 'rahul@gmail.com', 'second street,LA', 'soman', '8765456787'),
(5, 14, 'Rahul', 'rahul@gmail.com', 'fffff', '123', '234243432');

-- --------------------------------------------------------

--
-- Table structure for table `distribute`
--

CREATE TABLE IF NOT EXISTS `distribute` (
  `d_id` int(100) NOT NULL AUTO_INCREMENT,
  `dp_id` int(100) NOT NULL,
  `ds_id` int(100) NOT NULL,
  `dsl_id` int(100) NOT NULL,
  `dtl_id` int(100) NOT NULL,
  `dt_name` varchar(100) NOT NULL,
  `dt_phone` varchar(100) NOT NULL,
  `dt_status` varchar(100) NOT NULL,
  `dt_process` varchar(100) NOT NULL DEFAULT 'nil',
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `distribute`
--

INSERT INTO `distribute` (`d_id`, `dp_id`, `ds_id`, `dsl_id`, `dtl_id`, `dt_name`, `dt_phone`, `dt_status`, `dt_process`) VALUES
(1, 7, 1, 3, 9, 'Asritha kr', '9876543210', 'distribute', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(100) NOT NULL AUTO_INCREMENT,
  `fl_id` int(100) NOT NULL,
  `f_feedback` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `fl_id`, `f_feedback`) VALUES
(1, 3, 'Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.'),
(2, 3, 'ORDER BY review DESC'),
(3, 3, 'hello i am here');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `l_id` int(100) NOT NULL AUTO_INCREMENT,
  `l_uname` varchar(100) NOT NULL,
  `l_password` varchar(100) NOT NULL,
  `l_type` varchar(100) NOT NULL,
  `l_approve` varchar(100) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `l_uname`, `l_password`, `l_type`, `l_approve`) VALUES
(2, 'admin@gmail.com', 'admin123', 'admin', 'approve'),
(15, 'gauthamreghu@gmail.com', 'rahulji', 'user', 'approve'),
(9, 'asritha@gmail.com', 'asritha123', 'technician', 'approve'),
(10, 'rahulratheesh7777@gmail.com', 'soman123', 'technician', 'approve'),
(11, 'krishnendhu123ks@gmail.com', 'krish123', 'technician', 'approve'),
(12, '', '', 'user', 'approve'),
(13, 'rahul@gmail.com', 'soman', 'user', 'approve'),
(14, 'rahul@gmail.com', '123', 'user', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_category` varchar(100) NOT NULL,
  `p_star` int(100) NOT NULL,
  `p_ton` int(100) NOT NULL,
  `p_brand` varchar(100) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_model` varchar(100) NOT NULL,
  `p_description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_category`, `p_star`, `p_ton`, `p_brand`, `p_price`, `p_model`, `p_description`, `image`) VALUES
(3, 'Split Ac', 5, 2, 'SAMSUNG', 38600, 'GLS24I56WBEL', 'The PM2.5 Air Filter in Lloyd ACs traps the airborne contaminants <br>including dust, pollen, spores, bacteria, viruses, etc. ', 'SSS.webp'),
(5, 'Split Ac', 5, 2, 'LLOYD', 49990, 'GLS18I56WBEL', 'PM2.5 Air Filter<br>Rapid Cooling : 18 Â°C in 45 second<br> Cools at 52 Â°C<br> Golden Eva Coils', 'sp34.jpg'),
(6, 'Split Ac', 3, 1, 'LLOYD', 32490, 'GLS12I36WSEL', 'PM2.5 Air Filter<br> Rapid Cooling : 18 Â°C in 45 second<br> Cools at 52 Â°C<br> Golden Eva Coils', 'GLS12I32WSEL-S11.jpg'),
(7, 'Window Ac', 5, 2, 'LLOYD', 36990, 'LW19I52MZ', 'Window Inverter AC<br> LED Display Remote Controlled Operation<br> Blue Fin Coil', 'GLW19I52MZ_small.jpg'),
(8, 'Window Ac', 3, 2, 'LLOYD', 28490, 'LW19B32EWS2', 'LED Display<br> Eco Friendly Refrigerant<br> Blue Fin Coil<br> Clean Air Filter', 'GLW19B32EWS2_small.jpg'),
(9, 'Portable Ac', 0, 1, 'LLOYD', 28990, 'LP12B01TP', 'Two Way Swing<br> Clean Air Filter<br> High Efficiency Cooling Tube<br> Blue Fin Coil', 'small45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `s_id` int(100) NOT NULL AUTO_INCREMENT,
  `sp_id` int(100) NOT NULL,
  `sl_id` int(100) NOT NULL,
  `s_type` varchar(100) NOT NULL,
  `s_pcategory` varchar(100) NOT NULL,
  `s_serialno` int(100) NOT NULL,
  `s_purchasedate` varchar(100) NOT NULL,
  `s_productmodel` varchar(100) NOT NULL,
  `s_visitdate` varchar(100) NOT NULL,
  `s_description` varchar(100) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `s_telephone` varchar(100) NOT NULL,
  `s_state` varchar(100) NOT NULL,
  `s_city` varchar(100) NOT NULL,
  `s_pincode` int(100) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_landmark` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_visittime` varchar(100) NOT NULL,
  `s_status` varchar(100) NOT NULL DEFAULT 'not distribute',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `sp_id`, `sl_id`, `s_type`, `s_pcategory`, `s_serialno`, `s_purchasedate`, `s_productmodel`, `s_visitdate`, `s_description`, `s_fname`, `s_lname`, `s_phone`, `s_telephone`, `s_state`, `s_city`, `s_pincode`, `s_address`, `s_landmark`, `s_email`, `s_visittime`, `s_status`) VALUES
(1, 7, 3, 'Installation', 'Window Ac', 123, '2022-01-14', 'LW19I52MZ', '2022-01-17', 'installation', 'john', 'ms', '9876543210', '+911234567890', 'Kerala', 'thrissur', 680999, 'abcd[h] abc nagar,thrissur', 'near petrol pumb', 'john@gmail.com', '10 AM - 12 Noon', 'not distribute');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE IF NOT EXISTS `technician` (
  `t_id` int(100) NOT NULL AUTO_INCREMENT,
  `tl_id` int(100) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `t_password` varchar(100) NOT NULL,
  `t_phone` varchar(100) NOT NULL,
  `t_qualification` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `t_experience` varchar(100) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`t_id`, `tl_id`, `t_name`, `t_email`, `t_address`, `t_password`, `t_phone`, `t_qualification`, `image`, `t_experience`) VALUES
(1, 9, 'Asritha kr', 'asritha@gmail.com', 'kojksdghkesjfg', 'asritha123', '9876543210', 'mca', 't4.jpg', '6 year'),
(2, 10, 'Rahul', 'rahulratheesh7777@gmail.com', 'hduhdauh', 'soman123', '8921444376', 'bcom', 't2.jpg', '4 year'),
(3, 11, 'krishnendhu', 'krishnendhu123ks@gmail.com', 'kollamkuzhy', 'krish123', '3233222123', 'bca', 't3.jpg', '3 year');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
