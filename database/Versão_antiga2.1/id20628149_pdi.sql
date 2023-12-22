-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2023 às 17:51
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
(13, '65461885', 'Arthur ', '2023-08-17', '295792020@eniac.edu.br', '123456789', '123456789', '3a7999', '650d099f5986b.jpg', '2023-10-23 14:38:46', '2023-10-23 14:44:13', '2023-09-25 14:31:22', '2023-10-03 10:08:41'),
(14, '65461885', 'Arthur', '2023-09-28', '65461885@eniac.edu.br', 'asd', 'asd', '43f237', '', '', '', '', ''),
(15, '65461885', 'Arthur', '2023-09-28', '65461885@eniac.edu.br', 'asdasd', 'asdasd', 'e35592', '', '', '', '', ''),
(16, '655396', 'Vanessa Reyes Manzano', '2023-10-02', 'vanessa.manzano@eniac.edu.br', '123456789', '123456789', 'b5c585', '', '2023-10-25 15:21:18', '2023-10-03 17:05:15', '2023-10-03 17:05:05', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_pdi_2`
--

CREATE TABLE `cadastro_pdi_2` (
  `idcadastro_pdi` int(11) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `confirm_senha` varchar(100) DEFAULT NULL,
  `nome_completo` varchar(200) DEFAULT NULL,
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
(19, '123456', '123456', 'Bianca Fernandes de Almeida', '123456789', '2023-08-01', 'Feminino', '11 99304-1463', '07131020', 'Brasil', 'SP', 'Guarulhos', 'Jardim Paulista ', 'Rua Alagoas ', 'Rua dsdsc', '123456789@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial', '2023-08-19', '2023-08-19', '5', '64ca845b9f6a0', '650c85f0c6872.jpg', '40e97c', NULL, NULL, NULL, 'https://www.linkedin.com/feed/', 0.885, 0.57, 0.205, 0.18, 0.46, 0.135, 'Graduação Cursando', 'Procurando emprego na área do curso', 'Sim', 'Sim', 'asdasd', 'asdasd', 'asdasdasdasd', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'asd', 'asda', 'asdasdasd', 'SSSSSSSSSS', 'SSSSSSSSS', 'SSSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSSSSSS', 'ssss', 'sssss', 'ssssss', 'asdasd', 'asdasd', '2023-11-01', '2023-10-11', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', '2023-09-21', '2023-09-21', 'sdf', 'sdf', '2023-10-24', '2023-10-13', 'uuuuuuuuuuuu', 'uuuuuuuuuuuu', '2023-09-21', '2023-09-21', 'pppppppppppppppppppppppp', 'pppppppppppppppppppppppp', '2023-09-22', '2023-09-20', 'sdf', '2023-11-10', 'sdf', 'asd', '2023-10-16', 'asdas', 'asd', '2023-10-16', 'asd', 'ssssssssssssssss', 'ssssssssssssssssssss', 'ssssssssssssssssssss', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'ASDASDASDASDASDASD', 'ASDASDASDASDASDASD', 'ASDASDASDASDASDASD'),
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
(54, 'carol07', 'carol07', 'Carolina Bacaycoa Silva', NULL, '2007-04-17', 'Feminino', '11944923389', '11111-111', 'Brasil', 'SP', 'Guarulhos', 'Centro', 'Rua Rio Novo', '600', '104702021@eniac.edu.br', 'Técnico', 'Ensino Médio', '2023-09-21', NULL, '2', 'bia3.jpg', '6511be1fd41db.jpg', 'dd19a9', 'Servidor Público', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/carolina-bacaycoa-silva-a90039291/', 0.528, 0.5225, 0.4595, 0.4845, 0.512, 0.561, 'Ensino Médio Incompleto', 'Estágio', 'Sim', 'Sim', 'Cactus ', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'Um site de vendas online.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Academy', 'Estagiário', '2023-09-16', '2023-09-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teste de sistema', '2023-09-25', 'Teste', NULL, NULL, NULL, NULL, NULL, NULL, 'Churrasco de família', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(55, '123456', '123456', 'Nathan Dias Ferraz', NULL, '2007-03-25', 'Masculino', '11972883163', '54678-333', 'Brasil', 'São Paulo (SP)', 'Guarulhos', 'Centro', 'Rua Rio Novo', '400', '120082020@eniac.edu.br', 'Técnico', 'Ensino Médio', '2021-02-01', NULL, '2', 'Anonymous.svg.png', '6511c3ea2a745.png', 'f3e2d5', 'Organizacional', 'Empreendedor', 'C6', '', 0, 0.545, 0.625, 0, 0, 0, 'Ensino Médio Incompleto', 'Desempregado', 'Sim', 'Sim', 'site chamei embalagens', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'site expositivo da empresa chamei embalagens', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eniac', 'eniaczeiro', '2021-12-11', '2023-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ajudar a velhinha na rua', '2006-03-25', 'ajudar a velhinha', NULL, NULL, NULL, NULL, NULL, NULL, 'site chamei embalagens', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(56, '107602022', '107602022', 'gabriel vieira rodrigues ', NULL, '2006-09-25', 'Masculino', '11949503502', '07.131-020', 'Brasil', 'São Paulo (SP)', 'Guarulhos', 'Centro', 'Rua Rio Novo', '400', '107602022@eniac.edu.br', 'informática', 'ensino médio', '2023-08-29', NULL, '2', 'Anonymous.svg.png', '6511c629111b5.png', '78816c', 'Acadêmico', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/gabriel-vieira-rodrigues-343088291/', 0.16, 0.6505, 0.528, 0.2035, 0.64, 0.638, 'Ensino Médio Incompleto', 'Desempregado', 'Não estou empregado(a) no momento', 'Não estou empregado(a) no momento', 'Sistema IAKAP', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'sdafsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ssa', 'sad', 'sdsdsads', 'eniac', 'Estagiário', '2023-08-29', '2023-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste de sistema ', '2023-09-25', 'testar sistema de criação de PDI', NULL, NULL, NULL, NULL, NULL, NULL, 'projeto', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(57, '03102006', '103532022', 'Giovana Andrade de Souza', NULL, '2006-10-03', 'Feminino', '11959520017', '07024170', 'Brasil', 'SP', 'Guarulhos', 'Centro', 'Rua Rio Novo', '400', '103532022@eniac.edu.br', 'Administração', 'Ensino Médio', '2022-02-01', NULL, '2', 'bia4.jpg', '6511c7e4c7ec3.jpg', '013c55', 'Profissional Liberal', 'Acadêmico', 'C6', 'www.linkedin.com/in/giovana-andrade-de-souza-951a13290', 0.58, 0.62, 0.57, 0.4375, 0.3, 0.5825, 'Ensino Médio Incompleto', 'Desempregado', 'Sim', 'Sim', 'lotus', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'rh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ff', 'gggg', 'wwww', 'eniac', 'Estagiário', '2023-08-09', '2023-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdff', '2023-09-01', 'dfffff', NULL, NULL, NULL, NULL, NULL, NULL, 'curso', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(58, '1018120211', '1018120211', 'Arthur Tavares Peres', NULL, '2007-01-08', 'Masculino', '11942584059', '07298123', 'Brasil', 'SP', 'Guarulhos', 'Centro', 'Rua Força Publica', '250', '101812021@eniac.edu.br', 'informática', 'Ensino Médio', '2022-02-01', NULL, '2', 'arthur3.jpg', '6511d907c6cd0.jpg', '8e5a48', 'Empreendedor', 'Profissional Liberal', 'C5', '', 0.82, 0, 0.576, 0, 0, 0.755, 'Ensino Médio Incompleto', 'Desempregado', 'Sim', 'Não estou empregado(a) no momento', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ALGUMA COISA TALVEZ', 'Estagiário', '2022-02-02', '2024-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teste de alguma coisa', '2022-08-09', 'talvez exercido', NULL, NULL, NULL, NULL, NULL, NULL, 'fiz um site do the rock', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'gallagherjuju', 'gallagherjuju', 'Júlia Lessa da Silveira', NULL, '2006-12-20', 'Feminino', '11993415658', '07056070', 'Brasil', 'SP', 'Guarulhos', 'Vila Galvão', 'Rua Eloy de Castro Barros ', '114', '100252022@eniac.edu.br', 'pre-vest', 'Ensino Médio', '2024-12-30', NULL, '2', 'bia2.jpeg', '6511dab7e031a.jpeg', 'b73d68', 'Profissional Liberal', 'Acadêmico', 'C6', '', 0.531, 0.6, 0.5515, 0.4875, 0.545, 0.595, 'Ensino Médio Incompleto', 'Desempregado', 'Não estou empregado(a) no momento', 'Não estou empregado(a) no momento', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 'Estagiário', '2023-07-07', '2023-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teste de sistema', '2020-11-10', 'Teste', NULL, NULL, NULL, NULL, NULL, NULL, 'Churrasco de família', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', 'http://localhost/Final_PDI_Servidor/src/Projetoextensao1.php', NULL, NULL, NULL, NULL, NULL, NULL),
(60, '123456789', '123456789', 'Giovana Andrade ', NULL, '2023-10-12', 'Feminino', '11 99999-9999', '07024170', 'Brasil', 'SP', 'Guarulhos', 'Jardim Paulista ', 'Rua Rio as', '400', '103534332022@eniac.edu.br', 'informática', 'Ensino Médio', '2023-10-19', NULL, '5', 'OIP.jpeg', '651c73f17eaad.jpeg', '640b00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(9, 'Vanessa Reyes Manzano', 'Giovana Andrade ', '2023-10-03 17:05:05');

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
  MODIFY `idcadastro_pdi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `idchamados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `historico_adm`
--
ALTER TABLE `historico_adm`
  MODIFY `idhistorico_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
