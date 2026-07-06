-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jul-2026 às 22:28
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
-- Database: `escola`
--
DROP DATABASE IF EXISTS `escola`;
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cod_tur` int(11) NOT NULL,
  `cod_cur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `cod_cur` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `turno` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`cod_cur`, `nome`, `duracao`, `turno`) VALUES
(1, 'Programador de Sistemas', 200, 'T');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `cod_tur` int(11) NOT NULL,
  `cod_cur` int(11) NOT NULL,
  `sala` int(11) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `cod_tur` (`cod_tur`),
  ADD KEY `cod_cur` (`cod_cur`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`cod_cur`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`cod_tur`),
  ADD KEY `cod_cur` (`cod_cur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
