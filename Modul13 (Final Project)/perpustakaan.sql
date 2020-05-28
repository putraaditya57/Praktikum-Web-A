-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 02:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `kategori` varchar(32) NOT NULL,
  `rak` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `tahun`, `penulis`, `ISBN`, `pic`, `kategori`, `rak`, `stok`) VALUES
(1, 'Budidaya Lele Di Lahan Sempit', 2015, 'INFRA HIJAU', '9786021753545', 'buku1.jpg', 'Bisnis', 1, 2),
(2, 'Budidaya Lele Unggulan ', 2019, 'Anugrah', '978606409065', 'buku2.jpg', 'Hobi', 2, 1),
(3, 'Pedoman Budidaya Lele Dumbo', 2014, 'AgroMedia Pustaka', '9790060106', 'buku3.jpg', 'Pendidikan', 3, 1),
(5, 'Fate/Grand Order –mortalis:stella– Volume 1', 2020, 'Type-Moon', '9781632368843', 'bukuFGO.jpg', 'Komik', 3, 2),
(7, 'Initial D vol 6', 2000, 'Takumi', '86420111', 'inisharu6.jpg', 'Komik', 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('mohon','dipinjam','dikembalikan','batal') NOT NULL DEFAULT 'mohon'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjam`, `id_buku`, `id_user`, `tgl_ambil`, `tgl_kembali`, `status`) VALUES
(4, 5, 7, '2020-05-28', '2020-05-30', 'dikembalikan'),
(5, 5, 11, '2020-05-28', '2020-05-30', 'dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('suadmin','user','admin','nonaktif') NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `email`, `password`, `role`, `picture`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'suadmin', ''),
(2, 'Admin Biasa', 'adbiasa@mail.com', 'admin', 'admin', ''),
(7, 'Vladimir Ivanov', 'gueganteng@mail.com', '123', 'user', 'graphic_design_is_my_passion.jpg'),
(9, 'admon', 'admon@mail.com', 'admon', 'admin', ''),
(10, 'Tamfan', 'tamfan@mail.com', 'tamfan', 'user', '400.jpg'),
(11, 'Spongebob', 'sp@mail.com', 'sp', 'user', 'giphy.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `pinjaman_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
