-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2015 às 16:41
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `paginacao`
--

INSERT INTO `paginacao` (`titulo`, `id`, `texto`) VALUES
('7Âª temporada, Valerie pode ser motivo da separaÃ§', 19, 'Quando tudo parecia maravilhoso para Caroline (Candice Accola) e Stefan (Paul Wesley), algo tinha que chegar e atrapalhar em "The Vampire Diaries". E para a tristeza dos fÃ£s, uma voltinha no futuro revela que a jovem nÃ£o vai querer ver seu antigo amor nem pintado de ouro. Mas qual seria o motivo dessa reaÃ§Ã£o da mulher? MistÃ©rio!\r\nA produtora-executiva da sÃ©rie, Caroline Dries, revelou alguns segredos sobre o que pode ter rolado entre os pombinhos. Para comeÃ§ar, Valerie (Elizabeth Blackmore) pode estar por trÃ¡s disso tudo. AtÃ© porque, a mulher escondeu alguns detalhes sobre a vida ao lado do irmÃ£o de Damon (Ian Somerhalder) e isso pode gerar problemas. "Valerie Ã© parte da razÃ£o, mas a situaÃ§Ã£o Ã© muito mais emocional e legÃ­tima", garante Dries ao TV Line. "EstÃ¡ alÃ©m de ciÃºme mesquinho ou do Stefan traindo a Caroline ou qualquer coisa assim".'),
('Damon e Stefan lutam contra Julian!', 20, 'O sexto episÃ³dio dessa sÃ©tima temporada de "The Vampire Diaries" vai vir cheia de barracos e confusÃµes, como sempre. Mas a luta da vez envolve os irmÃ£os Salvatore contra Julian (Todd Lasance), que Ã© o antigo amor de Lily (Annie Wersching) e estÃ¡ de volta Ã  vida graÃ§as Ã  pedra da FÃªnix. ApÃ³s se reunir com seu antigo amor, Julian, Lily oferece um jantar para apresentÃ¡-lo a Damon (Ian Somerhalder) e Stefan (Paul Wesley) e para declarar a paz entre sua famÃ­lia de Hereges e os residentes de Mystic Falss". Mas as coisas nÃ£o vÃ£o sair conforme o esperado e os irmÃ£os decidem que Ã© hora de matar o recÃ©m-chegado. Eita!'),
(' Damon se declara para Elena *AAAWN*', 21, 'Um flash-forward tambÃ©m pode ser visto, no qual Alaric estÃ¡ vivendo em uma linda casa e com filhas gÃªmeas, que parecem assustadas com algo. Bem na hora, Damon (Ian Somerhalder) chegou no local para avisar sobre o perigo que estÃ¡ vindo por aÃ­! TensÃ£o no ar! Falando no vampiro, o cara ainda estÃ¡ obsecado por Elena (Nina Dobrev) e escreveu uma declaraÃ§Ã£o para a ex-namorada em um jornal. SerÃ¡ que o gato vai conseguir superar essa bad um dia?'),
('Bonnie vai ter um futuro bom ou nÃ£o?', 22, 'a atriz contou um pouco mais do que podemos esperar por aÃ­: "Muita coisa estÃ¡ acontecendo no inÃ­cio da temporada. Sobre a Pedra de Phoenix, nÃ³s vamos aprender por que Ã© importante, o que pode fazer e como ela Ã© ligada a outras coisas", adiantou a morena. Sobre a amizade com Damon (Ian Somerhalder), a gata confessou que nos prÃ³ximos episÃ³dios a cumplicidade entre dois vai crescer ainda mais!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
