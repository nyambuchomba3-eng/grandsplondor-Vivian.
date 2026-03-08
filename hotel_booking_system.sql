...............-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2026 at 01:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'vivian', '2fd4e3741546050a110c416020a167b4');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event_category` enum('Romantic','Corporate','Entertainment') NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `color_theme` text DEFAULT NULL,
  `refreshments` text DEFAULT NULL,
  `pa_system` enum('Yes','No') NOT NULL,
  `accommodation_requirements` text DEFAULT NULL,
  `lingual_services` text DEFAULT NULL,
  `additional_notes` text DEFAULT NULL,
  `booking_status` enum('Pending','Quoted','Cancelled') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `full_name`, `phone`, `email`, `event_category`, `event_type`, `capacity`, `color_theme`, `refreshments`, `pa_system`, `accommodation_requirements`, `lingual_services`, `additional_notes`, `booking_status`, `created_at`) VALUES
(4, 'Jane Doe', '0700000000', 'admin@bestsafariadventure.ca', 'Corporate', 'Conference', 250, 'Biege, gold, black', 'Beverages only', 'Yes', '', 'Interpretation services from Spanish to English', '', 'Pending', '2026-01-08 19:50:41'),
(5, 'Vivian Nyambura', '0712325459', 'jedidahwakane@gmail.com', 'Romantic', 'Anniversary Celebration', 300, 'Sky blue, white, black', 'Food and beverages', 'Yes', '', '', '', 'Pending', '2026-01-08 19:52:49'),
(6, 'Timothy Munene', '0752654896', 'munenetimothy4@gmail.com', 'Entertainment', 'Birthday Party', 50, 'Black and white', 'Food, beverages, alcohol', 'No', '', '', '', 'Quoted', '2026-01-08 19:54:02'),
(7, 'Timothy Munene', '0752654896', 'admin@bestsafariadventure.ca', 'Romantic', 'Wedding Ceremony', 800, 'jhhedheh', 'fddgg', 'Yes', '', '', '', 'Pending', '2026-01-15 13:45:04'),
(11, 'Vivian Nyambura', '0752654896', 'wakanejoseph@gmail.com', 'Corporate', 'Product Launch', 550, 'Green Gold Black', 'Water', 'Yes', '', 'Spanish English', '', 'Pending', '2026-01-16 07:53:41'),
(12, 'Jane Doe', '0700000000', 'wakanejoseph@gmail.com', 'Entertainment', 'Cultural Night', 450, 'ffhgthtrhgerf', 'dsfghtrjhytrh', 'No', '', '', '', 'Quoted', '2026-01-16 08:15:03'),
(13, 'VIVI', '0756098989', 'vivian@gmail.com', 'Entertainment', 'Live Music Night', 890, 'PINK', 'BEVARAGES', 'No', '', '', '', 'Quoted', '2026-01-16 13:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `full_name`, `email`, `phone`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Tim Creative', 'timcreativekenya@gmail.com', '0712325459', 'JUST HELLO', 'We’d love to hear from you. Reach out for bookings or inquiries.\r\nTIM', '2026-01-15 12:55:36'),
(2, 'Tim Creative', 'timcreativekenya@gmail.com', '0712325459', 'JUST HELLO', 'We’d love to hear from you. Reach out for bookings or inquiries.\r\nTIM', '2026-01-15 12:58:14'),
(3, 'Botswana', 'wakanejoseph@gmail.com', '0752654896', 'FORM TESTING', 'Elegant wedding setups with customized décor and services.', '2026-01-15 13:00:45'),
(4, 'Featured', 'jedidahwakane@gmail.com', '0700000000', 'TEST 1', 'Elegant wedding setups with customized décor and services.', '2026-01-15 13:02:07'),
(6, 'VIVIAN NYAMBU', 'vivi@gmail.com', '0752654896', 'JUST HELLO', 'gfdgdgghgthh', '2026-01-15 15:30:46'),
(8, 'mary', 'mary@gmail', '0756098989', 'booking', 'We’d love to hear from you. Reach out for bookings or inquiries.', '2026-01-16 13:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
