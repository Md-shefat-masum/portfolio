-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2019 at 01:05 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shefat_my_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutmes`
--

CREATE TABLE `aboutmes` (
  `aboutme_id` int(10) UNSIGNED NOT NULL,
  `aboutme_slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutme_heading` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutme_photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutme_details` text COLLATE utf8mb4_unicode_ci,
  `aboutme_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutme_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutmes`
--

INSERT INTO `aboutmes` (`aboutme_id`, `aboutme_slug`, `aboutme_heading`, `aboutme_photo`, `aboutme_details`, `aboutme_link`, `aboutme_status`, `created_at`, `updated_at`) VALUES
(1, 'MA205c57023c1b6b0', 'about me', 'aboutme_1_1559464103.jpg', '🔷 HI, i\'m Md.SHEFAT&nbsp;<br><br>🔷 Web Full&nbsp;Stack Developer<br><br><span>I am a Ceritified professional full stack web developer. I graduated B.Sc. in CSE from Bangladesh Institute of Science and Technology ( BIST ) , DHAKA. Then I Have completed Front end and Back end&nbsp;Web Development&nbsp; from Creative It and&nbsp;Creative Shaper Institute&nbsp;Bangladesh. I am working on web design and development Industry quite while now. My website designs are exclusively Unique &amp; hand coded, Fully Responsive, 100% all browser compatible &amp; Easily customizable. and developed back end to much more user interface.<br><img alt=\"\" src=\"https://scontent.fdac18-1.fna.fbcdn.net/v/t1.0-9/52713853_149940525939846_1060633777086136320_n.png?_nc_cat=110&amp;_nc_ht=scontent.fdac18-1.fna&amp;oh=b50679106b4c8d5afe46c079c1e620a4&amp;oe=5D2045ED\"><br></span>', 'http://mdshefat.com', 1, NULL, '2019-06-02 09:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donners`
--

CREATE TABLE `blood_donners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `skype` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `donner_role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blood_donner',
  `last_donnet` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donner_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donner_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_donners`
--

INSERT INTO `blood_donners` (`id`, `name`, `blood_group`, `mobile_no`, `email`, `fb_address`, `address`, `website`, `skype`, `twitter`, `linkedin`, `donner_role`, `last_donnet`, `birth_date`, `donner_image`, `slug`, `donner_status`, `created_at`, `updated_at`) VALUES
(17, 'Muhammad Shefat Ullah', 'O+', '01646376015', 'mshefat924@gmail.com', 'https://www.facebook.com/profile.php?id=100007517444767', 'paterbagh, sonirakhra, kodomtoli.', 'http://mdshefat.com/', 'masum shefat', '#', '#', 'blood_donner', '2018-08-10', '1995-02-14', 'Muhammad Shefat Ullahdonner205d07d8ad85bcc_1560795309.png', 'donner205d07d8ad85bcc', 1, '2019-06-17 18:15:09', '2019-06-17 18:50:41'),
(18, 'Monirul Islam', 'O+', '01670742167', 'monirul@gmail.com', 'https://www.facebook.com/monirulislam.jibon.73', 'rampura, dhaka', '', '', '', '', 'blood_donner', '2019-01-01', '1995-01-28', 'Monirul Islamdonner205d07f6138ce76_1560802835.JPG', 'donner205d07f6138ce76', 1, '2019-06-17 20:20:35', '2019-06-17 20:20:35'),
(19, 'mahfuza akter timu', 'B+', '01960879696', 'mahfuzarahmantimu@gmail.com', 'https://www.facebook.com/profile.php?id=100011159130722', 'bondor, narayangonj', '', '', '', '', 'blood_donner', '2018-11-01', '1997-07-05', 'mahfuza akter timudonner205d07f900d2474_1560803584.jpg', 'donner205d07f900d2474', 1, '2019-06-17 20:33:04', '2019-06-17 20:33:04'),
(20, 'sk shahriam', 'B+', '01714538423', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d087dc0e4fc5', 1, '2019-06-18 05:59:28', NULL),
(21, 'akash das', 'O+', '019150012831', 'aakash.das.002@gmail.com', 'https://www.facebook.com/aakashdas95', 'badda', '', '', '', '', 'blood_donner', '2018-11-11', '1995-12-16', 'akash das_donner205d087e50e45e8_1560845081.jpg', 'donner205d087e50e45e8', 1, '2019-06-18 06:01:52', '2019-06-18 08:04:41'),
(22, 'najim mahmud', 'A+', '01791742668', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d087ebaf238f', 1, '2019-06-18 06:03:38', NULL),
(23, 'fatema roja', 'B+', '01629101845', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d087efbde41f', 1, '2019-06-18 06:04:43', NULL),
(24, 'fatema bint farha', 'A+', '01623397772', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d087f5b00d3d', 1, '2019-06-18 06:06:19', NULL),
(25, 'TAJRINTABASSUM', 'A+', '01623060935', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d087fa798c3e', 1, '2019-06-18 06:07:35', NULL),
(26, 'CHOWDHURY SABIT', 'B+', '01792993098', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0880cc7e7f0', 1, '2019-06-18 06:12:28', NULL),
(27, 'SAIKAT SEN', 'A+', '01717529587', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08813b46871', 1, '2019-06-18 06:14:19', NULL),
(28, 'AJAD AL MAMUN', 'A+', '01674373480', 'azadalmamun2021@gmail.com', 'https://www.facebook.com/azadalmamun.mamun', 'cittagang road, narayan gonj', '', '', '', '', 'blood_donner', '2018-08-11', '1994-04-28', 'AJAD AL MAMUN_donner205d088173b9911_1560844820.jpg', 'donner205d088173b9911', 1, '2019-06-18 06:15:15', '2019-06-18 08:00:20'),
(29, 'SAFAYAT TANJIL', 'O+', '01851076293', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0881f577eff', 1, '2019-06-18 06:17:25', NULL),
(30, 'ETHIYAN JAMAN', 'B+', '01680637184', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08823586ce3', 1, '2019-06-18 06:18:29', NULL),
(31, 'ALAUDDIN', 'B+', '01639634221', 'himalazad22@gmail.com', 'https://www.facebook.com/profile.php?id=100007336158209&lst=100007517444767%3A100007336158209%3A1560845406&sk=timeline', 'malibagh', '', '', '', '', 'blood_donner', '2018-05-05', '1996-01-01', 'ALAUDDIN_donner205d0882790ccf1_1560845734.jpg', 'donner205d0882790ccf1', 1, '2019-06-18 06:19:37', '2019-06-18 08:15:34'),
(32, 'MORTUJA SAJID', 'AB+', '01942283535', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0882cdc018d', 1, '2019-06-18 06:21:01', NULL),
(33, 'NISAS AHMED', 'B+', '01779262834', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08831283aca', 1, '2019-06-18 06:22:10', NULL),
(34, 'TAMANNA RAHMAN', 'B+', '01533853570', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08833c71077', 1, '2019-06-18 06:22:52', NULL),
(35, 'ANKI AHMED', 'AB+', '01646760574', 'ahmedankhi7@gmail.com', 'https://www.facebook.com/prokritirnill', 'bondor, narayangonj', '', '', '', '', 'blood_donner', '2018-01-01', '1996-11-04', 'ANKI AHMED_donner205d0883737dc5e_1560846485.jpg', 'donner205d0883737dc5e', 1, '2019-06-18 06:23:47', '2019-06-18 08:28:05'),
(36, 'NASIN HOSSAIN', 'AB+', '01813247036', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0883bc18ff4', 1, '2019-06-18 06:25:00', NULL),
(37, 'R. K. TANIA', 'B-', '01794669247', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0883f444784', 1, '2019-06-18 06:25:56', NULL),
(38, 'AFSANA MIMI', 'B+', '01624063910', 'afsana.mimiblm2017@gmail.com', 'https://www.facebook.com/profile.php?id=100015530197490&lst=100007517444767%3A100015530197490%3A1560842715&sk=timeline', 'badda', '', '', '', '', 'blood_donner', '2018-11-11', '1996-12-02', 'AFSANA MIMI_donner205d08842131bff_1560843030.jpg', 'donner205d08842131bff', 1, '2019-06-18 06:26:41', '2019-06-18 07:30:30'),
(39, 'TASANA HABIB', 'B+', '01758885731', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d088462d59d7', 1, '2019-06-18 06:27:46', NULL),
(40, 'SHAWON SARKAR', 'O-', '01675702831', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08848c6f427', 1, '2019-06-18 06:28:28', NULL),
(41, 'AMRIT PAL SIBU', 'A+', '01970488800', 'amrithpalsibu567@gmail.com', 'https://www.facebook.com/ayusman.arush', 'uttar badda', '', '', '', '', 'blood_donner', '2018-05-01', '1994-10-08', 'AMRIT PAL SIBU_donner205d0884c45795f_1560846258.jpg', 'donner205d0884c45795f', 1, '2019-06-18 06:29:24', '2019-06-18 08:24:18'),
(42, 'FARHANA SOHAG', 'B+', '01865620260', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0884fc2bf70', 1, '2019-06-18 06:30:20', NULL),
(43, 'HABIBULLAH RAKIB', 'B-', '01775319179', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08852b6cd66', 1, '2019-06-18 06:31:07', NULL),
(44, 'NAHIDUL HASAN', 'O+', '01841424029', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08855663625', 1, '2019-06-18 06:31:50', NULL),
(45, 'RIMEL HOSAIN', 'A+', '01840844746', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08858058473', 1, '2019-06-18 06:32:32', NULL),
(46, 'ABU EHSAN', 'O-', '01683382241', 'rupomehsan34@gmail.com', 'https://www.facebook.com/rupom.hasan.77/timeline?lst=100007517444767%3A100004105545216%3A1560842012', 'jurain, jatrabari', '', '', '', '', 'blood_donner', '2018-11-15', '1996-04-14', 'ABU EHSANdonner205d0885a54fc1d_1560842440.jpg', 'donner205d0885a54fc1d', 1, '2019-06-18 06:33:09', '2019-06-25 17:46:02'),
(47, 'LOKMAN ALI LIHHON', 'A+', '01752066147', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0885d2d6418', 1, '2019-06-18 06:33:54', NULL),
(48, 'ALMAS', 'B+', '01554562071', 'musakhan101101@gmail.com', 'https://www.facebook.com/profile.php?id=100007701810209', 'mirpur 10', '', '', '', '', 'blood_donner', '2018-11-01', '1994-04-03', 'ALMAS_donner205d0885f66d894_1560845970.jpg', 'donner205d0885f66d894', 1, '2019-06-18 06:34:30', '2019-06-18 08:19:30'),
(49, 'ASHRAF EMON', 'B+', '01982411208', 'ashraf.emon143@gmail.com', 'https://www.facebook.com/ashraf.emon143', 'badda , rampura', '', '', '', '', 'blood_donner', '2018-06-14', '1995-09-25', 'ASHRAF EMON_donner205d08861cbfe13_1560846667.jpg', 'donner205d08861cbfe13', 1, '2019-06-18 06:35:08', '2019-06-18 08:31:07'),
(50, 'HAFSA BINT SAMAD', 'O+', '01927695223', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d088644db1b8', 1, '2019-06-18 06:35:48', NULL),
(51, 'SADDAM HOSSAIN', 'O+', '01771615649', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08866d1ac54', 1, '2019-06-18 06:36:29', NULL),
(52, 'TOFAJJOL HOSSAIN', 'A+', '01684636096', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0886a4d3260', 1, '2019-06-18 06:37:24', NULL),
(53, 'ATIK', 'B+', '01916175669', 'Atiquekhan962@gmail.com', 'https://www.facebook.com/profile.php?id=100004976444214', 'kuril,dhaka, bangladesh', '', '', '', '', 'blood_donner', '2018-03-10', '1993-06-14', 'ATIK_donner205d0886c87182d_1560846919.jpg', 'donner205d0886c87182d', 1, '2019-06-18 06:38:00', '2019-06-18 08:35:19'),
(54, 'SIFAT ANJUM', 'A+', '01838099748', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d0886f2c6c6e', 1, '2019-06-18 06:38:42', NULL),
(55, 'SOHAN', 'O+', '01722335587', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08871193b5d', 1, '2019-06-18 06:39:13', NULL),
(56, 'TISHA', 'O+', '01780358580', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08873c371e0', 1, '2019-06-18 06:39:56', NULL),
(57, 'SHEFAT NIPA', 'B+', '01689880506', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08876f20019', 1, '2019-06-18 06:40:47', NULL),
(58, 'MAHFUJA AKTER', 'B+', '01960879696', '', '', '', '', '', '', '', 'blood_donner', '', '', '', 'donner205d08879717935', 1, '2019-06-18 06:41:27', NULL),
(59, 'jinat khan Tania', 'A+', '01746637054', 'tonnesarasaiful123@gmail.com', 'https://www.facebook.com/jinat.khan.12935', 'badda , rampura', '', '', '', '', 'blood_donner', '2018-01-01', '1993-11-20', 'jinat khan Tania_donner205d0a776aed780_1560967018.jpg', 'donner205d0a776aed780', 1, '2019-06-19 17:56:58', '2019-06-19 17:57:52'),
(60, ' Faujia Oishee', 'B+', '01950159378', 'Faujiaakhteroishee@gmail.com', 'https://www.facebook.com/faujia.oishee', 'malibagh', '', '', '', '', 'blood_donner', '2018-01-01', '1996-06-30', ' Faujia Oishee_donner205d0a78c37291b_1560967363.jpg', 'donner205d0a78c37291b', 1, '2019-06-19 18:02:43', '2019-06-19 18:02:43'),
(61, 'Mohidul Islam', 'A+', '01625075211', 'mohidul.nu@gmail.com', 'https://www.facebook.com/ifat.mohit', 'doyagonj, dhaka', '', 'Mohidul Islam', '', '', 'blood_donner', '2018-01-21', '1995-07-02', 'Mohidul Islam_donner205d10c52237428_1561380255.jpg', 'donner205d10c52237428', 1, '2019-06-24 22:42:10', '2019-06-24 22:44:15'),
(62, 'Md Yousuf', 'B+', '01791276703', 'mayousufmcc156@gmai.com', 'https://www.facebook.com/YousufIbnHossen', 'zigatola, danmondi', '', '', '', '', 'blood_donner', '2019-03-27', '1999-05-17', 'Md Yousuf_donner205d11d0783b3a7_1561448694.jpg', 'donner205d11d0783b3a7', 1, '2019-06-25 17:42:48', '2019-06-25 17:44:54'),
(63, 'Md enamul haque', 'A+', '01732358124', 'enamulhaque0701@gmail.com', '-', 'Jatra bari', '', '', '', '', 'blood_donner', '2018-06-01', '1996-11-01', 'Md enamul haque_donner205d1eece67b9f2_1562307814.jpg', 'donner205d1eece67b9f2', 1, '2019-07-05 16:23:34', '2019-07-05 16:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subject` text COLLATE utf8mb4_unicode_ci,
  `contact_message` text COLLATE utf8mb4_unicode_ci,
  `contact_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_slug`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_status`, `created_at`, `updated_at`) VALUES
(1, 'Vm255cf388e156a55', 'sdfsdaf', 'shefat@gmail.com', 'asdfsdf', 'adsfasdf', 0, '2019-06-02 08:29:21', '2019-06-02 08:40:58'),
(2, 'Vm255cf389e188959', 'sdfsdaf', 'shefat@gmail.com', 'asdfsdf', 'adsfasdf', 0, '2019-06-02 08:33:37', '2019-06-02 08:40:58'),
(3, 'Vm255cf38a89c1149', 'ds', 'adsf@gmail.com', 'asdfsdf', 'asdfsadf', 0, '2019-06-02 08:36:25', '2019-06-02 08:40:58'),
(4, 'Vm255cf38b4861aec', 'ds', 'adsf@gmail.com', 'asdfsdf', 'asdfsadf', 0, '2019-06-02 08:39:36', '2019-06-02 08:40:58'),
(5, 'Vm255d12bb3331154', 'mdshefat.com', 'micgyhaelDit@gmail.com', 'Look at niceoffering for you. mdshefat.com', 'Please note an interesting  gift for victory. mdshefat.com \r\nhttp://bit.ly/2KBCt7t', 1, '2019-06-26 10:24:19', NULL),
(6, 'Vm255d14379b855c9', 'Charlesnuh', 'gulfsrv94@gmail.com', 'Process for Benefit', 'Hello!, mdshefat.com \r\n \r\nOur customer want to invest in your district for good returns. \r\n \r\nPlease contact us for more information on  +973 650 09688 or mh@indobsc.com \r\n \r\nBest regards \r\nMr. Mat Hernandez', 1, '2019-06-27 13:27:23', NULL),
(7, 'Vm255d195c66d73e7', 'ContactForm', 'raphaetourtunty@gmail.com', 'Do you want cheap and innovative advertising for little money?', 'Hi!  mdshefat.com \r\n \r\nWe suggest \r\n \r\nSending your message through the feedback form which can be found on the sites in the Communication partition. Feedback forms are filled in by our program and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This technique raise the probability that your message will be read. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +44 7598 509161 \r\nEmail - FeedbackForm@make-success.com', 1, '2019-07-01 11:05:42', NULL),
(8, 'Vm255d1fee05b67cf', 'Harrv Dubois', 'animatedvideos33@gmail.com', 'Animated video in 2019?', 'Hi there, I just came across your website and wanted to get in touch. \r\n \r\nI run an animation studio that makes animated explainer videos helping companies to explain what they do, why it matters and how they\'re unique in less than 2 minutes. \r\n \r\nThis is our portfolio: \r\nhttp://bit.ly/30109GY  - what do you think about it? \r\n \r\nI would be very interested in creating a great animated video for your company. \r\n \r\nWe have a smooth production process and handle everything needed for a high-quality video that typically takes us 6 weeks to produce from start to finish. \r\n \r\nFirst, we nail the script, design storyboards you can’t wait to see animated. Voice actors in your native language that capture your brand and animation that screams premium with sound design that brings it all together. \r\n \r\nOur videos are made from scratch and designed to make you stand out and get results. No templates, no cookie cutter animation that tarnishes your brand. \r\n \r\nIf you’re interested in learning more, please get in touch on the email below: \r\nEmail: storybitevideos@gmail.com \r\n \r\nThank you for your attention.', 1, '2019-07-06 10:40:37', NULL),
(9, 'Vm255d21f5414d1dc', 'mdshefat.com', 'mdshefat.com@domstat.su', 'mdshefat.com', '', 1, '2019-07-07 23:36:01', NULL),
(10, 'Vm255d238ab2530da', 'mdshefat.com', 'micgyhaelDit@gmail.com', 'Look at histrionichint in behalf of winning. mdshefat.com', 'Truce note an galvanizing  winnings seeking your team. mdshefat.com \r\nhttp://bit.ly/2KvMbZ2', 1, '2019-07-09 04:25:54', NULL),
(11, 'Vm255d2499a0c0342', 'ContactForm', 'raphaetourtunty@gmail.com', 'Do you want cheap and innovative advertising for little money?', 'Hello!  mdshefat.com \r\n \r\nWe present oneself \r\n \r\nSending your message through the feedback form which can be found on the sites in the contact partition. Feedback forms are filled in by our application and the captcha is solved. The advantage of this method is that messages sent through feedback forms are whitelisted. This method improve the chances that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +44 7598 509161 \r\nEmail - FeedbackForm@make-success.com', 1, '2019-07-09 23:41:52', NULL),
(12, 'Vm255d249fd5e94db', 'JesusSip', 'edithsdesk@gmail.com', 'I would like to purchase from you', 'Hi, \r\n \r\nI would like to purchase your product  please sell it on https://zolango.com  where there is a whole niche of customers just waiting to pay in BitCoin. \r\n \r\nhttps://zolango.com  is The Home of CryptoCommerce.', 1, '2019-07-10 00:08:21', NULL),
(13, 'Vm255d29ec6b81bdc', '', '', '', '', 1, '2019-07-14 00:36:27', NULL),
(14, 'Vm255d307b1b11161', 'Robertexoge', 'notifymenow4@gmail.com', 'DR D.K OLUKOYA PRAYERLINE', 'JOIN Daily FIRE PRAYERS and INSPIRING TEACHINGS & SERMONS of DR D.K OLUKOYA. \r\n \r\nDownload MFM Sermons NG mobile app on Google Playstore or TAP here http://bit.ly/MFMSermonsNGAPP \r\n \r\nMFM Sermons NG \r\n...inspiring SERMONS, FIRE PRAYERS!! \r\n \r\nShalom!', 1, '2019-07-18 23:58:51', NULL),
(15, 'Vm255d31e63ab67a3', 'mdshefat.com', 'micgyhaelDit@gmail.com', 'Mark aggressive outburst with laughter note a top-gradeoffers in circumstances of your team. mdshefat.com', 'Here is  enjoyably  small payment against your team. mdshefat.com \r\nhttp://bit.ly/2NL3o49', 1, '2019-07-20 01:48:10', NULL),
(16, 'Vm255d3630b261f4c', 'Alfredceath', 'easyguestpost2019@gmail.com', 'Paid guest post on your site', 'Hello, \r\nI don’t want to waste your time so I’ll go straight to the point: we are looking for paid guest post opportunities on websites as yours. The guest post is an informative article, consistent with your editorial plan, that links to a relevant website. We normally provide you with an article and pay a fee for this activity \r\nI apologize for this unusual first contact, before going on we will of course provide you with any needed information about our SEO agency and our activity \r\nIf you are interested please send a mail to paidguestposts@gmail.com mentioning the name of the websites where you accept to be paid in order to publish guest posts. \r\nBest regards', 1, '2019-07-23 07:54:58', NULL),
(17, 'Vm255d3759277f6c1', 'mdshefat.com', 'micgyhaelDit@gmail.com', 'Look at a seemlypreferable as a exigency execrate to victory. mdshefat.com', 'Here is  a tangibles  triggered as a cure-all scrupulous in search your team. mdshefat.com \r\nhttp://bit.ly/2NJuUil', 1, '2019-07-24 04:59:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_31_201145_create_contacts_table', 2),
(4, '2019_02_01_194445_create_aboutmes_table', 3),
(5, '2019_06_17_031409_create_blood_donners_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shefat', 'shefat@gmail.com', NULL, '$2y$10$R7v1lUkjVrgrQBdcZHNCS.J2POoc6mcFbAyXb9GtYLSJzlDtGrEsW', 'd9jtbiztew4eoDi6JaPYDCZO48dNdh3eFOhHqqedXBSN2AcMNPoFi4bmHnT6', '2019-01-31 09:46:40', '2019-01-31 09:46:40'),
(2, 'timu', 'timu@gmail.com', NULL, '$2y$10$nylucSSqPOA5/tOFfaenLu9P36fFl5NQtvj46UtclSDxdfiUbmwNW', 'kieJSPKsQrpysBW3uNb9HyDU3LTmj61NhwTakwximgotTAdgVU16P8B0A2vB', '2019-01-31 13:44:59', '2019-01-31 13:44:59'),
(3, 'nahiyan', 'nahiyan@gmail.com', NULL, '$2y$10$z1/AVcqfKtwxaG7epDdO8uXp5nr4sGF4f3q3WJCqKfxTMoqhz.kzC', 'MX6s77UoDyCSzKVxOKXbvUFHozWKtZ9tuBoOWJ24byXJbjuTgJp5XIODXeKU', '2019-01-31 13:46:32', '2019-01-31 13:46:32'),
(4, 'intu', 'intu@gmail.com', NULL, '$2y$10$Xoaj9aJVJtwwtc4uAMhOguNAbh2NVX.Jo5T39jdjqLh8WVXNVqMri', NULL, '2019-01-31 13:48:51', '2019-01-31 13:48:51'),
(5, 'shefat', 'shefat2@gmail.com', NULL, '$2y$10$Adw43PmoHPtU2TXLCufQh.jc/FTcGGrxGsoFagdkqef88rRatZHMy', 'x7Afzy6insFePGizRoOjARWLO0aRKVPnKfuUZUDush8TLk6GpGdvpneTjB21', '2019-06-02 08:25:13', '2019-06-02 08:25:13'),
(6, 'donner', 'donner@blood.com', '2019-06-27 11:17:16', 'e10adc3949ba59abbe56e057f20f883e', '017jL5LP0hHZL4CNxg5em1a3x9LkzZW77x1y1qiLGXx2S7aRWYe88PDLsFrb', '2019-06-12 06:05:19', '2019-06-13 14:17:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutmes`
--
ALTER TABLE `aboutmes`
  ADD PRIMARY KEY (`aboutme_id`);

--
-- Indexes for table `blood_donners`
--
ALTER TABLE `blood_donners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutmes`
--
ALTER TABLE `aboutmes`
  MODIFY `aboutme_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_donners`
--
ALTER TABLE `blood_donners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
