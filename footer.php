<?php

require '_config.php';

$nome = $email = $mensagem = $erro = $msgerro = $msgok = '';

if (isset($_POST['enviando'])) {

    $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $mensagem = trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING));

    if (strlen($nome) < 2) {
        $erro .= '<samll>Seu nome está muito curto;<br></samll>';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro .= '<small>Seu e-mail está inválido;<br></small>';
    }

    if (strlen($mensagem) < 4) {
        $erro .= '<small>A mensagem está muito curta;<br></samll>';
    }

    if ($erro == '') {

    $sql = "INSERT INTO contatos (nome, email, assunto, mensagem) VALUES ('{$nome}','{$email}','{$mensagem}');";        

    if($con->query($sql)) {

        @mail('admin@mundoc.com', 'Novo contato', "Olá!\n\nUm novo contato foi enviado para o Gatolândia.\n\nObrigado.");

        $n = explode(' ', $nome);

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
            <input type="text" name="name" placeholder="Nome" value="<?php echo $nome ?>" />
            <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>" />
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
        <h2>Política Privacidade</h2>
        <p>A sua privacidade é importante para nós. É política do Mundo Curioso respeitar a sua privacidade em relação a
            qualquer informação sua que possamos coletar no site <a href=mcurioso.atwebpages.com>Mundo Curioso</a>, e
            outros sites que possuímos e operamos.</p>
        <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço.
            Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que
            estamos coletando e como será usado. </p>
        <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando
            armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem
            como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>
        <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido
            por lei.</p>
        <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos
            controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas
            respectivas <a href='https://politicaprivacidade.com' target='_BLANK'>políticas de privacidade</a>. </p>
        <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos
            fornecer alguns dos serviços desejados.</p>
        <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e
            informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações
            pessoais, entre em contacto connosco.</p>
        <h2>Política de Cookies Mundo Curioso</h2>
        <h3>O que são cookies?</h3>
        <p>Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos
            baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles
            coletam, como as usamos e por que às vezes precisamos armazenar esses cookies. Também compartilharemos como
            você pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar'
            certos elementos da funcionalidade do site.</p>
        <h3>Como usamos os cookies?</h3>
        <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem
            opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos
            que eles adicionam a este site. É recomendável que você deixe todos os cookies se não tiver certeza se
            precisa ou não deles, caso sejam usados ​​para fornecer um serviço que você usa.</p>
        <h3>Desativar cookies</h3>
        <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do
            navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a
            funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies geralmente resultará
            na desativação de determinadas funcionalidades e recursos deste site. Portanto, é recomendável que você não
            desative os cookies.</p>
        <h3>Cookies que definimos</h3>
        <ul>
            <li> Cookies relacionados à conta<br><br> Se você criar uma conta connosco, usaremos cookies para o
                gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos
                quando você sair do sistema, porém, em alguns casos, eles poderão permanecer posteriormente para lembrar
                as preferências do seu site ao sair.<br><br> </li>
            <li> Cookies relacionados ao login<br><br> Utilizamos cookies quando você está logado, para que possamos
                lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses
                cookies são normalmente removidos ou limpos quando você efetua logout para garantir que você possa
                acessar apenas a recursos e áreas restritas ao efetuar login.<br><br> </li>
            <li> Cookies relacionados a boletins por e-mail<br><br> Este site oferece serviços de assinatura de boletim
                informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está registrado e se deve
                mostrar determinadas notificações válidas apenas para usuários inscritos / não inscritos.<br><br> </li>
            <li> Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de comércio eletrônico
                ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as
                páginas, para que possamos processá-lo adequadamente.<br><br> </li>
            <li> Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e questionários para
                fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais
                precisão. Essas pesquisas podem usar cookies para lembrar quem já participou numa pesquisa ou para
                fornecer resultados precisos após a alteração das páginas.<br><br> </li>
            <li> Cookies relacionados a formulários<br><br> Quando você envia dados por meio de um formulário como os
                encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados
                para lembrar os detalhes do usuário para correspondência futura.<br><br> </li>
            <li> Cookies de preferências do site<br><br> Para proporcionar uma ótima experiência neste site, fornecemos
                a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para
                lembrar suas preferências, precisamos definir cookies para que essas informações possam ser chamadas
                sempre que você interagir com uma página for afetada por suas preferências.<br> </li>
        </ul>
        <h3>Cookies de Terceiros</h3>
        <p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir
            detalha quais cookies de terceiros você pode encontrar através deste site.</p>
        <ul>
            <li> Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis ​​da
                Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses
                cookies podem rastrear itens como quanto tempo você gasta no site e as páginas visitadas, para que
                possamos continuar produzindo conteúdo atraente. </li>
        </ul>
        <p>Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics.</p>
        <ul>
            <li> As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar
                produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou
                as páginas visitadas, o que nos ajuda a entender como podemos melhorar o site para você.</li>
            <li> Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se
                apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para garantir
                que você receba uma experiência consistente enquanto estiver no site, enquanto entendemos quais
                otimizações os nossos usuários mais apreciam.</li>
            <li> À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de
                nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é
                importante para você, pois significa que podemos fazer previsões de negócios com precisão que nos
                permitem analizar nossos custos de publicidade e produtos para garantir o melhor preço possível.</li>
        </ul>
        <h3>Compromisso do Usuário</h3>
        <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Mundo Curioso oferece no
            site e com caráter enunciativo, mas não limitativo:</p>
        <ul>
            <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
            <li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, ou sobre cassinos, apostas
                desportivas (ex.: ESC Online), jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia
                ao terrorismo ou contra os direitos humanos;</li>
            <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Mundo Curioso, de seus
                fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas
                de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
        </ul>
        <h3>Mais informações</h3>
        <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se
            precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que
            você usa em nosso site.</p>
        <p>Esta política é efetiva a partir de <strong>March</strong>/<strong>2021</strong>.</p>
    </div>
</div>


<script src="js/global.js"></script>