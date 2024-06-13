-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2024 às 15:08
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_secretaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `e_mail` varchar(45) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `perfil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`usuario`, `senha`, `nome`, `telefone`, `e_mail`, `cep`, `curso`, `perfil`) VALUES
('05357296006', '963', 'Luiza Ferreira Cunha', '(87) 83675825', 'ferreiracunha@gmail.com', '56313-430 Rua Catanduba, 1542', 'Logística', 'ex_aluno'),
('12835639080', '111', 'Felipe Fernandes', '(64) 26822938', 'felipe_fernandes@gmail.com', '75802-055 Rua 107, 1906', 'Panificação', 'aluno'),
('24453750021', '789', 'Guilherme Pinto', '(16) 50182907', 'gui3465@gmail.com', '14802-241 Rua Adácio da Matta, 289', 'Desenvolvimento de Sistemas', 'aluno'),
('95784004034', '852', 'Antônio Barros Melo', '(68) 27278894', 'antoniomelos@gmail.com', '69906-435 Rua Belo Horizonte, 315', 'Manutenção de Máquinas Industriais', 'aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`usuario`, `senha`, `perfil`) VALUES
('05357296006', '963', 'ex_aluno'),
('12835639080', '111', 'aluno'),
('24453750021', '789', 'aluno'),
('95784004034', '852', 'aluno'),
('admin', '123', 'escola'),
('bruno_con', '789', 'empresa'),
('cisco_transporte', '456', 'empresa'),
('gie', '123', 'empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `cnpj` varchar(25) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `e_mail` varchar(45) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`cnpj`, `nome`, `telefone`, `e_mail`, `usuario`, `senha`) VALUES
('63422213000121', 'Bruno Contábil Ltda', '31 26870125', 'brunocontabilidade@gmail.com', 'bruno_con', '789'),
('75891029000100', 'Cisco Transportes Ltda', '(32) 26899629', 'ciscotransporte@gmail.com', 'cisco_transporte', '456'),
('94097657000162', 'GIE Industrial Ltda', '(34) 27103571', 'gieindustrial@gmail.com', 'gie', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `justificativas`
--

CREATE TABLE `justificativas` (
  `id` int(11) NOT NULL,
  `usuario_cpf` varchar(25) NOT NULL,
  `modalidade` varchar(50) NOT NULL,
  `motivo` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `arquivo` varchar(200) NOT NULL,
  `observacoes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `justificativas`
--

INSERT INTO `justificativas` (`id`, `usuario_cpf`, `modalidade`, `motivo`, `data`, `arquivo`, `observacoes`) VALUES
(1, '12835639080', 'Qualificação Profissional', 'Faltas', '2024-04-10', 'Alunos/12835639080/atestado_2024-04-10.pdf', 'Sintomas de Dengue'),
(2, '95784004034', 'Curso Técnico', 'Entrada em Atraso', '2024-05-06', 'Alunos/95784004034/atestado_2024-05-06.pdf', 'Entrada em Atraso pois estava em consulta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id` int(11) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `ano` int(11) NOT NULL,
  `local_arquivo` varchar(200) NOT NULL,
  `empresas_cnpj` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `relatorios`
--

INSERT INTO `relatorios` (`id`, `mes`, `ano`, `local_arquivo`, `empresas_cnpj`) VALUES
(1, '01', 2024, 'Empresas/63422213000121/frequencia_01-2024.pdf', '63422213000121'),
(2, '02', 2024, 'Empresas/63422213000121/frequencia_02-2024.pdf', '63422213000121'),
(3, '03', 2024, 'Empresas/63422213000121/frequencia_03-2024.pdf', '63422213000121'),
(4, '04', 2024, 'Empresas/75891029000100/frequencia_04-2024.pdf', '75891029000100'),
(5, '04', 2024, 'Empresas/94097657000162/frequencia_04-2024.pdf', '94097657000162'),
(6, '04', 2024, 'Empresas/63422213000121/frequencia_04-2024.pdf', '63422213000121');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id_solicitacao` int(11) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `modalidade` varchar(50) NOT NULL,
  `solicitacao` varchar(100) NOT NULL,
  `observacoes` varchar(1000) NOT NULL,
  `status` varchar(45) NOT NULL,
  `solicitacao_envio` varchar(100) NOT NULL,
  `obs_secretaria` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id_solicitacao`, `cpf`, `modalidade`, `solicitacao`, `observacoes`, `status`, `solicitacao_envio`, `obs_secretaria`) VALUES
(1, '12835639080', 'Aprendizagem Industrial', 'Carta de apresentação para estágio', 'Apresentar para o estágio', 'Concluído', 'Envios/12835639080/arquivo_enviado.pdf', 'A Retirada do Documento é feita na Instituição. Você Receberá um comunicado via e-mail ou WhatsApp'),
(2, '24453750021', 'Aperfeiçoamento Profissional', '2ª via de carteirinha estudantil', 'Perdi a primeira', 'Aguardando Pagamento', 'Envios/24453750021/arquivo_enviado.pdf', 'A Retirada do Documento é feita na Instituição. Você Receberá um comunicado via e-mail ou WhatsApp'),
(3, '95784004034', 'Qualificação Profissional', 'Histórico Parcial', 'Histórico Escolar', 'Concluído', 'Envios/95784004034/arquivo_enviado.pdf', 'A Retirada do Documento é feita na Instituição. Você Receberá um comunicado via e-mail ou WhatsApp'),
(4, '05357296006', 'Aprendizagem Industrial', 'Histórico Parcial', 'Histórico para apresentar para vaga de emprego', 'Aguardando Pagamento', 'Envios/05357296006/arquivo_enviado.pdf', 'A Retirada do Documento é feita na Instituição. Você Receberá um comunicado via e-mail ou WhatsApp');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices para tabela `justificativas`
--
ALTER TABLE `justificativas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpf` (`usuario_cpf`);

--
-- Índices para tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`,`empresas_cnpj`),
  ADD KEY `fk_relatorios_empresas_idx` (`empresas_cnpj`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id_solicitacao`),
  ADD KEY `cpf_solicit` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `justificativas`
--
ALTER TABLE `justificativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `justificativas`
--
ALTER TABLE `justificativas`
  ADD CONSTRAINT `cpf` FOREIGN KEY (`usuario_cpf`) REFERENCES `alunos` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD CONSTRAINT `fk_relatorios_empresas` FOREIGN KEY (`empresas_cnpj`) REFERENCES `empresas` (`cnpj`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `cpf_solicit` FOREIGN KEY (`cpf`) REFERENCES `alunos` (`usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
