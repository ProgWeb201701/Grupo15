
--
-- Banco de dados: `rural`
--

-- --------------------------------------------------------

--
--
 Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  
`id` int(11) NOT NULL,
  
`nome` varchar(220) NOT NULL,

`nomep` varchar(220) NOT NULL,

`celular` int(11) NOT NULL,

`email` varchar(220) NOT NULL,

`endereco` varchar(220) NOT NULL,

`enderecoc` varchar(220) NOT NULL,
  
`municipio` varchar(220) NOT NULL,

`tipo` int(5) NOT NULL,

`obs` varchar(220) NOT NULL,
  
`total` varchar(220) NOT NULL
) 
ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Fazendo dump de dados para tabela `usuarios`
--


INSERT INTO `usuarios` (`id`, `nome`, `nomep`, `celular`, `email`, `endereco`, `enderecoc`, `municipio`, `tipo`, `obs`, `total`) VALUES
(1, 'Louzada', 'Rodrigo', '123','guigolouzada','ibicui','ibicui','uruguaiana','0','obs1','10'),
(2, 'Potranca', 'Cesar', '123456','cesar123','centro','centro','alegrete','1','obs2','20'),
(3, 'Pelea', 'Kelly', '123456789','kelly123456','duque','duque','itaqui','2','obs3','30'),
(4, 'Corte', 'Michel', '6789','Michel123456','duque','duque','itaqui','3','obs4','40');

