	<div class="onda-azul-top fluid" <?php global $isIndex; if ( $isIndex ): ?>style="background-color:#e07b4d;"<?php endif; ?> ></div>
	<footer class="row fluid" id="footer-menu">
		<div class="col-sm-4 footer-item">
			<a href="<?php echo home_url( '/' ); ?>"><img id="logo-footer" alt="Logo Dedig" src="<?php bloginfo('template_directory'); ?>/img/logo-dedig-footer.png" /></a>
		</div>
		<div class="col-sm-4 footer-item">
			<h3>MAPA DO SITE</h3>
			<ul>
				<li><a href="<?php echo home_url( '/' ); ?>"><p>Home</p></a></li>
				<li><a href="<?php echo home_url( '/index.php/sobre' ); ?>"><p>Quem somos</p></a></li>
				<li><a href="<?php echo home_url( '/index.php/plataforma' ); ?>"><p>Plataforma</p></a></li>
				<li><a href="<?php echo home_url( '/index.php/educadores' ); ?>"><p>Para os educadores</p></a></li>
				<li><a href="#"><p>Descubra a sala Dedig!</p></a></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<div class="footer-item">
				<h3>ENTRE EM CONTATO</h3>
				<ul>
					<li><p>Telefone: (11) 3565-3940</p></li>
					<li><p>E-mail: <a href="mailto:contato@dedig.com.br">contato@dedig.com.br</a></p></li>
				</ul>
			</div>
			<div class="footer-item">
				<h3>REDES SOCIAIS</h3>
				<div>
					<a href="#"><div class="social"><img id="facebook" src="<?php bloginfo('template_directory'); ?>/img/social.png" alt="Facebook" title="Facebook" /></div></a>
					<a href="#"><div class="social"><img id="twitter" src="<?php bloginfo('template_directory'); ?>/img/social.png" alt="Twitter" title="Twitter" /></div></a>
					<a href="#"><div class="social"><img id="youtube" src="<?php bloginfo('template_directory'); ?>/img/social.png" alt="Youtube" title="Youtube" /></div></a>
				</div>
			</div>
		</div>
		<div id="copyright" class="col-sm-12 fluid">
			<p>Dedig ©  2015 - Todos os direitos reservados</p>
		</div>
	</footer>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
