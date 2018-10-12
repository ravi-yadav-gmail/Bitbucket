-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2018 at 10:28 AM
-- Server version: 10.0.35-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_token`
--

CREATE TABLE `access_token` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `access_token`
--

INSERT INTO `access_token` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(4, 4, 4, 'YTg2MzY1NjVmMGI3MmEwZjk3ODU1ODYyOTU3NGVlM2E1ZDNhM2Q0NDIxZDc0MGE5NzY2ZmQzZTE4YTVjODBlOA', 1539358724, NULL),
(5, 4, 4, 'N2U2NmJjN2NjMmRiMGY4ZWVjMDM3ZTlmOTIyZTViNDgxMDcyOTI1ZTM1YWZlYjgxMDZlZDE0NDc2ZjQ5Y2NiOA', 1539413982, NULL),
(6, 5, 5, 'MTgyMzE1YjY1ZmQyZTM4YzczYjQ5YThiMGU1ZDAyZDZmZTcxZjdjM2U5MzBkZjk0YzFlMzM2YzcxM2RlNTJiMg', 1539422842, NULL),
(7, 5, 5, 'Yjc0OWYzYmFkMjZmMzMyMjZmNmQ2MzNmNGY3YTU0MjEzZmI5YzEwMjMxZjE5ZTgyOTQ2ZTFjMzMyYzY1ZGZlOA', 1539424786, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_code`
--

CREATE TABLE `auth_code` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uri` longtext COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `random_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uris` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_grant_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `random_id`, `redirect_uris`, `secret`, `allowed_grant_types`, `user_id`) VALUES
(4, '54jk3ruksnsw804sw4408ggow0488g8c4kwsc8kskg0cwssggs', 'a:1:{i:0;s:23:\"http://www.cleverti.com\";}', '5zidkryv2p8og4kcsoccgw0gg08k08c88g48s8cswo04c0884w', 'a:2:{i:0;s:8:\"password\";i:1;s:13:\"refresh_token\";}', NULL),
(5, '1557p1yenrpc0gs8k0kwkc44k0cswg8swwskgs84sg8cogw4so', 'a:1:{i:0;s:63:\"https://develop.ckgs.us/ravinin/web/app_dev.php/api/get/restapi\";}', '1zzlirvkolk0g4g044k80o00okcookwk8w8s8kww844wkkco8s', 'a:2:{i:0;s:8:\"password\";i:1;s:13:\"refresh_token\";}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employee_sal` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refresh_token`
--

CREATE TABLE `refresh_token` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `refresh_token`
--

INSERT INTO `refresh_token` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(4, 4, 4, 'ODQ2MDJhNGY3YzMyY2RkNGRmYzY3N2NjMzg1NDBiYmUxYzY2YjVlYWI1NzMxZDIyNDI2OWZmZmZmMzZhYjQ2MQ', 1540481924, NULL),
(5, 4, 4, 'MmQ1MDJmOTNiYzBiY2EyZWI0NWJkN2IxOTZkN2FkZjAxN2VmYjMxNWRlYTYzZDZiNjFkNzU0ZjdmZjlmNWQ3Mw', 1540537182, NULL),
(7, 5, 5, 'MGYwNWQwMjE5NmIwODQ4YTU3OWNiMjA4NjIxZjVhY2U2NTY2ZTUyNWI3NTkwYjJkZTEyMTZiOTcwNTgwZjViZA', 1540547986, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(4, 'ricardo.correia', 'ricardo.correia', 'ricardo.correia@cleverti.com', 'ricardo.correia@cleverti.com', 1, NULL, '$2y$13$dCjMDFruIhKEsqBZ.isDq.ItpPQnQxGhWOq4FOG1GFyQYQxW2tM0a', NULL, NULL, NULL, 'a:0:{}'),
(5, 'ravi.yadav', 'ravi.yadav', 'raviyadav.2110@gmail.com', 'raviyadav.2110@gmail.com', 1, NULL, '$2y$13$VmHNDfwfBl.14qZTWN1dF.8myn4.gH6PoKhq2MHDmPZ3elZkRSIsy', NULL, NULL, NULL, 'a:0:{}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_token`
--
ALTER TABLE `access_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B6A2DD685F37A13B` (`token`),
  ADD KEY `IDX_B6A2DD6819EB6921` (`client_id`),
  ADD KEY `IDX_B6A2DD68A76ED395` (`user_id`);

--
-- Indexes for table `auth_code`
--
ALTER TABLE `auth_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5933D02C5F37A13B` (`token`),
  ADD KEY `IDX_5933D02C19EB6921` (`client_id`),
  ADD KEY `IDX_5933D02CA76ED395` (`user_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C7440455A76ED395` (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refresh_token`
--
ALTER TABLE `refresh_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C74F21955F37A13B` (`token`),
  ADD KEY `IDX_C74F219519EB6921` (`client_id`),
  ADD KEY `IDX_C74F2195A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_token`
--
ALTER TABLE `access_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_code`
--
ALTER TABLE `auth_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refresh_token`
--
ALTER TABLE `refresh_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_token`
--
ALTER TABLE `access_token`
  ADD CONSTRAINT `FK_B6A2DD6819EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_B6A2DD68A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `auth_code`
--
ALTER TABLE `auth_code`
  ADD CONSTRAINT `FK_5933D02C19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_5933D02CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C7440455A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `refresh_token`
--
ALTER TABLE `refresh_token`
  ADD CONSTRAINT `FK_C74F219519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_C74F2195A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
