-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:55 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeupnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absen` int(11) NOT NULL,
  `tgl_masuk_jam` datetime NOT NULL,
  `tgl_pulang_jam` datetime DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `tgl_masuk_jam`, `tgl_pulang_jam`, `id_admin`) VALUES
(1, '2018-07-16 09:37:05', '2018-07-24 20:59:35', 2),
(2, '2018-07-24 20:59:42', '2018-07-24 20:59:50', 2),
(3, '2018-07-24 21:36:47', '2018-07-24 21:50:01', 4),
(4, '2018-07-24 21:50:56', '2018-07-24 21:51:23', 4),
(5, '2018-07-24 21:51:25', '2018-07-24 21:51:27', 4),
(6, '2018-07-24 22:00:38', '2018-07-24 22:00:40', 3),
(7, '2018-07-24 22:10:39', '2018-07-24 22:10:42', 8);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_role`, `id_golongan`, `username`, `password`, `foto`) VALUES
(1, 1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin.jpg'),
(2, 1, 2, 'hrd', '4bf31e6f4b818056eaacb83dff01c9b8', 'new'),
(3, 1, 3, 'logistic', '1e15f256bcbf4e3d8a9a3c6262a64401', 'admin.jpg'),
(4, 1, 4, 'keuangan', 'a4151d4b2856ec63368a7c784b1f0a6e', 'admin.jpg'),
(5, 1, 5, 'userhrd', 'b5f0a3b841a1dce7f0bc6d067e355436', 'admin.jpg'),
(6, 1, 6, 'userkeua', '30e0f82143df680fd6fa25595726ed91', 'admin.jpg'),
(7, 1, 7, 'userlogi', '61eea383ead83a858743b5279b45aa68', 'admin.jpeg'),
(8, 1, 3, 'newlog', '1e15f256bcbf4e3d8a9a3c6262a64401', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE IF NOT EXISTS `cash_flow` (
  `id_transaksi` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `id_pembayaran` int(10) DEFAULT NULL,
  `id_Pengeluaran` int(10) DEFAULT NULL,
  `id_utang` int(10) DEFAULT NULL,
  `id_pembelian` int(11) DEFAULT NULL,
  `tgl_cashflow` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id_transaksi`, `id_user`, `id_pembayaran`, `id_Pengeluaran`, `id_utang`, `id_pembelian`, `tgl_cashflow`, `keterangan`) VALUES
(3, 1, 0, 0, 0, 4, '2017-12-07', 'pembelian produk Lipstik Oriflame'),
(7, 1, 4, 0, 0, 0, '2018-07-15', 'Pemasukan Minggu 1 Bulan Juli'),
(11, 1, 0, 0, 3, 0, '2018-07-15', 'utang toko'),
(14, 1, 0, 0, 4, 0, '2018-07-16', 'koi'),
(15, 1, 0, 5, 0, 0, '2016-01-01', 'Pembayaran Beli Pulsa'),
(17, 1, 0, 6, 0, 0, '2016-01-01', 'Pembayaran Bayar listrik'),
(18, 1, 0, 7, 0, 0, '2016-01-01', 'Pembayaran beli bensin'),
(19, 1, 0, 8, 0, 0, '2016-01-01', 'Pembayaran bayar air'),
(20, 1, 0, 9, 0, 0, '2016-01-01', 'Pembayaran beli kertas'),
(21, 1, 0, 10, 0, 0, '2016-01-01', 'Pembayaran Beli tinta printer'),
(22, 1, 0, 11, 0, 0, '2016-01-01', 'Pembayaran Beli Alat Tulis'),
(23, 1, 0, 12, 0, 0, '2016-01-01', 'Pembayaran Beli lakban'),
(24, 1, 0, 13, 0, 0, '2016-01-01', 'Pembayaran beli kardus'),
(25, 1, 0, 14, 0, 0, '2016-01-01', 'Pembayaran Beli kresek'),
(26, 1, 0, 15, 0, 0, '2016-01-01', 'Pembayaran beli nota'),
(27, 1, 6, 0, 0, 0, '2018-07-26', 'Pemasukan Bulan Januari'),
(28, 1, 0, 16, 0, 0, '2016-03-01', 'Pembayaran beli bensin'),
(29, 1, 0, 17, 0, 0, '2016-03-01', 'Pembayaran Beli Pulsa'),
(30, 1, 0, 18, 0, 0, '2016-03-01', 'Pembayaran bayar listrik'),
(31, 1, 0, 19, 0, 0, '2016-03-01', 'Pembayaran bayar air'),
(32, 1, 0, 20, 0, 0, '2016-03-01', 'Pembayaran Beli Alat Tulis'),
(33, 1, 0, 21, 0, 0, '2016-03-01', 'Pembayaran beli lakban'),
(34, 1, 0, 22, 0, 0, '2016-03-01', 'Pembayaran Beli kardus'),
(35, 1, 0, 23, 0, 0, '2016-03-01', 'Pembayaran Beli kresek'),
(36, 1, 0, 24, 0, 0, '2016-03-01', 'Pembayaran beli buble wrap'),
(37, 1, 0, 25, 0, 0, '2016-03-01', 'Pembayaran beli product makeup'),
(38, 1, 7, 0, 0, 0, '2018-07-26', 'Pemasukan Bulan Maret'),
(39, 1, 0, 26, 0, 0, '2017-01-01', 'Pembayaran beli bensin'),
(40, 1, 0, 27, 0, 0, '2017-01-01', 'Pembayaran Beli pulsa'),
(41, 1, 0, 28, 0, 0, '2017-01-01', 'Pembayaran bayar listrik'),
(42, 1, 0, 29, 0, 0, '2017-01-01', 'Pembayaran bayar air'),
(43, 1, 0, 30, 0, 0, '2017-01-01', 'Pembayaran Beli kertas'),
(44, 1, 0, 31, 0, 0, '2017-01-01', 'Pembayaran Beli tinta printer'),
(45, 1, 0, 32, 0, 0, '2017-01-01', 'Pembayaran Beli Alat Tulis'),
(46, 1, 0, 33, 0, 0, '2017-01-01', 'Pembayaran beli lakban'),
(47, 1, 0, 34, 0, 0, '2017-01-01', 'Pembayaran beli kardus'),
(48, 1, 0, 35, 0, 0, '2017-01-01', 'Pembayaran beli kresek'),
(49, 1, 0, 36, 0, 0, '2017-01-01', 'Pembayaran beli nota'),
(50, 1, 0, 37, 0, 0, '2016-01-01', 'Pembayaran beli product makeup'),
(51, 1, 8, 0, 0, 0, '2018-07-26', 'Pemasukan Bulan Januari 2017'),
(52, 1, 0, 38, 0, 0, '2017-02-01', 'Pembayaran beli bensin'),
(53, 1, 0, 39, 0, 0, '2016-02-01', 'Pembayaran beli pulsa'),
(54, 1, 0, 40, 0, 0, '2017-02-01', 'Pembayaran bayar listrik'),
(55, 1, 0, 41, 0, 0, '2017-02-01', 'Pembayaran bayar air'),
(56, 1, 0, 42, 0, 0, '2017-02-01', 'Pembayaran beli alat tulis'),
(57, 1, 0, 43, 0, 0, '2017-02-01', 'Pembayaran beli lakban'),
(58, 1, 0, 44, 0, 0, '2016-02-01', 'Pembayaran beli kardus'),
(59, 1, 0, 45, 0, 0, '2017-02-01', 'Pembayaran beli kresek'),
(60, 1, 0, 46, 0, 0, '2017-02-01', 'Pembayaran beli buble wrap'),
(61, 1, 0, 47, 0, 0, '2017-02-01', 'Pembayaran beli product makeup'),
(62, 1, 9, 0, 0, 0, '2018-07-26', 'Pemasukan bulan Februari 2017'),
(63, 1, 0, 48, 0, 0, '2018-01-01', 'Pembayaran beli bensin'),
(64, 1, 0, 49, 0, 0, '2018-01-01', 'Pembayaran beli pulsa'),
(65, 1, 0, 50, 0, 0, '2018-01-01', 'Pembayaran bayar listrik'),
(66, 1, 0, 51, 0, 0, '2016-01-01', 'Pembayaran bayar air'),
(67, 1, 0, 52, 0, 0, '2018-01-01', 'Pembayaran beli kertas'),
(68, 1, 0, 53, 0, 0, '2018-01-01', 'Pembayaran Beli tinta printer'),
(69, 1, 0, 54, 0, 0, '2018-01-01', 'Pembayaran Beli Alat Tulis'),
(70, 1, 0, 55, 0, 0, '2018-01-01', 'Pembayaran beli lakban'),
(71, 1, 0, 56, 0, 0, '2018-01-01', 'Pembayaran beli kardus'),
(72, 1, 0, 57, 0, 0, '2018-01-01', 'Pembayaran beli kresek'),
(73, 1, 0, 58, 0, 0, '2018-01-01', 'Pembayaran beli buble wrap'),
(74, 1, 0, 59, 0, 0, '2018-01-01', 'Pembayaran beli product makeup'),
(75, 1, 10, 0, 0, 0, '2018-07-26', 'Pemasukan Bulan Januari 2018'),
(76, 1, 0, 60, 0, 0, '2018-04-01', 'Pembayaran beli bensin'),
(77, 1, 0, 61, 0, 0, '2018-04-01', 'Pembayaran beli pulsa'),
(78, 1, 0, 62, 0, 0, '2018-04-01', 'Pembayaran bayar listrik'),
(79, 1, 0, 63, 0, 0, '2018-04-01', 'Pembayaran bayar air'),
(80, 1, 0, 64, 0, 0, '2018-04-01', 'Pembayaran Beli Alat Tulis'),
(81, 1, 0, 65, 0, 0, '2018-04-01', 'Pembayaran beli lakban'),
(82, 1, 0, 66, 0, 0, '2018-04-01', 'Pembayaran beli kardus'),
(83, 1, 0, 67, 0, 0, '2018-04-01', 'Pembayaran beli kresek'),
(84, 1, 0, 68, 0, 0, '2018-04-01', 'Pembayaran beli buble wrap'),
(85, 1, 0, 69, 0, 0, '2018-04-01', 'Pembayaran beli product makeup'),
(86, 1, 11, 0, 0, 0, '2018-07-26', 'Pemasukan Bulan April 2018');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `id_gaji` int(3) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `total_gaji`, `tanggal`, `status`, `id_admin`) VALUES
(1, 1200000, '2018-07-16', 'aktif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
  `id_gol` int(11) NOT NULL,
  `nama_gol` varchar(15) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `nama_gol`, `gaji_pokok`) VALUES
(1, 'Super Admin', 10000000),
(2, 'HRD', 8000000),
(3, 'Logistik', 8000000),
(4, 'Keuangan', 8000000),
(5, 'User HRD', 3000000),
(6, 'User Keuangan', 3000000),
(7, 'User Logistic', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'eyes'),
(2, 'lips'),
(3, 'face'),
(4, 'beauty & skin care'),
(6, 'Brush'),
(7, 'Kutek');

-- --------------------------------------------------------

--
-- Table structure for table `labarugi`
--

CREATE TABLE IF NOT EXISTS `labarugi` (
  `id_labarugi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `penjualan` int(11) NOT NULL,
  `retur_penjualan` int(11) NOT NULL,
  `potongan_penjualan` int(11) NOT NULL,
  `jml_retur_potongan_penjualan` int(11) NOT NULL,
  `penjualan_bersih` int(11) NOT NULL,
  `harga_pokok_penjualan` int(11) NOT NULL,
  `laba_bruto` int(11) NOT NULL,
  `biaya_operasional` int(11) NOT NULL,
  `biaya_adm_umum` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `laba_usaha_bersih` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labarugi`
--

INSERT INTO `labarugi` (`id_labarugi`, `id_user`, `penjualan`, `retur_penjualan`, `potongan_penjualan`, `jml_retur_potongan_penjualan`, `penjualan_bersih`, `harga_pokok_penjualan`, `laba_bruto`, `biaya_operasional`, `biaya_adm_umum`, `total_biaya`, `laba_usaha_bersih`, `tanggal`) VALUES
(7, 1, 207375000, 0, 0, 0, 207375000, 167900000, 39475000, 20051800, 0, 20051800, 19423200, '2020-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE IF NOT EXISTS `neraca` (
  `id_neraca` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` int(1) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `tgl_neraca` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neraca`
--

INSERT INTO `neraca` (`id_neraca`, `id_user`, `jenis`, `total_transaksi`, `tgl_neraca`, `keterangan`) VALUES
(1, 1, 1, 193951800, '2020-01-01', 'Kas awal 2020'),
(2, 1, 2, 5000000, '2020-01-02', 'Laptop'),
(3, 1, 1, 250000, '2020-01-02', 'Router'),
(4, 1, 1, 50000, '2020-01-02', 'Kabel Lan'),
(5, 1, 1, 2000000, '2020-01-02', 'Handphone'),
(6, 1, 1, 800000, '2020-01-02', 'Printer'),
(7, 1, 1, 500000, '2020-01-02', 'Meja'),
(8, 1, 1, 500000, '2020-01-02', 'Kursi'),
(9, 1, 2, 40000, '2020-01-02', 'Spanduk'),
(10, 1, 1, 700000, '2020-01-02', 'Etalase'),
(11, 1, 3, 6000000, '2020-01-03', 'Sewa Gedung'),
(12, 1, 3, 20051800, '2020-01-03', 'Biaya Operasional'),
(13, 1, 3, 167900000, '2020-01-03', 'Modal Beli Produk'),
(14, 1, 3, 9840000, '2020-01-03', 'Pengadaan Investasi');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE IF NOT EXISTS `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemasukan` varchar(100) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `total_pemasukan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `id_user`, `nama_pemasukan`, `tgl_pemasukan`, `total_pemasukan`) VALUES
(0, 0, '0', '2018-07-01', 0),
(4, 1, 'Pemasukan Minggu 1 Bulan Juli', '2018-07-09', 15000000),
(6, 1, 'Pemasukan Bulan Januari', '2016-01-01', 15000000),
(7, 1, 'Pemasukan Bulan Maret', '2016-03-01', 14750000),
(8, 1, 'Pemasukan Bulan Januari 2017', '2017-01-01', 13750000),
(9, 1, 'Pemasukan bulan Februari 2017', '2017-02-01', 13875000),
(10, 1, 'Pemasukan Bulan Januari 2018', '2018-01-01', 15000000),
(11, 1, 'Pemasukan Bulan April 2018', '2018-04-01', 16125000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `kode_pembayaran` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `total_pembayaran`, `tgl_pembayaran`, `kode_pembayaran`) VALUES
(1, 1, 268000, '2018-07-16', '0234579'),
(2, 2, 2412000, '2018-07-16', '0234579'),
(3, 3, 350000, '2018-07-16', '0245789'),
(4, 4, 50000, '2018-07-16', '0123678'),
(5, 5, 150000, '2018-07-18', '0124579');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` int(50) NOT NULL,
  `harga_total` int(50) NOT NULL,
  `id_supp` int(11) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_produk`, `qty`, `harga_total`, `id_supp`, `tgl_beli`) VALUES
(0, 0, 7, 0, 0, 3, '2018-07-15'),
(4, 1, 4, 100, 7500000, 1, '2017-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `kode_pemesanan` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total_pemesanan` int(11) NOT NULL,
  `status_pemesanan` int(11) NOT NULL DEFAULT '0',
  `kode_pembayaran` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `id_user`, `id_produk`, `qty`, `tanggal_pemesanan`, `total_pemesanan`, `status_pemesanan`, `kode_pembayaran`) VALUES
(1, '23789', 2, 32, 1, '2018-07-16', 268000, 1, '0234579'),
(2, '13678', 2, 32, 9, '2018-07-16', 2412000, 1, '0234579'),
(3, '34679', 2, 33, 1, '2018-07-16', 350000, 1, '0245789'),
(4, '01378', 2, 1, 1, '2018-07-16', 50000, 1, '0123678'),
(5, '01589', 1, 1, 3, '2018-07-18', 150000, 1, '0124579');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `id_user`, `nama_barang`, `harga_satuan`, `qty`, `total_harga`, `tanggal_pengeluaran`) VALUES
(0, 0, '0', 0, 0, 0, '2018-07-14'),
(5, 1, 'Beli Pulsa', 160000, 160000, 160000, '2016-01-01'),
(6, 1, 'Bayar listrik', 82000, 1, 82000, '2016-01-01'),
(7, 1, 'beli bensin', 300000, 4, 300000, '2016-01-01'),
(8, 1, 'bayar air', 60000, 1, 60000, '2016-01-01'),
(9, 1, 'beli kertas', 35000, 1, 35000, '2016-01-01'),
(10, 1, 'Beli tinta printer', 80000, 1, 80000, '2016-01-01'),
(11, 1, 'Beli Alat Tulis', 100000, 1, 100000, '2016-01-01'),
(12, 1, 'Beli lakban', 5000, 10, 50000, '2016-01-01'),
(13, 1, 'beli kardus', 5000, 10, 50000, '2016-01-01'),
(14, 1, 'Beli kresek', 20000, 1, 20000, '2016-01-01'),
(15, 1, 'beli nota', 6000, 1, 6000, '2016-01-01'),
(16, 1, 'beli bensin', 300000, 1, 300000, '2016-03-01'),
(17, 1, 'Beli Pulsa', 160000, 1, 160000, '2016-03-01'),
(18, 1, 'bayar listrik', 820400, 1, 820400, '2016-03-01'),
(19, 1, 'bayar air', 60000, 1, 60000, '2016-03-01'),
(20, 1, 'Beli Alat Tulis', 100000, 1, 100000, '2016-03-01'),
(21, 1, 'beli lakban', 5000, 10, 50000, '2016-03-01'),
(22, 1, 'Beli kardus', 5000, 10, 50000, '2016-03-01'),
(23, 1, 'Beli kresek', 20000, 1, 20000, '2016-03-01'),
(24, 1, 'beli buble wrap', 100000, 1, 100000, '2016-03-01'),
(25, 1, 'beli product makeup', 100000, 120, 12000000, '2016-03-01'),
(26, 1, 'beli bensin', 300000, 1, 300000, '2017-01-01'),
(27, 1, 'Beli pulsa', 160000, 1, 160000, '2017-01-01'),
(28, 1, 'bayar listrik', 820400, 1, 820400, '2017-01-01'),
(29, 1, 'bayar air', 60000, 1, 60000, '2017-01-01'),
(30, 1, 'Beli kertas', 35000, 1, 35000, '2017-01-01'),
(31, 1, 'Beli tinta printer', 80000, 1, 80000, '2017-01-01'),
(32, 1, 'Beli Alat Tulis', 100000, 1, 100000, '2017-01-01'),
(33, 1, 'beli lakban', 5000, 10, 50000, '2017-01-01'),
(34, 1, 'beli kardus', 5000, 10, 50000, '2017-01-01'),
(35, 1, 'beli kresek', 20000, 1, 20000, '2017-01-01'),
(36, 1, 'beli nota', 6000, 1, 6000, '2017-01-01'),
(37, 1, 'beli product makeup', 100000, 10, 11000000, '2016-01-01'),
(38, 1, 'beli bensin', 300000, 1, 300000, '2017-02-01'),
(39, 1, 'beli pulsa', 160000, 1, 160000, '2017-02-01'),
(40, 1, 'bayar listrik', 820400, 1, 820400, '2017-02-01'),
(41, 1, 'bayar air', 60000, 1, 60000, '2017-02-01'),
(42, 1, 'beli alat tulis', 100000, 1, 100000, '2017-02-01'),
(43, 1, 'beli lakban', 5000, 10, 50000, '2017-02-01'),
(44, 1, 'beli kardus', 5000, 10, 50000, '2016-02-01'),
(45, 1, 'beli kresek', 20000, 1, 20000, '2017-02-01'),
(46, 1, 'beli buble wrap', 100000, 1, 100000, '2017-02-01'),
(47, 1, 'beli product makeup', 100000, 111, 11100000, '2017-02-01'),
(48, 1, 'beli bensin', 300000, 1, 300000, '2018-01-01'),
(49, 1, 'beli pulsa', 160000, 1, 160000, '2018-01-01'),
(50, 1, 'bayar listrik', 820400, 1, 820400, '2018-01-01'),
(51, 1, 'bayar air', 60000, 1, 60000, '2016-01-01'),
(52, 1, 'beli kertas', 35000, 1, 35000, '2018-01-01'),
(53, 1, 'Beli tinta printer', 80000, 1, 80000, '2018-01-01'),
(54, 1, 'Beli Alat Tulis', 100000, 1, 100000, '2018-01-01'),
(55, 1, 'beli lakban', 5000, 10, 50000, '2018-01-01'),
(56, 1, 'beli kardus', 5000, 10, 50000, '2018-01-01'),
(57, 1, 'beli kresek', 20000, 1, 20000, '2018-01-01'),
(58, 1, 'beli buble wrap', 100000, 1, 100000, '2018-01-01'),
(59, 1, 'beli product makeup', 100000, 120, 12000000, '2018-01-01'),
(60, 1, 'beli bensin', 300000, 1, 300000, '2018-04-01'),
(61, 1, 'beli pulsa', 160000, 1, 160000, '2018-04-01'),
(62, 1, 'bayar listrik', 820400, 1, 820400, '2018-04-01'),
(63, 1, 'bayar air', 60000, 1, 60000, '2018-04-01'),
(64, 1, 'Beli Alat Tulis', 100000, 1, 100000, '2018-04-01'),
(65, 1, 'beli lakban', 5000, 10, 50000, '2018-04-01'),
(66, 1, 'beli kardus', 5000, 10, 50000, '2018-04-01'),
(67, 1, 'beli kresek', 20000, 1, 20000, '2018-04-01'),
(68, 1, 'beli buble wrap', 100000, 1, 100000, '2018-04-01'),
(69, 1, 'beli product makeup', 100000, 130, 13000000, '2018-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_modal`
--

CREATE TABLE IF NOT EXISTS `perubahan_modal` (
  `id_perubahan_modal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_laba` int(11) NOT NULL,
  `modal_awal` int(11) NOT NULL,
  `prive` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perubahan_modal`
--

INSERT INTO `perubahan_modal` (`id_perubahan_modal`, `id_user`, `id_laba`, `modal_awal`, `prive`, `tanggal`) VALUES
(1, 1, 7, 193951800, 0, '2020-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga_jual`, `harga_beli`, `id_kategori`, `deskripsi`, `gambar`) VALUES
(1, 'blush on', 91, 50000, 0, 1, 'pemerah pipi', '41XA2xlxl-L__SY355_1.jpg'),
(2, 'mascara maybeline', -4, 100000, 0, 1, 'lala', 'brosur_sidoarjo1.jpg'),
(3, 'Barang Baru', 5, 10000, 9000, 1, 'sfjksdf sdfkjsdkf', 'brosur_sidoarjo2.jpg'),
(4, 'Lipstik Oriflame', 344, 85000, 70000, 1, 'product baru asli dari oriflame yg sada sdasa', '18.PNG'),
(5, 'r', 0, 1, 1, 1, 'w', 'Screenshot_(1).png'),
(6, 'sa', 90, 100000, 90000, 1, 'mata', 'goal.png'),
(7, 'Absolute Icon Eyeshadow Palette', 5, 70000, 50000, 1, 'eyes', 'Absolute_Icon_Eyeshadow_Palette.PNG'),
(8, 'Cathy Doll Nude Me Eyeshadow', 5, 20000, 16000, 1, 'eyes', 'Cathy_Doll_Nude_Me_Eyeshadow.PNG'),
(9, 'L.A. GIRL Pro Primer Eyeshadow Stick', 5, 120000, 90000, 1, 'eyes', 'L_A__GIRL_Pro_Primer_Eyeshadow_Stick.PNG'),
(10, 'MILANI Everday Eyes Powder Eyeshadow Collection', 5, 210000, 190000, 1, 'eyes', 'MILANI_Everday_Eyes_Powder_Eyeshadow_Collection.PNG'),
(11, 'NYX Jumbo Eye Pencil', 5, 150000, 120000, 1, 'eyes', 'NYX_Jumbo_Eye_Pencil.PNG'),
(12, 'Emina Moist In A Bottle Moisturizer', 5, 70000, 50000, 4, 'beauty', 'Emina_Moist_In_A_Bottle_Moisturizer.PNG'),
(13, 'MAKE OVER Hydration Serum 33 Ml', 5, 80000, 60000, 4, 'beauty', 'MAKE_OVER_Hydration_Serum_33_Ml.PNG'),
(14, 'Mineral Botanica Brightening Serum', 5, 60000, 40000, 4, 'beauty', 'Mineral_Botanica_Brightening_Serum.PNG'),
(15, 'Paula''s Choice Resist Super Antioxidant Concentrat', 5, 150000, 120000, 4, 'beauty', 'Paulas_Choice_Resist_Super_Antioxidant_Concentrate_Serum_-_Trial_0_17_Oz.PNG'),
(16, 'Paula''s Choice Skin Balancing Invisible Finish Moi', 5, 100000, 85000, 4, 'beauty', 'Paulas_Choice_Skin_Balancing_Invisible_Finish_Moisture_Gel_60_Ml.PNG'),
(17, 'Cathy Doll AA Matte Powder Cushion Oil Control SPF', 2, 100000, 80000, 3, 'face', 'Cathy_Doll_AA_Matte_Powder_Cushion_Oil_Control_SPF_50_PA+++.PNG'),
(18, 'Cathy Doll Cc Cream Speed White Light Beige Spf50 ', 5, 70000, 50000, 3, 'face', 'Cathy_Doll_Cc_Cream_Speed_White_Light_Beige_Spf50_Pa+++.PNG'),
(19, 'Cathy Doll Cc Cream Speed White Spf50 Pa+++ Sachet', 5, 150000, 125000, 3, 'face', 'Cathy_Doll_Cc_Cream_Speed_White_Spf50_Pa+++_Sachet.PNG'),
(20, 'Mehron Celebre Pro HD Make-Up', 5, 100000, 80000, 3, 'face', 'Mehron_Celebre_Pro_HD_Make-Up.PNG'),
(21, 'Milani Conceal + Perfect 2-In-1 Foundation + Conce', 5, 130000, 110000, 3, 'face', 'Milani_Conceal_+_Perfect_2-In-1_Foundation_+_Concealer.PNG'),
(22, 'CITY COLOR Be Matte Lipstick', 5, 60000, 40000, 2, 'lips', 'CITY_COLOR_Be_Matte_Lipstick.PNG'),
(23, 'CITY COLOR City Chic Lip Liner', 5, 60000, 50000, 2, 'lips', 'CITY_COLOR_City_Chic_Lip_Liner.PNG'),
(24, 'GIRLACTIK Matte Lip Paint', 5, 80000, 70000, 2, 'lips', 'GIRLACTIK_Matte_Lip_Paint.PNG'),
(25, 'JORDANA Sweet Cream Matte Liquid Lip Color', 5, 150000, 120000, 2, 'lips', 'JORDANA_Sweet_Cream_Matte_Liquid_Lip_Color.PNG'),
(26, 'L.A. GIRL Endless Auto Lipliner', 5, 120000, 90000, 2, 'lips', 'L_A__GIRL_Endless_Auto_Lipliner.PNG'),
(27, 'EVER GLAZE EG82304 Ultra Orchid', 5, 50000, 40000, 7, 'makeup cair', 'EVER_GLAZE_EG82304_Ultra_Orchid.PNG'),
(28, 'EVER GLAZE EG82341 I Wanna Be Your Lava', 5, 45000, 35000, 7, 'makeup cair', 'EVER_GLAZE_EG82341_I_Wanna_Be_Your_Lava.PNG'),
(29, 'Holographic #1207 Take a Trek', 5, 70000, 60000, 7, 'makeup cair', 'Holographic_1207_Take_a_Trek.PNG'),
(30, 'Icon Nails Gel Lacquer', 5, 150000, 120000, 7, 'makeup cair', 'Icon_Nails_Gel_Lacquer.PNG'),
(31, 'Noir Noir Lacquers', 6, 120000, 90000, 7, 'makeup cair', 'Noir_Noir_Lacquers.PNG'),
(32, 'BH Cosmetics Bright White - 6 Piece Brush Set With', 0, 268000, 200000, 6, 'Add a dash of flash to your makeup vanity with our Bright White 6 Piece Brush Set, a brilliant option for use at home and on the road. The multipurpose collection features must-have makeup brushes for eyes and face, including foundation, dual-fiber powder', 'brush1.jpg'),
(33, 'BH Cosmetics Chic - 14 Piece Brush Set With Cosmet', 9, 350000, 300000, 6, 'Blush, blend, line and define with our pale pink BH Chic 14 Piece Brush Set, a collection of professional-quality brush essentials for face, eyes, and lips. The two-tone synthetic brushes can be used with liquids, creams and powders to achieve precise mak', 'brush2.jpg'),
(34, 'Real Techniques Sculpting Set', 10, 280000, 240000, 6, 'sclupting brush set', 'brush3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(10) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `struk`
--

CREATE TABLE IF NOT EXISTS `struk` (
  `id_struk` int(10) NOT NULL,
  `id_pembayaran` int(10) NOT NULL,
  `id_pemesanan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'makmur jaya', 'malang', '321433'),
(2, 'sato jaya', 'jakarta', '989898'),
(3, 'amanah', 'surabaya', '76778'),
(4, 'sentosa jaya', 'surabaya', '456789'),
(5, 'sumber rejeko', 'malang', '345678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_role`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telp`, `username`, `password`) VALUES
(1, 2, 'Nafianta', 'jl Mergan Kel', 'nofalarema@gmail', 'Perempuan', 2147483647, 'nafi', '5bfb391e6148ab027d7389fed2427a86'),
(2, 2, 'aura', 'malang', 'aurakanzaaa@gmail.com', 'Perempuan', 9879, 'ara', '636bfa0fb2716ff876f5e33854cc9648');

-- --------------------------------------------------------

--
-- Table structure for table `utang`
--

CREATE TABLE IF NOT EXISTS `utang` (
  `id_utang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `total_utang` int(11) NOT NULL,
  `jml_utang` int(11) NOT NULL,
  `sisa_utang` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utang`
--

INSERT INTO `utang` (`id_utang`, `id_user`, `nama_barang`, `total_utang`, `jml_utang`, `sisa_utang`) VALUES
(0, 0, '0', 0, 0, 0),
(3, 1, 'utang toko', 10000000, 10000000, 0),
(4, 1, 'koi', 900000, 800000, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_golongan` (`id_golongan`);

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_Pengeluaran` (`id_Pengeluaran`),
  ADD KEY `id_utang` (`id_utang`,`id_pembelian`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD PRIMARY KEY (`id_labarugi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`id_neraca`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_kategori` (`id_produk`),
  ADD KEY `id_supp` (`id_supp`),
  ADD KEY `id_transaksi` (`id_user`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_transaksi` (`id_user`);

--
-- Indexes for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  ADD PRIMARY KEY (`id_perubahan_modal`),
  ADD KEY `laba_bersih` (`id_laba`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `struk`
--
ALTER TABLE `struk`
  ADD PRIMARY KEY (`id_struk`),
  ADD KEY `id_transaksi` (`id_pembayaran`),
  ADD KEY `id_user` (`id_pemesanan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `utang`
--
ALTER TABLE `utang`
  ADD PRIMARY KEY (`id_utang`),
  ADD KEY `id_transaksi` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `labarugi`
--
ALTER TABLE `labarugi`
  MODIFY `id_labarugi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id_neraca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  MODIFY `id_perubahan_modal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id_struk` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `utang`
--
ALTER TABLE `utang`
  MODIFY `id_utang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_gol`);

--
-- Constraints for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD CONSTRAINT `cash_flow_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cash_flow_ibfk_4` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `cash_flow_ibfk_6` FOREIGN KEY (`id_Pengeluaran`) REFERENCES `pengeluaran` (`id_pengeluaran`),
  ADD CONSTRAINT `cash_flow_ibfk_7` FOREIGN KEY (`id_utang`) REFERENCES `utang` (`id_utang`),
  ADD CONSTRAINT `cash_flow_ibfk_8` FOREIGN KEY (`id_pembayaran`) REFERENCES `pemasukan` (`id_pemasukan`);

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD CONSTRAINT `labarugi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id`);

--
-- Constraints for table `neraca`
--
ALTER TABLE `neraca`
  ADD CONSTRAINT `neraca_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_supp`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_4` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  ADD CONSTRAINT `perubahan_modal_ibfk_1` FOREIGN KEY (`id_laba`) REFERENCES `labarugi` (`id_labarugi`),
  ADD CONSTRAINT `perubahan_modal_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `struk`
--
ALTER TABLE `struk`
  ADD CONSTRAINT `struk_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `struk_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
