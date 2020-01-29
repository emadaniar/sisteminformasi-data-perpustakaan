-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 05:05 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_buku` (
  `no` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `jenis_buku` varchar(100) NOT NULL,
  `jumlah_halaman` varchar(100) NOT NULL,
  `tahun_terbit` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`no`, `judul_buku`, `nama_pengarang`, `jenis_buku`, `jumlah_halaman`, `tahun_terbit`) VALUES
(1, 'Dilan ', 'Agus ', 'Cerita', '202', 2019),
(2, 'Programan Visual', 'Zulkarnain', 'Pemograman', '201', 2019),
(3, 'Statistik', 'Kurniawan', 'Program', '209', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ilmu`
--

CREATE TABLE IF NOT EXISTS `tbl_ilmu` (
  `no` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ilmu`
--

INSERT INTO `tbl_ilmu` (`no`, `nama_buku`, `nama_pengarang`, `tahun_terbit`, `jumlah`) VALUES
(1, 'IPA', 'Santoso', '2019', '210'),
(2, 'Sosial Budaya', 'Kurniawan', '1990', '200');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_motivasi`
--

CREATE TABLE IF NOT EXISTS `tbl_motivasi` (
  `no` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_motivasi`
--

INSERT INTO `tbl_motivasi` (`no`, `nama_buku`, `nama_pengarang`, `tahun_terbit`, `jumlah`) VALUES
(5, 'Si Anak Singkong', 'Chairul Tanjung', '2010', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_novel`
--

CREATE TABLE IF NOT EXISTS `tbl_novel` (
  `no` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemograman`
--

CREATE TABLE IF NOT EXISTS `tbl_pemograman` (
  `no` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemograman`
--

INSERT INTO `tbl_pemograman` (`no`, `nama_buku`, `nama_pengarang`, `tahun_terbit`, `jumlah`) VALUES
(1, 'Desain Web', 'Kiki', '1998', '23'),
(2, 'Visual Basic', 'Zainal', '1990', '23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sk`
--

CREATE TABLE IF NOT EXISTS `tbl_sk` (
  `no` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sk`
--

INSERT INTO `tbl_sk` (`no`, `nama_buku`, `nama_pengarang`, `tahun_terbit`, `jumlah`) VALUES
(1, 'Novel', 'Surya', '2019', '207'),
(2, 'Program', 'Heri', '2020', '210');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosial`
--

CREATE TABLE IF NOT EXISTS `tbl_sosial` (
  `no` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sosial`
--

INSERT INTO `tbl_sosial` (`no`, `nama_buku`, `nama_pengarang`, `tahun_terbit`, `jumlah`) VALUES
(2, 'Ekonomi Budaya', 'Susi', '2019', '23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_struktur`
--

CREATE TABLE IF NOT EXISTS `tbl_struktur` (
  `no` int(10) NOT NULL,
  `nik` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`no`, `nik`, `nama`, `tanggal_masuk`, `jabatan`) VALUES
(1, 1512109702, 'Ema Daniar, S.Kom', '2019-12-31', '-'),
(6, 1611079801, 'Ridwan', '2019-12-31', 'Wakil Ketua Perpustakaan'),
(8, 1123049202, 'Sundari', '2011-04-23', 'Seketaris Perpustakaan'),
(9, 1107089101, 'Agus Irwansyah', '2010-07-25', 'Anggota'),
(10, 1107089101, 'Imam', '2019-12-31', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama_lengkap`, `email`, `level`, `keterangan`) VALUES
('emadaniar', '25d55ad283aa400af464c76d713c07ad', 'Ema Daniar nst', 'emadaniar49@gmail.com', 1, 'Administrator'),
('sundari', '25d55ad283aa400af464c76d713c07ad', 'Sundari', 'sundari@gmail.com', 2, 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_ilmu`
--
ALTER TABLE `tbl_ilmu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_motivasi`
--
ALTER TABLE `tbl_motivasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_novel`
--
ALTER TABLE `tbl_novel`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_pemograman`
--
ALTER TABLE `tbl_pemograman`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_sosial`
--
ALTER TABLE `tbl_sosial`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ilmu`
--
ALTER TABLE `tbl_ilmu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_motivasi`
--
ALTER TABLE `tbl_motivasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_novel`
--
ALTER TABLE `tbl_novel`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pemograman`
--
ALTER TABLE `tbl_pemograman`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sosial`
--
ALTER TABLE `tbl_sosial`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
