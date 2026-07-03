-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2026 às 22:22
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
-- Database: `estoque`
--
CREATE DATABASE IF NOT EXISTS `estoque` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estoque`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `cod_fab` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cnpj` bigint(20) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `cidade` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_pro` int(11) NOT NULL,
  `cod_fab` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `descricao` text,
  `quantidade` int(11) DEFAULT NULL,
  `valor` decimal(6,2) DEFAULT NULL,
  `data_fab` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`cod_fab`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `cod_fab` (`cod_fab`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
