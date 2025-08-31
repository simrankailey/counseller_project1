-- Cleaned MySQL Dump for counseling_service

SET NAMES utf8mb4;
SET time_zone = '+00:00';

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` VALUES 
(1,'simi','simrankailet23@gmail.com','hello','2025-08-06 16:26:51'),
(2,'edfnsj','aaf@gmail.com','afaetaet','2025-08-06 16:30:02'),
(3,'siya','siya@gmail.com','gsdga','2025-08-06 16:37:45'),
(4,'edfnsj','siya@gmail.com','wfasfas','2025-08-06 16:40:15'),
(5,'sita','aaf@gmail.com','fsgsegsg','2025-08-06 16:42:03');

--
-- Table structure for table `counselling_requests`
--

DROP TABLE IF EXISTS `counselling_requests`;
CREATE TABLE `counselling_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `interest` text NOT NULL,
  `career_goal` varchar(100) DEFAULT NULL,
  `preferred_country` varchar(50) DEFAULT NULL,
  `comments` text,
  `has_answered` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `counselling_requests`
--

INSERT INTO `counselling_requests` VALUES 
(2,'poonam','poonam@poonam.com','7814417338','Commerce','Science','Engineer','Abroad','testing it','no','2025-08-31 13:21:43');

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES 
(2,'simran','simrankailey536@gmail.com','12345','2025-08-06 14:04:50',0),
(3,'neelam','neelam@gmail.com','12345','2025-08-06 17:22:37',0),
(4,'kashish','kashish@gmail.com','12345','2025-08-08 08:44:16',0),
(5,'poonam','poonam@gmail.com','poonam','2025-08-15 17:33:24',0),
(6,'admin user','admin@admin.com','password','2025-08-31 11:25:41',1);

-- End of dump
