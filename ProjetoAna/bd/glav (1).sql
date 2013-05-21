-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 21/05/2013 às 17h15min
-- Versão do Servidor: 5.5.27
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
-- Estrutura da tabela `empreendimento`
--

CREATE TABLE IF NOT EXISTS `empreendimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(200) DEFAULT NULL,
  `cnpj` varchar(200) DEFAULT NULL,
  `inscricao_estadual` varchar(200) DEFAULT NULL,
  `registro` varchar(200) DEFAULT NULL,
  `nome_fantasia` varchar(200) DEFAULT NULL,
  `razao_social` varchar(200) DEFAULT NULL,
  `pessoas_ocupadas` varchar(200) DEFAULT NULL,
  `data_abertura` varchar(200) DEFAULT NULL,
  `faixa_faturamento` varchar(200) DEFAULT NULL,
  `segmento` varchar(200) DEFAULT NULL,
  `cep` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` varchar(200) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `telefone_residencial` varchar(200) DEFAULT NULL,
  `telefone_celular` varchar(200) DEFAULT NULL,
  `telefone_comercial` varchar(200) DEFAULT NULL,
  `telefone_recado` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `setor` varchar(200) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `empreendimento`
--

INSERT INTO `empreendimento` (`id`, `tipo`, `cnpj`, `inscricao_estadual`, `registro`, `nome_fantasia`, `razao_social`, `pessoas_ocupadas`, `data_abertura`, `faixa_faturamento`, `segmento`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `telefone_residencial`, `telefone_celular`, `telefone_comercial`, `telefone_recado`, `email`, `setor`, `status`) VALUES
(1, 'Empresa Individual de Responsabilidade Limitada', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', 'Canadá', 'Alagoas', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'ATIVO'),
(2, 'Empresa Individual de Responsabilidade Limitada', '2', '2', '2', '2', '2', '2', '2', '2', 'Comércio', '2', 'Canadá', 'Alagoas', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(20) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(250) DEFAULT NULL,
  `telefone_residencial` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL,
  `telefone_comercial` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `escolaridade` varchar(40) DEFAULT NULL,
  `segmento` varchar(200) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `cpf`, `nome`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `telefone_residencial`, `telefone_celular`, `telefone_comercial`, `email`, `sexo`, `data_nascimento`, `escolaridade`, `segmento`, `status`) VALUES
(1, '065.388.644-65', 'WOLNEY HENRIQUE QUEIROZ FREITAS', '55016470', 'Brasil', 'Pernambuco', 'Caruaru', 'Universitário', 'Avenida Venezuela', 111, '', '8188241180', '8188241180', '8188241180', 'wolneyhqf@gmail.com', 'Masculino', '1991-08-26', 'fundamental completo', '2', 'ATIVO'),
(2, '065.388.644-65', 'WOLNEY HENRIQUE QUEIROZ FREITAS', '55016470', 'Brasil', 'AC', 'Caruaru', '1', '1', 1, '1', '8188241180', '8188241180', '8188241180', 'wolneyhqf@gmail.com', 'Masculino', '1991-08-26', '1', 'Saúde', 'ATIVO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
