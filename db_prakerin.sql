-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2024 pada 05.26
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prakerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul_artikel`, `isi_artikel`, `tanggal`) VALUES
(1, '<a href=\"http://ji\" target=\"_blank\">usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo</a>.', '<p>usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. </p><p>Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, interdum in efficitur at, faucibus nec lorem. </p><p>Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. </p><p>Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. </p><p>Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, interdum in efficitur at, faucibus </p><p>nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, inter</p><p>dum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\nusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, inter</p><p>dum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef\r\n\r\nusce sem dolor, i</p><p>nterdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, inte</p><p>rdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.usce sem dolor, interdum in ef</p>', '14 Juni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `upload_gambar` varchar(255) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `ket_informasi` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `selengkapnya` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `view` varchar(60000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `upload_gambar`, `judul_informasi`, `ket_informasi`, `selengkapnya`, `tanggal`, `view`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/e3lr1ns67ompd5v.jpg\" style=\"width: 100%;\"><br></p>', 'jalur-one-day-service', 'Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu', 'Selengkapnya', '12 april 2023', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/puhs7x84glk_om3.jpg\" style=\"width: 50%;\"><img src=\"http://localhost/prakerin-sisfo/uploads/files/a8lw0tqjr6ude3h.jpg\" style=\"width: 50%;\"><br></p><p><br></p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu&nbsp;Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yuv</p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu<br></p>'),
(2, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/i2c85f4al9hn1et.jpg\" style=\"width: 100%;\"><br></p>', '', '', 'Selengkapnya', '', ''),
(3, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/zpqjo31rc27ltxy.jpg\" style=\"width: 100%;\"><br></p>', '', '', 'Selengkapnya', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_utama`
--

