-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jul-2026 às 22:24
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--
DROP DATABASE IF EXISTS `biblioteca`;
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `cod_emp` int(11) NOT NULL,
  `cod_usu` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`cod_emp`, `cod_usu`, `data_hora`) VALUES
(1, 1, '2026-07-07 17:00:00'),
(2, 2, '2026-06-20 13:35:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `cod_it` int(11) NOT NULL,
  `cod_emp` int(11) NOT NULL,
  `cod_liv` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`cod_it`, `cod_emp`, `cod_liv`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `cod_liv` int(11) NOT NULL,
  `autor` varchar(40) DEFAULT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `editora` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`cod_liv`, `autor`, `titulo`, `editora`, `cidade`, `ano`) VALUES
(1, 'Genésio de Paula', 'Minhas Memórias', 'Ática', 'São Paulo', 1999),
(2, 'Carlos Almeida', 'Matemática Aplicada', 'Aurum', 'Rio de Janeiro', 2004),
(3, 'Mariana Barbosa', 'O Eterno Amor', 'Editora CRV', 'Porto Alegre', 2005);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usu` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(35) DEFAULT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  `data_nasci` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usu`, `nome`, `endereco`, `bairro`, `cidade`, `telefone`, `data_nasci`) VALUES
(1, 'Paula de Fátima', 'Rua Almeida, Nº25', 'Xaxim', 'Curitiba', 41999005400, '2000-05-25'),
(2, 'Eduarda Guimarães', 'Rua Doutor Muricy, Nº952', 'Batel', 'Curitiba', 41999886789, '1995-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`cod_emp`),
  ADD KEY `cod_usu` (`cod_usu`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`cod_it`),
  ADD KEY `cod_emp` (`cod_emp`),
  ADD KEY `cod_liv` (`cod_liv`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`cod_liv`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
