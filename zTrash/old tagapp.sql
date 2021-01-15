-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 02:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tagapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `collection_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=25 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `label`, `collection_id`) VALUES
(2, 'Category 1', 28),
(3, 'Category 2', 22),
(4, 'Category 3', 23),
(7, 'Category 4', 22),
(8, 'Category 5', 22),
(9, 'Category 6', 22),
(10, 'Category 7', 22),
(11, 'Category 8', 23),
(12, 'Category 9', 28),
(13, 'Category 10', 31),
(14, 'Category 11', 30),
(15, 'Category 12', 30),
(16, 'Category 13', 29),
(17, 'Category 14', 33),
(19, 'Category 15', 35),
(20, 'Category 16', 35),
(21, 'Category 17', 37),
(22, 'Catagory 19', 30),
(23, 'Catagory 20', 38),
(24, 'Catagory 21', 38);

-- --------------------------------------------------------

--
-- Table structure for table `categoriesproperties`
--

CREATE TABLE IF NOT EXISTS `categoriesproperties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `defaultt` text COLLATE utf8_unicode_ci,
  `type` enum('bool','img','imgbool','text','number','list','imglist') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=190 ;

--
-- Dumping data for table `categoriesproperties`
--

INSERT INTO `categoriesproperties` (`id`, `category_id`, `label`, `defaultt`, `type`) VALUES
(1, 2, 'Sample Text InputT', 'Sass', 'text'),
(2, 2, 'Sample Img Uploads', 'imgtyp_3006104788cec53f20531b42fec971f012e858dad.jpg', 'img'),
(3, 2, 'Sample Number Inputs', '11', 'number'),
(5, 2, 'Sample Dropdown', '3', 'list'),
(8, 2, 'Check Box Samplee', '0', 'bool'),
(9, 2, 'Sample Icon ChkK', 'chkitem_951257782e89aa4fc681ba68ccec8d47693924019.jpg', 'imgbool'),
(17, 3, 'Sample Icon Drp', '8', 'imglist'),
(18, 3, 'Sample Ico DrpS', '128', 'imglist'),
(39, 2, 'Rugby', '56', 'list'),
(40, 2, 'Dialog League 2019', '60', 'list'),
(41, 2, 'Family', '76', 'list'),
(42, 2, 'School', '80', 'list'),
(43, 4, 'Complex', '82', 'list'),
(44, 4, 'Chk List', '88', 'list'),
(45, 4, 'General Text Input', 'Default Sample', 'text'),
(46, 4, 'Gain Sample D', 'Gain Default', 'text'),
(47, 4, 'Eset Virous GD', '92', 'list'),
(52, 4, 'Gamers D', '', 'img'),
(59, 4, 'Number S', '10', 'number'),
(68, 4, 'SSS', '102', 'list'),
(84, 8, 'Sample Tex', 'Def Sample Text', 'text'),
(85, 8, 'Sample Number', '4', 'number'),
(86, 8, 'Sample Image Uploads', 'imgtyp_401933454b6c3d558db0fe7170db40c486c210d1c.jpg', 'img'),
(87, 8, 'Sample Check Box', '1', 'bool'),
(88, 8, 'Sample Ico Chkbx', 'chkitem_1562695112.jpg', 'imgbool'),
(91, 8, 'Sample Ico Drplst', '59', 'imglist'),
(92, 8, 'Sample List', '106', 'list'),
(93, 8, 'Sample Ico 244', '61', 'imglist'),
(94, 8, 'Ico Drp 3613', '64', 'imglist'),
(105, 9, 'ASW', '89', 'imglist'),
(106, 9, 'Asw', '93', 'imglist'),
(107, 9, 'Drp', '110', 'list'),
(108, 10, 'Text DataE', 'Data Talks', 'text'),
(109, 10, 'Upload Datas', 'Data Talks', 'img'),
(110, 10, 'Sample NumberS', '45', 'number'),
(111, 10, 'Sample CHKD', '0', 'bool'),
(112, 10, 'Sample Ico CHK BX', 'chkitem_1562858934.png', 'imgbool'),
(113, 10, 'Sample Ico CHK', '105', 'imglist'),
(114, 10, 'Sample ICO Drp 2', '98', 'imglist'),
(115, 10, 'Sample Drp List', '112', 'list'),
(116, 10, 'Sample ICO CHKK', '107', 'imglist'),
(118, 11, 'Ico Drp', '117', 'imglist'),
(119, 11, 'Sample ICO DAT', '122', 'imglist'),
(120, 11, 'Icon List Sample 1', '126', 'imglist'),
(121, 2, 'Icon CHK BOX', 'chkitem_5787561499a550ec31a55e4180cae641313d30cdb.png', 'imgbool'),
(122, 12, 'ICO LST', '131', 'imglist'),
(123, 12, 'Destiny', '135', 'imglist'),
(124, 12, 'Dreamy', '142', 'imglist'),
(125, 12, 'Creams ', '140', 'imglist'),
(126, 12, 'Sample CHK BX', 'chkitem_1540304613f599a956d11731d0cbc012962242a0cb.jpg', 'imgbool'),
(127, 12, 'ICO CH', 'chkitem_12359646745960c6a61dac730788b810d37a9d1153.png', 'imgbool'),
(128, 12, 'Again CHK', 'chkitem_1460368583d46b44d1b6e9f36fcfc5ea0c948d40dc.jpg', 'imgbool'),
(147, 2, 'Sab', 'imgtyp_1358977248c05aa42a96e8cf77f0da571becbb6585.png', 'img'),
(148, 14, 'Sample CHK', 'imgtyp_12483004733075047d87c0c8b54ca2f98783c1b605.jpg', 'img'),
(149, 14, 'Number', 'imgtyp_865899125ed3b1f72d6d3559408683e7d9dd7535.jpg', 'img'),
(151, 2, 'Gient Data', 'imgtyp_155406394261fcb01fc89d200a70ecc1ac70bd4d42.jpg', 'img'),
(152, 2, 'Ss', 'imgtyp_6013534038be08315d646749f10989e4309d62898.jpg', 'img'),
(154, 13, 'Sample 10 Number', '223', 'number'),
(156, 20, 'Imgupld', 'imgtyp_8358930629d15230006d3616d511e33408407a7b0.jpg', 'img'),
(157, 16, 'Image Upload 13', 'imgtyp_350004181f2dcddcf11f2bb3e6a5ded2df64048b0.jpg', 'img'),
(158, 16, 'Image Upload 132', 'imgtyp_1152018164401c80321861a4e1cb547d42efa1e4fd.jpg', 'img'),
(159, 16, 'Image Upload 134', 'imgtyp_1383263433f3f01ce3712cd333356ef4080c79ec2c.jpg', 'img'),
(160, 16, 'Image Upload 135', 'imgtyp_568527373b25dfa426ad4c500f177ad990488aa9c.jpg', 'img'),
(161, 16, 'Image Upload 136', 'imgtyp_113752531fb9904699e7c0f939f165a9974f12f7b.jpg', 'img'),
(162, 16, 'Image Upload 137-1', 'imgtyp_109055545932001613c7da9069131c27863545c2c7.jpg', 'img'),
(164, 22, 'Chk BX', '0', 'bool'),
(165, 22, 'chk 2', '0', 'bool'),
(166, 23, 'ico chk 1', 'chkitem_1393868718c14e9132acb26f9db573393ed23d8c1b.png', 'imgbool'),
(167, 23, 'ico chk 2', 'chkitem_1166263960502eed4bc4a29bca394d5b15901f683b.jpg', 'imgbool'),
(168, 15, 'List 1', '117', 'list'),
(169, 15, 'List 2', '122', 'list'),
(170, 22, 'chk bx 2', '1', 'bool'),
(171, 7, 'Sample Text 1', 'Text', 'text'),
(172, 7, 'Sample Text 2', 'Text', 'text'),
(173, 13, 'Sample Num Inp', '10', 'number'),
(174, 9, 'Test Property', 'Sample Data', 'text'),
(175, 21, 'Text Data', 'Sachith Text', 'text'),
(176, 21, 'Number Input', '022', 'number'),
(177, 21, 'Image Upload', 'imgtyp_488868676aa71ec9523763b027c3b9c122e32fa81.jpg', 'img'),
(178, 7, 'Number Dt e', '25', 'number'),
(180, 23, 'Sample Txt Data D1', 'Text D1', 'text'),
(181, 23, 'Saple DRP D1', '132', 'list'),
(182, 3, 'DERT', '143', 'imglist'),
(183, 3, 'Dert 2', '145', 'imglist'),
(184, 3, 'De3', '148', 'imglist'),
(185, 19, 'ICO CHK 1', 'chkitem_1267110420f0ff4b4829b8096677b90baeb448b638.png', 'imgbool'),
(186, 19, 'Icon CHK BOX 2', 'chkitem_817160996b3871808ecc843750ad357fcdfd2274d.png', 'imgbool'),
(187, 17, 'Text Data Samples', 'Text Sampes', 'text'),
(188, 11, 'New Session Item', 'Session Items', 'text'),
(189, 19, 'Chk Malcee', '1', 'bool');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=39 ;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `label`, `user_id`) VALUES
(22, 'Collection 2', 1),
(23, 'Collection 3', 1),
(28, 'Collection 1', 1),
(29, 'Collection 4', 1),
(30, 'Collection 5', 1),
(31, 'Collection 6', 1),
(33, 'Collection 7', 1),
(34, 'Collection 8', 1),
(35, 'Collection 9', 1),
(36, 'Collection 10', 1),
(37, 'Collection 11', 1),
(38, 'Collection 12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE IF NOT EXISTS `fonts` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `charsett` text COLLATE utf8_unicode_ci NOT NULL,
  `defaultt` int(1) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_swf` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(7) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img_path` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `template_id` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=42 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `label`, `category_id`, `description`, `img_path`, `price`, `tags`, `template_id`) VALUES
