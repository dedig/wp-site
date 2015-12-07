<?php $sessao[3] = 'style="color:#FDA309;"';
get_header(); ?>
	<div class="container">
		<article>
			<div class="row content-block orange-block fluid" id="entrar">
				<div class="col-sm-12 text-block">
					<a href="http://app.dedig.com.br" target="_blank"><button>Fazer login</button></a>
				</div>
			</div>
			<div class="onda-laranja-bottom fluid"></div>

			<?php
				$newsArgs = array( 'post', 'posts_per_page' => -1 );

				$newsLoop = new WP_Query( $newsArgs );
				
				//$count_posts = wp_count_posts();
				$published_posts = wp_count_posts()->publish;

				if ( $published_posts == 0 ):
			?>
			<div id="no-posts">
				<p>Em breve postagens informativas para você.</p>
			</div>

			<?php
				else:

					while ( $newsLoop -> have_posts() ) :
						$newsLoop -> the_post();
			?>

			<div class="row content-block sub-block post-block">
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
	</div>
<?php get_footer(); ?>