-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 10:07 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger_info`
--

CREATE TABLE IF NOT EXISTS `blogger_info` (
  `blogger_id` int(20) NOT NULL,
  `blogger_username` varchar(30) NOT NULL,
  `blogger_password` varchar(30) NOT NULL,
  `blogger_creation_date` date NOT NULL,
  `blogger_is_active` tinyint(1) NOT NULL DEFAULT '0',
  `blogger_updated_date` date NOT NULL,
  `blogger_end_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogger_info`
--

INSERT INTO `blogger_info` (`blogger_id`, `blogger_username`, `blogger_password`, `blogger_creation_date`, `blogger_is_active`, `blogger_updated_date`, `blogger_end_date`) VALUES
(1, 'ishu63', 'ishu', '2015-08-24', 0, '2015-08-24', NULL),
(2, 'richa', 'richa', '2015-08-24', 0, '2015-08-24', NULL),
(3, 'rohit', 'rohit', '2015-09-03', 0, '2015-09-03', NULL),
(4, 'arshpreet', 'pabala', '2015-09-03', 0, '2015-09-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE IF NOT EXISTS `blog_master` (
  `blog_id` int(20) NOT NULL,
  `blogger_id` int(20) NOT NULL,
  `blog_title` varchar(30) NOT NULL,
  `blog_category` varchar(30) NOT NULL,
  `blog_desc` varchar(2000) NOT NULL,
  `blog_image` blob,
  `blog_is_active` tinyint(1) NOT NULL DEFAULT '0',
  `creation_date` date NOT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_master`
--

