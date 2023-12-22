-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2023 às 16:37
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.1.17

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
-- Estrutura da tabela `cadastro_adm`
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
-- Extraindo dados da tabela `cadastro_adm`
--

INSERT INTO `cadastro_adm` (`idcadastro_adm`, `ra`, `nome`, `data_nascimento`, `email`, `senha`, `conf_senha`, `codigo`, `path_foto`, `loger`, `ultimo_loger`, `ultima_criacao`, `ultima_modificacao`) VALUES
(11, '565641', 'c d d dd', '2023-08-18', '', '123456789', '123456789a', '', '', '', '', '', ''),
(12, '84220', 'ccIO dfvdfvdfvdf', '2023-08-18', '', '123456789', '123456789a', '', '', '', '', '', ''),
(13, '65461885', 'Arthur', '2023-08-17', '295792020@eniac.edu.br', '123456789', '123456789', '3a7999', '650d099f5986b.jpg', '2023-09-22 11:22:01', '2023-09-22 01:27:29', '2023-09-22 11:15:41', '2023-09-22 01:15:27'),
(14, '65461885', 'Arthur', '2023-09-28', '65461885@eniac.edu.br', 'asd', 'asd', '43f237', '', '', '', '', ''),
(15, '65461885', 'Arthur', '2023-09-28', '65461885@eniac.edu.br', 'asdasd', 'asdasd', 'e35592', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `cadastro_pdi`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `cadastro_pdi` (
`idcadastro_pdi` int(11)
,`senha` varchar(100)
,`confirm_senha` varchar(100)
,`nome_completo` varchar(200)
,`data_aniversario` date
,`genero` varchar(20)
,`celular` varchar(20)
,`cep` varchar(10)
,`pais` varchar(100)
,`estado` varchar(100)
,`cidade` varchar(100)
,`bairro` varchar(45)
,`endereco` varchar(200)
,`numero_endereco` varchar(45)
,`email_institucional` varchar(100)
,`curso` varchar(100)
,`modaliadade_curso` varchar(100)
,`inicio_curso` date
,`semestre_curso` varchar(20)
,`nome_foto` varchar(100)
,`path_foto` varchar(200)
,`codigo` varchar(45)
,`perfil1` varchar(100)
,`perfil2` varchar(100)
,`passo` varchar(3)
,`linkedin` varchar(200)
,`resilience` float
,`interpersonal_relationship` float
,`communication` float
,`adaptability_and_flexibility` float
,`self_development_and_self_management` float
,`creativity_and_innovation` float
,`grauInstrucao` varchar(50)
,`emprego` varchar(50)
,`atividadeProfissional` varchar(50)
,`colocacao` varchar(50)
,`titulo1` varchar(255)
,`link1` varchar(255)
,`resumo1` text
,`titulo2` varchar(255)
,`link2` varchar(255)
,`resumo2` text
,`titulo3` varchar(255)
,`link3` varchar(255)
,`resumo3` text
,`titulo4` varchar(255)
,`link4` varchar(255)
,`resumo4` text
,`titulo5` varchar(255)
,`link5` varchar(255)
,`resumo5` text
,`titulo6` varchar(255)
,`link6` varchar(255)
,`resumo6` text
,`titulo7` varchar(255)
,`link7` varchar(255)
,`resumo7` text
,`titulo8` varchar(255)
,`link8` varchar(255)
,`resumo8` text
,`titulo9` varchar(255)
,`link9` varchar(255)
,`resumo9` text
,`titulo10` varchar(255)
,`link10` varchar(255)
,`resumo10` text
,`tituloTCC` varchar(255)
,`linkTCC` varchar(255)
,`resumoTCC` text
,`empresa1` varchar(255)
,`funcao1` varchar(255)
,`entrada1` date
,`saida1` date
,`empresa2` varchar(255)
,`funcao2` varchar(255)
,`entrada2` date
,`saida2` date
,`empresa3` varchar(255)
,`funcao3` varchar(255)
,`entrada3` date
,`saida3` date
,`empresa4` varchar(255)
,`funcao4` varchar(255)
,`entrada4` date
,`saida4` date
,`empresa5` varchar(255)
,`funcao5` varchar(255)
,`entrada5` date
,`saida5` date
,`tema_voluntario1` varchar(255)
,`data_voluntario1` date
,`descricao_voluntario1` text
,`tema_voluntario2` varchar(255)
,`data_voluntario2` date
,`descricao_voluntario2` text
,`tema_voluntario3` varchar(255)
,`data_voluntario3` date
,`descricao_voluntario3` text
,`tituloOutro1` varchar(255)
,`linkOutro1` varchar(255)
,`resumoOutro1` text
,`tituloOutro2` varchar(255)
,`linkOutro2` varchar(255)
,`resumoOutro2` text
,`tituloOutro3` varchar(255)
,`linkOutro3` varchar(255)
,`resumoOutro3` text
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_pdi_2`
--

CREATE TABLE `cadastro_pdi_2` (
  `idcadastro_pdi` int(11) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `confirm_senha` varchar(100) DEFAULT NULL,
  `nome_completo` varchar(200) DEFAULT NULL,
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
-- Extraindo dados da tabela `cadastro_pdi_2`
--

INSERT INTO `cadastro_pdi_2` (`idcadastro_pdi`, `senha`, `confirm_senha`, `nome_completo`, `data_aniversario`, `genero`, `celular`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `endereco`, `numero_endereco`, `email_institucional`, `curso`, `modaliadade_curso`, `inicio_curso`, `semestre_curso`, `nome_foto`, `path_foto`, `codigo`, `perfil1`, `perfil2`, `passo`, `linkedin`, `resilience`, `interpersonal_relationship`, `communication`, `adaptability_and_flexibility`, `self_development_and_self_management`, `creativity_and_innovation`, `grauInstrucao`, `emprego`, `atividadeProfissional`, `colocacao`, `titulo1`, `link1`, `resumo1`, `titulo2`, `link2`, `resumo2`, `titulo3`, `link3`, `resumo3`, `titulo4`, `link4`, `resumo4`, `titulo5`, `link5`, `resumo5`, `titulo6`, `link6`, `resumo6`, `titulo7`, `link7`, `resumo7`, `titulo8`, `link8`, `resumo8`, `titulo9`, `link9`, `resumo9`, `titulo10`, `link10`, `resumo10`, `tituloTCC`, `linkTCC`, `resumoTCC`, `empresa1`, `funcao1`, `entrada1`, `saida1`, `empresa2`, `funcao2`, `entrada2`, `saida2`, `empresa3`, `funcao3`, `entrada3`, `saida3`, `empresa4`, `funcao4`, `entrada4`, `saida4`, `empresa5`, `funcao5`, `entrada5`, `saida5`, `tema_voluntario1`, `data_voluntario1`, `descricao_voluntario1`, `tema_voluntario2`, `data_voluntario2`, `descricao_voluntario2`, `tema_voluntario3`, `data_voluntario3`, `descricao_voluntario3`, `tituloOutro1`, `linkOutro1`, `resumoOutro1`, `tituloOutro2`, `linkOutro2`, `resumoOutro2`, `tituloOutro3`, `linkOutro3`, `resumoOutro3`) VALUES
(6, '5fb4517761572ad74c3fabcdb997dd6f', '123456', 'Ester dos Santos Carneiro Belloni', '1986-02-20', 'Feminino', '11 95220-9875', '02208-000', 'Brasil', 'SP', 'São Paulo', NULL, 'Rua da Esperança, 165', NULL, '218322023@eniac.edu.br', 'Psicologia', 'EAD', '2023-01-01', '1', '64a4ae8c46f7a', '64f343a24f06d.jpeg', '172e38', 'Acadêmico', 'Profissional Liberal', 'C6', 'https://www.linkedin.com/in/esterdscbelloni/', 0.885, 0.57, 0.205, 0.18, 0.46, 0.135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '123456', '123456', 'Bianca Costa Sílva ', '2023-08-01', 'Feminino', '11 99304-1463', '07131020', 'Brasil', 'SP', 'Guarulhos', 'Jardim Paulista ', 'Rua Alagoas ', 'Rua dsdsc', '123456789@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial', '2023-08-19', '5', '64ca845b9f6a0', '650c85f0c6872.jpg', '40e97c', NULL, NULL, NULL, 'https://www.linkedin.com/feed/', 0.885, 0.57, 0.205, 0.18, 0.46, 0.135, 'Graduação Cursando', 'Especialização Cursando', 'Sim', 'Sim', 'asdasdasd', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador1.php', 'SDFSDFSDFSDFSDF', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'ASDASDASD', 'AAAAAAAAAA', 'http://localhost/Final_PDI_Servidor/src/projeto_integrador8.php', 'AAAAAAAAAA', 'SSSSSSSSSS', 'SSSSSSSSS', 'SSSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSSSSSS', 'ssssssssssssssss', 'ssssssssssssssss', 'ssssssssssssssss', 'eeeeeeee', 'eeeeeee', '2023-09-22', '2023-09-22', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', '2023-09-21', '2023-09-21', 'cccccccccccc', 'cccccccccccc', '2023-09-22', '2023-09-22', 'uuuuuuuuuuuu', 'uuuuuuuuuuuu', '2023-09-21', '2023-09-21', 'pppppppppppppppppppppppp', 'pppppppppppppppppppppppp', '2023-09-22', '2023-09-20', 'xxxxxxxxxxxx', '2023-09-21', 'xxxxxxxxxxxxxxxxx', 'eeeeeeeeeeeeee', '2023-09-29', 'eeeeeeeeeeeeee', 'uuuuuuuuuuu', '2023-09-28', 'uuuuuuuuuuu', 'ssssssssssssssss', 'ssssssssssssssssssss', 'ssssssssssssssssssss', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'sdsdsdsdsdsdsdsd', 'ASDASDASDASDASDASD', 'ASDASDASDASDASDASD', 'ASDASDASDASDASDASD'),
(22, '123456789', '123456789', 'Bruna Alves Costa', '2023-08-23', 'Feminino', '11 99304-1463', '07012-030', 'Brasil', 'SP', 'Guarulhos', '698', 'Centro', 'Rua Força Pública', '1234567899@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-08-29', '2023-08-29', '64caaf78f0ad0', '6500b16e26441.jpg', 'a3d257', NULL, NULL, NULL, NULL, 0.885, 0.57, 0.205, 0.18, 0.46, 0.135, 'x', 'x', 'z', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'foi1', '2023-08-09', 'foi1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '123456789', '123456789', 'Bruna Fernanda ', '2023-08-23', 'Feminino', '11 99304-1463', '05465-789', 'Brasil', 'Sp', 'Guarulhos', 'Jad', 'asdasd', '8451', '78945613@eniac.edu.br', 'Engenharia de Computação ', 'Presencial', '0000-00-00', '5', 'asdaf', '6500b1080c6c1.jpeg', '468a9c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '123456', '123456', 'Joel ', '2000-08-20', 'Masculino', '11 99999-9999', '234556', 'Brasil', 'SP', 'Guarulhos', 'sddddd', 'sssss', '23', '123456789999@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', 'asdasdasd', NULL, '64f7fa875986c.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as', 'asd', 'asds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '123456', '123456', 'Joséfina Lara	', '0000-00-00', 'Feminino', '11 99999-9999', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'asdasdas', 'jhkgjfhd45', '875487575225@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', '04/02/1905', NULL, '6500ec8825846.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '123456', '123456', 'Lara Croft ', '0000-00-00', 'Feminino', '11 99999-9999', 'dcdcd', 'Brasil', 'São Paulo', 'GUARULHOS', 'Centro', 'sdcsdcsdcdsc', ' 400', '789515467862@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', '04/02/1905', NULL, '6500ec57dcff3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '123456', '123456', 'Arthur Demétrio', '0000-00-00', 'Masculino', '11 99999-9999', '795541', 'Brasil', 'SP', 'Guarulhos', 'ssssss', 'Rua Força Pública', '400 hgfdxhjk', '795465132104@eniac.edu.br', 'Engenharia de Computação', 'Presencial ', '0000-00-00', '04/02/2002', NULL, '6500ecc262f12.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '123456', '123456', 'Arthur', '2023-09-22', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '7894@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '0000-00-00', '5', 'arthur.jpg', '650ca65ea3159.jpg', 'd153ba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '123456', '123456', 'Dona Gigi', '1999-09-09', 'Feminino', '1100000000000', '2547854-25', 'Brasil', 'SP', 'Guarulhos', 'Campos', 'RUA DOS CRIA', '1147', '2020452@eniac.edu.br', 'Analise e Desenvolvimento de Sistemas ', 'Presencial', '0000-00-00', '1', 'bianca.jpeg', '650ca9b0e92f9.jpeg', '3000c7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'asd', 'asd', 'João ', '2023-09-22', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '7854@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-09-22', '5', 'arthur02.jpg', '650cadc13bab4.jpg', '8bfd2d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, '12', '12', 'teste', '2023-09-23', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '12@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-09-21', '5', 'anois.jpeg', '650d17344bca5.jpeg', 'f8850e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'asd', 'asd', 'aaaaaa', '2023-09-23', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', 'aaaa@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-09-20', '5', 'anois.jpeg', '650d9d8385d0a.jpeg', '3d0a89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'asd', 'asd', 'Julia Almeida', '2023-09-22', 'Feminino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'ssssss', 'ssssss', '400', '552@eniac.edu.br', 'Engenharia de Computação', 'Presencial', '2023-10-06', '1', 'bia4.jpg', '650d9e29e7ca9.jpg', '88d1bf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'asd', 'asd', 'ARTHUR DEMETRIO', '2023-09-16', 'Masculino', '11 99304-1463', '07131020', 'Brasil', 'São Paulo', 'GUARULHOS', 'Javali', 'ssssss', '400', 'arthur@gmail.com', 'Engenharia de Computação', 'Presencial', '2023-09-23', '5', 'Anonymous.svg.png', '650da18d2a7dc.png', 'c65797', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_adm`
--

CREATE TABLE `historico_adm` (
  `idhistorico_adm` int(11) NOT NULL,
  `cadastro_feito_pelo_adm` varchar(45) NOT NULL,
  `nome_pessoa_cadastrada` varchar(45) NOT NULL,
  `data_horario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `historico_adm`
--

INSERT INTO `historico_adm` (`idhistorico_adm`, `cadastro_feito_pelo_adm`, `nome_pessoa_cadastrada`, `data_horario`) VALUES
(1, 'Arthur', 'Julia Almeida', '2023-09-22 10:10:12'),
(2, 'Arthur', 'ARTHUR DEMETRIO LAZARO', '2023-09-22 11:15:41');

-- --------------------------------------------------------

--
-- Estrutura para vista `cadastro_pdi`
--
DROP TABLE IF EXISTS `cadastro_pdi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cadastro_pdi`  AS SELECT `cadastro_pdi_2`.`idcadastro_pdi` AS `idcadastro_pdi`, `cadastro_pdi_2`.`senha` AS `senha`, `cadastro_pdi_2`.`confirm_senha` AS `confirm_senha`, `cadastro_pdi_2`.`nome_completo` AS `nome_completo`, `cadastro_pdi_2`.`data_aniversario` AS `data_aniversario`, `cadastro_pdi_2`.`genero` AS `genero`, `cadastro_pdi_2`.`celular` AS `celular`, `cadastro_pdi_2`.`cep` AS `cep`, `cadastro_pdi_2`.`pais` AS `pais`, `cadastro_pdi_2`.`estado` AS `estado`, `cadastro_pdi_2`.`cidade` AS `cidade`, `cadastro_pdi_2`.`bairro` AS `bairro`, `cadastro_pdi_2`.`endereco` AS `endereco`, `cadastro_pdi_2`.`numero_endereco` AS `numero_endereco`, `cadastro_pdi_2`.`email_institucional` AS `email_institucional`, `cadastro_pdi_2`.`curso` AS `curso`, `cadastro_pdi_2`.`modaliadade_curso` AS `modaliadade_curso`, `cadastro_pdi_2`.`inicio_curso` AS `inicio_curso`, `cadastro_pdi_2`.`semestre_curso` AS `semestre_curso`, `cadastro_pdi_2`.`nome_foto` AS `nome_foto`, `cadastro_pdi_2`.`path_foto` AS `path_foto`, `cadastro_pdi_2`.`codigo` AS `codigo`, `cadastro_pdi_2`.`perfil1` AS `perfil1`, `cadastro_pdi_2`.`perfil2` AS `perfil2`, `cadastro_pdi_2`.`passo` AS `passo`, `cadastro_pdi_2`.`linkedin` AS `linkedin`, `cadastro_pdi_2`.`resilience` AS `resilience`, `cadastro_pdi_2`.`interpersonal_relationship` AS `interpersonal_relationship`, `cadastro_pdi_2`.`communication` AS `communication`, `cadastro_pdi_2`.`adaptability_and_flexibility` AS `adaptability_and_flexibility`, `cadastro_pdi_2`.`self_development_and_self_management` AS `self_development_and_self_management`, `cadastro_pdi_2`.`creativity_and_innovation` AS `creativity_and_innovation`, `cadastro_pdi_2`.`grauInstrucao` AS `grauInstrucao`, `cadastro_pdi_2`.`emprego` AS `emprego`, `cadastro_pdi_2`.`atividadeProfissional` AS `atividadeProfissional`, `cadastro_pdi_2`.`colocacao` AS `colocacao`, `cadastro_pdi_2`.`titulo1` AS `titulo1`, `cadastro_pdi_2`.`link1` AS `link1`, `cadastro_pdi_2`.`resumo1` AS `resumo1`, `cadastro_pdi_2`.`titulo2` AS `titulo2`, `cadastro_pdi_2`.`link2` AS `link2`, `cadastro_pdi_2`.`resumo2` AS `resumo2`, `cadastro_pdi_2`.`titulo3` AS `titulo3`, `cadastro_pdi_2`.`link3` AS `link3`, `cadastro_pdi_2`.`resumo3` AS `resumo3`, `cadastro_pdi_2`.`titulo4` AS `titulo4`, `cadastro_pdi_2`.`link4` AS `link4`, `cadastro_pdi_2`.`resumo4` AS `resumo4`, `cadastro_pdi_2`.`titulo5` AS `titulo5`, `cadastro_pdi_2`.`link5` AS `link5`, `cadastro_pdi_2`.`resumo5` AS `resumo5`, `cadastro_pdi_2`.`titulo6` AS `titulo6`, `cadastro_pdi_2`.`link6` AS `link6`, `cadastro_pdi_2`.`resumo6` AS `resumo6`, `cadastro_pdi_2`.`titulo7` AS `titulo7`, `cadastro_pdi_2`.`link7` AS `link7`, `cadastro_pdi_2`.`resumo7` AS `resumo7`, `cadastro_pdi_2`.`titulo8` AS `titulo8`, `cadastro_pdi_2`.`link8` AS `link8`, `cadastro_pdi_2`.`resumo8` AS `resumo8`, `cadastro_pdi_2`.`titulo9` AS `titulo9`, `cadastro_pdi_2`.`link9` AS `link9`, `cadastro_pdi_2`.`resumo9` AS `resumo9`, `cadastro_pdi_2`.`titulo10` AS `titulo10`, `cadastro_pdi_2`.`link10` AS `link10`, `cadastro_pdi_2`.`resumo10` AS `resumo10`, `cadastro_pdi_2`.`tituloTCC` AS `tituloTCC`, `cadastro_pdi_2`.`linkTCC` AS `linkTCC`, `cadastro_pdi_2`.`resumoTCC` AS `resumoTCC`, `cadastro_pdi_2`.`empresa1` AS `empresa1`, `cadastro_pdi_2`.`funcao1` AS `funcao1`, `cadastro_pdi_2`.`entrada1` AS `entrada1`, `cadastro_pdi_2`.`saida1` AS `saida1`, `cadastro_pdi_2`.`empresa2` AS `empresa2`, `cadastro_pdi_2`.`funcao2` AS `funcao2`, `cadastro_pdi_2`.`entrada2` AS `entrada2`, `cadastro_pdi_2`.`saida2` AS `saida2`, `cadastro_pdi_2`.`empresa3` AS `empresa3`, `cadastro_pdi_2`.`funcao3` AS `funcao3`, `cadastro_pdi_2`.`entrada3` AS `entrada3`, `cadastro_pdi_2`.`saida3` AS `saida3`, `cadastro_pdi_2`.`empresa4` AS `empresa4`, `cadastro_pdi_2`.`funcao4` AS `funcao4`, `cadastro_pdi_2`.`entrada4` AS `entrada4`, `cadastro_pdi_2`.`saida4` AS `saida4`, `cadastro_pdi_2`.`empresa5` AS `empresa5`, `cadastro_pdi_2`.`funcao5` AS `funcao5`, `cadastro_pdi_2`.`entrada5` AS `entrada5`, `cadastro_pdi_2`.`saida5` AS `saida5`, `cadastro_pdi_2`.`tema_voluntario1` AS `tema_voluntario1`, `cadastro_pdi_2`.`data_voluntario1` AS `data_voluntario1`, `cadastro_pdi_2`.`descricao_voluntario1` AS `descricao_voluntario1`, `cadastro_pdi_2`.`tema_voluntario2` AS `tema_voluntario2`, `cadastro_pdi_2`.`data_voluntario2` AS `data_voluntario2`, `cadastro_pdi_2`.`descricao_voluntario2` AS `descricao_voluntario2`, `cadastro_pdi_2`.`tema_voluntario3` AS `tema_voluntario3`, `cadastro_pdi_2`.`data_voluntario3` AS `data_voluntario3`, `cadastro_pdi_2`.`descricao_voluntario3` AS `descricao_voluntario3`, `cadastro_pdi_2`.`tituloOutro1` AS `tituloOutro1`, `cadastro_pdi_2`.`linkOutro1` AS `linkOutro1`, `cadastro_pdi_2`.`resumoOutro1` AS `resumoOutro1`, `cadastro_pdi_2`.`tituloOutro2` AS `tituloOutro2`, `cadastro_pdi_2`.`linkOutro2` AS `linkOutro2`, `cadastro_pdi_2`.`resumoOutro2` AS `resumoOutro2`, `cadastro_pdi_2`.`tituloOutro3` AS `tituloOutro3`, `cadastro_pdi_2`.`linkOutro3` AS `linkOutro3`, `cadastro_pdi_2`.`resumoOutro3` AS `resumoOutro3` FROM `cadastro_pdi_2` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_adm`
--
ALTER TABLE `cadastro_adm`
  ADD PRIMARY KEY (`idcadastro_adm`);

--
-- Índices para tabela `cadastro_pdi_2`
--
ALTER TABLE `cadastro_pdi_2`
  ADD PRIMARY KEY (`idcadastro_pdi`);

--
-- Índices para tabela `historico_adm`
--
ALTER TABLE `historico_adm`
  ADD PRIMARY KEY (`idhistorico_adm`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_adm`
--
ALTER TABLE `cadastro_adm`
  MODIFY `idcadastro_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cadastro_pdi_2`
--
ALTER TABLE `cadastro_pdi_2`
  MODIFY `idcadastro_pdi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `historico_adm`
--
ALTER TABLE `historico_adm`
  MODIFY `idhistorico_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
