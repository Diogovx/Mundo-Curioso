<?php

require '_config.php';

$nome = $email = $mensagem = $erro = $msgerro = $msgok = '';

// Processa o form
if (isset($_POST['enviando'])) {

    // Obtendo valores dos campos
    $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $mensagem = trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING));

    // Validar nome
    if (strlen($nome) < 2) {
        $erro .= '<samll>Seu nome está muito curto;<br></samll>';
    }

    // Validar e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro .= '<small>Seu e-mail está inválido;<br></small>';
    }

    // Validar mensagem
    if (strlen($mensagem) < 4) {
        $erro .= '<small>A mensagem está muito curta;<br></samll>';
    }

    // Processar erros
    if ($erro == '') {

        // Query de gravação do contato no db
    $sql = "INSERT INTO contatos (nome, email, assunto, mensagem) VALUES ('{$nome}','{$email}','{$mensagem}');";        
        // Executa a query acima
    if($con->query($sql)) {

            // Enviar por e-mail ao admin do site
        @mail('admin@mundoc.com', 'Novo contato', "Olá!\n\nUm novo contato foi enviado para o Gatolândia.\n\nObrigado.");

            // Primeiro no do remetente
        $n = explode(' ', $nome);

        


            // Reset das variáveis
            $nome = $email = $mensagem = '';

        }
        else{

            die('Falha ao enviar seu contato. Tente mais tarde.');
        
        }
            
    }

}


?>


<footer>
        <div class="center">
            <div class="footerStart">
                <span id="btnLG">Contato</span>
                <span id="btnP">Privacidade</span>
            </div>
            <div class="footerSocial">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://discord.com" target="_blank"><i class="fab fa-discord"></i></a>
            </div>
            <div class="footerEnd">
                <p>Diogo Velozo Xavier</p>
                <p>Site de Teste</p>
            </div>
        </div>
    </footer>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="modalForm" method="post">
        <div class="modalBG" id="modal">
            <div class="modalHeader">
                <h2>Entre em contato</h2>
                <i class="fas fa-times" id="close"></i>
            </div>
            <div class="modalBody">
            <?php
            
            if ($msgerro != ''):

                echo $msgerro;
            endif;
            ?>
                <input type="hidden" name="enviando" value="ok">
                <input type="text" name="name" placeholder="Nome"  value="<?php echo $nome ?>"/>
                <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>"/>
                <textarea name="message" placeholder="Digite sua mensagem"><?php echo $mensagem ?></textarea>
                <input type="submit" value="Enviar" />
            </div>
        </div>
    </form>


        <div class="modalBG" id="modalP">
            <div class="modalHeader">
                <h2>Política de Privacidade</h2>
                <i class="fas fa-times" id="closeP"></i>
            </div>
            <div class="modalBody">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam possimus, iusto, in repudiandae nam vero aperiam distinctio quam iste, nulla esse voluptatem ratione veniam sequi recusandae inventore magni ex?</p>
            </div>
        </div>
    

    <script src="js/global.js"></script>