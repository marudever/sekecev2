-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2020 pada 23.42
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekece_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `isi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `freelancer` int(11) NOT NULL,
  `dilihat` int(11) NOT NULL DEFAULT 0,
  `suka` int(11) NOT NULL DEFAULT 0,
  `tdk_suka` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `gambar`, `harga`, `isi`, `kategori`, `tag`, `tanggal`, `freelancer`, `dilihat`, `suka`, `tdk_suka`, `status`) VALUES
(1, 'Service A', 'service-a', 'nasa_(japanese_type)1.jpg', 0, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nulla diam, fringilla viverra cursus id, porta id sem. Sed consectetur convallis consequat. Integer vehicula, dui finibus placerat interdum, tellus mauris pellentesque ex, quis ornare purus orci ac leo. Nam eget metus vitae mi feugiat mollis. Nam vitae malesuada orci. Phasellus hendrerit magna at dolor vestibulum, ac fermentum mi facilisis. Ut consectetur sem vel est auctor, eget aliquam metus feugiat. Phasellus vitae ligula ut nisl placerat luctus sed ut nunc. Phasellus at metus vel quam sodales consectetur. Etiam leo leo, viverra sit amet commodo in, consectetur in metus. Quisque et viverra neque. Etiam quis rhoncus massa, et ultrices tortor.</p>\r\n\r\n<p>Aliquam a sodales nulla, at vestibulum libero. Praesent tellus erat, fringilla vel mi sit amet, aliquet laoreet odio. Cras placerat turpis eget tincidunt vehicula. Ut in faucibus dui, ac ultricies turpis. Fusce iaculis dolor urna, congue convallis elit tempus nec. Duis nec erat convallis, blandit dolor sit amet, venenatis ipsum. Pellentesque euismod elit et nibh pellentesque dictum ac at sapien.</p>\r\n', 4, 'logo', '2020-11-01', 1, 1, 0, 0, 1),
(2, 'Logo A', 'logo-a', 'wp1904061-developer-wallpapers.png', 0, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare leo lacus, eget tempus ipsum volutpat at. In faucibus lacus risus, ut feugiat orci facilisis vel. Vivamus tincidunt, ex ac laoreet venenatis, risus lacus blandit mauris, mattis elementum erat ante ac metus. Ut ac dolor libero. Phasellus in placerat dui. Pellentesque pellentesque in odio vel tempor. In at massa at est iaculis sodales at vestibulum ante. Nulla augue nibh, eleifend a pellentesque sagittis, gravida quis eros. Pellentesque eu mattis lacus. Ut sit amet viverra purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vulputate, leo nec egestas elementum, lorem nibh dictum sem, nec cursus ligula sapien vitae elit.</p>\r\n\r\n<p>Vivamus eget dignissim eros. Vivamus eget lobortis lectus. Ut id tellus porttitor odio luctus laoreet ullamcorper eu ex. Morbi consequat, purus nec auctor tristique, risus tortor feugiat lacus, quis sagittis nisl arcu sed metus. Nam id quam rhoncus, porttitor mauris eget, ultrices tellus. Ut ut sem rhoncus, interdum eros ut, venenatis diam. Sed malesuada mollis nunc quis consequat. Ut venenatis, erat non tincidunt imperdiet, quam elit faucibus purus, eget vehicula velit mauris eu eros. Nam ut justo ac eros rutrum sollicitudin in sodales quam. Praesent volutpat pretium tellus condimentum congue. Maecenas dapibus arcu vel lacus ullamcorper, ac laoreet neque commodo. Vivamus lacinia malesuada neque nec lobortis. Sed non felis neque. Quisque luctus dapibus ultrices.</p>\r\n\r\n<p>Integer felis neque, venenatis ac ex in, tristique ullamcorper leo. Ut ultricies nisi vitae velit dignissim, placerat ultricies quam mollis. Quisque et magna non nulla ultricies porttitor sed ut est. Ut venenatis ligula pharetra mi laoreet, at molestie ex ultricies. Nulla ultricies non mi sit amet fermentum. Aenean in neque dolor. Cras vel dignissim eros. Etiam non ipsum dapibus leo mattis egestas id eget lacus. Integer faucibus, neque sed suscipit faucibus, dui magna vehicula sem, vulputate molestie dui libero id nisl. Vivamus fringilla orci ut augue bibendum, nec placerat neque aliquet.</p>\r\n\r\n<p>Mauris a nisi ex. Donec eu quam eu ipsum sodales rutrum a sed justo. Aliquam malesuada aliquet consectetur. Sed dapibus lorem vitae erat aliquam tempus. Maecenas hendrerit arcu ac placerat varius. Maecenas eleifend egestas ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam vulputate finibus justo vitae viverra. Donec enim tellus, ullamcorper quis feugiat quis, pellentesque ut sapien. Nam ante enim, lacinia vel pulvinar vitae, dignissim sed felis. Quisque eu risus dignissim, porttitor nisi id, tempor diam. Suspendisse ac mauris euismod, consequat lectus nec, gravida tellus. Aenean ac lorem auctor, sollicitudin felis eu, lacinia nulla. Duis at justo finibus, mollis neque et, molestie felis. Morbi id mollis dolor, et finibus magna. Nunc sit amet enim venenatis sapien eleifend auctor quis in nisl.</p>\r\n\r\n<p>Praesent scelerisque consectetur leo, vel posuere lorem vehicula vitae. Quisque rutrum volutpat facilisis. Nulla facilisi. Nunc at dui at enim pharetra consequat at id libero. Donec eget nunc ac nisi pulvinar consectetur id eu mi. Aenean sagittis eleifend tincidunt. Duis vitae eros convallis, iaculis diam non, imperdiet lacus. Suspendisse rhoncus leo vitae velit porta hendrerit. Sed venenatis sodales nisi, et maximus augue consequat placerat. Nam quis tellus tempor, consequat orci eget, elementum lorem. Aenean cursus dui id lectus vestibulum pharetra. Proin sed diam quis felis placerat sollicitudin. Curabitur mattis varius commodo. Sed iaculis nisl nec semper eleifend. Cras tincidunt eu justo ut eleifend.</p>\r\n', 4, 'logo', '2020-11-01', 2, 0, 0, 0, 1),
(3, 'Push Your Rank', 'push-your-rank', 'KORIGENGI-Ardy_Burst1.png', 100000, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus suscipit ex, at faucibus velit porta imperdiet. Ut ultrices ac dui a tempus. Aliquam ac ligula leo. Morbi varius quam in lacinia tempus. Sed metus lacus, cursus a accumsan nec, sodales eu nisl. Morbi facilisis elit ac dapibus finibus. Suspendisse potenti.</p>\r\n\r\n<figure class=\"easyimage easyimage-side\"><img alt=\"\" src=\"blob:http://localhost/b6fa4798-046d-4159-a160-17a1589aa2c0\" width=\"5333\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Sed ut mollis ex. Suspendisse dictum molestie turpis, non ullamcorper ipsum tempor a. Cras dictum diam vel suscipit pharetra. Ut porttitor varius sem in dignissim. Nulla facilisi. Praesent ac ultrices sapien. Donec nec efficitur mauris, eu hendrerit risus. Morbi venenatis laoreet molestie. Vestibulum sollicitudin consequat enim sed convallis.</p>\r\n\r\n<p>Donec sed metus fermentum, rutrum felis id, blandit risus. Donec semper lectus tristique, sodales tellus porta, consequat augue. Morbi luctus nunc mauris, eget lacinia odio finibus sit amet. Etiam nulla lacus, pharetra tristique orci eget, consectetur efficitur leo. Sed aliquet mauris id fermentum rhoncus. Curabitur ac ante ut ex hendrerit semper et a nisl. In hac habitasse platea dictumst.</p>\r\n\r\n<p>Ut finibus efficitur imperdiet. Duis arcu lectus, dictum a vulputate eu, iaculis et felis. Duis venenatis sapien vitae libero vulputate, convallis aliquam dolor elementum. Aenean non augue efficitur, imperdiet tellus a, tempus purus. Suspendisse viverra urna vel lorem tincidunt dapibus. In eu dui nec tellus consectetur convallis. In erat nisi, iaculis ut accumsan ac, pretium eu diam.</p>\r\n\r\n<p>Nam ac placerat odio. Nulla rhoncus consequat lorem nec hendrerit. Nullam vel arcu ligula. Maecenas odio mauris, pharetra id efficitur in, dapibus non neque. Donec nec cursus metus. Sed vitae justo vel nibh euismod scelerisque. Etiam a mi scelerisque, condimentum magna sit amet, tincidunt odio. Quisque placerat elementum erat, quis consequat nunc euismod sit amet. Quisque eu ornare enim.</p>\r\n\r\n<p>Mauris congue lorem at mauris placerat molestie. Quisque ac augue arcu. In ullamcorper est ac dapibus suscipit. Curabitur pulvinar consectetur magna, quis efficitur libero. Mauris tristique ligula eu semper congue. Curabitur in augue sollicitudin, finibus purus et, sagittis nunc. Nam metus nisi, dapibus et rutrum et, gravida vel nisi. Nunc dignissim finibus libero vel vulputate. In accumsan, massa quis hendrerit venenatis, eros dui rhoncus nisl, sed vestibulum diam dolor a libero. Donec vel nibh sed enim pretium sagittis. Vestibulum at urna maximus, facilisis diam id, finibus mauris. Sed pharetra erat dolor, placerat pellentesque enim consequat eget. Phasellus porta, turpis sed tincidunt semper, quam turpis fermentum mi, at ornare metus augue in tortor.</p>\r\n', 4, 'esport', '2020-11-04', 1, 1, 0, 0, 1),
(4, 'Logo Team', 'logo-team', 'nasa_(japanese_type)2.jpg', 250000, '<p>afafaf</p>\r\n', 4, 'logo', '2020-11-08', 1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `freelancer`
--

CREATE TABLE `freelancer` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `whatsapp` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `freelancer`
--

INSERT INTO `freelancer` (`id`, `id_user`, `tanggal_daftar`, `nama`, `foto`, `deskripsi`, `whatsapp`, `instagram`, `status`) VALUES
(1, 2, '2020-11-01', 'Rays', '', 'Profesional Logo Maker', '', '', 0),
(2, 3, '2020-11-01', 'Amiya', '', 'Hello i\'m amiya, i\'m a logo maker', '', '', 0),
(3, 5, '2020-11-09', 'Mishkiu', '', 'hi guys, i\'m Mishkiu from Japan', '081281126668', 'https://www.instagram.com/rysnee_/', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guest`
--

