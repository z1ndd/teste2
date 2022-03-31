-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsjoalharia`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ad_comissao` (IN `in_id` INT(4), IN `in_id_msg` INT(4), IN `in_valor` DECIMAL(12,2))  begin
 start transaction;
 insert into comissao(id, id_msg, valor)
 values (in_id,in_id_msg,in_valor);
 select ROW_NUMBER() OVER () linha,id,id_msg,valor
 from comissao
 where id=in_id;
 commit;
end$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `emp_nome` (`id` INT) RETURNS VARCHAR(40) CHARSET latin1 READS SQL DATA
begin
 return (
 select concat(nome,'-',local) 
 from empregado e, postal p
 where cod_postal = codigo
 and id=e.id
 );
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `emp_nome2` (`id` INT) RETURNS VARCHAR(40) CHARSET latin1 READS SQL DATA
begin
 return (
 select concat(nome,'-',local) 
 from empregado e, postal p
 where cod_postal = codigo
 and id=e.id
 );
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `melhor_vendedor` () RETURNS VARCHAR(50) CHARSET latin1 READS SQL DATA
begin
 declare nome_local char(40);
 select id, sum(valor)
 from comissao
 group by 1
 order by 2 desc
 LIMIT 1
 INTO @a, @b;
 set nome_local = (
 select emp_nome(@a)
 );
 return (
 select concat(nome_local,' ',format(@b,2,'rm_CH'))
 );
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`nome`, `email`, `comentario`) VALUES
('Alberto', 'Alberto@gmail.com', 'Muito boa página.'),
('Artur', 'artur@outlook.com', 'Bons produtos.');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(2) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`) VALUES
(1, 'Charming', 'Anéis de Casamento'),
(2, 'Classic', 'Anéis de Casamento'),
(3, 'Gracious', 'Anéis de Casamento'),
(4, 'Immortal', 'Anéis de Casamento'),
(5, 'Pure', 'Anéis de Casamento'),
(6, 'Sense', 'Anéis de Casamento'),
(7, 'Lighting', 'Jóias'),
(8, 'Trident', 'Jóias'),
(9, 'Poseidon', 'Jóias'),
(10, 'Pegasus', 'Jóias'),
(11, 'Anel 1', 'Jóias'),
(12, 'Anel 2', 'Jóias');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `iduser` int(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`iduser`, `email`, `login`, `nome`, `password`) VALUES
(12, 'carlos@outlook.com', 'Carlos1996', 'CarlosAlberto', 'teste'),
(13, 'diogof@gmail.com', 'DiogoF', 'DiogoFreitas', 'diogo'),
(15, 'admin@fsjoalharia.pt', 'admin', 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
