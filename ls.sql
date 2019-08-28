-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 04:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ls`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `divname` varchar(12) NOT NULL,
  `disname` varchar(15) NOT NULL,
  `area` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `divname`, `disname`, `area`) VALUES
(1, 'Barisal', 'Barguna', ''),
(2, 'Barisal', 'Barisal', ''),
(3, 'Barisal', 'Bhola', ''),
(4, 'Barisal', 'Jhalokati', ''),
(5, 'Barisal', 'Patuakhali', ''),
(6, 'Barisal', 'Pirojpur', ''),
(7, 'Chittagong', 'Bandarban', ''),
(8, 'Chittagong', 'Brahmanbaria', ''),
(9, 'Chittagong', 'Chandpur', ''),
(10, 'Chittagong', 'Chittagong', ''),
(11, 'Chittagong', 'Comilla', ''),
(12, 'Chittagong', 'Cox''s Bazar', ''),
(13, 'Chittagong', 'Feni', ''),
(14, 'Chittagong', 'Khagrachari', ''),
(15, 'Chittagong', 'Lakshmipur', ''),
(16, 'Chittagong', 'Noakhali', ''),
(17, 'Chittagong', 'Rangamati', ''),
(18, 'Dhaka', 'Dhaka', ''),
(19, 'Dhaka', 'Faridpur', ''),
(20, 'Dhaka', 'Gazipur', ''),
(21, 'Dhaka', 'Gopalganj', ''),
(22, 'Dhaka', 'Kishoreganj', ''),
(23, 'Dhaka', 'Madaripur', ''),
(24, 'Dhaka', 'Manikganj', ''),
(25, 'Dhaka', 'Munshiganj', ''),
(26, 'Dhaka', 'Narayanganj', ''),
(27, 'Dhaka', 'Narsingdi', ''),
(28, 'Dhaka', 'Rajbari', ''),
(29, 'Dhaka', 'Shariatpur', ''),
(30, 'Dhaka', 'Tangail', ''),
(31, 'Khulna', 'Bagerhat', ''),
(32, 'Khulna', 'Chuadanga', ''),
(33, 'Khulna', 'Jessore', ''),
(34, 'Khulna', 'Jhenaidah', ''),
(35, 'Khulna', 'Khulna', ''),
(36, 'Khulna', 'Kushtia', ''),
(37, 'Khulna', 'Magura', ''),
(38, 'Khulna', 'Meherpur', ''),
(39, 'Khulna', 'Narail', ''),
(40, 'Khulna', 'Satkhira', ''),
(41, 'Mymensingh', 'Jamalpur', ''),
(42, 'Mymensingh', 'Mymensingh', ''),
(43, 'Mymensingh', 'Netrokona', ''),
(44, 'Mymensingh', 'Sherpur', ''),
(45, 'Rajshahi', 'Bogra', ''),
(46, 'Rajshahi', 'Jaipurhat', ''),
(47, 'Rajshahi', 'Naogaon', ''),
(48, 'Rajshahi', 'Natore', ''),
(49, 'Rajshahi', 'Nawabganj', ''),
(50, 'Rajshahi', 'Pabna', ''),
(51, 'Rajshahi', 'Rajshahi', ''),
(52, 'Rajshahi', 'Sirajganj', ''),
(53, 'Rangpur', 'Dinajpur', ''),
(54, 'Rangpur', 'Gaibandha', ''),
(55, 'Rangpur', 'Kurigram', ''),
(56, 'Rangpur', 'Lalmonirhat', ''),
(57, 'Rangpur', 'Nilphamari', ''),
(58, 'Rangpur', 'Panchagarh', ''),
(59, 'Rangpur', 'Rangpur', ''),
(60, 'Rangpur', 'Thakurgaon', ''),
(61, 'Sylhet', 'Habiganj', ''),
(62, 'Sylhet', 'Moulvibazar', ''),
(63, 'Sylhet', 'Sunamganj', ''),
(64, 'Sylhet', 'Sylhet', ''),
(65, 'Dhaka', 'Dhaka', 'Adabor'),
(66, 'Dhaka', 'Dhaka', 'Agargaon'),
(67, 'Dhaka', 'Dhaka', 'Badda'),
(68, 'Dhaka', 'Dhaka', 'Bangshal'),
(69, 'Dhaka', 'Dhaka', 'Biman Bandar'),
(70, 'Dhaka', 'Dhaka', 'Cantonment'),
(71, 'Dhaka', 'Dhaka', 'Chawkbazar M'),
(72, 'Dhaka', 'Dhaka', 'Dakshinkhan'),
(73, 'Dhaka', 'Dhaka', 'Darus Salam'),
(74, 'Dhaka', 'Dhaka', 'Demra'),
(75, 'Dhaka', 'Dhaka', 'Dhanmondi'),
(76, 'Dhaka', 'Dhaka', 'Gendaria'),
(77, 'Dhaka', 'Dhaka', 'Gulshan'),
(78, 'Dhaka', 'Dhaka', 'Hazaribagh'),
(79, 'Dhaka', 'Dhaka', 'Jatrabari'),
(80, 'Dhaka', 'Dhaka', 'Kadamtali'),
(81, 'Dhaka', 'Dhaka', 'Kafrul'),
(82, 'Dhaka', 'Dhaka', 'Kalabagan'),
(83, 'Dhaka', 'Dhaka', 'Kamringir Ch'),
(84, 'Dhaka', 'Dhaka', 'Khilgaon'),
(85, 'Dhaka', 'Dhaka', 'Khilkhet'),
(86, 'Dhaka', 'Dhaka', 'Kotwali'),
(87, 'Dhaka', 'Dhaka', 'Lalbagh'),
(88, 'Dhaka', 'Dhaka', 'Mirpur'),
(89, 'Dhaka', 'Dhaka', 'Mohammadpur'),
(90, 'Dhaka', 'Dhaka', 'Motijheel'),
(91, 'Dhaka', 'Dhaka', 'New Market'),
(92, 'Dhaka', 'Dhaka', 'Pallabi'),
(93, 'Dhaka', 'Dhaka', 'Paltan'),
(94, 'Dhaka', 'Dhaka', 'Ramna'),
(95, 'Dhaka', 'Dhaka', 'Rampura'),
(96, 'Dhaka', 'Dhaka', 'Sabujbagh'),
(97, 'Dhaka', 'Dhaka', 'Shah Ali'),
(98, 'Dhaka', 'Dhaka', 'Shahbagh'),
(99, 'Dhaka', 'Dhaka', 'Sher-e-Bangl'),
(100, 'Dhaka', 'Dhaka', 'Shyampur'),
(101, 'Dhaka', 'Dhaka', 'Sutrapur'),
(102, 'Dhaka', 'Dhaka', 'Tejgaon'),
(103, 'Dhaka', 'Dhaka', 'Tejgaon Indu'),
(104, 'Dhaka', 'Dhaka', 'Turag'),
(105, 'Dhaka', 'Dhaka', 'Uttar Khan'),
(106, 'Dhaka', 'Dhaka', 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hpid` varchar(13) NOT NULL,
  `dr_name` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hpid`, `dr_name`, `category`, `time`) VALUES
('8-3', 'prof. Dr. A R Khan', 'Child surgery specialist', '4pm-7pm'),
('8-3', 'Dr. A T M Atiqur Rahman', 'Child specialist', '5pm-6pm'),
('8-3', 'Dr. A K M Samshuddin', 'Cinsultant Serjont', '3pm-5pm'),
('8-3', 'Prof. Dr. Syeed Mahamudur Rahm', 'Pediatric & general Serjont ', '7pm-8pm'),
('8-3', 'Kamil Ara Khan', 'Consultant (Gayeeni OBS) ', '4pm-8pm'),
('8-3', 'Dr. Nasrin Sultana Rumi', 'Gynochologist', '3pm-5pm'),
('8-3', 'Prof. Dr. Mohammad Mahabubul H', 'Child specialist', '4.30pm-6.30'),
('8-3', 'Dr. Armana Islam', 'Consultant (Gayeeni OBS) ', '5pm-7pm'),
('8-3', 'Dr. A S M Lutfor Rahman', 'Nose & ear specialist', '2pm-3pm');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `htid` varchar(13) NOT NULL,
  `package` varchar(15) NOT NULL,
  `facility` varchar(30) NOT NULL,
  `cost` double NOT NULL,
  `check_in_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`htid`, `package`, `facility`, `cost`, `check_in_out`) VALUES