CREATE TABLE `berita_utama` (
  `id` int(11) NOT NULL,
  `upload1` varchar(255) NOT NULL,
  `tanggal1` varchar(255) NOT NULL,
  `judul1` varchar(255) NOT NULL,
  `caption1` varchar(255) NOT NULL,
  `upload2` varchar(255) NOT NULL,
  `tanggal2` varchar(255) NOT NULL,
  `judul2` varchar(255) NOT NULL,
  `caption2` varchar(255) NOT NULL,
  `upload3` varchar(255) NOT NULL,
  `tanggal3` varchar(255) NOT NULL,
  `judul3` varchar(255) NOT NULL,
  `caption3` varchar(255) NOT NULL,
  `upload4` varchar(255) NOT NULL,
  `tanggal4` varchar(255) NOT NULL,
  `judul4` varchar(255) NOT NULL,
  `caption4` varchar(255) NOT NULL,
  `lihat_selengkapnya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita_utama`
--

INSERT INTO `berita_utama` (`id`, `upload1`, `tanggal1`, `judul1`, `caption1`, `upload2`, `tanggal2`, `judul2`, `caption2`, `upload3`, `tanggal3`, `judul3`, `caption3`, `upload4`, `tanggal4`, `judul4`, `caption4`, `lihat_selengkapnya`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/w0p17rgxskb5ov_.jpg\" style=\"width: 100%;\"><br></p>', '09 Juni 2014', '09 Juni 2014', 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/x_jesryu5fdnpcb.jpg\" style=\"width: 100%;\"><br></p>', '09 Juni 2014', 'Those Other College Expenses You Aren&#39;t Thinking About', 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/h13c2_7ltmy8b4u.jpg\" style=\"width: 100%;\"><br></p>', '09 Juni 2014', 'Those Other College Expenses You Aren&#39;t Thinking About', 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/2ks_qvodcz8jpar.jpg\" style=\"width: 100%;\"><br></p>', '09 Juni 2014', 'Those Other College Expenses You Aren&#39;t Thinking About', 'Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from', 'Lihat selengkapnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `body_berita`
--

CREATE TABLE `body_berita` (
  `id` int(11) NOT NULL,
  `upload_gambar` varchar(30000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` varchar(255) NOT NULL,
  `judul_berita` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi_berita` varchar(2000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `selengkapnya` varchar(30000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `body_berita`
--

INSERT INTO `body_berita` (`id`, `upload_gambar`, `tanggal`, `judul_berita`, `isi_berita`, `selengkapnya`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/jcmgbp684fvwnti.jpg\" style=\"width: 100%;\"><br></p>', '12 april 2023', 'BEST GRADUATION CEREMONY1', 'Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.', 'Selengkapnya'),
(2, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/ndg7frx89cv1kil.jpg\" style=\"width: 100%;\"><br></p>', '12 april 2023', 'BEST GRADUATION CEREMONY3', 'Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.', 'Selengkapnya'),
(3, '<a href=\"http://jj\" target=\"_blank\">Fusce sem dolor, interdum in efficitur at,</a>\r\n\r\n<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/eipkxch5ad4lmq0.jpg\" style=\"font-size: 0.875rem; width: 100%;\"><br></p>', '12 april 2023', '<a href=\"http://localhost/prakerin-sisfo/body_berita\">BEST GRADUATION CEREMONY1</a>', 'Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.', 'Selengkapnya\r\n '),
(4, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/rz48ps501eiomvx.jpg\" style=\"width: 100%;\"><br></p>', '12 april 2023', 'BEST GRADUATION CEREMONY4', '&nbsp;Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.', 'Selengkapnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `body_contact`
--

CREATE TABLE `body_contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `body_contact`
--

INSERT INTO `body_contact` (`id`, `address`, `phone_number`, `email_address`) VALUES
(1, 'Jl. Tersn Jeng Sudirman PO BOX 148 Cimahi', '081345390965', 'infoname@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `body_informasi`
--

CREATE TABLE `body_informasi` (
  `id` int(11) NOT NULL,
  `upload_gambar` varchar(255) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `ket_informasi` varchar(255) NOT NULL,
  `selengkapnya` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `body_informasi`
--

INSERT INTO `body_informasi` (`id`, `upload_gambar`, `judul_informasi`, `ket_informasi`, `selengkapnya`, `tanggal`) VALUES
(2, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/6luf0z4pkvy59w7.jpg\" style=\"width: 100%;\"><br></p>\r\n\r\n<a class=\"image-link\" href=\"events-details.html\" title=\"University Tour 2018\">\r\n																	<i class=\"fa fa-link\"></i>\r\n																</a', 'jalur-one-day-service', 'Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu', '<a href=\"http://localhost/prakerin-sisfo/body_informasi\" target=\"_blank\">Selengkapnya</a>', '12 april 2023'),
(3, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/564o_2ngwx97vr0.jpg\" style=\"width: 100%;\"><br></p>', '', 'Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu', 'Selengkapnya', ''),
(4, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/jdgsm_i6z3ewpqk.jpg\" style=\"width: 100%;\"><br></p>', 'jalur-one-day-service', ' Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu', 'Selengkapnya', '14/04/2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `body_tentang_kami`
--

CREATE TABLE `body_tentang_kami` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `sejarah` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `body_tentang_kami`
--

INSERT INTO `body_tentang_kami` (`id`, `caption`, `photo`, `video`, `sejarah`, `visi`, `misi`) VALUES
(1, '<h1 style=\"text-align: center; \"><b>Tentang kami</b></h1><p style=\"text-align: center; \">Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/qjvf19ia_ughbsw.jpg\" style=\"width: 100%;\"><br></p>', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/tzMpWiGL8D8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `body_youtube`
--

CREATE TABLE `body_youtube` (
  `id` int(11) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `link_youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `body_youtube`
--

INSERT INTO `body_youtube` (`id`, `upload`, `link_youtube`) VALUES
(1, '<h1>&nbsp;<img src=\"http://localhost/prakerin-sisfo/uploads/files/zn2r409ikxl6p7h.jpg\" style=\"width: 100%;\"></h1>', 'https://www.youtube.com/watch?v=3f9CAMoj3Ec');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `footer` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `footer`) VALUES
(1, ' <footer id=\"rs-footer\" class=\"bg3 rs-footer\">\r\n		  \r\n			\r\n			<!-- Footer Top -->\r\n            <div class=\"bg-warning footer-top\">\r\n                <div class=\" container-fluid\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-3 col-md-12\">\r\n                            <div class=\"about-widget\"><div style=\"text-align: center;\"><img src=\"http://localhost/prakerin-sisfo/uploads/files/bm98sa0jxqyrhne.png\" style=\"font-size: 0.875rem; width: 50%;\"></div>\r\n                                <h2 style=\"text-align: center;\">HUMAS UNJANI</h2><p style=\"text-align: justify; \"> more than three years. Our team goal is to reunite the elegance of unique.</p>\r\n                                <p class=\"margin-remove\" style=\"text-align: justify;\">We create Unique and Easy To Use Flexible Html Themes.</p>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-md-12\">\r\n                            <h5 class=\"footer-title\">RECENT POSTS</h5>\r\n                            <div class=\"recent-post-widget\">\r\n                                <div class=\"post-item\">\r\n                                    <div class=\"post-date\">\r\n                                        <span>28</span>\r\n                                        <span>June</span>\r\n                                    </div>\r\n                                    <div class=\"post-desc\">\r\n                                        <h5 class=\"post-title\"><a href=\"#\">While the lovely valley team work</a></h5>\r\n                                        <span class=\"post-category\">Keyword Analysis</span>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"post-item\">\r\n                                    <div class=\"post-date\">\r\n                                        <span>28</span>\r\n                                        <span>June</span>\r\n                                    </div>\r\n                                    <div class=\"post-desc\">\r\n                                        <h5 class=\"post-title\"><a href=\"#\">I must explain to you how all this idea</a></h5>\r\n                                        <span class=\"post-category\">Spoken English</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-md-12\">\r\n                            <h5 class=\"footer-title\">OUR SITEMAP</h5>\r\n                            <ul class=\"sitemap-widget\">\r\n                                <li class=\"active\"><a href=\"index.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Home</a></li>\r\n                                <li><a href=\"about.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>About</a></li>\r\n                                <li><a href=\"courses.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Courses</a></li>\r\n                                <li><a href=\"courses-details.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Courses Details</a></li>\r\n                                <li><a href=\"events.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Events</a></li>\r\n                                <li><a href=\"events-details.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Events Details</a></li>                                \r\n                                <li><a href=\"blog.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Blog</a></li>\r\n                                <li><a href=\"blog-details.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Blog Details</a></li>\r\n                                <li><a href=\"teachers.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Teachers</a></li>\r\n                                <li><a href=\"teachers-single.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Teachers Details</a></li>\r\n                                <li><a href=\"contact.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Contact</a></li>\r\n                                <li><a href=\"error-404.html\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>Error 404</a></li>\r\n                            </ul>\r\n                        </div>\r\n                        <div class=\"col-lg-3 col-md-12\">\r\n                            <h5 class=\"footer-title\">NEWSLETTER</h5>\r\n                            <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>\r\n\r\n\r\n \r\n                            	\r\n                                <input type=\"text\" class=\"form-input\" placeholder=\"Enter Your Email\">\r\n                                <button type=\"submit\" class=\"form-button\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></button>\r\n                            \r\n                        </div>\r\n                    </div>\r\n                    <div class=\"footer-share\">\r\n                        <ul>\r\n                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>\r\n                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>\r\n                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>\r\n                            <li><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>\r\n                            <li><a href=\"#\"><i class=\"fa fa-vimeo\"></i></a></li>    \r\n                        </ul>\r\n                    </div>                                \r\n                </div>\r\n            </div>\r\n\r\n            <!-- Footer Bottom -->\r\n\r\n        </footer>\r\n        <!-- Footer End -->\r\n\r\n        <!-- start scrollUp  -->\r\n        <div id=\"scrollUp\"> \r\n\r\n <i class=\"fa fa-angle-up\"></i>\r\n       </div>\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `upload_gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `view` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `upload_gambar`, `view`, `link`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/bful4_hiyome0pa.jpg\" style=\"width: 100%;\"><br></p>', '', ''),
(2, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/7cvp1xsimezygwl.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/u67l49xr01f_5mz.jpg\" style=\"font-size: 0.875rem; width: 50%;\"><img src=\"http://localhost/prakerin-sisfo/uploads/files/b5gaz3mfhkin7_t.jpg\" style=\"width: 50%;\"></p><p><br></p>\r\n\r\nYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu', 'http://localhost/prakerin-sisfo/gallery/view/2'),
(3, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/y2g1q7rk_mw90da.jpg\" style=\"width: 100%;\"><br></p>', ' <div class=\"rs-gallery sec-spacer\">\r\n<div class=\"container\">\r\n<div class=\"sec-title-2 mb-50 text-center\">\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-6\">\r\n<div class=\"\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/2u0hca8xrozvl69.jpg\" style=\"width: 100%;\">\r\n<div class=\"gallery-desc\">\r\n\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-6\">\r\n<div class=\"\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/2u0hca8xrozvl69.jpg\" style=\"width: 100%;\">\r\n<div class=\"gallery-desc\">\r\n\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-6\">\r\n<div class=\"\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/2u0hca8xrozvl69.jpg\" style=\"width: 100%;\">\r\n<div class=\"gallery-desc\">\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div></div></div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n <div class=\"rs-gallery sec-spacer\">\r\n<div class=\"container\">\r\n<div class=\"sec-title-2 mb-50 text-center\">\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-6\">\r\n<div class=\"\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/2u0hca8xrozvl69.jpg\" style=\"width: 100%;\">\r\n<div class=\"gallery-desc\">\r\n\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-6\">\r\n<div class=\"\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/2u0hca8xrozvl69.jpg\" style=\"width: 100%;\">\r\n<div class=\"gallery-desc\">\r\n\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-6\">\r\n<div class=\"\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/2u0hca8xrozvl69.jpg\" style=\"width: 100%;\">\r\n<div class=\"gallery-desc\">\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div></div></div>\r\n', 'http://localhost/prakerin-sisfo/gallery/view/3'),
(4, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/thnfocr0i3jkus4.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/ydu76hpbw0kx2s_.jpg\" style=\"width: 50%;\"><img src=\"http://localhost/prakerin-sisfo/uploads/files/xzfa7tk391ipcmo.jpg\" style=\"width: 50%;\"> </p>', 'http://localhost/prakerin-sisfo/gallery/view/4'),
(5, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/t8nszbmdpxvofa4.jpg\" style=\"width: 100%;\"><br></p>', NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `logo`, `tlpn`, `mail`, `lokasi`) VALUES
(1, '<p style=\"text-align: left;\"><img src=\"http://localhost/prakerin-sisfo/uploads/files/nm9458ws2t0jp1k.png\" style=\"width: 40.5px; height: 41.8207px;\"><br></p>', '08212345456', 'huma@gmail.com', '<p>cimahi</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `upload_gambar` varchar(255) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `ket_informasi` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `selengkapnya` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `view` varchar(60000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `upload_gambar`, `judul_informasi`, `ket_informasi`, `selengkapnya`, `tanggal`, `view`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/7aql3d14ej0xr52.jpg\" style=\"width: 100%;\"><br></p>', 'jalur-one-day-service', ' Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu', 'Selengkapnya', '12 april 2024', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/r03bjtzu1759aeg.jpg\" style=\"width: 50%;\"><img src=\"http://localhost/prakerin-sisfo/uploads/files/2c_wqd1nhyu7k56.jpg\" style=\"width: 50%;\"><br></p><p><br></p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</p><p><br></p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu<span style=\"font-size: 0.875rem;\">Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</span><span style=\"font-size: 0.875rem;\">Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</span><span style=\"font-size: 0.875rem;\">Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</span><span style=\"font-size: 0.875rem;\">Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu</span></p><p><span style=\"font-size: 0.875rem;\"><br></span></p><p>Yuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..YuYuhu Jalur ODS nihh(One Day Service ) ga ada ribet ribet nyaaa loh gaiss , sat set inimahlangsung ada kepastian , kalian ga akan nunggu lama lama..Yu<span style=\"font-size: 0.875rem;\"><br></span><br></p>'),
(2, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/y6xbaovtise54k2.jpg\" style=\"width: 100%;\"><br></p>', '', NULL, 'Selengkapnya', '', ''),
(3, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/u0163wkmyg2_9pd.jpg\" style=\"width: 100%;\"><br></p>', '', NULL, 'Selengkapnya', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_center`
--

CREATE TABLE `info_center` (
  `id` int(11) NOT NULL,
  `upload_logo` varchar(255) NOT NULL,
  `caption1` varchar(255) NOT NULL,
  `caption2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `info_center`
--

INSERT INTO `info_center` (`id`, `upload_logo`, `caption1`, `caption2`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/ufwkq8e7ijv3p6x.png\" style=\"width: 100%;\"><br></p>', 'Electrical Engineering', 'PPDB'),
(2, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/ufwkq8e7ijv3p6x.png\" style=\"width: 100%;\"><br></p>', 'Electrical Engineering', '<p><a href=\"http://localhost/prakerin-sisfo/Home\" target=\"_blank\" style=\"color: rgb(239, 239, 239);\">PERPUSTAKAAN</a></p>'),
(3, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/ufwkq8e7ijv3p6x.png\" style=\"width: 100%;\"><br></p>', 'Electrical Engineering', '<p>LSM</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `caption1` varchar(255) NOT NULL,
  `caption2` varchar(255) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `gambar4` varchar(255) NOT NULL,
  `gambar5` varchar(255) NOT NULL,
  `gambar6` varchar(255) NOT NULL,
  `gambar7` varchar(255) NOT NULL,
  `gambar8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `instagram`
--

INSERT INTO `instagram` (`id`, `caption1`, `caption2`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `gambar7`, `gambar8`) VALUES
(1, 'Instragram', 'You Follow Us', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/vczfi6_4x3jspld.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/5pd9zc8oj63l7mn.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/3_5nyhljreztg2a.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/onlgzqsh5fae30r.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/fy18w7pnd_rsi6o.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/joqwikc2seb8m60.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/293g1n0zph7wlqy.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/mdj8pf6utw_5qyl.jpg\" style=\"width: 100%;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategory`
--

CREATE TABLE `kategory` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategory`
--

INSERT INTO `kategory` (`id`, `icon`, `caption`, `keterangan`) VALUES
(1, ' <i class=\"Video Icon\"></i>', '<p><a href=\"http://localhost/prakerin-sisfo/youtube\" target=\"_blank\">Youtube</a><br></p>', ''),
(2, '<i class=\"flaticon-book\"></i>', '<p> <a href=\"http://localhost/prakerin-sisfo/informasi\" target=\"_blank\">Informasi</a></p>', ''),
(3, '<i class=\"flaticon-school-1\"></i>', '<p>&nbsp;<a href=\"http://localhost/prakerin-sisfo/pengumuman\" target=\"_blank\">Pengumuman</a><br></p>', ''),
(4, ' <i class=\"flaticon-ribbon\"></i>', '<p><a href=\"http://localhost/prakerin-sisfo/kontak_kami/add\" target=\"_blank\">Hubungi kami</a><br></p>', ''),
(5, '     <i class=\"flaticon-tool-2\"></i>', '<p>&nbsp;<a href=\"http://localhost/\" target=\"_blank\">lokasi</a><br></p>', ''),
(6, '<i class=\"flaticon-document\"></i>', '<p>&nbsp;<a href=\"http://localhost/prakerin-sisfo/body_contact\" target=\"_blank\">kontak kami</a><br></p>', ''),
(7, ' <i class=\"flaticon-tool-1\"></i>', '<p> <a href=\"http://localhost/prakerin-sisfo/gallery\" target=\"_blank\">Gallery</a><br></p>', '<p>mc,kcjcklj</p>'),
(8, '  <i class=\"flaticon-book-1\"></i>', '<p>&nbsp;<a href=\"http://localhost/prakerin-sisfo/berita\" target=\"_blank\">Berita</a><br></p>', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerja_sama`
--

CREATE TABLE `kerja_sama` (
  `id` int(11) NOT NULL,
  `logo1` varchar(255) NOT NULL,
  `logo2` varchar(255) NOT NULL,
  `logo3` varchar(255) NOT NULL,
  `logo4` varchar(255) NOT NULL,
  `logo5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kerja_sama`
--

INSERT INTO `kerja_sama` (`id`, `logo1`, `logo2`, `logo3`, `logo4`, `logo5`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/xlbkquzm0c6t5ih.png\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/yo3qta527ubx01v.png\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/er8f4dxnwg_sayo.png\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/lw2q6ipjyad1_37.png\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/kelqdp6fimnbhy7.png\" style=\"width: 100%;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak_kami`
--

INSERT INTO `kontak_kami` (`id`, `first_name`, `last_name`, `email`, `phone`, `pesan`) VALUES
(1, 'atur', 'nuhu', 'atur@gmail.com', '08125464678', 'ini adalah pesan contoh'),
(2, 'kang', 'hanna', 'kanghanna@gamail.con', '082345456', 'test kontak kami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_admin`
--

CREATE TABLE `list_admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `list_admin`
--

INSERT INTO `list_admin` (`id`, `admin`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_surat`
--

CREATE TABLE `list_surat` (
  `id` int(11) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `surat_dari` varchar(255) NOT NULL,
  `disampaikan_kpd` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `list_surat`
--

INSERT INTO `list_surat` (`id`, `lampiran`, `surat_dari`, `disampaikan_kpd`, `sifat_surat`, `disposisi`, `catatan`) VALUES
(1, '1 surat', 'Ka.pus sishumad', 'Emel', 'tembusan', 'Tindaklanjuti', 'test'),
(2, '1 Berkas', 'Rektor', 'Ismail', 'Dalam lampiran', 'Arsipkan', ''),
(3, '1 bundel', '', '', 'Disposisi Rektor', '', ''),
(4, '1 bundel', '', '', '', '', ''),
(5, '', 'Warek III', '', '', '', ''),
(6, '', 'Warek II', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pasword` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-08-31 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `upload_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `photo`, `nama`, `user_name`, `pasword`, `email`, `role`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `upload_photo`) VALUES
(1, 'http://localhost/prakerin-sisfo/uploads/files/q9pi5u7rfvh4e8o.png', 'admin', 'Admin', '$2y$10$9fpk.qC8hHFKzwTKDsiFQOSLjxAHZrm9yMOqcpjI0fUqJ61J9jmye', 'admin@gmail.com', 'Admin', NULL, NULL, '2024-08-31 00:00:00', NULL, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/1e_h7rqp4zn5vta.jpg\" style=\"width: 79.5px; height: 76.2628px;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operlay`
--

CREATE TABLE `operlay` (
  `id` int(11) NOT NULL,
  `upload` varchar(30000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `operlay`
--

INSERT INTO `operlay` (`id`, `upload`) VALUES
(1, '<div class=\"rs-breadcrumbs bg1 breadcrumbs-overlay\">\r\n		    <div class=\"breadcrumbs-inner\">\r\n		        <div class=\"container\">\r\n		            <div class=\"row\">\r\n		                <div class=\"col-md-12 text-center\">\r\n		                    <h1 class=\"page-title\"></h1>\r\n		                    <ul>\r\n		                        <li>\r\n		                            \r\n		                        </li>\r\n		                    \r\n		                    </ul>\r\n		                </div>\r\n		            </div>\r\n		        </div>\r\n		    </div>\r\n		</div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parallax`
--

CREATE TABLE `parallax` (
  `id` int(11) NOT NULL,
  `upload` varchar(3000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `caption` varchar(3000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `parallax`
--

INSERT INTO `parallax` (`id`, `upload`, `caption`) VALUES
(1, '<div class=\"rs-products sec-spacer sec-color bg-success   bg1 \">\r\n		    <div class=\"breadcrumbs-inner\">\r\n		        <div class=\"container-fluid\">\r\n		            <div class=\"row\">\r\n		                <div class=\"col-md-12 text-center\">\r\n		                    <h1 class=\"page-title\">Daftar</h1>\r\n		                    <ul>\r\n		                        <li>\r\n		                            \r\n		                        </li>\r\n		                    \r\n		                    </ul>\r\n		                </div>\r\n		            </div>\r\n		        </div>\r\n		    </div>\r\n		</div>\r\n\r\n\r\n\r\n', ' PEMBUKAAN PPDB SMKN1 CIMAHI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parallax_counter_number`
--

CREATE TABLE `parallax_counter_number` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `caption` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `counter_number1` varchar(255) NOT NULL,
  `counter_number2` varchar(255) NOT NULL,
  `counter_number3` varchar(255) NOT NULL,
  `counter_number4` varchar(255) NOT NULL,
  `counter_number5` varchar(255) NOT NULL,
  `counter_number6` varchar(255) NOT NULL,
  `counter_number7` varchar(255) NOT NULL,
  `counter_number8` varchar(255) NOT NULL,
  `cubter_name1` varchar(255) NOT NULL,
  `counter_name2` varchar(255) NOT NULL,
  `counter_name3` varchar(255) NOT NULL,
  `counter_name4` varchar(255) NOT NULL,
  `counter_name5` varchar(255) NOT NULL,
  `counter_name6` varchar(255) NOT NULL,
  `counter_name7` varchar(255) NOT NULL,
  `counter_name8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `parallax_counter_number`
--

INSERT INTO `parallax_counter_number` (`id`, `judul`, `caption`, `counter_number1`, `counter_number2`, `counter_number3`, `counter_number4`, `counter_number5`, `counter_number6`, `counter_number7`, `counter_number8`, `cubter_name1`, `counter_name2`, `counter_name3`, `counter_name4`, `counter_name5`, `counter_name6`, `counter_name7`, `counter_name8`) VALUES
(1, 'Edukasi Berkualitas Membentuk Generasi Unggul\r\n', 'JL. cempaka no 55 bandung', '12', '34', '22', '12', '42', '244', '31', '45', 'laki laki', 'perempuan', 'jumalh siswa', 'jumlah guru', 'jumlah pegawai', 'jumlah honoler', 'pegawai tetap ', 'pegawai kontrak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `nama_pengumuman` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `nama_pengumuman`, `link`, `upload_file`) VALUES
(1, 'Flexible Html Themes.', '<p><a href=\"http://localhost/prakerin-sisfo/uploads/files/lj2wbzfp86oqak_.pdf\">Download</a></p>', 'http://localhost/prakerin-sisfo/uploads/files/lj2wbzfp86oqak_.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telpn` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `no_telpn`, `pesan`) VALUES
(1, 'khang hanna', '081135678', 'mohon infomasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recent_post`
--

CREATE TABLE `recent_post` (
  `id` int(11) NOT NULL,
  `nama_tag` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `recent_post`
--

INSERT INTO `recent_post` (`id`, `nama_tag`) VALUES
(5, ' <div class=\"full-width-header\">\r\n\r\n\r\n<div class=\"col-lg-12 col-md-12\">\r\n<div class=\"sidebar-area\">\r\n<div class=\"search-box\">\r\n<h3 class=\"title\">Search Courses</h3>\r\n<div class=\"box-search\">\r\n<input class=\"form-control\" placeholder=\"Search Here ...\" name=\"srch-term\" id=\"srch-term\" type=\"text\">\r\n<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>\r\n</div>\r\n</div><!-- .search-box end -->\r\n<div class=\"cate-box\">\r\n<h3 class=\"title\">Categories</h3>\r\n<ul>\r\n<li>\r\n<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> <a href=\"#\">Analysis &amp; Features <span>(05)</span></a>\r\n</li>\r\n<li>\r\n<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> <a href=\"#\">Video Reviews <span>(07)</span></a>\r\n</li>\r\n<li>\r\n<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> <a href=\"#\">Engineering Tech <span>(09)</span></a>\r\n</li>\r\n<li>\r\n<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> <a href=\"#\"> Righteous Indignation <span>(08)</span></a>\r\n</li>\r\n<li>\r\n<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> <a href=\"#\">General Education <span>(04)</span></a>\r\n</li>\r\n</ul>\r\n</div><!-- .cate-box end -->\r\n<div class=\"latest-courses\">\r\n<h3 class=\"title\">Latest Courses</h3>\r\n<div class=\"post-item\">\r\n<div class=\"post-img\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/sm6ecjy_ina297u.jpg\" style=\"width: 100%;\"><a href=\"blog-details.html\"></a>\r\n</div>\r\n<div class=\"post-desc\">\r\n<h4><a href=\"blog-details.html\">Raken develops reporting The software</a></h4>\r\n<span class=\"duration\">\r\n<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 4 Years\r\n</span>\r\n<span class=\"price\">Price: <span>$350</span></span>\r\n</div>\r\n</div><!-- .post-item end -->\r\n<div class=\"post-item\">\r\n<div class=\"post-img\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/itqwhj4gfk3eabd.jpg\" style=\"width: 100%;\"><a href=\"blog-details.html\"></a>\r\n</div>\r\n<div class=\"post-desc\">\r\n<h4><a href=\"blog-details.html\">Raken develops reporting The software</a></h4>\r\n<span class=\"duration\">\r\n<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 4 Years\r\n</span>\r\n<span class=\"price\">Price: <span>$350</span></span>\r\n</div>\r\n</div><!-- .post-item end -->\r\n<div class=\"post-item\">\r\n<div class=\"post-img\">\r\n<img src=\"http://localhost/prakerin-sisfo/uploads/files/0d56zhc9rlw4n1o.jpg\" style=\"width: 100%;\"><a href=\"blog-details.html\"></a>\r\n</div>\r\n<div class=\"post-desc\">\r\n<h4><a href=\"blog-details.html\">Raken develops reporting The software</a></h4>\r\n<span class=\"duration\">\r\n<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 4 Years\r\n</span>\r\n<span class=\"price\">Price: <span>$350</span></span>\r\n</div>\r\n</div><!-- .post-item end -->\r\n</div>\r\n<div class=\"tags-cloud clearfix\">\r\n<h3 class=\"title\">Product Tags</h3>\r\n<ul>\r\n<li>\r\n<a href=\"#\">SCIENCE</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">HUMANITIES</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">DIPLOMA</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">BUSINESS</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">SPROTS</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">RESEARCH</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">ARTS</a>\r\n</li>\r\n<li>\r\n<a href=\"#\">ADMISSIONS</a>\r\n</li>\r\n</ul>\r\n</div><!-- .tags-cloud end -->\r\n<div class=\"newsletter\">\r\n<h4>Newsletter</h4>\r\n<p>Sign up for our Newsletter !</p>\r\n<div class=\"box-newsletter\">\r\n<input class=\"form-control\" placeholder=\"support@rstheme.com\" name=\"newsletter-term\" id=\"newsletter-term\" type=\"text\">\r\n<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></button>\r\n</div>\r\n</div><!-- .newsletter end -->\r\n</div><!-- .sidebar-area end -->\r\n</div>\r\n</div>\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `upload` varchar(20000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sejarah` varchar(20000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `upload2` varchar(20000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `upload`, `sejarah`, `upload2`) VALUES
(1, '   <h2>Sejarah</h2>      \r\n<p>Fusce sem dolor, interdum in efficitur at, faucibus.</p>\r\n\r\n<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/x4yt172vsfau3_o.jpg\" style=\"width: 100%;\"><br></p>', '   <h2>Sejarah</h2>      \r\n<p>Fusce sem dolor, interdum in efficitur at, faucibus.</p>\r\n\r\n\r\n\r\nOn the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.can I get some?There are many variations of passage', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/ndlmbhqwycs7eva.jpg\" style=\"width: 100%;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `upload_gambar1` varchar(255) NOT NULL,
  `upload_gambar2` varchar(255) NOT NULL,
  `upload_gambar3` varchar(255) NOT NULL,
  `caption1` varchar(255) NOT NULL,
  `caption2` varchar(255) NOT NULL,
  `caption3` varchar(255) NOT NULL,
  `caption4` varchar(255) NOT NULL,
  `caption5` varchar(255) NOT NULL,
  `caption6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `upload_gambar1`, `upload_gambar2`, `upload_gambar3`, `caption1`, `caption2`, `caption3`, `caption4`, `caption5`, `caption6`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/086b9_eidjogrqh.jpeg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/rf6hs_zeoig2md3.jpeg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/oj5eq2z3y9gc1m0.jpeg\" style=\"width: 100%;\"><br></p>', 'Selamat datng di prakerin-sisfo ', 'SMK UNGGULAN MENGHASILKAN SDM BERMUTU DAN BERDAYA SAING TINGGI', 'KUNJUNGAN TENAGA AHLI PERANCIS DARI PULAU LAIN', '<p style=\"text-align: center; \">jl. Terusan Jend Sudirman Po Box 148 cimahi</p>', 'SMK NEGERI 1 CIMAHI BERKOMPETISI DI 9 LOMBA LKS TINGKA PROVINSI', 'jl. Terusan Jend Sudirman Po Box 148 cimahi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `upload`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/xv1ndaqie4yl7jm.jpg\" style=\"width: 100%;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `tanggal_surat` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `surat_dari` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `disampaikan_kpd` varchar(255) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `tanggal_masuk`, `tanggal_surat`, `lampiran`, `sifat_surat`, `nomor_surat`, `surat_dari`, `perihal`, `disampaikan_kpd`, `disposisi`, `catatan`, `upload_file`) VALUES
(1, '2024-06-02', '2024-06-02', '1 surat', 'tembusan', 'ND/6789/V/2024', 'Rektor', 'kerjasma', 'Emel', 'Tindaklanjuti', 'Tolong ditindak lanjuti', 'http://localhost/prakerin-sisfo/uploads/files/3xb76eu8s5rqnpy.pdf'),
(2, '2024-06-02', '2024-06-02', '1 bundel', 'Disposisi Rektor', 'ND/6789/V/2024', 'Ka.pus sishumad', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terima_kasih`
--

CREATE TABLE `terima_kasih` (
  `id` int(11) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `terima_kasih`
--

INSERT INTO `terima_kasih` (`id`, `upload`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/f1b23kso7w_v64j.jpg\" style=\"width: 100%;\"><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ucapan_selamat`
--

CREATE TABLE `ucapan_selamat` (
  `id` int(11) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL,
  `photo5` varchar(255) NOT NULL,
  `photo6` varchar(255) NOT NULL,
  `photo7` varchar(255) NOT NULL,
  `photo8` varchar(255) NOT NULL,
  `nama1` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nama3` varchar(255) NOT NULL,
  `nama4` varchar(255) NOT NULL,
  `nama5` varchar(255) NOT NULL,
  `nama6` varchar(255) NOT NULL,
  `nama7` varchar(255) NOT NULL,
  `nama8` varchar(255) NOT NULL,
  `gelar1` varchar(255) NOT NULL,
  `gelar2` varchar(255) NOT NULL,
  `gelar3` varchar(255) NOT NULL,
  `gelar4` varchar(255) NOT NULL,
  `gelar5` varchar(255) NOT NULL,
  `gelar6` varchar(255) NOT NULL,
  `gelar7` varchar(255) NOT NULL,
  `gelar8` varchar(255) NOT NULL,
  `ucapan1` varchar(255) NOT NULL,
  `ucapan2` varchar(255) NOT NULL,
  `ucapan3` varchar(255) NOT NULL,
  `ucapan4` varchar(255) NOT NULL,
  `ucapan5` varchar(255) NOT NULL,
  `ucapan6` varchar(255) NOT NULL,
  `ucapan7` varchar(255) NOT NULL,
  `ucapan8` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ucapan_selamat`
--

INSERT INTO `ucapan_selamat` (`id`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`, `photo8`, `nama1`, `nama2`, `nama3`, `nama4`, `nama5`, `nama6`, `nama7`, `nama8`, `gelar1`, `gelar2`, `gelar3`, `gelar4`, `gelar5`, `gelar6`, `gelar7`, `gelar8`, `ucapan1`, `ucapan2`, `ucapan3`, `ucapan4`, `ucapan5`, `ucapan6`, `ucapan7`, `ucapan8`) VALUES
(1, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/bqa1gwkxf_89izo.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/okl8a6xjhz0bfts.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/5jsl24m71o_6gxe.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/0jrs27e3x91z8h_.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/kgmc_az9jw1oqr6.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/id03pkaufhmjo87.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/5hqjl_0wsbdufin.jpg\" style=\"width: 100%;\"><br></p>', '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/rf4bikjy_06zwlg.jpg\" style=\"width: 100%;\"><br></p>', 'Nama1', 'Nama2', 'Nama3', 'Nama4', '5', 'Nama6', 'Nama7', 'Nama8', 'Gelar1', 'Gelar2', 'Gelar3', 'Gelar4', 'Gelar5', 'Gelar6', 'Gelar7', 'Gelar8', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini', 'selamat atas terbentuknya website ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangan`
--

CREATE TABLE `undangan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `acara` varchar(255) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `lihat_undangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `undangan`
--

INSERT INTO `undangan` (`id`, `tanggal`, `tempat`, `acara`, `file_surat`, `lihat_undangan`) VALUES
(1, '2024-06-02', 'Gedung rektorat', '<p>Peresmian</p>', 'http://localhost/prakerin-sisfo/uploads/files/tzrjel9i4phguqf.pdf', '<a href=\"http://localhost/prakerin-sisfo/uploads/files/tzrjel9i4phguqf.pdf\" target=\"_blank\">Lihat Undangan</a>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_dan_misi`
--

CREATE TABLE `visi_dan_misi` (
  `id` int(11) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi_dan_misi`
--

INSERT INTO `visi_dan_misi` (`id`, `visi`, `misi`) VALUES
(1, '<p><br></p><p>VISI</p><p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls', '<p>MISI</p><p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine<');

-- --------------------------------------------------------

--
-- Struktur dari tabel `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `link_youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `youtube`
--

INSERT INTO `youtube` (`id`, `upload`, `link_youtube`) VALUES
(1, '<p> <img src=\"http://localhost/prakerin-sisfo/uploads/files/ve5tfc2zd7rwkxn.jpg\" style=\"width: 100%;\"></p>', 'https://www.youtube.com/watch?v=tzMpWiGL8D8'),
(2, '<p> <img src=\"http://localhost/prakerin-sisfo/uploads/files/0nxbztjioy4vkr9.jpg\" style=\"width: 100%;\"></p>', ''),
(3, '<p> <img src=\"http://localhost/prakerin-sisfo/uploads/files/nqfoelu6mj7viwc.jpg\" style=\"width: 100%;\"></p>', 'https://www.youtube.com/watch?v=tzMpWiGL8D8'),
(4, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/8fti_zosx7b0pln.jpg\" style=\"width: 100%;\"><br></p>', 'https://www.youtube.com/watch?v=tzMpWiGL8D8'),
(5, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/i75aj1z6_9gltv4.jpg\" style=\"width: 100%;\"><br></p>', ''),
(6, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/okxnl9pq5wch_07.jpg\" style=\"width: 100%;\"><br></p>', ''),
(7, '<p><img src=\"http://localhost/prakerin-sisfo/uploads/files/eidq82p6cn4bjf5.jpg\" style=\"width: 100%;\"><br></p>', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita_utama`
--
ALTER TABLE `berita_utama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `body_berita`
--
ALTER TABLE `body_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `body_contact`
--
ALTER TABLE `body_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `body_informasi`
--
ALTER TABLE `body_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `body_tentang_kami`
--
ALTER TABLE `body_tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `body_youtube`
--
ALTER TABLE `body_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_center`
--
ALTER TABLE `info_center`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategory`
--
ALTER TABLE `kategory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerja_sama`
--
ALTER TABLE `kerja_sama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_kami`
--
ALTER TABLE `kontak_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list_admin`
--
ALTER TABLE `list_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list_surat`
--
ALTER TABLE `list_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operlay`
--
ALTER TABLE `operlay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parallax`
--
ALTER TABLE `parallax`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parallax_counter_number`
--
ALTER TABLE `parallax_counter_number`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `recent_post`
--
ALTER TABLE `recent_post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `terima_kasih`
--
ALTER TABLE `terima_kasih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ucapan_selamat`
--
ALTER TABLE `ucapan_selamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_dan_misi`
--
ALTER TABLE `visi_dan_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita_utama`
--
ALTER TABLE `berita_utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `body_berita`
--
ALTER TABLE `body_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `body_contact`
--
ALTER TABLE `body_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `body_informasi`
--
ALTER TABLE `body_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `body_tentang_kami`
--
ALTER TABLE `body_tentang_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `body_youtube`
--
ALTER TABLE `body_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `info_center`
--
ALTER TABLE `info_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategory`
--
ALTER TABLE `kategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kerja_sama`
--
ALTER TABLE `kerja_sama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak_kami`
--
ALTER TABLE `kontak_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `list_admin`
--
ALTER TABLE `list_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `list_surat`
--
ALTER TABLE `list_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `operlay`
--
ALTER TABLE `operlay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `parallax`
--
ALTER TABLE `parallax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `parallax_counter_number`
--
ALTER TABLE `parallax_counter_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `recent_post`
--
ALTER TABLE `recent_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `terima_kasih`
--
ALTER TABLE `terima_kasih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ucapan_selamat`
--
ALTER TABLE `ucapan_selamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_dan_misi`
--
ALTER TABLE `visi_dan_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
