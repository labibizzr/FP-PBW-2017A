-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 05:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `penulis`, `judul`, `slug`, `tanggal`, `isi`, `gambar`) VALUES
(7, 'sasa0', 'Warta Budaya: Pengaruh Modernisasi terhadap Kehidupan Suku Baduy', 'Warta-Budaya-Pengaruh-Modernisasi-terhadap-Kehidupan-Suku-Baduy', '2017-02-01', '<p>Bandung, km.itb.ac.id &ndash; Indonesia merupakan negara yang kaya dengan sumber daya alam dan budaya. Berbagai macam suku dan budaya beserta dengan kekayaan alamnya hidup berdampingan di Indonesia. Negara kepulauan terbesar di dunia ini dihuni berbagai macam suku yang menetap di segala pelosok nusantara. Kearifan lokal beserta adat istiadatnya menjaga kelestarian alam Indonesia sehingga dapat terjaga dengan baik dan bersinergi dengan alam.</p>\r\n<p>Suku Baduy merupakan salah satu diantara banyaknya suku yang ada di Indonesia. Suku etnis Sunda ini hidup bersama alam di Pegunungan Kendeng, Desa Kanekes, Kecamatan Leuwidamar, Kabupaten Lebak, Banten.</p>\r\n<p>Suku Baduy terbagi dalam dua golongan yang disebut dengan Baduy Dalam dan Baduy Luar. Perbedaan yang paling mendasar dari kedua suku ini adalah dalam menjalankan pikukuh atau aturan adat saat pelaksanaannya. Jika Baduy Dalam masih memegang teguh adat dan menjalankan aturan adat dengan baik, sebaliknya tidak dengan saudaranya Baduy Luar.</p>\r\n<p>Masyarakat Baduy Luar sudah terpengaruh oleh budaya modern. Penggunaan barang elektronik tertentu dan sabun diperkenankan oleh ketua adat yang disebut Jaro dalam menjalankan aktivitas sehari-hari. Selain itu, Suku Baduy Luar juga menerima tamu yang berasal dari luar Indonesia, mereka diperbolehkan mengunjungi hingga menginap di salah satu rumah warga Suku Baduy Luar.</p>\r\n<p>Mata pencaharian mayarakat Suku Baduy umumnya berladang dan bertani. Alamnya yang subur dan berlimpah mempermudah suku ini dalam menghasilkan kebutuhan sehari-hari. Hasil berupa kopi, padi, dan umbi-umbian menjadi komoditas yang paling sering ditanam oleh masyarakat Baduy. Masyarakat Baduy secara rutin melaksanakan &ldquo;Seba&rdquo; yang masih rutin diadakan setahun sekali dengan mengantarkan hasil bumi (bertani dan berladang) kepada pemimpin daerah yaitu Gubernur Banten. Diharapkan dapat terciptanya interaksi yang erat antara masyarakat Baduy dan penduduk luar dari upacara &ldquo;Seba&rdquo;.</p>\r\n<p>Ketika pekerjaan mereka diladang tidak mencukupi, orang Baduy biasanya berkelana ke kota besar sekitar wilayah Suku Baduy dengan berjalan kaki untuk menjual hasil produksi mereka, seperti madu dan kerajinan tangan. Perdagangan yang semula hanya dilakukan dengan barter kini sudah menggunakan mata uang rupiah.</p>\r\n<p>Wilayah Suku Baduy telah ditetapkan sebagai cagar budaya oleh pemerintah daerah Lebak pada tahun 1990. Kawasan yang melintas dari Desa Ciboleger hingga Rangkasbitung ini telah menjadi tempat bermukimnya Suku Baduy yang menjadi suku asli Provinsi Banten.</p>\r\n<p>Berhubungan dengan kebudayaan Suku Baduy beserta adat istiadatnya, kearifan lokal yang dimiliki oleh Suku Baduy kini mulai terancam oleh modernisasi. Menurut Kamus Besar Bahasa Indonesia, modernisasi adalah proses pergeseran sikap dan mentalitas sebagai warga masyarakat untuk dapat hidup sesuai dengan tuntutan masa kini. Perkembangan zaman dan globalisasi menjadi faktor utama penyebab munculnya modernisasi.</p>\r\n<p>Kesadaran akan nilai dan norma sosial yang dianut Suku Baduy dalam setiap keluarga pun semakin memudar dengan munculnya teknologi modern. Sebagai contoh, masyarakat baduy luar kini mulai menggunakan sabun mandi dan sabun cuci dalam kesehariannya. Padahal dahulu penggunaan sabun atau bahan kimia lainnya tidak diperbolehkan dalam adat istiadat Suku Baduy. Walaupun Suku Baduy masih memegang teguh budaya &ldquo;berjalan kaki&rdquo;, tetapi penggunaan teknologi modern dalam kehidupan sehari-hari yang telah memasuki masyarakat masyarakat Baduy Luar dapat mengancam eksistensi adat istiadat Suku Baduy.</p>\r\n<p>Perubahan yang dialami Suku Baduy tidak lepas dari pengawasan pemuka adat yang selalu berusaha mengembalikan kehidupan masyarakat agar sesuai dengan pikukuh. Peralihan yang dilakukan oleh beberapa anggota keluarga pada masyarakat seperti mulainya penggunaan obat, sabun, ataupun radio menunjukkan adanya keraguan dalam masyarakat Suku Baduy mengenai cara hidup yang sudah berlaku berdasarkan adat. Akulturasi budaya dalam masyarakat Suku Baduy tampaknya telah beralih menjadi tahap asimilasi. Dapat disimpulkan bahwa perubahan-perubahan yang terjadi pada Suku Baduy berlangsung menurut proses adaptasi dalam jangka waktu yang sangat panjang (relatif lama).</p>', '/assets/img_upload/Berita/20791592acc1f0533c.jpg'),
(8, 'sasa0', 'Warta Budaya: Berkepribadian dalam Kebudayaan melalui “Raboedaya”', 'Warta-Budaya-Berkepribadian-dalam-Kebudayaan-melalui-Raboedaya', '2017-05-12', '<p>Bandung,itb.ac.id &ndash; Apa yang Anda pikirkan ketika mendengar kata &ldquo;Raboedaya&rdquo;? Apakah pikiran Anda langsung teringat dengan memakai batik di hari Rabu? Jika iya, Anda tidak salah tetapi sebenarnya makna gerakan &ldquo;Raboedaya&rdquo; lebih luas dari hal tersebut. Gerakan &ldquo;Raboedaya&rdquo; dimaksudkan untuk membiasakan Kita agar berbudaya dalam kehidupan sehari-hari. Apa sebenarnya yang dimaksud dengan berbudaya? Maksudnya adalah mau dan bisa untuk menerapkan nilai budaya dalam tingkah laku Kita sehari-hari. Banyak cara yang bisa Kita lakukan untuk berbudaya, yaitu dengan memakai sandang nusantara, berbahasa daerah, memakan kuliner nusantara, memperkaya ilmu pengetahuan mengenai budaya bangsa, ataupun berperilaku sesuai dengan norma dan nilai budaya. Masih terdapat banyak cara lainnya yang dapat Kita lakukan untuk berbudaya. Dengan demikian, bagaimana Kita berbudaya tergantung dengan bagaimana Kita memaknai hal tersebut.<br /><br /></p>\r\n<p>Sesungguhnya gerakan &ldquo;Raboedaya&rdquo; di Institut Teknologi Bandung sudah ada sejak beberapa tahun lalu. Akan tetapi, dahulu gerakannya bernama &ldquo;Reboedaya&rdquo;. Makna dari &ldquo;Reboedaya&rdquo; adalah kembali berbudaya sehingga diharapkan dengan gerakan tersebut Kita semua bisa kembali mengetahui, memahami, dan mencintai budaya bangsa Kita. Hari Rabu sengaja dipilih sebagai hari gerakan &ldquo;Reboedaya&rdquo; untuk sekaligus mendukung gerakan &ldquo;Rebo Nyunda&rdquo; yang dicanangkan oleh Pemerintah Kota Bandung. Gerakan &ldquo;Rebo Nyunda&rdquo; bertujuan untuk melestarikan budaya Sunda. Cara yang paling umum dilakukan adalah dengan berbahasa sunda atau memakai ikat sunda di setiap &ldquo;Rebo Nyunda&rdquo;. Di Institut Teknologi Bandung, cara yang biasanya dilakukan untuk gerakan &ldquo;Reboedaya&rdquo; adalah dengan memakai batik. Kesamaan dari gerakan &ldquo;Reboedaya&rdquo; dan &ldquo;Rebo Nyunda&rdquo; adalah tujuannya, yaitu untuk melestarikan budaya Indonesia. Dengan demikian, diharapkan Kita semua bisa ikut serta mendukung gerakan &ldquo;Rebo Nyunda&rdquo; dan juga &ldquo;Raboedaya&rdquo; dengan berbudaya di setiap hari Rabu.</p>\r\n<p>Saat ini, gerakan &ldquo;Reboedaya&rdquo; telah berganti nama menjadi &ldquo;Raboedaya&rdquo;. Pergantian nama tersebut karena gerakan &ldquo;Reboedaya&rdquo; sudah dianggap berhasil mengembalikan Kita untuk berbudaya sehingga saat ini &ldquo;Raboedaya&rdquo; lebih dimaksudkan untuk membiasakan berbudaya di setiap hari Rabu. Tujuan utama dari gerakan &ldquo;Raboedaya&rdquo; adalah agar Kita sebagai mahasiswa yang merupakan generasi penerus bangsa mau dan bisa untuk &ldquo;Berkepribadian dalam Kebudayaan&rdquo;. &ldquo;Berkepribadian dalam Kebudayaan&rdquo; yang merupakan Trisakti dari Soekarno dijadikan sebagai tujuan utama agar Kita bisa memiliki kepribadian yang menjunjung tinggi nilai luhur budaya bangsa Indonesia. Dengan &ldquo;Berkepribadian dalam kebudayaan&rdquo;, Kita diharapkan dapat mempertahankan jati diri sebagai bangsa Indonesia karena budaya adalah bagian dari peradaban bangsa yang telah berkembang dari zaman ke zaman.<br /><br />Kita sebagai bagian dari bangsa Indonesia seharusnya bangga terhadap budaya bangsa Kita sendiri. Budaya bangsa Indonesia perlu dijaga dan dilestarikan agar jati diri bangsa Indonesia bisa selalu dipertahankan. Bukan hanya jati diri bangsa Indonesia, melainkan juga jati diri Kita sebagai rakyat Indonesia. Manfaatnya akan mulai terasa dari dalam diri Kita masing-masing karena budaya merefleksikan bagaimana sikap Kita dalam kehidupan sehari-hari. Oleh karena itu, mulailah untuk mau dan bisa mencintai budaya luhur bangsa Indonesia sebagai bagian dari kehidupan Kita. Mari bangga berakar budaya bangsa, mari bangga menjadi Indonesia.</p>\r\n<p>&nbsp;</p>', '/assets/img_upload/Berita/6908592accb0b975c.jpg'),
(9, 'sasa0', 'Warta Budaya: “Wayang”, Mahakarya Dunia Khas Nusantara', 'Warta-Budaya-Wayang-Mahakarya-Dunia-Khas-Nusantara', '2017-05-28', '<p>Pada 7 November 2003, UNESCO menobatkan Wayang sebagai <em>Masterpiece of Oral and Intangible Heritage of Humanity </em>atau warisan mahakarya dunia yang tak ternilai dalam seni bertutur asli Indonesia. Sejak saat itu tanggal 7 November diperingati sebagai hari Wayang.</p>\r\n<p>Wayang disinyalir telah hadir sejak 1500 tahun sebelum masehi dan dilahirkan oleh nenek moyang suku Jawa. Pada masa itu, wayang diperkirakan hanya terbuat dari rerumputan yang diikat sehingga bentuknya masih sangat sederhana. Pada perkembangannya, penggunaan bahan-bahan lain dalam pembuatan wayang mulai dilakukan. Yakni menggunakan kulit binatang buruan, kulit kayu, bahkan hingga menggunakan orang sungguhan sebagai pemeran ceritanya.</p>\r\n<p>Dalam pementasan ada yang disebut <em>lakon, lakon </em>adalah jalan cerita yang dimainkan dalam pertunjukan wayang. Ada 2 <em>lakon </em>yang terkenal yakni Mahabrata dan Ramayana yang keduanya merupakan pengaruh dari zaman kerajaan Hindu-Budha. Selain pada zaman kerajaan Hindu-Budha wayang juga menjadi salah satu media penyebaran agama Islam di nusantara. Pada masa itu Sunan Kalijaga menjadikan wayang sebagai media berdakwah untuk menarik perhatian mayoritas pemeluk agama Hindu dan Budha agar mau mempelajari Islam dengan lebih dalam.</p>', '/assets/img_upload/Berita/19096592accdc70d3f.jpg'),
(10, 'sasa0', 'Lorem Ipsum', 'Lorem-Ipsum', '2017-05-28', '<div id="lipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur vel massa vel ullamcorper. Donec volutpat at tortor nec sagittis. Nam malesuada, quam non interdum vulputate, orci leo commodo dui, venenatis ornare risus erat id felis. Nam orci tellus, rutrum quis quam eu, interdum tristique urna. Aliquam quis suscipit tortor, id tristique orci. Morbi placerat vulputate libero a gravida. Nullam vulputate eget dui nec lobortis. Maecenas maximus mi massa, a tincidunt augue rutrum sit amet. Ut volutpat nulla eget purus tempor, nec malesuada leo ornare. Aenean consectetur sapien ut nulla viverra, ut dictum dui feugiat.<br /><br />Aliquam congue ipsum vel molestie condimentum. Quisque euismod odio erat. Maecenas sagittis efficitur sem, non porttitor dui rutrum in. Nam eu velit nunc. Vestibulum viverra euismod elit vitae vehicula. Sed commodo pulvinar turpis, ac iaculis mauris pulvinar vel. Sed dapibus mi mollis magna elementum consectetur. Praesent ac quam odio. Aliquam feugiat ligula lectus, id scelerisque ipsum commodo id. Aenean et leo at augue fermentum maximus et in enim. Morbi mattis tincidunt risus id feugiat. Vestibulum convallis ac eros et auctor. Donec pretium justo justo, nec ultrices nibh rutrum in. Nam pretium eleifend odio ut egestas. Ut sed turpis at tortor laoreet ultrices.<br /><br />Pellentesque et lacus lorem. Sed dignissim risus dui, quis malesuada massa dictum nec. Proin placerat ante lorem, nec tristique tortor placerat eget. Maecenas pharetra dolor arcu, eu hendrerit neque convallis et. Maecenas commodo urna dignissim, auctor ex ut, venenatis lectus. Phasellus sed velit mauris. Pellentesque at nunc quis urna molestie sodales vitae at neque. Fusce ac volutpat turpis, ac fermentum mauris. Vivamus quis facilisis augue. Ut accumsan et felis id egestas.<br /><br />Curabitur suscipit eros at facilisis blandit. Ut mollis facilisis condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed a lectus et odio feugiat mollis eget vel nisl. Suspendisse ultricies sapien turpis, a dignissim nisi condimentum sed. Vivamus laoreet efficitur purus sed malesuada. Sed dignissim accumsan diam, vel maximus risus fermentum non. Proin eget volutpat quam. Aenean id sapien leo. Donec vel metus sed leo imperdiet ultrices. Etiam aliquet lorem non eleifend accumsan.<br /><br />Pellentesque et nulla et lacus auctor vestibulum ut volutpat velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vestibulum ultrices odio, sit amet viverra felis rhoncus vel. Praesent blandit tristique tellus id interdum. Sed rutrum enim nec velit viverra, nec ultrices dui volutpat. Phasellus condimentum quis lacus non posuere. Morbi aliquam erat elit, eu aliquam nunc fermentum in. Cras luctus nibh non ultrices rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque condimentum commodo magna, et interdum tellus dictum a. Vivamus eu leo quis leo interdum tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate vel est sed pharetra.</div>', '/assets/img_upload/Berita/17137592acd2c6ffdf.jpg'),
(11, 'sasa0', 'Lorem Ipsum 1', 'Lorem-Ipsum-1', '2017-05-28', '<div id="lipsum">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur vel massa vel ullamcorper. Donec volutpat at tortor nec sagittis. Nam malesuada, quam non interdum vulputate, orci leo commodo dui, venenatis ornare risus erat id felis. Nam orci tellus, rutrum quis quam eu, interdum tristique urna. Aliquam quis suscipit tortor, id tristique orci. Morbi placerat vulputate libero a gravida. Nullam vulputate eget dui nec lobortis. Maecenas maximus mi massa, a tincidunt augue rutrum sit amet. Ut volutpat nulla eget purus tempor, nec malesuada leo ornare. Aenean consectetur sapien ut nulla viverra, ut dictum dui feugiat.</p>\r\n<p>Aliquam congue ipsum vel molestie condimentum. Quisque euismod odio erat. Maecenas sagittis efficitur sem, non porttitor dui rutrum in. Nam eu velit nunc. Vestibulum viverra euismod elit vitae vehicula. Sed commodo pulvinar turpis, ac iaculis mauris pulvinar vel. Sed dapibus mi mollis magna elementum consectetur. Praesent ac quam odio. Aliquam feugiat ligula lectus, id scelerisque ipsum commodo id. Aenean et leo at augue fermentum maximus et in enim. Morbi mattis tincidunt risus id feugiat. Vestibulum convallis ac eros et auctor. Donec pretium justo justo, nec ultrices nibh rutrum in. Nam pretium eleifend odio ut egestas. Ut sed turpis at tortor laoreet ultrices.</p>\r\n<p>Pellentesque et lacus lorem. Sed dignissim risus dui, quis malesuada massa dictum nec. Proin placerat ante lorem, nec tristique tortor placerat eget. Maecenas pharetra dolor arcu, eu hendrerit neque convallis et. Maecenas commodo urna dignissim, auctor ex ut, venenatis lectus. Phasellus sed velit mauris. Pellentesque at nunc quis urna molestie sodales vitae at neque. Fusce ac volutpat turpis, ac fermentum mauris. Vivamus quis facilisis augue. Ut accumsan et felis id egestas.</p>\r\n<p>Curabitur suscipit eros at facilisis blandit. Ut mollis facilisis condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed a lectus et odio feugiat mollis eget vel nisl. Suspendisse ultricies sapien turpis, a dignissim nisi condimentum sed. Vivamus laoreet efficitur purus sed malesuada. Sed dignissim accumsan diam, vel maximus risus fermentum non. Proin eget volutpat quam. Aenean id sapien leo. Donec vel metus sed leo imperdiet ultrices. Etiam aliquet lorem non eleifend accumsan.</p>\r\n<p>Pellentesque et nulla et lacus auctor vestibulum ut volutpat velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vestibulum ultrices odio, sit amet viverra felis rhoncus vel. Praesent blandit tristique tellus id interdum. Sed rutrum enim nec velit viverra, nec ultrices dui volutpat. Phasellus condimentum quis lacus non posuere. Morbi aliquam erat elit, eu aliquam nunc fermentum in. Cras luctus nibh non ultrices rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque condimentum commodo magna, et interdum tellus dictum a. Vivamus eu leo quis leo interdum tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate vel est sed pharetra.</p>\r\n</div>', '/assets/img_upload/Berita/7894592acd6fc5e4b.png'),
(12, 'sasa0', 'Lorem Ipsum 2', 'Lorem-Ipsum-2', '2017-05-28', '<div id="lipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur vel massa vel ullamcorper. Donec volutpat at tortor nec sagittis. Nam malesuada, quam non interdum vulputate, orci leo commodo dui, venenatis ornare risus erat id felis. Nam orci tellus, rutrum quis quam eu, interdum tristique urna. Aliquam quis suscipit tortor, id tristique orci. Morbi placerat vulputate libero a gravida. Nullam vulputate eget dui nec lobortis. Maecenas maximus mi massa, a tincidunt augue rutrum sit amet. Ut volutpat nulla eget purus tempor, nec malesuada leo ornare. Aenean consectetur sapien ut nulla viverra, ut dictum dui feugiat.<br /><br />Aliquam congue ipsum vel molestie condimentum. Quisque euismod odio erat. Maecenas sagittis efficitur sem, non porttitor dui rutrum in. Nam eu velit nunc. Vestibulum viverra euismod elit vitae vehicula. Sed commodo pulvinar turpis, ac iaculis mauris pulvinar vel. Sed dapibus mi mollis magna elementum consectetur. Praesent ac quam odio. Aliquam feugiat ligula lectus, id scelerisque ipsum commodo id. Aenean et leo at augue fermentum maximus et in enim. Morbi mattis tincidunt risus id feugiat. Vestibulum convallis ac eros et auctor. Donec pretium justo justo, nec ultrices nibh rutrum in. Nam pretium eleifend odio ut egestas. Ut sed turpis at tortor laoreet ultrices.<br /><br />Pellentesque et lacus lorem. Sed dignissim risus dui, quis malesuada massa dictum nec. Proin placerat ante lorem, nec tristique tortor placerat eget. Maecenas pharetra dolor arcu, eu hendrerit neque convallis et. Maecenas commodo urna dignissim, auctor ex ut, venenatis lectus. Phasellus sed velit mauris. Pellentesque at nunc quis urna molestie sodales vitae at neque. Fusce ac volutpat turpis, ac fermentum mauris. Vivamus quis facilisis augue. Ut accumsan et felis id egestas.<br /><br />Curabitur suscipit eros at facilisis blandit. Ut mollis facilisis condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed a lectus et odio feugiat mollis eget vel nisl. Suspendisse ultricies sapien turpis, a dignissim nisi condimentum sed. Vivamus laoreet efficitur purus sed malesuada. Sed dignissim accumsan diam, vel maximus risus fermentum non. Proin eget volutpat quam. Aenean id sapien leo. Donec vel metus sed leo imperdiet ultrices. Etiam aliquet lorem non eleifend accumsan.<br /><br />Pellentesque et nulla et lacus auctor vestibulum ut volutpat velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vestibulum ultrices odio, sit amet viverra felis rhoncus vel. Praesent blandit tristique tellus id interdum. Sed rutrum enim nec velit viverra, nec ultrices dui volutpat. Phasellus condimentum quis lacus non posuere. Morbi aliquam erat elit, eu aliquam nunc fermentum in. Cras luctus nibh non ultrices rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque condimentum commodo magna, et interdum tellus dictum a. Vivamus eu leo quis leo interdum tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate vel est sed pharetra.</div>', '/assets/img_upload/Berita/1367592acd7fa8d17.png');