(1, 'Sample Text Data', 7, 'Sample Text ', 'item_73064235802ac5d2990d1a3a2b3f50a9f359b3d29.png', '132', '543', 11),
(2, 'Ico Chk Item ', 3, 'Ico Chk Item ', 'item_1792741141d014645a22ebe9a4412300c18b5ff6e.png', '523', 'Sample', 12),
(3, 'Sample Number Item', 13, 'Sample Number', 'item_13656970617d47eb4aa7529da09d895cf10cecfdee.png', '435', 'res', 14),
(4, 'Sample image Item', 14, 'Sample image', 'item_51962598748c6e6da00887141ecb50dda5e7c8e10.jpg', '423', 'ewa', 12),
(5, 'List Item', 15, 'List Item', 'item_1020592812e8349003e872458eac636124179dae7f.jpg', '534', 'wase', 15),
(6, 'Item Checkbox', 22, 'Item Checkbox', 'item_1123351498a9d7b2f0836cc1626e925ad1f4f09bab.png', '423', 'yer', 14),
(7, 'Ico Chk Item', 23, 'ico chk', 'item_950574621c153086946ca5a1677ff0c0c34ebdbad.jpg', '524', 'rwe', 14),
(8, 'Complex Item Data', 4, 'Complex Item', 'item_132423069223edd8173d9ca573a4b4ccce270fdbef.png', '3240', 'Temp', 13),
(9, 'Sample Data 24', 3, 'Sa', 'item_12279155433bfa56af03f6a7bcde823fe4f5ef46c3.png', '214', 'rewt', 13),
(10, 'Game On', 3, 'On data', 'item_814778143c49c2bb4b046e2a9eacfc95cf432c2a9.jpg', '1232', 'rwet', 13),
(11, 'Details Mode', 23, 'Mode', 'item_1273932391804f75f370dee0988269f109746defb9.png', '132', 'Tep', 12),
(12, 'Image Mode Activate', 20, 'Activate', 'item_1215246071d8d97b242b4395390a77858e4d1d4e6.jpg', '123', 'Ter', 14),
(13, 'Sala Item', 3, 'Desc', 'item_40995474777d5947554f9c8d6acc0bf9fd7c9d93b.png', '645', 'sample', 14),
(14, 'Sample Ashoka Data', 21, 'Sample Data', 'item_559919356c4ea5b9f600a257aed52bbe7a17a06af.png', '312456', 'Ashoka', 15),
(15, 'Sample Today Special', 13, 'Special', 'item_3376900703e1e5d0e2e1db7334be7a6b2dd864f80.jpg', '20000', 'Samp TO', 13),
(16, 'Data Text New Test', 15, 'New Teste', 'item_1465774345bd2aab0ef94b82fbf09e301ca6c03d04.jpg', '13000', 'Newsss', 15),
(17, 'Chkbx Sample Data', 23, 'CHK BX', 'item_14431469719a3b7944488954cbb89b74518555fb7.png', '2400', 'Sample ', 14),
(18, 'Ico BX', 19, 'BX', 'item_71341597561ec0fc93b90191e9390d22927e342de.png', '2300', '123', 12),
(19, 'BX Game', 19, 'BX ', 'item_323500856d035877e61c4e41075cc5b7fa2045a27.jpg', '123', 'BX', 12),
(20, 'BX Mode', 19, 'ASE', 'item_14615141575ab4310ad6f88f28b2b82cfefecd173d.jpg', '132', 'XD', 12),
(21, 'Database Item Check', 3, 'Desk DB dec', 'item_35153132086bc5e1f5ad0dba85d69c8880859e531.jpg', '123', 'Desc DB', 13),
(34, 'Sample Text Data', 7, 'Sample Text ', 'item_73064235802ac5d2990d1a3a2b3f50a9f359b3d29.png', '132', '543', 11),
(35, 'Sample Today Special', 13, 'Special', 'item_3376900703e1e5d0e2e1db7334be7a6b2dd864f80.jpg', '20000', 'Samp TO', 13),
(36, 'Sample Today Special', 13, 'Special', 'item_3376900703e1e5d0e2e1db7334be7a6b2dd864f80.jpg', '20000', 'Samp TO', 13),
(37, 'Ico Chk Item ', 3, 'Ico Chk Item ', 'item_1792741141d014645a22ebe9a4412300c18b5ff6e.png', '523', 'Sample', 12),
(38, 'Item Checkbox', 22, 'Item Checkbox', 'item_1123351498a9d7b2f0836cc1626e925ad1f4f09bab.png', '423', 'yer', 14),
(39, 'Item Sachith 4', 22, 'Item Checkbox', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', '423', 'yer', 14),
(40, 'Item Sachith', 22, 'Item Checkbox fr', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', '423', 'yer', 13),
(41, 'Item Sachith', 22, 'Item Checkbox', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', '423', 'yer', 11);

-- --------------------------------------------------------

--
-- Table structure for table `items_`
--

CREATE TABLE IF NOT EXISTS `items_` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `default_temp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scientific_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `care_level` int(1) DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setup_price` varbinary(100) DEFAULT NULL,
  `flowers` int(1) DEFAULT NULL,
  `light` int(1) DEFAULT NULL,
  `price` text COLLATE utf8_unicode_ci,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci,
  `img_path` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=105 ;

--
-- Dumping data for table `items_`
--

INSERT INTO `items_` (`id`, `label`, `description`, `default_temp`, `scientific_name`, `care_level`, `size`, `original`, `setup_price`, `flowers`, `light`, `price`, `category`, `tags`, `img_path`, `added_date`) VALUES
(98, 'Item 1', 'Item 1', 'Template 1', 'Item 1', 1, '100 X 100', 'sri lankan', '100', 1, 2, '100', '', 'Item 1', 'item_1558199380.jpg', '2019-05-18'),
(99, 'Item 2', 'Item 2', 'Template 2', 'Item 2', 2, '200 X 200', 'sri lankan', '200', 3, 5, '200', '', 'Item 2', 'item_1558199431.jpg', '2019-05-18'),
(100, 'Item 3', 'Item 3', 'Template 3', 'Item 3', 3, '300 X 300', 'sri lankan', '300', 3, 5, '300', '', 'Item 3', 'item_1558199537.jpg', '2019-05-18'),
(101, 'Item 4', 'Item 4', 'Template 4', 'Item 4', 4, '400 X 400', 'sri lankan', '400', 3, 5, '400', '', 'Item 4', 'item_1558199547.jpg', '2019-05-18'),
(102, 'Item 5', 'Item 5', 'Template 5', 'Item 4', 5, '500 X 500', 'sri lankan', '500', 3, 5, '500', '', 'Item 5', 'item_1558199557.jpg', '2019-05-18'),
(104, 'Item 6', 'Item 6', 'Template 5', 'Item 6', 4, '400 X 400', 'sri lankan', '600', 4, 5, '600', '', 'Item 6', 'item_1558199660.jpg', '2019-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `papertemplates`
--

CREATE TABLE IF NOT EXISTS `papertemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `stroke` int(10) NOT NULL,
  `strokeColor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bkgColor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_rect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageStyle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_date` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=21 ;

--
-- Dumping data for table `papertemplates`
--

INSERT INTO `papertemplates` (`id`, `label`, `description`, `user_id`, `width`, `height`, `stroke`, `strokeColor`, `bkgColor`, `image`, `img_rect`, `imageStyle`, `added_date`) VALUES
(16, 'Paper Template 1', 'Paper Template 1                                                            \r\n                                                        ', 1, 100, 100, 3, '#80ff00', '#d0ff00', 'paper_templates_1558199868.jpg', NULL, NULL, '2019-05-18'),
(17, 'Paper Template 2', 'Paper Template 2                                                          \r\n                                                        ', 1, 200, 200, 3, '#ff0040', '#ff0000', 'paper_templates_1558199895.jpg', NULL, NULL, '2019-05-18'),
(18, 'Paper Template 3', 'Paper Template 3                                                          \r\n                                                        ', 1, 300, 300, 3, '#ff0040', '#ff0000', 'paper_templates_1558199906.jpg', NULL, NULL, '2019-05-18'),
(19, 'Paper Template 4', 'Paper Template 4                                                        \r\n                                                        ', 1, 400, 400, 4, '#ff0040', '#ff0000', 'paper_templates_1558199919.jpg', NULL, NULL, '2019-05-18'),
(20, 'Paper Template 5', 'Paper Template 5                                                     \r\n                                                        ', 1, 500, 500, 5, '#ff0040', '#0900ff', 'paper_templates_1558199935.jpg', NULL, NULL, '2019-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `sptypeboolean`
--

CREATE TABLE IF NOT EXISTS `sptypeboolean` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sptypeboolean`
--

INSERT INTO `sptypeboolean` (`id`, `prop_id`, `item_id`, `value`) VALUES
(1, 164, 6, 1),
(2, 165, 6, 1),
(3, 170, 6, 1),
(4, 164, 38, 1),
(5, 165, 38, 1),
(6, 170, 38, 1),
(7, 164, 39, 1),
(8, 165, 39, 1),
(9, 170, 39, 1),
(10, 164, 40, 1),
(11, 165, 40, 1),
(12, 170, 40, 1),
(13, 164, 41, 1),
(14, 165, 41, 1),
(15, 170, 41, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sptypeimage`
--

CREATE TABLE IF NOT EXISTS `sptypeimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sptypeimage`
--

INSERT INTO `sptypeimage` (`id`, `prop_id`, `item_id`, `value`) VALUES
(1, 148, 4, '67161105_719669258490093_8166310259514671104_n.jpg'),
(2, 149, 4, '67170497_2349153828680633_8985418998841606144_n.jpg'),
(3, 52, 8, 'item_279439265037de04a2fe85cbbad6effb7b82b1c3b.jpg'),
(4, 156, 12, 'item_1480309521d8d97b242b4395390a77858e4d1d4e6.jpg'),
(5, 177, 14, 'item_113781062143ae774b03a252ae289f8b210d478ff3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sptypeimageboolean`
--

CREATE TABLE IF NOT EXISTS `sptypeimageboolean` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bool` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sptypeimageboolean`
--

INSERT INTO `sptypeimageboolean` (`id`, `prop_id`, `item_id`, `value`, `bool`) VALUES
(1, 166, 7, 'item_1544473798c153086946ca5a1677ff0c0c34ebdbad.jpg', 1),
(2, 167, 7, 'item_1439526616c153086946ca5a1677ff0c0c34ebdbad.png', 1),
(5, 166, 11, 'item_1209444085f02bc41b753442103553fbef5ce9696f.jpg', 0),
(6, 167, 11, 'item_1267114348f02bc41b753442103553fbef5ce9696f.jpg', 0),
(7, 166, 17, 'item_140816682219a3b7944488954cbb89b74518555fb7.png', 1),
(8, 167, 17, 'item_968316113d244a3c72e7ba2a3e37bfc7a749ae5f.jpg', 1),
(9, 185, 18, 'item_13208145693c84b5161b518ebef2b0924a906c682c.png', 0),
(10, 186, 18, 'item_10359874143c84b5161b518ebef2b0924a906c682c.png', 0),
(11, 185, 19, 'item_1155716676952a4ab5fd8d0920d8d85440ffd3f54e.jpg', 0),
(12, 186, 19, 'item_1030935884952a4ab5fd8d0920d8d85440ffd3f54e.jpg', 1),
(13, 185, 20, 'item_13608429555ab4310ad6f88f28b2b82cfefecd173d.jpg', 1),
(14, 186, 20, 'item_9845659135ab4310ad6f88f28b2b82cfefecd173d.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sptypeimagelist`
--

CREATE TABLE IF NOT EXISTS `sptypeimagelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sptypeimagelist`
--

INSERT INTO `sptypeimagelist` (`id`, `prop_id`, `item_id`, `value`) VALUES
(1, 17, 2, 7),
(2, 18, 2, 15),
(3, 17, 9, 9),
(4, 18, 9, 15),
(5, 17, 10, 7),
(6, 18, 10, 15),
(7, 17, 13, 7),
(8, 18, 13, 13),
(9, 182, 13, 144),
(10, 183, 13, 146),
(11, 184, 13, 149),
(12, 17, 21, 9),
(13, 18, 21, 13),
(14, 182, 21, 144),
(15, 183, 21, 146),
(16, 184, 21, 149),
(17, 17, 37, 7),
(18, 18, 37, 15);

-- --------------------------------------------------------

--
-- Table structure for table `sptypeimagelistitem`
--

CREATE TABLE IF NOT EXISTS `sptypeimagelistitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prop_id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=150 ;

--
-- Dumping data for table `sptypeimagelistitem`
--

INSERT INTO `sptypeimagelistitem` (`id`, `label`, `prop_id`, `value`) VALUES
(1, 'Not Set', 6, 'a.png'),
(2, 'Hameedia', 6, '59666481_793915764313858_6888048333466632192_n.jpg'),
(3, 'Srivani', 6, '60270141_1298320086989006_1845665086245437440_n.jpg'),
(4, 'Mekala', 6, '60527687_142178003508651_6947103657045262336_n.jpg'),
(5, 'Sarawna', 6, '60846479_142338060159312_2328057026745204736_n.jpg'),
(6, 'Not Set', 17, 'a.png'),
(7, 'Sample 1', 17, '32557091_1685670681546676_8793053478147588096_n.jpg'),
(8, 'Sample 2', 17, 'a.png'),
(9, 'Sample 3', 17, '60270141_1298320086989006_1845665086245437440_n.jpg'),
(11, 'Sample We D', 18, '29695310_2081763712108184_6441852092555068117_n.jpg'),
(12, 'Dooms Day GRT', 18, '60350338_2320049481598608_993419527473594368_n.jpg'),
(13, 'Porp', 18, '59666481_793915764313858_6888048333466632192_n.jpg'),
(14, 'Sample 5', 17, '29542930_2155594044669872_8953610520470687812_n.jpg'),
(15, 'Samples', 18, '29570781_2155594191336524_8214923274670537594_n.jpg'),
(55, 'Sample 3', 90, 'a.png'),
(58, 'Sample 2', 91, '65091858_2470026209896495_1592121952602947584_n.png'),
(59, 'Sample 1', 91, '65693510_10157282119633498_6226677946032062464_n.jpg'),
(60, 'Sample 3', 93, 'a.png'),
(61, 'Sample 2', 93, 'a.png'),
(62, 'Sample 1', 93, 'a.png'),
(63, 'Sample 222', 94, 'a.png'),
(64, 'Sample 22', 94, 'a.png'),
(65, 'Sample 2', 94, 'a.png'),
(89, 'F', 105, 'a.png'),
(90, 'A', 105, 'a.png'),
(91, 'A', 106, 'a.png'),
(92, 'D', 106, 'a.png'),
(93, 'AA', 106, 'a.png'),
(94, 'Saw2', 113, '66676976_320201592194974_2299404711503069184_n.jpg'),
(95, 'Sa1', 113, '66607355_2397805510308343_5529748996072931328_n.jpg'),
(96, 'SA3', 114, '66282240_2356207904623355_3638056974404288512_n.jpg'),
(97, 'SA 2', 114, '66311926_2371939926380652_4596032610685157376_n.jpg'),
(98, 'SA 1', 114, '66610447_1254284434752913_5106122017887748096_n.jpg'),
(99, 'Sa 23', 113, '66607355_2397805510308343_5529748996072931328_n.jpg'),
(100, 'SA 123', 113, '65395391_468346940648974_8212577863430307840_n.jpg'),
(101, 'SAD 35', 113, '19260686_445786689126078_3162120601281275173_n.jpg'),
(102, 'ASW', 113, '65524732_1420237144767010_4337838439777959936_n.jpg'),
(103, 'SWE', 114, '_20181104_220531_344.jpg'),
(104, 'SACHITH', 113, '329950_2077188263914_766601548_o.jpg'),
(105, 'Sameera B', 113, '280px-PNG_transparency_demonstration_1.png'),
(106, 'SAmp 4', 116, '_20181104_220531_344.jpg'),
(107, 'SAmp 2', 116, '33.jpg'),
(108, 'SAmp 1', 116, '11074135_1675875945973666_7004691091408945592_n.jpg'),
(109, 'SAmpl 56', 116, '12517063_1045553308845924_859982364_o.jpg'),
(113, 'Sample Dat 4', 118, 'a.png'),
(114, 'Sample Dat 3', 118, 'a.png'),
(115, 'Sample Dat 2', 118, 'a.png'),
(116, 'Sample Dat 1', 118, 'a.png'),
(117, 'Sample Dat 5', 118, '29594730_2155594098003200_1664386658458031134_n.jpg'),
(118, 'Sam 3', 119, '29570781_2155594191336524_8214923274670537594_n.jpg'),
(119, 'Sam 2', 119, '29541748_2155223191373624_8300157707856231921_n.jpg'),
(120, 'Sam 1', 119, '29541748_2155223191373624_8300157707856231921_nh.jpg'),
(121, 'Sam 5', 119, '29570781_2155594191336524_8214923274670537594_n.jpg'),
(122, 'Sam 6', 119, '66311926_2371939926380652_4596032610685157376_n.jpg'),
(123, 'Sam 7', 119, '65091858_2470026209896495_1592121952602947584_n.png'),
(124, 'Icon Data 1', 120, '1024px-Yes_Check_Circle.svg.png'),
(125, 'Icon Data 2', 120, '67265545_789741524756628_8646263302835404800_n.jpg'),
(126, 'Icon Data 3', 120, '1024px-Yes_Check_Circle.svg.png'),
(127, 'Icon Data 4', 120, '66130663_2396167253805502_2360399805521330176_n.jpg'),
(128, 'WER', 18, 'lstitem_963073014bc100374017b67e9aa0eac0cbb33eb04.png'),
(130, 'ICO 3', 122, '66610447_1254284434752913_5106122017887748096_n.jpg'),
(131, 'ICO 2', 122, '64824673_751084871973361_5784311505843388416_n.jpg'),
(132, 'ICO 1', 122, '66607355_2397805510308343_5529748996072931328_n.jpg'),
(133, 'Destiny 3', 123, '64824673_751084871973361_5784311505843388416_n.jpg'),
(134, 'Destiny 2', 123, '65781324_2231081206958807_6070798821057626112_n.jpg'),
(135, 'Destiny 1', 123, '66616075_2359980820912730_3435763894503604224_n.jpg'),
(136, 'Dreamy 3', 124, '66282240_2356207904623355_3638056974404288512_n.jpg'),
(137, 'Dreamy 2', 124, 'lstitem_341415173d136c0222f5ad554a44589d60870e58f.jpg'),
(138, 'Dreamy 1', 124, '66676976_320201592194974_2299404711503069184_n.jpg'),
(139, 'Creams 3', 125, 'lstitem_1247898165f26c048e3b6587f91eb36d62f8a3fbcc.jpg'),
(140, 'Creams 2', 125, 'lstitem_148341684180a4d50b0eb4db1c57a446d2aaeee3a2.jpg'),
(141, 'Creams 1', 125, 'lstitem_136167115303446cc0bc7585aa0531301edde374e2.jpg'),
(142, 'Dreamy 4', 124, 'lstitem_1322368856215460e432739f37b6456acd637d6a65.jpg'),
(143, 'Dert 2', 182, 'lstitem_110022908118e9f4631231ce8be58c63eef12cd8a0.jpg'),
(144, 'Dert 1', 182, 'lstitem_87030682a052060ef83c015bb163f473cbe2101a.png'),
(145, 'SS3', 183, 'lstitem_1276302395fee897b27ad775dc4af468fd366b794f.jpg'),
(146, 'SS2', 183, 'lstitem_117151962667b155c18be711fe75da45cd8948b7ed.jpg'),
(147, 'SS1', 183, 'lstitem_47310231c9e20c63fdb13e096392074b9f6a16fe.jpg'),
(148, 'Sew2', 184, 'lstitem_843245417390f2d38205ee8b7aa7c2b8f2a937bdc.jpg'),
(149, 'Swe', 184, 'lstitem_227998435ab7f662e66266e6c14049534265928e1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sptypelist`
--

CREATE TABLE IF NOT EXISTS `sptypelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sptypelist`
--

INSERT INTO `sptypelist` (`id`, `prop_id`, `item_id`, `value`) VALUES
(1, 168, 5, 118),
(2, 169, 5, 119),
(3, 43, 8, 84),
(4, 44, 8, 89),
(5, 47, 8, 91),
(6, 68, 8, 93),
(7, 168, 16, 115),
(8, 169, 16, 122),
(11, 181, 11, 132),
(12, 181, 7, 132),
(13, 181, 17, 131);

-- --------------------------------------------------------

--
-- Table structure for table `sptypelistitem`
--

CREATE TABLE IF NOT EXISTS `sptypelistitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prop_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=133 ;

--
-- Dumping data for table `sptypelistitem`
--

INSERT INTO `sptypelistitem` (`id`, `label`, `prop_id`) VALUES
(1, 'Not Set', 5),
(2, 'Father', 5),
(3, 'Gen Mart', 5),
(4, 'Solar Mart', 5),
(54, 'KCK', 39),
(55, 'DRR', 39),
(56, 'VCK', 39),
(57, 'Kandy', 40),
(58, 'Havelocks SC', 40),
(59, 'Navy SC', 40),
(60, 'Airforce SC', 40),
(61, 'CH&FC SC', 40),
(70, 'Police SC', 40),
(71, 'Army SC', 40),
(72, 'SACK', 39),
(73, 'Mother', 41),
(74, 'Son', 41),
(75, 'Father', 41),
(76, 'Grandfather', 41),
(77, 'Student', 42),
(78, 'Teachers', 42),
(79, 'Principal', 42),
(80, 'Director', 42),
(81, 'Sample', 43),
(82, 'Godaddy', 43),
(83, 'Hosgattor', 43),
(84, 'Lost', 43),
(85, 'Gamer', 43),
(86, 'Sample', 44),
(87, 'Samle 2', 44),
(88, 'Defa', 44),
(89, 'Frag', 44),
(90, 'General', 47),
(91, 'Sampe', 47),
(92, 'Default', 47),
(93, 'asasasa', 68),
(99, 'Son in Law', 41),
(102, 'Same', 68),
(103, 'List 1', 92),
(104, 'List 2', 92),
(106, 'List 4', 92),
(107, 'A', 107),
(108, 'F', 107),
(109, 'E', 107),
(110, 'Q', 107),
(111, 'Sa 45', 115),
(112, 'Sa 32', 115),
(113, 'Sa12', 115),
(114, 'Sa23', 115),
(115, 'List 1 itm', 168),
(116, 'List 2 itm', 168),
(117, 'List 3 itm', 168),
(118, 'List 4 itm', 168),
(119, 'List 11 itm', 169),
(120, 'List 22 itm', 169),
(121, 'List 33 itm', 169),
(122, 'List 44 itm', 169),
(127, 'D1', 181),
(131, 'D2', 181),
(132, 'D3', 181);

-- --------------------------------------------------------

--
-- Table structure for table `sptypenumber`
--

CREATE TABLE IF NOT EXISTS `sptypenumber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sptypenumber`
--

INSERT INTO `sptypenumber` (`id`, `prop_id`, `item_id`, `value`) VALUES
(1, 154, 3, 234),
(2, 173, 3, 10123),
(3, 59, 8, 10333300),
(4, 176, 14, 2232330),
(5, 154, 15, 224),
(6, 173, 15, 100),
(7, 178, 1, 11111),
(8, 178, 34, 11111),
(9, 154, 35, 224),
(10, 173, 35, 100),
(12, 154, 36, 224453),
(13, 173, 36, 100444);

-- --------------------------------------------------------

--
-- Table structure for table `sptypetext`
--

CREATE TABLE IF NOT EXISTS `sptypetext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sptypetext`
--

INSERT INTO `sptypetext` (`id`, `prop_id`, `item_id`, `value`) VALUES
(1, 171, 1, 'Game Sample OnE'),
(2, 172, 1, 'Game Sample TwO'),
(3, 45, 8, 'Default Sample Saple'),
(4, 46, 8, 'Gain Default Sampl'),
(5, 175, 14, 'Sachith Text Ashoka'),
(12, 180, 11, 'Text D1'),
(13, 180, 7, 'Text D1'),
(14, 180, 17, 'Text D1 Sample'),
(21, 171, 34, 'Game Sample OnR'),
(22, 172, 34, 'Game Sample TwO');

-- --------------------------------------------------------

--
-- Table structure for table `stylecategory`
--

CREATE TABLE IF NOT EXISTS `stylecategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `style` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `styleitem`
--

CREATE TABLE IF NOT EXISTS `styleitem` (
  `id` int(11) NOT NULL,
  `label` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `img_rect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `stylesptype`
--

CREATE TABLE IF NOT EXISTS `stylesptype` (
  `id` int(11) NOT NULL,
  `styleItem_id` int(11) NOT NULL,
  `spType_id` int(11) NOT NULL,
  `spType_type` enum('bool','img','imgbool','text','number','list','imglist') COLLATE utf8_unicode_ci NOT NULL,
  `style` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `table22`
--

CREATE TABLE IF NOT EXISTS `table22` (
  `price2` varchar(45) DEFAULT NULL,
  `itemid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tblprintqueue`
--

CREATE TABLE IF NOT EXISTS `tblprintqueue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itm_id` int(11) DEFAULT NULL,
  `label` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `img_path` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `imgdiv` text COLLATE utf8_unicode_ci,
  `lblvisible` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoOfCopy` int(20) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblprintqueue`
--

INSERT INTO `tblprintqueue` (`id`, `itm_id`, `label`, `description`, `img_path`, `price`, `tags`, `imgdiv`, `lblvisible`, `NoOfCopy`, `added_date`) VALUES
(1, 36, '{"text":"Sample Today Special","width":"204","height":"33","x":"10","y":"8","textColor":"rgb(227, 34, 227)","backgroundColor":"rgb(22, 227, 196)","textSize":"18","font-family":"Aldrich","backgroundAlpha":"0.450064","textAlign":"undefined","display":"block;"}', '{"text":"Special test Here","width":"259","height":"52","x":"109","y":"129","textColor":"rgb(255, 10, 14)","backgroundColor":"rgb(123, 181, 165)","textSize":"27","font-family":"Righteous","backgroundAlpha":"0.322411","display":"block","textAlign":"center;"}', '1572529295.jpg', '{"text":"20000","width":"151","height":"43","x":"0","y":"136","textColor":"rgb(0, 0, 0)","backgroundColor":"rgb(61, 61, 209)","textSize":"26","font-family":"undefined","backgroundAlpha":"1","textAlign":"right","display":"none;"}', '{"text":"Desc DBQ","width":"254","height":"105","x":"217","y":"115","textColor":"rgb(242, 19, 19)","backgroundColor":"rgb(216, 217, 139)","textSize":"32","font-family":"Verdana","backgroundAlpha":"0.8","textAlign":"undefined","display":"none"}', '{"border":"2px solid rgb(247, 0, 247);"}', 'labels,description', 2, '2019-09-18 00:00:00'),
(2, 35, '{"text":"Sample Today Special","width":"184.85","height":"37.2","x":"10","y":"10","textSize":"24","font-family":"undefined","backgroundAlpha":"0.8","textAlign":"left","display":"block;"}', '{"text":"Special","width":"283.1","height":"104.8","x":"247","y":"229","textSize":"14","font-family":"undefined","backgroundAlpha":"0.8","textAlign":"left","display":"block;"}', '1572521149.jpg', '{"text":"20000","width":"222.75","height":"30.4","x":"326","y":"180","textSize":"18","font-family":"undefined","backgroundAlpha":"0.8","textAlign":"left","display":"block;"}', '{"text":"Desc DBQ","width":"191.9","height":"38.3","x":"10","y":"40","textSize":"20","font-family":"undefined","backgroundAlpha":"0.8","textAlign":"left","display":"none;"}', '{"border":"2px solid rgb(247, 0, 247);"}', 'labels,description,prices', 4, '2019-09-18 00:00:00'),
(3, 21, '{"text":"Database Item Check","x":10,"textAlign":"left","align":6,"y":10,"textSize":24,"backgroundColor":"988989","width":184.85,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2721,"textColor":0,"prop_type":"label_bubble","height":37.2,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}', '{"text":"Desk DB s dec","x":247,"backgroundColor":"988989","item_id":2651,"y":229,"backgroundY":0,"align":12,"textAlign":"left","textSize":14,"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":283.1,"textColor":0,"height":104.8,"textHeight":104.8,"backgroundX":0,"textWidth":283.1,"fontID":0,"backgroundAlpha":0.8}', 'item_35153132086bc5e1f5ad0dba85d69c8880859e531.jpg', '{"text":"123","x":326,"textAlign":"left","align":12,"y":180,"textSize":18,"backgroundColor":"988989","width":222.75,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2642,"textColor":4,"prop_type":"price_bubble","height":30.4,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}', '{"text":"Desc DBR","x":10,"textAlign":"left","align":6,"y":40,"textSize":20,"backgroundColor":"988989","width":191.9,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2627,"textColor":0,"prop_type":"label_bubble","height":38.3,"value_id":0,"isVisible":true,"prop_id":0,"fontID":2}', NULL, NULL, 1, '2019-09-18 00:00:00'),
(7, 4, '{"text":"Sample image Item","x":10,"textAlign":"left","align":6,"y":0,"textSize":24,"backgroundColor":"988989","width":184.85,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2721,"textColor":0,"prop_type":"label_bubble","height":37.2,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}', '{"text":"Sample image","x":260,"backgroundColor":"988989","item_id":2651,"y":229,"backgroundY":0,"align":12,"textAlign":"left","textSize":14,"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":283.1,"textColor":0,"height":104.8,"textHeight":104.8,"backgroundX":0,"textWidth":283.1,"fontID":0,"backgroundAlpha":0.8}', 'item_51962598748c6e6da00887141ecb50dda5e7c8e10.jpg', '{"text":"423","x":326,"textAlign":"left","align":12,"y":180,"textSize":18,"backgroundColor":"988989","width":222.75,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2642,"textColor":4,"prop_type":"price_bubble","height":30.4,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}', '{"text":"ewa","x":10,"textAlign":"left","align":6,"y":40,"textSize":20,"backgroundColor":"988989","width":191.9,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2627,"textColor":0,"prop_type":"label_bubble","height":38.3,"value_id":0,"isVisible":true,"prop_id":0,"fontID":2}', NULL, NULL, 1, '2019-09-24 00:00:00'),
(8, 39, '{"text":"Item Sachith 4","x":10,"textAlign":"left","align":6,"y":0,"textSize":24,"backgroundColor":"988989","width":184.85,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2721,"textColor":0,"prop_type":"label_bubble","height":37.2,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}', '{"text":"Item Checkbox","x":247,"backgroundColor":"988989","item_id":2651,"y":229,"backgroundY":0,"align":12,"textAlign":"left","textSize":14,"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":283.1,"textColor":0,"height":104.8,"textHeight":104.8,"backgroundX":0,"textWidth":283.1,"fontID":0,"backgroundAlpha":0.8}', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', '{"text":"423","x":326,"textAlign":"left","align":12,"y":180,"textSize":18,"backgroundColor":"988989","width":222.75,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2642,"textColor":4,"prop_type":"price_bubble","height":30.4,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}', '{"text":"yer","x":10,"textAlign":"left","align":6,"y":40,"textSize":20,"backgroundColor":"988989","width":191.9,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2627,"textColor":0,"prop_type":"label_bubble","height":38.3,"value_id":0,"isVisible":true,"prop_id":0,"fontID":2}', NULL, NULL, 1, '2019-09-26 00:00:00'),
(9, 10, '{"text":"Game On","x":13,"textAlign":"","y":59,"textSize":18,"backgroundColor":"rgb(22, 227, 196)","width":204,"isPrefix":false,"backgroundAlpha":0.450064,"textColor":"rgb(227, 34, 227)","prop_type":"label_bubble","height":33,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"Aldrich"}', '{"text":"On data","x":294,"backgroundColor":"rgb(123, 181, 165)","y":83,"textAlign":"","textSize":21,"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":130,"textColor":"rgb(0, 0, 0)","height":41,"fontID":0,"backgroundAlpha":0.322411,"font-family":"Righteous"}', 'item_814778143c49c2bb4b046e2a9eacfc95cf432c2a9.jpg', '{"text":"1232","x":0,"textAlign":"right","y":195,"textSize":26,"backgroundColor":"rgb(209, 209, 222)","width":151,"isPrefix":false,"backgroundAlpha":1,"textColor":"rgb(0, 0, 0)","prop_type":"price_bubble","height":43,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"undefined"}', '{"text":"rwet","x":285,"textAlign":"","y":193,"textSize":27,"backgroundColor":"rgb(216, 217, 139)","width":139,"isPrefix":false,"backgroundAlpha":0.8,"textColor":"rgb(242, 19, 19)","prop_type":"label_bubble","height":41,"value_id":0,"isVisible":true,"prop_id":0,"fontID":2,"font-family":"Aldrich"}', '{"border":"2px solid rgb(247, 0, 247);"}', NULL, 1, '2019-10-25 00:00:00'),
(10, 2, '{"text":"Ico Chk Item ","x":16,"textAlign":"","y":277,"textSize":18,"backgroundColor":"rgb(22, 227, 196)","width":367,"isPrefix":false,"backgroundAlpha":0.450064,"textColor":"rgb(227, 34, 227)","prop_type":"label_bubble","height":33,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"Aldrich"}', '{"text":"Ico Chk Item ","x":39,"backgroundColor":"rgb(48, 48, 191)","y":210,"textAlign":"","textSize":21,"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":130,"textColor":"rgb(148, 140, 148)","height":41,"fontID":0,"backgroundAlpha":0.322411,"font-family":"Righteous"}', 'item_1792741141d014645a22ebe9a4412300c18b5ff6e.png', '{"text":"523","x":0,"textAlign":"center;","y":137,"textSize":26,"backgroundColor":"rgb(209, 209, 222)","width":151,"isPrefix":false,"backgroundAlpha":1,"textColor":"rgb(0, 0, 0)","prop_type":"price_bubble","height":43,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"undefined"}', '{"text":"Sample","x":10,"textAlign":"right;","y":49,"textSize":27,"backgroundColor":"rgb(216, 217, 139)","width":238,"isPrefix":false,"backgroundAlpha":0.8,"textColor":"rgb(242, 19, 19)","prop_type":"label_bubble","height":41,"value_id":0,"isVisible":true,"prop_id":0,"fontID":2,"font-family":"Aldrich"}', '{"border":"2px solid rgb(247, 0, 247);"}', NULL, 1, '2019-10-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblprintqueuedefault`
--

CREATE TABLE IF NOT EXISTS `tblprintqueuedefault` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `img_path` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `imgdiv` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblprintqueuedefault`
--

INSERT INTO `tblprintqueuedefault` (`id`, `label`, `description`, `img_path`, `price`, `tags`, `imgdiv`) VALUES
(1, '{"text":"Sample Today Special","width":"367","height":"33","x":"16","y":"277","textColor":"rgb(227, 34, 227)","backgroundColor":"rgb(22, 227, 196)","textSize":"18","font-family":"Aldrich","backgroundAlpha":"0.450064"}', '{"text":"Special test","width":"130","height":"41","x":"39","y":"210","textColor":"rgb(148, 140, 148)","backgroundColor":"rgb(48, 48, 191)","textSize":"21","font-family":"Righteous","backgroundAlpha":"0.322411"}', NULL, '{"text":"20000","width":"151","height":"43","x":"0","y":"137","textColor":"rgb(0, 0, 0)","backgroundColor":"rgb(209, 209, 222)","textSize":"26","font-family":"undefined","backgroundAlpha":"1","textAlign":"center;"}', '{"text":"Desc DBQ","width":"238","height":"41","x":"10","y":"49","textColor":"rgb(242, 19, 19)","backgroundColor":"rgb(216, 217, 139)","textSize":"27","font-family":"Aldrich","backgroundAlpha":"0.8","textAlign":"right;"}', '{"border":"2px solid rgb(247, 0, 247);"}');

-- --------------------------------------------------------

--
-- Table structure for table `tblprintqueue_copy1`
--

CREATE TABLE IF NOT EXISTS `tblprintqueue_copy1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `label` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `image_path` text NOT NULL,
  `image_rect` text NOT NULL,
  `tags` text NOT NULL,
  `default_template` varchar(50) NOT NULL,
  `scientific_name` text NOT NULL,
  `care_level` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `origin` text NOT NULL,
  `Ala carte price` text NOT NULL,
  `NoOfCopy` int(11) NOT NULL DEFAULT '1',
  `label_border` int(11) NOT NULL DEFAULT '1',
  `added_date` date NOT NULL,
  `itm_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `stroke` int(10) NOT NULL,
  `strokeColor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bkgColor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_rect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageStyle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_date` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=16 ;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `label`, `description`, `user_id`, `width`, `height`, `stroke`, `strokeColor`, `bkgColor`, `image`, `img_rect`, `imageStyle`, `added_date`) VALUES
(11, 'Template 1', 'Template 1                                                      \r\n                                                    ', 1, 5.5, 3.5, 3, '#ff0000', '#ff0000', 'templates_1558199205.jpg', NULL, NULL, '2019-05-18'),
(12, 'Template 2', '  Template 2                                                     \r\n                                                    ', 1, 4, 8, 1, '#d500ff', '#6f00ff', 'templates_1558199242.jpg', NULL, NULL, '2019-05-18'),
(13, 'Template 3', '  Template 3                                                     \r\n                                                    ', 1, 3.4, 3.5, 3, '#009dff', '#00d9ff', 'templates_1558199264.jpg', NULL, NULL, '2019-05-18'),
(14, 'Template 4', '  Template 4                                                     \r\n                                                    ', 1, 10, 10, 5, '#00ff1a', '#04ff00', 'templates_1558199288.jpg', NULL, NULL, '2019-05-18'),
(15, 'Template 5', '  Template 5                                                     \r\n                                                    ', 1, 8.5, 11, 6, '#a6ff00', '#f7ff00', 'templates_1558199312.jpg', NULL, NULL, '2019-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `templatesprintlabel`
--

CREATE TABLE IF NOT EXISTS `templatesprintlabel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'sachith@yahoo.com', 'ff254da5ce3814986afa8a20bc5233b7', 'Sachith');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
