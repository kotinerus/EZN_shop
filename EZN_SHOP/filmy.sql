-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lis 2021, 12:11
-- Wersja serwera: 10.1.40-MariaDB
-- Wersja PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id_filmu` int(11) NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `opis` longtext COLLATE utf8_polish_ci NOT NULL,
  `ocena` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `obraz` text COLLATE utf8_polish_ci NOT NULL,
  `kategoria` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id_filmu`, `tytul`, `opis`, `ocena`, `cena`, `ilosc`, `obraz`, `kategoria`) VALUES
(1, 'DIUNA', 'Szlachetny ród Atrydów przybywa na Diunę, będącą jedynym źródłem najcenniejszej substancji we wszechświecie.', 10, 30, 3, 'https://fwcdn.pl/fpo/94/76/469476/7972251.6.jpg', 'akcja'),
(3, 'CHŁOPI', 'Piękna dziewczyna rozkochuje w sobie bogatego gospodarza i jego syna, wprowadzając niemały zamęt we wsi.', 6, 35, 1, 'https://fwcdn.pl/fpo/60/69/206069/7425790.6.jpg', 'familijny'),
(6, 'PULP FICTION', 'Przemoc i odkupienie w opowieści o dwóch płatnych mordercach pracujących na zlecenie mafii, żonie gangstera, bokserze i parze okradającej ludzi w restauracji.', 9, 42, 2, 'https://fwcdn.pl/fpo/10/39/1039/7710420.6.jpg', 'akcja'),
(7, 'WŁĄDCA PIERŚCIENI: POWRÓT KRÓLA', 'Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów.', 8, 25, 1, 'https://fwcdn.pl/fpo/48/87/134887/6993352.6.jpg', 'akcja'),
(8, 'STAR WARS: NOWA NADZIEJA', 'Złowrogie Imperium zawładnęło galaktyką. Uwięzionej przez Dartha Vadera księżniczce Lei z nieoczekiwaną pomocą przyjdą kosmiczny przemytnik Han Solo i młody Luke Skywalker.', 10, 18, 2, 'https://fwcdn.pl/fpo/07/59/759/7301614.6.jpg', 'akcja'),
(9, 'INTERSTELLER', 'Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.', 9, 28, 1, 'https://fwcdn.pl/fpo/56/29/375629/7670122.6.jpg', 'akcja'),
(10, 'MILCZENIE OWIEC', 'Seryjny morderca i inteligentna agentka łączą siły, by znaleźć przestępcę obdzierającego ze skóry swoje ofiary.', 9, 16, 2, 'https://fwcdn.pl/fpo/10/47/1047/7714177.6.jpg', 'horror'),
(11, 'PODZIEMNY KRĄG', 'Dwóch mężczyzn znudzonych rutyną zakłada klub, w którym co tydzień odbywają się walki na gołe pięści.', 7, 34, 3, 'https://fwcdn.pl/fpo/08/37/837/7522091.6.jpg', 'horror');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id_filmu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id_filmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
