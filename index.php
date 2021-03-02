<?php 

require '_config.php';





?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/page-landing.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-png">
    <title>Index | Mundo Curioso</title>
</head>

<body class="page-landing">

    <header>
        <div class="bg-img">
            <div class="overlay">
                <h1><img src="/img/Mundo curioso.png" alt=""></h1>
                <nav>
                    <a href="/artigos.php">Artigos</a>
                    <a href="/sobre.php">Sobre</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="center">
            <h2>Lorem Ipsum</h2>
            <div class="grid">
                <div class="col1">
                    <img src="img/selective-focus-shot-toucan-standing-tree-branch.jpg" alt="">
                </div>
                <div class="col2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nobis veritatis deleniti,
                        architecto dicta suscipit, cum accusantium ullam, eveniet eius ducimus doloremque officiis non
                        quos impedit numquam quibusdam pariatur cumque. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptatum iste tempora animi quam quae veniam aliquam corrupti, ipsam, ab
                        earum consequuntur blanditiis nisi architecto porro enim cum, minima inventore. Consequuntur!
                    </p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam possimus, iusto, in repudiandae nam vero aperiam distinctio quam iste, nulla esse voluptatem ratione veniam sequi recusandae inventore magni ex?</p>
            </div>
        </div>
    </form>

    <script src="js/global.js"></script>



</body>

</html>