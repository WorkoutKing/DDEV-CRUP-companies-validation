-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 01, 2022 at 03:49 PM
-- Server version: 10.3.32-MariaDB-1:10.3.32+maria~focal-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `kodas` int(11) NOT NULL,
  `pvm_kodas` varchar(255) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `telefonas` int(11) NOT NULL,
  `pastas` varchar(255) NOT NULL,
  `veikla` varchar(255) NOT NULL,
  `vadovas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `pavadinimas`, `kodas`, `pvm_kodas`, `adresas`, `telefonas`, `pastas`, `veikla`, `vadovas`) VALUES
(8, 'GY', 1, 'FF154724', 'Kaunas', 869000000, 'gym-@gmail.com', 'Working Out', 'Gym Plus'),
(10, 'Master', 2, 'ff500', 'Kaunas', 1234567, 'kk@kk.com', 'Working ', 'PLUS MAX'),
(11, 'Mona', 3, 'ff500', 'Kaunas', 861111111, 'Mona@gmail.com', 'Works for free', 'Mona Maxi'),
(12, 'Cikada', 4, 'ff500', 'Kaunas', 861157812, 'Cikada@gmail.com', 'Hacking company', 'Marcus Wanner'),
(13, 'PoroMoro', 5, 'ff500', 'Kaunas', 861111112, 'Poro@gmail.com', 'Works for education', 'Moro Poro'),
(14, 'ZoroVoro', 6, 'ff500', 'Kaunas', 861111113, 'Zoro@gmail.com', 'Stealing', 'Zoro Zoro'),
(15, 'Pigs', 7, 'ff500', 'Kaunas', 861111114, 'Porko@gmail.com', 'Meat company', 'Marko Porko'),
(16, 'Animals', 8, 'ff500', 'Kaunas', 861111115, 'Marnis@gmail.com', 'Free education', 'Marnis Opajus'),
(17, 'Paris', 9, 'ff500', 'Kaunas', 861111116, 'Katusas@gmail.com', 'No Info', 'Maris Paris'),
(18, 'Heroin', 10, 'ff500', 'Kaunas', 861111117, 'Kokosas@gmail.com', 'No Info', 'Kokas Koksas'),
(19, 'Alkohuolik', 11, 'ff500', 'Kaunas', 861111118, 'Marininis@gmail.com', 'No Info', 'Mariukas Bariukas'),
(20, 'POX', 12, 'ff500', 'Kaunas', 112, 'Pixelis@gmail.com', 'Pixel Art', 'Pox Poxi'),
(21, 'League of Legends', 13, 'ff500', 'Kaunas', 9, 'LoL@gmail.com', 'Online game', 'Riot Game'),
(22, 'Impack Genshin', 14, 'ff500', 'Kaunas', 3700500, 'ImpactGenshin@gmail.com', 'Online game', 'Ganyu MoNa'),
(23, 'Masteriai', 15, 'ff500', 'Kaunas', 861111125, 'Masteris@gmail.com', 'No Info', 'Zmogus Anos'),
(24, 'Anonim', 16, 'ff500', 'Kaunas', 861987654, 'Anonimaji@gmail.com', 'No Info', 'Antanas Antonas'),
(25, 'Error500', 17, 'ff500', 'Kaunas', 861271112, 'Error500@gmail.com', 'Goes for error', 'Error Error'),
(26, 'Marko Polo', 18, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(27, 'Marko Polo x', 19, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(28, 'Marko Polo y', 20, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(29, 'Marko Polo b', 21, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(30, 'Marko Polo c', 22, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(31, 'Marko Polo m', 23, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(32, 'Marko Polo a', 24, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo'),
(33, 'Marko Polo s', 25, 'ff500', 'Kaunas', 86928271, 'MarkoPolo@gmail.com', 'Clothes shop', 'Marko Polo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
