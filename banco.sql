-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2021 às 13:36
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cartilha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Imagem`, `Descricao`) VALUES
(1, 'Daltonismo', 'daltonismo.jpg', 'Categoria Daltonismo.'),
(2, 'Baixa Visão', 'baixavisao.jpg', 'Categoria Baixa Visão.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `PostID` int(11) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Subtitulo` varchar(200) NOT NULL,
  `Autor` varchar(200) NOT NULL,
  `CategoriaID` int(150) NOT NULL,
  `Imagem` varchar(150) NOT NULL,
  `Data` date NOT NULL,
  `Paragrafos` mediumtext NOT NULL,
  `ImagemCONT` varchar(200) NOT NULL,
  `TextoImagemCONT` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`PostID`, `Titulo`, `Subtitulo`, `Autor`, `CategoriaID`, `Imagem`, `Data`, `Paragrafos`, `ImagemCONT`, `TextoImagemCONT`) VALUES
(1, 'Daltonismo', 'O que é, como identificar e tratar', 'Dr. Arthur Frazão', 1, 'daltonismo.webp', '2021-09-25', 'O daltonismo, também conhecido por discromatopsia ou discromopsia, é uma alteração da visão em que a pessoa não consegue distinguir muito bem algumas cores, principalmente o verde do vermelho. Essa alteração é na maioria dos casos genéticas, no entanto pode surgir também como consequência de lesões na estrutura dos olhos ou dos neurônios responsáveis pela visão. %p% O daltonismo não tem cura, porém, o estilo de vida da pessoa pode ser adaptado para que tenha uma vida próxima do normal e sem dificuldades, podendo ser indicado pelo oftalmologista o uso de óculos para o daltonismo, por exemplo. O diagnóstico dessa alteração pode ser feito através de testes que permitem avaliar a capacidade da pessoa em diferenciar as cores. Veja como são os testes para confirmar o daltonismo. %img% %t% Como identificar o daltonismo %t/% O diagnóstico do daltonismo é feito através de testes que podem ser realizados em casa, na escola ou durante a consulta com o oftalmologista e que consiste na identificação de números ou caminhos que estão presentes em imagens com padrões de cores diferentes. Assim, de acordo com a capacidade da pessoa em identificar o que está contido nas imagens, o oftalmologista pode confirmar o diagnóstico e indicar o tipo de daltonismo que a pessoa possui, sendo eles: %ul% %li% %str% Daltonismo acromático: %str/% também conhecido por monocromacia, é o tipo mais raro de daltonismo, em que a pessoa enxerga a preto, branco e cinza, não vendo outras cores; %li/% %li% %str% Daltonismo dicromático: %str/% a pessoa não possui um receptor de cor e, por isso, não consegue identificar as cores vermelha, verde ou azul; %li/% %li% %str% Daltonismo tricomático: %str/% é o tipo mais comum, onde a pessoa possui uma leve dificuldade em distinguir as cores já que a pessoa tem todos os receptores de cores mas, não funcionam bem. As cores que geralmente são afetadas são vermelho, verde e azul com suas diferentes tonalidades. %li/% %ul/%', 'daltonismo2.jpg', 'Imagem usada para diagnosticar casos de daltonismo.'),
(2, 'Deficiência visual', 'A cegueira e a baixa visão', 'Dr. Pedro Matias', 2, 'baixavisao.jpg', '2021-10-13', 'Baixa visão, também denominada visão subnormal, é uma perda de visão que não pode ser corrigida por óculos convencionais, lentes de contato, medicação ou cirurgia. Também pode ser descrita como qualquer grau de enfraquecimento visual que cause incapacidade funcional e diminua o desempenho visual. %img% %p% Na maioria dos casos, o paciente tem somente 20% ou menos da chamada visão normal (AV 20/20). Embora a maioria dos pacientes afetados seja os idosos, qualquer pessoa em qualquer idade pode sofrer com baixa visão – como veremos nas causas da doença. %p% As pessoas apresentam dificuldades de ver detalhes no dia a dia. Por exemplo, veem as pessoas mas não reconhecem a feição; as crianças enxergam a lousa, porém, não identificam as palavras; no ponto de ônibus, não reconhecem os letreiros. Ao perceber qualquer um desses sinais, procure um oftalmologista para receber o diagnóstico correto e começar o tratamento o mais rápido possível. %t% Quais são os tipos de baixa visão? %t/% O tipo de baixa visão depende da doença ou condição que a causou. Os tipos mais comuns de baixa visão são: %ul% %li% Perda de visão central (não ser capaz de ver as coisas no centro de sua visão) %li/% %li% Perda de visão periférica (não ser capaz de ver as coisas com o canto dos olhos) %li/% %li% Cegueira noturna (não ser capaz de ver com pouca luz) %li/% %li% Visão embaçada ou turva %li/% %ul/% %t% Qual é o tratamento para a baixa visão? %t/% Infelizmente, a visão subnormal geralmente é permanente, não tem cura. Óculos, medicamentos e cirurgia não podem curar a visão subnormal – mas às vezes eles podem melhorar a visão, auxiliando na realização das atividades diárias com mais facilidade ou impedir que sua visão piore.As opções de tratamento dependerão da condição ocular específica que causou a baixa visão.', 'baixavisao1.jpg', ''),
(3, 'Acessilibidade', 'Mundo digital e baixa visão', 'Leonardo José e Fábio Schenkel', 2, 'baixa-visao-mulher.jpg', '2021-11-18', 'A baixa visão é uma deficiência que atualmente afeta em média 20% da população brasileira, porém a maioria dos sites não tem acessibilidade para esse tipo de pessoa mesmo sendo algo muito simples de ser feito. %img% %p% Visando isso nossa cartilha possui dois botões para melhor acessibilidade e o acesso das pessoas que tem essa deficiência, o primeiro desses botões serve para aumentar todas as fontes do site em 3px, já o segundo, tem função oposta ao primeiro botão apresentado, esse já diminui o tamanho de todas as fontes do site em 2px. %p% Esses botões facilitam muito para quem tem baixa visão pois não é preciso forçar muito os olhos ou chegar muito perto do computador para conseguir ler, o que melhora a acessibilidade até mesmo para quem não tem baixa visão, mas quer ler de maneira mais fácil. %p% E a melhor parte, é que não é necessário muito trabalho para adicionar esses botões ao seu site ou artigo. %t%Existem ferramentas que atenda essas demandas do tema?%t/%%p%Na sociedade atual, vemos uma nítida exclusão de pessoas com deficiências. Isso pode ser percebido no físico e ainda mais no digital. Isso acontece principalmente pois transformar ferramentas e serviços já existentes em uma versão mais inclusiva tem um alto custo. Deixando muitas vezes inacessíveis para uma grande parcela da população mundial ou quando são gratuitas ou com baixo valor de mercado são de pessima qualidade e má desenvolvida.%p%Dentre diversos aplicativos que podem ser utilizados para uma forma de facilitar a acessibilidade, são eles os cinco mais usados na atualidade o Be My Eyes, Eya-d, Uboo, para androyd e IOS, CPqd Alcance, Google Braileback. para androyd. Aplicativos boms porem com algumas falhas em o como vai ser usados pois muitas vezes não apresenta a real necessidade de cada individuo da forma correta, sem pensar realmente no seu uso do dia a dia.%p%A uma grande gama de possibilidade quando se fala em acessibilidade, porem também a necessidade muito alta e muito especifica de caso a caso, algumas coisas coringas para ajudar diversos é cuidar a paleta de cores são azul/ Laranja, azul/vermelho, laranja/marrom ajudam bastante com os problemas de baixa visão e daltonismo.', 'lupas.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioID` int(11) NOT NULL,
  `NomeCompleto` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`UsuarioID`, `NomeCompleto`, `Email`, `Senha`) VALUES
(1, 'Sandro Martins', 'sandrosenac@gmail.com', '123456'),
(2, 'Adamastor da Silva', 'adamastor@gmail.com', '654321'),
(3, 'Adelmo Jurandir Silva', 'adelmo@gmail.com', '012345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
