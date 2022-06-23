-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2022 às 20:27
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meusite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`) VALUES
(1, 'Pães'),
(2, 'Bolo'),
(3, 'Salgado'),
(4, 'Doces'),
(5, 'Bebidas'),
(6, 'Sorvetes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriasdereceitas`
--

CREATE TABLE `categoriasdereceitas` (
  `CategoriasReceitasID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoriasdereceitas`
--

INSERT INTO `categoriasdereceitas` (`CategoriasReceitasID`, `Nome`) VALUES
(1, 'Bolo'),
(2, 'Salgados'),
(3, 'Doces'),
(4, 'Bebidas'),
(5, 'Sorvetes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `Descricao` longtext NOT NULL,
  `CategoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Imagem`, `Preco`, `Descricao`, `CategoriaID`) VALUES
(1, 'Brigadeiro', 'brigadeiro.jpg', 1.3, 'Descrição do Brigadeiro', 4),
(2, 'Carolinas', 'carolinas.jpg', 2.3, 'Descrição do Carolinas', 4),
(3, 'Beijinho', 'beijinho.png', 3.5, 'Descrição do Beijinho', 4),
(4, 'Cajuzinho', 'cajuzinho.jpg', 3.5, 'Descrição do Cajuzinho', 4),
(5, 'Bomba', 'bomba.jfif', 10, 'Descrição do Bomba', 4),
(6, 'Branquinho de Churros', 'branquinho-churros.jpg', 2.7, 'Descrição do Churros', 4),
(7, 'Branquinho de Paçoquinha', 'branquinho-pacoquinha.png', 2.7, 'Descrição do Paçoquinha', 4),
(8, 'Brownies', 'brownies.jpg', 7.5, 'Descrição do Brownies', 4),
(9, 'Churros', 'churros.jpg', 5, 'Descrição do churros', 4),
(10, 'Lua de Mel', 'lua-de-mel.jpg', 6, 'Descrição do Lua de Mel', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `ReceitaID` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Video` longtext NOT NULL,
  `CategoriasReceitasID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`ReceitaID`, `Titulo`, `Imagem`, `Descricao`, `Video`, `CategoriasReceitasID`) VALUES
(1, 'Bolo de Chocolate', 'bolochocolatee.png', 'MASSA:\r\n   4 ovos\r\n   1 e 1/2 xícara (chá) de açúcar - (250g)\r\n   3/4 xícara (chá) de óleo - (180ml)\r\n   1/2 xícara de (chá) de água quente - (120ml)\r\n   2 colheres (sopa) de cacau em pó - (40g)\r\n   1 e 1/2 e xícara (chá) de farinha de trigo - (180g)\r\n   2 colheres (sopa) de amido de milho - (40g)\r\n   1 colher (chá) de fermento químico - (10g)\r\n   1 colher (café) de bicarbonato - (5g)\r\n   *Se não tiver bicarbonato, use então 1 colher de sopa de fermento (15g).\r\n   \r\n   CALDA CREMOSA\r\n   1/2 xícara (chá) de leite integral - (125ml)\r\n   1/2 caixinha de creme de leite - (100g)\r\n   1 colher (sopa) de chocolate em pó - (20g)\r\n   1 colher (sopa) de manteiga  - (15g)\r\n   3 colheres (sopa) de açúcar - (60g)\r\n   \r\n   COBERTURA DE BRIGADEIRO \r\n   1 e 1/2 caixinha de leite condensado - (592g)\r\n   2 colheres (sopa) de chocolate em pó - (40g)\r\n   1 colher (sopa) manteiga - (15g)\r\n   1 caixinha de creme de leite - (200g)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QFMxJWh3mqE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(2, 'Bolo de Cenoura', 'bolodecenoura.jpg', 'MASSA:\r\n    5 ovos\r\n    2 e 1/2 xícaras (chá) cenoura crua e descascada - 400g (corte em rodelas para nivelar melhor na xícara, igual no vídeo)\r\n    2 xícaras (chá) de açúcar - 360g\r\n    3 xícaras (chá) de farinha de trigo - 360g\r\n    3/4 xícara (chá) de óleo de soja - 180ml\r\n    1 colher (sopa) fermento químico - 15g\r\n    ** Farinha e açúcar tem o mesmo peso, porém volumes diferentes, por isso xícara diferente e peso igual. Não está errado, é isso mesmo.\r\n    \r\n    COBERTURA:\r\n    1 xícara (chá) de açúcar - 180g\r\n    1 xícara (chá) de achocolatado - 160g\r\n    2 colheres de sopa de manteiga ou margarina - 40g\r\n    6 colheres de sopa de leite - 75ml', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/z3Dyazls_VQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(3, 'Brigadeiro', 'brigadeiroreceita.jpg', 'INGREDIENTES:\r\n    1 lata de leite condensado (395g)\r\n    1 colh sopa de manteiga sem sal (20g)\r\n    1 colh sopa de chocolate em pó 50% (15g)\r\n    2 colh sopa de creme de leite (40g)\r\n    Manteiga ou margarina para untar as mãos\r\n    Granulado para enrolar\r\n    Rendimento aproximado: 20 unidades de 20g cada.\r\n    \r\n    MODO DE PREPARO:\r\n    1) Na panela, derreter a manteiga e misturar o chocolate em pó ;\r\n    2) Desligar e misturar bem o leite condensado e o creme de leite ;\r\n    3) Mexer o tempo todo até soltar do fundo da panela ;\r\n    4) Desligar e continuar mexendo até parar de ferver ;\r\n    5) Deixar esfriar e enrolar com as mãos untadas em manteiga ou margarina ;\r\n    6) Passar no granulado.', 'video\'=>\'<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rh-SlxmZdzQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(4, 'Brownies', 'brownie-simples.jpg', 'INGREDIENTES:\r\n\r\n    • 225g de manteiga derretida (1 xícara)\r\n    • 3 ovos\r\n    • 15ml de essência de baunilha (1 colher de sopa)\r\n    • 15ml de café (1 colher de sopa)\r\n    • 200g Açúcar (1 xícara)\r\n    • 200g Açúcar mascavo claro (1 xícara)\r\n    • 75g Cacau em pó (1/3 xícara)\r\n    • 120g Farinha de trigo (1 xícara)\r\n    • 6g de sal (1 colher de chá)\r\n    • 160g chocolate meio amargo (1 xícara)\r\n    • 100g nozes (1 xícara)', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kMC5uFTtBpE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(5, 'Beijinho', 'beijinhoreceita.jpg', 'Ingredientes:\r\n    1 lata de leite condensado (395 g)\r\n    ½ xícara (chá) de coco seco ralado (40 g)\r\n    ⅓ xícara (chá) de leite\r\n    1 colher (sopa) de manteiga\r\n    \r\n    Modo de Preparo:\r\n    Coloque o leite condensado, o leite e a manteiga numa panela pequena e leve ao fogo baixo. Mexa com uma espátula de silicone até a manteiga derreter.\r\n    \r\n    Acrescente o coco ralado e continue mexendo por cerca de 12 minutos, até o doce engrossar, para comer de colher – mexa raspando bem os fundos e lateral da panela com a espátula para não queimar. \r\n    \r\n    Atenção para o ponto: o beijinho endurece mais depois de frio, ele deve sair da panela ainda bem cremoso.\r\n    \r\n    Para verificar, levante uma porção do beijinho com a espátula e deixe pingar sobre o doce da panela, ele não deve afundar.\r\n    \r\n    Transfira o beijinho para uma tigela e deixe esfriar em temperatura ambiente até a hora de servir.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FVXb8h6YM0A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(6, 'Stick de queijo com salsicha', 'stick.png', 'INGREDIENTES PARA A MASSA\r\n\r\n    300 ml(s) leite\r\n    1 colher(es) de sopa açúcar\r\n    1/2 colher(es) de sopa sal\r\n    1 colher(es) de sopa margarina\r\n    1 colher(es) de sopa fermento biológico seco\r\n    1/2 kg(s) farinha de trigo\r\n    óleo para fritura\r\n    \r\n    INGREDIENTES PARA O RECHEIO\r\n    \r\n    9 fatia(s) muçarela\r\n    9 unidade(s) salsicha\r\n    molho de tomate a gosto\r\n    \r\n    INGREDIENTES PARA EMPANAR\r\n    \r\n    1 ovo\r\n    1 copo(s) água\r\n    farinha panko\r\n    \r\n    MODO DE PREPARO\r\n    \r\n    Em uma tigela ponha todos os ingredientes, menos a farinha, e misture bem. Em seguida vá acrescentando a farinha aos poucos, sove bem até obter uma massa lisinha, agora e só abrir com a ajuda de um rolo até ficar bem fina e cortar pedaços do tamanho de um palmo da mão por 3 três dedos. Coloque um pouco do molho em cima da salsicha, enrole com o queijo e coloque na ponta da massa aberta, enrole e feche as laterais. Agora, é só empanar passando no ovo e na farinha panko, leve ao oléo quente para fritar até dourar. Retire do óleo e sirva.', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/10b7k0OOBX8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2),
(7, 'Churros', 'churo.jpg', 'INGREDIENTES:\r\n        300 gramas de farinha de trigo comum \r\n        440 gramas de água \r\n        1 col de chá de sal fino \r\n        1 pitada de açúcar \r\n        1 colher de esc de baunilha \r\n        raspas da casca de uma laranja \r\n        1 ovo ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/R3jmHjdtmQo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(8, 'Lua de Mel', 'luademelreceita.jfif', 'Ingredientes:\r\n        600g de farinha de trigo\r\n        250ml de leite morno\r\n        2 colheres de sopa de margarina\r\n        2 colheres de sopa de açúcar\r\n        2 ovos\r\n        1 pacote de fermento seco para pães\r\n        1 colher de café rasa de sal', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hdVjNycrR9U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3),
(9, 'Bomba', 'bombareceita.jpg', 'Ingredientes da massa Pâte a Choux\r\n\r\n    1 xícara (chá) de água ( 240 ml)\r\n    6 colheres (sopa) de manteiga ( 120 g)\r\n    1 colher (sopa) de açúcar ( 12 g)\r\n    1 colher ( café ) de sal \r\n    1 xícara (chá) de farinha de trigo ( 140 g)\r\n    3 ovos\r\n    \r\n    \r\n    Ingredientes do recheio  Creme Patissier ou Creme de Confeiteiro\r\n    \r\n    2 copos (tipo requeijão) de leite ( 500 g)\r\n    2 colheres (chá) de essência de baunilha ( 10 ml)\r\n    3 gemas \r\n    1 xícara (chá) de açúcar ( 180 g)\r\n    ¼ xícara (chá) de amido de milho ( 38 g)\r\n    2 colheres (sopa) de manteiga ( 40 g)\r\n    \r\n    Ingrediente para  pincelar\r\n    \r\n    1 ovo \r\n    \r\n    Ingredientes da cobertura \r\n    \r\n    150 g de chocolate ao leite ou cobertura fracionada sabor chocolate ao leite \r\n    chocolate branco a gosto ( para decorar)\r\n    granulado de chocolate a gosto ( para decorar)', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/ohd_1zoa_wk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `categoriasdereceitas`
--
ALTER TABLE `categoriasdereceitas`
  ADD PRIMARY KEY (`CategoriasReceitasID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`ReceitaID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `categoriasdereceitas`
--
ALTER TABLE `categoriasdereceitas`
  MODIFY `CategoriasReceitasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `ReceitaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
