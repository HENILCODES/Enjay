-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2023 at 07:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enjay`
--
CREATE DATABASE IF NOT EXISTS `enjay` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `enjay`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `passwords` text NOT NULL,
  `emails` text NOT NULL,
  `contacts` bigint(20) NOT NULL,
  `sems` int(11) NOT NULL,
  `hobbys` text NOT NULL,
  `genders` text NOT NULL,
  `fav_colors` text NOT NULL,
  `intrests` int(11) NOT NULL,
  `dobs` date NOT NULL,
  `websites` text NOT NULL,
  `photos` text NOT NULL,
  `time_stamps` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `names`, `passwords`, `emails`, `contacts`, `sems`, `hobbys`, `genders`, `fav_colors`, `intrests`, `dobs`, `websites`, `photos`, `time_stamps`) VALUES
(37, 'henil', 'rfjh54', 'henilcode@gmail.com', 8888888888, 3, 'Programming , other', 'Female', '#ea3e3e', 48, '2023-01-01', 'https://henil.rf.gd/Web_Chat', 'Henil.ico', '2022-12-29 03:13:20'),
(39, 'raj', 'jhghjasd5d4f', 'henilcode@gmail.com', 8888888888, 2, 'Programming , Cricket , Football', 'Other', '#ad33ff', 39, '2023-01-25', 'https://google.com', 'Screenshot from 2022-11-25 14-09-39.png', '2022-12-29 03:14:44'),
(40, 'aman', 'maas546', 'prajapatihenil@gmail.com', 908180280, 6, 'Programming , Cricket , other', 'Male', '#227c72', 25, '2023-01-19', 'https://henil.rf.gd/Web_Chat', 'dog.jpg', '2022-12-29 03:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `time_stamp`) VALUES
(1, 'Henil', '565', 'prajapatihenil1102@gmail.com', '2022-12-28 10:29:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `flaskdb`
--
CREATE DATABASE IF NOT EXISTS `flaskdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `flaskdb`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `SENDER` text NOT NULL,
  `MESSAGE` text NOT NULL DEFAULT ' ',
  `FILE` text NOT NULL,
  `T_FILE` text NOT NULL,
  `DATETIME` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `SENDER`, `MESSAGE`, `FILE`, `T_FILE`, `DATETIME`) VALUES
(32, 'henil', 'hi', '', '', '2022-10-02 10:54:16'),
(33, 'heni', 's', '', '', '2022-10-02 11:24:59'),
(34, 'heni', 'j', '', '', '2022-10-02 11:25:55'),
(35, 'henil', 'msn', '', '', '2022-10-02 11:30:19'),
(36, 'henil', 's', '', '', '2022-10-02 11:30:22'),
(37, 'henil', 's', '', '', '2022-10-02 11:30:23'),
(38, 'henil', 's', '', '', '2022-10-02 11:34:00'),
(39, 'henil', 'n', '', '', '2022-10-02 12:25:09'),
(40, 'henil', 'd', '', '', '2022-10-03 13:30:06'),
(41, 'Henil', 'S', 'test.mdb', 'test.mdb', '2022-10-03 14:54:24'),
(42, 'Henil', 'S', 'test.mdb', 'test.mdb', '2022-10-03 14:55:01'),
(43, 'Henil', 'gd', '', '', '2022-10-03 15:15:19'),
(44, 'Henil', '.', '.gitignore', '.gitignore', '2022-10-03 15:16:06'),
(45, 'Henil', '.', '.gitignore', '.gitignore', '2022-10-03 15:16:36'),
(46, 'Henil', 'g', '', '', '2022-10-03 15:17:21'),
(47, 'Henil', ' ', 'html.html', 'html.html', '2022-10-03 15:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `ID` bigint(20) NOT NULL,
  `USER_NAME` text NOT NULL,
  `USER_EMAIL` text NOT NULL,
  `USER_PASSWORD` text NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`ID`, `USER_NAME`, `USER_EMAIL`, `USER_PASSWORD`, `TIME_STAMP`) VALUES
