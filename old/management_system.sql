-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 12:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_tbl`
--

CREATE TABLE `image_tbl` (
  `id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_tbl`
--

INSERT INTO `image_tbl` (`id`, `image_name`) VALUES
(17, 'img.jpg'),
(18, 'img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `category_name`) VALUES
(1, 'Body'),
(2, 'Collar'),
(3, 'Button'),
(4, 'Back Part'),
(5, 'Front Placket'),
(6, 'Cuff'),
(7, 'Chest Pocket'),
(8, 'Sleeve'),
(9, 'Front Panels'),
(10, 'Collar Band'),
(11, 'Back Yoke'),
(12, 'Back Pleat'),
(13, 'Back Panel'),
(14, 'Sleeve Placket'),
(15, 'Center Front'),
(16, 'Shoulder'),
(17, 'Shoulder Yoke'),
(18, 'Flap'),
(19, 'Side Seam'),
(20, 'Bottom Hem'),
(21, 'Label'),
(22, 'Button Hole'),
(23, 'Button Attach'),
(24, 'Upper Front'),
(25, 'Lower Font Body'),
(26, 'Care Label'),
(27, 'Size Label'),
(28, 'Main Label'),
(29, 'Box Label'),
(30, 'Yoke'),
(31, 'Tale'),
(32, 'Hem Gusset');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manager`
--

