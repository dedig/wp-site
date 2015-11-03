<?php $sessao[3] = 'style="color:#FDA309;"';
get_header(); ?>
	<div class="container">
		<article>
			<div class="row content-block orange-block fluid" id="entrar">
				<div class="col-sm-12 text-block">
					<a href="/index.php/login"><button>Fazer Login</button></a>
				</div>
			</div>
			<div class="onda-laranja-bottom fluid"></div>

			<!--
			<nav class="pagination">
				<a href="#"><p><<</p></a>
				<a href="#"><p>...</p></a>
				<a href="#"><p>2</p></a>
				<a href="#"><p>3</p></a>
				<a href="#" class="current"><p>4</p></a>
				<a href="#"><p>5</p></a>
				<a href="#"><p>6</p></a>
				<a href="#"><p>...</p></a>
				<a href="#"><p>>></p></a>
			</nav> -->

			<?php
				$newsArgs = array( 'post', 'posts_per_page' => -1 );

				$newsLoop = new WP_Query( $newsArgs );
				
				//$count_posts = wp_count_posts();
				$published_posts = wp_count_posts()->publish;

				if ( $published_posts == 0 ):
			?>
			<div id="no-posts">
				<p>Em breve veja postagens informativas aqui.</p>
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

			<!-- <p><?php /*if(function_exists('wp_pagenavi')) { wp_pagenavi(); }*/ ?></p> -->

			<!-- <nav class="pagination">
				<a href="#"><p><<</p></a>
				<a href="#"><p>...</p></a>
				<a href="#"><p>2</p></a>
				<a href="#"><p>3</p></a>
				<a href="#" class="current"><p>4</p></a>
				<a href="#"><p>5</p></a>
				<a href="#"><p>6</p></a>
				<a href="#"><p>...</p></a>
				<a href="#"><p>>></p></a>
			</nav> -->
		</article>
<?php get_footer(); ?>