-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 04:57 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `ID_DOKTER` varchar(30) NOT NULL,
  `NAMA_DOKTER` varchar(30) DEFAULT NULL,
  `SPESIALIS` varchar(30) DEFAULT NULL,
  `JAM_KERJA` time DEFAULT NULL,
  `TARIF_DOKTER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`ID_DOKTER`, `NAMA_DOKTER`, `SPESIALIS`, `JAM_KERJA`, `TARIF_DOKTER`) VALUES
('D1', 'Dr. Messi', 'Jantung', '08:00:00', 100000),
('D2', 'Dr. Suarez', 'Syaraf', '09:00:00', 100000),
('D3', 'Dr. Alex', 'Jantung', '10:00:00', 200000),
('D4', 'Dr. Bravo', 'Syaraf', '11:00:00', 200000),
('D5', 'Dr. Morata', 'Jantung', '12:00:00', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `ID_PASIEN` varchar(30) NOT NULL,
  `ID_RUANG` varchar(30) DEFAULT NULL,
  `NAMA_PASIEN` varchar(30) DEFAULT NULL,
  `PENYAKIT` varchar(30) NOT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `TGL_MASUK` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`ID_PASIEN`, `ID_RUANG`, `NAMA_PASIEN`, `PENYAKIT`, `TGL_LAHIR`, `ALAMAT`, `TGL_MASUK`) VALUES
('P1', 'R3', 'Rooney', 'Jantung', '1996-04-09', 'Tuban', '2016-06-01'),
('P2', 'R3', 'De Gea', 'Syaraf', '1997-04-09', 'Bojonegoro', '2016-06-02'),
('P3', 'R1', 'Martial', 'Jantung', '1998-03-04', 'Lamongan', '2016-06-02'),
('P4', 'R2', 'Darmian', 'Syaraf', '1993-03-04', 'Surabaya', '2016-06-09'),
('P5', 'R2', 'Smaalling', 'Jantung', '1993-09-04', 'Jakarta', '2016-06-02'),
('P6', 'R1', 'Mata', 'Syaraf', '1992-03-09', 'Blitar', '2016-06-11');

--
-- Triggers `pasien`
--
DELIMITER $$
CREATE TRIGGER `KUOTA_KAMAR` AFTER INSERT ON `pasien` FOR EACH ROW BEGIN

UPDATE ruang SET KUOTA = KUOTA - 1
WHERE ID_RUANG =NEW.ID_RUANG;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_pasien_pulang` AFTER DELETE ON `pasien` FOR EACH ROW BEGIN
  INSERT INTO tr_pasien_pulang
        (ID_PASIEN,
	       ID_RUANG,
         NAMA_PASIEN,
         PENYAKIT,
         TGL_LAHIR,
         ALAMAT,
         TGL_MASUK,
         TGL_PULANG
        )
  VALUES
        (OLD.ID_PASIEN,
         OLD.ID_RUANG,
         OLD.NAMA_PASIEN,
         OLD.PENYAKIT,
         OLD.TGL_LAHIR,
         OLD.ALAMAT,
         OLD.TGL_MASUK,
         SYSDATE()
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` varchar(30) NOT NULL,
  `ID_PASIEN` varchar(30) DEFAULT NULL,
  `ID_PETUGAS` varchar(30) DEFAULT NULL,
  `TGL_PEMBAYARAN` date DEFAULT NULL,
  `TOTAL_PEMBAYARAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_PASIEN`, `ID_PETUGAS`, `TGL_PEMBAYARAN`, `TOTAL_PEMBAYARAN`) VALUES
('PEM1', 'P4', 'PE1', '2016-06-09', 300000),
('PEM2', 'P2', 'PE1', '2016-06-09', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `ID_PASIEN` varchar(30) NOT NULL,
  `ID_DOKTER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `ID_PETUGAS` varchar(30) NOT NULL,
  `NAMA_PETUGAS` varchar(30) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`ID_PETUGAS`, `NAMA_PETUGAS`, `USERNAME`, `PASSWORD`) VALUES
('PE1', 'Admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `ID_RUANG` varchar(30) NOT NULL,
  `NAMA_RUANG` varchar(10) DEFAULT NULL,
  `KELAS` varchar(5) DEFAULT NULL,
  `TARIF_RUANG` int(11) DEFAULT NULL,
  `KUOTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`ID_RUANG`, `NAMA_RUANG`, `KELAS`, `TARIF_RUANG`, `KUOTA`) VALUES
('R1', 'Mawar', '1', 100000, 197),
('R2', 'Melati', '2', 150000, 98),
('R3', 'Anggrek', '3', 200000, 47);

-- --------------------------------------------------------

--
-- Table structure for table `tr_pasien_pulang`
--

CREATE TABLE `tr_pasien_pulang` (
  `ID_PASIEN` varchar(30) NOT NULL,
  `ID_RUANG` varchar(30) DEFAULT NULL,
  `NAMA_PASIEN` varchar(30) DEFAULT NULL,
  `PENYAKIT` varchar(30) NOT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `TGL_MASUK` date DEFAULT NULL,
  `TGL_PULANG` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_pasien_pulang`
--

INSERT INTO `tr_pasien_pulang` (`ID_PASIEN`, `ID_RUANG`, `NAMA_PASIEN`, `PENYAKIT`, `TGL_LAHIR`, `ALAMAT`, `TGL_MASUK`, `TGL_PULANG`) VALUES
('P7', 'R1', 'Herrera', 'Jantung', '1991-03-08', 'Tuban', '2016-06-02', '2016-06-19 09:00:23'),
('P8', 'R3', 'Rashford', 'Syaraf', '1993-02-03', 'Bojonegoro', '2016-06-11', '2016-06-19 09:00:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`ID_DOKTER`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_PASIEN`),
  ADD KEY `FK_INAP` (`ID_RUANG`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `FK_BAYAR1` (`ID_PASIEN`),
  ADD KEY `FK_BAYAR2` (`ID_PETUGAS`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`ID_PASIEN`,`ID_DOKTER`),
  ADD KEY `FK_PERIKSA2` (`ID_DOKTER`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`ID_PETUGAS`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`ID_RUANG`);

--
-- Indexes for table `tr_pasien_pulang`
--
ALTER TABLE `tr_pasien_pulang`
  ADD PRIMARY KEY (`ID_PASIEN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `FK_INAP` FOREIGN KEY (`ID_RUANG`) REFERENCES `ruang` (`ID_RUANG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_BAYAR1` FOREIGN KEY (`ID_PASIEN`) REFERENCES `pasien` (`ID_PASIEN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BAYAR2` FOREIGN KEY (`ID_PETUGAS`) REFERENCES `petugas` (`ID_PETUGAS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `FK_PERIKSA` FOREIGN KEY (`ID_PASIEN`) REFERENCES `pasien` (`ID_PASIEN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERIKSA2` FOREIGN KEY (`ID_DOKTER`) REFERENCES `dokter` (`ID_DOKTER`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
