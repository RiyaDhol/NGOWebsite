-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 04:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `positivity`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donarid` int(11) NOT NULL AUTO_INCREMENT,
  `donarname` varchar(30) NOT NULL,
  `donaremail` varchar(50) NOT NULL,
  `donarphoneno` int(11) NOT NULL,
  `donarmessage` text NOT NULL,
  `donaramount` varchar(20) NOT NULL,
  `donarcity` varchar(40) NOT NULL,
  `donarstate` varchar(40) NOT NULL,
  `donarreceipt` text NOT NULL,
  `donation_date` date NOT NULL,
  PRIMARY KEY (`donarid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donarid`, `donarname`, `donaremail`, `donarphoneno`, `donarmessage`, `donaramount`, `donarcity`, `donarstate`, `donarreceipt`, `donation_date`) VALUES
(1, 'Riya', 'riya@gmail.com', 897349953, 'God Bless all', '459', 'Bhilai', 'chhattisgarh', 'paytm-receipt.jpg', '2022-06-30'),
(2, 'saumyaa', 'saumya1990@yahoo.com', 2147483647, 'Supporting for a noble cause', '459', 'Durg', 'chhattisgarh', 'paytm-receipt.jpg', '2022-06-30'),
(8, 'chiragpandey', 'chiragpandey@gmail.com', 2147483647, 'A small help from my side', '459', 'Durg', 'chhattisgarh', 'paytm-receipt.jpg', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `our_events`
--

CREATE TABLE IF NOT EXISTS `our_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` text NOT NULL,
  `event_details` text NOT NULL,
  `event_path` text NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `our_events`
--

INSERT INTO `our_events` (`event_id`, `event_name`, `event_details`, `event_path`, `reg_date`) VALUES
(90, 'Diwali Celebration', 'We along with an organisation DTS Lyasa organized Diwali celebration for Anganbadi kids,Women and Physically impaired kids. Our team decided to disturbe snacks which included frooti , biscuits , aloo bhujiya and chocolates. We are privileged enough to have the facilities which we already have but we don''t realise that until we meet the people who are not. The privilege of being able to afford a quality education, a respectful life. We are all so grateful for our parents who are providing us all this. We are able to help the less fortunate, that is a privilege and that is a kind of privilege we should brag about, we should use that to help and bring smiles on as many faces as possible. ', 'banner.jpeg', '2022-06-29'),
(105, 'Winter Drive', 'During winter season , there are many people who don''t have any home to spend winters covering their bodies under warm blankets . So our team of positivity__xo provided blankets to those people who have to sleep outside in cold winter nights. We distributed blankets to people sleeping in the road side and also to people living in small basti.\r\n\r\n', 'WhatsApp Image 2022-06-29 at 2.10.49 PM.jpeg', '2022-06-29'),
(106, 'Birthday Celebration', 'Everyone wants to celebrate his/her birthday with their friends & families. Along with celebrating with loved ones we celebrate our birthday with people who don''t get involved in any celebrations.  We celebrated our founder''s birthday with small kids of Aaganbadi. along with cake cutting we distributed snacks and had so much fun there.', 'WhatsApp Image 2022-06-29 at 2.10.09 PM.jpeg', '2022-06-29'),
(107, 'New Year at Old Age Home', 'The fact that there still exists old age homes makes us sad right? But that is understandable, for those who Don have any family left or who is willing to stay there with the fellow mates of their age group. But the abandoned ones? How can someone abandon their parents? They provide whatever they can, everything they can, put in efforts to make you a better person but you abandon them when you grow up? We were so scared to ask them why were they living there. Because what if we are not ready forthe answer? What if brining that up hurts them Our team celebrated new year at Old Age Home with our elders. It was definitely the best start of a year.', 'WhatsApp Image 2022-06-29 at 2.10.43 PM.jpeg', '2022-06-29'),
(108, 'Holi Celebration', 'We along with an organisation DTS Lyasa organized Diwali celebration for Anganbadi kids,Women and Physically impaired kids. Our team decided to disturbe snacks which included frooti , biscuits , aloo bhujiya and chocolates. Each and every kid present there was so happy. And seeing them happy made us happiest.\r\n\r\n', 'WhatsApp Image 2022-06-29 at 2.10.39 PM (1).jpeg', '2022-06-29'),
(109, 'An Act of Kindness', 'Our motive is not only to fight with hunger but also to bring every children to school We distributed stationary item to the Aanganwadi kids and provided sessions on various topics like hygiene, discipline, importance of education etc.. Along with these we played many games with them and also organised several activities for them.It was a pleasure for us to see small kids studying with so much interest .We really want to see every children studying in school and making our country proud.', 'WhatsApp Image 2022-06-29 at 2.10.48 PM (1).jpeg', '2022-06-29'),
(110, 'Tohfa', 'Positivity__xo along with sukoon ek zariya organized Bhilai''s biggest Fundraising event "Tohfa". It was organized on the ocasssion of completion of 1 year of sukoon ek zariya.In this event, various local businesses were supported and some unprivilaged kids were given chance to perform in front of around 2k people. The fund raised in this event was used for providing necessary things to needy people.', 'WhatsApp Image 2022-06-29 at 6.07.48 PM.jpeg', '2022-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `q_username` varchar(40) NOT NULL,
  `q_head` varchar(40) NOT NULL,
  `q_desc` text NOT NULL,
  `q_reciever` varchar(40) NOT NULL DEFAULT 'admin',
  `q_date` date NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`qid`, `q_username`, `q_head`, `q_desc`, `q_reciever`, `q_date`) VALUES
(2, 'Pshukla@gmail.com', 'Query Reagarding Donation', 'Hey I want to donate!But the Q-R scan doesn''t work . What is the next step. ', 'admin', '2022-06-30'),
(3, 'admin@gmail.com', 'Reference to Donation', 'Thankyou for contacting us ! We would send you the payment details via your registered email. Please wait for atleast 24 hours , if not resolved then Drop a query again.', 'Pshukla@gmail.com', '2022-06-30'),
(10, 'chiragrupa@gmail.com', 'Volunteer Form Query', 'Do i need to pay something for becoming a volunteer . ', 'admin', '2022-07-02'),
(11, 'admin@gmail.com', 'Volunteer Form Query', 'Hey chiragrupa@gmail.com\r\nwe would like to inform you that there is no such payment need to be done for the volunteer.\r\nplease wait for further response .', 'chiragrupa@gmail.com', '2022-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` text NOT NULL,
  `user_phoneno` int(12) NOT NULL,
  `user_type` varchar(5) NOT NULL DEFAULT 'user',
  `reg_date` date NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `user_name`, `user_email`, `user_pass`, `user_phoneno`, `user_type`, `reg_date`) VALUES
