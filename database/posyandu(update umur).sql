-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2023 pada 15.46
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayi`
--

CREATE TABLE `bayi` (
  `id_bayi` int(11) NOT NULL,
  `nik_bayi` varchar(16) NOT NULL,
  `nama_bayi` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jk_bayi` enum('L','P') NOT NULL,
  `umur_bayi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bayi`
--

INSERT INTO `bayi` (`id_bayi`, `nik_bayi`, `nama_bayi`, `tempat`, `tanggal`, `agama`, `jk_bayi`, `umur_bayi`) VALUES
(1, '8937424837840983', 'Ilham Pramana Putra', 'Depok', '2020-02-06', 'Islam', 'L', '0000-00-00'),
(11, '8364827436810276', 'Rina Nurmayanti', 'Depok', '2019-02-07', 'Islam', 'P', '0000-00-00'),
(16, '8732845301937483', 'Denisa Aprilia', 'Bandung', '2021-04-16', 'Islam', 'P', '0000-00-00'),
(19, '8394029465930573', 'Indri Darmayanti', 'Jakarta', '2020-05-14', 'Islam', 'P', '0000-00-00'),
(22, '8932742104827436', 'Nurmaida', 'Bogor', '2019-09-11', 'Islam', 'P', '0000-00-00'),
(23, '8930475648201937', 'Rendy Dharmayanto', 'Jakarta', '2020-09-09', 'Islam', 'L', '0000-00-00'),
(25, '8974365478320987', 'Rizky Januar', 'Jakarta', '2021-09-16', 'Kristen', 'L', '0000-00-00'),
(27, '8657384023910283', 'Putri Mariska', 'Bandung', '2019-07-10', 'Islam', 'P', '0000-00-00'),
(28, '842904726389201', 'Dewi Rasmita', 'Bandung', '2022-06-19', 'Islam', 'P', '0000-00-00'),
(31, '8927356253672892', 'I Gede Bayu', 'Bali', '2020-12-22', 'Hindu', 'L', '0000-00-00'),
(32, '8038293652810928', 'Lina Apriyanti', 'Depok', '2020-10-24', 'Islam', 'P', '0000-00-00'),
(34, '8930256387268029', 'Ahmad Fahrudin', 'Depok', '2021-05-25', 'Islam', 'L', '0000-00-00'),
(35, '8672564367893546', 'Asyanti Putri Renata', 'Jakarta', '2020-09-17', 'Islam', 'P', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `tgl_berobat` date NOT NULL,
  `tindakan` text NOT NULL,
  `diagnosa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_bayi`, `id_petugas`, `id_ibu`, `tgl_berobat`, `tindakan`, `diagnosa`) VALUES
(15, 13, 8, 10, '2022-10-11', 'Melakukan Vaksinasi polio', 'Suntik'),
(16, 19, 11, 11, '2022-11-15', 'Melakukan Vaksinasi campak', 'Suntik'),
(18, 2, 3, 5, '2022-11-16', 'Melakukan Vaksinasi BCG', 'Tahap Pertama'),
(19, 23, 12, 12, '2022-09-12', 'Melakukan Vaksinasi Polio', 'Tahap Pertama'),
(20, 25, 3, 1, '2022-11-12', 'Vaksinasi BCG', 'Suntik'),
(21, 28, 8, 10, '2022-11-12', 'Vaksinasi Campak', 'Tahap Pertama'),
(22, 31, 8, 13, '2022-11-12', 'Vaksinasi Polio', 'Tahap pertama'),
(23, 22, 10, 7, '2022-12-04', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` int(15) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_dar` varchar(20) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ibu`
--

INSERT INTO `ibu` (`id_ibu`, `nik_ibu`, `nama_ibu`, `tempat_lahir`, `tgl_lahir`, `gol_dar`, `nama_ayah`, `alamat`, `kecamatan`, `kota`) VALUES
(1, '8900001345649312', 'Dini Megawati', 'Jakarta', '1987-03-12', 'o', 'Herman', 'Jl. pesona Laguna 2 blok k2 no 12', 'Tapos', 'Depok'),
(7, '8700001245231890', 'Mirnayanti rahma', 'Bogor', '1990-08-19', 'o', 'Ramdhan Adi Sucipto', 'Jl. Kenangan No.12 Rt.004/Rw.022', 'Sukamaju', 'Depok'),
(9, '8772000345300134', 'Maharani Dewi', 'Depok', '1990-07-19', 'o', 'Rahman Hakim', 'Jl. Sidakarya 04 Rt.005/010', 'Tapos', 'Depok'),
(10, '8690276210987200', 'Astri Wulaningsih', 'Jakarta', '1991-10-19', 'o', 'Aditya Rahman', 'Jl. Kapten Yos sudarso no 12 Rt.007/005', 'Cilangkap', 'Depok'),
(11, '8947237482930192', 'Adinda Rahma', 'Jakarta', '1990-09-19', 'o', 'Beni Saputra Aji', 'Jl. Sukmajaya No 12 Rt.005/014', 'Jatijajar', 'Depok'),
(12, '8000720333025003', 'Gita Saputri', 'Bogor', '1990-09-14', 'o', 'Ahmad Dwi Saputra', 'Jl. Karya no 14 Rt.006/009', 'Sukamaju', 'Depok'),
(13, '8265647689532190', 'Rani Dwi Arsyi', '', '0000-00-00', '', 'Muhammad Jalaludin', 'Jl. Pesona laguna 2', '', ''),
(14, '8762019827618920', 'Fera Jelita', '', '0000-00-00', '', 'Mulyadi', 'Jl. Raya Tapos Rt.004/022', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `nama_imunisasi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `nama_imunisasi`) VALUES
(11, 'HB-0 (0-7 hari)'),
(12, 'BCG 1'),
(13, 'Polio 1'),
(14, 'DPT-HB-Hib 1'),
(16, 'DPT-HB-Hib 2'),
(17, 'Polio 3'),
(18, 'DPT-HB-Hib 3'),
(19, 'Polio 2'),
(20, 'IPV'),
(21, 'Campak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(80) NOT NULL,
  `harga_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga_obat`) VALUES