INSERT INTO `guest` (`id`, `id_user`, `tanggal_daftar`, `nama`, `foto`, `gender`, `status`) VALUES
(1, 1, '2020-11-01', 'raihan', NULL, 0, 1),
(2, 2, '2020-11-01', 'Rays', NULL, 0, 1),
(3, 3, '2020-11-01', 'Amiya', NULL, 0, 1),
(4, 4, '2020-11-06', 'Ayaya', NULL, 0, 1),
(5, 5, '2020-11-09', 'Mishkiu', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Ilustrasi'),
(2, 'Banner'),
(3, 'Poster'),
(4, 'Logo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_artikel`, `id_user`, `tanggal`, `isi`, `status`, `level`) VALUES
(1, 1, 1, '2020-11-01', 'Asik', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_freelancer` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `id_artikel`, `harga`, `id_users`, `id_freelancer`, `status`) VALUES
(3, 3, 100000, 1, 1, 2),
(4, 3, 100000, 4, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE `suka` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suka`
--

INSERT INTO `suka` (`id`, `id_artikel`, `id_user`) VALUES
(1, 1, 3),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdk_suka`
--

CREATE TABLE `tdk_suka` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `status`) VALUES
(1, 'raihan', '356a192b7913b04c54574d18c28d46e6395428ab', 2, 1),
(2, 'rays', '356a192b7913b04c54574d18c28d46e6395428ab', 1, 1),
(3, 'amiya', '356a192b7913b04c54574d18c28d46e6395428ab', 1, 1),
(4, 'ayaya', '356a192b7913b04c54574d18c28d46e6395428ab', 2, 1),
(5, 'mshkiu', '356a192b7913b04c54574d18c28d46e6395428ab', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tdk_suka`
--
ALTER TABLE `tdk_suka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `suka`
--
ALTER TABLE `suka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tdk_suka`
--
ALTER TABLE `tdk_suka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
