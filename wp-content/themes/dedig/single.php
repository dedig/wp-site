<?php $sessao[3] = 'style="color:#FDA309;"';
$currentId = 0;
get_header(); ?>
	<div class="container">
		<article>
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
				$currentId = get_the_ID();
			?>
			<div class="row">
				<div class="col-sm-8 post">
					<div id="capa">
							<?php 
						if ( has_post_thumbnail() ): 
							the_post_thumbnail();
						else: ?>
						<img src="<?php bloginfo('template_directory'); ?>/img/avatar.jpg" />
						<?php endif; ?>
					</div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				<div class="col-sm-4 recomendacoes">
					<h1>Veja também</h1>
					<?php $newsArgs = array( 'post', 'posts_per_page' => 3 );
					$newsLoop = new WP_Query( $newsArgs );
					while ( $newsLoop -> have_posts() ) :
						$newsLoop -> the_post();

						$thisId = get_the_ID();

						if ( $thisId != $currentId ) :
					?>
					<a href="<?php the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
						<?php if ( has_post_thumbnail() ): 
							the_post_thumbnail();
						else: ?>
						<img src="<?php bloginfo('template_directory'); ?>/img/avatar.jpg" />
						<?php endif; ?>
					</a>
				<?php endif; endwhile; ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</article>
	</div>
<?php get_footer(); ?>