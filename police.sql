-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 06:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `placeofaccident` varchar(100) NOT NULL,
  `latitude` varchar(8) NOT NULL,
  `longitude` varchar(8) NOT NULL,
  `ipc` varchar(10) NOT NULL,
  `ioth1` varchar(20) NOT NULL,
  `natureofaccident` varchar(50) NOT NULL,
  `ioth2` varchar(50) NOT NULL,
  `accidentdate` date NOT NULL,
  `accidenttime` time NOT NULL,
  `numberofvehiclesinvolved` int(10) NOT NULL,
  `vehicle1` varchar(30) NOT NULL,
  `vehicle2` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `collisiontype` varchar(50) NOT NULL,
  `coth` varchar(50) NOT NULL,
  `junctiontype` varchar(50) NOT NULL,
  `joth` varchar(50) NOT NULL,
  `junctioncontrol` varchar(50) NOT NULL,
  `jcoth` varchar(50) NOT NULL,
  `roadcategory` varchar(50) NOT NULL,
  `roth` varchar(50) NOT NULL,
  `roadnarrowing` varchar(50) NOT NULL,
  `rnoth` varchar(50) NOT NULL,
  `lightconditions` varchar(50) NOT NULL,
  `loth` varchar(50) NOT NULL,
  `climate` varchar(50) NOT NULL,
  `cloth` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`zone`, `dis`, `rto`, `unit`, `psta`, `cno`, `placeofaccident`, `latitude`, `longitude`, `ipc`, `ioth1`, `natureofaccident`, `ioth2`, `accidentdate`, `accidenttime`, `numberofvehiclesinvolved`, `vehicle1`, `vehicle2`, `image`, `collisiontype`, `coth`, `junctiontype`, `joth`, `junctioncontrol`, `jcoth`, `roadcategory`, `roth`, `roadnarrowing`, `rnoth`, `lightconditions`, `loth`, `climate`, `cloth`, `status`) VALUES
('coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', 'kovilpalayam', '456/16', 'chgfder', '764657', '657', '279,337', '', 'Mi', '', '2018-03-02', '13:59:00', 2, 'A', 'aa', 'Beating Google,.doc', '', '', '', '', '', '', '', '', '', '', '', '', 'climate', '', 'Approved From Policestation'),
('coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', 'kovilpalayam', '567/18', 'sdfs', '23121', '21321', '304A', '', 'Grievous', '', '2018-12-31', '12:59:00', 2, '12345678', '67891234', '82743-200.png', 'Hit from Side', '', 'Y Bend', '', 'Police Officer', '', 'Express Highway', '', 'None', '', 'Daylight', '', 'Very Hot', '', 'Approved From Policestation');

-- --------------------------------------------------------

--
-- Table structure for table `basiccopy`
--

