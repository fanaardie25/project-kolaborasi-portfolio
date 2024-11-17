-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2024 at 08:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_fanaardi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int NOT NULL,
  `id_developers` int NOT NULL,
  `title_contact` varchar(100) DEFAULT NULL,
  `subtitle_contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `id_developers`, `title_contact`, `subtitle_contact`) VALUES
(1, 1, 'Let\'s talk', 'Ask me anything or just say hi');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id_developers` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` text,
  `fullbio` text,
  `logo` varchar(100) DEFAULT NULL,
  `image_profil` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telephone` varchar(20) DEFAULT NULL,
  `nama_belakang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id_developers`, `name`, `bio`, `fullbio`, `logo`, `image_profil`, `email`, `no_telephone`, `nama_belakang`) VALUES
(1, 'Fana ardi kurniawan', 'Welcome to my page! I am Fana Ardi Kurniawan, a professional with extensive experience in technology. I am ready to assist you with your projects.', 'I am a full-stack developer with over 5 years of experience and a\r\nportfolio of more than 200 completed projects. Using Laravel as my\r\nprimary framework, I focus on building responsive,\r\nhigh-performance, end-to-end applications. With a deep\r\nunderstanding of various application types and a solution-oriented\r\napproach to business needs, I am dedicated to helping clients\r\nachieve their goals through robust, scalable, and easily\r\nintegrated web solutions.', 'logo.jpg', 'profile.jpg', 'fanakurniawan11@gmail.com', '+62 813-9243-9304', 'ardi');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int NOT NULL,
  `id_developers` int NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `description_experience` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id_experience`, `id_developers`, `company_name`, `position`, `description_experience`) VALUES
(1, 1, 'Web Arq', 'Fullstack Developer', 'I contributed to the development of responsive and efficient web applications, ensuring optimal user experience.'),
(2, 1, 'Flits', 'Front end developer', 'At Flits, I was responsible for creating engaging and interactive user interfaces, enhancing user engagement.'),
(3, 1, 'codingstudio', 'Fullstack developer', 'At codingstudio, I developed comprehensive software solutions, from front-end to back-end, to meet client needs.');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int NOT NULL,
  `id_developers` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `id_developers`, `name`, `email`, `message`, `created_at`) VALUES
(2, 1, 'test', 'test@gmail.com', 'test', '2024-11-13 13:17:02'),
(3, 1, 'test2', 'test2@gmail.com', 'test', '2024-11-13 13:17:30'),
(4, 1, 'test3', 'test3@gmail.com', 'test', '2024-11-13 13:30:19'),
(5, 1, 'test4', 'test4@gmail.com', 'test', '2024-11-13 13:36:41'),
(6, 1, 'test5', 'test5@gmail.com', 'testtt', '2024-11-13 13:40:58'),
(7, 1, 'ardi', 'ardie@gmail.com', 'haiii', '2024-11-14 00:32:14'),
(8, 1, 'normal people', 'follgrowthindonesia@gmail.com', 'p', '2024-11-14 01:37:18'),
(9, 1, 'Fana', 'fana@gmail.com', 'P', '2024-11-14 01:49:31'),
(10, 1, '', '', '', '2024-11-14 02:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id_portfolios` int NOT NULL,
  `id_developers` int NOT NULL,
  `image_portfolios` varchar(255) DEFAULT NULL,
  `title_portfolios` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id_portfolios`, `id_developers`, `image_portfolios`, `title_portfolios`) VALUES
(1, 1, 'portfolio1.jpg', 'Website ACCU store'),
(2, 1, 'portfolio2.jpg', 'Fullstack SMM Panel website'),
(3, 1, 'portfolio3.jpg', 'Restaurant website'),
(4, 1, 'portfolio4.jpg', 'Website e-commerce'),
(5, 1, 'portfolio5.jpg', 'Kebab store website'),
(6, 1, 'portfolio6.jpg', 'Travel website');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id_services` int NOT NULL,
  `id_developers` int NOT NULL,
  `image_service` varchar(255) DEFAULT NULL,
  `title_services` varchar(100) NOT NULL,
  `description_services` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_services`, `id_developers`, `image_service`, `title_services`, `description_services`) VALUES
(1, 1, 'service1.png', 'Modern UI', 'We create visually appealing and user-friendly interfaces that enhance user experience and engagement.'),
(2, 1, 'service2.png', 'Interaktive web', 'Our interactive web solutions engage users and provide a seamless experience across devices.'),
(3, 1, 'service3.png', 'Responsive App', 'We develop responsive applications that adapt to any screen size, ensuring accessibility and usability.');

-- --------------------------------------------------------

--
-- Table structure for table `skils`
--

CREATE TABLE `skils` (
  `id_skils` int NOT NULL,
  `id_developers` int NOT NULL,
  `image_skils` varchar(100) DEFAULT NULL,
  `title_skils` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skils`
--

INSERT INTO `skils` (`id_skils`, `id_developers`, `image_skils`, `title_skils`) VALUES
(1, 1, 'html.png', 'html'),
(2, 1, 'css.png', 'css'),
(3, 1, 'javascript.png', 'javascript'),
(4, 1, 'typescript.png', 'typescript'),
(5, 1, 'reactjs.png', 'React js'),
(6, 1, 'laravel.png', 'laravel'),
(7, 1, 'bootstrap.png', 'boostrap'),
(8, 1, 'tailwind.png', 'tailwind'),
(9, 1, 'git.png', 'git'),
(10, 1, 'php.png', 'php'),
(11, 1, 'vuejs.png', 'vue js'),
(12, 1, 'nodejs.png', 'node js');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `id_developers` (`id_developers`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id_developers`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`),
  ADD KEY `id_developers` (`id_developers`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_developers` (`id_developers`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id_portfolios`),
  ADD KEY `id_developers` (`id_developers`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`),
  ADD KEY `id_developers` (`id_developers`);

--
-- Indexes for table `skils`
--
ALTER TABLE `skils`
  ADD PRIMARY KEY (`id_skils`),
  ADD KEY `id_developers` (`id_developers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id_developers` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id_portfolios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skils`
--
ALTER TABLE `skils`
  MODIFY `id_skils` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_developers`) REFERENCES `developers` (`id_developers`) ON DELETE CASCADE;

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`id_developers`) REFERENCES `developers` (`id_developers`) ON DELETE CASCADE;

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`id_developers`) REFERENCES `developers` (`id_developers`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_ibfk_1` FOREIGN KEY (`id_developers`) REFERENCES `developers` (`id_developers`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_developers`) REFERENCES `developers` (`id_developers`) ON DELETE CASCADE;

--
-- Constraints for table `skils`
--
ALTER TABLE `skils`
  ADD CONSTRAINT `skils_ibfk_1` FOREIGN KEY (`id_developers`) REFERENCES `developers` (`id_developers`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
