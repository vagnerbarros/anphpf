-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 05/04/2013 às 12h56min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `glav`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade_economica`
--

CREATE TABLE IF NOT EXISTS `atividade_economica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setor` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `atividade_principal` varchar(200) NOT NULL,
  `id_empreendimento` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empreendimento` (`id_empreendimento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimento`
--

CREATE TABLE IF NOT EXISTS `empreendimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `situacao` varchar(200) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `inscricao_estadual` varchar(200) NOT NULL,
  `dap` varchar(200) NOT NULL,
  `registro` varchar(200) NOT NULL,
  `nome_fantasia` varchar(250) NOT NULL,
  `razao_social` varchar(250) NOT NULL,
  `pessoas_ocupadas` int(11) NOT NULL,
  `data_abertura` date NOT NULL,
  `faixa_faturamento` double NOT NULL,
  `setor` varchar(200) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `cidade` int(11) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `logradouro` varchar(250) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `telefone_residencial` varchar(20) NOT NULL,
  `telefone_celular` varchar(20) NOT NULL,
  `telefone_comercial` varchar(20) NOT NULL,
  `telefone_recado` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `telefone_residencial` varchar(20) NOT NULL,
  `telefone_celular` varchar(20) NOT NULL,
  `telefone_comercial` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `escolaridade` varchar(40) NOT NULL,
  `segmento` varchar(200) NOT NULL,
  `receber_informacao` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `atividade_economica`
--
ALTER TABLE `atividade_economica`
  ADD CONSTRAINT `atividade_economica_ibfk_1` FOREIGN KEY (`id_empreendimento`) REFERENCES `empreendimento` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
