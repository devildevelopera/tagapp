-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 06:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `collection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `label`, `collection_id`) VALUES
(2, 'Category 1', 28),
(3, 'Category 2', 28),
(4, 'Category 3', 28),
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
(22, 'Catagory 19', 28),
(23, 'Catagory 20', 38),
(24, 'Catagory 21', 38);

-- --------------------------------------------------------

--
-- Table structure for table `categoriesproperties`
--

CREATE TABLE `categoriesproperties` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `defaultt` text COLLATE utf8_unicode_ci,
  `type` enum('bool','img','imgbool','text','number','list','imglist') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(189, 19, 'Chk Malcee', '1', 'bool'),
(190, 22, 'Price 2', '0', 'number'),
(191, 22, 'Info', 'Text', 'text'),
(192, 22, 'Starts Ico', '151', 'imglist'),
(193, 21, 'Check Box', '1', 'bool'),
(195, 21, 'Icon Check Box', 'chkitem_559900801d9ac4774fee1375764d7176bc244a460.png', 'imgbool'),
(196, 21, 'Icon Dropdown List', '153', 'imglist'),
(197, 21, 'Dropdown List', '133', 'list');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(38, 'Collection 12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE `fonts` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `charsett` text COLLATE utf8_unicode_ci NOT NULL,
  `defaultt` int(1) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_swf` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `fonts`
--

