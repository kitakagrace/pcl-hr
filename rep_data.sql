-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql210.byetcluster.com
-- Generation Time: Mar 23, 2020 at 02:47 PM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25346205_testhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `rep_data`
--

CREATE TABLE `rep_data` (
  `rep_id` int(11) NOT NULL,
  `rep_name` varchar(255) NOT NULL,
  `rep_phone_number` varchar(255) NOT NULL,
  `rep_branch` varchar(255) NOT NULL,
  `rep_email` varchar(255) NOT NULL,
  `rep_payroll_code` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rep_data`
--

INSERT INTO `rep_data` (`rep_id`, `rep_name`, `rep_phone_number`, `rep_branch`, `rep_email`, `rep_payroll_code`) VALUES
(1, 'AHUMUZA BRIAN', '256788098835', 'KABALE B', '', 'PSR4803'),
(2, 'GABOYI BEN ', '256779004536', 'Kamuli C', '', 'PSR4780'),
(3, 'Okidi Alfred Obonyo', '256774910115', 'Pader team A', '', 'PSR4792'),
(4, 'Hafashimana Emmanuel', '256775821823', 'LBF NTINDA B', '', 'PCUlb 487'),
(5, 'Mugabe Robert', '256779233020', 'KISORO TEAM B', '', 'PSR4752'),
(6, 'ABER STELLA ', '2560772954150', 'TEAM B KITGUM', '', 'PSR4822'),
(7, 'INNOCENT ACIRO', '256783129121', 'TEAM B KITGUM', '', 'PSR4823'),
(8, 'MAZARAU ANIFA ', '256788214062', 'YUMBE B', '', 'PSR4636'),
(9, 'Arebahoona Anthony Nash', '256781338345', 'Ibanda team', '', 'PSR4821'),
(10, 'LORRAINE KWAGALA MUTEBI', '256774606976', 'LBF CENTRAL F', '', 'PCUlb 517'),
(11, 'Twinomujuni Adolf', '256781589879', 'Kagadi A', '', 'PSR4819'),
(12, 'Twinamasiko Rogers', '256781524104', 'Kabale C', '', 'PSR4824'),
(13, 'Wetaka Mudhathir Wanjala', '256779063274', 'LBF Nakawa C', '', 'PCUlb 519'),
(14, 'Namataka Annet', '256780136652', 'Nakapiripirit B', '', 'PSR4695'),
(15, 'Buatru  Barbra  Benefit', '256773798888', 'ARUA TEAM B', '', 'PSR4729'),
(16, 'Mutesasira Annet Nassaka ', '256781088116', 'CITY LBF E', '', 'PCUlb 520'),
(17, 'Anguzu Norbert Juma', '256776379064', 'Team B ARUA', '', 'PSR4829'),
(18, 'ACHIRI JEREMIAH', '256770411265', 'MASAKA BRANCH TEAM B', '', 'PSR4834'),
(19, 'Ocero Emmanuel', '256778115710', 'LBF Lira  B', '', 'PCUlb 523'),
(20, 'Opio Emmanuel Keneth ', '256788201073', 'Mukono A', '', 'PSR4831'),
(21, 'Namwabira Suzan Mirembe', '256789539944', 'Jinja C', '', 'PSR4832'),
(22, 'GANGU DERRICK', '256771238661', 'LBF A JINJA', '', 'PCUlb 522'),
(23, 'BONEZA ESTHER', '256779380524', 'Kisoro B', '', 'PSR4828'),
(24, 'MATAMA NAUME', '256779813781', 'Jinja team C', '', 'PSR4837'),
(25, 'Nambeya Faibe Barbrah', '256770726937', ' lbf team G', '', 'PCUlb 525'),
(26, 'SONNY MILDRED', '256786134598', 'Arua A', '', 'PSR4846'),
(27, 'EMUGE BENJAMIN', '256776169409', 'kabalagala LBF  Team A ', '', 'PCUlb 528'),
(28, 'Kobugyenyi Sheila', '256789956016', 'Kabale A', '', 'PSR4853'),
(29, 'Nabusita Joan', '256788014609', 'Kapchorwa A', '', 'PSR4679'),
(30, 'Kisakye Jesse', '256779214908', 'Kamuli A', '', 'PSR4871'),
(31, 'NANSASI SHAKIRA', '256773288374', 'kabalagala LBF Team A', '', 'PCUlb 538'),
(32, 'Mudasiru Naku', '256785079852', 'Iganga B', '', 'PSR4865'),
(33, 'Namale Gladys', '256774031342', 'City E LBF', '', 'PCUlb 534'),
(34, 'Luzze Fredrick', '256784036886', 'Luweero C', '', 'PSR4829'),
(35, 'JACKSON ADIA', '256776899785', 'TEAM A  YUMBE', '', 'PSR4868'),
(36, 'Benard Opolot', '256773971400', ' lbf central   B', '', 'PCUlb 537'),
(37, 'MUGUME JOHNFISHER', '256781862763', 'CITY LBF E', '', 'PCUlb 535'),
(38, 'NASSUNA JULIAN', '256789363415', 'CITY LBF  F ', '', 'PCUlb 533'),
(39, 'Ssebaganyunga Alex', '256784667542', 'Mityana A', '', 'PSR4875'),
(40, 'Nakisita Immaculate', '256786337875', 'Kasese A', '', 'PSR4875'),
(41, 'KWATAWE INNOCENT', '256785222876', 'TEAM B-Masaka', '', 'PSR4902'),
(42, 'Mugisha Lucky', '256783141204', 'Kisoro A ', '', 'PSR4827'),
(43, 'Atukwase Joan', '256782668423', 'Central LBF B', '', 'PCUlb 548'),
(44, 'BATWAULA CORNELLIOUS', '246777135437', 'LBF central C', '', 'PCUlb 549'),
(45, 'KATUNGI ALBERT', '256789823748', 'LBF central C', '', 'PCUlb 550'),
(46, 'MASINDE LAWRENCE', '256787884835', 'TEAM B NAKAWA', '', 'PCUlb 551'),
(47, 'Kampi Jane', '256771187546', 'Jinja C', '', 'PSR4903'),
(48, 'NUWABINE PAULA', '256785412919', 'TEAM B NAKAWA', '', 'PCUlb 552'),
(49, 'Atugonza Sylvia', '256773196313', 'Fortportal A', '', 'PSR4905'),
(50, 'ASERO SUSAN', '256779809348', 'Soroti B', '', 'PSR4906'),
(51, 'OTIM CONSTATINE ', '256770968416', 'Soroti B', '', 'PSR4907'),
(52, 'Angiro Gideon', '256782236168', 'Kumi B', 'giddie318@gmail.com', 'PSR4908'),
(53, 'NOELINE NAMUGGA', '256784329703', 'CITY MINISTRIES', 'laurinenoeline@gmail.com', 'PSR4936'),
(54, 'ASERO SUSAN', '256779809348', 'Soroti B', 'aserosusan@gmail.com', 'PSR4906'),
(55, 'OTIM CONSTATINE', '256770968416', 'Soroti B', 'jecobotim@gmail.com', 'PSR4907'),
(56, 'TUMUHIMBISE INNOCENT', '256775740746', 'Ibanda A', 'tumuhimbiseinnocent8@gmail.com', 'PSR4941'),
(57, 'NIMURUNGI MELLON', '256784416756', 'RUKUNGIRI B', 'nmellon1999@gmail.com', 'PSR4939'),
(58, 'MONDAY FRANCIS', '256771272693', 'KAGADI B', 'monfrancis81@gmail.com', 'PSR4937'),
(59, 'BRENDA KAMUSIIME', '256783948987', 'CITY MINISTRIES', '', 'PSR4938'),
(60, 'Nakiruuta Babra', '256771150072', 'Mukono Team A', '', 'PSR4940'),
(61, 'PATRICK MULWANA', '256786781310', 'KAMPALA J  ', '', 'PSR4743'),
(62, 'Katende Edward', '256781657018', 'MUKONO A', '', 'PSR4782'),
(63, 'Nasirumbi Olivia', '256780711120', 'Mukono A', '', 'PSR4784'),
(64, 'KISAKYE GONZAGA', '256779037006', 'MUKONO A', '', 'PSR4813'),
(65, 'KAHUMA DAVID', '256775981031', 'IBANDA A', 'kahumadavid100@gmail.com', 'PSR4928'),
(66, 'NUWARINDA EUNICE', '256771173547', 'ISHAKA A', '', 'PSR4947'),
(67, 'Oroma Anna Mary', '256771313181', 'Gulu A', 'amary689@gmail.com', 'PSR4945'),
(68, 'KIRABO DOREEN', '256780778907', 'TEAM D KAMPALA', '', 'PSR4948'),
(69, 'AINEMBABAZI BONITOR', '256771419744', 'Mbarara B', '', 'PSR4944'),
(70, 'Naula Barbra', '256786351485', 'Team F LBF CITY', '', 'PCUlb 558'),
(71, 'AUJAT DOCAS', '256787707491', 'KAMPALA TEAM C', '', 'PSR4949'),
(72, 'APIO PRISCILLA', '256778483003', 'TEAM C KAMPALA', '', 'PSR4950'),
(73, 'Fundi Amis', '256778991490', 'Iganga B', '', 'PSR4922'),
(74, 'ESTHER PONI', '256781358429', 'Arua C', '', 'PSR4951'),
(75, 'GAD MASABA', '256777316067', 'CITY MINISTRIES', '', 'PSR4952');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rep_data`
--
ALTER TABLE `rep_data`
  ADD PRIMARY KEY (`rep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rep_data`
--
ALTER TABLE `rep_data`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
