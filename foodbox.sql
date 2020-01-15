-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 04:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'muhon199@gmail.com', '96e79218965eb72c92a549dd5a330112');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_image`) VALUES
(3, 'Breakfast', '1.jpg'),
(4, 'Lunch', '2.jpg'),
(5, 'Dinner', '3.jpg'),
(6, 'Coffee', '4.jpg'),
(7, 'Snacks', '5.jpg'),
(8, 'Drinks', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(200) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(5, 'name', 'email@email.com', '01711123123', 'fkfjklajkl'),
(6, 'jfjkjfkaj', 'email@email.com', '8888', 'jkhh'),
(7, 'fafaf faf', 'muhon@gmail.com', '44141444141414141', 'fafafaffffffrwrw'),
(8, 'ertgsg ', 'muhon@gmail.com', '01111111111', 'qqqqsgggggggggggggggg'),
(9, 'muhon', 'muhon199@gmail.com', '01711123456', 'qqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `review` int(255) NOT NULL,
  `total_rating` int(255) NOT NULL,
  `avg_rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `category_id`, `description`, `price`, `image`, `review`, `total_rating`, `avg_rating`) VALUES
(4, 'chicken rizo rice meal', 4, 'Add some spice to your rice with Foodbox rice and spice! With spicy pieces of chicken served with mixed rice. This packs a punch in your mouth.', 200, 'lu1.jpg', 4, 4, 5),
(6, 'hot and crispy rice bowl', 4, 'Need a quick decision for lunch? Try this mighty meal of rice & gravy with a side of Hot and Crispy chicken.', 210, 'lu2.jpg', 0, 0, 0),
(7, 'spicy thai chicken rice', 4, 'Add some spice to your rice with Foodbox rice and spice! With spicy pieces of chicken served with mixed rice. This packs a punch in your mouth.', 250, 'lu3.jpg', 0, 0, 0),
(8, '4 Pcs Hot & Crispy Chicken', 4, 'Treat your taste buds to spicy, crunchy, juicy chicken that sets your taste buds alight.', 250, 'lu4.png', 10, 0, 0),
(13, '2Pc Smoky Grilled', 4, 'Colonel’s Spicy and Juicy grilled chicken with a mix of special marinade and secret herbs- grilled to a Smoky perfection', 170, 'lu5.png', 0, 0, 0),
(14, '6 Pc Boneless Chicken Strips', 4, 'Tender, crispy and juicy boneless strips of chicken, a unique treat to tastebuds.', 400, 'lu6.jpg', 0, 0, 0),
(15, '6 Pc Hot Wings', 7, 'Foodbox\'s best chicken wings smeared with a lip smacking lemon chili flavor.', 220, 'sn1.jpg', 0, 0, 0),
(16, 'Super Charger Burger', 7, 'Spicy, crunchy two chicken strips in a bigger and longer sesame bun, combined with fresh crunchy lettuce, sweet mayo with an amazing blend two different sauces.', 200, 'sn2.jpg', 0, 0, 0),
(17, 'Veggie Burger', 7, 'A crispy fillet of 100% real veggies, topped with lettuce & mayo, served in a soft sesame bun. It’s juicy, spicy, and crunchy! An exciting addition developed specially for our fans in Bangladesh.', 220, 'sn3.jpg', 0, 0, 0),
(18, 'Chicken Zinger', 7, 'Juicy, crispy chicken fillet, topped with lettuce & delicious sweet mayo, served in a soft sesame bun.', 250, 'sn4.jpg', 0, 0, 0),
(19, '12Pc Smoky Grilled', 7, 'Colonel’s Spicy and Juicy grilled chicken with a mix of special marinade and secret herbs- grilled to a Smoky perfection', 1000, 'sn5.png', 0, 0, 0),
(20, 'Dips Bucket', 7, 'Enjoy 10 pcs bucket of tender, crispy and juicy boneless strips of chicken with 4 exciting dips only at Tk. 750', 750, 'sn6.jpg', 0, 0, 0),
(21, 'Mountain Dew', 8, '', 20, 'dr1.png', 0, 0, 0),
(22, '7 UP', 8, '', 20, 'dr2.png', 0, 0, 0),
(23, 'Pepsi', 8, '', 20, 'dr3.png', 1, 1, 5),
(25, 'Aquafina Water', 8, '', 20, 'dr4.png', 0, 0, 0),
(26, 'Popcorn Rice Combo', 5, 'Relish the Popcorn Rice Bowl with 1 pc Hot & Crispy/1 pc Smoky Grilled. Served with Pepsi Go Pack', 300, 'dn1.png', 0, 0, 0),
(27, '5-in-1 Rice Meal Box', 5, 'A complete meal with 5 KFC favourites in one box- exotic and flavorful Rizo Rice, 1pc spicy, crunchy, juicy hot & crispy chicken,2pc KFC\'s best chicken wings smeared with a lip smacking lemon chili flavor, 1 Snickers and 1 Pepsi.', 250, 'dn2.jpg', 0, 0, 0),
(28, 'Super Charger Meal Box', 5, 'A complete meal with 5 KFC favorites in one box-The Bigger Longer Super Charger Burger with 2 chicken strips and 2 great sauces, 1pc spicy, crunchy, juicy hot & crispy chicken, 2pcs chicken wings smeared with a lip smacking lemon chili flavor, 1 Snickers and 1 Pepsi.', 350, 'dn3.jpg', 0, 0, 0),
(33, 'Rizo Rice', 5, 'exotic and flavorful rice', 110, 'dn4.jpg', 0, 0, 0),
(34, 'Mushroom Rice with Chicken', 5, 'Looking for more? This meal answers to that by pairing rice with soft chicken strips, mushrooms& tasty gravy to go with it.', 220, 'dn5.jpg', 0, 0, 0),
(35, 'Popcorn Rice Bowl', 5, 'This is the gravy-yard shift! Rice layered with spicy, exotic gravy & topped off with crispy popcorn chicken!', 220, 'dn6.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `cart` text NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_name`, `user_email`, `user_address`, `user_mobile`, `payment_method`, `transaction_id`, `cart`, `order_date`, `status`) VALUES
(16, 1, 'test', 'test@gmail.com', 'sylhet', '01784525141', 'cash-on-delivery', '323095', 'a:3:{s:32:\"a87ff679a2f3e71d9181a67b7542122c\";a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:6:\"edited\";s:3:\"qty\";d:2;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"a87ff679a2f3e71d9181a67b7542122c\";s:8:\"subtotal\";d:40;}s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:6:\"edited\";s:3:\"qty\";d:2;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:40;}s:32:\"8f14e45fceea167a5a36dedd4bea2543\";a:6:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:6:\"edited\";s:3:\"qty\";d:2;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"8f14e45fceea167a5a36dedd4bea2543\";s:8:\"subtotal\";d:40;}}', '2019-05-06 05:52:56pm', 1),
(17, 1, 'test', 'test@gmail.com', 'sylhet', '01784525141', 'card-payment', 'tok_1EZ0LWI6FTAYlEyC5kzWjFsu', 'a:3:{s:32:\"8f14e45fceea167a5a36dedd4bea2543\";a:6:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:6:\"edited\";s:3:\"qty\";d:48;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"8f14e45fceea167a5a36dedd4bea2543\";s:8:\"subtotal\";d:960;}s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:6:\"edited\";s:3:\"qty\";d:1;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:20;}s:32:\"a87ff679a2f3e71d9181a67b7542122c\";a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:6:\"edited\";s:3:\"qty\";d:1;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"a87ff679a2f3e71d9181a67b7542122c\";s:8:\"subtotal\";d:20;}}', '2019-05-11 08:52:45pm', 1),
(20, 10, 'muhon199@gmail.com', 'muhon199@gmail.com', 'sylhet', '01784525141', 'card-payment', 'tok_1F2u0pI6FTAYlEyCphOvODJz', 'a:3:{s:32:\"c16a5320fa475530d9583c34fd356ef5\";a:6:{s:2:\"id\";s:2:\"31\";s:4:\"name\";s:14:\"Asha LED Light\";s:3:\"qty\";d:1;s:5:\"price\";d:250;s:5:\"rowid\";s:32:\"c16a5320fa475530d9583c34fd356ef5\";s:8:\"subtotal\";d:250;}s:32:\"6364d3f0f495b6ab9dcf8d3b5c6e0b01\";a:6:{s:2:\"id\";s:2:\"32\";s:4:\"name\";s:11:\"Stand Light\";s:3:\"qty\";d:1;s:5:\"price\";d:400;s:5:\"rowid\";s:32:\"6364d3f0f495b6ab9dcf8d3b5c6e0b01\";s:8:\"subtotal\";d:400;}s:32:\"182be0c5cdcd5072bb1864cdee4d3d6e\";a:6:{s:2:\"id\";s:2:\"33\";s:4:\"name\";s:9:\"Moong Dal\";s:3:\"qty\";d:1;s:5:\"price\";d:250;s:5:\"rowid\";s:32:\"182be0c5cdcd5072bb1864cdee4d3d6e\";s:8:\"subtotal\";d:250;}}', '2019-08-02 08:12:24am', 2),
(21, 1, 'test', 'test@gmail.com', 'sylhet', '11111111111', 'cash-on-delivery', '267656', 'a:2:{s:32:\"33e75ff09dd601bbe69f351039152189\";a:6:{s:2:\"id\";s:2:\"28\";s:4:\"name\";s:16:\"Fortune soyabean\";s:3:\"qty\";d:1;s:5:\"price\";d:100;s:5:\"rowid\";s:32:\"33e75ff09dd601bbe69f351039152189\";s:8:\"subtotal\";d:100;}s:32:\"6ea9ab1baa0efb9e19094440c317e21b\";a:6:{s:2:\"id\";s:2:\"29\";s:4:\"name\";s:9:\"RFL Table\";s:3:\"qty\";d:1;s:5:\"price\";d:800;s:5:\"rowid\";s:32:\"6ea9ab1baa0efb9e19094440c317e21b\";s:8:\"subtotal\";d:800;}}', '2019-08-02 08:39:51pm', 1),
(22, 18, 'uhon', 'muhon199@gmail.com', 'sylhet', '01784525141', 'cash-on-delivery', '868379', 'a:3:{s:32:\"d3d9446802a44259755d38e6d163e820\";a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:10:\"Molla salt\";s:3:\"qty\";d:1;s:5:\"price\";d:60;s:5:\"rowid\";s:32:\"d3d9446802a44259755d38e6d163e820\";s:8:\"subtotal\";d:60;}s:32:\"45c48cce2e2d7fbdea1afc51c7c6ad26\";a:6:{s:2:\"id\";s:1:\"9\";s:4:\"name\";s:14:\"Fresh Soyabean\";s:3:\"qty\";d:1;s:5:\"price\";d:120;s:5:\"rowid\";s:32:\"45c48cce2e2d7fbdea1afc51c7c6ad26\";s:8:\"subtotal\";d:120;}s:32:\"e4da3b7fbbce2345d7772b0674a318d5\";a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:8:\"Aci salt\";s:3:\"qty\";d:1;s:5:\"price\";d:50;s:5:\"rowid\";s:32:\"e4da3b7fbbce2345d7772b0674a318d5\";s:8:\"subtotal\";d:50;}}', '2019-08-06 05:22:19pm', 1),
(23, 18, 'uhon', 'muhon199@gmail.com', 'sylhet', '01784525141', 'cash-on-delivery', '226507', 'a:1:{s:32:\"c16a5320fa475530d9583c34fd356ef5\";a:6:{s:2:\"id\";s:2:\"31\";s:4:\"name\";s:14:\"Asha LED Light\";s:3:\"qty\";d:3;s:5:\"price\";d:250;s:5:\"rowid\";s:32:\"c16a5320fa475530d9583c34fd356ef5\";s:8:\"subtotal\";d:750;}}', '2019-08-06 08:00:17pm', 0),
(24, 2, 'test', 'muhon199@gmail.com', 'wefsfafahhhjkhjkh', '01712123345', 'cash-on-delivery', '', 'a:1:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:24:\"hot and crispy rice bowl\";s:3:\"qty\";d:3;s:5:\"price\";d:210;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:630;}}', '2019-12-17 05:04:02am', 0),
(25, 2, 'muhon', 'admin@gmail.com', 'jweijfoajfj ofjajf af fk', '01712123345', 'cash-on-delivery', '', 'a:1:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:24:\"hot and crispy rice bowl\";s:3:\"qty\";d:1;s:5:\"price\";d:210;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:210;}}', '2019-12-17 05:09:22am', 0),
(26, 2, 'muhon', 'muhon199@gmail.com', 'fjklsfklhh hukhj', '01712123345', 'cash-on-delivery', '', 'a:1:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:24:\"hot and crispy rice bowl\";s:3:\"qty\";d:1;s:5:\"price\";d:210;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:210;}}', '2019-12-17 05:10:35am', 0),
(27, 2, 'my name', 'client1@gmail.com', 'fkla fjakf afjakf ', '01712123345', 'cash-on-delivery', '', 'a:1:{s:32:\"a87ff679a2f3e71d9181a67b7542122c\";a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:22:\"chicken rizo rice meal\";s:3:\"qty\";d:1;s:5:\"price\";d:200;s:5:\"rowid\";s:32:\"a87ff679a2f3e71d9181a67b7542122c\";s:8:\"subtotal\";d:200;}}', '2019-12-17 05:12:26am', 0),
(28, 2, 'khkhk', 'client1@gmail.com', 'JFKJA FJAF AFJ FJJAKFJ ', '01712123345', 'cash-on-delivery', '', 'a:1:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:24:\"hot and crispy rice bowl\";s:3:\"qty\";d:1;s:5:\"price\";d:210;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:210;}}', '2019-12-17 05:17:11am', 0),
(31, 18, 'muhon', 'client1@gmail.com', 'this is my order ', '01712123345', 'cash-on-delivery', '', 'a:1:{s:32:\"8f14e45fceea167a5a36dedd4bea2543\";a:6:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:23:\"spicy thai chicken rice\";s:3:\"qty\";d:3;s:5:\"price\";d:250;s:5:\"rowid\";s:32:\"8f14e45fceea167a5a36dedd4bea2543\";s:8:\"subtotal\";d:750;}}', '2019-12-17 05:42:23am', 1),
(32, 2, 'muhon', 'muhon199@gmail.com', 'hi hello how ', '01712123345', 'cash-on-delivery', '', 'a:7:{s:32:\"a87ff679a2f3e71d9181a67b7542122c\";a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:22:\"chicken rizo rice meal\";s:3:\"qty\";d:7;s:5:\"price\";d:200;s:5:\"rowid\";s:32:\"a87ff679a2f3e71d9181a67b7542122c\";s:8:\"subtotal\";d:1400;}s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:24:\"hot and crispy rice bowl\";s:3:\"qty\";d:7;s:5:\"price\";d:210;s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:8:\"subtotal\";d:1470;}s:32:\"8f14e45fceea167a5a36dedd4bea2543\";a:6:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:23:\"spicy thai chicken rice\";s:3:\"qty\";d:4;s:5:\"price\";d:250;s:5:\"rowid\";s:32:\"8f14e45fceea167a5a36dedd4bea2543\";s:8:\"subtotal\";d:1000;}s:32:\"aab3238922bcc25a6f606eb525ffdc56\";a:6:{s:2:\"id\";s:2:\"14\";s:4:\"name\";s:28:\"6 Pc Boneless Chicken Strips\";s:3:\"qty\";d:2;s:5:\"price\";d:400;s:5:\"rowid\";s:32:\"aab3238922bcc25a6f606eb525ffdc56\";s:8:\"subtotal\";d:800;}s:32:\"70efdf2ec9b086079795c442636b55fb\";a:6:{s:2:\"id\";s:2:\"17\";s:4:\"name\";s:13:\"Veggie Burger\";s:3:\"qty\";d:1;s:5:\"price\";d:220;s:5:\"rowid\";s:32:\"70efdf2ec9b086079795c442636b55fb\";s:8:\"subtotal\";d:220;}s:32:\"c74d97b01eae257e44aa9d5bade97baf\";a:6:{s:2:\"id\";s:2:\"16\";s:4:\"name\";s:20:\"Super Charger Burger\";s:3:\"qty\";d:1;s:5:\"price\";d:200;s:5:\"rowid\";s:32:\"c74d97b01eae257e44aa9d5bade97baf\";s:8:\"subtotal\";d:200;}s:32:\"37693cfc748049e45d87b8c7d8b9aacd\";a:6:{s:2:\"id\";s:2:\"23\";s:4:\"name\";s:5:\"Pepsi\";s:3:\"qty\";d:3;s:5:\"price\";d:20;s:5:\"rowid\";s:32:\"37693cfc748049e45d87b8c7d8b9aacd\";s:8:\"subtotal\";d:60;}}', '2019-12-28 08:09:42pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `review` text NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `item_id`, `review`, `rating`) VALUES
(1, 1, 4, 'bmbnb', 5),
(2, 1, 4, 'good one', 5),
(3, 2, 4, 'vsfsf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `unique_key` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `unique_key`, `status`) VALUES
(1, '', 'user@gmail.com', '96e79218965eb72c92a549dd5a330112', '', 0),
(2, '', 'muhon199@gmail.com', '96e79218965eb72c92a549dd5a330112', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
