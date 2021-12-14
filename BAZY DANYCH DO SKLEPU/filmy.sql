-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2021, 15:41
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
  `kategoria` text COLLATE utf8_polish_ci NOT NULL,
  `link` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id_filmu`, `tytul`, `opis`, `ocena`, `cena`, `ilosc`, `obraz`, `kategoria`, `link`) VALUES
(1, 'DIUNA', 'Szlachetny ród Atrydów przybywa na Diunę, będącą jedynym źródłem najcenniejszej substancji we wszechświecie.', 10, 30, 7, 'https://fwcdn.pl/fpo/94/76/469476/7972251.6.jpg', 'akcja', 'diuna.php'),
(3, 'CHŁOPI', 'Piękna dziewczyna rozkochuje w sobie bogatego gospodarza i jego syna, wprowadzając niemały zamęt we wsi.', 6, 35, 14, 'https://fwcdn.pl/fpo/60/69/206069/7425790.6.jpg', 'familijny', 'chlopi.php'),
(6, 'PULP FICTION', 'Przemoc i odkupienie w opowieści o dwóch płatnych mordercach pracujących na zlecenie mafii, żonie gangstera, bokserze i parze okradającej ludzi w restauracji.', 9, 42, 6, 'https://fwcdn.pl/fpo/10/39/1039/7710420.6.jpg', 'akcja', 'pulp.php'),
(7, 'WŁADCA PIERŚCIENI: POWRÓT KRÓLA', 'Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów.', 8, 25, 1, 'https://fwcdn.pl/fpo/48/87/134887/6993352.6.jpg', 'akcja', 'wladca.php'),
(8, 'STAR WARS: NOWA NADZIEJA', 'Złowrogie Imperium zawładnęło galaktyką. Uwięzionej przez Dartha Vadera księżniczce Lei z nieoczekiwaną pomocą przyjdą kosmiczny przemytnik Han Solo i młody Luke Skywalker.', 10, 18, 1, 'https://fwcdn.pl/fpo/07/59/759/7301614.6.jpg', 'akcja', 'starwars.php'),
(9, 'INTERSTELLER', 'Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.', 9, 28, 3, 'https://fwcdn.pl/fpo/56/29/375629/7670122.6.jpg', 'akcja', 'intersteller.php'),
(10, 'MILCZENIE OWIEC', 'Seryjny morderca i inteligentna agentka łączą siły, by znaleźć przestępcę obdzierającego ze skóry swoje ofiary.', 9, 16, 2, 'https://fwcdn.pl/fpo/10/47/1047/7714177.6.jpg', 'horror', 'milczenieowiec.php'),
(11, 'PODZIEMNY KRĄG', 'Dwóch mężczyzn znudzonych rutyną zakłada klub, w którym co tydzień odbywają się walki na gołe pięści.', 7, 34, 3, 'https://fwcdn.pl/fpo/08/37/837/7522091.6.jpg', 'horror', 'podziemnykrag.php'),
(12, 'SAMI SWOI', 'Zwaśnione od wielu lat rodziny Pawlaków i Kargulów trafiają z Kresów Wschodnich na Ziemie Odzyskane.', 9, 35, 1, 'https://fwcdn.pl/fpo/11/13/1113/7036983.6.jpg', 'komedia', 'samiswoi.php'),
(13, 'NIETYKALNI', 'Sparaliżowany milioner zatrudnia do opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia.\r\n', 8, 45, 2, 'https://fwcdn.pl/fpo/33/90/583390/7752240.6.jpg', 'komedia', 'nietykalni.php'),
(14, 'FORREST GUMP', 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.\r\n', 9, 48, 3, 'https://fwcdn.pl/fpo/09/98/998/7622529.6.jpg', 'komedia', 'forrest.php'),
(15, 'ŻYCIE JEST PIĘKNE', 'Zamknięty w obozie koncentracyjnym wraz z synem Guido próbuje przekonać chłopca, że okrutna rzeczywistość jest jedynie formą zabawy dla dorosłych.\r\n', 6, 28, 3, 'https://fwcdn.pl/fpo/02/08/208/7520031.6.jpg', 'komedia', 'życie.php'),
(16, 'OBCY - 8.', 'Załoga statku kosmicznego Nostromo odbiera tajemniczy sygnał i ląduje na niewielkiej planetoidzie, gdzie jeden z jej członków zostaje zaatakowany przez obcą formę życia.\r\n', 8, 79, 3, 'https://fwcdn.pl/fpo/09/80/980/7518072.6.jpg', 'horror', 'obcy.php'),
(17, 'WYWIAD Z WAMPIREM', 'Historia wdowca, który by przestać cierpieć, zostaje przemieniony w wampira. Jego charakter nie pozwala mu zabijać ludzi z zimną krwią, ale nie jest na tyle silny, by wybrać samobójstwo.\r\n', 7, 63, 4, 'https://fwcdn.pl/fpo/10/02/1002/7314657.6.jpg', 'horror', 'wampir.php'),
(18, 'COCO', 'Dwunastoletni meksykański chłopiec imieniem Miguel usiłuje zgłębić tajemnice rodzinnej legendy.\r\n', 8, 84, 4, 'https://fwcdn.pl/fpo/22/60/752260/7923212.6.jpg', 'familijny', 'coco.php'),
(19, 'KRÓL LEW', 'Targany niesłusznymi wyrzutami sumienia po śmierci ojca mały lew Simba skazuje się na wygnanie, rezygnując z przynależnego mu miejsca na czele stada.\r\n', 9, 41, 3, 'https://fwcdn.pl/fpo/68/78/6878/7389475.6.jpg', 'familijny', 'krollew.php'),
(20, 'SPIDER-MAN UNIWERSUM', 'Miles Morales po ukąszeniu przez radioaktywnego pająka staje do walki z nikczemnym Kingpinem. Pomogą mu w tym Spider-Manowie z innych wymiarów.\r\n', 6, 56, 3, 'https://fwcdn.pl/fpo/32/33/743233/7866074.6.jpg', 'familijny', 'spiderman.php'),
(21, 'JAK WYTRESOWAĆ SMOKA', 'Chuderlawy Wiking przewróci porządek w wiosce, kiedy zamiast zabić w ramach inicjacji jakiegoś smoka, zaprzyjaźni się z najgroźniejszym z nich.\r\n', 8, 83, 1, 'https://fwcdn.pl/fpo/10/14/331014/7919342.6.jpg', 'familijny', 'jakwytresowac.php'),
(1008, 'HELLBOUND', 'ez', 3, 46, 0, 'https://fwcdn.pl/fpo/36/55/853655/7982283.6.jpg', 'akcja', 'hellbound');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id_filmu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id_filmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
