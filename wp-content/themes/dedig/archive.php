<?php $sessao[3] = 'style="color:#FDA309;"';
get_header(); ?>
	<div class="container">
		<article>
			<div class="row">
				<h1 class="col-md-12">Exibindo: todos</h1>
			</div>

			<?php $newsArgs = array( 'post', 'posts_per_page' => -1 );
				$newsLoop = new WP_Query( $newsArgs );
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

			<?php endwhile; ?>

		</article>
	</div>
<?php get_footer(); ?>