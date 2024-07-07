-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 03:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `nama`, `email`, `phone`, `message`) VALUES
(7, 'Eko Bagus Susanto', 'ekosusantobagussusanto@gmail.com', '05551234567', 'TESTOOOOOOOOO'),
(9, 'Eko Bagus Susanto', 'ekosusantobagussusanto@gmail.com', '05551234567', 'Tour nya sangat menyerukan dan gabakal bosen pokoknya, buruan deh join juga. mantap lexatourism'),
(10, 'Eko Bagus Susanto', 'ekosusantobagussusanto@gmail.com', '05551234567', 'Tour nya sangat menyerukan dan gabakal bosen pokoknya, buruan deh join juga. mantap lexatourism'),
(13, 'Eko Bagus Susanto', 'ekosusantobagussusanto@gmail.com', '05551234567', 'testooooooooooooooooo'),
(16, 'eko bagus', 'ekosusantobagussusanto@gmail.com', '07555444', 'tesss'),
(17, 'Boom Beach22', 'aanjay@outlook.de', '098727474274', 'testttoooo testoooooo'),
(18, 'Boom Beach22', 'aanjay@outlook.de', '098727474274', 'testttoooo testoooooo'),
(20, 'tetttt', 'aanjay@outlook.de', '1-1948004084', 'tettooo'),
(21, 'tetttt', 'aanjay@outlook.de', '1-1948004084', 'tettooo'),
(24, 'Bagus Susanto', 'aanjay@outlook.com', '9895475924424', 'test presentasi'),
(27, 'eko bagus', 'aanjay@outlook.de', '934838482', 'anjay mabar');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `jumlah_kunjungan_kuliner` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `nama`, `jumlah_anggota`, `jumlah_hari`, `jumlah_kunjungan_kuliner`, `tanggal_mulai`, `total_bayar`) VALUES
(34, 'Boom Beach', 1, 33, 1, '2024-04-20', 175),
(35, 'Alas Purwo Forest', 5, 2, 4, '2024-05-11', 450),
(47, 'Ijen Tour', 7, 2, 2, '2024-05-24', 500);

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `nama`, `email`, `alamat`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'Jl. Raya No. 123'),
(2, 'Jane Smith', 'jane.smith@example.com', 'Jl. Melati No. 456');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi_menginap` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama_pemesan`, `jenis_kelamin`, `nomor_identitas`, `tipe_kamar`, `tanggal_pesan`, `durasi_menginap`, `total_bayar`) VALUES
(25, 'Eko Bagus', 'L', '2974792497', '100', '2024-05-02', 4, 600),
(27, 'eko bagus susanto', 'L', '258275725252', '200', '2024-05-02', 11, 1980),
(28, 'Eko Bagus Susanto', 'P', '826426842', '100', '2024-05-03', 3, 980),
(31, 'Farhan', 'P', '232224', '200', '2024-05-27', 8, 525),
(32, 'Zaiz', 'L', '55555', '200', '2024-05-27', 3, 450),
(36, 'Eiko Alexandra', 'L', '25255252', '200', '2024-05-27', 4, 800),
(37, 'lexaikooo', 'L', '362358302139', '200', '2024-06-03', 5, 1000),
(38, 'Eiko Alexandra', 'L', '266464242', '100', '2024-07-07', 7, 702),
(39, 'Eiko Alexandra', 'L', '266464242', '100', '2024-07-07', 7, 702),
(40, 'testo', 'L', '75555', '200', '2024-07-07', 2, 480),
(41, 'testo', 'L', '75555', '200', '2024-07-07', 2, 480),
(42, 'testo', 'L', '75555', '200', '2024-07-07', 2, 480),
(43, 'testo', 'L', '75555', '200', '2024-07-07', 2, 480),
(44, 'Eko Bagus Susanto', 'L', '362358302139', '100', '2024-07-07', 3, 300),
(45, 'Eiko Alexandra', 'L', '26545254', '200', '2024-07-07', 4, 720),
(46, 'Eko Susanto', 'L', '362358302139', '200', '2024-07-07', 3, 600),
(47, 'Kresna Yuda Permana', 'L', '3622736732', '300', '2024-07-07', 4, 1080),
(48, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(49, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(50, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(51, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(52, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(53, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(54, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(55, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(56, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200),
(57, 'Kresna ', 'L', '36251661353', '200', '2024-07-07', 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `harga_perorang` decimal(10,2) NOT NULL,
  `harga_per_hari` decimal(10,2) NOT NULL,
  `harga_per_kunjungan_kuliner` decimal(10,2) NOT NULL,
  `deskripsi_destinasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id`, `nama_destinasi`, `lokasi`, `harga_perorang`, `harga_per_hari`, `harga_per_kunjungan_kuliner`, `deskripsi_destinasi`) VALUES
(1, 'Pulau Bali', 'Bali', 250000.00, 100000.00, 50000.00, 'Pulau eksotis dengan pantai yang indah.'),
(2, 'Gunung Bromo', 'Jawa Timur', 200000.00, 75000.00, 40000.00, 'Gunung berapi yang memiliki pemandangan matahari terbit yang menakjubkan.');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `nama`, `nohp`, `created_at`) VALUES
(1, 'John Doe', '1234567890', '2024-04-30 03:57:32'),
(2, 'Jane Smith', '0987654321', '2024-04-30 03:57:32'),
(3, 'Alice Wonderland', '5551234567', '2024-04-30 03:57:32'),
(4, 'ekkekeek', 'jwjwjwjwjwj', '2024-04-30 04:06:01'),
(13, '', '', '2024-04-30 04:54:29'),
(14, '', '', '2024-04-30 04:54:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
