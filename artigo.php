<?php 

require '_config.php';


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Se não tem Id retornar para a listagem de artigos
if ($id == 0) header('Location: /artigos.php');

// Lê o artigo do banco de dados
$sql = "SELECT *, DATE_FORMAT(data, '%d de %M de %Y') AS databr FROM `artigos` WHERE id_artigo = '{$id}' AND status = 'ativo'";

// Executa a query
$res = $conn->query($sql);

// Verifica se artigo existe realmente. Se não existe volta para a listagem.
if ($res->num_rows < 1) {
    header('Location: /artigos.php');
}

// Obter dados
$art = $res->fetch_assoc();

// Obtém a lista de categorias
$sql = <<<SQL
SELECT id_categoria, nome FROM art_cat 
    INNER JOIN categorias ON categoria_id = id_categoria
WHERE artigo_id = '{$id}' ORDER BY nome
SQL;
$res = $conn->query($sql);

// Monta lista de categorias
$categorias = '<strong>Categorias: </strong> ';
while ($cat = $res->fetch_assoc()) {
    $categorias .= <<<HTML
<a href="/artigos.php?c={$cat['id_categoria']}">{$cat['nome']}</a>, 
HTML;
}

$categorias = substr($categorias, 0, -2) . '.';

// Troca o título da página (tag TITLE)
$titulo = $art['titulo'];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/page-article.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-png">

    <title><?php echo $titulo?> | Mundo Curioso</title>
</head>

