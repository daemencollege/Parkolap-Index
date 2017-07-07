-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2017 at 02:33 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `index`
--

-- --------------------------------------------------------

--
-- Table structure for table `bricks`
--

CREATE TABLE `bricks` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL,
  `size` varchar(15) NOT NULL DEFAULT 'small',
  `background_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bricks`
--

INSERT INTO `bricks` (`id`, `department`, `title`, `content`, `link`, `size`, `background_color`) VALUES
(1, 'Quidditch', 'Sign up for quidditch!', 'Signups are now available in your perspective common rooms to join your houses quidditch team. Get ready to represent your colors!', 'https://en.wikipedia.org/wiki/Quidditch', 'portrait', '#42D692'),
(2, 'Dueling Club', 'Dueling Club Meeting', 'We will be meeting at 7:30 in the dungeons. Practice will be with Professor Lockhardt', 'http://harrypotter.wikia.com/wiki/Duelling_Club', 'small', '#FFAD46'),
(3, 'Gryffindor', 'Dance Practice', 'Attention! We will be practicing for the Yule Ball. Expect to be called on to be used as an example.', 'http://harrypotter.wikia.com/wiki/Yule_Ball', 'large', '#F691B2'),
(4, 'Portraits', 'Party at Sir Cadogans Painting', 'Party at the famously inadequate knight of Hogwarts place', 'http://harrypotter.wikia.com/wiki/Cadogan', 'portrait', '#42D692'),
(5, 'Detention', 'Detention List', 'Harry, Ron, Hermione, and Draco will be doing detention with Hagrid in the Dark Forest. Meet at Hagrid\'s Hut.', 'http://harrypotter.wikia.com/wiki/Hagrid%27s_Hut', 'landscape', '#C2C2C2'),
(6, 'Dursleys', 'Dudley\'s Birthday', 'Please make sure there is more than 37 presents this year', 'http://www.imdb.com/character/ch0001032/quotes', 'small', '#FFAD46'),
(7, 'Teachers', 'Troll in the Dungeon', 'Professor Quill faints over nothing.', 'http://imgur.com/gallery/GPshdb3', 'landscape', '#7BD148'),
(8, 'Maraurders', 'Map', 'Lupin please give the map back to Harry. Thanks - James', 'http://harrypotter.wikia.com/wiki/Marauder%27s_Map', 'large', '#AC725E'),
(9, 'Charms', 'Spells to Remember', 'Levitation spell... swish and flick', 'http://harrypotter.wikia.com/wiki/Swish_and_Flick', 'large', '#9FE1E7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bricks`
--
ALTER TABLE `bricks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bricks`
--
ALTER TABLE `bricks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
