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
            <h2>O nosso Mundo</h2>
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


    <?php require 'footer.php';?>


</body>

</html>