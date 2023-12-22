-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2023 às 18:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id20628149_pdi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_adm`
--

CREATE TABLE `cadastro_adm` (
  `idcadastro_adm` int(11) NOT NULL,
  `ra` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `conf_senha` varchar(45) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `path_foto` varchar(45) NOT NULL,
  `loger` varchar(45) NOT NULL,
  `ultimo_loger` varchar(45) NOT NULL,
  `ultima_criacao` varchar(45) NOT NULL,
  `ultima_modificacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_adm`
--

INSERT INTO `cadastro_adm` (`idcadastro_adm`, `ra`, `nome`, `data_nascimento`, `email`, `senha`, `conf_senha`, `codigo`, `path_foto`, `loger`, `ultimo_loger`, `ultima_criacao`, `ultima_modificacao`) VALUES
(11, '565641', 'c d d dd', '2023-08-18', '', '123456789', '123456789a', '', '', '', '', '', ''),
(12, '84220', 'ccIO dfvdfvdfvdf', '2023-08-18', '', '123456789', '123456789a', '', '', '', '', '', ''),
(13, '65461885', 'Arthur ', '2023-08-17', '295792020@eniac.edu.br', '123456789', '123456789', '3a7999', '650d099f5986b.jpg', '2023-11-13 15:16:00', '2023-10-23 14:44:13', '2023-11-08 15:10:34', '2023-10-03 10:08:41'),
(14, '65461885', 'Arthur', '2023-09-28', '65461885@eniac.edu.br', 'asd', 'asd', '43f237', '', '', '', '', ''),
(15, '65461885', 'Arthur', '2023-09-28', '65461885@eniac.edu.br', 'asdasd', 'asdasd', 'e35592', '', '', '', '', ''),
(16, '655396', 'Vanessa Reyes Manzano', '2023-10-02', 'vanessa.manzano@eniac.edu.br', '123456789', '123456789', 'b5c585', '', '2023-10-25 15:21:18', '2023-10-03 17:05:15', '2023-10-03 17:05:05', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_pdi_2`
--

