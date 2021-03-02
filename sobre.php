<?php 

require '_config.php';





?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/page-about.css">
    <link rel="shortcut icon" href="/img/favicon.jpg" type="image/x-jpg">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Sobre | Mundo Curioso</title>
</head>

<body class="page-about">

    <div class="back">
        <a href="/index.php"><i class="fas fa-home"></i></a>
    </div>

    <main>
        <div class="container">
            <div class="containerHeader">
                <h2>Sobre</h2>
            </div>

            <div class="containerBody">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo laudantium ab iste quae! Tempore,
                    exercitationem, aut perferendis incidunt quo vel mollitia sed ad sit ratione similique quam libero!
                    Nam, amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ducimus cupiditate labore
                    quibusdam, blanditiis iure ad cum minus ea voluptas, officia soluta earum officiis ab odit iusto
                    necessitatibus molestiae est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sed,
                    veritatis, perspiciatis debitis perferendis doloremque adipisci hic, rem aliquid in nemo illum
                    minima maiores? Inventore alias maxime pariatur et hic.</p>
                    <h3>Atribuições</h3>
                    <a href='https://br.freepik.com/fotos/neve'>Neve foto criado por wirestock - br.freepik.com</a>
                    <a href='https://br.freepik.com/fotos/arvore'>Árvore foto criado por wirestock - br.freepik.com</a>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam possimus, iusto, in repudiandae nam vero aperiam distinctio quam iste, nulla esse voluptatem ratione veniam sequi recusandae inventore magni ex?</p>
            </div>
        </div>
    </form>

    <script src="js/global.js"></script>


</body>

</html>