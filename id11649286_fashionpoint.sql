-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2021 at 09:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11649286_fashionpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `passwrd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `passwrd`) VALUES
(1, 'shan@fashion.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(1, 'shantanu', 'shantanusk.sk@gmail.com', '07894561323', 'jlhcfygcygcyhcyh\r\n'),
(2, 'shantanu', 'shantanusk.sk@gmail.com', '07894561323', 'jlhcfygcygcyhcyh\r\n'),
(3, 'SHAN', 'shan@gmail.com', '09864589454', 'this is a test'),
(4, 'SHAN', 'shan@gmail.com', '09864589454', 'this is a test'),
(5, 'shantanu', 'shantanusk.sk@gmail.com', '07894561323', 'khvuylcytcghf dgvo tyfytctickgycy itf'),
(6, 'n', 'f@n', 'r', 'e'),
(7, 'dicnieu', 'lkmckdsm@jkckjd.com', '7236746694', 'hiiiiiiiiiiiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `custdesign`
--

CREATE TABLE `custdesign` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `clothfor` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custdesign`
--

INSERT INTO `custdesign` (`id`, `name`, `email`, `ctype`, `category`, `image`, `clothfor`, `description`) VALUES
(1, 'Shantanu', 'shan@gmail.com', 'cotton', 'shirt', 'admin/images/s-k-8403-volcano-k071fsslndr-brck-killer-original-imaf7g8kktsy4z49.jpeg', 'men', 'I want a full sleve shirt with t-shirt embedded inside the shirt.'),
(2, 'Shantanu', 'shan@gmail.com', 'cotton', 'shirt', 'admin/images/s-k-8403-volcano-k071fsslndr-brck-killer-original-imaf7g8kktsy4z49.jpeg', 'men', 'I want a full sleve shirt with t-shirt embedded inside the shirt.'),
(3, 'h', 'h@d', '0', '0', 'admin/images/IMG-20200526-WA0005.jpg', 'women', 'vjkvjfcj');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `allitems` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `paymode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `allitems`, `fname`, `lname`, `email`, `phone`, `amount`, `address`, `country`, `state`, `zip`, `paymode`) VALUES
(1, '{\"pr8\":[2,\"Levis Shirt...\",999],\"pr9\":[1,\"Killer full sleve sh...\",599],\"pr10\":[1,\"Killer full sleve sh...\",899],\"pr12\":[1,\"Dark Green And Yello...\",999],\"pr13\":[1,\"Pink full sleeved st...\",4999],\"pr14\":[2,\" A1DesignerWear Radi...\",1599],\"pr15\":[2,\" A1Des', 'shantanu', 'shan', 'shantanusk.sk@gmail.com', '07894561323', '15890', 'iauegf8weygfbiewjbfv', 'india', 'bihar', '656266', 'cod'),
(2, '{\"pr8\":[2,\"Levis Shirt...\",999],\"pr9\":[1,\"Killer full sleve sh...\",599],\"pr10\":[1,\"Killer full sleve sh...\",899],\"pr12\":[1,\"Dark Green And Yello...\",999],\"pr13\":[1,\"Pink full sleeved st...\",4999],\"pr14\":[2,\" A1DesignerWear Radi...\",1599],\"pr15\":[2,\" A1Des', 'SHAN', 'shan', 'shan@gmail.com', '+449864589454', '15890', 'jlfdyudsgvyfsdghbv', 'india', 'bihar', '581123', 'cod'),
(3, '{\"pr8\":[2,\"Levis Shirt...\",999],\"pr9\":[1,\"Killer full sleve sh...\",599],\"pr10\":[1,\"Killer full sleve sh...\",899],\"pr12\":[1,\"Dark Green And Yello...\",999],\"pr13\":[1,\"Pink full sleeved st...\",4999],\"pr14\":[2,\" A1DesignerWear Radi...\",1599],\"pr15\":[2,\" A1Des', 'SHAN', 'shan', 'shan@gmail.com', '09864589454', '15890', 'jlfdyudsgvyfsdghbv', 'india', 'andhrapradesh', '581123', 'cod'),
(4, '{\"pr8\":[2,\"Levis Shirt...\",999],\"pr9\":[1,\"Killer full sleve sh...\",599],\"pr10\":[1,\"Killer full sleve sh...\",899],\"pr12\":[1,\"Dark Green And Yello...\",999],\"pr13\":[1,\"Pink full sleeved st...\",4999],\"pr14\":[2,\" A1DesignerWear Radi...\",1599],\"pr15\":[2,\" A1Des', 'SHAN', 'shan', 'shan@gmail.com', '09864589454', '15890', 'jlfdyudsgvyfsdghbv', 'india', 'andhrapradesh', '581123', 'cod'),
(5, '{}', 'Shantanu', 'shan', 'shantanusky.kumaryadav@gmail.com', '07717746843', '0', 'lidhfiuohfu ebwniuqbi', 'india', 'bihar', '852113', 'cod'),
(6, '{\"pr8\":[5,\"Levis Shirt...\",999],\"pr9\":[5,\"Killer full sleve sh...\",599],\"pr10\":[4,\"Killer full sleve sh...\",899],\"pr11\":[5,\"Killer full sleve sh...\",899]}', 'SHAN', 'shan', 'shan@gmail.com', '+449864589454', '16081', 'jlfdyudsgvyfsdghbv', 'india', 'bihar', '581123', 'cod'),
(7, '{\"pr8\":[5,\"Levis Shirt...\",999],\"pr9\":[5,\"Killer full sleve sh...\",599],\"pr10\":[4,\"Killer full sleve sh...\",899],\"pr11\":[5,\"Killer full sleve sh...\",899]}', 'SHAN', 'shan', 'shan@gmail.com', '+449864589454', '16081', 'jlfdyudsgvyfsdghbv', 'india', 'bihar', '581123', 'cod'),
(8, '{\"pr8\":[5,\"Levis Shirt...\",999],\"pr9\":[5,\"Killer full sleve sh...\",599],\"pr10\":[4,\"Killer full sleve sh...\",899],\"pr11\":[5,\"Killer full sleve sh...\",899]}', 'SHAN', 'shan', 'shan@gmail.com', '+449864589454', '16081', 'jlfdyudsgvyfsdghbv', 'india', 'bihar', '581123', 'cod'),
(9, '{\"pr8\":[3,\"Levis Shirt...\",999],\"pr9\":[4,\"Killer full sleve sh...\",599],\"pr10\":[2,\"Killer full sleve sh...\",899]}', 'SHAN', 'shan', 'shan@gmail.com', '+449864589454', '7191', 'jlfdyudsgvyfsdghbv', 'india', 'bihar', '581123', 'cod'),
(10, '{\"pr8\":[1,\"Levis Shirt...\",999]}', 'shashank', 'kumar', 'shashank.2.yadav@gmail.com', '070 0411 4818', '999', 'B-4222, Gali no.110 , Near Jagdamba Medico ,Sant Nagar , Burari', 'india', 'delhi', '110084', 'cod'),
(11, '{\"pr11\":[1,\"Killer full sleve sh...\",899],\"pr10\":[1,\"Killer full sleve sh...\",899],\"pr9\":[3,\"Killer full sleve sh...\",599],\"pr8\":[4,\"Levis Shirt...\",999]}', 'Amit', 'Kumar', 'abc@gamil.com', '9993332221', '7591', 'Aaa', 'india', '0', '800001', 'credit'),
(12, '{\"pr12\":[1,\"Dark Green And Yello...\",999],\"pr16\":[1,\"Lehenga for kids ...\",799]}', 'SHAN', 'Shan', 'shan@gmail.com', '09864589454', '1798', 'jlfdyudsgvyfsdghbv', 'india', 'bihar', '581123', 'cod'),
(13, 'Tailor', 'shantanu', 'ytfty', 'shantanusk.sk@gmail.com', '07894561323', '500', 'iauegf8weygfbiewjbfvdlkvhisodhvnorinvo', 'India', 'bihar', '656266', 'cod'),
(14, '{\"pr13\":[1,\"Pink full sleeved st...\",4999],\"pr14\":[2,\" A1DesignerWear Radi...\",1599],\"pr12\":[2,\"Dark Green And Yello...\",999]}', 'amit', 'kumar', 'aaa@aaa', '9999944444', '10195', '1545 uu', 'india', 'andhrapradesh', '12345689', 'credit'),
(15, 'Tailor', 'q', 'd', 's@d', 'd', '500', 'd', 'India', '0', 's', 'debit'),
(16, 'Tailor', 'q', 'w', 'e@r', '5', '500', '5', 'India', '0', '2', 'paypal'),
(17, '{\"pr9\":[1,\"Killer full sleve sh...\",599],\"pr10\":[1,\"Killer full sleve sh...\",899]}', 'nidhi', 'kumari', 'nidhi@gmail.com', '9876543210', '1498', 'ksdgcujdgsa', 'india', 'andhrapradesh', '678954', 'credit');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `clothfor` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `image`, `price`, `clothfor`, `description`) VALUES
(9, 'Killer full sleve shirt', 'Shirt', 'admin/images/MP000000002226761_437Wx649H_20180107083055.jpeg', 599, 'men', 'This is a killer white shirt for men. The cloth used in it is cotton.'),
(10, 'Killer full sleve shirt', 'Shirt', 'admin/images/s-k-8403-volcano-k071fsslndr-brck-killer-original-imaf7g8kktsy4z49.jpeg', 899, 'men', 'Killer Full Sleve shirt for men. Pure cotton and available in mixed colour.'),
(12, 'Dark Green And Yellow Lawn Slub Cotton Salwar Suit', 'Salwar Suit', 'admin/images/dark-green-and-yellow-lawn-slub-cotton-salwar-suit.jpg', 999, 'women', 'Dark Green And Yellow Lawn Slub Cotton Salwar Suit available in all size and also custome size is available by choosing each item in perticular.'),
(13, 'Pink full sleeved straight cut kurti', 'Kurti', 'admin/images/1931sl02-40006.jpg', 4999, 'women', 'Pink full sleeved straight cut kurti in art silk embellished with all over heavy mirror work. Accompanied by a pink shantoon patiala salwar.'),
(14, ' A1DesignerWear Radiant Grey Patiala Salwar Kameez', 'Salwar Suit', 'admin/images/0491231_radiant-grey-patiala-salwar-kameez.jpeg', 1599, 'women', 'Buy Radiant Grey Patiala Salwar Kameez,Salwar Kameez is Designed With embroidery Work,Fabric: cotton,Color: grey.'),
(16, 'Lehenga for kids ', 'Lehenga', 'admin/images/kids-lehenga-500x500.jpg', 799, 'children', 'lengha for kids in pink fairy colour.'),
(17, 'Frok for girls', 'frok', 'admin/images/rBVaEFol56yAOaebAAWHjJR4m7o192.jpg', 1299, 'children', 'New Design Children Winter Dress Kids Clothes Longsleeve Dress From Pangliuming\r\ncloth type- valvet\r\npurple colour');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`id`, `order_id`, `msg`) VALUES
(1, '9', 'Order has been placed.'),
(2, '9', 'Order has been packed and shipped form Delhi.'),
(10, '9', 'Your package has reached patna on 14/04/2020 at 9:00.'),
(12, '10', 'Order has been placed'),
(13, '10', ''),
(14, '10', 'Sorry !! Your order can'),
(15, '11', 'Order has been placed'),
(16, '12', 'Order has been placed'),
(17, '13', 'Order has been placed'),
(18, '14', 'Order has been placed'),
(19, '1', ''),
(20, '15', 'Order has been placed'),
(21, '16', 'Order has been placed'),
(22, '', ''),
(23, '17', 'Order has been placed'),
(24, '17', 'jdishcidshvo'),
(25, '17', 'gfgdffggdf'),
(26, '23624556', 'dfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `dob`, `phone`) VALUES
(1, 'Shantanu', 'Yadav', 'shan@gmail.com', 'sky123', '1997-03-16', '0'),
(2, 'Shan', '', 'shantanusk.sk@gmail.com', 'sky1234', '1997-03-16', '7717746843'),
(7, 'Shantanu', '', 'shantanusky.kumaryadav@gmail.com', 'sky', '2020-04-12', '07717746843'),
(8, 'shantanu', 'shan', 'shantanusk.sk@gmail.com', '123456789', '1997-03-16', '07894561323'),
(9, 'shantanu', 'shan', 'shantanusk.sk@gmail.com', '123456789', '1997-03-16', '07894561323'),
(10, 'Someone', '', 'someone@gmail.com', 'someone', '2020-05-29', '1234567890'),
(11, 'Sd', '', 'sxc@g', '', '2020-05-29', '44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custdesign`
--
ALTER TABLE `custdesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custdesign`
--
ALTER TABLE `custdesign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
