-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 03:06 AM
-- Server version: 5.6.16
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_inf3c`
--
CREATE DATABASE IF NOT EXISTS `db_inf3c` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_inf3c`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

DROP TABLE IF EXISTS `tbl_mahasiswa`;
CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `idpk` varchar(3) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `jeniskelamin`, `tgllahir`, `idpk`) VALUES
('j3c111809', 'Dewi', 'P', '2014-09-01', 'INF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

DROP TABLE IF EXISTS `tbl_pengguna`;
CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `username` varchar(9) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`username`, `password`, `status`) VALUES
('Admin', '123', '0'),
('User', 'abc', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pk`
--

DROP TABLE IF EXISTS `tbl_pk`;
CREATE TABLE IF NOT EXISTS `tbl_pk` (
  `idpk` varchar(3) NOT NULL,
  `namapk` varchar(50) NOT NULL,
  PRIMARY KEY (`idpk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pk`
--

INSERT INTO `tbl_pk` (`idpk`, `namapk`) VALUES
('INF', 'Manajemen Informatika'),
('TEK', 'Teknik Komputer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
