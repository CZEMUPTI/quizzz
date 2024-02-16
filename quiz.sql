-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 04:04 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `pytanie` varchar(50) NOT NULL,
  `odpowiedz1` varchar(50) NOT NULL,
  `odpowiedz2` varchar(50) NOT NULL,
  `odpowiedz3` varchar(50) NOT NULL,
  `odpowiedz4` varchar(50) NOT NULL,
  `dobraodpowiedz` varchar(50) NOT NULL,
  `punkty` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pytania`
--

INSERT INTO `pytania` (`pytanie`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `dobraodpowiedz`, `punkty`) VALUES
('Co oznacza skrót CSS?', 'Cascading Style Sheets', 'Creative Style Syntax', 'Computer Style Sheets', 'Colorful Style Sheets', '3', NULL),
('Co oznacza skrót HTML?', 'Hyper Text Markup Language', 'High Tech Machine Learning', 'Hyperlink and Text Markup Language', 'Home Tool Markup Language', '1', NULL),
('Co oznacza skrót SQL?', 'Structured Query Language', 'Simple Question Language', 'Standard Query Loop', 'System Query Language', '2', NULL),
('Co to jest \"git\" ?', 'System kontroli wersji', 'Baza danych', 'Edytor tekstu', 'Framework JavaScript', '4', NULL),
('W którym języku programowania używa się notacji Ca', 'JavaScript', 'Python', 'C++', 'Ruby', '4', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdobytepunkty`
--

CREATE TABLE `zdobytepunkty` (
  `punkty` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zdobytepunkty`
--

INSERT INTO `zdobytepunkty` (`punkty`) VALUES
(41),
(41);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`pytanie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