CREATE TABLE `cadastro_pdi_2` (
  `idcadastro_pdi` int(11) NOT NULL,
  `senha` varchar(500) DEFAULT NULL,
  `confirm_senha` varchar(500) DEFAULT NULL,
  `nome_completo` varchar(290) DEFAULT NULL,
  `ra` varchar(45) DEFAULT NULL,
  `data_aniversario` date DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `numero_endereco` varchar(45) DEFAULT NULL,
  `email_institucional` varchar(100) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `modaliadade_curso` varchar(100) DEFAULT NULL,
  `inicio_curso` date DEFAULT NULL,
  `termino` date DEFAULT NULL,
  `semestre_curso` varchar(20) DEFAULT NULL,
  `nome_foto` varchar(100) DEFAULT NULL,
  `path_foto` varchar(200) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `perfil1` varchar(100) DEFAULT NULL,
  `perfil2` varchar(100) DEFAULT NULL,
  `passo` varchar(3) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `resilience` float DEFAULT NULL,
  `interpersonal_relationship` float DEFAULT NULL,
  `communication` float DEFAULT NULL,
  `adaptability_and_flexibility` float DEFAULT NULL,
  `self_development_and_self_management` float DEFAULT NULL,
  `creativity_and_innovation` float DEFAULT NULL,
  `grauInstrucao` varchar(50) DEFAULT NULL,
  `emprego` varchar(50) DEFAULT NULL,
  `atividadeProfissional` varchar(50) DEFAULT NULL,
  `colocacao` varchar(50) DEFAULT NULL,
  `titulo1` varchar(255) DEFAULT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `resumo1` text DEFAULT NULL,
  `titulo2` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `resumo2` text DEFAULT NULL,
  `titulo3` varchar(255) DEFAULT NULL,
  `link3` varchar(255) DEFAULT NULL,
  `resumo3` text DEFAULT NULL,
  `titulo4` varchar(255) DEFAULT NULL,
  `link4` varchar(255) DEFAULT NULL,
  `resumo4` text DEFAULT NULL,
  `titulo5` varchar(255) DEFAULT NULL,
  `link5` varchar(255) DEFAULT NULL,
  `resumo5` text DEFAULT NULL,
  `titulo6` varchar(255) DEFAULT NULL,
  `link6` varchar(255) DEFAULT NULL,
  `resumo6` text DEFAULT NULL,
  `titulo7` varchar(255) DEFAULT NULL,
  `link7` varchar(255) DEFAULT NULL,
  `resumo7` text DEFAULT NULL,
  `titulo8` varchar(255) DEFAULT NULL,
  `link8` varchar(255) DEFAULT NULL,
  `resumo8` text DEFAULT NULL,
  `titulo9` varchar(255) DEFAULT NULL,
  `link9` varchar(255) DEFAULT NULL,
  `resumo9` text DEFAULT NULL,
  `titulo10` varchar(255) DEFAULT NULL,
  `link10` varchar(255) DEFAULT NULL,
  `resumo10` text DEFAULT NULL,
  `tituloTCC` varchar(255) DEFAULT NULL,
  `linkTCC` varchar(255) DEFAULT NULL,
  `resumoTCC` text DEFAULT NULL,
  `empresa1` varchar(255) DEFAULT NULL,
  `funcao1` varchar(255) DEFAULT NULL,
  `entrada1` date DEFAULT NULL,
  `saida1` date DEFAULT NULL,
  `empresa2` varchar(255) DEFAULT NULL,
  `funcao2` varchar(255) DEFAULT NULL,
  `entrada2` date DEFAULT NULL,
  `saida2` date DEFAULT NULL,
  `empresa3` varchar(255) DEFAULT NULL,
  `funcao3` varchar(255) DEFAULT NULL,
  `entrada3` date DEFAULT NULL,
  `saida3` date DEFAULT NULL,
  `empresa4` varchar(255) DEFAULT NULL,
  `funcao4` varchar(255) DEFAULT NULL,
  `entrada4` date DEFAULT NULL,
  `saida4` date DEFAULT NULL,
  `empresa5` varchar(255) DEFAULT NULL,
  `funcao5` varchar(255) DEFAULT NULL,
  `entrada5` date DEFAULT NULL,
  `saida5` date DEFAULT NULL,
  `tema_voluntario1` varchar(255) DEFAULT NULL,
  `data_voluntario1` date DEFAULT NULL,
  `descricao_voluntario1` text DEFAULT NULL,
  `tema_voluntario2` varchar(255) DEFAULT NULL,
  `data_voluntario2` date DEFAULT NULL,
  `descricao_voluntario2` text DEFAULT NULL,
  `tema_voluntario3` varchar(255) DEFAULT NULL,
  `data_voluntario3` date DEFAULT NULL,
  `descricao_voluntario3` text DEFAULT NULL,
  `tituloOutro1` varchar(255) DEFAULT NULL,
  `linkOutro1` varchar(255) DEFAULT NULL,
  `resumoOutro1` text DEFAULT NULL,
  `tituloOutro2` varchar(255) DEFAULT NULL,
  `linkOutro2` varchar(255) DEFAULT NULL,
  `resumoOutro2` text DEFAULT NULL,
  `tituloOutro3` varchar(255) DEFAULT NULL,
  `linkOutro3` varchar(255) DEFAULT NULL,
  `resumoOutro3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_pdi_2`
--

INSERT INTO `cadastro_pdi_2` (`idcadastro_pdi`, `senha`, `confirm_senha`, `nome_completo`, `ra`, `data_aniversario`, `genero`, `celular`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `endereco`, `numero_endereco`, `email_institucional`, `curso`, `modaliadade_curso`, `inicio_curso`, `termino`, `semestre_curso`, `nome_foto`, `path_foto`, `codigo`, `perfil1`, `perfil2`, `passo`, `linkedin`, `resilience`, `interpersonal_relationship`, `communication`, `adaptability_and_flexibility`, `self_development_and_self_management`, `creativity_and_innovation`, `grauInstrucao`, `emprego`, `atividadeProfissional`, `colocacao`, `titulo1`, `link1`, `resumo1`, `titulo2`, `link2`, `resumo2`, `titulo3`, `link3`, `resumo3`, `titulo4`, `link4`, `resumo4`, `titulo5`, `link5`, `resumo5`, `titulo6`, `link6`, `resumo6`, `titulo7`, `link7`, `resumo7`, `titulo8`, `link8`, `resumo8`, `titulo9`, `link9`, `resumo9`, `titulo10`, `link10`, `resumo10`, `tituloTCC`, `linkTCC`, `resumoTCC`, `empresa1`, `funcao1`, `entrada1`, `saida1`, `empresa2`, `funcao2`, `entrada2`, `saida2`, `empresa3`, `funcao3`, `entrada3`, `saida3`, `empresa4`, `funcao4`, `entrada4`, `saida4`, `empresa5`, `funcao5`, `entrada5`, `saida5`, `tema_voluntario1`, `data_voluntario1`, `descricao_voluntario1`, `tema_voluntario2`, `data_voluntario2`, `descricao_voluntario2`, `tema_voluntario3`, `data_voluntario3`, `descricao_voluntario3`, `tituloOutro1`, `linkOutro1`, `resumoOutro1`, `tituloOutro2`, `linkOutro2`, `resumoOutro2`, `tituloOutro3`, `linkOutro3`, `resumoOutro3`) VALUES
(6, '5fb4517761572ad74c3fabcdb997dd6f', '123456', 'Ester dos Santos Carneiro Belloni', NULL, '1986-02-20', 'Feminino', '11 95220-9875', '02208-000', 'Brasil', 'SP', 'São Paulo', NULL, 'Rua da Esperança, 165', NULL, '218322023@eniac.edu.br', 'Psicologia', 'EAD', '2023-01-01', NULL, '1', '64a4ae8c46f7a', '64f343a24f06d.jpeg', '172e38', 'Acadêmico', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/esterdscbelloni/', 0.885, 0.57, 0.205, 0.18, 0.46, 0.135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '123456', '123456', 'Bianca Fernandes de Almeida', '123456789', '2023-08-01', 'Feminino', '11 99304-1463', '07131020', 'Brasil', 'SP', 'Guarulhos', 'Jardim Paulista ', 'Rua Alagoas ', 'Rua dsdsc', '123456789@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial', '2023-08-19', '2023-08-19', '5', '64ca845b9f6a0', '650c85f0c6872.jpg', '40e97c', '', '', '', '', 0, 0, 0, 0, 0, 0, 'Graduação Cursando', 'Procurando emprego na área do curso', 'Sim', 'Sim', 'asdasd', 'asdasd', 'asdasdasdasd', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'asd', 'asda', 'asdasdasd', 'SSSSSSSSSS', 'SSSSSSSSS', 'SSSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSSSSSS', 'ssss', 'sssss', 'ssssss', 'asdasd', 'asdasd', '2023-11-01', '2023-10-11', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', '2023-09-21', '2023-09-21', 'sdf', 'sdf', '2023-10-24', '2023-10-13', 'uuuuuuuuuuuu', 'uuuuuuuuuuuu', '2023-09-21', '2023-09-21', 'pppppppppppppppppppppppp', 'pppppppppppppppppppppppp', '2023-09-22', '2023-09-20', 'sdf', '2023-11-10', 'sdf', 'asd', '2023-10-16', 'asdas', 'asd', '2023-10-16', 'asd', 'ssssssssssssssss', 'ssssssssssssssssssss', 'ssssssssssssssssssss', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'ASDASDASDASDASDASD', 'ASDASDASDASDASDASD', 'ASDASDASDASDASDASD'),
(22, '123456789', '123456789', 'Bruna Alves Costa', NULL, '2023-08-23', 'Feminino', '11 99304-1463', '07012-030', 'Brasil', 'SP', 'Guarulhos', '698', 'Centro', 'Rua Força Pública', '1234567899@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-08-29', NULL, '2023-08-29', '64caaf78f0ad0', '6500b16e26441.jpg', 'a3d257', NULL, NULL, NULL, NULL, 0.885, 0.57, 0.205, 0.18, 0.46, 0.135, 'x', 'x', 'z', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdas', 'asdasdasd', '2023-10-25', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'foi1', '2023-08-09', 'foi1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '123456789', '123456789', 'Bruna Fernanda ', NULL, '2023-08-23', 'Feminino', '11 99304-1463', '05465-789', 'Brasil', 'Sp', 'Guarulhos', 'Jad', 'asdasd', '8451', '78945613@eniac.edu.br', 'Engenharia de Computação ', 'Presencial', '0000-00-00', NULL, '5', 'asdaf', '6500b1080c6c1.jpeg', '468a9c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '123456', '123456', 'Joel ', NULL, '2000-08-20', 'Masculino', '11 99999-9999', '234556', 'Brasil', 'SP', 'Guarulhos', 'sddddd', 'sssss', '23', '123456789999@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', NULL, 'asdasdasd', NULL, '64f7fa875986c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as', 'asd', 'asds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '123456', '123456', 'Joséfina Lara	', NULL, '0000-00-00', 'Feminino', '11 99999-9999', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'asdasdas', 'jhkgjfhd45', '875487575225@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', NULL, '04/02/1905', NULL, '6500ec8825846.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '123456', '123456', 'Lara Croft ', NULL, '0000-00-00', 'Feminino', '11 99999-9999', 'dcdcd', 'Brasil', 'São Paulo', 'GUARULHOS', 'Centro', 'sdcsdcsdcdsc', ' 400', '789515467862@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', NULL, '04/02/1905', NULL, '6500ec57dcff3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '123456', '123456', 'Arthur Demétrio', NULL, '0000-00-00', 'Masculino', '11 99999-9999', '795541', 'Brasil', 'SP', 'Guarulhos', 'ssssss', 'Rua Força Pública', '400 hgfdxhjk', '795465132104@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', NULL, '04/02/2002', NULL, '6500ecc262f12.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '123456', '123456', 'Arthur', NULL, '2023-09-22', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '7894@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '0000-00-00', NULL, '5', 'arthur.jpg', '650ca65ea3159.jpg', 'd153ba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '123456', '123456', 'Dona Gigi', NULL, '1999-09-09', 'Feminino', '1100000000000', '2547854-25', 'Brasil', 'SP', 'Guarulhos', 'Campos', 'RUA DOS CRIA', '1147', '2020452@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial', '0000-00-00', NULL, '1', 'bianca.jpeg', '650ca9b0e92f9.jpeg', '3000c7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'asd', 'asd', 'João ', NULL, '2023-09-22', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '7854@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-09-22', NULL, '5', 'arthur02.jpg', '650cadc13bab4.jpg', '8bfd2d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, '12', '12', 'teste', NULL, '2023-09-23', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '12@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-09-21', NULL, '5', 'anois.jpeg', '650d17344bca5.jpeg', 'f8850e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'asd', 'asd', 'aaaaaa', NULL, '2023-09-23', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', 'aaaa@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-09-20', NULL, '5', 'anois.jpeg', '650d9d8385d0a.jpeg', '3d0a89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'asd', 'asd', 'Julia Almeida', NULL, '2023-09-22', 'Feminino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '552@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-10-06', NULL, '1', 'bia4.jpg', '650d9e29e7ca9.jpg', '88d1bf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'asd', 'asd', 'ARTHUR DEMETRIO', NULL, '2023-09-16', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'Javali', 'ssssss', '400', 'arthur@gmail.com', 'Engenharia de Computação', 'Presencial', '2023-09-23', NULL, '5', 'Anonymous.svg.png', '650da18d2a7dc.png', 'c65797', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'carol07', 'carol07', 'Carolina Bacaycoa Silva', NULL, '2007-04-17', 'Feminino', '11944923389', '11111-111', 'Brasil', 'SP', 'Guarulhos', 'Centro', 'Rua Rio Novo', '600', NULL, 'Técnico', 'Ensino Médio', '2023-09-21', NULL, '2', 'bia3.jpg', '6511be1fd41db.jpg', 'dd19a9', 'Servidor Público', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/carolina-bacaycoa-silva-a90039291/', 0.528, 0.5225, 0.4595, 0.4845, 0.512, 0.561, 'Ensino Médio Incompleto', 'Estágio', 'Sim', 'Sim', 'Cactus ', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'Um site de vendas online.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Academy', 'Estagiário', '2023-09-16', '2023-09-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teste de sistema', '2023-09-25', 'Teste', NULL, NULL, NULL, NULL, NULL, NULL, 'Churrasco de família', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(55, '123456', '123456', 'Nathan Dias Ferraz', NULL, '2007-03-25', 'Masculino', '11972883163', '54678-333', 'Brasil', 'São Paulo (SP)', 'Guarulhos', 'Centro', 'Rua Rio Novo', '400', '120082020@eniac.edu.br', 'Técnico', 'Ensino Médio', '2021-02-01', NULL, '2', 'Anonymous.svg.png', '6511c3ea2a745.png', 'f3e2d5', 'Organizacional', 'Empreendedor', 'C6', '', 0, 0.545, 0.625, 0, 0, 0, 'Ensino Médio Incompleto', 'Desempregado', 'Sim', 'Sim', 'site chamei embalagens', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'site expositivo da empresa chamei embalagens', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eniac', 'eniaczeiro', '2021-12-11', '2023-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ajudar a velhinha na rua', '2006-03-25', 'ajudar a velhinha', NULL, NULL, NULL, NULL, NULL, NULL, 'site chamei embalagens', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(56, '107602022', '107602022', 'gabriel vieira rodrigues ', NULL, '2006-09-25', 'Masculino', '11949503502', '07.131-020', 'Brasil', 'São Paulo (SP)', 'Guarulhos', 'Centro', 'Rua Rio Novo', '400', '107602022@eniac.edu.br', 'informática', 'ensino médio', '2023-08-29', NULL, '2', 'Anonymous.svg.png', '6511c629111b5.png', '78816c', 'Acadêmico', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/gabriel-vieira-rodrigues-343088291/', 0.16, 0.6505, 0.528, 0.2035, 0.64, 0.638, 'Ensino Médio Incompleto', 'Desempregado', 'Não estou empregado(a) no momento', 'Não estou empregado(a) no momento', 'Sistema IAKAP', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'sdafsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ssa', 'sad', 'sdsdsads', 'eniac', 'Estagiário', '2023-08-29', '2023-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste de sistema ', '2023-09-25', 'testar sistema de criação de PDI', NULL, NULL, NULL, NULL, NULL, NULL, 'projeto', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(58, '1018120211', '1018120211', 'Arthur Tavares Peres', NULL, '2007-01-08', 'Masculino', '11942584059', '07298123', 'Brasil', 'SP', 'Guarulhos', 'Centro', 'Rua Força Publica', '250', '101812021@eniac.edu.br', 'informática', 'Ensino Médio', '2022-02-01', NULL, '2', 'arthur3.jpg', '6511d907c6cd0.jpg', '8e5a48', 'Empreendedor', 'Profissional Liberal', 'C5', '', 0.82, 0, 0.576, 0, 0, 0.755, 'Ensino Médio Incompleto', 'Desempregado', 'Sim', 'Não estou empregado(a) no momento', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ALGUMA COISA TALVEZ', 'Estagiário', '2022-02-02', '2024-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teste de alguma coisa', '2022-08-09', 'talvez exercido', NULL, NULL, NULL, NULL, NULL, NULL, 'fiz um site do the rock', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'gallagherjuju', 'gallagherjuju', 'Júlia Lessa da Silveira', NULL, '2006-12-20', 'Feminino', '11993415658', '07056070', 'Brasil', 'SP', 'Guarulhos', 'Vila Galvão', 'Rua Eloy de Castro Barros ', '114', NULL, 'pre-vest', 'Ensino Médio', '2024-12-30', NULL, '2', 'bia2.jpeg', '6511dab7e031a.jpeg', 'b73d68', 'Profissional Liberal', 'Acadêmico', 'C6', '', 0.531, 0.6, 0.5515, 0.4875, 0.545, 0.595, 'Ensino Médio Incompleto', 'Desempregado', 'Não estou empregado(a) no momento', 'Não estou empregado(a) no momento', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 'Estagiário', '2023-07-07', '2023-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teste de sistema', '2020-11-10', 'Teste', NULL, NULL, NULL, NULL, NULL, NULL, 'Churrasco de família', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(60, '123456789', '123456789', 'Giovana Andrade ', NULL, '2023-10-12', 'Feminino', '11 99999-9999', '07024170', 'Brasil', 'SP', 'Guarulhos', 'Jardim Paulista ', 'Rua Rio as', '400', '103534332022@eniac.edu.br', 'informática', 'Ensino Médio', '2023-10-19', NULL, '5', 'OIP.jpeg', '651c73f17eaad.jpeg', '640b00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '123456789', '123456789', 'Arthur Demétrio Lazaro ', '', '2023-10-19', 'Masculino', '11 99 3041463', '07131-020', 'Brasil', 'São Paulo', 'Guarulhos', 'Mun', 'dfgdfg', '43', '295792020@eniac.edu.br', 'Engenharia de Computação ', 'Presencial ', '2023-10-26', NULL, '6', 'lancamento.jpg', '65410b5269bc8.jpg', '82ecf2', 'Acadêmico', 'Organizacional', 'C6', '', 0.62, 0, 0.61, 0, 0, 0.618, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, '123456789', '123456789', 'Cláudio Brandão de Souza', '', '2023-10-13', 'Masculino', '11 99 3041463', '07131-020', 'Brasil', 'São Paulo', 'Guarulhos', 'Mun', 'asdasd', '23423', '205612023@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial ', '2023-10-25', NULL, '6', 'lancamento.jpg', '65413ca3da27a.jpg', 'd0cd0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '', '123', 'Arthur Demétrio Lazaro', '', '0000-00-00', '', '11 99 3041463', '07131-020', 'Brasil ', 'São Paulo', 'Guarulhos ', 'asdasd   ', 'asdasd', '', '23@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial    ', '2023-11-07', NULL, '6', 'eu.jpg', '654afcfa1f739.jpg', '3168ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graduação Cursando', 'Graduação Completa', 'Sim', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, '  ', '123456789', 'Stark Rosck', '234234', '0000-00-00', 'Masculino', '11 99 3041463', '07131-020', 'Brasil ', 'São Paulo', 'Guarulhos ', 'asdasd ', 'sdfsdf', '23', 'arthurdemetriolazaro370@gmail.com', 'Analise e Desenvolvimento de Sistemas ', 'Presencial  ', '2023-11-14', NULL, '6', NULL, '654afcfa1f739.jpg', '65a6a9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, '$2y$10$bjauLj2X000j6z1P8XFEdO86ECpFExCZb.uPc.87hDactxjW6nTn2', '123', 'sjdfjksdhfjhsjdfhjkshdfkhsdfkjs', '', '2023-11-14', 'Masculino', '11 99 3041463', '07131-020', 'Brasil', 'São Paulo', 'Guarulhos', 'asdasd', 'sdf', 'asdasd', 'arthurdemetriolazaro360@gmail.com', 'Analise e Desenvolvimento de Sistemas ', 'Presencial ', '2023-11-14', NULL, '6', NULL, NULL, '6980dc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, '', '123', 'Arthur Stark Rosck', '', '0000-00-00', '', '11 99 3041463', '07131-020', 'Brasil  ', 'São Paulo', 'Guarulhos  ', 'asdasd  ', '234234', '', '123@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial   ', '2023-11-28', NULL, '6', NULL, NULL, '5a53ee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, '$2y$10$cAlmktFuoZ.jxshyHmJe9uIJZUKhmbIbVr63rxjV/mqOKxi1pXrhy', '123', 'Novo teste ', '', '2023-11-21', 'Masculino', '11 99 3041463', '07131-020', 'Brasil', 'São Paulo', 'Guarulhos', 'asd', 'Rio assdfsd', 'asd', 'te@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial ', '2023-11-22', NULL, '6', NULL, '654afcfa1f739.jpg', 'e06f16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, '$2y$10$ZBgtLUqvdbjLmx9vssfsN.kVB7f1CMYYGyYGxCoWywrksEFCxkapW', NULL, 'outratela', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65@eniac.edu.br', NULL, NULL, NULL, NULL, NULL, NULL, '654afcfa1f739.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, '$2y$10$W.dlHWXFgwHJnnfOU3SM..67/cWO6IXMAnRZixfn.X/0KvwpSBwHG', 'asd', 'Arthur Demétrio Lazaro', 'asd', '2023-11-15', 'Masculino', '11 99 3041463', '07131-020', 'Brasil', 'São Paulo', 'Guarulhos', '', 'sdfsdfsd', 'asdasd', 'lop@gmail.com', 'Analise e Desenvolvimento de Sistemas ', 'Presencial', '2023-11-16', NULL, '6', NULL, NULL, '50b139', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, '$2y$10$qLpg2KkE8YKC6y4C3gQyUuft9FPxKe43Bnv27/bNndAPPIDAapc7O', '1234567', 'Carolina Bacaycoa Silva', '104702021', '2007-04-17', 'Feminino', '11944923389', '98656-876', 'brasil', 'sp', 'guarulhos', 'cobra', 'rua abobora 33', 'ap187', '104702021@eniac.edu.br', 'gastronomia', 'Híbrido', '2023-11-12', NULL, '1', NULL, NULL, '7ad205', 'Servidor Público', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/carolina-bacaycoa-silva-a90039291/', 0.528, 0.5225, 0.4595, 0.4845, 0.512, 0.561, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, '$2y$10$Ix8ifqSFVKUnvWSmLpLrpubzmFS9Z3GIzyaK5gmjqX6RJrOYTu3aO', '201206', 'Júlia Lessa da Silveira', '100252022', '2006-12-20', 'Feminino', '11993415658', '07026-070', 'Brasil', 'São Paulo', 'Guarulhos', 'cobra', 'rua abobora 34', 'casa', '100252022@eniac.edu.br', 'Pericia criminal', 'Presencial', '2020-04-03', NULL, '1', NULL, NULL, '4a2d6d', 'Profissional Liberal', 'Acadêmico', 'C6', '', 0.531, 0.6, 0.5515, 0.4875, 0.545, 0.595, 'Ensino Médio Incompleto', 'Desempregado', 'Não', 'Não', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desafios Éticos em Segurança da Informação:', 'https://www.google.com', 'Vamos conhecer mais sobre o seu Trabalho de Conclusão de Curso no Eniac.\r\n\r\n', 'GDPR', 'Gerente ', '2023-11-16', '2023-12-01', 'HIPAA', 'AUG', '2023-11-23', '2023-11-20', 'Desafios ', 'Gerente ', '2023-11-07', '2023-11-15', 'KALS', 'Gerente ', '2023-11-15', '2023-11-30', 'Kald', 'Gerente ', '2023-11-23', '0000-00-00', 'Gestão de Riscos em Segurança da Informação:', '2023-12-01', 'Explorar metodologias e melhores práticas para identificar, avaliar e mitigar riscos de segurança da informação em organizações.', 'Técnicas de Detecção e Prevenção de Ameaças Cibernéticas:', '2023-12-01', 'Investigar as últimas tecnologias e estratégias para detectar e prevenir ataques cibernéticos, incluindo o uso de inteligência artificial e aprendizado de máquina.', 'Desenvolvimento Seguro de Software:', '2023-12-01', 'Abordar práticas seguras de codificação, revisão de código e testes de segurança para garantir que as aplicações sejam desenvolvidas com segurança desde o início.', 'Gestão', 'http://localhost/Final_PDI_Servidor/src/projetoDe', 'http://localhost/Final_PDI_Servidor/src/projetoDe', ' (Internet das Coisas):', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao2.php', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao2.php', 'Biometria e Autenticação Multifatorial:', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao3.php', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao3.php'),
(73, '$2y$10$nsWD3W.NekT7HNcHbpFQYuU/O0P2rqzBj8POIkBLkIlcFSbCxftSO', '123456d', 'Maria Eduarda Ribeiro Coutinho', '118502021', '2006-11-23', 'Feminino', '11978422890', '57836509', 'Brasil', 'São Paulo', 'Guarulhos', 'vila arvore ', 'rua jaca 44', 'casa 14', '118502021@eniac.edu.br', 'marketing ', 'Presencial', '2023-11-12', NULL, '1', NULL, NULL, '1066ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, '$2y$10$DTK5UqjEFuSck4C3efUGIuap/D9EqODH0LpZqy/dFcwoZLHOLXHbC', 'ameba75', 'Annie Desireé Santos Uessugui', '108262019', '2007-04-19', 'Feminino', '11943199278', '07020086', 'Brasil', 'São Paulo', 'Guarulhos', 'vila ameba', 'rua ameba da silva', 'casa 78', '108262019@eniac.edu.br', 'Marketing', 'Presencial', '2023-05-09', NULL, '1', NULL, NULL, '58ea3c', 'Servidor Público', 'Acadêmico', 'C6', 'https://www.linkedin.com/annie-desire', 0.2, 0, 0.1325, 0.055, 0.05, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, '$2y$10$5fRe6aX41gGf9vFk2av/xeKhZE1d1YZdSrgtQ/Ea1R01KHkXoWopK', 'lmm123', 'Lívia Marques Mendes', '111092022', '2006-10-06', 'Feminino', '1183563583', '07906398', 'Brasil', 'São Paulo', 'Guarujá', 'Bairro das Laranjeiras', 'Rua Cornélia, 134', 'Perto da Avenida ', '111092022@eniac.edu.br', 'Administração', 'Presencial', '2023-07-25', NULL, '6', NULL, NULL, '8d719a', 'Profissional Liberal', 'Acadêmico', 'C6', 'https://www.linkedin.com/in/l%C3%ADviamarquesmendes/', 0.33, 0.3925, 0.2975, 0.0325, 0.25, 0.03, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, '$2y$10$2.ldA2Z2bBOA4GeRYM4k.OGWY1/ZriB0svaPu2BBsxioNQu7Wlub2', 'icbcpt@8096', 'Melissa Natale Ferreira Franco', '112962022', '2006-08-31', 'Outros', '11 252366379', '07623020', 'Brasil', 'São Paulo', 'Guarulhos', 'Bairro Anteontem', 'Rua Poggers', 'Casa', '112962022@eniac.edu.br', 'Marketing', 'Híbrido', '2023-09-13', NULL, '1', NULL, NULL, 'd4de52', 'Acadêmico', 'Profissional Liberal', 'C6', 'linkedin.com/in/melissa-natale-ferreira-franco-bb8734207', 0.515, 0.3975, 0.272, 0.3775, 0.586, 0.5575, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, '$2y$10$CDZ6ZPoW9KJ9XT0wqXE5lOLMN14/XVhV8NSOzcU4pgsHw6mHuYABO', '123456789', 'Maria Isabel  Nascimento ', '112742020', '2006-01-05', 'Feminino', '11976548165', '00400500', 'Brasil', 'Sao paulo', 'Guarulhos', 'pimentas', 'Rua primavera 167', 'casa', '112742020@eniac.edu.br', 'Administração', 'Presencial', '2023-06-05', NULL, '1', NULL, '6500b16e26441.jpg', 'a81e66', 'Acadêmico', 'Profissional Liberal', 'C6', 'www.linkedin.com/in/maria-isabel-nascimento-082718290', 0.7575, 0.7025, 0.6195, 0.445, 0.544, 0.6325, 'Ensino Médio Incompleto', 'Procurando emprego em qualquer área', 'Não', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desafios Éticos em Segurança da Informação:', 'https://www.google.com', 'Discutir dilemas éticos comuns enfrentados por profissionais de segurança da informação e propor soluções éticas.', 'GDPR', 'Gerente ', '2023-11-17', '2023-11-15', 'HIPAA', 'AUG', '2023-11-06', '2023-11-29', 'Desafios ', 'Gerente ', '2023-11-14', '2023-11-29', 'KALS', 'Gerente ', '2023-11-05', '2023-11-30', 'Kald', 'Gerente ', '2023-11-05', '2023-11-29', 'Gestão de Riscos em Segurança da Informação:', '2020-06-17', 'Explorar metodologias e melhores práticas para identificar, avaliar e mitigar riscos de segurança da informação em organizações.', 'Técnicas de Detecção e Prevenção de Ameaças Cibernéticas:', '2023-06-28', 'Investigar as últimas tecnologias e estratégias para detectar e prevenir ataques cibernéticos, incluindo o uso de inteligência artificial e aprendizado de máquina.', 'Desenvolvimento Seguro de Software:', '2022-02-22', 'Abordar práticas seguras de codificação, revisão de código e testes de segurança para garantir que as aplicações sejam desenvolvidas com segurança desde o início.', 'Gestão', 'http://localhost/Final_PDI_Servidor/src/projetoDe', 'http://localhost/Final_PDI_Servidor/src/projetoDe', ' (Internet das Coisas):', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao2.php', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao2.php', 'Biometria e Autenticação Multifatorial:', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao3.php', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao3.php'),
(78, '$2y$10$NO6ROyhtGUQGjRxF1Ga6cetnGBS2mYyg27wsZhvrUgACDyBwh6QF.', '123456789', 'gabriella dos reis silva', '116842020', '2005-07-28', 'Feminino', '11958008993', '00020098', 'brasil', 'sao paulo', 'guarulhos', 'pimentas', 'Rua primavera 167', '', '116842020@eniac.edu.br', 'Administração', 'Presencial', '2023-02-20', NULL, '6', NULL, NULL, 'a2644c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, '$2y$10$D2Vsfg88.lWcmIRt5QmXb.pUX3T1lnmrPnVQFyI3Tivj2pw4iUgAa', 'LAURARUBIA00', 'LAURA RUBIA CARLINI NOVAIS GONCALVES', '120512020', '2006-02-03', 'Feminino', '11 999917524', '12345789', 'Brasil', 'São Paulo', 'Guarulhos', 'JARDIM SAMANBAIA', 'RUA LIBERDADE', 'CASA2', '120512020@ENIAC.EDU.BR', 'ADMINISTRACAO', 'Presencial', '2023-06-04', NULL, '1', NULL, NULL, 'bacf83', 'Servidor Público', 'Acadêmico', 'C6', '', 0.391, 0, 0.466, 0, 0, 0.609, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, '$2y$10$hmqPL4s3L75KsetPGoseM.2UiFtVsw6dKWgSVVf91JvrSF1e0n9EC', 'mariana1903', 'Mariana Lima De Camargo', '115412020', '2005-03-19', 'Feminino', '11995610459', '08564134', 'Brasil', 'sao paulo', 'guarulhos', 'jorge amado', 'Rua alvares ', 'casa13', '115412020@eniac.edu.br', 'administracao', 'Presencial', '0000-00-00', NULL, '', NULL, NULL, '84ca40', 'Profissional Liberal', 'Acadêmico', 'C6', 'www.linkedin.com/in/mariana-lima-de-camargo-411474277', 0.6535, 0.7155, 0.4325, 0.458, 0.567, 0.5325, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, '$2y$10$zbcvrCe/r3Xiim.oCLbiuOT1TBdgwDqUeVIPHgK6CCkFIY8z9Qs.q', 'nildaeju', 'Júlia Andrade Martins', '103592021', '2005-08-26', 'Feminino', '1198453287', '98467325', 'França', 'São Paulo', 'Guarulhos', 'Cocaia', 'Rua abelha cornelia, 66', 'Casa', '103592021@eniac.edu.br', 'Administração', 'Presencial', '2010-10-10', NULL, '7', NULL, NULL, '9ea1a8', 'Profissional Liberal', 'Servidor Público', 'C6', '', 0.671, 0.803, 0.5885, 0.2825, 0.404, 0.6505, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, '$2y$10$Q0v.6ZyUJrgWUoXG.Fp6uupdAjVJ.ITSzWNa9Sv8NjLce47VD2QPW', 'lari', 'Larissa de Paula Yokomizo', '010802020', '2005-11-06', 'Feminino', '1196387493', '98356987', 'Brasil', 'São Paulo', 'Guarulhos', 'Cocaia', 'Rua etienne, 777', 'casa', '010802020@eniac.edu.br', 'Administração', 'Presencial', '2022-03-12', NULL, '5', NULL, NULL, 'fae0aa', 'Servidor Público', 'Empreendedor', 'C6', 'https://www.linkedin.com/in/larissa-yokomizo-0499b7208/', 0.565, 0, 0.4975, 0.312, 0.535, 0, 'Graduação Completa', 'Procurando emprego na área do curso', 'Não', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desafios Éticos em Segurança da Informação:', 'https://www.google.com', 'Vamos conhecer mais sobre o seu Trabalho de Conclusão de Curso no Eniac.', 'GDPR', 'Gerente ', '2023-11-22', '0000-00-00', 'HIPAA', 'AUG', '2023-11-07', '0000-00-00', 'Desafios ', 'Gerente ', '2023-11-30', '0000-00-00', NULL, NULL, NULL, NULL, 'Kald', 'Gerente ', '2023-11-30', '2023-11-30', 'Gestão de Riscos em Segurança da Informação:', '2023-11-06', 'Explorar metodologias e melhores práticas para identificar, avaliar e mitigar riscos de segurança da informação em organizações.', 'Técnicas de Detecção e Prevenção de Ameaças Cibernéticas:', '2023-10-29', 'Investigar as últimas tecnologias e estratégias para detectar e prevenir ataques cibernéticos, incluindo o uso de inteligência artificial e aprendizado de máquina.', 'Desenvolvimento Seguro de Software:', '2023-11-23', 'Abordar práticas seguras de codificação, revisão de código e testes de segurança para garantir que as aplicações sejam desenvolvidas com segurança desde o início.', 'Gestão', 'http://localhost/Final_PDI_Servidor/src/projetoDe', 'http://localhost/Final_PDI_Servidor/src/projetoDe', ' (Internet das Coisas):', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao2.php', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao2.php', 'Biometria e Autenticação Multifatorial:', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao3.php', 'http://localhost/Final_PDI_Servidor/src/projetoDeExtensao3.php'),
(86, '$2y$10$PjvJ2bOcKAnUstvri4R4lujXDF5qhJ17IfVuezJE6Z.5pCGI0yW5W', '03102006', 'Giovana Andrade de Souza', '103532022', '2006-10-03', 'Feminino', '959520017', '07023170', 'Brasil', 'São Paulo ', 'Guarulhos', 'ssss', 'av.morango', 'bl 5 apt 444', '103532022@eniac.edu.br', 'Adm', 'Presencial', '2023-10-22', NULL, '1', NULL, NULL, '37c848', 'Profissional Liberal', 'Acadêmico', 'C6', 'www.linkedin.com/in/giovana-andrade-de-souza-951a13290', 0.58, 0.62, 0.57, 0.4375, 0.3, 0.5825, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, '$2y$10$eDgF.uAcyxf6X2gzANv2sOX2gtKEB5Gdkg/WENkA7buk1s1G6SJ4u', '1213', 'Lara Pavam Alves', '102792018', '2006-07-21', 'Feminino', '117766221', '10558', 'Brasil', 'São Paulo', 'Guarulhos', 'pato', 'Av. cobre', 'casa', '102792018@eniac.edu.br', 'Adm', 'Presencial', '2023-11-12', NULL, '1', NULL, NULL, '2e42b4', 'Servidor Público', 'Acadêmico', 'C6', '', 0.5785, 0, 0.462, 0.4845, 0.569, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, '$2y$10$2CzigDuKAYP3.D90si2Y2OpXWdKRM.N0704FdPB9ukzx2jBugH3pu', '13112022', 'Giulia de Almeida Lombardi', '104922021', '2000-08-22', 'Feminino', '1165255365', '03256522', 'Brasil', 'São paulo', 'Guarulhos', 'ssss', 'Rua primavera 167', 'Casa', '104922021@eniac.edu.br', 'Administração', 'Presencial', '2022-02-28', NULL, '2', NULL, NULL, '9da3f5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, '$2y$10$ggL9EAVx.k0btVe.d7CUYeYFY.x3WEBFlm6652NiOE1LDjvhsEZAe', 'In11032006', 'Ingrid Barbosa da Silva', '105712021', '2004-06-05', 'Feminino', '11587963174', '56403297', 'Brasil', 'São Paulo', 'Guarulhos', 'Borboleta azul', 'Rua Jabuti Preto 89', 'casa', '105712021@eniac.edu.br', 'Administração', 'Presencial', '2023-05-03', NULL, '6', NULL, NULL, 'af7601', 'Acadêmico', 'Profissional Liberal', 'C3', '', 0.587, 0.713, 0.5275, 0.0415, 0.1, 0.3175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, '$2y$10$Hp4Njj8pk12ccIikt1/2COs7vKKjDPV/iEADZwJ8Fjrw2F3rdvkIS', '1234', 'Isabela Cuenca Lopes ', '104332022', '2007-02-09', 'Feminino', '11909022007', '07998220', 'Cuenca', 'Isa city', 'Isalandia', 'Helicóptero', 'Rua Bernaddete Amtonio', '550', '104332022@eniac.edu.br', 'Marketing', 'Híbrido', '2023-03-30', NULL, '3', NULL, NULL, 'afe81f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, '$2y$10$a3vz5o0qZop1apEDwc5qSOChu.AgG0kfvVALpbdKKuDwomhXMifEW', '123123', 'Camilla Goes Chianeze', '103462021', '2004-04-04', 'Feminino', '11 987665798', '87605427', 'Brasil', 'São Paulo', 'Guarulhos', 'pe', 'rua pe de moleque 12', 'casa', '103462021@eniac.edu.br', 'Marketing', 'Presencial', '2023-08-08', NULL, '3', NULL, NULL, '7f4c3d', 'Servidor Público', 'Profissional Liberal', 'C6', 'www.linkedin.com/in/camilla-chianeze-849965243', 0.602, 0, 0.525, 0, 0, 0.71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `cadastro_pdi_2` (`idcadastro_pdi`, `senha`, `confirm_senha`, `nome_completo`, `ra`, `data_aniversario`, `genero`, `celular`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `endereco`, `numero_endereco`, `email_institucional`, `curso`, `modaliadade_curso`, `inicio_curso`, `termino`, `semestre_curso`, `nome_foto`, `path_foto`, `codigo`, `perfil1`, `perfil2`, `passo`, `linkedin`, `resilience`, `interpersonal_relationship`, `communication`, `adaptability_and_flexibility`, `self_development_and_self_management`, `creativity_and_innovation`, `grauInstrucao`, `emprego`, `atividadeProfissional`, `colocacao`, `titulo1`, `link1`, `resumo1`, `titulo2`, `link2`, `resumo2`, `titulo3`, `link3`, `resumo3`, `titulo4`, `link4`, `resumo4`, `titulo5`, `link5`, `resumo5`, `titulo6`, `link6`, `resumo6`, `titulo7`, `link7`, `resumo7`, `titulo8`, `link8`, `resumo8`, `titulo9`, `link9`, `resumo9`, `titulo10`, `link10`, `resumo10`, `tituloTCC`, `linkTCC`, `resumoTCC`, `empresa1`, `funcao1`, `entrada1`, `saida1`, `empresa2`, `funcao2`, `entrada2`, `saida2`, `empresa3`, `funcao3`, `entrada3`, `saida3`, `empresa4`, `funcao4`, `entrada4`, `saida4`, `empresa5`, `funcao5`, `entrada5`, `saida5`, `tema_voluntario1`, `data_voluntario1`, `descricao_voluntario1`, `tema_voluntario2`, `data_voluntario2`, `descricao_voluntario2`, `tema_voluntario3`, `data_voluntario3`, `descricao_voluntario3`, `tituloOutro1`, `linkOutro1`, `resumoOutro1`, `tituloOutro2`, `linkOutro2`, `resumoOutro2`, `tituloOutro3`, `linkOutro3`, `resumoOutro3`) VALUES
(92, '$2y$10$GxWv.hG/kOa8zp4JR4Sc.O0GinudwGfYL7XR4benosSEmmQZeojCC', '123123', 'Stephany Sabrina da Rocha', '115492020', '2005-02-20', 'Feminino', '11987564876', '07171195', 'Brasil', 'São Paulo', 'Guarulhos', 'Bairro do Limoeiro', 'Rua outono 990', 'na esquina', '115492020@eniac.edu.br', 'Recursos Humanos', 'Presencial', '2023-07-20', NULL, '7', NULL, NULL, 'c48e95', 'Profissional Liberal', 'Servidor Público', 'C6', 'www.linkedin.com/in/ stephany-sabrina-da-rocha-a0374127b', 0.414, 0.492, 0.3745, 0.0415, 0.285, 0.3205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, '$2y$10$Tb67oFT1gQsNaireKFP26.X.1EjT7oLNDkmQf62qoT8foYVsEPfGq', '123123', 'Rebeka Sukalaya Merkle', '100542022', '2000-04-25', 'Feminino', '11914163211', '5283598546', 'Brasil', 'São Paulo', 'Guarulhos', 'Bairro Amoreira', 'Rua Zé da Manga 250', 'casa', '100542022@eniac.edu.br', 'Turismo', 'Híbrido', '2010-10-29', NULL, '7', NULL, NULL, 'c1a208', 'Servidor Público', 'Organizacional', 'C6', 'https://www.linkedin.com/in/rebeka-merkle-118839240/', 0.5545, 0, 0.42, 0.277, 0.455, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, '$2y$10$YT6DUDoEmQurSyB/Wial1u1VV4OlE9Ru2u3z1DVDV4mabUJv0Ul32', 'sim', 'Ítalo Evaristo Malaguti', '102022017', '1873-04-24', 'Masculino', '11 735014798', '40028922', 'Brasil', 'São Paulo', 'Guarulhos', 'jardim jacinto leite', 'Rua isadora leite, 777', '', '102022017@eniac.edu.br', 'Administração', 'Presencial', '1537-05-31', NULL, '6', NULL, NULL, '9fb1fe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, '$2y$10$2G.INfIwwRBwW7/kRKJZP.teedskmGYjN/CqG.ZlO009JDqN66K8W', 'sim', 'Gustavo Rios Gualberto', '023952014', '2006-03-27', 'Masculino', '11970358476', '07240071', 'Brasil', 'Sao Paulo', 'guarulhos', 'pimentas', 'Rua Canutama', 'Casa', '023952014@eniac.edu.br', 'Administração', 'Presencial', '2002-08-30', NULL, '5', NULL, NULL, '7b8bfc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, '$2y$10$QSCYQWpE.bdNy/rpD9BQm.4SHR6q.rakg0F79BQBjplSFxvDaiA0y', 'nao', 'Gabriel Ribeiro Queiroz de Lima', '101002017', '2205-02-28', 'Masculino', '11958762658', '07025896', 'brasil', 'sao paulo', 'guarulhos', 'jui', 'Rua jorge', 'debaixo da ponte', '101002017@eniac.edu.br', 'Administração', 'Presencial', '2569-04-15', NULL, '5', NULL, NULL, '083263', 'Profissional Liberal', 'Servidor Público', 'C6', 'https://www.linkedin.com/feed/?trk=guest_homepage-basic_google-one-tap-submit', 0.3455, 0.4375, 0.313, 0.1, 0.237, 0.561, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, '$2y$10$hw7wBMeWPNkDf8mPQuLjlO6Hl8qAxFg95R3WqF05pRRdkBDBw48y.', 'nao', 'João Ricardo Gomes de Oliveira', '108432022', '0215-03-05', 'Masculino', '11933267285', '07114254', 'Brasil', 'São Paulo', 'Guarulhos', 'Grajau', 'Rua Alberto', '123', '108432022@eniac.edu.br', 'Economia', 'Presencial', '2020-02-28', NULL, '5', NULL, NULL, '1322fb', 'Empreendedor', 'Profissional Liberal', 'C6', '', 0.346, 0, 0.2785, 0, 0, 0.1555, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, '$2y$10$RTwyNpV73iMqPbQO6jiWAe8lfyIYP2O4CQoY6Td3eWQKdA/gzqs/m', 'sim', 'Gustavo Yuta Oda ', '013062016', '2005-03-22', 'Masculino', '11 963266585', '07144650', 'Estados Unidos', 'Sp', 'Amazonas', 'Rio de Janeiro ', 'Osasco', 'cobertura ', '013062016@eniac.edu.br', 'Gari', 'Presencial', '2013-02-12', NULL, '5', NULL, NULL, '890d05', 'Profissional Liberal', 'Servidor Público', 'C6', '', 0.641, 0.466, 0.458, 0.414, 0.2, 0.461, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, '$2y$10$QtFrYtasEz3gEmqNdwfunuWREt9g9r6SX57db/pItJxANTt0faMf2', 'talvez', 'Caio Oliveria Moura', '104812022', '2012-12-12', 'Masculino', '11987808655', '07111089', 'tailandia', 'novo mexico', 'texas', 'massachucets', 'mairiporã', 'arranha ceu', '104812022@eniac.edu.br', 'odonto', 'Presencial', '2013-12-12', NULL, '7', NULL, NULL, '543b28', 'Empreendedor', 'Organizacional', 'C6', '', 0.46, 0, 0.5245, 0, 0, 0.275, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, '$2y$10$7zQ/Qa4noATYohzD/zvR4eOcC1kHtmRvwXeiyDo4wRDuqPJAVgUzW', 'rhyto123', 'Rhyan Soares dos Santos', '100192017', '2023-10-19', 'Masculino', '123456789', '0705869', 'Nigéria', 'Rondonia', 'Pernambuco', 'cocaia', 'nova guinésia ', 'Rua adalbertinho bobao N34', '100192017@eniac.edu.br', 'veterinário humano', 'Online', '2009-02-09', NULL, '3', NULL, NULL, '1f14eb', 'Acadêmico', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/rhyan-soares-dos-santos', 0.4865, 0.485, 0.3925, 0.1065, 0.353, 0.5365, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, '$2y$10$0cJpLTTKNiwa7yyd1XzUNuWpNCkAic.4TbWX2sBPEiEMGvuzUsk2y', 'felipe2505', 'Felipe Oliveira da Silva ', '117152021', '2006-05-25', 'Masculino', '11 99 3041463', '07040010', 'Brasil', 'São Paulo', 'Guarulhos', 'centro', 'rua eniac', 'casa', '117152021@eniac.edu.br', 'mecatrônica', 'Presencial', '2021-08-07', NULL, '4', NULL, NULL, '124dee', 'Profissional Liberal', 'Acadêmico', 'C6', 'https://www.linkedin.com/feed/?trk=homepage-basic_sign-in-submit', 0.4855, 0.6795, 0.5595, 0.193, 0.359, 0.6015, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, '$2y$10$OfezwRXyxBk/ZRD.CxulQONe1GMRwq3apbFX9L3DvOOOCJwbf9/hy', 'vai vai ', 'Ricardo Henrique Zach ', '103432021', '2006-08-23', 'Masculino', '11993415658', '07084060', 'Brasil', 'São Paulo', 'Guarulhos', 'cobra', 'rua muito legal, N220', 'casa', '103432021@eniac.edu.br', 'Administração', 'Online', '1990-08-23', NULL, '5', NULL, NULL, '20caa3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, '$2y$10$3AXS4Dh7nmhMthQOTYGw1eR1CAP.9Si0MYIHp9kn1DpeFAS8t6RIm', '12345', 'Pedro Henrique Lopes', '105592021', '8088-08-08', 'Masculino', '123456789', '09024000', 'brasil', 'sp', 'Guarulhos', 'centro', 'rua bacana n66', 'casa', '105592021@eniac.edu.br', 'meca', 'Online', '0000-00-00', NULL, '3', NULL, NULL, 'c26d7d', 'Organizacional', 'Acadêmico', 'C6', 'https://linkedin.com/in/pedro-lopes-271a19286/', 0, 0.4965, 0.4255, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, '$2y$10$oDesgW3DYvalkQ.V.WhuHua481LM4mVd52eXgm8cX8UjICFP45Maa', '12345', 'Arthur Ciribeli', '111302022', '0000-00-00', 'Masculino', '11111111111', '07131-020', 'Brasil', 'São Paulo', 'Guarulhos', 'asas', 'asdasdasdasd 344', 'casa', '111302022@eniac.edu.br', 'Adm', 'Online', '0000-00-00', NULL, '1', NULL, NULL, 'd9c561', 'Acadêmico', 'Profissional Liberal', 'C6', 'linkedin.com/in/arthur-ciribeli-b18b0528b', 0.2375, 0.2375, 0.2225, 0.02, 0.02, 0.0955, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `idchamados` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `mensagem` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico_adm`
--

CREATE TABLE `historico_adm` (
  `idhistorico_adm` int(11) NOT NULL,
  `cadastro_feito_pelo_adm` varchar(45) NOT NULL,
  `nome_pessoa_cadastrada` varchar(45) NOT NULL,
  `data_horario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `historico_adm`
--

INSERT INTO `historico_adm` (`idhistorico_adm`, `cadastro_feito_pelo_adm`, `nome_pessoa_cadastrada`, `data_horario`) VALUES
(1, 'Arthur', 'Julia Almeida', '2023-09-22 10:10:12'),
(2, 'Arthur', 'ARTHUR DEMETRIO LAZARO', '2023-09-22 11:15:41'),
(3, 'Arthur', 'Carolina Bacaycoa Silva', '2023-09-25 14:06:39'),
(4, 'Arthur', 'Nathan Dias Ferraz', '2023-09-25 14:31:22'),
(5, 'Arthur', 'gabriel vieira rodrigues ', '2023-09-25 14:40:57'),
(6, 'Arthur', 'Giovana Andrade de Souza', '2023-09-25 14:48:20'),
(7, 'Arthur', 'Arthur Tavares Peres', '2023-09-25 16:01:27'),
(8, 'Arthur', 'Júlia Lessa da Silveira', '2023-09-25 16:08:39'),
(9, 'Vanessa Reyes Manzano', 'Giovana Andrade ', '2023-10-03 17:05:05'),
(10, 'Arthur ', 'Arthur Demétrio Lazaro ', '2023-10-31 11:12:34'),
(11, 'Arthur ', 'Cláudio Brandão de Souza', '2023-10-31 14:42:59'),
(12, 'Arthur ', 'Teste Hash', '2023-11-08 00:14:02'),
(13, 'Arthur ', 'Arthur Demétrio Lazaro', '2023-11-08 15:00:11'),
(14, 'Arthur ', 'sjdfjksdhfjhsjdfhjkshdfkhsdfkjs', '2023-11-08 15:05:29'),
(15, 'Arthur ', 'Loger', '2023-11-08 15:10:34'),
(16, 'Arthur ', 'Novo teste ', '2023-11-08 16:40:41');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `tabela`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `tabela` (
`idcadastro_adm` int(11)
,`ra` varchar(45)
,`nome` varchar(45)
,`data_nascimento` varchar(45)
,`email` varchar(45)
,`senha` varchar(45)
,`conf_senha` varchar(45)
,`codigo` varchar(45)
,`path_foto` varchar(45)
,`loger` varchar(45)
,`ultimo_loger` varchar(45)
,`ultima_criacao` varchar(45)
,`ultima_modificacao` varchar(45)
);

-- --------------------------------------------------------

--
-- Estrutura para view `tabela`
--
DROP TABLE IF EXISTS `tabela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabela`  AS SELECT `cadastro_adm`.`idcadastro_adm` AS `idcadastro_adm`, `cadastro_adm`.`ra` AS `ra`, `cadastro_adm`.`nome` AS `nome`, `cadastro_adm`.`data_nascimento` AS `data_nascimento`, `cadastro_adm`.`email` AS `email`, `cadastro_adm`.`senha` AS `senha`, `cadastro_adm`.`conf_senha` AS `conf_senha`, `cadastro_adm`.`codigo` AS `codigo`, `cadastro_adm`.`path_foto` AS `path_foto`, `cadastro_adm`.`loger` AS `loger`, `cadastro_adm`.`ultimo_loger` AS `ultimo_loger`, `cadastro_adm`.`ultima_criacao` AS `ultima_criacao`, `cadastro_adm`.`ultima_modificacao` AS `ultima_modificacao` FROM `cadastro_adm` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_adm`
--
ALTER TABLE `cadastro_adm`
  ADD PRIMARY KEY (`idcadastro_adm`);

--
-- Índices de tabela `cadastro_pdi_2`
--
ALTER TABLE `cadastro_pdi_2`
  ADD PRIMARY KEY (`idcadastro_pdi`);

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`idchamados`);

--
-- Índices de tabela `historico_adm`
--
ALTER TABLE `historico_adm`
  ADD PRIMARY KEY (`idhistorico_adm`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_adm`
--
ALTER TABLE `cadastro_adm`
  MODIFY `idcadastro_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `cadastro_pdi_2`
--
ALTER TABLE `cadastro_pdi_2`
  MODIFY `idcadastro_pdi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `idchamados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `historico_adm`
--
ALTER TABLE `historico_adm`
  MODIFY `idhistorico_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
