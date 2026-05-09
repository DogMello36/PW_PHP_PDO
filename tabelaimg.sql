SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";

SET NAMES utf8;

--
-- Base de Dados: `banco`
--
create database banco;
use banco;
-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

CREATE TABLE IF NOT EXISTS tabelaimg (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  codigo int NOT NULL,
  produto varchar(80) NOT NULL,
  descricao varchar(250) NOT NULL,
  data datetime NOT NULL,
  valor float NOT NULL,
  imagem varchar(50)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` (`id`, `codigo`, `produto`, `descricao`, `data`, `valor`, `imagem`) VALUES
(1, 102030, 'Dark Souls', 'Dark Souls é um RPG de ação sombrio e desafiador, ambientado no reino decadente de Lordran. O jogador explora ruínas perigosas, enfrenta criaturas aterrorizantes e descobre uma narrativa profunda contada de forma indireta. Com combates estratégicos, atmosfera melancólica e chefes memoráveis, o jogo marcou a história dos videogames pela dificuldade e imersão.', '2017-05-01', '199.29', 'ds1.jpg'),
(2, 112233, 'Sekiro:Shadows Die Twice', 'Sekiro: Shadows Die Twice acompanha um shinobi em busca de vingança e redenção no Japão feudal. O jogo combina combates rápidos, furtividade e duelos intensos focados em postura e precisão. Com ambientação marcante, chefes desafiadores e mobilidade dinâmica, oferece uma experiência única, premiada como Jogo do Ano pela crítica especializada.', '2017-05-01', '129.00', 'Sekiro.png'),
(3, 302010, 'Resident Evil 4 Remake', 'Resident Evil 4 Remake é uma versão atualizada do clássico jogo de survival horror, trazendo gráficos aprimorados, mecânicas de jogo refinadas e uma narrativa aprofundada. O jogo mantém a essência do original enquanto oferece uma experiência mais moderna e envolvente.', '2017-05-01', '99.49', 're4.png'),
(4, 332211, 'Minecraft', 'Minecraft é um jogo de mundo aberto focado em criatividade, exploração e sobrevivência. Os jogadores podem construir estruturas, minerar recursos, enfrentar criaturas e criar aventuras ilimitadas em um universo feito de blocos. Com modos variados e forte comunidade, tornou-se um dos jogos mais populares e influentes da história.', '2017-05-01', '169.90', 'min.jpg'),
(5, 123456, 'EA Sports FC 26', 'EA Sports FC 26 é o mais recente título da série de jogos de futebol da EA Sports. O jogo traz gráficos aprimorados, mecânicas de jogo refinadas e uma experiência de jogo mais realista e envolvente.', '2017-05-01', '149.00', 'ea.jpg');