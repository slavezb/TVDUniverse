-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2015 às 20:56
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginacao`
--

CREATE TABLE IF NOT EXISTS `paginacao` (
  `titulo` varchar(250) NOT NULL,
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `texto` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `paginacao`
--

INSERT INTO `paginacao` (`titulo`, `id`, `texto`) VALUES
('Valerie pode ser motivo da separacao entre Stefan e Caroline', 19, 'Quando tudo parecia maravilhoso para Caroline (Candice Accola) e Stefan (Paul Wesley), algo tinha que chegar e atrapalhar em "The Vampire Diaries". E para a tristeza dos fÃ£s, uma voltinha no futuro revela que a jovem nÃ£o vai querer ver seu antigo amor nem pintado de ouro. Mas qual seria o motivo dessa reaÃ§Ã£o da mulher? MistÃ©rio!\r\nA produtora-executiva da sÃ©rie, Caroline Dries, revelou alguns segredos sobre o que pode ter rolado entre os pombinhos. Para comeÃ§ar, Valerie (Elizabeth Blackmore) pode estar por trÃ¡s disso tudo. AtÃ© porque, a mulher escondeu alguns detalhes sobre a vida ao lado do irmÃ£o de Damon (Ian Somerhalder) e isso pode gerar problemas. "Valerie Ã© parte da razÃ£o, mas a situaÃ§Ã£o Ã© muito mais emocional e legÃ­tima", garante Dries ao TV Line. "EstÃ¡ alÃ©m de ciÃºme mesquinho ou do Stefan traindo a Caroline ou qualquer coisa assim".'),
('Damon e Stefan lutam contra Julian!', 20, 'O sexto episÃ³dio dessa sÃ©tima temporada de "The Vampire Diaries" vai vir cheia de barracos e confusÃµes, como sempre. Mas a luta da vez envolve os irmÃ£os Salvatore contra Julian (Todd Lasance), que Ã© o antigo amor de Lily (Annie Wersching) e estÃ¡ de volta Ã  vida graÃ§as Ã  pedra da FÃªnix. ApÃ³s se reunir com seu antigo amor, Julian, Lily oferece um jantar para apresentÃ¡-lo a Damon (Ian Somerhalder) e Stefan (Paul Wesley) e para declarar a paz entre sua famÃ­lia de Hereges e os residentes de Mystic Falss". Mas as coisas nÃ£o vÃ£o sair conforme o esperado e os irmÃ£os decidem que Ã© hora de matar o recÃ©m-chegado. Eita!'),
(' Damon se declara para Elena *AAAWN*', 21, 'Um flash-forward tambÃ©m pode ser visto, no qual Alaric estÃ¡ vivendo em uma linda casa e com filhas gÃªmeas, que parecem assustadas com algo. Bem na hora, Damon (Ian Somerhalder) chegou no local para avisar sobre o perigo que estÃ¡ vindo por aÃ­! TensÃ£o no ar! Falando no vampiro, o cara ainda estÃ¡ obsecado por Elena (Nina Dobrev) e escreveu uma declaraÃ§Ã£o para a ex-namorada em um jornal. SerÃ¡ que o gato vai conseguir superar essa bad um dia?'),
('Bonnie vai ter um futuro bom ou nÃ£o?', 22, 'a atriz contou um pouco mais do que podemos esperar por aÃ­: "Muita coisa estÃ¡ acontecendo no inÃ­cio da temporada. Sobre a Pedra de Phoenix, nÃ³s vamos aprender por que Ã© importante, o que pode fazer e como ela Ã© ligada a outras coisas", adiantou a morena. Sobre a amizade com Damon (Ian Somerhalder), a gata confessou que nos prÃ³ximos episÃ³dios a cumplicidade entre dois vai crescer ainda mais!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariostvd`
--

