-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 10:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homepharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_product`
--

CREATE TABLE `all_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_exp` varchar(255) NOT NULL,
  `product_companey` varchar(255) NOT NULL,
  `product_price` varchar(15) NOT NULL,
  `product_category` varchar(30) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_product`
--

INSERT INTO `all_product` (`product_id`, `product_name`, `product_exp`, `product_companey`, `product_price`, `product_category`, `product_image`) VALUES
(1, 'Artery Forcep Curved 6', '', '', '130', 'surgical', '../image/surgical/alt.jpg'),
(2, 'tryptin 10', 'arritriptyline hydrochloride usp 10mg', 'square', '10', 'medicine', '../image/square/TRYPTIN-10.jpg'),
(3, 'adafil 10', 'tadafil 10mg', 'baximco', '20', 'medicine', '../image/baximco/adafil.jpg'),
(4, 'aeronid 200', 'budesonide 200ug', 'baximco', '7', 'medicine', '../image/baximco/Aeronid-HFA.jpg'),
(5, 'Acuren', '(Hydrochlorothiazide)', 'incepta', '3', 'medicine', '../image/incepta/Acuren.jpg'),
(6, 'Adaben Duo Gel', 'Adapalene & Benzoyl peroxide', 'incepta', '56', 'medicine', '../image/incepta/Adaban.jpg'),
(7, 'acefenac', '', 'general pharma', '27', 'medicine', '../image/general/acefenac.jpg'),
(8, 'acnecare', 'salicylic acid', 'general pharma', '27', 'medicine', '../image/general/acnecare.jpg'),
(9, 'Ok Match Blood Glucose Monitoring System', '', '', '700', 'surgical', '../image/surgical/261OKmeter-Match.jpg'),
(10, 'alphin ds', 'abendozoile 400mg', 'baximco', '10', 'medicine', '../image/baximco/Alphin-DS.jpg'),
(11, 'bemsivir', 'pemedsolver 100mg', 'baximco', '10', 'medicine', '../image/baximco/bemsivir100.jpg'),
(12, 'Disposable Blood Lancet 100 pcs', '', '', '400', 'surgical', '../image/surgical/disposableblood.jpg'),
(13, 'Omnitest Plus Blood Glucose Monitor Test-50 strips', '', '', '290', 'surgical', '../image/surgical/omnitest.jpg'),
(14, 'VivaChek Eco Glucose Test Strip (25pcs)', '', '', '200', 'surgical', '../image/surgical/vivachek.jpg'),
(15, 'Geston', 'allylestrenol 5mg', 'square', '2', 'medicine', '../image/square/GESTON.jpg'),
(16, 'antiva ', 'adefovir dipivoxil', 'square', '13', 'medicine', '../image/square/ANTIVA-.jpg'),
(17, 'apsol oral paste', 'amlexanox 5%', 'square', '40', 'medicine', '../image/square/APSOL-5MG.jpg'),
(18, 'camlodin 5', 'amlodipine 5mg', 'square', '5', 'medicine', '../image/square/camlodin_large.png'),
(19, 'esloric', 'allopurinol bp 100mg', 'square', '17', 'medicine', '../image/square/ESLORIC-100GM.jpg'),
(20, 'Neck Massager Pillow', '', '', '450', 'surgical', '../image/surgical/neck-massager-3.jpg'),
(21, 'Electric Hot Water Bag Pain Relief – Best Quality', '', '', '200', 'surgical', '../image/surgical/electric_hot_water.jpg'),
(22, 'astagen', 'astaxanthin', 'general pharma', '27', 'medicine', '../image/general/astagen.jpg'),
(23, 'azomac', 'azithromycin', 'general pharma', '27', 'medicine', '../image/general/azomac.jpg'),
(24, 'bextram kid', 'healther', 'baximco', '120', 'medicine', '../image/baximco/Bextram-Kidz.jpg'),
(25, 'bextram', 'teen hm', 'baximco', '200', 'medicine', '../image/baximco/Bextram-Teen-Hm.jpg'),
(26, 'Ceftoril', 'ceftoril 420mg', 'baximco', '90', 'medicine', '../image/baximco/ceftoril.jpg'),
(27, 'dinogest', 'dinogest 2mg', 'baximco', '9', 'medicine', '../image/baximco/dinogest.jpg'),
(28, 'evo', 'levofixacin 750mg', 'baximco', '27', 'medicine', '../image/baximco/Evo.jpg'),
(29, 'Adiponil', '(Orlistat)', 'incepta', '7', 'medicine', '../image/incepta/Adiponil.jpg'),
(30, 'Alcafta Sterile Eye Drops', '(Alcaftadine)', 'incepta', '60', 'medicine', '../image/incepta/Alcafta.jpg'),
(31, 'adpas', 'pioglitazone', 'general pharma', '27', 'medicine', '../image/general/adpas.jpg'),
(32, 'meclixin', 'meclizine hydrochloride 25mg', 'general pharma', '27', 'medicine', '../image/general/meclixin.jpg'),
(33, 'acunac', 'bromfenac 0.09', 'general pharma', '27', 'medicine', '../image/general/acunac.png'),
(34, 'Tynor Lumbo Sacral Belt (Unisex)', '', '', '800', 'surgical', '../image/surgical/Tynor-Lumbo-Sacral-Belt.jpg'),
(35, 'RENKAI HEALTH WAIST LOSING WEIGHT BELT', '', '', '500', 'surgical', '../image/surgical/renkai_health.jpg'),
(36, 'Flamingo Orthopedic Heating Belt – Premium', '', '', '350', 'surgical', '../image/surgical/flamingo.jpg'),
(37, 'CAPSULE CENTURIN®', 'PENITAB', 'hamdard', '99', 'harbal', '../image/harbal/centurin-1.jpg'),
(38, 'CAPSULE DIABEAT', '', 'hamdard', '200', 'harbal', '../image/harbal/Diabet.jpg'),
(39, 'fona 0.1% cream', 'adapalene', 'square', '55', 'medicine', '../image/square/fona_small_1.jpg'),
(40, 'CAPSULE ENDUREX®', 'MUMSHIK', 'hamdard', '150', 'harbal', '../image/harbal/endurex1-1.jpg'),
(41, 'Almex 400', 'Cheqable tablate', 'square', '3', 'medicine', '../image/square/almex_400_large_1.png'),
(42, 'amistar 500', 'amistacin 500mg', 'square', '2.5', 'medicine', '../image/square/amister_large.png'),
(43, 'Amifen®', 'Mefenamic Acid', 'opsonin', '39', 'medicine', '../image/opsonin/amifen.png'),
(44, 'Amidol', '(Iopamidol)', 'incepta', '230', 'medicine', '../image/incepta/Amidol-300.jpg'),
(45, 'flexi', 'fexioxcide 10mg', 'square', '03', 'medicine', '../image/square/Flexi.jpg'),
(46, 'ambrox', 'ambroxol hydrochloride bp', 'square', '25', 'medicine', '../image/square/AMBOX-15ml.jpg'),
(47, 'Ambrisan 5', 'ambrisentan 5mg', 'square', '6', 'medicine', '../image/square/Ambrisan-carton_large.jpg'),
(48, 'CAPSULE AGERD®', 'TABKHEER', 'hamdard', '200', 'harbal', '../image/harbal/agred.jpg'),
(49, 'CAPSULE ANTILIGO', 'BARSINA', 'hamdard', '120', 'harbal', '../image/harbal/Antiligo-2.jpg'),
(50, 'CAPSULE GINTON', 'GINSENG', 'hamdard', '230', 'harbal', '../image/harbal/Ginton.jpg'),
(51, 'HAMDARD HONEY', '', 'hamdard', '400', 'harbal', '../image/harbal/Hamdard-Honey.jpg'),
(52, 'Capsule Jonort®', '', 'hamdard', '80', 'harbal', '../image/harbal/Jonort-2.jpg'),
(53, 'CAPSULE LIBIDEX® ', 'NISHAT', 'hamdard', '92', 'harbal', '../image/harbal/libidex-1.jpg'),
(54, 'Algisum®', 'Potassium Bicarbonate + Sodium Alginate', 'opsonin', '85', 'medicine', '../image/opsonin/algisum.png'),
(55, 'Aquaphen', 'Pseudoephedrine, guaiphenasine & triprolidine', 'incepta', '120', 'medicine', '../image/incepta/Aquaphen.jpg'),
(56, 'Aritone Z', 'Vitamin B Complex & Zin', 'incepta', '200', 'medicine', '../image/incepta/aritonz.jpg'),
(57, 'Abdorin®', 'Dicycloverine Hydrochloride', 'opsonin', '80', 'medicine', '../image/opsonin/abdorin.png'),
(58, 'Acerux®', 'Acyclovir', 'opsonin', '17', 'medicine', '../image/opsonin/acerux.png'),
(59, 'Advel®', 'Ibuprofen', 'opsonin', '53', 'medicine', '../image/opsonin/advel.jpg'),
(60, 'Amocal®', 'Amlodipine', 'opsonin', '8', 'medicine', '../image/opsonin/amocal.png'),
(61, 'Bonfix®', 'Ibandronic Acid', 'opsonin', '24', 'medicine', '../image/opsonin/bonfix.png'),
(62, 'fona plus gel', 'adapalene & benzoyl peroxide', 'square', '75', 'medicine', '../image/square/Fona-plus-gel_e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `mobile`) VALUES
(1, 'hadiuzzaman', 'hadiuzzaman908@gmail.com', '123456', '01785304677');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_product`
--
ALTER TABLE `all_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_product`
--
ALTER TABLE `all_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
