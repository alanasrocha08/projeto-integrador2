-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2025 às 14:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cafeteria-teste-pi`
--
CREATE DATABASE IF NOT EXISTS `cafeteria-teste-pi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cafeteria-teste-pi`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_real`
--

CREATE TABLE `cadastro_real` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_real`
--

INSERT INTO `cadastro_real` (`id`, `usuario_id`, `endereco`, `complemento`, `cpf`, `telefone`) VALUES
(1, 1, 'Joao de sei la oq', 'casa 1', '123.456.789-10', '(11) 12345-6789'),
(2, 2, 'rua vila sonia sei la', 'perto do supermecaso sei la', '987.654.321.00', '(11) 98765-4321');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Salgados'),
(2, 'Doces'),
(3, 'Bebidas'),
(4, 'umami');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`) VALUES
(1, 1),
(4, 1),
(5, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_produto`
--

CREATE TABLE `pedido_produto` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedido_produto`
--

INSERT INTO `pedido_produto` (`id`, `pedido_id`, `produto_id`, `quantidade`) VALUES
(1, 1, 4, 2),
(2, 1, 1, 1),
(3, 2, 3, 1),
(4, 2, 8, 1),
(5, 3, 2, 1),
(6, 3, 5, 3),
(7, 3, 8, 1),
(8, 1, 1, 1),
(9, 1, 9, 1),
(10, 1, 6, 1),
(17, 5, 3, 1),
(18, 5, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` tinytext DEFAULT NULL,
  `preco` decimal(5,2) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `categoria_id`) VALUES
(1, 'Coca-Cola', 'Refrigerante de lata - 350ml', 10.50, 3),
(2, 'Bebida de Hibisco e leite', 'Bebida gelada de Hibisco com leite e café.', 22.50, 3),
(3, 'Capuccino', 'Café expresso, leite vaporizado e uma camada de espuma de leite - 150ml', 15.99, 3),
(4, 'Quiche Lorraine', 'Quiche de queijo de cabra com cebola e pera caramelizada', 12.59, 1),
(5, 'Coxinha com Catupiry®', 'Coxinha sem glúten de frango com Catupiry® cremoso', 16.99, 1),
(6, 'Pizza de queijo de bufala com tomate cereja', 'Pizza de biomassa com queijo de bufala fresco, tomate cereja e um molho de tomata da casa.', 12.99, 1),
(7, 'Torta de Limão Siciliano', 'Torta de limão com base de amêndoas e avelãs e com um creme de limão siciliano', 16.30, 2),
(8, 'Cookies de chocolate', 'Cookies de chocolate com gotas de chocolate', 9.99, 2),
(9, 'Profiteroles', 'Pofiteroles de cereja', 6.90, 2),
(10, 'balala', 'blabla', 11.00, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` mediumtext NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Julia Moura', 'julia.moura@gmail.com', '123@456@789'),
(2, 'Alana Rocha', 'alana.rocha@gmail.com', '133355555'),
(3, 'Denis bestoides', 'denis.bestoides@gmail.com', '123456789'),
(4, 'Otavio', 'otavio@gmail.com', '852258');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `view_pedidos_detalhados`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `view_pedidos_detalhados` (
`numero_do_pedido` int(11)
,`nome_do_cliente` varchar(150)
,`valor_total` decimal(37,2)
,`lista_de_produtos` mediumtext
);

-- --------------------------------------------------------

--
-- Estrutura para view `view_pedidos_detalhados`
--
DROP TABLE IF EXISTS `view_pedidos_detalhados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pedidos_detalhados`  AS SELECT `pedidos`.`id` AS `numero_do_pedido`, `usuario`.`nome` AS `nome_do_cliente`, sum(`produtos`.`preco` * `pedido_produto`.`quantidade`) AS `valor_total`, group_concat(`produtos`.`nome` separator ', ') AS `lista_de_produtos` FROM (((`pedidos` join `usuario` on(`pedidos`.`usuario_id` = `usuario`.`id`)) join `pedido_produto` on(`pedidos`.`id` = `pedido_produto`.`pedido_id`)) join `produtos` on(`pedido_produto`.`produto_id` = `produtos`.`id`)) GROUP BY `pedidos`.`id` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_real`
--
ALTER TABLE `cadastro_real`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`usuario_id`);

--
-- Índices de tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produto_pedido` (`produto_id`),
  ADD KEY `fk_pedido_produto` (`pedido_id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`categoria_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_real`
--
ALTER TABLE `cadastro_real`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD CONSTRAINT `fk_pedido_produto` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_produto_pedido` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
