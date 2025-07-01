-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2025 at 06:36 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u111338879_achievers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `mname`, `lname`, `username`, `password`) VALUES
(1, 'James', '', 'Garcia', 'admin', 'Abc123456'),
(3, 'Janice Irene', 'S.', 'Corpuz', 'Janice', 'Abc123456');

-- --------------------------------------------------------

--
-- Table structure for table `civil_status`
--

CREATE TABLE `civil_status` (
  `id` int(10) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `civil_status`
--

INSERT INTO `civil_status` (`id`, `name`, `value`) VALUES
(1, '', 'Single'),
(2, '', 'Married'),
(3, '', 'Divorced'),
(4, '', 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `current_agent`
--

CREATE TABLE `current_agent` (
  `curr_agent_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `is_ok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_industry`
--

CREATE TABLE `employment_industry` (
  `id` int(10) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employment_industry`
--

INSERT INTO `employment_industry` (`id`, `name`, `value`) VALUES
(4, '', 'Accounting'),
(5, '', 'Accommodation'),
(6, '', 'Agriculture'),
(7, '', 'BPO'),
(8, '', 'Construction'),
(9, '', 'Education'),
(10, '', 'Finance'),
(11, '', 'Forestry'),
(12, '', 'Healthcare'),
(13, '', 'HumanResources'),
(14, '', 'Manufacturing'),
(15, '', 'Media'),
(16, '', 'Mining'),
(17, '', 'RealEstate'),
(18, '', 'Retail'),
(19, '', 'Utilities'),
(20, '', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `employment_type`
--

CREATE TABLE `employment_type` (
  `id` int(10) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employment_type`
--

INSERT INTO `employment_type` (`id`, `name`, `value`) VALUES
(1, '', 'SELF - EMPLOYED'),
(2, '', 'EMPLOYED'),
(3, '', 'OFW'),
(4, '', 'WITH FINANCIAL SUPPORT'),
(5, '', 'LICENSED PROFESSIONAL'),
(6, '', 'STAFF ACCOUNT'),
(7, '', 'SEAFARER'),
(8, '', 'UNEMPLOYED'),
(9, '', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `file_management`
--

CREATE TABLE `file_management` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` longtext NOT NULL,
  `orig_name` longtext NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file_management`
--

INSERT INTO `file_management` (`id`, `user_id`, `file_name`, `orig_name`, `date_added`, `date_updated`) VALUES
(1, 1, '0488cc1d96502852b6a0937b30b452d3.gif', '275458531_406893144533665_4774709370726676927_n.gif', '2022-04-02 16:00:06', '2022-04-02 16:00:06'),
(2, 1, '1a11d2dc489482c27337db78d27d3b92.jfif', 'download_(1).jfif', '2022-04-06 11:18:18', '2022-04-06 11:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(10) NOT NULL,
  `house_name` varchar(255) NOT NULL,
  `house_decs` longtext NOT NULL,
  `house_decs_id` int(10) NOT NULL,
  `house_model` varchar(255) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lot_area` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `bed_rooms` varchar(255) NOT NULL,
  `bath_rooms` varchar(255) NOT NULL,
  `storeys` varchar(255) NOT NULL,
  `car_garage` varchar(255) NOT NULL,
  `with_balcony` varchar(255) NOT NULL,
  `tota_contart_price` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `house_name`, `house_decs`, `house_decs_id`, `house_model`, `house_type`, `village`, `address`, `lot_area`, `floor_area`, `bed_rooms`, `bath_rooms`, `storeys`, `car_garage`, `with_balcony`, `tota_contart_price`, `video`, `image`, `date_added`, `date_updated`) VALUES
(11, 'Alice Townhouse', '<p>15k/mo - ALICE TOWNHOMES HOUSE &amp; LOT FOR SALE (LOCATED AT LANCASTER NEW CITY, CAVITE BETWEEN THE BOUNDARIES OF IMUS AND GEN. TRIAS, CAVITE JUST 20-30 MINS AWAY FROM MOA, BACLARAN AT NAIA THRU CAVITE EXPRESSWAY AND CALAX)</p>\r\n\r\n<p>3 BEDROOMS</p>\r\n\r\n<p>1 TOILET &amp; BATH</p>\r\n\r\n<p>GARAGE</p>\r\n\r\n<p>40 SQM LOT AREA&nbsp;</p>\r\n\r\n<p>40 SQM FLOOR AREA</p>\r\n\r\n<p>ALICE TOWNHOUSE &nbsp;THRU BANK FINANCING&nbsp;</p>\r\n\r\n<p>Total Contract Price: 1,880,600.00 (KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p>FIRST CASH OUT UPON TRIPPING IS RESERVATION FEE: 10K (PAYABLE IN CASH/ATM DEBIT/CHECK DURING THE TRIPPING) (after</p>\r\n\r\n<p>30days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment)</p>\r\n\r\n<p>DOWNPAYMENT: 225,075.00 payable in 15 months at 15,005.00 monthly</p>\r\n\r\n<p>AFTER PO NINYO MABAYADAN ANG 15MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO, IPAPAAPPROVE NA PO ITO SA HOUSING LOAN SA BANGKO, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p>Monthly Amortization for</p>\r\n\r\n<p>20yrs : 15,501.63 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p>15yrs : 17,386.43 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p>10yrs : 20,325.13 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p>5yrs : 34,854.81 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p>20-30min away from PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING DAILY. PICK UP AT SM MALL OF ASIA&nbsp;</p>\r\n', 13, 'Alice', 'Townhouse', 'Lancaster New City', 'Imus, Cavite                        ', '40', '40', '3', '1', '2', '1', 'Basketball Court,Swimming pool', '1880600', 'https://www.youtube.com/watch?v=Of673a2hxes', '325923036affd76f3fde62907b3c6b14.jpg', '2022-01-22 14:10:52', '0000-00-00 00:00:00'),
(12, 'Anica Townhouse', '<p>18k/mo READY FOR OCCUPANCY Anica Townhomes (LOCATED AT LANCASTER NEW CITY, CAVITE BETWEEN THE BOUNDARIES OF IMUS AND GEN. TRIAS, CAVITE JUST 20-30 MINS AWAY FROM MOA, BACLARAN AT NAIA THRU CAVITE EXPRESSWAY AND CALAX)</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/e12a4d35c8b6b7b507e107ba1e22309d.png\" style=\"height:16px; width:16px\" /> 3 Bedrooms</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/8688360825a3da351cd3ba66e4d8d9b1.png\" style=\"height:16px; width:16px\" /> 2 Toilet &amp; Bath</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/afd5d1f9c9d7ff3589d38b525a9b22e4.png\" style=\"height:16px; width:16px\" /> Garage</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/fb84290e015ed0175850dfc4fda42a18.png\" style=\"height:16px; width:16px\" /> Provision for Dirty Kitchen &amp; Laundry Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7487c85ae179e2a1ef7f1b4bc490ffeb.png\" style=\"height:16px; width:16px\" /> 50 sqm Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/101d5f2c25e5bdba2a19ba916b058ff9.png\" style=\"height:16px; width:16px\" /> 50 sqm Floor Area</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/340cf6dbfa1deced54dc6d6562f1cfa5.png\" style=\"height:16px; width:16px\" /> ANICA TOWNHOUSE &nbsp;THRU BANK FINANCING (10% DP LATEST COMPUTATION)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4d1e5619353902948866dc38c94e3c4f.png\" style=\"height:16px; width:16px\" /> Total Contract Price: 2,197,800.00 &nbsp;(KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/5279708db6f894f6f6d486d6c5bbf9f3.png\" style=\"height:16px; width:16px\" /> FIRST CASH OUT UPON TRIPPING IS RESERVATION FEE: 10,000 (after 30days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/21437a91e1bc626884ac34a9855073be.png\" style=\"height:16px; width:16px\" /> DOWNPAYMENT: 264,725.00 payable in 15 months.&nbsp;</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/89cca5ae0a83745fdae16b1447d87e64.png\" style=\"height:16px; width:16px\" /> Monthly downpayment for 15 mos: 17,648.33 /mo</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/8bed8efaedef6e974cc35d23923ea15c.png\" style=\"height:16px; width:16px\" /> AFTER PO NINYO MABAYADAN ANG 6MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO, WAIT NA LANG PO TAYO NG APPROVAL NG HOUSING LOAN NYO PO SA BANK, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p>Monthly Amortization for</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7be2b629caea3cc39af149b626e9246f.png\" style=\"height:16px; width:16px\" /> 20yrs: &nbsp;18,139.69 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/6785dc69bea87cc7e748f15b3e8ac7f0.png\" style=\"height:16px; width:16px\" /> 15yrs : 20,342.39 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/e8e341cc617362956177de4238104b9f.png\" style=\"height:16px; width:16px\" /> 10yrs : 25,197.99 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/f758fec3c366a4200a425132bed59062.png\" style=\"height:16px; width:16px\" /> 5yrs : 40,757.16 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/80b4159fd472e26fd38b5c5606b78485.png\" style=\"height:16px; width:16px\" /><img alt=\"⚓\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a2ad8cdcfa28535b376108cd246e8a9c.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/2ffd92fdbe5c8cd846dcf8301afe5522.png\" style=\"height:16px; width:16px\" />✈&zwj;Kung OFW ka Kabayan at wala sa Pinas ay kinakailangan mo lamang magtalaga ng magiging representative mo dito sa pinas na syang aming itritripping upang makita at pipirma sa reservation contract in behalf ng inyong pangalan. For Further Details How an OFW Can Avail kindly PM US.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/94d6888652609bf2f54a2a4cc9a70d1a.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c8aa12cb9de94c89e80eaeb918672220.png\" style=\"height:16px; width:16px\" /> 20-30min away fr PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING DAILY. PICK UP AT SM MALL OF ASIA&nbsp;</p>\r\n', 13, 'Anica', 'Townhouse', 'Lancaster New City', 'Imus, Cavite                                                                        ', '50', '50', '3', '2', '2', '1', 'Basketball court', '2197800', 'https://www.youtube.com/watch?v=J6AeTSOx97k', 'bee868b444f626bd8dce130753ad66ca.jpg', '2022-01-22 14:41:20', '0000-00-00 00:00:00'),
(13, 'Adelle w/ Fence Big Townhomes', '<p>CORNER LOT AND END LOTS AVAILABLE</p>\r\n\r\n<p>AND RFO UNITS</p>\r\n\r\n<p>Adelle w/ FENCE Big Townhomes (LOCATED AT LANCASTER NEW CITY, CAVITE BETWEEN THE BOUNDARIES OF IMUS AND GEN. TRIAS, CAVITE JUST 20-30 MINS AWAY FROM MOA, BACLARAN AT NAIA THRU CAVITE EXPRESSWAY AND CALAX)</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/113e8c1539ea12095b35f502ac9584c5.png\" style=\"height:16px; width:16px\" /> 4 Bedrooms</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a41bf5a8808cb3c1ae1c883c9214769d.png\" style=\"height:16px; width:16px\" /> 2 Toilet &amp; Bath</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/b407675387fa716dd9d4c469e683c688.png\" style=\"height:16px; width:16px\" />&nbsp; w/ Balcony</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/fed02f7fba9c8e4f0887819b99f32864.png\" style=\"height:16px; width:16px\" /> Garage</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0e90450c81de5f53b1c39421bb1f2c9e.png\" style=\"height:16px; width:16px\" /> Provision for Dirty Kitchen &amp; Laundry Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/52f420fbf0a0ac22aa99914b4e8ac08b.png\" style=\"height:16px; width:16px\" /> Floor Area: 70 sqm</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/5e5cc5241668d3c202b18a86b463331d.png\" style=\"height:16px; width:16px\" /> ADELLE TOWNHOUSE&nbsp;</p>\r\n\r\n<p>12.5% DP SAMPLE COMPUTATION</p>\r\n\r\n<p>CORNER LOT AREA: 79 sqm</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/cf6073321dc0f71e5f615dd07a66cea5.png\" style=\"height:16px; width:16px\" /> Total Contract Price: 4,877,800.00 (KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4f71c4bf9d08c5aa22dfd3648b65d92d.png\" style=\"height:16px; width:16px\" /> First Cash out upon free tripping RESERVATION FEE: 20,000 (PAYABLE IN CASH/ATM DEBIT/CHECK DURING THE TRIPPING) after 30 days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d0602254f2f8f5b997dea66d886f3566.png\" style=\"height:16px; width:16px\" /> DOWNPAYMENT: 589,725.00 payable in 9 mos. @ 65,525.00 MONTHLY</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4616dab5f7f94bebf01f9b2e53260fd1.png\" style=\"height:16px; width:16px\" /> AFTER PO NINYO MABAYADAN ANG 9MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO, TATAPUSIN NA ANG PAGGAWA NG INYONG BAHAY, PAGKATAPOS PO ITONG MAGAWA AY IPAPAAPPROVE NA PO ITO SA HOUSING LOAN SA BANGKO, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p>Monthly Amortization for</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/78bf28cac1ae3b5eafbf121dd8bbbebd.png\" style=\"height:16px; width:16px\" /> 20yrs : 40,188.33 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c2d352dfc540dd4bf319f33bfd31bafa.png\" style=\"height:16px; width:16px\" /> 15yrs : 45,077.01 &nbsp;(APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3d80b80614867be536ad559fddec681e.png\" style=\"height:16px; width:16px\" /> 10yrs : 55,853.52 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/44056dcdf2153505e6cb0070aec408bf.png\" style=\"height:16px; width:16px\" /> 5yrs : 90,385.57 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d3d591449b3c3e5f88b41b71138c6f6e.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/29ca5332aeb65b1cff601623aef1e380.png\" style=\"height:16px; width:16px\" /> 20-30min away fr PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING DAILY. PICK UP AT SM MALL OF ASIA&nbsp;</p>\r\n', 13, 'Adelle w/ fence', 'Townhouse', 'Lancaster New City', 'Imus, Cavite                                                ', '70', '70', '4', '2', '2', '1', 'Swimming poo,Basketball court', '4877800', 'https://www.youtube.com/watch?v=l1j2PR_YcYU', '19ed90a253ba1b505477109ef2d03f2f.jpg', '2022-02-10 16:43:18', '0000-00-00 00:00:00'),
(14, 'Thea Townhouse', '<p>21K/MO THEA TOWNHOUSE W/BALCONY, 3BEDROOMS, 2TOILET&amp;BATH, W/GARAGE, W/PROVISION FOR DIRTY KITCHEN/LAUNDRY AREA. 50SQ MT LOT AREA 60SQ MT FLOOR AREA. JUST 20-30MIN AWAY FRM MALL OF ASIA &amp; NAIA TRU CAVITEX EXPRESSWAY. LOCATED BETWEEN THE BOUNDARY OF ALAPAN IMUS CAVITE &amp; NAVARRO GEN TRIAS CAVITE. CALL / TEXT / VIBER / IMO / WHATSAPP: +63906-3666-088</p>\r\n\r\n<p>ACTUAL COMPUTATION IN BANK FINANCING:</p>\r\n\r\n<p>RESERVATION FEE: 10,000 (PAYABLE IN CASH/ATM DEBIT/CHECK DURING THE TRIPPING)</p>\r\n\r\n<p>AFTER PO NATIN MABAYADAN ANG RESERVATION FEE AY MAG START ANG MONTHLY DOWNPAYMENT NATIN 30 DAYS AFTER MAGRESERVE.</p>\r\n\r\n<p>DOWNPAYMENT: 313,625.00 (PAYABE IN CASH OR INSTALLMENT OF 15 MOS)</p>\r\n\r\n<p>15MOS TO PAY INSTALLMENT: 20,908.33&nbsp;</p>\r\n\r\n<p>after downpayment po stop payment na po muna kayo at tatapusin na ang pagtatayo ng bahay ninyo once tapos na ay ipapaapprove na sa bank financing ang inyong bahay, once tapos na po ang inyong unit ay ipapaapprove na ito sa bank housing loan financing, once approve na ito ay dun pa lamang kayo magstart ng monthly amortization sa bank na maari po ninyong bayadan ng 20yrs, 15yrs,10yrs or 05yrs to pay, Once a pprove na din po kayo ay maari nyo ng mainspect ang inyong unit at malipatan ito</p>\r\n\r\n<p>monthly amortization for:</p>\r\n\r\n<p>20yrs: 21,368.09 (Applicable for Locally employed only)</p>\r\n\r\n<p>15yrs: 23,962.87 (Applicable for Locally employed / OFW / SEAMAN)</p>\r\n\r\n<p>TOTAL CONTRACT PRICE KUNG ITO AY BABAYADAN MO NG CASH: 2,589,000.00</p>\r\n\r\n<p>LOCATED AT ALAPAN IMUS CAVITE.20-30MIN AWAY FRM MALL OF ASIA &amp; NAIA TRU CAVITEX EXPRESSWAY.</p>\r\n\r\n<p>&nbsp;FEATURES &amp; AMMENITIES:</p>\r\n\r\n<p><img alt=\"❤️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c76582ed49783f4e188dab0fe4e47405.png\" style=\"height:16px; width:16px\" /> OUR SUBD. IS A 1,400 HECTARES SUBD. CONSISITING OF RESIDENTIAL, INDUSTRIAL (BPO CALL CENTER BUILDINGS), COMMERCIAL (MALLS &amp; RETAILS STORE SUCH AS SAVEMORE, LANCASTER SQUARE MALL, TERMINAL HUBS GOING TO MANILA/ALABANG)&nbsp;</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ab61f8d8069c437e1d2fd90133303f86.png\" style=\"height:16px; width:16px\" /> 3FLOORS COUNTRY CLUB W/OLYMPIC SIZE ADULT POOL &amp; KIDDIE POOL, W/FUNCTION AREA ORDINARY &amp; AIRCONDITIONED CATEGORY.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/fccb18ffa1982ced660b209327917cb3.png\" style=\"height:16px; width:16px\" /> W/OWN CATHOLIC CHURCH 800 SEATERS CAPACITY; HOLY FAMILY CATHOLIC CHURCH.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/b70ed1125f187b0e494a7e16136300d6.png\" style=\"height:16px; width:16px\" /> PLAYGROUNDS, BASKETBALL COURT, GYM, CENTRAL GREEN PARKS.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/00e7599b83493756edc3e2f553d3a1ae.png\" style=\"height:16px; width:16px\" /> GATED PHASES/VILLAGE WITH OWN GUARDS &amp; ROVING GUARD 24/7 IN EACH PHASES.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/8222ef5cfa3cfa337678c463bfae75f7.png\" style=\"height:16px; width:16px\" /> W/OWN EXISTING MAIN CAMPUS &amp; 2 BRANCH OF SHCOOL FOR PRESCHOLL / ELEMENTARY / HIGHSCHOOL; ST. EDWARD INT. SCHOOL</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c7e9da6068c3629fbb1d091a3fb64177.png\" style=\"height:16px; width:16px\" /> W/OWN SHOPPING &amp; GROCERY MALL INSIDE THE SUBD. NAMELY LANCASTER SQUARE (WELCOME GROCERY STORE): ATM MACHINES, NATIONAL BOOKSTORE, GENERIC PHARMACY, BAYAD CENTER, PARLOR, SPA, CLINIC, RESTAURANTS ETC.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/669c96905240115134f4eb2a513aad8e.png\" style=\"height:16px; width:16px\" /> MCDONALD, SM SAVEMORE &amp; SHOPWISE INSIDE THE SUBD.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/89866585ff4ebc21a4a2ac77d05859f5.png\" style=\"height:16px; width:16px\" /> W/OWN ONGOING CONSTRUCTION INSIDE THE SUBD; 10 CALL CENTER BUILDINGS.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/28875a73c5a43b107e2ffb19c28a264c.png\" style=\"height:16px; width:16px\" /> WET &amp; DRY MARKET INSIDE THE SUBD.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/6c5114285c45f3c31d9ffb36d7c556db.png\" style=\"height:16px; width:16px\" /> W/OWN SHUTTLE CAB FOR HOME OWNERS CONSUMPTION.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/fadcc4c1188ca8d80300b9fcb087bf82.png\" style=\"height:16px; width:16px\" /> W/OWN BUS TERMINAL INSIDE THE SUBD. GOING TO COASTAL MALL EXCLUSIVE FOR HOME OWNER CONSUMPTION.</p>\r\n\r\n<p><img alt=\"✔️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/f2ea1d36e5e15f9b0ce37a7607e93f26.png\" style=\"height:16px; width:16px\" /> W/UV EXPRESS TERMINAL INSIDE THE SUBD. GOING TO MALL OF ASIA, LAWTON, PASEO, ALABANG.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d0116d44f59c1169e0c43f4427d0a6c6.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/55bc9bdaa122c7b3d59beec72b92f80e.png\" style=\"height:16px; width:16px\" /><img alt=\"❤️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/9518e5af664f31cee756425a81139f87.png\" style=\"height:16px; width:16px\" /> KUNG OFW KA KABAYAN AT WALA KA SA PINAS MAARI MONG IPATRIPPING ANG IYONG IMMEDIATE RELATIVE UPANG MAKITA AT PAPILIIN NAMIN NG LOCATION NG UNIT NA INYONG NAPUSUAN, SILA NA DIN ANG PIPIRMA SA RESERVATION AGREEMENT IN BEHALF NG INYONG PANGALAN, PADALAHIN NYO LAMANG SILA NG 2 VALID ID NILA AT 2 PHILIPPINE VALID ID DIN PO NINYO, PAGKARESERVE NILA AY IUUWI NA DIN NILA ANG MGA DOKUMENTO NA IPAPADALA SA INYO NA IPAPARIMA SA INYO, FOR FURTHER DETAILS CHAT US OR CALL / TEXT / VIBER / IMO / WHATSAPP: +63906-3666-088</p>\r\n\r\n<p>&nbsp;<img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/1acd81fd136c8f87c3851cdbdb445ec0.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/9a334f0a58c7aae193f2fa958cf48cf5.png\" style=\"height:16px; width:16px\" /><img alt=\"❤️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/54335639ba2b87d0aae1715d01832a29.png\" style=\"height:16px; width:16px\" /> KABAYAN WE HAVE MORE THAN 17 HOUSE MODEL SA SUBD. NA ITO NA MAARING PAGPILIAN NG INYONG MAHAL SA BUHAY MULA SA TOWNHOMES SERIES NAMIN NA NAGKAKAHALAGA NG 9K/MO, 10K/MO, 12K/MO, 15K/MO AT SINGLE ATTACH SERIES NAMIN NA NAGKAKAHALAGA NG 19K/MO, 25K/MO AT 27K/MO. LAHAT PO IYAN AY MAARI NAMING IPAKITA SAKANILA AT MAPAPANOOD NYO DIN SA AMING PAGE KINDLY PM ME</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/edff55d3783709881464d17ed41fa87d.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/90f77f846b2fce0e6c807638990c1b79.png\" style=\"height:16px; width:16px\" /><img alt=\"❤️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/e2a50d4c01e2b19046fb6712735bbaee.png\" style=\"height:16px; width:16px\" /> WE DO FREE TRIPPING DAILY! TO RESERVE &amp; SCHEDULE YOUR FREE TRIPPING KINDLY CALL / TEXT / VIBER / IMO / WHATSAPP: +63906-3666-088 W/ YOUR DETAILS.</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/55e8d5f96d5c48c2465c25045c7447fd.png\" style=\"height:16px; width:16px\" />NAME:&nbsp;</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/bc5c5dcb517faba91652c34a1f870476.png\" style=\"height:16px; width:16px\" />CIVIL STATUS:&nbsp;</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/8eeb03e2a0b7dbdc97c6e654e338bc15.png\" style=\"height:16px; width:16px\" />AGE:&nbsp;</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/93f53b328d3d4f3e4e9a1acac37bdab1.png\" style=\"height:16px; width:16px\" />NATURE OF WORK:&nbsp;</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0b60bd92dc1bfcdc1d7827536bb11ae8.png\" style=\"height:16px; width:16px\" />PREFERRED DATE OF TRIPPING:</p>\r\n', 13, 'Thea', 'Townhouse', 'Lancaster New City', 'Imus, Cavite                                                                                                                        ', '50', '60', '3', '2', '2', '1', 'Church,Country club', '2589000', 'https://www.youtube.com/watch?v=wMWJsCRA0P0', '9349755fbf2d8d813b068f4d0805a5c9.jpg', '2022-02-10 16:45:46', '0000-00-00 00:00:00'),
(15, 'Chessa Single Attach', '<p>Chessa Complete Finish Single Attach and Ready for Occupancy (LOCATED AT LANCASTER NEW CITY, CAVITE BETWEEN THE BOUNDARIES OF IMUS AND GEN. TRIAS, CAVITE JUST 20-30 MINS AWAY FROM MOA, BACLARAN AT NAIA THRU CAVITE EXPRESSWAY AND CALAX)</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/f2593bb7cc5bbf5b8d56882cf9e04f9b.png\" style=\"height:16px; width:16px\" /> w/ Granite tiles</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/39ed529612b24ad7c43840ae051336a0.png\" style=\"height:16px; width:16px\" /> 3 Bedroom</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ace091e857274f68673eb5eb2b842dd1.png\" style=\"height:16px; width:16px\" /> 3 Toilet &amp; Bath</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/33130feacd6f8c4613e21f2b7236df1a.png\" style=\"height:16px; width:16px\" /> Big Balcony</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/f8d9e3b79e4eaf7ac5f793f476ed5c22.png\" style=\"height:16px; width:16px\" /> Big Garage</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0890a731823902e91c9aacedc909ca71.png\" style=\"height:16px; width:16px\" /> Provision for Dirty Kitchen &amp; Laundry Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ad8a30269afa48fa0699559b4080633f.png\" style=\"height:16px; width:16px\" /> Expandable Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/9a405fcd2512c70702d3ca97430f8622.png\" style=\"height:16px; width:16px\" /> Sliding Windows / Doors</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/aa57fc5e245970399722965bb5c5c599.png\" style=\"height:16px; width:16px\" /> 90 sq mt floor area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/b40b4218a77bc9a6d94342dbf4bbb1f4.png\" style=\"height:16px; width:16px\" /> corner and end lots available</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4c368a394e197ed0b358d1827609550b.png\" style=\"height:16px; width:16px\" /> CHESSA SINGLE ATTACH &nbsp;THRU BANK FINANCING (SAMPLE COMPUTATION)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/e1ba3382cd7090f4b6a16795f7e61513.png\" style=\"height:16px; width:16px\" /> Total Contract Price: 6,308,620.00 &nbsp;(KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/33d935d0ae3cbaaf73cd98211e65f9f4.png\" style=\"height:16px; width:16px\" /> FIRST CASH OUT UPON TRIPPING IS RESERVATION FEE: 40,000 (PAYABLE IN CASH/ATM DEBIT/CHECK DURING THE TRIPPING) &nbsp;(after 30days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/61548809d031e051c6c6ecc39799b2ee.png\" style=\"height:16px; width:16px\" /> Downpayment: &nbsp;590,862.00 payable in 9 mos</p>\r\n\r\n<p>Monthly downpayment for 9 mos: 65,651.33 monthly</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d1d4a90c617a51c07649749f425c00e4.png\" style=\"height:16px; width:16px\" /> AFTER PO NINYO MABAYADAN ANG 9 MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO, IPAPAAPPROVE NA PO ITO SA HOUSING LOAN SA BANGKO, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/74ec6ce6ed42934c4d25f63241f56b5e.png\" style=\"height:16px; width:16px\" /> 20yrs: 53,451.09 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/06ee935944be87ea520a2d6d5c84fbaa.png\" style=\"height:16px; width:16px\" /> 15 yrs: &nbsp;59,954.43 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/401c1100a1a870803ce081e219583396.png\" style=\"height:16px; width:16px\" /> 10 yrs: 74,290.27 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3fcc18481865ea766cfcf780a0b0203b.png\" style=\"height:16px; width:16px\" /> 5 yrs: 120,227.75 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/65f6cf8a0f96c4e103ef7b750ef6bca9.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ea12ef9fd8b66873647e38a897783dc5.png\" style=\"height:16px; width:16px\" /> 20-30min away fr PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING DAILY. PICK UP AT SM MALL OF ASIA&nbsp;</p>\r\n', 13, 'Chessa', 'Single Attach', 'Lancaster New City', 'Imus, Cavite                                                                        ', '90', '90', '3', '3', '2', '1', 'Church,Swimming pool', '6308620', 'https://www.youtube.com/watch?v=9ORRPPzQkvE', 'cf04e43b140632effae416a4bef9fde4.jpg', '2022-02-10 17:00:31', '0000-00-00 00:00:00'),
(16, 'Briana Single Attach', '<p>RFO BRIANA Complete Finish Single Attach (LOCATED AT LANCASTER NEW CITY, CAVITE BETWEEN THE BOUNDARIES OF IMUS AND GEN. TRIAS, CAVITE JUST 20-30 MINS AWAY FROM MOA, BACLARAN AT NAIA THRU CAVITE EXPRESSWAY AND CALAX)&nbsp;</p>\r\n\r\n<p>To Watch the Video ---&gt; <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fyoutu.be%2FVeh9LAkZRtA%3Ffbclid%3DIwAR2g3ajSNvzbz-Xngfqnf_hGlEXQp8CbMjILZI4_MKG64wad_zlMWwC9HlA&amp;h=AT1EBUTv1d8x_hR2SbISnpVczoteQBF_m1rxVixTfd3qpOOm3XVJClBFD3AgX-TEBoo1C9zMtdxUO0-YD4Os_mszf1IPRl1rRz4CgvD_j0kjoNix8rWnxmPVyh9UsveHOiau&amp;__tn__=-UK-R&amp;c[0]=AT2iqo7WhHqhaIPidm8Lc26rptMRi7LinPhSymHddWO4MopnUgU2BhFaNWGN3j-Deo6NXTt_i3TyMaD2v71KchwOOKcVw67V0LcXciC4OKVFk0X-8HIA9YFrVuKA-U6MqvMGfaIJaHCKY0ZoQ0knrqENkTySFsnurue_wkL7_objvOkMrVgpRvlZTpROrlWHyp9EbOsbIOVPH3WrGA\" target=\"_blank\">https://youtu.be/Veh9LAkZRtA</a></p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/847cd6af932b5142e55f1541a258ad9f.png\" style=\"height:16px; width:16px\" /> w/ Granite Tiles</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/57c3bb351b35b60a3e76a7f962582d3e.png\" style=\"height:16px; width:16px\" />&nbsp;4 Bedroom</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ea90c60057986c5b9ace43093b9ce96b.png\" style=\"height:16px; width:16px\" /> 3 Toilet &amp; Bath</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/80f323233dc9eb786d6da457befc9cb6.png\" style=\"height:16px; width:16px\" /> Big Balcony</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c85bc928f50ec1fc5594d44e84785463.png\" style=\"height:16px; width:16px\" /> Big Garage</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7632d72df01bd1c8ba480762d7b06477.png\" style=\"height:16px; width:16px\" /> Provision For Dirty Kitchen &amp; laundry Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/80837ece66d224179babb329beef2b72.png\" style=\"height:16px; width:16px\" /> Expandable Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c82c0b0d7eeca711e435f0f371f8c3b7.png\" style=\"height:16px; width:16px\" /> Sliding Windows / Doors</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/278dd0017f443f45d70c227a9d0f7fce.png\" style=\"height:16px; width:16px\" /> 110 sq mt floor area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/efb4063a68429511f6bad0105c50297f.png\" style=\"height:16px; width:16px\" /> Corner and End Lots Available</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/fdfa409ca0ae820c296e43a65c9b26d8.png\" style=\"height:16px; width:16px\" /> BRIANA Single Attach THRU BANK FINANCING (SAMPLE COMPUTATION)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/26002635b2403dde804d17cd72b68115.png\" style=\"height:16px; width:16px\" /> Total Contract Price: 6,829,560.00 (KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ea3b34e33b826a3a79566160b6b5d966.png\" style=\"height:16px; width:16px\" /> FIRST CASH OUT UPON TRIPPING IS RESERVATION FEE: 40,000 (PAYABLE IN CASH/ATM DEBIT/CHECK DURING THE TRIPPING) (after 30days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/1424e0ad517e0da4d434dd9ce3e2f084.png\" style=\"height:16px; width:16px\" /> Downpayment: 642,956.00 payable in 9 mos</p>\r\n\r\n<p>Monthly downpayment for 9 mos: 71,439.56 monthly</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/caac29ac3d2520f07a5e5e170dd5b8ab.png\" style=\"height:16px; width:16px\" /> AFTER PO NINYO MABAYADAN ANG 9 MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO, IPAPAAPPROVE NA PO ITO SA HOUSING LOAN SA BANGKO, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3163c294f3449df5a92f5a8124984a64.png\" style=\"height:16px; width:16px\" /> 20 yrs: 57,891.27 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/18c4e69b72cc9b25dad60749963ec96e.png\" style=\"height:16px; width:16px\" /> 15 yrs: 64,931.63 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/2fcc362cecc1a117548a3b97e4573df1.png\" style=\"height:16px; width:16px\" /> 10 yrs: 80,451.26 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/410190d8a81a2e88b7c9bc4e30560fc0.png\" style=\"height:16px; width:16px\" /> 5 yrs: 130,182.07 (APPLICBLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7de504abd7f75812fd129ecada2661a3.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a63725ca9999201b151bc466843e6ec8.png\" style=\"height:16px; width:16px\" /> 20-30min away fr PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING DAILY. PICK UP AT SM MALL OF ASIA</p>\r\n\r\n<p>To learn more let&#39;s talk in Messenger or you can call us:</p>\r\n\r\n<p><img alt=\"☎️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/41ff3f1aafb2d77b11b3ce0a5177a8e0.png\" style=\"height:16px; width:16px\" /> (046) 484 9233 (Call/Text/Viber/Imo/WhatsApp)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/295c34e5cf2504e41de9d266275f0d0d.png\" style=\"height:16px; width:16px\" /> (+63) 0906 3666 088 Call/Text/Viber/IMO/WhatsApp</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d2913c4e800d6673a00a44c4b9de8bf3.png\" style=\"height:16px; width:16px\" />With Free Site Tripping in Cavite</p>\r\n', 13, 'Briana', 'Single Attach', 'Lancaster New City', 'Imus, Cavite                                                ', '110', '110', '4', '3', '2', '1', 'Pool,Church,Supermarket', '6889340', 'https://www.youtube.com/watch?v=SKYK24a5agc', 'bed44d5f4de55f06eae547ecc1b3a56f.jpg', '2022-02-10 17:01:11', '0000-00-00 00:00:00'),
(17, 'Portia Townhouse', '<p>13k/mo Portia Townhomes (LOCATED @ MICARA ESTATES along Antero Soriano Highway, 4108, Sahud-Ulan, Tanza, Cavite). Just 30mins away from Pasay - Mall of Asia, Baclaran and NAIA road thru CAVITEX Expressway.</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/18835db41e1491a1fba630d85805ab84.png\" style=\"height:16px; width:16px\" /> 3 Bedrooms</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/40ad9923a524b0ce3e40a5314eb6b46e.png\" style=\"height:16px; width:16px\" /> 2 Toilet &amp; Bath</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0d71d7197053db483dd32ea6fab74712.png\" style=\"height:16px; width:16px\" /> Garage / Expandable Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c03ecdf4c62c440a29f5487ee69cf077.png\" style=\"height:16px; width:16px\" /> Provision for Dirty Kitchen &amp; Laundry Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/88b7294f9fa06412327a22290d306870.png\" style=\"height:16px; width:16px\" /> 45 sqm Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/75c33ed92e8c8531b02666020e64e401.png\" style=\"height:16px; width:16px\" /> 40 sqm Floor Area</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a1a8c713ca63a6829180826b333d6d5e.png\" style=\"height:16px; width:16px\" /><img alt=\"❤️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/cb915140eb5627d9de7c37568bd6a338.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ce857e86b49f72c5682075b65b1841f3.png\" style=\"height:16px; width:16px\" /> SAMPLE COMPUTATION OF FELICIA ( LATEST COMPUTATION)&nbsp;</p>\r\n\r\n<p>(PRESELLING UNIT )</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a0e5ba86802ba88932f5ae05f47f5d8d.png\" style=\"height:16px; width:16px\" /> Total Contract Price : 1,604,900.00 (KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/33c975adaf60968289d207913280ef1e.png\" style=\"height:16px; width:16px\" /> FIRST CASH OUT UPON TRIPPING IS RESERVATION FEE: 10,000 (after 30days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/94bbaf6e9c7fdb6c3fc2803e85fdfc9d.png\" style=\"height:16px; width:16px\" /> Downpayment : 190,612.50 (HULUGAN PO ITO NG 15MOS)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/44a4aa3909673886c9f3d9ac67838c9c.png\" style=\"height:16px; width:16px\" /> Payable in 15 months : 12,707.50/mo.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/8f99a7755321e130d1549e1687d0b5b0.png\" style=\"height:16px; width:16px\" /> AFTER PO NINYO MABAYADAN ANG 15MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO at IPAPAAPPROVE NA PO ITO SA HOUSING LOAN SA BANGKO, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p>Monthly Amortization for</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/88f8c4aa0b020d63203f20517eb0ea5e.png\" style=\"height:16px; width:16px\" /> 20 yrs: 13,248.21 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/aeef94945a4ce3bf1e9ed2d412ec360d.png\" style=\"height:16px; width:16px\" /> 15 yrs: 14,856.69 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3e80076cf064cd6ded284290c8f7100f.png\" style=\"height:16px; width:16px\" /> 10 yrs: 18,402.39 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3a1c1e9a5cd22e3859516031edb71952.png\" style=\"height:16px; width:16px\" /> 5 yrs: 29,764.17 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/5b2bc8282559fe5f13454559dfee8aea.png\" style=\"height:16px; width:16px\" /><img alt=\"⚓\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/2f465334382627ed6d1cef90cf6e8613.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/2bb4cc7ea1e2be44c2dfaf0af9448a17.png\" style=\"height:16px; width:16px\" />✈&zwj;Kung OFW ka Kabayan at wala sa Pinas ay kinakailangan mo lamang magtalaga ng magiging representative mo dito sa pinas na syang aming itritripping upang makita at pipirma sa reservation contract in behalf ng inyong pangalan. For Further Details How an OFW Can Avail kindly PM US.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/bc402c2d7199ededf8c1d105ce8ca987.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/14a592ab68f62fb102d9021aedfeed6f.png\" style=\"height:16px; width:16px\" /> 20-30min away fr PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING EVERY DAILY. PICK UP AT SM MALL OF ASIA</p>\r\n', 14, 'Portia', 'Townhouse', 'Micara Estates', 'Imus, Cavite                                                ', '50', '40', '3', '2', '1', '1', 'Basketballcourt,Park,Pool', '160490', 'https://www.youtube.com/watch?v=71409AcTHao', 'c0eb9c118bbc6bbb4528c272ef03b022.jpg', '2022-02-10 16:47:13', '0000-00-00 00:00:00'),
(18, 'Felicia Big Townhouse', '<p>15k/mo Felicia Big Townhomes (LOCATED @ MICARA ESTATES along Antero Soriano Highway, 4108, Sahud-Ulan, Tanza, Cavite). Just 30mins away from Pasay - Mall of Asia, Baclaran and NAIA road thru CAVITEX Expressway.</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/f10f5923cdb599e6c5df4f975a8d6d48.png\" style=\"height:16px; width:16px\" /> 3 Bedrooms</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/49f1381ee163bc27b3cd346740b08ee6.png\" style=\"height:16px; width:16px\" /> 2 Toilet &amp; Bath</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/905e298320bf682ca65c66da2f1c2dfb.png\" style=\"height:16px; width:16px\" /> Garage / Expandable Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/30d10ae54cb6028785ee2406d7965cd6.png\" style=\"height:16px; width:16px\" /> Provision for Dirty Kitchen &amp; Laundry Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/10aed7d80c034d6f051fa40c7c136349.png\" style=\"height:16px; width:16px\" /> 50 sqm Lot Area</p>\r\n\r\n<p><img alt=\"✔\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/47497a444a8c211dce070cbcde8e64f1.png\" style=\"height:16px; width:16px\" /> 50 sqm Floor Area</p>\r\n\r\n<p>↭↭↭↭↭↭↭↭↭↭↭↭↭↭&nbsp;</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/12433005e2ca0fd29242b9d18ce8aa70.png\" style=\"height:16px; width:16px\" /><img alt=\"❤️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3be6c58b0df9a529211505386dc55075.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/560303dace1b4d2a66dddbb5d981bef8.png\" style=\"height:16px; width:16px\" /> SAMPLE COMPUTATION OF FELICIA ( LATEST COMPUTATION)&nbsp;</p>\r\n\r\n<p>(PRESELLING UNIT )</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/b169b53059b5a6d037479fb72e3197eb.png\" style=\"height:16px; width:16px\" /> Total Contract Price : 2,031,500.00 (KUNG ITO PO AY NAIS NINYONG BAYADAN NG CASH)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/9e87fe9cf9a634896b9e19380e180460.png\" style=\"height:16px; width:16px\" /> FIRST CASH OUT UPON TRIPPING IS RESERVATION FEE: 10,000 (after 30days upon payment of reservation fee ay magstart na po ang hulugan ng monthly downpayment)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c1a79ac1e244f75f429595e74f02147f.png\" style=\"height:16px; width:16px\" /> Downpayment : 243,937.50 (HULUGAN PO ITO NG 15MOS)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/725f077b9b72941be18b4a02960fb267.png\" style=\"height:16px; width:16px\" /> Payable in 15 months : 16,262.50/mo.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a7cf8361e0aa23da9c71df24639e7ed5.png\" style=\"height:16px; width:16px\" /> AFTER PO NINYO MABAYADAN ANG 15MOS TO PAY NA DOWNPAYMENT AY STOP PAYMENT NA PO MUNA KAYO at IPAPAAPPROVE NA PO ITO SA HOUSING LOAN SA BANGKO, ONCE APPROVE NA AY MAGSTART NA ANG MONTHLY AMORTIZATION NINYO NA MAARING BAYADAN NG 20YRS,15YRS,10YRS OR 5YRS TO PAY AT MAARI NA DIN NINYONG MAINSPECT AT MALIPATAN ANG INYONG BAHAY.</p>\r\n\r\n<p>Monthly Amortization for</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3df7df8ffe6cbbae28b59114c640e9c5.png\" style=\"height:16px; width:16px\" /> 20 yrs: 16,798.79 (APPLICABLE FOR LOCALLY EMPLOYED ONLY)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/b53c7e782ba93a6f73eb27b45a9f875c.png\" style=\"height:16px; width:16px\" /> 15 yrs: 18,834.82(APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/f1e50501f92ee6cfd9aedd2a855b1241.png\" style=\"height:16px; width:16px\" /> 10 yrs: 23,323.01 &nbsp;(APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"✍️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/8548471083756fdf2b2cb7a4a00fda5d.png\" style=\"height:16px; width:16px\" /> 5 yrs: 37,704.88 (APPLICABLE FOR LOCALLY &amp; OFW)</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/dbfdfbd0592e83cc6a1feb2771b9aa4a.png\" style=\"height:16px; width:16px\" /><img alt=\"⚓\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/1db8bb99a7a6ab497ae98c2f22d8fa05.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/e3ab5d09db723adcb43b46a622656797.png\" style=\"height:16px; width:16px\" />✈&zwj;Kung OFW ka Kabayan at wala sa Pinas ay kinakailangan mo lamang magtalaga ng magiging representative mo dito sa pinas na syang aming itritripping upang makita at pipirma sa reservation contract in behalf ng inyong pangalan. For Further Details How an OFW Can Avail kindly PM US.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/3ff562cfd9490ba5906523d013617e97.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7c70ea0ca8b1ae15215a774c019395db.png\" style=\"height:16px; width:16px\" /> 20-30min away fr PASAY MALL OF ASIA, BACLARAN &amp; NAIA AIRPORT TRU CAVITEX EXPRESSWAY! WE DO FREE TRIPPING EVERY DAILY. PICK UP AT SM MALL OF ASIA&nbsp;</p>\r\n', 14, 'Felicia', 'Townhouse', 'Micara Estates', 'Imus, Cavite                                                                        ', '50', '50', '3', '2', '2', '1', 'Pool, School', '2031500', 'https://www.youtube.com/watch?v=v-noKm28OPA', '14c19c11b0268ff9cd2e6e53d432cc59.jpg', '2022-02-10 16:48:25', '0000-00-00 00:00:00'),
(19, 'Metroville', '<p>7K monthly thru Pag-ibig Financing only at Metroville Tanza Cavite.</p>\r\n\r\n<p>Gusto mo ba yung flood free area na paglabas mo sa Subdivision ay Highway na? At malapit na malapit lang sa SM Tanza na on going ang construction? Complete amenities Subdivision.</p>\r\n', 21, 'Sampaguita', 'Townhouse', 'Metroville', 'Imus, Cavite                                                                        ', '45', '48', '2', '1', '2', '1', 'School,SM,Church', '2200000', 'https://www.youtube.com/watch?v=jqnSCpTsbJk', '9282fca183c50f06b324b72f321cc307.jpg', '2022-02-10 16:58:40', '0000-00-00 00:00:00'),
(20, 'Westdale Villas', '<p>NO DOWNPAYMENT!!!</p>\r\n\r\n<p>NO DOWNPAYMENT!!!</p>\r\n\r\n<p>NO DOWNPAYMENT!!!</p>\r\n\r\n<p>Sa halagang P5,000 makakamtan mo na ang iyong pangarap na bahay! One ride to SM Tanza and SM Trece</p>\r\n\r\n<p>Ano pang inaantay?</p>\r\n\r\n<p>Magpareserve na habang may units pa,</p>\r\n\r\n<p>Ito ang pinakamabentang project in Tanza</p>\r\n\r\n<p>PROJECT IN TANZA</p>\r\n\r\n<p>NO DOWNPAYMENT&nbsp;LIMITED SLOT ONLY</p>\r\n\r\n<p>RESERVE NOW</p>\r\n\r\n<p>WESTDALE VILLAS TANZA</p>\r\n\r\n<p>Located in Brgy. Punta Dos, Tanza Cavite&nbsp;</p>\r\n\r\n<p>Near VistaMall&nbsp;</p>\r\n\r\n<p>Details:</p>\r\n\r\n<p>2-STOREY TOWNHOUSE INNER UNIT</p>\r\n\r\n<p>Lot area: 36 sqm.</p>\r\n\r\n<p>Floor area : 45 sqm.</p>\r\n\r\n<p>Provision for 2 Bedrooms</p>\r\n\r\n<p>1 Toilet and Bath</p>\r\n\r\n<p>Living Area</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/89a9cdc090103dec18eda62347340313.png\" style=\"height:16px; width:16px\" />Kitchen Area</p>\r\n\r\n<p>Service Area</p>\r\n\r\n<p>Semi complete turnover&nbsp;</p>\r\n\r\n<p>PRE SELLING</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/227ab7c6938d4b716d45d68b9a3a3e35.png\" style=\"height:16px; width:16px\" /> Near Cavitex and Calax</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/444fe8a5c4a75fd77ed431023fee6c6b.png\" style=\"height:16px; width:16px\" />Along the Highway</p>\r\n\r\n<p>Near Vista Mall</p>\r\n\r\n<p>Initial Requirements to reserve a unit:</p>\r\n\r\n<p>1 Month Latest Payslip</p>\r\n\r\n<p>Company Id</p>\r\n\r\n<p>2 government IDs</p>\r\n\r\n<p>Must be active member of Pag-ibig Funds</p>\r\n', 20, 'Selena 3', 'Townhouse', 'Westdale Villas', 'Imus, Cavite                                                                                                                                                                                                                                                   ', '36', '45', '2', '1', '2', '1', 'Basketball court,Multi-purpose hall,Parks and playground', '60000', 'https://www.youtube.com/watch?v=ZydmNJveFsA', '63c5d9f0af9d49beffc8df09684e5b63.jpg', '2022-04-05 13:14:42', '0000-00-00 00:00:00');
INSERT INTO `house` (`house_id`, `house_name`, `house_decs`, `house_decs_id`, `house_model`, `house_type`, `village`, `address`, `lot_area`, `floor_area`, `bed_rooms`, `bath_rooms`, `storeys`, `car_garage`, `with_balcony`, `tota_contart_price`, `video`, `image`, `date_added`, `date_updated`) VALUES
(21, 'Jasmine Single Attached', '<p>The Palm Residences <img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/786ccb00c1a8d5ef133a1652bc2bc58c.png\" style=\"height:16px; width:16px\" /> MOST AFFORDABLE SINGLE ATTACHED IN TANZA CAVITE<img alt=\"‼\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ce740ea83d6bf954a365cd8431d85efd.png\" style=\"height:16px; width:16px\" /> We are still at OLD PRICE for The Palm Residences in Brgy Calibuyo Tanza, Cavite kaya samantalahin habang naka OLD PRICE pa.</p>\r\n\r\n<p>AVAIL NOW WHILE ON PRE-SELLING <img alt=\"‼️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7fc2cb74b36f88e04bd728e28fda30e8.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/421f10baba243b2bfc7f0cee261eeb57.png\" style=\"height:16px; width:16px\" />10 Minutes away from FUTURE SM Tanza</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/a628e0894e0fa8d2c59c91e4cf4d2771.png\" style=\"height:16px; width:16px\" />18 minutes away from Robinson&#39;s Gentri&nbsp;</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/b36078d47cc1cfa576e08923e277c0e3.png\" style=\"height:16px; width:16px\" />0.3km to Calibuyo Brgy Hall</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ca9fe7ba89d7ee1b778fd6a344ddadfb.png\" style=\"height:16px; width:16px\" />0.55km to Calibuyo Catholic Church</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/40c45a55b361937e4cc63d5e6141e48f.png\" style=\"height:16px; width:16px\" />0.8km to Calibuyo Elementary School</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/11e030bde526e9d83ccfd1d77364fd3b.png\" style=\"height:16px; width:16px\" />1.7km to Tanza Doctors Hospital</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0785062d418566374e6ef4282182d8ba.png\" style=\"height:16px; width:16px\" />6.6km to Puregold Tanza</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/60581c065b661b164a50dd4cd823bccc.png\" style=\"height:16px; width:16px\" />9.4km to SM Rosario</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4e67b6234186f4fa1d4a6775bd1420c8.png\" style=\"height:16px; width:16px\" />3.5km to Cavite Gateway Terminal</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/db3fa7a4e1985ebbc5f359abee52b83a.png\" style=\"height:16px; width:16px\" />JASMINE Single Attached</p>\r\n\r\n<p>Lot Area 58.5sqm</p>\r\n\r\n<p>Floor Area 44.5sqm</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/68a7630f4db108c676316b1fa4ef1594.png\" style=\"height:16px; width:16px\" />Bare type Turnover</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/74bff58aedd3034577affad18528b776.png\" style=\"height:16px; width:16px\" />Provision for 2-3 bedrooms</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d8a94a8b842e1c9306901160ba9fcf8b.png\" style=\"height:16px; width:16px\" />1 Toilet and bath&nbsp;</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0377db5e95e7b1531133c5d89d5d5d6d.png\" style=\"height:16px; width:16px\" />Provision for carport</p>\r\n\r\n<p>For online reservations, inquiries, and tripping, please do contact or pm me.&nbsp;</p>\r\n\r\n<p>Latest Computation thru Pag-ibig Financing</p>\r\n\r\n<p>TCP: 1,810,000.00&nbsp;</p>\r\n\r\n<p>Reservation Fee: 8,000.00&nbsp;</p>\r\n\r\n<p>Net Equity / DP: 125,000.00 &nbsp;payable in 16 months @ 7,812.50 &nbsp;monthly&nbsp;</p>\r\n\r\n<p>Loanable Value: 1,677,000.00&nbsp;</p>\r\n\r\n<p>Monthly Amortization thru Pag-ibig</p>\r\n\r\n<p>20 years: 12,503.26 monthly</p>\r\n\r\n<p>25 years: 11,323.22 monthly</p>\r\n\r\n<p>30 years: 10,462.30 monthly</p>\r\n', 15, 'Jasmine', 'Single Attached', 'The palm Residences', 'Imus, Cavite                                                                                                                                                                                                                                                   ', '58', '44', '2', '1', '2', '1', 'School, SM', '1810000', 'https://www.youtube.com/watch?v=_BU3sEgCXPM', '603b29be207b4ca8705513cb431f1a13.jpg', '2022-02-10 16:55:05', '0000-00-00 00:00:00'),
(22, 'Paris Model', '<p>&nbsp;PARIS Model</p>\r\n\r\n<p>Located @ Anyana Bel Air Central</p>\r\n\r\n<p>As low as 58k monthly DP. &nbsp;Complete Finished</p>\r\n\r\n<p>&nbsp;With LUXURIOUS AMENITIES</p>\r\n\r\n<p>Lot Area 151sqm&nbsp;</p>\r\n\r\n<p>Floor Area 187sqm</p>\r\n\r\n<p>&nbsp;4 bedrooms</p>\r\n\r\n<p>&nbsp;3 toilet &amp; bath</p>\r\n\r\n<p>&nbsp;Living/ Dining/ Kitchen</p>\r\n\r\n<p>&nbsp;&nbsp;Service Area/ Carport for 2</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Invest in a High-end Subdivision in Cavite near Evo City and Maple Grove.&nbsp;</p>\r\n\r\n<p>Property locations are ideally positioned to enjoy the proximity to cafes, restaurants, shopping centers, chilling spots, playgrounds, basketball courts, parks with garden and a selection of premier schools.</p>\r\n\r\n<p>????????????-???????????????????????????? ???????????????????? (????????????????????????)</p>\r\n\r\n<p>LOT ONLY for 15k/month</p>\r\n\r\n<p>HOUSE &amp; LOT for as low as 25k/month</p>\r\n\r\n<p>Commercial Lots are also available</p>\r\n\r\n<p>DP - 15% 0 INTEREST</p>\r\n\r\n<p>Reservation Fee - 30k (deductible on Total Contract Price)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fully Finished</p>\r\n\r\n<p>4 Bedroom</p>\r\n\r\n<p>2-3 T&amp;B</p>\r\n\r\n<p>Single Detached/Single Attached</p>\r\n\r\n<p>Carport</p>\r\n\r\n<p>etc.</p>\r\n\r\n<p>???????????????????????????????????????????????????? ???????????????????? ????????????????????????:</p>\r\n\r\n<p>Fully Finished</p>\r\n\r\n<p>3-4 Bedroom</p>\r\n\r\n<p>2-3 T&amp;B</p>\r\n\r\n<p>1 Carport</p>\r\n\r\n<p>Kitchen &amp; Dining Area</p>\r\n\r\n<p>Balcony</p>\r\n\r\n<p>Service Area</p>\r\n\r\n<p>Living Area</p>\r\n\r\n<p>Lanai</p>\r\n\r\n<p>&nbsp;Bacao Gen.Trias Cavite, Near exit of CAVITEX Along Centennial road, near airport 25 mins away from SM Mall of Asia.</p>\r\n\r\n<p>Brgy Sanjamayor Tanza, Cavite, Near Robinson Gentrias 10-15min away from AGV.</p>\r\n', 23, 'Paris', 'Single Attached', 'Anyana', 'Anyana, Bel Air Central                                                                        ', '151', '187', '4', '3', '2', '1', 'School,Church,SM,Swimming pool,basketball court', '9335645', 'https://www.youtube.com/watch?v=kPEM_6VaeLU', '9e0d0c0f579774450745177ba47d1348.jpg', '2022-05-23 07:20:43', '0000-00-00 00:00:00'),
(23, 'Pagsibol', '<p><img alt=\"❗\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/dc899e19d4c5cc8e08dca18452615878.png\" style=\"height:16px; width:16px\" /><img alt=\"❗\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/292a8b177c1663e44e15175896d3588c.png\" style=\"height:16px; width:16px\" />Gandang BAHAY DI BA?<img alt=\"❗\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/509015d8a9acadb0ccad17804e8ef0e8.png\" style=\"height:16px; width:16px\" /><img alt=\"❗\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/800e8c55d710525468b1a8676dcc4126.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/18ef3da4b2cbcf22681c4c6541c55845.png\" style=\"height:16px; width:16px\" /><img alt=\"????️\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ecd3ca1906623ec8f0cf066387694044.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4382656e969f1ad9355a3e888dd4cff4.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/45c3ffc2bda99ce242d0a9097e29201a.png\" style=\"height:16px; width:16px\" />8K lang monthly yaarrrnn<img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/c03c6325aa4244b900b367cb3965506b.png\" style=\"height:16px; width:16px\" />%</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/0fc2f1a5b203fec9949cf43df7fc7eb5.png\" style=\"height:16px; width:16px\" />May limited slots lang ang No DP, check natin if may available upon reservation.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/aa5c00ca2fb7e341addb4376d842a2cd.png\" style=\"height:16px; width:16px\" />pwede pa sa 2 car<img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/4c8918390c99c3f2e21a81a0133cb5a2.png\" style=\"height:16px; width:16px\" /><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/80bd4847540b5dc2f2e01bc87715a8c6.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/7fddf095114890cdbfa05a7914842c28.png\" style=\"height:16px; width:16px\" />Duplex yarrnn</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/ea9239049cbcca4d576c1330839ca017.png\" style=\"height:16px; width:16px\" /> kung kaya nila, sure kaya mo rin yarnn</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/d8d2bc240b5a30b7400a4c09aa36c9df.png\" style=\"height:16px; width:16px\" />panu ?<img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/023309fa15df9f36f9c9afee0d25d1ca.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/46255790edae99cb88faba0d277cf256.png\" style=\"height:16px; width:16px\" /> Thru Pag-ibig Funds</p>\r\n\r\n<p><img alt=\"????\" src=\"https://cvsu-b-website.online/folder/achievers/Announcement/02fe3cfaa50b13acb08decc31137ee66.png\" style=\"height:16px; width:16px\" /> Required Salary: 25k&nbsp;basic monthly salary</p>\r\n', 12, 'Pagsibol', 'Duplex', 'Pagsibol Village Phase 2', 'Naic, Cavite                                                                        ', '54', '45', '2', '1', '2', '2', 'School,SM', '1228000', 'https://www.youtube.com/watch?v=dc2AiEV_2is', 'f4fafa340877bf67f284badb83705e0a.jpg', '2022-04-02 14:39:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image_file`
--

CREATE TABLE `image_file` (
  `image_id` int(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `house_id` int(11) NOT NULL,
  `image_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `image_file`
--

INSERT INTO `image_file` (`image_id`, `image_name`, `house_id`, `image_date`) VALUES
(1, '5f35a15982e9e056bdddce9be224e0f3.jpg', 11, '2021-05-28 16:00:34'),
(2, '42ddab16479f12eb7bcbfbb165c055fe.jpg', 11, '2021-05-28 16:00:34'),
(3, 'd614f0275dd5dc767651a693d7f36812.jpg', 11, '2021-05-28 16:00:35'),
(4, '79d1d54af6e6508c71c5cf6e2f6ad4d9.jpg', 11, '2021-05-28 16:00:35'),
(5, 'adb0542612e6f0a258ad75382cd92f78.jpg', 11, '2021-05-28 16:00:35'),
(6, '7455d95fa15ce33492e25628d51173a4.jpg', 11, '2021-05-28 16:00:35'),
(7, '77876b6fb17fcc66b66fb90694aad8d7.jpg', 11, '2021-05-28 16:00:35'),
(8, '6d70c9f6063a9c1c178d2a7868ba8a6d.jpg', 11, '2021-05-28 16:00:35'),
(9, 'da2c265849cde5fc8379df2eb3664eaa.jpg', 11, '2021-05-28 16:00:35'),
(10, 'a5be4e2d3067e9bc733371766d29f559.jpg', 11, '2021-05-28 16:00:35'),
(11, '6ea2f75b01ea6592cdddfd1fcb47eb16.jpg', 12, '2021-05-29 14:08:41'),
(12, '05acc52d7f6a36ef85c9fbd75b2ce9d7.jpg', 12, '2021-05-29 14:08:41'),
(13, '9f37407eea3c87dd88f54e453bb37175.jpg', 12, '2021-05-29 14:08:41'),
(14, 'be507727c1586763acdbbd96d55df9b1.jpg', 12, '2021-05-29 14:08:41'),
(15, '0ca875e1b21e6f78dc4ff88fc2fc64b3.jpg', 12, '2021-05-29 14:08:41'),
(16, 'c1f9e6d82983770cf2823c747dbc5f81.jpg', 12, '2021-05-29 14:08:41'),
(17, '4b2ee9da6ea72e40014dee3cf7a27ab2.jpg', 12, '2021-05-29 14:08:41'),
(18, '2ad17ca845c0214fc38989927b6def05.jpg', 12, '2021-05-29 14:08:42'),
(19, '926cceda28274f0e7c71a59bd4313d4a.jpg', 14, '2021-05-29 14:30:50'),
(20, '125b1546264a57a9de70eb4de8669ba2.jpg', 14, '2021-05-29 14:30:50'),
(21, '80441f094e37a83bc69e75a138b1164a.jpg', 14, '2021-05-29 14:30:50'),
(22, '29ab9b3bd56feac80dc5cd5a13cf414d.jpg', 14, '2021-05-29 14:30:51'),
(23, '970005070b3f33bc89f6dbab39d13d7c.jpg', 14, '2021-05-29 14:30:51'),
(24, '2b42cd79d02c6a9b3a442eef469a9d9b.jpg', 14, '2021-05-29 14:30:51'),
(25, 'd3f7face4a4f83daa2d92b7688f3f468.jpg', 14, '2021-05-29 14:30:51'),
(26, 'fcd52d5da19d5f5f62c1cc880d531e18.jpg', 14, '2021-05-29 14:30:51'),
(27, 'ce0660d74208eae66e47abe6fa311601.jpg', 14, '2021-05-29 14:30:51'),
(28, 'd34c9b39d4ed7d0a24b2fcbb6fd6d20f.jpg', 14, '2021-05-29 14:30:51'),
(29, '8efc153d34c5f46f1a965e6af0c69838.jpg', 14, '2021-05-29 14:30:51'),
(30, '25df3f2b19862ade980f4717902dab18.jpg', 14, '2021-05-29 14:30:51'),
(31, '87f5948c1a2ce92114f684230a26df65.jpg', 14, '2021-05-29 14:30:51'),
(32, '58e9336d1856a7607b0ecad50222933a.jpg', 14, '2021-05-29 14:30:51'),
(33, '868434ee54b010701ef57324817964db.jpg', 14, '2021-05-29 14:30:51'),
(34, '5b848c32e362fd0bcbba415bc9cc4864.jpg', 14, '2021-05-29 14:30:51'),
(35, 'd87bd2f90fbda44d90665df12ccd7bdd.jpg', 14, '2021-05-29 14:30:51'),
(36, '263da012c7f213fb17b6a70e2995bb0f.jpg', 14, '2021-05-29 14:30:51'),
(37, '8ddbc8f5b280e09bee00448d610b783d.jpg', 14, '2021-05-29 14:30:52'),
(38, 'dcddd171d4f96ac39f6e4bd4aadf6ce9.jpg', 14, '2021-05-29 14:30:52'),
(39, 'cf118a1105090234453a345ed4859759.jpg', 15, '2021-05-29 14:36:44'),
(40, 'ea6421d557664d8dd859fa718a065894.jpg', 15, '2021-05-29 14:36:45'),
(41, 'df5158bf54cf3cdd5b1ae37bea1486e7.jpg', 15, '2021-05-29 14:36:45'),
(42, '14f5d36fbc255c72d3df0902d7604bd0.jpg', 15, '2021-05-29 14:36:45'),
(43, '035dc331e3f110ccd65cc67b465871ba.jpg', 15, '2021-05-29 14:36:45'),
(44, '70b3c34841524b40c0ee9a8a57664d88.jpg', 15, '2021-05-29 14:36:45'),
(45, '511f05072042e45506c13b4be99ec101.jpg', 15, '2021-05-29 14:36:45'),
(46, 'cc2c5374a672b0e4c85a613ca866c7d0.jpg', 15, '2021-05-29 14:36:45'),
(47, '80b218244106ab314a502ecc195ac31b.jpg', 15, '2021-05-29 14:36:45'),
(48, '6e184942841786e43f23fcfe5c1e3b7d.jpg', 15, '2021-05-29 14:36:45'),
(49, '231f6d4fc239a9e5fa246d68c1573995.jpg', 15, '2021-05-29 14:36:45'),
(50, '41d284d6fe0c25e6dcc24bcaeefa41cf.jpg', 15, '2021-05-29 14:36:45'),
(51, '0e0e2a35b89e0e447b1543ea35515115.jpg', 15, '2021-05-29 14:36:45'),
(52, 'dac264fd10a0fe922b466c3e7b6b8a95.jpg', 15, '2021-05-29 14:36:45'),
(53, '9622edd2c0ebfde460422b0de2ae24f4.jpg', 15, '2021-05-29 14:36:45'),
(54, '94661d6b736197c1b8325870182fda5d.jpg', 16, '2021-05-29 14:42:13'),
(55, '46f73d7e0460af6479cb4f7cbb83e861.jpg', 16, '2021-05-29 14:42:13'),
(56, '97ac29914e41186c34f9ac96dcf3b13a.jpg', 16, '2021-05-29 14:42:13'),
(57, '4d9ed101bd9947bcffffa1ae84f7b23b.jpg', 16, '2021-05-29 14:42:13'),
(58, 'd34902ff4f856418583b58d6117d2aef.jpg', 16, '2021-05-29 14:42:13'),
(59, 'da8f3d58af2147caa8cb43cb9e87b262.jpg', 16, '2021-05-29 14:42:13'),
(60, '2937cce674ac8cf273b8b03a5c9d5495.jpg', 16, '2021-05-29 14:42:13'),
(61, '2e9e8313188e1abc6118d8f93ebe1f99.jpg', 16, '2021-05-29 14:42:13'),
(62, '7dcef737c7afab7fb7c6fdbd57585ac5.jpg', 16, '2021-05-29 14:42:14'),
(63, 'b360d7b33da0e72923ee5218b9077cec.jpg', 16, '2021-05-29 14:42:14'),
(64, '6b4a1640864be67c543e2c2d58e53d55.jpg', 16, '2021-05-29 14:42:14'),
(65, '279a7efc3d8fa935532e1aaf0c372f29.jpg', 16, '2021-05-29 14:42:14'),
(66, 'b3aa3f1ef51a449c36d4053397523fc1.jpg', 16, '2021-05-29 14:42:14'),
(67, 'e67c6ecaebf5e1aab1a4db5b8f2487fd.jpg', 16, '2021-05-29 14:42:14'),
(68, 'b88021dfd58570e58b831aebcf1da40d.jpg', 18, '2021-05-29 14:48:08'),
(69, '4c060ac3b62362388fb417b5cb19c0c3.jpg', 18, '2021-05-29 14:48:08'),
(70, '3dca7c8f5927e3da45832a49e83b69c0.jpg', 18, '2021-05-29 14:48:09'),
(71, '6492e3901d0b3c988ce017ade8ba2707.jpg', 18, '2021-05-29 14:48:09'),
(72, 'c819a6b4ce3e1b1de01cfb6da1bf1a8b.jpg', 18, '2021-05-29 14:48:09'),
(73, '1b0c8d4df3800c2cbceb0fc8a2700e7c.jpg', 18, '2021-05-29 14:48:09'),
(74, 'fa8008f829749ab2cfd5f6a6a58137e2.jpg', 18, '2021-05-29 14:48:09'),
(75, 'bbf463e3a30f6cd3ac59cd7e7bffb41e.jpg', 18, '2021-05-29 14:48:09'),
(76, 'e7483d4711527959806972dcda95478c.jpg', 18, '2021-05-29 14:48:10'),
(77, '5be67c4d1eca0b622bcf5eabb2049201.jpg', 18, '2021-05-29 14:48:10'),
(78, 'e90039aef4020e716faddca4479939b0.jpg', 18, '2021-05-29 14:48:10'),
(79, 'b4411aa3044d59ccea1dff7ddc688ac1.jpg', 18, '2021-05-29 14:48:10'),
(80, '6e51f06c26f01e8e95564c28fdb882b3.jpg', 18, '2021-05-29 14:48:10'),
(81, '3da2c1ee1bb4ff8b08fe0f947fd7fe7f.jpg', 18, '2021-05-29 14:48:10'),
(82, '37ffc21a0151fca86e874f6531c38b7b.jpg', 18, '2021-05-29 14:48:11'),
(83, 'ad96477867550b9e49f7b423e1b040ec.jpg', 18, '2021-05-29 14:48:11'),
(84, '628fe787296639e0f074fcb4c63ec3b3.jpg', 18, '2021-05-29 14:48:11'),
(85, '793c7761aa7e045be6059cb6b51f8743.jpg', 18, '2021-05-29 14:48:11'),
(86, '718db1ed195db9b8f81695d88843b0f2.jpg', 18, '2021-05-29 14:48:11'),
(87, 'b53351ec7f4d237b61f87c58f1aaaf73.jpg', 18, '2021-05-29 14:48:11'),
(88, '1b61a0314bd824a762d2da6af2be7416.jpg', 18, '2021-05-29 14:48:11'),
(89, '3cf7e2652c159571da954d36985375c9.jpg', 18, '2021-05-29 14:48:11'),
(90, '1875c9aff0902de8adcc5d05be7ebeec.jpg', 18, '2021-05-29 14:48:12'),
(91, '465ac9951b1b042472b678ba1644df7e.jpg', 18, '2021-05-29 14:48:12'),
(92, 'fdbfb4c873d0816c7ddcbd3815146d00.jpg', 18, '2021-05-29 14:48:12'),
(93, '8c6c0fb325a67d4e4594b2af1baecfcc.jpg', 18, '2021-05-29 14:48:12'),
(94, 'cf922313627ed09522e89583ee326160.jpg', 18, '2021-05-29 14:48:12'),
(95, '60de14d02fb1d5fac9f770e1ea528ce4.jpg', 18, '2021-05-29 14:48:13'),
(96, '32d7f54d4b3d3d212b30acf22e096f31.jpg', 18, '2021-05-29 14:48:13'),
(97, '15eebd80c258da0b713fbc46866fffff.jpg', 18, '2021-05-29 14:48:13'),
(98, 'f587656bc1fc00d63e06cbf55a63056b.jpg', 18, '2021-05-29 14:48:13'),
(99, '5dbe0e5fcd472d3f4f05ef3855840506.jpg', 18, '2021-05-29 14:48:13'),
(100, '5344374d8b1949c4e0add0ec9abd712e.jpg', 18, '2021-05-29 14:48:13'),
(101, '01ce4d78b1fc083c40daeffe27ecb05d.jpg', 18, '2021-05-29 14:48:18'),
(102, '3b5fba6f80f94a47fb377eed038a005b.jpg', 18, '2021-05-29 14:48:18'),
(103, 'e5a36b48d03a1b9891621d767972f216.jpg', 18, '2021-05-29 14:48:18'),
(104, '74d2a2fe1ec0def68adc4cee28d5c2f2.jpg', 18, '2021-05-29 14:48:18'),
(105, '96dbc32cdd20dd9a162a820e5d8fdf17.jpg', 18, '2021-05-29 14:48:18'),
(106, '3e1c17650b334cc88dfbe34aea0ac623.jpg', 18, '2021-05-29 14:48:18'),
(107, '0d09071aa599aef31aa0349c96b0e115.jpg', 18, '2021-05-29 14:48:18'),
(108, '03ee89e088ffa7d8821120f8b67dcc14.jpg', 17, '2021-05-29 14:55:34'),
(109, '0505187502fe26b268bbf969c7d3bbe8.jpg', 17, '2021-05-29 14:55:34'),
(110, '7b2b5b3ee159f969a61e30067cfeb2b6.jpg', 17, '2021-05-29 14:55:34'),
(111, 'fa298d0c8ecb2f7eebe8448201f64ed5.jpg', 17, '2021-05-29 14:55:34'),
(112, 'd05458d997f26337e37ad60c33506473.jpg', 17, '2021-05-29 14:55:34'),
(113, '3146c14683a0ee98214365b4ef11f7fa.jpg', 17, '2021-05-29 14:55:35'),
(114, '0d94c8c4f2d12f752a94b9dd99b8f09d.jpg', 17, '2021-05-29 14:55:35'),
(115, '7fe3cd9bcc63ccc22f7b689f52c2074b.jpg', 17, '2021-05-29 14:55:35'),
(116, '7a6acebb562280c0aada7ec86c1cb093.jpg', 17, '2021-05-29 14:55:35'),
(117, 'eab509471863b1de3f22c0ccdffb1134.jpg', 17, '2021-05-29 14:55:35'),
(118, '9ae60afa29dafb3dcb8b0812210ae461.jpg', 17, '2021-05-29 14:55:35'),
(119, '5cd4526bd296043e70b38c03061c4298.jpg', 17, '2021-05-29 14:55:35'),
(120, '307bda7c7af5bd4d7550633ed2009dbb.jpg', 17, '2021-05-29 14:55:35'),
(121, '23e4cee0e9df857aa2265d1d1f2e65c3.jpg', 17, '2021-05-29 14:55:35'),
(122, 'e847379328df8fed25b78c31083ebc10.jpg', 17, '2021-05-29 14:55:35'),
(123, '7fcd56c516559bf4ae36a51c7b49725a.jpg', 17, '2021-05-29 14:55:35'),
(124, 'e11ce04d4c0dd165d22f03a92b8f41f3.jpg', 17, '2021-05-29 14:55:36'),
(125, '375554ac1ea39c2b405e7ac960cfb6d0.jpg', 17, '2021-05-29 14:55:36'),
(126, '68eb66a9ac1a0b241b8c8de6f6c171bc.jpg', 17, '2021-05-29 14:55:36'),
(127, '30a4a0e736b858af43eadf0c1a14b7a0.jpg', 17, '2021-05-29 14:55:36'),
(128, '907caaa99229381e14bf61e3d1ff8b25.jpg', 17, '2021-05-29 14:55:36'),
(129, '11fc5ed4a28a7cd09cfc379bf168a6d9.jpg', 17, '2021-05-29 14:55:36'),
(130, '5703dec89facdee02c1fe3a7bb16803f.jpg', 17, '2021-05-29 14:55:36'),
(131, 'edd580ca8b63b8d4c754c7fce5166526.jpg', 17, '2021-05-29 14:55:36'),
(132, '1f17b409358f36cc5f2ce73a27ca2c5b.jpg', 17, '2021-05-29 14:55:36'),
(133, '58d5a612aff88ca27fd6fe9c9ecdcd1d.jpg', 17, '2021-05-29 14:55:36'),
(134, 'b704d3e54ecdabe13c3ecd945acd935c.jpg', 17, '2021-05-29 14:55:36'),
(135, 'df1f48d144030dbbc97a080a084f7adc.jpg', 17, '2021-05-29 14:55:36'),
(136, '70b04daf8eb815f33e239dee29520e6b.jpg', 17, '2021-05-29 14:55:37'),
(137, '4d34bc76e9c3d995d2f4cb29ef2139ea.jpg', 17, '2021-05-29 14:55:37'),
(138, 'b01a06d2aa00ac09b660ce16ec869e11.jpg', 17, '2021-05-29 14:55:37'),
(139, '2baa6ca1fd0f053802acfc8551d104ff.jpg', 17, '2021-05-29 14:55:37'),
(140, '58082bb1fe1534613a4b11ea5a1df999.jpg', 17, '2021-05-29 14:55:37'),
(141, 'a84c8305a51d2faa9b96d41a0f750dc7.jpg', 17, '2021-05-29 14:55:37'),
(142, 'fbb20e6f507cc4f2819080102a70a3b7.jpg', 17, '2021-05-29 14:55:37'),
(143, '86e3663ba2f8cd5838328c301f7e5b6c.jpg', 17, '2021-05-29 14:55:37'),
(144, '7c19a4bd865062af5aaa28ce007ee1a7.jpg', 17, '2021-05-29 14:55:37'),
(145, 'a2fc2ff486b5fd8c7c59578767e1badf.jpg', 17, '2021-05-29 14:55:37'),
(146, '13cd9b50ba2ac609f9b703b9fceac73e.jpg', 17, '2021-05-29 14:55:37'),
(147, 'f08bd6a48579085493500dd73b3393da.jpg', 17, '2021-05-29 14:55:37'),
(148, '86a79a5aabbe92c451c7abd4f2c1f364.jpg', 17, '2021-05-29 14:55:37'),
(149, '3ffa4a9df64d79aeaf1c1e8fb486eb4d.jpg', 17, '2021-05-29 14:55:37'),
(150, 'a74370ab958f39de436a9569516ad4be.jpg', 19, '2021-05-29 15:11:23'),
(151, 'e929996f9dbfd83d04476b8704fae0b5.jpg', 19, '2021-05-29 15:11:23'),
(152, 'db16915ece356f519fd88cb86b71f31a.jpg', 19, '2021-05-29 15:11:23'),
(153, '0115ec98302733a65fe4fe321939460a.jpg', 19, '2021-05-29 15:11:23'),
(154, 'f63552c2b7ec0108a063ab30f28b5a0c.jpg', 19, '2021-05-29 15:11:23'),
(155, '27c6fddf9b29e9c649714054ca880fe3.jpg', 19, '2021-05-29 15:11:23'),
(156, '836c4787b8b7aa4ce138b2f7a73fc407.jpg', 19, '2021-05-29 15:11:23'),
(157, 'a48142d0ab27603c3460c594b1a95e3c.jpg', 19, '2021-05-29 15:11:23'),
(158, '4b739ccc345c1814c65e37c53653231d.jpg', 19, '2021-05-29 15:11:23'),
(159, 'ef4539aad90d6f3b2bee11cd97a5fac1.jpg', 19, '2021-05-29 15:11:23'),
(160, '5832d3cc49cc2a381bcce7c73930f056.jpg', 19, '2021-05-29 15:11:23'),
(161, '5ba32dfd47ee16dfee1fa11b0206a857.jpg', 19, '2021-05-29 15:11:23'),
(162, '46ca9b89fd26f911cffee2311eba96f1.jpg', 19, '2021-05-29 15:11:23'),
(163, '5f2096a67697dc7a8aa24d61580e4edf.jpg', 19, '2021-05-29 15:11:23'),
(164, '8bd3ad77b847fc43772e93c839ac2aa5.jpg', 19, '2021-05-29 15:11:23'),
(165, 'a588a088e4a6b8b3ea8825e5cfdd002e.jpg', 19, '2021-05-29 15:11:23'),
(166, '3b56963e5dbd46768f8b1be452c654a4.jpg', 19, '2021-05-29 15:11:24'),
(167, 'c38a9327aded0426953ef27f03b8e810.jpg', 19, '2021-05-29 15:11:24'),
(168, '0ff6b2a03c4a6da1b9da6380a515732d.jpg', 19, '2021-05-29 15:11:24'),
(169, '8d1c967586f6c08d68a41045816810e9.jpg', 19, '2021-05-29 15:11:24'),
(170, '7966cd52301291823cf74937433e1602.jpg', 19, '2021-05-29 15:11:24'),
(171, '41c103b9de9368bca6db018a3a03bafb.jpg', 20, '2021-05-29 15:17:06'),
(172, 'c86f8d80ef2abb9c9a7aac2679de0213.jpg', 20, '2021-05-29 15:17:06'),
(173, 'ddfd5492c3277de929e4cc12b35cab04.jpg', 20, '2021-05-29 15:17:06'),
(174, '1630684b70bcf8882610341d5a2938bd.jpg', 20, '2021-05-29 15:17:06'),
(175, 'da0fdeb2271e6328de1a01a5a44a22dd.jpg', 20, '2021-05-29 15:17:06'),
(176, '0b8300a48d1a3054ea189dd8c673c274.jpg', 20, '2021-05-29 15:17:07'),
(177, '18518a4626dd72b39ff758df61c12956.jpg', 20, '2021-05-29 15:17:07'),
(178, '930a0a411c6eb66a9f043f65e22b310d.jpg', 20, '2021-05-29 15:17:07'),
(179, '40ad9e35eb54a021f3a2c97c607791bd.jpg', 20, '2021-05-29 15:17:07'),
(180, '710adfa35b2654bd21f895b2a55b5b37.jpg', 20, '2021-05-29 15:17:07'),
(181, 'ded0ee73caa55e3beaca41fa08ff2c74.jpg', 20, '2021-05-29 15:17:07'),
(182, '92544fecdeb7120342a2fd49a1966a6e.jpg', 20, '2021-05-29 15:17:07'),
(183, 'da52415bb5b2aaeaf98e96d9be09566d.jpg', 20, '2021-05-29 15:17:07'),
(184, '97ef11a730bf2998aebb81561f01bf4a.jpg', 20, '2021-05-29 15:17:07'),
(185, '511bca602f5a3de627df79ba16ff3210.jpg', 20, '2021-05-29 15:17:07'),
(186, 'faa8bc4b2adfb72f4c243da2aba9317a.jpg', 21, '2021-05-29 15:21:46'),
(187, '28809fbdc1b89c5ccde48ae4aede5821.jpg', 21, '2021-05-29 15:21:46'),
(188, '62e22bb615d58bcd94e57e2ca4882588.jpg', 21, '2021-05-29 15:21:46'),
(189, '881ff29c74792ecde707784747f7633c.jpg', 21, '2021-05-29 15:21:46'),
(190, '32b1fc2c4cc9526dcd88e3112ffe5954.jpg', 21, '2021-05-29 15:21:47'),
(191, '29db02c5e87ab3f80c9cea1f714bbc70.jpg', 21, '2021-05-29 15:21:47'),
(192, '88821c8c278a43d4b2f7a1930eb28edb.jpg', 21, '2021-05-29 15:21:47'),
(193, 'f3726a986c782e03a578411b817fb045.jpg', 21, '2021-05-29 15:21:47'),
(194, '7e877e12a67529ae732c722e1502909f.jpg', 21, '2021-05-29 15:21:47'),
(195, '9f7d609475f8956804e055264772bef2.jpg', 22, '2021-05-29 15:37:45'),
(196, '5028922c9c498ef15722d2fe5a90b094.jpg', 22, '2021-05-29 15:37:45'),
(197, '44f24a0d5045bc7a2576dd33c23ced0c.jpg', 22, '2021-05-29 15:37:45'),
(198, 'c7bcf53003bf3ac84a0ed7b8f6bd827e.jpg', 22, '2021-05-29 15:37:45'),
(199, '3836cec4860c0b0f98235e5c44ac7b54.jpg', 22, '2021-05-29 15:37:45'),
(200, '46f669f0f7a18bbb927005768a914e42.jpg', 22, '2021-05-29 15:37:45'),
(201, '36070174c4d385f1c528cbaf31150c41.jpg', 22, '2021-05-29 15:37:45'),
(202, '99c7fac4d8ab63e88ac68a6040a0dff1.jpg', 22, '2021-05-29 15:37:45'),
(203, 'd540bf447f6656f801cbd54bb687f935.jpg', 22, '2021-05-29 15:37:45'),
(204, 'a6a29918c57029855dd1b46e29286b72.jpg', 22, '2021-05-29 15:37:45'),
(205, '57e7d455b868ac8389dfedaf7c5645bc.jpg', 22, '2021-05-29 15:37:46'),
(206, 'dfcd463f4e00608f6a0bd08dbf2a1dd4.jpg', 22, '2021-05-29 15:37:46'),
(207, '7a0148d0def5e6d2160b72295251e050.jpg', 22, '2021-05-29 15:37:46'),
(208, '9ec5ad846c1719617e3972da452b1922.jpg', 22, '2021-05-29 15:37:46'),
(209, 'a01a3ff638e877bcea1fa15fa670061a.jpg', 22, '2021-05-29 15:37:46'),
(210, '87f33f6fa8344598caf4c0ac8e99d638.jpg', 22, '2021-05-29 15:37:46'),
(211, '8698755aca3f7153995bde84d3137049.jpg', 22, '2021-05-29 15:37:46'),
(212, '93d0c7f75bd908f8a6af5f31a2c64fe3.jpg', 22, '2021-05-29 15:37:46'),
(213, '7273e8a738ca005a30ea56c9759d37b9.jpg', 22, '2021-05-29 15:37:46'),
(214, 'b6b7e58be863111c6688e07593324c7f.jpg', 22, '2021-05-29 15:37:46'),
(215, 'dda33f711cc1d2e674aeeb681c218d30.jpg', 22, '2021-05-29 15:37:46'),
(216, 'bb22991823f7e8f66740100ac6d17012.jpg', 22, '2021-05-29 15:37:47'),
(217, 'e0032aaf637ea126e8dc6ac3cc0f18eb.jpg', 23, '2021-05-29 15:47:43'),
(218, '4ed1ec4874db12ae05815d6f6563a99d.jpg', 23, '2021-05-29 15:47:43'),
(219, '6d8d319ccf3528124655a58cd61bce30.jpg', 23, '2021-05-29 15:47:43'),
(220, '40eda076fe99b46704cfa82a669b8d4c.jpg', 23, '2021-05-29 15:47:43'),
(221, 'b7dcf282ba185673822fa296eb7b48f2.jpg', 23, '2021-05-29 15:47:43'),
(222, 'bc603f371f63b88a1bf42f27486062b0.jpg', 23, '2021-05-29 15:47:43'),
(223, '0da715078ef421a872e3be877af325dd.jpg', 23, '2021-05-29 15:47:43'),
(224, '4aa2e995c7c56fc373751c97934abcd0.jpg', 23, '2021-05-29 15:47:43'),
(225, '7eccc90c9c53e32f8c93aeb2f4f6e4de.jpg', 23, '2021-05-29 15:47:43'),
(226, '5747c6a0c08eb667b046dbc367d312ff.jpg', 23, '2021-05-29 15:47:43'),
(227, 'c9d2544f97f7ee3791762b360af39916.jpg', 23, '2021-05-29 15:47:43'),
(228, '8e2ea1c7f4d87c75cd745b41674002ac.jpg', 23, '2021-05-29 15:47:43'),
(229, '48e4545ad641b91e3b7554f940b38249.jpg', 23, '2021-05-29 15:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `income_bracket`
--

CREATE TABLE `income_bracket` (
  `id` int(10) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `income_bracket`
--

INSERT INTO `income_bracket` (`id`, `name`, `value`) VALUES
(1, '', 'Below 19,999'),
(2, '', '20,000 to 29,999'),
(3, '', '30,000 to 39,999'),
(4, '', '40,000 to 59,999'),
(5, '', '60,000 to 79,999'),
(6, '', '80,000 and above'),
(7, '', 'N/A'),
(8, '', '30,000 to 39,999'),
(9, '', '40,000 to 59,999'),
(10, '', '60,000 to 79,999'),
(11, '', '80,000 and above'),
(12, '', '20,000 to 29,999'),
(13, '', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `leads_id` int(10) NOT NULL,
  `fullname` longtext NOT NULL,
  `email` longtext NOT NULL,
  `subject` longtext NOT NULL,
  `message` longtext NOT NULL,
  `date_added` datetime NOT NULL,
  `gender` longtext NOT NULL,
  `birthday` longtext NOT NULL,
  `address` longtext NOT NULL,
  `employment_industry` longtext NOT NULL,
  `source_of_income` longtext NOT NULL,
  `employment_type` longtext NOT NULL,
  `lead_source` longtext NOT NULL,
  `income_bracket` longtext NOT NULL,
  `contact_number` longtext NOT NULL,
  `civil_status` longtext NOT NULL,
  `agent_id` int(11) NOT NULL,
  `leads_status` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`leads_id`, `fullname`, `email`, `subject`, `message`, `date_added`, `gender`, `birthday`, `address`, `employment_industry`, `source_of_income`, `employment_type`, `lead_source`, `income_bracket`, `contact_number`, `civil_status`, `agent_id`, `leads_status`) VALUES
(15, 'Sample', 'vitaminsprotien@gmail.com', '', '', '2022-02-19 11:29:00', 'Male', '2022-12-31', 'q9we4', '4', '1', '1', '1', '1', '09123456789', '1', 18, ''),
(16, 'James pogi', 'erwinatole12@gmai.com', '', '', '2022-02-27 10:08:02', 'Male', '1998-08-19', 'Goldenside soldiers 4', '4', '1', '1', '1', '1', '09271861676', '1', 18, ''),
(17, 'james ', 'erwinatole12@gmail.com', '', '', '2022-02-27 10:10:42', 'Male', '1998-08-19', 'Goldenside soldiers', '4', '1', '1', '1', '1', '09271861676', '1', 18, ''),
(18, 'Juan Dela Cruz', 'juan123@gmail.com', '', '', '0000-00-00 00:00:00', 'Male', '1997-02-04', 'Las Pinas City', '', '', '', '', '', '+639587941365', '', 0, ''),
(19, 'Juan Dela Cruz', 'juan123@yahoo.com', '', '', '2022-04-02 16:05:54', 'Male', '1997-02-04', 'Las Pinas City', '7', '1', '2', '12', '2', '09458744100', '1', 19, 'Tripping'),
(20, 'mia_suarez', 'mia_suarez@gamil.com', 'Inquire', 'Hi', '2022-04-05 13:33:23', '', '', '', '', '', '', '', '', '', '', 0, ''),
(21, 'Levi_ackerman', 'levi_ackerman@gmail.com', '', '', '2022-04-05 14:02:55', 'Male', '1998-08-19', 'Bacoor', '7', '1', '2', '16', '3', '09254548354', '1', 19, 'Attempted'),
(22, 'Doraemon God', 'doraemon@gmail.com', '', '', '0000-00-00 00:00:00', 'Male', '1997-06-17', 'bacoor', '', '', '', '', '', '+639925441524', '', 0, ''),
(23, 'Jobsmith', 'jobsmith@gmail.com', '', '', '2022-04-06 14:27:25', 'Male', '1998-09-18', 'mars', '7', '2', '2', '17', '4', '09212545545', '1', 19, 'Contacted'),
(24, 'ninaaucena', 'ninaucena26@gmail.com', '', '', '2022-04-07 10:45:05', 'Female', '1998-09-26', 'Paranaque', '13', '1', '2', '13', '3', '09274743854', '1', 18, 'Interested'),
(25, 'Maria Cortez', 'maria.cortez@gmail.com', '', '', '0000-00-00 00:00:00', 'Female', '1994-04-10', 'Cavite City', '', '', '', '', '', '+639991969565', '', 0, ''),
(26, 'Nins Aucena', 'ninsgonzales271@gmail.com', '', '', '0000-00-00 00:00:00', 'Female', '1998-09-26', 'Marcelo Green Parañaque City', '', '', '', '', '', '+639380588545', '', 0, ''),
(27, 'eren', 'eren@gmail.com', '', '', '2022-04-10 19:51:34', 'Male', '1997-08-19', 'bacoor', '6', '1', '2', '12', '10', '09231541214', '1', 18, 'Attempted'),
(28, 'BEL BARNESS', 'BELBARNESS@gmail.com', '', '', '2022-05-23 06:49:55', 'Female', '1982-08-19', 'Las Piñas City', '12', '1', '3', '5', '11', '-', '1', 19, 'Tripping'),
(29, 'BEL BARNESS', 'BELBARNESS@gmail.com', '', '', '2022-05-23 06:53:28', 'Female', '1980-06-25', 'Cavite ', '7', '1', '2', '5', '11', '-', '1', 19, 'Qualified'),
(30, 'zyrene macawile', 'zyrenemacawile@gmail.com', '', '', '2022-05-23 06:57:40', 'Female', '1979-07-26', 'Cavite', '10', '1', '2', '12', '9', '-', '1', 19, 'Closed'),
(31, 'james999', 'james999@gmail.com', 'Inquire', 'hi', '2022-05-23 08:43:37', '', '', '', '', '', '', '', '', '', '', 0, ''),
(32, 'Darlene San Jose', 'darlene.san.jose@gmail.com', '', '', '0000-00-00 00:00:00', 'Female', '1989-03-19', 'Moonwalk Village Las Pinas City', '', '', '', '', '', '+639189521445', '', 0, ''),
(33, 'Marcniel Agustin', 'vitaminsprotien@gmail.com', 'testing', 'hi', '2025-06-14 00:11:17', '', '', '', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `lead_source`
--

CREATE TABLE `lead_source` (
  `id` int(10) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lead_source`
--

INSERT INTO `lead_source` (`id`, `name`, `value`) VALUES
(1, '', 'Print ad'),
(2, '', 'Radio commercial'),
(3, '', 'Billboard as on a bus'),
(4, '', 'Your project near our present residence'),
(5, '', 'Internet Search'),
(6, '', 'TV Commercial'),
(7, '', 'I saw you project and just walked-in'),
(8, '', 'Some agents manning a tent or booth'),
(9, '', 'Through a friend'),
(10, '', 'Banner/Billboard'),
(11, '', 'Through a family member'),
(12, '', 'Sales Agent'),
(13, '', 'Flyers'),
(14, '', 'Word of Mouth'),
(15, '', 'Profriends Website'),
(16, '', 'Agent\'s Website'),
(17, '', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(7) NOT NULL,
  `message` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_to` int(11) NOT NULL DEFAULT 0,
  `user_type` int(11) NOT NULL,
  `time_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_plans`
--

CREATE TABLE `monthly_plans` (
  `plan_id` int(10) NOT NULL,
  `house_id` int(11) NOT NULL,
  `per_month` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `downpayment` decimal(10,2) NOT NULL,
  `type_of_entity` longtext NOT NULL,
  `downpayment_term` int(11) NOT NULL,
  `loanable_amount` decimal(10,2) NOT NULL,
  `reservation_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monthly_plans`
--

INSERT INTO `monthly_plans` (`plan_id`, `house_id`, `per_month`, `price`, `downpayment`, `type_of_entity`, `downpayment_term`, `loanable_amount`, `reservation_fee`) VALUES
(45, 11, 60, 34854.00, 225075.00, '', 0, 0.00, 0.00),
(46, 11, 120, 20325.00, 225075.00, '', 0, 0.00, 0.00),
(47, 11, 180, 17386.00, 225075.00, '', 0, 0.00, 0.00),
(48, 11, 240, 15501.00, 225075.00, '', 0, 0.00, 0.00),
(67, 12, 60, 40757.16, 264725.00, '', 0, 0.00, 0.00),
(68, 12, 120, 25197.99, 264725.00, '', 0, 0.00, 0.00),
(69, 12, 180, 20342.39, 264725.00, '', 0, 0.00, 0.00),
(70, 12, 240, 18139.69, 264725.00, '', 0, 0.00, 0.00),
(76, 13, 60, 90385.57, 589725.00, '', 0, 0.00, 0.00),
(77, 13, 120, 55853.52, 589725.00, '', 0, 0.00, 0.00),
(78, 13, 180, 45077.01, 589725.00, '', 0, 0.00, 0.00),
(79, 13, 240, 40188.33, 589725.00, '', 0, 0.00, 0.00),
(80, 14, 60, 38225.58, 247475.00, '', 0, 0.00, 0.00),
(81, 14, 120, 23643.37, 247475.00, '', 0, 0.00, 0.00),
(82, 14, 180, 19092.66, 247475.00, '', 0, 0.00, 0.00),
(83, 14, 240, 17028.27, 247475.00, '', 0, 0.00, 0.00),
(84, 17, 60, 29764.00, 190612.00, '', 0, 0.00, 0.00),
(85, 17, 120, 18402.00, 190612.00, '', 0, 0.00, 0.00),
(86, 17, 180, 14856.00, 190612.00, '', 0, 0.00, 0.00),
(87, 17, 240, 13248.00, 190612.00, '', 0, 0.00, 0.00),
(88, 18, 15, 16262.00, 243937.00, '', 0, 0.00, 0.00),
(89, 18, 60, 37704.00, 243937.00, '', 0, 0.00, 0.00),
(90, 18, 120, 23323.00, 243937.00, '', 0, 0.00, 0.00),
(91, 18, 180, 18834.00, 243937.00, '', 0, 0.00, 0.00),
(92, 18, 240, 16798.00, 243937.00, '', 0, 0.00, 0.00),
(96, 19, 12, 59216.42, 720597.00, '', 0, 0.00, 0.00),
(97, 19, 240, 9351.52, 720597.00, '', 0, 0.00, 0.00),
(98, 19, 300, 8439.43, 720597.00, '', 0, 0.00, 0.00),
(99, 19, 360, 7877.50, 720597.00, '', 0, 0.00, 0.00),
(100, 15, 60, 120227.75, 590862.00, '', 0, 0.00, 0.00),
(101, 15, 120, 74290.27, 590862.00, '', 0, 0.00, 0.00),
(102, 15, 180, 59954.43, 590862.00, '', 0, 0.00, 0.00),
(103, 15, 240, 53451.09, 590862.00, '', 0, 0.00, 0.00),
(104, 16, 60, 131319.00, 648934.00, '', 0, 0.00, 0.00),
(105, 16, 120, 81152.00, 648934.00, '', 0, 0.00, 0.00),
(106, 16, 180, 65497.00, 648934.00, '', 0, 0.00, 0.00),
(107, 16, 240, 58395.00, 648934.00, '', 0, 0.00, 0.00),
(108, 23, 360, 8558.00, 0.00, '', 0, 0.00, 0.00),
(119, 20, 0, 0.00, 123456.00, '1472000', 675788, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_title` longtext NOT NULL,
  `news_subtitle` longtext NOT NULL,
  `news_image` longtext NOT NULL,
  `news_author` longtext NOT NULL,
  `news_date` longtext NOT NULL,
  `news_category` longtext NOT NULL,
  `news_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_subtitle`, `news_image`, `news_author`, `news_date`, `news_category`, `news_description`) VALUES
(1, 'Sangley Point International Airport', 'tagalog', '054f9afa2ee5b335ea1766603762365f.jpg', 'Jonvic', '2020-01-12', 'New', '<p><span class=\"fr-video fr-deletable fr-fvc fr-dvb fr-draggable\" contenteditable=\"false\" draggable=\"true\"><iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/ssXao1Yo3mU?&wmode=opaque\" frameborder=\"0\" allowfullscreen=\"\" class=\"fr-draggable\"></iframe></span><br></p><p data-f-id=\"pbf\" style=\"text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;\">Powered by <a href=\"https://www.froala.com/wysiwyg-editor?pb=1\" title=\"Froala Editor\">Froala Editor</a></p>'),
(2, 'maganda buhay', 'tagalog', 'eb19a7b56bca6545ec4b26faa31d77ff.jpg', 'Jonvic', '2020-01-12', 'congrats', '<p><a href=\"https://www.youtube.com/watch?v=ssXao1Yo3mU\" rel=\"noopener noreferrer\" target=\"_blank\">Gov.</a> pogi<img src=\"http://warren.cvsu-b-website.webstarterz.com/Upload_only/3f8f4445b4875dd5c4b14433e6601eaa.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\" data-filepath=\"./Upload_only/\" data-filename=\"3f8f4445b4875dd5c4b14433e6601eaa.jpg\"></p><p data-f-id=\"pbf\" style=\"text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;\">Powered by <a href=\"https://www.froala.com/wysiwyg-editor?pb=1\" title=\"Froala Editor\">Froala Editor</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `curr_price` decimal(10,2) NOT NULL,
  `date_added_agent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `user_id`, `agent_id`, `house_id`, `curr_price`, `date_added_agent`) VALUES
(4, 2, 19, 16, 6889340.00, '2022-01-22 15:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `sales_plan`
--

CREATE TABLE `sales_plan` (
  `id` int(10) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `is_payed` int(11) NOT NULL,
  `date_payed` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales_plan`
--

INSERT INTO `sales_plan` (`id`, `plan_id`, `sales_id`, `price`, `is_payed`, `date_payed`, `user_id`, `house_id`) VALUES
(1, 16, 4, 131319, 1, '2022-01-22 15:23:45', 2, 16),
(2, 16, 4, 131319, 1, '2022-01-22 15:27:08', 2, 16),
(3, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(4, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(5, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(6, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(7, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(8, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(9, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(10, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(11, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(12, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(13, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(14, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(15, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(16, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(17, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(18, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(19, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(20, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(21, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(22, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(23, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(24, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(25, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(26, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(27, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(28, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(29, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(30, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(31, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(32, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(33, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(34, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(35, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(36, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(37, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(38, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(39, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(40, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(41, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(42, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(43, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(44, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(45, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(46, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(47, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(48, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(49, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(50, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(51, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(52, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(53, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(54, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(55, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(56, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(57, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(58, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(59, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16),
(60, 16, 4, 131319, 0, '0000-00-00 00:00:00', 2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `source_of_income`
--

CREATE TABLE `source_of_income` (
  `id` int(10) NOT NULL,
  `name` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `source_of_income`
--

INSERT INTO `source_of_income` (`id`, `name`, `value`) VALUES
(1, '', 'EMPLOYMENT'),
(2, '', 'BUSINESS'),
(3, '', 'INHERITANCE'),
(4, '', 'REMITTANCE'),
(5, '', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `subdivision`
--

CREATE TABLE `subdivision` (
  `sub_id` int(10) NOT NULL,
  `sub_name` longtext NOT NULL,
  `sub_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `subdivision`
--

INSERT INTO `subdivision` (`sub_id`, `sub_name`, `sub_date`) VALUES
(12, 'Pagsibol Village', '2020-12-29 16:33:51'),
(13, 'Lancaster New City', '2020-12-29 16:34:39'),
(14, 'Micara Estates', '2020-12-29 16:35:01'),
(15, 'The Palm Residences', '2020-12-29 16:35:42'),
(20, 'Westdale Villas', '2021-05-29 22:57:18'),
(21, 'Metroville', '2021-05-29 22:57:42'),
(23, 'Anyana', '2021-05-29 23:27:51'),
(24, 'The Woodland', '2022-04-07 14:31:29'),
(26, 'Jun', '2022-04-07 17:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `sub_description`
--

CREATE TABLE `sub_description` (
  `desc_id` int(10) NOT NULL,
  `house_id` int(10) NOT NULL,
  `description_write` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_image`
--

CREATE TABLE `sub_image` (
  `image_id` int(10) NOT NULL,
  `house_id` int(10) NOT NULL,
  `house_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fname` longtext NOT NULL,
  `mname` longtext NOT NULL,
  `lname` longtext NOT NULL,
  `contact_number` longtext NOT NULL,
  `email` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `birthdate` longtext NOT NULL,
  `address` longtext NOT NULL,
  `password` longtext NOT NULL,
  `googleauth` longtext NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `mname`, `lname`, `contact_number`, `email`, `gender`, `birthdate`, `address`, `password`, `googleauth`, `date_added`, `date_updated`) VALUES
(2, 'james', 'warren', 'Garcia', '271861676', 'james@yahoo.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'randy', '', 'monteza', '927186167', 'randy@gmail.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'warren', '', 'garcia', '927186167', 'vitaminsprotien@gmail.com', '', '', '', 'P@s$w0rd123!', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'mikaela', 'gellido', 'capellan', '513192949', 'mikaelacapellan09@gmail.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Steff', '', 'Agustin', '098765875', 'asd@gmail.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'ernest', 'nicdao', 'celestino', '065153971', 'ernestsiegfrid@yahoo.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Janice', '', 'Corpuz', '192938123', 'kdkdkf@yahoo.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'james cute', '', 'Garcia pogi', '927186167', 'kansnsjsb@yahoo.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Nina', 'Gonzales', 'Aucena', '938058854', 'ninaucena26@gmail.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Angel', '', 'Ramos', '275164785', 'angelramos13@yahoo.com', '', '', '', 'Angel13', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Raymon', 'Amaro', 'Pamplona', '092338119', 'hshs@gmail.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Raymon', 'Amaro', 'pamplona', '923381197', 'raymon@gmail.com', '', '', '', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'test', 'asd', 'asd', '091234567', 'test@gmail.com', '', '', '', 'JaMeS123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Mary', '', 'Camia', '999157875', 'marycamia@gmail.com', '', '', '', 'Mary123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '21312', '3123123', '12312', '123123123', '123123@yahoo.com', '', '', '', 'qweqweAbc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Juan', '', 'Dela Cruz', '587941365', 'juan123@gmail.com', 'Male', '1997-02-04', 'Las Pinas City', 'Juan123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Doraemon', 'D', 'God', '925441524', 'doraemon@gmail.com', 'Male', '1997-06-17', 'bacoor', 'Abc123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Maria', '', 'Cortez', '991969565', 'maria.cortez@gmail.com', 'Female', '1994-04-10', 'Cavite City', 'Maria1994', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Nins', 'G.', 'Aucena', '380588545', 'ninsgonzales271@gmail.com', 'Female', '1998-09-26', 'Marcelo Green Parañaque City', 'Nina2698', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Darlene', '', 'San Jose', '189521445', 'darlene.san.jose@gmail.com', 'Female', '1989-03-19', 'Moonwalk Village Las Pinas City', 'Darlene123456', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_employee`
--

CREATE TABLE `users_employee` (
  `emp_id` int(10) NOT NULL,
  `fname` longtext NOT NULL,
  `mname` longtext NOT NULL,
  `lname` longtext NOT NULL,
  `contact_number` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `googleauth` longtext NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `image` longtext NOT NULL,
  `emp_type` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_employee`
--

INSERT INTO `users_employee` (`emp_id`, `fname`, `mname`, `lname`, `contact_number`, `email`, `password`, `googleauth`, `date_added`, `date_updated`, `image`, `emp_type`) VALUES
(15, 'Elizer', 'A.', 'Soriano', '09263574104', 'Elizer.achivers@gmail.com', 'Abc123456', '', '2021-05-28 23:24:21', '2021-05-28 23:48:49', 'a0ec3b3995fe7bd60817eea55d5182c2.png', ''),
(16, 'Stephanie ', 'R.', 'Francisco', '09125435658', 'stephanieframcisco@gmail.com', 'Abc123456', '', '2021-05-28 23:44:59', '2021-05-28 23:46:18', 'fbe8d1ecaf61bf6d13f9fc0211883797.jpg', ''),
(17, 'Ernest ', 'Siegfrid ', 'Celestino', '09102542646', 'ErnestCelestino@gmail.com', 'Abc123456', '', '2021-05-28 23:50:42', '2021-05-28 23:51:51', '4f9fb52342310e301d235b1f470123a7.jpg', ''),
(18, 'James Warren', '', 'Garcia', '09271861676', 'erwinatole12@gmail.com', 'Abc123456', '', '2021-05-28 23:53:45', '2022-04-10 19:23:57', 'a287c2e99f0c27abe71eb96966c7e4e9.jpg', 'Sale Manager'),
(19, 'Janice Irene', '', 'Corpuz', '09215482154', 'janice@gmail.com', 'Abc123456', '', '2021-05-28 23:56:32', '2021-05-30 00:47:37', 'cb6e65042831eaa2e51dafc8459db115.jpg', ''),
(20, 'Janice Irene', '', 'Corpuz', '09124567890', 'vitaminsprotien@gmail.com', 'P@s$w0rd', '', '2022-01-24 20:47:03', '0000-00-00 00:00:00', '', ''),
(21, 'raymon ', 'amaro', 'pamplona', '09233811974', 'raymon@gmail.com', 'Abc123456', '', '2022-05-23 08:55:32', '0000-00-00 00:00:00', '', 'Marketing Officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `civil_status`
--
ALTER TABLE `civil_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_agent`
--
ALTER TABLE `current_agent`
  ADD PRIMARY KEY (`curr_agent_id`);

--
-- Indexes for table `employment_industry`
--
ALTER TABLE `employment_industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_type`
--
ALTER TABLE `employment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_management`
--
ALTER TABLE `file_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `image_file`
--
ALTER TABLE `image_file`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `income_bracket`
--
ALTER TABLE `income_bracket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`leads_id`);

--
-- Indexes for table `lead_source`
--
ALTER TABLE `lead_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_plans`
--
ALTER TABLE `monthly_plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_plan`
--
ALTER TABLE `sales_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_of_income`
--
ALTER TABLE `source_of_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdivision`
--
ALTER TABLE `subdivision`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `sub_description`
--
ALTER TABLE `sub_description`
  ADD PRIMARY KEY (`desc_id`);

--
-- Indexes for table `sub_image`
--
ALTER TABLE `sub_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_employee`
--
ALTER TABLE `users_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `civil_status`
--
ALTER TABLE `civil_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `current_agent`
--
ALTER TABLE `current_agent`
  MODIFY `curr_agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employment_industry`
--
ALTER TABLE `employment_industry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employment_type`
--
ALTER TABLE `employment_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `file_management`
--
ALTER TABLE `file_management`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `image_file`
--
ALTER TABLE `image_file`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `income_bracket`
--
ALTER TABLE `income_bracket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `leads_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lead_source`
--
ALTER TABLE `lead_source`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `monthly_plans`
--
ALTER TABLE `monthly_plans`
  MODIFY `plan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_plan`
--
ALTER TABLE `sales_plan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `source_of_income`
--
ALTER TABLE `source_of_income`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subdivision`
--
ALTER TABLE `subdivision`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sub_description`
--
ALTER TABLE `sub_description`
  MODIFY `desc_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_image`
--
ALTER TABLE `sub_image`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_employee`
--
ALTER TABLE `users_employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
