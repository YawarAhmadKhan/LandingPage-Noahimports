-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 06:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newlandingmurry`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutheader`
--

CREATE TABLE `aboutheader` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `paragraph` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutheader`
--

INSERT INTO `aboutheader` (`id`, `title`, `paragraph`) VALUES
(1, 'About us', 'Start working with Deprixa that can provide everything you need to generate awareness, drive traffic, connect.');

-- --------------------------------------------------------

--
-- Table structure for table `aboutsteps`
--

CREATE TABLE `aboutsteps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `paragraph` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutsteps`
--

INSERT INTO `aboutsteps` (`id`, `title`, `paragraph`, `image`) VALUES
(1, 'Step 1', 'Connect your store and send us your products. ', NULL),
(4, 'Chose', 'Chose Detail', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `aboutsteptext`
--

CREATE TABLE `aboutsteptext` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `paragraph` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutsteptext`
--

INSERT INTO `aboutsteptext` (`id`, `title1`, `title2`, `paragraph`) VALUES
(1, 'Work Process', 'HOW TO GET STARTED WITH DEPRIXA FULFILLMENT', 'Start working with Deprixa that can provide everything you need to generate awareness, drive traffic, connect.');

-- --------------------------------------------------------

--
-- Table structure for table `aboutunderheader`
--

CREATE TABLE `aboutunderheader` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `btntext` varchar(255) DEFAULT NULL,
  `btnurl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutunderheader`
--