('88-1', 'Family ', '2 bedroom', 1000, 0),
('88-1', 'Family', '2bed, Family,Single', 1200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `iid` varchar(13) NOT NULL,
  `img` varchar(500) NOT NULL,
  `website` varchar(30) NOT NULL,
  `cell` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`iid`, `img`, `website`, `cell`) VALUES
('8-2', '17622716_1821869004726619_996877214_o.jpg', 'wwww.depham hospital.com', '8153301'),
('8-3', '8-3.jpg', '', ''),
('8-4', '8-4.jpg', '', ''),
('18-2', '18-2.jpg', '', ''),
('18-3', '18-3.jpg', '', ''),
('18-4', '18-4.jpg', '', ''),
('18-5', '18-5.jpg', '', ''),
('18-6', '18-6.jpg', '', ''),
('18-7', '18-7.jpg', '', ''),
('18-8', '18-7.jpg', '', ''),
('8-5', '8-5.jpg', '', ''),
('8-6', '8-6.jpg', '', ''),
('88-1', '88-1.jpg', 'www.tonyhotel.com', ''),
('19-1', '19-1.jpg', 'www.agora.com', ''),
('19-2', '19-2.jpg', 'www.apex.com', ''),
('19-3', '19-3.jpg', 'www.artisan.com', ''),
('19-4', '19-4.jpg', 'www.geneticplaza.com', ''),
('19-5', '19-5.jpg', 'www.meenabazar.com', ''),
('19-6', '19-6.jpg', 'www.persona.com', ''),
('19-7', '19-7.jpg', 'www.rapaplaza.com', ''),
('19-8', '19-8.jpg', 'www.textmart.com', ''),
('20-1', '20-1.jpg', 'www.nazrulinstitute.com', ''),
('18-1', '18-1.jpg', '', ''),
('18-9', '18-9.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_area`
--

CREATE TABLE `main_area` (
  `id` varchar(13) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` varchar(35) NOT NULL,
  `road_no` varchar(10) NOT NULL,
  `post_code` int(11) NOT NULL,
  `district` varchar(20) NOT NULL,
  `division` varchar(15) NOT NULL,
  `rating` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_area`
--

INSERT INTO `main_area` (`id`, `name`, `area`, `road_no`, `post_code`, `district`, `division`, `rating`) VALUES
('18-1', 'Xenial ', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('18-2', 'Shorma Palace', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('18-3', 'Rosh', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('18-4', 'Shampan', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '8'),
('18-5', 'Xindian', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('18-6', 'Formosa Q Q Tea & Cafe', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '8'),
('18-7', 'Bar-B-Q Tonite', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '8'),
('18-8', 'Sugar & Spice', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '8'),
('18-9', 'Cheers', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('19-1', 'Agora', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '**'),
('19-2', 'Apex', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***'),
('19-3', 'Artisan', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '**'),
('19-4', 'Genetic Plaza', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***'),
('19-5', 'Meena Bazar', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***'),
('19-6', 'Persona', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***'),
('19-7', 'Rapa Plaza', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***'),
('19-8', 'Textmart', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***'),
('20-1', 'Nazrul Institute', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '**'),
('8-3', 'Pancare Hospital LTD.', 'House#4/A,27(old),Dhanmondi', 'Road #16 (', 1209, 'Dhaka', 'Dhaka', '9'),
('8-4', 'Yamagata Dental', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('8-5', 'Bangladesh Eye Hospital', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('8-6', 'Depham Hospital', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '9'),
('88-1', 'Tony khan Institute & hotel manegement', 'Dhanmondi', '27', 1207, 'Dhaka', 'Dhaka', '***');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rid` varchar(13) NOT NULL,
  `menu` varchar(25) NOT NULL,
  `price` varchar(8) NOT NULL,
  `offer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rid`, `menu`, `price`, `offer`) VALUES
('18-1', '', '', ''),
('18-2', '', '', ''),
('18-3', '', '', ''),
('18-6', 'Chicken tanduri Plate', '', ''),
('18-6', 'Chowmen', '', ''),
('18-6', 'New Special Pizza', '', ''),
('18-6', 'Beef Massala', '', ''),
('18-6', 'Garlic Nan', '', ''),
('18-6', 'Pasta', '', ''),
('', '', '', '10% Discount for stu'),
('18-8', '', '', '10% Discount for stu');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `sid` varchar(13) NOT NULL,
  `category` varchar(50) NOT NULL,
  `floor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`sid`, `category`, `floor`) VALUES
('19-2', 'Shoe Store', '3'),
('19-3', 'Textile Store', '2,3,4'),
('19-3', 'Shoe Store', '1'),
('19-4', 'Textile Store', '2,3,4'),
('19-5', 'Grocery', '1,2'),
('19-5', 'Textile Store', '3'),
('19-5', 'Beauti Porlour', '4'),
('19-6', 'Perlour', '2,3,4'),
('19-6', 'Textile Store', '1,5'),
('19-7', 'Jwellary', '3'),
('19-7', 'Joyeta Foundation', '4,5'),
('19-8', 'Textile Store', '2,3,4'),
('19-1', 'Grocery', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tid` varchar(13) NOT NULL,
  `category` varchar(15) NOT NULL,
  `time` varchar(11) NOT NULL,
  `offday` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tid`, `category`, `time`, `offday`) VALUES
('20-1', 'Museum', '', 'Offday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_area`
--
ALTER TABLE `main_area`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