(1, 'Henil', 'he@hs', '123', '2022-10-01 23:42:03'),
(2, 'Henil1', 'he@hs', '123', '2022-10-01 23:43:07'),
(3, 'hari', 'hari@dk', '123', '2022-10-02 02:58:31'),
(4, 'heni', 'jsh@ejh', '5', '2022-10-02 05:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`USER_NAME`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `music`
--
CREATE DATABASE IF NOT EXISTS `music` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `music`;

-- --------------------------------------------------------

--
-- Table structure for table `audio_detail`
--

CREATE TABLE `audio_detail` (
  `AID` int(11) NOT NULL,
  `USER_NAME` text NOT NULL,
  `AUDIO_NAME` text NOT NULL,
  `AUDIO_FILE` text NOT NULL,
  `AUDIO_LANGUAGE` text NOT NULL,
  `UPLOAD_DATE` text NOT NULL,
  `UPLOAD_TIME` text NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio_detail`
--

INSERT INTO `audio_detail` (`AID`, `USER_NAME`, `AUDIO_NAME`, `AUDIO_FILE`, `AUDIO_LANGUAGE`, `UPLOAD_DATE`, `UPLOAD_TIME`, `TIME_STAMP`) VALUES
(1, 'Henil Code', 'Pushpa | Oo Bolega Ya', '1653727073Oo Bolega Ya.mp3', 'Hindi', '28-May-2022', '2:07 pm', '2022-05-28 08:36:35'),
(2, 'Henil Code', 'Money Heist | Bella Ciao', '1653727207bela_song.mp3', 'English', '28-May-2022', '2:10 pm', '2022-05-28 08:38:50'),
(3, 'Henil Code', 'Master the Blaster | Vijay Master', '1653729190Master the Blaster.mp3', 'Other', '28-May-2022', '2:43 pm', '2022-05-28 09:11:53'),
(4, 'Henil Code', 'Oo Desh Mere | Bhuj', '1653749669Desh Mere Bhuj.mp3', 'Hindi', '28-May-2022', '8:24 pm', '2022-05-28 14:53:11'),
(5, 'Henil Code', 'Saiyaan Saiyaan Re | Saaho', '1653750088Saiyaan saho.mp3', 'Hindi', '28-May-2022', '8:31 pm', '2022-05-28 15:00:10'),
(6, 'Henil', 'Background Song | Scam 1992', '1653798367scam.mp3', 'Other', '29-May-2022', '9:56 am', '2022-05-29 04:24:44'),
(7, 'Henil', 'Teri Mitti | Keshri', '1653822736Teri Mitti.mp3', 'Hindi', '29-May-2022', '4:42 pm', '2022-05-29 11:10:57'),
(8, 'Henil', 'jgjkkg', '1666319852Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:07 am', '2022-10-21 02:37:32'),
(9, 'Henil', 'jhjkjhkjkj', '1666320426Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:17 am', '2022-10-21 02:47:06'),
(10, '', 'mkhk', '1666320713Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:21 am', '2022-10-21 02:51:53'),
(11, '', 'jhjh', '1666320780Naacho Naacho.mp3', 'Other', '21-Oct-2022', '8:23 am', '2022-10-21 02:53:00'),
(12, 'h', 'mkjxk', '1666325454Naacho Naacho.mp3', 'Other', '21-Oct-2022', '9:40 am', '2022-10-21 04:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `UID` bigint(20) NOT NULL,
  `USER` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `EMAIL` text NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`UID`, `USER`, `PASSWORD`, `EMAIL`, `TIME_STAMP`) VALUES
(1, 'Henil', '@henil@1110', 'prajapatihenil1515@gmail.com', '2022-05-28 08:34:52'),
(2, 'Henil Code', '@1510@henil', 'henilcode@gmail.com', '2022-05-28 08:35:23'),
(3, 'Surya', 'Nisa@122', 'suryavnshishivam.000@gmail.com', '2022-05-28 10:35:01'),
(4, 'Sir_premji', '0981234567@prem', 'tprateek640@gmail.com', '2022-05-28 10:35:58'),
(5, 'h', '12', 'he@he', '2022-10-21 02:32:41'),
(6, 'j', '12', 'h@he', '2022-10-21 02:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio_detail`
--
ALTER TABLE `audio_detail`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio_detail`
--
ALTER TABLE `audio_detail`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `UID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"on\",\"pin_text\":\"false\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"store\",\"table\":\"products\"},{\"db\":\"enjay\",\"table\":\"users\"},{\"db\":\"enjay\",\"table\":\"student\"},{\"db\":\"store\",\"table\":\"customers\"},{\"db\":\"store\",\"table\":\"admin\"},{\"db\":\"store\",\"table\":\"customer_products\"},{\"db\":\"store\",\"table\":\"reviews\"},{\"db\":\"store\",\"table\":\"document\"},{\"db\":\"music\",\"table\":\"audio_detail\"},{\"db\":\"store\",\"table\":\"customer_orders\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('store', 'customers', 'name'),
('store', 'document', 'number'),
('store', 'reviews', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'enjay', 'student', '{\"CREATE_TIME\":\"2022-12-27 16:06:06\",\"col_order\":[0,1,2,3,4,5,6,7,8,9,10,11,12,13],\"col_visib\":[1,1,1,1,1,1,1,1,1,1,1,1,1,1]}', '2022-12-27 10:49:58'),
('root', 'store', 'reviews', '{\"sorted_col\":\"`review`.`customer_id` DESC\"}', '2022-12-31 09:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-01-07 06:14:33', '{\"Console\\/Mode\":\"collapse\",\"Server\\/hide_db\":\"\",\"Server\\/only_db\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Henil', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`) VALUES
(19, 'Henil Code', 'prajapatihenil1102@gmail.com', 'henil12'),
(21, 'Kevin', 'kevin@gmail.com', 'kevin@gmail12'),
(24, 'dixita', 'dixita@gmail.com', 'dixita25'),
(25, 'pratiksha', 'pratiksha@gmail.com', 'pratiksha12'),
(26, 'nayan', 'nayan@gmail.com', 'nayan@1234'),
(27, 'raj', 'raj@gmail.com', 'raj@12D55'),
(28, 'Henil Real', 'henilcode@gmail.com', 'henil@125');

-- --------------------------------------------------------

--
-- Table structure for table `customer_products`
--

CREATE TABLE `customer_products` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_products`
--

INSERT INTO `customer_products` (`id`, `customer_id`, `quantity`, `product_id`) VALUES
(93, 28, 1, 136),
(95, 21, 5, 135),
(97, 21, 7, 132),
(98, 28, 5, 137),
(99, 28, 3, 132),
(101, 28, 1, 138);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `number` text NOT NULL,
  `name` text NOT NULL,
  `customers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `number`, `name`, `customers_id`) VALUES
(21, '405255485945', 'Adhar Card', 28);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `photo`) VALUES
(130, 'Smart Watch', 2590, '61y2VVWcGBL._SX522_.jpg'),
(131, 'Pendrive', 350, '61DjwgS4cbL._SX522_.jpg'),
(132, 'Gaming Mouce', 1000, '61CqLgubwoL._SX522_.jpg'),
(133, 'Apple Laptop ', 50000, 'lap.jpeg'),
(135, 'speaker with alexa smart home ', 2500, '61EXU8BuGZL._SX679_.jpg'),
(136, 'Multimedia Speaker with Aux Connectivity', 1090, '71L94y9-hKL._SL1500_.jpg'),
(137, 'OnePlus Nord 2T 5G ', 28999, '61ahn9N38zL._SL1500_.jpg'),
(138, 'bluetooth earbuds', 2000, '51HBom8xz7L._SX522_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `product_id`, `customer_id`) VALUES
(90, 'e', 135, 19),
(91, 'dd', 133, 19),
(92, 's', 135, 21),
(99, 'Nice  Sound', 136, 28),
(100, 'Smart', 130, 28),
(101, 'Super', 135, 28),
(104, 'wow', 137, 21),
(105, 'hmm', 130, 21),
(106, 'not bad', 138, 21),
(107, 'boos', 133, 21),
(108, 'super', 137, 28),
(110, 'h', 138, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adhar_id` (`customers_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_products`
--
ALTER TABLE `customer_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD CONSTRAINT `customer_products_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customer_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
--
-- Database: `temp`
--
CREATE DATABASE IF NOT EXISTS `temp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `temp`;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('Henil', '@1510@henil'),
('Raj', '123456'),
('Shivam', '526599');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `User_Name` text NOT NULL,
  `Message` longblob NOT NULL DEFAULT '\'null\'',
  `file` varchar(500) NOT NULL,
  `Time_Stamps` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `User_Name`, `Message`, `file`, `Time_Stamps`) VALUES
(1, 'Henil', 0x6869, '', '07:26 am'),
(2, 'Henil', 0x6865690d0a736b6a660d0a66670d0a66646c6b68670d0a0d0a, '', '07:30 am'),
(3, 'Henil', 0x68692065656a6820686920736620646b7368207368206b6820666a20766864666868686466682068642066682064666a68206b6a6664206b686a64662068206b646a2066676b6a64206b66686a686466206768646b66682064666b6820676864666a0d0a, '', '07:33 am'),
(4, 'Henil', 0x640d0a730d0a730d0a730d0a730d0a730d0a730d0a730d0a0d0a0d0a0d0a0d0a, '', '07:35 am'),
(5, 'Henil', 0x660d0a660d0a0d0a0d0a0d0a0d0a0d0a0d0a66, '', '07:35 am'),
(6, 'Henil', '', '', '07:35 am'),
(7, 'Henil', '', '', '07:37 am'),
(8, 'Henil', '', 'Photo_Uplod.jpg', '07:37 am'),
(9, 'Henil', 0x686520730d0a660d0a640d0a670d0a640d0a6664662064660d0a67, '', '07:38 am'),
(10, 'Henil', 0x48656e696c20452067666820646820642020627364200d0a, '', '07:38 am');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SPID` int(11) NOT NULL,
  `SNAME` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `CITY` varchar(10) NOT NULL,
  `EMAIL` text NOT NULL,
  `CONTACT` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SPID`, `SNAME`, `DOB`, `CITY`, `EMAIL`, `CONTACT`) VALUES
(1, 'henil prajapati', '2003-12-12', 'Vapi', 'prajapatihenil1102@gmail.com', 98558885),
(2, 'jay', '2022-12-17', 'valsad', 'prajapatihenil1102@gmail.com', 666666),
(3, 'henil prajapati', '2003-12-14', 'Vapi', 'prajapatihenil1102@gmail.com', 9999999999);

-- --------------------------------------------------------

--
-- Table structure for table `temp_user_detail`
--

CREATE TABLE `temp_user_detail` (
  `U_Id` int(11) NOT NULL,
  `U_Name` text NOT NULL,
  `U_Password` text NOT NULL,
  `U_Email` text NOT NULL,
  `Time_Stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `U_Id` int(11) NOT NULL,
  `U_Name` text NOT NULL,
  `U_Password` text NOT NULL,
  `U_Email` text NOT NULL,
  `Time_Stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`U_Id`, `U_Name`, `U_Password`, `U_Email`, `Time_Stamp`) VALUES
(1, 'Henil', '123', 'prajapati@gmail.com', '2022-05-16 14:58:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SPID`);

--
-- Indexes for table `temp_user_detail`
--
ALTER TABLE `temp_user_detail`
  ADD PRIMARY KEY (`U_Id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD UNIQUE KEY `U_Id` (`U_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `SPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_user_detail`
--
ALTER TABLE `temp_user_detail`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `U_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `web_chat`
--
CREATE DATABASE IF NOT EXISTS `web_chat` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `web_chat`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `User_Name` text NOT NULL,
  `Message` text NOT NULL DEFAULT 'NL',
  `file` varchar(500) NOT NULL,
  `File_Name` text NOT NULL,
  `Time_Stamps` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `User_Name`, `Message`, `file`, `File_Name`, `Time_Stamps`) VALUES
(71, 'henil', 'anA=', '1669285344-', '', '24-Nov-2022 3:52 pm'),
(72, 'henil', 'aGk=', '1669285365-', '', '24-Nov-2022 3:52 pm'),
(73, 'henil', 'cw==', '1669974003-', '', '02-Dec-2022 3:10 pm'),
(74, 'henil', '', '1669974016-Screenshot from 2022-11-04 08-42-24.png', 'Screenshot from 2022-11-04 08-42-24.png', '02-Dec-2022 3:10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `ID` bigint(20) NOT NULL,
  `UNAME` text NOT NULL,
  `UPASSWORD` text NOT NULL,
  `UEMAIL` text NOT NULL,
  `STATUS` text NOT NULL DEFAULT 'PENDING',
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`ID`, `UNAME`, `UPASSWORD`, `UEMAIL`, `STATUS`, `time_stamp`) VALUES
(1, 'henil', '123', 'henil@heem.e', 'VERIFIED', '2022-10-21 02:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
