-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2023 pada 06.33
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(11) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `kehadiran` enum('Hadir','Izin','Sakit') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `usn`, `tanggal`, `kehadiran`, `keterangan`) VALUES
(1, 'adit', 'Thursday, 19-01-2023 / 16:45', 'Hadir', ''),
(2, 'adit', 'Thursday, 19-01-2023 / 16:45', 'Hadir', ''),
(3, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(4, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(5, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(6, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(7, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(8, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(9, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(10, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(11, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(12, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(13, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(14, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(15, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(16, 'adit', 'Thursday, 19-01-2023 / 16:46', 'Hadir', ''),
(17, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(18, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(19, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(20, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(21, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(22, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(23, 'adit', 'Thursday, 19-01-2023 / 16:47', 'Hadir', ''),
(24, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(25, 'adit', 'Friday, 20-01-2023 / 10:39', 'Izin', ''),
(26, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(27, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(28, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(29, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(30, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(31, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(32, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(33, 'adit', 'Friday, 20-01-2023 / 10:39', 'Hadir', ''),
(34, 'adit', 'Friday, 20-01-2023 / 11:02', 'Hadir', ''),
(35, 'adit', 'Friday, 20-01-2023 / 11:05', 'Hadir', ''),
(36, 'adit', 'Friday, 20-01-2023 / 11:05', 'Hadir', ''),
(37, 'adit', 'Friday, 20-01-2023 / 11:05', 'Hadir', ''),
(38, 'adit', 'Friday, 20-01-2023 / 11:06', 'Hadir', ''),
(39, 'adit', 'Friday, 20-01-2023 / 14:14', 'Hadir', ''),
(40, 'adit', 'Friday, 20-01-2023 / 14:15', 'Hadir', ''),
(41, 'adit', 'Friday, 20-01-2023 / 14:20', 'Hadir', ''),
(42, 'adit', 'Friday, 20-01-2023 / 14:20', 'Hadir', ''),
(43, 'adit', 'Friday, 20-01-2023 / 14:20', 'Hadir', ''),
(44, 'alma', 'Friday, 20-01-2023 / 14:29', 'Hadir', ''),
(45, 'alma', 'Friday, 20-01-2023 / 14:29', 'Hadir', ''),
(46, 'alma', 'Friday, 20-01-2023 / 14:29', 'Hadir', ''),
(47, 'alma', 'Friday, 20-01-2023 / 14:29', 'Hadir', ''),
(48, 'alma', 'Friday, 20-01-2023 / 14:29', 'Hadir', ''),
(49, 'alma', 'Friday, 20-01-2023 / 14:29', 'Hadir', ''),
(50, 'alma', 'Friday, 20-01-2023 / 14:30', 'Hadir', ''),
(51, 'alma', 'Friday, 20-01-2023 / 14:30', 'Hadir', ''),
(52, 'alma', 'Friday, 20-01-2023 / 14:30', 'Hadir', ''),
(53, 'alma', 'Friday, 20-01-2023 / 14:30', 'Hadir', ''),
(54, 'alma', 'Friday, 20-01-2023 / 14:31', 'Hadir', ''),
(55, 'alma', 'Friday, 20-01-2023 / 14:31', 'Hadir', ''),
(56, 'alma', 'Friday, 20-01-2023 / 14:31', 'Hadir', ''),
(57, 'alma', 'Friday, 20-01-2023 / 14:31', 'Hadir', ''),
(58, 'alma', 'Friday, 20-01-2023 / 14:31', 'Hadir', ''),
(59, 'alma', 'Friday, 20-01-2023 / 14:31', 'Hadir', ''),
(60, 'alma', 'Friday, 20-01-2023 / 14:32', 'Hadir', ''),
(61, 'alma', 'Friday, 20-01-2023 / 14:32', 'Hadir', ''),
(62, 'alma', 'Friday, 20-01-2023 / 14:32', 'Hadir', ''),
(63, 'alma', 'Friday, 20-01-2023 / 14:32', 'Hadir', ''),
(64, 'alma', 'Friday, 20-01-2023 / 14:32', 'Hadir', ''),
(65, 'alma', 'Friday, 20-01-2023 / 15:14', 'Izin', ''),
(66, 'alma', 'Friday, 20-01-2023 / 15:14', 'Hadir', ''),
(67, 'alma', 'Friday, 20-01-2023 / 15:14', 'Izin', ''),
(68, 'alma', 'Friday, 20-01-2023 / 15:14', 'Hadir', ''),
(69, 'alma', 'Friday, 20-01-2023 / 15:14', 'Hadir', ''),
(70, 'alma', 'Friday, 20-01-2023 / 15:14', 'Hadir', ''),
(71, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(72, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(73, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(74, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(75, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(76, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(77, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(78, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(79, 'alma', 'Friday, 20-01-2023 / 15:15', 'Hadir', ''),
(80, 'alma', 'Friday, 20-01-2023 / 15:18', 'Hadir', ''),
(81, 'alma', 'Friday, 20-01-2023 / 15:18', 'Hadir', ''),
(82, 'alma', 'Friday, 20-01-2023 / 15:18', 'Hadir', ''),
(83, 'alma', 'Friday, 20-01-2023 / 15:18', 'Hadir', ''),
(84, 'alma', 'Friday, 20-01-2023 / 15:19', 'Hadir', ''),
(85, 'alma', 'Friday, 20-01-2023 / 15:19', 'Hadir', ''),
(86, 'alma', 'Friday, 20-01-2023 / 15:19', 'Hadir', ''),
(87, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(88, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(89, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(90, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(91, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(92, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(93, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(94, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(95, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(96, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(97, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(98, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(99, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(100, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(101, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(102, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(103, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(104, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(105, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(106, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(107, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(108, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(109, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(110, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(111, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(112, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(113, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(114, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(115, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(116, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(117, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(118, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(119, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(120, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(121, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(122, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(123, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(124, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(125, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(126, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(127, 'dea', 'Friday, 20-01-2023 / 19:29', 'Hadir', ''),
(128, 'dea', 'Friday, 20-01-2023 / 19:29', 'Sakit', ''),
(129, 'dea', 'Friday, 20-01-2023 / 19:29', 'Sakit', ''),
(130, 'dea', 'Friday, 20-01-2023 / 19:29', 'Izin', ''),
(131, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(132, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(133, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(134, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(135, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(136, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(137, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(138, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(139, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(140, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(141, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(142, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(143, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(144, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(145, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(146, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(147, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(148, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(149, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(150, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(151, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(152, 'adel', 'Saturday, 21-01-2023 / 09:26', 'Hadir', ''),
(153, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(154, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(155, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(156, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(157, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(158, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(159, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(160, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(161, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(162, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(163, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(164, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(165, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(166, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(167, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(168, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(169, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(170, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(171, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(172, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(173, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(174, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(175, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(176, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(177, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(178, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(179, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(180, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(181, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(182, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(183, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(184, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(185, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(186, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(187, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(188, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(189, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(190, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(191, 'ari', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(192, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(193, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(194, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(195, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(196, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(197, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(198, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(199, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(200, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(201, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(202, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(203, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(204, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(205, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(206, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(207, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(208, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(209, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(210, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(211, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(212, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(213, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(214, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(215, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(216, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(217, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(218, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(219, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(220, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(221, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(222, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(251, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(252, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(253, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(254, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(255, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(256, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(257, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(258, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(259, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(260, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(261, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(262, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(263, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(264, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(265, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(266, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(267, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(268, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(269, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(270, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(271, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(272, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(273, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(274, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(275, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(276, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(277, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(278, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(279, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(280, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(281, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(282, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(283, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(284, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(285, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(286, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(287, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(288, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(289, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(290, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(291, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(292, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(293, 'Fenny', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(294, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(295, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(296, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(297, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(298, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(299, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(300, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(301, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(302, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(303, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(304, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(305, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(306, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(307, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(308, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(309, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(310, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(311, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(312, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(313, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(314, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Sakit', ''),
(315, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Sakit', ''),
(316, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(317, 'yoga', 'Saturday, 21-01-2023 / 09:41', 'Sakit', ''),
(318, 'dhia', 'Saturday, 21-01-2023 / 09:41', 'Sakit', ''),
(319, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(320, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(321, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(322, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(323, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(324, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(325, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(326, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(327, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(328, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(329, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(330, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(331, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(332, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(333, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(334, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(335, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(336, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(337, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(338, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(339, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(340, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(341, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(342, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(343, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(344, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(345, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(346, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(347, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(348, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(349, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(350, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(351, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(352, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(353, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(354, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(355, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(356, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(357, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(358, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(359, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(360, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(361, 'tasya', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(362, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(363, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(364, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(365, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(366, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(367, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(368, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(369, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(370, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(371, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(372, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(373, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(374, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(375, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(376, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(377, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(378, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(379, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(380, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(381, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(382, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(383, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(384, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(385, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(386, 'renal', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(387, 'lana', 'Saturday, 21-01-2023 / 09:41', 'Sakit', ''),
(388, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(389, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(390, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(391, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(392, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(393, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(394, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(395, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(396, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(397, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(398, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(399, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(400, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(401, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(402, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(403, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(404, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(405, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(406, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(407, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(408, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(409, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(410, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(411, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(412, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(413, 'riska', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(414, 'adel', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(415, 'adel', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(416, 'adel', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(417, 'adel', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(418, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(419, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(420, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(421, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(422, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(423, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(424, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(425, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(426, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(427, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(428, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(429, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(430, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(431, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(432, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(433, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(434, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(435, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(436, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(437, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(438, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(439, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(440, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(441, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(442, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(443, 'vian', 'Saturday, 21-01-2023 / 09:41', 'Izin', ''),
(444, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(445, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(446, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(447, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(448, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(449, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(450, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(451, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(452, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(453, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(454, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(455, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(456, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(457, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(458, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(459, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(460, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(461, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(462, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(463, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(464, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(465, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(466, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(467, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(468, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(469, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(470, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(471, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(472, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(473, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(474, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(475, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(476, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(477, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(478, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(479, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(480, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(481, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(482, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(483, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(484, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Hadir', ''),
(485, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Sakit', ''),
(486, 'itong', 'Saturday, 21-01-2023 / 09:41', 'Sakit', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `usn_kegiatan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan_i` text NOT NULL,
  `kegiatan_ii` text NOT NULL,
  `kegiatan_iii` text NOT NULL,
  `kegiatan_iv` text NOT NULL,
  `kegiatan_v` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `usn_kegiatan`, `tanggal`, `kegiatan_i`, `kegiatan_ii`, `kegiatan_iii`, `kegiatan_iv`, `kegiatan_v`) VALUES
(1, 'adit', '2022-10-10', 'input data', '', '', '', ''),
(2, 'adit', '2022-10-11', 'input data', '', '', '', ''),
(3, 'adit', '2022-10-12', 'input data', '', '', '', ''),
(4, 'adit', '2022-10-13', 'Acara Pengesahan di SMP 6', 'input data', '', '', ''),
(5, 'adit', '2022-10-14', 'input data', '', '', '', ''),
(6, 'adit', '2022-10-17', 'Acara di DPPKBPM', 'input data', '', '', ''),
(8, 'adit', '2022-10-18', 'input data', '', '', '', ''),
(10, 'adit', '2022-10-20', 'Acara di Hotel Nasa', 'input data', '', '', ''),
(11, 'adit', '2022-10-19', 'input data', '', '', '', ''),
(12, 'adit', '2022-10-21', 'input data', '', '', '', ''),
(13, 'adit', '2022-10-24', 'input data', '', '', '', ''),
(14, 'alma', '2022-10-17', 'input data', '', '', '', ''),
(15, 'alma', '2022-10-18', 'input data', '', '', '', ''),
(16, 'alma', '2022-10-19', 'input data', '', '', '', ''),
(17, 'alma', '2022-10-20', 'input data', '', '', '', ''),
(18, 'alma', '2022-10-20', 'input data', '', '', '', ''),
(19, 'alma', '2022-10-21', 'input data', '', '', '', ''),
(20, 'alma', '2022-10-22', 'input data', '', '', '', ''),
(21, 'alma', '2022-10-22', 'input data', '', '', '', ''),
(22, 'alma', '2022-10-24', 'input data', '', '', '', ''),
(23, 'alma', '2022-11-23', 'input data', '', '', '', ''),
(24, 'alma', '2022-10-24', 'input data', '', '', '', ''),
(25, 'alma', '2022-11-28', 'input data', '', '', '', ''),
(26, 'alma', '2022-10-26', 'input data', '', '', '', ''),
(27, 'dea', '0000-00-00', 'input data', '', '', '', ''),
(28, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(29, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(30, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(31, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(32, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(33, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(34, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(35, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(36, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(37, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(38, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(39, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(40, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(41, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(42, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(43, 'dea', '2022-10-18', 'input data', '', '', '', ''),
(54, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(55, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(56, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(57, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(58, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(59, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(60, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(61, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(62, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(63, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(64, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(65, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(66, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(67, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(68, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(69, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(70, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(71, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(72, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(73, 'adel', '2023-01-19', 'input data', '', '', '', ''),
(75, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(76, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(77, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(78, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(79, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(80, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(81, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(82, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(83, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(84, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(85, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(86, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(87, 'ari', '2022-10-19', 'input data', '', '', '', ''),
(88, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(89, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(90, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(91, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(92, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(93, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(94, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(95, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(96, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(97, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(98, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(99, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(100, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(101, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(102, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(103, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(104, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(105, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(106, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(107, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(108, 'yoga', '2022-10-18', 'input data', '', '', '', ''),
(109, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(110, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(111, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(112, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(113, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(114, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(115, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(116, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(117, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(118, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(119, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(120, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(121, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(122, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(123, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(124, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(125, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(126, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(127, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(128, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(129, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(130, 'lana', '2022-10-18', 'input data', '', '', '', ''),
(131, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(132, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(133, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(134, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(135, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(136, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(137, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(138, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(139, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(140, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(141, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(142, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(143, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(144, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(145, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(146, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(147, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(148, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(149, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(150, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(151, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(152, 'dhia', '2022-10-18', 'input data', '', '', '', ''),
(153, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(154, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(155, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(156, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(157, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(158, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(159, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(160, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(161, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(162, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(163, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(164, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(165, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(166, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(167, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(168, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(169, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(170, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(171, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(172, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(173, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(174, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(175, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(176, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(177, 'Fenny', '2022-10-18', 'input data', '', '', '', ''),
(178, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(179, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(180, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(181, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(182, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(183, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(184, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(185, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(186, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(187, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(188, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(189, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(190, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(191, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(192, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(193, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(194, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(195, 'Tasya', '2022-10-18', 'input data', '', '', '', ''),
(208, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(209, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(210, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(211, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(212, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(213, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(214, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(215, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(216, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(217, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(218, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(219, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(220, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(221, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(222, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(223, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(224, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(225, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(226, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(227, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(228, 'renal', '2022-10-18', 'input data', '', '', '', ''),
(229, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(230, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(231, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(232, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(233, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(234, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(235, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(236, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(237, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(238, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(239, 'riska', '2022-10-18', 'input data', '', '', '', ''),
(252, 'adit', '2022-10-14', 'input data', 'Kunjungan ke Kampung KB Alalak Selatan', '', '', ''),
(253, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(254, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(255, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(256, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(257, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(258, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(259, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(260, 'riska', '2022-12-07', 'input data', '', '', '', ''),
(261, 'adit', '2022-10-14', 'input data', 'Kunjungan ke Kampung KB Alalak Selatan', '', '', ''),
(262, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(263, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(264, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(265, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(266, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(267, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(268, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(269, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(270, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(271, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(272, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(273, 'adit', '2022-12-06', 'input data', '', '', '', ''),
(274, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(275, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(276, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(277, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(278, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(279, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(280, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(281, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(282, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(283, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(284, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(285, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(286, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(287, 'vian', '2023-01-10', 'input data', '', '', '', ''),
(288, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(289, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(290, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(291, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(292, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(293, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(294, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(295, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(296, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(297, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(298, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(299, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(300, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(301, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(302, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(303, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(304, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(305, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(306, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(307, 'itong', '2023-10-19', 'input data', '', '', '', ''),
(308, 'itong', '2023-10-19', 'input data', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_magang`
--

CREATE TABLE `tb_magang` (
  `id_magang` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `induk` int(11) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_magang`
--

INSERT INTO `tb_magang` (`id_magang`, `nama`, `username`, `induk`, `tgl_lahir`, `alamat`, `jk`, `telepon`, `instansi`, `jurusan`, `tgl_masuk`, `tgl_keluar`, `password`, `status`) VALUES
(7, 'Rizky Aditya', 'adit', 19710006, 'Banjarmasin, 25 September 2000', 'jl. hksn', 'L', '0871678521', 'UNISKA', 'Sistem Informasi', '2022-10-10', '2022-12-12', 'adit', 'user'),
(8, 'Alma Ariani', 'alma', 19630659, 'Banjarmasin, 4 April 2001', 'Jl. pangeran', 'P', '0871678521', 'UNISKA', 'Teknik Informatika', '2022-10-17', '2022-12-19', 'alma', 'user'),
(9, 'Dea Fatma', 'dea', 19630660, 'Banjarmasin,  3 Maret 2001', 'Kuin Selatan', 'P', '0871678521', 'UNISKA', 'Teknik Informatika', '2022-10-17', '2022-12-19', 'dea', 'user'),
(10, 'Sahri Ramadhan', 'ari', 19710018, '', 'Komp. AMD', 'L', '085367852113', 'UNISKA', 'Sistem Informasi', '2022-10-10', '2022-12-12', 'ari', 'user'),
(11, 'Ahmad Maulana', 'lana', 2147483647, 'Banjarmasin, 19 Januari 2001', 'Kuin Selatan', 'L', '08716785221', 'STIENAS', 'Manajemen', '2022-10-03', '2022-11-03', 'lana', 'user'),
(12, 'Renaldi Dwi Novanta', 'renal', 2147483647, 'Banjarmasin, 3 November 2001', 'jl. hksn', 'L', '089721472145', 'STIENAS', 'Manajemen', '2022-10-03', '2022-11-03', 'renal', 'user'),
(13, 'Agung Yoga Setiawan', 'yoga', 19630568, 'Banjarmasin, 2 April 2001', 'jl. hksn', 'L', '089721472145', 'UNISKA', 'Teknik Informatika', '2022-10-17', '2022-12-19', 'yoga', 'user'),
(14, 'Yupita Tri Rejeky', 'itong', 19630174, 'Banjarmasin, 2 Mei 2001', 'Jl. Kayutangi II', 'P', '089721472145', 'UNISKA', 'Sistem Informasi', '2022-10-17', '2022-12-19', 'itong', 'user'),
(15, 'Fenny Anggriany', 'Fenny', 19630250, 'Banjarmasin,  23 Maret 2001', 'Jl. Adhyaksa', 'P', '087167852234', 'UNISKA', 'Teknik Informatika', '2022-10-17', '2022-12-19', 'Fenny', 'user'),
(16, 'Riska Aulia', 'riska', 21970644, 'Kotabaru, 3 Desember 2005', 'Jl. Sungai Andai', 'P', '089721472145', 'SMKN 2 Banjarmasin', 'Manajemen', '2022-12-26', '2023-02-27', 'riska', 'user'),
(17, 'Natasya', 'tasya', 21970672, 'Banjarmasin, 23 Maret 2005', 'Jl. Mulawarman', 'P', '08716785223', 'SMKN 2 Banjarmasin', 'Manajemen', '2022-12-26', '2023-02-27', 'tasya', 'user'),
(18, 'Seyvianty', 'vian', 21970623, 'Banjarmasin, 26 September 2004', 'jl. hksn', 'P', '085221472150', 'SMKN 2 Banjarmasin', 'Manajemen', '2022-12-26', '2023-02-27', 'vian', 'user'),
(19, 'Dhia Zalfa', 'dhia', 2123078, 'Banjarmasin, 2 November 2004', 'Komp. Surya Gemilang', 'P', '085223762381', 'SMKN 5 Banjarmasin', 'Teknik Komputer dan Jaringan', '2023-01-17', '2023-04-14', 'dhia', 'user'),
(20, 'Adela Berliana', 'adel', 21230239, 'Banjarmasin, 1 Januari 2004', 'jl. hksn', 'P', '08716785212', 'SMKN 5 Banjarmasin', 'Teknik Komputer dan Jaringan', '2023-01-16', '2023-04-14', 'adel', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `usn_nilai` varchar(30) NOT NULL,
  `n_sopan` int(11) NOT NULL,
  `n_disiplin` int(11) NOT NULL,
  `n_keaktifan` int(11) NOT NULL,
  `n_sungguh` int(11) NOT NULL,
  `n_mandiri` int(11) NOT NULL,
  `n_bersama` int(11) NOT NULL,
  `n_teliti` int(11) NOT NULL,
  `n_pendapat` int(11) NOT NULL,
  `n_menyerap` int(11) NOT NULL,
  `n_kreatif` int(11) NOT NULL,
  `rata_rata` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `usn_nilai`, `n_sopan`, `n_disiplin`, `n_keaktifan`, `n_sungguh`, `n_mandiri`, `n_bersama`, `n_teliti`, `n_pendapat`, `n_menyerap`, `n_kreatif`, `rata_rata`) VALUES
(6, 'adit', 95, 95, 90, 89, 93, 87, 90, 86, 87, 89, '90.1'),
(7, 'yoga', 80, 83, 83, 86, 89, 82, 90, 86, 83, 92, '85.4'),
(8, 'lana', 80, 83, 78, 90, 85, 88, 89, 80, 88, 87, '84.8'),
(9, 'alma', 95, 95, 90, 89, 93, 87, 90, 86, 87, 89, '90.1'),
(10, 'dea', 93, 90, 91, 87, 89, 85, 93, 85, 85, 89, '88.7'),
(11, 'Fenny', 82, 89, 86, 84, 87, 87, 90, 84, 86, 88, '86.3'),
(12, 'renal', 80, 85, 89, 87, 93, 87, 85, 82, 88, 86, '86.2'),
(13, 'ari', 78, 75, 82, 80, 83, 85, 86, 83, 85, 86, '82.3'),
(14, 'itong', 89, 83, 87, 85, 90, 88, 85, 86, 85, 86, '86.4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `usn_pelanggaran` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggaran` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id_pelanggaran`, `usn_pelanggaran`, `tanggal`, `pelanggaran`, `keterangan`) VALUES
(13, 'yoga', '2022-10-26', 'Terlambat', ''),
(14, 'yoga', '2022-10-26', 'Terlambat', ''),
(15, 'yoga', '2022-11-14', 'Terlambat', ''),
(16, 'yoga', '2022-11-12', 'Terlambat', ''),
(17, 'lana', '2022-10-26', 'Terlambat', ''),
(18, 'lana', '2022-10-26', 'Terlambat', ''),
(19, 'lana', '2022-10-26', 'Terlambat', ''),
(20, 'lana', '2022-10-26', 'Terlambat', ''),
(21, 'lana', '2022-10-26', 'Terlambat', ''),
(22, 'dea', '2022-10-26', 'Terlambat', ''),
(23, 'alma', '2022-10-26', 'Terlambat', ''),
(24, 'alma', '2022-10-26', 'Terlambat', ''),
(25, 'renal', '2022-10-26', 'Terlambat', ''),
(26, 'renal', '2022-10-26', 'Terlambat', ''),
(27, 'renal', '2022-10-26', 'Terlambat', ''),
(28, 'ari', '2022-10-19', 'Terlambat', ''),
(29, 'ari', '2022-10-23', 'Pulang Jam 12', ''),
(30, 'ari', '2022-10-24', 'Terlambat', ''),
(31, 'ari', '2022-10-25', 'Terlambat 2jam', ''),
(32, 'ari', '2022-10-29', 'Terlambat', ''),
(33, 'ari', '2022-11-02', 'Tidak kembali ketika selesai istirahat', ''),
(34, 'ari', '2022-11-03', 'Terlambat', ''),
(35, 'ari', '2022-11-06', 'Tidak Kembali saat selesai istirahat', ''),
(36, 'ari', '2022-11-08', 'Tidak ada keterangan', ''),
(37, 'ari', '2022-11-09', 'Terlambat', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembimbing`
--

CREATE TABLE `tb_pembimbing` (
  `id_pembimbing` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(7, 'adit', 'adit', 'user'),
(8, 'alma', 'alma', 'user'),
(9, 'dea', 'dea', 'user'),
(10, 'ari', 'ari', 'user'),
(11, 'lana', 'lana', 'user'),
(12, 'renal', 'renal', 'user'),
(13, 'yoga', 'yoga', 'user'),
(14, 'itong', 'itong', 'user'),
(15, 'Fenny', 'Fenny', 'user'),
(16, 'riska', 'riska', 'user'),
(17, 'tasya', 'tasya', 'user'),
(18, 'vian', 'vian', 'user'),
(19, 'dhia', 'dhia', 'user'),
(20, 'adel', 'adel', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_user` (`usn`),
  ADD KEY `user_id` (`usn`),
  ADD KEY `user_id_2` (`usn`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `usn_kegiatan` (`usn_kegiatan`);

--
-- Indeks untuk tabel `tb_magang`
--
ALTER TABLE `tb_magang`
  ADD PRIMARY KEY (`id_magang`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `usn_nilai` (`usn_nilai`);

--
-- Indeks untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `usn_pelanggaran` (`usn_pelanggaran`);

--
-- Indeks untuk tabel `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=487;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT untuk tabel `tb_magang`
--
ALTER TABLE `tb_magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  MODIFY `id_pembimbing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD CONSTRAINT `tb_absen_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `tb_magang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD CONSTRAINT `tb_kegiatan_ibfk_1` FOREIGN KEY (`usn_kegiatan`) REFERENCES `tb_magang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_magang`
--
ALTER TABLE `tb_magang`
  ADD CONSTRAINT `tb_magang_ibfk_1` FOREIGN KEY (`id_magang`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`usn_nilai`) REFERENCES `tb_magang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD CONSTRAINT `tb_pelanggaran_ibfk_1` FOREIGN KEY (`usn_pelanggaran`) REFERENCES `tb_magang` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
