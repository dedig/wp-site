<?php
    $emailTo = 'contato@dedig.com.br';
    get_header();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome    = stripslashes(trim($_POST['nome']));
        $email   = stripslashes(trim($_POST['email']));
        $telFixo = stripslashes(trim($_POST['telFixo']));
        $celular = stripslashes(trim($_POST['celular']));
        $instituicao = stripslashes(trim($_POST['instituicao']));
        $categoria = stripslashes(trim($_POST['categoria']));

        $subject = '[CADASTRO] Cadastro de '.$nome;
        $message = '<table>';
        $message .= '<tr><th>DADOS PARA CADASTRO:</th></tr>';
        $message .= '<tr><td><b>Nome:</b></td><td>'.$nome.'</td></tr>';
        $message .= '<tr><td><b>E-mail:</b></td><td>'.$email.'</td></tr>';
        $message .= '<tr><td><b>Telefone fixo:</b></td><td>'.$telFixo.'</td></tr>';
        $message .= '<tr><td><b>Telefone celular:</b></td><td>'.$celular.'</td></tr>';
        $message .= '<tr><td><b>Empresa / instituição:</b></td><td>'.$instituicao.'</td></tr>';
        $message .= '<tr><td><b>Categoria:</b></td><td>'.$categoria.'</td></tr>';
        $message .= '</table>';
        $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

        if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
            die("Header injection detected");
        }

        $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

        if($nome && $email && $emailIsValid && $message) {
            $headers .= sprintf( 'Return-Path: %s%s', $email, PHP_EOL );
            $headers .= sprintf( 'From: %s%s', $email, PHP_EOL );
            $headers .= sprintf( 'Reply-To: %s%s', $email, PHP_EOL );
            $headers .= sprintf( 'Message-ID: <%s@%s>%s', md5( uniqid( rand( ), true ) ), $_SERVER[ 'HTTP_HOST' ], PHP_EOL );
            $headers .= sprintf( 'X-Priority: %d%s', 3, PHP_EOL );
            $headers .= sprintf( 'X-Mailer: PHP/%s%s', phpversion( ), PHP_EOL );
            $headers .= sprintf( 'MIME-Version: 1.0%s', PHP_EOL );
            $headers .= sprintf( 'Content-Transfer-Encoding: 8bit%s', PHP_EOL );
            $headers .= sprintf( 'Content-Type: text/html; charset="utf-8"%s', PHP_EOL );
            wp_mail($emailTo, $subject, $message, $headers);
            $emailSent = true;
        }

        else {
            $hasError = true;
        }
    }

	$id = 'page_id=' . get_the_ID();
	$current = new WP_Query($id);

	while ($current -> have_posts()) :
		$current -> the_post();
		$title2 = get_post_meta($post->ID, 'bloco_2_title_value_meta', true);
		$content2 = get_post_meta($post->ID, 'bloco_2_content_value_meta', true);
		$title3 = get_post_meta($post->ID, 'bloco_3_title_value_meta', true);
		$content3 = get_post_meta($post->ID, 'bloco_3_content_value_meta', true);
		$title4 = get_post_meta($post->ID, 'bloco_4_title_value_meta', true);
		$content4 = get_post_meta($post->ID, 'bloco_4_content_value_meta', true);
		$title5 = get_post_meta($post->ID, 'bloco_5_title_value_meta', true);
		$content5 = get_post_meta($post->ID, 'bloco_5_content_value_meta', true);
		$title6 = get_post_meta($post->ID, 'bloco_6_title_value_meta', true);
		$content6 = get_post_meta($post->ID, 'bloco_6_content_value_meta', true);

?>

<div class="container cadastro">
    <?php if(isset($_POST['download']) && $emailSent): ?>
        <h1 class="cadastro__title">Obrigado <?php echo $nome; ?>!</h1>
        <p>Seu cadastrado foi efetuado, aguarde um período de até 24 horas para entrarmos em contato. Enquanto isso, você já pode baixar o Dedig :)</p>
        <a href="http://download.dedig.com.br/instalar-dedig.exe" download class="col-xs-12 col-sm-4">
            <button type="button">Download para Windows</button>
        </a>
        <a href="https://itunes.apple.com/us/app/dedig-aprender-é-divertido/id1122727491?ls=1&mt=8" download class="col-xs-12 col-sm-4">
            <button type="button">Download para iOS</button>
        </a>
        <a href="https://play.google.com/store/apps/details?id=br.com.dedig.fullgame" download class="col-xs-12 col-sm-4">
            <button type="button">Download para Android</button>
        </a>       
    <?php else:
        if ($hasError): ?>
            <div class="col-sm-12">
                <p class="cadastro__error">Houve um erro no envio!</p>
            </div>
        <?php endif; ?>
        <div class="col-sm-12">
            <h1 class="cadastro__title">Cadastre-se para ganhar acesso ao nosso produto!</h1>
        </div>
    	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="form cadastro__form" method="POST">

            <input type="hidden" name="download" value="true">

            <div class="col-sm-12">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="col-sm-12">
                <label for="email">E-mail: </label>
        		<input type="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="col-sm-6">
                <label for="email">Telefone: </label>
        		<input pattern="^\d{10,14}$" type="tel" name="telFixo" placeholder="Número com DDD, sem espaços (opcional)">
            </div>

            <div class="col-sm-6">
                <label for="email">Celular: </label>
        		<input pattern="^\d{10,14}$" type="tel" name="celular" placeholder="Número com DDD, sem espaços (opcional)">
            </div>

            <div class="col-sm-12">
                <label for="instituicao">Empresa / Instituição: </label>
        		<input type="text" name="instituicao" placeholder="Digite o nome de sua empresa ou instituição (opcional)">
            </div>

            <div class="cadastro__radio-block">
                <div class="col-sm-12">
                    <label for="categoria">Você é?</label>
                </div>
                <div class="col-sm-12">
                    <div class="cadastro__radio-block__element">
                        <input type="radio" name="categoria" value="Pai" checked><p>Pai</p>
                    </div>
                    <div class="cadastro__radio-block__element">
                        <input type="radio" name="categoria" value="Aluno"><p>Aluno</p>
                    </div>
                    <div class="cadastro__radio-block__element">
                        <input type="radio" name="categoria" value="Educador"><p>Educador</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
        		<input id="em-testes__submit" type="submit" value="Enviar">
            </div>

    	</form>        
    
    <div class="row">
        <h2>Já tem cadastro? Escolha uma plataforma e faça o download agora!</h2>

        <a href="http://download.dedig.com.br/instalar-dedig.exe" download class="col-xs-12 col-sm-3">
            <button type="button">Windows</button>
        </a>
        <a href="https://itunes.apple.com/us/app/dedig-aprender-é-divertido/id1122727491?ls=1&mt=8" class="col-xs-12 col-sm-3">
            <button type="button">iOS</button>
        </a>
        <a href="https://play.google.com/store/apps/details?id=br.com.dedig.fullgame" class="col-xs-12 col-sm-3">
            <button type="button">Android</button>
        </a>
	<a href="http://download.dedig.com.br/linux/instalar-dedig.zip" download class="col-xs-12 col-sm-3">
	    <button type="button">Linux (64bit)</button>
	</a>
 
    </div>

<?php endif; ?>
</div>

<?php
	endwhile;
	get_footer();
?>
