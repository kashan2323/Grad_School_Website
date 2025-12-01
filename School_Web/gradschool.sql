-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2025 at 11:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'kashan', 'awansahab23@gmail.com', 'hello sir!!!', '2025-10-28 00:47:25'),
(5, 'ayesha', 'ayeshaaptech23@gamil.com', 'Complete Work!!', '2025-10-28 00:56:11'),
(6, 'ayesha', 'ayeshaaptech23@gamil.com', 'Complete Work!!', '2025-10-28 00:59:14'),
(7, 'ayesha', 'ayeshaaptech23@gamil.com', 'Complete Work!!', '2025-10-28 01:00:09'),
(8, 'ayesha', 'ayeshaaptech23@gamil.com', 'Complete Work!!', '2025-10-28 01:00:39'),
(10, 'Ayeshy Awan', 'awansahab23@gmail.com', 'kashan ki janan ayeshy awan!!', '2025-10-28 02:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `author_image` varchar(150) NOT NULL,
  `price_type` enum('Free','Pay') NOT NULL,
  `alt_text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `image`, `author_image`, `price_type`, `alt_text`) VALUES
(1, 'Web Development Basics', 'Learn how to build your first website using HTML, CSS, and JavaScript.', 'assets/images/courses-01.jpg', 'assets/images/author-01.png', 'Free', 'Web Development Course'),
(2, 'PHP for Beginners', 'A complete guide to PHP programming with hands-on examples.', 'assets/images/courses-02.jpg', 'assets/images/author-02.png', 'Pay', 'PHP Course'),
(3, 'Python Programming', 'Master Python from basics to advanced level including OOP and file handling.', 'assets/images/courses-03.jpg', 'assets/images/author-03.png', 'Free', 'Python Programming'),
(4, 'Database Management', 'Understand MySQL, normalization, and relational databases.', 'assets/images/courses-04.jpg', 'assets/images/author-04.png', 'Pay', 'Database Course'),
(5, 'JavaScript Essentials', 'Deep dive into JavaScript concepts and DOM manipulation.', 'assets/images/courses-05.jpg', 'assets/images/author-05.png', 'Free', 'JavaScript Course'),
(6, 'HTML & CSS Advanced', 'Learn responsive design, Flexbox, and CSS Grid in depth.', 'assets/images/courses-01.jpg', 'assets/images/author-01.png', 'Pay', 'HTML CSS Advanced'),
(7, 'ReactJS Crash Course', 'Get started with React components, hooks, and state management.', 'assets/images/courses-02.jpg', 'assets/images/author-02.png', 'Free', 'ReactJS Course'),
(8, 'Laravel Framework', 'Build full-stack applications using Laravel MVC framework.', 'assets/images/courses-03.jpg', 'assets/images/author-03.png', 'Pay', 'Laravel Framework'),
(9, 'Node.js & Express', 'Learn backend development using Node.js and Express framework.', 'assets/images/courses-04.jpg', 'assets/images/author-04.png', 'Free', 'Node.js Course'),
(10, 'Data Structures', 'Understand algorithms, arrays, stacks, and queues with real examples.', 'assets/images/courses-05.jpg', 'assets/images/author-05.png', 'Pay', 'Data Structures'),
(11, 'WordPress Development', 'Create professional websites using WordPress themes and plugins.', 'assets/images/courses-01.jpg', 'assets/images/author-01.png', 'Free', 'WordPress Development');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`) VALUES
(1, 'All Courses', 'Curabitur id eros vehicula, tincidunt libero eu lobortis mi In mollis eros a posuere imperdiet Donec maximus elementum ex Cras convallis ex rhoncus laoreet libero eu vehicula liber\r\nCurabitur id eros vehicula tincidunt libero eu lobortis mi In mollis eros a posuere imperdiet'),
(2, 'Virtual Class', 'Curabitur id eros vehicula, tincidunt libero eu lobortis mi In mollis eros a posuere imperdiet Donec maximus elementum ex Cras convallis ex rhoncus laoreet libero eu vehicula liber\r\nCurabitur id eros vehicula tincidunt libero eu lobortis mi In mollis eros a posuere imperdiet'),
(3, 'Real Meeting', 'Curabitur id eros vehicula, tincidunt libero eu lobortis mi In mollis eros a posuere imperdiet Donec maximus elementum ex Cras convallis ex rhoncus laoreet libero eu vehicula liber\r\nCurabitur id eros vehicula tincidunt libero eu lobortis mi In mollis eros a posuere imperdiet');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `phone`, `created_at`) VALUES
(3, 'Ayeshy Awan', 'awansahab23@gmail.com', '03012820355', '2025-10-28 03:16:13'),
(4, 'Ayeshy Awan', 'awansahab23@gmail.com', '03012820355', '2025-10-28 03:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `subtitle`, `description`, `button_text`, `video_title`, `video_link`, `image_path`) VALUES
(1, 'Watch the video to learn more', 'about Grad School', 'You are NOT allowed to redistribute this template ZIP file on any template collection website. However you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress You may for details Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio nec interdum quam felis non ante', 'External URL', 'Power HTML Template', 'https://www.youtube.com/watch?v=r9LtOG6pNUw', 'assets/images/main-thumb.png');

-- --------------------------------------------------------

--
-- Table structure for table `why_us_tabs`
--

CREATE TABLE `why_us_tabs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_us_tabs`
--

INSERT INTO `why_us_tabs` (`id`, `title`, `image`, `description`) VALUES
(1, 'Best Education', 'assets/images/choose-us-image-01.png', 'Grad School is free educational HTML template with Bootstrap 4.5.2 CSS layout. Feel free to use it for educational or commercial purpose You may want to maketo TemplateMo Please tell your friends about us. Thank you'),
(2, 'Top Management', 'assets/images/choose-us-image-02.png', 'You can modify this HTML layout by editing contents and adding more pages as you needed. Since this template has options to add dropdown menus, you can put many HTML pages Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante '),
(3, 'Quality Meeting', 'assets/images/choose-us-image-03.png', 'You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. For more information, you shall now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us_tabs`
--
ALTER TABLE `why_us_tabs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_us_tabs`
--
ALTER TABLE `why_us_tabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