INSERT INTO `fonts` (`id`, `label`, `family`, `charsett`, `defaultt`, `url`, `url_swf`) VALUES
(2, 'Franklin Gothic - Demi', 'sans', 'Basic Latin, Latin-1 Supplement, Latin Extended-A, Greek and Coptic, Cyrillic, Cyrillic Supplementary', 1, 'font/Franklin Gothic Demi.ttf', ''),
(12, 'Princess Sofia', '', '', 0, 'font/PrincessSofia-Regular.ttf', ''),
(13, 'ABeeZee', 'serif', 'Basic Latin', 0, 'font/ABeeZee-Regular.ttf', ''),
(18, 'Bowlby One SC', 'Sans', 'Basic Latin', 0, 'font/BowlbyOneSC-Regular.ttf', ''),
(20, 'Chelsea Market', 'Sans', 'Basic Latin', 0, 'font/ChelseaMarket-Regular.ttf', ''),
(22, 'Clicker Script', 'Serif', 'Basic Latin', 0, 'font/ClickerScript-Regular.ttf', ''),
(25, 'Crafty Girls', 'Serif', 'Basic Latin', 0, 'font/CraftyGirls.ttf', ''),
(29, 'Fjalla', 'Sans', 'Basic Latin', 0, 'font/FjallaOne-Regular.ttf', ''),
(31, 'Gochi Hand', 'Sans', 'Basic Latin', 0, 'font/GochiHand-Regular.ttf', ''),
(33, 'Indie Flower', 'Sans', 'Basic Latin', 0, 'font/IndieFlower.ttf', ''),
(34, 'Just Me Again Down Here', 'Sans', 'Basic Latin', 0, 'font/JustMeAgainDownHere.ttf', ''),
(35, 'Kranky', 'Serif', 'Basic Latin', 0, 'font/Kranky.ttf', ''),
(36, 'La Belle Aurore', 'Sans', 'Basic Latin', 0, 'font/LaBelleAurore.ttf', ''),
(39, 'Loved by the King', 'Sans', 'Basic Latin', 0, 'font/LovedbytheKing.ttf', ''),
(40, 'Margarine', 'Sans', 'Basic Latin', 0, 'font/Margarine-Regular.ttf', ''),
(41, 'McLaren', 'Sans', 'Basic Latin', 0, 'font/McLaren-Regular.ttf', ''),
(43, 'Mouse Memoirs', 'Sans', 'Basic Latin', 0, 'font/MouseMemoirs-Regular.ttf', ''),
(44, 'Mystery Quest', 'Serif', 'Basic Latin', 0, 'font/MysteryQuest-Regular.ttf', ''),
(46, 'Oregano', 'Sans', 'Basic Latin', 0, 'font/Oregano-Regular.ttf', ''),
(48, 'Over the Rainbow', 'Sans', 'Basic Latin', 0, 'font/OvertheRainbow.ttf', ''),
(50, 'Pacifico', 'Sans', 'Basic Latin', 0, 'font/Pacifico.ttf', ''),
(52, 'Permanent Marker', 'Sans', 'Basic Latin', 0, 'font/PermanentMarker.ttf', ''),
(56, 'Shadows Into Light', 'Sans', 'Basic Latin', 0, 'font/ShadowsIntoLight.ttf', ''),
(58, 'Ultra', 'Serif', 'Basic Latin', 0, 'font/Ultra.ttf', ''),
(59, 'Unkempt', 'Serif', 'Basic Latin', 0, 'font/Unkempt-Regular.ttf', ''),
(61, 'Zeyada', 'Sans', 'Basic latin', 0, 'font/Zeyada.ttf', ''),
(68, 'Brawler', 'Serif', 'Basic Latin', 0, 'font/Brawler-Regular.ttf', ''),
(70, 'Droid Serif', 'Serif', 'Basic Latin', 0, 'font/DroidSerif.ttf', ''),
(75, 'Volkhorn', 'Serif', 'Basic Latin', 0, 'font/Vollkorn-Regular.ttf', ''),
(82, 'Fredricka the Great', 'Serif', 'Basic Latin', 0, 'font/FrederickatheGreat-Regular.ttf', ''),
(85, 'Graduate', 'Serif', 'Basic Latin', 0, 'font/Graduate-Regular.ttf', ''),
(92, 'Love ya Like a Sister', 'Serif', 'Basic Latin', 0, 'font/LoveYaLikeASister.ttf', ''),
(95, 'Nunito Light', 'Sans', 'Basic Latin', 0, 'font/Nunito-Light.ttf', ''),
(101, 'Purple Purse', 'Serif', 'Basic Latin', 0, 'font/PurplePurse-Regular.ttf', ''),
(103, 'Roboto Condensed', 'Sans', 'Basic Latin', 0, 'font/RobotoCondensed-Regular.ttf', ''),
(106, 'Stint Ultra Condensed', 'Serif', 'Basic Latin', 0, 'font/StintUltraCondensed-Regular.ttf', ''),
(111, 'African', 'Sans', 'Basic Latin', 0, 'font/african.ttf', ''),
(113, 'Aprim', 'Sans', 'Basic Latin', 0, 'font/Aprim.otf.ttf', ''),
(115, 'Bees Burts', 'Sans', 'Basic Latin', 0, 'font/Bees Burts.ttf', ''),
(118, 'Booklet Cordel', 'Serif', 'Basic Latin', 0, 'font/Booklet Cordel.ttf', ''),
(122, 'Burn', 'Serif', 'Basic Latin', 0, 'font/BURNN___.TTF', ''),
(123, 'Chanticleer Roman', 'Serif', 'Basic Latin', 0, 'font/CHANTICL.TTF', ''),
(124, 'Cheveuxdange', 'Sans', 'Basic Latin', 0, 'font/Cheveuxdange.ttf', ''),
(126, 'Colwell', 'Serif', 'Basic Latin', 0, 'font/COLWELL_.ttf', ''),
(134, 'FFF Tusj', 'Serif', 'Basic Latin', 0, 'font/FFF Tusj.ttf', ''),
(137, 'Helv Children', 'Sans', 'Basic Latin', 0, 'font/Helv Children.otf.ttf', ''),
(142, 'Kenzo', 'Sans', 'Basic Latin', 0, 'font/Kenzo Regular.otf.ttf', ''),
(143, 'Krabougja', 'Sans', 'Basic Latin', 0, 'font/Krabougja.ttf', ''),
(146, 'Like Giselle', 'Sans', 'Basic Latin', 0, 'font/Like Giselle.ttf', ''),
(149, 'Napoleon', 'Serif', 'Basic Latin', 0, 'font/Napoleon-Bold.ttf', ''),
(153, 'Renny Hybrid', 'Serif', 'Basic Latin', 0, 'font/Renny_Hybrid.ttf', ''),
(154, 'Scribble', 'Sans', 'Basic Latin', 0, 'font/ScrFIBbLE_regular.ttf', ''),
(157, 'The Toad Frog', 'Serif', 'Basic Latin', 0, 'font/the TOADFROG.ttf', ''),
(158, 'The Recon Legend', 'Serif', 'Basic Latin', 0, 'font/TheReconLegendFont.ttf', ''),
(161, 'Typography Times', 'Serif', 'Basic Latin', 0, 'font/Typography times.ttf', ''),
(164, 'Viva la Rivoluzione', 'Sans', 'Basic Latin', 0, 'font/VivelaRivoluzione.ttf', ''),
(165, 'WC Mano Negra BTA', 'Sans', 'Basic Latin', 0, 'font/WCManoNegraBta.ttf', ''),
(166, 'Whackadoo', 'Serif', 'Basic Latin', 0, 'font/WHACKAD_.ttf', ''),
(167, 'IDAutomationHC39M', 'HC39M', 'Basic Latin', 0, 'font/IDAutomationHC39M Free Version.ttf', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(7) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img_path` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `template_id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `label`, `category_id`, `description`, `img_path`, `price`, `tags`, `template_id`) VALUES
(1, 'Sample Text Data', 7, 'Sample Text ', 'item_73064235802ac5d2990d1a3a2b3f50a9f359b3d29.png', '132', '543', 11),
(2, 'Ico Chk Item ', 3, 'Ico Chk Item ', '1576321261.jpg', '523', 'Sample', 12),
(3, 'Sample Number Item', 13, 'Sample Number', 'item_13656970617d47eb4aa7529da09d895cf10cecfdee.png', '435', 'res', 14),
(4, 'Sample image Item', 14, 'Sample image', '1580195671.jpg', '423', 'ewa', 12),
(5, 'List Item', 15, 'List Item', 'item_1020592812e8349003e872458eac636124179dae7f.jpg', '534', 'wase', 15),
(6, 'Item Checkbox', 22, 'Item Checkbox', 'item_1123351498a9d7b2f0836cc1626e925ad1f4f09bab.png', '423', 'yer', 14),
(7, 'Ico Chk Item', 23, 'ico chk', 'item_950574621c153086946ca5a1677ff0c0c34ebdbad.jpg', '524', 'rwe', 14),
(8, 'Complex Item Data', 4, 'Complex Item', 'item_132423069223edd8173d9ca573a4b4ccce270fdbef.png', '3240', 'Temp', 13),
(9, 'Sample Data 24', 3, 'Sa', 'item_12279155433bfa56af03f6a7bcde823fe4f5ef46c3.png', '214', 'rewt', 13),
(10, 'Game On', 3, 'On data', '1580195692.jpg', '1232', 'rwet', 11),
(11, 'Details Mode', 23, 'Mode', 'item_1273932391804f75f370dee0988269f109746defb9.png', '132', 'Tep', 12),
(12, 'Image Mode Activate', 20, 'Activate', 'item_1215246071d8d97b242b4395390a77858e4d1d4e6.jpg', '123', 'Ter', 14),
(13, 'Sala Item', 3, 'Desc', 'item_40995474777d5947554f9c8d6acc0bf9fd7c9d93b.png', '645', 'sample', 14),
(14, 'Sample Ashoka Data', 21, 'Sample Data', 'item_559919356c4ea5b9f600a257aed52bbe7a17a06af.png', '312456', 'Ashoka', 15),
(15, 'Sample Today 6-10', 13, 'Special', 'item_3376900703e1e5d0e2e1db7334be7a6b2dd864f80.jpg', '1200', 'Samp TO', 13),
(16, 'Data Text New Test', 15, 'New Teste', 'item_1465774345bd2aab0ef94b82fbf09e301ca6c03d04.jpg', '13000', 'Newsss', 15),
(17, 'Chkbx Sample Data', 23, 'CHK BX', 'item_14431469719a3b7944488954cbb89b74518555fb7.png', '2400', 'Sample ', 14),
(18, 'Ico BX', 19, 'BX', 'item_71341597561ec0fc93b90191e9390d22927e342de.png', '2300', '123', 12),
(19, 'BX Game', 19, 'BX ', 'item_323500856d035877e61c4e41075cc5b7fa2045a27.jpg', '123', 'BX', 12),
(20, 'BX Mode', 19, 'ASE', 'item_14615141575ab4310ad6f88f28b2b82cfefecd173d.jpg', '132', 'XD', 12),
(21, 'Database Item Check', 3, 'Desk DB dec', '1580210197.jpg', '123', 'Desc DB', 16),
(34, 'Sample Text Data', 7, 'Sample Text ', 'item_73064235802ac5d2990d1a3a2b3f50a9f359b3d29.png', '132', '543', 11),
(35, 'Sample 6-10', 13, 'Special 222', 'item_3376900703e1e5d0e2e1db7334be7a6b2dd864f80.jpg', '200', 'Samp TO', 13),
(36, 'Sample 1', 13, 'Special 1 this is simple descriotpion of the smaple todya special edit to the catgory fo collection 6 sn vst 10 of the item having number an smaple input', '1576384092.jpg', '1201', 'Samp TO', 13),
(37, 'Ico Chk Item ', 3, 'Ico Chk Item ', 'item_1792741141d014645a22ebe9a4412300c18b5ff6e.png', '523', 'Sample', 12),
(38, 'Item Checkbox', 22, 'Item Checkbox', '1580210231.jpg', '4', 'yer', 14),
(39, 'Item Sachith 4', 22, 'Item Checkbox', '1576567697.jpg', '3', 'yer', 15),
(40, 'Item5-19-2', 22, 'Item Checkbox fr', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', '2', 'yer', 13),
(41, 'Item5-19-1', 22, 'Item Checkbox', 'item_2856142581b73a7bcaea85618c18ccb8f819b41d6.png', '1', 'yer', 11),
(42, 'Ico Chk Item ', 3, 'Ico Chk Item ', 'item_1792741141d014645a22ebe9a4412300c18b5ff6e.png', '523', 'Sample', 12);

-- --------------------------------------------------------

--
-- Table structure for table `papertemplates`
--

CREATE TABLE `papertemplates` (
  `id` int(11) NOT NULL,
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
  `added_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `papertemplates`
--

INSERT INTO `papertemplates` (`id`, `label`, `description`, `user_id`, `width`, `height`, `stroke`, `strokeColor`, `bkgColor`, `image`, `img_rect`, `imageStyle`, `added_date`) VALUES
(16, 'Paper Template 1', 'Paper Template 1                                                            \r\n                                                        ', 1, 10, 8, 3, '#80ff00', '#d0ff00', 'paper_templates_1558199868.jpg', NULL, NULL, '2019-05-18'),
(17, 'Paper Template 2', 'Paper Template 2                                                          \r\n                                                        ', 1, 8, 11, 3, '#ff0040', '#ff0000', 'paper_templates_1558199895.jpg', NULL, NULL, '2019-05-18'),
(18, 'Paper Template 3', 'Paper Template 3                                                          \r\n                                                        ', 1, 8, 11.5, 3, '#ff0040', '#ff0000', 'paper_templates_1558199906.jpg', NULL, NULL, '2019-05-18'),
(19, 'Paper Template 4', 'Paper Template 4                                                        \r\n                                                        ', 1, 8.27, 11.69, 4, '#ff0040', '#ff0000', 'paper_templates_1558199919.jpg', NULL, NULL, '2019-05-18'),
(20, 'Paper Template 5', 'Paper Template 5                                                     \r\n                                                        ', 2, 500, 500, 5, '#ff0040', '#0900ff', 'paper_templates_1558199935.jpg', NULL, NULL, '2019-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `sptypeboolean`
--

CREATE TABLE `sptypeboolean` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(14, 165, 41, 0),
(15, 170, 41, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sptypeimage`
--

CREATE TABLE `sptypeimage` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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

CREATE TABLE `sptypeimageboolean` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bool` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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

CREATE TABLE `sptypeimagelist` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(18, 18, 37, 15),
(19, 192, 39, 150),
(20, 182, 10, 143),
(21, 183, 10, 145),
(22, 184, 10, 148),
(23, 192, 41, 150),
(24, 192, 40, 151),
(25, 192, 38, 151),
(26, 17, 42, 7),
(27, 18, 42, 15);

-- --------------------------------------------------------

--
-- Table structure for table `sptypeimagelistitem`
--

CREATE TABLE `sptypeimagelistitem` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prop_id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(149, 'Swe', 184, 'lstitem_227998435ab7f662e66266e6c14049534265928e1.jpg'),
(150, '2 Start', 192, 'a.png'),
(151, '1 Start', 192, 'a.png'),
(152, 'DDL3', 196, 'lstitem_1284458505be7d1cff1b6585d8681d9b4f56cd40a8.png'),
(153, 'DDL2', 196, 'lstitem_14964499457554e65e986d9f471eaa1b3e06faaa18.png'),
(154, 'DDL1', 196, 'lstitem_145626382f7d11ce0a873dbd642bdd99bcd51d519.png');

-- --------------------------------------------------------

--
-- Table structure for table `sptypelist`
--

CREATE TABLE `sptypelist` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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

CREATE TABLE `sptypelistitem` (
  `id` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(132, 'D3', 181),
(133, 'DDL1', 197),
(134, 'DDL2', 197),
(135, 'DDL3', 197);

-- --------------------------------------------------------

--
-- Table structure for table `sptypenumber`
--

CREATE TABLE `sptypenumber` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(13, 173, 36, 100444),
(14, 190, 39, 22),
(15, 190, 41, 1),
(16, 190, 40, 0),
(17, 190, 38, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sptypetext`
--

CREATE TABLE `sptypetext` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(22, 172, 34, 'Game Sample TwO'),
(23, 191, 39, 'Information about pro'),
(24, 191, 41, 'Text12'),
(25, 191, 40, 'Text'),
(26, 191, 38, 'Text');

-- --------------------------------------------------------

--
-- Table structure for table `stylecategory`
--

CREATE TABLE `stylecategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `style` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `styleitem`
--

CREATE TABLE `styleitem` (
  `id` int(11) NOT NULL,
  `label` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `img_rect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `styleitem`
--

INSERT INTO `styleitem` (`id`, `label`, `description`, `price`, `img_rect`, `item_id`, `template_id`) VALUES
(1, '{\"text\":\"Database Item Check\",\"width\":\"149\",\"x\":\"118\",\"y\":\"49\",\"textColor\":\"rgb(227, 34, 227)\",\"backgroundColor\":\"rgb(22, 227, 196)\",\"textSize\":\"18\",\"font-family\":\"Aldrich\",\"backgroundAlpha\":\"0.450064\",\"textAlign\":\"undefined\",\"display\":\"block\"}{\"width\":\"384\",\"height\":\"768\",\"border-width\":\"4\",\"border-color\":\"rgb(196, 86, 196);\"}', '{\"text\":\"Desk DB s dec\",\"width\":\"283.1\",\"x\":\"92\",\"y\":\"124\",\"textColor\":\"rgb(0, 0, 0)\",\"backgroundColor\":\"rgb(88, 212, 42)\",\"textSize\":\"21\",\"font-family\":\"Righteous\",\"backgroundAlpha\":\"0.322411\",\"textAlign\":\"undefined\",\"display\":\"block\"}{\"width\":\"384\",\"height\":\"768\",\"border-width\":\"4\",\"border-color\":\"rgb(196, 86, 196);\"}', '{\"text\":\"123\",\"width\":\"222.75\",\"x\":\"68\",\"y\":\"[object Object]\",\"textColor\":\"rgb(0, 0, 0)\",\"backgroundColor\":\"rgb(209, 209, 222)\",\"textSize\":\"26\",\"font-family\":\"Verdana;\",\"backgroundAlpha\":\"1\",\"textAlign\":\"center\",\"display\":\"block\"}{\"width\":\"384\",\"height\":\"768\",\"border-width\":\"4\",\"border-color\":\"rgb(196, 86, 196);\"}', '{\"x\":0,\"width\":396,\"y\":-22.5,\"height\":297}', 2, 12),
(2, '{\"text\":\"lbl image Item\",\"width\":\"285\",\"x\":\"24\",\"y\":\"52\",\"textColor\":\"rgb(222, 221, 215)\",\"backgroundColor\":\"rgb(235, 14, 73)\",\"textSize\":\"24\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"font-family\":\"ABeeZee;\"}{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(240, 22, 109);\"}[\"\"]', '{\"text\":\"Sample image\",\"width\":\"283.1\",\"x\":\"34\",\"y\":\"246\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(101, 101, 214)\",\"textSize\":\"24\",\"font-family\":\"\",\"backgroundAlpha\":\"undefined\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(240, 22, 109);\"}[\"\"]', '{\"text\":\"423\",\"width\":\"222.75\",\"x\":\"49\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(152, 214, 101)\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(240, 22, 109);\"}[\"\"]', '1580195671.jpg', 4, 12),
(3, '{\"text\":\"Sample Today Special\",\"width\":\"297.069\",\"x\":\"19\",\"y\":\"53\",\"backgroundColor\":\"rgb(14, 235, 169)\",\"textSize\":\"22\",\"font-family\":\"\\\"Bowlby One SC\\\"\",\"height\":\"61.0208px;\",\"fontId\":\"18\"}{\"width\":\"326.4\",\"height\":\"336\",\"border-width\":\"3\",\"border-color\":\"rgb(255, 0, 255);\"}[\"Sample Today Special\",\"Special\",\"20000\",\"Desc DBQ\"]', '{\"text\":\"Special\",\"width\":\"163\",\"x\":\"51\",\"y\":\"143\",\"textColor\":\"rgb(242, 233, 242)\",\"backgroundColor\":\"rgb(255, 0, 0)\",\"textSize\":\"19\",\"font-family\":\"undefined\",\"isVisible\":\"false\"}{\"width\":\"326.4\",\"height\":\"336\",\"border-width\":\"3\",\"border-color\":\"rgb(255, 0, 255);\"}[\"Sample Today Special\",\"Special\",\"20000\",\"Desc DBQ\"]', '{\"text\":\"20000\",\"width\":\"146\",\"x\":\"104\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(30, 102, 40)\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"326.4\",\"height\":\"336\",\"border-width\":\"3\",\"border-color\":\"rgb(255, 0, 255);\"}[\"Sample Today Special\",\"Special\",\"20000\",\"Desc DBQ\"]', '1572529295.jpg', 36, 13),
(4, '{\"text\":\"Sample Today Special\",\"width\":\"184.85\",\"x\":\"167\",\"y\":\"74\",\"textSize\":\"24\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"display\":\"block\",\"backgroundColor\":\"rgb(108, 108, 217);\"}{\"background-color\":\"rgb(135, 132, 135)\",\"border-color\":\"rgb(237, 128, 12);\"}[\"labels\",\"description\",\"prices\",\"tags\"]', '{\"text\":\"Special\",\"width\":\"283.1\",\"x\":\"247\",\"y\":\"229\",\"textSize\":\"14\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"display\":\"block\",\"backgroundColor\":\"rgb(91, 91, 199);\"}{\"background-color\":\"rgb(135, 132, 135)\",\"border-color\":\"rgb(237, 128, 12);\"}[\"labels\",\"description\",\"prices\",\"tags\"]', '{\"text\":\"20000\",\"width\":\"222.75\",\"x\":\"326\",\"y\":\"180\",\"textColor\":\"undefined\",\"backgroundColor\":\"undefined\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"display\":\"block;\"}{\"background-color\":\"rgb(135, 132, 135)\",\"border-color\":\"rgb(237, 128, 12);\"}[\"labels\",\"description\",\"prices\",\"tags\"]', '{\"x\":0,\"width\":396,\"y\":-22.5,\"height\":297}', 35, 13),
(5, '{\"text\":\"Game On\",\"width\":\"204\",\"x\":\"112\",\"y\":\"29\",\"textColor\":\"rgb(227, 34, 227)\",\"backgroundColor\":\"rgb(22, 227, 196)\",\"textSize\":\"18\",\"font-family\":\"Aldrich\",\"backgroundAlpha\":\"0.450064\",\"fontId\":\"undefined\"}{\"width\":\"528\",\"height\":\"336\",\"border-color\":\"rgb(255, 172, 5);\"}[\"\"]', '{\"text\":\"On data\",\"width\":\"106\",\"x\":\"296\",\"y\":\"78\",\"textColor\":\"rgb(0, 0, 0)\",\"backgroundColor\":\"rgb(255, 0, 0)\",\"textSize\":\"21\",\"font-family\":\"Righteous\",\"backgroundAlpha\":\"0.416206\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}{\"width\":\"528\",\"height\":\"336\",\"border-color\":\"rgb(255, 172, 5);\"}[\"\"]', '{\"text\":\"1232\",\"width\":\"79\",\"x\":\"23\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(43, 43, 87)\",\"textSize\":\"22\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"undefined\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}{\"width\":\"528\",\"height\":\"336\",\"border-color\":\"rgb(255, 172, 5);\"}[\"\"]', '1580195692.jpg', 10, 11),
(6, '{\"text\":\"Item Sachith 4\",\"width\":\"184.85\",\"x\":\"268\",\"y\":\"78\",\"backgroundColor\":\"rgb(79, 222, 27)\",\"textSize\":\"24\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"fontId\":\"undefined\"}{\"width\":\"816\",\"height\":\"1056\",\"border-color\":\"rgb(184, 240, 31);\"}[\"\"]', '{\"text\":\"Item Checkbox\",\"width\":\"283.1\",\"x\":\"247\",\"y\":\"229\",\"textColor\":\"undefined\",\"backgroundColor\":\"undefined\",\"textSize\":\"14\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"816\",\"height\":\"1056\",\"border-color\":\"rgb(184, 240, 31);\"}[\"\"]', '{\"text\":\"423\",\"width\":\"222.75\",\"x\":\"219\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(76, 27, 222);\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"816\",\"height\":\"1056\",\"border-color\":\"rgb(184, 240, 31);\"}[\"\"]', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', 39, 15),
(7, '{\"text\":\"Database Item Check\",\"width\":\"149\",\"x\":\"10\",\"y\":\"2\",\"textColor\":\"rgb(186, 72, 186)\",\"textSize\":\"24\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"right\",\"font-family\":\"ABeeZee;\"}{\"width\":\"96\",\"height\":\"84\",\"border-color\":\"rgb(38, 0, 255);\"}[\"\"]', '{\"text\":\"Desk DB s dec\",\"width\":\"283.1\",\"x\":\"7\",\"y\":\"210\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(109, 109, 201)\",\"textSize\":\"26\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.708647\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}{\"width\":\"96\",\"height\":\"84\",\"border-color\":\"rgb(38, 0, 255);\"}[\"\"]', '{\"text\":\"123\",\"width\":\"222.75\",\"x\":\"326\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"undefined\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"96\",\"height\":\"84\",\"border-color\":\"rgb(38, 0, 255);\"}[\"\"]', '1580210197.jpg', 21, 16),
(8, '{\"text\":\"Item5-19-2\",\"width\":\"184.85\",\"x\":\"10\",\"y\":\"10\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(200, 200, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"display\":\"undefined\"}{\"width\":\"326.4\",\"height\":\"336px;\"}[\"\"]', '{\"text\":\"Item Checkbox fr\",\"width\":\"184.85\",\"x\":\"10\",\"y\":\"40\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(200, 200, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"display\":\"undefined\"}{\"width\":\"326.4\",\"height\":\"336px;\"}[\"\"]', '{\"text\":\"2\",\"width\":\"184.85\",\"x\":\"10\",\"y\":\"70\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(200, 200, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"display\":\"undefined\"}{\"width\":\"326.4\",\"height\":\"336px;\"}[\"\"]', '{\"x\":0,\"width\":396,\"y\":-22.5,\"height\":297}', 40, 13),
(13, '{\"text\":\"Item Checkbox\",\"width\":\"184.85\",\"x\":\"0\",\"y\":\"1\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(255, 132, 0)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"240\",\"height\":\"144\",\"border-color\":\"rgb(255, 172, 5);\"}[\"\"]', '{\"text\":\"Item Checkbox\",\"width\":\"184.85\",\"x\":\"2\",\"y\":\"109\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(0, 255, 183)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"240\",\"height\":\"144\",\"border-color\":\"rgb(255, 172, 5);\"}[\"\"]', '{\"text\":\"4\",\"width\":\"33\",\"x\":\"195\",\"y\":\"[object Object]\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(255, 0, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"240\",\"height\":\"144\",\"border-color\":\"rgb(255, 172, 5);\"}[\"\"]', 'item_1123351498a9d7b2f0836cc1626e925ad1f4f09bab.png', 38, 14),
(14, '{\"text\":\"Ico Chk Item \",\"width\":\"184.85\",\"x\":\"10\",\"y\":\"10\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(200, 200, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(255, 255, 255);\"}[\"\"]', '{\"text\":\"Ico Chk Item \",\"width\":\"184.85\",\"x\":\"10\",\"y\":\"40\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(200, 200, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(255, 255, 255);\"}[\"\"]', '{\"text\":\"523\",\"width\":\"184.85\",\"x\":\"10\",\"y\":\"[object Object]\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(200, 200, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(255, 255, 255);\"}[\"\"]', 'item_1792741141d014645a22ebe9a4412300c18b5ff6e.png', 42, 12);

-- --------------------------------------------------------

--
-- Table structure for table `stylesptype`
--

CREATE TABLE `stylesptype` (
  `id` int(11) NOT NULL,
  `styleItem_id` int(11) NOT NULL,
  `spType_id` int(11) NOT NULL,
  `spType_type` enum('bool','img','imgbool','text','number','list','imglist') COLLATE utf8_unicode_ci NOT NULL,
  `style` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `stylesptype`
--

INSERT INTO `stylesptype` (`id`, `styleItem_id`, `spType_id`, `spType_type`, `style`) VALUES
(1, 3, 154, 'number', '{\"text\":\"10\",\"x\":80,\"isVisible\":true,\"y\":100,\"value_id\":1,\"backgroundColor\":16777215,\"textAlign\":\"left\",\"prop_id\":154,\"prop_type\":\"number\",\"isPrefix\":false,\"textColor\":0,\"fontID\":0,\"textSize\":14,\"height\":25.8,\"backgroundAlpha\":0.8,\"item_id\":36,\"width\":48.65,\"align\":0}'),
(2, 3, 173, 'number', '{\"text\":\"223\",\"x\":0,\"isVisible\":true,\"y\":186,\"value_id\":2,\"backgroundColor\":16777215,\"textAlign\":\"left\",\"prop_id\":173,\"prop_type\":\"number\",\"isPrefix\":false,\"textColor\":0,\"fontID\":0,\"textSize\":14,\"height\":25.8,\"backgroundAlpha\":0.8,\"item_id\":36,\"width\":48.65,\"align\":0}'),
(3, 1, 17, 'imglist', '{\"backgroundX\":0,\"backgroundY\":0,\"text\":\"http://localhost/tagapp/upload_images/icon_drp_images/lstitem_87030682a052060ef83c015bb163f473cbe2101a.png\",\"textAlign\":\"left\",\"align\":0,\"prop_type\":\"imglist\",\"isVisible\":true,\"value_id\":3,\"isPrefix\":false,\"backgroundColor\":16777215,\"x\":175,\"width\":48,\"y\":160,\"item_id\":21,\"height\":48,\"backgroundAlpha\":0.8,\"textSize\":14,\"textColor\":0,\"textWidth\":48,\"textHeight\":48,\"fontID\":0,\"prop_id\":17}');

-- --------------------------------------------------------

--
-- Table structure for table `table22`
--

CREATE TABLE `table22` (
  `price2` varchar(45) DEFAULT NULL,
  `itemid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tblprintqueue`
--

CREATE TABLE `tblprintqueue` (
  `id` int(11) NOT NULL,
  `itm_id` int(11) DEFAULT NULL,
  `label` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `img_path` text COLLATE utf8_unicode_ci,
  `img_rect` text COLLATE utf8_unicode_ci,
  `img_crop` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `imgdiv` text COLLATE utf8_unicode_ci,
  `lblvisible` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoOfCopy` int(20) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tblprintqueue`
--

INSERT INTO `tblprintqueue` (`id`, `itm_id`, `label`, `description`, `img_path`, `img_rect`, `img_crop`, `price`, `tags`, `imgdiv`, `lblvisible`, `NoOfCopy`, `added_date`) VALUES
(1, 36, '{\"text\":\"Sample Today Special\",\"width\":\"297.069\",\"x\":\"19\",\"y\":\"53\",\"backgroundColor\":\"rgb(14, 235, 169)\",\"textSize\":\"22\",\"font-family\":\"\\\"Bowlby One SC\\\"\",\"height\":\"61.0208px;\",\"fontId\":\"18\"}', '{\"text\":\"Special\",\"width\":\"163\",\"x\":\"51\",\"y\":\"143\",\"textColor\":\"rgb(242, 233, 242)\",\"backgroundColor\":\"rgb(255, 0, 0)\",\"textSize\":\"19\",\"font-family\":\"undefined\",\"isVisible\":\"false\"}', '1572529295.jpg', '{\"x\":67.8183486238532,\"y\":9.55045871559633,\"width\":259.77247706422014,\"height\":267.4128440366972,\"rotate\":0,\"scaleX\":1,\"scaleY\":1}', '1_crop.jpg', '{\"text\":\"20000\",\"width\":\"146\",\"x\":\"104\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(30, 102, 40)\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"text\":\"Desc DBQ\",\"width\":\"129\",\"x\":\"60\",\"y\":\"221\",\"backgroundColor\":\"rgb(161, 15, 15)\",\"textSize\":\"20\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"width\":\"326.4\",\"height\":\"336\",\"border-width\":\"3\",\"border-color\":\"rgb(255, 0, 255);\"}', 'labels,description,prices,tags', 4, '2019-09-18 00:00:00'),
(3, 21, '{\"text\":\"Database Item Check\",\"width\":\"149\",\"x\":\"10\",\"y\":\"2\",\"textColor\":\"rgb(186, 72, 186)\",\"textSize\":\"24\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"right\",\"font-family\":\"ABeeZee;\",\"isVisible\":true,\"isPrefix\":false}', '{\"text\":\"Desk DB s dec\",\"width\":\"283.1\",\"x\":\"7\",\"y\":\"210\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(109, 109, 201)\",\"textSize\":\"26\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.708647\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}', '1580210197.jpg', '{\"x\":72.68008048289737,\"y\":93.09712312230474,\"width\":57.56136820925553,\"height\":50.36619718309859,\"rotate\":0,\"scaleX\":1,\"scaleY\":1}', '3_crop.jpg', '{\"text\":\"123\",\"width\":\"222.75\",\"x\":\"326\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"undefined\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"text\":\"Desc DBR\",\"width\":\"191.9\",\"x\":\"18\",\"y\":\"140\",\"textColor\":\"rgb(156, 76, 156)\",\"backgroundColor\":\"undefined\",\"textSize\":\"20\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"width\":\"96\",\"height\":\"84\",\"border-color\":\"rgb(38, 0, 255);\"}', 'labels,description,prices,tags', 2, '2019-09-18 00:00:00'),
(7, 4, '{\"text\":\"lbl image Item\",\"width\":\"285\",\"x\":\"24\",\"y\":\"52\",\"textColor\":\"rgb(222, 221, 215)\",\"backgroundColor\":\"rgb(235, 14, 73)\",\"textSize\":\"24\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"font-family\":\"ABeeZee;\",\"isVisible\":true,\"isPrefix\":false}', '{\"text\":\"Sample image\",\"width\":\"283.1\",\"x\":\"34\",\"y\":\"246\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(101, 101, 214)\",\"textSize\":\"24\",\"font-family\":\"\",\"backgroundAlpha\":\"undefined\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}', '1580195671.jpg', '{\"x\":164.5529745839938,\"y\":0,\"width\":317.35537190082636,\"height\":634.7107438016527,\"rotate\":0,\"scaleX\":1,\"scaleY\":1}', '7_crop.jpg', '{\"text\":\"423\",\"width\":\"222.75\",\"x\":\"49\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(152, 214, 101)\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"text\":\"\\u00a0testing ewa\",\"width\":\"250\",\"x\":\"0\",\"y\":\"128\",\"textColor\":\"rgb(227, 36, 227)\",\"backgroundColor\":\"rgb(98, 217, 116)\",\"textSize\":\"20\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"width\":\"384\",\"height\":\"768\",\"border-color\":\"rgb(240, 22, 109);\"}', 'labels,description,prices,tags', 3, '2019-09-24 00:00:00'),
(8, 39, '{\"text\":\"Item Sachith 4\",\"width\":\"184.85\",\"x\":\"268\",\"y\":\"78\",\"backgroundColor\":\"rgb(79, 222, 27)\",\"textSize\":\"24\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"fontId\":\"undefined\"}', '{\"text\":\"Item Checkbox\",\"width\":\"283.1\",\"x\":\"247\",\"y\":\"229\",\"textColor\":\"undefined\",\"backgroundColor\":\"undefined\",\"textSize\":\"14\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', 'item_497866621deda2ee33130ce38ad68e841bfa25a81.jpg', '{\"x\":253.4545505530941,\"y\":140.05332950056786,\"width\":557.3389795778975,\"height\":721.2622088655144,\"rotate\":-180,\"scaleX\":1,\"scaleY\":-1}', '8_crop.jpg', '{\"text\":\"423\",\"width\":\"222.75\",\"x\":\"219\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(76, 27, 222);\",\"textSize\":\"18\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"text\":\"yer\",\"width\":\"191.9\",\"x\":\"266\",\"y\":\"33\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(222, 27, 79);\",\"textSize\":\"20\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"width\":\"816\",\"height\":\"1056\",\"border-color\":\"rgb(184, 240, 31);\"}', 'labels,description,prices,tags', 2, '2019-09-26 00:00:00'),
(9, 10, '{\"text\":\"Game On\",\"width\":\"204\",\"x\":\"112\",\"y\":\"29\",\"textColor\":\"rgb(227, 34, 227)\",\"backgroundColor\":\"rgb(22, 227, 196)\",\"textSize\":\"18\",\"font-family\":\"Aldrich\",\"backgroundAlpha\":\"0.450064\",\"fontId\":\"undefined\"}', '{\"text\":\"On data\",\"width\":\"106\",\"x\":\"296\",\"y\":\"78\",\"textColor\":\"rgb(0, 0, 0)\",\"backgroundColor\":\"rgb(255, 0, 0)\",\"textSize\":\"21\",\"font-family\":\"Righteous\",\"backgroundAlpha\":\"0.416206\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}', '1580195692.jpg', '{\"x\":436.75900530133913,\"y\":164.06438631790746,\"width\":354.63983903420524,\"height\":365.0704225352113,\"rotate\":0,\"scaleX\":1,\"scaleY\":1}', '9_crop.jpg', '{\"text\":\"1232\",\"width\":\"79\",\"x\":\"23\",\"y\":\"[object Object]\",\"textColor\":\"undefined\",\"backgroundColor\":\"rgb(43, 43, 87)\",\"textSize\":\"22\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"undefined\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}', '{\"text\":\"rwet\",\"width\":\"139\",\"x\":\"115\",\"y\":\"72\",\"textColor\":\"rgb(242, 19, 19)\",\"backgroundColor\":\"rgb(216, 217, 139)\",\"textSize\":\"27\",\"font-family\":\"Aldrich\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"undefined\",\"isVisible\":\"false\"}', '{\"width\":\"528\",\"height\":\"336\",\"border-color\":\"rgb(255, 172, 5);\"}', 'description,tags', 1, '2019-10-25 00:00:00'),
(10, 38, '{\"text\":\"Item Checkbox\",\"width\":\"184.85\",\"x\":\"0\",\"y\":\"1\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(255, 132, 0)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"text\":\"Item Checkbox\",\"width\":\"184.85\",\"x\":\"2\",\"y\":\"109\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(0, 255, 183)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '1580210231.jpg', '{\"x\":102.53521126760563,\"y\":177.93158953722335,\"width\":123.62173038229376,\"height\":74.17303822937626,\"rotate\":0,\"scaleX\":1,\"scaleY\":1}', '10_crop.jpg', '{\"text\":\"4\",\"width\":\"33\",\"x\":\"195\",\"y\":\"[object Object]\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(255, 0, 200)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"text\":\"yer\",\"width\":\"32\",\"x\":\"195\",\"y\":\"69\",\"textColor\":\"rgb(255, 255, 255)\",\"backgroundColor\":\"rgb(0, 132, 255)\",\"textSize\":\"18\",\"font-family\":\"sans\",\"backgroundAlpha\":\"1\",\"textAlign\":\"left\",\"isVisible\":\"false\"}', '{\"width\":\"240\",\"height\":\"144\",\"border-color\":\"rgb(255, 172, 5);\"}', 'labels,description,prices,tags', 1, '2020-01-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblprintqueuedefault`
--

CREATE TABLE `tblprintqueuedefault` (
  `id` int(11) NOT NULL,
  `label` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `img_path` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `tags` text COLLATE utf8_unicode_ci,
  `imgdiv` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tblprintqueuedefault`
--

INSERT INTO `tblprintqueuedefault` (`id`, `label`, `description`, `img_path`, `price`, `tags`, `imgdiv`) VALUES
(1, '{\"text\":\"Item Sachith 4\",\"width\":\"184.85\",\"x\":\"8\",\"y\":\"81\",\"textColor\":\"rgb(227, 34, 227)\",\"backgroundColor\":\"rgb(41, 255, 98)\",\"textSize\":\"18\",\"font-family\":\"Aldrich\",\"backgroundAlpha\":\"0.450064\",\"textAlign\":\"undefined\",\"display\":\"block\"}', '{\"text\":\"Item Checkbox\",\"width\":\"278\",\"x\":\"329\",\"y\":\"157\",\"textColor\":\"rgb(250, 196, 87)\",\"backgroundColor\":\"rgb(14, 14, 15)\",\"textSize\":\"21\",\"font-family\":\"Righteous\",\"backgroundAlpha\":\"0.322411\",\"textAlign\":\"undefined\",\"display\":\"block\"}', NULL, '{\"text\":\"423\",\"width\":\"222.75\",\"x\":\"498\",\"y\":\"140\",\"textColor\":\"rgb(0, 0, 0)\",\"backgroundColor\":\"rgb(92, 184, 116)\",\"textSize\":\"26\",\"font-family\":\"undefined\",\"backgroundAlpha\":\"0.398507;\",\"textAlign\":\"right\",\"display\":\"block\"}', '{\"text\":\"yer\",\"width\":\"191.9\",\"x\":\"580\",\"y\":\"207\",\"textColor\":\"rgb(242, 19, 19)\",\"backgroundColor\":\"rgb(216, 217, 139)\",\"textSize\":\"27\",\"font-family\":\"Aldrich\",\"backgroundAlpha\":\"0.8\",\"textAlign\":\"undefined\",\"display\":\"block;\"}', '{\"width\":\"326.4\",\"height\":\"336\",\"border-color\":\"rgb(255, 172, 5);\"}');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
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
  `added_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `label`, `description`, `user_id`, `width`, `height`, `stroke`, `strokeColor`, `bkgColor`, `image`, `img_rect`, `imageStyle`, `added_date`) VALUES
(11, 'Template 1', 'Template 1', 1, 5.5, 3.5, 3, '#ff0000', '#ff0000', 'templates_1558199205.jpg', NULL, NULL, '2019-05-18'),
(12, 'Template 2', '  Template 2', 1, 4, 8, 1, '#d500ff', '#6f00ff', 'templates_1558199242.jpg', NULL, NULL, '2019-05-18'),
(13, 'Template 3', '  Template 3', 1, 3.4, 3.5, 3, '#009dff', '#00d9ff', 'templates_1558199264.jpg', NULL, NULL, '2019-05-18'),
(14, 'Template 4', '  Template 4                                                     \r\n                                                    ', 1, 2.5, 1.5, 5, '#00ff1a', '#04ff00', 'templates_1558199288.jpg', NULL, NULL, '2019-05-18'),
(15, 'Template 5', '  Template 5', 1, 8.5, 11, 6, '#a6ff00', '#f7ff00', 'templates_1558199312.jpg', NULL, NULL, '2019-05-18'),
(16, 'Template 6', 'Template 6', 1, 1, 0.875, 1, '#0000ff', '#0000ff', 'templates_1579694488.png', NULL, NULL, '2020-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `templatesprintlabel`
--

CREATE TABLE `templatesprintlabel` (
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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'ashok@g.com', '202cb962ac59075b964b07152d234b70', 'ashok'),
(2, 'a@a.com', '81dc9bdb52d04dc20036dbd8313ed055', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `ztblprintqueue`
--

CREATE TABLE `ztblprintqueue` (
  `SrNo` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `TemplateID` int(7) NOT NULL,
  `NoOfCopy` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ztblprintqueue`
--

INSERT INTO `ztblprintqueue` (`SrNo`, `UserID`, `ItemID`, `TemplateID`, `NoOfCopy`) VALUES
(1, 1, 36, 13, 2),
(2, 1, 21, 13, 3),
(3, 1, 4, 12, 1),
(4, 1, 39, 15, 3),
(5, 1, 10, 13, 4),
(6, 1, 2, 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `categoriesproperties`
--
ALTER TABLE `categoriesproperties`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papertemplates`
--
ALTER TABLE `papertemplates`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sptypeboolean`
--
ALTER TABLE `sptypeboolean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypeimage`
--
ALTER TABLE `sptypeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypeimageboolean`
--
ALTER TABLE `sptypeimageboolean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypeimagelist`
--
ALTER TABLE `sptypeimagelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypeimagelistitem`
--
ALTER TABLE `sptypeimagelistitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypelist`
--
ALTER TABLE `sptypelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypelistitem`
--
ALTER TABLE `sptypelistitem`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sptypenumber`
--
ALTER TABLE `sptypenumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptypetext`
--
ALTER TABLE `sptypetext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `styleitem`
--
ALTER TABLE `styleitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stylesptype`
--
ALTER TABLE `stylesptype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprintqueue`
--
ALTER TABLE `tblprintqueue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprintqueuedefault`
--
ALTER TABLE `tblprintqueuedefault`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `ztblprintqueue`
--
ALTER TABLE `ztblprintqueue`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categoriesproperties`
--
ALTER TABLE `categoriesproperties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `papertemplates`
--
ALTER TABLE `papertemplates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sptypeboolean`
--
ALTER TABLE `sptypeboolean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sptypeimage`
--
ALTER TABLE `sptypeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sptypeimageboolean`
--
ALTER TABLE `sptypeimageboolean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sptypeimagelist`
--
ALTER TABLE `sptypeimagelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sptypeimagelistitem`
--
ALTER TABLE `sptypeimagelistitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `sptypelist`
--
ALTER TABLE `sptypelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sptypelistitem`
--
ALTER TABLE `sptypelistitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `sptypenumber`
--
ALTER TABLE `sptypenumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sptypetext`
--
ALTER TABLE `sptypetext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `styleitem`
--
ALTER TABLE `styleitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stylesptype`
--
ALTER TABLE `stylesptype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblprintqueue`
--
ALTER TABLE `tblprintqueue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblprintqueuedefault`
--
ALTER TABLE `tblprintqueuedefault`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ztblprintqueue`
--
ALTER TABLE `ztblprintqueue`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
