<?php $sessao[0] = 'style="color:#FDA309;"';
get_header(); ?>
	<div id="slider">
		<nav id="slidesContainer">
			<?php 
			$newsArgs = array( 'post_type' => 'banners', 'posts_per_page' => -1);
			$newsLoop = new WP_Query( $newsArgs );
			while ( $newsLoop -> have_posts() ) : $newsLoop -> the_post();
				if (get_post_meta($post->ID, 'isAvaliable', true) == 'Sim'): ?>
			<a class="banner" href="#">
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
		<h1>Descubra a sala Dedig!</h1>
		<img alt="Video sobre a Dedig" title="Clique para assistir" src="<?php bloginfo('template_directory'); ?>/img/video-placeholder.jpg" />
		<!-- <video controls>
			<source src="movie.mp4" type="video/mp4">
			<source src="movie.ogg" type="video/ogg">
			Your browser does not support the video tag.
		</video> -->				
		<a href="#"><button>Clique e descubra!</button></a>
	</div>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>

	<div class="container">
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
		?>
		<article>
			<div class="row content-block">
				<div class="col-sm-8 text-block">
					<h1><?php echo $title2; ?></h1>
					<p><?php echo $content2; ?></p>
				</div>
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_directory'); ?>/img/artur-home.png" />
				</div>
			</div>
			<div class="onda-laranja-top fluid"></div>
			<div class="row content-block orange-block fluid">
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_directory'); ?>/img/dimi-home.png" />
				</div>
				<div class="col-sm-8 text-block">
					<h1><?php echo $title3; ?></h1>
					<h4><?php echo $content3; ?></h4>
				</div>
			</div>
			<div class="onda-laranja-bottom fluid"></div>
			<div class="row content-block">
				<div class="col-sm-8 text-block">
					<h1><?php echo $title4; ?></h1>
					<p><?php echo $content4; ?></p>
				</div>
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_directory'); ?>/img/mel-home.png" />
				</div>
			</div>
		</article>
		<?php endwhile; ?>

<?php get_footer(); ?>