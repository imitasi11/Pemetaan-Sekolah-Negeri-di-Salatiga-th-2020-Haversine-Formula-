-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 04:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_log`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE IF NOT EXISTS `tb_tempat` (
  `id_tempat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `nama_tempat`, `gambar`, `lat`, `lng`, `lokasi`, `telp`, `email`, `tingkat`, `kecamatan`) VALUES
(1, 'SD NEGERI CEBONGAN 01', 'jpg', -7.3621793, 110.5104317, 'Argomulyo, CEBONGAN, CEBONGAN', '(0298) 329394', 'sdncebongan01@gmailcom', 'sd', 'Argomulyo'),
(2, 'SD NEGERI CEBONGAN 02', 'jpg', -7.364352, 110.514004, 'Argomulyo, CEBONGAN, JL. SUKARNO HATTA 101', '(0298) 313891', 'sdncebongan02@gmail.com', 'sd', 'Argomulyo'),
(3, 'SD NEGERI CEBONGAN 03', 'jpg', -7.35794, 110.512245, 'Argomulyo, CEBONGAN, JL. SUKARNO HATTA KM. 03', '0856-4055-7110', 'sdnegericebongan03@gmail.com', 'sd', 'Argomulyo'),
(4, 'SD NEGERI KUMPULREJO 01', 'jpg', -7.355126, 110.490377, 'Argomulyo, KUMPULREJO, JL AMARTA NO3 RANDUARES', '0', 'kumpulrejo01@gmail.com', 'sd', 'Argomulyo'),
(5, 'SD NEGERI KUMPULREJO 02', 'jpg', -7.366734, 110.483629, 'Argomulyo, KUMPULREJO, JL. NGEMPLAK - KUMPULREJO', '0', 'kumpulrejo02@gmail.com', 'sd', 'Argomulyo'),
(6, 'SD NEGERI KUMPULREJO 03', 'jpg', -7.361004, 110.493278, 'Argomulyo, KUMPULREJO, JL TETEP WATES', '0', 'kumpul3@gmail.com', 'sd', 'Argomulyo'),
(7, 'SD NEGERI LEDOK 01', 'jpg', -7.341967, 110.511653, 'Argomulyo, LEDOK, JL. ARGO TUNGGAL 3', '(0298) 321981', 'sdnledok01salatiga@yahoo.com', 'sd', 'Argomulyo'),
(8, 'SD NEGERI LEDOK 02', 'jpg', -7.341339, 110.507415, 'Argomulyo, LEDOK, JL. VETERAN 43', '(0298) 315161', 'ledok02@gmail.com', 'sd', 'Argomulyo'),
(9, 'SD NEGERI LEDOK 05', 'jpg', -7.352967, 110.507606, 'Argomulyo, LEDOK, JL. ARGOBUDOYO 14', '0', 'sdnledok05@gmail.com', 'sd', 'Argomulyo'),
(10, 'SD NEGERI LEDOK 06', 'jpg', -7.342772, 110.514911, 'Argomulyo, LEDOK, JL. ARGO KARTIKO NO.1', '0', 'sdnledok06.sltg@gmail.com', 'sd', 'Argomulyo'),
(11, 'SD NEGERI LEDOK 07 SALATIGA', 'jpg', -7.341527, 110.507022, 'Argomulyo, LEDOK, JL. VETERAN 43 A', '(0298) 321861', 'ledoksdn@gmail.com', 'sd', 'Argomulyo'),
(12, 'SD NEGERI NOBOREJO 01', 'jpg', -7.37389, 110.505563, 'Argomulyo, NOBOREJO, JL. ARJUNA 50', '0', 'sdnnoborejo1@gmail.com', 'sd', 'Argomulyo'),
(13, 'SD NEGERI NOBOREJO 02', 'jpg', -7.384706, 110.502064, 'Argomulyo, NOBOREJO, JL.SADEWO I NO.2', '0', 'sdn_nobo@yahoo.com', 'sd', 'Argomulyo'),
(14, 'SD NEGERI RANDUACIR 01', 'jpg', -7.374408, 110.492868, 'Argomulyo, RANDUACIR, RANDUACIR', '0', 'sdnranduacir01@yahoo.co.id', 'sd', 'Argomulyo'),
(15, 'SD NEGERI RANDUACIR 02', 'jpg', -7.382855, 110.494646, 'Argomulyo, RANDUACIR, JL. PERTAPAAN GEDONO NO.61', '0857-1233-5819', 'sdnranduacir02@ymail.com', 'sd', 'Argomulyo'),
(16, 'SD NEGERI RANDUACIR 03', 'jpg', -7.367342, 110.497071, 'Argomulyo, RANDUACIR, JL. ARGOSARI RAYA NO.81 B', '0', 'randuacir03salatiga@gmail.com', 'sd', 'Argomulyo'),
(17, 'SD NEGERI TEGALREJO 01', 'jpg', -7.344774, 110.501997, 'Argomulyo, TEGALREJO, JL. MAGERSARI NO.2', '0', 'sdntegalrejo.satu@yahoo.com', 'sd', 'Argomulyo'),
(18, 'SD NEGERI TEGALREJO 02', 'jpg', -7.344774, 110.501997, 'Argomulyo, TEGALREJO, JL MARGERSARI NO. 2', '0', 'sdntegalrejodua@yahoo.co.id', 'sd', 'Argomulyo'),
(19, 'SD NEGERI TEGALREJO 03', 'jpg', -7.338718, 110.498599, 'Argomulyo, TEGALREJO, JL. VETERAN KARANGKEPOH', '(0298) 315867', 'sdntegalrejo3salatiga@gmail.com', 'sd', 'Argomulyo'),
(20, 'SD NEGERI TEGALREJO 04', 'jpg', -7.352992, 110.499199, 'Argomulyo, TEGALREJO, JL.TEGALREJO RAYA', '0', 'tegalrejo04yes@gmail.com', 'sd', 'Argomulyo'),
(21, 'SD NEGERI TEGALREJO 05', 'jpg', -7.346782, 110.503779, 'Argomulyo, TEGALREJO, JL. DAMAR', '0', 'sdntegalrejo05@gmail.com', 'sd', 'Argomulyo'),
(22, 'SD NEGERI GENDONGAN 01', 'jpg', -7.333611, 110.510302, 'Tingkir, GENDONGAN, JL. MARGOREJO NO. 581', '0', 'sdgendongan01.sala3@gmail.com', 'sd', 'Tingkir'),
(23, 'SD NEGERI GENDONGAN 02', 'jpg', -7.333543, 110.509967, 'Tingkir, GENDONGAN, JL. MARGOREJO NO.581', '(0298) 328216', '0', 'sd', 'Tingkir'),
(24, 'SD NEGERI GENDONGAN 03', 'jpg', -7.333565, 110.510003, 'Tingkir, GENDONGAN, JL. MARGOREJO 581 SALATIGA', '(0298) 311490', 'sdngendongan03@yahoo.co.id', 'sd', 'Tingkir'),
(25, 'SD NEGERI KALIBENING', 'jpg', -7.349619, 110.518376, 'Tingkir, KALIBENING, JL. JAFAR SHODIQ', '0', 'sdnkalibening@yahoo.com', 'sd', 'Tingkir'),
(26, 'SD NEGERI KUTOWINANGUN 01', 'jpg', -7.328302, 110.510407, 'Tingkir, KUTOWINANGUN LOR, JL. CANDISARI NO. 01', '(0298) 315077', 'sdnegerikutowinangunsalatiga@yahoo.co.id', 'sd', 'Tingkir'),
(27, 'SD NEGERI KUTOWINANGUN 03', 'jpg', -7.325882, 110.510289, 'Tingkir, KUTOWINANGUN LOR, JL. WUNI BENOYO I / 20', '0', 'Kutoq_3@yahoo.co.id', 'sd', 'Tingkir'),
(28, 'SD NEGERI KUTOWINANGUN 04', 'jpg', -7.328393, 110.511497, 'Tingkir, KUTOWINANGUN LOR, JL. BUTUH NO.1 A SALATIGA', '0813-2530-5044', 'sdkutowinangun04@gmail.com', 'sd', 'Tingkir'),
(29, 'SD NEGERI KUTOWINANGUN 05', 'jpg', -7.326033, 110.510201, 'Tingkir, KUTOWINANGUN LOR, JL. WUNI BENOYO I/20', '(0298) 315011', 'sdnkutowinangun5@gmail.com', 'sd', 'Tingkir'),
(30, 'SD NEGERI KUTOWINANGUN 07', 'jpg', -7.331332, 110.512385, 'Tingkir, KUTOWINANGUN KIDUL, JL. SITI PROJO', '(0298) 312829', 'sdnkutowinangun7@gmail.com', 'sd', 'Tingkir'),
(31, 'SD NEGERI KUTOWINANGUN 08', 'jpg', -7.321768, 110.514735, 'Tingkir, KUTOWINANGUN, JL. CANDEN NO. 03', '0858-7612-6999', 'sdktw08salatiga@gmail.com', 'sd', 'Tingkir'),
(32, 'SD NEGERI KUTOWINANGUN 09', 'jpg', -7.321994, 110.514781, 'Tingkir, KUTOWINANGUN, JL. CANDEN NO.03', '(0298) 311094', 'sdnkutowinangun09@gmail.com', 'sd', 'Tingkir'),
(33, 'SD NEGERI KUTOWINANGUN 10', 'jpg', -7.331708, 110.512512, 'Tingkir, KUTOWINANGUN KIDUL, JL.SITIPROJO NANGGULAN', '0', 'sdn_ktwsepuluh@yahoo.com', 'sd', 'Tingkir'),
(34, 'SD NEGERI KUTOWINANGUN 11', 'jpg', -7.328894, 110.510798, 'Tingkir, KUTOWINANGUN LOR, JL.BUTUH 1 SALATIGA', '(0298) 312134', 'sdkutowinangun11@yahoo.co.id', 'sd', 'Tingkir'),
(35, 'SD NEGERI KUTOWINANGUN 12', 'jpg', -7.325699, 110.510254, 'Tingkir, KUTOWINANGUN, JL. WUNI BENOYO I/20 SALATIGA', '(0298) 329282', 'sdkutowinangunrolas@gmail.com', 'sd', 'Tingkir'),
(36, 'SD NEGERI SIDOREJO KIDUL 02', 'jpg', -7.339995, 110.521524, 'Tingkir, SIDOREJO KIDUL, JL. MARDI UTOMO NO. 16 SALATIGA', '0', 'sdnsidorejokiduldua@gmail.com', 'sd', 'Tingkir'),
(37, 'SD NEGERI SIDOREJO KIDUL 03', 'jpg', -7.334631, 110.520196, 'Tingkir, SIDOREJO KIDUL, JL.KUMBANG NO 3', '0856-4090-5883', 'sidorejokidul@yahoo.co.id', 'sd', 'Tingkir'),
(38, 'SD NEGERI TINGKIR LOR 01', 'jpg', -7.356512, 110.528107, 'Tingkir, TINGKIR LOR, JL. H. SARKKOWI 7', '0', 'Sdnegeritingkirlor01salatiga@yahoo.co.id', 'sd', 'Tingkir'),
(39, 'SD NEGERI TINGKIR LOR 02', 'jpg', -7.358384, 110.52594, 'Tingkir, TINGKIR LOR, JL.KI SUROPATI NO.11', '(0298) 316385', 'sdn.tingkirlor.02@gmail.com', 'sd', 'Tingkir'),
(40, 'SD NEGERI TINGKIR TENGAH 01', 'jpg', -7.362461, 110.522947, 'Tingkir, TINGKIR TENGAH, JL.TANJUNG NO.3', '0', 'esdetingsa@yahoo.com', 'sd', 'Tingkir'),
(41, 'SD NEGERI TINGKIR TENGAH 02', 'jpg', -7.361163, 110.522394, 'Tingkir, TINGKIR TENGAH, JL. SALATIGA - SURUH', '0', 'sdntingkirtengah02@gmail.com', 'sd', 'Tingkir'),
(42, 'SD NEGERI DUKUH 01 SALATIGA', 'jpg', -7.339159, 110.486318, 'Sidomukti, DUKUH, JL. BIMA NO. 1', '(0298) 316223', 'sdndukuh01salatiga@gmail.com', 'sd', 'Sidomukti'),
(43, 'SD NEGERI DUKUH 02 SALATIGA', 'jpg', -7.350938, 110.482789, 'Sidomukti, DUKUH, JL.PARIKESIT 35 WARAK', '(0298) 3419386', 'negeridukuh02@gmail.com', 'sd', 'Sidomukti'),
(44, 'SD NEGERI DUKUH 03 SALATIGA', 'jpg', -7.342137, 110.482926, 'Sidomukti, DUKUH, JL. SRIKANDI NO.1', '(0298) 3419560', 'dkh03.sdn@gmail.com', 'sd', 'Sidomukti'),
(45, 'SD NEGERI DUKUH 05 SALATIGA', 'jpg', -7.338382, 110.481423, 'Sidomukti, DUKUH, JL. JANOKO NO. 8', '(0298) 3419559', 'sdn.dukuh5@gmail.com', 'sd', 'Sidomukti'),
(46, 'SD NEGERI KALICACING 02 SALATIGA', 'jpg', -7.328031, 110.500511, 'Sidomukti, KALICACING, JL. ADI SUCIPTO 6', '(0298) 7102121', 'sdnkalicacing02@gmail.com', 'sd', 'Sidomukti'),
(47, 'SD NEGERI KECANDRAN 01 SALATIGA', 'jpg', -7.324556, 110.476424, 'Sidomukti, KECANDRAN, JL. KYAI NURWAHID KARANGPADANG', '0856-2708-662', 'sdkecandrans@yahoo.com', 'sd', 'Sidomukti'),
(48, 'SD NEGERI MANGUNSARI 01 SALATIGA', 'jpg', -7.340029, 110.495388, 'Sidomukti, MANGUNSARI, JL. HASANUDIN NO 85', '0', 'sdn_mangunsarisatu@yahoo.co.id', 'sd', 'Sidomukti'),
(49, 'SD NEGERI MANGUNSARI 02 SALATIGA', 'jpg', -7.34017, 110.492256, 'Sidomukti, MANGUNSARI, JL. CAKRA GANG III', '0', 'Sdnmangunsari02@gmail.com', 'sd', 'Sidomukti'),
(50, 'SD NEGERI MANGUNSARI 03 SALATIGA', 'jpg', -7.330083, 110.492933, 'Sidomukti, MANGUNSARI, JL. CENDRAWASIH NO.6 KLASMAN KOTA SALATIGA', '0', 'mangunsari03salatiga@gmail.com', 'sd', 'Sidomukti'),
(51, 'SD NEGERI MANGUNSARI 04 SALATIGA', 'jpg', -7.329913, 110.497866, 'Sidomukti, MANGUNSARI, JL. TENTARA PELAJAR NO. 7', '0', 'sdn.mangunsari04@gmail.com', 'sd', 'Sidomukti'),
(52, 'SD NEGERI MANGUNSARI 05 SALATIGA', 'jpg', -7.339809, 110.495419, 'Sidomukti, MANGUNSARI, JL. HASANUDIN 83', '(0298) 314113', 'sdnmangunsari5@gmail.com', 'sd', 'Sidomukti'),
(53, 'SD NEGERI MANGUNSARI 06 SALATIGA', 'jpg', -7.348942, 110.494905, 'Sidomukti, MANGUNSARI, TEGAL SARI RT3 RW8', '-7.348942, 110.49490', 'sdnmangunsari06salatiga@gmail.com', 'sd', 'Sidomukti'),
(54, 'SD NEGERI MANGUNSARI 07 SALATIGA', 'jpg', -7.329901, 110.497753, 'Sidomukti, MANGUNSARI, JL. TENTARA PELAJAR NO 7', '(0298) 313016', 'sdnmangunsari07@gmail.com', 'sd', 'Sidomukti'),
(55, 'SD NEGERI BLOTONGAN 01', 'jpg', -7.300382, 110.485701, 'Sidorejo, BLOTONGAN, JL. FATMAWATI RT.07 / RW.03 TEGALOMBO', '0852-2517-8910', 'sdnblotongan01@gmail.com', 'sd', 'Sidorejo'),
(56, 'SD NEGERI BLOTONGAN 02', 'jpg', -7.300439, 110.486, 'Sidorejo, BLOTONGAN, JL. FATMAWATI BLOTONGAN RT 07/RW 3', '(0298) 328651', 'sdnblotongandua@gmail.com', 'sd', 'Sidorejo'),
(57, 'SD NEGERI BLOTONGAN 03', 'jpg', -7.297723, 110.478609, 'Sidorejo, BLOTONGAN, JL. FAMAWATI RT 02 RW 06', '(0298) 7163198', 'sd.blotongan03@gmail.com', 'sd', 'Sidorejo'),
(58, 'SD NEGERI BUGEL 01', 'jpg', -7.30832, 110.506185, 'Sidorejo, BUGEL, JL. MUTIARA N0.10', '0', 'dnbugel01@gmail.com', 'sd', 'Sidorejo'),
(59, 'SD NEGERI BUGEL 02', 'jpg', -7.303488, 110.506748, 'Sidorejo, BUGEL, JL. NOGOSARI', '0', 'sdnbugel02salatiga@yahoo.com', 'sd', 'Sidorejo'),
(60, 'SD NEGERI KAUMAN KIDUL', 'jpg', -7.303179, 110.514633, 'Sidorejo, KAUMAN KIDUL, JL. DURIAN NO. 02', '0', 'sdnkaumankidul@yahoo.com', 'sd', 'Sidorejo'),
(61, 'SD NEGERI PULUTAN 02', 'jpg', -7.313942, 110.477323, 'Sidorejo, PULUTAN, JL. DIPOMENGGOLO NO.11', '(0298) 324930', 'sdpulutan02salatiga@gmail.com', 'sd', 'Sidorejo'),
(62, 'SD NEGERI SALATIGA 01', 'jpg', -7.323924, 110.503138, 'Sidorejo, SALATIGA, JL. DIPONEGORO 13 SALATIGA', '(0298) 324246', '0', 'sd', 'Sidorejo'),
(63, 'SD NEGERI SALATIGA 02', 'jpg', -7.32374, 110.50334, 'Sidorejo, SALATIGA, JL. P. DIPONEGORO 12 SALATIGA', '0', 'sdpulutan02salatiga@gmail.com', 'sd', 'Sidorejo'),
(64, 'SD NEGERI SALATIGA 03', 'jpg', -7.325499, 110.501476, 'Sidorejo, SALATIGA, JL MARGOSARI NO. 03', '(0298) 316640', 'sdnsalatiga3@gmail.com', 'sd', 'Sidorejo'),
(65, 'SD NEGERI SALATIGA 05', 'jpg', -7.326664, 110.500596, 'Sidorejo, SALATIGA, JL.KARTINI 42 SALATIGA', '0', 'sd_salatiga05@yahoo.com', 'sd', 'Sidorejo'),
(66, 'SD NEGERI SALATIGA 06', 'jpg', -7.32513, 110.497158, 'Sidorejo, SALATIGA, JL. KARTINI 26 SALATIGA', '0298-314995', 'sdnsalatiga06@yahoo.co.id', 'sd', 'Sidorejo'),
(67, 'SD NEGERI SALATIGA 08', 'jpg', -7.316127, 110.502002, 'Sidorejo, SALATIGA, JL.DOMAS 54 SALATIGA', '(0298) 316514', 'sdsalatiga8@gmail.com', 'sd', 'Sidorejo'),
(68, 'SD NEGERI SALATIGA 09', 'jpg', -7.32375, 110.503401, 'Sidorejo, SALATIGA, JL. DIPONEGORO 12 STG', '(0298) 327261', 'sdsalatiga9@yahoo.co.id', 'sd', 'Sidorejo'),
(69, 'SD NEGERI SALATIGA 10', 'jpg', -7.325573, 110.501444, 'Sidorejo, SALATIGA, JL.MARGOSARI NO. 03', '(0298) 316640', 'salatiga10sdn@gmail.com', 'sd', 'Sidorejo'),
(70, 'SD NEGERI SALATIGA 12', 'jpg', -7.315675, 110.501881, 'Sidorejo, SALATIGA, JL.DOMAS NO.54', '0', 'sdnsalatiga12@gmail.com', 'sd', 'Sidorejo'),
(71, 'SD NEGERI SIDOREJO LOR 01', 'jpg', -7.310951, 110.491023, 'Sidorejo, SIDEOREJO LOR, JL. DIPONEGORO 134', '0', 'silossa134@gmail.com', 'sd', 'Sidorejo'),
(72, 'SD NEGERI SIDOREJO LOR 02', 'jpg', -7.320042, 110.486053, 'Sidorejo, SIDOREJO LOR, JL. IMAM BONJOL NO. 117', '(0298) 7102898', 'sdsilor2@yahoo.co.id', 'sd', 'Sidorejo'),
(73, 'SD NEGERI SIDOREJO LOR 03', 'jpg', -7.319256, 110.489437, 'Sidorejo, SIDOREJO LOR, JL. IMAM BONJOL 86', '(0298) 312318', 'Sidorejolor03@gmail.com', 'sd', 'Sidorejo'),
(74, 'SD NEGERI SIDOREJO LOR 04', 'jpg', -7.304779, 110.490012, 'Sidorejo, SIDOREJO LOR, JALAN SOKA SARI V RT 02 RW 07', '0', 'sidorejolor04@gmail.com', 'sd', 'Sidorejo'),
(75, 'SD NEGERI SIDOREJO LOR 05', 'jpg', -7.311049, 110.491088, 'Sidorejo, SIDOREJO LOR, JL. DIPONEGORO 134 B', '0', 'sidorejo05@gmail.com', 'sd', 'Sidorejo'),
(76, 'SD NEGERI SIDOREJO LOR 06', 'jpg', -7.321316, 110.492493, 'Sidorejo, SIDOREJO LOR, JL. IMAM BONJOL GG. MENUR', '0', 'sdsilor6@gmail.com', 'sd', 'Sidorejo'),
(77, 'SD NEGERI SIDOREJO LOR 07', 'jpg', -7.319072, 110.489351, 'Sidorejo, SIDOREJO LOR, JL. IMAM BONJOL 86B', '(0298) 7101007', 'enno_alone@yahoo.com', 'sd', 'Sidorejo'),
(78, 'MIN SALATIGA', 'jpg', -7.340298, 110.47487, 'Sidomukti, Kecandran, GAMOL RT 4/RW VI', '(0298) 7103102', '0', 'sd', 'Sidomukti'),
(79, 'SMP NEGERI 10 SALATIGA', 'jpg', -7.354986, 110.504143, 'Argomulyo, RANDUACIR, JL. ARGOBOGA', '(0298) 328173', 'smpn10_sl3@yahoo.co.id', 'smp', 'Argomulyo'),
(80, 'SMP NEGERI 6 SALATIGA', 'jpg', -7.351061, 110.499396, 'Argomulyo, TEGALREJO, JL. TEGALREJO RAYA', '298323851', 'smpn6salatiga@gmail.com', 'smp', 'Argomulyo'),
(81, 'MTSN SALATIGA', 'jpg', -7.341716, 110.504905, 'Tingkir, Tegalrejo, JL. TEGALREJO NO. 1', '(0298) 323950', '0', 'smp', 'Tingkir'),
(82, 'SMP NEGERI 8 SALATIGA', 'jpg', -7.342417, 110.516066, 'Tingkir, SIDOREJO KIDUL, JL. ARGO TUNGGAL', '(0298) 321653', 'espansa08@yahoo.com', 'smp', 'Tingkir'),
(83, 'SMP NEGERI 3 SALATIGA', 'jpg', -7.328392, 110.497224, 'Sidomukti, MANGUNSARI, JL. STADION NO. 4 SALATIGA', '(0298) 326260', 'smp_netisa_ssn@ymail.com', 'smp', 'Sidomukti'),
(84, 'SMP NEGERI 5 SALATIGA', 'jpg', -7.338354, 110.485809, 'Sidomukti, DUKUH, JL. BIMA NO.10', '(0298) 321972', 'nelisapasti5@gmail.com', 'smp', 'Sidomukti'),
(85, 'SMP NEGERI 7 SALATIGA', 'jpg', -7.350595, 110.486313, 'Sidomukti, DUKUH, JL. SETIAKI.15 SALATIGA', '(0298) 322272', 'tu_smp7salatiga@yahoo.com', 'smp', 'Sidomukti'),
(86, 'SMP NEGERI 1 SALATIGA', 'jpg', -7.324324, 110.497925, 'Sidorejo, SALATIGA, JL. KARTINI 24', '(0298) 325160', 'smp1_grisa45@yahoo.co.id', 'smp', 'Sidorejo'),
(87, 'SMP NEGERI 2 SALATIGA', 'jpg', -7.32549, 110.496891, 'Sidorejo, SALATIGA, KARTINI NO.26', '298315352', 'smpnegeri2salatiga@yahoo.co.id', 'smp', 'Sidorejo'),
(88, 'SMP NEGERI 4 SALATIGA', 'jpg', -7.321772, 110.50371, 'Sidorejo, SALATIGA, JL. DR.SUMARDI 9 SALATIGA', '(0298) 326785', 'smp4sltg@gmail.com', 'smp', 'Sidorejo'),
(89, 'SMP NEGERI 9 SALATIGA', 'jpg', -7.324649, 110.506158, 'Sidorejo, SALATIGA, JL. PEMUDA 7-9 SALATIGA', '(0298) 326265', 'smp9salatiga@gmail.com', 'smp', 'Sidorejo'),
(90, 'SMAN 2 SALATIGA', 'jpg', -7.352043, 110.499315, 'Argomulyo, TEGALREJO, JLN. TEGALREJO 79 KOTA SALATIGA', '(0298) 322250', 'sma2salatiga@gmail.com', 'sma', 'Argomulyo'),
(91, 'SMAN 1 SALATIGA', 'jpg', -7.317996, 110.497452, 'Sidorejo, SIDOREJO LOR, JL. KEMIRI NO. 1 SALATIGA', '(0298) 326867', 'sma_1_sltg@yahoo.com', 'sma', 'Sidorejo'),
(92, 'SMAN 3 SALATIGA', 'jpg', -7.326083, 110.500259, 'Sidorejo, SALATIGA, JL. KARTINI NO.34 SALATIGA TLP. 0298 323300', '(0298) 323300', 'sman_3_salatiga@yahoo.com', 'sma', 'Sidorejo'),
(93, 'SMKN 3 SALATIGA', 'jpg', -7.345995, 110.519413, 'Tingkir, KALIBENING, JL. JAFAR SHODIQ', '(0298) 3418850', 'smkn3salatiga@gmail.com', 'sma', 'Tingkir'),
(94, 'SMKN 1 SALATIGA', 'jpg', -7.33788, 110.48823, 'Sidomukti, DUKUH, JL. NAKULA SADEWA I/3 SALATIGA KOTA SALATIGA', '(0298) 323566', 'smk1salatiga@yahoo.com', 'sma', 'Sidomukti');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
