-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 03:24
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Telefone` bigint(20) NOT NULL,
  `Celular` bigint(20) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `Nome`, `CPF`, `Telefone`, `Celular`, `email`) VALUES
(13, 'marco', '15565177774', 3213, 3213, 'maroc@gmail.com'),
(14, 'caio', '15592295782', 3213, 321, 'caio@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `codigo` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `codServico` int(11) NOT NULL,
  `codCliente` int(11) NOT NULL,
  `allDay` tinyint(1) NOT NULL,
  `className` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`codigo`, `start`, `end`, `codServico`, `codCliente`, `allDay`, `className`) VALUES
(7, '2018-05-11 06:00:00', '2018-05-11 10:00:00', 1, 13, 0, 'important'),
(8, '2018-05-11 06:00:00', '2018-05-11 07:00:00', 1, 13, 0, 'important'),
(9, '2018-05-12 06:00:00', '2018-05-12 07:00:00', 2, 13, 0, 'important');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `arquivo` varchar(150) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `arquivo`, `quantidade`, `data`, `nome`) VALUES
(87, '', 321321, '2018-04-28 00:01:08', 'coisas'),
(88, '', 321, '2018-04-24 00:02:07', 'sadsad'),
(89, '', 3213, '2018-04-28 00:00:48', 'linha'),
(90, '', 4324, '2018-04-28 00:00:39', 'remedio'),
(91, '', 4324, '2018-04-28 00:01:03', 'chave'),
(92, '', 656, '2018-04-28 00:00:51', 'bola'),
(93, '', 4324, '2018-04-24 00:02:24', 'tgret');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`codigo`, `nome`, `preco`) VALUES
(1, 'Cabelo', 10),
(2, 'Unha', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codServiço` (`codServico`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`codCliente`) REFERENCES `cliente` (`codigo`),
  ADD CONSTRAINT `consulta_ibfk_4` FOREIGN KEY (`codServico`) REFERENCES `servico` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
