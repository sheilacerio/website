-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 29, 2016 at 07:36 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `item_id`, `message`, `user_id`) VALUES
(6, 23, 'asdfasdfasdfasdf', 14),
(7, 23, 'asdfasdfasdfasdfasdf', 14),
(8, 51, 'i want it 100', 17),
(9, 68, 'for 100 pesos', 20),
(10, 68, 'i could deliver it on time hassle free\r\n', 20),
(11, 68, 'i could deliver it on time hassle free\r\n', 20),
(12, 68, 'i could deliver it on time hassle free\r\n', 20),
(13, 68, 'i could deliver it on time hassle free\r\n', 20),
(14, 68, 'i could deliver it on time hassle free\r\n', 20),
(15, 68, 'i could deliver it on time hassle free\r\n', 20),
(16, 68, 'i could deliver it on time hassle free\r\n', 20),
(17, 68, 'i could deliver it on time hassle free\r\n', 20),
(18, 68, 'i could deliver it on time hassle free\r\n', 20),
(19, 68, 'i could deliver it on time hassle free\r\n', 20),
(20, 68, 'i could deliver it on time hassle free\r\n', 20),
(21, 68, 'i could deliver it on time hassle free\r\n', 20),
(22, 68, 'i could deliver it on time hassle free\r\n', 20),
(23, 52, 'i could deliver it on time\r\n', 20),
(24, 52, 'i could deliver it on time\r\n', 20),
(25, 0, 'i could deliver it for 1 hour', 20),
(26, 0, 'you can call me at 4567890', 20),
(27, 70, 'no amount\r\n', 20),
(28, 89, 'i do with 100\r\n', 20),
(29, 89, 'i do with 100\r\n', 20),
(30, 0, '100 for free', 20),
(31, 89, 'i do with 1000\r\n', 28),
(32, 74, 'i can do it at 1000', 30),
(33, 74, 'i''ll shipped it for 900 :-)', 20),
(34, 74, 'i''ll deliver that for 800 :-D', 28),
(35, 99, 'i can do by 100\r\n\r\n', 20),
(36, 102, 'i can do at 1,000', 20),
(37, 102, 'i can do at 1,000', 20),
(38, 102, 'i can do at 1,000', 20),
(39, 103, 'i could do 100', 20);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `pickuplocation` varchar(255) NOT NULL,
  `shipmentpickup` varchar(255) NOT NULL,
  `deliverlocation` varchar(255) NOT NULL,
  `shipmentdeliver` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `category`, `title`, `width`, `height`, `length`, `weight`, `quality`, `description`, `itemtype`, `pickuplocation`, `shipmentpickup`, `deliverlocation`, `shipmentdeliver`, `photo`, `user_id`) VALUES
