-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 05:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskoprpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `role` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `role`) VALUES
(16, 'tegar20', 'tegar20', 'tegar', 'tegar123@gmail.com', '089898989898', 'Laki-laki', 'customer'),
(17, 'tegar_22', 'tegar22', 'tegar', 'tegar123@gmail.com', '089898788809', 'Laki-laki', 'customer'),
(18, 'user', 'user', 'user', 'user123@gmail.com', '087805459298', 'Laki-laki', 'customer'),
(19, 'lorem ipsum', 'lorem123', 'lorem', 'loremipsum123@gmail.com', '087823456783', 'Laki-laki', 'customer'),
(10120250, 'han_2', 'han123', 'Farhan Maulana Iqba', 'farhanm@gmail.com', '', 'Laki-laki', 'admin'),
(10120252, 'gar_1', 'gar123', 'Tegar Ahmad Fauzan', 'tegarfauzan99@gmail.com', '', 'Laki-laki', 'admin'),
(10120259, 'lid_3', 'lid123', 'Khalid Ahmad Hafidz', 'khalid@gmail.com', '', 'Laki-laki', 'admin'),
(10120276, 'qan_4', 'qan123', 'Muhammad Furqan', 'furqan@gmal.com', '', 'Laki-laki', 'admin'),
(10120709, 'jal_5', 'jal123', 'Muhammad Rijal Hasanudin', 'rijalh@gmail.com', '', 'Laki-laki', 'admin'),
(10120710, 'rijal', 'rijal', 'rijal', 'rijal.hasanudin1@gmail.com', '081312057698', 'Laki-laki', 'admin'),
(10120711, 'test', 'test', 'test', 'test@gmail.com', '123', 'Perempuan', 'customer'),
(10120712, 'testterakhir', 'testterakhir', 'test terakhir', 'testterakhir@gmail.com', '123456', 'Laki-laki', 'admin'),
(10120713, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis_kategori` enum('Comedy','Action','Romance','Horror') NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `jenis_kategori`, `deskripsi`, `rating`, `path`) VALUES
(101, 'Dr Strange Multiverse of Madness', 'Action', 'Dr. Strange....', '9.0', '1.jpeg'),
(102, 'Star Wars', 'Action', 'Star Wars....', '8.0', '2.jpeg'),
(103, 'The Conjuring', 'Horror', 'The Conjuring...', '8.5', '3.jpeg'),
(104, 'Dune', 'Action', 'Dune....', '8.7', '4.jpeg'),
(105, 'Love Deaths robots', 'Action', 'The robot is....', '8.5', '5.jpeg'),
(106, 'Kimi No Nawa', 'Romance', 'A couple....', '8.4', '6.jpeg'),
(107, 'Fantastic Beast ', 'Action', 'Humans....', '9.3', '7.jpeg'),
(108, 'Searching', 'Action', 'One day....', '9.5', '8.jpeg'),
(109, 'A Star Is Born', 'Romance', 'One day there was a couple who was....', '8.4', '9.jpeg'),
(110, 'First Reformed', 'Action', 'That person is gathering....', '8.9', '10.jpeg'),
(111, 'Spiderman Into Spider-verse', 'Action', 'Tom Holland....', '9.5', '11.jpeg'),
(112, 'Venom', 'Action', 'Eddie is still having trouble adapting to his....', '9.7', '12.jpeg'),
(113, 'Predator', 'Action', 'One day there is a predator who is targeting....', '9.0', '13.jpeg'),
(114, 'Black Panther', 'Action', 'One day in wakanda there was a big war that made a noise....', '9.3', '14.jpeg'),
(115, 'Blade Runner', 'Action', 'Named Blade who becomes the protector of humans by....', '8.8', '15.jpeg'),
(116, '1917', 'Action', 'The story of the struggle of two youths during the first world war airs on January 22....', '8.6', '16.jpeg'),
(117, 'Joker', 'Action', 'A 40 year old clown lives with his mother, Penny in the chaotic Gotham City....', '9.6', '17.jpeg'),
(118, 'Tenki No Ko', 'Romance', 'Tells the story of Hodaka who ran away from home to Tokyo due to family.....', '8.7', '18.jpeg'),
(119, 'Glass', 'Action', 'a security guard who has the ability to be immune and can see criminal acts committed by.....', '8.8', '19.jpeg'),
(120, 'Birds Of Prey', 'Comedy', 'After parting ways with the Joker, Harley Quinn (Margot Robbie) joins Black Canary (Jurnee Smollett)....', '8.5', '20.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_tayang` time NOT NULL,
  `harga` varchar(13) NOT NULL,
  `id_film` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam_tayang`, `harga`, `id_film`) VALUES
(111, '2022-07-23', '09:00:00', '35000', 101),
(112, '2022-07-23', '11:00:00', '35000', 101),
(113, '2022-07-23', '13:00:00', '35000', 101),
(114, '2022-07-23', '10:30:00', '35000', 102),
(115, '2022-07-23', '12:30:00', '35000', 102),
(116, '2022-07-23', '14:30:00', '35000', 102),
(117, '2022-07-23', '09:25:00', '35000', 103),
(118, '2022-07-23', '11:25:00', '35000', 103),
(119, '2022-07-23', '13:25:00', '35000', 103),
(120, '2022-07-23', '13:00:00', '35000', 104),
(121, '2022-07-23', '15:00:00', '35000', 104),
(122, '2022-07-23', '17:00:00', '35000', 104),
(123, '2022-07-23', '09:00:00', '35000', 105),
(124, '2022-07-23', '11:00:00', '35000', 105),
(125, '2022-07-23', '13:00:00', '35000', 105),
(126, '2022-07-23', '10:30:00', '35000', 106),
(127, '2022-07-23', '12:30:00', '35000', 106),
(128, '2022-07-23', '14:30:00', '35000', 106),
(129, '2022-07-23', '09:25:00', '35000', 107),
(130, '2022-07-23', '11:25:00', '35000', 107),
(131, '2022-07-23', '13:25:00', '35000', 107),
(132, '2022-07-23', '13:00:00', '35000', 108),
(133, '2022-07-23', '15:00:00', '35000', 108),
(134, '2022-07-23', '17:00:00', '35000', 108),
(135, '2022-07-23', '09:00:00', '35000', 109),
(136, '2022-07-23', '11:00:00', '', 109),
(137, '2022-07-23', '13:00:00', '', 109),
(138, '2022-07-23', '10:30:00', '', 110),
(139, '2022-07-23', '12:30:00', '', 110),
(140, '2022-07-23', '14:30:00', '', 110),
(141, '2022-07-23', '09:00:00', '', 111),
(142, '2022-07-23', '11:00:00', '', 111),
(143, '2022-07-23', '13:00:00', '', 111),
(144, '2022-07-23', '10:30:00', '', 112),
(145, '2022-07-23', '12:30:00', '', 112),
(146, '2022-07-23', '15:30:00', '', 112),
(147, '2022-07-23', '09:00:00', '', 113),
(148, '2022-07-23', '11:00:00', '', 113),
(149, '2022-07-23', '13:00:00', '', 113),
(150, '2022-07-23', '10:30:00', '', 114),
(151, '2022-07-23', '12:30:00', '', 114),
(152, '2022-07-23', '14:30:00', '', 114),
(153, '2022-07-23', '13:00:00', '', 115),
(154, '2022-07-23', '15:00:00', '', 115),
(155, '2022-07-23', '17:00:00', '', 115),
(156, '2022-07-23', '10:30:00', '', 116),
(157, '2022-07-23', '12:30:00', '', 116),
(158, '2022-07-23', '14:30:00', '', 116),
(159, '2022-07-23', '13:00:00', '', 117),
(160, '2022-07-23', '15:00:00', '', 117),
(161, '2022-07-23', '17:00:00', '', 117),
(162, '2022-07-23', '10:30:00', '', 118),
(163, '2022-07-23', '12:30:00', '', 118),
(164, '2022-07-23', '14:30:00', '', 118),
(165, '2022-07-23', '09:00:00', '', 119),
(166, '2022-07-23', '11:00:00', '', 119),
(167, '2022-07-23', '13:00:00', '', 119),
(168, '2022-07-23', '13:00:00', '', 120),
(169, '2022-07-23', '15:00:00', '', 120),
(170, '2022-07-23', '17:00:00', '', 120);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `jenis_menu` enum('makanan','minuman') NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(13) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `jenis_menu`, `nama`, `harga`, `path`) VALUES
(1, 'makanan', 'Burger', '15000', 'burger.jpeg'),
(2, 'makanan', 'Chicken', '25000', 'chicken.jpeg'),
(3, 'makanan', 'Gyoza', '17000', 'gyoza.jpeg'),
(4, 'makanan', 'Hotdog', '20000', 'hotdog.jpeg'),
(5, 'makanan', 'French Fries', '15000', 'kentang.jpeg'),
(6, 'makanan', 'Chips', '13000', 'keripik.jpeg'),
(7, 'makanan', 'Cake', '25000', 'kue.jpeg'),
(8, 'makanan', 'Mozarella', '22000', 'mozarela.jpeg'),
(9, 'makanan', 'Onion Ring', '17000', 'onion.jpeg'),
(10, 'makanan', 'Wagyu A10', '50000', 'steak.jpeg'),
(11, 'minuman', 'Ice Lemon Tea Blue', '18000', 'es1.jpeg'),
(12, 'minuman', 'Ice Soda Lemon', '23000', 'es2.jpeg'),
(13, 'minuman', 'Ice Lemon Mint', '19000', 'es3.jpeg'),
(14, 'minuman', 'Ice Fruit Paper Mint', '25000', 'es4.jpeg'),
(15, 'minuman', 'Cappucino Ice Cream', '27000', 'es5.jpeg'),
(16, 'minuman', 'Ice Milo', '28000', 'es6.jpeg'),
(17, 'minuman', 'Ice Chocolate x Ice Cream', '28000', 'es7.jpeg'),
(18, 'minuman', 'Strawberry x Ice Cream', '28000', 'es8.jpeg'),
(19, 'minuman', 'Ice Coca Cola', '23000', 'es9.jpeg'),
(20, 'minuman', 'Ice Black Tea x Cream', '23000', 'es10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `jam_tayang` datetime DEFAULT NULL,
  `total_harga` int(12) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pemesanan`, `tanggal_pemesanan`, `jam_tayang`, `total_harga`, `id_user`) VALUES
(1, '2022-08-04', NULL, 50000, 10120711);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_film` (`id_film`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10120714;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
