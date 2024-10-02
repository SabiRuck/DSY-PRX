-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 02.Okt 2024, 13:24
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `dom`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `osoba`
--

CREATE TABLE `osoba` (
  `id_osoba` int(12) NOT NULL,
  `meno` varchar(60) DEFAULT NULL,
  `priezvisko` varchar(60) DEFAULT NULL,
  `vek` int(10) DEFAULT NULL,
  `adresa` varchar(60) DEFAULT NULL,
  `okres` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `osoba`
--

INSERT INTO `osoba` (`id_osoba`, `meno`, `priezvisko`, `vek`, `adresa`, `okres`) VALUES
(1, 'Petra', 'Školová', 16, 'Oščadnica 2066', 'Čadca'),
(2, 'Sabína', 'Rucková', 16, 'SNP 738/18', 'Čadca'),
(7, 'Ondrej', 'Priehoda', 21, 'Olešná 23', 'Čadca'),
(9, 'Oliver', 'Pawlus', 17, 'M.R.Štefánika', 'Čadca'),
(13, 'Martin', 'Kukučka', 36, 'Hviezdoslavova 4', 'Čadca'),
(14, 'Michaela', 'Turčan', 27, 'Rázusová 18/5', 'Čadca'),
(15, 'Slavomír', 'Svent', 16, 'Podunajské Biskupice 8', 'Brastislava'),
(16, 'Petra', 'Školová', 16, 'Oščadnica 2066', 'Čadca'),
(17, 'Sabína', 'Rucková', 16, 'SNP 738/18', 'Čadca'),
(18, 'Andrea', 'Školová', 40, 'Agátová ulica 10', 'Liptovský Mikuláš'),
(22, 'Ondrej', 'Priehoda', 21, 'Olešná 23', 'Čadca'),
(24, 'Oliver', 'Pawlus', 17, 'M.R.Štefánika', 'Čadca'),
(28, 'Martin', 'Kukučka', 36, 'Hviezdoslavova 4', 'Čadca'),
(29, 'Michaela', 'Turčan', 27, 'Rázusová 18/5', 'Čadca');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `osoba`
--
ALTER TABLE `osoba`
  ADD PRIMARY KEY (`id_osoba`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `osoba`
--
ALTER TABLE `osoba`
  MODIFY `id_osoba` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
