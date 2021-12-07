-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2021 às 21:23
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

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
-- Extraindo dados da tabela `tbfilmes`
--

INSERT INTO `tbfilmes` (`codFil`, `nomeFil`, `duracaoFil`, `precoFil`, `generoFil`, `classificacaoFil`, `avaliacaoFil`, `imgFil`, `estreiaFil`, `direcaoFil`, `roteiroFil`) VALUES
(13, 'Godzilla vs Kong', '2 horas', 'R$20', 'Ação', '+14', '5/5', 'godzillavskong.jpg', '6 de Maio de 2021', 'Adam Wingard', 'Eric Pearson/Max Borenstein'),
(14, 'Sonic', '2 horas', 'R$20', 'Ação', 'Livre', '5/5', 'sonic.jpg', '25 de Dezembro de 2021', 'Jeff Fowler', 'Patrick Casey/Josh Miller'),
(15, 'Homem aranha 3', '2 horas', 'R$20', 'Ação e Aventura', '+14', '5/5', 'homemaranha.jpg', '13 de dezembro de 2021', 'Jon Watts', 'Chris McKenna');

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
  MODIFY `codFil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