CREATE TABLE `basiccopy` (
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `placeofaccident` varchar(100) NOT NULL,
  `latitude` varchar(8) NOT NULL,
  `longitude` varchar(8) NOT NULL,
  `ipc` varchar(10) NOT NULL,
  `ioth1` varchar(20) NOT NULL,
  `natureofaccident` varchar(50) NOT NULL,
  `ioth2` varchar(50) NOT NULL,
  `accidentdate` date NOT NULL,
  `accidenttime` time NOT NULL,
  `numberofvehiclesinvolved` int(10) NOT NULL,
  `vehicle1` varchar(30) NOT NULL,
  `vehicle2` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `collisiontype` varchar(50) NOT NULL,
  `coth` varchar(50) NOT NULL,
  `junctiontype` varchar(50) NOT NULL,
  `joth` varchar(50) NOT NULL,
  `junctioncontrol` varchar(50) NOT NULL,
  `jcoth` varchar(50) NOT NULL,
  `roadcategory` varchar(50) NOT NULL,
  `roth` varchar(50) NOT NULL,
  `roadnarrowing` varchar(50) NOT NULL,
  `rnoth` varchar(50) NOT NULL,
  `lightconditions` varchar(50) NOT NULL,
  `loth` varchar(50) NOT NULL,
  `climate` varchar(50) NOT NULL,
  `cloth` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courtlogin`
--

CREATE TABLE `courtlogin` (
  `id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courtlogin`
--

INSERT INTO `courtlogin` (`id`, `password`, `confirmpassword`, `zone`, `dis`, `rto`, `unit`, `email`, `psta`) VALUES
('law1', '123', '123', 'coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', 'cbe001@gmail.com', 'kovilpalayam'),
('law2', '123', '123', 'coimbatore', 'coimbatore', 'coimbatore', 'thudiyalur', 'cbe002@gmail.com', 'saravanampatti');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cno` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `rto` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `psta` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `who` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `relation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cno`, `zone`, `district`, `rto`, `unit`, `psta`, `comment`, `who`, `contact`, `relation`) VALUES
('456/16', 'coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', 'kovilpalayam', 'fc', 'sd', 'sd', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `fatal1`
--

CREATE TABLE `fatal1` (
  `cno` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `imale` int(5) NOT NULL,
  `ifemale` int(5) NOT NULL,
  `ichildren` int(5) NOT NULL,
  `itotal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fatal1`
--

INSERT INTO `fatal1` (`cno`, `regno`, `male`, `female`, `children`, `total`, `imale`, `ifemale`, `ichildren`, `itotal`) VALUES
(123, 0, 1, 0, 0, 0, 1, 0, 0, 0),
(456, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(567, 12345678, 3, 0, 0, 0, 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fatal2`
--

CREATE TABLE `fatal2` (
  `cno` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `imale` int(5) NOT NULL,
  `ifemale` int(5) NOT NULL,
  `ichildren` int(5) NOT NULL,
  `itotal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fatal2`
--

INSERT INTO `fatal2` (`cno`, `regno`, `male`, `female`, `children`, `total`, `imale`, `ifemale`, `ichildren`, `itotal`) VALUES
(123, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(456, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(567, 67891234, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ic`
--

CREATE TABLE `ic` (
  `id` int(11) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `placeofaccident` varchar(100) NOT NULL,
  `latitude` varchar(8) NOT NULL,
  `longitude` varchar(8) NOT NULL,
  `ipc` varchar(10) NOT NULL,
  `ioth1` varchar(20) NOT NULL,
  `natureofaccident` varchar(50) NOT NULL,
  `ioth2` varchar(50) NOT NULL,
  `accidentdate` date NOT NULL,
  `accidenttime` time NOT NULL,
  `numberofvehiclesinvolved` int(10) NOT NULL,
  `vehicle1` varchar(30) NOT NULL,
  `vehicle2` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `collisiontype` varchar(50) NOT NULL,
  `coth` varchar(50) NOT NULL,
  `junctiontype` varchar(50) NOT NULL,
  `joth` varchar(50) NOT NULL,
  `junctioncontrol` varchar(50) NOT NULL,
  `jcoth` varchar(50) NOT NULL,
  `roadcategory` varchar(50) NOT NULL,
  `roth` varchar(50) NOT NULL,
  `roadnarrowing` varchar(50) NOT NULL,
  `rnoth` varchar(50) NOT NULL,
  `lightconditions` varchar(50) NOT NULL,
  `loth` varchar(50) NOT NULL,
  `climate` varchar(50) NOT NULL,
  `cloth` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `la` varchar(20) NOT NULL,
  `approval` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic`
--

INSERT INTO `ic` (`id`, `zone`, `dis`, `rto`, `unit`, `psta`, `cno`, `placeofaccident`, `latitude`, `longitude`, `ipc`, `ioth1`, `natureofaccident`, `ioth2`, `accidentdate`, `accidenttime`, `numberofvehiclesinvolved`, `vehicle1`, `vehicle2`, `image`, `collisiontype`, `coth`, `junctiontype`, `joth`, `junctioncontrol`, `jcoth`, `roadcategory`, `roth`, `roadnarrowing`, `rnoth`, `lightconditions`, `loth`, `climate`, `cloth`, `status`, `la`, `approval`, `comment`) VALUES
(0, 'coimbatore', 'coimbatore', 'coimbatore north', '', 'kovilpalayam', '567/18', 'sdfs', '', '', '304A', '', 'Grievous', '', '2018-12-31', '12:59:00', 2, '', '', '', 'Hit from Side', '', 'Y Bend', '', 'Police Officer', '', 'Express Highway', '', 'None', '', 'Daylight', '', 'Very Hot', '', 'Approved From Policestation', 'Obama', 'Approved', 'fine');

-- --------------------------------------------------------

--
-- Table structure for table `ilaw`
--

CREATE TABLE `ilaw` (
  `id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilaw`
--

INSERT INTO `ilaw` (`id`, `password`, `confirmpassword`, `zone`, `dis`, `rto`, `unit`, `email`, `psta`) VALUES
('law2', '123', '123', 'coimbatore', 'coimbatore', 'coimbatore', 'thudiyalur', 'cbe002@gmail.com', 'saravanampatti'),
('obama', '123', '123', 'coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', 'cbe001@gmail.com', 'kovilpalayam');

-- --------------------------------------------------------

--
-- Table structure for table `inlogin`
--

CREATE TABLE `inlogin` (
  `id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inlogin`
--

INSERT INTO `inlogin` (`id`, `password`, `confirmpassword`, `zone`, `dis`, `rto`, `unit`, `email`, `psta`) VALUES
('car', '123', '123', 'unitedindia', 'coimbatore', 'coimbatore', 'thudiyalur', 'cbe002@gmail.com', 'saravanampatti'),
('life', '123', '123', 'reliance', 'coimbatore', 'coimbatore north', 'thudiyalur', 'cbe001@gmail.com', 'kovilpalayam');

-- --------------------------------------------------------

--
-- Table structure for table `lbasic`
--

CREATE TABLE `lbasic` (
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `placeofaccident` varchar(100) NOT NULL,
  `ipc` varchar(10) NOT NULL,
  `natureofaccident` varchar(50) NOT NULL,
  `accidentdate` date NOT NULL,
  `accidenttime` time NOT NULL,
  `numberofvehiclesinvolved` int(10) NOT NULL,
  `collisiontype` varchar(50) NOT NULL,
  `junctiontype` varchar(50) NOT NULL,
  `junctioncontrol` varchar(50) NOT NULL,
  `roadcategory` varchar(50) NOT NULL,
  `roadnarrowing` varchar(50) NOT NULL,
  `lightconditions` varchar(50) NOT NULL,
  `climate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `la` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lbasic`
--

INSERT INTO `lbasic` (`zone`, `dis`, `rto`, `unit`, `psta`, `cno`, `placeofaccident`, `ipc`, `natureofaccident`, `accidentdate`, `accidenttime`, `numberofvehiclesinvolved`, `collisiontype`, `junctiontype`, `junctioncontrol`, `roadcategory`, `roadnarrowing`, `lightconditions`, `climate`, `status`, `la`) VALUES
('coimbatore', 'coimbatore', 'coimbatore north', '', 'kovilpalayam', '456/16', 'bh', '279,337', 'Minor H', '2018-03-02', '13:59:00', 2, '', '', '', '', '', '', 'climate', 'Approved From Policestation', 'Obama'),
('coimbatore', 'coimbatore', 'coimbatore north', '', 'kovilpalayam', '567/18', 'sdfs', '304A', 'Grievous', '2018-12-31', '12:59:00', 2, 'Hit from Side', 'Y Bend', 'Police Officer', 'Express Highway', 'None', 'Daylight', 'Very Hot', 'Approved From Policestation', 'Obama');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `dis` varchar(20) NOT NULL,
  `rto` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `psta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `confirmpassword`, `zone`, `dis`, `rto`, `unit`, `email`, `psta`) VALUES
(641001, 'kovai', 'kovai', 'coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', 'cbe001@gmail.com', 'kovilpalayam'),
(641002, 'covai', 'covai', 'coimbatore', 'coimbatore', 'coimbatore', 'thudiyalur', 'cbe002@gmail.com', 'saravanampatti');

-- --------------------------------------------------------

--
-- Table structure for table `rto`
--

CREATE TABLE `rto` (
  `zone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `rto` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `policestation` varchar(50) NOT NULL,
  `requestform` varchar(50) NOT NULL,
  `dateofrequest` date NOT NULL,
  `timeofrequest` time(6) NOT NULL,
  `inspectiondate` date NOT NULL,
  `inspectiontime` time(6) NOT NULL,
  `inspectionplace` varchar(50) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  `gpf` varchar(50) NOT NULL,
  `noofvehicleinvolved` varchar(50) NOT NULL,
  `regno1` varchar(18) NOT NULL,
  `regno2` varchar(18) NOT NULL,
  `natureofaccident` varchar(50) NOT NULL,
  `causeofaccident` varchar(50) NOT NULL,
  `remedies` varchar(50) NOT NULL,
  `concerneddept` varchar(50) NOT NULL,
  `administrativeoffc` varchar(50) NOT NULL,
  `appxcost` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rto`
--

INSERT INTO `rto` (`zone`, `district`, `rto`, `unit`, `cno`, `policestation`, `requestform`, `dateofrequest`, `timeofrequest`, `inspectiondate`, `inspectiontime`, `inspectionplace`, `submittedby`, `gpf`, `noofvehicleinvolved`, `regno1`, `regno2`, `natureofaccident`, `causeofaccident`, `remedies`, `concerneddept`, `administrativeoffc`, `appxcost`, `status`) VALUES
('coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', '456/16', 'kovilpalayam', 'Sub Inspector', '2018-03-22', '12:59:00.000000', '2018-03-16', '12:59:00.000000', 'Spot', 's', 's', '2', 'A', 'aa', 'w', 'w', 'w', 'w', 'w', 'w', 'Approved from RTO'),
('coimbatore', 'coimbatore', 'coimbatore north', 'thudiyalur', '567/18', 'kovilpalayam', 'Deputy Superintendent of Police', '2018-03-17', '13:59:00.000000', '2018-03-15', '01:00:00.000000', 'Spot', 'efsdf', '3435', '2', '', '67891234', 'a', 'a', 'a', 'a', 'a', 'a', 'Approved from RTO');

-- --------------------------------------------------------

--
-- Table structure for table `rtocopy`
--

CREATE TABLE `rtocopy` (
  `zone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `rto` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `policestation` varchar(50) NOT NULL,
  `requestform` varchar(50) NOT NULL,
  `dateofrequest` date NOT NULL,
  `timeofrequest` time(6) NOT NULL,
  `inspectiondate` date NOT NULL,
  `inspectiontime` time(6) NOT NULL,
  `inspectionplace` varchar(50) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  `gpf` varchar(50) NOT NULL,
  `noofvehicleinvolved` varchar(50) NOT NULL,
  `regno1` varchar(18) NOT NULL,
  `regno2` varchar(18) NOT NULL,
  `natureofaccident` varchar(50) NOT NULL,
  `causeofaccident` varchar(50) NOT NULL,
  `remedies` varchar(50) NOT NULL,
  `concerneddept` varchar(50) NOT NULL,
  `administrativeoffc` varchar(50) NOT NULL,
  `appxcost` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rtologin`
--

CREATE TABLE `rtologin` (
  `id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  `dis` varchar(30) NOT NULL,
  `rto` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtologin`
--

INSERT INTO `rtologin` (`id`, `password`, `confirmpassword`, `zone`, `dis`, `rto`, `unit`, `email`) VALUES
('641001', 'thudiyalur', 'thudiyalur', 'cbe ', 'cbe', 'cbe north', 'thudiyalur', 'cbenorth@gmail.com'),
('641002', 'peelamedu', 'peelamedu', 'cbe', 'cbe', 'cbe', 'peelamedu', 'cbepeelamedu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rtov1`
--

CREATE TABLE `rtov1` (
  `cno` varchar(50) NOT NULL,
  `regno1` varchar(50) NOT NULL,
  `vh` int(5) NOT NULL,
  `roadtestcarried` varchar(50) NOT NULL,
  `efficiencyoffootbrake1` varchar(50) NOT NULL,
  `efficiencyofhandbrake1` varchar(50) NOT NULL,
  `evenornot1` varchar(50) NOT NULL,
  `steering1` varchar(50) NOT NULL,
  `conditionoftyres` varchar(50) NOT NULL,
  `descriptionofdefects` varchar(50) NOT NULL,
  `frontreflectortape` varchar(50) NOT NULL,
  `rearreflectortape` varchar(50) NOT NULL,
  `opinion` varchar(50) NOT NULL,
  `checkbox` varchar(50) NOT NULL,
  `wantoffluids` varchar(50) NOT NULL,
  `leakageofdefects` varchar(50) NOT NULL,
  `lackoflubrication1` varchar(50) NOT NULL,
  `slacknessinadjustment1` varchar(50) NOT NULL,
  `wornoutparts1` varchar(50) NOT NULL,
  `lackoflubrication2` varchar(50) NOT NULL,
  `slacknessinadjustment2` varchar(50) NOT NULL,
  `wornoutparts2` varchar(50) NOT NULL,
  `skidmark` varchar(50) NOT NULL,
  `descriptionofdamage` varchar(50) NOT NULL,
  `checkreport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtov1`
--

INSERT INTO `rtov1` (`cno`, `regno1`, `vh`, `roadtestcarried`, `efficiencyoffootbrake1`, `efficiencyofhandbrake1`, `evenornot1`, `steering1`, `conditionoftyres`, `descriptionofdefects`, `frontreflectortape`, `rearreflectortape`, `opinion`, `checkbox`, `wantoffluids`, `leakageofdefects`, `lackoflubrication1`, `slacknessinadjustment1`, `wornoutparts1`, `lackoflubrication2`, `slacknessinadjustment2`, `wornoutparts2`, `skidmark`, `descriptionofdamage`, `checkreport`) VALUES
('567/18', '12345678', 0, 'No', 'fg', 'ff', 'df', 'ff', 'Good Condition', '', 'Yes', 'Yes', 'Not Due to Mechanical Defect', 'At the time of inspection there was no mechanical ', '', '', '', '', '', '', '', '', 'dfsd', 'sdfsd', 'dsfsd'),
('456/16', 'A', 1, '', 'ggg', '', '', '', '', 'descriptionofdefects', '', '', '', 'At the time of inspection there was no mechanical ', '', '', '', '', '', '', '', '', '', '', ''),
('456/16', 'aa', 2, '', 'vvvv', '', '', '', '', 'descriptionofdefects', '', '', '', 'At the time of inspection there was no mechanical ', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rtov1copy`
--

CREATE TABLE `rtov1copy` (
  `cno` varchar(50) NOT NULL,
  `regno1` varchar(50) NOT NULL,
  `vh` int(5) NOT NULL,
  `roadtestcarried` varchar(50) NOT NULL,
  `efficiencyoffootbrake1` varchar(50) NOT NULL,
  `efficiencyofhandbrake1` varchar(50) NOT NULL,
  `evenornot1` varchar(50) NOT NULL,
  `steering1` varchar(50) NOT NULL,
  `conditionoftyres` varchar(50) NOT NULL,
  `descriptionofdefects` varchar(50) NOT NULL,
  `frontreflectortape` varchar(50) NOT NULL,
  `rearreflectortape` varchar(50) NOT NULL,
  `opinion` varchar(50) NOT NULL,
  `checkbox` varchar(50) NOT NULL,
  `wantoffluids` varchar(50) NOT NULL,
  `leakageofdefects` varchar(50) NOT NULL,
  `lackoflubrication1` varchar(50) NOT NULL,
  `slacknessinadjustment1` varchar(50) NOT NULL,
  `wornoutparts1` varchar(50) NOT NULL,
  `lackoflubrication2` varchar(50) NOT NULL,
  `slacknessinadjustment2` varchar(50) NOT NULL,
  `wornoutparts2` varchar(50) NOT NULL,
  `skidmark` varchar(50) NOT NULL,
  `descriptionofdamage` varchar(50) NOT NULL,
  `checkreport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle1`
--

CREATE TABLE `vehicle1` (
  `cno` varchar(15) NOT NULL,
  `vh` int(5) NOT NULL,
  `regno1` varchar(18) NOT NULL,
  `rcproduced` varchar(10) NOT NULL,
  `make` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `vehicleowner` varchar(20) NOT NULL,
  `owneraddress` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `cloth1` varchar(50) NOT NULL,
  `transportvehicletype` varchar(50) NOT NULL,
  `toth` varchar(100) NOT NULL,
  `stagecarrier` varchar(100) NOT NULL,
  `mofussil` varchar(100) NOT NULL,
  `towntype` varchar(100) NOT NULL,
  `permitvalidity` date NOT NULL,
  `fitnesscertificateissueddate` date NOT NULL,
  `fitnesscertificatevalidity` date NOT NULL,
  `pollutioncertificatevalidity` date NOT NULL,
  `nontransport` varchar(50) NOT NULL,
  `ntoth` varchar(50) NOT NULL,
  `rcvalidity` date NOT NULL,
  `pollutioncertificatevalid` date NOT NULL,
  `insuranceavailability` varchar(50) NOT NULL,
  `insurancevalidity` date NOT NULL,
  `insurancecompanydetail` varchar(500) NOT NULL,
  `policynumber` varchar(30) NOT NULL,
  `manoeuvre` varchar(50) NOT NULL,
  `moth1` varchar(50) NOT NULL,
  `vehicledamagelevel` varchar(50) NOT NULL,
  `vdoth` varchar(50) NOT NULL,
  `tradeplateavailability` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `drivername` text NOT NULL,
  `driveraddress` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `age` int(5) NOT NULL,
  `driverinjury` varchar(200) NOT NULL,
  `dinoth1` varchar(100) NOT NULL,
  `drivererror` varchar(100) NOT NULL,
  `deoth1` varchar(100) NOT NULL,
  `licensedetails` varchar(100) NOT NULL,
  `licensenumber` varchar(100) NOT NULL,
  `classofvehicle` varchar(100) NOT NULL,
  `lcloth1` varchar(100) NOT NULL,
  `badgenumber` varchar(100) NOT NULL,
  `licenseissueddate` date NOT NULL,
  `driverexperience` int(5) NOT NULL,
  `licensevalidity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle1`
--

INSERT INTO `vehicle1` (`cno`, `vh`, `regno1`, `rcproduced`, `make`, `model`, `vehicleowner`, `owneraddress`, `type`, `class`, `cloth1`, `transportvehicletype`, `toth`, `stagecarrier`, `mofussil`, `towntype`, `permitvalidity`, `fitnesscertificateissueddate`, `fitnesscertificatevalidity`, `pollutioncertificatevalidity`, `nontransport`, `ntoth`, `rcvalidity`, `pollutioncertificatevalid`, `insuranceavailability`, `insurancevalidity`, `insurancecompanydetail`, `policynumber`, `manoeuvre`, `moth1`, `vehicledamagelevel`, `vdoth`, `tradeplateavailability`, `reason`, `drivername`, `driveraddress`, `gender`, `dob`, `age`, `driverinjury`, `dinoth1`, `drivererror`, `deoth1`, `licensedetails`, `licensenumber`, `classofvehicle`, `lcloth1`, `badgenumber`, `licenseissueddate`, `driverexperience`, `licensevalidity`) VALUES
('567/18', 0, '12345678', 'No', 'd', 'd', 'RC Not Produced', 'RC Not Produced', 'Non - Transport', 'Motor Cycle with Gear', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Animal Drawn Vehicle', '', '2018-03-17', '2018-03-10', 'Available', '0000-00-00', 'unitedindia', '234435346456', 'Reversing', '', 'No Damage', '', 'No', '', 'sdgf', 'fg', 'Female', '1997-03-10', 21, 'Minor H', '', 'Used the Vehicle in Unsafe Condition', '', 'Not Produced', '', '', '', '', '0000-00-00', 0, '0000-00-00'),
('456/16', 1, 'A', 'by', 'jhbk', 'mn', 'bk', 'j', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', 'Select Insurance Availability', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', 'Select License Availability', '', '', '', '', '0000-00-00', 0, '0000-00-00'),
('456/16', 2, 'aa', '', 'bsnl', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', 'Select Insurance Availability', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', 'Select License Availability', '', '', '', '', '0000-00-00', 0, '0000-00-00'),
('123/18', 0, 'Tn 45 GH 3456', 'No', 'hero', 'splendor', 'RC Not Produced', 'RC Not Produced', 'Transport', 'Motor Cycle with Gear', '', 'LMGV(NCP)', '', '', '', '', '0000-00-00', '0000-00-00', '2025-01-01', '2022-01-31', '', '', '0000-00-00', '0000-00-00', 'Available', '0000-00-00', 'unitedindia', '232435645656765', 'Starting From Near Side', '', 'No Damage', '', 'No', '', 'sdf', 'sg', 'Male', '1994-05-19', 23, 'Grievous', '', 'Abandoning Vehicle', '', 'Produced', '345435', 'Motor Cycle with Gear', '', '', '2013-01-01', 5, '2035-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle1copy`
--

CREATE TABLE `vehicle1copy` (
  `cno` varchar(15) NOT NULL,
  `vh` int(5) NOT NULL,
  `regno1` varchar(18) NOT NULL,
  `rcproduced` varchar(10) NOT NULL,
  `make` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `vehicleowner` varchar(20) NOT NULL,
  `owneraddress` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `cloth1` varchar(50) NOT NULL,
  `transportvehicletype` varchar(50) NOT NULL,
  `toth` varchar(100) NOT NULL,
  `stagecarrier` varchar(100) NOT NULL,
  `mofussil` varchar(100) NOT NULL,
  `towntype` varchar(100) NOT NULL,
  `permitvalidity` date NOT NULL,
  `fitnesscertificateissueddate` date NOT NULL,
  `fitnesscertificatevalidity` date NOT NULL,
  `pollutioncertificatevalidity` date NOT NULL,
  `nontransport` varchar(50) NOT NULL,
  `ntoth` varchar(50) NOT NULL,
  `rcvalidity` date NOT NULL,
  `pollutioncertificatevalid` date NOT NULL,
  `insuranceavailability` varchar(50) NOT NULL,
  `insurancevalidity` date NOT NULL,
  `insurancecompanydetail` varchar(500) NOT NULL,
  `policynumber` varchar(30) NOT NULL,
  `manoeuvre` varchar(50) NOT NULL,
  `moth1` varchar(50) NOT NULL,
  `vehicledamagelevel` varchar(50) NOT NULL,
  `vdoth` varchar(50) NOT NULL,
  `tradeplateavailability` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `drivername` text NOT NULL,
  `driveraddress` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `age` int(5) NOT NULL,
  `driverinjury` varchar(200) NOT NULL,
  `dinoth1` varchar(100) NOT NULL,
  `drivererror` varchar(100) NOT NULL,
  `deoth1` varchar(100) NOT NULL,
  `licensedetails` varchar(100) NOT NULL,
  `licensenumber` varchar(100) NOT NULL,
  `classofvehicle` varchar(100) NOT NULL,
  `lcloth1` varchar(100) NOT NULL,
  `badgenumber` varchar(100) NOT NULL,
  `licenseissueddate` date NOT NULL,
  `driverexperience` int(5) NOT NULL,
  `licensevalidity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `basiccopy`
--
ALTER TABLE `basiccopy`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `courtlogin`
--
ALTER TABLE `courtlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `fatal1`
--
ALTER TABLE `fatal1`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `fatal2`
--
ALTER TABLE `fatal2`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `ic`
--
ALTER TABLE `ic`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `ilaw`
--
ALTER TABLE `ilaw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inlogin`
--
ALTER TABLE `inlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lbasic`
--
ALTER TABLE `lbasic`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rto`
--
ALTER TABLE `rto`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `rtocopy`
--
ALTER TABLE `rtocopy`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `rtov1`
--
ALTER TABLE `rtov1`
  ADD PRIMARY KEY (`regno1`);

--
-- Indexes for table `rtov1copy`
--
ALTER TABLE `rtov1copy`
  ADD PRIMARY KEY (`regno1`);

--
-- Indexes for table `vehicle1`
--
ALTER TABLE `vehicle1`
  ADD PRIMARY KEY (`regno1`);

--
-- Indexes for table `vehicle1copy`
--
ALTER TABLE `vehicle1copy`
  ADD PRIMARY KEY (`regno1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
