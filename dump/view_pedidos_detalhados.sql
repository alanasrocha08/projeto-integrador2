-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/05/2025 às 16:32
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

-- --------------------------------------------------------

--
-- Estrutura para view `view_pedidos_detalhados`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pedidos_detalhados`  AS SELECT `pedidos`.`id` AS `numero_do_pedido`, `usuario`.`nome` AS `nome_do_cliente`, sum(`produtos`.`preco` * `pedido_produto`.`quantidade`) AS `valor_total`, group_concat(`produtos`.`nome` separator ', ') AS `lista_de_produtos` FROM (((`pedidos` join `usuario` on(`pedidos`.`usuario_id` = `usuario`.`id`)) join `pedido_produto` on(`pedidos`.`id` = `pedido_produto`.`pedido_id`)) join `produtos` on(`pedido_produto`.`produto_id` = `produtos`.`id`)) GROUP BY `pedidos`.`id` ;

--
-- VIEW `view_pedidos_detalhados`
-- Dados: Nenhum
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
