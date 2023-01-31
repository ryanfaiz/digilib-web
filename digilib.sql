-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 02:28 PM
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
-- Database: `digilib`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(48) NOT NULL,
  `folder` varchar(255) NOT NULL,
  `blurb` text NOT NULL,
  `pages` int(5) NOT NULL,
  `isbn` int(20) NOT NULL,
  `published_date` date NOT NULL,
  `publisher` varchar(48) NOT NULL,
  `author` varchar(48) NOT NULL,
  `tag` varchar(15) NOT NULL,
  `category` varchar(15) NOT NULL,
  `stats` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `folder`, `blurb`, `pages`, `isbn`, `published_date`, `publisher`, `author`, `tag`, `category`, `stats`) VALUES
(1, 'Book 1', 'book-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 140, 97812345, '2022-08-01', 'Kompas', 'Zalfa', 'Comedy', 'Non-fiction', 3),
(2, 'Book 2', 'book-2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 108, 516186896, '2022-08-01', 'Sindo', 'Zalfa', 'Fantasy', 'Fiction', 89),
(3, 'Book 3', 'book-3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 247, 746463574, '2022-08-01', 'Gramedia', 'Rania', 'Mystery', 'Fiction', 12);

-- --------------------------------------------------------

--
-- Table structure for table `lokal`
--

CREATE TABLE `lokal` (
  `id` int(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lokal`
--

INSERT INTO `lokal` (`id`, `title`, `isbn`, `status`, `return_date`) VALUES
(1, 'The Star and I', '9787261091794', 0, '2023-02-03'),
(2, 'Melangkah', '9787525515585', 0, NULL),
(3, 'Earth', '9782470671898', 0, NULL),
(4, 'Ayat-ayat cinta', '9782845120273', 0, NULL),
(5, ' The Sea Speaks His Name', '9783703686566', 0, NULL),
(6, '5 CM', '9788967976330', 0, NULL),
(7, '172 Days', '9788436634433', 0, '2023-02-05'),
(8, 'Oh My Savior', '9781716121470', 0, NULL),
(9, 'Laut Bercerita', '9789959019677', 0, NULL),
(10, 'Saragas', '9785482471586', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nisp` int(18) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nisp`, `pass`, `admin`) VALUES
(1, 'Zalfa Rania Hawa', 202020419, '$2y$10$YK3sXzRFwBheBi8CEAOMN.jEHrE/8o5N0fX3rQ5OP84bJx9nMH3Ke', 1),
(2, 'Ryan Faiz Sanie', 202020410, '$2y$10$UfVyQwaZgjEQ7WGsfocaee0xdBQZ9Iccbhdf.IAZSbhZF9pQYBSiu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokal`
--
ALTER TABLE `lokal`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokal`
--
ALTER TABLE `lokal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