(3, 'admin2', 'admin@gmail.com', 'admin', 8346676, 'admin', '2022-06-29'),
(5, 'Parul Shukla', 'Pshukla@gmail.com', 'pshukla', 2147483647, 'user', '2022-06-30'),
(6, 'saumyaa', 'saumya1990@yahoo.com', 'saumyaa', 82346843, 'user', '2022-06-30'),
(7, 'chirag', 'chiragrupa@gmail.com', 'chirag', 838326879, 'user', '2022-06-30'),
(8, 'saurabh ', 'saurabh12@gmail.com', 'saurabh', 82346843, 'user', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingevent`
--

CREATE TABLE IF NOT EXISTS `upcomingevent` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(20) NOT NULL,
  `edes` text NOT NULL,
  `edate` date NOT NULL,
  `ereg_date` date NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `upcomingevent`
--

INSERT INTO `upcomingevent` (`eid`, `eventname`, `edes`, `edate`, `ereg_date`) VALUES
(2, 'Monsoon Drive', 'To protect the homeless people from rain and spread awareness about safety and precautionary measures especially children.', '2022-07-12', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(20) NOT NULL,
  `vemail` varchar(30) NOT NULL,
  `vno` int(11) NOT NULL,
  `vdesc` varchar(50) NOT NULL,
  `vcity` varchar(20) NOT NULL,
  `vstate` varchar(20) NOT NULL,
  `vreg_date` date NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vid`, `vname`, `vemail`, `vno`, `vdesc`, `vcity`, `vstate`, `vreg_date`) VALUES
(1, 'saumyaa', 'saumya1990@yahoo.com', 82346843, 'I would like to Help and support Humankind.', 'Bhilai', 'chhattisgarh', '2022-06-30'),
(2, 'Riya', 'riya@gmail.com', 2147483647, 'I would like to help Others .', 'Durg', 'chhattisgarh', '2022-06-30'),
(3, 'chirag', 'chiragrupa@gmail.com', 2147483647, 'Would like to support the cause .', 'Bhilai', 'chhattisgarh', '2022-07-02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