CREATE TABLE IF NOT EXISTS `usuariostvd` (
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datanascimento` varchar(20) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `ddd` varchar(5) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `confirma_senha` varchar(40) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `usuariostvd`
--

INSERT INTO `usuariostvd` (`nome`, `email`, `datanascimento`, `sexo`, `profissao`, `ddd`, `telefone`, `numero`, `rua`, `cidade`, `estado`, `cep`, `username`, `senha`, `confirma_senha`, `id`, `bairro`) VALUES
('Leti­cia Mendonca', 'letiicia_breda@hotmail.com', '1997-08-01', 'feminino', 'Estudante', '011', '963295412', '479', 'Olimpia', 'Sao Paulo', '', '03211', 'leemendonca', 'acd6b562591c86565491406d6cbf810a207905d9', 'acd6b562591c86565491406d6cbf810a207905d9', 1, 'Vila Alpina'),
('Dara Cedraz', 'daraced@gmail.com', '1996-06-16', 'outros', 'puta', '011', '68190484', '666', 'ali', 'sÃ£o paulo', '', '66666', 'daraced', '42f25b39e1b00c11f7050e1f29105a0c13242061', '42f25b39e1b00c11f7050e1f29105a0c13242061', 2, 'inferno'),
('Isabelle Galori Lima', 'isagalori@hotmail.com', '1997-04-19', 'feminino', 'Desenvolvedora', '11', '974899800', '568', 'rui de morais apocalipse', 'sp', '', '00000', 'isagalori', '621a3026bf7bf1c1610dbf78db6053032755484a', '621a3026bf7bf1c1610dbf78db6053032755484a', 4, 'Jardim do Tiro'),
('Bruna Slavez', 'bslavez22@gmail.com', '1996-05-09', 'outros', 'programadora', '11', '985062170', '1276', 'antonio de souza noscheze', 'sao paulo', '', '05328', 'ChizuChan', 'dc148f7704bcc27fbe642fb65dc2d395e6589088', 'dc148f7704bcc27fbe642fb65dc2d395e6589088', 3, 'pq continental'),
('admin do site', 'admin@tvduniverse.com', '1900-01-01', 'outros', 'administrador', '11', '523563216', '2269', 'rua', 'sao paulo', '', '02623', 'administrador', '70352f41061eda4ff3c322094af068ba70c3b38b', '70352f41061eda4ff3c322094af068ba70c3b38b', 31, 'bairro'),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 32, ''),
('<br />\r\n<b>Notice</b>:  Undefined variable: nome in <b>C:Program Files (x86)EasyPHP-DevServer-14.1VC', '<br />\r\n<b>Notice</b>:  Undefined variable: email in <b>C:Program Files (x86)EasyPHP-DevServer-14.1V', '<br />\r\n<b>Notice</b', '<br />\r\n<b>Notice</b>:  Undefined variable: sexo i', '<br />\r\n<b>Notice</b>:  Undefined variable: profis', '<br /', '<br />\r\n<b', '<br /', '<br />\r\n<b>Notice</b>:  Undefined variable: rua in <b>C:Program Files (x86)EasyPHP-DevServer-14.1VC9', '<br />\r\n<b>Notice</b>:  Undefined variable: cidade in <b>C:Program Files (x86)EasyPHP-DevServer-14.1', '', '<br />\r\n<b', 'Edilaine', 'b093035b456cdb68d7d36d384ec20bb3142a1c4f', 'b093035b456cdb68d7d36d384ec20bb3142a1c4f', 33, '<br />\r\n<b>Notice</b>:  Undefine'),
('Leticia Breda MendonÃ§a', 'letiicia_breda@hotmail.com', '1997-08-01', 'feminino', 'Estudante', '011', '963295412', '479', 'Olimpia', 'SÃ£o Paulo', '', '03211', 'lee_mendonca', 'a1904194d8d8f2618b7c66b5aace6d9aa77c756d', 'a1904194d8d8f2618b7c66b5aace6d9aa77c756d', 34, 'Vila Alpina');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
