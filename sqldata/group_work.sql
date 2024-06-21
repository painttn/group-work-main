SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`id`, `name`, `user`) VALUES
(25, 'โต๊ะ', '6330251100'),
(26, 'ตู้', '6302510118'),
(27, 'เตียง', '6330251478');


CREATE TABLE `dorm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `user1` varchar(255) NOT NULL,
  `user2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `dorm` (`id`, `name`, `type`, `room`, `user1`, `user2`) VALUES
(4, 'หอพักชาย', 'ห้องธรรมดา', 'r5', 'ว่าง', 'ว่าง'),
(5, 'หอพักชาย', 'ห้องธรรมดา', 'r3', 'ว่าง', 'ว่าง'),
(6, 'หอพักหญิง', 'ห้องปรับอาการ', 'r1', 'ว่าง', 'ว่าง'),
(7, 'หอพักหญิง', 'ห้องปรับอาการ', 'r2', 'ว่าง', 'ว่าง'),
(8, 'หอพักหญิง', 'ห้องธรรมดา', 'r3', 'ว่าง', 'ว่าง'),
(10, 'หอพักชาย', 'ห้องปรับอาการ', 'r4', 'ว่าง', 'ว่าง'),
(16, 'หอพักชาย', 'ห้องปรับอาการ', 'r5', 'ว่าง', 'ว่าง'),
(17, 'หอพักชาย', 'ห้องปรับอาการ', 'r5457', 'ว่าง', 'ว่าง'),
(18, 'หอพักชาย', 'ห้องธรรมดา', 'r5123', 'ว่าง', 'ว่าง'),
(19, 'หอพักชาย', 'ห้องธรรมดา', 'r551', 'ว่าง', 'ว่าง'),
(20, 'หอพักหญิง', 'ห้องปรับอาการ', 'r112', 'ว่าง', 'ว่าง');


CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `option` (`id`, `name`, `username`) VALUES
(1, 'โต๊ะ', ''),
(3, 'ตู้', ''),
(4, 'เตียง', '');


CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `phonenumber`, `sex`, `status`, `created_at`) VALUES


ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dorm`
--
ALTER TABLE `dorm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
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
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dorm`
--
ALTER TABLE `dorm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
