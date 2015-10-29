<?php $sessao[1] = 'style="color:#FDA309;"';
get_header(); ?>

	<div class="container">
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
		?>
		<article>
			<div class="row content-block orange-block fluid">
				<div class="col-sm-4 img-block">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-dedig-sobre.png" />
				</div>
				<div class="col-sm-8 text-block minor-text">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<div class="onda-laranja-bottom fluid"></div>

			<div class="row content-block">
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_directory'); ?>/img/Dimi-e-Maite.png" />
				</div>
				<div class="col-sm-8 text-block">
					<h1><?php echo $title2; ?></h1>
					<p class="major-text"><?php echo $content2; ?></p>
				</div>
			</div>

			<div class="row content-block">
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_directory'); ?>/img/Artur-e-Mel.png" />
				</div>
				<div class="col-sm-8 text-block">
					<h1><?php echo $title3; ?></h1>
					<p class="major-text"><?php echo $content3; ?></p>
				</div>
			</div>

			<div class="onda-azul-top fluid"></div>
			<div class="row content-block blue-block fluid">
				<div class="col-sm-12 text-block">
					<h1><?php echo $title4; ?></h1>
					<p><?php echo $content4; ?></p>
				</div>
			</div>
			<div class="onda-azul-bottom fluid"></div>
			<div class="row posts-block">
				<div class="col-md-12">
					<h1>Equipe</h1>
				</div>
				<?php
				$newsArgs = array( 'post_type' => 'equipe', 'posts_per_page' => -1 );
				$newsLoop = new WP_Query( $newsArgs );
				while ( $newsLoop -> have_posts() ) :
					$newsLoop -> the_post();
					$ocupacao = get_post_meta($post->ID, 'equipe_ocupacao_', true);
					$biografia = get_post_meta($post->ID, 'equipe_biografia_', true);
					$email = get_post_meta($post->ID, 'equipe_email_', true);
					$facebook = get_post_meta($post->ID, 'equipe_facebook_', true);
					$twitter = get_post_meta($post->ID, 'equipe_twitter_', true);
					$linkedin = get_post_meta($post->ID, 'equipe_linkedin_', true);
				?>
				<div class="col-sm-4 equipe">
					<?php 
					if ( has_post_thumbnail() ): 
						the_post_thumbnail();
					else: ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/avatar.jpg" />
					<?php endif; ?>
					<h2><?php the_title(); ?></h2>
					<p><strong><?php echo $ocupacao; ?></strong><br/><br/><?php echo $biografia; ?></p>
					<div class="equipe-block">
						<?php if ($email != ''): ?>
						<a href="mailto:<?php echo $email; ?>"><div class="social-equipe">
							<img id="mail-equipe" src="<?php bloginfo('template_directory'); ?>/img/equipe-social.png" alt="E-mail" title="E-mail" />
						</div></a>
						<?php endif; ?>
						<?php if ($facebook != ''): ?>
						<a href="<?php echo $facebook; ?>" target="_blank"><div class="social-equipe">
							<img id="facebook-equipe" src="<?php bloginfo('template_directory'); ?>/img/equipe-social.png" alt="Facebook" title="Facebook" />
						</div></a>
						<?php endif; ?>
						<?php if ($twitter != ''): ?>
						<a href="<?php echo $twitter; ?>" target="_blank"><div class="social-equipe">
							<img id="twitter-equipe" src="<?php bloginfo('template_directory'); ?>/img/equipe-social.png" alt="Twitter" title="Twitter" />
						</div></a>
						<?php endif; ?>
						<?php if ($linkedin != ''): ?>
						<a href="<?php echo $linkedin; ?>" target="_blank"><div class="social-equipe">
							<img id="linkedin-equipe" src="<?php bloginfo('template_directory'); ?>/img/equipe-social.png" alt="LinkedIn" title="LinkedIn" />
						</div></a>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile;?>
			</div>
		</article>
		<?php endwhile; ?>

<?php get_footer(); ?>