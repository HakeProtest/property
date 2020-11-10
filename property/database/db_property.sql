-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 12:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` varchar(15) NOT NULL,
  `nm_account` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_kontak` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `akses` varchar(30) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `nm_account`, `username`, `password`, `alamat`, `no_kontak`, `email`, `foto`, `akses`, `id_jabatan`) VALUES
('1', 'Simoncelli', 'admin', 'admin', 'jalan abc2', '08122222222', 'admin@property.com', 'agen3.jpg', 'Admin', 5),
('2', 'Laura Brownis', 'agen', 'agen', 'Jalan Surapati 1', '08783213218', 'hen@gmail.com', 'agen1.jpg', 'Agen', 1),
('3', 'Tatang S', 'admin3', 'admin3', 'Jalan sukabumi', '083267132199', 'data@property.com', 'agen2.jpg', 'Manager', 2),
('4', 'Raj Kumar', 'admin4', 'admin4', 'Jalan Melong Asih', '083728139219', 'ruben@slow.aja', 'agen4.jpg', 'admin', 5),
('5', 'Manager', 'manajer', 'manajer', 'tes', '12373218', 'tess@gmail.com', 'foto.jpg', 'Manager', 2),
('6', 'Ranny Firdaus', 'direktur', 'direktur', 'bojong', '087328132190', 'direktur@gmail.com', '441463-idcard-kpop.jpg', 'Direktur', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nm_contact` varchar(50) NOT NULL,
  `no_kontak` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `source` varchar(25) NOT NULL,
  `minat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nm_contact`, `no_kontak`, `email`, `source`, `minat`) VALUES
(1, 'Ridwan', '08128329132', 'ridwan@gmail.com', 'temen', 'Perumahan A No 3');

-- --------------------------------------------------------

--
-- Table structure for table `foto_property`
--

CREATE TABLE `foto_property` (
  `id_foto` int(11) NOT NULL,
  `id_property` varchar(50) NOT NULL,
  `foto_property` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_property`
--

INSERT INTO `foto_property` (`id_foto`, `id_property`, `foto_property`) VALUES
(5, '6', 'perum1.jpg'),
(8, '6', '2853545029.jpg'),
(9, '5', 'promosi13.jpg'),
(10, '5', '28535450291.jpg'),
(11, '4', 'perum3.jpg'),
(12, '4', '28535450292.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nm_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nm_jabatan`) VALUES
(1, 'Agen'),
(2, 'Manager'),
(4, 'Direktur'),
(5, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Tipe 36'),
(2, 'Tipe 29');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id_lead` int(11) NOT NULL,
  `nm_lead` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_kontak` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `desc_info` varchar(100) NOT NULL,
  `media` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id_lead`, `nm_lead`, `alamat`, `no_kontak`, `email`, `pekerjaan`, `desc_info`, `media`, `source`) VALUES
(1, 'Yudith', 'Jalan melong asih', '087823179122', 'hentreiza@gmail.com', 'Swasta', 'Ingin rumah bagus', '', 'Teman'),
(2, 'Sasha', '', '091111111111', 'sahsa@gmail.com', '', '', '', 'Teman'),
(3, 'Kusni', '', '0832671832199', 'kusni@gmail.com', '', '', '', 'Web'),
(4, 'saya', '', '0878231791222', 'saya@gmail.com', '', '', '', 'teman');

-- --------------------------------------------------------

--
-- Table structure for table `opportunity`
--

CREATE TABLE `opportunity` (
  `id_opportunity` int(11) NOT NULL,
  `id_lead` int(11) NOT NULL,
  `id_account` varchar(25) NOT NULL,
  `est_keuntungan` double NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `id_property` varchar(25) NOT NULL,
  `status_op` varchar(50) NOT NULL,
  `usulan` text NOT NULL,
  `bertemu` text NOT NULL,
  `negosiasi` text NOT NULL,
  `keputusan` text NOT NULL,
  `close_deal` text NOT NULL,
  `win_lost` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunity`
--

INSERT INTO `opportunity` (`id_opportunity`, `id_lead`, `id_account`, `est_keuntungan`, `tgl_dibuat`, `id_property`, `status_op`, `usulan`, `bertemu`, `negosiasi`, `keputusan`, `close_deal`, `win_lost`) VALUES
(1, 1, '1', 10000000, '2019-06-11', '1', 'Close Deal', 'Tes isian untuk usulan', '', '', '', 'tidak jadi beli', 'Lost'),
(2, 2, '1', 50000000, '2019-06-21', '3', 'Usulan', 'Di usulkan untuk pembelian rumah tipe c', '', '', '', '', ''),
(3, 3, '1', 60000000, '2019-06-21', '2', 'Usulan', 'Pengusulan awal ', '', '', '', '', ''),
(4, 4, '1', 10000000, '2019-06-26', '2', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` varchar(15) NOT NULL,
  `id_property` varchar(15) NOT NULL,
  `id_account` varchar(15) NOT NULL,
  `id_lead` int(11) NOT NULL,
  `tgl_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_property`, `id_account`, `id_lead`, `tgl_order`) VALUES
('1', '1', '1', 1, '2019-06-20'),
('2', '2', '2', 1, '2019-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `pengembang`
--

CREATE TABLE `pengembang` (
  `id_pengembang` varchar(15) NOT NULL,
  `nm_pengembang` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_kontak` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembang`
--

INSERT INTO `pengembang` (`id_pengembang`, `nm_pengembang`, `alamat`, `no_kontak`, `email`) VALUES
('1', 'PT Podomoro Group', 'Jalan Semar 12', '083281321990', 'podomoro@gmail.com'),
('2', 'PT Sedaya', 'Jalan Merpati', '083728132910', 'sedaya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `projek`
--

CREATE TABLE `projek` (
  `id_projek` varchar(15) NOT NULL,
  `nm_projek` varchar(100) NOT NULL,
  `id_pengembang` varchar(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_listing` date NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `foto_projek` varchar(100) NOT NULL,
  `foto_denah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projek`
--

INSERT INTO `projek` (`id_projek`, `nm_projek`, `id_pengembang`, `alamat`, `tgl_listing`, `deskripsi`, `foto_projek`, `foto_denah`) VALUES
('1', 'Projek Rumah', '1', 'Jalan Surapati', '2019-05-17', 'Projek Perumahan', 'perum.jpg', 'denah1.jpg'),
('2', 'Projek Perumahan', '2', 'Jalan Buah', '2019-04-01', 'Perumahan Murah', 'projek.jpg', 'denah4.jpg'),
('3', 'Projek A', '1', 'Bandung', '2019-07-02', 'Projek A Desk', 'promosi11.jpg', 'denah11.jpg'),
('4', 'Projek B', '2', 'Jakarta', '2019-07-03', 'Projek B', '2853545029.jpg', 'denah41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id_property` varchar(25) NOT NULL,
  `no_kavling` varchar(5) NOT NULL,
  `nm_property` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_listing` date NOT NULL,
  `nm_tipe` varchar(25) NOT NULL,
  `luas` int(5) NOT NULL,
  `hrg_m2` int(11) NOT NULL,
  `interior` text NOT NULL,
  `kmr_tidur` int(5) NOT NULL,
  `kmr_mandi` int(5) NOT NULL,
  `listrik` int(5) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_account` varchar(11) NOT NULL,
  `id_projek` varchar(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id_property`, `no_kavling`, `nm_property`, `harga`, `tgl_listing`, `nm_tipe`, `luas`, `hrg_m2`, `interior`, `kmr_tidur`, `kmr_mandi`, `listrik`, `deskripsi`, `foto`, `file`, `id_account`, `id_projek`, `id_kategori`, `status`) VALUES
('1', '1', 'Perumahan A', 450000000, '2019-05-18', 'tipe x', 140, 30000000, 'TV, AC, DLL', 3, 2, 1200, 'Rumah keluarga yang nyaman', 'rmh1.jpg', 'NH391467.pdf', '1', '1', 1, 'Sold Out'),
('2', '1', 'Perumahan B', 300000000, '2019-05-01', 'Tipe Z', 500, 20000000, 'Interior nya macam-macam', 4, 2, 900, 'Rumah yang luas bagi keluarga', 'rmh2.jpg', 'tes1.pdf', '1', '2', 1, 'Sold Out'),
('3', '1', 'Perumahan C', 250000000, '2019-05-01', 'Small', 100, 15000000, 'Rumah minimalis', 3, 1, 900, 'Rumah Minimalis Sederhana', 'rmh3.jpg', '611090030_resume.pdf', '1', '3', 1, 'For Sale'),
('4', '2', 'Perumahan A', 450000000, '2019-05-18', 'tipe x', 140, 30000000, 'TV, AC, DLL', 3, 2, 1200, 'Rumah keluarga yang nyaman', 'rmh1.jpg', 'NH391467.pdf', '1', '1', 1, 'For Sale'),
('5', '3', 'Perumahan A', 450000000, '2019-05-18', 'tipe x', 140, 30000000, 'TV, AC, DLL', 3, 2, 1200, 'Rumah keluarga yang nyaman', 'rmh1.jpg', 'NH391467.pdf', '1', '1', 1, 'For Sale'),
('6', '2', 'Perumahan B', 300000000, '2019-05-01', 'Tipe Z', 500, 20000000, 'Interior nya macam-macam', 4, 2, 900, 'Rumah yang luas bagi keluarga', 'rmh2.jpg', 'tes1.pdf', '1', '2', 1, 'For Sale');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` varchar(15) NOT NULL,
  `id_account` varchar(15) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `id_lead` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `id_account`, `subjek`, `id_lead`, `lokasi`, `tanggal`, `jam`, `deskripsi`) VALUES
('1', '1', 'tes', 1, 'Hotel Tjokro', '2019-06-12', '13:00:00', 'Follow Up Customer'),
('2', '1', 'Pertemuan ke 2', 1, 'Taman Sari', '2019-06-13', '07:29:00', 'pertemuan kedua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `foto_property`
--
ALTER TABLE `foto_property`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_property` (`id_property`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id_lead`);

--
-- Indexes for table `opportunity`
--
ALTER TABLE `opportunity`
  ADD PRIMARY KEY (`id_opportunity`),
  ADD KEY `id_account` (`id_account`),
  ADD KEY `id_property` (`id_property`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_property` (`id_property`),
  ADD KEY `id_account` (`id_account`);

--
-- Indexes for table `pengembang`
--
ALTER TABLE `pengembang`
  ADD PRIMARY KEY (`id_pengembang`);

--
-- Indexes for table `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id_projek`),
  ADD KEY `id_pengembang` (`id_pengembang`),
  ADD KEY `id_pengembang_2` (`id_pengembang`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id_property`),
  ADD KEY `id_account` (`id_account`),
  ADD KEY `id_projek` (`id_projek`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_account` (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `foto_property`
--
ALTER TABLE `foto_property`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id_lead` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `opportunity`
--
ALTER TABLE `opportunity`
  MODIFY `id_opportunity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_accjab` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto_property`
--
ALTER TABLE `foto_property`
  ADD CONSTRAINT `fk_ftproperty` FOREIGN KEY (`id_property`) REFERENCES `property` (`id_property`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `opportunity`
--
ALTER TABLE `opportunity`
  ADD CONSTRAINT `fk_oppacc` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_opppro` FOREIGN KEY (`id_property`) REFERENCES `property` (`id_property`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_orderacc` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderpro` FOREIGN KEY (`id_property`) REFERENCES `property` (`id_property`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projek`
--
ALTER TABLE `projek`
  ADD CONSTRAINT `fk_propem` FOREIGN KEY (`id_pengembang`) REFERENCES `pengembang` (`id_pengembang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk_proacc` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proproj` FOREIGN KEY (`id_projek`) REFERENCES `projek` (`id_projek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schaacc` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
