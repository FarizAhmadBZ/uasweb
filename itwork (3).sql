-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2021 pada 05.53
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itwork`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `editbidang` (IN `aidi` INT, IN `bdg` VARCHAR(20))  begin
update users set bidang = bdg where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editdomisili` (IN `aidi` INT, IN `dmsl` VARCHAR(20))  begin
update users set domisili = dmsl where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editemail` (IN `aidi` INT, IN `email` VARCHAR(60))  begin
update users set email = email where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editgambar` (IN `aidi` INT, IN `gmbr` VARCHAR(255))  begin
update users set gambar = gmbr where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editgh` (IN `aidi` INT, IN `gh` VARCHAR(255))  begin
update users set link_github = gh where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editkelamin` (IN `aidi` INT, IN `jk` VARCHAR(10))  begin
update users set jenis_kelamin = jk where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editnama` (IN `aidi` INT, IN `nama` VARCHAR(50))  begin
update users set nama = nama where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editpassword` (IN `aidi` INT, IN `pw` VARCHAR(20))  begin
update users set password = pw where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `edittanggallahir` (IN `aidi` INT, IN `tgllhr` DATE)  begin
update users set tanggal_lahir = tgllhr where id = aidi;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registrasi` (IN `nama` VARCHAR(50), IN `jk` VARCHAR(10), IN `tgl_lahir` DATE, IN `domisili` VARCHAR(20), IN `email` VARCHAR(60), IN `gh` VARCHAR(255), IN `pw` VARCHAR(20), IN `gmbr` VARCHAR(255), IN `bidang` VARCHAR(30))  begin
insert into users (nama, jenis_kelamin, tanggal_lahir, domisili, email, link_github, password, gambar, bidang) value (nama, jk, tgl_lahir, domisili, email, gh, pw, gmbr, bidang);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `no` int(11) NOT NULL,
  `aksi` varchar(10) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`no`, `aksi`, `id`, `waktu`) VALUES
(1, 'input', 1, '2021-05-31 12:28:18'),
(2, 'input', 2, '2021-06-01 09:27:02'),
(3, 'input', 3, '2021-06-01 09:27:36'),
(4, 'edit', 1, '2021-06-01 09:44:56'),
(5, 'edit', 2, '2021-06-01 09:44:56'),
(6, 'edit', 3, '2021-06-01 09:44:56'),
(7, 'edit', 2, '2021-06-01 09:49:27'),
(8, 'edit', 3, '2021-06-01 09:57:04'),
(9, 'edit', 1, '2021-06-01 09:57:34'),
(10, 'delete', NULL, '2021-06-01 09:58:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `domisili` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `link_github` varchar(255) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `bidang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `domisili`, `email`, `link_github`, `password`, `gambar`, `bidang`) VALUES
(1, 'ipan', 'pria', '0000-00-00', 'bandung', 'ipan@email.com', 'inilinkgithub', 'password', 'inilinkgambar', 'lagiweb'),
(2, 'smiti weber jeger men jensen', 'Pria', '0000-00-00', 'bikini botom', 'sinomorsatu@bikini.bottom', 'diagapunyagithub', 'thenumberone', 'harusnyaautoini', 'kuburan');

--
-- Trigger `users`
--
DELIMITER $$
CREATE TRIGGER `edit` AFTER UPDATE ON `users` FOR EACH ROW begin
insert into log (aksi, id, waktu) value ("edit", new.id, now());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `regis` AFTER INSERT ON `users` FOR EACH ROW begin
insert into log (aksi, id, waktu) value ("input", new.id, now());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `unreg` BEFORE DELETE ON `users` FOR EACH ROW insert into log (aksi, id, waktu) value ("delete",id, now());
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
