-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2021 pada 01.31
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(82, '3a', '098309898', 'ad', 'ads', '5bfae26179629.jpg'),
(85, 'renyke', '043984098', 'khayra.com', 'manajemen', '5bfbb1a1bc9f3.jpg'),
(86, 'tony', '943098098', 'woko.com', 'agroteknologi', '5bfbb1fa8f36f.jpg'),
(87, 'narys palihama', '094098098', 'naryse.com', 'teknik bahasa mesin', '5bfced4d992c3.jpg'),
(91, 'naryjdsha', '1777888', 'ronal.com', 'tekink informatika', '5d12597ae7683.jpg'),
(92, 'donatus palyama', '161111999', 'yustinaaraa1@gmail.com', 'teknik mesin', '5d92dce2b7ed7.jpg'),
(94, 'ddfds', '33434343', 'sdsd', 'sdvdfs', '5dfc71a0a8fde.jpg'),
(95, 'ajfdja', '8598', 'jfajdh', 'jhdkah', '60369cb494856.jpg'),
(96, 'Array', '65', 'adf', 'da', '60369cfbae028.jpg'),
(97, 'Array', 'Array', 'Array', 'Array', '60369d5f71411.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
