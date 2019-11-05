-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2019 at 04:24 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saigon_star2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `published_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `status`, `featured`, `created_at`, `updated_at`, `tags`, `published_date`) VALUES
(1, 0, 1, 'My First Blog Post', NULL, 'An example blog post', '<p>Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.</p>\n<p>Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.</p>', NULL, 'my-first-blog-post', 'A test blog post', 'PUBLISHED', 0, '2019-10-27 02:46:30', '2019-10-27 02:46:30', NULL, '2018-05-11 00:00:00'),
(2, 0, 1, 'My Second Blog Post', NULL, 'An example blog post', '<p>Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.</p>\n<p>Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.</p>', NULL, 'my-second-blog-post', 'A test blog post', 'PUBLISHED', 0, '2019-10-27 02:46:30', '2019-10-27 02:46:30', NULL, '2018-05-11 00:00:00'),
(3, 2, NULL, 'Weekly email from SaiGon Star to Parents - 10th October 2019', NULL, 'Dear Parents and Guardians', '<p><span style="color: #333333; font-family: \'Fira Sans Condensed\', sans-serif; font-size: 16px; background-color: #f3f3f3;">Dear Parents and Guardians, Meet the SLT Thank you to those parents who attended the ...</span></p>', NULL, 'weekly-email-from-saigon-star-to-parents-10th-october-2019', 'meta_description', 'DRAFT', 0, '2019-10-27 18:15:12', '2019-10-27 18:15:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-10-27 02:46:31', '2019-10-27 02:46:31'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-10-27 02:46:31', '2019-10-27 02:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculums`
--