CREATE TABLE `tbl_manager` (
  `id` int(11) NOT NULL,
  `manager_name` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manager`
--

INSERT INTO `tbl_manager` (`id`, `manager_name`, `pass`) VALUES
(1, 'Mst.Nupur Akter', '123'),
(2, 'Mst.Tania Sultana', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prodction_officer`
--

CREATE TABLE `tbl_prodction_officer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prodction_officer`
--

INSERT INTO `tbl_prodction_officer` (`id`, `name`, `manager_id`) VALUES
(1, 'Md.Rahim Sarker', 1),
(2, 'Md.Karim Sarker', 1),
(4, 'Mst.Shova Akter', 2),
(5, 'Mst.Taposi Akter', 2),
(6, 'Mst.Meem Akter', 1),
(7, 'Mst.Maliha Akter', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_production`
--

CREATE TABLE `tbl_production` (
  `id` int(11) NOT NULL,
  `manager_id` varchar(100) NOT NULL,
  `production_id` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `workere_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_production`
--

INSERT INTO `tbl_production` (`id`, `manager_id`, `production_id`, `qty`, `workere_id`, `category_id`, `date`) VALUES
(1, '1', '1', '10', 1, 1, '2021-03-17'),
(2, '1', '2', '20', 4, 2, '2021-03-17'),
(3, '2', '5', '20', 9, 3, '2021-03-17'),
(4, '2', '4', '10', 7, 3, '2021-03-17'),
(5, '1', '1', '10pcs', 1, 2, '2021-03-18'),
(6, '1', '1', '10pcs', 1, 1, '2021-03-19'),
(7, '1', '1', '10pcs', 1, 3, '2021-04-01'),
(8, '2', '4', '20pc', 6, 3, '2021-04-03'),
(9, '2', '5', '20pcs', 8, 0, '2021-04-17'),
(10, '2', '5', '20pcs', 8, 2, '2021-04-17'),
(11, '1', '1', '10pcs', 1, 1, '2021-04-17'),
(12, '2', '4', '20pcs', 6, 2, '2021-04-17'),
(13, '2', '4', '20', 6, 3, '2021-04-21'),
(14, '2', '4', '10', 7, 2, '2021-04-21'),
(15, '2', '4', '10', 7, 2, '2021-04-21'),
(16, '2', '4', '10', 7, 2, '2021-04-21'),
(17, '2', '4', '10', 7, 2, '2021-04-21'),
(18, '2', '7', '30', 12, 1, '2021-04-21'),
(19, '1', '2', '10', 4, 2, '2021-04-22'),
(20, '2', '5', '10', 8, 3, '2021-04-22'),
(21, '1', '6', '20', 11, 3, '2021-04-22'),
(22, '1', '1', '20', 1, 3, '2021-04-22'),
(23, '1', '2', '10', 4, 1, '2021-04-22'),
(24, '1', '2', '20', 4, 2, '2021-04-22'),
(25, '1', '2', '10', 4, 2, '2021-04-22'),
(26, '1', '2', '10', 4, 2, '2021-04-22'),
(27, '1', '6', '30', 10, 2, '2021-04-22'),
(28, '1', '2', '30', 5, 1, '2021-04-22'),
(29, '1', '6', '10', 11, 2, '2021-04-22'),
(30, '2', '7', '10', 13, 3, '2021-04-22'),
(31, '2', '5', '10', 9, 3, '2021-04-22'),
(32, '1', '2', '40', 4, 1, '2021-04-24'),
(33, '1', '1', '10', 2, 1, '2021-05-03'),
(34, '2', '4', '10', 6, 1, '2021-05-03'),
(35, '2', '5', '10', 9, 1, '2021-05-03'),
(36, '2', '7', '10', 12, 1, '2021-05-03'),
(37, '2', '5', '10', 9, 1, '2021-05-03'),
(38, '2', '4', '10', 6, 1, '2021-05-03'),
(39, '2', '5', '10', 8, 1, '2021-05-03'),
(40, '2', '5', '10', 8, 1, '2021-05-03'),
(41, '2', '5', '10', 8, 1, '2021-05-03'),
(42, '1', '1', '10', 1, 1, '2021-05-03'),
(43, '1', '2', '10', 4, 3, '2021-05-03'),
(44, '1', '2', '10', 4, 3, '2021-05-03'),
(45, '1', '1', '10', 1, 3, '2021-05-03'),
(46, '1', '2', '10', 4, 3, '2021-05-03'),
(47, '1', '2', '10', 5, 3, '2021-05-03'),
(48, '1', '6', '10', 10, 3, '2021-05-03'),
(49, '1', '2', '10', 4, 3, '2021-05-03'),
(50, '1', '2', '10', 5, 3, '2021-05-03'),
(51, '1', '2', '10', 4, 3, '2021-05-03'),
(52, '1', '6', '10', 11, 3, '2021-05-03'),
(53, '2', '7', '10', 13, 3, '2021-05-03'),
(54, '1', '2', '10', 5, 3, '2021-05-03'),
(55, '1', '6', '10', 10, 3, '2021-05-03'),
(56, '2', '5', '10', 8, 1, '2021-05-03'),
(57, '1', '2', '10', 4, 1, '2021-05-03'),
(58, '1', '1', '10', 1, 1, '2021-05-03'),
(59, '1', '2', '10', 4, 1, '2021-05-03'),
(60, '1', '1', '10', 1, 1, '2021-05-03'),
(61, '1', '2', '10', 4, 2, '2021-05-03'),
(62, '1', '1', '10', 1, 2, '2021-05-03'),
(63, '1', '1', '10', 2, 2, '2021-05-03'),
(64, '1', '1', '10', 1, 2, '2021-05-03'),
(65, '2', '5', '10', 8, 2, '2021-05-03'),
(66, '1', '2', '10', 4, 2, '2021-05-03'),
(67, '1', '1', '10', 1, 1, '2021-06-02'),
(68, '1', '1', '10', 1, 1, '2021-06-06'),
(69, '2', '4', '20', 6, 2, '2021-06-06'),
(70, '2', '4', '10', 7, 2, '2021-06-08'),
(71, '1', '1', '10', 1, 4, '2021-06-19'),
(72, '1', '2', '30', 4, 4, '2021-06-20'),
(73, '2', '4', '20', 6, 4, '2021-06-20'),
(74, '2', '5', '10', 9, 4, '2021-06-20'),
(75, '1', '1', '10', 1, 4, '2021-06-20'),
(76, '2', '5', '10', 8, 4, '2021-06-20'),
(77, '2', '7', '40', 12, 4, '2021-06-20'),
(78, '2', '5', '20', 8, 4, '2021-06-20'),
(79, '2', '7', '30', 13, 4, '2021-06-20'),
(80, '2', '5', '50', 8, 4, '2021-06-20'),
(81, '2', '4', '30', 6, 4, '2021-06-20'),
(82, '1', '2', '30', 4, 4, '2021-06-20'),
(83, '1', '2', '30', 5, 4, '2021-06-20'),
(84, '1', '6', '15', 10, 4, '2021-06-20'),
(85, '2', '5', '20', 8, 4, '2021-06-20'),
(86, '2', '5', '20', 8, 4, '2021-06-20'),
(87, '1', '2', '20', 4, 4, '2021-06-20'),
(88, '2', '7', '20', 13, 4, '2021-06-20'),
(89, '2', '7', '20', 12, 4, '2021-06-20'),
(90, '2', '7', '20', 12, 4, '2021-06-20'),
(91, '2', '5', '20', 8, 4, '2021-06-20'),
(92, '2', '5', '10', 9, 4, '2021-06-20'),
(93, '1', '2', '20', 4, 4, '2021-06-20'),
(94, '1', '2', '10', 4, 4, '2021-06-20'),
(95, '1', '1', '20', 2, 4, '2021-06-20'),
(96, '2', '5', '20', 8, 4, '2021-06-20'),
(97, '1', '2', '20', 4, 4, '2021-06-20'),
(98, '1', '2', '20', 4, 4, '2021-06-20'),
(99, '1', '6', '10', 11, 4, '2021-06-20'),
(100, '1', '2', '20', 4, 4, '2021-06-20'),
(101, '1', '6', '20', 10, 4, '2021-06-20'),
(102, '1', '1', '10', 1, 4, '2021-06-20'),
(103, '1', '2', '20', 4, 4, '2021-06-20'),
(104, '2', '7', '20', 12, 5, '2021-06-20'),
(105, '1', '2', '20', 4, 5, '2021-06-20'),
(106, '1', '2', '20', 4, 5, '2021-06-20'),
(107, '1', '6', '30', 10, 5, '2021-06-20'),
(108, '1', '2', '30', 4, 5, '2021-06-20'),
(109, '1', '2', '20', 4, 5, '2021-06-20'),
(110, '1', '2', '20', 4, 5, '2021-06-20'),
(111, '1', '2', '30', 5, 5, '2021-06-20'),
(112, '1', '2', '30', 5, 5, '2021-06-20'),
(113, '1', '2', '30', 4, 5, '2021-06-20'),
(114, '1', '2', '30', 4, 5, '2021-06-20'),
(115, '1', '2', '20', 5, 5, '2021-06-20'),
(116, '1', '1', '20', 1, 5, '2021-06-20'),
(117, '1', '2', '30', 4, 5, '2021-06-20'),
(118, '1', '2', '20', 5, 5, '2021-06-20'),
(119, '1', '2', '30', 4, 5, '2021-06-20'),
(120, '2', '5', '20', 9, 5, '2021-06-20'),
(121, '1', '1', '20', 2, 5, '2021-06-20'),
(122, '1', '2', '20', 5, 5, '2021-06-20'),
(123, '2', '5', '20', 8, 5, '2021-06-20'),
(124, '2', '5', '20', 9, 5, '2021-06-20'),
(125, '1', '2', '20', 4, 5, '2021-06-20'),
(126, '1', '2', '20', 4, 5, '2021-06-20'),
(127, '1', '2', '20', 4, 5, '2021-06-20'),
(128, '1', '2', '10', 4, 5, '2021-06-20'),
(129, '1', '2', '10', 5, 5, '2021-06-20'),
(130, '1', '2', '10', 4, 5, '2021-06-20'),
(131, '2', '5', '20', 8, 6, '2021-06-20'),
(132, '2', '4', '30', 6, 6, '2021-06-20'),
(133, '1', '2', '20', 4, 6, '2021-06-20'),
(134, '1', '2', '20', 4, 6, '2021-06-20'),
(135, '2', '7', '20', 12, 6, '2021-06-20'),
(136, '2', '4', '40', 6, 6, '2021-06-20'),
(137, '2', '5', '40', 8, 6, '2021-06-20'),
(138, '2', '7', '20', 13, 0, '2021-06-20'),
(139, '1', '2', '20', 5, 7, '2021-06-20'),
(140, '2', '5', '30', 8, 6, '2021-06-20'),
(141, '1', '2', '20', 5, 6, '2021-06-20'),
(142, '1', '6', '20', 10, 6, '2021-06-20'),
(143, '1', '6', '20', 11, 6, '2021-06-20'),
(144, '1', '2', '20', 4, 6, '2021-06-20'),
(145, '1', '6', '30', 10, 6, '2021-06-20'),
(146, '1', '6', '20', 10, 6, '2021-06-20'),
(147, '1', '2', '10', 5, 6, '2021-06-20'),
(148, '2', '5', '30', 9, 6, '2021-06-20'),
(149, '2', '5', '30', 8, 6, '2021-06-20'),
(150, '1', '1', '10', 1, 6, '2021-06-20'),
(151, '2', '5', '20', 9, 6, '2021-06-20'),
(152, '1', '2', '20', 4, 6, '2021-06-20'),
(153, '1', '6', '30', 11, 6, '2021-06-20'),
(154, '1', '2', '30', 4, 6, '2021-06-20'),
(155, '1', '2', '20', 4, 6, '2021-06-20'),
(156, '1', '1', '20', 1, 6, '2021-06-20'),
(157, '1', '2', '20', 4, 6, '2021-06-20'),
(158, '2', '5', '30', 8, 6, '2021-06-20'),
(159, '1', '2', '20', 5, 6, '2021-06-20'),
(160, '1', '2', '20', 4, 6, '2021-06-20'),
(161, '2', '5', '20', 8, 6, '2021-06-20'),
(162, '1', '2', '10', 4, 7, '2021-06-20'),
(163, '1', '2', '20', 4, 7, '2021-06-20'),
(164, '2', '5', '30', 9, 7, '2021-06-20'),
(165, '1', '6', '10', 10, 7, '2021-06-20'),
(166, '1', '2', '20', 4, 7, '2021-06-20'),
(167, '1', '2', '10', 5, 7, '2021-06-20'),
(168, '1', '6', '10', 10, 7, '2021-06-20'),
(169, '2', 'Select production officer', '30', 0, 7, '2021-06-20'),
(170, '2', '5', '20', 8, 7, '2021-06-20'),
(171, '1', '6', '10', 11, 7, '2021-06-20'),
(172, '1', '2', '20', 4, 7, '2021-06-20'),
(173, '2', '7', '10', 12, 7, '2021-06-20'),
(174, '1', '2', '10', 4, 7, '2021-06-20'),
(175, '1', '2', '20', 4, 7, '2021-06-20'),
(176, '1', '2', '20', 4, 7, '2021-06-20'),
(177, '1', '2', '10', 4, 7, '2021-06-20'),
(178, '1', '2', '10', 4, 7, '2021-06-20'),
(179, '2', '5', '10', 8, 7, '2021-06-20'),
(180, '2', '7', '10', 13, 7, '2021-06-20'),
(181, '1', '1', '40', 1, 8, '2021-06-20'),
(182, '1', '6', '10', 11, 8, '2021-06-20'),
(183, '1', '2', '10', 4, 0, '2021-06-20'),
(184, '2', '5', '10', 9, 8, '2021-06-20'),
(185, '2', '7', '20', 12, 8, '2021-06-20'),
(186, '2', '5', '30', 8, 8, '2021-06-20'),
(187, '1', '1', '10', 2, 8, '2021-06-20'),
(188, '1', '2', '30', 4, 8, '2021-06-20'),
(189, '2', '5', '40', 9, 8, '2021-06-20'),
(190, '2', '7', '40', 12, 8, '2021-06-20'),
(191, '2', '7', '20', 12, 8, '2021-06-20'),
(192, '1', '2', '40', 5, 8, '2021-06-20'),
(193, '1', '1', '50', 1, 8, '2021-06-20'),
(194, '1', '6', '50', 11, 8, '2021-06-20'),
(195, '2', '5', '50', 9, 8, '2021-06-20'),
(196, '1', '2', '20', 5, 8, '2021-06-20'),
(197, '1', '6', '50', 10, 8, '2021-06-20'),
(198, '1', '2', '10', 4, 8, '2021-06-20'),
(199, '2', '5', '10', 8, 8, '2021-06-20'),
(200, '1', '2', '10', 4, 9, '2021-06-20'),
(201, '2', '4', '20', 7, 9, '2021-06-20'),
(202, '2', '5', '40', 8, 9, '2021-06-20'),
(203, '2', '7', '30', 12, 9, '2021-06-20'),
(204, '1', '6', '10', 11, 9, '2021-06-20'),
(205, '1', '2', '30', 4, 9, '2021-06-20'),
(206, '1', '1', '10', 1, 9, '2021-06-20'),
(207, '1', '1', '20', 2, 9, '2021-06-20'),
(208, '1', '2', '30', 4, 9, '2021-06-20'),
(209, '1', '1', '20', 1, 9, '2021-06-21'),
(210, '1', '2', '10', 4, 9, '2021-06-21'),
(211, '1', '6', '30', 10, 9, '2021-06-21'),
(212, '1', '6', '40', 11, 9, '2021-06-21'),
(213, '2', '4', '50', 6, 9, '2021-06-21'),
(214, '2', '4', '10', 7, 9, '2021-06-21'),
(215, '2', '5', '20', 8, 9, '2021-06-21'),
(216, '2', '5', '20', 8, 9, '2021-06-21'),
(217, '2', '5', '40', 9, 9, '2021-06-21'),
(218, '2', '7', '10', 12, 9, '2021-06-21'),
(219, '2', '7', '10', 13, 9, '2021-06-21'),
(220, '1', '1', '10', 1, 10, '2021-06-21'),
(221, '1', '1', '20', 2, 10, '2021-06-21'),
(222, '1', '6', '30', 10, 10, '2021-06-21'),
(223, '1', '2', '10', 4, 10, '2021-06-21'),
(224, '1', '2', '40', 5, 10, '2021-06-21'),
(225, '1', '6', '50', 10, 10, '2021-06-21'),
(226, '1', '6', '50', 11, 10, '2021-06-21'),
(227, '1', '6', '60', 10, 10, '2021-06-21'),
(228, '2', '4', '50', 6, 10, '2021-06-21'),
(229, '2', '4', '40', 7, 10, '2021-06-21'),
(230, '2', '5', '60', 8, 10, '2021-06-21'),
(231, '2', '5', '60', 9, 10, '2021-06-21'),
(232, '2', '5', '60', 8, 10, '2021-06-21'),
(233, '2', '7', '10', 12, 10, '2021-06-21'),
(234, '2', '7', '20', 13, 10, '2021-06-21'),
(235, '2', '7', '30', 13, 10, '2021-06-21'),
(236, '1', '1', '10', 1, 11, '2021-06-21'),
(237, '1', '1', '20', 2, 11, '2021-06-21'),
(238, '1', '2', '20', 4, 11, '2021-06-21'),
(239, '1', '2', '50', 5, 11, '2021-06-21'),
(240, '1', '6', '10', 10, 11, '2021-06-21'),
(241, '1', '6', '50', 11, 11, '2021-06-21'),
(242, '1', '6', '30', 10, 11, '2021-06-21'),
(243, '2', '4', '10', 6, 11, '2021-06-21'),
(244, '1', '1', '30', 2, 11, '2021-06-21'),
(245, '2', '5', '10', 8, 11, '2021-06-21'),
(246, '2', '5', '50', 9, 11, '2021-06-21'),
(247, '2', '7', '10', 12, 11, '2021-06-21'),
(248, '2', '7', '10', 13, 11, '2021-06-21'),
(249, '1', '1', '10', 1, 11, '2021-06-21'),
(250, '1', '2', '10', 4, 11, '2021-06-21'),
(251, '1', '1', '20', 2, 11, '2021-06-21'),
(252, '2', '4', '60', 6, 11, '2021-06-21'),
(253, '2', '5', '10', 9, 11, '2021-06-21'),
(254, '1', '2', '60', 4, 11, '2021-06-21'),
(255, '2', '7', '10', 12, 11, '2021-06-21'),
(256, '1', '1', '10', 1, 12, '2021-06-21'),
(257, '1', '1', '20', 2, 12, '2021-06-21'),
(258, '1', '1', '50', 2, 12, '2021-06-21'),
(259, '1', '2', '10', 4, 12, '2021-06-21'),
(260, '1', '2', '10', 4, 12, '2021-06-21'),
(261, '1', '2', '40', 5, 12, '2021-06-21'),
(262, '1', '6', '60', 10, 12, '2021-06-21'),
(263, '1', '6', '20', 10, 12, '2021-06-21'),
(264, '1', '6', '20', 10, 12, '2021-06-21'),
(265, '2', '4', '10', 6, 12, '2021-06-21'),
(266, '2', '4', '60', 7, 12, '2021-06-21'),
(267, '2', '5', '60', 8, 12, '2021-06-21'),
(268, '2', '5', '60', 9, 12, '2021-06-21'),
(269, '2', '7', '60', 12, 12, '2021-06-21'),
(270, '2', '7', '60', 13, 12, '2021-06-21'),
(271, '1', '1', '10', 1, 12, '2021-06-21'),
(272, '1', '1', '20', 2, 12, '2021-06-21'),
(273, '2', '5', '60', 8, 12, '2021-06-21'),
(274, '2', '7', '10', 12, 12, '2021-06-21'),
(275, '1', '1', '20', 1, 13, '2021-06-21'),
(276, '1', '1', '20', 1, 13, '2021-06-21'),
(277, '1', '1', '50', 2, 13, '2021-06-21'),
(278, '1', '2', '20', 4, 13, '2021-06-21'),
(279, '1', '2', '30', 5, 13, '2021-06-21'),
(280, '1', '6', '50', 10, 13, '2021-06-21'),
(281, '1', '6', '30', 11, 13, '2021-06-21'),
(282, '2', '4', '60', 7, 13, '2021-06-21'),
(283, '2', '5', '20', 8, 13, '2021-06-21'),
(284, '2', '5', '50', 9, 13, '2021-06-21'),
(285, '2', '7', '70', 12, 13, '2021-06-21'),
(286, '1', '1', '10', 1, 13, '2021-06-21'),
(287, '2', '5', '30', 9, 13, '2021-06-21'),
(288, '2', '5', '10', 8, 13, '2021-06-21'),
(289, '1', '1', '10', 1, 13, '2021-06-22'),
(290, '1', '1', '20', 2, 13, '2021-06-22'),
(291, '1', '2', '20', 4, 13, '2021-06-22'),
(292, '1', '2', '30', 4, 13, '2021-06-22'),
(293, '1', '2', '50', 5, 13, '2021-06-22'),
(294, '2', '4', '30', 6, 13, '2021-06-22'),
(295, '2', '5', '10', 8, 13, '2021-06-22'),
(296, '2', '7', '30', 12, 13, '2021-06-22'),
(297, '1', '1', '10', 1, 14, '2021-06-22'),
(298, '1', '1', '10', 2, 14, '2021-06-22'),
(299, '1', '2', '50', 4, 14, '2021-06-22'),
(300, '1', '2', '10', 5, 14, '2021-06-22'),
(301, '1', '6', '10', 10, 14, '2021-06-22'),
(302, '2', '5', '40', 8, 14, '2021-06-22'),
(303, '2', '5', '10', 9, 14, '2021-06-22'),
(304, '2', '7', '30', 12, 14, '2021-06-22'),
(305, '1', '1', '10', 1, 14, '2021-06-22'),
(306, '2', '4', '30', 6, 14, '2021-06-22'),
(307, '2', '5', '30', 8, 14, '2021-06-22'),
(308, '2', '7', '10', 12, 14, '2021-06-22'),
(309, '2', '7', '50', 13, 14, '2021-06-22'),
(310, '1', '1', '10', 1, 14, '2021-06-22'),
(311, '2', '7', '10', 12, 14, '2021-06-22'),
(312, '1', '6', '10', 10, 14, '2021-06-22'),
(313, '1', '1', '10', 1, 14, '2021-06-22'),
(314, '1', '1', '10', 1, 15, '2021-06-22'),
(315, '1', '1', '20', 2, 15, '2021-06-22'),
(316, '1', '2', '10', 4, 15, '2021-06-22'),
(317, '1', '2', '60', 5, 15, '2021-06-22'),
(318, '1', '2', '40', 5, 15, '2021-06-22'),
(319, '1', '6', '10', 10, 15, '2021-06-22'),
(320, '1', '6', '10', 11, 15, '2021-06-22'),
(321, '2', '4', '10', 6, 15, '2021-06-22'),
(322, '2', '4', '30', 7, 15, '2021-06-22'),
(323, '2', '5', '20', 8, 15, '2021-06-22'),
(324, '2', '5', '20', 9, 15, '2021-06-22'),
(325, '2', '5', '40', 9, 15, '2021-06-22'),
(326, '2', '7', '50', 12, 15, '2021-06-22'),
(327, '2', '5', '50', 9, 15, '2021-06-22'),
(328, '2', '5', '50', 8, 15, '2021-06-22'),
(329, '2', '7', '10', 13, 15, '2021-06-22'),
(330, '2', '7', '30', 12, 15, '2021-06-22'),
(331, '1', '2', '50', 4, 15, '2021-06-22'),
(332, '1', '1', '10', 1, 16, '2021-06-22'),
(333, '1', '1', '10', 2, 16, '2021-06-22'),
(334, '1', '2', '10', 4, 16, '2021-06-22'),
(335, '1', '2', '10', 5, 16, '2021-06-22'),
(336, '1', '2', '10', 5, 16, '2021-06-22'),
(337, '1', '6', '10', 10, 16, '2021-06-22'),
(338, '1', '6', '40', 11, 16, '2021-06-22'),
(339, '2', '4', '30', 6, 16, '2021-06-22'),
(340, '2', '4', '10', 7, 16, '2021-06-22'),
(341, '2', '5', '10', 8, 16, '2021-06-22'),
(342, '2', '5', '30', 9, 16, '2021-06-22'),
(343, '2', '7', '10', 12, 16, '2021-06-22'),
(344, '2', '7', '10', 13, 16, '2021-06-22'),
(345, '1', '1', '10', 1, 16, '2021-06-22'),
(346, '1', '1', '10', 2, 16, '2021-06-22'),
(347, '1', '2', '40', 4, 16, '2021-06-22'),
(348, '1', '2', '20', 4, 16, '2021-06-22'),
(349, '2', '5', '30', 8, 16, '2021-06-22'),
(350, '1', '2', '10', 5, 16, '2021-06-22'),
(351, '1', '1', '10', 1, 17, '2021-06-22'),
(352, '1', '1', '20', 2, 17, '2021-06-22'),
(353, '1', '2', '20', 4, 17, '2021-06-22'),
(354, '1', '2', '50', 5, 16, '2021-06-22'),
(355, '1', '6', '70', 10, 17, '2021-06-22'),
(356, '1', '2', '30', 4, 17, '2021-06-22'),
(357, '1', '6', '10', 10, 17, '2021-06-22'),
(358, '1', '6', '10', 11, 17, '2021-06-22'),
(359, '2', '4', '10', 6, 17, '2021-06-22'),
(360, '2', '4', '20', 7, 17, '2021-06-22'),
(361, '2', '5', '10', 8, 17, '2021-06-22'),
(362, '2', '5', '10', 9, 17, '2021-06-22'),
(363, '1', '1', '10', 1, 17, '2021-06-22'),
(364, '1', '2', '20', 4, 17, '2021-06-22'),
(365, '2', '4', '10', 6, 17, '2021-06-22'),
(366, '1', '2', '10', 4, 16, '2021-06-22'),
(367, '1', '1', '20', 1, 17, '2021-06-22'),
(368, '1', '1', '60', 2, 17, '2021-06-22'),
(369, '1', '2', '20', 4, 17, '2021-06-22'),
(370, '2', '4', '30', 6, 17, '2021-06-22'),
(371, '2', '5', '30', 8, 17, '2021-06-22'),
(372, '2', '5', '10', 8, 17, '2021-06-22'),
(373, '2', '7', '20', 12, 17, '2021-06-22'),
(374, '2', '7', '10', 13, 17, '2021-06-22'),
(375, '1', '1', '10', 1, 18, '2021-06-22'),
(376, '1', '1', '50', 2, 18, '2021-06-22'),
(377, '1', '2', '20', 4, 18, '2021-06-22'),
(378, '1', '2', '20', 5, 18, '2021-06-22'),
(379, '1', '2', '30', 5, 18, '2021-06-22'),
(380, '1', '6', '50', 10, 18, '2021-06-22'),
(381, '1', '6', '30', 11, 18, '2021-06-22'),
(382, '2', '4', '30', 6, 18, '2021-06-22'),
(383, '2', '4', '50', 7, 18, '2021-06-22'),
(384, '2', '5', '40', 8, 18, '2021-06-22'),
(385, '2', '5', '50', 9, 18, '2021-06-22'),
(386, '2', '7', '10', 12, 18, '2021-06-22'),
(387, '2', '7', '10', 13, 18, '2021-06-22'),
(388, '1', '1', '10', 1, 19, '2021-06-22'),
(389, '1', '1', '20', 2, 19, '2021-06-22'),
(390, '1', '1', '10', 2, 19, '2021-06-22'),
(391, '1', '2', '20', 4, 19, '2021-06-22'),
(392, '1', '2', '10', 5, 19, '2021-06-22'),
(393, '1', '6', '30', 10, 19, '2021-06-22'),
(394, '1', '6', '30', 11, 19, '2021-06-22'),
(395, '1', '6', '50', 10, 19, '2021-06-22'),
(396, '1', '6', '10', 11, 19, '2021-06-22'),
(397, '2', '4', '50', 6, 19, '2021-06-22'),
(398, '2', '4', '50', 7, 19, '2021-06-22'),
(399, '2', '5', '20', 8, 19, '2021-06-22'),
(400, '2', '5', '10', 9, 19, '2021-06-22'),
(401, '1', '1', '10', 1, 20, '2021-06-22'),
(402, '1', '1', '10', 2, 22, '2021-06-22'),
(403, '1', '2', '10', 4, 20, '2021-06-22'),
(404, '1', '2', '40', 5, 20, '2021-06-22'),
(405, '1', '6', '10', 10, 20, '2021-06-22'),
(406, '1', '2', '10', 5, 20, '2021-06-22'),
(407, '1', '6', '10', 11, 20, '2021-06-22'),
(408, '2', '4', '10', 6, 20, '2021-06-22'),
(409, '2', '4', '30', 7, 20, '2021-06-22'),
(410, '2', '5', '10', 8, 20, '2021-06-22'),
(411, '2', '5', '50', 9, 20, '2021-06-22'),
(412, '2', '5', '10', 8, 20, '2021-06-22'),
(413, '2', '7', '10', 12, 20, '2021-06-22'),
(414, '1', '1', '10', 1, 21, '2021-06-22'),
(415, '1', '1', '10', 2, 22, '2021-06-22'),
(416, '2', '5', '60', 9, 22, '2021-06-22'),
(417, '2', '7', '10', 12, 22, '2021-06-22'),
(418, '2', '7', '10', 13, 22, '2021-06-22'),
(419, '1', '1', '10', 1, 22, '2021-06-22'),
(420, '1', '1', '20', 2, 22, '2021-06-22'),
(421, '2', '5', '10', 8, 22, '2021-06-22'),
(422, '2', '4', '20', 6, 22, '2021-06-22'),
(423, '2', '7', '10', 12, 22, '2021-06-22'),
(424, '2', '5', '10', 8, 22, '2021-06-22'),
(425, '1', '1', '20', 1, 23, '2021-06-22'),
(426, '1', '1', '10', 2, 23, '2021-06-22'),
(427, '1', '2', '10', 4, 23, '2021-06-22'),
(428, '1', '2', '10', 5, 23, '2021-06-22'),
(429, '2', '4', '20', 6, 23, '2021-06-22'),
(430, '1', '6', '50', 10, 23, '2021-06-22'),
(431, '2', '4', '30', 6, 23, '2021-06-22'),
(432, '1', '2', '10', 4, 23, '2021-06-22'),
(433, '2', '7', '30', 12, 23, '2021-06-22'),
(434, '2', '7', '10', 13, 23, '2021-06-22'),
(435, '1', '2', '10', 4, 23, '2021-06-22'),
(436, '2', '7', '30', 12, 23, '2021-06-22'),
(437, '2', '7', '10', 12, 23, '2021-06-22'),
(438, '1', '1', '10', 1, 21, '2021-06-22'),
(439, '1', '1', '10', 2, 21, '2021-06-22'),
(440, '1', '2', '50', 4, 21, '2021-06-22'),
(441, '1', '2', '10', 5, 21, '2021-06-22'),
(442, '1', '2', '40', 4, 21, '2021-06-22'),
(443, '1', '6', '10', 10, 21, '2021-06-22'),
(444, '1', '6', '20', 11, 21, '2021-06-22'),
(445, '2', '4', '10', 6, 21, '2021-06-22'),
(446, '2', '4', '20', 7, 21, '2021-06-22'),
(447, '2', '4', '30', 7, 21, '2021-06-22'),
(448, '2', '5', '10', 8, 21, '2021-06-22'),
(449, '2', '5', '30', 9, 21, '2021-06-22'),
(450, '2', '7', '30', 12, 21, '2021-06-22'),
(451, '2', '7', '10', 13, 21, '2021-06-22'),
(452, '1', '1', '10', 1, 24, '2021-06-22'),
(453, '1', '1', '10', 2, 24, '2021-06-22'),
(454, '1', '2', '50', 4, 24, '2021-06-22'),
(455, '1', '6', '10', 10, 24, '2021-06-22'),
(456, '1', '6', '60', 11, 24, '2021-06-22'),
(457, '1', '1', '10', 1, 24, '2021-06-22'),
(458, '2', '4', '20', 6, 24, '2021-06-22'),
(459, '2', '4', '10', 7, 24, '2021-06-22'),
(460, '2', '5', '20', 8, 24, '2021-06-22'),
(461, '2', '5', '10', 9, 24, '2021-06-22'),
(462, '2', '7', '10', 12, 24, '2021-06-22'),
(463, '2', '7', '50', 13, 24, '2021-06-22'),
(464, '1', '1', '10', 1, 25, '2021-06-22'),
(465, '1', '1', '20', 2, 25, '2021-06-22'),
(466, '1', '2', '10', 4, 25, '2021-06-22'),
(467, '1', '2', '30', 5, 25, '2021-06-22'),
(468, '1', '6', '20', 10, 25, '2021-06-22'),
(469, '1', '6', '10', 10, 25, '2021-06-22'),
(470, '1', '6', '40', 11, 25, '2021-06-22'),
(471, '2', '4', '10', 6, 25, '2021-06-22'),
(472, '2', '4', '30', 7, 25, '2021-06-22'),
(473, '2', '5', '10', 8, 25, '2021-06-22'),
(474, '2', '5', '50', 9, 25, '2021-06-22'),
(475, '2', '7', '10', 12, 25, '2021-06-22'),
(476, '1', '1', '10', 1, 26, '2021-06-22'),
(477, '1', '1', '30', 2, 0, '2021-06-22'),
(478, '1', '2', '10', 4, 26, '2021-06-22'),
(479, '1', '2', '10', 5, 26, '2021-06-22'),
(480, '1', '6', '10', 10, 26, '2021-06-22'),
(481, '1', '6', '10', 11, 26, '2021-06-22'),
(482, '2', '4', '10', 6, 26, '2021-06-22'),
(483, '2', '5', '10', 8, 26, '2021-06-22'),
(484, '2', '7', '30', 12, 26, '2021-06-22'),
(485, '2', '7', '30', 12, 26, '2021-06-22'),
(486, '2', '7', '10', 13, 26, '2021-06-22'),
(487, '1', '2', '10', 4, 30, '2021-06-23'),
(488, '1', '1', '10', 1, 3, '2021-06-23'),
(489, '1', '1', '10', 1, 26, '2021-06-24'),
(490, '1', '1', '10', 1, 27, '2021-06-24'),
(491, '1', '1', '20', 2, 27, '2021-06-24'),
(492, '1', '2', '10', 4, 27, '2021-06-24'),
(493, '1', '2', '30', 5, 27, '2021-06-24'),
(494, '1', '6', '60', 10, 27, '2021-06-24'),
(495, '1', '6', '10', 11, 27, '2021-06-24'),
(496, '2', '4', '10', 6, 27, '2021-06-24'),
(497, '2', '4', '20', 7, 27, '2021-06-24'),
(498, '2', '5', '40', 8, 27, '2021-06-24'),
(499, '2', '5', '10', 9, 27, '2021-06-24'),
(500, '2', '7', '10', 12, 27, '2021-06-24'),
(501, '2', '7', '50', 13, 27, '2021-06-24'),
(502, '1', '1', '10', 1, 28, '2021-06-24'),
(503, '1', '1', '30', 2, 28, '2021-06-24'),
(504, '1', '2', '50', 4, 28, '2021-06-24'),
(505, '1', '2', '10', 5, 28, '2021-06-24'),
(506, '1', '6', '10', 10, 28, '2021-06-24'),
(507, '1', '6', '20', 11, 28, '2021-06-24'),
(508, '2', '4', '10', 6, 28, '2021-06-24'),
(509, '2', '4', '20', 7, 28, '2021-06-24'),
(510, '2', '5', '10', 8, 28, '2021-06-24'),
(511, '2', '5', '60', 9, 28, '2021-06-24'),
(512, '2', '7', '10', 12, 28, '2021-06-24'),
(513, '2', '7', '10', 13, 28, '2021-06-24'),
(514, '1', '1', '10', 1, 29, '2021-06-24'),
(515, '1', '1', '10', 2, 29, '2021-06-24'),
(516, '1', '2', '10', 4, 29, '2021-06-24'),
(517, '1', '2', '50', 5, 29, '2021-06-24'),
(518, '2', '4', '10', 6, 29, '2021-06-24'),
(519, '2', '4', '10', 7, 29, '2021-06-24'),
(520, '2', '5', '20', 8, 29, '2021-06-24'),
(521, '2', '7', '10', 12, 29, '2021-06-24'),
(522, '2', '7', '10', 13, 29, '2021-06-24'),
(523, '1', '1', '10', 1, 30, '2021-06-24'),
(524, '1', '1', '20', 2, 30, '2021-06-24'),
(525, '1', '2', '10', 4, 30, '2021-06-24'),
(526, '1', '2', '10', 5, 30, '2021-06-24'),
(527, '1', '6', '20', 10, 30, '2021-06-24'),
(528, '1', '6', '10', 11, 30, '2021-06-24'),
(529, '2', '4', '10', 6, 30, '2021-06-24'),
(530, '2', '4', '10', 7, 30, '2021-06-24'),
(531, '2', '5', '10', 8, 30, '2021-06-24'),
(532, '2', '5', '10', 9, 30, '2021-06-24'),
(533, '2', '7', '40', 12, 30, '2021-06-24'),
(534, '2', '7', '20', 13, 30, '2021-06-24'),
(535, '1', '1', '10', 1, 31, '2021-06-24'),
(536, '1', '1', '20', 2, 31, '2021-06-24'),
(537, '1', '1', '10', 2, 31, '2021-06-24'),
(538, '1', '2', '10', 4, 31, '2021-06-24'),
(539, '1', '2', '10', 5, 31, '2021-06-24'),
(540, '1', '2', '10', 5, 31, '2021-06-24'),
(541, '1', '6', '20', 10, 31, '2021-06-24'),
(542, '1', '6', '10', 11, 32, '2021-06-24'),
(543, '1', '2', '10', 4, 1, '2021-06-26'),
(544, '1', '1', '10', 1, 32, '2021-07-01'),
(545, '1', '1', '10', 1, 15, '2021-07-11'),
(546, '1', '1', '10', 1, 7, '2021-07-14'),
(547, '1', '1', '10', 1, 2, '2021-07-29'),
(548, '1', '1', '10', 1, 1, '2021-08-05'),
(549, '1', '1', '10', 1, 1, '2021-08-05'),
(550, '1', '2', '10', 4, 1, '2021-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supervisor`
--

CREATE TABLE `tbl_supervisor` (
  `id` int(11) NOT NULL,
  `supervisor_name` varchar(200) NOT NULL,
  `production_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supervisor`
--

INSERT INTO `tbl_supervisor` (`id`, `supervisor_name`, `production_id`) VALUES
(1, 'Md.Rony Sarker', 2),
(2, 'Md.Jony Sarker', 2),
(4, 'Md.Rakib Sarker', 1),
(5, 'Md.Ruban Sarker', 1),
(6, 'Mst.Jimmi Akter', 4),
(7, 'Mst.Tinni Akter', 4),
(8, 'Mst.Mitu Akter', 6),
(9, 'Md.Mahi Sarker', 6),
(12, 'Md.Nafiz Sarker', 5),
(13, 'Md.Faisal Sarker', 5),
(14, 'Mst.Afroja Akter', 7),
(15, 'Mst.Forida Akter', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_worker`
--

CREATE TABLE `tbl_worker` (
  `id` int(11) NOT NULL,
  `worker_name` varchar(200) NOT NULL,
  `supervisor_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_worker`
--

INSERT INTO `tbl_worker` (`id`, `worker_name`, `supervisor_id`) VALUES
(1, 'Mst.Taposi Akter', '1'),
(2, 'Mst.Ruposi Akter', '1'),
(4, 'Mst.Meem Akter', '2'),
(5, 'Mst.Moni Akter', '2'),
(6, 'Mst.Shova Akter', '4'),
(7, 'Mst.Nupur Akter', '4'),
(8, 'Md.Jony Sarker', '5'),
(9, 'Md.Sumon Sarker', '5'),
(10, 'Mst.Rimu Akter', '6'),
(11, 'Mst.Lima Akter', '6'),
(12, 'Mst.Ritu Akter', '7'),
(13, 'Mst.Rita Akter', '7'),
(15, 'Mst.Mumta Akter', '8'),
(16, 'Mst.Mitu Akter', '8'),
(17, 'Md.Robi Islam', '9'),
(18, 'Md.Rubel Sarker', '9'),
(19, 'Md.Ariful Islam', '12'),
(20, 'Md.Robi Islam', '12'),
(21, 'Md.Salam Sarker', '13'),
(22, 'Md.Sujon Sarker', '13'),
(23, 'Mst.Pritu Akter', '14'),
(24, 'Mst.Eva Akter', '14'),
(25, 'Mst.Misu Akter', '15'),
(26, 'Mst.Mita Akter', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_tbl`
--
ALTER TABLE `image_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_manager`
--
ALTER TABLE `tbl_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prodction_officer`
--
ALTER TABLE `tbl_prodction_officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_production`
--
ALTER TABLE `tbl_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_worker`
--
ALTER TABLE `tbl_worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_tbl`
--
ALTER TABLE `image_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_manager`
--
ALTER TABLE `tbl_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_prodction_officer`
--
ALTER TABLE `tbl_prodction_officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_production`
--
ALTER TABLE `tbl_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=551;

--
-- AUTO_INCREMENT for table `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_worker`
--
ALTER TABLE `tbl_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;