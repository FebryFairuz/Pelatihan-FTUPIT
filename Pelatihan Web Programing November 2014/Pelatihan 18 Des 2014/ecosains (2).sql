-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2014 at 05:23 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecosains`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`id_brands` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id_brands`, `nama`) VALUES
(1, 'Macbeth');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `event` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE IF NOT EXISTS `jenis_produk` (
`id_jenis` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis`, `nama`) VALUES
(1, 'Analitical'),
(2, 'General'),
(3, 'Life');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id_level` int(10) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'sales'),
(4, 'agen');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id_news` int(10) NOT NULL,
  `news` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `news`, `foto`, `id_user`, `created_at`, `title`) VALUES
(1, 'sdcsdcsd  sdf ds fsd fsdf sdf sdf ', 'dsfsdf.jpg', 1, '2014-11-19 23:17:18', 'erwerewrwer');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
`id_picture` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `jenis` enum('product','user') NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id_product` int(11) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `id_brand` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `partnumber` varchar(20) NOT NULL,
  `garansi` varchar(10) NOT NULL,
  `list_price` double NOT NULL,
  `nett_price` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_jenis`, `id_brand`, `id_user`, `nama`, `deskripsi`, `jumlah`, `partnumber`, `garansi`, `list_price`, `nett_price`, `created_at`) VALUES
(7, 3, 1, 1, 'Sendal Jepit', 'Sendal ternyaman sedunia....', 20, 'ssss00002', '1', 90000, 100000, '2014-12-21 13:19:00'),
(10, 1, 1, 1, 'Sepokat', 'ljlkjklj', 8, 'kjhkj8888', '8', 8999, 89999, '2014-12-21 13:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id_service` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `garansi` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(10) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal` varchar(5) NOT NULL,
  `province` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone_company` varchar(20) NOT NULL,
  `email_company` varchar(30) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `company_url` varchar(50) NOT NULL,
  `product_interest` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone_person` varchar(20) NOT NULL,
  `email_person` varchar(30) NOT NULL,
  `id_level` int(10) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `company_name`, `address`, `city`, `postal`, `province`, `country`, `phone_company`, `email_company`, `fax`, `company_url`, `product_interest`, `fullname`, `phone_person`, `email_person`, `id_level`, `created_at`) VALUES
(1, 'admin', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00'),
(2, 'febry', 'febry', 'febry fairuz foundation', '123fdsfsdfdsfdsfsdf', 'bogor', '16164', 'jawa barat', '', '000', 'febryfairuz@gmail.co', '8999', 'http://febryfairuz.hol.es', 'hh', 'febry fairuz', '899', 'febryfairuz@gmail.co', 4, '0000-00-00'),
(3, 'udinudin', 'udinudin', 'sia', 'kjhjkhkjhjk', 'kjhkjhkjh', '22222', 'mmbmnbmnb', 'ID', '898989898989898', 'febryfairuz@gmail.com', '8798798798798', 'http://www.febryfairuz.hol.es', 'kjhkjkhkjh', 'udin jubaedah', '98798798798798798798', 'udin@gmail.com', 3, '2014-12-05'),
(4, 'dudung', '123456', 'jlkokoko', 'jhjhgjgjg', 'hbjkbjhbjhb', 'hjbbj', 'hjbjhbjhbjhb', 'ID', '89898989898989898', 'udin@gmail.com', 'jhbjhbjhgjhgjhg', 'http://www.xxxx.com', 'jkhkjhkjhkjh', 'saskia gotik', '9809809809808098', 'saskia@gmail.com', 4, '2014-12-05'),
(6, 'kikii', 'kikii', 'hjhkj232323', 'hkjhkjhkjhk', 'kjhkjhkjh', 'kjhkj', 'jkhkjhkjhkjh', '', '97987987987987897', 'ii@gmail.com', 'hghjgjhg', 'http://www.iii.com', 'kljkkhjkh', 'kikikikiki', '2232323232323', 'fff@ggg.vom', 4, '2014-12-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id_brands`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
 ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
 ADD PRIMARY KEY (`id_picture`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id_brands` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
MODIFY `id_picture` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `id_service` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
