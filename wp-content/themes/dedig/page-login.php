<?php $sessao[3] = 'style="color:#FDA309;"';
get_header(); ?>
	<div id="login-bg">
		<img src="<?php bloginfo('template_directory'); ?>/img/bg.jpg" />
	</div>
	<div class="container">
		<article>
			<div class="row login fluid">
				<div class="col-sm-4"></div>
				<form action="" class="col-sm-4 login-box">
					<h1>Bem-vindo!</h1>
					<label>Login:</label>
					<input type="text" placeholder="Digite seu nome de usuário..." required>
					<label>Senha:</label>
					<input type="password" placeholder="Digite sua senha..." required>
					<input type="submit" value="Enviar">
				</form>
			</div>
		</article>
	</div>
<?php get_footer(); ?>