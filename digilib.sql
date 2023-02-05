-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 09:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilib`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(48) NOT NULL,
  `folder` varchar(255) NOT NULL,
  `blurb` text NOT NULL,
  `pages` int(5) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `published_date` date NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `stats` int(255) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `return_date` date DEFAULT NULL,
  `borrower` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `folder`, `blurb`, `pages`, `isbn`, `published_date`, `publisher`, `author`, `tag`, `category`, `stats`, `status`, `return_date`, `borrower`) VALUES
(1, 'Galaksi', 'galaksi', 'Galaksi Aldebaran. Ketua Geng Ravispa. Geng paling gagah dan pemberani tempat berkumpulnya murid-murid nakal dan tukang berontak SMA Ganesha. Sering berselisih paham dengan Avegar, geng milik SMA Kencana.\r\n\r\nHadirnya Kejora Ayodhya di hidup Galaksi yang kelam menjadikan hari-hari Galaksi berubah menjadi penuh warna. Pertemuan antara pemimpin geng dengan perempuan Paskibra. Awal mula kedekatan yang terdengar sangat mustahil tapi begitu nyata. Hidup dengan dibeda-bedakan oleh orangtuanya membuat Galaksi mempunyai sifat keras termasuk pada cewek yang ia suka, Kejora. Ketika Kejora sadar kalau ia juga menyukai Galaksi, apa Galaksi masih mau menerimanya.\r\n\r\nRavispa. Masa putih abu-abu yang tak akan pernah terlupa.', 492, 9786025508455, '2018-08-18', 'Coconut Books', 'Poppi Pertiwi', 'Romance', 0, 4, 0, NULL, 0),
(2, 'Laut Bercerita', 'laut-bercerita', 'Jakarta, Maret 1998 \r\nDi sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Berbulan-bulan mereka disekap, diinterogasi, dipukul , ditendang, digantung, dan disetrum agar bersedia menjawab satu pertanyaan penting: siapakah yang berdiri di balik gerakan aktivis dan mahasiswa saat itu. \r\n\r\nJakarta, Juni 1998 \r\nKeluarga Arya Wibisono, seperti biasa, pada hari Minggu sore memasak bersama, menyediakan makanan kesukaan Biru Laut. Sang ayah akan meletakan satu piring untuk dirinya, satu piring untuk sang ibu, satu piring untuk Biru Laut dan satu piring untuk si bungsu Asmara Jati. Mereka duduk menanti dan menanti. Tapi Biru Laut tak kunjung muncul. \r\n\r\nJakarta, 2000 \r\nAsmara Jati, adik Biru Laut, beserta Tim Komisi Orang Hilang yang dipimpin Aswin Pradana mencoba mencari jejak mereka yang hilang serta merekam dan mempelajari testimoni mereka yang kembali. Anjani, kekasih Laut, para orang tua dan istri aktivis yang hilang menuntut kejelasan tentang anggota keluarga mereka. Sementara Biru Laut, dari dasar laut yang sunyi bercerita kepada kita, kepada dunia tentang apa yang terjadi pada dirinya dan kawan-kawannya.', 379, 9789959019677, '2017-10-01', 'Kepustakaan Populer Gramedia', 'Leila S. Chudori ', 'Sejarah', 1, 0, 0, NULL, 0),
(3, 'Mariposa', 'mariposa', 'Untuk mencintai kamu, aku hanya butuh waktu satu detik.\r\nUntuk mendapatkan cinta kamu? Aku butuh berapa juta detik?\r\n\r\nIni kisah tentang Acha, memiliki nama panjang Natasha Kay Loovi. Gadis ajaib berparas cantik seperti bidadari. Ini juga kisah tentang Iqbal. Jangan tanya nama panjangnya siapa, nanti kalian jatuh cinta. Pria berhati dingin dengan hidup monotonnya.\r\n\r\nBercerita tentang perjuangan Acha untuk mendapatkan cinta seorang Iqbal. Acha tak pernah gentar meruntuhkan dingin dan kokohnya tembok pertahanan hati Iqbal yang belum pernah disinggahi perempuan mana pun.\r\n\r\nSikap dingin dan penolakan Iqbal berkali-kali tak membuat Acha menyerah. Bagi Acha selama Iqbal masih berwujud manusia, selama Iqbal tidak berubah menjadi sapi terbang, Acha akan terus berjuang.\r\n\r\nSiapkan hati yang mandiri untuk membaca cerita ini. Hati-hati jantung Anda, mohon selalu dijaga. Serangan baper akan terus menyerang tanpa henti.\r\n\r\nKisah romantis komedi remaja yang siap memanjakan hari indah Anda semua. Jangan lupa selalu bahagia.\r\n\r\nDari Mariposa untuk semua pembaca tercinta.', 496, 9786025508615, '2018-10-10', 'Coconut Books', 'Luluk HF', 'Romance', 0, 20, 0, NULL, 0),
(4, 'Mozachiko', 'mozachiko', 'Chiko Gadangga, siswa paling keras kepala dengan segudang masalah di sekolahnya. SMA Rajawali merupakan tempat ia bertemu dengan siswi paling hiperaktif, culun, dan super ceria seperti Moza Adisti.\r\n\r\nSejak ditolong oleh Chiko, Moza bertekad agar Chiko menyukainya. Namun, Chiko selalu saja menyakiti hati Moza dengan perlakuan dan kata-kata yang kasar. Bahkan lebih memilih Nencny-adik tiri Moza- yang membuat hatinya semakin terluka.\r\n\r\nSaat sadar segala perjuangannya tak pernah dihargai. Moza pergi mencampakkan Chiko begitu saja. Chiko pun sadar kalau Moza sangat berarti dalam hidupnya. Tiba-tiba, Moza muncul dengan penampilan yang jauh berbeda. Sikapnya ke Chiko pun berubah drastis.\r\n\r\nChiko meminta Moza kembali dan berubah menjadi cewek yang dikenalnya dulu. Lalu, apakah Moza mau menurutinya?\r\n\r\n***\r\n\r\n\"Kita dua beda yang tak pernah bisa bersatu.\r\nTapi, saling terluka dan menjaga.\"', 352, 9786025406744, '2018-09-27', 'Loveable', 'Poppi Pertiwi', 'Romance', 0, 0, 0, NULL, 0),
(5, 'Phantera Leo', 'phantera-leo', 'Ini kisah bunga yg mencoba untuk mekar, dan kisah seorang yang mempertahankan cintanya untuk masa depan. Pilihan terberat dimana sahabat dan cintanya menjadi pilihan.\r\n\r\nNama lelaki itu Phantera Leo, yang selalu membuat kesal. Lelaki itu tiba - tiba menyatakan cinta padanya, dan yang lebih mengejutkan lagi saat Leo memberitahunya bahwa iya hanya di jadikan kekasoh lelaki itu hanya untuk sandiwara belaka.\r\n\r\nKetika berbagai macam masalah datang, haruskan dirinya pasrah atau siap berperang untuk melawannya?\r\n\r\nAtau berakhir menyedihkan dan terhanyut dalam kesedihan? Ini kisahnya, tentang Lea dan Leo, soal keluarga, cinta sahabat, akan terangkum disini.', 394, 9786239332556, '2021-01-01', 'Cloudbooks Publishing', 'Sabrina Febrianti', 'Romance', 0, 0, 0, NULL, 0),
(6, 'Pulang', 'pulang', '\"Aku tahu sekarang, lebih banyak luka di hati bapakku dibanding di tubuhnya. Juga mamakku, lebih banyak tangis di hati Mamak dibanding di matanya.\"\r\n\r\nSebuah kisah tentang perjalanan pulang, melalui pertarungan demi pertarungan, untuk memeluk erat semua kebencian dan rasa sakit.\"\r\n\r\n“Selalu ada hal baru yang bisa direnungi dan dipahami dari novel-novel Tere Liye.”\r\n—Pulin Sri Lestari, ibu rumah tangga\r\n\r\n“Saat ini kita cenderung tidak lagi peduli pada banyak hal, namun novel-novel Tere Liye membantu kita untuk melihat lebih dalam dan peduli.”\r\n—Tiara, guru/dosen\r\n\r\n“Kayak buku pelajaran, tapi seru. Mamah kamu nggak akan ngambek kalau kamu baca novel-novel Tere Liye.”\r\n—Khoerun Nisa, siswi SMA\r\n\r\n“Membaca novel-novel Tere Liye seperti pulang ke rumah. Berapa jauh pun kaki melangkah, selalu ingin kembali.”\r\n—Evi, buruh migran Indonesia', 400, 9786020822129, '2015-02-01', 'Republika Penerbit', 'Tere Liye', 'Fantasy', 0, 1, 0, NULL, 0),
(7, 'R: Raja, Ratu & Rahasia', 'raja-ratu-dan-rahasia', 'Raja terkenal sebagai sosok yang humoris, tegas, dan bergengsi tinggi. Itu semua karena dia adalah anak tunggal dari pasangan pemilik SMA elit di Jakarta, SMA Adhi Wijaya. Meskipun begitu, Raja tetap seperti cowok remaja kebanyakan yang maniak film horor, hobi bermain basket, dan naksir cewek. Namun, di balik sifat humorisnya, Raja memiliki trauma masa lalu yang membuatnya sulit untuk mendekati Ratu, perempuan yang dia sukai, meski dia tak mengakuinya. Selain itu, masih ada kebimbangan Raja terhadap kesempatannya berkuliah di Paris. Akankah dia mengambil peluang emas itu demi mewujudkan mimpinya? Mampukah Raja menaklukkan hati Ratu?', 388, 9786026940261, '2016-06-03', 'Best Media', 'Wulanfadi', 'Romance', 0, 15, 0, NULL, 0),
(8, 'SagaraS', 'sagaras', 'Akhirnya. Siapa orang tua Ali dijawab di buku ini.\r\n\r\nAli, bertahun-tahun, berusaha memecahkan misteri itu. Raib dan Seli tentu tidak akan membiarkan Ali sendirian, mereka sahabat sejati. Dan jangan lupakan, Batozar alias Master B, dengan segenap kalimat kasar, seolah tidak peduli, dia selalu siap membela.\r\nTapi bagaimana jika mister it terhadang tembok kokoh Sagaras?\r\nDan mereka harus bertarung hidup-mati lima ronde melawan Ksatria SagaraS?\r\n\r\nJangan khawatir, kalian akan tersenyum lebar (dan boleh jadi sambil menangis), saat tiba di halaman terakhir buku ini.', 384, 9785482471586, '2022-04-08', 'Gramedia Pustaka Utama', 'Tere Liye', 'Fantasy', 1, 0, 1, '2023-02-10', 202020419),
(9, 'Septihan', 'septihan', 'Darinya aku belajar hidup sederhana. Tanpa banyak mengeluh, dengan banyak bersyukur.\r\nMasa depan itu, apa masih jadi milik kita berdua?\r\nSeptian Aidan Nugroho. Murid laki-laki dengan bandana merah di sebelah lengan seragam sekolahnya, sangat pintar dan pendiam. Di SMA Ganesha, Septian adalah murid kesayangan sekaligus kebanggaan guru-guru. Banyak prestasi yang sudah ia raih. Dia juga aktif sebagai bendahara di Ravispa. Dalam hidupnya, perempuan seperti Jihan Halana tidak akan pernah dibiarkan masuk.\r\nJihan Halana. Orang-orang mengenalnya sebagai perempuan yang sangat ekspresif. Mudah menggambarkan apa pun yang ia rasakan, termasuk kepada Septian; laki-laki yang sudah sejak lama Jihan suka. Apa pun Jihan lakukan agar Septian menoleh padanya, agar Septian menyukainya. Meski terus disakiti, Jihan yang ceria tetap mengejar Septian. Meski ditolak berkali-kali, Jihan yang sendu tetap berusaha agar Septian mau menerima kehadirannya.\r\nPerjuangan Jihan membuat Septian membuka mata bahwa Jihan memang sangat tulus padanya. Ketika Septian sudah mulai membuka hati, ada satu kesalahan yang ia perbuat. Kesalahan yang akan mengubah seluruh hidup mereka, bahkan membuat Jihan sangat membenci Septian.\r\nApa kini masa depan itu masih ada untuk mereka?\r\nNovel ini bercerita tentang masa putih abu-abu dan persahabatan. Tentang perjuangan dan doa yang mampu meluluhkan hati.', 436, 9786237439431, '2022-09-15', 'Coconut Books', 'Poppi Pertiwi', 'Comedy', 0, 0, 0, NULL, 0),
(10, 'Teluk Alaska', 'teluk-alaska', 'Alister Reygan, cowok yang selalu menjadi idaman para wanita. Bukan hanya sekadar tampan, ia juga memiliki sebuah geng yang sering disebut sebagai ‘Penguasa Sekolah’. Nasib sial menimpa cewek teman sekelasnya. Ia selalu menjadi objek bullying oleh gengnya. Allister sebagai ketua selalu paling kasar dan semangat dalam mem-bully cewek tersebut. Sampai suatu hari Alister berhenti. Kata-kata kasar dan tatapan kebencian itu menghilang. Itu semua karena sebuah rahasia besar yang membuat hidupnya hancur seketika.', 407, 9786025508882, '2019-07-01', 'Coconut Books', 'Eka Aryani', 'Romance', 0, 0, 0, NULL, 0),
(11, 'True Stalker', 'true-stalker', 'Lo udah tahu kelakuan gue di sekolah. Satu cara supaya gue bisa tahu kalau lo beneran tutup mulut. Mulai hari ini lo jadi cewek gue!\r\n\r\nNama gue, Adiba Ayudia. Gue kelas X SMA. Hari-hari gue berjalan biasa aja: rumah, sekolah, belajar, maen bareng temen... dan stalking kakak kelas ganteng.\r\n\r\nYap, gue adalah stalker sejati. Jika dibilang itu sebuah hobi? Mungkin.\r\nDan, hobiku itu menjadi awal dari bencana...', 508, 9789797945329, '2017-02-13', 'Media Kita', 'Sirhayani', 'Romance', 0, 1, 0, NULL, 0),
(12, 'The Star and I', 'the-star-and-i', '\"Kulihat dunia dalam matamu dan masa depan dalam senyummu...\"\r\n\r\nSejak kecil, Olivia Mitchell ingin tahu siapa orangtua kandungnya. Jadi, ketika ia mendapat kesempatan bekerja di New York, ia pun menyambarnya tanpa ragu. Namun, mencari seseorang tanpa nama di kota sebesar New York adalah sesuatu yang mustahil. Kini kontrak kerja Olivia akan segera berakhir, dan Olivia menolak pulang ke Inggris sebelum berhasil melacak keberadaan orangtua kandungnya. Itu berarti ia harus segera mencari pekerjaan baru supaya ia bisa tetap tinggal di New York. Seolah-olah semua itu belum cukup memusingkan, Olivia mendadak bertemu kembali dengan Rex Rankin---sahabat masa kecilnya, sekaligus cinta pertamanya yang gagal---yang muncul untuk menawarkan bantuan.', 344, 9787261091794, '2022-01-01', 'Gramedia Pustaka Utama', 'Ilana Tan', 'Romance', 1, 0, 0, NULL, 0),
(13, 'Melangkah', 'melangkah', 'Listrik padam di seluruh Jawa dan Bali secara misterius! Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara.\r\n\r\nSaat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! Empat mahasiswa jurusan Ekonomi ini, harus bertarung melawan pasukan berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi bertopeng pahlawan yang punya rencana mengerikan.\r\n\r\nTernyata pesan arwah nenek moyang itu benar-benar terwujud. \"Akan datang kegelapan yang berderap bersama ribuan kuda raksasa di kala malam. Mereka bangun setelah sekian lama, untuk menghancurkan Nusantara. Seorang lelaki dan seorang perempuan ditakdirkan membaurkan air di lautan dan api di pegunungan. Menyatukan tanah yang menghujam, dan udara yang terhampar.\"\r\n\r\nKisah tentang persahabatan, tentang jurang ego anak dan orang tua, tentang menyeimbangkan logika dan perasaan. Juga tentang melangkah menuju masa depan.\r\n\r\nBahwa, apa pun yang menjadi luka masa lalu, biarlah mengering bersama waktu.', 355, 9787525515585, '2020-03-21', 'Grasindo', 'J.S. Khairen', 'Action', 1, 0, 0, NULL, 0),
(14, 'Earth', 'earth', 'Namaku Raib, usiaku 15 tahun, kelas sepuluh. Aku anak perempuan seperti kalian, adik-adik kalian, tetangga kalian. Aku punya dua kucing, namanya si Putih dan si Hitam. Mama dan papaku menyenangkan. Guru-guru di sekolahku seru. Teman-temanku baik dan kompak.\r\n\r\nAku sama seperti remaja kebanyakan, kecuali satu hal. Sesuatu yang kusimpan sendiri sejak kecil. Sesuatu yang menakjubkan.\r\n\r\nNamaku, Raib. Dan aku bisa menghilang.', 440, 9782470671898, '2014-02-16', 'Gramedia Pustaka Utama', 'Tere Liye', 'Adventure', 1, 0, 0, NULL, 0),
(15, 'Ayat-Ayat Cinta', 'ayat-ayat-cinta', 'Tentang seorang pemuda Indonesia yang mencari ilmu jauh di tanah Arab. Berbekal iman yang kuat dan ketabahan, Fahri mengalami banyak hal yang menggetarkan hidupnya, yang sesaat membuat Fahri mempertanyakan jalan hidupnya.\r\n\r\nKesabaran dan keimanan adalah kunci kehidupan. Fahri, Aisyah dan Maria membuktikannya dalam cerita yang halus dan mengalir.', 418, 9782845120273, '2004-01-01', 'Republika', 'Habiburrahman El-Shirazy', 'Romance', 1, 0, 0, NULL, 0),
(16, 'The Sea Speaks His Name', 'the-sea-speaks-his-name', 'The tragic yet inspiring story of a group of friends, all young and idealistic political activists who faced the iron fist of power in the waning days of the Suharto regime, in the late 1990s.\r\n\r\nIn the twilight hours of a day in March, Biru Laut was ambushed by four unknown men. Together with his friends, Daniel, Sunu and Alex, he was taken to an unknown location. For months they were held captive, interrogated, beaten and tortured into answering one sole question: Who stood behind the rebellious student movements at that time?\r\n\r\nBiru Laut’s younger sister, who, along with other family members of kidnapped student activists, struggled to put the pieces of the puzzle together and to find answers to their never-ending questions. While her parents appear to be in denial and remain hopeful that Biru Laut will one day come back to sit at the family table again, Asmara Jati engages alongside the Missing Persons Commission Team led by Aswin Pradana in order to strive to find traces of those who went missing and to record the testimonies of those who returned.\r\n\r\nThis stirring story of Biru Laut and his friends is the story of the desaparecidos of Indonesia. It is the story of a momentous—and still seldom written about—period of Indonesian history that led to the end of dictatorship in Indonesia.', 322, 9783703686566, '2017-08-23', 'Kinokuniya', 'Leila S. Chudori', 'Romance', 1, 0, 0, NULL, 0),
(17, '5 CM', '5-cm', 'Bestseller book di Gramedia Bookstore selama 2 tahun berturut-turut!\r\n\r\nLima sahabat telah menjalin persahabatan selama tujuh tahun. Mereka adalah Arial yang paling tampan, Riani sebagai satu-satunya wanita dalam kelompok itu, Zafran yang berlagak seperti seorang penyair, Ian yang paling subur badannya, dan Genta yang dianggap sebagai leader dalam kelompok itu. Kegemaran mereka adalah mengeksekusi hal-hal yang tidak mungkin dan mencoba segala hal, mulai dari kafe paling terkenal di Jakarta, sampai nonton layar tancap. Semuanya penggemar film, dari film Hollywood sampai film yang nggak kelas—kecuali film India karena mereka punya prinsip bahwa semua persoalan di dunia atau masalah pasti ada jalan keluarnya, tapi bukan dalam bentuk joget.\r\n\r\nSuatu saat, karena terdorong oleh rasa bosan di antara satu dan yang lain, mereka memutuskan untuk tidak saling berkomunikasi dan bertemu satu sama lain selama tiga bulan. Selama tiga bulan berpisah itulah telah terjadi banyak hal yang membuat hati mereka lebih kaya dari sebelumnya. Pertemuan setelah tiga bulan yang penuh dengan rasa kangen akhirnya terjadi dan dirayakan dengan sebuah perjalanan. Sebuah perjalanan yang penuh dengan keyakinan, mimpi, cita-cita, dan cinta. Sebuah perjalanan yang telah mengubah mereka menjadi manusia sesungguhnya, bukan Cuma seonggok daging yang bisa berbicara, berjalan, dan punya nama.\r\n\r\n“Ada yang pernah bilang kalau idealisme adalah kemewahan terakhir yang dimiliki oleh generasi muda….”', 381, 9788967976330, '2005-01-01', 'GrasIndo', 'Donny Dhirgantoro', 'Adventure', 1, 0, 0, NULL, 0),
(18, '172 Days', '172-days', 'Novel yang menceritakan kisah cinta sepasang kekasih dari awal bertemu sampai mereka dipisahkan oleh takdir. \r\n172 hari yang sangat berarti, istimewa di hati dan tak akan terganti. ', 241, 9788436634433, '2022-07-12', 'Buku Kita', 'Nadzira Shafa', 'Romance', 1, 0, 0, NULL, 0),
(19, 'Oh My Savior', 'oh-my-savior', '“No ones would left you. If theres one, bukan gue orangnya.”\r\nKetakutan dalam diri seorang Zelda Farzana kemudian hilang begitu saja, kalimat yang diucapkan dengan tegas itu seperti sebuah sihir. Kalian tahu, terkadang bertemu dengan orang terlalu baik seperti Zidane Hamizan membuat resah saja. Zelda yang biasa disapa Zee tidak ingin menyalahartikan perhatian laki-laki satu itu menjadi sebuah ketertarikan. Namun, Zelda bertani bertaruh bahwa apa yang dilakukan Zidane selama ini sudah jelas merupakan bentuk ketertarikan! Semua pasti akan setuju dengannya.\r\nBagi Zelda, Zidane adalah pangeran bersayap putih yang dapat membawanya terbang jauh dan diselimuti kehangatan. Bagi Zidane, Zelda adalah peri cantik paling bersinar yang ingin terus ia lindungi. Mereka begitu indah sampai akhirnya masa lalu Zidane yang disembunyikannya selama ini membuat Zelda kehilangan keyakinan. Tidak, Zelda tidak ingin berhubungan dengan seseorang yang belum selesai dengan masa lalunya.\r\nJadi, apakah Zidane benar-benar memegang ucapannya untuk tidak meninggalkan Zelda, bahkan demi masa lalunya? Atau pada akhirnya justru Zelda sendiri yang memaksa Zidane untuk pergi?', 256, 9781716121470, '2022-01-01', 'Akad', 'Washashira', 'Romance', 1, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nisp` int(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nisp`, `pass`, `admin`) VALUES
(1, 'Zalfa Rania Hawa', 202020419, '$2y$10$YK3sXzRFwBheBi8CEAOMN.jEHrE/8o5N0fX3rQ5OP84bJx9nMH3Ke', 1),
(2, 'Ryan Faiz Sanie', 202020410, '$2y$10$UfVyQwaZgjEQ7WGsfocaee0xdBQZ9Iccbhdf.IAZSbhZF9pQYBSiu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