INSERT INTO `curriculums` (`id`, `title`, `excerpt`, `body`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'International Early Years Curriculum', 'For students aged 2-5', '<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">For students aged 2-5, we follow the International Early Years Curriculum, enhanced by daily Montessori classes.</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Learning Principles</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">The IEYC is designed around eight learning principles, that we consider essential to children&rsquo;s learning and development.</p>\r\n<ol style="box-sizing: inherit; padding-left: 0px; margin-block-start: 0em; margin-block-end: 0em; padding-inline-start: 0px; margin-left: 16px; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">\r\n<li style="box-sizing: border-box;">The earliest years of life are important in their own right.</li>\r\n<li style="box-sizing: border-box;">Children should be supported to learn and develop at their own unique pace.</li>\r\n<li style="box-sizing: border-box;">Play is an essential aspect of all children&rsquo;s learning and development.</li>\r\n<li style="box-sizing: border-box;">Learning happens when developmentally-appropriate, teacher-scaffolded and child initiated experiences harness children&rsquo;s natural curiosity in an enabling environment.</li>\r\n<li style="box-sizing: border-box;">Independent and interdependent learning experiences create a context for personal development and are the foundation of international mindedness.</li>\r\n<li style="box-sizing: border-box;">Knowledge and skills development lead to an increasing sense of understanding when children are provided with opportunities to explore and express their ideas in multiple ways.</li>\r\n<li style="box-sizing: border-box;">Ongoing assessment, in the form of evaluation and reflection, is effective when it involves a learning-link with the home.</li>\r\n<li style="box-sizing: border-box;">Learning should be motivating, engaging and fun, opening up a world of wonder for children where personal interests can flourish.</li>\r\n</ol>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">&nbsp;</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Learning Strands</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">The IEYC is built around four Learning Strands that underpin all learning and development:</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">1. Independence and interdependence</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">2 Communicating</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">3 Enquiring</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">4 Healthy living and physical wellbeing</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Each unit of learning links all four of these Learning Strands to relevant and engaging activities that can be adapted and extended to meet individual needs.</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Units of Learning</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Units currently include topics such as:&nbsp;To The Rescue!, This is Me, The Brilliant Bug Ball, Weather Wonders, Dinosaur Detectives, Ocean Treasure, Once Upon a Time&nbsp;and&nbsp;Animal Rescuers.</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">The units are based around exciting themes aimed to capture children&rsquo;s natural curiosity.</p>', NULL, 'international-early-years-curriculum', '2019-10-31 12:01:01', '2019-10-31 12:01:01'),
(2, 'International Primary Curriculum', 'For students aged 5-11', '<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">For students aged 5-11, Saigon Star delivers the International Primary Curriculum. The school adopted this curriculum in 2013 and became the first IPC-accredited school in Vietnam in July 2018.</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Learning Goals</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">The learning goals are the foundation on which the International Primary Curriculum is built. The IPC provides children with subject goals, personal learning goals, and uniquely, international learning goals, and these are defined for each age phase:</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Subject Goals</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Subject goals&nbsp;cover the knowledge, skills and understanding of children relating to the subjects they are learning. There are subject learning goals for Language Arts, Mathematics, Science, ICT &amp; Computing, Technology, History, Geography, Music, Physical Education, Art and Society.</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Personal Goals</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Personal goals&nbsp;underpin the individual qualities and dispositions we believe children will find essential in the 21st century. There are 8 IPC Personal Goals - enquiry, resilience, morality, communication, thoughtfulness, cooperation, respect and adaptability. Opportunities to experience and practice these are built into the learning tasks within each unit of work.</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">International Learning Goals</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">International learning goals&nbsp;are unique to our curriculum and help young children begin the move towards an increasingly sophisticated national, international and intercultural perspective. Each thematic IPC unit includes an international aspect, to help develop a sense of &lsquo;international mindedness&rsquo;.</p>\r\n<h2 style="box-sizing: inherit; font-weight: 300; color: #0082f3; text-rendering: optimizelegibility; clear: both; margin-top: 0px; font-size: 2em; line-height: 1.4em; margin-bottom: 20px; font-family: \'Open Sans\';">Units of Learning</h2>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">We know that children learn best when they want to learn. That\'s why IPC has over 130 different thematic units of learning, designed to appeal to children&rsquo;s interests and help them to learn more about the world around them.</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Themes include: Who Am I?, The Magic Toymaker, Buildings, Chocolate, Active Planet, Young Entrepreneurs, Mission to Mars,and&nbsp;What Price Progress.</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Themed units help children to see how subjects are both independent and interdependent. This enables them to see the big picture of their learning, make connections across different subjects, and talk about a topic from multiple perspectives.</p>', NULL, 'international-primary-curriculum', '2019-10-31 12:32:13', '2019-10-31 12:32:13'),
(3, 'International Middle Year Curriculum', 'For students aged 11-14', '<p dir="ltr" style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">For students aged 11-14, students develop their knowledge, skills and understanding in Art, Geography, History, Science and Technology through the International Middle Years Curriculum (IMYC).</p>\r\n<p dir="ltr" style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">Students learn through five units during the course of each academic year. Each of these units is centered around a \'Big Idea\', takes approximately six weeks to complete and culminates in a media presentation where children have the opportunity to showcase their learning to their family, peers and even the local community.</p>\r\n<p style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">The IMYC is a challenging, engaging, internationally-minded, and concept-focused curriculum. It is unique in that it addresses the question: What kind of people do we want our students to develop into? It is purposefully designed for the adolescent brain to help students make the transition from primary to secondary without becoming disengaged from their learning, to make meaning of their learning, to make connections with prior knowledge and to learn to take risks in an organised, safe and structured environment.</p>\r\n<p dir="ltr" style="box-sizing: inherit; margin: 0px 0px 15px; line-height: 1.6; color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px; text-align: center;"><em style="box-sizing: inherit;">&ldquo;The IMYC is more than just a set of subject activities. It is a transformative and broad curriculum; it builds a culture and community focused on inspiring and engaging students, and supporting their learning needs. Learning happens everywhere, in school, at home and even on vacation as students take responsibility for their own learning.&rdquo;</em></p>', NULL, 'international-middle-year-curriculum', '2019-10-31 12:33:14', '2019-10-31 12:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '""', 1),
(23, 4, 'author_id', 'text', 'Author ID', 1, 0, 0, 0, 0, 0, '""', 2),
(24, 4, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '""', 3),
(25, 4, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '""', 4),
(26, 4, 'body', 'hidden', 'Body', 0, 0, 1, 1, 1, 1, '""', 5),
(27, 4, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{"slugify":{"origin":"title"},"validation":{"rule":"unique:pages,slug"}}', 6),
(28, 4, 'meta_description', 'text', 'Meta Description', 0, 0, 1, 1, 1, 1, '""', 7),
(29, 4, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{"default":"INACTIVE","options":{"INACTIVE":"INACTIVE","ACTIVE":"ACTIVE"}}', 8),
(30, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '""', 9),
(31, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '""', 10),
(32, 4, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '""', 11),
(33, 5, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '""', 1),
(34, 5, 'mailto', 'text', 'mailto', 1, 1, 1, 1, 1, 1, '""', 2),
(35, 5, 'hook', 'text', 'hook', 1, 1, 1, 1, 1, 1, '""', 3),
(36, 5, 'layout', 'text', 'layout', 1, 1, 1, 1, 1, 1, '""', 4),
(37, 5, 'email_template', 'text', 'email_template', 1, 1, 1, 1, 1, 1, '""', 5),
(38, 5, 'message_success', 'text', 'message_success', 1, 1, 1, 1, 1, 1, '""', 6),
(39, 5, 'created_at', 'text', 'created_at', 1, 1, 1, 1, 1, 1, '""', 7),
(40, 5, 'updated_at', 'text', 'updated_at', 1, 1, 1, 1, 1, 1, '""', 8),
(41, 7, 'form_id', 'text', 'form_id', 1, 1, 1, 1, 1, 1, '""', 1),
(42, 7, 'mailto', 'text', 'mailto', 1, 1, 1, 1, 1, 1, '""', 3),
(43, 7, 'ip_address', 'text', 'ip_address', 1, 1, 1, 1, 1, 1, '""', 4),
(44, 7, 'created_at', 'text', 'created_at', 1, 1, 1, 1, 1, 1, '""', 6),
(45, 7, 'updated_at', 'text', 'updated_at', 1, 1, 1, 1, 1, 1, '""', 7),
(46, 8, 'author_id', 'select_dropdown', 'Author', 0, 0, 1, 1, 1, 1, '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}', 2),
(47, 8, 'category_id', 'select_dropdown', 'Category', 0, 0, 1, 1, 1, 1, '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}', 2),
(48, 8, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '""', 1),
(49, 8, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '""', 4),
(50, 8, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '""', 5),
(51, 8, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '""', 6),
(52, 8, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}', 7),
(53, 8, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{"slugify":{"origin":"title","forceUpdate":true},"validation":{"rule":"unique:blog_posts,slug"}}', 8),
(54, 8, 'meta_description', 'text_area', 'meta_description', 0, 0, 1, 1, 1, 1, '""', 9),
(55, 8, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}', 11),
(56, 8, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '""', 12),
(57, 8, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '""', 13),
(58, 8, 'tags', 'text_area', 'Tags', 0, 0, 1, 1, 1, 1, '""', 14),
(59, 8, 'published_date', 'date', 'Published Date', 0, 1, 1, 1, 1, 1, '{"format":"%Y-%m-%d","validation":{"rules":["required_if:status:PUBLISHED","date_format:YYYY-MM-DD"]}}', 15),
(60, 9, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '""', 1),
(61, 9, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}', 2),
(62, 9, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{"default":1}', 3),
(63, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '""', 4),
(64, 9, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{"slugify":{"origin":"name"}}', 5),
(65, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '""', 6),
(66, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '""', 7),
(67, 4, 'layout', 'checkbox', 'Layout', 0, 0, 1, 1, 1, 1, '""', 12),
(68, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(69, 10, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(70, 10, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
(71, 10, 'active', 'text', 'Active', 1, 1, 1, 1, 1, 1, '{}', 5),
(72, 10, 'location', 'text', 'Location', 1, 1, 1, 1, 1, 1, '{}', 6),
(73, 10, 'file_path', 'text', 'File Path', 0, 1, 1, 1, 1, 1, '{}', 7),
(74, 10, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(75, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(76, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(114, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '""', 1),
(115, 20, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '""', 2),
(116, 20, 'excerpt', 'text_area', 'Excerpt', 1, 1, 1, 1, 1, 1, '""', 3),
(117, 20, 'body', 'rich_text_box', 'Body', 1, 1, 1, 1, 1, 1, '""', 4),
(118, 20, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}', 5),
(119, 20, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{"slugify":{"origin":"title","forceUpdate":true},"validation":{"rule":"unique:curriculums,slug"}}', 6),
(120, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(121, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(122, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '""', 1),
(123, 21, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '""', 2),
(124, 21, 'excerpt', 'text_area', 'Excerpt', 1, 1, 1, 1, 1, 1, '""', 3),
(125, 21, 'body', 'rich_text_box', 'Body', 1, 1, 1, 1, 1, 1, '""', 4),
(126, 21, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}', 5),
(127, 21, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{"slugify":{"origin":"title","forceUpdate":true},"validation":{"rule":"unique:testimonials,slug"}}', 6),
(128, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(129, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-10-27 01:54:03', '2019-10-27 01:54:03'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-10-27 01:54:03', '2019-10-27 01:54:03'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-10-27 01:54:03', '2019-10-27 01:54:03'),
(4, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'Pvtl\\VoyagerPages\\Page', NULL, '\\Pvtl\\VoyagerPages\\Http\\Controllers\\PageController', NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}', '2019-10-27 01:54:23', '2019-10-31 14:53:00'),
(5, 'forms', 'forms', 'Form', 'Forms', 'voyager-documentation', 'Pvtl\\VoyagerForms\\Form', NULL, '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController', NULL, 1, 0, NULL, '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(6, 'inputs', 'inputs', 'Input', 'Inputs', 'voyager-documentation', 'Pvtl\\VoyagerForms\\FormInput', NULL, '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController', NULL, 1, 0, NULL, '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(7, 'enquiries', 'enquiries', 'Enquiry', 'Enquiries', 'voyager-mail', 'Pvtl\\VoyagerForms\\Enquiry', NULL, '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController', NULL, 1, 1, NULL, '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(8, 'blog_posts', 'blog_posts', 'Blog Post', 'Blog Posts', 'voyager-news', 'Pvtl\\VoyagerFrontend\\BlogPost', NULL, '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController', '', 1, 0, NULL, '2019-10-27 02:46:30', '2019-10-27 07:50:32'),
(9, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'Pvtl\\VoyagerBlog\\Category', NULL, '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController', '', 1, 0, NULL, '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(10, 'events', 'events', 'Event', 'Events', NULL, 'App\\Event', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}', '2019-10-27 07:31:52', '2019-10-27 07:31:52'),
(14, 'curriculum', 'curriculum', 'Curriculum', 'Curricula', NULL, 'App\\Curriculum', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}', '2019-10-27 09:33:34', '2019-10-27 09:33:34'),
(20, 'curriculums', 'curriculums', 'Curriculum', 'Curricula', NULL, 'App\\Curriculum', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2019-10-31 11:51:18', '2019-10-31 12:12:30'),
(21, 'testimonials', 'testimonials', 'Testimonial', 'Testimonials', NULL, 'App\\Testimonial', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2019-10-31 11:51:35', '2019-10-31 12:12:13'),
(22, 'page_blocks', 'page-blocks', 'Page Block', 'Page Blocks', 'voyager-file-text', 'Pvtl\\VoyagerPageBlocks\\PageBlock', NULL, '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController', NULL, 1, 0, NULL, '2019-10-31 13:57:42', '2019-10-31 13:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailto` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files_keys` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `form_id`, `data`, `mailto`, `ip_address`, `files_keys`, `created_at`, `updated_at`) VALUES
(1, 1, 'a:4:{s:4:"Name";s:4:"Jack";s:5:"Email";s:16:"lunvjp@gmail.com";s:5:"Phone";s:17:"(+8428) 8800 6996";s:7:"Message";s:4:"HELO";}', 's:28:"voyager.forms@mailinator.com";', '113.161.36.202', 'a:0:{}', '2019-10-27 17:03:59', '2019-10-27 17:03:59'),
(2, 1, 'a:4:{s:4:"Name";s:4:"Jack";s:5:"Email";s:16:"lunvjp@gmail.com";s:5:"Phone";s:17:"(+8428) 8800 6996";s:7:"Message";s:4:"HELO";}', 's:28:"voyager.forms@mailinator.com";', '113.161.36.202', 'a:0:{}', '2019-10-27 17:13:56', '2019-10-27 17:13:56'),
(3, 1, 'a:4:{s:4:"Name";s:4:"Jack";s:5:"Email";s:16:"lunvjp@gmail.com";s:5:"Phone";s:17:"(+8428) 8800 6996";s:7:"Message";s:4:"HELO";}', 's:28:"voyager.forms@mailinator.com";', '113.161.36.202', 'a:0:{}', '2019-10-27 17:15:26', '2019-10-27 17:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailto` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `email_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `message_success` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `title`, `mailto`, `hook`, `layout`, `email_template`, `message_success`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 's:0:"";', NULL, 'default', 'default', 'Success! Thanks for your enquiry.', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(2, 'Tour', 's:17:"momabz6@gmail.com";', NULL, 'default', 'default', 'Success! Thanks for your enquiry.', '2019-10-27 07:29:22', '2019-10-27 07:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `form_inputs`
--

CREATE TABLE `form_inputs` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('text','number','email','text_area','checkbox','select','radio','file') COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `required` tinyint(1) DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '10000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_inputs`
--

INSERT INTO `form_inputs` (`id`, `form_id`, `label`, `class`, `type`, `options`, `required`, `order`, `created_at`, `updated_at`) VALUES
(1, 1, 'Name', NULL, 'text', NULL, 1, 10000, '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(2, 1, 'Email', NULL, 'email', NULL, 1, 10000, '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(3, 1, 'Phone', NULL, 'text', NULL, 1, 10000, '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(4, 1, 'Message', NULL, 'text_area', NULL, 1, 10000, '2019-10-27 02:37:01', '2019-10-27 02:37:01'),
(5, 2, 'Name', NULL, 'text', NULL, 1, 2, '2019-10-27 07:29:22', '2019-10-27 07:35:27'),
(6, 2, 'Email', NULL, 'email', NULL, 1, 3, '2019-10-27 07:29:22', '2019-10-27 07:35:28'),
(7, 2, 'Phone', NULL, 'text', NULL, 1, 4, '2019-10-27 07:29:22', '2019-10-27 07:35:28'),
(8, 2, 'Message', NULL, 'text_area', NULL, 1, 5, '2019-10-27 07:29:23', '2019-10-27 07:35:28'),
(9, 2, NULL, NULL, 'select', NULL, 0, 1, '2019-10-27 07:34:29', '2019-10-27 07:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(2, 'primary', '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(3, 'social', '2019-10-27 02:46:33', '2019-10-27 02:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-10-27 01:54:04', '2019-10-27 01:54:04', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2019-10-27 01:54:04', '2019-10-27 09:09:35', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-10-27 01:54:04', '2019-10-27 01:54:04', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-10-27 01:54:04', '2019-10-27 01:54:04', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2019-10-27 01:54:04', '2019-10-27 14:02:56', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-10-27 01:54:04', '2019-10-27 09:11:50', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, NULL, 11, '2019-10-27 01:54:04', '2019-10-27 14:02:56', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 2, '2019-10-27 01:54:04', '2019-10-27 09:11:52', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, NULL, 12, '2019-10-27 01:54:04', '2019-10-27 14:02:56', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 8, '2019-10-27 01:54:04', '2019-10-27 09:11:48', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 3, '2019-10-27 01:54:04', '2019-10-27 09:11:52', 'voyager.hooks', NULL),
(12, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 6, '2019-10-27 01:54:24', '2019-10-27 09:09:35', 'voyager.pages.index', NULL),
(13, 1, 'Forms', '', '_self', 'voyager-documentation', NULL, NULL, 7, '2019-10-27 02:37:00', '2019-10-27 02:37:00', 'voyager.forms.index', NULL),
(14, 1, 'Form Management', '', '_self', 'voyager-documentation', NULL, 13, 1, '2019-10-27 02:37:00', '2019-10-27 02:37:00', 'voyager.forms.index', NULL),
(15, 1, 'Enquiries', '', '_self', 'voyager-mail', NULL, 13, 2, '2019-10-27 02:37:00', '2019-10-27 02:37:00', 'voyager.enquiries.index', NULL),
(16, 2, 'Blog', '/blog', '_self', NULL, NULL, NULL, 3, '2019-10-27 02:46:30', '2019-10-27 02:46:30', NULL, NULL),
(17, 1, 'Blog', '', '_self', 'voyager-news', NULL, NULL, 5, '2019-10-27 02:46:30', '2019-10-27 02:46:30', NULL, NULL),
(18, 1, 'Posts', '', '_self', 'voyager-news', NULL, 17, 1, '2019-10-27 02:46:30', '2019-10-27 02:46:30', 'voyager.blog_posts.index', NULL),
(19, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 17, 2, '2019-10-27 02:46:30', '2019-10-27 02:46:30', 'voyager.categories.index', NULL),
(20, 2, 'Home', '/home', '_self', '', NULL, NULL, 1, '2019-10-27 02:46:32', '2019-10-27 02:46:32', NULL, NULL),
(21, 2, 'About', '/about', '_self', '', NULL, NULL, 2, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(22, 2, 'Contact', '/contact', '_self', '', NULL, NULL, 3, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(23, 3, 'Facebook', 'https://www.facebook.com/wearepvtl', '_blank', 'fa-facebook-square', NULL, NULL, 1, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(24, 3, 'Twitter', 'https://twitter.com/wearepvtl', '_blank', 'fa-twitter-square', NULL, NULL, 2, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(25, 3, 'Instagram', 'https://www.instagram.com/wearepvtl/', '_blank', 'fa-instagram', NULL, NULL, 3, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(26, 3, 'Google+', 'https://plus.google.com/100970850483584616344', '_blank', 'fa-google-plus-square', NULL, NULL, 4, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(27, 3, 'LinkedIn', 'https://www.linkedin.com/company/pivotal-agency', '_blank', 'fa-linkedin', NULL, NULL, 5, '2019-10-27 02:46:33', '2019-10-27 02:46:33', NULL, NULL),
(28, 1, 'Events', '', '_self', NULL, NULL, NULL, 9, '2019-10-27 07:31:52', '2019-10-27 09:11:48', 'voyager.events.index', NULL),
(38, 1, 'Curricula', '', '_self', NULL, NULL, NULL, 13, '2019-10-31 11:51:21', '2019-10-31 11:51:21', 'voyager.curriculums.index', NULL),
(39, 1, 'Testimonials', '', '_self', NULL, NULL, NULL, 14, '2019-10-31 11:51:38', '2019-10-31 11:51:38', 'voyager.testimonials.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_01_01_000000_add_voyager_user_fields', 1),
(3, '2016_01_01_000000_create_data_types_table', 1),
(4, '2016_05_19_173453_create_menu_table', 1),
(5, '2016_10_21_190000_create_roles_table', 1),
(6, '2016_10_21_190000_create_settings_table', 1),
(7, '2016_11_30_135954_create_permission_table', 1),
(8, '2016_11_30_141208_create_permission_role_table', 1),
(9, '2016_12_26_201236_data_types__add__server_side', 1),
(10, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(11, '2017_01_14_005015_create_translations_table', 1),
(12, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(13, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(14, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(15, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(16, '2017_08_05_000000_add_group_to_settings_table', 1),
(17, '2017_11_26_013050_add_user_role_relationship', 1),
(18, '2017_11_26_015000_create_user_roles_table', 1),
(19, '2018_02_11_224531_create_page_blocks_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_14_230522_create_forms_table', 1),
(23, '2018_03_14_235919_create_form_inputs_table', 1),
(24, '2018_03_15_053024_create_enquiries_table', 1),
(25, '2018_03_16_000000_make_settings_value_nullable', 1),
(26, '2018_04_18_000000_create_blog_posts_table', 1),
(27, '2018_04_18_000000_create_pages_table', 1),
(28, '2018_04_19_224316_add_fields_to_pages_table', 1),
(29, '2018_05_09_000000_create_categories_table', 1),
(30, '2018_05_11_000000_remove_blog_keywords_field', 1),
(31, '2018_05_11_000001_remove_pages_keywords_field', 1),
(32, '2019_10_24_173928_create_events_table', 1),
(33, '2019_10_24_175131_create_parent_testimonials_table', 1),
(34, '2019_10_24_180313_update_users_table', 1),
(35, '2019_10_26_064508_update_events_table', 1),
(36, '2019_10_27_092722_create_curriculum_table', 2),
(37, '2019_10_27_092728_create_testimonials_table', 2),
(38, '2019_10_27_093750_create_curriculums_table', 3),
(39, '2019_10_27_103339_create_curriculums_table', 4),
(40, '2019_10_31_113919_create_curriculums_table', 5),
(41, '2019_10_31_114342_create_testimonials_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `layout` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_blocks`
--

CREATE TABLE `page_blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `type` enum('template','include') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'include',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `is_minimized` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete_denied` tinyint(1) NOT NULL DEFAULT '0',
  `cache_ttl` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '10000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_blocks`
--

INSERT INTO `page_blocks` (`id`, `page_id`, `type`, `path`, `data`, `is_hidden`, `is_minimized`, `is_delete_denied`, `cache_ttl`, `order`, `created_at`, `updated_at`) VALUES
(1, 1, 'template', 'testimonial', '{"content":"Company X is both attractive and highly adaptable. Company X has really helped our business thrive - I can\'t wait to see what comes next for us","title":"John Smith","sub_title":"Founder & CEO","br_1":"null","image":"","br_2":"null","spaces":"3","animate":"on"}', 0, 0, 0, 0, 10000, '2019-10-31 13:57:47', '2019-10-31 13:57:47'),
(2, 1, 'template', 'content_one_column', '{"html_content_1":"<h2 style=\\\\\\"text-align: center;\\\\\\">Welcome to Voyager Frontend<\\/h2><p style=\\\\\\"text-align: center;\\\\\\">Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.<\\/p><p style=\\\\\\"text-align: center;\\\\\\">Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.<\\/p>","spaces":"2","animate":"on"}', 0, 0, 0, 0, 10000, '2019-10-31 13:57:48', '2019-10-31 13:57:48'),
(3, 1, 'template', 'content_two_columns', '{"html_content_1":"<p style=\\\\\\"text-align: left;\\\\\\">Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.<\\/p><p style=\\\\\\"text-align: left;\\\\\\"><\\/p>","html_content_2":"<p><span style=\\\\\\"text-align: center;\\\\\\">Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.<\\/span><\\/p>","spaces":"0","animate":"on"}', 0, 0, 0, 0, 10000, '2019-10-31 13:57:48', '2019-10-31 13:57:48'),
(4, 2, 'template', 'content_one_column', '{"html_content_1":"<p style=\\\\\\"text-align: center;\\\\\\">Matey yardarm topmast broadside nipper weigh anchor jack quarterdeck crow\'s nest rigging. Topgallant lateen sail line avast me gun Pirate Round strike colors bilge rat take a caulk. Jack six pounders spanker doubloon clipper spirits case shot hang the jib boatswain red ensign.<\\/p><p style=\\\\\\"text-align: center;\\\\\\">Hornswaggle spanker spyglass Yellow Jack mutiny Arr lugger poop deck keel take a caulk. Quarter fire ship run a shot across the bow sheet log draft scallywag gally port skysail. Lugsail gangway draft pink piracy bilge Buccaneer heave to landlubber or just lubber Pieces of Eight.<\\/p>","spaces":"2","animate":"on"}', 0, 0, 0, 0, 10000, '2019-10-31 13:57:49', '2019-10-31 13:57:49'),
(5, 3, 'template', 'content_one_column', '{"html_content_1":"<p>You can install the <a href=\\"https:\\/\\/github.com\\/pvtl\\/voyager-forms\\">Voyager Forms<\\/a> module and add the appropriate tag here.<\\/p>","spaces":"1","animate":"on"}', 0, 0, 0, 0, 10000, '2019-10-31 13:57:49', '2019-10-31 13:57:49'),
(6, 39, 'template', 'testimonial', '{"content":"Company X is both attractive and highly adaptable. Company X has really helped our business thrive - I can\'t wait to see what comes next for us.","title":"John Smith","sub_title":"Founder &amp; CEO","br_1":"","image":"","br_2":"","spaces":0,"animate":"on"}', 0, 0, 0, 0, 10000, '2019-10-31 13:59:11', '2019-10-31 13:59:11'),
(7, 39, 'include', '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController::recentBlogPosts()', '""', 0, 0, 0, 0, 10000, '2019-10-31 13:59:25', '2019-10-31 13:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(2, 'browse_bread', NULL, '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(3, 'browse_database', NULL, '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(4, 'browse_media', NULL, '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(5, 'browse_compass', NULL, '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(6, 'browse_menus', 'menus', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(7, 'read_menus', 'menus', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(8, 'edit_menus', 'menus', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(9, 'add_menus', 'menus', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(10, 'delete_menus', 'menus', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(11, 'browse_roles', 'roles', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(12, 'read_roles', 'roles', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(13, 'edit_roles', 'roles', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(14, 'add_roles', 'roles', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(15, 'delete_roles', 'roles', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(16, 'browse_users', 'users', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(17, 'read_users', 'users', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(18, 'edit_users', 'users', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(19, 'add_users', 'users', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(20, 'delete_users', 'users', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(21, 'browse_settings', 'settings', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(22, 'read_settings', 'settings', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(23, 'edit_settings', 'settings', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(24, 'add_settings', 'settings', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(25, 'delete_settings', 'settings', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(26, 'browse_hooks', NULL, '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(27, 'browse_pages', NULL, '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(28, 'read_pages', NULL, '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(29, 'edit_pages', NULL, '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(30, 'add_pages', NULL, '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(31, 'delete_pages', NULL, '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(32, 'browse_pages', 'pages', '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(33, 'read_pages', 'pages', '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(34, 'edit_pages', 'pages', '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(35, 'add_pages', 'pages', '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(36, 'delete_pages', 'pages', '2019-10-27 01:54:24', '2019-10-27 01:54:24'),
(37, 'browse_forms', 'forms', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(38, 'edit_forms', 'forms', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(39, 'add_forms', 'forms', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(40, 'delete_forms', 'forms', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(41, 'browse_inputs', 'form_inputs', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(42, 'read_inputs', 'form_inputs', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(43, 'edit_inputs', 'form_inputs', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(44, 'add_inputs', 'form_inputs', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(45, 'delete_inputs', 'form_inputs', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(46, 'browse_enquiries', 'enquiries', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(47, 'read_enquiries', 'enquiries', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(48, 'delete_enquiries', 'enquiries', '2019-10-27 02:37:00', '2019-10-27 02:37:00'),
(49, 'browse_blog_posts', NULL, '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(50, 'read_blog_posts', NULL, '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(51, 'edit_blog_posts', NULL, '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(52, 'add_blog_posts', NULL, '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(53, 'delete_blog_posts', NULL, '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(54, 'browse_blog_posts', 'blog_posts', '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(55, 'read_blog_posts', 'blog_posts', '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(56, 'edit_blog_posts', 'blog_posts', '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(57, 'add_blog_posts', 'blog_posts', '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(58, 'delete_blog_posts', 'blog_posts', '2019-10-27 02:46:30', '2019-10-27 02:46:30'),
(59, 'browse_categories', 'categories', '2019-10-27 02:46:31', '2019-10-27 02:46:31'),
(60, 'read_categories', 'categories', '2019-10-27 02:46:31', '2019-10-27 02:46:31'),
(61, 'edit_categories', 'categories', '2019-10-27 02:46:31', '2019-10-27 02:46:31'),
(62, 'add_categories', 'categories', '2019-10-27 02:46:31', '2019-10-27 02:46:31'),
(63, 'delete_categories', 'categories', '2019-10-27 02:46:31', '2019-10-27 02:46:31'),
(64, 'browse_events', 'events', '2019-10-27 07:31:52', '2019-10-27 07:31:52'),
(65, 'read_events', 'events', '2019-10-27 07:31:52', '2019-10-27 07:31:52'),
(66, 'edit_events', 'events', '2019-10-27 07:31:52', '2019-10-27 07:31:52'),
(67, 'add_events', 'events', '2019-10-27 07:31:52', '2019-10-27 07:31:52'),
(68, 'delete_events', 'events', '2019-10-27 07:31:52', '2019-10-27 07:31:52'),
(74, 'browse_curriculum', 'curriculum', '2019-10-27 09:33:34', '2019-10-27 09:33:34'),
(75, 'read_curriculum', 'curriculum', '2019-10-27 09:33:34', '2019-10-27 09:33:34'),
(76, 'edit_curriculum', 'curriculum', '2019-10-27 09:33:34', '2019-10-27 09:33:34'),
(77, 'add_curriculum', 'curriculum', '2019-10-27 09:33:34', '2019-10-27 09:33:34'),
(78, 'delete_curriculum', 'curriculum', '2019-10-27 09:33:34', '2019-10-27 09:33:34'),
(104, 'browse_curriculums', 'curriculums', '2019-10-31 11:51:20', '2019-10-31 11:51:20'),
(105, 'read_curriculums', 'curriculums', '2019-10-31 11:51:20', '2019-10-31 11:51:20'),
(106, 'edit_curriculums', 'curriculums', '2019-10-31 11:51:21', '2019-10-31 11:51:21'),
(107, 'add_curriculums', 'curriculums', '2019-10-31 11:51:21', '2019-10-31 11:51:21'),
(108, 'delete_curriculums', 'curriculums', '2019-10-31 11:51:21', '2019-10-31 11:51:21'),
(109, 'browse_testimonials', 'testimonials', '2019-10-31 11:51:37', '2019-10-31 11:51:37'),
(110, 'read_testimonials', 'testimonials', '2019-10-31 11:51:37', '2019-10-31 11:51:37'),
(111, 'edit_testimonials', 'testimonials', '2019-10-31 11:51:37', '2019-10-31 11:51:37'),
(112, 'add_testimonials', 'testimonials', '2019-10-31 11:51:37', '2019-10-31 11:51:37'),
(113, 'delete_testimonials', 'testimonials', '2019-10-31 11:51:37', '2019-10-31 11:51:37'),
(114, 'browse_page_blocks', 'page_blocks', '2019-10-31 13:57:43', '2019-10-31 13:57:43'),
(115, 'read_page_blocks', 'page_blocks', '2019-10-31 13:57:43', '2019-10-31 13:57:43'),
(116, 'edit_page_blocks', 'page_blocks', '2019-10-31 13:57:44', '2019-10-31 13:57:44'),
(117, 'add_page_blocks', 'page_blocks', '2019-10-31 13:57:44', '2019-10-31 13:57:44'),
(118, 'delete_page_blocks', 'page_blocks', '2019-10-31 13:57:44', '2019-10-31 13:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(104, 1),
(104, 3),
(105, 1),
(105, 3),
(106, 1),
(106, 3),
(107, 1),
(107, 3),
(108, 1),
(108, 3),
(109, 1),
(109, 3),
(110, 1),
(110, 3),
(111, 1),
(111, 3),
(112, 1),
(112, 3),
(113, 1),
(113, 3),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(2, 'user', 'Normal User', '2019-10-27 01:54:04', '2019-10-27 01:54:04'),
(3, 'Master', 'Master', '2019-10-27 14:10:22', '2019-10-27 14:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/October2019/C6xcV0vgWTk9xNGgvotJ.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '360251792987-io0s0egteoqu368ai5ostpqt4inlcigi.apps.googleusercontent.com', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'forms.default_to_email', 'Default Enquiry To Email', 'voyager.forms@mailinator.com', 'The default email address to send form enquiries to', 'text', 1, 'Forms'),
(12, 'forms.default_from_email', 'Default Enquiry From Email', 'voyager.forms@mailinator.com', 'The default email address to use as the sender address for form enquiries', 'text', 2, 'Forms'),
(13, 'admin.google_recaptcha_site_key', 'Google reCAPTCHA Site Key (public)', NULL, 'This key can be found in your Google reCAPTCHA console', 'text', 1, 'Admin'),
(14, 'admin.google_recaptcha_secret_key', 'Google reCAPTCHA Secret Key', NULL, 'This key can be found in your Google reCAPTCHA console', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `excerpt`, `body`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Doanh & Trang, from Vietnam', '""', '<p><span style="color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">&ldquo;The things we really love about Saigon Star International School are the small class sizes which allows teachers and students to have more interaction and to create an environment that foster better learning. The friendly, family-like atmosphere here is something that you would not easily find in other schools around HCM city. At first, we just let our two younger children attend the school but after one year we decided to transfer our eldest daughter from another international school. We believed Saigon Star is a superior school in both learning and environment. Our three children really enjoy going to school each day, they love the activities and the people that they interacted with from the multi-cultural diversity of other students, to the knowledgeable teachers and friendly staff. We have since moved to another country but, one day, when we do move back, we are sure our children would be very excited to attend Saigon Star.&rdquo;</span></p>', NULL, 'doanh-and-trang-from-vietnam', '2019-10-31 12:17:31', '2019-10-31 12:17:31'),
(2, 'Harry Nguyen Bui, from Vietnam', '“Saigon Star is unique: a small but true international school in many senses, from its world-class curriculum and teaching standards, to the diverse languages and cultures represented by its students, teachers and parents. It is also a happy family, which is welcoming, caring and supportive. As a parent, it is great to see my son’s steps on his path to becoming a global citizen are marked with the love of learning, good values and a happy childhood.”', '<p><span style="color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">&ldquo;Saigon Star is unique: a small but true international school in many senses, from its world-class curriculum and teaching standards, to the diverse languages and cultures represented by its students, teachers and parents. It is also a happy family, which is welcoming, caring and supportive. As a parent, it is great to see my son&rsquo;s steps on his path to becoming a global citizen are marked with the love of learning, good values and a happy childhood.&rdquo;</span></p>', NULL, 'harry-nguyen-bui-from-vietnam', '2019-10-31 12:30:45', '2019-10-31 12:30:45'),
(3, 'Jon Garrity, from the UK', '“From our first contact with the school when looking for a place for our daughter, we knew Saigon Star was the right environment for her. From the teachers to the support staff, we only have good things to say. Saigon Star is an intimate but impressive international school environment. It respects the English primary curriculum which was important to us, recognises its students as individuals and creates an environment where we saw our daughter develop both academically and socially.”', '<p><span style="color: #4d4d4d; font-family: \'Open Sans\'; font-size: 16px;">&ldquo;From our first contact with the school when looking for a place for our daughter, we knew Saigon Star was the right environment for her. From the teachers to the support staff, we only have good things to say. Saigon Star is an intimate but impressive international school environment. It respects the English primary curriculum which was important to us, recognises its students as individuals and creates an environment where we saw our daughter develop both academically and socially.&rdquo;</span></p>', NULL, 'jon-garrity-from-the-uk', '2019-10-31 12:31:03', '2019-10-31 12:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `gender`, `blood_group`, `phone`, `nationality`, `address`, `about`, `qualification`) VALUES
(1, 3, 'Jack', 'momabz6@gmail.com', 'users/default.png', NULL, '$2y$12$QpyNJBot6B88Hmh1yMsNEOSbUl0L2M9ib4GgePHgWBNzgCFE7R9fS', '06NHBShKac187LGzePek4ovilUkhMlkbXkccPhow8FofvOZbxcDNjHHlRjeF', '{"locale":"en"}', '2019-10-27 02:00:19', '2019-10-27 14:13:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Admin', 'lunvjp@gmail.com', 'users/default.png', NULL, '$2y$10$YI0gy5SaQbKWlVuma.dwMei1kH823j.e3.C3QCizSgrC2ipVkC3mm', 'weIydBiaQKfOOY24cNXvjObsxVFBYWUX9C40489X0JzcX32DutPNlxyvwMyu', NULL, '2019-10-27 02:13:41', '2019-10-27 04:56:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'Duong', 'huynhtanduong.hcmus@gmail.com', 'users/default.png', NULL, '$2y$12$hW6M9ZjwDR5v.gqd1PpeDedPVdTWoKXsIAFObKVhh6xXGP0hp6Rme', 'Sd7LkufrcM87kEskmVNYO4JpzqtzDGbpBLWgfFZVdWWRvHaszzFdxPk2A14i', '{"locale":"en"}', '2019-10-27 03:34:00', '2019-10-28 04:24:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_posts_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curriculums_slug_unique` (`slug`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_inputs`
--
ALTER TABLE `form_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `page_blocks`
--
ALTER TABLE `page_blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_blocks_page_id_index` (`page_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_slug_unique` (`slug`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_inputs`
--
ALTER TABLE `form_inputs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_blocks`
--
ALTER TABLE `page_blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
