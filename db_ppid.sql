-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2020 pada 06.05
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_informasi`
--

CREATE TABLE `t_informasi` (
  `id_informasi` int(10) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED DEFAULT NULL,
  `judul_informasi` varchar(200) DEFAULT NULL,
  `keterangan_informasi` text NOT NULL,
  `informasi_parent` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_informasi`
--

INSERT INTO `t_informasi` (`id_informasi`, `id_menu`, `judul_informasi`, `keterangan_informasi`, `informasi_parent`) VALUES
(1, 6, 'Informasi tentang Profil BWS Sulawesi IV Kendari', '', NULL),
(2, 6, 'Informasi mengenai kedudukan, domisili, beserta alamat lengkap dan kontak', '', 1),
(3, 6, 'Struktur organisasi', '', 1),
(4, 6, 'Ringkasan informasi tentang program dan/atau kegiatan yang sedang dijalankan dalam lingkup BWS Sulawesi IV Kendari, yang meliputi:', '', NULL),
(5, 6, 'Matrik program, kegiatan, dan target Kementerian Keuangan', '', 4),
(6, 6, 'Gambaran umum satuan kerja', '', 1),
(7, 6, 'Profil singkat pejabat struktural', '', 1),
(8, 6, 'Tugas dan fungsi', '', 1),
(9, 6, 'Visi dan misi', '', 1),
(10, 6, 'Laporan harta kekayaan bagi pejabat negara yang telah diperiksa, diverifikasi dan telah dikirimkan oleh KPK ke BWS Sulawesi IV Kendari untuk diumumkan', '', 1),
(11, 6, 'Agenda penting terkait pelaksanaan tugas BWS Sulawesi IV Kendari', '', 4),
(12, 6, 'Informasi khusus lainnya yang berkaitan langsung dengan hak-hak masyarakat', '', 4),
(13, 8, 'Informasi Publik serta merta', 'Belum ada infor soal ini', NULL),
(14, 7, 'Daftar Informasi Publik BWS Sulawesi IV Kendari', '', NULL),
(15, 7, 'Informasi tentang organisasi, administrasi, kepegawaian, dan keuangan:', '', NULL),
(16, 7, 'Data statistik pegawai Kementerian PUPR', '', 15),
(17, 7, 'aaaaaaaaaa', '', 15),
(19, 6, ' Informasi tentang penerimaan calon peserta didik pada Kementerian Keuangan yang menyelenggarakan kegiatan pendidikan untuk umum', '', 4),
(20, 6, '	\r\nRingkasan informasi tentang kinerja dalam lingkup BWS Sulawesi IV Kendari berupa narasi tentang realisasi kegiatan yang telah maupun sedang dijalankan beserta capaiannya', '', NULL),
(21, 6, 'Ringkasan laporan keuangan', '', NULL),
(22, 6, 'Ringkasan laporan akses informasi publik', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_informasi_detail`
--

CREATE TABLE `t_informasi_detail` (
  `id_informasi_detail` int(10) UNSIGNED NOT NULL,
  `id_informasi` int(10) UNSIGNED NOT NULL,
  `jenis_detail` enum('file','url') DEFAULT NULL,
  `informasi_detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_informasi_detail`
--

INSERT INTO `t_informasi_detail` (`id_informasi_detail`, `id_informasi`, `jenis_detail`, `informasi_detail`) VALUES
(1, 2, 'url', 'http://sda.pu.go.id/bwssulawesi4/'),
(2, 2, 'file', 'www.bbb.com'),
(3, 3, 'file', 'www.ccc.com'),
(6, 5, 'file', 'asasas'),
(9, 6, 'file', 'test'),
(10, 7, 'file', 'sdfsdfa'),
(11, 8, 'file', 'asdfd'),
(12, 9, 'url', 'asds'),
(13, 10, 'url', 'asda'),
(14, 11, 'url', 'asd'),
(15, 12, 'url', 'asdasd'),
(16, 14, 'url', 'aaaaaaaasdf adsfa sdfad'),
(17, 16, 'url', 'www.asdfsd.com'),
(18, 16, 'file', 'sadfads'),
(22, 20, 'url', 'google.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_menu`
--

CREATE TABLE `t_menu` (
  `id_menu` int(11) UNSIGNED NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `menu_seo` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `parent_menu` int(11) UNSIGNED DEFAULT NULL,
  `keterangan_menu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `nama_menu`, `menu_seo`, `urutan`, `parent_menu`, `keterangan_menu`) VALUES
(1, 'Beranda', '', 1, NULL, ''),
(3, 'Layanan Informasi', '', 3, NULL, ''),
(4, 'Informasi Publik', '', 4, NULL, ''),
(5, 'Informasi PPID', 'standar-layanan', 5, NULL, ''),
(6, 'Informasi Publik Yang Wajib Disediakan Dan Diumumkan Secara Berkala', 'informasi/tampil/informasi-berkala', 0, 4, ''),
(7, 'Informasi Tersedia Setiap Saat', 'informasi/tampil/informasi-setiap-saat', 0, 4, ''),
(8, 'Informasi Publik yang Wajib diumumkan Serta Merta', 'informasi/tampil/informasi-serta-merta', 0, 4, ''),
(10, 'Permintaan Data', 'http://sda.pu.go.id/bwssulawesi4/permintaan-data', 0, 3, ''),
(11, 'Dasar Hukum PPID', 'page/dasar-hukum-ppid', 0, 5, ''),
(12, 'Profil PPID', 'profil-ppid', 0, 5, ''),
(13, 'Standar Layanan PPID', 'page/standar-layanan', 0, 5, ''),
(14, 'Statistik dan Laporan', 'statistik-dan-laporan', 6, NULL, ''),
(15, 'Statistik Akses Informasi', 'statistik-akses-informasi', 0, 14, ''),
(16, 'Laporan Layanan Informasi Tahunan', 'laporan-layanan-informasi-tahunan', 0, 14, ''),
(17, 'Laporan Survey Kepuasan Pelanggan Informasi PPID', 'laporan-survey-kepuasan-pelanggan-informasi-ppid', 0, 14, ''),
(18, 'Sengketa Informasi', 'sengketa-informasi', 0, 3, ''),
(20, 'Profil', 'profil', 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_informasi`
--
ALTER TABLE `t_informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_kategori_informasi` (`id_menu`),
  ADD KEY `informasi_parent` (`informasi_parent`);

--
-- Indeks untuk tabel `t_informasi_detail`
--
ALTER TABLE `t_informasi_detail`
  ADD PRIMARY KEY (`id_informasi_detail`),
  ADD KEY `id_informasi` (`id_informasi`);

--
-- Indeks untuk tabel `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `parent_menu` (`parent_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_informasi`
--
ALTER TABLE `t_informasi`
  MODIFY `id_informasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `t_informasi_detail`
--
ALTER TABLE `t_informasi_detail`
  MODIFY `id_informasi_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id_menu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_informasi`
--
ALTER TABLE `t_informasi`
  ADD CONSTRAINT `t_informasi_ibfk_2` FOREIGN KEY (`informasi_parent`) REFERENCES `t_informasi` (`id_informasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_informasi_ibfk_3` FOREIGN KEY (`id_menu`) REFERENCES `t_menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `t_informasi_detail`
--
ALTER TABLE `t_informasi_detail`
  ADD CONSTRAINT `t_informasi_detail_ibfk_1` FOREIGN KEY (`id_informasi`) REFERENCES `t_informasi` (`id_informasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_menu`
--
ALTER TABLE `t_menu`
  ADD CONSTRAINT `t_menu_ibfk_1` FOREIGN KEY (`parent_menu`) REFERENCES `t_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
