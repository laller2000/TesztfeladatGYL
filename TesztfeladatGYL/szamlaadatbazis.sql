-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Sze 24. 15:58
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szamlaadatbazis`
--
CREATE DATABASE IF NOT EXISTS `szamlaadatbazis` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `szamlaadatbazis`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `megrendelestabla`
--

CREATE TABLE IF NOT EXISTS `megrendelestabla` (
  `SorszamID` int(11) NOT NULL AUTO_INCREMENT,
  `SzamlaCim` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `Nettoosszeg` int(255) NOT NULL,
  `AFA` int(255) NOT NULL,
  `Brutto` int(255) NOT NULL,
  PRIMARY KEY (`SorszamID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `megrendelestabla`
--

INSERT INTO `megrendelestabla` (`SorszamID`, `SzamlaCim`, `Nettoosszeg`, `AFA`, `Brutto`) VALUES
(33, '.CegnevKFT-Magyarország 4320 Debrecen mikepércsiút 54.', 3213123, 213213, 2147483647);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szamlazasicim`
--

CREATE TABLE IF NOT EXISTS `szamlazasicim` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tipus` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `Cegnev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `Telefonszam` int(255) NOT NULL,
  `Adoszam` int(255) NOT NULL,
  `Orszag` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `Iranyitoszam` int(4) NOT NULL,
  `Varos` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `Utca` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `szamlazasicim`
--

INSERT INTO `szamlazasicim` (`ID`, `Tipus`, `Cegnev`, `Telefonszam`, `Adoszam`, `Orszag`, `Iranyitoszam`, `Varos`, `Utca`) VALUES
(33, 'Cég', 'ValamiKFT', 630333220, 2147483647, 'Magyarország', 4230, 'Debrecen', 'Mikepércsi utca 54'),
(34, 'Magánszemély', 'SemmiKFT', 2147483647, 2147483647, 'Magyarország', 4230, 'Debrecen', 'Jeriko útca 44');

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `megrendelestabla`
--
ALTER TABLE `megrendelestabla`
  ADD CONSTRAINT `fk_Sorszam` FOREIGN KEY (`SorszamID`) REFERENCES `szamlazasicim` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
