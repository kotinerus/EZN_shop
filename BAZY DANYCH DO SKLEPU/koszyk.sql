-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Gru 2021, 12:22
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `koszyk`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kosz`
--

CREATE TABLE `kosz` (
  `id` int(11) NOT NULL,
  `tytul` text NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kosz`
--

INSERT INTO `kosz` (`id`, `tytul`, `ilosc`, `cena`, `url`) VALUES
(39, 'WŁADCA PIERŚCIENI: POWRÓT KRÓLA', 1, 25, 'https://fwcdn.pl/fpo/48/87/134887/6993352.6.jpg'),
(40, 'PODZIEMNY KRĄG', 3, 34, 'https://fwcdn.pl/fpo/08/37/837/7522091.6.jpg'),
(41, 'MILCZENIE OWIEC', 2, 16, 'https://fwcdn.pl/fpo/10/47/1047/7714177.6.jpg'),
(42, 'STAR WARS: NOWA NADZIEJA', 2, 18, 'https://fwcdn.pl/fpo/07/59/759/7301614.6.jpg'),
(43, 'INTERSTELLER', 1, 28, 'https://fwcdn.pl/fpo/56/29/375629/7670122.6.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kosz`
--
ALTER TABLE `kosz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kosz`
--
ALTER TABLE `kosz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
