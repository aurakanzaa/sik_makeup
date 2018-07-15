-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 10:35 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `tgl_masuk_jam` datetime NOT NULL,
  `tgl_pulang_jam` datetime DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_role`, `id_golongan`, `username`, `password`, `foto`) VALUES
(1, 1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE `cash_flow` (
  `id_transaksi` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `id_pembayaran` int(10) DEFAULT NULL,
  `id_Pengeluaran` int(10) DEFAULT NULL,
  `id_utang` int(10) DEFAULT NULL,
  `id_pembelian` int(11) DEFAULT NULL,
  `tgl_cashflow` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id_transaksi`, `id_user`, `id_pembayaran`, `id_Pengeluaran`, `id_utang`, `id_pembelian`, `tgl_cashflow`, `keterangan`) VALUES
(3, 1, 0, 0, 0, 4, '2017-12-07', 'pembelian produk Lipstik Oriflame'),
(7, 1, 4, 0, 0, 0, '2018-07-15', 'Pemasukan Minggu 1 Bulan Juli'),
(10, 1, 0, 4, 0, 0, '2018-07-14', 'Pembayaran beli kardus bungkus'),
(11, 1, 0, 0, 3, 0, '2018-07-15', 'utang toko');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(3) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(11) NOT NULL,
  `nama_gol` varchar(15) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `nama_gol`, `gaji_pokok`) VALUES
(1, 'Super Admin', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'eyes'),
(2, 'lips'),
(3, 'face'),
(4, 'beauty & skin care'),
(6, 'alololoy'),
(7, 'Makeup Cair');

-- --------------------------------------------------------

--
-- Table structure for table `labarugi`
--

CREATE TABLE `labarugi` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE `neraca` (
  `id_neraca` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `Activa` int(11) NOT NULL,
  `Pasiva` int(11) NOT NULL,
  `tgl_neraca` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemasukan` varchar(100) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `total_pemasukan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `id_user`, `nama_pemasukan`, `tgl_pemasukan`, `total_pemasukan`) VALUES
(0, 0, '0', '2018-07-01', 0),
(4, 1, 'Pemasukan Minggu 1 Bulan Juli', '2018-07-09', 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `kode_pembayaran` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` int(50) NOT NULL,
  `harga_total` int(50) NOT NULL,
  `id_supp` int(11) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `kode_pemesanan` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total_pemesanan` int(11) NOT NULL,
  `status_pemesanan` int(11) NOT NULL DEFAULT '0',
  `kode_pembayaran` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `id_user`, `nama_barang`, `harga_satuan`, `qty`, `total_harga`, `tanggal_pengeluaran`) VALUES
(0, 0, '0', 0, 0, 0, '2018-07-14'),
(4, 1, 'beli kardus bungkus', 100, 1000, 100000, '2018-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_modal`
--

CREATE TABLE `perubahan_modal` (
  `id_perubahan_modal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_laba` int(11) NOT NULL,
  `modal_awal` int(11) NOT NULL,
  `laba_bersih` int(11) NOT NULL,
  `prive` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `modal_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga_jual`, `harga_beli`, `id_kategori`, `deskripsi`, `gambar`) VALUES
(1, 'blush on', 95, 50000, 0, 1, 'pemerah pipi', '60x160_alamat_cakper_sidoarjo1.jpg'),
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
(15, 'Paula\'s Choice Resist Super Antioxidant Concentrat', 5, 150000, 120000, 4, 'beauty', 'Paulas_Choice_Resist_Super_Antioxidant_Concentrate_Serum_-_Trial_0_17_Oz.PNG'),
(16, 'Paula\'s Choice Skin Balancing Invisible Finish Moi', 5, 100000, 85000, 4, 'beauty', 'Paulas_Choice_Skin_Balancing_Invisible_Finish_Moisture_Gel_60_Ml.PNG'),
(17, 'Cathy Doll AA Matte Powder Cushion Oil Control SPF', 5, 100000, 80000, 3, 'face', 'Cathy_Doll_AA_Matte_Powder_Cushion_Oil_Control_SPF_50_PA+++.PNG'),
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
(31, 'Noir Noir Lacquers', 6, 120000, 90000, 7, 'makeup cair', 'Noir_Noir_Lacquers.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `struk` (
  `id_struk` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_role`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telp`, `username`, `password`) VALUES
(1, 2, 'Nafianta', 'jl Mergan Kel', '', 'Laki-Laki', 2147483647, 'nafi', '5bfb391e6148ab027d7389fed2427a86');

-- --------------------------------------------------------

--
-- Table structure for table `utang`
--

CREATE TABLE `utang` (
  `id_utang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `total_utang` int(11) NOT NULL,
  `jml_utang` int(11) NOT NULL,
  `sisa_utang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utang`
--

INSERT INTO `utang` (`id_utang`, `id_user`, `nama_barang`, `total_utang`, `jml_utang`, `sisa_utang`) VALUES
(0, 0, '0', 0, 0, 0),
(3, 1, 'utang toko', 10000000, 10000000, 0);

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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_transaksi` (`id_transaksi`);

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
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `labarugi`
--
ALTER TABLE `labarugi`
  MODIFY `id_labarugi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id_neraca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  MODIFY `id_perubahan_modal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id_struk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utang`
--
ALTER TABLE `utang`
  MODIFY `id_utang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `labarugi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `neraca`
--
ALTER TABLE `neraca`
  ADD CONSTRAINT `neraca_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `neraca_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `cash_flow` (`id_transaksi`);

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
  ADD CONSTRAINT `struk_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
