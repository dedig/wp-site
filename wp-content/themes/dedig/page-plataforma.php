<?php $sessao[2] = 'style="color:#FDA309;"';
get_header(); ?>
		<?php
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
		<article>
			<div class="content-block">
				<div class="container">
					<div class="col-sm-12 text-block">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>

			<div class="onda-laranja-top"></div>
			<div class="content-block orange-block">
				<div class="container">
					<div class="col-sm-12 text-block">
						<h1><?php echo $title2; ?></h1>
						<p><?php echo $content2; ?></p>
					</div>
				</div>
			</div>
			<div class="orange-block">
				<div class="container">	
					<div class="row content-block">
						<div class="col-sm-6">
							<img src="<?php bloginfo('template_directory'); ?>/img/sondagem.png">
						</div>
						<div class="col-sm-6 text-block">
							<h2><?php echo $title3; ?></h2>
							<p><?php echo $content3; ?></p>
						</div>
					</div>

					<div class="row content-block">
						<div class="col-sm-6">
							<img src="<?php bloginfo('template_directory'); ?>/img/atividade.png">
						</div>
						<div class="col-sm-6 text-block">
							<h2><?php echo $title4; ?></h2>
							<p><?php echo $content4; ?> </p>
						</div>
					</div>
					
					<div class="row content-block">
						<div class="col-sm-6">
							<img src="<?php bloginfo('template_directory'); ?>/img/avaliacao.png">
						</div>
						<div class="col-sm-6 text-block">
							<h2><?php echo $title5; ?></h2>
							<p><?php echo $content5; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="onda-laranja-bottom"></div>
			<div class="container">
				<div class="content-block">
					<div class="col-sm-12 text-block">
						<h1><?php echo $title6; ?></h1>
						<p><?php echo $content6; ?></p>
					</div>
				</div>

				<?php
					$newsArgs = array( 'post_type' => 'personagens', 'posts_per_page' => -1 );
					$newsLoop = new WP_Query( $newsArgs );
					while ( $newsLoop -> have_posts() ) : $newsLoop -> the_post(); ?>
					<div class="col-sm-4 personagem">
						<?php the_post_thumbnail(); ?>
						<div class="personagem-bio">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>

		</article>
		<?php endwhile; ?>
<?php get_footer(); ?>
