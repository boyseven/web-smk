-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 06:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediacenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` varchar(25) NOT NULL,
  `judul` text NOT NULL,
  `lead` text NOT NULL,
  `content` text NOT NULL,
  `tags` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `tanggal` text NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `ditulis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `lead`, `content`, `tags`, `kategori`, `gambar`, `tanggal`, `penulis`, `ditulis`) VALUES
('5c9dd41a33fbb', 'Bupati Balangan Tutup Turnamen Sepakbola Bergengsi Malihu Cup 2019', 'Paringin - Bupati Balangan, Ansharuddin hadiri Final Turnamen Sepakbola Malihu Cup 2019 di Desa Lamida Bawah Kecamatan Paringin Kabupaten Balangan, Senin (25/3/2019). Turnamen diikuti sebanyak 104 klub se-kabupaten Balangan.', 'Paringin - Bupati Balangan, Ansharuddin hadiri Final Turnamen Sepakbola Malihu Cup 2019 di Desa Lamida Bawah Kecamatan Paringin Kabupaten Balangan, Senin (25/3/2019). Turnamen diikuti sebanyak 104 klub se-kabupaten Balangan.\r\n\r\nAnsharuddin sangat mengapresiasi dan mendukung penuh turnamen sepakbola tahunan yang diselenggarakan di desa Lamida Bawah ini.\r\n\r\n\"Ini merupakan turnamen yang cukup besar bahkan melebihi tingkat dunia, tingkat dunia paling-paling 30 klub, sekarang disini 104 klub, luar biasa. Dengan harapan kita menjaga ketertiban dan kita junjung sportivitas. Hari ini saya akan memberikan uang pembinaan masing-masing satu juta rupiah kepada tim yang mendapat juara satu sampai empat, dan juga kepada pemain terbaik, topskor, penonton setia, serta official terbaik,\" tegasnya.\r\n\r\nPada final turnamen ini turut berhadir Kapolsek Paringin, ketua Koni Kabupaten Balangan, kepala desa, tokoh masyarakat, serta warga sekitar.\r\n\r\nKetua panita sekaligus ketua Karang Taruna Bhakti Jaya Desa Lamida Bawah, Muhammad Arifinnor menyampaikan untuk turnamen Malihu Cup 2019 ini sendiri berjalan kurang lebih 2 bulan dengan jumlah tim sebanyak 104 klub se-kabupaten Balangan.\r\n\r\n\"Melihat antusias penonton Malihu Cup ini akan kami jadikan agenda tahunan,\"  ujarnya.\r\n\r\nMuhammad Arifinnor mengharapkan adanya bantuan dana dari pihak perusahaan agar turnamen yang akan datang lebih meriah lagi.\r\n\r\nPada partai final Malihu Cup 2019 tersebut mempertemukan 2 tim raksasa yakni Persia Agung Auh dan Persibun Buntu Karau yang dimenangkan oleh Persibun Buntu Karau dengan skor tipis 1-0. (MC Balangan/ragil) ', 'Berita Olahraga', 'Berita', '5c9dd41a33fbb-Bupati_Balangan_Tutup_Turnamen_Sepakbola_Bergengsi_Malihu_Cup_2019.jpg', '26-03-2019', 'MC Balangan/ragil', '2019-03-29 08:15:22'),
('5c9dd48f6eff4', 'Balangan Targetkan Piala Adipura Tahun 2019', 'Paringin, InfoPublik - Dinas Lingkungan Hidup Kabupaten Balangan Gelar Rapat Pembinaan Teknis Adipura Tahap 1 di Aula Benteng Tundakan Kantor Bupati Balangan, Senin (25/3/2019).', 'Paringin, InfoPublik - Dinas Lingkungan Hidup Kabupaten Balangan Gelar Rapat Pembinaan Teknis Adipura Tahap 1 di Aula Benteng Tundakan Kantor Bupati Balangan, Senin (25/3/2019).\r\n\r\nBupati Balangan, Ansharuddin mengatakan utamanya yang harus ditanamkan kepada masyarakat adalah bagaimana peduli terhadap sampah itu sendiri.\r\n\r\n\"Jadi, sebagaimana nanti disampaikan program Adipura ini tujuan kita adalah bagaimana kita untuk menanamkan nilai-nilai kebersihan ini kepada masyarakat diantaranya di, lingkungan, pertokoan, pasar, dan sekolahan,\" ujarnya.\r\n\r\nAnsharuddin juga menekankan kepada pihak yang bersangkutan di kabupaten supaya benar-benar fokus melakukan pembinaan dan pengawasan terhadap pelaksanakan kegiatan-kegiatan tersebut.\r\n\r\n\"Program Adipura adalah satu instrument yang dapat mewujudkan target sebagaimana yang diamanatkan di dalam JAKSTRANAS,\" tandasnya.\r\n\r\nSementara itu, Kepala Bidang Pengelolaan Sampah, Limbah B3, dan Kemitraan Dinas Lingkungan Hidup Provinsi Kalsel, Benny Rahmadi mengatakan pihaknya akan selalu membantu memfasilitasi semua Kabupaten/Kota di Kalimantan Selatan khususnya Kabupaten Balangan.\r\n\r\n\"Apalagi pada tahun lalu Kabupaten Balangan ini sudah mendapatkan sertifikat dengan nilai yang sedikit lagi selisihnya untuk bisa mendapatkan piala Adipura. Jadi dengan kerjasama ini, semoga Kabupaten Balangan meraih piala Adipura tahun 2019 ini,\" katanya.\r\n\r\nBenny juga mengharapkan kebersihan, keindahan, dan keteduhan itu tidak hanya dipersiapkan dalam rangka Adipura saja, tapi juga jadi bagian dari gaya hidup masyarakat. Hal ini mencerminkan bentuk dukungan partisipasi masyarakat di dalam hal pengelolaan kebersihan di Kabupaten Balangan.\r\n\r\nRapat dihadiri oleh Bupati Balangan, Kepala Bidang Lingkungan Hidup Provinsi Kalsel, Kepala Dinas Lingkungan Hidup Kabupaten Balangan dan seluruh kepala SKPD Kabupaten Balangan. ( MC Balangan/ragil/lana) ', 'Berita Penghargaan', 'Berita', '5c9dd48f6eff4-Balangan_Targetkan_Piala_Adipura_Tahun_2019.jpg', '27-03-2019', 'MC Balangan/ragil/lana', '2019-03-29 08:17:19'),
('5c9dd58fd1f7c', 'SMAN 2 Paringin Wakil Balangan Di Lomba Kadarkum Tingkat Provinsi', 'Paringin, InfoPublik- Lomba Kadarkum Tahun 2019 Tingkat Kabupaten Balangan Diadakan Oleh Bagian Hukum Sekretariat Balangan di Aula Benteng Tundakan Kantor Bupati Balangan, Rabu (27/3/2019).', 'Paringin, InfoPublik- Lomba Kadarkum Tahun 2019 Tingkat Kabupaten Balangan Diadakan Oleh Bagian Hukum Sekretariat Balangan di Aula Benteng Tundakan Kantor Bupati Balangan, Rabu (27/3/2019).\r\n\r\nAcara berlangsung sangat meriah diikuti 13 perwakilan masing-masing sekolah di Kabupaten Balangan.\r\n\r\nSMAN 2 Paringin berhasil keluar sebagai juara pertama dan mewakili Kabupaten Balangan di tingkat Provinsi yang akan diadakan di Banjarmasin, setelah mengalahkan SMAN 1 Halong sebagai juara kedua, dan SMKN 1 Paringin juara ketiga.\r\n\r\nRaudatul Janah selaku guru pendamping SMAN 2 Paringin menyambut baik lomba Kadarkum yang berlangsung sangat sportif dan transparan.\r\n\r\n\"Saya berharap semua anak-anak disini bukan hanya tau tentang materi Kadarkum tapi juga mengamalkannya untuk ke tingkat lebih lanjut walaupun tidak ditingkat SMA, nanti selanjutnya ke perkuliahan, dan masyarakat umum,\" ucapnya.\r\n\r\nPerlombaan dihadiri beberapa juri diantaranya Kabag Umum BNN, Kasi Datun Kejaksaan, dan Kasat Binmas Polres Balangan, perwakilan Bank Kalsel Cabang Paringin sebagai sponsor utama, guru-guru pendamping dari setiap perwakilan sekolah, beserta siswa-siswi setiap perwakilan sekolah.\r\n\r\nKetua panitia pelaksana sekaligus Kepala Bagian Hukum Sekertaris Daerah, Iwan Setiady mengatakan dengan terpilihnya SMAN 2 Paringin sebagai perwakilan dari Kabupaten Balangan dalam lomba Kadarkum tingkat provinsi di Banjarmasin.\r\n\r\n\"Dari seleksi ini diharapkan nantinya dapat memberikan hasil yang terbaik untuk tim Kadarkum Kabupaten Balangan,\" pungkasnya. (MC Balangan/ragil)', 'Berita Hukum', 'Berita', '5c9dd58fd1f7c-SMAN_2_Paringin_Wakil_Balangan_Di_Lomba_Kadarkum_Tingkat_Provinsi.jpg', '28-03-2019', 'MC Balangan/ragil', '2019-03-29 08:22:58'),
('5c9dd6535f261', 'Sambut Hari Jadi, Pemkab Balangan Gelar Rangkaian Sholat Hajad', 'Paringin, InfoPublik - Rangkaian Sholat Hajad dalam rangka Hari Jadi yang Ke-16 Kabupaten Balangan Tahun 2019 mulai digelar di Mesjid Wahdatul Muhibbin Desa Mampari Kecamatan Batumandi, Kamis (28/3/2019)', 'Paringin, InfoPublik - Rangkaian Sholat Hajad dalam rangka Hari Jadi yang Ke-16 Kabupaten Balangan Tahun 2019 mulai digelar di Mesjid Wahdatul Muhibbin Desa Mampari Kecamatan Batumandi, Kamis (28/3/2019)\r\n\r\nDalam sambutannya, Bupati Balangan menyampaikan tujuan akhir dalam rangka pembangunan ini adalah untuk mensejahterakan masyarakat.\r\n\r\n\"Program kita untuk meringankan beban panitia termasuk guru-guru ngaji, guru-guru ceramah kita bantu tiap bulannya. Memang berbagai kegiatan yang kita utamakan saat ini yang tujuannya mensejahterakan masyarakat bahwa pemerintah berupaya maksimal termasuk juga kita menggratiskan berobat di rumah sakit,\" ungkapnya.\r\n\r\nKegiatan dihadiri Bupati Balangan, Sekertaris Daerah Kabupaten Balangan, Forkopimda, tokoh agama, tokoh masyarakat, warga sekitar.\r\n\r\nKetua panitia Mesjid Wahdatul Muhibbin dalam penyampaiannya sangat mengapresiasi dan berterimakasih pada Bupati Balangan beserta jajarannya karna telah melakukan kegiatan sholat hajad di Mesjid Wahdatul Muhibbin ini.\r\n\r\n\"Kami juga menyampaikan kekurangan yang saat ini diperlukan dalam kelengkapan mesjid yaitu membangun toilet wanita,\" ucapnya.\r\n\r\nRencananya, sholat hajad yang bertujuan sebagai bentuk rasa syukur atas hari jadi yang ke-16 Kabupaten Balangan ini akan diadakan di delapan kecamatan berturut-turut setiap harinya. (MC Balangan/ragil) ', 'Berita Religi', 'Berita', '5c9dd6535f261-Sambut_Hari_Jadi,_Pemkab_Balangan_Gelar_Rangkaian_Sholat_Hajad.jpg', '03/29/2019', 'MC Balangan/ragil', '2019-03-29 09:01:27'),
('5c9dd6a6277b2', 'Bupati Lepas Kontingen POPDA Balangan', 'Paringin, InfoPublik – Kontingen POPDA (Pekan Olahraga Pelajar Daerah) Balangan dilepas oleh Bupati Balangan untuk mengikuti ajang POPDA di Banjarmasin tanggal 1-5 April 2019 mendatang. Acara pelepasan berlangsung di halaman Dinas Pemuda dan Olahraga Balangan, Jumat (29/03/2019).', 'Paringin, InfoPublik – Kontingen POPDA (Pekan Olahraga Pelajar Daerah) Balangan dilepas oleh Bupati Balangan untuk mengikuti ajang POPDA di Banjarmasin tanggal 1-5 April 2019 mendatang. Acara pelepasan berlangsung di halaman Dinas Pemuda dan Olahraga Balangan, Jumat (29/03/2019).\r\n\r\nKepala Dinas Pemuda dan Olahraga, Ahmad Gazali Al Patah mengatakan kontingen Balangan yang berkekuatan 36 atlet dan 12 pelatih serta official ini akan mengikuti 6 cabang olahraga dari 10 cabang olahraga yang dipertandingkan.\r\n\r\n“Keenam cabang olahraga tersebut antara lain dayung, panahan, taekwondo, karate, voli pasir dan atletik,” ujarnya.\r\n\r\nGazali menambahkan untuk target sendiri pihaknya berharap minimal bisa lebih baik daripada POPDA sebelumnya karena tahun ini secara persiapan dilakukan lebih maksimal.\r\n\r\n“Terbukti contohnya di ajang eksebisi karate dan panahan beberapa waktu yang lalu, atlet Balangan mampu menorehkan prestasi gemilang,” tandasnya.\r\n\r\nSementara itu Bupati Balangan, Ansharuddin berpesan kepada kontingen Balangan yang bertolak ke Banjarmasin untuk menjaga kesehatan, menjunjung tinggi sportivitas, menjaga nama baik Balangan dan selalu menjaga kekompakan baik dengan sesama atlet Balangan maupun dengan atlet dari luar daerah.\r\n\r\n“Berjuang keras gapai prestasi setinggi-tingginya. Soal bonus untuk peraih medali, itu pasti ada,” tandasnya.\r\n\r\nMC BALANGAN ', 'Berita Olahraga', 'Berita', '5c9dd6a6277b2-Bupati_Lepas_Kontingen_POPDA_Balangan.jpg', '03/23/2019', 'MC Balangan', '2019-03-29 08:58:55'),
('5c9df852499dc', 'DPMD Selenggarakan Workshop untuk Tim Pembina Kecamatan se - Balangan', 'Banjarbaru, InfoPublik - Sejumlah 40 orang dari DPMD, Inspektorat dan tim pembina Kecamatan se-Kabupaten Balangan mengikuti workshop tentang pembinaan dan pengawasan pengelolaan keuangan desa di aula BPKP Perwakilan Kalsel di Banjarbaru selama 2 hari mulai Sabtu (23/03/2019).', '<p>Banjarbaru, InfoPublik - Sejumlah 40 orang dari DPMD, Inspektorat dan tim pembina Kecamatan se-Kabupaten Balangan mengikuti workshop tentang pembinaan dan pengawasan pengelolaan keuangan desa di aula BPKP Perwakilan Kalsel di Banjarbaru selama 2 hari mulai Sabtu (23/03/2019).</p>\r\n\r\n<p>Menurut Ketua Panitia yang juga Kepala Dinas Pemberdayaan Masyarakat Desa, Urai Nur Iskandar selain menyamakan persepsi, kegiatan workshop ini bertujuan meningkatkan pemahaman tim pembina kecamatan terhadap regulasi pengelolaan keuangan desa.</p>\r\n\r\n<p>\"Hasil audit BPKP tahun 2018 kurang memuaskan karena tim pembina masih belum paham tentang regulasi serta belum satu persepsi\", ujarnya.</p>\r\n\r\n<p>Urai berharap dengan adanya workshop ini, hasil audit BPKP tentang pengelolaan keuangan desa menjadi lebih baik.</p>\r\n\r\n<p>Kepala BPKP perwakilan Kalsel diwakili koordinator pengawasan bidang akuntabilitas pemerintah, Suantim mengatakan pada tahun 2019 ini pemerintah pusat menggelontorkan dana desa sebesar 72T atau jika dipukul rata se-Indonesia maka tiap desa akan mendapatkan dana desa sebesar 900 juta rupiah.</p>\r\n\r\n<p>\"Hal ini bila tidak dikelola dengan baik bisa menimbulkan masalah pada pengelolaan keuangan desa terutama terkait penggunaan barang dan jasa,\" tegasnya.</p>\r\n\r\n<p>Sementara itu Bupati Balangan, Ansharuddin dalam sambutannya mengatakan kecamatan sebagai garda terdepan dalam fungsi pembinaan dan pengawasan pengelolaan keuangan desa sesuai dengan amanat Permendagri nomor 20 tahun 2018 dituntut untuk memahami regulasi sehingga dapat melakukan binwas secara maksimal.</p>\r\n\r\n<p>\"Tanpa pemahaman itu rasanya sulit bagi tim pembina kecamatan untuk mampu membenahi permasalahan pengelolaan desa di masing-masing wilayahnya,\" katanya.</p>\r\n\r\n<p>Ansharuddin menambahkan titik berat hasil audit BPKP tahun 2018 tentang pengelolaan keuangan desa adalah lemahnya fungsi pembinaan dan pengawasan.</p>\r\n\r\n<p>\"Oleh karena itu saya ingin outcome dari kegiatan hari ini adalah kesalahan pengelolaan keuangan desa bisa diminimalisir sehingga aparat desa dan jajarannya tidak sampai berurusan dengan aparat penegak hukum,\" tandasnya.</p>\r\n\r\n<p>Acara workshop berlangsung selama 2 hari dengan narasumber dari BPKP Perwakilan Kalsel. (Tim Kominfo/Maulana)</p>\r\n', 'Berita Desa', 'Berita', '5c9df852499dc-DPMD_Selenggarakan_Workshop_untuk_Tim_Pembina_Kecamatan_se_-_Balangan.jpeg', '03/25/2019', 'Tim Kominfo/Maulana', '2019-03-29 10:49:54'),
('5c9dfa7dc0c54', 'BPOM HSU Membentuk Kader Pramuka Balangan Peduli Obat Dan Pangan Aman', 'Paringin - Kantor Badan Pengawas Obat Dan Makanan Kabupaten Hulu Sungai Utara Melaksanakan \"Milenial Capacity Building\" Pembentukan Kader Pramuka Peduli Obat Dan Pangan Aman di Taman Hijau Balangan, Sabtu (23/3/2019).', '<p><span xss=removed>Paringin - Kantor Badan Pengawas Obat Dan Makanan Kabupaten Hulu Sungai Utara Melaksanakan \"Milenial Capacity Building\" Pembentukan Kader Pramuka Peduli Obat Dan Pangan Aman di Taman Hijau Balangan, Sabtu (23/3/2019).<br>\r\n<br>\r\nKepala BPOM HSU, Bambang Hery Purwanto mengharapkan dengan pembentukan Kader Pramuka Peduli Obat dan Pangan Aman ini pihaknya bisa mensosialisasikan ilmu-ilmu terkait dengan bahaya nya penyalahan obat, pemilihan pangan yang aman, dan kosmetik yang mengandung bahan berbahaya.<br>\r\n<br>\r\n\"Insya Allah nanti rencana kita juga akan ada latihan berjenjang yang bisa kita laksanakan,\" tuturnya.<br>\r\n<br>\r\nSementara itu Burhansyah selaku Ketua Kwartir Cabang Balangan memberikan imbauan untuk berhati-hati mengkonsumsi obat yang sementara ini sudah semarak di masyarakat, bahkan sampai masuk ke sekolah.<br>\r\n<br>\r\n\"Adik-adik inilah yang menjadi ujung tombak melihat hal ini, kalau ada tidak perlu ditegur tapi langsung dilaporkan ke pihak sekolah,\" tandasnya.<br>\r\n<br>\r\nKegiatan ini juga dihadiri Kepala Kementerian Agama Balangan, Kepala Dinas Pendidikan Balangan, Guru pendamping, dan anak-anak pramuka perwakilan sekolah tingkat SMP/MTS sederajat. (Tim Kominfo/Ragil/Maulana)</span></p>\r\n', 'Berita Kesehatan', 'Berita', '5c9dfa7dc0c54-BPOM_HSU_Membentuk_Kader_Pramuka_Balangan_Peduli_Obat_Dan_Pangan_Aman.jpeg', '03/25/2019', 'Tim Kominfo/Ragil/Maulana', '2019-03-29 10:59:09'),
('5c9dfaef690ef', '2019, PPID Balangan Luncurkan Program PPID On The Road', 'Paringin - Tim Pejabat Pengelola Informasi Daerah (PPID) Kabupaten Balangan mengadakan rapat kerja dengan agenda Penyusunan Daftar Informasi Publik Tahun 2019 di Aula Benteng Tundakan Kantor Bupati Balangan, Kamis (21/3/2019).', '<p><span xss=removed>Paringin - Tim Pejabat Pengelola Informasi Daerah (PPID) Kabupaten Balangan mengadakan rapat kerja dengan agenda Penyusunan Daftar Informasi Publik Tahun 2019 di Aula Benteng Tundakan Kantor Bupati Balangan, Kamis (21/3/2019). </span><br>\r\n<br>\r\n<span xss=removed>Bupati Balangan, Ansharuddin dalam sambutannya yang dibacakan Asisten Administrasi Umum, Hasmiati menyampaikan bahwa pemerintahan yang bersih dah transparan menjadi tuntutan yang tidak terelakkan, dan bahkan semakin menguat dari waktu ke waktu. </span><br>\r\n<br>\r\n<span xss=removed>\"Dalam upaya menjawab tuntutan tersebut, yang harus dilaksanakan adalah keterbukaan informasi publik. Masyarakat harus dilayani secara transparan terkait jalannya informasi pemerintahan, penggunaan dana, dokumentasi hasil-hasil pembangunan, dan sebagainya,\" ujarnya.</span><br>\r\n<br>\r\n<span xss=removed>Hasmiati menambahkan bahwa sepanjang informasi yang diminta memang bukan informasi publik yang dikecualikan. Tidak ada lagi cara lama yang alergi dimintai informasi bahkan main sembunyi-sembunyi.</span><br>\r\n<br>\r\n<span xss=removed>\"Termasuk soal informasi anggaran,\" tegasnya.</span><br>\r\n<br>\r\n<span xss=removed>Sementara PPID Utama, H Rahmi mengatakan poin penting yang akan  dilaksanakan adalah peningkatan kapasitas tim baik secara kelembagaan maupun SDM dari tim PPID utama dan PPID pembantu Pemkab Balangan melalui sarana workshop, bimtek, diklat, koordinasi, rapat-rapat juga study banding ke daerah yang lebih maju.</span><br>\r\n<br>\r\n<span xss=removed>\"Saya mengharapkan PPID ini terus berjalan maju dan melangkah lebih luas tidak hanya terhenti pada lingkup pemerintah kabupaten, tapi kita berkeinginan menjangkau sampai ke Pemerintahan desa melalui program yang kita namakan PPID on the road,\" katanya.</span><br>\r\n<br>\r\n<span xss=removed>Menurut H Rahmi program ini bertujuan untuk mengajak aparatur desa mendukung implementasi keterbukaan informasi publik di lingkup Pemkab. Balangan sesuai apa yang diamanatkan Undang-undang 14 tahun 2008 tentang Keterbukaan Informasi Publik.</span><br>\r\n<br>\r\n<span xss=removed>Rapat ini dihadiri PPID Pembantu, para admin dari seluruh SKPD, dan BLUD lingkup Pemkab Balangan. (Tim Kominfo/Rgl/Maulana)</span></p>\r\n', 'Berita Informasi', 'Berita', '5c9dfaef690ef-2019,_PPID_Balangan_Luncurkan_Program_PPID_On_The_Road.jpeg', '03/24/2019', 'Tim Kominfo/Rgl/Maulana', '2019-03-29 11:01:03'),
('5c9dfb4776aa3', 'Bupati Balangan Serta Para Habaib Menghadiri Haul Abah Guru Sekumpul Ke-14', 'Lampihong - Bupati Balangan Hadiri Haulan Abah Guru Sekumpul Ke-14 di Majelis Dzikir Mifta\'ul Jannah Desa Jimamun Kecamatan Lampihong, Selasa (19/03/2019).', '<p>Lampihong - Bupati Balangan Hadiri Haulan Abah Guru Sekumpul Ke-14 di Majelis Dzikir Mifta&#39;ul Jannah Desa Jimamun Kecamatan Lampihong, Selasa (19/03/2019).<br>\r\n<br>\r\nAcara yang berjalan sangat tenang dan khidmat ini dihadiri oleh Bupati Balangan, para habaib, tokoh agama, para pejabat, tokoh masyarakat, dan warga sekitar.<br>\r\n<br>\r\nBupati Balangan, Ansharuddin dalam sambutannya mengucapkan rasa syukur karena bisa warga Desa Jimamun dan sekitarnya bisa berkumpul  melaksanakan haul Guru Sekumpul.  <br>\r\n<br>\r\n\"Alhamdulillah mungkin ada diantara kita yang minggu lalu tidak bisa hadir di Martapura,  bisa melaksanakannya disini,\" ucapnya.<br>\r\n<br>\r\nSementara itu Ideris, selaku panitia pelaksana mengatakan acara ini tidak ada tujuan lain selain mewujudkan rasa cinta dan mahabah kita kepada ayahanda Guru Sekumpul.<br>\r\n<br>\r\n\"Beliau sudah tidak diragukan lagi kewaliannya dan bahkan sudah mendunia,\" tandasnya.<br>\r\n<br>\r\nAcara diawali dengan pembacaan maulid habsyi dilanjutkan dengan pembacaan kitab suci Al-Qur&#39;an, Manaqib Abah Guru Sekumpul oleh Guru Ahmad Syairazi, dan diakhiri dengan dzikir nasyid. (MC Balangan/ragil)</p>\r\n', 'Berita Religi', 'Berita', '5c9dfb4776aa3-Bupati_Balangan_Serta_Para_Habaib_Menghadiri_Haul_Abah_Guru_Sekumpul_Ke-14.jpg', '03/20/2019', 'MC Balangan/ragil', '2019-03-29 11:02:31'),
('5c9dfb97527fd', 'Pemkab Balangan Peringati Hari Bhakti Rimbawan', 'Paringin - Apel Peringatan Hari Bakti Rimbawan yang ke-36 tahun 2019 dilaksanakan Dinas Kehutanan Kesatuan Pengelolaan Hutan Balangan di Halaman Kantor Bupati Balangan, Senin (18/03/2019).', '<p>Paringin - Apel Peringatan Hari Bakti Rimbawan yang ke-36 tahun 2019 dilaksanakan Dinas Kehutanan Kesatuan Pengelolaan Hutan Balangan di Halaman Kantor Bupati Balangan, Senin (18/03/2019).<br>\r\n<br>\r\nPeringatan Hari Bakti Rimbawan bertujuan melestarikan hutan, mensejahterakan masyarakat, serta menjaga lingkungan tetap sehat.<br>\r\n<br>\r\nMenteri Lingkungan Hidup Dan Kehutanan Repulik Indonesia, Siti Nurbaya dalam sambutan yang dibacakan Bupati Balangan, Ansharuddin menyampaikan peringatan Hari Bhakti Rimbawan saat ini merupakan kesempatan yang sangat baik untuk melakukan refleksi, menggali inspirasi, motivasi dan berbagai inovasi dalam kiprah kerja di bidang lingkungan hidup dan kehutanan.<br>\r\n<br>\r\n\"Dimanapun kita bertugas, rimbawan adalah sosok yang sangat kuat dalam identitas, skill, perspektif berpikir, solidaritas dan bergotong royong,\" ujarnya.<br>\r\n<br>\r\nSementara itu Patliansyah selaku Kepala UPT KPH Kabupaten Balangan sangat mengapresiasi kegiatan ini serta kerjasama dengan Pemkab Balangan.<br>\r\n<br>\r\n\"Alhamdulillah program pemerintah sudah bergeser terutama mengutamakan program kehutanan sosial untuk masyarakat, khusus untuk wilayah KPH Balangan yang mencakup Kabupaten Balangan dan Hulu Sungai Utara. Saat ini sudah ada 3 ijin hutan desa yang terbit pada tahun 2017. diantaranya, HKM Marajai, hutan desa Mamigang dan hutan desa Dayak Pitap,\" tuturnya.<br>\r\n<br>\r\nKegiatan Apel Hari Bhakti Rimbawan ke-36 Tahun 2019 ini dihadiri Bupati Balangan, seluruh kepala SKPD Kabupaten Balangan beserta staf dan jajaran Pemkab Balangan. ( TIM KOMINFO/ MAULANA/ MEMO/ RAGIL)</p>\r\n', 'Berita Apel', 'Berita', '5c9dfb97527fd-Pemkab_Balangan_Peringati_Hari_Bhakti_Rimbawan.jpg', '03/19/2019', 'TIM KOMINFO/ MAULANA/ MEMO/ RA', '2019-03-29 11:03:51'),
('5c9dfc07a8a84', 'BPOM HSU Kampanyekan Bahaya Kosmetik Ilegal Ke Sekolah Sekolah di Kabupaten Balangan', 'Paringin - Maraknya peredaran kosmetik ilegal yang menyasar kaum millenial menimbulkan keprihatinan tersendiri khususnya oleh Badan Pengawasan Obat dan Makanan (BPOM)', '<p><span xss=removed><span xss=removed>Paringin - Maraknya peredaran kosmetik ilegal yang menyasar kaum millenial menimbulkan keprihatinan tersendiri khususnya oleh Badan Pengawasan Obat dan Makanan (BPOM)<br>\r\n<br>\r\nKarenanya BPOM HSU turun ke lapangan untuk melakukan kampanye kepada siswi-siswi usia sekolah mengenai bahaya kosmetik ilegal tersebut. Untuk Kabupaten Balangan, sekolah yang dituju pertama adalah SMA 1 Paringin, Kamis (14/03/2019).<br>\r\n<br>\r\nKepala BPOM HSU, Bambang Hery Purwanto mengatakan latar belakang kegiatan ini adalah karena pada saat BPOM melakukan razia beberapa waktu yang lalu, ditemukan banyak kosmetik ilegal di pasar.<br>\r\n<br>\r\n\"Kosmetik ilegal itu kebanyakan tanpa izin edar. Jumlahnya ribuan dari ratusan merk. Itu hanya dari Kabupaten HSS, HST dan Tapin,\" ujarnya.<br>\r\n<br>\r\nBambang Hery menambahkan melalui kegiatan ini diharapkan para siswi bisa memilah mana kosmetik yang aman dan mana yang tidak aman.<br>\r\n<br>\r\n\"Kosmetik itu langsung bersentuhan dengan kulit dan diserap untuk selanjutnya bersama darah akan mengalir ke seluruh tubuh. Akibatnya akan timbul penyakit seperti kanker,\" tukasnya.<br>\r\n<br>\r\nSementara itu Kepala SMA 1 Paringin, Fathurahman mengucapkan terima kasih serta penghargaan setinggi-tingginya kepada BPOM HSU karena sudah meluangkan waktu untuk memberikan ilmunya terkait tentang penggunaan kosmetik.<br>\r\n<br>\r\n\"Informasi ini penting, jadi tolong peserta bisa menyimak dengan baik karena informasi ini baik dan jarang didapat. Apalagi dari praktisinya langsung yang datang ke sekolah kita,\" tandasnya.<br>\r\n<br>\r\nSelanjutnya kegiatan diisi dengan presentasi yang menampilkan video liputan razia BPOM serta video investigasi pembuatan kosmetik ilegal serta materi yang disampaikan langsung Kepala BPOM HSU, Bambang Hery Purwanto. (Tim Kominfo/Sat/Maulana)</span></span></p>\r\n', 'Berita Bpom', 'Berita', '5c9dfc07a8a84-BPOM_HSU_Kampanyekan_Bahaya_Kosmetik_Ilegal_Ke_Sekolah_Sekolah_di_Kabupaten_Balangan.jpg', '03/14/2019', 'Tim Kominfo/Sat/Maulana', '2019-03-29 11:05:43'),
('5c9dfc6140af0', 'Ingin Ikuti Keberhasilan Program UHC Balangan, DPRD Kabupaten PPU Lakukan Kunjungan Kerja', 'Paringin, InfoPublik - Komisi I dan Komisi II DPRD Kabupaten Penajam Paser Utara (PPU) melakukan kunjungan kerja ke Pemerintah Kabupaten Balangan dengan agenda sharing dan diskusi tentang Program UHC (Universal Health Coverage)  JKN KIS dan CSR, di aula Bappeda Balangan, Rabu (13/03/2019).', '<p><span xss=removed><span xss=removed>Paringin, InfoPublik - Komisi I dan Komisi II DPRD Kabupaten Penajam Paser Utara (PPU) melakukan kunjungan kerja ke Pemerintah Kabupaten Balangan dengan agenda sharing dan diskusi tentang Program UHC (Universal Health Coverage)  JKN KIS dan CSR, di aula Bappeda Balangan, Rabu (13/03/2019).</span></span></p>\r\n\r\n<div><br>\r\n<span xss=removed><span xss=removed>Bupati Balangan, Ansharuddin yang diwakili oleh Asisten Bidang Perekonomian, Pembangunan dan Kehumasan Sekretariat Daerah Balangan, Husaini menyambut hangat kedatangan rombongan DPRD Kabupaten PPU dan sekaligus sebagai moderator dalam forum diskusi ini.<br>\r\n<br>\r\n\"Terima kasih sudah berkunjung ke Banua Sanggam, untuk saling sharing, terutama seputar program UHC dan CSR ,\" ujarnya.<br>\r\n<br>\r\nSementara itu, salah satu anggota Komisi II DPRD Kabupaten Penajam Paser Utara, Syamsudin Alie mengatakan bahwa Kabupaten Balangan menjadi tolak ukur bagi PPU, karena ada beberapa perusahaan yang berdomisili di Kabupaten Balangan sudah melakukan program CSR yang hampir mendekati sempurna.<br>\r\n <br>\r\n“Utamanya terkait JKN KIS melalui Program Universal Health Coverage, dimana Kabupaten Balangan ini sudah mendapat penghargaan karena keberhasilannya tersebut. Kami ingin tahu lebih dalam soal tersebut dan akan coba kami terapkan di Kabupaten kami, apalagi usia Kabupaten kita kurang lebih sama,” ungkapnya.<br>\r\n<br>\r\nKunjungan kerja ini dihadiri oleh Bagian Humas dan Protokol Setda Kab. Balangan, Dinas Kesehatan, Dinas Lingkungan Hidup, dan BAPPEDA Kabupaten Balangan. (Tim Kominfo/Maulana)</span></span></div>\r\n', 'Berita', 'Berita', '5c9dfc6140af0-Ingin_Ikuti_Keberhasilan_Program_UHC_Balangan,_DPRD_Kabupaten_PPU_Lakukan_Kunjungan_Kerja.jpeg', '03/14/2019', 'Tim Kominfo/Maulana', '2019-03-29 11:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(2) NOT NULL,
  `Kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `Kategori`) VALUES
(1, 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` int(2) NOT NULL,
  `Penulis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `Penulis`) VALUES
(1, 'MC Balangan');

-- --------------------------------------------------------

--
-- Table structure for table `sys_group_users`
--

CREATE TABLE `sys_group_users` (
  `id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_group_users`
--

INSERT INTO `sys_group_users` (`id`, `level`, `deskripsi`) VALUES
(1, 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `sys_menu`
--

CREATE TABLE `sys_menu` (
  `id` int(11) NOT NULL,
  `nav_act` varchar(150) DEFAULT NULL,
  `page_name` varchar(150) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `main_table` varchar(150) DEFAULT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `urutan_menu` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `dt_table` enum('Y','N') NOT NULL,
  `tampil` enum('Y','N') NOT NULL,
  `type_menu` enum('main','page') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_menu`
--

INSERT INTO `sys_menu` (`id`, `nav_act`, `page_name`, `url`, `main_table`, `icon`, `urutan_menu`, `parent`, `dt_table`, `tampil`, `type_menu`) VALUES
(2, 'berita', 'berita', 'berita', 'berita', 'fa-bullhorn', 1, 0, 'Y', 'Y', 'page'),
(3, 'kategori', 'kategori', 'kategori', 'kategori', 'fa-bars', 2, 0, 'Y', 'Y', 'page'),
(4, 'penulis', 'penulis', 'penulis', 'penulis', 'fa-user', 3, 0, 'Y', 'Y', 'page');

-- --------------------------------------------------------

--
-- Table structure for table `sys_menu_role`
--

CREATE TABLE `sys_menu_role` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `read_act` enum('Y','N') DEFAULT NULL,
  `insert_act` enum('Y','N') DEFAULT NULL,
  `update_act` enum('Y','N') DEFAULT NULL,
  `delete_act` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_menu_role`
--

INSERT INTO `sys_menu_role` (`id`, `id_menu`, `group_id`, `read_act`, `insert_act`, `update_act`, `delete_act`) VALUES
(2, 2, 1, 'Y', 'Y', 'Y', 'Y'),
(3, 3, 1, 'Y', 'Y', 'Y', 'Y'),
(4, 4, 1, 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `foto_user` varchar(150) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `date_created`, `foto_user`, `id_group`, `aktif`) VALUES
(1, 'mohamad ', 'wildannudin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'wildannudin@gmail.com', '2015-01-26', '10965740_10206190197982755_22114424_n.jpg', 1, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_group_users`
--
ALTER TABLE `sys_group_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_menu`
--
ALTER TABLE `sys_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_menu_role`
--
ALTER TABLE `sys_menu_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sys_menu_role_sys_menu` (`id_menu`),
  ADD KEY `FK_sys_menu_role_sys_users` (`group_id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sys_users_sys_group_users` (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_group_users`
--
ALTER TABLE `sys_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_menu`
--
ALTER TABLE `sys_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_menu_role`
--
ALTER TABLE `sys_menu_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sys_menu_role`
--
ALTER TABLE `sys_menu_role`
  ADD CONSTRAINT `FK_sys_menu_role_sys_group_users` FOREIGN KEY (`group_id`) REFERENCES `sys_group_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sys_menu_role_sys_menu` FOREIGN KEY (`id_menu`) REFERENCES `sys_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD CONSTRAINT `FK_sys_users_sys_group_users` FOREIGN KEY (`id_group`) REFERENCES `sys_group_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
