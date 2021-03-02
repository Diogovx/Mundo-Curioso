<?php 

require '_config.php';

$titulo = "Artigos";

$idcat = (isset($_GET['c'])) ? intval($_GET['c']) : 0;


if ($idcat > 0) {

    $sql = <<<SQL
    SELECT id_artigo, titulo, resumo, id_categoria, autor FROM artigos
    INNER JOIN art_cat ON artigo_id = id_artigo
    INNER JOIN categorias ON categoria_id = id_categoria
    WHERE categoria_id = '{$idcat}' AND status = 'ativo' 
    ORDER BY data DESC
SQL;

} else {

    $sql = "SELECT id_artigo, titulo, resumo FROM artigos WHERE status = 'ativo' ORDER BY data DESC";
}

// Executa a query
$res = $conn->query($sql);

$artigos = '';

if ($res->num_rows > 0) {

    while ($art = $res->fetch_assoc()) {

        $artigos .= <<<HTML

        <div class="contentBlock">
            <h3>{$art['titulo']}</h3>
            <p>{$art['resumo']}</p>
        </div>
HTML;
    if ($idcat > 0) {
        $titulo = "Artigos Recentes em \"{$art['nome']}\"";
    }
} // end while

// Se não existem artigos
} else {

$artigos = '<p class="center">Nenhum artigo encontrado!</p>';
}



// Acrescenta nome da categoria no titulo
if ($idcat > 0) {
    $titulo = "Artigos Recentes em \"{$art['nome']}\"";
}
 // end while

// Se não existem artigos
else {

$artigos = '<p class="center">Nenhum artigo encontrado!</p>';
}

$cattitulo = $titulo;

///// Obtendo lista de Categorias /////

// Query de consulta ao banco de dados
$sql = "SELECT * FROM categorias ORDER BY nome";

// Executa a query
$res = $conn->query($sql);

// Declara variável que exibe as categorias
$categorias = '<ul>';

// Loop para obter cada registro do banco de dados
while ($cat = $res->fetch_assoc()) {

    // Conta o total de artigos nesta categoria
    $sql2 = "SELECT id_art_cat FROM `art_cat` WHERE categoria_id = {$cat['id_categoria']}";

    // DEBUG: print_r($sql2); echo "\n";

    // Executa aquery
    $res2 = $conn->query($sql2);

    // Total de artigos
    $total = $res2->num_rows;

    // Só exibe categoria se tiver artigo nela
    if($total > 0) {
        // Cria a lista de categorias usando HEREDOC
        $categorias .= <<<HTML
        <a href="artigo.php?c={$cat['id_categoria']}">{$cat['nome']}</a>>

HTML;
    }
}

$categorias .= '</ul>';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/page-articles.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-png">
    <title>Artigos | Mundo Curioso</title>
</head>

<body class="page-articles">
    <div class="back">
        <a href="/index.php"><i class="fas fa-home"></i></a>
    </div>

    <main>
        <div class="container">
            <div class="containerHeader">
                <h2>Artigos</h2>
                <div name="categoria" id="categoria" class="categoryBlock">
                    <div class="categoryButton">Categorias</div>
                    <div class="categories">
                        <?php echo $categorias ?>
                    </div>
                </div>
            </div>
            <div class="containerBody">
                <?php echo $artigos ?>
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

    <script src="js/artigos.js"></script>

</body>

</html>