(2, 'Panadol Anak', 20000),
(3, 'Sumang', 5000),
(4, 'Sanmol', 18000),
(5, 'Tolak Angin Anak', 4000),
(6, 'Antimo', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_timbang` int(11) NOT NULL,
  `anak_id` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `ibu_id` int(11) NOT NULL,
  `tgl_skrng` date NOT NULL,
  `umur` date NOT NULL,
  `bb` double NOT NULL,
  `tb` double NOT NULL,
  `deteksi` enum('Sesuai','Tidak Sesuai') NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penimbangan`
--

INSERT INTO `penimbangan` (`id_timbang`, `anak_id`, `tgl_lahir`, `jenis_kelamin`, `ibu_id`, `tgl_skrng`, `umur`, `bb`, `tb`, `deteksi`, `ket`) VALUES
(1, 1, '2012-06-06', 'Perempuan', 2, '2021-02-05', '2000-01-06', 4, 4, 'Sesuai', ''),
(3, 1, '2012-06-06', 'Perempuan', 2, '2019-01-11', '0000-00-00', -4, 5, 'Sesuai', ''),
(4, 1, '2012-06-06', 'Perempuan', 2, '2019-01-11', '0000-00-00', -4, 5, 'Sesuai', ''),
(5, 1, '2012-06-06', 'Perempuan', 2, '2021-02-12', '2000-01-08', 9.5, 64, 'Sesuai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`) VALUES
(3, 'Feni Darmayanti'),
(8, 'Putri Felisha'),
(10, 'Sulastri'),
(11, 'Sinta Ayu'),
(12, 'Irnawati Romadhoni'),
(14, 'Denisa maharani'),
(15, 'Yanti Elisa Putri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_imunisasi`
--

CREATE TABLE `resep_imunisasi` (
  `id_resep` int(11) NOT NULL,
  `id_berobat` int(11) NOT NULL,
  `id_imunisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep_imunisasi`
--

INSERT INTO `resep_imunisasi` (`id_resep`, `id_berobat`, `id_imunisasi`) VALUES
(23, 16, 21),
(25, 18, 12),
(26, 19, 13),
(29, 22, 13),
(30, 21, 21),
(31, 20, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`) VALUES
(11, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Arief'),
(13, 'adi', 'dfc87a8a900d23c665de66efee2248b6881b7771', 'Adi Nur Saputra');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayi`
--
ALTER TABLE `bayi`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_bayi` (`id_bayi`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indeks untuk tabel `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indeks untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_timbang`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `resep_imunisasi`
--
ALTER TABLE `resep_imunisasi`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_obat` (`id_imunisasi`),
  ADD KEY `id_berobat` (`id_berobat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayi`
--
ALTER TABLE `bayi`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_timbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `resep_imunisasi`
--
ALTER TABLE `resep_imunisasi`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `berobat_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep_imunisasi`
--
ALTER TABLE `resep_imunisasi`
  ADD CONSTRAINT `resep_imunisasi_ibfk_1` FOREIGN KEY (`id_imunisasi`) REFERENCES `imunisasi` (`id_imunisasi`) ON DELETE CASCADE,
  ADD CONSTRAINT `resep_imunisasi_ibfk_2` FOREIGN KEY (`id_berobat`) REFERENCES `berobat` (`id_berobat`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
