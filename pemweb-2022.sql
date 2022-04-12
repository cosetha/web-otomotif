-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2022 pada 17.21
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb-2022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `01-artikel`
--

CREATE TABLE `01-artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `creator` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `01-artikel`
--

INSERT INTO `01-artikel` (`id_artikel`, `judul`, `deskripsi`, `tanggal`, `creator`, `thumbnail`) VALUES
(1, 'SUV Car', '<p>SUV adalah singkatan dari Sport Utility Vehicle. Sesuai dengan namanya, SUV adalah termasuk mobil sport. Dengan demikian, baik dari bodi mobil, kekuatan, dan kapasitas mesin disesuaikan dengan kebutuhan sebagai mobil sport.</p>\r\n<h3>Kelebihan SUV Car</h3><p>SUV adalah singkatan dari Sport Utility Vehicle atau terjemahan bebasnya Kendaraan Utilitas Sport. Tipe mobil satu ini merupakan kombinasi dari dua tipe mobil, tipe penumpang dan off-road. Dengan perpaduan ini, SUV bukan cuma bisa dikendarai di jalanan perkotaan biasa, tapi juga medan berat seperti jalanan berbatu.</p>\r\n<p>Ciri lain dari SUV adalah penggunaan sistem 4WD atau four wheels drive. Dengan sistem ini, keempat roda SUV dibekali dengan sistem penggerak mandiri. Mobil pun mendapat traksi yang mumpuni untuk melibas medan yang sulit. Meski begitu, ada juga SUV yang tidak menggunakan sistem 4WD. Biasanya, SUV tanpa 4WD disebut small SUV. </p>\r\n', '2022-04-11', 'Amin Dul', 'images/c-1.jpg'),
(2, 'Sports Car', '<p>Mobil sport adalah mobil yang mengutamakan pengendalian dan performanya. Pada umumnya mobil sport berbentuk coupe 2 pintu, tetapi ada pula yang merupakan versi kemampuan tinggi dari sedan atau hatchback Bentuk coupe sendiri ada yang benar-benar 2 pintu, dan ada yang liftback 3 pintu.</p>\r\n<h3>Kegunaan Sports Car</h3><p>Berbagai macam alasan mengapa orang membeli mobil sport. Yang paling umum adalah untuk mendapatkan sensasi menyetir yang lebih menyenangkan dari mobil biasa. Beberapa alasan lain yang lebih jarang seperti berpamer, atau yang ilegal, balapan di jalan raya. Adapun yang membeli mobil sedan mewah dengan paket sport untuk mendapat pengendalian yang lebih baik seperti BMW M5 F90.</p>\r\n', '2022-04-12', 'Astani', 'images/c-2.jpg'),
(3, 'Muscle Car', '<p> Muscle car adalah varian mobil dengan performa mesin yang tinggi dan desain yang unik. Istilah ini pertama kali  diperkenalkan di Amerika Serikat. Sekarang ini, muscle cartelah menyebar ke seluruh dunia. Dalam artikel ini akandibahas jajaran muscle car paling diminati meskipun telah menjadi mobil langka. Para penggemar muscle car biasaya menyukai mobil ini karena modelnya yang klasik dan terkesan retro.</p>\r\n<h3>Kelebihan Muscle Car</h3>\r\n<p>Penampilan fisik mobil yang satu ini umumnya berbentuk sedan dengan ukuran sedang dengan dua pintu dan memiliki mesin V8  penggerak roda belakang. Beberapa brand yang memproduksi seri mobil ini di antaranya adalah Ford,  Chevrolet, Chrysler dan Dodge. Muscle car yang pertama kali diproduksi di dunia adalah Oldsmobile Rocket 88 yang  di-launch pada tahun 1949. </p>\r\n', '2022-04-12', 'Kinghuan', 'images/c-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `01-artikel`
--
ALTER TABLE `01-artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `01-artikel`
--
ALTER TABLE `01-artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
