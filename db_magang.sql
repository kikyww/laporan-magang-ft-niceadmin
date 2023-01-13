-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2023 pada 15.09
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
(1, 'adit', 'Tuesday, 10-01-2023 / 09:39', 'Hadir', 'asd'),
(2, 'adit', 'Tuesday, 10-01-2023 / 09:39', 'Izin', 'kj'),
(3, 'adit', 'Tuesday, 10-01-2023 / 09:39', 'Hadir', ''),
(4, 'adit', 'Tuesday, 10-01-2023 / 09:39', 'Sakit', ''),
(5, 'adit', 'Tuesday, 10-01-2023 / 09:39', 'Hadir', ''),
(6, 'adit', 'Tuesday, 10-01-2023 / 09:40', 'Hadir', 'g'),
(7, 'adit', 'Tuesday, 10-01-2023 / 09:40', 'Hadir', ''),
(8, 'adit', 'Tuesday, 10-01-2023 / 09:40', 'Hadir', ''),
(9, 'adittt', 'Friday, 13-01-2023 / 17:32', 'Hadir', '');

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
(2, 'adit', '2022-12-16', 'input kedua', 'input kedua', 'input kedua', 'input kedua', 'input kedua'),
(4, 'adit', '2022-12-30', 'data ke 3', 'data ke 3', 'data ke 3', 'data ke 3', ''),
(5, 'adit', '2022-12-30', 'data ke 4', 'data ke 4', '', '', ''),
(7, 'kikyw', '2022-12-30', 'input 2', 'input 2', 'input 2', '', ''),
(8, 'kikyw', '2023-01-01', 'a', '', '', '', '');

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
(4, 'kikyw', 'kikyw', 34955, 'Banjarmasin, 25 September 2000', 'jl. hksn', 'L', '08716785212132', 'UNISKA', 'Sistem Informasi', '2022-11-03', '2022-12-02', 'kikyw', 'user'),
(5, 'Rizky', 'rizky', 3949348, 'Banjarmasin, 25 September 2000', 'jl. hksn', 'L', '0871678521234546', 'UNISKA', 'TEKNIK INFORMATIKA', '2022-12-01', '2022-12-30', 'rizky', 'user'),
(7, 'Rizky Aditya', 'adit', 438347, 'Banjarmasin, 25 September 2000', 'jl. hksn', 'L', '0871678521', 'UNISKA', 'Sistem Informasi', '2022-12-01', '2022-12-01', 'adit', 'user'),
(8, 'Aditya Rizkyy', 'adittt', 19710005, 'Banjarmasin, 25 September 20005', 'jl. hksnsa', 'L', '0871678521234546', 'UNISKASs', 'Sistem Informasi', '2023-01-02', '2023-01-30', 'adittt', 'user');

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
(1, 'adittt', 89, 87, 87, 89, 96, 78, 87, 98, 87, 67, '86.5'),
(2, 'kikyw', 90, 98, 78, 88, 85, 85, 76, 87, 76, 98, '86.1'),
(3, 'rizky', 87, 87, 67, 98, 94, 82, 98, 87, 95, 83, '87.8');

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
(1, 'adittt', '2023-01-06', 'Telat 20 menit', 'tes'),
(2, 'adittt', '2023-01-08', 'Telat 20 ', 'tes'),
(4, 'kikyw', '2023-01-09', 'Telat 20 ', '12'),
(5, 'kikyw', '2023-01-01', 'Telat 20 menit', 'asd'),
(6, 'kikyw', '2022-12-30', 'Telat 20 menit', 'asd'),
(7, 'adit', '2023-01-01', 'Telat', '2'),
(8, 'adit', '2023-01-02', 'Terlambatt', ''),
(10, 'adittt', '2023-01-13', 'Telat 20 menit', ''),
(11, 'adittt', '2023-01-12', 'Terlambatt', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_histori` int(11) NOT NULL
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
(4, 'kikyw', 'kikyw', 'user'),
(5, 'rizky', 'rizky', 'user'),
(7, 'adit', 'adit', 'user'),
(8, 'adittt', 'adittt', 'user');

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
-- Indeks untuk tabel `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id_histori`);

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
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_magang`
--
ALTER TABLE `tb_magang`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
