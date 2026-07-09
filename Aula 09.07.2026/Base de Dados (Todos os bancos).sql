-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jul-2026 às 21:38
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

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `endereco`, `telefone`, `cidade`, `nascimento`, `cod_tur`, `cod_cur`) VALUES
(1, 'João', 'Rua Violeta, Nº200', 4299995049, 'Ponta Grossa', '1995-01-29', 1, 1),
(2, 'Mariana', 'Rua Rosa, Nº900', 4299802094, 'Ponta Grossa', '2000-06-16', 1, 1),
(4, 'Carla', 'Rua Joaquim Freitas, Nº120', 4199802500, 'Curitiba', '2005-10-10', 2, 2);

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
(1, 'Programador de Sistemas', 200, 'M'),
(2, 'Cozinheiro', 200, 'M');

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
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`cod_tur`, `cod_cur`, `sala`, `periodo`) VALUES
(1, 1, 10, 1),
(2, 2, 20, 1);

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
--
-- Database: `estoque`
--
DROP DATABASE IF EXISTS `estoque`;
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
  `telefone` varchar(14) NOT NULL,
  `cidade` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`cod_fab`, `nome`, `endereco`, `cnpj`, `telefone`, `cidade`) VALUES
(1, 'Empresa C&A', 'Rua X, Nº993', 12345678, '(42)4288-1456', 'Curitiba'),
(2, 'Satia', 'Av. Padre Carlos, Nº990', 1234567890, '(42)99986-5600', 'Ponta Grossa');

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
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_pro`, `cod_fab`, `nome`, `descricao`, `quantidade`, `valor`, `data_fab`) VALUES
(1, 2, 'Presunto Defumado', 'Presunto Defumado Fatiado Premium Satia 200g', 40, '15.50', '2026-07-01');

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
