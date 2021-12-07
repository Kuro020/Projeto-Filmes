-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2021 às 21:18
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdfilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilmes`
--

CREATE TABLE `tbfilmes` (
  `codFil` int(10) NOT NULL,
  `nomeFil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `duracaoFil` varchar(20) CHARACTER SET utf8 NOT NULL,
  `precoFil` varchar(20) CHARACTER SET utf8 NOT NULL,
  `generoFil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `classificacaoFil` varchar(20) CHARACTER SET utf8 NOT NULL,
  `avaliacaoFil` varchar(20) CHARACTER SET utf8 NOT NULL,
  `imgFil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `estreiaFil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `direcaoFil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `roteiroFil` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  ADD PRIMARY KEY (`codFil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  MODIFY `codFil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
