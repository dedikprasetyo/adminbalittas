-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 08:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tembakau`
--

-- --------------------------------------------------------

--
-- Table structure for table `atribut`
--

CREATE TABLE `atribut` (
  `id_atribut` char(7) NOT NULL,
  `nama_atribut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atribut`
--

INSERT INTO `atribut` (`id_atribut`, `nama_atribut`) VALUES
('ATR0001', 'Asal'),
('ATR0002', 'Benangsari vs Putik'),
('ATR0003', 'Bendol muka daun'),
('ATR0004', 'Bentuk buah'),
('ATR0005', 'Bentuk bunga'),
('ATR0006', 'Bentuk daun'),
('ATR0007', 'Bentuk Tanaman'),
('ATR0008', 'Bulu batang'),
('ATR0009', 'Diameter tabung bunga (mm)'),
('ATR0010', 'Habitus'),
('ATR0011', 'Hasil per-Ha (kg/ha)'),
('ATR0012', 'Irisan melintang daun'),
('ATR0013', 'Jenis tanaman / Spesies'),
('ATR0014', 'Jumlah daun produksi (lembar / pohon)'),
('ATR0015', 'Kadar Nikotin (%)'),
('ATR0016', 'Kekasaran urat daun'),
('ATR0017', 'Kekompakan bunga'),
('ATR0018', 'Daerah pengembangan'),
('ATR0019', 'Ketahanan terhadap Hama'),
('ATR0020', 'Ketahanan terhadap penyakit'),
('ATR0021', 'Keterangan'),
('ATR0022', 'Krosok (ton/ha)'),
('ATR0023', 'Lebar daun (cm)'),
('ATR0024', 'Lebar sayap daun (cm)'),
('ATR0025', 'Meloidoggne spp'),
('ATR0026', 'Metode Curing'),
('ATR0027', 'Metode pemuliaan'),
('ATR0028', 'Nilai Indek Mutu'),
('ATR0029', 'Nilai Indek Tanaman'),
('ATR0030', 'Nisbah /Indeks daun'),
('ATR0031', 'Ombak Tepi daun'),
('ATR0032', 'Panjang bunga (mm)'),
('ATR0033', 'Panjang daun (cm)'),
('ATR0034', 'Panjang ruas'),
('ATR0035', 'Pemilik varietas'),
('ATR0036', 'Pemulia'),
('ATR0037', 'Peneliti pendukung'),
('ATR0038', 'Peneliti Pengusul'),
('ATR0039', 'Penggembungan bunga (mm)'),
('ATR0040', 'Permukaan daun'),
('ATR0041', 'Phylotaksi'),
('ATR0042', 'Phytophthora nicotianae'),
('ATR0043', 'Posisi bunga vs daun atas'),
('ATR0044', 'Potensi Produksi'),
('ATR0045', 'Rajangan kering (ton/ha)'),
('ATR0046', 'Ralstonia solanacearum'),
('ATR0047', 'Ruas Batang / Internodia'),
('ATR0048', 'Sifat Morfologi'),
('ATR0049', 'Sirung'),
('ATR0050', 'Species'),
('ATR0051', 'Sudut daun'),
('ATR0052', 'Tangkai daun'),
('ATR0053', 'Tebal daun'),
('ATR0054', 'Teknisi'),
('ATR0055', 'Telinga daun (cm)'),
('ATR0056', 'Tepi daun'),
('ATR0057', 'Tetua betina'),
('ATR0058', 'Tetua jantan'),
('ATR0059', 'Tinggi tanaman (cm)'),
('ATR0060', 'Tipe / tangkai daun'),
('ATR0061', 'Tipe daun'),
('ATR0062', 'Tipe Tembakau'),
('ATR0063', 'Tipe varietas'),
('ATR0064', 'Ujung daun'),
('ATR0065', 'Ujung mahkota'),
('ATR0066', 'Ukuran mahkota (mm)'),
('ATR0067', 'Umur berbunga (hst)'),
('ATR0068', 'Umur panen (hst)'),
('ATR0069', 'Umur Tanaman'),
('ATR0070', 'Warna batang'),
('ATR0071', 'Warna biji'),
('ATR0072', 'Warna daun'),
('ATR0073', 'Warna Kepala Sari'),
('ATR0074', 'Warna mahkota bunga');

--
-- Triggers `atribut`
--
DELIMITER $$
CREATE TRIGGER `tr_id_atribut` BEFORE INSERT ON `atribut` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_atribut FROM `atribut` ORDER by id_atribut DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_atribut = concat('ATR000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_atribut = concat('ATR00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_atribut = concat('ATR0',@hitung);
ELSE
SET new.id_atribut = concat('ATR',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_varietas`
--

