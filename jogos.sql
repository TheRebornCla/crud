-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2019 às 04:41
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tablegames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `ordem` int(11) NOT NULL,
  `plataforma` text NOT NULL,
  `jogo` text NOT NULL,
  `login` text NOT NULL,
  `senha` text NOT NULL,
  `id` text NOT NULL,
  `acessos` text NOT NULL,
  `telefone` text NOT NULL,
  `ddv` date NOT NULL,
  `cliente` text NOT NULL,
  `vdv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`ordem`, `plataforma`, `jogo`, `login`, `senha`, `id`, `acessos`, `telefone`, `ddv`, `cliente`, `vdv`) VALUES
(2, 'PS4', 'mortal combat 3', 'lucaswallyson@gmail.com', '1234567', 'XVCFDSZ', 'XCVSDF e BNMGHJ', '', '2019-12-09', 'joceliano peixoto', '20,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`ordem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `ordem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
