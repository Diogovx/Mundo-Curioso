<?php 

require '_config.php';

$titulo = "Artigos";




$idcat = (isset($_GET['c'])) ? intval($_GET['c']) : 0;

if ($idcat > 0) {

    $sql = <<<SQL
SELECT id_artigo, titulo, resumo, id_categoria, nome FROM artigos
    INNER JOIN art_cat ON artigo_id = id_artigo
    INNER JOIN categorias ON categoria_id = id_categoria
WHERE categoria_id = '{$idcat}' AND status = 'ativo' 
    ORDER BY data DESC
SQL;

} else {

    $sql = "SELECT id_artigo, titulo, resumo FROM artigos WHERE status = 'ativo' ORDER BY data DESC";

}

$res = $con->query($sql);

$artigos = '';


if ($res->num_rows > 0) {

    while ($art = $res->fetch_assoc()) {

        $artigos .= <<<HTML

<div class="contentBlock">

    <h2>{$art['titulo']}</h2>
    <p>{$art['resumo']}</p>
    <a href="artigo.php?id={$art['id_artigo']}">Ler mais...</a>
</div>
HTML;

        if ($idcat > 0) {
            $titulo = "Artigos Recentes em \"{$art['nome']}\"";
        }
    }

} else {

    $artigos = '<p class="center">Nenhum artigo encontrado!</p>';
}

$cattitulo = $titulo;

$sql = "SELECT * FROM categorias ORDER BY nome";

$res = $con->query($sql);
$cat = '';
$categorias = '';
$total = '';
while ($cat = $res->fetch_assoc()) {

    $sql2 = "SELECT id_art_cat FROM `art_cat` WHERE categoria_id = {$cat['id_categoria']}";


    $res2 = $con->query($sql2);


    $total = $res2->num_rows;

    if($total > 0) {
        $categorias .= <<<HTML
        <a href="artigos.php?c={$cat['id_categoria']}">{$cat['nome']}</a>

HTML;
    }
}


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
                <h2><a href="/artigos.php">Artigos</a></h2>
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

    <?php require 'footer.php';?>

</body>

</html>