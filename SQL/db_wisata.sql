-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 01.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasis`
--

CREATE TABLE `destinasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dilihat` int(11) NOT NULL DEFAULT 0,
  `tiket` int(11) NOT NULL DEFAULT 0,
  `harga_tiket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `destinasis`
--

INSERT INTO `destinasis` (`id`, `nama`, `slug`, `kategori_id`, `alamat`, `lokasi`, `dilihat`, `tiket`, `harga_tiket`, `gambar`, `gambar2`, `gambar3`, `buka`, `deskripsi`, `deskripsi_singkat`, `created_at`, `updated_at`) VALUES
(10, 'Pantai Pasir Kencana', 'pantai-pasir-kencana', 5, 'Jalan Pantai, Wonokerto, Panjang Wetan, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51153', 'https://goo.gl/maps/3dSEktVHsBTENm9b7', 0, 1, '15.000 - Hari Biasa, 20.000 - Hari Jumat sampai Minggu,  25.000 - Hari Besar', 'backend/upload/destinasi/1765793996515744.jpg', 'backend/upload/destinasi/1765793996622157.jpg', 'backend/upload/destinasi/1765794124573507.jpg', '14:00-20:00 - Minggu Libur', '<div>Pantai Pasir Kencana merupakan tempat wisata pantai kekinian yang lokasinya berada di Kota Pekalongan. Awas jangan sampai salah ya,,,kamu harus tahu bahwa Pekalongan itu ada Kabupatennya ada pula Kotanya.<br><br></div><div>Ya,,,semacam Bandung yang wilayahnya terbagi menjadi Kabupaten dan Kotamadya. Tempat wisata yang tersaji pun jelas akan berbeda, misalnya saja Kabupaten Pekalongan identik dengan tempat wisata alam seperti gunung, bukit, hingga curug atau air terjun.<br>Sedangkan Kota Pekalongan tempat wisatanya sekitar pantai dan juga laut, karena berbatasan langsung dengan Laut Jawa di sebelah utara. Selain itu, juga merupakan pelabuhan terpenting di Jawa Tengah.<br><br>Pantai Pasir Kencana mulai dibuka kembali pada bulan Maret 2022 kemarin, dengan mengusung tema wisata buatan kekinian yang menempati luas sekitar 1,5 Hektar. Berikut review yang dapat kami sajikan!<br><br><strong>Lokasi dan Alamat Pantai Pasir Kencana</strong></div><div>Alamat Pantai Pasir Kencana berada di Jalan Pantai, Wonokerto, Kelurahan Panjang Wetan, Kecamatan Pekalongan Utara, Kota Pekalongan, Jawa Tengah.<br><br><strong>Rute Menuju Pantai Pasir Kencana</strong></div><div>Rute menuju Pantai Pasir Kencana cukup dekat dari Alun-Alun Kota Pekalongan, dengan estimasi waktu sekitar 14 menit dan jarak tempuh kurang dari 5 km.</div><div>Yakni dengan mengambil arah ke jalan Hasanudin untuk menuju Jl. WR.Supratman hingga tiba di Panjang Wetan. Selanjutnya tinggal mencari lokasi dari Pantai Pasir Kencana, akses jalannya sudah beraspal dan dapat dilalui oleh kendaraan apapun.<br><br><strong>Jam Buka Pantai Pasir Kencana</strong></div><ul><li>Jam operasional Pantai Pasir Kencana buka mulai pukul 14.00 hingga 20.00</li><li>Setiap hari Selasa sampai Minggu</li><li>Sedangkan untuk hari Senin tutup</li></ul><div><strong>Harga Tiket Masuk Pantai Pasir Kencana</strong></div><ul><li>HTM Pantai Pasir Kencana&nbsp; sebesar Rp. 15.000,- per orang untuk weekdays</li><li>Setiap hari Jumat sampai dengan Minggu sebesar Rp. 20.000,-</li><li>Untuk hari libur dan hari besar lainnya sebesar Rp. 25.000,-</li></ul><div>Anak dengan tinggi badan di atas 80cm wajib membeli tiket masuk<br><br></div><div><strong>Fasilitas Pantai Pasir Kencana</strong></div><div>Beberapa fasilitas yang tersedia di Pantai Pasir Kencana Pekalongan ini diantaranya:</div><ul><li>Area parkir kendaraan yang luas,</li><li>Toilet,</li><li>Menara pandang,</li><li>Mushola,</li><li>Panggung hiburan,</li><li>Panggung budaya,</li><li>Jogging track,</li><li>Kamar bilas,</li><li>Tempat bilas di luar ruangan,</li><li>Air mancur,</li><li>Kios-kios makanan dan minuman,</li><li>Tempat untuk duduk-duduk,</li><li>Toko souvenir,</li></ul><div><br><br></div>', '<div>Pantai Pasir Kencana merupakan tempat wisata pantai kekinian yang lokasinya berada di Kota Peka...', '2023-05-13 08:39:42', '2023-05-14 05:54:09'),
(11, 'Museum Batik Kota Pekalongan', 'museum-batik-kota-pekalongan', 1, 'Jl. Jetayu No.3, Panjang Wetan, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141', 'https://goo.gl/maps/5He8okxGNG8xAwH46', 0, 1, '5.000 - Dewasa & Umum, 1.000 - Anak-anak & Pelajar', 'backend/upload/destinasi/1765800368857545.jpg', 'backend/upload/destinasi/1765800369043939.jpg', 'backend/upload/destinasi/1765800369432338.jpg', '08:00-15:00', '<div>Museum ini didirikan pada 23 Mei 2006 dan diresmikan oleh Presiden Republik Indonesia, Bapak Dr. H. Susilo Bambang Yudhoyono pada 12 Juli 2006. Terwujudnya Museum Batik di Kota Pekalongan sebagai wadah untuk menggali, melestarikan dan mengembangkan batik sebagai warisan budaya bangsa Indonesia serta pusat informasi yang perlu dikembangkan, dibina dan dipelihara keberadaannya.</div><div>&nbsp;</div><div>Melalui berbagai program yang dicanangkan oleh Museum ini, diharapan dapat mendorong masyarakat Indonesia untuk peduli terhadap keberadaan Museum Batik di kota Pekalongan sebagai wujud turut serta dalam pelestarian budaya Indonesia.&nbsp; Museum ini sejak awal diniatkan sebagai pusat data dan informasi mengenai batik; sebagai pusat riset dan pengembangan ilmu dan pengembangan desain batik, perpustakaan dan sebagai acuan&nbsp; dalam seluruh hal-hal perbatikan; mengkoleksi batik klasik, batik lawasan dan batik kontemporer. Di samping itu, diharapkan menjadi dokumentasi, penelitian dan penyajian informasi serta mengkomunikasikannya kepada masyarakat agar dapat dimanfaatkan sepenuhnya bagi kepentingan masyarakat yang lebih luas.</div><div>&nbsp;</div><div>Sejak abad XIV-XVI Kota Pekalongan telah dikenal karya dan kegiatan membatik sebagai salah satu pokok penghidupan sebagian besar masyarakatnya. Tanggal 12 Juli 1972 perwakilan Departemen Pendidikan dan Kebudayaan Jawa Tengah cq. Kepala Bidang Permuseuman didukung oleh Walikota ke 10 (sepuluh) Drs. R. Soepomo mendirikan Museum Batik di Pekalongan yang terletak di tengah Kota Pekalongan,&nbsp; sebelah selatan kawasan Taman Hiburan Rakyat (THR) Gedung Bintang Merdeka yang sekarang dikawasan Pos Penjagaan Polisi (Posis) Jalan Resimen XVII.</div><div>&nbsp;</div><div>Museum Batik dengan luas 40 m2 dan bangunan yang sangat sederhana memamerkan 1149 koleksi batik, antara lain wayang beber dari kain batik yang berusia ratusan tahun serta alat tenun tradisional ATBM (Alat Tenun Bukan Mesin) maupun peralatan untuk proses membuat batik dan dikelola oleh Dinas Pendidikan dan Kebudayaan (P &amp; K) Kota Pekalongan.<br><br>Fasilitas&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</div><div>Ruang koleksi batik</div><div>Ruang perpustakaan</div><div>Telecenter</div><div>Kedai batik</div><div>Ruang pertemuan</div><div>&nbsp;</div><div>Waktu operasional&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div><div>Senin – Minggu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 08.00 – 15.00 WIB</div><div>Hari Libur Nasional&nbsp; : Tutup</div><div>&nbsp;</div><div>Biaya tiket masuk :</div><div>Dewasa/umum&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Rp 5.000,- per orang</div><div>Anak-anak/pelajar&nbsp; &nbsp; : Rp 1.000,- per orang</div>', '<div>Museum ini didirikan pada 23 Mei 2006 dan diresmikan oleh Presiden Republik Indonesia, Bapak Dr...', '2023-05-13 09:48:20', '2023-05-13 10:21:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama`, `slug`, `gambar`, `tgl_mulai`, `tgl_selesai`, `waktu`, `penyelenggara`, `deskripsi`, `alamat`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'BAZAR UMKM RAMADHAN 1444 H KAB. PEKALONGAN Update', 'bazar-umkm-ramadhan-1444-h-kab-pekalongan-update', 'backend/upload/event/1765885421870243.jpg', '2023-03-30', '2023-04-12', '15:00-21:00 WIB', 'DINAS KOPERASI UKM TENAGA KERJA KAB. PEKALONGAN', '<div>DALAM RANGKA MEMPERLUAS PASAR PRODUK USAHA MIKRO DAN MEMBANTU MASYARAKAT MEMENUHI KEBUTUHAN PUASA DAN LEBARAN PEMERINTAH KAB. PEKALONGAN BEKERJASAMA DENGAN KEMENTERIAN KOPERASI DAN UKM RI MENYELENGGARAKAN<br><br>DIIKUTI 60 USAHA MIKRO DAN UMKM KAB. PEKALONGAN<br>DI DUKUNG BUMN, PERBANKAN, BUMD, SWASTA DAN INSTANSI KEMENTERIAN SERTA WIRAUSAHAWAN<br>CP. 081334261965</div>', 'PLUT KUMKM KAB. PEKALONGAN (GEDUNG UMKM CENTER) JL. RAYA WONOPRINGGO – MADUKARAN KAB. PEKALONGAN', 'https://goo.gl/maps/rDXBdu1vRRbiuXtG9', '2023-05-14 07:35:58', '2023-05-14 08:52:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', '2023-05-11 09:55:19', NULL),
(2, 'Pendidikan', '2023-05-11 09:56:33', NULL),
(5, 'Hiburan', '2023-05-13 08:32:43', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_090537_create_kategoris_table', 2),
(6, '2023_05_11_104527_create_destinasis_table', 3),
(7, '2023_05_14_130020_create_events_table', 4);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@gmail.com', '098827263553', '202305110708-squid.png', 'admin', NULL, '$2y$10$qEREoj3ZGg.ojxjpct1Um.3NZuGRgV42gUf64OPgAaiufLYHiiB8a', NULL, '2023-05-10 19:20:29', '2023-05-11 01:20:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasis`
--
ALTER TABLE `destinasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasis`
--
ALTER TABLE `destinasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