CREATE TABLE `deskripsi_varietas` (
  `id_varietas` char(5) NOT NULL,
  `id_deskripsi_varietas` char(7) NOT NULL,
  `narasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi_varietas`
--

INSERT INTO `deskripsi_varietas` (`id_varietas`, `id_deskripsi_varietas`, `narasi`) VALUES
('V0001', 'DSV0001', ''),
('V0002', 'DSV0002', ''),
('V0003', 'DSV0003', ''),
('V0004', 'DSV0004', ''),
('V0005', 'DSV0005', ''),
('V0006', 'DSV0006', ''),
('V0007', 'DSV0007', ''),
('V0008', 'DSV0008', 'Varietas ini diperoleh dari hasil seleksi varietas lokal yang berasal dari Prancak, Kecamat-an Pasongsongan, Kabupaten Sumenep. Varietas Prancak-95 dilepas oleh Menteri Pertanian pa-da tahun 1997 dengan SK nomor 731/Kpts/TP.240/7/97.\nHabitus tanaman seperti kerucut, bila telah dipangkas akan berbentuk silin-dris. Tinggi tanaman rata-rata berki-sar antara 60 dan 80 cm, jumlah daun 14-18 lembar. Bentuk daunnya oval agak sempit, duduk daun pada batang membentuk sudut lancip. Varietas ini tahan terhadap pe-nyakit lanas (Phytophthora nicotia-nae var. nicotianae). \nProduktivitasnya rata-rata 804 kg rajangan/ha, indeks mutu 57, kadar nikotin rata-rata 2,13%. Tembakau rajangan Prancak-95 mempunyai aroma yang harum dan gurih, sesuai untuk bahan baku rokok keretek. Varietas ini lebih sesuai untuk lahan kering, di daerah pegunungan dan tegalan. Dinas Perkebunan Kabupaten Pamekasan dan Sumenep mulai menangkarkan benih sebar Prancak-95 pada 1996 dan 1997. Benih sebar yang dihasilkan dibagikan kepada pedagang bibit sehingga bibit yang dipasarkan berasal dari sumber benih yang jelas. Produktivitas Prancak-95 di tingkat petani berkisar antara 0,45-0,8 ton/ha, tergantung jenis lahan dan pengelolaan ta-naman oleh petani. Saat ini penggunaan Prancak-95 diperkirakan mencapai 50-60% dari total areal tembakau madura, tersebar di Kabupaten Sumenep, Pamekasan, dan sebagian Sampang.\nPengembangan tembakau madura Prancak-95 didukung dengan adanya kemitraan antara petani dan PT Sadhana Arifnusa (pemasok tembakau PT HM Sampoerna) dan pemasok PT PR Gudang Garam serta peran aktif dari instansi terkait. Dalam kemitraan ini, pengelola menyediakan benih sebar, sedangkan Dinas Perkebunan dan Kehutanan Kabupaten Pamekasan membina petani penangkar yang merangkap sebagai pedagang bibit.\n'),
('V0009', 'DSV0009', ''),
('V0010', 'DSV0010', ''),
('V0011', 'DSV0011', ''),
('V0012', 'DSV0012', '');

--
-- Triggers `deskripsi_varietas`
--
DELIMITER $$
CREATE TRIGGER `tr_id_deskripsi_varietas` BEFORE INSERT ON `deskripsi_varietas` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_deskripsi_varietas FROM `deskripsi_varietas` ORDER by id_deskripsi_varietas DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_deskripsi_varietas = concat('DSV000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_deskripsi_varietas = concat('DSV00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_deskripsi_varietas = concat('DSV0',@hitung);
ELSE
SET new.id_deskripsi_varietas = concat('DSV',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_deskripsi`
--

CREATE TABLE `detail_deskripsi` (
  `id_deskripsi_varietas` char(7) NOT NULL,
  `id_atribut` char(7) NOT NULL,
  `detail_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_deskripsi`
--

INSERT INTO `detail_deskripsi` (`id_deskripsi_varietas`, `id_atribut`, `detail_value`) VALUES
('DSV0001', 'ATR0013', 'Tembakau / Nicotiana tabaccum.'),
('DSV0001', 'ATR0001', 'Introduksi, hibrida silang tunggal dari Amerika Serikat.'),
('DSV0001', 'ATR0063', 'Hibrida.'),
('DSV0001', 'ATR0057', 'Cytoplasmic male sterile NC 1127.'),
('DSV0001', 'ATR0058', 'NC 810.'),
('DSV0001', 'ATR0048', '-'),
('DSV0001', 'ATR0010', 'Kerucut.'),
('DSV0001', 'ATR0059', '213,9 ? 8,72.'),
('DSV0001', 'ATR0070', 'Hijau muda.'),
('DSV0001', 'ATR0014', '30,5 ? 2,59.'),
('DSV0001', 'ATR0049', 'Sedang.'),
('DSV0001', 'ATR0060', 'Duduk, sudut daun sedang.'),
('DSV0001', 'ATR0033', '54,6 ? 3,78.'),
('DSV0001', 'ATR0023', '31,3 ? 2,50.'),
('DSV0001', 'ATR0041', '2/5 ka.'),
('DSV0001', 'ATR0030', '0,57.'),
('DSV0001', 'ATR0024', 'Sangat sempit (2,29 ? 0,61).'),
('DSV0001', 'ATR0016', 'Sedang, sudut urat daun lancip.'),
('DSV0001', 'ATR0006', 'Elip sempit, bentuk ujung daun runcing.'),
('DSV0001', 'ATR0012', 'Cekung, irisan bujur daun agak lengkung.'),
('DSV0001', 'ATR0003', 'Sedang, sedikit melipat.'),
('DSV0001', 'ATR0031', 'Lemah, torehan tepi daun berombak.'),
('DSV0001', 'ATR0055', 'Tidak ada atau sangat pendek (3,65 ? 0,65).'),
('DSV0001', 'ATR0072', 'Hijau, warna ibu tulang daun hijau keputihan.'),
('DSV0001', 'ATR0067', 'Tengahan (60,3 ? 3,56).'),
('DSV0001', 'ATR0032', 'Pendek (<=47,4).'),
('DSV0001', 'ATR0009', 'Kecil (<=4,4).'),
('DSV0001', 'ATR0039', 'Lemah (<=8).'),
('DSV0001', 'ATR0066', 'Sedang (9-11).'),
('DSV0001', 'ATR0065', 'Sangat kuat, warna pink muda, putik sempurna.'),
('DSV0001', 'ATR0002', 'Lebih pendek.'),
('DSV0001', 'ATR0005', 'Kerucut terbalik.'),
('DSV0001', 'ATR0043', 'Di atas.'),
('DSV0001', 'ATR0005', 'Terbuka.'),
('DSV0001', 'ATR0004', 'Bulat telur.'),
('DSV0001', 'ATR0044', '-'),
('DSV0001', 'ATR0022', '1,73-1,99.'),
('DSV0001', 'ATR0028', '55,37 - 78,35.'),
('DSV0001', 'ATR0029', '95,84 - 152,03.'),
('DSV0001', 'ATR0015', '2,07 - 4,22.'),
('DSV0001', 'ATR0020', '-'),
('DSV0001', 'ATR0042', 'Moderat tahan.'),
('DSV0001', 'ATR0046', 'Moderat tahan.'),
('DSV0001', 'ATR0026', 'Tahap pelayuan/penguningan selama 38 jam, tahap pengikatan warna selama 47,6 jam, tahap pengeringan daun selama 25,2 jam, dan tahap pengeringan gagang selama24,0 jam.'),
('DSV0001', 'ATR0036', 'Fatkhur Rochman, Emy Sulistyowati, Ruly Hamida, dan Sri Adikadarsih.'),
('DSV0001', 'ATR0037', 'Hamzah, Joko Triyono Rahardjo, Djajadi, Ali Permadi, Kristiana Sri Wijayanti, Muhammad Syakir, Fadjry Djufry, dan Fajarudin.'),
('DSV0001', 'ATR0035', 'PT. Benih Emas Indonesia.'),
('DSV0002', 'ATR0013', 'Tembakau, Nicotiana tabaecum.'),
('DSV0002', 'ATR0001', 'Introduksi, hibrida silang tunggal dari Amerika Serikat.'),
('DSV0002', 'ATR0063', 'Hibrida.'),
('DSV0002', 'ATR0057', 'Cytoplasmic male sterile GLH 1994-RCL.'),
('DSV0002', 'ATR0058', 'K 326 (RTMV).'),
('DSV0002', 'ATR0048', '-'),
('DSV0002', 'ATR0010', 'Kerucut.'),
('DSV0002', 'ATR0059', '199,7 ? 14,8.'),
('DSV0002', 'ATR0070', 'Hijau muda.'),
('DSV0002', 'ATR0014', '27,4 ? 1,35.'),
('DSV0002', 'ATR0049', 'Sedang.'),
('DSV0002', 'ATR0060', 'Duduk, sudut daun lancip.'),
('DSV0002', 'ATR0033', '60,81 ? 5,80.'),
('DSV0002', 'ATR0023', '29,91 ? 3,26.'),
('DSV0002', 'ATR0041', '5/13 kl.'),
('DSV0002', 'ATR0030', '0,49.'),
('DSV0002', 'ATR0024', '1,77 ? 0,24.'),
('DSV0002', 'ATR0016', 'Sedang, sudut urat daun lancip.'),
('DSV0002', 'ATR0006', 'Elip lebar, bentuk ujung daun meruneing.'),
('DSV0002', 'ATR0012', 'Cekung, irisan bujur daun lengkung.'),
('DSV0002', 'ATR0003', 'Sedang, sedikit melipat.'),
('DSV0002', 'ATR0031', 'Lemah, torehan tepi daun berombak.'),
('DSV0002', 'ATR0055', 'Tidak ada atau sangat pendek (3,57?0,84).'),
('DSV0002', 'ATR0072', 'Hijau, warna ibu tulang daun hijau keputihan.'),
('DSV0002', 'ATR0067', '58,7 ? 1,34.'),
('DSV0002', 'ATR0032', 'Panjang (>=51.7).'),
('DSV0002', 'ATR0009', 'Sedang (47,5 - 51,6).'),
('DSV0002', 'ATR0039', 'Lemah (>=8).'),
('DSV0002', 'ATR0066', 'Sedang (20 - 23).'),
('DSV0002', 'ATR0065', 'Sangat kuat, warna pink, putik sempurna.'),
('DSV0002', 'ATR0002', 'Lebih pendek.'),
('DSV0002', 'ATR0005', 'Kerucut terbalik.'),
('DSV0002', 'ATR0043', 'Di atas.'),
('DSV0002', 'ATR0005', 'Terbuka.'),
('DSV0002', 'ATR0004', 'Bulat telur.'),
('DSV0002', 'ATR0044', '-'),
('DSV0002', 'ATR0022', '1,88 - 2,13.'),
('DSV0002', 'ATR0028', '70,28 - 86,99.'),
('DSV0002', 'ATR0029', '133,45 - 178,82.'),
('DSV0002', 'ATR0015', '2,11 - 4,11.'),
('DSV0002', 'ATR0020', '-'),
('DSV0002', 'ATR0042', 'Moderat tahan.'),
('DSV0002', 'ATR0046', 'Moderat tahan.'),
('DSV0002', 'ATR0026', 'Tahap pelayuanjpenguningan selama 39,6 jam, tahap pengikatan warna selama 54,0 jam, tahap pengeringan daun selama 25,2 jam, dan tahap pengeringan gagang selama 24,0 jam.'),
('DSV0002', 'ATR0036', 'Fatkhur Rochman, Emy Sulistyowati, Ruly Hamida, dan Aprilia Ridhawati.'),
('DSV0002', 'ATR0037', 'Hamzah, Joko Triyono Rahardjo, Djajadi, Ali Permadi, Kristiana Sri Wijayanti, Muhammad Syakir, Fadjry Djufry, dan Fajarudin.'),
('DSV0002', 'ATR0035', 'PT. Benih Emas Indonesia.'),
('DSV0003', 'ATR0013', 'Tembakau / Nicotiana tabaccum.'),
('DSV0003', 'ATR0001', 'Introduksi, hibrida silang tunggal dari Amerika Serikat. '),
('DSV0003', 'ATR0063', 'Hibrida.'),
('DSV0003', 'ATR0057', 'Cytoplasmic male sterile NC 297-66-615.'),
('DSV0003', 'ATR0058', 'NCTG-6011-616.'),
('DSV0003', 'ATR0048', '-'),
('DSV0003', 'ATR0010', 'Kerucut.'),
('DSV0003', 'ATR0059', '205?9,89.'),
('DSV0003', 'ATR0070', 'Hijau.'),
('DSV0003', 'ATR0014', '27 ? 1,15.'),
('DSV0003', 'ATR0049', 'Tidak ada.'),
('DSV0003', 'ATR0060', 'Duduk, sudut daun laneip.'),
('DSV0003', 'ATR0033', '58?4,74.'),
('DSV0003', 'ATR0023', '32,8?3,02.'),
('DSV0003', 'ATR0041', '3/8 ka.'),
('DSV0003', 'ATR0030', '0,57.'),
('DSV0003', 'ATR0024', 'Sangat sempit (2,26?0,61).'),
('DSV0003', 'ATR0016', 'Sedang, sudut urat daun sangat laneip.'),
('DSV0003', 'ATR0006', 'Elip sempit, bentuk ujung daun meruncing.'),
('DSV0003', 'ATR0012', 'Agak lengkung, irisan bujur agak lengkung.'),
('DSV0003', 'ATR0003', 'Sedang, sedikit melipat.'),
('DSV0003', 'ATR0031', 'Lemah, torehan tepi daun berombak.'),
('DSV0003', 'ATR0055', 'Tidak ada atau sangat pendek (4,25 ? 0,67).'),
('DSV0003', 'ATR0072', 'Hijau, warna ibu tulang daun hijau keputihan.'),
('DSV0003', 'ATR0067', 'Tengahan (60,6 ? 2,63).'),
('DSV0003', 'ATR0032', 'Panjang (58 ? 4,74).'),
('DSV0003', 'ATR0009', 'Kecil (?4,4).'),
('DSV0003', 'ATR0039', 'Sedang (9 - 11).'),
('DSV0003', 'ATR0066', 'Sedang (20 - 23)'),
('DSV0003', 'ATR0065', 'ujung mahkota sangat kuat, warna pink muda.'),
('DSV0003', 'ATR0002', '-'),
('DSV0003', 'ATR0005', '-'),
('DSV0003', 'ATR0043', 'Di atas.'),
('DSV0003', 'ATR0017', 'Terbuka.'),
('DSV0003', 'ATR0004', 'Bulat telur.'),
('DSV0003', 'ATR0044', '-'),
('DSV0003', 'ATR0022', '1,73 - 2,03.'),
('DSV0003', 'ATR0028', '62,34 - 85,74.'),
('DSV0003', 'ATR0029', '108,02 - 158,66.'),
('DSV0003', 'ATR0015', '2,19 - 4,21.'),
('DSV0003', 'ATR0020', '-'),
('DSV0003', 'ATR0042', 'Moderat Tahan.'),
('DSV0003', 'ATR0046', 'Moderat Tahan.'),
('DSV0003', 'ATR0026', 'Tahap pelayuan/penguningan selama 42 jam, tahap pengikatan warna selama 51,6 jam, tahap pengeringan daun selama 25,2 jam, dan tahap pengeringan gagang selama 24,0 jam.'),
('DSV0003', 'ATR0036', 'Fatkhur Rochman, Emy Sulistyowati, Ruly Hamida, dan Sri Yulaikah.'),
('DSV0003', 'ATR0037', 'Hamzah, Joko Triyono Rahardjo, Djajadi, Ali Permadi, Kristiana Sri Wijayanti, Muhammad Syakir, Fadjry Djufry, dan Fajarudin.'),
('DSV0003', 'ATR0035', 'PT. Benih Emas Indonesia.'),
('DSV0004', 'ATR0001', 'Kultivar Gagang Rejeb Sidi'),
('DSV0004', 'ATR0063', 'Galur Murni'),
('DSV0004', 'ATR0048', '-'),
('DSV0004', 'ATR0010', 'Kerucut'),
('DSV0004', 'ATR0059', '103,2 ? 18,1'),
('DSV0004', 'ATR0034', 'Panjang bertambah'),
('DSV0004', 'ATR0070', 'Hijau tua.'),
('DSV0004', 'ATR0008', 'Berbulu.'),
('DSV0004', 'ATR0014', '21,7 ? 0,7.'),
('DSV0004', 'ATR0051', 'Sedang.'),
('DSV0004', 'ATR0064', 'Runcing.'),
('DSV0004', 'ATR0056', 'Berombak sedang.'),
('DSV0004', 'ATR0040', 'Sedikit berbendol.'),
('DSV0004', 'ATR0053', 'Tebal.'),
('DSV0004', 'ATR0072', 'Hijau.'),
('DSV0004', 'ATR0041', '3/8 ka.'),
('DSV0004', 'ATR0052', 'Bertangkai.'),
('DSV0004', 'ATR0024', 'Sangat sempit.'),
('DSV0004', 'ATR0055', 'Sempit.'),
('DSV0004', 'ATR0033', '49,6 ? 3,0.'),
('DSV0004', 'ATR0023', '31,2 ? 2,2.'),
('DSV0004', 'ATR0006', 'Lanset.'),
('DSV0004', 'ATR0030', '0,60 - 0,64.'),
('DSV0004', 'ATR0067', '52,4 ? 1,5.'),
('DSV0004', 'ATR0074', 'Merah muda tua.'),
('DSV0004', 'ATR0004', 'Bulat telur.'),
('DSV0004', 'ATR0071', 'Coklat.'),
('DSV0004', 'ATR0068', '84,6 ? 3,6.'),
('DSV0004', 'ATR0044', '-'),
('DSV0004', 'ATR0045', '0,82 - 0,95.'),
('DSV0004', 'ATR0028', '58,19 - 75,28.'),
('DSV0004', 'ATR0029', '7L,72 - 86,99.'),
('DSV0004', 'ATR0015', '3,L2 - 5,42.'),
('DSV0004', 'ATR0020', '-'),
('DSV0004', 'ATR0042', 'Moderat tahan.'),
('DSV0004', 'ATR0046', 'Moderat tahan.'),
('DSV0004', 'ATR0018', 'Sesuai untuk pengembangan di Kabupaten Tulungagung, Provinsi Jawa Timur'),
('DSV0004', 'ATR0036', 'Ruly Hamida, Fatkhur Rochman, Sesanti, Basuki, Emy Sulistyowati, Sri Yulaikah, dan Sri Adikadarsih.'),
('DSV0004', 'ATR0037', 'Cece Suhara, Djajadi, Muhammad Syakir, Fadjry, Djufry, Tatang Suhartono, Suprapti, dan Rodi\''),
('DSV0004', 'ATR0054', 'Slamet.'),
('DSV0004', 'ATR0035', 'Pemerintah Daerah Kabupaten Tulungagung, Provinsi Jawa Timur.'),
('DSV0005', 'ATR0001', 'Persilangan Kemloko2x K 399'),
('DSV0005', 'ATR0027', 'Persilangan konvensional, silang balik 2 kali, seleksi pedigree dan penggaluran'),
('DSV0005', 'ATR0050', 'Nicotiana tabacum.'),
('DSV0005', 'ATR0062', 'Temanggung.'),
('DSV0005', 'ATR0063', 'Galur murni.'),
('DSV0005', 'ATR0010', 'Kerucut.'),
('DSV0005', 'ATR0059', 'Tinggi (130,91 ? 12,40)'),
('DSV0005', 'ATR0070', 'Hijau keputihan.'),
('DSV0005', 'ATR0014', 'Sedikit (19,93 ? 1,21)'),
('DSV0005', 'ATR0049', 'Sedang.'),
('DSV0005', 'ATR0061', 'Duduk, sudut daun: lancip.'),
('DSV0005', 'ATR0033', 'Panjang (49,67 ? 2,44)'),
('DSV0005', 'ATR0023', 'Sempit (26,11 ? 1,03)'),
('DSV0005', 'ATR0030', '0,48 - 0,54.'),
('DSV0005', 'ATR0041', '3/8 kanan.'),
('DSV0005', 'ATR0024', 'Sedang.'),
('DSV0005', 'ATR0016', 'Sedang.'),
('DSV0005', 'ATR0006', 'Lanset, ujung: runcing.'),
('DSV0005', 'ATR0012', 'Cembung /agak lengkung.'),
('DSV0005', 'ATR0003', 'Tidak ada, sedikit melipat.'),
('DSV0005', 'ATR0031', 'Tidak ada, torehan: rata.'),
('DSV0005', 'ATR0055', 'Sedang.'),
('DSV0005', 'ATR0072', 'Hijau, warna ibu tulang daun: hijau keputihan.'),
('DSV0005', 'ATR0067', 'Tengahan (62,89 ? 15,85).'),
('DSV0005', 'ATR0074', 'Pink, putik sempurna, benang sari lebih panjang.'),
('DSV0005', 'ATR0065', 'Lemah, ukuran mahkota besar.'),
('DSV0005', 'ATR0032', 'Panjang.'),
('DSV0005', 'ATR0009', 'Sedang, penggembungan tabung sedang-'),
('DSV0005', 'ATR0005', 'Bulat, kerucut terbalik.'),
('DSV0005', 'ATR0017', 'Sangat terbuka, diatas daun teratas.'),
('DSV0005', 'ATR0004', 'Bulat telur.'),
('DSV0005', 'ATR0071', 'Coklat.'),
('DSV0005', 'ATR0011', '699,09 - 966,08'),
('DSV0005', 'ATR0028', '37,19 - 54,97.'),
('DSV0005', 'ATR0029', '25,85 - 36,74.'),
('DSV0005', 'ATR0015', '3,51 - 3,65.'),
('DSV0005', 'ATR0020', '-'),
('DSV0005', 'ATR0042', 'Moderat tahan.'),
('DSV0005', 'ATR0046', 'Moderat tahan.'),
('DSV0005', 'ATR0025', 'Moderat tahan.'),
('DSV0005', 'ATR0018', 'Untuk pengembangan Pada lahan di Lereng Gunung Sindoro.'),
('DSV0005', 'ATR0036', 'Fatkhur Rochman, Sesanti Basuki, Suwarso, Sri Yulaikah dan Ruly Hamida.'),
('DSV0005', 'ATR0037', 'Supriyono, Djajadi, Cece Suhara, Masrik, Amin, Muhammad Syakir, Fadjry, Djufry, Emy Sulistyowati, Untung Prabowo dan Dadi Riswanto.'),
('DSV0005', 'ATR0035', 'Milik bersama Balai Penelitian Tanaman Pemanis dan Serat, dan Pemerintah Kabupaten Temanggung'),
('DSV0006', 'ATR0001', 'Persilangan Kemloko1x K 399'),
('DSV0006', 'ATR0027', 'Persilangan konvensional, silang balik 2 kali, seleksi pedigree dan penggaluran'),
('DSV0006', 'ATR0050', 'Nicotiana tabacum.'),
('DSV0006', 'ATR0062', 'Temanggung.'),
('DSV0006', 'ATR0063', 'Galur murni.'),
('DSV0006', 'ATR0010', 'Kerucut.'),
('DSV0006', 'ATR0059', 'Tinggi (132,27 ? 15,02)'),
('DSV0006', 'ATR0070', 'Hijau.'),
('DSV0006', 'ATR0014', 'Sedikit (20,00 ? 0,70)'),
('DSV0006', 'ATR0049', 'Sedang.'),
('DSV0006', 'ATR0061', 'Duduk, sudut daun: lanciP.'),
('DSV0006', 'ATR0033', 'Panjang (48,91 ? 1,05)'),
('DSV0006', 'ATR0023', 'Sempit (25,07 ? 0,74)'),
('DSV0006', 'ATR0030', '0,48 - 0,53.'),
('DSV0006', 'ATR0041', '3/8 kanan.'),
('DSV0006', 'ATR0024', 'Sedang.'),
('DSV0006', 'ATR0016', 'Sedang.'),
('DSV0006', 'ATR0006', 'Lanset, ujung: runcing.'),
('DSV0006', 'ATR0012', 'Cembung /agak lengkung.'),
('DSV0006', 'ATR0003', 'Tidak ada, sedikit melipat.'),
('DSV0006', 'ATR0031', 'Tidak ada, torehan: rata.'),
('DSV0006', 'ATR0055', 'Sedang.'),
('DSV0006', 'ATR0072', 'Hijau, warna ibu tulang daun: hijau keputihan.'),
('DSV0006', 'ATR0067', 'Tengahan (63,18 ? 15,44).'),
('DSV0006', 'ATR0074', 'Pink, putik sempurna, benang sari lebih panjang.'),
('DSV0006', 'ATR0065', 'Membulat lemah, ukuran mahkota besar.'),
('DSV0006', 'ATR0032', 'Panjang.'),
('DSV0006', 'ATR0009', 'Sedang, penggembungan tabung : sedang'),
('DSV0006', 'ATR0005', 'Bulat, kerucut terbalik.'),
('DSV0006', 'ATR0017', 'Sedang, diatas daun teratas'),
('DSV0006', 'ATR0004', 'Bulat telur.'),
('DSV0006', 'ATR0071', 'Coklat.'),
('DSV0006', 'ATR0011', '893,17 - 1.070,83'),
('DSV0006', 'ATR0028', '39,62 - 59,38'),
('DSV0006', 'ATR0029', '29,53 - 42,37'),
('DSV0006', 'ATR0015', '3,24- 4,54'),
('DSV0006', 'ATR0020', '-'),
('DSV0006', 'ATR0042', 'Moderat tahan.'),
('DSV0006', 'ATR0046', 'Moderat tahan.'),
('DSV0006', 'ATR0025', 'Moderat tahan.'),
('DSV0006', 'ATR0018', 'Untuk pengembangan pada lahan di Lereng Gunung Sumbing.'),
('DSV0006', 'ATR0036', 'Fatkhur Rochman, Sesanti Basuki, Suwarso, Sri Yulaikah dan Ruly Hamida.'),
('DSV0006', 'ATR0037', 'Supriyono, Djajadi, Cece Suhara, Masrik, Amin, Muhammad Syakir, Fadjry, Djufry, Emy Sulistyowati, Untung Prabowo dan Dadi Riswanto.'),
('DSV0006', 'ATR0035', 'Milik bersama Balai Penelitian Tanaman Pemanis dan Serat, dan Pemerintah Kabupaten Temanggung'),
('DSV0007', 'ATR0001', 'Persilangan Kemloko2 x Prancak 95'),
('DSV0007', 'ATR0027', 'Persilangan konvensional, silang balik 2 kali, seleksi pedigree dan penggaluran'),
('DSV0007', 'ATR0050', 'Nicotiana tabacum.'),
('DSV0007', 'ATR0062', 'Temanggung.'),
('DSV0007', 'ATR0063', 'Galur murni.'),
('DSV0007', 'ATR0010', 'Kerucut.'),
('DSV0007', 'ATR0059', 'Tinggi (138,51 ? 3,86)'),
('DSV0007', 'ATR0070', 'Hijau muda.'),
('DSV0007', 'ATR0014', 'Sedikit (20,49 ? 0,50)'),
('DSV0007', 'ATR0049', 'Lemah'),
('DSV0007', 'ATR0061', 'Duduk, sudut daun: lancip.'),
('DSV0007', 'ATR0033', 'Panjang (50,91 ? 1,22)'),
('DSV0007', 'ATR0023', 'Sempit (30,18 ? 0,64)'),
('DSV0007', 'ATR0030', '0,50 - 0,66.'),
('DSV0007', 'ATR0041', '3/8 kanan.'),
('DSV0007', 'ATR0024', 'Sedang.'),
('DSV0007', 'ATR0016', 'Sedang.'),
('DSV0007', 'ATR0006', 'Lanset, ujung: runcing.'),
('DSV0007', 'ATR0012', 'Cembung /agak lengkung.'),
('DSV0007', 'ATR0003', 'Tidak ada, lipatan sedikit.'),
('DSV0007', 'ATR0031', 'Lemah, torehan rata'),
('DSV0007', 'ATR0055', 'Sedang.'),
('DSV0007', 'ATR0072', 'Hijau muda, warna ibu tulang daun hijau keputihan.'),
('DSV0007', 'ATR0067', 'Tengahan (62,33 ? 15,62).'),
('DSV0007', 'ATR0074', 'Pink, putik sempurna, benang sari lebih panjang.'),
('DSV0007', 'ATR0065', 'Lemah, ukuran mahkota besar.'),
('DSV0007', 'ATR0032', 'Panjang.'),
('DSV0007', 'ATR0009', 'Sedang, penggembungan tabung sedang'),
('DSV0007', 'ATR0005', 'Bulat, kerucut terbalik.'),
('DSV0007', 'ATR0017', 'Sedang, diatas daun teratas.'),
('DSV0007', 'ATR0004', 'Bulat telur.'),
('DSV0007', 'ATR0071', 'Coklat.'),
('DSV0007', 'ATR0011', '861,24 - 1.060,76'),
('DSV0007', 'ATR0028', '37,01 - 49,77'),
('DSV0007', 'ATR0029', '25,37 - 47,84'),
('DSV0007', 'ATR0015', '3,00 - 3,54'),
('DSV0007', 'ATR0020', '-'),
('DSV0007', 'ATR0042', 'Moderat tahan.'),
('DSV0007', 'ATR0046', 'Moderat tahan.'),
('DSV0007', 'ATR0025', 'Moderat tahan.'),
('DSV0007', 'ATR0018', 'Untuk pengembangan tidak pada lahan sawah'),
('DSV0007', 'ATR0036', 'Fatkhur Rochman, Sesanti Basuki, Suwarso, Sri Yulaikah dan Ruly Hamida.'),
('DSV0007', 'ATR0037', 'Supriyono, Djajadi, Cece Suhara, Masrik, Amin, Muhammad Syakir, Fadjry, Djufry, Emy Sulistyowati, Untung Prabowo dan Dadi Riswanto.'),
('DSV0007', 'ATR0035', 'Milik bersama Balai Penelitian Tanaman Pemanis dan Serat, dan Pemerintah Kabupaten Temanggung'),
('DSV0008', 'ATR0001', 'Varietas lokal Prancak dari Desa Prancak, Kec. Pasongsongan Kab. Sumenep'),
('DSV0008', 'ATR0050', 'Nicotiana tabacum L.'),
('DSV0008', 'ATR0007', 'Piramid'),
('DSV0008', 'ATR0059', '57 - 67 cm'),
('DSV0008', 'ATR0047', 'Sama panjang, agak rapat'),
('DSV0008', 'ATR0070', 'Hijau muda, berbulu dan mengkilap'),
('DSV0008', 'ATR0014', '12 - 18 lembar'),
('DSV0008', 'ATR0051', 'Lancip, sekitar 60 derajat'),
('DSV0008', 'ATR0041', '3/8, putar kekanan'),
('DSV0008', 'ATR0052', 'Duduk, tidak bertangkai'),
('DSV0008', 'ATR0024', 'Sedang'),
('DSV0008', 'ATR0055', 'Pendek, lebar, tidak memeluk batang'),
('DSV0008', 'ATR0006', 'Bulat telur, indeks daun 0,58 - 0,62, ujung runcing, permukaan datar agak bendul, berbulu dan bergetah (gum), dan tepi daun halus'),
('DSV0008', 'ATR0069', 'berbunga, 54 - 74 hari, panen 84 - 104 hari'),
('DSV0008', 'ATR0074', 'Merah muda sampai merah'),
('DSV0008', 'ATR0073', 'Krem'),
('DSV0008', 'ATR0004', 'Bulat telur'),
('DSV0008', 'ATR0071', 'Coklat.'),
('DSV0008', 'ATR0045', '0,630 - 1,490 ton'),
('DSV0008', 'ATR0028', '54,07 - 97,03'),
('DSV0008', 'ATR0015', '0,59 - 2,41'),
('DSV0008', 'ATR0020', 'Tahan terhadap penyakit lanas, tidak tahan terhadap virus mosaik tembakau (TMV)'),
('DSV0008', 'ATR0019', 'Tidak tahan terhadap hama pengisap daun (Aphis sp), hama Heliotis spp, dan hama Spodotera sp'),
('DSV0008', 'ATR0021', 'Sesuai pada iklim C&D (Schmidt Ferguson, 1951), kemarau > 4 bulan, tegas, lahan kering'),
('DSV0008', 'ATR0038', 'Suwarso, A.Rachman SK, Anik Herwati, Soerjono, Subiyakto, Bagus Hari Adi');

-- --------------------------------------------------------

--
-- Table structure for table `varietas`
--

CREATE TABLE `varietas` (
  `id_varietas` char(5) NOT NULL,
  `nama_varietas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varietas`
--

INSERT INTO `varietas` (`id_varietas`, `nama_varietas`) VALUES
('V0001', 'Varietas NC 471'),
('V0002', 'Varietas GL 26H'),
('V0003', 'Varietas GF 318'),
('V0004', 'Varietas Gagang Rejeb Sidi'),
('V0005', 'Tembakau Temanggung Varietas Kemloko 6 Agribun'),
('V0006', 'Tembakau Temanggung Varietas Kemloko 5 Agribun'),
('V0007', 'Tembakau Temanggung Varietas Kemloko 4 Agribun'),
('V0008', 'Tembakau Prancak-95'),
('V0009', 'Tembakau Temanggung'),
('V0010', 'Tembakau Yogyakarta'),
('V0011', 'Tembakau Asepan Boyolali'),
('V0012', 'Tembakau Kasturi');

--
-- Triggers `varietas`
--
DELIMITER $$
CREATE TRIGGER `tr_id_varietas` BEFORE INSERT ON `varietas` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_varietas FROM `varietas` ORDER by id_varietas DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_varietas = concat('V000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_varietas = concat('V00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_varietas = concat('V0',@hitung);
ELSE
SET new.id_varietas = concat('V',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atribut`
--
ALTER TABLE `atribut`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indexes for table `deskripsi_varietas`
--
ALTER TABLE `deskripsi_varietas`
  ADD PRIMARY KEY (`id_deskripsi_varietas`),
  ADD KEY `id_varietas` (`id_varietas`);

--
-- Indexes for table `detail_deskripsi`
--
ALTER TABLE `detail_deskripsi`
  ADD KEY `id_deskripsi_varietas` (`id_deskripsi_varietas`),
  ADD KEY `id_atribut` (`id_atribut`);

--
-- Indexes for table `varietas`
--
ALTER TABLE `varietas`
  ADD PRIMARY KEY (`id_varietas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deskripsi_varietas`
--
ALTER TABLE `deskripsi_varietas`
  ADD CONSTRAINT `deskripsi_varietas_ibfk_1` FOREIGN KEY (`id_varietas`) REFERENCES `varietas` (`id_varietas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_deskripsi`
--
ALTER TABLE `detail_deskripsi`
  ADD CONSTRAINT `detail_deskripsi_ibfk_1` FOREIGN KEY (`id_deskripsi_varietas`) REFERENCES `deskripsi_varietas` (`id_deskripsi_varietas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_deskripsi_ibfk_2` FOREIGN KEY (`id_atribut`) REFERENCES `atribut` (`id_atribut`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
