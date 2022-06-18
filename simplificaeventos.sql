-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220615.dbf52a93f7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 04:06
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `simplificaeventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome_evento` varchar(80) NOT NULL,
  `data_evento` date NOT NULL,
  `servicos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_alteracao` datetime NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventoteste`
--

CREATE TABLE `eventoteste` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventoteste`
--

INSERT INTO `eventoteste` (`id`, `nome`, `data`, `usuario`) VALUES
(1, '[value-2]', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(120) NOT NULL,
  `whatsapp` char(20) NOT NULL,
  `cpf` char(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `whatsapp`, `cpf`, `password`) VALUES
(1, 'Jefferson Simplifica Eventos', 'Dono@simplificaEventos.com', '', '40686681088', '12345678'),
(2, 'Dono 2', 'dono2@teste.com', '', '23188660073', '$2y$10$yyZbCCAB0MwA.CmMePpVzuZjQ06GCKGCJw6LhUCzeasi9g14UFsIW'),
(3, 'Jefferson Eduardo', 'teste2@gmail.com', '', '30104690046', '$2y$10$UFAd2OxfA0J1t8oNGP0gc.QUXK0JqpXsfufM/Fgfb4sv5QkDISzr2'),
(4, 'Jefferson', 'teste@gmail.edu.br', '', '10347380034', '$2y$10$AVEA3Sdy.WSK7OY.YC6YX.GaJ7qn/NkJpKXwST778MlvY.dWkzB/y'),
(5, 'Jefferson Eduardo', 'admin@gmail.com', '88 99999-9999', '10192726005', '$2y$10$N4rN8z/5RS7WUw58k5ldU..MneVP2OfHK7vOWUwAxS2MNGsWpqva.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventoteste`
--
ALTER TABLE `eventoteste`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `eventoteste`
--
ALTER TABLE `eventoteste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
