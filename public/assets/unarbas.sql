-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 10:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unarbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `thumbnail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `kode`, `nama`, `thumbnail`) VALUES
(1, 'FE', 'Ekonomi', 'akuntansi'),
(2, 'FH', 'Hukum', 'ilmu hukum'),
(3, 'FT', 'Teknik', 'teknik elektro'),
(4, 'FSB', 'Sastra dan Budaya', 'sastra indonesia'),
(5, 'FK', 'Kedokteran', 'pendidikan kedokteran'),
(6, 'FSD', 'Seni Rupa dan Desain', 'seni rupa murni'),
(7, 'FMIPA', 'Matematika dan Ilmu Pengetahuan Alam', 'fisika'),
(8, 'FIP', 'Ilmu Politik', 'ilmu politik'),
(9, 'FIK', 'Ilmu komputer', 'sistem informasi'),
(10, 'FPd', 'Pendidikan', 'pendidikan matematika'),
(11, 'FPP', 'Pariwisata dan Perhotelan', 'tata busana');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode_fk` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT '999999999',
  `nama` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode_fk`, `harga`, `nama`, `deskripsi`) VALUES
(1, 'FE', 999999999, 'Ilmu Ekonomi', 'Ilmu ekonomi adalah ilmu yang mempelajari tingkah laku manusia untuk mendapatkan dan mengelola sumber daya yang terbatas. Dengan mempelajari ilmu ekonomi, kita bisa memprediksi tindakan manusia ke depannya yang kemudian bisa digunakan untuk perencanaan bisnis, penentuan harga, membuat kebijakan pemasaran, kebijakan sumber daya manusia, hingga membuat kebijakan untuk kesejahteraan masyarakat.'),
(2, 'FE', 999999999, 'Akuntansi', 'Akuntansi adalah bidang yang terus berkembang seiring dengan perkembangan dunia bisnis di dunia. Jurusan ini sangat cocok bagi kalian yang senang bekerja di kantor dengan minat yang tinggi terhadap keteraturan. Jurusan akuntansi adalah belajar cara memelihara keuangan. Ini mempersiapkan siswa untuk menjadi akuntan dengan mengajar mereka tentang prinsip-prinsip akuntansi seperti audit, pelaporan, penganggaran dan peraturan pajak.'),
(3, 'FE', 999999999, 'Manajemen', 'Jurusan Manajemen merupakan bidang keilmuan yang mempelajari tentang kegiatan perusahaan atau korporasi, yang masih memiliki keterkaitan dengan ilmu ekonomi dan bisnis.'),
(4, 'FH', 999999999, 'Ilmu Hukum', 'Ilmu Hukum adalah studi yang mempelajari berbagai sistem hukum yang berkaitan dengan kehidupan kemasyarakatan. Di Ilmu Hukum, mahasiswa juga belajar mengenai perundang-undangan termasuk di dalamnya hukum dasar (konstitusi, hukum perdata, hukum dagang, hukum tata negara, hukum pidana, hukum tata pidana) hingga hukum internasional dengan cakupan yang cukup luas.'),
(5, 'FT', 999999999, 'Teknik Sipil', 'Teknik sipil adalah bidang ilmu yang mempelajari perencanaan/perancangan, manufaktur, manajemen/pengelolaan, dan konservasi dari beragam fasilitas dan sistem untuk mendukung sebuah kota, pedesaan, dan perkotaan. Artinya, seorang lulusan teknik sipil perlu menguasai ilmu terkait desain (saat melakukan perancangan), konsturksi (saat melakukan pembangunan dan menyusun sistem pengelolaan), hingga pemeliharaan lingkungan (saat melihat dampak pembangunan dari berbagai aspek).'),
(6, 'FT', 999999999, 'Teknik Elektro', 'Teknik Elektro merupakan bidang ilmu yang mempelajari listrik dan aplikasinya dalam kehidupan sehari-hari. Mahasiswa akan dibekali dengan ilmu dan pengetahuan seputar konsep, perancangan, pengembangan, serta produksi perangkat listrik dan elektronik.'),
(7, 'FT', 999999999, 'Teknik Mesin', 'Teknik Mesin tidak melulu soal mesin motor, mobil, dan kegiatan perbengkelan lainnya. Tapi mahasiswa juga akan belajar hal-hal terkait konversi energi, konstruksi dan perancangan, teknik produksi, juga material. Memang, secara umum mahasiswa tetap akan mempelajari mesin dengan menggunakan dasar fisika dan matematika, seperti pergerakan mesin, aliran air untuk mesin, material dan desain mesin, elemen penting seperti roda gigi dan sumber mata air, metode pengolahan, metode produksi, pengendalian melalui komputer, dsb.'),
(8, 'FT', 999999999, 'Teknik Kimia', 'Teknik Kimia merupakan bidang studi yang mempelajari rekayasa untuk menghasilkan suatu produk dengan nilai ekonomis tinggi. Mahasiswa akan mencari dan mengembangkan suatu teknik produksi. Jadi, jurusan ini berbeda dengan program studi kimia atau pendidikan kimia.'),
(9, 'FT', 999999999, 'Teknik Industri', 'Teknik Industri adalah bidang ilmu yang mempelajari bagaimana mengoptimalisasi kegiatan manusia seperti; produksi, pengelolaan dan ekonomi. Lulusan Teknik Industri nantinya bertanggungjawab atas optimalisasi praktis dari sistem produksi pabrik, proposal strategi, serta desain optimal manajemen perusahaan.'),
(10, 'FT', 999999999, 'Teknik Fisika', 'Teknik Fisika dikenal sebagai program studi yang mempelajari banyak hal yang berkaitan dengan aspek fisika dan teknologi. Dengan begitu, keilmuan yang diberikan di sini akan membuat mahasiswa memiliki kemampuan untuk memandang persoalan teknik dengan pandangan yang luas dilihat dari berbagai aspek kefisikaannya.'),
(11, 'FT', 999999999, 'Teknik Informatika', 'Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. Di Jurusan Teknik Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak.'),
(12, 'FSB', 999999999, 'Sastra Indonesia', 'Sastra Indonesia merupakan bidang ilmu yang mempelajari puisi, prosa, cerita, novel, naskah, dan karya sastra lainnya dalam bahasa Indonesia. Mahasiswa akan melakukan berbagai kajian untuk mengetahui latar belakang dari ide dan karya seniman.'),
(13, 'FSB', 999999999, 'Sastra Inggris', 'Sastra Inggris merupakan bidang ilmu yang mempelajari Bahasa Inggris dari sisi linguistik dan sastra secara mendalam. Jadi mahasiswa akan melakukan banyak kajian terhadap berbagai karya, seperti puisi, prosa, novel drama, maupun film.'),
(14, 'FSB', 999999999, 'Sastra Jepang', 'Saat masuk ke jurusan ini, mahasiswa akan diajak mempelajari dan mendalami tata bahasa dari Negeri Matahari Terbit. Bukan hanya itu, Jurusan Sastra Jepang merupakan sebuah program studi yang akan membimbing mahasiswanya untuk belajar banyak hal terkait dengan negara Jepang mulai dari bahasa, karya sastra, budaya, dan sejarahnya.'),
(15, 'FSB', 999999999, 'Ilmu Sejarah', 'Di jurusan ini mahasiswa akan mempelajari segala hal yang berkaitan dengan sejarah, mulai dari geografi sejarah, sejarah kerajaan nusantara, sejarah dunia, sejarah Indonesia, dan sebagainya. Ilmu sejarah itu berkaitan erat sama kehidupan manusia, seperti politik, sosial, budaya, bahasa, ekonomi, dan militer.'),
(16, 'FK', 999999999, 'Pendidikan Kedokteran', 'Saat berkuliah di Pendidikan Kedokteran, mahasiswa akan mempelajari cara mendiagnosis penyakit yang dialami pasien kemudian mengobati dan mencegah timbulnya kembali penyakit itu. Selama kuliah mahasiswa juga akan banyak belajar tentang anatomi tubuh manusia, biologi sel dan molekuler, genetika, biokimia, juga farmakologi. mahasiswa juga dibekali dengan latihan keterampilan dalam skill lab.'),
(17, 'FSD', 999999999, 'Seni Rupa Murni', 'Seni Rupa adalah bidang seni yang bermula dari pemahaman tradisi “fine art,” sebuah wacana dari modernisme yang dikembangkan dalam kesadaran nilai-nilai lokal juga global. mahasiswa akan diajari cara berekspresi melalui melukis, seni grafis, seni pahat, kerajinan, dan sebagainya. Kuliah di jurusan ini juga akan mempelajari sejarah seni, komposisi, dan tematik dalam karya seni.'),
(18, 'FSD', 999999999, 'Desain Grafis', 'Jurusan Desain Grafis ialah jurusan yang mempelajari tentang konsep, bentuk, dan komposisi suatu karya komunikasi visual berupa gambar, garis, maupun elemen grafis lainnya. Hasil dari karya desain diaplikasikan pada berbagai media.'),
(19, 'FSD', 999999999, 'Desain Interior', 'Ketika kuliah di jurusan desain interior, mahasiswa akan mempelajari tentang perancangan dan perencanaan penataan suatu ruang bangunan. Beberapa hal yang perlu diperhatikan dalam kegiatan perancangan dan perencanaan itu antara lain fungsi, estetika, dan juga mempertimbangkan psikologis dan kenyamanan pengguna ruangan.'),
(20, 'FMIPA', 999999999, 'Matematika', 'Jurusan Matematika fokus mempelajari berbagai teori matematika secara mendalam, seperti geometri, aljabar, hingga matematika diskrit. Jadi, mahasiswa akan bertemu dengan beragam konsep dalam matematika seperti mempelajari fitur lain dari angka, juga ruang multidimensi.'),
(21, 'FMIPA', 999999999, 'Fisika', 'Fisika merupakan bidang ilmu yang fokus mempelajari gejala alam tidak hidup (materi) dalam lingkup ruang dan waktu. Mulai dari menelusuri dasar-dasar hukum alam partikel submikroskopis yang membentuk materi hingga perilaku materi alam semesta sebagai satu kesatuan kosmos.'),
(22, 'FMIPA', 999999999, 'Geofisika', 'Geofisika merupakan bidang ilmu kebumian yang mempelajari bumi dengan kaidah-kaidah fisika. Mahasiswa akan dibekali dengan keterampilan melakukan telaah dan menyelesaikan berbagai permasalahan yang bersumber dari pendayagunaan sumber daya alam, sumber daya energi, dan sumber daya lingkungan.'),
(23, 'FMIPA', 999999999, 'Kimia', 'Di jurusan Kimia, mahasiswa bakal mempelajari struktur, sifat, dan reaktivitas suatu zat. Terdapat pula materi fisika kimia yang mempelajari sifat-sifat zat di lapangan untuk lebih memfokuskan diri pada senyawa organik, senyawa anorganik, protein, dan sebagainya.'),
(24, 'FIP', 999999999, 'Ilmu Politik', 'Ilmu Politik merupakan bidang ilmu yang banyak mengkaji gejala maupun fenomena sosial politik sehingga nantinya mampu menerapkan teori-teori ilmu politik untuk menawarkan solusi dari permasalahan sosial politik.'),
(25, 'FIK', 999999999, 'Sistem Informasi', 'Jurusan Sistem Informasi adalah bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini mahasiswa akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan.'),
(26, 'FIK', 999999999, 'Teknologi Informasi', 'Teknologi Informasi adalah Disiplin ilmu yang mempelajari solusi-solusi teknologi komputer bagi organisasi bisnis, pemerintah, kesehatan, sekolah dan organisasi lainnya. Berbeda dengan Sistem Informasi yang merancang sistem, Teknologi informasi memperdalam cara mengimplementasikan sistem tersebut ke dalam program hingga terbentuk sebuah sistem aplikasi yang dapat membantu pekerjaan.'),
(27, 'FPd', 999999999, 'Pendidikan Bahasa Inggris', 'Pendidikan Bahasa Inggris fokus pada pembelajaran mendengarkan, berbicara, membaca, menulis juga penggunaan bahasa Inggris dalam berbagai konteks seperti berkomunikasi dalam bisnis, presentasi, penulisan artikel, bahkan pertunjukan drama.'),
(28, 'FPd', 999999999, 'Pendidikan Matematika', 'Pendidikan Matematika merupakan jurusan yang mempelajari teori-teori dasar matematika, misalnya aljabar, geometri, statistika, kalkulus, matematika diskrit, dan lainnya. yang membedakan jurusan ini dengan ilmu murni adalah, mahasiswa dibekali kemampuan terkait cara menyampaikan pelajaran Matematika kepada murid-murid tentunya dengan cara-cara yang menarik supaya mudah dimengerti.'),
(29, 'FPd', 999999999, 'Pendidikan Biologi', 'Biologi merupakan cabang dari Ilmu Pengetahuan Alam. Lebih jauh, jika mahasiswa memilih jurusan Biologi pada jenjang kuliah maka anda akan mendalami segala fenomena yang berkaitan sama benda hidup seperti sel, struktur/ fungsi organ/ fenomena psikologis yang menjangkiti organisme, interaksi biologi dan lingkungan, keragaman spesies dan warisan, perkembangan, dan evolusi.'),
(30, 'FPd', 999999999, 'Pendidikan Kimia', 'Pendidikan Kimia adalah sebuah prodi yang mempelajari tentang pengajaran dan pembelajaran dari kimia di semua sekolah, perguruan tinggi dan universitas. Apa yang dipelajari di program studi ini termasuk memahami bagaimana siswa belajar kimia, cara terbaik untuk mengajar kimia, dan bagaimana untuk meningkatkan hasil belajar dengan mengubah metode pengajaran dan pelatihan yang sesuai dalam mengajar kimia, dengan berbagai cara, termasuk kegiatan belajar mengajar, demonstrasi, dan kegiatan laboratorium.'),
(31, 'FPd', 999999999, 'Pendidikan Fisika', 'Pendidikan Fisika akan mengajakmu untuk mempelajari mengenai ilmu fisika dan menerapkannya dalam konteks pendidikan dan pengajaran. Di sini kamu nggak hanya akan mengkaji fenomena-fenomena dan gejala alam tidak hidup seperti materi dan partikel, tapi juga diajak untuk memahami metode-metode pembelajaran fisika yang efektif pada siswa di berbagai jenjang pendidikan.'),
(32, 'FPd', 999999999, 'Pendidikan Bahasa dan Sastra Indonesia', 'Pendidikan Bahasa dan Sastra Indonesia kita akan mempelajari Bahasa Indonesia. Mungkin banyak yang beranggapan “buat apa belajar Bahasa Indonesia? Kan udah lancar ngomong Bahasa Indonesia”. Pelajaran Bahasa Indonesia pun di sekolah sering kali dipandang sebelah mata, karena dianggap pelajaran yang gampang. Padahal nilai mata pelajaran Bahasa Indonesia di sekolah saja tidak bisa menjadi acuan kalau kamu mahir dan mengerti bahasa nasional kita ini. Karenanya di prodi Pendidikan Bahasa dan Sastra Indonesia (PBSI) ini kamu akan memeroleh pengetahuan Bahasa Indonesia mulai dari cara pelafalan bunyi yang benar dalam Bahasa Indonesia, struktur dan tata bahasa, dan lain sebagainya. Jadi belajar Bahsa Indonesia nggak sekedar “ini Budi” dan “ini ibu Budi”. Selain mempelajari kebahasaan dan kesusastraan, di PBSI juga akan mempelajari ilmu kependidikan.'),
(33, 'FPP', 999999999, 'Tata Boga', 'Tata Boga adalah ilmu tentang bagaimana teknik untuk menyajikan makanan dengan memperhatikan beberapa faktor yaitu estetika atau keindahan, kualitas rasa masakan, serta nilai kebutuhan gizinya. Ketika kuliah di Jurusan Tata Boga, mahasiswa akan mempelajari bagaimana seni untuk mengolah suatu makanan yang dimulai dari persiapan, tahap pengolahan hingga cara penyajiannya.'),
(34, 'FPP', 999999999, 'Tata Busana', 'Tata Busana sering juga disebut dengan nama Fashion Design di beberapa perguruan tinggi. Pada program studi ini di pelajari teknik mendesain, belajar membuat pola, menjahit, dan seluk beluk produksi busana atau fashion. Nggak Cuma soal produksi, disini kita juga diajarin tentang analisa tren, bagaimana marketing dan manajemen bisnis fashion. Biasanya, di akhir perkuliahannya anak Tata Busana (Fashion Design) akan mengadakan fashion show sebagai tugas final mereka. Seru kan? Biasanya di perguruan tinggi negeri program studi ini bernama program studi Tata Busana, tapi di beberapa perguruan tinggi swasta yang mengadopsi kurikulum internasional program studi ini lebih dikenal dengan nama Fashion Design. Memang artinya sama aja, sih. Mata kuliahnya pun hampir sama aja. Namun di program studi Fashion Design di perguruan tinggi swatsa umumnya, kita akan belajar tentang fashion dari perspektif Paris sebagai kiblat fashion dunia dengan pencampuran budaya Indonesia. Program studi Tata Busana (Fashion Design) umumnya berjenjang pendidikan Diploma 2 (D2), Diploma 3 (D3) dan Diploma 4 (D4) atau setara Strata 1 (S1). Pada perguruan tinggi swasta juga tersedia program kursus untuk yang minat belajar tentang fashion dalam waktu 1 tahun saja, dan di akhir kita akan di beri sertifikat dari perguruan tinggi yang bersangkutan.'),
(35, 'FPP', 999999999, 'Manajemen Perhotelan', 'Perhotelan merupakan bidang ilmu yang mempelajari pengelolaan hotel serta cara menyeimbangkan aspek wisata dan manajemen bisnis untuk mencapai kesuksesan. Beberapa topik yang akan diajarkan antara lain mengenai pelayanan yang memuaskan bagi pelanggan, melindungi budaya lokal, manfaat ekonomi yang diperoleh bagi masyarakat sekitar serta kesejahteraan karyawan.'),
(36, 'FPP', 999999999, 'Tata Rias', 'Para mahasiswa yang mengambil program studi Tata Rias ini akan mempelajari tata rias Indonesia dan internasional, Beberapa hal yang dipelajari adalah cara menyanggul, menata rambut, memotong rambut, merias wajah menggunakan bahan dan alat kosmetika. Program studi ini diharapkan bisa menyiapkan sumber daya manusia yang profesional dan ahli di bidang tata rias.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `email` varchar(65) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `dibayar` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `payment_type` enum('rekening','paypal') NOT NULL,
  `email_paypal` varchar(65) NOT NULL,
  `rek_num` varchar(16) NOT NULL,
  `exp_date` varchar(5) NOT NULL,
  `sc_code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
