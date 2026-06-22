-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2026 pada 18.05
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_pasien`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`) VALUES
(1, 'Dr. Andi Saputro', 'Spesialis Anak'),
(2, 'Dr. Budi Santoso', 'Spesialis Jantung'),
(3, 'Dr. Rina Kartika', 'Spesialis Mata'),
(4, 'Dr. Sinta Dewi', 'Spesialis THT'),
(5, 'Drg. Ayu', 'Spesialis Gigi'),
(6, 'Dr. Anton Supriyatno Sp.PD', 'Spesialis Penyakit Dalam'),
(7, 'Dr. Talita Lita Sp.OG', 'Spesialis Kandungan'),
(8, 'Dr. Aisyah Kartika Sp.B', 'Spesialis Bedah'),
(9, 'Dr. Maryam Sp.DVE', 'Spesialis Kulit & Kelamin'),
(10, 'Dr. Zainal Sp.P', 'Spesialis Paru-paru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama`, `tanggal_lahir`, `alamat`, `no_telp`, `username`, `password`) VALUES
(1, 'Ahmad Fazri', '2000-05-15', 'Tangerang', '081234567890', 'ahmad', '12345'),
(2, 'Siti Renita', '1998-08-20', 'Tangsel', '081234567891', 'siti', '12345'),
(3, 'Rizky Putra', '2002-01-10', 'Depok', '081234567892', 'rizky', '12345'),
(4, 'Reva Aprilia', '2006-04-06', 'Bumi Indah', '09736753787', 'repa', 'repa123'),
(5, 'Revani nafizah', '2006-05-05', 'Bumi Indah Tahap 3', '09837737897', 'repani', 'repani123'),
(6, 'Laylatul Safitri', '2013-09-18', 'Kp. Sondol', '0987653213', 'ela', 'ela123'),
(7, 'Zhafira Putri', '2019-01-03', 'Kutabumi', '097654321987', 'zhafira', 'zhafira123'),
(8, 'Nazwa Fauziah', '2005-11-11', 'Sindang Jaya', '08765432189', 'nazwa', 'nazwa123'),
(9, 'Naesya Prastiwi', '2005-12-21', 'Kp. Cilongok', '0876543897', 'naesya', 'naesya123'),
(10, 'Siti Alishba', '2020-09-21', 'Kp Lamporan', '089745673218', 'alis', 'alis123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `keluhan` text,
  `tanggal_kunjungan` date DEFAULT NULL,
  `jam_kunjungan` time DEFAULT NULL,
  `status` enum('Proses','Disetujui','Ditolak') DEFAULT 'Proses',
  `tanggal_daftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `nomor_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `id_pasien`, `id_dokter`, `keluhan`, `tanggal_kunjungan`, `jam_kunjungan`, `status`, `tanggal_daftar`, `nomor_pendaftaran`) VALUES
(1, 1, 1, 'Demam dan batuk', '2026-06-10', '09:00:00', 'Disetujui', '2026-06-18 08:32:37', 'REG20260603164156'),
(2, 2, 3, 'Mata merah', '2026-06-11', '10:30:00', 'Disetujui', '2026-06-18 08:32:37', 'REG20260603164543'),
(3, 3, 2, 'Nyeri dada', '2026-06-12', '13:00:00', 'Ditolak', '2026-06-18 08:32:37', 'REG20260604143248'),
(4, 4, 3, 'Mata pegal', '2026-06-20', '14:30:00', 'Proses', '2026-06-18 08:32:37', 'REG20260604150025'),
(5, 5, 6, 'Gigi berlubang', '2026-04-10', '18:35:00', 'Proses', '2026-06-18 08:32:37', 'REG20260604152814');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