INSERT INTO `blog_master` (`blog_id`, `blogger_id`, `blog_title`, `blog_category`, `blog_desc`, `blog_image`, `blog_is_active`, `creation_date`, `updated_date`) VALUES
(2, 2, 'vgtsh', 'bgfbg', 'tghbfyn', 0x4e6f2d496d6167652d417661696c61626c652e6a7067, 1, '2015-08-31', '2015-08-31'),
(3, 2, 'hello', ' dfgg', 'ddsegvrdg', 0x4e6f2d496d6167652d417661696c61626c652e6a7067, 0, '2015-08-31', '2015-09-09'),
(5, 4, 'GOLF', 'games', 'If you have ever golfed, you''ve gotten golf advice and golf swing tips but do you listen? For this weeks blog, we take a lighthearted look at the truth behind how golfers interpret golf swing tips. How is your swing? Have your shots ever looked like this? If so, maybe consider joining The Players Club at your local golf course and getting free Green Fees, free time on the range, and free weekly lessons. We all need a little help with our game sometimes:<br>\r\n1. Try to hold your finish <br>\r\n2. Move father away from the ball<br>\r\n3. Make sure to hit short putts with pace<br>\r\n3.  Keep a low center of gravity with the ball below your feet<br>\r\n4. Pick a spot between your ball and the target to help you line up<br>', 0x476f6c66312e6a7067, 1, '2015-09-03', '2015-09-03'),
(6, 3, 'Dubai!!!!!!!!', 'General Knowladge', 'Dubai is a cosmopolitan city with a widely diverse population of people from many different backgrounds. There is much to do here: the city has a vibrant night life, a plethora of restaurants that feature cuisines from different parts of the world, art exhibits from aspiring local artists as well as reputable international artists as well as many entertainment options including concerts and fashion shows. For the avid explorer, there are many places to see; some are popular tourist destinations while others are hidden jewels that are less well known. To discover Dubaiâ€™s many hidden secrets, an increasing number of residents are turning to blogs, which provide useful information, personal reviews and advice from bloggers on a variety of topics including places to see, things to do and the best way to really know and discover everything this emirate has to offer.<br />\r\n', 0x64756261692e6a7067, 0, '2015-09-08', '2015-09-08'),
(7, 3, 'KingFisher', 'Birds', 'Kingfishers are a group of small to medium-sized brightly colored birds in the order Coraciiformes. They have a cosmopolitan distribution, with most species found outside of the Americas. The group is treated either as a single family, Alcedinidae, or as a suborder Alcedines containing three families, Alcedinidae (river kingfishers), Halcyonidae (tree kingfishers), and Cerylidae (water kingfishers). There are roughly 90 species of kingfisher. All have large heads, long, sharp, pointed bills, short legs, and stubby tails. Most species have bright plumage with little differences between the sexes. Most species are tropical in distribution, and a slight majority are found only in forests. They consume a wide range of prey as well as fish, usually caught by swooping down from a perch. While kingfishers are usually thought to live near rivers and eat fish, most of the kingfisher species in the world live away from water and eat small invertebrates. ', 0x4b696e676669736865722e6a7067, 0, '2015-09-08', '2015-09-08'),
(8, 3, 'Pation', 'Photography', 'Photography is the science, art and practice of creating durable images by recording light or other electromagnetic radiation, either electronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film.<br />\r\n<br />\r\nTypically, a lens is used to focus the light reflected or emitted from objects into a real image on the light-sensitive surface inside a camera during a timed exposure. With an electronic image sensor, this produces an electrical charge at each pixel, which is electronically processed and stored in a digital image file for subsequent display or processing. The result with photographic emulsion is an invisible latent image, which is later chemically "developed" into a visible image, either negative or positive depending on the purpose of the photographic material and the method of processing. A negative image on film is traditionally used to photographically create a positive image on a paper base, known as a print, either by using an enlarger or by contact printing.<br />\r\n', 0x576f6d656e735f43616d6572615f50686f746f6772617068792e6a7067, 1, '2015-09-08', '2015-09-08'),
(9, 4, 'Jogging', 'Health', 'the activity of running at a steady, gentle pace as a form of physical exercise.<br />\r\n"some gentle jogging for a few weeks before the event should prevent any aching or stiffness"<br />\r\n<br />\r\nJogging or running is a popular form of physical activity. Regular running builds strong bones, improves cardiovascular fitness and helps to maintain a healthy weight. The difference between running and jogging is intensity, but both are forms of aerobic exercise.<br />\r\n<br />\r\nRegular running or jogging offers many health benefits. Running can: help to build strong bones, as it is a weight -bearing exercise <br />\r\n-strengthen muscles <br />\r\n-improve cardiovascular fitness <br />\r\n-burn plenty of kilojoules <br />\r\n-help maintain a healthy weight.<br />\r\n', 0x696d616765315f203136343234383830392e6a7067, 0, '2015-09-08', '2015-09-08'),
(10, 4, 'Basic facts about Hummingbirds', 'Birds', 'Hummingbirds are small, colorful birds with iridescent feathers. Their name comes from the fact that they flap their wings so fast (about 80 times per second) that they make a humming noise. Hummingbirds can fly right, left, up, down, backwards, and even upside down. They are also able to hover by flapping their wings in a figure-8 pattern. They have a specialized long and tapered bill that is used to obtain nectar from the center of long, tubular flowers. The hummingbirdâ€™s feet are used for perching only, and are not used for hopping or walking.', 0x6262622e6a7067, 0, '2015-09-08', '2015-09-08'),
(11, 4, 'Thailand', 'Contry', 'Thai culture is deeply influenced by religion. With around 95% of the country being Theraveda Buddhist, the belief system and values of Buddhism play a huge role in day-to-day life. Throughout the country, the most important values that Thai people hold to are respect, self-control, and a non-confrontational attitude.<br />\r\nFor many travelers, Bangkok is the first stop on travels in Thailand and throughout Southeast Asia. <br />\r\nThai customs are easily overlooked in Bangkok. Respect the local people by knowing these ten cultural points before you embark on travels in Thailand. ', 0x544853524e5f544841494c414e445f31363632313031672e6a7067, 1, '2015-09-08', '2015-09-08'),
(12, 2, 'Night Photography tool', 'Photography', 'What are our tools in night photography?<br />\r\n1.Tripod. While not always necessary (see further on for how to cheat on this), a tripod will give you the greatest flexibility to get the angles you need while keeping your camera steady for those long exposures.<br />\r\n2.Wide-angle lenses. This is a personal preference, but I love the way they work in night photography. I use Canonâ€™s 10-22mm f/3.5-4.5 ($700), but if you can afford it Iâ€™d get the Canon 16-35mm f/2.8L II ($1300). If both of these are out of your price range â€“ donâ€™t worry! Try it out with whatever youâ€™ve got as the only thing that will limit you is your imagination.<br />\r\n3.A lens hood. To minimize lens flares from light entering at angles outside of your frame.<br />\r\n4.A flashlight. Sometimes youâ€™ll want to draw attention to or simply lighten up an important part of the foreground which is too dark.<br />\r\n5.Our imagination. Tools lie all around us in everyday objects to help us make our work better in this; Iâ€™ve used bicycle lamps, lampposts and newspaper boxes to get it done.', 0x332d6e696768742d70686f746f6772617068792e707265766965772e6a7067, 0, '2015-09-08', '2015-09-09'),
(13, 2, 'Holi', 'Festival', 'Holi is a spring festival, also known as the festival of colours or the festival of love.It is an ancient Hindu religious festival which has become popular with non-Hindus in many parts of South Asia, as well as people of other communities outside Asia.<br />\r\nIt is primarily observed in India, Nepal and other regions of the world with significant populations of Hindus or people of indian origin.In recent years the festival has spread to parts of Europe and North America as a spring celebration of love, frolic, and colours.', 0x486f6c696769726c2e6a7067, 0, '2015-09-08', '2015-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger_info`
--
ALTER TABLE `blogger_info`
  ADD PRIMARY KEY (`blogger_id`);

--
-- Indexes for table `blog_master`
--
ALTER TABLE `blog_master`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blogger_id` (`blogger_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger_info`
--
ALTER TABLE `blogger_info`
  MODIFY `blogger_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
  MODIFY `blog_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_master`
--
ALTER TABLE `blog_master`
  ADD CONSTRAINT `blog_master_ibfk_1` FOREIGN KEY (`blogger_id`) REFERENCES `blogger_info` (`blogger_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
