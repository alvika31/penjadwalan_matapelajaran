-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2023 pada 20.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `email`, `password`) VALUES
(1, 'dakon kontolodon', 'dakon', 'dakon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `nip`, `email`, `password`, `jenis_kelamin`, `jabatan`) VALUES
(11, 'Nina Husnaeni S, S.Pd.', '0001', 'ninah@gmail.com', '25bbdcd06c32d477f7fa1c3e4a91b032', 'Wanita', 'Pengajar'),
(12, 'Dra. Nani Sumami, M.MPd.', '0002', 'nanisum@gmail.com', 'fcd04e26e900e94b9ed6dd604fed2b64', 'Wanita', 'Wali Kelas'),
(13, 'Iis Triwartini, S.Pd.', '0003', 'iis3@gmail.com', '7cd86ecb09aa48c6e620b340f6a74592', 'Wanita', 'Pengajar'),
(14, 'Tetet Sopia Zaenah, S.Pd.', '0004', 'tetetsz@gmail.com', '95b09698fda1f64af16708ffb859eab9', 'Wanita', 'Pengajar'),
(15, 'Drs. Ayi Suhendar', '0005', 'ayic@gmail.com', 'd39934ce111a864abf40391f3da9cdf5', 'Pria', 'Wali Kelas'),
(16, 'Dra. Hj. Een Hendayani, M.Pd.', '0006', 'eenhend@gmail.com', '7f8bb0fe8b33780a08fe6b60ced14529', 'Wanita', 'Wali Kelas'),
(17, 'Drs. Agus Supriatna', '0007', 'agus@gmail.com', '6950aac2d7932e1f1a4c3cf6ada1316e', 'Pria', 'Pengajar'),
(18, 'Muhammad Zulkifli L, M.Pd.', '0008', 'zulzul@gmail.com', '926abae84a4bd33c834bc6b981b8cf30', 'Pria', 'Pengajar'),
(19, 'Drs. H. Tohari, M.Pd.I.', '0009', 'toha@gmail.com', '29549a71a57f587d88209b9c1f1b7999', 'Pria', 'Pengajar'),
(20, 'N. Eli Sopiah, SE, M.M.Pd.', '0010', 'elisopi@gmail.com', 'fc1198178c3594bfdda3ca2996eb65cb', 'Wanita', 'Pengajar'),
(21, 'Siti Aidah Ilawati, S.Pd.', '0011', 'sitiaaa@gmail.com', 'ae2bac2e4b4da805d01b2952d7e35ba4', 'Wanita', 'Pengajar'),
(22, 'Noor Dewi Sulilawati, S.Pd.', '0012', 'cahayasangdewi@gmailcom', '29150bb2319c182c944841c74d2f8d75', 'Wanita', 'Pengajar'),
(23, 'Popi Puspita, S.Pd., MM.', '0013', 'popi@gmail.com', 'c0279f73075a52e1a7dea35065bc8c80', 'Wanita', 'Pengajar'),
(24, 'Tedy Friyadi, M.Pd.', '0014', 'tedybears@gmail.com', 'b6fb522815d06fed82b0140be4c74680', 'Pria', 'Pengajar'),
(25, 'Novi suminar, S.Pd.,MM.', '0015', 'novisum@gmailcom', 'b6fb522815d06fed82b0140be4c74680', 'Wanita', 'Pengajar'),
(26, 'Herlia Asriani, S.Pd.', '0016', 'herliaaas@gmail.com', 'c3f484315c27d75d5449e9e0963949da', 'Wanita', 'Pengajar'),
(27, 'Neneng Hermawati, S.Pd.', '0017', 'neneng@gmail.com', '6858fb45a3d3aef7c29322d3b68dffd1', 'Wanita', 'Pengajar'),
(28, 'Dwi Novianti, S.Pd.', '0018', 'dwi@gmail.com', '857778a20b9a41d4ca0d687a36e4bfa8', 'Wanita', 'Pengajar'),
(29, 'Muhammad Andri Setiadi, S.Pd.', '0019', 'mandris@gmail.com', '540bd55a2cf295b8ea9cd78650e89d03', 'Pria', 'Pengajar'),
(30, 'Deviana Hermanshah, S.Pd.', '0020', 'devi@gmail.com', '540bd55a2cf295b8ea9cd78650e89d03', 'Wanita', 'Pengajar'),
(31, 'Ipah Nasopah, S.Pd.', '0021', 'ipah@gmail.com', 'd9f5e405a7f74ed652a8f0b31a87f636', 'Wanita', 'Pengajar'),
(32, 'Tira Nur Indah, S.Pd.', '0022', 'tira@gmail.com', '147768d3955e38c4e662c0a95d807abc', 'Wanita', 'Pengajar'),
(33, 'Ujang Rusdini, S.Kom.', '0023', 'ujangrr@gmail.com', 'b26747fc8cb2170baa866b315cf58b7c', 'Pria', 'Pengajar'),
(34, 'Bagus Abdul Karim, S.Kom.', '0024', 'bagusabdul@gmail.com', '096ec814d2392f379695f30ca7041977', 'Pria', 'Wali Kelas'),
(35, 'Sofi Yordani, S.Kom.', '0025', 'sofi@gmail.com', 'ed0a75eeb69b34ddc14beed2678bee12', 'Wanita', 'Pengajar'),
(36, 'Fajar Oktavian Nugraha, S.Pd.', '0026', 'fajardaily@gmail.com', '2ebe25dd3a566f36f80d55440d3c3834', 'Pria', 'Wali Kelas'),
(37, 'Gina Labibah, S.Pd.', '0027', 'giina@gmail.com', 'f865c5e07958ad70ef989e905390f6d0', 'Wanita', 'Wali Kelas'),
(38, 'Mega Rahmansyah, S.Pd.', '0028', 'megamendung@gmail.com', '6cb9669ff7bbb140212081ccb0f68543', 'Wanita', 'Pengajar'),
(39, 'Arif Muhammad Furqan, S.Kom.', '0029', 'armuh@gmail.com', '0e0b24fc303d2b384be5a2464654a5d2', 'Pria', 'Wali Kelas'),
(40, 'Lilik Nurahmawati, S.Kom', '0030', 'lillik@gmail.com', '1d0d2cade49078f9d43bbdfab67abbc0', 'Wanita', 'Wali Kelas'),
(41, 'Nita Agustin, S.Kom.', '0031', 'nita@gmail.com', '0780f11aa0422b8466bce734d1a730ab', 'Wanita', 'Wali Kelas'),
(42, 'Muhammad Nizar Ramadhan, S.Pd.', '0032', 'nizar@gmail.com', 'c90070ff096dd6858022784617b2f383', 'Pria', 'Pengajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_guru`) VALUES
(3, 'X RPL 1', 15),
(7, 'X RPL 2', 36),
(10, 'X RPL 3', 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `nama_pelajaran` varchar(255) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `hari` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_pelajaran`, `jam_awal`, `jam_selesai`, `hari`, `id_kelas`, `id_ruangan`, `id_guru`) VALUES
(5, 'Pemograman Web', '17:41:00', '19:41:00', 'senin', 3, 1, 4),
(8, 'Bahasa Sunda', '07:45:00', '08:30:00', 'senin', 3, 1, 13),
(10, 'Bahasa Sunda', '08:30:00', '09:15:00', 'senin', 3, 1, 13),
(11, 'Matematika', '09:15:00', '10:00:00', 'senin', 3, 1, 18),
(12, 'Matematika', '10:15:00', '11:00:00', 'senin', 3, 1, 18),
(13, 'Matematika', '11:00:00', '11:45:00', 'senin', 3, 1, 18),
(14, 'Matematika', '12:15:00', '13:00:00', 'senin', 3, 1, 18),
(15, 'Bahasa Inggris', '13:00:00', '13:45:00', 'senin', 3, 1, 17),
(16, 'Bahasa Inggris', '13:45:00', '14:30:00', 'senin', 3, 1, 18),
(17, 'Bahasa Inggris', '14:30:00', '15:15:00', 'senin', 3, 1, 18),
(18, 'Bahasa Inggris', '15:15:00', '16:00:00', 'senin', 3, 1, 18),
(19, 'IPA', '07:45:00', '08:30:00', 'senin', 7, 3, 23),
(20, 'IPA', '20:30:00', '21:15:00', 'senin', 3, 1, 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapot`
--

CREATE TABLE `rapot` (
  `id_rapot` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rapot`
--

INSERT INTO `rapot` (`id_rapot`, `id_guru`, `id_kelas`, `id_siswa`, `tanggal`, `file`, `keterangan`) VALUES
(14, 15, 3, 1, '2023-10-16', 'AHMAD FADILAH_0002201.pdf', 'Anda Rangking 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `kode_ruangan` varchar(255) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `kode_ruangan`, `nama_ruangan`) VALUES
(1, 'E-7', 'Kelas X RPL 1'),
(3, 'E-8', 'Kelas X RPL 2'),
(4, 'H-1', 'Kelas X RPL 3'),
(5, 'RPL-A', 'Kelas XI RPL 1'),
(6, 'RPL-B', 'Kelas XI RPL 2'),
(7, 'RPL-C', 'Kelas XI RPL 3'),
(8, 'E-4', 'Kelas XII RPL 1'),
(9, 'D-1', 'Kelas XII RPL 2'),
(10, 'D-2', 'Kelas XII RPL 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_lengkap`, `nis`, `email`, `password`, `jenis_kelamin`, `id_kelas`) VALUES
(1, 'AHMAD FADILAH', '0002201', 'ahmad@gmail.com', '90855392ab53cc4bdcd5e0aa2fa2cdce', 'Pria', 3),
(4, 'AINUR NAVIDA', '0002202', 'ainur@gmail.com', 'c26820b8a4c1b3c2aa868d6d57e14a79', 'Wanita', 3),
(6, 'ANANDA HAFIDZ PRATAMA', '0002203', 'ananda@gmail.com', '6e17a5fd135fcaf4b49f2860c2474c7c', 'Pria', 3),
(7, 'ANANTA ABDUL', '0002204', 'ananta@gmail.com', 'b151ce4935a3c2807e1dd9963eda16d8', 'Pria', 3),
(8, 'ANDINA HARIS MARISA', '0002205', 'andina@gmail.com', 'a440a3d316c5614c7a9310e902f4a43e', 'Wanita', 3),
(9, 'ANGGITA PUTRI SAVIRA', '0002206', 'anggita@gmail.com', 'd43bedcb6d05a8549b26cc780a56650f', 'Wanita', 3),
(10, 'ANGGUN LARASATI PUTRI', '0002207', 'anggun@gmail.com', 'd3bcfcc39578e6dbffbe4e5dc9d4c59b', 'Wanita', 3),
(11, 'ANTONI ARIA SADEWA', '0002208', 'anton@gmail.com', '2e50333d809d5dbc61a12937527cf9cf', 'Pria', 3),
(12, 'ARYA BAGASKARA', '0002209', 'arya@gmail.com', 'f28348c5c99e25ec388e80e9d34319bf', 'Pria', 3),
(13, 'BARUNA ARYA PRAMUDYA', '0002210', 'aryabarun@gmail.com', '3ea3fcb1ea1a4b0dc3cdf5c6ce902078', 'Pria', 3),
(14, 'BAYU DWI ARTA BAGASKARA', '0002211', 'bayu@gmail.com', '948ed361d354392532725aa86a0eac56', 'Pria', 3),
(15, 'BRAMASTA WIRAWAN', '0002212', 'bram@gmail.com', '1098821332d8cdce0eaa662cbe248b12', 'Pria', 3),
(16, 'CHANDRA KARUNIA', '0002213', 'chandra@gmail.com', '769e0f6c6a3a4dd1c903717a397bdf66', 'Pria', 3),
(17, 'CLAUDIA SETIAWAN', '0002214', 'claudia@gmail.com', '16fa6d7fcf8a08a928746df1233e0462', 'Wanita', 3),
(18, 'GRACIA RINA PUTRI', '0002215', 'gracia@gmail.com', '8f6c8f711a23301c2ee5de8a3907689b', 'Wanita', 3),
(19, 'HERLAN ABDEL', '0002216', 'herlan@gmail.com', '3d29d41766bdb6df8d413280debc3345', 'Pria', 3),
(20, 'HISYAM WIDI NUGRAHA', '0002217', 'widhi@gmail.com', '03097a62ff1c25991328b16506d49d81', 'Pria', 3),
(21, 'JULIA SANI', '0002218', 'sani@gmail.com', '89762493bd46c5b4df7bcc467e2f2282', 'Wanita', 3),
(22, 'KAISAR SATRIA', '0002219', 'kaisar@gmail.com', '5617eaa8db9f6f2cb710859fec7d0351', 'Pria', 3),
(23, 'LISVIA YULIA AMANDA', '0002220', 'lisvia@gmail.com', 'a9766b09d1183c11ce0cd23de9305e69', 'Wanita', 3),
(24, 'MOCHAMAD RASYA MALIK AL RASYID', '0002221', 'rasya@gmail.com', '7b9b7a6a307d33e60727636535296668', 'Pria', 3),
(25, 'MUHAMMAD SATRIO NUGROHO', '0002222', 'satrio@gmail.com', '1506652b210a1e061bd25832310fedd8', 'Pria', 3),
(26, 'MUTIARA AZZAHRANI', '0002223', 'mutiara@gmail.com', '89562a6a835abcb29807ece43970f61f', 'Wanita', 3),
(27, 'NATASYA PUTRI', '0002224', 'putri@gmail.com', 'c8763e49ca120890941d3f4bd57ca7bd', 'Wanita', 3),
(28, 'NAZRIL NURFADILAH', '0002225', 'nazril@gmail.com', '6c5b5590c00f79c32340876b2bbfeb73', 'Pria', 3),
(29, 'NERISTA GEISHANI', '0002226', 'neri@gmail.com', '4aa68e024a2525972f7867812bd93a49', 'Wanita', 3),
(30, 'NUR AZIZAH NINGSIH', '0002227', 'azizah@gmail.com', '4aa68e024a2525972f7867812bd93a49', 'Wanita', 3),
(31, 'PATRICIA CALISTA', '0002228', 'calista@gmail.com', '063063bcb026c934ad3ebf6bb30feb1d', 'Wanita', 3),
(32, 'PRISKILA ARDA', '0002229', 'arda@gmail.com', '52bc8a216e81a22ba387cb2b52986444', 'Wanita', 3),
(33, 'RAIHAN FAJAR AYDINA', '0002230', 'raihan@gmail.com', '52bc8a216e81a22ba387cb2b52986444', 'Pria', 3),
(34, 'WAHYU SAMUDRA', '0002231', 'wahyu@gmail.com', 'ae3046a395aea265e30eae3fc931318e', 'Pria', 3),
(35, 'YOLANDA VIONA', '0002232', 'yolanda@gmail.com', '09e3dfaa10a21d31279e9dec727a5e5a', 'Wanita', 3),
(36, 'ALDO ADE RAMDANI', '0002233', 'aldo@gmail.com', '0409ca5ceb31dbf882f1a6bd50eb8b8a', 'Pria', 7),
(37, 'ALE ILHAM RAMADHAN', '0002234', 'ilham@gmail.com', '7a42cba2376d4444c83a062425a5117c', 'Pria', 7),
(38, 'ANDIKHA PUTRA', '0002235', 'andika@gmail.com', '273981371c3f9df11101a9f342d779c1', 'Pria', 7),
(39, 'ARDHAN PUTRA', '0002236', 'ardan@gmail.com', '8f19182152d469de4b2ff86eaf3052ee', 'Pria', 7),
(40, 'ARYA RANGGA PRATAMA', '0002237', 'arya@gmail.com', '8f19182152d469de4b2ff86eaf3052ee', 'Pria', 7),
(41, 'BIMA SATRIA WICAKSONO', '0002238', 'bima@gmail.com', '11fa094b6c25c443af56e48e017f378f', 'Pria', 7),
(42, 'CINTA SIFITRI', '0002239', 'cinta@gmail.com', '96d62a93b2a989d721e7bfd8c1046126', 'Wanita', 7),
(43, 'DINI SOLIHAH', '0002240', 'ihah@gmail.com', '273981371c3f9df11101a9f342d779c1', 'Wanita', 7),
(44, 'DIVANA HUSEIN', '0002241', 'divana@gmail.com', '24aad3074c34aaf70f9341968e133f84', 'Wanita', 7),
(45, 'DONI OKI SETIAWAN', '0002242', 'oki@gmail.com', 'e6f9a554706de6a6668a321a59b9265f', 'Pria', 7),
(46, 'ENZY TRI PUTRI', '0002243', 'enzy@gmail.com', 'd3c50a39ff5b804bb7f1c1837d07889c', 'Wanita', 7),
(47, 'FALIA AMA GEA', '0002244', 'gea@gmail.com', '4de6b029aeea621dbb1f30d8cb193484', 'Wanita', 7),
(48, 'FARIS RAGIL WIJAYA', '0002245', 'ragil@gmail.com', '82242a22f5b5bb8c2c3314a92616c3ec', 'Pria', 7),
(49, 'FIA MUTIARA SARI', '0002246', 'fia@gmail.com', 'ca9cb1be66d80338a43f165eec2b88e2', 'Wanita', 7),
(50, 'FIKO MAREL', '0002247', 'fiko@gmail.com', '003a5ae3529ee93e692aa18cb1090297', 'Pria', 7),
(51, 'FIRDA PURWASITO', '0002248', 'firda@gmail.com', '0853e2ddb8851da6a83f92f6aad5a3aa', 'Wanita', 7),
(52, 'FIRZA SALSABILA', '0002249', 'firza@gmail.com', '5b6b314949fdb2ed66f64b95853f83ce', 'Wanita', 7),
(53, 'FITRI ANE', '0002250', 'ane@gmail.com', '99d39739db55a27bfe82da49e6fec9f9', 'Wanita', 7),
(54, 'FITRIA NUR AINI', '0002251', 'fitria@gmail.com', '6e35f083aa904256cadc4e7958f9044e', 'Wanita', 7),
(55, 'GALUH RUKMI', '0002252', 'galuh@gmail.com', '270d3bd579f8197040b43959392fd757', 'Wanita', 7),
(56, 'GAYUH NICKO SAPUTRA', '0002253', 'nicko@gmail.com', '77360823c409e5b535fc3fbc6d581e23', 'Pria', 7),
(57, 'HAFIZD TEGAR', '0002254', 'tegar@gmail.com', 'c52568a80d4c85bd552003ca48acd043', 'Pria', 7),
(58, 'HAFIZA PUTRA', '0002255', 'fiza@gmail.com', '4d5a8f77cb51ff139b1bf8cfd4cd6cd8', 'Pria', 7),
(59, 'JEHAN RIZQIA', '0002256', 'jehan@gmail.com', 'c693c534b56673545853ac0baa47a162', 'Wanita', 7),
(60, 'KENNO ZILQWIN', '0002257', 'kenno@gmail.com', 'a807d8c538d892b0282280faa4b4dc4f', 'Pria', 7),
(61, 'MOCH AGIL ZAKARIA', '0002258', 'agil@gmail.com', 'a807d8c538d892b0282280faa4b4dc4f', 'Pria', 7),
(62, 'MUHAMMAD ARISQYA', '0002259', 'aris@gmail.com', '743663f9dec4482b37455fac4ba845e9', 'Pria', 7),
(63, 'RAANAIYA ZAKKIYAH MARWA', '0002260', 'zakkiyah@gmail.com', '97039f320e97c234175647cf3d5dd099', 'Wanita', 7),
(64, 'RAHMA YUNITA', '0002261', 'rahma@gmail.com', '4b8e292c260388fc75d69464ec378d8c', 'Wanita', 7),
(65, 'TIARA RAHMA DYAH', '0002262', 'tiara@gmail.com', '6dd7047c187feda3179ce29c6d49d4c2', 'Wanita', 7),
(66, 'AAQILA NAZARA', '0002263', 'aaqila@gmail.com', '6c5542a40cb0608464b53d7b60afe37f', 'Wanita', 10),
(67, 'ACHMAD MARVEL DAVINSYAH', '0002264', 'marvel@gmail.com', 'ef07edd9e0c1a67e6ccbb0d534158599', 'Pria', 10),
(68, 'ACHMAD ZAKY', '0002265', 'zaky@gmail.com', '57365f7e5dd6492032b57f1d3b0ffa51', 'Pria', 10),
(69, 'ADDINIA ASYARA', '0002266', 'addina@gmail.com', '6757570ce807df21ed9a39b20345643b', 'Wanita', 10),
(70, 'ANDARA YULIA', '0002267', 'andara@gmail.com', '37c8ea4567866456fb76a971d4928e59', 'Wanita', 10),
(71, 'CHEALSEA VIOLA', '0002268', 'viola@gmail.com', '66c9d5be944c3b3f4997a093a7b7ec1c', 'Wanita', 10),
(72, 'FARHAN AULIA NUGRAHA', '0002269', 'farhan@gmail.com', '74d72a1dc079a4a61f2e4ace64c5f8cd', 'Pria', 10),
(73, 'FARREL APRILIO ', '0002270', 'farrel@gmail.com', '5db3bfcc61387aa22f1f86718d22c99b', 'Pria', 10),
(74, 'GITA MEI SARAH', '0002271', 'gita@gmail.com', 'df22139aa6848c450bcdd9803ca28ed6', 'Wanita', 10),
(75, 'HAFIZ FEBRIAN PUTRA', '0002272', 'febrian@gmail.com', 'd83bd10b9306452f97078a83246f90f6', 'Pria', 10),
(76, 'HAFIZH AKBAR', '0002273', 'akbar@gmail.com', '62d7cfb2d4b2a241404357397aef3f5b', 'Pria', 10),
(77, 'HANIFA ALTHAFUNNISA', '0002274', 'hanifa@gmail.com', '4bb64182c353a390ad92e90774f31a36', 'Wanita', 10),
(78, 'HASAN BAGUS PRAYOGA', '0002275', 'hasan@gmail.com', '2a5b128cd8d56d598de0fefaca8ae261', 'Pria', 10),
(79, 'JIMMY PRAKOSO', '0002276', 'jimmy@gmail.com', 'edaecfc1ca3f7e5567711d860f55c3d1', 'Pria', 10),
(80, 'KESYA AZ-ZAHRA ULFITRIA', '0002277', 'kesya@gmail.com', 'cbc5b41360928f84418bf15c260ae04f', 'Wanita', 10),
(81, 'MIFTAHUL ULUM', '0002278', 'ulum@gmail.com', '28bdab5c16783d82cf5addc9466a564d', 'Pria', 10),
(82, 'MOCH RAFI', '0002279', 'rafi@gmail.com', 'c22c3dba13f437a645af401b3f083ef4', 'Pria', 10),
(83, 'MOCH YUSUF FATIR', '0002280', 'fatir@gmail.com', '9bb14c23dde69e3dc8b14cef89610950', 'Pria', 10),
(84, 'MOCHAMAD FAISAL', '0002281', 'faisal@gmail.com', '2600b191b5765d3561a9c09c5013acd2', 'Pria', 10),
(85, 'MOCHAMAD HITA ARIANTO', '0002282', 'hita@gmail.com', '652b2f81c5961aec73cf14957dba188f', 'Pria', 10),
(86, 'MUHAMMAD IQBAL', '0002283', 'iqbal@gmail.com', '793b1c1866553400b8f7a8d9966eff95', 'Pria', 10),
(87, 'MUHAMMAD JAFAR SHODIQ', '0002284', 'jafar@gmail.com', 'fefd8f4fd024810c97fd04f693a4722e', 'Pria', 10),
(88, 'MUHAMMAD JOELIAN', '0002285', 'julian@gmail.com', '579bc52c6c78c89370691f5ca85e1fa1', 'Pria', 10),
(89, 'NIMAS AZZAHRA LESTARI', '0002286', 'nimas@gmail.com', 'c76b1e9ddd2c17281e08dd9ea5580e2a', 'Wanita', 10),
(90, 'PUTRI SATMIKA', '0002287', 'putrisatmika@gmail.com', 'c76b1e9ddd2c17281e08dd9ea5580e2a', 'Wanita', 10),
(91, 'RACHEL AYU APRILIA', '0002288', 'rachel@gmail.com', '88e68272ada8d408f50c72f49ab3ccd8', 'Wanita', 10),
(92, 'RAYSHA CAHYA', '0002289', 'cahya@gmail.com', '73af02376dad859be115357b5c79a0c5', 'Pria', 10),
(93, 'RENDY PRAJA PRADIFTA', '0002290', 'rendy@gmail.com', '73af02376dad859be115357b5c79a0c5', 'Pria', 10),
(94, 'RESTA AULIA', '0002291', 'resta@gmail.com', '3ea489c8a1298ac52aaa4a1ba323458b', 'Wanita', 10),
(95, 'RIZAL SYAHRUL RAMADHAN', '0002292', 'rizal@gmail.com', '8ed8ee14db926c207cb79184611c8977', 'Pria', 10),
(96, 'SAFIRA DEWI', '0002293', 'safira@gmail.com', 'ded335931805eefee220dd7fedda5a3c', 'Wanita', 10),
(97, 'SELLA FITRI AZIZAH', '0002294', 'sella@gmail.com', '475724d79fb057619dddc12c06c61957', 'Wanita', 10),
(98, 'SHINTA AULIA', '0002295', 'shinta@gmail.com', 'e6bfbdc1185e88112d1937051a237052', 'Wanita', 10),
(99, 'VIOLLA SHEVIA', '0002296', 'violla', 'caa98f762f3411e30350110503f80c89', 'Wanita', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `rapot`
--
ALTER TABLE `rapot`
  ADD PRIMARY KEY (`id_rapot`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `rapot`
--
ALTER TABLE `rapot`
  MODIFY `id_rapot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
