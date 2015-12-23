-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2015 at 09:53 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `date_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admission_before` int(1) NOT NULL,
  `word` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `referral_from` int(1) NOT NULL,
  `financial_status` int(1) NOT NULL,
  `consultant` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `provisional_diagnosis` text COLLATE utf8_unicode_ci NOT NULL,
  `icd_10` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `expected_days` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `user_id`, `mrn`, `date_time`, `admission_before`, `word`, `class`, `room`, `referral_from`, `financial_status`, `consultant`, `provisional_diagnosis`, `icd_10`, `expected_days`, `created_at`) VALUES
(1, 5, 1, '2015-04-09', 0, 'jg;dish;', 'l''j''lkjfglkj', 'ljh''ljhl''kdj', 1, 1, 'jkklj', 'oj[oij[', 'jkjj', 'ojilkh', '2015-04-26 17:34:14'),
(2, 5, 1, '87837383/93928/3293', 0, 'feeokfoek', 'feofkeo', 'okofkeofk', 2, 1, 'kfeokfeo', 'okefokefokeo', 'fekfoek', 'ofkeofkeo', '2015-05-17 11:31:37'),
(3, 5, 2, '87837383/93928/3293', 0, 'feofkwok', 'oeofkeofk', 'oefkeofko', 1, 2, 'ededed', 'fefieuifei', 'odkwodkwo', 'ekeofkeo', '2015-05-17 11:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `blood_trams_fusion`
--

CREATE TABLE IF NOT EXISTS `blood_trams_fusion` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `responsible_physician` varchar(350) NOT NULL,
  `blood_component_type` varchar(150) NOT NULL,
  `specific_component_modification` int(1) NOT NULL,
  `check_blood_consent` int(1) NOT NULL,
  `bag_no` tinytext NOT NULL,
  `donor_name` tinytext NOT NULL,
  `rh` tinytext NOT NULL,
  `bl_grope` tinytext NOT NULL,
  `observation` int(11) NOT NULL,
  `dr_sign` varchar(200) NOT NULL,
  `nurse_sign` varchar(200) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_trams_fusion`
--

INSERT INTO `blood_trams_fusion` (`id`, `mrn`, `user_id`, `date_time`, `responsible_physician`, `blood_component_type`, `specific_component_modification`, `check_blood_consent`, `bag_no`, `donor_name`, `rh`, `bl_grope`, `observation`, `dr_sign`, `nurse_sign`, `created_at`, `updated_at`) VALUES
(1, 36, 2, '2015-04-15 06:31:11', 'hj', 'jj', 2, 2, 'rtertyr', 'fhyjf', 'gj', 'gjf', 3, 'gsdfg', 'dfgsdf', 2147483647, '2015-04-21 12:04:24'),
(2, 36, 3, '2015-04-14 14:53:00', 'kfgjsdfkl;hj', '2', 2, 1, 'dfsgsd', 'dfgsdfg', '', 'dfgd', 3, '0', 'dfgsdf', 1429628413, '2015-04-21 15:00:13'),
(3, 36, 3, '2015-04-16 01:00:00', 'jlgu;', '3', 2, 0, 'poupoihy', 'iop', '', 'uiypu', 0, '0', 'iu', 1429708436, '2015-04-22 13:13:56'),
(4, 1, 3, '2015-05-20 15:02:00', 'gdhfgsdfg shdgfs ', '2', 1, 1, '657', 'ghjg', '', 'ghjg', 1, '0', 'ytyt', 1431947809, '2015-05-18 11:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE IF NOT EXISTS `cons` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `consit` varchar(300) NOT NULL,
  `eye` varchar(300) NOT NULL,
  `ent` varchar(300) NOT NULL,
  `card` varchar(300) NOT NULL,
  `resp` varchar(300) NOT NULL,
  `gi` varchar(300) NOT NULL,
  `gu` varchar(300) NOT NULL,
  `male` varchar(300) NOT NULL,
  `female` varchar(300) NOT NULL,
  `musc` varchar(300) NOT NULL,
  `skin` varchar(300) NOT NULL,
  `neuro` varchar(300) NOT NULL,
  `psych` varchar(300) NOT NULL,
  `endo` varchar(300) NOT NULL,
  `heme` varchar(300) NOT NULL,
  `immu` varchar(300) NOT NULL,
  `physical` text NOT NULL,
  `labor` text NOT NULL,
  `diag` varchar(300) NOT NULL,
  `recom` text NOT NULL,
  `drug_1` varchar(300) NOT NULL,
  `dose_1` varchar(300) NOT NULL,
  `freq_1` varchar(300) NOT NULL,
  `dur_1` varchar(300) NOT NULL,
  `route_1` varchar(300) NOT NULL,
  `instruct_1` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `sign` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cons`
--

INSERT INTO `cons` (`id`, `mrn`, `consit`, `eye`, `ent`, `card`, `resp`, `gi`, `gu`, `male`, `female`, `musc`, `skin`, `neuro`, `psych`, `endo`, `heme`, `immu`, `physical`, `labor`, `diag`, `recom`, `drug_1`, `dose_1`, `freq_1`, `dur_1`, `route_1`, `instruct_1`, `time`, `sign`, `user_id`) VALUES
(10, 1, ' | weight change | fatigue | ', ' |  | double vision |  | pain | ', ' |  | epistaxis |  | dysphagia | |', ' |  | palpitations | PND |  | |', ' |  |  | cough | hemoptysis | ', ' |  |  |  | heartburn  |  |  | diarrhea | BRBPR | ', ' |  | hematuria |  | frequency | |', ' |  |  | testicular | masses | ', ' | menstrual problems | discharge |  |  | ', ' | pain |  | joint swelling | ', ' |  |  | abscess | mass | |', ' |  | tinging |  |   |  | dizziness | syncope |  | ', ' |  | insomnia |  |  | crying spells|', ' |  | heat/cold intolerance | polyuria |  | |', ' |  | night sweats | unusual bleeding/bruising | ', ' |  | hives | seasonal allergies | ', ' lllllllllllllllllllllllll', ' kjji', ' kjijikjij', ' ooj', '', '', '', '', '', '', 'Year: 2015 Month: 03 Day: 15 - 03:53 pm', 'kjkjiji', 0),
(11, 1, ' | weight change |  | ', ' |  |  |  |  | ', ' | hearing loss |  |  |  | |', ' |  | palpitations | PND |  | |', ' |  | wheezing | cough |  | ', ' |  |  | vomiting | heartburn  |  |  |  |  | ', ' |  |  | incontinence |  | |', ' |  | discharge |  |  | ', ' |  | discharge |  |  | ', ' |  | weakness |  | ', ' |  |  | abscess |  | |', ' |  |  | weakness |   |  |  |  |  | ', ' |  |  | mood problems | depression | |', ' |  | heat/cold intolerance | polyuria |  | |', ' |  | night sweats | unusual bleeding/bruising | ', ' |  | hives |  | ', 'dgfsdfsdf', ' fsdfsdfsd', ' fsdfsdfsdfsd', ' fsdfsfsdf', 'sdfsdfsdf', 'dfsdfsdf', 'sdfsdfsdf', 'fsdfsdfsd', 'sdfsdfsd', 'fsdfsdfsd', 'Year: 2015 Month: 04 Day: 19 - 03:06 pm', 'sfsdfsd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE IF NOT EXISTS `doc` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `quality` varchar(200) NOT NULL,
  `severty` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `factor` varchar(200) NOT NULL,
  `assoc` varchar(200) NOT NULL,
  `history` text NOT NULL,
  `tobaco` varchar(200) NOT NULL,
  `alcohol` varchar(200) NOT NULL,
  `drugs` varchar(200) NOT NULL,
  `hiv` varchar(200) NOT NULL,
  `occ` varchar(200) NOT NULL,
  `edu` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `mrn` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `location`, `quality`, `severty`, `duration`, `time`, `factor`, `assoc`, `history`, `tobaco`, `alcohol`, `drugs`, `hiv`, `occ`, `edu`, `marital`, `mrn`, `sign`, `user_id`) VALUES
(1, 'qiiq', 'wqjqij', 'siqjiq', 'xiwjidj', '0000-00-00 00:00:00', 'dwjidjwdwkjdwi', 'kdwijdiw', 'dwdjwidjwd', 'Yes', 'No', 'No', 'dwodwodw', 'dwokdwokd', 'jdwijdiw', 'Single', '', '', 0),
(2, 'qiiq', 'wqjqij', 'siqjiq', 'xiwjidj', '0000-00-00 00:00:00', 'dwjidjwdwkjdwi', 'kdwijdiw', 'ssssssssssss', 'Yes', 'No', 'Yes', 'dwodwodw', 'dwokdwokd', 'jdwijdiw', 'Single', '', '', 0),
(6, '3333', 'r4r4', 'siqjiq', 'xiwjidj', '0000-00-00 00:00:00', 'r4r4r4', 'kdwijdiw', 'wwwwwwwww', 'Yes', 'Yes', 'Yes', 'dwodwodw', 'frfrfr', 'jdwijdiw', 'Married', '123', '', 0),
(7, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(8, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(9, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(10, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(11, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(12, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(13, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(14, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(15, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(16, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(17, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(18, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(19, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(20, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(21, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(22, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(23, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(24, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(25, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(26, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(27, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(28, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(29, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(30, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(31, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(32, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(33, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(34, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(35, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(36, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(37, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(38, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(39, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(40, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(41, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(42, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(43, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(44, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(45, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(46, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(47, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(48, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(49, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(50, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(51, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(52, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(53, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(54, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(55, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(56, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(57, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(58, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(59, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(60, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(61, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(62, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(63, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(64, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(65, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(66, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(67, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(68, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(69, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(70, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(71, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(72, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(73, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(74, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(75, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(76, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(77, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(78, 'mmmmmmmmmmmmmm', 'good', 'lkoko', 'rkorkorlwkwo', '0000-00-00 00:00:00', 'kdkdkd', 'rokrokorkr', 'kokrokrokr', 'ekoek', 'eokeoek', 'eokeoke', 'eokeokeoe', 'lkdlkdlkl', 'ldkodkodkod', 'dkoekoekoekokeokeoek', '12333', '', 0),
(79, 'qiiq', 'r4r4', 'siqjiq', 'xiwjidj', '0000-00-00 00:00:00', 'r4r4r4', 'r4r4r4r4', 'sdwkdwlkdwkdwkwd', 'Yes', 'Yes', 'Yes', 'erfrfr', 'frfrfr', 'jdwijdiw', 'Married', '76', '', 0),
(80, 'wwwwwwwwwww', 'wwwwwwwww', 'wwwwwwww', '111', '0000-00-00 00:00:00', 'ddddddddddd', 'ddddddddddddd', 'dddddddddd', 'Yes', 'Yes', 'Yes', 'dddddddddddd', 'ddddddd', 'moh', 'Single', '1111', '', 0),
(81, 'eeeeeeee', 'eeeeeee', 'eeeeee', 'eeeeeeeeeeeee', '0000-00-00 00:00:00', 'eeeeeeeeeeeee', 'eeeeeeeeee', 'eeeeeeeeeeeeee', 'Yes', 'Yes', 'Yes', 'eeee', 'eeeeeeeeeeeee', 'eeeeeeeeeeee', 'Single', '11', '', 0),
(82, 'l;djwijdw', 'l;jipojefoi', 'ljfiopejf', 'opjkfiopefjkpoe', '2015-04-19 14:53:39', 'o[kpiokfep', ';loejkfpioefjk', '[kfopkeopkfekf', 'Yes', 'Yes', 'Yes', 'dfasdf', 'sdfsdfsdfsdf', 'dfsdfsdfsd', 'Single', '36', '', 0),
(83, 'l;djwijdw', 'l;jipojefoi', 'ljfiopejf', 'opjkfiopefjkpoe', '2015-04-19 15:01:39', 'o[kpiokfep', ';loejkfpioefjk', 'aqssasa', 'Yes', 'Yes', 'Yes', 'dfasdf', 'sdfsdfsdfsdf', 'dfsdfsdfsd', 'Single', '36', 'dwdwd', 0),
(84, 'hfdss', 'yuiop[p', 'uiftewet', 'jkioutr', '2015-04-19 16:20:51', 'tyuuiiopk', 'fsvhhjj', 'ouiytr', 'Yes', 'Yes', 'No', 'oiutyt', 'tyuio', 'iuyttr', 'Single', '36', 'uiop[', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_ana`
--

CREATE TABLE IF NOT EXISTS `doc_ana` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `hight` varchar(100) NOT NULL,
  `wight_lbs` varchar(100) NOT NULL,
  `wight` varchar(100) NOT NULL,
  `obese` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `diabetes` varchar(100) NOT NULL,
  `insulin` varchar(100) NOT NULL,
  `smoking` varchar(100) NOT NULL,
  `pack` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `hyper` varchar(100) NOT NULL,
  `treat` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `coronary` varchar(100) NOT NULL,
  `reva` varchar(100) NOT NULL,
  `mi` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `dysa` varchar(100) NOT NULL,
  `ortho` varchar(100) NOT NULL,
  `vascular` varchar(100) NOT NULL,
  `carotid` varchar(100) NOT NULL,
  `stroke` varchar(100) NOT NULL,
  `tia` varchar(100) NOT NULL,
  `hyperlipidemia` varchar(100) NOT NULL,
  `valvular` varchar(100) NOT NULL,
  `atrial` varchar(100) NOT NULL,
  `heart` varchar(100) NOT NULL,
  `oval` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `spinal` varchar(100) NOT NULL,
  `other_spinal` varchar(100) NOT NULL,
  `cognitive` varchar(100) NOT NULL,
  `other_cognitive` varchar(100) NOT NULL,
  `motor` varchar(100) NOT NULL,
  `other_motor` varchar(100) NOT NULL,
  `injury` varchar(100) NOT NULL,
  `other_injury` varchar(100) NOT NULL,
  `park` varchar(100) NOT NULL,
  `neurologic` varchar(100) NOT NULL,
  `other_neurologic` varchar(100) NOT NULL,
  `spacify` text NOT NULL,
  `current` varchar(100) NOT NULL,
  `list` text NOT NULL,
  `surgeries` text NOT NULL,
  `hematocrit` text NOT NULL,
  `lab` text NOT NULL,
  `fit` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_ana`
--

INSERT INTO `doc_ana` (`id`, `user_id`, `mrn`, `hight`, `wight_lbs`, `wight`, `obese`, `status`, `diabetes`, `insulin`, `smoking`, `pack`, `last`, `hyper`, `treat`, `bp`, `coronary`, `reva`, `mi`, `date`, `dysa`, `ortho`, `vascular`, `carotid`, `stroke`, `tia`, `hyperlipidemia`, `valvular`, `atrial`, `heart`, `oval`, `other`, `spinal`, `other_spinal`, `cognitive`, `other_cognitive`, `motor`, `other_motor`, `injury`, `other_injury`, `park`, `neurologic`, `other_neurologic`, `spacify`, `current`, `list`, `surgeries`, `hematocrit`, `lab`, `fit`, `sign`, `time`) VALUES
(1, 3, 2, '1112', '1221', '21212', 'No', '1', 'No', 'Yes', 'No', ' ddkedkeo', 'keofkeokf', 'No', 'None', 'Uncontrolled (no treatment or no response to treatment)', 'None', 'No', 'No', 'kdkwdowkodk', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', ' dkwokdowkd', 'No', 'okdwokdwo', 'No', 'kodkodwko', 'No', 'kokdwkdw', 'No', 'No', 'kdowkokdw', 'odkwodkwokdwo', 'Beta blockers', ' odkwokdwodko', 'odkowkdowkd', 'odkodwkodkw', 'okdodkeodkoek', 'fit', 'okokodkow', '2015-05-25 16:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `doc_clinical`
--

CREATE TABLE IF NOT EXISTS `doc_clinical` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc_sbp` varchar(150) NOT NULL,
  `clinc_dbp` varchar(150) NOT NULL,
  `clinc_pos` varchar(150) NOT NULL,
  `day_sbp` varchar(150) NOT NULL,
  `day_dbp` varchar(150) NOT NULL,
  `day_pos` varchar(150) NOT NULL,
  `induction_sbp` varchar(150) NOT NULL,
  `induction_dbp` varchar(150) NOT NULL,
  `induction_pos` varchar(150) NOT NULL,
  `reading` varchar(150) NOT NULL,
  `record` varchar(150) NOT NULL,
  `low_record` varchar(150) NOT NULL,
  `lowest` varchar(150) NOT NULL,
  `low_time` varchar(150) NOT NULL,
  `list` varchar(150) NOT NULL,
  `volume` varchar(150) NOT NULL,
  `fluid` varchar(150) NOT NULL,
  `output` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `surgeon_sbp` varchar(150) NOT NULL,
  `surgeon_map` varchar(150) NOT NULL,
  `target` varchar(150) NOT NULL,
  `target_sbp` varchar(150) NOT NULL,
  `target_map` varchar(150) NOT NULL,
  `correct` varchar(150) NOT NULL,
  `correct_choose` varchar(150) NOT NULL,
  `deliberate` varchar(150) NOT NULL,
  `technique` varchar(150) NOT NULL,
  `other_drug` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `infusion` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `interm` varchar(150) NOT NULL,
  `sudden` varchar(150) NOT NULL,
  `etco` varchar(150) NOT NULL,
  `etco_min` varchar(150) NOT NULL,
  `map` varchar(150) NOT NULL,
  `map_min` varchar(150) NOT NULL,
  `spo` varchar(150) NOT NULL,
  `spo_min` varchar(150) NOT NULL,
  `changing` varchar(150) NOT NULL,
  `describing` text NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `etco_val` varchar(150) NOT NULL,
  `spo_val` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_clinical`
--

INSERT INTO `doc_clinical` (`id`, `user_id`, `mrn`, `clinc_sbp`, `clinc_dbp`, `clinc_pos`, `day_sbp`, `day_dbp`, `day_pos`, `induction_sbp`, `induction_dbp`, `induction_pos`, `reading`, `record`, `low_record`, `lowest`, `low_time`, `list`, `volume`, `fluid`, `output`, `surgeon`, `surgeon_sbp`, `surgeon_map`, `target`, `target_sbp`, `target_map`, `correct`, `correct_choose`, `deliberate`, `technique`, `other_drug`, `rate`, `infusion`, `dose`, `interm`, `sudden`, `etco`, `etco_min`, `map`, `map_min`, `spo`, `spo_min`, `changing`, `describing`, `sign`, `time`, `etco_val`, `spo_val`) VALUES
(1, 3, 2, 'eplpeflep', 'pflepfelep', 'Sitting', 'pelfpelfepfl', ' lfepflep', 'Sitting', 'plplfeplf', 'plpfelpefl', 'Sitting', 'Yes', 'Not Checked', 'Lowest record Hct/Hgb (intraoperative)', 'plplpfelefp', 'lefkefke', 'Colloid:Crystalloid:Blood Products', 'lflfekeflok:lfkfeokfeo:lkflokfekf', 'lefplfpeflpelf', 'lfepfleplfep', 'Yes', 'eflefpl', ' lflefel', 'Yes', 'elfefkefkeofkfoe', 'fpfepfep', 'Yes', 'Arterial line transducer moved to height of head', 'Yes', 'Deep inhalation anasthesia', 'lkfekfeokfe', 'Infusion rate', 'lkfkfeokef', 'Intermitteny doses', 'lklokfokeofk', 'No', 'mm Hg ? in ETCO2', 'fkoekfoefk', 'mm Hg ? in MAP', 'oekfoefkoefkoek', 'mm Hg ? in SPO2', 'lkeoefkoefk', 'No', 'loekfoekoefk', 'ofkeofkeofkefokef', '2015-06-03 13:53:15', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doc_discharge`
--

CREATE TABLE IF NOT EXISTS `doc_discharge` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `mane` varchar(150) NOT NULL,
  `primar` varchar(150) NOT NULL,
  `history` text NOT NULL,
  `physical` text NOT NULL,
  `lab` varchar(150) NOT NULL,
  `dia_1` varchar(150) NOT NULL,
  `icd_1` varchar(150) NOT NULL,
  `dia_2` varchar(150) NOT NULL,
  `icd_2` varchar(150) NOT NULL,
  `dia_3` varchar(150) NOT NULL,
  `icd_3` varchar(150) NOT NULL,
  `complication` text NOT NULL,
  `treatment` text NOT NULL,
  `recom` varchar(150) NOT NULL,
  `follow` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `transfer` varchar(150) NOT NULL,
  `cause` text NOT NULL,
  `conditio` varchar(150) NOT NULL,
  `provider` varchar(150) NOT NULL,
  `transport` varchar(150) NOT NULL,
  `consultant` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `given` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_discharge`
--

INSERT INTO `doc_discharge` (`id`, `mrn`, `mane`, `primar`, `history`, `physical`, `lab`, `dia_1`, `icd_1`, `dia_2`, `icd_2`, `dia_3`, `icd_3`, `complication`, `treatment`, `recom`, `follow`, `type`, `transfer`, `cause`, `conditio`, `provider`, `transport`, `consultant`, `sign`, `time`, `given`, `user_id`) VALUES
(1, 36, 'sdfsdfsd', 'sdfsdfsdfsd', ' dfsdfsdfsdf', ' sdfsdfsdf', 'ssdfsdfsdfsd', 'sdfsdfsdfsd', 'sdfsdfsd', 'fsdfsdfsd', 'sdfsdfsd', 'dfsdfsdf', 'sdfsdfsdf', ' dfsdfsdfsdf', ' sdfsdfsdfsd', 'dsfsdfsd', 'sdfsdfsd', '0', 'dfssdfsdfsd', ' sdfsdfsdf', 'sdfsdfsd', 'sdfsdfsd', 'sdfsdfsd', 'sdfsdfsd', 'sdfsdfsd', '2015-04-28 16:00:02', ' fsdfsdfsd', 0),
(2, 36, '', '', ' ', ' ', '', '', '', '', '', '', '', ' ', ' ', '', '', 'Cure', '', ' ', '', '', '', '', 'ssss', '2015-04-28 16:00:36', ' ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_drug`
--

CREATE TABLE IF NOT EXISTS `doc_drug` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `bsa` int(11) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `alle` varchar(300) NOT NULL,
  `drug` varchar(200) NOT NULL,
  `dose` varchar(200) NOT NULL,
  `freq` varchar(200) NOT NULL,
  `dur` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `date` varchar(300) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_drug`
--

INSERT INTO `doc_drug` (`id`, `mrn`, `wt`, `bsa`, `dia`, `alle`, `drug`, `dose`, `freq`, `dur`, `route`, `date`, `sign`, `inst`, `user_id`) VALUES
(1, 1212121, 12, 0, 'ep2lep2lepl2', 'ep2lep2l', 'ple2ple2p', 'e2lep2lepl2', 'epl2ple', 'ep2lpel2', 'pl2ep2le', 'Year: 2015 Month: 03 Day: 18 - 10:56 am', 'ep2lep2lep', '', 0),
(2, 1111, 12, 44, 'felfeflpelf', 'ffsfs', 'sdsds', 'dwdw', 'dwdwd', 'dwdw', 'dwdw', 'Year: 2015 Month: 03 Day: 21 - 10:01 am', 'wwwwwwwwwwwwww', 'dwdw', 0),
(3, 1111, 12, 44, 'cepelep', 'ffsfs', 'sdsds', 'dwdw', 'dwdwd', 'dwdw', 'dwdw', 'Year: 2015 Month: 03 Day: 21 - 11:23 am', 'sqsqsqqs', 'dwdw', 0),
(4, 123, 12, 12, 'kwdjwijddwj', 'djwijd', 'dwojdwij', 'dwjdij', 'dwokdwo', 'dwkdo', 'dwkdo', 'Year: 2015 Month: 03 Day: 23 - 03:45 pm', 'sssssssssssssss', 'dwjdiwjdd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_fluid`
--

CREATE TABLE IF NOT EXISTS `doc_fluid` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `drug` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_fluid`
--

INSERT INTO `doc_fluid` (`id`, `user_id`, `mrn`, `type`, `rate`, `drug`, `dose`, `sign`, `time`) VALUES
(1, 3, 1, 'dpdpwwpd', 'lddd', 'eflke', 'melfelfel', 'lmlemfelfm', '2015-05-05 15:25:14'),
(2, 3, 1, '0', '0', '0', '0', 'fekfoekfe', '2015-05-06 15:13:47'),
(3, 3, 2, '0', '0', '0', '0', 'plepelpef', '2015-05-25 16:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `doc_fluid_chart`
--

CREATE TABLE IF NOT EXISTS `doc_fluid_chart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `fluid_chart` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_fluid_chart`
--

INSERT INTO `doc_fluid_chart` (`id`, `user_id`, `mrn`, `fluid_chart`, `time`, `sign`) VALUES
(1, 3, 1, 1, '2015-05-06 15:27:12', 'wdplwpdlw'),
(2, 3, 1, 1, '2015-05-06 15:29:01', 'dwwdw'),
(3, 3, 1, 1, '2015-05-06 15:29:01', 'dwwdw'),
(4, 3, 1, 1, '2015-05-06 15:30:58', 'wdwdw');

-- --------------------------------------------------------

--
-- Table structure for table `doc_insulin`
--

CREATE TABLE IF NOT EXISTS `doc_insulin` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `start_1` int(11) NOT NULL,
  `insulin_1` varchar(150) NOT NULL,
  `end_1` int(11) NOT NULL,
  `start_2` int(11) NOT NULL,
  `insulin_2` varchar(150) NOT NULL,
  `end_2` int(11) NOT NULL,
  `start_3` int(11) NOT NULL,
  `insulin_3` varchar(150) NOT NULL,
  `end_3` int(11) NOT NULL,
  `start_4` int(11) NOT NULL,
  `insulin_4` varchar(150) NOT NULL,
  `end_4` int(11) NOT NULL,
  `start_5` int(11) NOT NULL,
  `insulin_5` varchar(150) NOT NULL,
  `end_5` int(11) NOT NULL,
  `more` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL,
  `give` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_insulin`
--

INSERT INTO `doc_insulin` (`id`, `mrn`, `start_1`, `insulin_1`, `end_1`, `start_2`, `insulin_2`, `end_2`, `start_3`, `insulin_3`, `end_3`, `start_4`, `insulin_4`, `end_4`, `start_5`, `insulin_5`, `end_5`, `more`, `time`, `sign`, `give`, `user_id`) VALUES
(1, 36, 12, '', 545, 1215, 'iojuiui', 4747, 0, 'ssss', 548, 6595, 'sssssss', 65655, 9589, 'ssss', 54584, 'ssss', '2015-04-28 11:06:52', 'sssss', ';plplp', 0),
(2, 36, 12, '', 545, 1215, 'iojuiui', 4747, 0, 'ssss', 548, 6595, 'sssssss', 65655, 9589, 'ssss', 54584, 'ssss', '2015-04-28 11:14:28', 'dfgdgdfg', ';plplp', 0),
(3, 123, 12, 'okoko', 545, 0, 'iojuiui', 4747, 0, 'ssss', 548, 6595, 'sssssss', 65655, 9589, 'ssss', 54584, 'ssss', '2015-04-28 11:14:59', 'dfgdgdfg', ';plplp', 0),
(4, 123, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '2015-04-28 11:16:23', 'dfgdgdfg', '', 0),
(5, 36, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, '', '2015-04-28 11:20:03', 'dfgdgdfg', '', 0),
(6, 33, 12, 'okoko', 545, 0, 'iojuiui', 4747, 256, 'ssss', 548, 6595, 'sssssss', 65655, 9589, '', 54584, 'ssss', '2015-04-28 11:21:03', 'dfgdgdfg', ';plplp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_lab`
--

CREATE TABLE IF NOT EXISTS `doc_lab` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc` varchar(150) NOT NULL,
  `lab` text NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_lab`
--

INSERT INTO `doc_lab` (`id`, `user_id`, `mrn`, `clinc`, `lab`, `sign`, `time`) VALUES
(1, 3, 1, 'dwdwdwd', 'PSA(Total):HBsAG:HCVAb:HIVAb:Other', 'sqsqsq', '2015-05-13 15:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `doc_need`
--

CREATE TABLE IF NOT EXISTS `doc_need` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `need` varchar(150) NOT NULL,
  `drug` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `freq` varchar(150) NOT NULL,
  `inst` varchar(150) NOT NULL,
  `rfa` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_need`
--

INSERT INTO `doc_need` (`id`, `user_id`, `mrn`, `need`, `drug`, `dose`, `freq`, `inst`, `rfa`, `time`, `sign`) VALUES
(1, 3, 1, 'As Needed Drug', 'dwdwlokdwo', 'wkdwkdw', 'dwlkwdkow', 'dwlkdowkdw', 'dwdwkdowk', '2015-05-04 12:05:02', 'dwkdowkd'),
(2, 3, 1, 'As Needed Drug', 'dwdwlokdwo', 'wkdwkdw', 'dwlkwdkow', 'dwlkdowkdw', 'dwdwkdowk', '2015-05-04 12:06:06', 'dwkdowkd'),
(3, 3, 1, '0', 'okeoekdoe', 'kodkeok', '0', '0', '0', '2015-05-05 15:22:58', 'fkeofkeofkeo');

-- --------------------------------------------------------

--
-- Table structure for table `doc_nu`
--

CREATE TABLE IF NOT EXISTS `doc_nu` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_nu`
--

INSERT INTO `doc_nu` (`id`, `mrn`, `patient_id`, `age`, `name`, `gender`, `dia`, `time`, `type`, `sign`, `user_id`) VALUES
(1, 12, 212121, 12, 'feflepfle', 'female', 'felfeflpelf', 'Year: 2015 Month: 03 Day: 18 - 01:54 pm', 'pelfpel', 'feplfeplfelf', 0),
(2, 12, 2121212, 1212, 'efkefokef', 'male', 'frkforkofr', 'Year: 2015 Month: 03 Day: 20 - 02:38 pm', '0', 'dokwodkwod', 0),
(3, 12, 2121212, 1212, 'feflepfle', 'male', 'frkforkofr', 'Year: 2015 Month: 03 Day: 20 - 02:46 pm', 'pelfpel', 'sqsqsqqs', 0),
(4, 12, 1222, 1212, ';ldwldwpl lwdkwd', 'male', 'cepelep', 'Year: 2015 Month: 03 Day: 20 - 02:48 pm', 'pelfpel', 'feplfeplfelf', 0),
(5, 1111, 212121, 1212, 'efkefokef', 'male', 'cepelep', 'Year: 2015 Month: 03 Day: 21 - 10:07 am', '0', 'wwwwwwwwwwwwww', 0),
(6, 1111, 1222, 1212, 'moh', 'male', 'felfeflpelf', 'Year: 2015 Month: 03 Day: 21 - 10:11 am', 'pelfpel', 'ssssssssssssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_operative`
--

CREATE TABLE IF NOT EXISTS `doc_operative` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `opertaion` varchar(150) NOT NULL,
  `pre` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `anasth` varchar(150) NOT NULL,
  `other` varchar(150) NOT NULL,
  `anesthesiologist` varchar(150) NOT NULL,
  `blood_loss` varchar(150) NOT NULL,
  `blood_trans` varchar(150) NOT NULL,
  `drains` varchar(150) NOT NULL,
  `specimens` varchar(150) NOT NULL,
  `indications` varchar(150) NOT NULL,
  `discription` text NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `sterile_nurse` varchar(150) NOT NULL,
  `circulating_nurse` varchar(150) NOT NULL,
  `account` varchar(150) NOT NULL,
  `instrument` varchar(150) NOT NULL,
  `Sponge` varchar(150) NOT NULL,
  `needle` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_operative`
--

INSERT INTO `doc_operative` (`id`, `user_id`, `mrn`, `opertaion`, `pre`, `surgeon`, `anasth`, `other`, `anesthesiologist`, `blood_loss`, `blood_trans`, `drains`, `specimens`, `indications`, `discription`, `start_time`, `end_time`, `sterile_nurse`, `circulating_nurse`, `account`, `instrument`, `Sponge`, `needle`, `sign`, `time`) VALUES
(1, 3, 2, '2015-06-16', 'wdkwodkwo', 'dwodwkodwk', 'General', 'eoekoefk', 'dwdwodkwo', 'okokfofke', 'okfoekfoek', 'ofkeofkeoefk', 'ofkeofkeo', 'ofkofkoek', 'oekoefkoefk', '09:10:00', '11:00:00', 'wdlkwokdodkwokw', 'lkdwodkwowk', 'Instrument:Sponge:needle', 'True', 'True', '0', ' dwdwokdwo', '2015-06-06 13:20:27'),
(2, 3, 2, '', '', '', 'Local', '', '', '', '', '', '', '', '', '00:00:00', '00:00:00', '', '', 'Instrument:needle', '0', 'True', '0', 'dwlkwdowkd', '2015-06-06 13:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `doc_ord`
--

CREATE TABLE IF NOT EXISTS `doc_ord` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `order` varchar(300) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_ord`
--

INSERT INTO `doc_ord` (`id`, `mrn`, `patient_id`, `name`, `age`, `gender`, `dia`, `time`, `order`, `sign`, `user_id`) VALUES
(1, 1111, 1222, ';ldwldwpl lwdkwd', 1212, 'male', 'cepelep', 'Year: 2015 Month: 03 Day: 18 - 12:03 pm', 'dldpeld', 'depldepdl', 0),
(2, 1111, 1222, ';ldwldwpl lwdkwd', 12, 'male', 'felfeflpelf', 'Year: 2015 Month: 03 Day: 21 - 10:03 am', 'dldpeld', 'depldepdl', 0),
(3, 12, 1222, 'moh', 1212, 'male', 'cepelep', 'Year: 2015 Month: 03 Day: 21 - 10:37 am', 'dldpeld', 'sqsqsqqs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_physical`
--

CREATE TABLE IF NOT EXISTS `doc_physical` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `children` varchar(200) NOT NULL,
  `no_children` int(200) NOT NULL,
  `habits` varchar(200) NOT NULL,
  `other` varchar(200) NOT NULL,
  `allergy` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `reaction` varchar(200) NOT NULL,
  `reaction_comment` varchar(200) NOT NULL,
  `present` varchar(200) NOT NULL,
  `surgery` varchar(200) NOT NULL,
  `family` varchar(200) NOT NULL,
  `psychosocial` varchar(200) NOT NULL,
  `number_1` varchar(200) NOT NULL,
  `dose_1` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `wt` varchar(200) NOT NULL,
  `ht` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `pluse` varchar(200) NOT NULL,
  `rr` varchar(200) NOT NULL,
  `genera` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `head_comment` varchar(200) NOT NULL,
  `chest` varchar(200) NOT NULL,
  `chest_comment` varchar(200) NOT NULL,
  `heart` varchar(200) NOT NULL,
  `heart_comment` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `abdomen_comment` varchar(200) NOT NULL,
  `neurological` varchar(200) NOT NULL,
  `neurological_comment` varchar(200) NOT NULL,
  `findings` varchar(200) NOT NULL,
  `findings_comment` varchar(200) NOT NULL,
  `muscu` varchar(200) NOT NULL,
  `psy` varchar(200) NOT NULL,
  `psy_comment` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `status_comment` varchar(200) NOT NULL,
  `diagnosis` varchar(200) NOT NULL,
  `icd` varchar(200) NOT NULL,
  `plane` varchar(200) NOT NULL,
  `risk` varchar(200) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `muscu_comment` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_physical`
--

INSERT INTO `doc_physical` (`id`, `mrn`, `patient_id`, `age`, `gender`, `occupation`, `marital`, `children`, `no_children`, `habits`, `other`, `allergy`, `comment`, `reaction`, `reaction_comment`, `present`, `surgery`, `family`, `psychosocial`, `number_1`, `dose_1`, `duration`, `wt`, `ht`, `temp`, `bp`, `pluse`, `rr`, `genera`, `head`, `head_comment`, `chest`, `chest_comment`, `heart`, `heart_comment`, `abdomen`, `abdomen_comment`, `neurological`, `neurological_comment`, `findings`, `findings_comment`, `muscu`, `psy`, `psy_comment`, `status`, `status_comment`, `diagnosis`, `icd`, `plane`, `risk`, `sign`, `time`, `muscu_comment`, `name`, `user_id`) VALUES
(1, 36, 1234568548, 25454, 'male', '', 'Divorced', 'Yes', 36, 'Smoking:Alcohol', 'lkok', 'Yes', '''lp[lplp', 'Yes', ';lplopl', 'hgftufyu', 'ljhgiygiyg', 'khguygu', 'jlhkh', 'jkgyigi', 'jkghkh', 'dgfsdf', '12', '21', '21', '2121', '21212', '212121', 'gfhgfh', 'Normal', 'ghgfhfg', 'Normal', 'hfghgfh', 'Abnormal', 'hfhfgh', 'Abnormal', 'hfghgf', 'Normal', 'hfghgfh', 'Abnormal', 'hgfhfgh', 'Abnormal', 'Abnormal', 'gfhhfhgh', 'Abnormal', 'hfhfgh', 'gfhghghg', 'gfhfhfgh', ' fghfhfghfghfgh', 'gfhfghfg', 'gfhfghfgh', '2015-04-26 15:46:56', '', 'mohamed kidjiwjd', 0),
(2, 36, 0, 12, 'male', 'dfgdfgdgfd', '0', '0', 0, 'Smoking', '', '0', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '0', '', '0', '', '', '', ' ', '', 'dfgdgdfg', '2015-04-26 15:49:10', '', 'gdfgdfgdg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_prog`
--

CREATE TABLE IF NOT EXISTS `doc_prog` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `obse` varchar(200) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `eva` varchar(200) NOT NULL,
  `time` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_prog`
--

INSERT INTO `doc_prog` (`id`, `mrn`, `patient_id`, `age`, `name`, `gender`, `dia`, `obse`, `complain`, `eva`, `time`, `user_id`) VALUES
(1, 12, 2121212, 1212, 'feflepfle', 'male', 'frkforkofr', 'ssssssssssssssss', 'ssssssss', 'sssssssssssssssssssss', 'Year: 2015 Month: 03 Day: 20 - 03:41 pm', 0),
(2, 1111, 2121212, 12, 'moh', 'male', 'felfeflpelf', 'ssssssssssssssss', 'ssssssss', 'sssssssssssssssssssss', 'Year: 2015 Month: 03 Day: 21 - 10:10 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_rad`
--

CREATE TABLE IF NOT EXISTS `doc_rad` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc` varchar(250) NOT NULL,
  `other_skull` varchar(250) NOT NULL,
  `preg` varchar(250) NOT NULL,
  `skull` varchar(250) NOT NULL,
  `orbit` varchar(250) NOT NULL,
  `mastoid` varchar(250) NOT NULL,
  `pns` varchar(250) NOT NULL,
  `tmj` varchar(250) NOT NULL,
  `mandible` varchar(250) NOT NULL,
  `carvical` varchar(250) NOT NULL,
  `dorsal` varchar(250) NOT NULL,
  `lumbar` varchar(250) NOT NULL,
  `lumbo` varchar(250) NOT NULL,
  `coccyx` varchar(250) NOT NULL,
  `joint` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  `ribs` varchar(250) NOT NULL,
  `clavical` varchar(250) NOT NULL,
  `pelvis` varchar(250) NOT NULL,
  `hip` varchar(250) NOT NULL,
  `acet` varchar(250) NOT NULL,
  `femur` varchar(250) NOT NULL,
  `patella` varchar(250) NOT NULL,
  `tibia` varchar(250) NOT NULL,
  `ankle` varchar(250) NOT NULL,
  `feet` varchar(250) NOT NULL,
  `calc` varchar(250) NOT NULL,
  `shoulder` varchar(250) NOT NULL,
  `humerus` varchar(250) NOT NULL,
  `elbow` varchar(250) NOT NULL,
  `forearm` varchar(250) NOT NULL,
  `wrist` varchar(250) NOT NULL,
  `hand` varchar(250) NOT NULL,
  `view` varchar(250) NOT NULL,
  `lary` varchar(250) NOT NULL,
  `asopharynx` varchar(250) NOT NULL,
  `chest` varchar(250) NOT NULL,
  `gland` varchar(250) NOT NULL,
  `abdo` varchar(250) NOT NULL,
  `put` varchar(250) NOT NULL,
  `micturating` varchar(250) NOT NULL,
  `ivu` varchar(250) NOT NULL,
  `infusion` varchar(250) NOT NULL,
  `antegrade` varchar(250) NOT NULL,
  `retrograde` varchar(250) NOT NULL,
  `cyto` varchar(250) NOT NULL,
  `cts` varchar(250) NOT NULL,
  `cts_other` varchar(250) NOT NULL,
  `us` varchar(250) NOT NULL,
  `us_other` varchar(250) NOT NULL,
  `breast` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `color_other` varchar(250) NOT NULL,
  `upper` varchar(250) NOT NULL,
  `lower` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_rad`
--

INSERT INTO `doc_rad` (`id`, `user_id`, `mrn`, `clinc`, `other_skull`, `preg`, `skull`, `orbit`, `mastoid`, `pns`, `tmj`, `mandible`, `carvical`, `dorsal`, `lumbar`, `lumbo`, `coccyx`, `joint`, `extra`, `ribs`, `clavical`, `pelvis`, `hip`, `acet`, `femur`, `patella`, `tibia`, `ankle`, `feet`, `calc`, `shoulder`, `humerus`, `elbow`, `forearm`, `wrist`, `hand`, `view`, `lary`, `asopharynx`, `chest`, `gland`, `abdo`, `put`, `micturating`, `ivu`, `infusion`, `antegrade`, `retrograde`, `cyto`, `cts`, `cts_other`, `us`, `us_other`, `breast`, `color`, `color_other`, `upper`, `lower`, `sign`, `time`) VALUES
(1, 3, 1, 'sasa', 'dwdwdw', 'Yes', 'AP:PA:Lat:Others', 'Orbit', 'Mastoid', 'OM:Lat', 'AP:Oblique:ODI with Open Mouth', 'AP:Oblique:Lat', 'AP:Oblique:Lat', 'AP:Oblique:Lat', 'AP:Lat', 'AP:Oblique:Lat', 'AP:Lat', 'Obl:PA:Extra Views', 'dwdwdw', 'AP:Oblique', 'Clavical PA', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'Rt:Lt:Both:AP:Lat', 'AP:Lat', 'N asopharynx', 'PA:AP:Lat:Oblique:Lat With BA', 'Plain:Sialography', 'Ap Supine:Standing', 'PUT', 'Micturating', 'I.V.U', 'Infusion IVU', 'RT:LT:Both', 'RT:LT:Both:Cystogram:Ascending Urethrogram', 'Barium Swallow for Oesopahgus:Barium meal:Barium follow through:Barium enema:Barium enema double Contrast:T.tube Cholangiography Mammography:Cranio-Caudal View:Medio-lateral View', 'C.T.brain:C.T.para nasal sinuses:C.T.orbit:C.T.facial bones:C.T.Temporal bones:C.T.Neck:C.T.Chest:C.T.Abdomen:C.T.Pelvis:C.T.pelivi-abdominal:C.T.liver Triphasic:C.T.liver Volumetry:C.T.liver Volumetry:C.T.Cervical Spine:C.T.Dorsal Spine:C.T.Lumbo-Sc', 'dwdwdw', 'U.S.pregnancy:U.S.Neck:U.S.Thyroid:U.S.Abdomen:U.S.pelvis:U.S.Abdomen&pelvis:U.S.scrotal:U.S.transrectal:U.S.Transvaginal:U.S.T.V.folliculometry:U.S.Transcranial:U.S.Musculoskletal:U.S.Guided Biopsy:Others', 'dwdwdwdw', 'RT:LT:Both', 'Venous Mapping:Carotid arterials:Real Dupplex:Fetal Doppler:Scrotal:Others', 'cqwcq', 'Unilateral:Upperal:Bilateral', 'Unilateral:Bilateral', 'dwdwdwdwdw', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doc_records`
--

CREATE TABLE IF NOT EXISTS `doc_records` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `sur_pro` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type_sur` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ind_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_block` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_ans` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quality_block` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans_start_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans_end_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sur_start_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sur_end_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `irr_arth` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `int_mon` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blo_loc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_loc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_loc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `air_ans` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `int_ven` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre_drug` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inh_age` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inh_age_avail` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age_if_avail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_inf` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_inf_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_ans` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_ans_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_inf` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_inf_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_ind_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_ind_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_inf` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_inf_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_records`
--

INSERT INTO `doc_records` (`id`, `user_id`, `mrn`, `sur_pro`, `date`, `type_sur`, `ind_time`, `time_block`, `reg_ans`, `quality_block`, `ans_start_time`, `ans_end_time`, `sur_start_time`, `sur_end_time`, `irr_arth`, `int_mon`, `blo_loc`, `con_loc`, `cat_loc`, `air_ans`, `int_ven`, `pre_drug`, `pre_dose`, `inh_age`, `inh_age_avail`, `age_if_avail`, `opi_bolus`, `opi_bolus_dose`, `opi_inf`, `opi_inf_dose`, `other_ans`, `other_ans_dose`, `vas_bolus`, `vas_bolus_dose`, `vas_inf`, `vas_inf_dose`, `other_vas_age_ind_bolus`, `other_vas_age_ind_bolus_dose`, `other_vas_age_main_bolus`, `other_vas_age_main_bolus_dose`, `other_vas_age_main_inf`, `other_vas_age_main_inf_dose`, `created_at`) VALUES
(1, 3, 1, 'ghgfhgh', '2015-06-07', 'General anesthesia', '552', '', '0', '0', 'trter', 'rtwert', 'wertwer', 'ttwertwe', 'CO2', 'Noninvasive continuous blood pressure', '0', 'forearm', '0', 'laryngeal mask airway device', 'Patient was breathing spontaneously', 'Midazolam,Clonidine,Propofol', 'wretwr,wertwert,,,twertw,', 'Desflurane,Enflurane,Halothane,Nitrous oxide,Other', ',wertwe,,retwet,wertwert,,,,ertwt,wrtwer,,,wertwert,wetwertwe', '2,2,1,1,2,1,2', 'Fentaanyl,Morphine sulfate,Hdromorphone', 'grfhfxh,,dfhjdfjd,,dfgjdgj,', 'Sufentanil,Other', ',hfdfjdgj,,,,dghdgjdg', 'Propofol,Etomidate,Unknown', 'dfgsdgsgs,,dfjdfjjjjjjjj,,,jjjjjjjfgjdg', 'Ephedrine,Norepinephrine', ',dgsdgdf,,,sfhdfh,', 'Dopamine,Vasopressin', 'sjsfhndj,,,hdjdgj,,', 'Beta blockers,Nitroprusside,Diuretics', 'shfgjdg,,dfghfgj,,dfhdfjd,,', 'Nitroprusside,Diuretics', ',hdfgjd,jdfgjfg,,dfjdgj,,', 'Calcium channel blockers,Diuretics', ',dfhdgj,,,dfjd,,', '2015-06-07 13:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `doc_recovery`
--

CREATE TABLE IF NOT EXISTS `doc_recovery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `arr_rec` datetime NOT NULL,
  `temp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pulse` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bl_p` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `resp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ox_p` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lev_con` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tubes` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `wound` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dose` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rate` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `urine` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `scale` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `medication` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `monitor` text COLLATE utf8_unicode_ci NOT NULL,
  `leave_rec` datetime NOT NULL,
  `rec_nurse` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `doctor` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `word_nurse` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_recovery`
--

INSERT INTO `doc_recovery` (`id`, `user_id`, `mrn`, `arr_rec`, `temp`, `pulse`, `bl_p`, `resp`, `ox_p`, `lev_con`, `tubes`, `wound`, `type`, `dose`, `rate`, `urine`, `body`, `scale`, `medication`, `monitor`, `leave_rec`, `rec_nurse`, `doctor`, `word_nurse`, `created_at`) VALUES
(1, 3, 1, '2015-06-08 02:01:00', '38', '5732873', '453453', '45343', '43546', 'consciousness', 'ghjhf', 'gjh', 'hjfhk', 'hkfgkfg', 'hkgkhfgk', 'jkfgkfgv  hfhdf', 'jskghlkj hkfdjag hkghkjs hskdjgh ghsj', 'djdjdh', '', 'dfjdhjfg', '2015-06-17 00:00:00', 'hhjfg', 'jh', 'h dfjed', '2015-06-08 11:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `doc_rel`
--

CREATE TABLE IF NOT EXISTS `doc_rel` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `sub` varchar(250) NOT NULL,
  `edu` varchar(250) NOT NULL,
  `res` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `time` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_rel`
--

INSERT INTO `doc_rel` (`id`, `mrn`, `patient_id`, `name`, `age`, `gender`, `dia`, `sub`, `edu`, `res`, `sign`, `time`, `user_id`) VALUES
(1, 1111, 2121212, ';ldwldwpl lwdkwd', 12, 'male', 'felfeflpelf', 'ssssssss', 'sssssssssssss', 'sssssssssss', 'ssssssssssssss', 'Year: 2015 Month: 03 Day: 21 - 10:19 am', 0),
(2, 1111, 1222, 'moh', 1212, 'male', 'cepelep', 'ssssssss', 'sssssssssssss', 'sssssssssss', 'wwwwwwwwwwwwww', 'Year: 2015 Month: 03 Day: 21 - 11:10 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_req`
--

CREATE TABLE IF NOT EXISTS `doc_req` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `spe` varchar(150) NOT NULL,
  `from_sp` varchar(150) NOT NULL,
  `reason` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_req`
--

INSERT INTO `doc_req` (`id`, `mrn`, `patient_id`, `age`, `name`, `gender`, `dia`, `spe`, `from_sp`, `reason`, `sign`, `time`, `user_id`) VALUES
(1, 1111, 212121, 1212, 'feflepfle', 'male', 'cepelep', 'forkforkfok', 'swswosows', 'sqqqqqqqqqqqqqqqq', 'dokwodkwod', '0', 0),
(2, 1111, 2121212, 1212, ';ldwldwpl lwdkwd', 'female', 'frkforkofr', 'forkforkfok', 'swswosows', 'wwwwwwwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwww', '0', 0),
(3, 1111, 2121212, 1212, 'efkefokef', 'male', 'frkforkofr', 'forkforkfok', 'swswosows', 'ssssssssssssssssssssss', 'sqsqsqqs', '0', 0),
(4, 1111, 1222, 12, 'feflepfle', 'male', 'frkforkofr', 'forkforkfok', 'swswosows', 'dddddddddddd', 'wwwwwwwwwwwwww', '0', 0),
(5, 12, 1222, 1212, 'feflepfle', 'male', 'frkforkofr', 'forkforkfok', 'swswosows', 'sqsqsqs', 'sqsqsqqs', 'Year: 2015 Month: 03 Day: 20 - 02:50 pm', 0),
(6, 12, 2121212, 12, 'moh', 'male', 'felfeflpelf', 'sssssssssssss', 'sssssss', 'ssssssss', 'ssssssssssssss', 'Year: 2015 Month: 03 Day: 21 - 10:07 am', 0),
(7, 1111, 2121212, 12, ';ldwldwpl lwdkwd', 'male', 'felfeflpelf', '0', '0', '0', 'ssssssssssssss', 'Year: 2015 Month: 03 Day: 21 - 10:19 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_risk`
--

CREATE TABLE IF NOT EXISTS `doc_risk` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `high` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `low` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age_point` int(11) DEFAULT NULL,
  `history` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `history_point` int(11) DEFAULT NULL,
  `bowel` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bowel_point` int(11) DEFAULT NULL,
  `medication` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medication_point` int(11) DEFAULT NULL,
  `care` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `care_point` int(11) DEFAULT NULL,
  `mobility` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobility_point` int(11) DEFAULT NULL,
  `cogntion` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cogntion_point` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `dr_sign` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_risk`
--

INSERT INTO `doc_risk` (`id`, `user_id`, `mrn`, `high`, `low`, `age`, `age_point`, `history`, `history_point`, `bowel`, `bowel_point`, `medication`, `medication_point`, `care`, `care_point`, `mobility`, `mobility_point`, `cogntion`, `cogntion_point`, `total`, `dr_sign`, `created_at`) VALUES
(1, 3, 1, 'Patient has experienced a fall during this hospitalization', NULL, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, NULL, NULL, NULL, NULL, 0, '0', '2015-05-17 10:42:19'),
(2, 3, 1, '0', '0', '60-69 Years', 2, 'One fall within 6 months before admission', 5, 'Urgency or frequency', 2, 'On 2 or more high fall risk drugs', 5, 'Two present', 2, 'Visual or auditory impairment affecting mobility', NULL, 'Lack of understanding of one''s physical and cognitive limitation', NULL, 21, '0', '2015-05-17 10:55:20'),
(3, 3, 1, 'Patient has experienced a fall during this hospitalization', 'Complete paralysis or Completely immobilized', '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, NULL, 0, NULL, 0, 0, 'gkjf', '2015-05-17 11:02:25'),
(4, 3, 1, '0', '0', '70-79 Years', 2, 'One fall within 6 months before admission', 5, 'Incontinence', 2, 'On 2 or more high fall risk drugs', 5, '0', 0, 'Unsteady gait:Visual or auditory impairment affecting mobility', 4, 'Impulsive:Lack of understanding of one''s physical and cognitive limitation', 6, 24, 'mohamed', '2015-05-17 11:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `doc_voise`
--

CREATE TABLE IF NOT EXISTS `doc_voise` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `voise_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_voise`
--

INSERT INTO `doc_voise` (`id`, `user_id`, `mrn`, `sign`, `time`, `voise_id`) VALUES
(1, 3, 1, 'dsds', '2015-05-02 00:39:40', 1),
(2, 3, 1, 'ddd', '2015-05-02 00:41:28', 1),
(3, 3, 1, 'ffeee', '2015-05-02 00:42:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emr`
--

CREATE TABLE IF NOT EXISTS `emr` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `quality` varchar(200) NOT NULL,
  `severty` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `factor` varchar(200) NOT NULL,
  `assoc` varchar(200) NOT NULL,
  `history` text NOT NULL,
  `tobaco` varchar(200) NOT NULL,
  `alcohol` varchar(200) NOT NULL,
  `drugs` varchar(200) NOT NULL,
  `hiv` varchar(200) NOT NULL,
  `occ` varchar(200) NOT NULL,
  `edu` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `mrn` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_ana`
--

CREATE TABLE IF NOT EXISTS `emr_ana` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `hight` varchar(100) NOT NULL,
  `wight_lbs` varchar(100) NOT NULL,
  `wight` varchar(100) NOT NULL,
  `obese` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `diabetes` varchar(100) NOT NULL,
  `insulin` varchar(100) NOT NULL,
  `smoking` varchar(100) NOT NULL,
  `pack` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `hyper` varchar(100) NOT NULL,
  `treat` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `coronary` varchar(100) NOT NULL,
  `reva` varchar(100) NOT NULL,
  `mi` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `dysa` varchar(100) NOT NULL,
  `ortho` varchar(100) NOT NULL,
  `vascular` varchar(100) NOT NULL,
  `carotid` varchar(100) NOT NULL,
  `stroke` varchar(100) NOT NULL,
  `tia` varchar(100) NOT NULL,
  `hyperlipidemia` varchar(100) NOT NULL,
  `valvular` varchar(100) NOT NULL,
  `atrial` varchar(100) NOT NULL,
  `heart` varchar(100) NOT NULL,
  `oval` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `spinal` varchar(100) NOT NULL,
  `other_spinal` varchar(100) NOT NULL,
  `cognitive` varchar(100) NOT NULL,
  `other_cognitive` varchar(100) NOT NULL,
  `motor` varchar(100) NOT NULL,
  `other_motor` varchar(100) NOT NULL,
  `injury` varchar(100) NOT NULL,
  `other_injury` varchar(100) NOT NULL,
  `park` varchar(100) NOT NULL,
  `neurologic` varchar(100) NOT NULL,
  `other_neurologic` varchar(100) NOT NULL,
  `spacify` text NOT NULL,
  `current` varchar(100) NOT NULL,
  `list` text NOT NULL,
  `surgeries` text NOT NULL,
  `hematocrit` text NOT NULL,
  `lab` text NOT NULL,
  `fit` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_clinical`
--

CREATE TABLE IF NOT EXISTS `emr_clinical` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc_sbp` varchar(150) NOT NULL,
  `clinc_dbp` varchar(150) NOT NULL,
  `clinc_pos` varchar(150) NOT NULL,
  `day_sbp` varchar(150) NOT NULL,
  `day_dbp` varchar(150) NOT NULL,
  `day_pos` varchar(150) NOT NULL,
  `induction_sbp` varchar(150) NOT NULL,
  `induction_dbp` varchar(150) NOT NULL,
  `induction_pos` varchar(150) NOT NULL,
  `reading` varchar(150) NOT NULL,
  `record` varchar(150) NOT NULL,
  `low_record` varchar(150) NOT NULL,
  `lowest` varchar(150) NOT NULL,
  `low_time` varchar(150) NOT NULL,
  `list` varchar(150) NOT NULL,
  `volume` varchar(150) NOT NULL,
  `fluid` varchar(150) NOT NULL,
  `output` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `surgeon_sbp` varchar(150) NOT NULL,
  `surgeon_map` varchar(150) NOT NULL,
  `target` varchar(150) NOT NULL,
  `target_sbp` varchar(150) NOT NULL,
  `target_map` varchar(150) NOT NULL,
  `correct` varchar(150) NOT NULL,
  `correct_choose` varchar(150) NOT NULL,
  `deliberate` varchar(150) NOT NULL,
  `technique` varchar(150) NOT NULL,
  `other_drug` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `infusion` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `interm` varchar(150) NOT NULL,
  `sudden` varchar(150) NOT NULL,
  `etco` varchar(150) NOT NULL,
  `etco_min` varchar(150) NOT NULL,
  `map` varchar(150) NOT NULL,
  `map_min` varchar(150) NOT NULL,
  `spo` varchar(150) NOT NULL,
  `spo_min` varchar(150) NOT NULL,
  `changing` varchar(150) NOT NULL,
  `describing` text NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `etco_val` varchar(150) NOT NULL,
  `spo_val` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_discharge`
--

CREATE TABLE IF NOT EXISTS `emr_discharge` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `mane` varchar(150) NOT NULL,
  `primar` varchar(150) NOT NULL,
  `history` text NOT NULL,
  `physical` text NOT NULL,
  `lab` varchar(150) NOT NULL,
  `dia_1` varchar(150) NOT NULL,
  `icd_1` varchar(150) NOT NULL,
  `dia_2` varchar(150) NOT NULL,
  `icd_2` varchar(150) NOT NULL,
  `dia_3` varchar(150) NOT NULL,
  `icd_3` varchar(150) NOT NULL,
  `complication` text NOT NULL,
  `treatment` text NOT NULL,
  `recom` varchar(150) NOT NULL,
  `follow` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `transfer` varchar(150) NOT NULL,
  `cause` text NOT NULL,
  `conditio` varchar(150) NOT NULL,
  `provider` varchar(150) NOT NULL,
  `transport` varchar(150) NOT NULL,
  `consultant` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `given` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_drug`
--

CREATE TABLE IF NOT EXISTS `emr_drug` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `bsa` int(11) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `alle` varchar(300) NOT NULL,
  `drug` varchar(200) NOT NULL,
  `dose` varchar(200) NOT NULL,
  `freq` varchar(200) NOT NULL,
  `dur` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `date` varchar(300) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_fluid`
--

CREATE TABLE IF NOT EXISTS `emr_fluid` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `drug` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_fluid_chart`
--

CREATE TABLE IF NOT EXISTS `emr_fluid_chart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `fluid_chart` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_insulin`
--

CREATE TABLE IF NOT EXISTS `emr_insulin` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `start_1` int(11) NOT NULL,
  `insulin_1` varchar(150) NOT NULL,
  `end_1` int(11) NOT NULL,
  `start_2` int(11) NOT NULL,
  `insulin_2` varchar(150) NOT NULL,
  `end_2` int(11) NOT NULL,
  `start_3` int(11) NOT NULL,
  `insulin_3` varchar(150) NOT NULL,
  `end_3` int(11) NOT NULL,
  `start_4` int(11) NOT NULL,
  `insulin_4` varchar(150) NOT NULL,
  `end_4` int(11) NOT NULL,
  `start_5` int(11) NOT NULL,
  `insulin_5` varchar(150) NOT NULL,
  `end_5` int(11) NOT NULL,
  `more` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL,
  `give` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_lab`
--

CREATE TABLE IF NOT EXISTS `emr_lab` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc` varchar(150) NOT NULL,
  `lab` text NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_need`
--

CREATE TABLE IF NOT EXISTS `emr_need` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `need` varchar(150) NOT NULL,
  `drug` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `freq` varchar(150) NOT NULL,
  `inst` varchar(150) NOT NULL,
  `rfa` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_nu`
--

CREATE TABLE IF NOT EXISTS `emr_nu` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_operative`
--

CREATE TABLE IF NOT EXISTS `emr_operative` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `opertaion` varchar(150) NOT NULL,
  `pre` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `anasth` varchar(150) NOT NULL,
  `other` varchar(150) NOT NULL,
  `anesthesiologist` varchar(150) NOT NULL,
  `blood_loss` varchar(150) NOT NULL,
  `blood_trans` varchar(150) NOT NULL,
  `drains` varchar(150) NOT NULL,
  `specimens` varchar(150) NOT NULL,
  `indications` varchar(150) NOT NULL,
  `discription` text NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `sterile_nurse` varchar(150) NOT NULL,
  `circulating_nurse` varchar(150) NOT NULL,
  `account` varchar(150) NOT NULL,
  `instrument` varchar(150) NOT NULL,
  `Sponge` varchar(150) NOT NULL,
  `needle` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_ord`
--

CREATE TABLE IF NOT EXISTS `emr_ord` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `order` varchar(300) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_physical`
--

CREATE TABLE IF NOT EXISTS `emr_physical` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `children` varchar(200) NOT NULL,
  `no_children` int(200) NOT NULL,
  `habits` varchar(200) NOT NULL,
  `other` varchar(200) NOT NULL,
  `allergy` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `reaction` varchar(200) NOT NULL,
  `reaction_comment` varchar(200) NOT NULL,
  `present` varchar(200) NOT NULL,
  `surgery` varchar(200) NOT NULL,
  `family` varchar(200) NOT NULL,
  `psychosocial` varchar(200) NOT NULL,
  `number_1` varchar(200) NOT NULL,
  `dose_1` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `wt` varchar(200) NOT NULL,
  `ht` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `pluse` varchar(200) NOT NULL,
  `rr` varchar(200) NOT NULL,
  `genera` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `head_comment` varchar(200) NOT NULL,
  `chest` varchar(200) NOT NULL,
  `chest_comment` varchar(200) NOT NULL,
  `heart` varchar(200) NOT NULL,
  `heart_comment` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `abdomen_comment` varchar(200) NOT NULL,
  `neurological` varchar(200) NOT NULL,
  `neurological_comment` varchar(200) NOT NULL,
  `findings` varchar(200) NOT NULL,
  `findings_comment` varchar(200) NOT NULL,
  `muscu` varchar(200) NOT NULL,
  `psy` varchar(200) NOT NULL,
  `psy_comment` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `status_comment` varchar(200) NOT NULL,
  `diagnosis` varchar(200) NOT NULL,
  `icd` varchar(200) NOT NULL,
  `plane` varchar(200) NOT NULL,
  `risk` varchar(200) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `muscu_comment` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_prog`
--

CREATE TABLE IF NOT EXISTS `emr_prog` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `obse` varchar(200) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `eva` varchar(200) NOT NULL,
  `time` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_rad`
--

CREATE TABLE IF NOT EXISTS `emr_rad` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc` varchar(250) NOT NULL,
  `other_skull` varchar(250) NOT NULL,
  `preg` varchar(250) NOT NULL,
  `skull` varchar(250) NOT NULL,
  `orbit` varchar(250) NOT NULL,
  `mastoid` varchar(250) NOT NULL,
  `pns` varchar(250) NOT NULL,
  `tmj` varchar(250) NOT NULL,
  `mandible` varchar(250) NOT NULL,
  `carvical` varchar(250) NOT NULL,
  `dorsal` varchar(250) NOT NULL,
  `lumbar` varchar(250) NOT NULL,
  `lumbo` varchar(250) NOT NULL,
  `coccyx` varchar(250) NOT NULL,
  `joint` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  `ribs` varchar(250) NOT NULL,
  `clavical` varchar(250) NOT NULL,
  `pelvis` varchar(250) NOT NULL,
  `hip` varchar(250) NOT NULL,
  `acet` varchar(250) NOT NULL,
  `femur` varchar(250) NOT NULL,
  `patella` varchar(250) NOT NULL,
  `tibia` varchar(250) NOT NULL,
  `ankle` varchar(250) NOT NULL,
  `feet` varchar(250) NOT NULL,
  `calc` varchar(250) NOT NULL,
  `shoulder` varchar(250) NOT NULL,
  `humerus` varchar(250) NOT NULL,
  `elbow` varchar(250) NOT NULL,
  `forearm` varchar(250) NOT NULL,
  `wrist` varchar(250) NOT NULL,
  `hand` varchar(250) NOT NULL,
  `view` varchar(250) NOT NULL,
  `lary` varchar(250) NOT NULL,
  `asopharynx` varchar(250) NOT NULL,
  `chest` varchar(250) NOT NULL,
  `gland` varchar(250) NOT NULL,
  `abdo` varchar(250) NOT NULL,
  `put` varchar(250) NOT NULL,
  `micturating` varchar(250) NOT NULL,
  `ivu` varchar(250) NOT NULL,
  `infusion` varchar(250) NOT NULL,
  `antegrade` varchar(250) NOT NULL,
  `retrograde` varchar(250) NOT NULL,
  `cyto` varchar(250) NOT NULL,
  `cts` varchar(250) NOT NULL,
  `cts_other` varchar(250) NOT NULL,
  `us` varchar(250) NOT NULL,
  `us_other` varchar(250) NOT NULL,
  `breast` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `color_other` varchar(250) NOT NULL,
  `upper` varchar(250) NOT NULL,
  `lower` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emr_records`
--

CREATE TABLE IF NOT EXISTS `emr_records` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `sur_pro` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type_sur` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ind_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_block` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_ans` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quality_block` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans_start_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans_end_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sur_start_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sur_end_time` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `irr_arth` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `int_mon` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blo_loc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_loc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_loc` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `air_ans` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `int_ven` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre_drug` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inh_age` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inh_age_avail` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age_if_avail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_inf` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opi_inf_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_ans` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_ans_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_inf` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vas_inf_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_ind_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_ind_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_bolus` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_bolus_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_inf` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_vas_age_main_inf_dose` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emr_recovery`
--

CREATE TABLE IF NOT EXISTS `emr_recovery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `arr_rec` datetime NOT NULL,
  `temp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pulse` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bl_p` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `resp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ox_p` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lev_con` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tubes` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `wound` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dose` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rate` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `urine` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `scale` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `medication` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `monitor` text COLLATE utf8_unicode_ci NOT NULL,
  `leave_rec` datetime NOT NULL,
  `rec_nurse` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `doctor` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `word_nurse` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emr_rel`
--

CREATE TABLE IF NOT EXISTS `emr_rel` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `sub` varchar(250) NOT NULL,
  `edu` varchar(250) NOT NULL,
  `res` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `time` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_req`
--

CREATE TABLE IF NOT EXISTS `emr_req` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `spe` varchar(150) NOT NULL,
  `from_sp` varchar(150) NOT NULL,
  `reason` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emr_risk`
--

CREATE TABLE IF NOT EXISTS `emr_risk` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `high` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `low` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age_point` int(11) DEFAULT NULL,
  `history` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `history_point` int(11) DEFAULT NULL,
  `bowel` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bowel_point` int(11) DEFAULT NULL,
  `medication` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medication_point` int(11) DEFAULT NULL,
  `care` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `care_point` int(11) DEFAULT NULL,
  `mobility` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobility_point` int(11) DEFAULT NULL,
  `cogntion` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cogntion_point` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `dr_sign` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emr_voise`
--

CREATE TABLE IF NOT EXISTS `emr_voise` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `voise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitor_ring`
--

CREATE TABLE IF NOT EXISTS `monitor_ring` (
  `id` int(11) NOT NULL,
  `blood_trams_fusion_id` int(11) NOT NULL,
  `time` varchar(150) NOT NULL,
  `temp` varchar(150) NOT NULL,
  `pulse` varchar(150) NOT NULL,
  `b_l_p` varchar(150) NOT NULL,
  `resp` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monitor_ring`
--

INSERT INTO `monitor_ring` (`id`, `blood_trams_fusion_id`, `time`, `temp`, `pulse`, `b_l_p`, `resp`, `sign`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 'jgjhg', 'hgssh', 'fhdfgfh', 'hdfdf', 'hdf', 1429707716, '2015-04-22 13:01:56'),
(2, 2, '2', '5', 'gsdfg', 'gdfg', 'fgfd', 'gsdfg', 1429707895, '2015-04-22 13:04:55'),
(3, 2, '3', '685', 'fdgfsd', 'fdsgdf', 'sdfgsd', 'dsfgs', 1429708025, '2015-04-22 13:07:05'),
(4, 2, '4', 'lkthg;sl', 'lkgj;dfs', 'kjdghdflx', 'kfgu;sfdi', 'yhuyh;', 1429708115, '2015-04-22 13:08:35'),
(5, 3, '1', 'liglyuf', 'iuyti', 'iyp', 'oiup9', 'oi;;;', 1429708501, '2015-04-22 13:15:01'),
(6, 3, '3', 'kufutf', 'oihiu', 'iuyo', 'iuyo', 'iu8yp', 1429708545, '2015-04-22 13:15:45'),
(7, 3, '2', 'poig;', 'dfgdf', 'fdgsdfghs', 'fsdgsd', 'fdsgd', 1430301128, '2015-04-29 09:52:08'),
(8, 4, '1', '37', 'ghjdg', 'jhkjlh', 'jhkjh', 'jhldkjgh', 1431948206, '2015-05-18 11:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `id` int(11) NOT NULL,
  `allegy` varchar(150) NOT NULL,
  `number_1` varchar(40) NOT NULL,
  `dose_1` varchar(40) NOT NULL,
  `time_1` varchar(40) NOT NULL,
  `number_2` varchar(40) NOT NULL,
  `dose_2` varchar(40) NOT NULL,
  `time_2` varchar(40) NOT NULL,
  `number_3` varchar(40) NOT NULL,
  `dose_3` varchar(40) NOT NULL,
  `time_3` varchar(40) NOT NULL,
  `number_4` varchar(40) NOT NULL,
  `dose_4` varchar(40) NOT NULL,
  `time_4` varchar(40) NOT NULL,
  `wt` varchar(3) NOT NULL,
  `ht` varchar(3) NOT NULL,
  `temp` varchar(10) NOT NULL,
  `min` varchar(15) NOT NULL,
  `max` varchar(15) NOT NULL,
  `p` varchar(30) NOT NULL,
  `rr` varchar(30) NOT NULL,
  `pox` varchar(30) NOT NULL,
  `pain` varchar(2) NOT NULL,
  `complain` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` varchar(250) NOT NULL,
  `mrn` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `allegy`, `number_1`, `dose_1`, `time_1`, `number_2`, `dose_2`, `time_2`, `number_3`, `dose_3`, `time_3`, `number_4`, `dose_4`, `time_4`, `wt`, `ht`, `temp`, `min`, `max`, `p`, `rr`, `pox`, `pain`, `complain`, `sign`, `time`, `mrn`, `user_id`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' ', 'ssss', 'Year: 2015 Month: 03 Day: 02 - 01:15 pm', 0, 0),
(2, 'ksjqjs', 'kjdiwj', 'dwjdiwjw', 'jdiwjd', 'kdiwjd', 'odwdowk', 'kdwidj', 'kdjwijd', 'kjwidj', 'kjwijd', 'owjdiwj', 'kjwijd', 'wijdiwdj', '12', '212', '222', '22', '222', '211', '11', '11', '1', ' wdwdkwkdj', 'dddd', 'Year: 2015 Month: 03 Day: 02 - 01:36 pm', 0, 0),
(3, 'ksjqjs', 'kskjs', 'dkwjkjdw', 'dwkjwkjdw', 'dwdowj', 'dkwjdwj', 'dkwjdwkjddwkjdwkjd', 'dwkjdw', 'dwjdwj', 'dkwjdwj', 'dkwjdwj', 'dkwjdwj', 'dkwjdwj', '12', '123', '', '', '', '', '', '', '', ' ', 'sssssssss', 'Year: 2015 Month: 03 Day: 02 - 04:48 pm', 0, 0),
(4, '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', 'ssss', 'Year: 2015 Month: 03 Day: 07 - 10:18 am', 0, 0),
(5, 'pwowodw', 'dwpodpwod', 'dwkdowkdw', 'dwokdwokdw', 'dwpdwpdwod', 'dlwkdowkdkdowko', 'okwodkwodkwd', 'owkdowkdw', 'owkdodwkw', 'dwkdowkd', 'dwlkdowkdw', 'dlwkdowkd', 'dwkodkwo', '11', '11', '2', 'llekeod', 'kmeokfeo', 'felkfeokf', 'felkfeokfe', 'fekfoekfe', '88', 'eoidiwdjwodpwoipoqd[owdk[wdk', 'dwldwokdowkdw', 'ldkwokdwk', 888887765, 0),
(6, 'pwowodw', 'dwpodpwod', 'dwkdowkdw', 'dwokdwokdw', 'dwpdwpdwod', 'dlwkdowkdkdowko', 'okwodkwodkwd', 'owkdowkdw', 'owkdodwkw', 'dwkdowkd', 'dwlkdowkdw', 'dlwkdowkd', 'dwkodkwo', '11', '11', '2', 'llekeod', 'kmeokfeo', 'felkfeokf', 'felkfeokfe', 'fekfoekfe', '88', 'eoidiwdjwodpwoipoqd[owdk[wdk', 'dwldwokdowkdw', 'ldkwokdwk', 888887765, 0),
(7, 'dwldkwwkd', 'wdwdw', 'dwdwdd', 'wdwdw', 'dwdw', 'dwdw', 'dwdw', 'dwdw', 'dwdwd', 'dwdw', 'dwdw', 'dwdw', 'dwdw', '12', '12', '11', '11', '11', '2121', '22', '222', '2', ' ssssssssssssssssss', 'sssssssssssss', 'Year: 2015 Month: 03 Day: 21 - 11:47 am', 12, 0),
(8, 'bobony', 'dlwjkdo', 'lkwiodjw', '2015-04-20', '', '', '', '', '', '', '', '', '', '12', '12', '12.5', '15', '155', '151', '515', '15', '6', ' dwdwdw', 'dwdwd', 'Year: 2015 Month: 04 Day: 19 - 02:40 pm', 36, 0),
(12, 'rtyuiio', '12', '5', '2015-04-09', '', '', '', '', '', '', '', '', '', '60', '12', '12.5', '56', '58', '52', '22', '89', '2', ' tyuiopp', 'ghklo', 'Year: 2015 Month: 04 Day: 19 - 04:18 pm', 36, 0),
(13, 'jkghkighig', 'jkgyigi', 'jkghkh', '04/10/2015', '', '', '', '', '', '', '', '', '', '', '21', '21', '45', '5646', '12', '545', '5454', '1', ' ', 'dfgdgdfg', 'Year: 2015 Month: 04 Day: 27 - 02:02 pm', 33, 0),
(14, 'kfeofkeofeokf', 'feokofekfkeo', 'feofeko', 'fkeofk', '', '', '', '', '', '', '', '', '', '121', '121', '12', '872872817', '87128712', '872', '8728', '878', '6', 'odkwokdowk ', 'kdokwokdw', 'Year: 2015 Month: 05 Day: 17 - 11:54 am', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nur_asses`
--

CREATE TABLE IF NOT EXISTS `nur_asses` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `facial` varchar(150) NOT NULL,
  `speech` varchar(150) NOT NULL,
  `color` varchar(100) NOT NULL,
  `hygiene` varchar(100) NOT NULL,
  `moisture` varchar(100) NOT NULL,
  `lesions` varchar(100) NOT NULL,
  `breakdowen` varchar(100) NOT NULL,
  `orinted` varchar(100) NOT NULL,
  `pupits` varchar(100) NOT NULL,
  `hand` varchar(100) NOT NULL,
  `feet` varchar(100) NOT NULL,
  `pulses_rate` varchar(100) NOT NULL,
  `pulses_rhythm` varchar(100) NOT NULL,
  `jvd` varchar(100) NOT NULL,
  `edema` varchar(100) NOT NULL,
  `resp_rate` varchar(100) NOT NULL,
  `resp_rhythm` varchar(100) NOT NULL,
  `resp_depth` varchar(100) NOT NULL,
  `chest` varchar(100) NOT NULL,
  `breath` varchar(100) NOT NULL,
  `shap` varchar(100) NOT NULL,
  `sound` varchar(100) NOT NULL,
  `tenderness` varchar(100) NOT NULL,
  `note` varchar(200) NOT NULL,
  `void_patten` varchar(100) NOT NULL,
  `void_amount` varchar(100) NOT NULL,
  `void_color` varchar(100) NOT NULL,
  `void_clarith` varchar(100) NOT NULL,
  `void_freq` varchar(100) NOT NULL,
  `pain` varchar(100) NOT NULL,
  `family` varchar(100) NOT NULL,
  `support` varchar(100) NOT NULL,
  `care` varchar(100) NOT NULL,
  `usual` varchar(100) NOT NULL,
  `hospitalized` varchar(100) NOT NULL,
  `sleeping` varchar(100) NOT NULL,
  `other` text NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_asses`
--

INSERT INTO `nur_asses` (`id`, `mrn`, `name`, `facial`, `speech`, `color`, `hygiene`, `moisture`, `lesions`, `breakdowen`, `orinted`, `pupits`, `hand`, `feet`, `pulses_rate`, `pulses_rhythm`, `jvd`, `edema`, `resp_rate`, `resp_rhythm`, `resp_depth`, `chest`, `breath`, `shap`, `sound`, `tenderness`, `note`, `void_patten`, `void_amount`, `void_color`, `void_clarith`, `void_freq`, `pain`, `family`, `support`, `care`, `usual`, `hospitalized`, `sleeping`, `other`, `time`, `sign`, `user_id`) VALUES
(1, 123, 'mohamed kidjiwjd', 'jkhuihiuh', 'mioooo', 'gtfgtftft', 'juhuhu', 'khjuihjui', 'hjiiuiyu', 'iojuijui', 'yes', 'ljhuoh', 'yes', '0', 'ddddddd', 'ded', 'sddddddd', 'ssese', 'jkgg', 'trrder', 'iuhuih', 'drderdrdr', 'iuhiuhiuh', 'dwsdw', 'dwdwdw', '0', 'drdrdr', 'jhnoj', 'iojoij', 'oijoij', 'oij', 'oijoi', 'iojiojo', 'oijioj', 'oijioj', 'oijioj', 'iojiojoij', 'oijiojio', 'cfswwdxswd', ' dwdwdd', '2015-04-04 14:37:23', 'dwdwd', 0),
(2, 2, '0', 'eofefepop', 'odwodwodi', 'odoeod', 'ooefeof', 'oeeofeoi', 'oefeofieo', 'oefoeifo', 'yes', 'lokodeod', 'yes', 'ooeeofeo', 'ododo', 'oeododwio', 'odwodwodi', 'oefeofieofi', 'oefioefieoi', 'ofoeife', 'ofioefieo', 'oefoefeo', 'ofoefieoif', 'ofeofeof', 'ofofeofie', 'no', '', 'pfoeofepfopo', 'pfoepfoepo', 'pfoepfoep', 'pfopefoep', 'eofioefieo', 'pfopeofepo', 'pofpeofpeo', 'pofpeofepo', 'pefopeof', 'pofepoefp', 'pofpoepef', 'pofepoefp', 'pfepfoepfepof', '2015-05-17 13:55:59', 'pfopeofpo', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nur_care`
--

CREATE TABLE IF NOT EXISTS `nur_care` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `need` varchar(150) NOT NULL,
  `nursing` text NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_care`
--

INSERT INTO `nur_care` (`id`, `user_id`, `mrn`, `need`, `nursing`, `time`, `sign`) VALUES
(1, 4, 36, 'jkghuigiu', 'hgyigyighjghjgh', '2015-04-29 11:33:46', 'jhkhuihuih'),
(2, 4, 36, 'jkghuigiu', 'hgyigyighjghjgh', '2015-04-29 11:33:46', 'jhkhuihuih'),
(3, 4, 2, 'fekfoekfoeko', 'ofkeofkoke', '2015-05-17 15:17:24', 'ofkeeokefoek');

-- --------------------------------------------------------

--
-- Table structure for table `nur_drug`
--

CREATE TABLE IF NOT EXISTS `nur_drug` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_drug`
--

INSERT INTO `nur_drug` (`id`, `user_id`, `mrn`, `drug_id`, `sign`, `time`) VALUES
(1, 4, 1, 1, 'dwdpwdlw', '2015-05-03 16:50:30'),
(2, 4, 1, 1, 'dwdpwdlw', '2015-05-03 16:50:30'),
(3, 4, 1, 1, 'dwdpwdlw', '2015-05-03 16:53:08'),
(4, 4, 1, 1, 'dwdpwdlw', '2015-05-03 16:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `nur_eva`
--

CREATE TABLE IF NOT EXISTS `nur_eva` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eva` text NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL,
  `eva_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_eva`
--

INSERT INTO `nur_eva` (`id`, `user_id`, `eva`, `time`, `sign`, `eva_id`) VALUES
(1, 4, 'kjkop', '2015-04-29 12:11:56', 'ghjgop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nur_fluid`
--

CREATE TABLE IF NOT EXISTS `nur_fluid` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `fluid_id` int(11) NOT NULL,
  `start` varchar(150) NOT NULL,
  `end` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_fluid`
--

INSERT INTO `nur_fluid` (`id`, `user_id`, `mrn`, `fluid_id`, `start`, `end`, `time`, `sign`) VALUES
(1, 4, 1, 1, 'wdwdwdwd', 'dwdwdw', '2015-05-05 16:27:28', 'dwdwdwdw'),
(2, 4, 2, 1, '12112', '212121', '2015-05-17 15:28:43', 'dwdwdw');

-- --------------------------------------------------------

--
-- Table structure for table `nur_need`
--

CREATE TABLE IF NOT EXISTS `nur_need` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_need`
--

INSERT INTO `nur_need` (`id`, `user_id`, `mrn`, `sign`, `time`) VALUES
(1, 4, 1, 'kjdijdiwjwi', '2015-05-04 14:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `nur_notes`
--

CREATE TABLE IF NOT EXISTS `nur_notes` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `notes` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_notes`
--

INSERT INTO `nur_notes` (`id`, `mrn`, `time`, `notes`, `sign`, `user_id`) VALUES
(1, 123, '0000-00-00 00:00:00', 'fgfgfg', 'grgrgr', 0),
(2, 123, '0000-00-00 00:00:00', 'fgfgfg', 'grgrgr', 0),
(3, 123, '0000-00-00 00:00:00', 'يبليب', 'بيبيبيبيبي', 0),
(4, 123, '0000-00-00 00:00:00', '645895945', 'khuohuio', 0),
(5, 123, '2015-04-01 11:29:08', ' ', 'grgrgr', 0),
(6, 2, '2015-05-17 14:25:26', ' dedeodeoeidoe', 'doedoedieodeod', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nur_pain`
--

CREATE TABLE IF NOT EXISTS `nur_pain` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `pain` varchar(50) NOT NULL,
  `type_pain` varchar(200) NOT NULL,
  `location` varchar(150) NOT NULL,
  `charact` varchar(100) NOT NULL,
  `symptoms` varchar(200) NOT NULL,
  `pain_inter` varchar(200) NOT NULL,
  `inten` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `intervention` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_pain`
--

INSERT INTO `nur_pain` (`id`, `mrn`, `pain`, `type_pain`, `location`, `charact`, `symptoms`, `pain_inter`, `inten`, `time`, `intervention`, `sign`, `user_id`) VALUES
(1, 123, 'No', ' | aching | burning | stab |  | | |  | ', 'wqwqw', 'Sharp', 'wqwqw', 'wqwqwq', '4-7 Moderat', '2015-04-01 13:02:45', 'sdsdsds', 'dsdsdsd', 0),
(2, 123, 'Yes', ' |  |  | stab |  | itching| |  | ', 'wqwqw', 'Sharp', 'wqwqw', 'wqwqwq', '0-3 pain', '2015-04-01 13:02:54', 'sdsdsds', 'grgrgr', 0),
(3, 123, 'Yes', ' |  | burning |  |  | | |  | ', 'wqwqw', 'Sharp', 'wqwqw', 'wqwqwq', '0-3 pain', '2015-04-01 13:03:44', 'sdsdsds', 'grgrgr', 0),
(4, 21251, 'Yes', ' | aching |  |  |  | | | dull | ', 'lkhjuohj', 'Sharp', ';lkjpj;p', ';kljiopj', '0-3 pain', '2015-04-04 13:58:13', 'kjoiopj', 'joijoi', 0),
(5, 2, 'Yes', ' | aching | burning |  |  | | |  | ', 'dw;dlwldw;dw', 'Sharp', 'dwlw;dl;wld;w', 'dw;lw;ld;w', '0-3 pain', '2015-05-17 14:30:47', 'ele;dle;ld', 'edededlelpel', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nur_sheet`
--

CREATE TABLE IF NOT EXISTS `nur_sheet` (
  `id` int(11) NOT NULL,
  `blood` varchar(150) NOT NULL,
  `sugar` varchar(150) NOT NULL,
  `acetone` varchar(150) NOT NULL,
  `oral` varchar(150) NOT NULL,
  `insulin` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `site` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_sheet`
--

INSERT INTO `nur_sheet` (`id`, `blood`, `sugar`, `acetone`, `oral`, `insulin`, `dose`, `site`, `time`, `sign`, `user_id`, `mrn`) VALUES
(1, 'qwqwq', 'wqwq', '0', 'wqwqw', '0', 'wqwqwq', 'wqwqwq', '2015-04-27 16:58:11', 'dfgdgdfg', 0, 0),
(2, 'qwqwq', 'wqwq', 'sdaaa', 'dada', 'dadad', 'dadad', 'dadda', '2015-04-27 16:59:40', 'dadada', 0, 0),
(3, 'keokeokdeo', 'ofkeok', 'feokfeok', 'ofkeofkeo', 'ofkeofk', 'ofkeofeko', 'ofkeofkeo', '2015-05-17 15:13:51', 'oefkfoekokfeofkeofeke', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nur_sign_in`
--

CREATE TABLE IF NOT EXISTS `nur_sign_in` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `site` varchar(100) NOT NULL,
  `alle` varchar(100) NOT NULL,
  `risk` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_sign_in`
--

INSERT INTO `nur_sign_in` (`id`, `user_id`, `mrn`, `patient`, `site`, `alle`, `risk`, `blood`, `sign`, `time`) VALUES
(1, 4, 2, 'Patient Has Confirmed', 'Identity:Site', '', 'Yes,And Equipment/assistance available', 'Yes, And Adequate Intravenous Access And Fluids Planned', 'ecececcecec', '2015-05-22 16:16:54'),
(2, 4, 2, 'Patient Has Confirmed:Site Marked Not Applicable:Anaesthesia Safety Check Compeleted:Pulse Oximeter ', 'Identity:Site', 'Yes', 'Yes,And Equipment/assistance available', 'Yes, And Adequate Intravenous Access And Fluids Planned', 'CECECECE', '2015-05-22 16:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `nur_sign_out`
--

CREATE TABLE IF NOT EXISTS `nur_sign_out` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `verbally` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_sign_out`
--

INSERT INTO `nur_sign_out` (`id`, `user_id`, `mrn`, `verbally`, `sign`, `time`) VALUES
(1, 4, 2, 'The Name of the procedure Recorded:That Instrument , Sponge And needle Counts are correct(Or not applicable):How the specimen is labelled(including pa', 'wevrvrv', '2015-05-23 13:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `nur_time_out`
--

CREATE TABLE IF NOT EXISTS `nur_time_out` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `confirm` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `site` varchar(150) NOT NULL,
  `event` varchar(150) NOT NULL,
  `anti` varchar(150) NOT NULL,
  `imaging` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_time_out`
--

INSERT INTO `nur_time_out` (`id`, `user_id`, `mrn`, `confirm`, `surgeon`, `site`, `event`, `anti`, `imaging`, `sign`, `time`) VALUES
(1, 4, 2, 'Confirm All tean Members Have introduced themselves by name and role', '', 'Patient:Site', 'Surgeon reviews : what are the critical or unexpected steps, operative duration , anticipated blood loss:Anaesthesia Team reviews : Are There Any Pati', 'Yes', 'Yes', 'fefepelffe', '2015-05-22 03:14:45'),
(2, 4, 2, 'Confirm All tean Members Have introduced themselves by name and role', 'Surgeon , anathesia Professtional and nurse verbally confirm', 'Patient', 'Surgeon reviews : what are the critical or unexpected steps, operative duration , anticipated blood loss:Anaesthesia Team reviews : Are There Any Pati', 'Yes', 'Yes', 'cddcdcd', '2015-05-22 17:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `nur_vital`
--

CREATE TABLE IF NOT EXISTS `nur_vital` (
  `id` int(11) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `pulse` varchar(200) NOT NULL,
  `rr` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `mrn` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nur_vital`
--

INSERT INTO `nur_vital` (`id`, `temp`, `time`, `pulse`, `rr`, `bp`, `notes`, `sign`, `mrn`, `user_id`) VALUES
(1, '21', '2015-04-27 14:08:18', 'DFEDFEDFE', '0', '0', '0', 'dfgdgdfg', 0, 0),
(2, '', '2015-04-27 14:12:25', '', '0', '0', '0', 'dfgdgdfg', 0, 0),
(3, '872382', '2015-05-17 14:58:18', '29283', '0', '0', '0', 'lkfekflek', 2, 4),
(4, '87382', '2015-05-17 15:07:22', '282372', '83478347', '8748374', 'kfjjfejfoejo ', 'kjeijeifj', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nur_voise`
--

CREATE TABLE IF NOT EXISTS `nur_voise` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dr_order` varchar(150) NOT NULL,
  `nurse` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `mrn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur_voise`
--

INSERT INTO `nur_voise` (`id`, `user_id`, `dr_order`, `nurse`, `time`, `mrn`) VALUES
(1, 4, 'dsdsds', 'dsdsdsdsd', '2015-05-01 18:04:48', 1),
(2, 4, 'efefkeokfo', 'oekoekfoekf', '2015-05-17 15:22:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nutration`
--

CREATE TABLE IF NOT EXISTS `nutration` (
  `id` int(11) NOT NULL,
  `doc_nu_id` int(11) NOT NULL,
  `notes` text NOT NULL,
  `comment` varchar(150) NOT NULL,
  `chy` varchar(150) NOT NULL,
  `teeth` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nutration`
--

INSERT INTO `nutration` (`id`, `doc_nu_id`, `notes`, `comment`, `chy`, `teeth`, `time`, `sign`, `user_id`) VALUES
(1, 36, '', '''lp[lplp', 'dwdwd', 'wddw', '2015-04-29 13:42:24', 'jhkhuihuih', 7),
(2, 2, ' dfghgfhj', 'gfhjfdj', 'hjdfj', 'dfj', '2015-04-29 14:54:44', 'dfj', 7),
(3, 2, ' gfhj', 'hj', 'hjh', 'ghj', '2015-04-29 14:57:42', 'ghjfg', 7),
(4, 1, 'cacacac', 'cacacac', 'cacacaca', 'cacacac', '2015-04-30 18:02:12', 'acacac', 7);

-- --------------------------------------------------------

--
-- Table structure for table `out_in_put_chart`
--

CREATE TABLE IF NOT EXISTS `out_in_put_chart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `put_chart_day_id` int(11) NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nurse_sign` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `oral_am` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `oral_ty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `i_v_am` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `i_v_ty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `n_gtube_am` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `n_gtube_ty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `urin_am` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `urin_ty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `n_g_tube_am` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `n_g_tube_ty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_am` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_ty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `out_in_put_chart`
--

INSERT INTO `out_in_put_chart` (`id`, `user_id`, `put_chart_day_id`, `time`, `nurse_sign`, `oral_am`, `oral_ty`, `i_v_am`, `i_v_ty`, `n_gtube_am`, `n_gtube_ty`, `urin_am`, `urin_ty`, `n_g_tube_am`, `n_g_tube_ty`, `other_am`, `other_ty`, `created_at`) VALUES
(1, 4, 1, '8 AM', '0', 'hskgjldhsfg', 'oih;uh', ';kh;kjg', ';kjhblkjgl', 'lkj;lkh;', 'lkh;kjhl', ';khnkjhblk', ';kjnk;jlkb', 'jkhnkjh', ';kjh;kjh;k', 'jhnlkjhlkh', 'jh;kjhlk', '0000-00-00 00:00:00'),
(2, 4, 1, '9 AM', 'khlkg', '20', 'fhndf', '545', 'lkhluig', '56', 'klj;g', '3265', 'klh;kgl', '154', 'ljgljyg', '4154', 'jnlkjhhg', '2015-04-29 16:41:44'),
(3, 4, 1, '1 AM', 'lpeflfepfeplf', 'wlpwelwp', 'pelpfelp', 'eplepflp', 'felfpelfepl', 'pflpfleplef', 'peflpelf', 'peflpfepflel', 'pflpelfpel', 'pflpfleplefp', 'pfelpelfp', 'pflpelpfelp', 'feplfepfp', '2015-05-17 15:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `age` date NOT NULL,
  `gender` int(11) NOT NULL,
  `pt_id` bigint(20) NOT NULL,
  `occupation` text COLLATE utf8_unicode_ci NOT NULL,
  `address` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `emergency_call_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `emergency_call_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `user_id`, `date_time`, `name`, `age`, `gender`, `pt_id`, `occupation`, `address`, `phone`, `mobile`, `emergency_call_no`, `emergency_call_name`, `created_at`, `updated_at`, `active`) VALUES
(1, 5, '2015-04-26T01:01', 'ijodfsgh;osdf', '2000-06-08', 1, 26545648641538, 'gjskfdgh;', 'zgh;zxh', 'jfkdsfhg;a', 'kjfgh;kdf', 'j;dfoigh;', ';kfsdgi;ushd', '2015-04-26 13:31:05', '2015-06-08 14:18:09', 1),
(2, 5, '', 'kamatcho', '2000-05-01', 1, 98988898989898, 'kjiejfeifjeifjeifj', 'fefefiejfi', '212128178271', '328283923', '83378373837', '87382738273', '2015-05-17 11:30:07', '2015-06-08 14:18:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `put_chart_day`
--

CREATE TABLE IF NOT EXISTS `put_chart_day` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_am` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `put_chart_day`
--

INSERT INTO `put_chart_day` (`id`, `user_id`, `mrn`, `date`, `total_am`, `created_at`) VALUES
(1, 4, 1, '2015-04-29', 0, '2015-04-29 11:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE IF NOT EXISTS `res` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `second` varchar(100) NOT NULL,
  `third` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `pationt_id` varchar(14) NOT NULL,
  `clinc` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `provider` varchar(200) NOT NULL,
  `seen` varchar(150) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`id`, `first`, `second`, `third`, `last`, `pationt_id`, `clinc`, `number`, `phone`, `provider`, `seen`, `doctor`, `time`, `full_name`, `user_id`) VALUES
(1, 'mohamed', 'wael', 'samir', 'moh', '01234567890123', 'jjjj', '123', '9383829', 'kjwijwisjwi', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 02 - 09:57 am', '', 0),
(2, 'jwiwj', 'oeoeij', 'efkjfiej', 'okforkf', '12345678901234', 'kjdeij', '123', '982918928192', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 02 - 04:38 pm', '', 0),
(3, 'mohamed', 'ahmed', 'hussein', 'samir', '12345678901234', 'kdwok', '121', '837827382', 'kjidwijd', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 10:34 am', '', 0),
(4, 'jwiwj', 'wael', 'samir', 'samir', '01234567890123', 'kdwok', '123', '011111111111', 'kjwijwisjwi', 'Pationt seen and examined with attending Dr', 'ddddd', 'Year: 2015 Month: 03 Day: 03 - 10:41 am', '', 0),
(5, 'okowdk', 'dwlkdowk', 'dwpdl', 'dwokdwo', '01234567890123', 'dwokdwok', '11', '011111111111', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'ddddd', 'Year: 2015 Month: 03 Day: 03 - 11:09 am', '', 0),
(6, '0', '0', '0', '0', '01234567890123', 'dwokdwok', '123', '011111111111', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'ssssss', 'Year: 2015 Month: 03 Day: 03 - 11:14 am', '', 0),
(7, 'okowdk', 'dwlkdowk', 'efkjfiej', 'dwokdwo', '01234567890123', 'kjdeij', '123', '982918928192', 'kjidwijd', 'Pationt seen and examined with attending Dr', 'ddddd', 'Year: 2015 Month: 03 Day: 03 - 12:39 pm', 'okowdkdwlkdowkefkjfiejdwokdwo', 0),
(8, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'kjdeij', '121', '982918928192', 'kjidwijd', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 12:59 pm', 'mohamedwaelhusseinsamir', 0),
(10, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '01010101', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:02 pm', 'mohamedwaelhusseinsamir', 0),
(11, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '01010101', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:04 pm', 'mohamedwaelhusseinsamir', 0),
(12, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '01010101', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:24 pm', 'mohamedwaelhusseinsamir', 0),
(13, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '9383829', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 01:26 pm', 'mohamedwaelhusseinsamir', 0),
(14, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '9383829', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 01:27 pm', 'mohamedwaelhusseinsamir', 0),
(15, 'okowdk', 'ahmed', 'efkjfiej', 'samir', '01234567890123', 'kjdeij', '123', '982918928192', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:29 pm', 'okowdkahmedefkjfiejsamir', 0),
(16, 'okowdk', 'ahmed', 'efkjfiej', 'samir', '01234567890123', 'kjdeij', '123', '982918928192', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:29 pm', 'okowdkahmedefkjfiejsamir', 0),
(17, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'kjdeij', '123', '1003983928', 'kjidwijd', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 01:31 pm', 'mohamedwaelhusseinsamir', 0),
(18, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'kjdeij', '123', '1003983928', 'kjidwijd', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 01:32 pm', 'mohamedwaelhusseinsamir', 0),
(19, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '1003983928', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:38 pm', 'mohamedwaelhusseinsamir', 0),
(20, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '1003983928', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:38 pm', 'mohamedwaelhusseinsamir', 0),
(21, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'dwokdwok', '123', '1003983928', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 03 Day: 03 - 01:43 pm', 'mohamedwaelhusseinsamir', 0),
(22, 'mohamed', 'wael', 'hussein', 'samir', '01234567890123', 'jjjj', '123', '01010101', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 01:44 pm', 'mohamedwaelhusseinsamir', 0),
(23, 'mohamed', 'wael', 'samir', 'samir', '01234567890123', 'jjjj', '121', '01010101', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 04:27 pm', 'mohamedwaelsamirsamir', 0),
(24, 'mohamed', 'wael', 'samir', 'samir', '01234567890123', 'jjjj', '121', '01010101', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 03 - 04:27 pm', 'mohamedwaelsamirsamir', 0),
(25, 'jwiwj', 'oeoeij', 'samir', 'samir', '01234567890123', 'kjdeij', '12', '01010101', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'ssssss', 'Year: 2015 Month: 03 Day: 04 - 09:31 am', 'jwiwj oeoeij samir samir', 0),
(26, 'smi', 'oeoeij', 'samir', 'samir', '01234567890123', 'kjdeij', '12', '01010101', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'ssssss', 'Year: 2015 Month: 03 Day: 04 - 09:31 am', 'smi oeoeij samir samir', 0),
(27, 'smi', 'oeoeij', 'samir', 'samir', '01234567890123', 'kjdeij', '123', '01010101', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'ssssss', 'Year: 2015 Month: 03 Day: 04 - 09:41 am', 'smi oeoeij samir samir', 0),
(28, 'smi', 'oeoeij', 'samir', 'samir', '01234567890123', 'kjdeij', '123', '01010101', 'kjwidjwidw', 'Pationt seen and examined with attending Dr', 'ssssss', 'Year: 2015 Month: 03 Day: 04 - 09:41 am', 'smi oeoeij samir samir', 0),
(32, 'mohamed', 'oeoeij', 'samir', 'dwokdwo', 'kkdowkdwo', 'dwokdwok', '123', 'dwokdwo', 'dwokodwk', 'Pationt seen and examined with attending Dr', 'dwlwdk', 'Year: 2015 Month: 03 Day: 06 - 04:54 pm', 'mohamed oeoeij samir dwokdwo', 0),
(33, 'sqqsq', 'sslkoko', 'wwwwwwwww', 'dokok', '12345678912345', 'dlwdwd', '11', '222222222222222222222222222222', 'wwwwwww', 'Pationt seen and examined with attending Dr', 'wwwwwwww', 'Year: 2015 Month: 03 Day: 21 - 11:51 am', 'sqqsq sslkoko wwwwwwwww dokok', 0),
(34, 'Mohamed', 'Ahmed', 'Abdullah', 'eid', '12345678901232', 'jkhkjh', '25', '23544', 'hjfk', 'Pationt seen and examined with attending Dr', 'jhgf', 'Year: 2015 Month: 04 Day: 19 - 12:16 pm', 'Mohamed Ahmed Abdullah eid', 0),
(35, 'Mohamed', 'Ahmed', 'Abdullah', 'eid', '12345678901231', 'jkhkjh', '25', '58258', 'hjfk', 'Pationt seen and examined with attending Dr', 'jhgf', 'Year: 2015 Month: 04 Day: 19 - 12:21 pm', 'Mohamed Ahmed Abdullah eid', 0),
(36, 'mohamed', 'wael', 'samir', 'mohamed', '01218741645466', 'stomach', '011', '0121540548', 'kamatcho', 'Pationt seen and examined with attending Dr', 'kamatcho', 'Year: 2015 Month: 04 Day: 19 - 02:35 pm', 'mohamed wael samir mohamed', 0),
(37, 'rtyyu', 'iopl', 'hgfds', 'rtyuio', '25489676538789', 'rtyyuu', '12', '1258936544', 'uyrewsdg', 'Pationt seen and examined with attending Dr', 'iuytrt', 'Year: 2015 Month: 04 Day: 19 - 04:23 pm', 'rtyyu iopl hgfds rtyuio', 0);

-- --------------------------------------------------------

--
-- Table structure for table `res_info`
--

CREATE TABLE IF NOT EXISTS `res_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `medical` varchar(150) NOT NULL,
  `date` varchar(150) NOT NULL,
  `practice` varchar(150) NOT NULL,
  `physician` varchar(150) NOT NULL,
  `first` varchar(150) NOT NULL,
  `second` varchar(150) NOT NULL,
  `attention` varchar(150) NOT NULL,
  `fax_number` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `phone_number` varchar(150) NOT NULL,
  `ask` varchar(150) NOT NULL,
  `patient` varchar(150) NOT NULL,
  `fax` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `requesting` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `other` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_info`
--

INSERT INTO `res_info` (`id`, `user_id`, `mrn`, `medical`, `date`, `practice`, `physician`, `first`, `second`, `attention`, `fax_number`, `mail`, `phone_number`, `ask`, `patient`, `fax`, `address`, `requesting`, `time`, `other`) VALUES
(1, 5, 2, 'fepfepflep', 'pflepflep', 'pflfpelfepl', 'plrpglpgrl', 'rplgptlgpltgp', 'plgpglrpgrlp', 'pglpgrlprl', 'plpfrlpflrp', 'pgrlprlgrplrq', 'prlprlgrpglrp', 'lplgpglprlgpr', 'Records dated between', 'pglrpgrlgrp', 'plprlgpglr', 'Any and all types of records you have for this patient:Lab Report:Radiology Report:Other', '2015-05-19 17:37:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `res_release`
--

CREATE TABLE IF NOT EXISTS `res_release` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `record` varchar(200) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  `mental` varchar(200) NOT NULL,
  `hiv` varchar(200) NOT NULL,
  `genetic` varchar(200) NOT NULL,
  `drug` varchar(200) NOT NULL,
  `p_sign` varchar(200) NOT NULL,
  `a_sign` varchar(200) NOT NULL,
  `relation` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `mrn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_release`
--

INSERT INTO `res_release` (`id`, `user_id`, `patient`, `dob`, `record`, `doctor`, `mental`, `hiv`, `genetic`, `drug`, `p_sign`, `a_sign`, `relation`, `time`, `mrn`) VALUES
(1, 5, 'kamatcho', 'dwkdowk', 'dowkodwk', 'okoekfoek', 'okfeofkeoefkofek', 'oekfokeofke', 'fekfeofkeokf', 'efkoefkeokfo', 'foekfoefkokeok', 'feofkeofek', 'feokfoefk', '2015-05-19 14:04:51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `access` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `title`, `access`) VALUES
(1, 'Admin', 'Admin'),
(2, 'Doctor', 'dr_control'),
(3, 'Nurse', 'nurse_control'),
(4, 'Reception', 'Reception'),
(5, 'Consultant', 'cons_control'),
(6, 'Nutration', 'nut_control'),
(7, 'Surgeon', 'sur_control'),
(8, 'Emergency', 'emr_control');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `title`) VALUES
(1, 'IT'),
(3, 'New'),
(4, 'Nurse'),
(5, 'Reception'),
(6, 'Consultant'),
(7, 'Nutration'),
(8, 'Surgeon'),
(9, 'Emergency');

-- --------------------------------------------------------

--
-- Table structure for table `sur`
--

CREATE TABLE IF NOT EXISTS `sur` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `quality` varchar(200) NOT NULL,
  `severty` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `factor` varchar(200) NOT NULL,
  `assoc` varchar(200) NOT NULL,
  `history` text NOT NULL,
  `tobaco` varchar(200) NOT NULL,
  `alcohol` varchar(200) NOT NULL,
  `drugs` varchar(200) NOT NULL,
  `hiv` varchar(200) NOT NULL,
  `occ` varchar(200) NOT NULL,
  `edu` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `mrn` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sur`
--

INSERT INTO `sur` (`id`, `location`, `quality`, `severty`, `duration`, `time`, `factor`, `assoc`, `history`, `tobaco`, `alcohol`, `drugs`, `hiv`, `occ`, `edu`, `marital`, `mrn`, `sign`, `user_id`) VALUES
(1, 'dwokwodk', 'odwkowk', 'odwkowk', 'odwkowdk', '2015-06-07 13:50:44', 'odkwokdw', 'odkwodwk', 'odwkowkd', 'Yes', 'Yes', 'Yes', 'okdwokdw', 'okdwodkw', 'oowkokdw', 'Single', '2', 'okdwokdwo', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sur_ana`
--

CREATE TABLE IF NOT EXISTS `sur_ana` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `hight` varchar(100) NOT NULL,
  `wight_lbs` varchar(100) NOT NULL,
  `wight` varchar(100) NOT NULL,
  `obese` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `diabetes` varchar(100) NOT NULL,
  `insulin` varchar(100) NOT NULL,
  `smoking` varchar(100) NOT NULL,
  `pack` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `hyper` varchar(100) NOT NULL,
  `treat` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `coronary` varchar(100) NOT NULL,
  `reva` varchar(100) NOT NULL,
  `mi` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `dysa` varchar(100) NOT NULL,
  `ortho` varchar(100) NOT NULL,
  `vascular` varchar(100) NOT NULL,
  `carotid` varchar(100) NOT NULL,
  `stroke` varchar(100) NOT NULL,
  `tia` varchar(100) NOT NULL,
  `hyperlipidemia` varchar(100) NOT NULL,
  `valvular` varchar(100) NOT NULL,
  `atrial` varchar(100) NOT NULL,
  `heart` varchar(100) NOT NULL,
  `oval` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `spinal` varchar(100) NOT NULL,
  `other_spinal` varchar(100) NOT NULL,
  `cognitive` varchar(100) NOT NULL,
  `other_cognitive` varchar(100) NOT NULL,
  `motor` varchar(100) NOT NULL,
  `other_motor` varchar(100) NOT NULL,
  `injury` varchar(100) NOT NULL,
  `other_injury` varchar(100) NOT NULL,
  `park` varchar(100) NOT NULL,
  `neurologic` varchar(100) NOT NULL,
  `other_neurologic` varchar(100) NOT NULL,
  `spacify` text NOT NULL,
  `current` varchar(100) NOT NULL,
  `list` text NOT NULL,
  `surgeries` text NOT NULL,
  `hematocrit` text NOT NULL,
  `lab` text NOT NULL,
  `fit` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_clinical`
--

CREATE TABLE IF NOT EXISTS `sur_clinical` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc_sbp` varchar(150) NOT NULL,
  `clinc_dbp` varchar(150) NOT NULL,
  `clinc_pos` varchar(150) NOT NULL,
  `day_sbp` varchar(150) NOT NULL,
  `day_dbp` varchar(150) NOT NULL,
  `day_pos` varchar(150) NOT NULL,
  `induction_sbp` varchar(150) NOT NULL,
  `induction_dbp` varchar(150) NOT NULL,
  `induction_pos` varchar(150) NOT NULL,
  `reading` varchar(150) NOT NULL,
  `record` varchar(150) NOT NULL,
  `low_record` varchar(150) NOT NULL,
  `lowest` varchar(150) NOT NULL,
  `low_time` varchar(150) NOT NULL,
  `list` varchar(150) NOT NULL,
  `volume` varchar(150) NOT NULL,
  `fluid` varchar(150) NOT NULL,
  `output` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `surgeon_sbp` varchar(150) NOT NULL,
  `surgeon_map` varchar(150) NOT NULL,
  `target` varchar(150) NOT NULL,
  `target_sbp` varchar(150) NOT NULL,
  `target_map` varchar(150) NOT NULL,
  `correct` varchar(150) NOT NULL,
  `correct_choose` varchar(150) NOT NULL,
  `deliberate` varchar(150) NOT NULL,
  `technique` varchar(150) NOT NULL,
  `other_drug` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `infusion` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `interm` varchar(150) NOT NULL,
  `sudden` varchar(150) NOT NULL,
  `etco` varchar(150) NOT NULL,
  `etco_min` varchar(150) NOT NULL,
  `map` varchar(150) NOT NULL,
  `map_min` varchar(150) NOT NULL,
  `spo` varchar(150) NOT NULL,
  `spo_min` varchar(150) NOT NULL,
  `changing` varchar(150) NOT NULL,
  `describing` text NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `etco_val` varchar(150) NOT NULL,
  `spo_val` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_discharge`
--

CREATE TABLE IF NOT EXISTS `sur_discharge` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `mane` varchar(150) NOT NULL,
  `primar` varchar(150) NOT NULL,
  `history` text NOT NULL,
  `physical` text NOT NULL,
  `lab` varchar(150) NOT NULL,
  `dia_1` varchar(150) NOT NULL,
  `icd_1` varchar(150) NOT NULL,
  `dia_2` varchar(150) NOT NULL,
  `icd_2` varchar(150) NOT NULL,
  `dia_3` varchar(150) NOT NULL,
  `icd_3` varchar(150) NOT NULL,
  `complication` text NOT NULL,
  `treatment` text NOT NULL,
  `recom` varchar(150) NOT NULL,
  `follow` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `transfer` varchar(150) NOT NULL,
  `cause` text NOT NULL,
  `conditio` varchar(150) NOT NULL,
  `provider` varchar(150) NOT NULL,
  `transport` varchar(150) NOT NULL,
  `consultant` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `given` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_drug`
--

CREATE TABLE IF NOT EXISTS `sur_drug` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `wt` int(11) NOT NULL,
  `bsa` int(11) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `alle` varchar(300) NOT NULL,
  `drug` varchar(200) NOT NULL,
  `dose` varchar(200) NOT NULL,
  `freq` varchar(200) NOT NULL,
  `dur` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `date` varchar(300) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_fluid`
--

CREATE TABLE IF NOT EXISTS `sur_fluid` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `drug` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sur_fluid`
--

INSERT INTO `sur_fluid` (`id`, `user_id`, `mrn`, `type`, `rate`, `drug`, `dose`, `sign`, `time`) VALUES
(1, 8, 2, 'fghfg', 'cghfx', 'pojkjk', 'kjlkjpoj', 'jiojoij', '2015-06-09 11:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `sur_fluid_chart`
--

CREATE TABLE IF NOT EXISTS `sur_fluid_chart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `fluid_chart` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_insulin`
--

CREATE TABLE IF NOT EXISTS `sur_insulin` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `start_1` int(11) NOT NULL,
  `insulin_1` varchar(150) NOT NULL,
  `end_1` int(11) NOT NULL,
  `start_2` int(11) NOT NULL,
  `insulin_2` varchar(150) NOT NULL,
  `end_2` int(11) NOT NULL,
  `start_3` int(11) NOT NULL,
  `insulin_3` varchar(150) NOT NULL,
  `end_3` int(11) NOT NULL,
  `start_4` int(11) NOT NULL,
  `insulin_4` varchar(150) NOT NULL,
  `end_4` int(11) NOT NULL,
  `start_5` int(11) NOT NULL,
  `insulin_5` varchar(150) NOT NULL,
  `end_5` int(11) NOT NULL,
  `more` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL,
  `give` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_lab`
--

CREATE TABLE IF NOT EXISTS `sur_lab` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc` varchar(150) NOT NULL,
  `lab` text NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_need`
--

CREATE TABLE IF NOT EXISTS `sur_need` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `need` varchar(150) NOT NULL,
  `drug` varchar(150) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `freq` varchar(150) NOT NULL,
  `inst` varchar(150) NOT NULL,
  `rfa` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `sign` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_nu`
--

CREATE TABLE IF NOT EXISTS `sur_nu` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_operative`
--

CREATE TABLE IF NOT EXISTS `sur_operative` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `opertaion` varchar(150) NOT NULL,
  `pre` varchar(150) NOT NULL,
  `surgeon` varchar(150) NOT NULL,
  `anasth` varchar(150) NOT NULL,
  `other` varchar(150) NOT NULL,
  `anesthesiologist` varchar(150) NOT NULL,
  `blood_loss` varchar(150) NOT NULL,
  `blood_trans` varchar(150) NOT NULL,
  `drains` varchar(150) NOT NULL,
  `specimens` varchar(150) NOT NULL,
  `indications` varchar(150) NOT NULL,
  `discription` text NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `sterile_nurse` varchar(150) NOT NULL,
  `circulating_nurse` varchar(150) NOT NULL,
  `account` varchar(150) NOT NULL,
  `instrument` varchar(150) NOT NULL,
  `Sponge` varchar(150) NOT NULL,
  `needle` varchar(150) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_ord`
--

CREATE TABLE IF NOT EXISTS `sur_ord` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `order` varchar(300) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_physical`
--

CREATE TABLE IF NOT EXISTS `sur_physical` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `children` varchar(200) NOT NULL,
  `no_children` int(200) NOT NULL,
  `habits` varchar(200) NOT NULL,
  `other` varchar(200) NOT NULL,
  `allergy` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `reaction` varchar(200) NOT NULL,
  `reaction_comment` varchar(200) NOT NULL,
  `present` varchar(200) NOT NULL,
  `surgery` varchar(200) NOT NULL,
  `family` varchar(200) NOT NULL,
  `psychosocial` varchar(200) NOT NULL,
  `number_1` varchar(200) NOT NULL,
  `dose_1` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `wt` varchar(200) NOT NULL,
  `ht` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `pluse` varchar(200) NOT NULL,
  `rr` varchar(200) NOT NULL,
  `genera` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `head_comment` varchar(200) NOT NULL,
  `chest` varchar(200) NOT NULL,
  `chest_comment` varchar(200) NOT NULL,
  `heart` varchar(200) NOT NULL,
  `heart_comment` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `abdomen_comment` varchar(200) NOT NULL,
  `neurological` varchar(200) NOT NULL,
  `neurological_comment` varchar(200) NOT NULL,
  `findings` varchar(200) NOT NULL,
  `findings_comment` varchar(200) NOT NULL,
  `muscu` varchar(200) NOT NULL,
  `psy` varchar(200) NOT NULL,
  `psy_comment` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `status_comment` varchar(200) NOT NULL,
  `diagnosis` varchar(200) NOT NULL,
  `icd` varchar(200) NOT NULL,
  `plane` varchar(200) NOT NULL,
  `risk` varchar(200) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` datetime NOT NULL,
  `muscu_comment` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_prog`
--

CREATE TABLE IF NOT EXISTS `sur_prog` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `obse` varchar(200) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `eva` varchar(200) NOT NULL,
  `time` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_rad`
--

CREATE TABLE IF NOT EXISTS `sur_rad` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `clinc` varchar(250) NOT NULL,
  `other_skull` varchar(250) NOT NULL,
  `preg` varchar(250) NOT NULL,
  `skull` varchar(250) NOT NULL,
  `orbit` varchar(250) NOT NULL,
  `mastoid` varchar(250) NOT NULL,
  `pns` varchar(250) NOT NULL,
  `tmj` varchar(250) NOT NULL,
  `mandible` varchar(250) NOT NULL,
  `carvical` varchar(250) NOT NULL,
  `dorsal` varchar(250) NOT NULL,
  `lumbar` varchar(250) NOT NULL,
  `lumbo` varchar(250) NOT NULL,
  `coccyx` varchar(250) NOT NULL,
  `joint` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  `ribs` varchar(250) NOT NULL,
  `clavical` varchar(250) NOT NULL,
  `pelvis` varchar(250) NOT NULL,
  `hip` varchar(250) NOT NULL,
  `acet` varchar(250) NOT NULL,
  `femur` varchar(250) NOT NULL,
  `patella` varchar(250) NOT NULL,
  `tibia` varchar(250) NOT NULL,
  `ankle` varchar(250) NOT NULL,
  `feet` varchar(250) NOT NULL,
  `calc` varchar(250) NOT NULL,
  `shoulder` varchar(250) NOT NULL,
  `humerus` varchar(250) NOT NULL,
  `elbow` varchar(250) NOT NULL,
  `forearm` varchar(250) NOT NULL,
  `wrist` varchar(250) NOT NULL,
  `hand` varchar(250) NOT NULL,
  `view` varchar(250) NOT NULL,
  `lary` varchar(250) NOT NULL,
  `asopharynx` varchar(250) NOT NULL,
  `chest` varchar(250) NOT NULL,
  `gland` varchar(250) NOT NULL,
  `abdo` varchar(250) NOT NULL,
  `put` varchar(250) NOT NULL,
  `micturating` varchar(250) NOT NULL,
  `ivu` varchar(250) NOT NULL,
  `infusion` varchar(250) NOT NULL,
  `antegrade` varchar(250) NOT NULL,
  `retrograde` varchar(250) NOT NULL,
  `cyto` varchar(250) NOT NULL,
  `cts` varchar(250) NOT NULL,
  `cts_other` varchar(250) NOT NULL,
  `us` varchar(250) NOT NULL,
  `us_other` varchar(250) NOT NULL,
  `breast` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `color_other` varchar(250) NOT NULL,
  `upper` varchar(250) NOT NULL,
  `lower` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sur_rel`
--

CREATE TABLE IF NOT EXISTS `sur_rel` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `sub` varchar(250) NOT NULL,
  `edu` varchar(250) NOT NULL,
  `res` varchar(250) NOT NULL,
  `sign` varchar(250) NOT NULL,
  `time` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_req`
--

CREATE TABLE IF NOT EXISTS `sur_req` (
  `id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `spe` varchar(150) NOT NULL,
  `from_sp` varchar(150) NOT NULL,
  `reason` text NOT NULL,
  `sign` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sur_risk`
--

CREATE TABLE IF NOT EXISTS `sur_risk` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `high` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `low` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age_point` int(11) DEFAULT NULL,
  `history` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `history_point` int(11) DEFAULT NULL,
  `bowel` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bowel_point` int(11) DEFAULT NULL,
  `medication` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medication_point` int(11) DEFAULT NULL,
  `care` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `care_point` int(11) DEFAULT NULL,
  `mobility` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobility_point` int(11) DEFAULT NULL,
  `cogntion` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cogntion_point` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `dr_sign` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sur_voise`
--

CREATE TABLE IF NOT EXISTS `sur_voise` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mrn` int(11) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `time` datetime NOT NULL,
  `voise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` int(11) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `section_id`, `role_id`, `name`, `phone`, `user_name`, `password`, `last_login`, `active`) VALUES
(2, 1, 1, 'Mohamed Abdullah', '01111941908', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1436093453, 0),
(3, 3, 2, 'Ahmed', '2552', 'doctor', '202cb962ac59075b964b07152d234b70', 1433842489, 1),
(4, 4, 3, 'Nada', '02555566', 'nurse', '202cb962ac59075b964b07152d234b70', 1436093629, 1),
(5, 5, 4, 'Mohamed', '56463', 'res', '202cb962ac59075b964b07152d234b70', 1432049142, 1),
(6, 6, 5, 'Ali', '25646', 'cons', '202cb962ac59075b964b07152d234b70', 1430816299, 1),
(7, 7, 6, 'mohamed', '025154584', 'nut', '202cb962ac59075b964b07152d234b70', 1430752548, 1),
(8, 8, 7, 'mohamed', '981298198', 'kamatcho', '202cb962ac59075b964b07152d234b70', 1433942035, 1),
(9, 9, 8, 'emr', '01014434786', 'emr', '202cb962ac59075b964b07152d234b70', 1434385391, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_trams_fusion`
--
ALTER TABLE `blood_trams_fusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons`
--
ALTER TABLE `cons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_ana`
--
ALTER TABLE `doc_ana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_clinical`
--
ALTER TABLE `doc_clinical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_discharge`
--
ALTER TABLE `doc_discharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_drug`
--
ALTER TABLE `doc_drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_fluid`
--
ALTER TABLE `doc_fluid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_fluid_chart`
--
ALTER TABLE `doc_fluid_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_insulin`
--
ALTER TABLE `doc_insulin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_lab`
--
ALTER TABLE `doc_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_need`
--
ALTER TABLE `doc_need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_nu`
--
ALTER TABLE `doc_nu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_operative`
--
ALTER TABLE `doc_operative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_ord`
--
ALTER TABLE `doc_ord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_physical`
--
ALTER TABLE `doc_physical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_prog`
--
ALTER TABLE `doc_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_rad`
--
ALTER TABLE `doc_rad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_records`
--
ALTER TABLE `doc_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_recovery`
--
ALTER TABLE `doc_recovery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_rel`
--
ALTER TABLE `doc_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_req`
--
ALTER TABLE `doc_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_risk`
--
ALTER TABLE `doc_risk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_voise`
--
ALTER TABLE `doc_voise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr`
--
ALTER TABLE `emr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_ana`
--
ALTER TABLE `emr_ana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_clinical`
--
ALTER TABLE `emr_clinical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_discharge`
--
ALTER TABLE `emr_discharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_drug`
--
ALTER TABLE `emr_drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_fluid`
--
ALTER TABLE `emr_fluid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_fluid_chart`
--
ALTER TABLE `emr_fluid_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_insulin`
--
ALTER TABLE `emr_insulin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_lab`
--
ALTER TABLE `emr_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_need`
--
ALTER TABLE `emr_need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_nu`
--
ALTER TABLE `emr_nu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_operative`
--
ALTER TABLE `emr_operative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_ord`
--
ALTER TABLE `emr_ord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_physical`
--
ALTER TABLE `emr_physical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_prog`
--
ALTER TABLE `emr_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_rad`
--
ALTER TABLE `emr_rad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_records`
--
ALTER TABLE `emr_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_recovery`
--
ALTER TABLE `emr_recovery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_rel`
--
ALTER TABLE `emr_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_req`
--
ALTER TABLE `emr_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_risk`
--
ALTER TABLE `emr_risk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emr_voise`
--
ALTER TABLE `emr_voise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitor_ring`
--
ALTER TABLE `monitor_ring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_asses`
--
ALTER TABLE `nur_asses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_care`
--
ALTER TABLE `nur_care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_drug`
--
ALTER TABLE `nur_drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_eva`
--
ALTER TABLE `nur_eva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_fluid`
--
ALTER TABLE `nur_fluid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_need`
--
ALTER TABLE `nur_need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_notes`
--
ALTER TABLE `nur_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_pain`
--
ALTER TABLE `nur_pain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_sheet`
--
ALTER TABLE `nur_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_sign_in`
--
ALTER TABLE `nur_sign_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_sign_out`
--
ALTER TABLE `nur_sign_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_time_out`
--
ALTER TABLE `nur_time_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_vital`
--
ALTER TABLE `nur_vital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nur_voise`
--
ALTER TABLE `nur_voise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutration`
--
ALTER TABLE `nutration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_in_put_chart`
--
ALTER TABLE `out_in_put_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `put_chart_day`
--
ALTER TABLE `put_chart_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_info`
--
ALTER TABLE `res_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_release`
--
ALTER TABLE `res_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur`
--
ALTER TABLE `sur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_ana`
--
ALTER TABLE `sur_ana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_clinical`
--
ALTER TABLE `sur_clinical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_discharge`
--
ALTER TABLE `sur_discharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_drug`
--
ALTER TABLE `sur_drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_fluid`
--
ALTER TABLE `sur_fluid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_fluid_chart`
--
ALTER TABLE `sur_fluid_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_insulin`
--
ALTER TABLE `sur_insulin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_lab`
--
ALTER TABLE `sur_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_need`
--
ALTER TABLE `sur_need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_nu`
--
ALTER TABLE `sur_nu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_operative`
--
ALTER TABLE `sur_operative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_ord`
--
ALTER TABLE `sur_ord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_physical`
--
ALTER TABLE `sur_physical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_prog`
--
ALTER TABLE `sur_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_rad`
--
ALTER TABLE `sur_rad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_rel`
--
ALTER TABLE `sur_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_req`
--
ALTER TABLE `sur_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_risk`
--
ALTER TABLE `sur_risk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sur_voise`
--
ALTER TABLE `sur_voise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blood_trams_fusion`
--
ALTER TABLE `blood_trams_fusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cons`
--
ALTER TABLE `cons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `doc_ana`
--
ALTER TABLE `doc_ana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc_clinical`
--
ALTER TABLE `doc_clinical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc_discharge`
--
ALTER TABLE `doc_discharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doc_drug`
--
ALTER TABLE `doc_drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doc_fluid`
--
ALTER TABLE `doc_fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doc_fluid_chart`
--
ALTER TABLE `doc_fluid_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doc_insulin`
--
ALTER TABLE `doc_insulin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doc_lab`
--
ALTER TABLE `doc_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc_need`
--
ALTER TABLE `doc_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doc_nu`
--
ALTER TABLE `doc_nu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doc_operative`
--
ALTER TABLE `doc_operative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doc_ord`
--
ALTER TABLE `doc_ord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doc_physical`
--
ALTER TABLE `doc_physical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doc_prog`
--
ALTER TABLE `doc_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doc_rad`
--
ALTER TABLE `doc_rad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc_records`
--
ALTER TABLE `doc_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc_recovery`
--
ALTER TABLE `doc_recovery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc_rel`
--
ALTER TABLE `doc_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doc_req`
--
ALTER TABLE `doc_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doc_risk`
--
ALTER TABLE `doc_risk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doc_voise`
--
ALTER TABLE `doc_voise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emr`
--
ALTER TABLE `emr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_ana`
--
ALTER TABLE `emr_ana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_clinical`
--
ALTER TABLE `emr_clinical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_discharge`
--
ALTER TABLE `emr_discharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_drug`
--
ALTER TABLE `emr_drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_fluid`
--
ALTER TABLE `emr_fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_fluid_chart`
--
ALTER TABLE `emr_fluid_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_insulin`
--
ALTER TABLE `emr_insulin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_lab`
--
ALTER TABLE `emr_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_need`
--
ALTER TABLE `emr_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_nu`
--
ALTER TABLE `emr_nu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_operative`
--
ALTER TABLE `emr_operative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_ord`
--
ALTER TABLE `emr_ord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_physical`
--
ALTER TABLE `emr_physical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_prog`
--
ALTER TABLE `emr_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_rad`
--
ALTER TABLE `emr_rad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_records`
--
ALTER TABLE `emr_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_recovery`
--
ALTER TABLE `emr_recovery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_rel`
--
ALTER TABLE `emr_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_req`
--
ALTER TABLE `emr_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_risk`
--
ALTER TABLE `emr_risk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emr_voise`
--
ALTER TABLE `emr_voise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monitor_ring`
--
ALTER TABLE `monitor_ring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `nur_asses`
--
ALTER TABLE `nur_asses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nur_care`
--
ALTER TABLE `nur_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nur_drug`
--
ALTER TABLE `nur_drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nur_eva`
--
ALTER TABLE `nur_eva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nur_fluid`
--
ALTER TABLE `nur_fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nur_need`
--
ALTER TABLE `nur_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nur_notes`
--
ALTER TABLE `nur_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nur_pain`
--
ALTER TABLE `nur_pain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nur_sheet`
--
ALTER TABLE `nur_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nur_sign_in`
--
ALTER TABLE `nur_sign_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nur_sign_out`
--
ALTER TABLE `nur_sign_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nur_time_out`
--
ALTER TABLE `nur_time_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nur_vital`
--
ALTER TABLE `nur_vital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nur_voise`
--
ALTER TABLE `nur_voise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nutration`
--
ALTER TABLE `nutration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `out_in_put_chart`
--
ALTER TABLE `out_in_put_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `put_chart_day`
--
ALTER TABLE `put_chart_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `res_info`
--
ALTER TABLE `res_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `res_release`
--
ALTER TABLE `res_release`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sur`
--
ALTER TABLE `sur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sur_ana`
--
ALTER TABLE `sur_ana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_clinical`
--
ALTER TABLE `sur_clinical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_discharge`
--
ALTER TABLE `sur_discharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_drug`
--
ALTER TABLE `sur_drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_fluid`
--
ALTER TABLE `sur_fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sur_fluid_chart`
--
ALTER TABLE `sur_fluid_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_insulin`
--
ALTER TABLE `sur_insulin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_lab`
--
ALTER TABLE `sur_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_need`
--
ALTER TABLE `sur_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_nu`
--
ALTER TABLE `sur_nu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_operative`
--
ALTER TABLE `sur_operative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_ord`
--
ALTER TABLE `sur_ord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_physical`
--
ALTER TABLE `sur_physical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_prog`
--
ALTER TABLE `sur_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_rad`
--
ALTER TABLE `sur_rad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_rel`
--
ALTER TABLE `sur_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_req`
--
ALTER TABLE `sur_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_risk`
--
ALTER TABLE `sur_risk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sur_voise`
--
ALTER TABLE `sur_voise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
