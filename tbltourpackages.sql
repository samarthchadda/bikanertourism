-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 09:08 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackageLocation` varchar(100) NOT NULL,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Jaipur Trip', 'Family Package & Couple Package', 'Jaipur', 100, 'Luxurious buses and hotels', 'Explore the beauty of pink city. Jaipur has a vivid variety of beautiful Forts and Palaces such as Amber palace, City palace, Hawa Mahal, Jal Mahal, Nahargarh Fort, Jaigarh Fort. Astronomical observatory Jantar Mantar also a UNESCO World Heritage Site is worth visiting. Museum Albert Hall also add beauty to the city. Jaipur has various temples including Birla Temple, Govind Devji Temple, Moti Doongri Ganesh Temple. Apart from the historical places depicting the glorious past of Jaipur, Jaipur is also famous for its modern  places such as World Trade Park, Jawahar Kala Kendra, Raj Mandir (cinema Hall), Jawahar Circle and many more. To visit this beautiful City of Rajasthan book this Package with packages from 1 to 10 days duration. The package will include the cost of hotel accomodation, food and sightseeing.', 'maxresdefault.jpg', '2017-05-13 14:23:44', '2018-07-22 05:01:11'),
(2, 'Udaipur Trip', 'Family Package & Couple Package', 'Udaipur', 5433, 'Luxurious buses and hotels', 'Visit the city of lakes and dive into the insane beauty of the city. Udaipur is famous for its  several lakes primarily including Fateh Sagar Lake, Pichola Lake,  Dehbar Lake, Dhoodh Talai Lake, Swaroop Sagar Lake, Badi Lake, and Udaisagar Lake. Apart from it Udaipur is also Famous for Udaipur City Palace, Lake Palace, Monsoon Palace, Ahar Museum, Jagdeesh Temple and many more. To visit this beautiful City of Rajasthan book this Package with packages from 1 to 10 days duration. The package will include the cost of hotel accomodation, food and sightseeing.', 'udaipur2-1.jpg', '2017-05-13 15:24:26', '2018-07-22 05:02:17'),
(3, 'Jodhpur Trip', 'Family Package', 'Jodhpur', 1000, 'Luxurious buses and hotels', 'Jodhpur, the second largest city in Rajasthan is popularly known as the Blue City. The name is clearly befitting as most of the architecture – forts, palaces, temples, havelis and even houses are built in vivid shades of blue.  Jodhpur has  a lot of Places to visit  such as Mehrangarh Fort, Khejalra Fort,  Umaid Bhawan Palace,  Moti Mahal etc. To visit this beautiful City of Rajasthan book this Package with packages from 1 to 10 days duration. The package will include the cost of hotel accomodation, food and sightseeing.', '_0a6f33ca-16ed-11e7-a5d6-c47fceabb9c0.jpg', '2017-05-13 16:00:58', '2018-07-22 05:15:31'),
(4, 'Chittorgarh Trip', 'Family Package', 'Chittorgarh', 2000, 'Luxurious buses and hotels', 'Chittorgarh resonates with stories of Rajputana bravery, pride and passion. The bards of Rajasthan sing tales of courage and sacrifice recounting stories that are known to every child and adult in the city. Chittorgarh is the place of glory Chittorgarh Fort is one of the biggest forts in India. Rani Padmini\'s palace, Vijay Stambh, Kirti Stambh, Fateh Prakash Palace are the major tourist attractions of the city. To visit this beautiful City of Rajasthan book this Package with packages from 1 to 10 days duration. The package will include the cost of hotel accomodation, food and sightseeing.', '1511332539_1.jpg.webp', '2017-05-13 22:39:37', '2018-07-22 05:42:19'),
(5, 'Mount Abu Trip', 'Family Package & Couple Package', 'Mount Abu', 3000, 'Luxurious buses and hotels', 'Beat the heat with the oasis in the desert of Rajasthan. Mount Abu is one of the best place to visit in Rajasthan. The lush green Arawali hills and beautiful Lakes along with the cool breeze make the atmosphere cool giving you a heavenly experience . To visit this beautiful City of Rajasthan book this Package with packages from 1 to 10 days duration. The package will include the cost of hotel accomodation, food and sightseeing.', 'photo-91-165725-3.JPG', '2017-05-13 22:42:10', '2018-07-22 05:33:08'),
(6, 'Bikaner Trip', 'Family Package', 'Bikaner', 5000, 'Luxurious buses and hotels', 'Experince the beauty of thar desert in Bikaner. Apart from the endless desert of  beautiful sand Bikaner is also popular for Junagarh Fort, Lalgarh Palace and Museum,  Rampuria Haveli and Lakshmi Niwas Palace. To visit this beautiful City of Rajasthan book this Package with packages from 1 to 10 days duration. The package will include the cost of hotel accomodation, food and sightseeing.', 'hotel-1.jpg', '2017-05-14 08:01:08', '2018-07-22 05:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
