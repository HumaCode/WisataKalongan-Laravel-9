-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 06:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `budayas`
--

CREATE TABLE `budayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `dilihat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `hint_budaya` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budayas`
--

INSERT INTO `budayas` (`id`, `nama`, `slug`, `alamat`, `lokasi`, `dilihat`, `gambar`, `deskripsi`, `hint_budaya`, `created_at`, `updated_at`) VALUES
(1, 'Masjid Agung Jami\' Kauman', 'masjid-agung-jami-kauman', 'Kota Pekalongan', 'https://goo.gl/maps/F4DtGp7fUYfeC5Lb8', '6', 'backend/upload/budaya/1768096075824719.jpg', '<div><strong>Masjid Agung Al-Jami’ Kauman Pekalongan</strong> adalah sebuah masjid di Kota Pekalongan Jawa Tengah. Lokasi masjid ini berada di terletak di&nbsp; Jl. KH. Wahid Hasyim, Pekalongan, Provinsi Jawa Tengah atau alun alun kota Pekalongan. Masjid peninggalan sejarah ini menjadi salah satu ciri khas Kota Pekalongan. Meskipun telah dibangun beberapa Masjid baru yang tak kalah megahnya, namun Masjid Kauman ini tetap tak tergantikan sebagai simbol islami warga Pekalongan.<br><br></div><h1>Sejarah Masjid Agung Al Jami Kauman</h1><div>Dahulu nama dari masjid ini adalah Masjid Besar Pekalongan, kemudian dirubah dengan nama baru menjadi Masjid Agung Al Jami Pekalongan pada tahun 1968 atas saran dari Habib Ali bin Ahmad Al Atas.&nbsp;<br><br>Masjid Agung Al Jami Pekalongan dengan serambi masjid yang berada di sebelah kiri, dan menara masjid&nbsp; berada di pojok sana. Masjid ini dibangun oleh Raden Arjo Wirijo Tumenggung Adinegoro, bupati Pekalongan ketiga, pada tahun 1852 M. Saat itu masjid berukuran 35×35 meter dengan sembilan pintu besar, duabelas jendela, ruang imam dan kubah untuk khatib.<br><br>Menara Masjid Agung Al Jami Pekalongan setinggi 27 meter itu selesai dibangun pada bulan Januari 1933 M, yang dibiayai seluruhnya oleh Sayyid Husein bin Ahmad bin Syahab. Ada 99 anak tangga berputar yang harus didaki untuk menuju ke puncak menara.<br><br></div><h1>Arsitektur Masjid Jami Pekalongan</h1><div>Masjid Agung Al Jami Pekalongan berarsitektur Jawa-Arab. Ini bisa dilihat dari kubahnya yang berbentuk joglo. Sementara arsitek Arab nampak dari serambi masjid. Di depan ruangan masjid ada tiga ruangan. Di tengah tempat iman. Sebelah kanan mimbar tempat khatib memberikan ceramah, dan bagian kiri tadinya khusus tempat bupati saat itu beribadah. Namun kini ruangan tersebut sudah tak diistimewakan lagi. Di sebelah kanan bangunan masjid terdapat menara masjid. <br><br>Ruang utama dari Masjid Agung Al Jami Pekalongan ialah pilar-pilar kayu dan ornamen klasik yang masih asli, diperkuat 22 pilar beton penyangga. Atap kayunya juga masih asli menggunakan batang kayu dan tak ada sambungannya. Lengkung di tengah adalah menjadi tempat imam, di sebelah kanan tempat khatib, dan lengkung kubah di kiri dibangun pada 3 Juni 1907 oleh Bupati Adipati Aryonotodirjo untuk tempat bupati saat shalat Jum’at dan shalat Hari Raya.<br><br>Pada gapura dibagian tengah serambi Masjid Agung Pekalongan berbentuk segi empat dengan menara dan kubah kecil di setiap pojoknya serta lubang masuk lengkung. Terlihat dari jauh diatas puncak atap bangunan utama masjid yang berbentuk limasan tumpang. Arsitektur masjid ini menggabungkan gaya tradisional Jawa dengan gaya Timur Tengah.<br><br>Langit ruangan yang tinggi, dibantu dengan putaran kipas angin dalam jumlah banyak, membuat hawa di ruangan ini terasa cukup sejuk. Lantai keramik masjid yang biasanya sangat dingin telah tertutupi sebahagiannya dengan karpet sajadah warna dominan hijau dan ornamen putih.<br><br></div>', 0, '2023-05-14 21:43:47', '2023-06-07 18:41:09'),
(4, 'Makam Zing Zong', 'makam-zing-zong', 'Kec. Doro, Kab.Pekalongan', 'https://goo.gl/maps/aZ1AhTxPfayTzxSN8', '1', 'backend/upload/budaya/1768107096207099.jpg', '<div><strong>Makam Zing Zong</strong><br><br>Makam Zing Zong bukan makam seorang wali yang lazim dibangun dengan indah, melainkan Makam dari saudagar Cina bernama Ho Tjien Siong yang terletak di Dusun Kaso Gunung, Desa Doro, Kecamatan Doro Kabupaten Pekalongan.<br><br>Bangunan mausoleum berupa makam itu terlihat masih kokoh dan terawat. Bila disimak selintas, arsitektur bangunan makam yang dikenal sebagai kompleks Makam Zing Zong Hoo Tjien Siong ini arsitekturnya bergaya paduan antara Cina dan Belanda, nampak megah dan begitu arsitektual. Warna bangunan didominasi putih dengan pagar beton yang juga berwarna putih.</div>', 0, '2023-06-07 21:25:26', '2023-06-07 21:26:08'),
(5, 'Gereja St. Petrus', 'gereja-st-petrus', 'Sampangan, Kota Pekalongan', 'https://goo.gl/maps/zDNK2bLmrYy87n6e7', '0', 'backend/upload/budaya/1768107419444210.jpg', '<div><strong>Gereja St. Petrus</strong><br><br>Gereja St. Petrus adalah sebuah gereja Katolik yang terletak di Pekalongan, Jawa Tengah. Gereja ini didedikasikan untuk Santo Petrus, salah satu rasul Yesus Kristus. Berikut adalah beberapa informasi tentang Gereja St. Petrus di Pekalongan:<br><br>Sejarah: Gereja St. Petrus memiliki sejarah yang panjang di Pekalongan. Didirikan pada tahun 1932, gereja ini telah menjadi salah satu pusat kehidupan rohani bagi umat Katolik di kota ini.<br><br>Arsitektur: Gereja St. Petrus memiliki arsitektur yang indah dan megah. Bangunannya didesain dengan gaya arsitektur Katolik klasik dengan elemen-elemen seperti kubah, tiang-tiang tinggi, dan hiasan artistik yang menghiasi fasad dan interior gereja.</div>', 0, '2023-06-07 21:30:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinasis`
--

