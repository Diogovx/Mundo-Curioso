<?php 

require '_config.php';


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id == 0) header('Location: /artigos.php');

$sql = "SELECT *, DATE_FORMAT(data, '%d de %M de %Y') AS databr FROM `artigos` WHERE id_artigo = '{$id}' AND status = 'ativo'";

$res = $con->query($sql);

if ($res->num_rows < 1) {
    header('Location: /artigos.php');
}

$art = $res->fetch_assoc();


$sql = <<<SQL
SELECT id_categoria, nome FROM art_cat 
    INNER JOIN categorias ON categoria_id = id_categoria
WHERE artigo_id = '{$id}' ORDER BY nome
SQL;
$res = $con->query($sql);

// Monta lista de categorias
$categorias = '<strong>Categorias: </strong> ';
while ($cat = $res->fetch_assoc()) {
    $categorias .= <<<HTML
<a href="/artigos.php?c={$cat['id_categoria']}">{$cat['nome']}</a>, 
HTML;
}

$categorias = substr($categorias, 0, -2) . '.';

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
                <h2 id="title"><?php echo $art['titulo'] ?></h2>
            </div>

            <div class="containerBody" id="content">
                <?php echo $art['texto'] ?>

                <small>Autor: <?php echo $art['autor']?></small>
                <small>Data: <?php echo $art['data']?></small>


                <div class="references">
                    <div class="arrows" id="reference">
                        <p>Referências</p>
                        <i class="fas fa-chevron-down" id="arrow"></i>
                    </div>
                    <ul>
                        <?php echo $art['referencias']?>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="containerHeader">
                <h2>Comentários</h2>
            </div>
            <div class="containerBody container2">
                <form method="post" name="formcomentario" id="formcomentario">
                    <div class="formDiv">
                        <input type="text" name="txtNome" id="txtNome" placeholder="nome">
                        <textarea name="txtComentario" id="txtComentario"></textarea>
                        <input type="submit" name="btnSubmit" id="btnSubmit" value="Comentar">
                    </div>
                </form>
            </div>
        </div>

    </main>

    <?php require 'footer.php';?>




</body>

</html>