-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20-Out-2019 às 11:29
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartorios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartorio`
--

CREATE TABLE `cartorio` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `razao` varchar(255) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `tabeliao` varchar(100) NOT NULL,
  `ativo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cartorio`
--

INSERT INTO `cartorio` (`id`, `nome`, `razao`, `documento`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `email`, `telefone`, `tabeliao`, `ativo`) VALUES
(35, '1º Tabelionato de Notas e Registro de Imoveis', '1º Tabelionato de Notas e Registro de Imoveis', '00002253000102', '75650000', 'Pc. Prof. Jose Candido Nr 709', 'Centro', 'Morrinhos', 'GO', 'teste222@gmail.com', '61994260240', 'Luciano Carneiro do Vale', '1'),
(36, '2º Tabelionato de Notas, Protesto e Oficio do Registro Tit., e Documentos e Pess., Juridicas', '2º Tabelionato de Notas, Protesto e Oficio do Registro Tit., e Documentos e Pess., Juridicas', '00003152000148', '76630000', 'Rua Luis Antonio Nr 62', 'Centro', 'Itaberai', 'GO', 'romarioarruda98@gmail.com', '(61) 99426-0240', 'Wiliam Gomes de Morais', '1'),
(37, 'Oficio de Registro de Imoveis e 1º Tabelionato de Notas', 'Oficio de Registro de Imoveis e 1º Tabelionato de Notas', '00003194000189', '76630000', 'Rua Sr. dos Passos Nr 62', 'Centro', 'Itaberai', 'GO', 'teste111@gmail.com', '61995442891', 'Yacatan Silva Pinto', '0'),
(41, '1º Tabelionato de Notas e Registro de Imoveis', '1º Tabelionato de Notas e Registro de Imoveis', '00002253000102', '75650000', 'Pc. Prof. Jose Candido Nr 709', 'Centro', 'Morrinhos', 'GO', NULL, NULL, 'Luciano Carneiro do Vale', '1'),
(42, '2º Tabelionato de Notas, Protesto e Oficio do Registro Tit., e Documentos e Pess., Juridicas', '2º Tabelionato de Notas, Protesto e Oficio do Registro Tit., e Documentos e Pess., Juridicas', '00003152000148', '76630000', 'Rua Luis Antonio Nr 62', 'Centro', 'Itaberai', 'GO', NULL, NULL, 'Wiliam Gomes de Morais', '1'),
(43, 'Oficio de Registro de Imoveis e 1º Tabelionato de Notas', 'Oficio de Registro de Imoveis e 1º Tabelionato de Notas', '00003194000189', '76630000', 'Rua Sr. dos Passos Nr 62', 'Centro', 'Itaberai', 'GO', NULL, NULL, 'Yacatan Silva Pinto', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartorio`
--
ALTER TABLE `cartorio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartorio`
--
ALTER TABLE `cartorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
