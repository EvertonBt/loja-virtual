-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jul-2016 às 03:35
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

CREATE TABLE `emails` (
  `id_email` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id_email`, `nome`, `email`, `horario`, `mensagem`) VALUES
(7, 'Everton', 'evertonid@ymail.com', '20:51 23/07/2016', 'Tenho dÃºvidas sobre como utilizar o sistema, me ajudem por favor!!! ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `tipo_acao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id_log`, `usuario`, `horario`, `tipo_acao`) VALUES
(1, 'joe', '01:36 15/07/2016', 'UsuÃ¡rio Logou com Sucesso no Sistema'),
(2, 'joe', '02:14 15/07/2016', 'Usuario Saiu do Sistema'),
(3, 'joe', '02:14 15/07/2016', 'Usuario Saiu do Sistema'),
(4, 'logan', '02:15 15/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(5, 'logan', '02:17 15/07/2016', 'Usuario Saiu do Sistema'),
(6, 'logan', '02:19 15/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(9, 'logan', '04:44 15/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(10, 'logan', '05:27 15/07/2016', 'Usuario Saiu do Sistema'),
(11, 'everton', '17:01 17/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(12, 'everton', '20:01 17/07/2016', 'Usuario Saiu do Sistema'),
(13, 'everton', '16:14 23/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(14, 'everton', '16:15 23/07/2016', 'Usuario Saiu do Sistema'),
(15, 'everton', '16:18 23/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(16, 'everton', '16:30 23/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(17, 'luc', '20:52 23/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(18, 'luc', '21:31 23/07/2016', 'Usuario Saiu do Sistema'),
(19, 'everton', '22:23 23/07/2016', 'Usuario Logou com Sucesso no Sistema'),
(20, 'everton', '22:24 23/07/2016', 'Usuario Saiu do Sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` varchar(50) DEFAULT NULL,
  `descricao` varchar(250) NOT NULL,
  `imagem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `preco`, `descricao`, `imagem`) VALUES
(2, 'PHP Completo ', 'livros', '100,00', ' Livro completo de php OO', 'php.jpg'),
(7, 'Medicina Legal', 'livros', '159,00', 'Livro Medicina Legal', 'medicina.jpg'),
(8, 'Nokia Lumia', 'telefonia', '800,00', 'Celular com Windows phone', 'nokia.jpg'),
(9, 'Iphone 6 Plus', 'telefonia', '2900,00', 'Celular moderno', 'iphone.jpg'),
(10, 'Residen Evil', 'jogos', '150,00', 'Jogo de terror', 'resident.jpg'),
(11, 'Metal Gear Solid', 'jogos', '199,00', 'Jogo de Aventura', 'metal.jpg'),
(12, 'Snoopy e Charlie Brown', 'dvds', '60,00', 'Dvd do classico Charlie Brown', 'snoop.jpg'),
(13, 'Batman Versus Superman', 'dvds', '75,00', 'Filme de aventura', 'batman.jpg'),
(14, 'Caderno  Universitario', 'papelaria', '19,00', 'Caderno Universitario', 'caderno.jpg'),
(15, 'Caderno Mulher M.', 'papelaria', '19,00', 'Caderno da mulher maravilha', 'caderno_mulher.jpg'),
(17, 'Panda Antivirus', 'software', '23,00', 'Panda Antivirus 2016', 'panda.jpg'),
(18, 'Fone de ouvido', 'acessorios', '15,90', 'Fone de Ouvido', 'fone.jpg'),
(19, 'Carrinho', 'acessorios', '49,00', ' Carrinho de brinquedo', 'carrinho.jpg'),
(21, 'Igreja', 'livros', '20,00', 'Livro sobre a igreja', 'igreja.jpg'),
(22, 'dicionario', 'livros', '30,00', 'Dicionario de ingles', 'dicionario.jpg'),
(23, 'Harry Potter', 'livros', '25,00', 'Livro Hary Potter', 'harry.jpg'),
(29, 'teste02 ', 'jogos', '18,00', ' jogo legal', 'division.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel_acesso` varchar(50) NOT NULL,
  `sobrenome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `login`, `senha`, `nome`, `email`, `nivel_acesso`, `sobrenome`) VALUES
(3, 'mike', '202cb962ac59075b964b07152d234b70', 'mike   ', 'mike@hotmail.com', 'limitado', 'Mike Mayers da Silva'),
(4, 'peter', '202cb962ac59075b964b07152d234b70', 'Peter   ', 'peter@hotmail.com', 'limitado', 'Peter Park dos Santos'),
(5, 'joe', '202cb962ac59075b964b07152d234b70', 'Joe', 'joe@hotmail.com', 'limitado', 'Joe Cavalcanti de Almeida'),
(6, 'logan', '202cb962ac59075b964b07152d234b70', 'logan', 'logan@hotmail.com', 'limitado', 'da silva gomes'),
(8, 'everton', '202cb962ac59075b964b07152d234b70', 'everton', 'everton@hotmail.com', 'limitado', 'everton batista'),
(9, 'everton', '202cb962ac59075b964b07152d234b70', 'everton', 'evertonid@ymail.com', 'limitado', 'batista'),
(10, 'fernando', '202cb962ac59075b964b07152d234b70', 'Fernando', 'fernando@gmail.com', 'limitado', 'da Silva'),
(11, 'www', '4eae35f1b35977a00ebd8086c259d4c9', 'ee', 'ee@gmail.com', 'limitado', 'ee'),
(12, 'luc', 'd81f9c1be2e08964bf9f24b15f0e4900', 'luc', 'luc@gmail.com', 'limitado', 'skywalker'),
(14, 'juca', '202cb962ac59075b964b07152d234b70', 'juca', 'juca@gmail.com', 'limitado', 'max');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