(102, 'Household', 'washing machine', '123', '234', '123', '345', '1', 'heavy rusty need to an extra careful on transporting the machine', 'Plattized', 'Mandaue cebu city', 'january 12, 2016', 'lahug Cebu City', 'january 13, 2016', 'images.jpeg', 21),
(103, 'Tool', 'yuy', '2', '4', '5', '23', '1', 'sdgdjd', 'Plattized', 'shfgkghl', 'dgdf', 'dhfjghk', 'fdjhgk', 'bodycolor_img_car.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `fb`, `description`, `itemtype`, `phone`, `email`, `photo`, `user_id`) VALUES
(51, 'clint', 'ybanez', 'clint@gmail.com', 'Pinamudlan San francisco Southern Leyte', 'Male', 123456789, 'clint@gmail.com', 'rabbit.jpg', 0),
(52, 'clint', 'ybanez', 'clint@gmail.com', 'Pinamudlan San francisco Southern Leyte', 'Male', 123456789, 'clint@gmail.com', 'rabbit1.jpg', 0),
(53, 'czyrelle', 'ybanez', 'clint@gmail.com', 'Pinamudlan San francisco Southern Leyte', 'Male', 123456789, 'clint@gmail.com', 'rabbit2.jpg', 0),
(54, 'sheba', 'orongan', 'sheba@gmail.com', 'davao city', 'Female', 234567, 'sheba@gmail.com', 'Anime-girl-msyugioh123-24495728-378-400.jpg', 0),
(55, 'sem', 'orongan', 'sem@gmail.com', 'mati, davao city', 'Male', 123456789, 'sem@gmail.com', 'claudia.jpg', 0),
(56, 'jboy', 'orongan', 'jboy@gmail.com', 'mati, davao city', 'Male', 123456789, 'jboy@gmail.com', 'Anime-girl-msyugioh123-24495728-378-4001.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE `shipper` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipper`
--

INSERT INTO `shipper` (`id`, `companyname`, `email`, `phone`, `profile`, `photo`) VALUES
(22, 'dhcfgkg', 'kgfkhj;', 'gjgljk''', 'gkh;lk\r\n''l;\r\n', 'rabbit43.jpg'),
(23, 'dhcfgkg', 'kgfkhj;', 'gjgljk''', 'gkh;lk\r\n''l;\r\n', 'rabbit44.jpg'),
(24, 'asfsdg', 'sfhfj', 'gfkghl', 'fgdgkhj;', 'rabbit45.jpg'),
(25, 'asfsdg', 'sfhfj', 'gfkghl', 'fgdgkhj;', 'rabbit46.jpg'),
(26, 'asfsdg', 'sfhfj', 'gfkghl', 'fgdgkhj;', 'rabbit47.jpg'),
(27, 'sfdhgfj', 'fhfgckf', 'gfkhl;k', ';kj\r\n''hjfdhj', 'rabbit48.jpg'),
(28, 'sgdjhgl', 'fhfgkhjl', 'fhfckhj', ';kh;j''', 'rabbit50.jpg'),
(29, 'sgdjhgl', 'fhfgkhjl', 'fhfckhj', ';kh;j''', 'rabbit51.jpg'),
(30, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-417.jpg'),
(31, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-418.jpg'),
(32, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-419.jpg'),
(33, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-420.jpg'),
(34, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-421.jpg'),
(35, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-422.jpg'),
(36, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-423.jpg'),
(37, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-424.jpg'),
(38, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-425.jpg'),
(39, 'sgdhgkgjl', 'gjgvlj;', 'hkgljk;kl''', 'hkjlk''ddhgfj', 'cute-baby-rabbits-wallpaper-426.jpg'),
(40, 'dhfcjghk', 'gjghklhjl', 'gjgkh;jk', 'fhgkhj;jk;', 'shutterstock_912437247.jpg'),
(41, 'dhfcjghk', 'gjghklhjl', 'gjgkh;jk', 'fhgkhj;jk;', 'shutterstock_912437248.jpg'),
(42, 'lbc', 'lbc@gmail.com', '1234567890', 'we are the leading company in the word and fast service that we can provide and we could provide shipping overseas', 'boxes1.jpg'),
(43, 'lbc', 'lbc@gmail.com', '1234567890', 'we are the leading company in the word and fast service that we can provide and we could provide shipping overseas', 'boxes2.jpg'),
(44, 'lbc', 'lbc@gmail.com', '1234567890', 'we are the leading company in the word and fast service that we can provide and we could provide shipping overseas', 'boxes3.jpg'),
(45, 'lbc', 'lbc@gmail.com', '1234567890', 'we are the leading company in the word and fast service that we can provide and we could provide shipping overseas', 'boxes4.jpg'),
(46, 'lbc', 'lbc@gmail.com', '1234567890', 'we are the leading company in the word and fast service that we can provide and we could provide shipping overseas', 'boxes5.jpg'),
(47, 'sdgfhs', 'dgdfhfg', 'kghlh;', 'dgdjghkh;j;', '6ffa3b_d3029d583c8547d99fd56635728bec8d1.jpg'),
(48, 'sdgfhs', 'dgdfhfg', 'kghlh;', 'dgdjghkh;j;', '6ffa3b_d3029d583c8547d99fd56635728bec8d2.jpg'),
(49, 'sfdshgdj', 'dhfgj', 'dgdxjck', 'hfxjglhj;', 'deliver13.jpg'),
(50, 'sfdshgdj', 'dhfgj', 'dgdxjck', 'hfxjglhj;', 'deliver14.jpg'),
(51, 'lbc hari nang bayan', 'lbc@gmail.com', '1234567890', 'we are the fast growing transport shipper in the county', 'download.png'),
(52, 'lbc hari nang bayan', 'lbc@gmail.com', '123456789', 'we are the pioneer on shipping', 'download.png'),
(53, 'lbc hari nang bayan', 'lbc@gmail.com', '123456789', 'we are the pioneer on shipping', 'download1.png'),
(54, 'lbc hari nang bayan', 'lbc@gmail.com', '123456789', 'we are the pioneer on shipping', 'download2.png'),
(55, 'cgxdjvghl', 'fjghkhj', 'ldhfgkjh;kj', ';dgfkhj;jk;', 'amor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(4, '380fb17eb28bb38220464b02c80715', 8, '2016-07-31 00:00:00'),
(5, 'd52a1bca6d6b37d36557190a04f3c8', 9, '2016-08-19 00:00:00'),
(6, '71c5ebfe635ec3d0cd620d6041e6d2', 10, '2016-08-19 00:00:00'),
(7, '5a43b0885a501f22556a67b3bef3b1', 11, '2016-08-19 00:00:00'),
(8, '40d58eb9ad9602397d3cdf1f719040', 12, '2016-08-19 00:00:00'),
(9, 'a7f30a74b59dde7d8979acaaaf5c8d', 13, '2016-08-19 00:00:00'),
(10, 'c5b19781c974344167a3a482a1dd89', 14, '2016-08-19 00:00:00'),
(11, '3ea283aa981a8df8878b4bfde8ac61', 15, '2016-08-19 00:00:00'),
(12, '5505b58f979e4bcf09465288a40d24', 16, '2016-08-21 00:00:00'),
(13, 'cf2311bf46c0453e64b9b7c41461ae', 17, '2016-08-21 00:00:00'),
(14, '45901b627d030c19504c489def027b', 18, '2016-08-21 00:00:00'),
(15, 'a9b9470fec895c42a015ce55393780', 19, '2016-08-21 00:00:00'),
(16, '87be0f25e76359da2694da13261c25', 20, '2016-08-22 00:00:00'),
(17, 'bad1d43e2509ce345737af9893ccbf', 21, '2016-08-22 00:00:00'),
(18, 'e56573d72a3e7a891a079716adb9eb', 22, '2016-08-23 00:00:00'),
(19, 'd2520e48154a2ac0c9ff4f655f14c2', 23, '2016-08-23 00:00:00'),
(20, 'b7661236cc9018b84ddca41c661a20', 24, '2016-08-23 00:00:00'),
(21, 'bfaade25ec5e2e5093367fe4323188', 25, '2016-08-23 00:00:00'),
(22, '0558081fc511b389e294ff0fbbc0b0', 26, '2016-08-23 00:00:00'),
(23, '8b0f45fa00dae0d258f48022a8ad79', 27, '2016-08-24 00:00:00'),
(24, '3762ee5219883ff319a61e36fd066a', 28, '2016-08-25 00:00:00'),
(25, '12d549c7d1230e77554c4fc12326cc', 29, '2016-08-25 00:00:00'),
(26, 'f474344e5ebcbef85e44c552c2b2b2', 30, '2016-08-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `role`, `status`, `last_login`) VALUES
(12, 'mark@mark.com', '', 'mark', 'mark', '1', 0, '0000-00-00 00:00:00'),
(13, 'ako@ako.com', 'sha256:1000:l9Wf+bzQc4elXmRXo0xa++zpjhA5N61J:uPqjAX9asJfoUCJXByTFOzooeT9dwJyn', 'ako', 'ako', '0', 0, '2016-08-19 04:42:55'),
(14, 'bato@bato.com', 'sha256:1000:msfyK1AflfvJ17duIhRAARureeao/Pnd:rVwxEssiHdzAOfT2+VzIX4xfIAJ2czVl', 'Rolando', 'Bato', '1', 0, '2016-08-19 04:41:32'),
(15, 'landa@gmail.com', 'sha256:1000:/rT3KTOL3mt/V8d5SCzQr4X2Ic9Wnhjh:ZOS3qROEbP1C37UjpGUoUiha2qyRa+UF', 'landa', 'landa', '0', 0, '2016-08-19 05:44:45'),
(16, 'diane@gmail.com', 'sha256:1000:RYA0g6vnBQSFxzbM2urmx+auVRAl9S/2:teQ4foywGSIZOV3RDqDoepX9gVawpEMJ', 'diane', 'pantonial', '0', 0, '2016-08-21 06:46:44'),
(18, 'sheila@gmail.com', 'sha256:1000:s9Te6DFGbxl889pIEtYPkDuNqSTjPQRa:4nv02LDoO0nDVnew6mxI4tiwgH3yWW4z', 'sheila', 'orongan', '0', 0, '2016-08-21 07:03:03'),
(19, 'USER@gmail.com', 'sha256:1000:J1XxHxZdQl1kxBpB5cnAagXJYJnI/Fhv:xdB29FPqgUvDBYapzYKEzhhc7gdR7rct', 'USER', 'USER', '0', 0, '2016-08-21 02:57:17'),
(20, 'shipper@gmail.com', 'sha256:1000:34FpBf5gI5SD5CqvFROpbFFKairdiDw1:HOeVL4Feeh0dF7A//TPL1agBujGpx2VO', 'Shipper', 'shippe', '1', 0, '2016-08-29 07:21:42'),
(21, 'adsko@gmail.com', 'sha256:1000:F1SsuyHTP7iINPhuFWaxOuhSVQqMi6ny:9fLyJwwtBVZukYWdfeOuxmyDVbYSu1gk', 'adsko', 'adsko', '0', 0, '2016-08-29 07:17:22'),
(22, 'test@email.com', 'sha256:1000:boNHHmgHL77ZSYKFK5jKaC7VBLNadC5C:snfHhgWP1m9E+hpneL2oRBBAW6XPly19', 'test', 'test', '0', 0, '2016-08-23 09:20:52'),
(24, 'biodataphp@gmail.com', 'sha256:1000:hxr8cHS8Jj0l2I/AiXqcI3tnlY7PMFRl:HNcC9rklsqoWnAZ1p9pVezMZTWCowdJp', 'tom', 'gwinn', '0', 0, '2016-08-23 09:52:50'),
(25, 'qw@qq.com', 'sha256:1000:S9HNhmJeUeqM17HeZVouybX38Mt5uZGm:vKrCTW/ivkcPjGjANJBFQQRpl6U+vJsf', 'qw', 'qq', '0', 0, '2016-08-23 11:05:53'),
(26, 'hellokitty@gmail.com', 'sha256:1000:devBZyKL2Ue4GW0KOrxV5hmMpGO+Qsb4:GRm8/hF+bnyPnZ8E2tvyhKE8lLtz2/xV', 'diane', 'pantonial', '0', 0, '2016-08-24 04:29:07'),
(27, 'clintybanez@gmail.com', 'sha256:1000:77S2lzr4lOvu2FJKQ1ed6zL8IlEuyiZn:dsv9PhX1lZTldPl+GJ3/Sq5lbTnLUq91', 'clint', 'ybanez', '0', 0, '2016-08-24 03:25:05'),
(28, 'Shipper1@gmail.com', 'sha256:1000:+wq4FgP0POMMjtWa/84Owhne1PlEGRDB:x4ZCfH0FoY0KipFof8ORm15OTiB762M3', 'Shipper1', 'ako', '1', 0, '2016-08-25 04:19:12'),
(29, 'dpants@gmail.com', 'sha256:1000:2ZM3jet7e7uoFXRaRjm+moUomTKu6hH5:IhJnGiP+glNm6IgsAUxBtvTH7sIEIOQv', 'diane', 'pantonial', '0', 0, '2016-08-25 03:31:43'),
(30, 'claud@gmail.com', 'sha256:1000:zo9axm3KsPsiSN0oaSmgLkNBXy7UfShS:7+e0Y9ZJyyific/iIY2mTMWNGyZXPyxZ', 'claudia', 'buenavista', '1', 0, '2016-08-25 04:12:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `shipper`
--
ALTER TABLE `shipper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;