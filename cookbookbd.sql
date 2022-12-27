-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 03:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookbookbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie_plat`
--

CREATE TABLE `categorie_plat` (
  `categorie_id` int(11) NOT NULL,
  `categorie_name` varchar(250) NOT NULL,
  `image_recettes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie_plat`
--

INSERT INTO `categorie_plat` (`categorie_id`, `categorie_name`, `image_recettes`) VALUES
(1, 'salé', '/images/categories/spaghetti.png'),
(2, 'epicé', '/images/categories/spicy.png'),
(3, 'sucré', '/images/categories/sweets.png'),
(4, 'Boissons', '/images/categories/drink.png');

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

CREATE TABLE `recettes` (
  `recette_id` int(11) NOT NULL,
  `recette_name` varchar(20) NOT NULL,
  `recette_disc` varchar(250) NOT NULL,
  `recette_img` varchar(250) NOT NULL,
  `recette_duree` varchar(20) NOT NULL,
  `recette_calories` varchar(20) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recettes`
--

INSERT INTO `recettes` (`recette_id`, `recette_name`, `recette_disc`, `recette_img`, `recette_duree`, `recette_calories`, `categorie_id`) VALUES
(1, 'Spaghetti à la sauce', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/spaghetti_real.jpg', '15min', '158 cal', 2),
(2, 'Cake Pops au biscoff', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/biscuits.jpg', '123m', '221c', 3),
(3, 'Café Glacé', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/iced_coffee.jpg', '22m', '5553c', 4),
(4, 'Pain farcie', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/pain_farcie.jpg', '332f', '3rr3', 1),
(5, 'Chakchouka', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/chakchouka.jpg', '15min', '158 cal', 2),
(7, 'Mojito fruits rouges', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/Mojito_fruits_rouges.jpg', '22m', '5553c', 4),
(8, 'panna cotta', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/panna_cotta.webp', '22m', '5553c', 3),
(9, 'Tarte chocolat au fr', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/Tarte_chocolat_au_framboise.jpg', '22m', '5553c', 3),
(10, 'Pizza', 'Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.', '/images/recettes/pizza.jpg', '332f', '3rr3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`nom`, `prenom`, `username`, `email`, `password`) VALUES
('fatma ', 'lanouar', 'fatlan', 'dbhbdjd', 'fatlan'),
('fatma ', 'lanouar', 'fatlan', 'fatma@yahoo.com', 'fatlan'),
('nqoufel', 'by', 'nqoufek', 'qwqwqqw', 'ssdsdsdsd'),
('fatma-lanouar', 'fatma-lanouar', 'fatma-lanouar', 'fatmalanouar20022@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(',', '', 'hi', 'hello@hh.kk', '37a74effd5d91c2ad8eafa67499cf04b'),
(',', '', 'hi', 'hello@hh.kk', '37a74effd5d91c2ad8eafa67499cf04b'),
(',', '', 'hello', 'hi@hh', 'e9f5713dec55d727bb35392cec6190ce'),
(',', '', 'hello', 'hi@hh', 'd41d8cd98f00b204e9800998ecf8427e'),
(',', '', 'hello', 'hi@hh', 'd41d8cd98f00b204e9800998ecf8427e'),
(',', '', 'salut', 'saluuu', '5d41402abc4b2a76b9719d911017c592'),
(',', '', 'hello', 'hi@hh', 'd41d8cd98f00b204e9800998ecf8427e'),
(',', '', 'hello', 'hi@hh', 'd41d8cd98f00b204e9800998ecf8427e'),
(',', '', 'hello', 'hi@hh', 'd41d8cd98f00b204e9800998ecf8427e'),
(',', '', 'hello', 'hi@hh', 'd41d8cd98f00b204e9800998ecf8427e'),
(',', '', 'ssss', 'ssss', '9f6e6800cfae7749eb6c486619254b9c'),
(',', '', 'ssss', 'ssss', '9f6e6800cfae7749eb6c486619254b9c'),
('', '', 'ssss', 'ssss', '9f6e6800cfae7749eb6c486619254b9c'),
('', '', 'islem', 'islemislem', '3c8f4a6133b41e1db47ba7d18a976a7d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie_plat`
--
ALTER TABLE `categorie_plat`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexes for table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`recette_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie_plat`
--
ALTER TABLE `categorie_plat`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `recette_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
