-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2018 pada 04.29
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `tgl_masuk_jam` datetime NOT NULL,
  `tgl_pulang_jam` datetime DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absen`, `tgl_masuk_jam`, `tgl_pulang_jam`, `id_admin`) VALUES
(10, '2018-07-09 21:03:01', '2018-07-09 21:06:45', 2),
(11, '2018-07-09 21:10:11', '2018-07-09 21:10:31', 2),
(12, '2018-07-09 21:21:14', '2018-07-09 21:21:19', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `id_role`, `id_golongan`, `username`, `password`, `foto`) VALUES
(2, 1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'fr-11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cash_flow`
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
-- Dumping data untuk tabel `cash_flow`
--

INSERT INTO `cash_flow` (`id_transaksi`, `id_user`, `id_pembayaran`, `id_Pengeluaran`, `id_utang`, `id_pembelian`, `tgl_cashflow`, `keterangan`) VALUES
(8, 2, 1, 0, 0, 0, '0000-00-00', ''),
(9, 2, 2, 0, 0, 0, '0000-00-00', ''),
(15, 2, 0, 2, 0, 0, '0000-00-00', ''),
(17, 2, 0, 0, 1, 0, '0000-00-00', ''),
(18, 2, 0, 0, 0, 1, '0000-00-00', ''),
(19, 2, 0, 0, 0, 2, '0000-00-00', ''),
(20, 2, 0, 1, 0, 0, '0000-00-00', ''),
(21, 2, 0, 0, 0, 9, '0000-00-00', ''),
(22, 2, 0, 0, 0, 10, '0000-00-00', ''),
(23, 2, 0, 4, 0, 0, '0000-00-00', ''),
(24, 2, 0, 5, 0, 0, '0000-00-00', ''),
(25, 2, 0, 6, 0, 0, '2018-06-22', ''),
(26, 2, 0, 7, 0, 0, '2018-06-16', 'Pembayaran galon air'),
(27, 2, 0, 0, 0, 11, '2018-06-19', 'pembelian produk '),
(28, 2, 0, 0, 0, 12, '2018-06-15', 'pembelian produk blush on'),
(30, 2, 0, 0, 0, 13, '2018-06-22', 'pembelian produk Lipstik Oriflame'),
(31, 2, 0, 0, 0, 14, '2018-07-19', 'pembelian produk blush on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(3) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `total_gaji`, `tanggal`, `status`, `id_admin`) VALUES
(2, 1000000, '2018-06-13', 'aktif', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(11) NOT NULL,
  `nama_gol` varchar(15) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id_gol`, `nama_gol`, `gaji_pokok`) VALUES
(1, 'SUper User', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
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
-- Struktur dari tabel `labarugi`
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

--
-- Dumping data untuk tabel `labarugi`
--

INSERT INTO `labarugi` (`id_labarugi`, `id_user`, `penjualan`, `retur_penjualan`, `potongan_penjualan`, `jml_retur_potongan_penjualan`, `penjualan_bersih`, `harga_pokok_penjualan`, `laba_bruto`, `biaya_operasional`, `biaya_adm_umum`, `total_biaya`, `laba_usaha_bersih`, `tanggal`) VALUES
(1, 2, 207375000, 0, 0, 0, 207375000, 167900000, 39475000, 20051800, 0, 20051800, 19423200, '2018-04-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca`
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

--
-- Dumping data untuk tabel `neraca`
--

INSERT INTO `neraca` (`id_neraca`, `id_user`, `id_transaksi`, `Activa`, `Pasiva`, `tgl_neraca`, `keterangan`) VALUES
(4, 2, 8, 1, 0, '2018-04-20', 'pemasukan penjualan'),
(5, 2, 9, 1, 0, '2018-04-20', 'PEMASUKAN'),
(6, 2, 15, 0, 1, '2018-04-13', 'BAYAR LISTRIK'),
(7, 2, 20, 1, 0, '2018-04-20', 'BELI MEJA'),
(13, 2, 17, 0, 1, '2018-04-20', 'UTANG'),
(14, 2, 18, 0, 1, '2018-04-20', 'BELI PRODUK'),
(15, 2, 19, 0, 1, '2018-04-20', 'BELI PRODUK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `kode_pembayaran` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `total_pembayaran`, `tgl_pembayaran`, `kode_pembayaran`) VALUES
(0, 0, 0, '2018-04-01', ''),
(1, 3, 100000, '2018-04-21', ''),
(2, 2, 300000, '2018-04-19', ''),
(6, 9, 50000, '2018-06-24', '0125689'),
(7, 11, 500000, '2018-06-24', '0135689'),
(8, 13, 400000, '2018-07-03', '1245789'),
(9, 19, 41850000, '2018-07-03', '1234567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
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
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_produk`, `qty`, `harga_total`, `id_supp`, `tgl_beli`) VALUES
(0, 2, 1, 0, 0, 1, '2018-04-01'),
(1, 2, 1, 100, 3000000, 1, '2018-04-20'),
(2, 2, 2, 20, 1892121, 2, '2018-04-20'),
(5, 2, 1, 100, 1000000, 1, '2018-06-26'),
(6, 2, 1, 100, 1000000, 1, '2018-06-20'),
(7, 2, 1, 50, 500000, 1, '2018-06-06'),
(8, 2, 1, 50, 500000, 1, '2018-06-16'),
(9, 2, 1, 50, 500000, 1, '2018-06-16'),
(10, 2, 2, 32, 1000000, 1, '2018-06-01'),
(11, 2, 1, 500, 5000000, 1, '2018-06-19'),
(12, 2, 1, 10, 50000, 1, '2018-06-15'),
(13, 2, 4, 50, 3500000, 2, '2018-06-22'),
(14, 2, 1, 100, 8000000, 1, '2018-07-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
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

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `id_user`, `id_produk`, `qty`, `tanggal_pemesanan`, `total_pemesanan`, `status_pemesanan`, `kode_pembayaran`) VALUES
(0, '', 2, 1, 0, '2018-04-01', 0, 0, ''),
(1, '', 2, 1, 1, '2018-04-20', 0, 0, ''),
(2, '', 2, 2, 2, '2018-04-20', 0, 0, ''),
(3, '', 2, 2, 1, '2018-04-21', 0, 0, ''),
(8, '04569', 2, 2, 104, '2018-06-24', 10400000, 0, '1235789'),
(9, '12467', 2, 1, 1, '2018-06-24', 50000, 1, '0125689'),
(10, '45678', 2, 1, 1, '2018-06-24', 50000, 0, '0245678'),
(11, '34789', 2, 3, 50, '2018-06-24', 500000, 1, '0135689'),
(12, '12458', 2, 2, 4, '2018-07-03', 400000, 0, '0123459'),
(13, '01678', 2, 1, 8, '2018-07-03', 400000, 1, '1245789'),
(14, '14689', 2, 3, 50, '2018-07-03', 500000, 0, '0136789'),
(15, '05789', 4, 1, 2, '2018-07-03', 100000, 0, '1345679'),
(16, '01279', 4, 1, 1, '2018-07-03', 50000, 0, '1235679'),
(17, '03469', 4, 4, 4, '2018-07-03', 340000, 0, '0234579'),
(18, '13678', 2, 1, 13, '2018-07-03', 650000, 0, '0123579'),
(19, '12689', 2, 1, 837, '2018-07-03', 41850000, 1, '1234567'),
(20, '02456', 6, 1, 3, '2018-07-09', 150000, 0, '0235679');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
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
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `id_user`, `nama_barang`, `harga_satuan`, `qty`, `total_harga`, `tanggal_pengeluaran`) VALUES
(0, 2, '0', 0, 0, 0, '0000-00-00'),
(1, 2, 'sewa ruangan', 500000, 1, 500000, '0000-00-00'),
(2, 2, 'bayar listrik', 80000, 1, 80000, '0000-00-00'),
(4, 2, 'Beli Nota', 6000, 100, 600000, '2018-06-16'),
(5, 2, 'beli kardus', 500, 1000, 500000, '2018-06-21'),
(6, 2, 'makan', 12310, 10, 123100, '2018-06-22'),
(7, 2, 'galon air', 19000, 3, 57000, '2018-06-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perubahan_modal`
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

--
-- Dumping data untuk tabel `perubahan_modal`
--

INSERT INTO `perubahan_modal` (`id_perubahan_modal`, `id_user`, `id_laba`, `modal_awal`, `laba_bersih`, `prive`, `total`, `modal_akhir`) VALUES
(1, 2, 1, 193951800, 19423200, 0, 19423200, 213375000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga_jual`, `harga_beli`, `id_kategori`, `deskripsi`, `gambar`) VALUES
(1, 'blush on', 97, 50000, 0, 2, 'pemerah pipi', ''),
(2, 'mascara maybeline', -4, 100000, 0, 1, 'lala', ''),
(3, 'Barang Baru', 0, 10000, 9000, 1, 'sfjksdf sdfkjsdkf', ''),
(4, 'Lipstik Oriflame', 46, 85000, 70000, 1, 'product baru asli dari oriflame yg sada sdasa', '18.PNG'),
(5, 'r', 1, 1, 1, 1, 'w', 'Screenshot_(1).png'),
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
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struk`
--

CREATE TABLE `struk` (
  `id_struk` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'makmur jaya', 'malang', '321433'),
(2, 'sato jaya', 'jakarta', '989898'),
(3, 'amanah', 'surabaya', '76778'),
(4, 'sentosa jaya', 'surabaya', '456789'),
(5, 'sumber rejeko', 'malang', '345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_role`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telp`, `username`, `password`) VALUES
(2, 1, 'admin', 'malang', 'admin@admin.com', 'p', 321433, 'nafi', '5bfb391e6148ab027d7389fed2427a86'),
(3, 2, 'nofal', 'nafula', '', 'Laki-laki', 2147483647, 'nopal', '6efc67e68005e7503df580d11e5e7a23'),
(4, 2, 'nopal', 'jejek', '', 'Laki-laki', 2147483647, 'talit', 'a01ac7473a6bbd9ee60659a8e1495924'),
(5, 2, 'sasfasf', 'fasfasfas', 'cobasdas', 'Perempuan', 2147483647, 'ala', 'e88e6128e26eeff4daf1f5db07372784'),
(6, 2, 'ara', 'mlg', '', 'Perempuan', 878, 'ara', '636bfa0fb2716ff876f5e33854cc9648');

-- --------------------------------------------------------

--
-- Struktur dari tabel `utang`
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
-- Dumping data untuk tabel `utang`
--

INSERT INTO `utang` (`id_utang`, `id_user`, `nama_barang`, `total_utang`, `jml_utang`, `sisa_utang`) VALUES
(0, 2, '0', 0, 0, 0),
(1, 2, 'laptop', 1000000, 3000000, 2000000),
(3, 2, 'utang bank', 10000000, 100000000, 90000000);

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
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id_labarugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id_neraca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  MODIFY `id_perubahan_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utang`
--
ALTER TABLE `utang`
  MODIFY `id_utang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_gol`);

--
-- Ketidakleluasaan untuk tabel `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD CONSTRAINT `cash_flow_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cash_flow_ibfk_4` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `cash_flow_ibfk_5` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`),
  ADD CONSTRAINT `cash_flow_ibfk_6` FOREIGN KEY (`id_Pengeluaran`) REFERENCES `pengeluaran` (`id_pengeluaran`),
  ADD CONSTRAINT `cash_flow_ibfk_7` FOREIGN KEY (`id_utang`) REFERENCES `utang` (`id_utang`);

--
-- Ketidakleluasaan untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `labarugi`
--
ALTER TABLE `labarugi`
  ADD CONSTRAINT `labarugi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `neraca`
--
ALTER TABLE `neraca`
  ADD CONSTRAINT `neraca_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `neraca_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `cash_flow` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_supp`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_4` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `pembelian_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `perubahan_modal`
--
ALTER TABLE `perubahan_modal`
  ADD CONSTRAINT `perubahan_modal_ibfk_1` FOREIGN KEY (`id_laba`) REFERENCES `labarugi` (`id_labarugi`),
  ADD CONSTRAINT `perubahan_modal_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `struk`
--
ALTER TABLE `struk`
  ADD CONSTRAINT `struk_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Ketidakleluasaan untuk tabel `utang`
--
ALTER TABLE `utang`
  ADD CONSTRAINT `utang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
