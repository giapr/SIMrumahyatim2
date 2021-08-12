-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembangunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto_kegiatan`
--

CREATE TABLE `foto_kegiatan` (
  `id` int(5) NOT NULL,
  `id_kegiatan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `id_transaksi`, `keterangan`, `tgl_transaksi`) VALUES
(1, '21052021-1063', 'Donasi A/n aaaa', '2021-05-19 00:00:00'),
(2, '21052021-7084', 'pembayaran listrik', '2021-05-22 00:00:00'),
(3, '22062021-4356', 'pembayaran listrik', '2021-06-11 00:00:00'),
(4, '22062021-5399', 'pendanaan renovasi mushola', '2021-06-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_detail`
--

CREATE TABLE `jurnal_detail` (
  `id` int(11) NOT NULL,
  `id_jurnal` varchar(255) DEFAULT NULL,
  `kredit` int(255) DEFAULT NULL,
  `debit` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jurnal_detail`
--

INSERT INTO `jurnal_detail` (`id`, `id_jurnal`, `kredit`, `debit`) VALUES
(1, '1', 0, 2333333),
(2, '2', 1000000, 0),
(3, '3', 8989898, 0),
(4, '4', 80000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id_transaksi` varchar(255) DEFAULT NULL,
  `tipe_kas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `nominal` int(255) DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id_transaksi`, `tipe_kas`, `keterangan`, `nominal`, `tgl_transaksi`) VALUES
('21052021-1063', 'masuk', 'Donasi A/n aaaa', 2333333, '2021-05-19 00:00:00'),
('21052021-7084', 'keluar', 'pembayaran listrik', 1000000, '2021-05-22 00:00:00'),
('22062021-4356', 'keluar', 'pembayaran listrik', 8989898, '2021-06-11 00:00:00'),
('22062021-5399', 'keluar', 'pendanaan renovasi mushola', 80000, '2021-06-05 00:00:00');

--
-- Triggers `kas`
--
DELIMITER $$
CREATE TRIGGER `after_kas_insert` AFTER INSERT ON `kas` FOR EACH ROW BEGIN
	DECLARE id_jurnal INT;
         INSERT INTO jurnal(id_transaksi, keterangan,tgl_transaksi)
        VALUES(NEW.id_transaksi,NEW.keterangan,NEW.tgl_transaksi);
				

    select id INTO id_jurnal
    from jurnal where id_transaksi=NEW.id_transaksi;
		
    IF NEW.tipe_kas = 'keluar' THEN
		 INSERT INTO jurnal_detail(id_jurnal, kredit,debit)
        VALUES(id_jurnal,NEW.nominal,0);
				ELSE
				 INSERT INTO jurnal_detail(id_jurnal, kredit,debit)
        VALUES(id_jurnal,0,NEW.nominal);
		END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(5) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `deskripsi_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `foto`, `tanggal_kegiatan`, `deskripsi_kegiatan`) VALUES
(1, 'lkjfbshfa', 'dfaad.jpg', '0000-00-00', 'dabdhabnxcjhagfyahvndbvhdghjdfabnhjghdf'),
(2, 'dgsgds', 'dgs.jpg', '2021-05-11', 'fgdfdfgdfgfd'),
(3, 'anggar', 'bayu2.png', '2021-06-18', 'waduh');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `jenis_laporan` varchar(20) NOT NULL,
  `transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anakyatim`
--

CREATE TABLE `tbl_anakyatim` (
  `id` int(5) NOT NULL,
  `Nama_anak` varchar(100) DEFAULT NULL,
  `Tgllahir_anak` date DEFAULT NULL,
  `Jenis_k` varchar(10) DEFAULT NULL,
  `Sekolah` varchar(100) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anakyatim`
--

INSERT INTO `tbl_anakyatim` (`id`, `Nama_anak`, `Tgllahir_anak`, `Jenis_k`, `Sekolah`, `Alamat`, `Foto`) VALUES
(2, 'latika atmaja putri', '2020-02-20', NULL, 'tidak sekolah', ' ', NULL),
(6, NULL, '2021-06-01', 'Laki-laki', 'belum sekolah', NULL, NULL),
(9, 'sdfdf', '1111-11-11', NULL, 'lkfgk', ' ', NULL),
(10, 's.sdfsdmlfnlsd', '3333-03-31', NULL, 'dfgdg', 'dfgdgd', NULL),
(11, 'raisaka adiputra', '0123-03-12', NULL, 'belum sekolah', 'asdad', NULL),
(12, 'lkslkda', '1111-11-11', 'Perempuan', 'wewe', 'sdfsdfa', NULL),
(13, 'xcxkcs', '2222-02-22', 'Perempuan', 'sdasd', 'adjakdj', NULL),
(14, 'vb', '3333-12-12', 'Perempuan', 'qewqeweq', 'waweawe', NULL),
(15, 'alana', '2112-03-12', 'Laki-laki', 'belum sekolah', 'aaaaa', NULL),
(16, 'babababa', '2313-02-22', 'Laki-laki', 'tidak sekolah', 'twqweqs', NULL),
(17, 'tujuhbelas', '3919-03-22', 'Laki-laki', 'SMAN 1 Bendungan', 'asdasa', NULL),
(18, 'wawawssssss', '0000-00-00', 'Perempuan', 'delet', 'aaaaaaaaaa', NULL),
(19, 'Xzxcvc', '1111-11-11', 'Laki-laki', 'fddsfd', 'dfdgdfg', NULL),
(20, 'dfgdfgdf', '3333-03-31', 'Laki-laki', 'dgd', 'sfds', NULL),
(21, 'xvx', '1111-11-11', 'Laki-laki', 'ada', 'asdsdfsd', NULL),
(22, 'dfsfa', '1111-11-11', 'Laki-laki', 'xvx', 'dfgdg', NULL),
(23, 'ddfg', '4444-04-04', 'Perempuan', 'dhdhf', 'dgdhd', NULL),
(33, 'raisaka adiputra', '2021-06-01', 'Laki-laki', 'belum sekolah', 'csfowouh', NULL),
(34, 'alana', '2020-02-01', 'Perempuan', 'belum sekolah', 'FDFGD', NULL),
(36, 'asjkhadsah', '2021-06-08', 'Laki-laki', 'asad', 'adbajvjas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donatur`
--

CREATE TABLE `tbl_donatur` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_donatur`
--

INSERT INTO `tbl_donatur` (`id`, `nama`, `alamat`) VALUES
(5, 'df', 'hjgdf jtggh 675 '),
(6, 'jsbdfhsbn ', 'dimana mana'),
(10, 'asdnabskdba', 'asndbnabdas'),
(11, 'raisaka  adiputra', 'kl'),
(12, 'Diana putri', 'jl jl');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duafa`
--

CREATE TABLE `tbl_duafa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_duafa`
--

INSERT INTO `tbl_duafa` (`id`, `nama`, `alamat`) VALUES
(1, 'hggf jyfh', 'hjgdf jtggh 675 jhfu'),
(2, 'dfxdg jgg j', 'ghgdtr jftrsfgv 654 hvyg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenislaporan`
--

CREATE TABLE `tbl_jenislaporan` (
  `id` int(11) NOT NULL,
  `jenis_laporan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `id` int(5) NOT NULL,
  `tipe_pemasukan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `id_donatur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemasukan`
--

INSERT INTO `tbl_pemasukan` (`id`, `tipe_pemasukan`, `keterangan`, `bukti`, `tanggal`, `nominal`, `id_donatur`) VALUES
(29, 'Donasi', 'Donasi A/n jsbdfhsbn ', 'p.png', '2021-06-18', 8989898, 6),
(30, 'Donasi', 'Donasi A/n raisaka  adiputra', 'bayu1.png', '2021-06-11', 8989898, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `id` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` text NOT NULL,
  `nominal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengeluaran`
--

INSERT INTO `tbl_pengeluaran` (`id`, `keterangan`, `tanggal`, `bukti`, `nominal`) VALUES
(1, 'pembayaran listrik ', '2021-06-02', '', 23330000),
(2, 'pendanaan renovasi mushola', '2021-06-05', 'test10.jpeg', 8989898);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `nama_transaksi` varchar(255) DEFAULT NULL,
  `nominal` double(255,0) DEFAULT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `id_anggota` varchar(255) DEFAULT NULL,
  `date_trx` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `id_transaksi`, `nama_transaksi`, `nominal`, `pemasukan`, `pengeluaran`, `jenis`, `id_anggota`, `date_trx`) VALUES
(1, '21052021-1063', 'Donasi A/n aaaa', 2333333, 0, 0, 'kas masuk', '1', '2021-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(255) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin@email.com', '$2y$10$ygPNsoOXF3Qp63hyusx3xOumih/K0iS2Tv4dW4wWbi7jpVvceR63i', 1, 1, 1575075511);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 3, 1),
(6, 3, 4),
(7, 1, 4),
(8, 3, 5),
(9, 1, 5),
(10, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `sort` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `sort`) VALUES
(1, 'Admin', 1),
(2, 'User', 4),
(3, 'Menu', 5),
(4, 'Transaksi', 2),
(5, 'Laporan', 3),
(6, 'kegiatan', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'view');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` int(255) DEFAULT NULL,
  `order` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `order`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1, NULL),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1, NULL),
(3, 1, 'Data Donatur', 'admin/donatur', 'fas fa-fw fa-users', 1, NULL),
(4, 2, 'Edit Profile', 'user', 'fas fa-fw fa-user-edit', 1, NULL),
(5, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1, NULL),
(6, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1, NULL),
(7, 4, 'Data Donasi', 'admin/donasi', 'fas fa-fw fa-coins', 1, NULL),
(8, 4, 'Kas Keluar', 'transaksi/kaskeluar', 'fas fa-fw fa-hands', 1, NULL),
(9, 4, 'Kas Masuk', 'transaksi/kasmasuk', 'fas fa-fw fa-hand-holding-usd', 1, NULL),
(10, 5, 'Laporan Kas', 'laporan/bukukasumum', 'fas fa-fw fa-coins', 1, NULL),
(12, 2, 'TUTORIAL', 'coba/coba', 'fab fa-youtube', 0, NULL),
(13, 2, 'tes firebas', 'coba/coba', 'fab fa-youtube', 1, NULL),
(14, 6, 'Kegiatan', 'kegiatan', NULL, 1, NULL),
(15, 1, 'Data anak yatim', 'Admin/anakasuh', 'fas fa-user-friends', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `jurnal_detail`
--
ALTER TABLE `jurnal_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_anakyatim`
--
ALTER TABLE `tbl_anakyatim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donatur`
--
ALTER TABLE `tbl_donatur`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_duafa`
--
ALTER TABLE `tbl_duafa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenislaporan`
--
ALTER TABLE `tbl_jenislaporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurnal_detail`
--
ALTER TABLE `jurnal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_anakyatim`
--
ALTER TABLE `tbl_anakyatim`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_donatur`
--
ALTER TABLE `tbl_donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_duafa`
--
ALTER TABLE `tbl_duafa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jenislaporan`
--
ALTER TABLE `tbl_jenislaporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
