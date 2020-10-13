-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Out-2020 às 12:16
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(30) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `cpf`, `data`, `email`, `telefone`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `estado`, `cidade`, `id`) VALUES
('Leandro Barros Pontes', '140.846.467-50', '1996-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '19', 'Rio de Janeiro', 1),
('Leandro Barros Pontes', '140.846.467-50', '1996-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '16', 'Abreu e Lima', 2),
('Leandro Barros Pontes', '140.846.467-50', '1996-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '12', 'Agua Boa', 3),
('Jurema', '140.846.467-33', '1954-09-09', 'jurema@gmail.com', '(21) 35492-0865', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '19', 'Arraial do Cabo', 4),
('Jurema', '140.846.467-33', '1954-09-09', 'jurema@gmail.com', '(21) 35492-0865', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '19', 'Arraial do Cabo', 5),
('Fabio', '140.846.467-50', '1994-09-09', 'leandro1996@gmail.com', '(21) 35492-0863', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '17', 'Barro Duro', 6),
('Leandro Barros Pontes', '140.846.467-50', '1999-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PRAÃ‡A SECA', '19', 'Arrozal', 7),
('Leandro Barros Pontes', '140.846.467-50', '1999-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PRAÃ‡A SECA', '19', 'Arrozal', 8),
('Leandro Barros Pontes', '140.846.467-50', '1999-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PRAÃ‡A SECA', '19', 'Arrozal', 9),
('Leandro Barros Pontes', '140.846.467-50', '1996-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '19', 'Rio de Janeiro', 10),
('Leandro Barros Pontes', '140.846.467-50', '1997-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '19', 'Abarracamento', 11),
('Leandro Barros Pontes', '140.846.467-50', '1996-09-09', 'leandrobpontes1996@gmail.com', '(21) 35492-086', '21.321-620', 'rua barÃ£o', 207, '12-A-402', 'PraÃ§a Seca', '19', 'Avelar', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
