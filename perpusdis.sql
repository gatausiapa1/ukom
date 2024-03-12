-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 08:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusdis`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `foto` text NOT NULL,
  `buku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDbuku`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `foto`, `buku`) VALUES
(12, 'SPIDERMAN', 'Andis', 'Tom Holland', 2018, 'spiderman.jpg', 'spiderman.pdf'),
(18, 'THOR', 'Stan Lee', 'Marvel Comics', 2022, 'thor.jpg', 'thor.pdf'),
(22, 'IRONMAN', 'Bob Layton', 'Marvel Comics', 2022, 'ironman.jpg', 'ironman.pdf'),
(27, 'CAPTAIN AMERICA', 'Joe Simon', 'Marvel Comics', 2021, 'america.jpg', 'ca.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `IDkategori` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `IDkategoribuku` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `IDkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `koleksiID` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `IDpeminjaman` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_peminjaman` enum('proses','dipinjam','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`IDpeminjaman`, `IDuser`, `IDbuku`, `nama`, `tgl_peminjaman`, `tgl_pengembalian`, `status_peminjaman`) VALUES
(40, 11, 12, 'orlando', '2024-02-01', '2024-02-02', 'dipinjam'),
(44, 12345, 12, 'Ripai ', '2024-02-20', '2024-02-25', 'dipinjam'),
(46, 11, 22, 'Andis', '2024-02-23', '2024-02-29', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `IDulasan` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDuser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','peminjam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDuser`, `username`, `password`, `email`, `nis`, `namalengkap`, `alamat`, `level`) VALUES
(11, 'Andis', '123', 'andisap@gmail.com', '11231313', 'Robert Andis Jacob', 'Swiss', 'admin'),
(13, 'orlando', '123', 'andisorlando@gmail.com', '12312314', 'andisorlando', 'Amerika', 'admin'),
(14, 'Hollandis', '123', 'holland@gmail.com', '056662', 'Tom Holland', 'Inggris', 'admin'),
(15, 'arif', '123', 'arif@gmail.com', '56464123', 'Arif Nugroho', 'VIP', 'peminjam'),
(20, 'petugas', '123', 'petugas@gmail.com', '055555', 'Andew Garfield', 'US', 'petugas'),
(12345, 'ihsan', '2323', 'ihsan@gmail.com', '32523523', 'Ihsan Maolana', '-', 'peminjam'),
(12347, 'herman', '123', 'herman@gmail.com', '10111', 'Hermanyen', 'griya', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDbuku`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDbuku_2` (`IDbuku`),
  ADD KEY `IDbuku_3` (`IDbuku`),
  ADD KEY `IDbuku_4` (`IDbuku`),
  ADD KEY `IDbuku_5` (`IDbuku`),
  ADD KEY `IDbuku_6` (`IDbuku`),
  ADD KEY `IDbuku_7` (`IDbuku`),
  ADD KEY `IDbuku_8` (`IDbuku`),
  ADD KEY `IDbuku_9` (`IDbuku`),
  ADD KEY `IDbuku_10` (`IDbuku`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`IDkategori`),
  ADD KEY `IDkategori` (`IDkategori`),
  ADD KEY `IDkategori_2` (`IDkategori`),
  ADD KEY `IDkategori_3` (`IDkategori`);

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`IDkategoribuku`),
  ADD KEY `IDkategoribuku` (`IDkategoribuku`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDkategori` (`IDkategori`),
  ADD KEY `IDkategori_2` (`IDkategori`),
  ADD KEY `IDbuku_2` (`IDbuku`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`koleksiID`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDbuku_2` (`IDbuku`),
  ADD KEY `IDbuku_3` (`IDbuku`),
  ADD KEY `IDuser_2` (`IDuser`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`IDpeminjaman`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDbuku_2` (`IDbuku`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`IDulasan`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku_2` (`IDbuku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDuser_2` (`IDuser`),
  ADD KEY `IDuser_3` (`IDuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `IDbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `IDkategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `IDkategoribuku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `koleksiID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `IDpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `IDulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12349;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`IDkategoribuku`) REFERENCES `buku` (`IDbuku`),
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`IDkategori`) REFERENCES `kategoribuku` (`IDkategori`);

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `koleksipribadi_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `koleksipribadi_ibfk_2` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`),
  ADD CONSTRAINT `ulasanbuku_ibfk_2` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