INSERT INTO `aboutunderheader` (`id`, `image`, `year`, `title`, `paragraph`, `btntext`, `btnurl`) VALUES
(1, 'recurso9.png', '15', 'Zain Goraya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting remaining essentially unchanged. ', 'contact', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `aboutwhynoha`
--

CREATE TABLE `aboutwhynoha` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutwhynoha`
--

INSERT INTO `aboutwhynoha` (`id`, `title`, `description`) VALUES
(1, 'Why Noah Imports', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `clientreview`
--

CREATE TABLE `clientreview` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientreview`
--

INSERT INTO `clientreview` (`id`, `name`, `review`, `image`) VALUES
(1, 'Jhone', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv', '99b1586925457b27d19a4e4622400c3b.jpg'),
(2, 'Sanam', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv', '294-2946730_blue-and-purple-circles-hd-wallpaper-4k-ultra.jpg'),
(3, 'Alex', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv', 'asus-rog-strix-owl-wallpaper.jpg'),
(4, 'Sam', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv', '2e621ebbce10e2eb42e96162cf731077.jpg'),
(5, 'Sova', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv', '294-2946730_blue-and-purple-circles-hd-wallpaper-4k-ultra.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `heading`, `phone`, `address`, `email`) VALUES
(1, 'Get In Touch', '(034) 123 456 789', '123 Fulham, London, SW6 8HS, United Kingdom', 'contact@yourdomain.com');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `firsttext` varchar(255) DEFAULT NULL,
  `firstnum` varchar(255) DEFAULT NULL,
  `secondtext` varchar(255) DEFAULT NULL,
  `secondnum` varchar(255) DEFAULT NULL,
  `thirdtext` varchar(255) DEFAULT NULL,
  `thirdnum` varchar(255) DEFAULT NULL,
  `fourthtext` varchar(255) DEFAULT NULL,
  `fourthnum` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title1`, `title2`, `firsttext`, `firstnum`, `secondtext`, `secondnum`, `thirdtext`, `thirdnum`, `fourthtext`, `fourthnum`) VALUES
(1, 'We are here for you', 'LET US HELP TO YOU TO FIND A SOLUTION THAT MEETS YOUR NEEDS', 'Package Deliverd', '45000', 'Countries Covered', '1080', 'Happy Customer', '8820', 'Year Experience', '23');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'How do I update my Template?', 'If your Template is out of date, you will see a notice on your WordPress Dashboard. Click the notice to get more complete information about the update as well as further instructions on how to update. Note that updates are only available to active members.'),
(2, 'Do memberships include the original PSD files?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,'),
(3, 'How can I purchase a single Template?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,'),
(4, 'New to the Wordpress? Lets get started update?', 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc update.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `paragraph` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `paragraph`) VALUES
(1, 'Copyright Noah Imports - All rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `homeheader`
--

CREATE TABLE `homeheader` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeheader`
--

INSERT INTO `homeheader` (`id`, `logo`, `text`) VALUES
(1, 'envios.png', 'Shipping Ocean and\r\nAir Freight From\r\nChina                                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `homelastbluesection`
--

CREATE TABLE `homelastbluesection` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homelastbluesection`
--

INSERT INTO `homelastbluesection` (`id`, `title1`, `title2`, `logo`) VALUES
(1, 'Buy in the main stores in china', 'AND RECEIVE AT THE DOOR YOUR HOUSE', 'phone_store.png');

-- --------------------------------------------------------

--
-- Table structure for table `homeunderheader`
--

CREATE TABLE `homeunderheader` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeunderheader`
--

INSERT INTO `homeunderheader` (`id`, `logo`, `title1`, `title2`) VALUES
(1, 'recurso9.png', 'Buy, send and bring with us', 'EASY, FAST AND SAFE');

-- --------------------------------------------------------

--
-- Table structure for table `navbarlinks`
--

CREATE TABLE `navbarlinks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbarlinks`
--

INSERT INTO `navbarlinks` (`id`, `title`, `url`) VALUES
(1, 'Home', 'index.php'),
(2, 'Company', 'aboutus.php'),
(3, 'Tracking', 'tracking.php'),
(4, 'Services', 'services-freight.php'),
(6, 'FAQ', 'faq.php'),
(7, 'Contact', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `navbarlogo`
--

CREATE TABLE `navbarlogo` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbarlogo`
--

INSERT INTO `navbarlogo` (`id`, `image`, `url`) VALUES
(1, 'logo.png', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `authName` varchar(255) DEFAULT NULL,
  `authImage` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `authName`, `authImage`, `images`, `title`, `category`, `description`, `tags`, `date`) VALUES
(1, 'Zain Goraya', 'person-with-laptop-male-1597386-1354342.png', '71527035.jpg,Asian Cricket Council Emerging Teams Cup 2013 _2013_08_19_Cheah Cheng Poh_03.jpg,istockphoto-177427917-612x612.jpg', 'PSL Pakistan happening again?', 'sport', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using Content here conten', 'sport-cricket', '19-01-22'),
(2, 'Ali Haider', '20456753.jpg', '2020-12-08T214604Z_1790563263_UP1EGC81OGSC6_RTRMADP_3_SOCCER-CHAMPIONS-FCB-JUV-REPORT-e1607466044149.jpg,1530602768_Q2MmBQ_Isl-Footbal-League-Mumbai-470.jpg,soccer-ball-goal.jpg', 'Football tournament is started! ', 'sport', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using Content here conten', 'football, olympics', '19-01-22'),
(3, 'Test', '294-2946730_blue-and-purple-circles-hd-wallpaper-4k-ultra.jpg', '1-13391_amazing-wallpaper-4k.jpg,2e621ebbce10e2eb42e96162cf731077.jpg,03.-Baker1.jpg', 'TEST', 'TEST', 'TEST', 'gym,fitness', '19-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`) VALUES
(1, 'amazon.svg'),
(2, 'dribbble.svg'),
(3, 'facebook.svg'),
(4, 'google.svg'),
(5, 'instagram.svg'),
(6, 'lenovo.svg'),
(7, 'paypal.svg'),
(8, 'shopify.svg'),
(9, 'spotify.svg'),
(10, 'tinder.svg'),
(12, 'whatsapp.svg');

-- --------------------------------------------------------

--
-- Table structure for table `ratescolumn`
--

CREATE TABLE `ratescolumn` (
  `id` int(11) NOT NULL,
  `col1` varchar(255) DEFAULT NULL,
  `col2` varchar(255) DEFAULT NULL,
  `col3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratescolumn`
--

INSERT INTO `ratescolumn` (`id`, `col1`, `col2`, `col3`) VALUES
(1, 'Destiny', 'Ocean Cargo (Cubic Feet)', 'Air Cargo (Pound)');

-- --------------------------------------------------------

--
-- Table structure for table `ratesrows`
--

CREATE TABLE `ratesrows` (
  `id` int(11) NOT NULL,
  `col1` text DEFAULT NULL,
  `col2` text DEFAULT NULL,
  `col3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratesrows`
--

INSERT INTO `ratesrows` (`id`, `col1`, `col2`, `col3`) VALUES
(1, 'CHINA - PANAMA', 'From $15', 'From $16'),
(2, 'China-Venezuela', 'From $25', 'From $16'),
(3, 'Panama-Venezuela', 'From $17', 'From $4,50');

-- --------------------------------------------------------

--
-- Table structure for table `serviceheader`
--

CREATE TABLE `serviceheader` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceheader`
--

INSERT INTO `serviceheader` (`id`, `title`) VALUES
(1, 'LOGISTICS SOLUTIONS AND SPECIAL EXPERIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `servicelastbluesection`
--

CREATE TABLE `servicelastbluesection` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicelastbluesection`
--

INSERT INTO `servicelastbluesection` (`id`, `image`) VALUES
(1, 'phone_store.png');

-- --------------------------------------------------------

--
-- Table structure for table `servicetabbutton`
--

CREATE TABLE `servicetabbutton` (
  `id` int(11) NOT NULL,
  `button_title` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicetabbutton`
--

INSERT INTO `servicetabbutton` (`id`, `button_title`, `unique_id`) VALUES
(1, 'Check', '1248003406'),
(2, 'Check 2', '115057874');

-- --------------------------------------------------------

--
-- Table structure for table `servicetabcontent`
--

CREATE TABLE `servicetabcontent` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicetabcontent`
--

INSERT INTO `servicetabcontent` (`id`, `title`, `image`, `description`, `unique_id`) VALUES
(1, 'Check', 'recurso9.png', 'Check', '1248003406'),
(2, 'Check 2', 'about2.png', 'Check 2', '115057874');

-- --------------------------------------------------------

--
-- Table structure for table `trackingheader`
--

CREATE TABLE `trackingheader` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackingheader`
--

INSERT INTO `trackingheader` (`id`, `image`) VALUES
(1, 'envios.png');

-- --------------------------------------------------------

--
-- Table structure for table `trackinglastbluesection`
--

CREATE TABLE `trackinglastbluesection` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackinglastbluesection`
--

INSERT INTO `trackinglastbluesection` (`id`, `image`) VALUES
(1, 'phone_store.png');

-- --------------------------------------------------------

--
-- Table structure for table `trackingunderheader`
--

CREATE TABLE `trackingunderheader` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackingunderheader`
--

INSERT INTO `trackingunderheader` (`id`, `title1`, `title2`, `image`) VALUES
(1, 'Buy send and bring with us', 'EASY FAST AND SAFE', 'recurso10.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutheader`
--
ALTER TABLE `aboutheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsteps`
--
ALTER TABLE `aboutsteps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsteptext`
--
ALTER TABLE `aboutsteptext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutunderheader`
--
ALTER TABLE `aboutunderheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutwhynoha`
--
ALTER TABLE `aboutwhynoha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientreview`
--
ALTER TABLE `clientreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeheader`
--
ALTER TABLE `homeheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homelastbluesection`
--
ALTER TABLE `homelastbluesection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeunderheader`
--
ALTER TABLE `homeunderheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbarlinks`
--
ALTER TABLE `navbarlinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbarlogo`
--
ALTER TABLE `navbarlogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratescolumn`
--
ALTER TABLE `ratescolumn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratesrows`
--
ALTER TABLE `ratesrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceheader`
--
ALTER TABLE `serviceheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicelastbluesection`
--
ALTER TABLE `servicelastbluesection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicetabbutton`
--
ALTER TABLE `servicetabbutton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicetabcontent`
--
ALTER TABLE `servicetabcontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackingheader`
--
ALTER TABLE `trackingheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackinglastbluesection`
--
ALTER TABLE `trackinglastbluesection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackingunderheader`
--
ALTER TABLE `trackingunderheader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutheader`
--
ALTER TABLE `aboutheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutsteps`
--
ALTER TABLE `aboutsteps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutsteptext`
--
ALTER TABLE `aboutsteptext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutunderheader`
--
ALTER TABLE `aboutunderheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutwhynoha`
--
ALTER TABLE `aboutwhynoha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clientreview`
--
ALTER TABLE `clientreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeheader`
--
ALTER TABLE `homeheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homelastbluesection`
--
ALTER TABLE `homelastbluesection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeunderheader`
--
ALTER TABLE `homeunderheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navbarlinks`
--
ALTER TABLE `navbarlinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `navbarlogo`
--
ALTER TABLE `navbarlogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ratescolumn`
--
ALTER TABLE `ratescolumn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratesrows`
--
ALTER TABLE `ratesrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `serviceheader`
--
ALTER TABLE `serviceheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicelastbluesection`
--
ALTER TABLE `servicelastbluesection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicetabbutton`
--
ALTER TABLE `servicetabbutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servicetabcontent`
--
ALTER TABLE `servicetabcontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trackingheader`
--
ALTER TABLE `trackingheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trackinglastbluesection`
--
ALTER TABLE `trackinglastbluesection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trackingunderheader`
--
ALTER TABLE `trackingunderheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
