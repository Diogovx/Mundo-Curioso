DROP DATABASE IF EXISTS mundoc;

CREATE DATABASE mundoc CHARACTER SET utf8 COLLATE utf8_general_ci;

USE mundoc;

CREATE TABLE contatos (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    nome VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    campo1 TEXT COMMENT 'Reservado para uso futuro',
    campo2 TEXT COMMENT 'Reservado para uso futuro',
    status ENUM ('recebido', 'lido', 'respondido', 'apagado') DEFAULT 'recebido'
);


CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

INSERT INTO `categorias` (`id_categoria`, `nome`) VALUES
(1, 'Relevos'),
(2, 'Paisagens'),
(3, 'Animais'),
(4, 'Curiosidades');


CREATE TABLE artigos (
    id_artigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    titulo VARCHAR(255) NOT NULL,
    resumo VARCHAR(255) NOT NULL COMMENT 'Resumo do artigo',
    texto LONGTEXT NOT NULL COMMENT 'Texto (HTML) do artigo completo',
    autor VARCHAR(255) NOT NULL,
    campo1 TEXT COMMENT 'Reservado para uso futuro',
    campo2 TEXT COMMENT 'Reservado para uso futuro',
    status ENUM ('inativo', 'ativo') DEFAULT 'ativo'

);
INSERT INTO artigos (`id_artigo`, `data`, `titulo`,`resumo`, `texto`, `autor`, `campo1`, `campo2`, `status`) VALUES 
(1, '2021-02-09 17:28:35', 'As montanhas mais curiosas do mundo','Veja relevos que possuem formatos e cores bem diferentes do normal', '<p>O relevo são as formas da superfície da Terra. Há variações e o relevo se origina e se transforma sob                     a interferência de dois tipos de agentes: os agentes internos e externos. As principais formas de relevo são planaltos, planícies e depressões.</p><h3>Colinas Chocolate - Filipinas</h3><img src="https://www.adventureclub.com.br/agmestre/wp-content/uploads/2016/07/10-Colinas-Chocolate-1.jpg" alt="Colinas Chocolate"><p>As colinas do Chocolate se localizam na ilha Bohol, nas Filipinas. São 1.268 montanhas em formas cônicas com tamanhos parecidos que ocupam uma área de 50 km². A origem dessa inusitada formação geológica é incerta. Especialistas se dividem em duas opiniões: as colinas foram moldadas pela ação dos ventos durante milhões de anos ou seriam fruto de um fenômeno vulcânico sub-oceânico. Existem também várias lendas para explicar a formação do local. Uma delas conta que os cones são, na verdade, lágrimas secas de um gigante imortal chamado Arogo, que foram derramadas por causa da morte de sua amada.</p><h3>Vinicunca - Peru</h3><img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/1021E/production/_101687066_montaa1.jpg"                     alt="Vinicunca"><p>Vinicunca, ou Winikunka, também chamada de Montaña de Siete Colores, Montaña de Colores ou Rainbow Mountain, é uma montanha nos Andes do Peru com altitude de 5.200 metros acima do nível do mar. As cores que decoram as encostas da montanha resultam de "uma história geológica complexa, com sedimentos marinhos, lacustres e fluviais", de acordo com um relatório do Escritório de Paisagismo Cultural da Diretoria de Cultura de Cusco. </p><p>Rosa ou fúcsia: mescla de argila vermelha, lama e areia. Branco: arenito (areia de quartzo) e calcário. Roxo ou lavanda: marga (mistura de argila e carbonato de cálcio) e silicatos. Vermelho: argilitos e argilas.</p><h3>Parque Geológico Nacional Zhangye Danxia - China</h3><img src="https://i.pinimg.com/originals/96/71/f2/9671f2716fdfa0a0dcb773a7c64c7ba2.jpg" alt="Parque Geológico Nacional Zhangye Danxia"><p>Parque Geológico Nacional Zhangye Danxia está localizado perto da cidade de Zhangye, na província de Gansu, no noroeste da China. O parque abrange uma área de 510 quilômetros quadrados. Anteriormente um parque rural e área cênica, tornou-se um geoparque nacional em novembro de 2011. Conhecido por suas formações rochosas coloridas, foi votado pelos meios de comunicação chineses como uma das mais belas formações de relevo do país. Toda essa cor nas montanhas tem uma explicação científica muito semelhante à Montanha Arco-íris no Peru. Depósitos constantes de minerais, todos de de colorações diferentes nas camadas rochosas.</p><h3>Parque Ecológico Cão Sentado - Brasil</h3> <img src="https://3.bp.blogspot.com/-Aads2n7QAJo/T4wpP2FXRLI/AAAAAAAAAP4/AQBcFDJXWWo/s1600/DSC_0725+foto+do+Cao.JPG" alt="Parque Ecológico Cão Sentado"><p>A Pedra do Cão Sentado é um monumento natural considerado símbolo da cidade de Nova Friburgo. É uma das mais notáveis formações rochosas do parque de Furnas do Catete. Esse ponto turístico foi originado a partir de eventos erosivos que desgastaram a rocha e levaram à formação da feição que hoje se assemelha a um cão. No ano de 1959 eles localizaram o governador Roberto Silveira, que de helicóptero fotografou toda área, selando um acordo com o coronel Zebende, tombando essa área para o estado, o qual desde esta época foi reconhecido como ponto turístico.</p><h3>Parque Nacional Torres del Paine - Chile</h3><img src="https://www.viviantelles.com.br/wp-content/uploads/2019/01/Torres-del-paine-chile-2.jpg" alt="Parque Nacional Torres del Paine"><p>O Parque Nacional Torres del Paine, localizado na região da Patagônia, no Chile, é conhecido por suas grandes montanhas, por icebergs de cor azul brilhante que se desprendem de geleiras e pelos pampas dourados (pradarias) que abrigam animais selvagens raros, como os guanacos parecidos com lhamas. Alguns de seus locais mais bonitos são as 3 torres de granito que deram origem ao nome do parque e os picos em formato de chifre chamados Cuernos del Paine.</p>', 'João Silva', NULL, NULL, 'ativo'),
(2, '2021-02-16 14:37:48', 'Os animais abissais','Conheça alguns animais que vivem nas partes mais profundas dos mares ', '<p>O ser abissal, criatura abissal ou animal abissal são termos para os seres vivos aquáticos que vivem                     abaixo da zona eufótica do oceano, conhecida como zonas abissais, parte mais profunda dos oceanos                     que geralmente possui mais de dois mil metros de profundidade, com temperaturas muito baixas e sem                     luz. Essas criaturas sobrevivem em condições extremamente difíceis, com centenas de bar de pressão,                     pequenas quantidades de oxigénio, muito pouco alimento, sem luz solar e frio constante e extremo.                 </p>                 <h3>Peixe Ogro</h3>                 <img src="https://i.pinimg.com/originals/d8/54/4a/d8544aee34f19c257a6b94e3cc01f4ec.jpg"                     alt="Peixe Ogro">                 <p>O peixe chamado ogro se caracteriza por viver em águas muito profundas dos oceanos Pacífico e                     Atlântico. É encontrado a 5 mil metros de profundidade, onde quase não se veem outros seres                     marinhos. Muito pequenos e inofensivos aos seres humanos, dividem-se em duas espécies: a maior das                     duas, a comum, atinge um comprimento máximo de apenas 16 centímetros, e a outra tem metade deste                     tamanho. São, portanto, peixinhos.</p>                 <h3>Oarfish</h3>                 <img src="https://media2.s-nbcnews.com/j/newscms/2014_15/313946/140409-oarfish-jms-1946_71c3c6f04451c56db84f9f6efd0dbbbf.nbcnews-fp-1200-630.jpg"                     alt="Oarfish">                 <p>Oarfish, peixe grande, longo e sinuoso da família Regalecidae (ordem                     Lampridiformes), encontrado em todos os trópicos e subtrópicos em águas bastante profundas. Um peixe                     em forma de fita, muito fino de um lado a outro, o peixe-remo pode atingir um comprimento de cerca                     de 9 metros e um peso de 300kg . É de cor prata brilhante, com longas                     barbatanas pélvicas vermelhas em forma de remo e uma barbatana dorsal longa e vermelha que se eleva                     como uma crista semelhante a uma juba no topo da cabeça. Raramente visto na superfície, é creditado                     como a “serpente marinha” de alguns relatos de avistamentos.                 </p>                 <h3>Tubarão-boca-grande</h3>                 <img src="https://i.pinimg.com/736x/8b/6d/c4/8b6dc4599cbdf6b41aa4db26e9e793b1.jpg"                     alt="Tubarão-boca-grande">                 <p>O tubarão-boca-grande é uma espécie de tubarão extremamente rara, que habita                     águas profundas. Descoberta em 1976, apenas alguns foram vistos desde essa altura, com 68 espécimes                     capturados ou avistados em 2015                 </p>                 <h3>Enguia pelicano</h3>                 <img src="https://i.pinimg.com/originals/2d/5e/57/2d5e57728dce3d63681d8f2b2d25075d.jpg"                     alt="Enguia pelicano">                 <p>A enguia pelicano é um peixe abissal raramente visto por seres humanos,                     embora ocasionalmente sejam capturados pelas redes de pesca.                     A característica mais notável da enguia pelicano é sua enorme boca, que é muito maior que seu corpo.                     A boca é frouxamente articulada e pode ser aberta o suficiente para engolir um peixe maior do que a                     própria enguia. A mandíbula inferior em forma de bolsa lembra a de um pelicano, daí seu nome.                 </p>                 <h3>Peixe-sapo</h3>                 <img src="http://1.bp.blogspot.com/-tRqXGu-Jwu8/T0tx5lZBqwI/AAAAAAAAjAQ/726c7kPzIZs/s1600/rape+vista.jpg"                     alt="Paixe-sapo">                 <p> Predomina nas águas costeiras profundas da plataforma continental e do talude                     continental do nordeste do Oceano Atlântico, desde o Mar de Barents ao Estreito de Gibraltar, no                     Mediterrâneo e no Mar Negro.                     Possui cabeça muito grande, larga, achatada e abatida; o resto do corpo parece ser um mero apêndice.                     A boca larga estende-se por toda a circunferência anterior da cabeça, e ambas as mandíbulas são                     armadas com faixas de dentes longos e pontiagudos, inclinados para dentro e que podem ser rebatidos                     de modo a não oferecer nenhum impedimento a um objeto que deslize em direção ao estômago, mas                     capazes de impedir que a presa escape pela boca.                 </p>', 'João Silva', NULL, NULL,  'ativo');




CREATE TABLE art_cat (
    id_art_cat INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    artigo_id INT NOT NULL,
    categoria_id INT NOT NULL,

    FOREIGN KEY (artigo_id) REFERENCES artigos (id_artigo),

    FOREIGN KEY (categoria_id) REFERENCES categorias (id_categoria)    
);
