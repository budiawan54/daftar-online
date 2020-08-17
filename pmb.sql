-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2020 pada 14.19
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `depart`
--

CREATE TABLE `depart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `depart_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `depart`
--

INSERT INTO `depart` (`id`, `depart_name`) VALUES
(1, 'Teknik Komputer dan jaringan (TKJ)'),
(2, 'Multimedia (MM)'),
(3, 'Akuntansi Komputer (AK)'),
(4, 'Rekayasa Perangkat Lunak (RPL)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_08_13_051449_tabel_pendaftar', 1),
(2, '2020_08_13_052439_sex', 2),
(3, '2020_08_13_052515_depart', 3),
(4, '2020_08_14_115431_make_table_quiz', 4),
(5, '2020_08_14_145929_make_schedule_quiz', 5),
(6, '2020_08_16_204502_create_question_aswer', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir` date NOT NULL,
  `sex` int(11) NOT NULL,
  `school_addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depart` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_addr` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sesi` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `nama`, `lahir`, `sex`, `school_addr`, `telp`, `depart`, `email`, `std_addr`, `fath`, `moth`, `sesi`, `nilai`, `created_at`, `updated_at`) VALUES
(71, 'nyoman arya prasetya', '2004-04-07', 1, 'smkti bali global singaraja', '08764783738', 4, 'aryapra25364@gmai.com', 'bulelng bali ,indonesia', 'kt artawa', 'rosida', 1, 40, '2020-08-17 11:37:59', '2020-08-17 11:46:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_e` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sesi` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`id`, `soal`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `t_option`, `img`, `sesi`, `status`) VALUES
(25, 'Penggunaan UPS sebagai salah satu perangkat pendukung komputer, dimaksudkan untuk….', 'sumber daya listrik', 'penghemat daya listrik', 'kestabilan daya', 'penambah daya listrik', 'sumber daya cadangan sementara, jika terputusnya aliran listrik', 'B', NULL, 1, 1),
(26, 'Ciri scanner yang terhubung dengan PC adalah bila kabel data scanner tersambung ke….', 'port USB', 'steker listrik', 'port serial monitor', 'port serial printer', 'port serial keyboard', 'A', NULL, 1, 1),
(27, 'Webcam adalah salah satu periferal yang dapat digunakan sebagai media masukan grafis dan dapat berfungsi karena adanya teknologi yang disebut dengan ….', 'telepon', 'telegram', 'e-mail', 'internet', 'jaringan listrik', 'D', NULL, 1, 1),
(28, 'Salah satu software yang dapat digunakan untuk mengedit hasil scannning adalah ….', 'Ms Access', 'Ms Frontpage', 'Adobe Photoshop', 'Ms Excell', 'Ms Powerpoint', 'C', NULL, 1, 1),
(29, 'Type data hasil scanning yang dimanipulasi dengan software digital imaging dapat disimpan dengan berbagai format antara lain ….', 'bmp, fla, jpg', 'png, fla, jpeg', 'jpg, swf, ppt', 'bmp, exe, jpeg', 'fla,jpg,swf', 'B', NULL, 1, 1),
(30, 'Software aplikasi yang dapat digunakan untuk membuat gambar vector adalah ….', 'adobe photoshop dan corel draw 12', 'adobe photoshop dan powerpoint', 'MS word dan corel draw 12', 'macromedia freehand dan corel draw 12', 'adobe photoshop dan acces', 'C', NULL, 1, 1),
(31, 'Sebelum pencetakan gambar vector sebaiknya dilihat orientasi pencetakan yang dilakukan dengan ….', 'melakukan penyettingan pada tool bar', 'melakukan penyettingan pada page setup', 'melakukan penyettingan pada table', 'melakukan penyettingan pada head print', 'melakukan penyettingan pada vga card', 'B', NULL, 1, 1),
(32, 'Layer yang terdapat pada software Adobe Photoshop, dapat diartikan secara sederhana sebagai….', 'halaman kerja yang tidak bisa bertumpuk', 'halaman kerja yang tidak bisa bertumpuk', 'halaman kerja yang bisa bertumpuk', 'halaman kerja sementara', 'halaman pencetakan', 'B', NULL, 1, 1),
(45, 'Perhatikan gambar di bawah!Yang ditunjuk oleh tanda panah  1 adalah', 'Property Bar', 'Menu Bar', 'Standar Bar', 'Slide Bar', 'Title Bar', 'B', 'kucing.png', 1, 1),
(46, 'Pada gambar pada soal no 7 diatas, yang ditunjuk oleh tanda panah Ke 2...', 'Work Area', 'Color Palete', 'Ruler Vertical', 'Tool Box', 'Scroll Box', 'D', 'nano.png', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_answer`
--

CREATE TABLE `q_answer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pendaftar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_soal` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `sesi_ujian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` bigint(20) UNSIGNED NOT NULL,
  `schedule` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `schedule`) VALUES
(1, '2020-08-18 00:00:00'),
(2, '2020-08-30 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sex`
--

CREATE TABLE `sex` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sex_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sex`
--

INSERT INTO `sex` (`id`, `sex_name`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `nama_type`) VALUES
(1, 'admin'),
(2, 'pendaftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `id_pendaftar`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(33, 'nyoman arya prasetya', 'aryapra25364@gmai.com', 71, 2, NULL, '$2y$10$OUX/bI134.yz13arJ4e4HOZ.VxCigLOeKEO6C/ismPwKp3oA.8KcC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_answer`
--
ALTER TABLE `q_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indeks untuk tabel `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `depart`
--
ALTER TABLE `depart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `q_answer`
--
ALTER TABLE `q_answer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sex`
--
ALTER TABLE `sex`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
