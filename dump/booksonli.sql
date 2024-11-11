-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2024 às 03:03
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
-- Banco de dados: `booksonli`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autores`
--

CREATE TABLE `autores` (
  `id_autores` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `nacionalidade` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `autores`
--

INSERT INTO `autores` (`id_autores`, `nome`, `nascimento`, `nacionalidade`) VALUES
(1, 'Frank Patrick Herbert', '1920-10-08', 'Americano'),
(2, 'Jane Austen', '1775-12-16', 'Britânica'),
(3, 'Daniel Handler', '1970-02-08', 'Americano'),
(4, 'John Green', '1977-08-24', 'Americano'),
(5, 'Penélope Martins', '1973-09-01', 'Brasileira'),
(6, 'Igor Pires da Silva', '1979-07-27', 'Brasileiro'),
(7, 'Beth O`Leary', NULL, 'Britânica'),
(8, 'Jennifer Lynn Barnes', '1984-10-19', 'Oklahoma'),
(9, 'Malala Yousafzai', '1997-07-12', 'Paquistenesa'),
(10, 'Pedro Reis', '1967-09-30', 'Português'),
(11, 'Amanda Lovelace', '1991-11-13', 'Americana'),
(12, 'Clarisse Lispector', '1920-12-10', 'Ucraniana'),
(13, 'Collen Hoover', '1979-10-11', 'Americana'),
(14, 'Victoria Aveyard', '1990-07-27', 'Americana'),
(15, 'Sarah J. Maas', '1986-03-05', 'Americana'),
(16, 'Pedro Santiago', '1969-08-29', 'Brasileiro'),
(17, 'Anne Frank', '1929-06-12', 'Alemã'),
(18, 'Stephen King', '1947-09-21', 'Americano'),
(19, 'Taylor Jenkins Reid', '1983-12-20', 'Americana'),
(20, 'Eva Ibbotson', '1925-01-21', 'Britânica'),
(21, 'Walcyr Carrasco', '1951-12-01', 'Brasileiro'),
(22, 'Veronica Roth', '1988-08-19', 'Americana'),
(23, 'Moacyr Scliar', '1937-03-23', 'Brasileiro'),
(24, 'Jennifer L. Armentrout', '1980-06-11', 'Americana'),
(25, 'Ali Hazelwood', '1989-12-11', 'Italiana');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nome`) VALUES
(7, 'Autoajuda'),
(6, 'Biografias'),
(14, 'Distopia'),
(2, 'Fantasia'),
(1, 'Ficção Científica'),
(12, 'Ficçâo Histórica'),
(8, 'História'),
(13, 'Jovem Adulto'),
(9, 'Literatura Clássica'),
(11, 'Mistério/Policial'),
(15, 'Não-Ficção Científica'),
(10, 'Poesia'),
(3, 'Romance'),
(4, 'Suspense'),
(5, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id_livros` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `lancamento` char(4) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `isbn` char(17) DEFAULT NULL,
  `id_autores` int(11) NOT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id_livros`, `nome`, `lancamento`, `descricao`, `isbn`, `id_autores`, `preco`) VALUES
(1, 'Duna', '1965', 'Duna é um romance de ficção científica épico que se passa em um futuro distante em um planeta deserto', '978-0-441-17271-9', 1, 99.9),
(2, 'Orgulho e Preconceito', '1813', 'A obra explora as questões de classe social, casamento, moralidade e relações humanas na Inglaterra do século XIX', '978-1-5011-7687-1', 2, 25.9),
(3, 'Desventuras em Série: Mau Começo', '1999', 'Conta a infeliz história de três crianças muito sem sorte. Apesar de encontadores e inteligfentes, os irmãos Baudelaire levam uma vida esmagada por aflições e infortúnios.', '978-0-062-79602-8', 3, 59.9),
(4, 'Desventuras em Série: A Sala dos Répteis', '1999', 'Os Baudelaire têm mesmo uma incrível má sorte, mas pode-se  afirmar que a vida deles seria bem mais fácil se não tivessem de enfrentar o tempo todo as armadilhas de seu arquiinimigo: o  conde Olaf, um homem revoltante, gosmento e pérfido.', '978-1-405-22285-3', 3, 59.9),
(5, 'Desventuras em Série: O Lago Das Sanguessugas', '2000', 'Tia Josephine conta que era casada com Belo Anwhistle e que ele morreu devido às sanguessugas do lago, que têm a capacidade de sentir o cheiro dos alimentos em um ser humano se ele não esperou tempo suficiente antes de entrar na água.', '978-1-484-48423-4', 3, 59.9),
(6, 'Desventuras em Série: Serraria Baixo-Astral', '2000', 'Depois de sofrer horrores em Mau começo, A sala dos répteis e O lago das sanguessugas, os irmãos Baudelaire são mandados para uma serraria de arrepiar os cabelos e enfrentam desgraças ainda mais inacreditáveis, como uma gigantesca pinça mecânica, bifes do tipo sola de sapato e um homem com uma nuvem de fumaça no lugar', '978-0-062-79605-9', 3, 59.9),
(7, 'Desventuras em Série: Inferno no Colégio Interno', '2000', 'os três irmãos enfrentam caranguejos, provas hiper-rigorosas e os castigos de um internato. O colégio se transformou em mais um desastroso episódio de suas vidas horríveis.', '978-0-062-79615-8', 3, 59.9),
(8, 'Desventuras em Série: O Elevador Ersatz', '2001', 'Jerome e Esmé Squalor moram num apartamento de cobertura na Avenida Sombria. Para o desânimo dos três irmãos, o elevador do prédio foi desligado e eles são obrigados a chegar ao último andar pelas escadas escuras e tenebrosas.', '978-0-062-79616-5', 3, 59.9),
(9, 'Desventuras em Série: The Vile Village', '2001', 'Os irmãos Baudelaire são acusados do assassinato de Jacques, um homem que se dizia chamar-se assim. Olaf, com o objetivo de ser considerado morto, arma um plano para matar Jacques. Os órfãos passam a decifrar dísticos escritos por Isadora, que revelam o local onde os Quagmire estão presos', '978-1-405-20734-8', 3, 59.9),
(10, 'Desventuras em Série: O Hospital Hostil', '2001', 'Violet, Klaus e Sunny têm de escapar da polícia, despistar um esquisito dono de armazém e suportar a internação num hospital, onde presenciam cirurgias horripilantes e anestesias.', '978-0-060-28891-4', 3, 59.9),
(11, 'Desventuras em Série: The Carnivorous Carnival', '2002', 'A história se passa quando a família Baudelaire recebe a proposta de trabalhar na Casa dos Monstros, de Madame Lulu, se se parecerem com aberrações. Klaus conta a história de John Merrick, um homem com defeitos de nascença que foi exposto em um parque de diversões, onde as pessoas pagavam para olhar para ele. ', '978-0-605-34382-5', 3, 59.9),
(12, 'Desventuras em Série: O escorregador de Gelo', '2003', ' separados do bebê Sunny, Klaus e Violet são obrigados a descer uma montanha escorregadia, enquanto tentam salvar a irmã mais nova das garras do temível conde Olaf.', '978-0-605-02749-7', 3, 59.9),
(13, 'Desventuras em Série: A Gruta Gorgônea', '2004', 'A busca por um enigmático açucareiro leva os irmãos Baudelaire à temida Gruta Gorgônea, onde um velho inimigo espera a oportunidade certa para atacar. ', '978-0-060-29642-1', 3, 59.9),
(14, 'Desventuras em Série: The Penultimate Peril', '2005', 'Os próprios Baudelaire, viajando por entre as ruas tortuosas da cidade onde os órfãos outrora viveram, no assento traseiro de um táxi dirigido por uma mulher que mal conheciam, teriam ficado felizes em pular dentro de uma lagoa se soubessem que tipo de história teriam pela frente.', '978-3-442-54594-0', 3, 59.9),
(15, 'Desventuras em Série: O Fim ', '2006', 'Depois de sobreviverem a uma grande tempestade, eles encontram-se na plataforma costeira de uma ilha habitada por um misterioso grupo de pessoas. Eles são primeiramente saudados por uma menina, Sexta-Feira. O conde Olaf, que já havia se proclamado o \"rei de Olaflândia\", ameaça a menina com um lançador de arpões.', '978-0-060-29644-5', 3, 59.9),
(16, 'A Culpa é das Estrelas', '2012', 'narra o romance de dois adolescentes que se conhecem (e se apaixonam) em um Grupo de Apoio para Crianças com Câncer: Hazel, uma jovem de dezesseis anos que sobrevive graças a uma droga revolucionária que detém a metástase em seus pulmões, e Augustus Waters, de dezessete, ex-jogador de basquete', '978-0-525-47881-2', 4, 59.9),
(17, 'Quem é você Alasca?', '2005', 'Alasca Young queria descobrir como sair do labirinto. Suas vidas colidiram na Escola Culver Creek, e nada nunca mais foi o mesmo. Miles Halter levava uma vidinha sem graça e sem muitas emoções (ou amizades) na Flórida. Ele tinha um gosto peculiar: memorizar as últimas palavras de grandes personalidades da história.', '978-8-580-57683-2', 4, 59.9),
(18, 'Minha Vida Não é Cor-de-rosa', '2018', 'Enquanto busca seu lugar no mundo, a sensível protagonista deste livro precisa lidar com as responsabilidades, namoros e amizades complicadas. Além disso, tenta superar dois casos de assédio conversando com as amigas e com os pais, se mobilizando na escola, sendo uma boa aluna e fazendo a diferença no mundo.', '978-8-510-06774-4', 5, 79),
(19, 'Textos Cruéis de mais para Serem Lidos Rapidamente', '2017', 'Igor Pires é paulista, formado em publicidade, estudante de jornalismo e criador da marca Textos cruéis demais para serem lidos rapidamente. Leonino, apaixonado pela vida e por escrever, Igor encontrou refúgio nas palavras logo na adolescência, transformando cada uma em caminho, emoção ou simplesmente ar para respirar.', '978-8-525-06536-0', 6, 54.9),
(20, 'Textos Cruéis de mais para serem Lidos Rapidamente', '2019', 'os autores exploram o amor, o perdão e a curaem seus diversos aspectos, do modo poético e sensível que já lhes é característico.', '978-8-525-06665-7', 6, 54.9),
(21, 'Teto para Dois', '2019', 'Uma história sobre Tiffy, que terminou seu relacionamento e precisa de uma nova casa para morar – urgentemente – . E também de Leon, um enfermeiro plantonista viciado em trabalho e (muito) antissocial, que precisa de dinheiro extra.12', '978-8-551-00541-5', 7, 54.9),
(22, ' A Troca', '2020', 'Eileen Cotton tem 79 e está em busca de um novo amor. Tudo de que neta e avó precisam no momento é pôr em prática uma mudança radical. Então, para colocar suas respectivas vidas de volta nos trilhos, as duas têm uma ideia inusitada: trocar de lugar uma com a outra.', '978-6-555-60007-0', 7, 54.9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros_categorias`
--

CREATE TABLE `livros_categorias` (
  `id_livros` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(240) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `admin` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id_usuario`, `usuario`, `email`, `data`, `senha`, `admin`) VALUES
(1, 'admin', 'admin@admin', '0001-01-01', '$2y$10$0V1s01XLtqziN1RUB8c7euMapxLGVsjrNFN1rpvASxLAosjeiHDNe', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autores`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livros`),
  ADD KEY `id_autores` (`id_autores`);

--
-- Índices de tabela `livros_categorias`
--
ALTER TABLE `livros_categorias`
  ADD KEY `id_livros` (`id_livros`),
  ADD KEY `id_categorias` (`id_categorias`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`id_autores`) REFERENCES `autores` (`id_autores`);

--
-- Restrições para tabelas `livros_categorias`
--
ALTER TABLE `livros_categorias`
  ADD CONSTRAINT `livros_categorias_ibfk_1` FOREIGN KEY (`id_livros`) REFERENCES `livros` (`id_livros`),
  ADD CONSTRAINT `livros_categorias_ibfk_2` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
