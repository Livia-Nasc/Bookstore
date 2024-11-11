-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: booksonli
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `livros`
--

DROP TABLE IF EXISTS `livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `livros` (
  `id_livros` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `lancamento` char(4) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `isbn` char(17) DEFAULT NULL,
  `id_autores` int(11) NOT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id_livros`),
  KEY `id_autores` (`id_autores`),
  CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`id_autores`) REFERENCES `autores` (`id_autores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros`
--

LOCK TABLES `livros` WRITE;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` VALUES (1,'Duna','1965','Duna é um romance de ficção científica épico que se passa em um futuro distante em um planeta deserto','978-0-441-17271-9',1,99.9),(2,'Orgulho e Preconceito','1813','A obra explora as questões de classe social, casamento, moralidade e relações humanas na Inglaterra do século XIX','978-1-5011-7687-1',2,29.9),(3,'Desventuras em Série: Mau Começo','1999','Conta a infeliz história de três crianças muito sem sorte. Apesar de encontadores e inteligfentes, os irmãos Baudelaire levam uma vida esmagada por aflições e infortúnios.','978-0-062-79602-8',3,59.9),(4,'Desventuras em Série: A Sala dos Répteis','1999','Os Baudelaire têm mesmo uma incrível má sorte, mas pode-se  afirmar que a vida deles seria bem mais fácil se não tivessem de enfrentar o tempo todo as armadilhas de seu arquiinimigo: o  conde Olaf, um homem revoltante, gosmento e pérfido.','978-1-405-22285-3',3,59.9),(5,'Desventuras em Série: O Lago Das Sanguessugas','2000','Tia Josephine conta que era casada com Belo Anwhistle e que ele morreu devido às sanguessugas do lago, que têm a capacidade de sentir o cheiro dos alimentos em um ser humano se ele não esperou tempo suficiente antes de entrar na água.','978-1-484-48423-4',3,59.9),(6,'Desventuras em Série: Serraria Baixo-Astral','2000','Depois de sofrer horrores em Mau começo, A sala dos répteis e O lago das sanguessugas, os irmãos Baudelaire são mandados para uma serraria de arrepiar os cabelos e enfrentam desgraças ainda mais inacreditáveis, como uma gigantesca pinça mecânica, bifes do tipo sola de sapato e um homem com uma nuvem de fumaça no lugar','978-0-062-79605-9',3,59.9),(7,'Desventuras em Série: Inferno no Colégio Interno','2000','os três irmãos enfrentam caranguejos, provas hiper-rigorosas e os castigos de um internato. O colégio se transformou em mais um desastroso episódio de suas vidas horríveis.','978-0-062-79615-8',3,59.9),(8,'Desventuras em Série: O Elevador Ersatz','2001','Jerome e Esmé Squalor moram num apartamento de cobertura na Avenida Sombria. Para o desânimo dos três irmãos, o elevador do prédio foi desligado e eles são obrigados a chegar ao último andar pelas escadas escuras e tenebrosas.','978-0-062-79616-5',3,59.9),(9,'Desventuras em Série: The Vile Village','2001','Os irmãos Baudelaire são acusados do assassinato de Jacques, um homem que se dizia chamar-se assim. Olaf, com o objetivo de ser considerado morto, arma um plano para matar Jacques. Os órfãos passam a decifrar dísticos escritos por Isadora, que revelam o local onde os Quagmire estão presos','978-1-405-20734-8',3,59.9),(10,'Desventuras em Série: O Hospital Hostil','2001','Violet, Klaus e Sunny têm de escapar da polícia, despistar um esquisito dono de armazém e suportar a internação num hospital, onde presenciam cirurgias horripilantes e anestesias.','978-0-060-28891-4',3,59.9),(11,'Desventuras em Série: The Carnivorous Carnival','2002','A história se passa quando a família Baudelaire recebe a proposta de trabalhar na Casa dos Monstros, de Madame Lulu, se se parecerem com aberrações. Klaus conta a história de John Merrick, um homem com defeitos de nascença que foi exposto em um parque de diversões, onde as pessoas pagavam para olhar para ele. ','978-0-605-34382-5',3,59.9),(12,'Desventuras em Série: O escorregador de Gelo','2003',' separados do bebê Sunny, Klaus e Violet são obrigados a descer uma montanha escorregadia, enquanto tentam salvar a irmã mais nova das garras do temível conde Olaf.','978-0-605-02749-7',3,59.9),(13,'Desventuras em Série: A Gruta Gorgônea','2004','A busca por um enigmático açucareiro leva os irmãos Baudelaire à temida Gruta Gorgônea, onde um velho inimigo espera a oportunidade certa para atacar. ','978-0-060-29642-1',3,59.9),(14,'Desventuras em Série: The Penultimate Peril','2005','Os próprios Baudelaire, viajando por entre as ruas tortuosas da cidade onde os órfãos outrora viveram, no assento traseiro de um táxi dirigido por uma mulher que mal conheciam, teriam ficado felizes em pular dentro de uma lagoa se soubessem que tipo de história teriam pela frente.','978-3-442-54594-0',3,59.9),(15,'Desventuras em Série: O Fim ','2006','Depois de sobreviverem a uma grande tempestade, eles encontram-se na plataforma costeira de uma ilha habitada por um misterioso grupo de pessoas. Eles são primeiramente saudados por uma menina, Sexta-Feira. O conde Olaf, que já havia se proclamado o \"rei de Olaflândia\", ameaça a menina com um lançador de arpões.','978-0-060-29644-5',3,59.9),(16,'A Culpa é das Estrelas','2012','narra o romance de dois adolescentes que se conhecem (e se apaixonam) em um Grupo de Apoio para Crianças com Câncer: Hazel, uma jovem de dezesseis anos que sobrevive graças a uma droga revolucionária que detém a metástase em seus pulmões, e Augustus Waters, de dezessete, ex-jogador de basquete','978-0-525-47881-2',4,59.9),(17,'Quem é você Alasca?','2005','Alasca Young queria descobrir como sair do labirinto. Suas vidas colidiram na Escola Culver Creek, e nada nunca mais foi o mesmo. Miles Halter levava uma vidinha sem graça e sem muitas emoções (ou amizades) na Flórida. Ele tinha um gosto peculiar: memorizar as últimas palavras de grandes personalidades da história.','978-8-580-57683-2',4,59.9),(18,'Minha Vida Não é Cor-de-rosa','2018','Enquanto busca seu lugar no mundo, a sensível protagonista deste livro precisa lidar com as responsabilidades, namoros e amizades complicadas. Além disso, tenta superar dois casos de assédio conversando com as amigas e com os pais, se mobilizando na escola, sendo uma boa aluna e fazendo a diferença no mundo.','978-8-510-06774-4',5,79),(19,'Textos Cruéis de mais para Serem Lidos Rapidamente','2017','Igor Pires é paulista, formado em publicidade, estudante de jornalismo e criador da marca Textos cruéis demais para serem lidos rapidamente. Leonino, apaixonado pela vida e por escrever, Igor encontrou refúgio nas palavras logo na adolescência, transformando cada uma em caminho, emoção ou simplesmente ar para respirar.','978-8-525-06536-0',6,54.9),(20,'Textos Cruéis de mais para serem Lidos Rapidamente','2019','os autores exploram o amor, o perdão e a curaem seus diversos aspectos, do modo poético e sensível que já lhes é característico.','978-8-525-06665-7',6,54.9),(21,'Teto para Dois','2019','Uma história sobre Tiffy, que terminou seu relacionamento e precisa de uma nova casa para morar – urgentemente – . E também de Leon, um enfermeiro plantonista viciado em trabalho e (muito) antissocial, que precisa de dinheiro extra.12','978-8-551-00541-5',7,54.9),(22,' A Troca','2020','Eileen Cotton tem 79 e está em busca de um novo amor. Tudo de que neta e avó precisam no momento é pôr em prática uma mudança radical. Então, para colocar suas respectivas vidas de volta nos trilhos, as duas têm uma ideia inusitada: trocar de lugar uma com a outra.','978-6-555-60007-0',7,54.9);
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-10 22:35:44
