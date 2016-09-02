<?php
	$sessao[0] = 'style="color:#FDA309;"';
	$isIndex = True;
	get_header();
?>
	<div id="slider">
		<nav id="slidesContainer">
			<?php 
			$newsArgs = array( 'post_type' => 'banners', 'posts_per_page' => -1);
			$newsLoop = new WP_Query( $newsArgs );
			while ( $newsLoop -> have_posts() ) : $newsLoop -> the_post();
				if (get_post_meta($post->ID, 'isAvaliable', true) == 'Sim'): ?>
			<a class="banner" href="<?php echo get_post_meta($post->ID, 'banner_link_value_meta', true); ?>">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<h1><?php the_title(); ?></h1>
			</a>
		<?php endif; endwhile; ?>
		</nav>
		<div id="bar">
			<div id="bar-fill"></div>
		</div>
	</div>
	
	<div id="cta-index">
		<img id="img-cta-index-bg" alt="Descubra!" src="<?php bloginfo('template_directory'); ?>/img/cta-index.jpg" />
		<ul id="dots">
			<?php while ( $newsLoop -> have_posts() ) : $newsLoop -> the_post();
					if (get_post_meta($post->ID, 'isAvaliable', true) == 'Sim'): ?>
			<li class="slider-dots"></li>
			<?php endif; endwhile; ?>
		</ul>
		<h1>Conheça a sala Dedig!</h1>
		<a href="<?php echo home_url( '/index.php/cadastre-se' ); ?>" id="jogoBtn"><button>Clique para descobrir</button></a>
	</div>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>

		<?php
			$home = new WP_Query('page_id=48');

			while ($home -> have_posts()) :
				$home -> the_post();
				$title2 = get_post_meta($post->ID, 'bloco_2_title_value_meta', true);
				$content2 = get_post_meta($post->ID, 'bloco_2_content_value_meta', true);
				$title3 = get_post_meta($post->ID, 'bloco_3_title_value_meta', true);
				$content3 = get_post_meta($post->ID, 'bloco_3_content_value_meta', true);
				$title4 = get_post_meta($post->ID, 'bloco_4_title_value_meta', true);
				$content4 = get_post_meta($post->ID, 'bloco_4_content_value_meta', true);
				$title5 = get_post_meta($post->ID, 'bloco_5_title_value_meta', true);
				$content5 = get_post_meta($post->ID, 'bloco_5_content_value_meta', true);
		?>
		<article>
			<div class="content-block">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 text-block">
							<h1><?php echo $title2; ?></h1>
							<p><?php echo $content2; ?></p>
						</div>
						<div class="col-sm-4">
							<img src="<?php bloginfo('template_directory'); ?>/img/artur-home.png" />
						</div>
					</div>
				</div>
			</div>

			<div class="content-block">
				<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/img/mel-home.png" />
							</div>
						<div class="col-sm-8 text-block">
							<h1><?php echo $title3; ?></h1>
							<p><?php echo $content3; ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container content-block fluid">
				<div id="video-dedig" class="row text-block">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h1><?php echo $title4; ?></h1>
						<iframe id="yTubeIFrame"></iframe>
					</div>
				</div>
			</div>
			
			<div class="onda-laranja-top"></div>
			<div class="content-block orange-block">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 text-block">
							<h1><?php echo $title5; ?></h1>
							<h4><?php echo $content5; ?></h4>
						</div>
						<div class="col-sm-4">
							<img src="<?php bloginfo('template_directory'); ?>/img/dimi-home.png" />
						</div>
					</div>
				</div>
			</div>
		</article>
		<?php endwhile; ?>

<?php get_footer(); ?>