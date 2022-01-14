-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 10:07 PM
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
('teste', 'teste', 'teste'),
('a', 'fabio_silvaa@outlook.coma', 'adsa'),
('teste2', 'asdadautlook.com', 'asda'),
('', 'asd', 'sad'),
('asd', 'sad', 'dsa'),
('a', 'fabio_silvaa@outlook.com', 'teste55'),
('', 'fabio_silvaa@outlook.com', 'fas'),
('a', 'teste', 'asdad'),
('a', 'fabio_silvaa@outlook.com', 'sad'),
('a', 'fabio_silvaa@outlook.com', 'asd'),
('a', 'fabio_silvaa@outlook.com', 'asd'),
('a', 'fabio_silvaa@outlook.comasd', 'asd'),
('a', 'fabio_silvaa@outlook.com', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'fabio@fsjoalharia.com', 'fabioadmin', 'Fabio', 'fabioadmin'),
(4, 'fabio_silvaa@outlook.com', 'teste99999999', 'testeeeee', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