-- --------------------------------------------------------

--
-- Table structure for table `desc_kepengurusan`
--

CREATE TABLE `desc_kepengurusan` (
  `id` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `organigram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desc_kepengurusan`
--

INSERT INTO `desc_kepengurusan` (`id`, `deskripsi`, `organigram`) VALUES
(1, '<div id="lipsum">\r\n<p>Sed vehicula magna urna. Etiam commodo massa lectus. In hac habitasse platea dictumst. Quisque egestas diam dictum bibendum iaculis. Proin ornare arcu ex, sit amet ultrices eros vulputate ac. Etiam ac faucibus diam. Praesent sed metus tellus. Vivamus id sodales nulla, et consequat felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ullamcorper mattis eros nec placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n<p>Suspendisse id augue auctor mi vestibulum fringilla sit amet eget diam. Mauris nec sollicitudin leo. Nullam hendrerit scelerisque auctor. Aliquam bibendum dolor in nisl vestibulum, eu ultrices nibh mollis. Etiam sed tellus risus. Vestibulum pharetra tristique orci quis porta. Nam non dolor finibus, volutpat lectus eget, fermentum erat. Proin aliquet ullamcorper augue, quis ultrices nulla tempor in. Morbi sollicitudin, nunc ac sollicitudin elementum, ex felis elementum justo, sed dignissim dolor augue ac nunc. Fusce est dui, pretium vel ligula nec, dapibus dignissim dui. Vestibulum ante sem, condimentum in mollis quis, accumsan vel leo. Donec hendrerit metus ex, eget rhoncus tellus lobortis vel. Vestibulum pulvinar tortor nec nisl pharetra, id tempus nunc ultrices. Vestibulum vel purus ipsum. Pellentesque commodo id turpis id egestas. Integer molestie finibus enim sit amet rutrum.</p>\r\n<p>Maecenas mollis velit eu nisi dignissim dictum. Nullam eget risus odio. Pellentesque non odio sit amet ex rhoncus volutpat et non massa. In pellentesque, ex sit amet porttitor condimentum, eros risus ultricies neque, commodo imperdiet enim mauris sit amet dui. Mauris fringilla dignissim massa, nec tincidunt arcu efficitur et. Pellentesque sed odio vel mauris tristique posuere. Morbi sit amet risus ultrices ante ultrices aliquet et ut quam. Proin vel mauris hendrerit, sollicitudin purus a, congue enim. In sit amet tempus est, eget semper justo. Pellentesque faucibus accumsan tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam vitae nisl ut est fermentum varius. Donec ac bibendum dolor. Duis in massa sit amet metus laoreet faucibus vitae sit amet ipsum. Nam pellentesque ultrices erat eu pellentesque.</p>\r\n<p>Vivamus viverra velit id viverra congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus fringilla vehicula nulla, a sagittis dolor aliquet ut. Morbi eu dolor at quam blandit finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis ex, blandit vel aliquet sed, pharetra a metus. Donec id justo sit amet mi malesuada maximus.</p>\r\n<p>Donec quam velit, consequat vehicula elit nec, maximus semper neque. Donec vel accumsan dui. Aliquam placerat sollicitudin risus eu viverra. Cras elementum risus eget semper blandit. Sed vel justo dui. Aenean metus tellus, convallis quis nibh vitae, interdum ultrices ipsum. Morbi euismod ex ut nisi dapibus, faucibus luctus augue accumsan. Vestibulum eu semper nisl.</p>\r\n</div>', '/assets/img_upload/Organigram/77275925b2e2a951e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_home`
--

CREATE TABLE `gambar_home` (
  `id` varchar(255) NOT NULL,
  `title_caption` varchar(255) NOT NULL,
  `isi_caption` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_home`
--

INSERT INTO `gambar_home` (`id`, `title_caption`, `isi_caption`, `gambar`) VALUES
('1', 'Himatika Unair jaya', 'Serunya bersama himatika unair', '/assets/img_upload/Home/20661592a7ccf9ef0d.jpg'),
('2', 'SERU SERU SERU BERSAMA HIMATIKA UNAIR', 'SERUUUU', '/assets/img_upload/Home/8175592a7cf60db9a.jpg'),
('3', 'HIMATIKA UNAIR SO SERU', 'YAAAAAAAAAAAAAAY', '/assets/img_upload/Home/2114592a7d02c9e45.jpg'),
('4', '', '', ''),
('5', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `idtag` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('admin', '$2y$10$Cds.r0qsELyvV5AfRmKWJeXyoFh8ab7F1l7ZcIHJPU0pkP2jCj1u2', 'labibizzr@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `desc_kepengurusan`
--
ALTER TABLE `desc_kepengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar_home`
--
ALTER TABLE `gambar_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`idtag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `idtag` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
