-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2019 at 04:14 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JavaScript'),
(4, 'JQuery'),
(5, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_created` datetime NOT NULL,
  `comment_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `id`, `post_id`, `comment_content`, `comment_created`, `comment_modified`, `comment_like`) VALUES
(8, 401, 106, 'NhÆ° mÃ¬nh Ä‘Ã£ nÃ³i á»Ÿ trÃªn, HTML sáº½ Ä‘Æ°á»£c khai bÃ¡o báº±ng cÃ¡c pháº§n tá»­ bá»Ÿi cÃ¡c tá»« khÃ³a. Ná»™i dung náº±m bÃªn trong cáº·p tá»« khÃ³a sáº½ lÃ  ná»™i dung báº¡n cáº§n Ä‘á»‹nh dáº¡ng vá»›i HTML. VÃ­ dá»¥ dÆ°á»›i Ä‘Ã¢y lÃ  má»™t Ä‘oáº¡n HTML khai bÃ¡o má»™t Ä‘oáº¡n vÄƒn báº£n.\r\n\r\n01\r\n<p>ÄÃ¢y lÃ  má»™t Ä‘oáº¡n vÄƒn báº£n trong HTML.</p>\r\nNgoÃ i ra, trong cÃ¡c tháº» cÃ²n cÃ³ cÃ¡c thuá»™c tÃ­nh, thuá»™c tÃ­nh sáº½ Ä‘áº·t bÃªn trong tháº» má»Ÿ Ä‘áº§u, má»—i thuá»™c tÃ­nh sáº½ cÃ³ giÃ¡ trá»‹ Ä‘Æ°á»£c Ä‘áº·t trong dáº¥u ngoáº·c kÃ©p vÃ  cÃ¡ch nhau bá»Ÿi dáº¥u báº±ng (=) vá»›i tÃªn thuá»™c tÃ­nh. VÃ­ dá»¥ dÆ°á»›i Ä‘Ã¢y lÃ  má»™t tháº» cÃ³ sá»­ dá»¥ng thuá»™c tÃ­nh-\r\n\r\n01\r\n<form action=\"https://thachpham.com\"> </form>\r\nMá»™t tháº» cÃ³ thá»ƒ sá»­ dá»¥ng nhiá»u thuá»™c tÃ­nh chá»© khÃ´ng pháº£i chá»‰ má»™t thuá»™c tÃ­nh nhÃ©', '2019-01-04 22:02:55', '2019-01-04 14:02:55', 0),
(9, 402, 106, 'Äiá»u Ä‘Ã³ khÃ´ng cÃ³ nghÄ©a lÃ  chá»‰ sá»­ dá»¥ng HTML Ä‘á»ƒ táº¡o ra má»™t website mÃ  HTML chá»‰ Ä‘Ã³ng má»™t vai trÃ² hÃ¬nh thÃ nh trÃªn website. VÃ­ dá»¥ má»™t website nhÆ° Thachpham.com sáº½ Ä‘Æ°á»£c hÃ¬nh thÃ nh bá»Ÿi:\r\n\r\nHTML â€“ XÃ¢y dá»±ng cáº¥u trÃºc vÃ  Ä‘á»‹nh dáº¡ng cÃ¡c siÃªu vÄƒn báº£n.\r\nCSS â€“ Äá»‹nh dáº¡ng cÃ¡c siÃªu vÄƒn báº£n dáº¡ng thÃ´ táº¡o ra tá»« HTML thÃ nh má»™t bá»‘ cá»¥c website, cÃ³ mÃ u sáº¯c, áº£nh ná»n,â€¦.\r\nJavascript â€“ Táº¡o ra cÃ¡c sá»± kiá»‡n tÆ°Æ¡ng tÃ¡c vá»›i hÃ nh vi cá»§a ngÆ°á»i dÃ¹ng (vÃ­ dá»¥ nháº¥p vÃ o áº£nh trÃªn nÃ³ sáº½ cÃ³ hiá»‡u á»©ng phÃ³ng to).\r\nPHP â€“ NgÃ´n ngá»¯ láº­p trÃ¬nh Ä‘á»ƒ xá»­ lÃ½ vÃ  trao Ä‘á»•i dá»¯ liá»‡u giá»¯a mÃ¡y chá»§ Ä‘áº¿n trÃ¬nh duyá»‡t (vÃ­ dá»¥ nhÆ° cÃ¡c bÃ i viáº¿t sáº½ Ä‘Æ°á»£c lÆ°u trong mÃ¡y chá»§).\r\nMySQL â€“ Há»‡ quáº£n trá»‹ cÆ¡ sá»Ÿ dá»¯ liá»‡u truy váº¥n cÃ³ cáº¥u trÃºc (SQL â€“ vÃ­ dá»¥ nhÆ° cÃ¡c bÃ i viáº¿t sáº½ Ä‘Æ°á»£c lÆ°u láº¡i vá»›i dáº¡ng dá»¯ liá»‡u SQL).\r\nNhÆ°ng á»Ÿ Ä‘Ã¢y, táº¡m thá»i báº¡n chá»‰ cáº§n quan tÃ¢m Ä‘áº¿n HTML mÃ  thÃ´i. Dá»… hiá»ƒu hÆ¡n, báº¡n hÃ£y nghÄ© ráº±ng náº¿u website lÃ  má»™t cÆ¡ thá»ƒ hoÃ n chá»‰nh thÃ¬ HTML chÃ­nh lÃ  bá»™ xÆ°Æ¡ng cá»§a cÆ¡ thá»ƒ Ä‘Ã³, nÃ³ nhÆ° lÃ  má»™t cÃ¡i khung sÆ°á»n váº­y.\r\n\r\nNhÆ° váº­y, dÃ¹ website thuá»™c thá»ƒ loáº¡i nÃ o, giao tiáº¿p vá»›i ngÃ´n ngá»¯ láº­p trÃ¬nh nÃ o Ä‘á»ƒ xá»­ lÃ½ dá»¯ liá»‡u thÃ¬ váº«n pháº£i cáº§n HTML Ä‘á»ƒ hiá»ƒn thá»‹ ná»™i dung ra cho ngÆ°á»i truy cáº­p xem.', '2019-01-04 22:05:08', '2019-01-04 14:05:08', 0),
(10, 402, 106, 'Website tÄ©nh (static web) â€“ LÃ  má»™t website khÃ´ng giao tiáº¿p vá»›i mÃ¡y chá»§ web Ä‘á»ƒ gá»­i nháº­n dá»¯ liá»‡u mÃ  chá»‰ cÃ³ cÃ¡c dá»¯ liá»‡u Ä‘Æ°á»£c khai bÃ¡o sáºµn báº±ng HTML vÃ  trÃ¬nh duyá»‡t Ä‘á»c.\r\nWebsite Ä‘á»™ng (dynamic web) â€“ LÃ  má»™t website sáº½ giao tiáº¿p vá»›i má»™t mÃ¡y chá»§ Ä‘á»ƒ gá»­i nháº­n dá»¯ liá»‡u, cÃ¡c dá»¯ liá»‡u Ä‘Ã³ sáº½ gá»­i ra ngoÃ i cho ngÆ°á»i dÃ¹ng báº±ng vÄƒn báº£n HTML vÃ  trÃ¬nh duyá»‡t sáº½ hiá»ƒn thá»‹ nÃ³. Äá»ƒ má»™t website cÃ³ thá»ƒ giao tiáº¿p vá»›i mÃ¡y chá»§ web thÃ¬ sáº½ dÃ¹ng má»™t sá»‘ ngÃ´n ngá»¯ láº­p trÃ¬nh dáº¡ng server-side nhÆ° PHP, ASP.NET, Ruby,..Ä‘á»ƒ thá»±c hiá»‡n. VÃ­ dá»¥ nhÆ° má»™t website lÃ m báº±ng WordPress lÃ  website Ä‘á»™ng.', '2019-01-04 22:05:54', '2019-01-04 14:05:54', 0),
(11, 402, 107, 'href: Äá»‹a chá»‰ cá»§a tÃ i liá»‡u muá»‘n liÃªn káº¿t Ä‘áº¿n, Ä‘Ã¢y cÃ³ thá»ƒ lÃ  má»™t Ä‘Æ°á»ng dáº«n thÆ° má»¥c hoáº·c Ä‘á»‹a chá»‰ website. Náº¿u báº¡n muá»‘n truy cáº­p má»™t tÃ i liá»‡u trÃªn cÃ¹ng má»™t cáº¥p thÆ° má»¥c thÃ¬ chá»‰ cáº§n ghi tÃªn-táº­p-tin.Ä‘á»‹nh dáº¡ng (vÃ­ dá»¥: gioi-thieu.html).', '2019-01-04 22:18:07', '2019-01-04 14:18:07', 0),
(12, 402, 107, 'title: TiÃªu Ä‘á» cá»§a liÃªn káº¿t, tiÃªu Ä‘á» sáº½ hiá»ƒn thá»‹ nhÆ° má»™t thÃ´ng tin thÃªm khi rÃª chuá»™t vÃ o liÃªn káº¿t.', '2019-01-04 22:18:31', '2019-01-04 14:18:31', 0),
(13, 402, 108, '<h1>Heading 1</h1>\r\n<h2>Heading 2</h2>\r\n<h3>Heading 3</h3>\r\n<h4>Heading 4</h4>\r\n<h5>Heading 5</h5>\r\n<h6>Heading 6</h6>', '2019-01-04 22:21:24', '2019-01-04 14:21:24', 0),
(14, 402, 109, 'CSS Selector Ä‘Ã³ng vai trÃ² ráº¥t quan trá»ng khi cÃ¡c báº¡n code layout cho website, tuy nhiÃªn vá» cÃ¡c loáº¡i selector thÃ¬ hÆ¡i nhiá»u nÃªn trong bÃ i nÃ y tÃ´i chá»‰ trÃ¬nh bÃ y má»™t sá»‘ selector thÃ´ng dá»¥ng vÃ  cÄƒn báº£n nháº¥t Ä‘á»ƒ cÃ¡c báº¡n dá»… theo dÃµi, cÃ¡c váº¥n Ä‘á» nÃ¢ng cao mÃ¬nh sáº½ trÃ¬nh bÃ y á»Ÿ má»™t bÃ i khÃ¡c.', '2019-01-04 22:24:15', '2019-01-04 14:24:15', 0),
(15, 401, 109, 'Selector náº¿u dá»‹ch tiáº¿ng anh thÃ¬ cÃ³ nghÄ©a lÃ  \"ngÆ°á»i chá»n\" cheeky . Tuy nhiÃªn trong CSS thÃ¬ selector dÃ¹ng Ä‘á»ƒ truy váº¥n Ä‘áº¿n cÃ¡c tháº» HTML. \r\n\r\nNhÆ° báº¡n biáº¿t trong má»™t file HTML thÃ¬ cÃ³ ráº¥t nhiá»u tháº» giá»‘ng nhau vÃ  thÃ´ng thÆ°á»ng chÃºng ta sáº½ Ä‘áº·t cÃ¡c ID, class cho cÃ¡c tháº» Ä‘á»ƒ phÃ¢n biá»‡t, váº­y thÃ¬ trong CSS sáº½ dá»±a vÃ o cÃ¡c ID vÃ  class Ä‘Ã³ Ä‘á»ƒ truy xuáº¥t tá»›i vÃ  cÃ¡ch truy xuáº¥t Ä‘Ã³ ta gá»i lÃ  selector.', '2019-01-04 22:25:01', '2019-01-04 14:25:01', 0),
(16, 401, 110, '<p>Táº¡i vÃ¬ khi báº¡n sá»­ dá»¥ng float thÃ¬ chiá»u cao cá»§a tháº» cha sáº½ Ä‘Æ°á»£c tÃ­nh lÃ  0px so vá»›i tháº» con float Ä‘Ã³, Ä‘iá»u nÃ y nghÄ©a chiá»u cao cá»§a tháº» cha sáº½ Ä‘Æ°á»£c tÄƒng lÃªn khi ná»™i dung bÃªn trong cá»§a nÃ³ khÃ´ng cÃ³ sá»­ dá»¥ng float.</p>', '2019-01-04 22:29:26', '2019-01-04 14:29:26', 0),
(17, 402, 110, 'Náº¿u Ä‘á»ƒ Ã½ ká»¹ hÆ¡n chÃºt ná»¯a thÃ¬ báº¡n tháº¥y pháº§n tiáº¿p giao giá»¯a hai pháº§n chÃ­nh lÃ  vÃ¹ng after cá»§a pháº§n border mÃ u Ä‘á», vÃ¬ váº­y ta sáº½ bá»• sung má»™t Ä‘oáº¡n CSS clear:both vÃ o vá»‹ trÃ­ after Ä‘á»ƒ xÃ³a vÃ¹ng cho cáº£ hai bÃªn\r\n<code>.group1:after{\r\n    display: block;\r\n    content: \".\";\r\n}</code>', '2019-01-04 22:30:43', '2019-01-04 14:30:43', 0),
(18, 402, 111, 'Closure lÃ  má»™t hÃ m Ä‘Æ°á»£c táº¡o ra tá»« bÃªn trong má»™t hÃ m khÃ¡c (hÃ m cha), nÃ³ cÃ³ thá»ƒ sá»­ dá»¥ng cÃ¡c biáº¿n toÃ n cá»¥c, biáº¿n cá»¥c bá»™ cá»§a hÃ m cha vÃ  biáº¿n cá»¥c bá»™ cá»§a chÃ­nh nÃ³. Viá»‡c viáº¿t hÃ m theo kiá»ƒu closure trong má»™t sá»‘ trÆ°á»ng há»£p sáº½ giÃºp code nhÃ¬n sÃ¡ng vÃ  dá»… quáº£n lÃ½ hÆ¡n, linh hoáº¡t hÆ¡n trong viá»‡c xá»­ lÃ½ cÃ¡c chá»©c nÄƒng.', '2019-01-04 22:36:26', '2019-01-04 14:36:26', 0),
(19, 402, 112, '<code>// Láº¥y danh sÃ¡ch menu\r\nvar menu = document.querySelectorAll(\'#dropdown > li\');\r\n \r\n// Láº·p qua tá»«ng menu Ä‘á»ƒ gÃ¡n sá»± kiá»‡n click\r\nfor (var i = 0; i < menu.length; i++)\r\n{\r\n    menu[i].addEventListener(\"click\", function()\r\n                {   \r\n        // áº¨n háº¿t menu con\r\n        var menuList = document.querySelectorAll(\'#dropdown > li > ul\');\r\n        for (var j = 0; j < menuList.length; j++){\r\n                                menuList[j].style.display = \"none\";\r\n        }\r\n \r\n        // Hiá»ƒn thá»‹ menu hiá»‡n táº¡i\r\n        // Ä‘á»‘i tÆ°á»£ng this chÃ­nh lÃ  tháº» li hiá»‡n táº¡i\r\n        // nÃªn ta sá»­ dá»¥ng máº£ng childrent Ä‘á»ƒ láº¥y danh sÃ¡ch tháº» con\r\n        // mÃ  tháº» ul náº±m á»Ÿ vá»‹ trÃ­ thá»© 2 nÃªn trong máº£ng con nÃ³\r\n        // sáº½ cÃ³ vá»‹ trÃ­ lÃ  1 (máº£ng báº¯t Ä‘áº§u tá»« 0)\r\n        this.children[1].style.display = \"block\";\r\n    }); \r\n}</code>', '2019-01-04 22:38:44', '2019-01-04 14:38:44', 0),
(20, 402, 113, 'Táº¡m dá»‹ch thÃ´ng bÃ¡o lá»—i nÃ y lÃ : jQuey khÃ´ng Ä‘Æ°á»£c Ä‘á»‹nh nghÄ©a. Lá»—i nÃ y lÃ  Ä‘Æ¡n giáº£n lÃ  báº¡n chÆ°a Ä‘Æ°a thÆ° viá»‡n jQuery vÃ o trÆ°á»›c khi sá»­ dá»¥ng cÃ¡c hÃ m cá»§a jQuery. CÃ³ 2 nguyÃªn nhÃ¢n cÃ³ lÃ  báº¡n chÆ°a chÃ¨n Ä‘oáº¡n mÃ£ chÃ¨n vÃ o hoáº·c cÃ³ chÃ¨n nhÆ°ng gá»i nÃ³ phÃ­a sau hÃ m sá»­ dá»¥ng.', '2019-01-04 22:42:26', '2019-01-04 14:42:26', 0),
(21, 402, 113, 'Lá»—i sai thÆ° viá»‡n jQuery\r\n<br>\r\nLá»—i xung Ä‘á»™t jQuery', '2019-01-04 22:43:16', '2019-01-04 14:43:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_created` datetime NOT NULL,
  `post_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `id`, `category_id`, `post_title`, `post_content`, `post_created`, `post_modified`, `post_image`) VALUES
(106, 401, 1, 'HTML lÃ  gÃ¬?', 'HTML lÃ  chá»¯ viáº¿t táº¯t cá»§a cá»¥m tá»« HyperText Markup Language((Xem thÃªm táº¡i http://vi.wikipedia.org/wiki/HTML)) (dá»‹ch lÃ  NgÃ´n ngá»¯ Ä‘Ã¡nh dáº¥u siÃªu vÄƒn báº£n) Ä‘Æ°á»£c sá»­ dá»¥ng Ä‘á»ƒ táº¡o má»™t trang web, trÃªn má»™t website cÃ³ thá»ƒ sáº½ chá»©a nhiá»u trang vÃ  má»—i trang Ä‘Æ°á»£c quy ra lÃ  má»™t tÃ i liá»‡u HTML (thi thoáº£ng mÃ¬nh sáº½ ghi lÃ  má»™t táº­p tin HTML). Cha Ä‘áº» cá»§a HTML lÃ  Tim Berners-Lee, cÅ©ng lÃ  ngÆ°á»i khai sinh ra World Wide Web vÃ  chá»§ tá»‹ch cá»§a World Wide Web Consortium (W3C â€“ tá»• chá»©c thiáº¿t láº­p ra cÃ¡c chuáº©n trÃªn mÃ´i trÆ°á»ng Internet)', '2019-01-04 22:01:58', '2019-01-04 14:01:58', 'libs/uploads/html.png'),
(107, 402, 1, 'THáºº Táº O LIÃŠN Káº¾T VÃ€ LIÃŠN Káº¾T NEO NHÆ¯ NÃ€O?', 'Má»™t trong nhá»¯ng nÃ©t Ä‘áº·c trÆ°ng cá»§a siÃªu vÄƒn báº£n lÃ  cÃ³ nhá»¯ng Ä‘Æ°á»ng liÃªn káº¿t (link) tá»›i má»™t tÃ i liá»‡u khÃ¡c thÃ´ng qua Ä‘á»‹a Ä‘Æ°á»ng dáº«n Ä‘áº¿n tÃ i liá»‡u hoáº·c Ä‘á»‹a chá»‰ website. Äá»ƒ táº¡o ra cÃ¡c Ä‘Æ°á»ng liÃªn káº¿t trong HTML ta sáº½ sá»­ dá»¥ng cáº·p tháº»  ', '2019-01-04 22:17:16', '2019-01-04 14:17:16', 'libs/uploads/atag.jpg'),
(108, 402, 1, 'Tháº» h1 nhÆ° nÃ o?', 'CÃ³ máº¥y loáº¡i tháº» heading', '2019-01-04 22:20:50', '2019-01-04 14:20:50', 'libs/uploads/h1.png'),
(109, 402, 2, 'selector lÃ  gÃ¬?', 'phÃ¢n biá»‡t chÃºng vá»›i tháº» div trong css', '2019-01-04 22:23:57', '2019-01-04 14:23:57', 'libs/uploads/css1.png'),
(110, 401, 2, 'Ká»¹ thuáº­t ClearFix lÃ  gÃ¬?', 'Ká»¹ thuáº­t ClearFix trong CSS lÃ  cÃ¡ch sá»­ dá»¥ng cÃ¡c thuá»™c tÃ­nh CSS Ä‘á»ƒ Ä‘iá»u chá»‰nh vÃ¹ng khÃ´ng gian cá»§a tháº» cha so vá»›i cÃ¡c tháº» con cÃ³ sá»­ dá»¥ng float', '2019-01-04 22:28:45', '2019-01-04 14:28:45', 'libs/uploads/css2.jpg'),
(111, 402, 3, 'Closure lÃ  gÃ¬? Closure function trong Javascript', 'Closure lÃ  má»™t khÃ¡i niá»‡m khÃ´ng pháº£i ai cÅ©ng biáº¿t vÃ  thá»±c sá»± hiá»ƒu vá» nÃ³, Ä‘Ã¢y cÃ³ thá»ƒ coi lÃ  má»™t cÃ¡ch Ä‘á»‹nh nghÄ©a hÃ m nÃ¢ng cao giÃºp code nhÃ¬n trong sÃ¡ng, cÃ¡ch sá»­ dá»¥ng linh hoáº¡t hÆ¡n, vÃ¬ váº­y náº¿u báº¡n muá»‘n há»c Javascript nÃ¢ng cao hoáº·c há»c cÃ¡c Javascript Framework khÃ¡c thÃ¬ báº¯t buá»™c pháº£i hiá»ƒu vá» Closure', '2019-01-04 22:35:48', '2019-01-04 14:35:48', 'libs/uploads/js111.png'),
(112, 402, 3, 'Code Javascript hiá»‡u á»©ng Dropdown menu', 'Help me!!!', '2019-01-04 22:38:18', '2019-01-04 14:38:18', 'libs/uploads/'),
(113, 402, 4, 'Lá»—i JQuery', 'Giáº£i quyáº¿t em phÃ¡t', '2019-01-04 22:41:59', '2019-01-04 14:41:59', 'libs/uploads/jquery-is-not-defined.jpg'),
(114, 402, 5, 'Lá»—i láº¥y dá»¯ liá»‡u tá»« mysql - php', 'Má»i ngÆ°á»i nhÃ¬n vÃ o giÃºp mÃ¬nh Ä‘Ã¢y lÃ  lá»—i gÃ¬ tháº¿ áº¡ ? Xin cáº£m Æ¡n', '2019-01-04 22:45:41', '2019-01-04 14:45:41', 'libs/uploads/loiphp.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `access_level` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `access_code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact_number`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`) VALUES
(5, 'DÅ©ng', 'LÃª CÃ´ng', 'chinhpham1609@gmail.com', '0158885', '123', '$2y$10$HP3e44C17iXh0Nm6jKKScej8ldOrOyNXsr4R0PtJfG7jQTbp0bAdm', 'Customer', 'ZzyNTiEw6LPmLVR7xO7WQoLTL8ovpaWk', 1, '2018-12-09 02:13:13', '2019-01-03 17:16:33'),
(16, 'VÃ¢n Anh', 'Nguyá»…n Thá»‹', 'mickey@gmail.com', '01588851000', '123111', '$2y$10$np4dOtnSiJE9/qDsjUXxxO6mhMFWfW9/Yvrk7uV7EwMTr66gOkHwi', 'Customer', 'oF7Gw6qR5dSzIo9aBrbyRoifT9sbh06o', 1, '2018-12-14 01:52:04', '2019-01-03 17:17:17'),
(40, 'Tháº¯m', 'Pháº¡m Thá»‹ Há»“ng', 'darwin@example.com', '9331868359', 'Blk 24 ', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'ILXFBdMAbHVrJswNDnm231cziO8FZomn', 1, '2014-10-29 17:31:09', '2019-01-04 12:39:24'),
(66, 'Quy', 'Pháº¡m VÄƒn', 'VanQuy@example.com', '0999666', 'Blk. 24 A, Lot 6,', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Customer', '', 1, '0000-00-00 00:00:00', '2019-01-03 15:28:36'),
(92, 'ChÃ­nh', 'Pháº¡m CÃ´ng', 'tanthuyhoangkd169@gmail.com', '0973676444', 'XuÃ¢n TrÆ°á»ng - Nam Äá»‹nh', '$2y$10$1OPNbZEOf./ZZA.zyJv.x.oj5NG4OYH47t2E4vBHnqSFtKyX9c3hG', 'Admin', 'dupjFj1pXl9b95bi2aGMXag3XRJX6TKU', 1, '2018-12-23 17:25:38', '2019-01-03 15:21:41'),
(400, 'Lan Anh', 'BÃ¹i Thá»‹', 'darwin@example.com', '9331868359', 'Nam Äá»‹nh', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Customer', 'ILXFBdMAbHVrJswNDnm231cziO8FZomn', 1, '2014-10-29 17:31:09', '2019-01-03 17:40:25'),
(401, 'Tiáº¿n', 'Nguyá»…n VÄƒn', 'aovang5wqe@gmail.com', '258633148', 'ThÃ¡i BÃ¬nh', '$2y$10$s7kdmYU2/W9KgxcRUQerBuU8UHLmoQZjhzp3hAbH2UVyY6CdR7Mve', 'Customer', 'pa1ZL6zOwMfCodPxTz0zX5e9uYsgrL1V', 1, '2019-01-04 01:23:01', '2019-01-03 17:23:53'),
(402, 'DÅ©ng', 'LÃª ÄÃ¬nh', 'chinhpc62@wru.vn', '4586693325', 'HÃ  Ná»™i', '$2y$10$CFXw2I7KwXCH7wt4r8A/5.4l/ohim/t19cWXfnLn5JRbPxT9AL8li', 'Customer', '233VZyxS20N2SPCKaZG52neIZjJxT93K', 1, '2019-01-04 01:29:22', '2019-01-04 12:39:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `id` (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `id` (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
