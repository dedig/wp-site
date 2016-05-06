<?php $sessao[3] = 'style="color:#FDA309;"';
get_header(); ?>
		<article>
			<div class="content-block orange-block" id="entrar">
				<div class="container">
					<div class="col-sm-12 text-block">
						<a href="http://app.dedig.com.br" target="_blank"><button>Fazer login</button></a>
					</div>
				</div>
			</div>
			<div class="onda-laranja-bottom"></div>

			<?php
				$newsArgs = array( 'post', 'posts_per_page' => -1 );

				$newsLoop = new WP_Query( $newsArgs );
				
				//$count_posts = wp_count_posts();
				$published_posts = wp_count_posts()->publish;

				if ( $published_posts == 0 ):
			?>
			<div class="container">
				<div id="no-posts">
					<p>Em breve postagens informativas para você.</p>
				</div>
			</div>

			<?php
				else:

					while ( $newsLoop -> have_posts() ) :
						$newsLoop -> the_post();
			?>

			<div class="container content-block sub-block post-block">
				<a href="<?php the_permalink(); ?>">
					<div class="col-sm-4 post-thumbnail">
						<?php 
						if ( has_post_thumbnail() ): 
							the_post_thumbnail();
						else: ?>
						<img src="<?php bloginfo('template_directory'); ?>/img/avatar.jpg" />
						<?php endif; ?>
					</div>
					<div class="col-md-8 text-block">
						<h2><?php the_title(); ?></h2>
						<p><strong>Autor: <?php the_author_posts_link(); ?> em: <?php the_time('d/m/Y') ?></strong></p>
					</div>
				</a>
			</div>

			<?php endwhile; endif; ?>

		</article>
<?php get_footer(); ?>