<body class="page-article">

    <div class="back">
        <a href="/index.php"><i class="fas fa-home"></i></a>
    </div>
    <div class="back-arrow">
        <a href="/artigos.php"><i class="fas fa-arrow-left"></i></a>
    </div>

    <main>
        <div class="container">
            <div class="containerHeader">
                <h2 id="title">Os animais abissais</h2>
            </div>

            <div class="containerBody" id="content">
                <p>O ser abissal, criatura abissal ou animal abissal são termos para os seres vivos aquáticos que vivem
                    abaixo da zona eufótica do oceano, conhecida como zonas abissais, parte mais profunda dos oceanos
                    que geralmente possui mais de dois mil metros de profundidade, com temperaturas muito baixas e sem
                    luz. Essas criaturas sobrevivem em condições extremamente difíceis, com centenas de bar de pressão,
                    pequenas quantidades de oxigénio, muito pouco alimento, sem luz solar e frio constante e extremo.
                </p>
                <h3>Peixe Ogro</h3>
                <img src="https://i.pinimg.com/originals/d8/54/4a/d8544aee34f19c257a6b94e3cc01f4ec.jpg"
                    alt="Peixe Ogro">
                <p>O peixe chamado ogro se caracteriza por viver em águas muito profundas dos oceanos Pacífico e
                    Atlântico. É encontrado a 5 mil metros de profundidade, onde quase não se veem outros seres
                    marinhos. Muito pequenos e inofensivos aos seres humanos, dividem-se em duas espécies: a maior das
                    duas, a comum, atinge um comprimento máximo de apenas 16 centímetros, e a outra tem metade deste
                    tamanho. São, portanto, peixinhos.</p>
                <h3>Oarfish</h3>
                <img src="https://media2.s-nbcnews.com/j/newscms/2014_15/313946/140409-oarfish-jms-1946_71c3c6f04451c56db84f9f6efd0dbbbf.nbcnews-fp-1200-630.jpg"
                    alt="Oarfish">
                <p>Oarfish, peixe grande, longo e sinuoso da família Regalecidae (ordem
                    Lampridiformes), encontrado em todos os trópicos e subtrópicos em águas bastante profundas. Um peixe
                    em forma de fita, muito fino de um lado a outro, o peixe-remo pode atingir um comprimento de cerca
                    de 9 metros e um peso de 300kg . É de cor prata brilhante, com longas
                    barbatanas pélvicas vermelhas em forma de remo e uma barbatana dorsal longa e vermelha que se eleva
                    como uma crista semelhante a uma juba no topo da cabeça. Raramente visto na superfície, é creditado
                    como a “serpente marinha” de alguns relatos de avistamentos.
                </p>
                <h3>Tubarão-boca-grande</h3>
                <img src="https://i.pinimg.com/736x/8b/6d/c4/8b6dc4599cbdf6b41aa4db26e9e793b1.jpg"
                    alt="Tubarão-boca-grande">
                <p>O tubarão-boca-grande é uma espécie de tubarão extremamente rara, que habita
                    águas profundas. Descoberta em 1976, apenas alguns foram vistos desde essa altura, com 68 espécimes
                    capturados ou avistados em 2015
                </p>
                <h3>Enguia pelicano</h3>
                <img src="https://i.pinimg.com/originals/2d/5e/57/2d5e57728dce3d63681d8f2b2d25075d.jpg"
                    alt="Enguia pelicano">
                <p>A enguia pelicano é um peixe abissal raramente visto por seres humanos,
                    embora ocasionalmente sejam capturados pelas redes de pesca.
                    A característica mais notável da enguia pelicano é sua enorme boca, que é muito maior que seu corpo.
                    A boca é frouxamente articulada e pode ser aberta o suficiente para engolir um peixe maior do que a
                    própria enguia. A mandíbula inferior em forma de bolsa lembra a de um pelicano, daí seu nome.
                </p>
                <h3>Peixe-sapo</h3>
                <img src="http://1.bp.blogspot.com/-tRqXGu-Jwu8/T0tx5lZBqwI/AAAAAAAAjAQ/726c7kPzIZs/s1600/rape+vista.jpg"
                    alt="Paixe-sapo">
                <p> Predomina nas águas costeiras profundas da plataforma continental e do talude
                    continental do nordeste do Oceano Atlântico, desde o Mar de Barents ao Estreito de Gibraltar, no
                    Mediterrâneo e no Mar Negro.
                    Possui cabeça muito grande, larga, achatada e abatida; o resto do corpo parece ser um mero apêndice.
                    A boca larga estende-se por toda a circunferência anterior da cabeça, e ambas as mandíbulas são
                    armadas com faixas de dentes longos e pontiagudos, inclinados para dentro e que podem ser rebatidos
                    de modo a não oferecer nenhum impedimento a um objeto que deslize em direção ao estômago, mas
                    capazes de impedir que a presa escape pela boca.
                </p>

                <small>Autor: João Silva</small>
                <small>Data: 31/01/21</small>


                <div class="references">
                    <div class="arrows" id="reference">
                        <p>Referências</p>
                        <i class="fas fa-chevron-down" id="arrow"></i>
                    </div>
                    <ul>
                        <li><a href="https://gcn.net.br/noticias/207750/criancas/2013/04/peixe-ogro"
                                target="_blank">https://gcn.net.br/noticias/207750/criancas/2013/04/peixe-ogro</a>
                        </li>
                        <li><a href="https://www.britannica.com/animal/oarfish"
                                target="_blank">https://www.britannica.com/animal/oarfish</a>
                        </li>
                        </li>
                        <li><a href="https://pt.wikipedia.org/wiki/Tubar%C3%A3o-boca-grande"
                                target="_blank">https://pt.wikipedia.org/wiki/Tubar%C3%A3o-boca-grande</a>
                        </li>
                        <li><a href="https://www.magnusmundi.com/enguia-pelicano-o-bizarro-peixe-das-profundezas/#:~:text=A%20enguia%20pelicano%20(Eurypharynx%20pelecanoides,membro%20conhecido%20da%20g%C3%AAnero%20Eurypharynx."
                                target="_blank">https://www.magnusmundi.com/enguia-pelicano-o-bizarro-peixe-das-profundezas/#:~:text=A%20enguia%20pelicano%20(Eurypharynx%20pelecanoides,membro%20conhecido%20da%20g%C3%AAnero%20Eurypharynx.</a>
                        </li>
                        <li><a href="http://mundomarinhobr.blogspot.com/2012/05/lophius-gastrophysus-as-femeas-atingem.html"
                                target="_blank">http://mundomarinhobr.blogspot.com/2012/05/lophius-gastrophysus-as-femeas-atingem.html</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer>
        <div class="center">
            <div class="footerStart">
                <span id="btnLG">Contato</span>
                <span id="btnP">Privacidade</span>
            </div>
            <div class="footerSocial">
                <a href=""><i class="fab fa-facebook"></i></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-discord"></i></a>
            </div>
            <div class="footerEnd">
                <p>Diogo Velozo Xavier</p>
                <p>Site de Teste</p>
            </div>
        </div>
    </footer>

    <form action="" class="modalForm">
        <div class="modalBG" id="modal">
            <div class="modalHeader">
                <h2>Entre em contato</h2>
                <i class="fas fa-times" id="close"></i>
            </div>
            <div class="modalBody">
                <input type="text" name="name" placeholder="Nome" />
                <input type="email" name="email" placeholder="Email" />
                <textarea name="message" placeholder="Digite sua mensagem"></textarea>
                <input type="submit" value="Enviar" />
            </div>
        </div>
    </form>

    <form action="" class="modalForm">
        <div class="modalBG" id="modalP">
            <div class="modalHeader">
                <h2>Política de Privacidade</h2>
                <i class="fas fa-times" id="closeP"></i>
            </div>
            <div class="modalBody">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam possimus, iusto, in
                    repudiandae nam vero aperiam distinctio quam iste, nulla esse voluptatem ratione veniam sequi
                    recusandae inventore magni ex?</p>
            </div>
        </div>
    </form>

    <script src="js/global.js"></script>

    <script src="js/artigo.js"></script>




</body>

</html>