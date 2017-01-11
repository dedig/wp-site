<?php
    $sessao[4] = 'style="color:#FDA309;"';
    $emailTo = 'contato@dedig.com.br';
    get_header();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name    = stripslashes(trim($_POST['nome']));
        $email   = stripslashes(trim($_POST['email']));
        $subject = stripslashes(trim($_POST['assunto']));
        $message = stripslashes(trim($_POST['mensagem']));
        $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

        if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
            die("Header injection detected");
        }

        $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

        if($name && $email && $emailIsValid && $message) {
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
?>

	<style type="text/css">body {background-color: #e07b4d;}</style>

	<script type="text/javascript">
	function inFocus(el) {
		if(el.value=='Digite sua mensagem...')
			el.value='';
		el.style.color='#727272';
	}
	function inBlur(el) {
		if(el.value=='' || el.value=='Digite sua mensagem...') {
			el.value='Digite sua mensagem...';
			el.style.color='#a9a9a9'; }
		else {
			el.style.color='#727272';
        }
	}
	</script>

		<article>
			<div class="orange-block header-padding">
				<div class="container">
					<div class="col-md-8 form">
						<?php if(!empty($emailSent)): ?>
						    <div>
						        <p>Mensagem enviada com sucesso!</p>
						    </div>
						<?php else:?>
						    <?php if(!empty($hasError)): ?>
						        <div>
						            <p>Erro no envio da mensagem</p>
						        </div>
						    <?php endif;?>
						<?php endif;?>
						<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" role="form" method="POST">
							<h1>Entre em Contato</h1>
							<label>Nome:</label>
							<input type="text" name="nome" placeholder="Digite seu nome..." required>
							<label>E-mail:</label>
							<input type="email" name="email" placeholder="Digite seu e-mail..." required>
							<label>Assunto:</label>
							<input type="text" name="assunto" placeholder="Digite o assunto..." required>
							<label>Mensagem:</label>
							<textarea rows="5" name="mensagem" onfocus="inFocus(this)" onblur="inBlur(this)" style="color:#a9a9a9;" required>Digite sua mensagem...</textarea>
							<input type="submit" value="Enviar">
						</form>
					</div>
					<div class="col-md-4" id="contato-sidebar">
						<img src="<?php bloginfo('template_directory'); ?>/img/promaria-e-judi.png" alt="Envie sua mensagem!" />
						<h4>(11) 3565-3940</h4>
						<h4><a href="mailto:contato@dedig.com.br">contato@dedig.com.br</a></h4>
					</div>
				</div>
			</div>
		</article>
<?php get_footer(); ?>
