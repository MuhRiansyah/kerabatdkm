-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2015 at 06:47 AM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kerabatdkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(70) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`) VALUES
(1, 'Rumah Tangga & Jumat''an'),
(2, 'Riset & Pengembangan'),
(3, 'Kaderisasi'),
(4, 'Syiar & Media'),
(5, 'Dana Usaha'),
(6, 'Mentoring'),
(7, 'belum tergabung dalam divisi');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nrp` varchar(9) NOT NULL,
  `sandi` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(30) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `kontak` varchar(13) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `id_divisi` int(11) NOT NULL,
  PRIMARY KEY (`nrp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `sandi`, `foto`, `nama`, `jurusan`, `fakultas`, `jenis_kelamin`, `kontak`, `alamat`, `kota`, `id_divisi`) VALUES
('103040088', 'ululalbaab', 'default.png', 'AGUS HERYANTO', 'Teknik Informatika', 'Teknik', 'L', NULL, NULL, NULL, 7),
('113020006', 'ululalbaab', 'default.png', 'Ulil Hikmah Pitasari', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('113020018', 'ululalbaab', 'default.png', 'Wulan Nuralifah', 'Teknologi Pangan', 'Teknik', 'P', '081808677028', NULL, NULL, 7),
('113020033', 'ululalbaab', 'default.png', 'Siska Permatasari', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('113020036', 'ululalbaab', 'default.png', 'Nitya Putri', 'Teknologi Pangan', 'Teknik', 'P', '08985198913', NULL, NULL, 7),
('113020150', 'ululalbaab', 'default.png', 'Siti Cahyanti', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('113030022', 'ululalbaab', 'default.png', 'Ahmad Falah Tfs', 'Teknik Mesin', 'Teknik', 'L', '081910206010', 'Bandung', 'Bandung', 7),
('113030023', 'ululalbaab', 'default.png', 'Muhamad Muflih', 'Teknik Mesin', 'Teknik', 'L', '087720266796', 'KP. Cihaur Pasantren RT/RW 01/', 'Cianjur', 7),
('113030039', 'ululalbaab', 'default.png', 'Feri Etrawan', 'Teknik Mesin', 'Teknik', 'L', '085722220829', NULL, NULL, 7),
('113040103', 'ululalbaab', 'default.png', 'Dini Ayesha', 'Teknik Informatika', 'Teknik', 'P', NULL, NULL, NULL, 7),
('113040134', 'ululalbaab', 'default.png', 'Fatyadi Bagus', 'Teknik Informatika', 'Teknik', 'L', '', 'Batujajar', 'Bandung', 7),
('113040150', 'ululalbaab', 'default.png', 'Moh Iqbal Falahudin ', 'Teknik Informatika', 'Fakultas Teknik', 'L', '087722150861', 'Gegerkalong Tengah Gang Buntu', 'Sukabumi', 7),
('113040155', 'ululalbaab', 'default.png', 'Puput Nurovy', 'Teknik Informatika', 'Teknik', 'P', '089660402274', 'Asrama daarul iman daarut tauh', 'Bandung', 7),
('113040234', 'ululalbaab', 'default.png', 'ADANG SURYANA', 'Teknik Informatika', 'Fakultas Teknik', 'L', '085222194301', 'adangsuryana@unpas.ac.id', 'Bandung', 7),
('113040244', 'ululalbaab', 'default.png', 'Danar Mardiansyah', 'Teknik Informatika', 'Teknik', 'L', '08080111', 'Padasuka', 'Bandung', 7),
('113040257', 'rahmatulohmohamad', 'default.png', 'Mohamad Rahmatuloh', 'Teknik Informatka', 'Teknik', 'L', '081220485102', 'Gegerkalong Tengah No. 50', 'Bandung', 7),
('116010051', 'ululalbaab', 'default.png', 'Lisa Rahma P.S', 'Desain Komunikasi Visual', 'FISS', 'P', NULL, NULL, NULL, 7),
('123020033', 'ululalbaab', 'default.png', 'Desy Tresnaputri', 'Teknologi Pangan', 'Teknik', 'P', '085724471600', 'Cipageran', 'Cimahi', 7),
('123020062', 'ululalbaab', '123020062.jpg', 'Yoga Purnama Nugraha', 'Teknologi Pangan', 'Teknik', 'L', '087821248407', NULL, NULL, 7),
('123020114', 'ululalbaab', '123020114.jpg', 'Noordiansyah', 'Teknologi Pangan', 'Teknik', 'L', '0818435453', NULL, NULL, 7),
('123020120', 'ululalbaab', 'default.png', 'Devy Nur Afiah', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020137', 'ululalbaab', 'default.png', 'Fitri Laelatul Qodriah', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020168', 'ululalbaab', 'default.png', 'Anis Hamidah', 'Teknologi Pangan', 'Teknik', 'P', '085659705733', '', 'Majalengka', 7),
('123020216', 'ululalbaab', 'default.png', 'Dwi Agung Rizki', 'Teknologi Pangan', 'Teknik', 'P', '08979778478', 'Jl.Panorama', 'Bandung', 7),
('123020229', 'ululalbaab', 'default.png', 'Enung Sholihah', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020230', 'ululalbaab', 'default.png', 'Azizah Aulia Rahmawati', 'Teknologi Pangan', 'Teknik', 'P', '085720275334', 'jln. maleber inpres I gg.sejah', 'bandung', 7),
('123020243', 'ululalbaab', 'default.png', 'Qony Qonyatul Qurany', 'Teknologi Pangan', 'Teknik', 'P', '085721493526', 'Rusunawa', 'Bandung', 7),
('123020248', 'ululalbaab', 'default.png', 'Safira Nurul Husna', 'Teknologi Pangan', 'Teknik', 'P', '081932292772', '', 'Bekasi', 7),
('123020299', 'ululalbaab', 'default.png', 'Trisna Megawati', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020301', 'ululalbaab', 'default.png', 'Syafira Rahmadiana', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020306', 'ululalbaab', 'default.png', 'Emmy Dian Ramadhani', 'Teknologi Pangan', 'Teknik', 'P', '085920006969', '', '', 7),
('123020332', 'ululalbaab', 'default.png', 'Annisa Nur Fauziah', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020338', 'ululalbaab', 'default.png', 'Ai Siti Rahmah', 'Teknologi Pangan', 'Teknik', 'P', '08720562052', 'kp.pasanggrahan cimanggu cibeb', 'cianjur', 7),
('123020339', 'ululalbaab', 'default.png', 'Rosmawati', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020341', 'ululalbaab', 'default.png', 'Shinta Mustika Rahayu', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020343', 'ululalbaab', 'default.png', 'Erti Siti Rohmah', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020359', 'ululalbaab', 'default.png', 'Khodijah Qurata A', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123020440', 'ululalbaab', '123020440.jpg', 'Rahman Fauzi', 'Teknologi Pangan', 'Teknik', 'L', '087722753738', 'Kp. Rarahan Rw 05 Rw 07 Desa C', 'Cianjur', 7),
('123020442', 'ululalbaab', 'default.png', 'Siti Rodiah', 'Teknologi Pangan', 'Teknik', 'P', '085722289738', NULL, 'Garut', 7),
('123030089', 'ululalbaab', '123030089.jpg', 'Auliansyah Alfrianthoni', 'Teknik Mesin', 'Teknik', 'L', '085776543991', 'jl.Prabudimuntur no 18 Bandung', 'Bandung Juara', 7),
('123040023', 'ululalbaab', '123040023.jpg', 'Muhammad Hanif Firdaus', 'Teknik Informatika', 'Teknik', 'L', NULL, NULL, NULL, 7),
('123040113', 'ululalbaab', 'default.png', 'Annisaa Wafa Syahida', 'Teknik Informatika', 'Teknik', 'P', '08972889009', 'Jl. Baleagung 09/12  Baleendah', 'Bandung', 7),
('123040204', 'ululalbaab', 'default.png', 'Nadya Nur Akmalia', 'Teknik Informatika', 'Teknik', 'P', '081221911642', 'Rusunawa Unpas', 'Bandung', 7),
('123040212', 'ululalbaab', '123040212.jpg', 'Hilal Gibran', 'Teknik Informatika', 'Teknik', 'L', '', '', 'Bandung', 7),
('123040226', 'bijibijian', '123040226.jpg', 'Riansyah', 'Teknik Informatika', 'Fakultas Teknik', 'L', '085756603194', 'Jl. Mekar No 25 I', 'Kendari', 1),
('123040227', 'ululalbaab', '123040227.jpg', 'Nanda Prasetyo', 'Teknik Informatika', 'Teknik', 'L', '087771376262', 'jl. Gegerkalong girang Gang Al', 'Bandung', 7),
('123040229', 'tif2012', 'default.png', 'Shelly Yolanda', 'Teknik Informatika', 'Teknik', 'P', '087827118552', 'Kp. Jangkurang, Leles-Garut', 'Garut', 7),
('123040247', 'ululalbaab', 'default.png', 'Fathya Nur Fadhila', 'Teknik Informatika', 'Teknik', 'P', NULL, NULL, NULL, 7),
('123040403', 'ululalbaab', '123040403.jpg', 'Moch Ilham Anugrah', 'Teknik Informatika', 'Teknik', 'L', '08997556848', NULL, NULL, 7),
('127010025', 'ululalbaab', 'default.png', 'Asep Firman', 'Sastra Inggris', 'FISS', 'L', '089630495669', NULL, NULL, 7),
('133010205', 'ululalbaab', '133010205.jpg', 'Rizki Faisal O', 'Teknik industri', 'Teknik', 'L', '087822671335', NULL, NULL, 7),
('133020036', 'ululalbaab', 'default.png', 'Nursyifa Amalia', 'Teknologi Pangan', 'Teknik', 'P', '081809773958', '', '', 7),
('133020069', 'ululalbaab', 'default.png', 'Fathiya Luthfanni Sahifa', 'Teknologi Pangan', 'Teknik', 'P', '081995351291', NULL, NULL, 7),
('133020080', 'ululalbaab', 'default.png', 'Ardelia Fatmawati', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('133020113', 'ululalbaab', 'default.png', 'GINARTINA WARSITA', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('133020135', 'ululalbaab', 'default.png', 'Nurfitriah', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('133020166', 'ululalbaab', 'default.png', 'Indah Nurafni Khairani', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('133020168', 'ululalbaab', 'default.png', 'Cici Heniati', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('133020274', 'ululalbaab', 'default.png', 'Nurul Fikri Sulaiman', 'Teknologi Pangan', 'Teknik', 'P', NULL, NULL, NULL, 7),
('133020340', 'asepasep', '133020340.jpg', 'Asep Syafrudin', 'Teknologi Pangan', 'Teknik', 'L', '085721404131', 'Putrajawa, Selaawi-Limbangan', 'Garut', 7),
('133030015', 'ululalbaab', '133030015.jpg', 'Rois Sudin', 'Teknik Mesin', 'Teknik', 'L', '081220538959', NULL, NULL, 7),
('133030023', 'ululalbaab', '133030023.jpg', 'Medica Sugih Pangestu', 'Teknik Mesin', 'Teknik', 'L', '081294641618', NULL, NULL, 7),
('133030025', 'ululalbaab', '133030025.jpg', 'Rio Jaya Kusumah', 'Teknik Mesin', 'Teknik', 'L', '089655396875', 'cileunyi', 'bandung', 7),
('133030029', 'ululalbaab', '133030029.jpg', 'Moch Afdlolludin', 'Teknik Mesin', 'Teknik', 'L', '081294641618', NULL, NULL, 7),
('133030034', 'ululalbaab', '133030034.jpg', 'Syaiful Rahman', 'Teknik Mesin', 'Teknik', 'L', '085720313056', NULL, NULL, 7),
('133030044', 'ululalbaab', '133030044.jpg', 'Yusuf Aminulah', 'Teknik Mesin', 'Teknik', 'L', '081294641618', NULL, NULL, 7),
('133030051', 'ululalbaab', '133030051.jpg', 'Faisal Maulana', 'Teknik Mesin', 'Teknik', 'L', '081294641618', NULL, NULL, 7),
('133040007', 'ululalbaab', '133040007.jpg', 'M Insan Rahmatuloh', 'Teknik Informatika', 'Teknik', 'L', '085723032979', 'Jl. sukagalih no 52', 'Bandung', 7),
('133040019', 'ululalbaab', '133040019.jpg', 'Eri Ardiansyah', 'Teknik Informatika', 'Teknik', 'L', '08997520138', 'Jln. Kartika 2,No. 106-G, KPAD', 'Bandung', 7),
('133040115', 'badrussalam', '133040115.jpg', 'Badrus Salam', 'Teknik Informatika', 'Teknik', 'L', '087889661200', 'Jln Setiabudhi No 193', 'Pandeglang', 1),
('133040226', 'ululalbaab', '133040226.jpg', 'Imam Mulyasin', 'Teknik Informatika', 'Teknik', 'L', '085722909415', 'Jl.Geger Kalong Girang', 'Gaza', 7),
('133040237', 'ululalbaab', '133040237.jpg', 'Sukanda Wiguna', 'Teknik Informatika', 'Teknik', 'L', '087717791996', 'Anjatan', 'Indramayu', 7),
('133040241', 'semaugue', '133040241.jpg', 'Dwi Angga Gumelar', 'Teknik Informatika', 'Teknik', 'L', '085711965042', NULL, 'Bogor', 1),
('133040244', 'ululalbaab', '133040244.jpg', 'Rian Nuryadin', 'Teknik Informatika', 'Teknik', 'L', NULL, NULL, NULL, 7),
('133040261', 'ululalbaab', '133040261.jpg', 'Muhammad Rimaduddin', 'Teknik Informatika', 'Teknik', 'L', '082114774973', NULL, NULL, 7),
('133040295', 'ululalbaab', '133040295.jpg', 'Galih Riyadi', 'Teknik Informatika', 'Teknik', 'L', '087736391992', 'Babakansari, Kiaracondong', 'Bandung', 7),
('133040304', 'ululalbaab', '133040304.jpg', 'Rizkon Maulana Sidiq', 'Teknik Informatika', 'Teknik', 'L', '085759186295', NULL, NULL, 7),
('133060031', 'ululalbaab', '133060031.jpg', 'Ramadansyah', 'Teknik Planologi', 'Teknik', 'L', '085794543367', NULL, NULL, 7),
('136020025', 'ululalbaab', 'default.png', 'Deni Suratman', 'Fotografi dan Film', 'FISS', 'L', '085720100207', 'Jl. Pelesiran No.20B/56 RT 04 ', 'Bandung', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
