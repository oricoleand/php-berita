-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2025 at 09:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_img` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_img`, `nama`) VALUES
(1, 'temple.jpg'),
(2, 'event.jpg'),
(3, 'bg-gallery.jpg'),
(5, 'Yahari_cover02.jpg'),
(6, 'anime.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kebijakan`
--

CREATE TABLE `tbl_kebijakan` (
  `id` int NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kebijakan`
--

INSERT INTO `tbl_kebijakan` (`id`, `pdf`) VALUES
(1, 'kebijakan_undip.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lvuser`
--

CREATE TABLE `tbl_lvuser` (
  `id_lvuser` int NOT NULL,
  `leveluser` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_lvuser`
--

INSERT INTO `tbl_lvuser` (`id_lvuser`, `leveluser`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id` int NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id`, `pdf`) VALUES
(1, 'Peraturan_Daerah.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peraturan`
--

CREATE TABLE `tbl_peraturan` (
  `id` int NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_peraturan`
--

INSERT INTO `tbl_peraturan` (`id`, `pdf`) VALUES
(1, 'Peraturan_Daerah.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id_post` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `artikel` text,
  `date` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id_post`, `img`, `judul`, `artikel`, `date`, `kategori`, `author`) VALUES
(1, 'bg-3.jpg', 'Bayi Bisa Berbicara Dengan Lancar Bingittsss', 'waijdiajiwad', '2021-08-15', 'berita', 'Nopek'),
(2, 'bg-culture.jpg', 'Bayi Bisa Berbicara Dengan Lancar Bingittsss', 'waijdiajiwad', '2021-08-15', 'berita', 'Nopek'),
(4, 'bg-event.jpg', 'Bayi Bisa Berbicara Dengan Lancar Bingittsss', 'waijdiajiwad', '0000-00-00', 'berita', 'Nopek'),
(11, 'bg-gallery.jpg', 'Bayi Bisa Berbicara Acak', 'ea ea', '2021-08-17', 'berita', 'Dodit Mulyanto'),
(12, 'burung2.jpg', 'Bayi Bisa Berbicara Dengan Lancar ', 'waijdiajiwad', '0000-00-00', 'berita', 'Dodit Mulyanto'),
(18, 'burung.jpg', 'Bayi Bisa Berbicara Dengan Lancar Bingittsss', 'waijdiajiwad', '2021-08-17', 'Info-umum', 'Dodit Mulyanto'),
(19, 'temple.jpg', 'Bayi Bisa Berbicara Dengan ', 'waijdiajiwad', '2021-08-17', 'Kontak', 'Dodit Mulyanto'),
(20, 'mendes.png', 'Atasi Krisis Pangan, Kemendes PDTT akan Intensifikasi 1,7 Juta Ha Lahan Sawah', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odit quis doloremque, pariatur ex aspernatur molestias sit ad repellat voluptas autem, dignissimos consequuntur eos libero dolore delectus reprehenderit illum nobis.\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Sit totam, similique, perspiciatis unde accusamus culpa odit. Aperiam doloribus facere quae. Maxime exercitationem consequatur explicabo nisi quod illum ullam sed architecto.\r\n\r\nvoluptas autem, dignissimos consequuntur eos libero dolore delectus reprehenderit illum?.', '2021-08-19', 'berita', 'Nopek'),
(22, 'default.jpg', 'Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Veritatis repellendus error rem reprehenderit, sit excepturi quas nisi,', 'Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Veritatis repellendus error rem reprehenderit, sit excepturi quas nisi, fugit! Iste animi necessitatibus optio dolorum, sed totam rerum, incidunt minima ullam possimus!', '2021-08-20', 'kontak', 'Dodit Mulyanto'),
(23, 'Screenshot 2025-10-22 124550.png', 'test', 'test', '2025-10-22', 'info-umum', 'Dodit Mulyantoro'),
(24, 'Screenshot 2025-10-20 152913.png', 'test', 'test', '2025-10-22', 'berita', 'Dodit Mulyantoro');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_lvuser` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_pengguna`, `img`, `id_lvuser`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Dodit Mulyantoro', 'avatar5.png', 1),
(2, 'user', '5d8a8a118ab27197bd9689846e67131f', 'Nopek', 'avatar2.png', 2),
(32, 'isa', '165a1761634db1e9bd304ea6f3ffcf2b', 'Isa Nur', 'avatar4.png', 2),
(33, 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'Indrasta', 'avatar5.png', 1),
(34, 'wawa', '21232f297a57a5a743894a0e4a801fc3', 'Huriyah', 'avatar2.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  ADD PRIMARY KEY (`id_lvuser`);

--
-- Indexes for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tbl_users_ibfk_1` (`id_lvuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_img` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  MODIFY `id_lvuser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`id_lvuser`) REFERENCES `tbl_lvuser` (`id_lvuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
