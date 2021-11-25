-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lis 2021, 17:55
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bike`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bike`
--

CREATE TABLE `bike` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `brand` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `bike`
--

INSERT INTO `bike` (`id`, `brand`, `model`, `create_date`) VALUES
(0000000001, 'Kross', 'hexagon', '2021-11-25 17:20:32'),
(0000000002, 'Unibike', 'Bike', '2021-11-25 17:21:24'),
(0000000003, 'Kox', '2000', '2021-11-25 17:22:32'),
(0000000004, 'rower', 'dobry', '2021-11-25 17:23:16'),
(0000000005, 'Dobre', 'rower', '2021-11-25 17:23:36');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD UNIQUE KEY `index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bike`
--
ALTER TABLE `bike`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
