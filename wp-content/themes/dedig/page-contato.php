<?php $sessao[4] = 'style="color:#FDA309;"';
get_header(); ?>
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
		else
			el.style.color='#727272';
	}
	</script>
		<article>
			<div class="orange-block header-padding">
				<div class="container">
					<form action="#" class="col-md-8 form">
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
					<div class="col-md-4" id="contato-sidebar">
						<img src="<?php bloginfo('template_directory'); ?>/img/promaria-e-judi.png" alt="Envie sua mensagem!" />
						<h4>(11) 3565-3940</h4>
						<h4><a href="mailto:contato@dedig.com.br">contato@dedig.com.br</a></h4>
					</div>
				</div>
			</div>
		</article>
<?php get_footer(); ?>