CREATE TABLE `destinasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `dilihat` int(11) NOT NULL DEFAULT 0,
  `tiket` int(11) NOT NULL DEFAULT 0,
  `harga_tiket` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `buka` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_singkat` varchar(255) DEFAULT NULL,
  `hint_destinasi` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinasis`
--

INSERT INTO `destinasis` (`id`, `nama`, `slug`, `kategori_id`, `alamat`, `lokasi`, `dilihat`, `tiket`, `harga_tiket`, `gambar`, `gambar2`, `gambar3`, `buka`, `deskripsi`, `deskripsi_singkat`, `hint_destinasi`, `created_at`, `updated_at`) VALUES
(10, 'Pantai Pasir Kencana', 'pantai-pasir-kencana', 5, 'Jalan Pantai, Wonokerto, Panjang Wetan, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51153', 'https://goo.gl/maps/3dSEktVHsBTENm9b7', 6, 1, '15.000 - Hari Biasa, 20.000 - Hari Jumat sampai Minggu,  25.000 - Hari Besar', 'backend/upload/destinasi/1765793996515744.jpg', 'backend/upload/destinasi/1765793996622157.jpg', 'backend/upload/destinasi/1765794124573507.jpg', '14:00-20:00 - Minggu Libur', '<div>Pantai Pasir Kencana merupakan tempat wisata pantai kekinian yang lokasinya berada di Kota Pekalongan. Awas jangan sampai salah ya,,,kamu harus tahu bahwa Pekalongan itu ada Kabupatennya ada pula Kotanya.<br><br></div><div>Ya,,,semacam Bandung yang wilayahnya terbagi menjadi Kabupaten dan Kotamadya. Tempat wisata yang tersaji pun jelas akan berbeda, misalnya saja Kabupaten Pekalongan identik dengan tempat wisata alam seperti gunung, bukit, hingga curug atau air terjun.<br>Sedangkan Kota Pekalongan tempat wisatanya sekitar pantai dan juga laut, karena berbatasan langsung dengan Laut Jawa di sebelah utara. Selain itu, juga merupakan pelabuhan terpenting di Jawa Tengah.<br><br>Pantai Pasir Kencana mulai dibuka kembali pada bulan Maret 2022 kemarin, dengan mengusung tema wisata buatan kekinian yang menempati luas sekitar 1,5 Hektar. Berikut review yang dapat kami sajikan!<br><br><strong>Lokasi dan Alamat Pantai Pasir Kencana</strong></div><div>Alamat Pantai Pasir Kencana berada di Jalan Pantai, Wonokerto, Kelurahan Panjang Wetan, Kecamatan Pekalongan Utara, Kota Pekalongan, Jawa Tengah.<br><br><strong>Rute Menuju Pantai Pasir Kencana</strong></div><div>Rute menuju Pantai Pasir Kencana cukup dekat dari Alun-Alun Kota Pekalongan, dengan estimasi waktu sekitar 14 menit dan jarak tempuh kurang dari 5 km.</div><div>Yakni dengan mengambil arah ke jalan Hasanudin untuk menuju Jl. WR.Supratman hingga tiba di Panjang Wetan. Selanjutnya tinggal mencari lokasi dari Pantai Pasir Kencana, akses jalannya sudah beraspal dan dapat dilalui oleh kendaraan apapun.<br><br><strong>Jam Buka Pantai Pasir Kencana</strong></div><ul><li>Jam operasional Pantai Pasir Kencana buka mulai pukul 14.00 hingga 20.00</li><li>Setiap hari Selasa sampai Minggu</li><li>Sedangkan untuk hari Senin tutup</li></ul><div><strong>Harga Tiket Masuk Pantai Pasir Kencana</strong></div><ul><li>HTM Pantai Pasir Kencana&nbsp; sebesar Rp. 15.000,- per orang untuk weekdays</li><li>Setiap hari Jumat sampai dengan Minggu sebesar Rp. 20.000,-</li><li>Untuk hari libur dan hari besar lainnya sebesar Rp. 25.000,-</li></ul><div>Anak dengan tinggi badan di atas 80cm wajib membeli tiket masuk<br><br></div><div><strong>Fasilitas Pantai Pasir Kencana</strong></div><div>Beberapa fasilitas yang tersedia di Pantai Pasir Kencana Pekalongan ini diantaranya:</div><ul><li>Area parkir kendaraan yang luas,</li><li>Toilet,</li><li>Menara pandang,</li><li>Mushola,</li><li>Panggung hiburan,</li><li>Panggung budaya,</li><li>Jogging track,</li><li>Kamar bilas,</li><li>Tempat bilas di luar ruangan,</li><li>Air mancur,</li><li>Kios-kios makanan dan minuman,</li><li>Tempat untuk duduk-duduk,</li><li>Toko souvenir,</li></ul><div><br><br></div>', '<div>Pantai Pasir Kencana merupakan tempat wisata pantai kekinian yang lokasinya berada di Kota Peka...', 0, '2023-05-13 08:39:42', '2023-05-14 05:54:09'),
(11, 'Museum Batik Kota Pekalongan', 'museum-batik-kota-pekalongan', 1, 'Jl. Jetayu No.3, Panjang Wetan, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141', 'https://goo.gl/maps/5He8okxGNG8xAwH46', 13, 1, '5.000 - Dewasa & Umum, 1.000 - Anak-anak & Pelajar', 'backend/upload/destinasi/1765800368857545.jpg', 'backend/upload/destinasi/1765800369043939.jpg', 'backend/upload/destinasi/1765800369432338.jpg', '08:00-15:00', '<div>Museum ini didirikan pada 23 Mei 2006 dan diresmikan oleh Presiden Republik Indonesia, Bapak Dr. H. Susilo Bambang Yudhoyono pada 12 Juli 2006. Terwujudnya Museum Batik di Kota Pekalongan sebagai wadah untuk menggali, melestarikan dan mengembangkan batik sebagai warisan budaya bangsa Indonesia serta pusat informasi yang perlu dikembangkan, dibina dan dipelihara keberadaannya.</div><div>&nbsp;</div><div>Melalui berbagai program yang dicanangkan oleh Museum ini, diharapan dapat mendorong masyarakat Indonesia untuk peduli terhadap keberadaan Museum Batik di kota Pekalongan sebagai wujud turut serta dalam pelestarian budaya Indonesia.&nbsp; Museum ini sejak awal diniatkan sebagai pusat data dan informasi mengenai batik; sebagai pusat riset dan pengembangan ilmu dan pengembangan desain batik, perpustakaan dan sebagai acuan&nbsp; dalam seluruh hal-hal perbatikan; mengkoleksi batik klasik, batik lawasan dan batik kontemporer. Di samping itu, diharapkan menjadi dokumentasi, penelitian dan penyajian informasi serta mengkomunikasikannya kepada masyarakat agar dapat dimanfaatkan sepenuhnya bagi kepentingan masyarakat yang lebih luas.</div><div>&nbsp;</div><div>Sejak abad XIV-XVI Kota Pekalongan telah dikenal karya dan kegiatan membatik sebagai salah satu pokok penghidupan sebagian besar masyarakatnya. Tanggal 12 Juli 1972 perwakilan Departemen Pendidikan dan Kebudayaan Jawa Tengah cq. Kepala Bidang Permuseuman didukung oleh Walikota ke 10 (sepuluh) Drs. R. Soepomo mendirikan Museum Batik di Pekalongan yang terletak di tengah Kota Pekalongan,&nbsp; sebelah selatan kawasan Taman Hiburan Rakyat (THR) Gedung Bintang Merdeka yang sekarang dikawasan Pos Penjagaan Polisi (Posis) Jalan Resimen XVII.</div><div>&nbsp;</div><div>Museum Batik dengan luas 40 m2 dan bangunan yang sangat sederhana memamerkan 1149 koleksi batik, antara lain wayang beber dari kain batik yang berusia ratusan tahun serta alat tenun tradisional ATBM (Alat Tenun Bukan Mesin) maupun peralatan untuk proses membuat batik dan dikelola oleh Dinas Pendidikan dan Kebudayaan (P &amp; K) Kota Pekalongan.<br><br>Fasilitas&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</div><div>Ruang koleksi batik</div><div>Ruang perpustakaan</div><div>Telecenter</div><div>Kedai batik</div><div>Ruang pertemuan</div><div>&nbsp;</div><div>Waktu operasional&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div><div>Senin – Minggu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 08.00 – 15.00 WIB</div><div>Hari Libur Nasional&nbsp; : Tutup</div><div>&nbsp;</div><div>Biaya tiket masuk :</div><div>Dewasa/umum&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Rp 5.000,- per orang</div><div>Anak-anak/pelajar&nbsp; &nbsp; : Rp 1.000,- per orang</div>', '<div>Museum ini didirikan pada 23 Mei 2006 dan diresmikan oleh Presiden Republik Indonesia, Bapak Dr...', 0, '2023-05-13 09:48:20', '2023-05-13 10:21:00'),
(12, 'Mangrove Park', 'mangrove-park', 2, 'Kandang Panjang, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51149', 'https://goo.gl/maps/YpiMtCRitzjCrMMD6', 3, 1, '10.000', 'backend/upload/destinasi/1768099309935938.jpg', 'backend/upload/destinasi/1768099310357364.jpg', 'backend/upload/destinasi/1768099310540353.jpg', '09.00', '<div><strong>Mangrove Park Pekalongan<br></strong><br>Mangrove Park Pekalongan, juga dikenal sebagai Taman Wisata Mangrove Pekalongan, adalah sebuah destinasi wisata alam yang terletak di Desa Karanganyar, Kecamatan Talun, Pekalongan. Taman ini menawarkan pengalaman unik dalam menjelajahi ekosistem hutan mangrove yang indah.<br><br></div><div><strong>Berikut adalah beberapa informasi tentang Mangrove Park Pekalongan:<br><br></strong>Ekosistem Mangrove: Mangrove Park Pekalongan memiliki luas sekitar 30 hektar yang terdiri dari hutan mangrove yang rimbun. Hutan mangrove ini merupakan habitat alami bagi berbagai spesies tumbuhan dan satwa, serta menjadi sumber kehidupan yang penting bagi masyarakat setempat.<br>Jembatan Kayu: Di taman ini, terdapat jembatan kayu yang dibangun di atas hutan mangrove. Jembatan ini memungkinkan pengunjung untuk berjalan-jalan atau berjalan kaki melewati hutan mangrove, sehingga mereka dapat menikmati keindahan alam dan melihat berbagai spesies tanaman dan hewan mangrove.<br>Spot Fotografi: Mangrove Park Pekalongan menyediakan beberapa spot fotografi yang menarik. Pengunjung dapat mengambil foto-foto menakjubkan dengan latar belakang pemandangan hutan mangrove, jembatan kayu, atau pemandangan pantai.</div>', '<div><strong>Mangrove Park Pekalongan</strong><br>Mangrove Park Pekalongan, juga dikenal sebagai Tam...', 0, '2023-06-07 19:21:41', '2023-06-07 19:24:48'),
(13, 'Pantai Krematorium', 'pantai-krematorium', 5, 'andang Panjang, Kec. Pekalongan Utara, Kota Pekalongan', 'https://goo.gl/maps/SEsXNQnjXQpv1Wkz5', 0, 0, '', 'backend/upload/destinasi/1768099964796878.jpg', 'backend/upload/destinasi/1768099964970747.jpg', 'backend/upload/destinasi/1768099965130478.jpg', '09.00', '<div><strong>Pantai Krematorium</strong><br>Pekalongan memiliki beberapa pantai yang menarik untuk dikunjungi, salah satunya pantai ini memiliki pesona alam yang menarik dengan pemandangan pantai yang indah dan hamparan pasir putih. Pengunjung dapat menikmati kegiatan berenang, bermain pasir, atau berjalan-jalan di sepanjang pantai.</div>', '<div><strong>Pantai Krematorium</strong><br>Pekalongan memiliki beberapa pantai yang menarik untuk d...', 0, '2023-06-07 19:32:05', NULL),
(14, 'Pantai Wonokerto', 'pantai-wonokerto', 5, 'Wonokerto Kulon, Kec. Wonokerto', 'https://goo.gl/maps/P1ZhHcK9tfWUYE919', 1, 0, '', 'backend/upload/destinasi/1768100261722350.jpg', 'backend/upload/destinasi/1768100261890580.jpg', 'backend/upload/destinasi/1768100262088589.jpg', '09.00', '<div><strong>Pantai Wonokerto</strong><br><br>Pantai Wonokerto adalah salah satu pantai yang terletak di Desa Wonokerto, Kecamatan Wonokerto, Kabupaten Pekalongan, Jawa Tengah. Pantai ini merupakan destinasi wisata populer di Pekalongan dan menawarkan pesona alam yang indah.&nbsp;<br><br>Keindahan Alam Pantai Wonokerto memiliki keindahan alam yang menarik dengan hamparan pasir putih yang luas, air laut yang jernih, dan pemandangan laut yang indah. Pantai ini juga dikelilingi oleh bukit-bukit hijau yang menambah pesona alamnya.</div>', '<div><strong>Pantai Wonokerto</strong><br><br>Pantai Wonokerto adalah salah satu pantai yang terleta...', 0, '2023-06-07 19:36:49', NULL),
(15, 'Pantai Slamaran', 'pantai-slamaran', 5, 'Krapyak Lor, Kec. Pekalongan Utara, Kota Pekalongan', 'https://goo.gl/maps/s7Tj3rYAmhy2SWnZ6', 2, 0, '', 'backend/upload/destinasi/1768100679102656.jpg', 'backend/upload/destinasi/1768100679293664.jpg', 'backend/upload/destinasi/1768100679468368.jpg', '09.00', '<div><strong>Pantai Slamaran<br></strong><br>Pantai Slamaran adalah salah satu pantai yang terletak di Desa Krapyak,&nbsp; Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah. Pantai ini merupakan destinasi wisata yang populer di Pekalongan dengan pesona alam yang menarik.</div>', '<div><strong>Pantai Slamaran<br></strong><br>Pantai Slamaran adalah salah satu pantai yang terletak...', 0, '2023-06-07 19:43:27', NULL),
(16, 'Telaga Rawa Jaya', 'telaga-rawa-jaya', 5, 'Dusun Rowo, Tlogopakis, kec Petungkriyono, Kab. Pekalongan', 'https://goo.gl/maps/m4e6eJYVFDFWWVD76', 0, 0, '', 'backend/upload/destinasi/1768102625714607.jpg', 'backend/upload/destinasi/1768102625972149.jpg', 'backend/upload/destinasi/1768102626151566.jpg', '09.00', '<div><strong>Telaga Rawa Jaya</strong><br><br>Telaga Rawa Jaya adalah tempat yang cocok untuk bersantai, menikmati keindahan alam, dan menikmati ketenangan di tengah alam. Nikmati pengalaman yang menyegarkan di Telaga Rawa Jaya di Pekalongan.<br><br>Spot Fotografi: Telaga Rawa Jaya memiliki spot-spot fotografi yang menarik. Pengunjung dapat mengambil foto-foto indah dengan latar belakang telaga, pepohonan, dan pemandangan alam sekitarnya<br><br>Fasilitas: Di sekitar Telaga Rawa Jaya, terdapat fasilitas seperti tempat parkir, warung makan, dan tempat istirahat yang disediakan untuk kenyamanan pengunjung.</div>', '<div><strong>Telaga Rawa Jaya</strong><br><br>Telaga Rawa Jaya adalah tempat yang cocok untuk bersan...', 0, '2023-06-07 20:14:23', NULL),
(17, 'Telaga Mangunan', 'telaga-mangunan', 5, 'Tlogohendro, Kec. Petungkriono, Kabupaten Pekalongan', 'https://goo.gl/maps/HC7JkS3aZDN4HMac9', 1, 0, '', 'backend/upload/destinasi/1768102854311280.jpg', 'backend/upload/destinasi/1768102854640463.jpg', 'backend/upload/destinasi/1768102854839205.jpg', '09.00', '<div><strong>Telaga Mangunan<br><br></strong>Telaga Mangunan menawarkan pemandangan alam yang indah dengan air yang jernih dan dikelilingi oleh hamparan hijau pohon-pohon dan pepohonan yang rimbun. Suasana yang tenang dan damai di sekitar telaga membuatnya menjadi tempat yang ideal untuk bersantai dan menikmati keindahan alam.<br><br>Pengunjung dapat melakukan berbagai aktivitas di Telaga Mangunan, seperti piknik, berjalan-jalan di sekitar danau, atau memancing. Telaga ini juga memiliki area bermain anak dan lapangan yang dapat digunakan untuk kegiatan olahraga atau bermain bersama keluarga.<br><br>Telaga Mangunan memiliki spot-spot fotografi yang menarik. Pengunjung dapat mengambil foto-foto indah dengan latar belakang telaga, pepohonan, dan pemandangan alam sekitarnya.<br><br></div>', '<div><strong>Telaga Mangunan<br><br></strong>Telaga Mangunan menawarkan pemandangan alam yang indah...', 0, '2023-06-07 20:18:01', NULL),
(18, 'Lolong Adventure', 'lolong-adventure', 5, 'Lebakbarang Kelurahan, Karangrejo, Lolong, Kec. Karanganyar', 'https://goo.gl/maps/38jsh7MqqZAdFYMg8', 0, 0, '', 'backend/upload/destinasi/1768104544341809.png', 'backend/upload/destinasi/1768104544943580.png', 'backend/upload/destinasi/1768104545563209.png', '09.00', '<div><strong>Lolong Adventure</strong><br><br>Lolong Adventure merupakan salah satu tempat wisata di Pekalongan yang memberikan kamu referensi untuk rafting. Selain itu tempat wisata ini juga dilengkapi dengan sebuah cafe yang enak banget buat nongkrong. Desa Lolong sangat terkenal sebagai penghasil durian, maka jangan heran jika melihat patung durian sebelum tiba di lokasi wisata<br><br>Lolong Adventure memiliki ragam wahana air yang cukup menantang, dan pastinya seru banget. FYI, ternyata kegiatan yang memacu adrenalin merupakan salah satu cara untuk diet juga loh.</div>', '<div><strong>Lolong Adventure</strong><br><br>Lolong Adventure merupakan salah satu tempat wisata di...', 0, '2023-06-07 20:44:54', NULL),
(19, 'Curug Muncar', 'curug-muncar', 5, 'Jl. Songgodadi, Watugajah, Curugmuncar, Kec. Petungkriono, Kabupaten Pekalongan', 'https://goo.gl/maps/MQVhcaCzszqi7EXr6', 0, 0, '', 'backend/upload/destinasi/1768105159382530.jpg', 'backend/upload/destinasi/1768105159589383.jpg', 'backend/upload/destinasi/1768105159778502.jpg', '09.00', '<div><strong>Curug Muncar<br><br></strong>Curug Muncar adalah salah satu air terjun yang terletak di Desa Muncar, Kecamatan Petungkriyono, Kabupaten Pekalongan, Jawa Tengah. Air terjun ini menawarkan pesona alam yang indah dan sering dikunjungi oleh wisatawan yang mencari keindahan alam serta suasana yang tenang.&nbsp;<br><br>Curug Muncar memiliki keindahan alam yang menakjubkan dengan air terjun yang tinggi dan air yang jernih. Area sekitar air terjun juga dikelilingi oleh pepohonan hijau dan vegetasi yang melengkapi pemandangan alami yang menawan.<br><br><br></div>', '<div><strong>Curug Muncar<br><br></strong>Curug Muncar adalah salah satu air terjun yang terletak di...', 0, '2023-06-07 20:54:39', NULL),
(20, 'Curug Madu', 'curug-madu', 5, 'Lemahbang Lor, Lemah Abang, Kec. Doro, Kabupaten Pekalongan', 'https://goo.gl/maps/qHbu1rwD9drnpzVL6', 1, 0, '', 'backend/upload/destinasi/1768105325613365.jpg', 'backend/upload/destinasi/1768105325794160.jpg', 'backend/upload/destinasi/1768105326008370.jpg', '09.00', '<div><strong>Curug Madu<br><br></strong>Curug Madu juga merupakan tempat yang populer untuk mengambil foto-foto indah. Pemandangan air terjun yang megah dan alam sekitarnya menciptakan latar belakang yang sempurna untuk mengabadikan momen berharga. Meskipun Curug Madu terletak di daerah alami, beberapa fasilitas seperti area parkir dan tempat istirahat sederhana mungkin tersedia di sekitar area wisata.</div>', '<div><strong>Curug Madu<br><br></strong>Curug Madu juga merupakan tempat yang populer untuk mengambi...', 0, '2023-06-07 20:57:18', NULL),
(21, 'Curug Bajing', 'curug-bajing', 5, 'Tlogopakis, Petungkriono, Hutan, Gumelem, Kec. Petungkriono, Kabupaten Pekalongan', 'https://goo.gl/maps/wUGw2wUiSYmuufYg8', 0, 0, '', 'backend/upload/destinasi/1768105737219381.jpg', 'backend/upload/destinasi/1768105737402836.jpg', 'backend/upload/destinasi/1768105737563242.jpg', '09.00', '<div><strong>Curug Bajing<br>&nbsp;</strong><br>Curug Bajing adalah salah satu air terjun yang terletak di Desa Pringsurat, Kecamatan Petungkriyono, Kabupaten Pekalongan, Jawa Tengah. Air terjun ini merupakan destinasi wisata alam yang populer di Pekalongan. Berikut adalah beberapa informasi tentang Curug Bajing:<br><br>Keindahan Alam: Curug Bajing menawarkan pemandangan alam yang menakjubkan. Air terjun ini memiliki tinggi sekitar 40 meter dengan debit air yang melimpah. Pemandangan alam sekitar yang hijau dan segar menambah keindahan air terjun ini.<br><br>Trekking dan Pendakian: Untuk mencapai Curug Bajing, Anda akan melewati jalur trekking atau pendakian yang menantang. Perjalanan ini akan memberikan pengalaman petualangan tersendiri, dengan pemandangan alam yang menakjubkan di sepanjang jalan.<br><br>Aktivitas Fotografi: Curug Bajing juga merupakan tempat yang populer untuk mengambil foto-foto indah. Pemandangan air terjun yang megah, kolam yang terbentuk di bawahnya, dan latar belakang alam yang hijau menjadi objek menarik untuk diabadikan.</div>', '<div><strong>Curug Bajing<br>&nbsp;</strong><br>Curug Bajing adalah salah satu air terjun yang terle...', 0, '2023-06-07 21:03:50', NULL),
(22, 'Black Canyon', 'black-canyon', 5, 'Kayupuring, Kec. Petungkriono, Kabupaten Pekalongan', 'https://goo.gl/maps/UntjSYydgbZNcgv46', 0, 0, '', 'backend/upload/destinasi/1768105959517977.jpg', 'backend/upload/destinasi/1768105959710696.jpg', 'backend/upload/destinasi/1768105959898156.jpg', '09.00', '<div><strong>Black Canyon<br><br></strong>Black Canyon Petungkriyono merupakan salah satu destinasi wisata yang terletak di Kecamatan Petungkriyono, Kabupaten Pekalongan, Jawa Tengah. Tempat ini menjadi populer karena keindahan alamnya yang menakjubkan. Berikut beberapa informasi tentang Black Canyon Petungkriyono:<br><br>Keindahan Alami: Black Canyon Petungkriyono memiliki pemandangan alam yang spektakuler. Terdapat tebing-tebing curam yang menjulang tinggi, dan warna-warni batuan yang memberikan kesan menyerupai Grand Canyon di Amerika Serikat. Pemandangan di sini sangat memesona dan cocok untuk dieksplorasi dan diabadikan dalam foto-foto.<br><br>Aktivitas Wisata: Pengunjung dapat menikmati berbagai aktivitas di Black Canyon Petungkriyono, seperti hiking, trekking, atau berjalan-jalan menyusuri jalur-jalur yang tersedia. Anda juga dapat menikmati panorama yang menakjubkan dari puncak tebing.<br><br>Pemandangan Matahari Terbenam: Salah satu momen yang sangat disarankan untuk dinikmati di Black Canyon Petungkriyono adalah pemandangan matahari terbenam. Ketika matahari perlahan tenggelam di balik tebing-tebing curam, cahayanya akan memberikan pemandangan yang indah dan memukau.<br><br>Fasilitas: Di sekitar Black Canyon Petungkriyono mungkin tersedia fasilitas seperti tempat parkir, area istirahat, dan warung-warung kecil yang menjual makanan dan minuman ringan. Namun, fasilitas yang tersedia mungkin terbatas, sehingga disarankan untuk membawa persediaan dan perlengkapan yang cukup.</div><div><br><br></div><div><br><br><br><br></div><div><br></div><div><br><br><br></div>', '<div><strong>Black Canyon<br><br></strong>Black Canyon Petungkriyono merupakan salah satu destinasi...', 0, '2023-06-07 21:07:22', NULL),
(23, 'Welo Asri', 'welo-asri', 5, 'Kayupuring, Kec. Petungkriono, Kabupaten Pekalongan', 'https://goo.gl/maps/9FJzWf7waSG9XnP99', 0, 0, '', 'backend/upload/destinasi/1768106370532511.jpg', 'backend/upload/destinasi/1768106371011979.jpg', 'backend/upload/destinasi/1768106371236772.jpg', '09.00', '<div><strong>Welo Asri<br></strong><br>Welo Asri di Petungkriyono merupakan salah satu destinasi wisata alam yang terletak di Kecamatan Petungkriyono, Kabupaten Pekalongan, Jawa Tengah.&nbsp;<br>Sebelum mengunjungi Welo Asri , pastikan untuk memeriksa jam operasional dan kondisi terkini. Patuhi peraturan yang berlaku, jaga kebersihan lingkungan, dan hindari melakukan aktivitas yang dapat merusak keindahan alam sekitar.<br><br></div><div>Welo Asri adalah tempat yang cocok untuk bersantai, menikmati keindahan alam, dan menikmati ketenangan di tengah alam. Nikmati pengalaman yang menyegarkan di Welo Asri&nbsp; di Pekalongan.</div>', '<div><strong>Welo Asri<br></strong><br>Welo Asri di Petungkriyono merupakan salah satu destinasi wis...', 0, '2023-06-07 21:13:55', NULL),
(24, 'Bukit Pawuluhan', 'bukit-pawuluhan', 5, 'Klesem, Kec. Kandangserang, Kabupaten Pekalongan.', 'https://goo.gl/maps/Rccn7Kr4ibAf3F2cA', 0, 0, '', 'backend/upload/destinasi/1768106629791013.jpg', 'backend/upload/destinasi/1768106629991406.jpg', 'backend/upload/destinasi/1768106630186094.jpg', '09.00', '<div><strong>Wisata Bukit Pawuluhan di Kandang Serang <br><br></strong>Salah satu tempat wisata yang berada di Desa Klesen,Kabupaten Pekalongan, Provinsi Jawa Tengah Bukit Pawuluhan di Kandang Serang Pekalongan Jawa Tengah adalah tempat wisata yang ramai dikunjungi pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas anda sehari hari.<br><br>Bukit Pawuluhan memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di Kota Pekalongan tidak mengunjungi wisata alam yang mempunyai keindahan yang tiada duanya tersebut.</div>', '<div><strong>Wisata Bukit Pawuluhan di Kandang Serang <br><br></strong>Salah satu tempat wisata yang...', 0, '2023-06-07 21:18:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `hint_event` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `nama`, `slug`, `gambar`, `tgl_mulai`, `tgl_selesai`, `waktu`, `penyelenggara`, `deskripsi`, `alamat`, `lokasi`, `hint_event`, `created_at`, `updated_at`) VALUES
(1, 'BAZAR UMKM RAMADHAN', 'bazar-umkm-ramadhan', 'backend/upload/event/1765885421870243.jpg', '2023-03-30', '2023-04-12', '15:00-21:00 WIB', 'DINAS KOPERASI UKM TENAGA KERJA KAB. PEKALONGAN', '<div>DALAM RANGKA MEMPERLUAS PASAR PRODUK USAHA MIKRO DAN MEMBANTU MASYARAKAT MEMENUHI KEBUTUHAN PUASA DAN LEBARAN PEMERINTAH KAB. PEKALONGAN BEKERJASAMA DENGAN KEMENTERIAN KOPERASI DAN UKM RI MENYELENGGARAKAN<br><br>DIIKUTI 60 USAHA MIKRO DAN UMKM KAB. PEKALONGAN<br>DI DUKUNG BUMN, PERBANKAN, BUMD, SWASTA DAN INSTANSI KEMENTERIAN SERTA WIRAUSAHAWAN<br>CP. 081334261965</div>', 'PLUT KUMKM KAB. PEKALONGAN (GEDUNG UMKM CENTER) JL. RAYA WONOPRINGGO – MADUKARAN KAB. PEKALONGAN', 'https://goo.gl/maps/rDXBdu1vRRbiuXtG9', 1, '2023-05-14 07:35:58', '2023-06-06 20:13:49'),
(3, 'Balon Udara', 'balon-udara', 'backend/upload/event/1768108118295394.jpg', '2023-06-07', '2023-06-17', '09:00-13:00 WIB', 'Dinas Pariwisata Kota Pekalongan', '<div><strong>Balon Udara<br><br></strong>Festival balon udara digelar di Kota Pekalongan. Balon udara diterbangkan peserta dengan ditambatkan pakai tali agar tidak terbang liar. Acara tradisi Syawalan ini berlangsung di Stadion Hoegeng diikuti puluhan peserta. Langit di seputaran Stadion Hoegeng pun tampak warna-warni dipenuhi balon-balon udara.</div>', 'asdasd', 'https://goo.gl/maps/WCXLpie6hi5NzcuA7', 3, '2023-06-06 20:10:21', '2023-06-07 21:41:41'),
(4, 'Batik Fes', 'batik-fes', 'backend/upload/event/1768108392140084.jpg', '2023-06-08', '2023-06-10', '09:00-13:00 WIB', 'Dinas Pariwisata Kota Pekalongan', '<div><strong>Batik Fes<br><br></strong>Batik Festival Pekalongan adalah acara tahunan yang diadakan di Pekalongan, Jawa Tengah untuk merayakan kekayaan budaya batik daerah tersebut. Acara ini bertujuan untuk mempromosikan dan memperingati seni batik, serta meningkatkan kesadaran akan pentingnya warisan budaya batik Pekalongan.&nbsp;</div>', 'Kota Pekalongan', 'https://goo.gl/maps/4dqjapGoe3L7tikC6', 0, '2023-06-07 21:46:02', NULL),
(5, 'Musik Festival', 'musik-festival', 'backend/upload/event/1768108696621314.jpg', '2023-06-04', '2023-06-10', '16:00-21:00 WIB', 'Dinas Kominfo Kota Pekalongan', '<div><strong>Musik Festival</strong><br><br>Pekalongan Music Festival adalah acara tahunan yang menampilkan beragam genre musik, termasuk musik tradisional, pop, rock, jazz, dan lain-lain. Festival ini biasanya menghadirkan musisi lokal, regional, dan nasional untuk tampil di panggung dan menghibur pengunjung.</div>', 'Lapangan Mataram', 'https://goo.gl/maps/4dqjapGoe3L7tikC6', 0, '2023-06-07 21:50:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', '2023-05-11 09:55:19', NULL),
(2, 'Pendidikan', '2023-05-11 09:56:33', NULL),
(5, 'Hiburan', '2023-05-13 08:32:43', NULL),
(6, 'tes', '2023-06-05 00:48:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_090537_create_kategoris_table', 2),
(6, '2023_05_11_104527_create_destinasis_table', 3),
(7, '2023_05_14_130020_create_events_table', 4),
(8, '2023_05_14_161617_create_orders_table', 5),
(9, '2023_05_15_025506_create_budayas_table', 5),
(10, '2023_06_05_013009_create_settings_table', 6),
(11, '2023_06_06_092118_create_pertanyaans_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `destinasi_id` int(11) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_order` date NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jml_tiket` int(11) DEFAULT NULL,
  `nominal` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket_lain` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama`, `destinasi_id`, `tlp`, `email`, `tgl_order`, `bank`, `jml_tiket`, `nominal`, `gambar`, `ket_lain`, `created_at`, `updated_at`) VALUES
(1, 'Fulan bin Fuuulaaan', 10, '099298736627', 'fulan@gmail.com', '2023-05-15', 'BRI', 2, '8000', '', '1 Tiket Dewasa', '2023-05-15 07:42:26', '2023-05-15 07:42:26'),
(3, 'tes', 11, '23423423423', 'tes@gmail.com', '2023-06-06', 'Bank BRI', 1, '5000', 'backend/upload/order/1767923086913469.jpg', '1 Dewasa', '2023-06-05 20:40:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'amir zakaria', 'admin@gmail.com', 'activated account', 'aksjasoaihsdoijaspdihiaos asjiajsdijaocjoadc', '2023-06-06 02:31:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tentang` text NOT NULL,
  `meta_keyword` varchar(100) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_author` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `hint_website` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `tentang`, `meta_keyword`, `meta_description`, `meta_author`, `alamat`, `tlp`, `email`, `facebook`, `youtube`, `twitter`, `ig`, `logo`, `hint_website`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Kalongan', 'Kami berkomitmen untuk menyajikan informasi yang akurat, terkini, dan berguna bagi para pengunjung kami. Tim kami bekerja keras untuk menghadirkan konten yang menarik, foto-foto menakjubkan, dan saran-saran yang berguna untuk membantu Anda merencanakan perjalanan yang sempurna. Pekalongan adalah sebuah kota yang terletak di Provinsi Jawa Tengah, Indonesia. Kota ini memiliki potensi wisata yang menarik dengan berbagai destinasi dan atraksi yang dapat dinikmati oleh para pengunjung.', 'wisata kalongan 1', 'Wisata Kalongan ads', 'Tes 123', 'jl. pososugih No. 10', '0909090902127 asdadasd', 'tes@gmail.com', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'backend/img/1767851105304534.png', 47, '2023-06-05 02:06:38', '2023-06-06 02:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@gmail.com', '098827263553', '202305110708-squid.png', 'admin', NULL, '$2y$10$qEREoj3ZGg.ojxjpct1Um.3NZuGRgV42gUf64OPgAaiufLYHiiB8a', NULL, '2023-05-10 19:20:29', '2023-05-11 01:20:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budayas`
--
ALTER TABLE `budayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasis`
--
ALTER TABLE `destinasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budayas`
--
ALTER TABLE `budayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destinasis`
--
ALTER TABLE `destinasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
