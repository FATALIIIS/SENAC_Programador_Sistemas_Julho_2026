-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2026 às 22:18
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
-- Database: `detran`
--
DROP DATABASE IF EXISTS `detran`;
CREATE DATABASE IF NOT EXISTS `detran` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `detran`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agentetransito`
--

CREATE TABLE `agentetransito` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `data_contrato` date DEFAULT NULL,
  `tempo_servico` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `tipo` varchar(50) DEFAULT NULL,
  `cod_categoria` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `infração`
--

CREATE TABLE `infração` (
  `data_hora` datetime DEFAULT NULL,
  `velocidade` int(11) DEFAULT NULL,
  `valor` decimal(6,2) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `cod_infra` int(11) NOT NULL,
  `placa` varchar(7) DEFAULT NULL,
  `cod_local` int(11) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `posicao_geo` bigint(20) DEFAULT NULL,
  `velocidade_perm` int(11) DEFAULT NULL,
  `cod_local` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `tipo` varchar(50) DEFAULT NULL,
  `cod_modelo` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `CPF` bigint(20) NOT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `cod_tel` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `cod_tel` int(11) NOT NULL,
  `telefone1` varchar(14) DEFAULT NULL,
  `telefone2` varchar(14) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `placa` varchar(7) NOT NULL,
  `chassi` varchar(20) DEFAULT NULL,
  `cor` varchar(10) DEFAULT NULL,
  `ano_fabricacao` int(11) DEFAULT NULL,
  `cod_modelo` int(6) DEFAULT NULL,
  `cod_categoria` int(2) DEFAULT NULL,
  `CPF` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentetransito`
--
ALTER TABLE `agentetransito`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `infração`
--
ALTER TABLE `infração`
  ADD PRIMARY KEY (`cod_infra`),
  ADD KEY `placa` (`placa`),
  ADD KEY `cod_local` (`cod_local`),
  ADD KEY `matricula` (`matricula`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`cod_local`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`cod_modelo`);

--
-- Indexes for table `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`CPF`),
  ADD KEY `cod_tel` (`cod_tel`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`cod_tel`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `cod_modelo` (`cod_modelo`),
  ADD KEY `cod_categoria` (`cod_categoria`),
  ADD KEY `CPF` (`CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
