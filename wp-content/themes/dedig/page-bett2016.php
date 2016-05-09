<?php 
	$isIndex = True;
	get_header();
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
			<div class="container content-block">
					<div class="col-sm-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/dedig-bett-brasil-educar.jpg" style="width:100%;height:100%;float:left;margin:24% 0;">
					</div>
					<div class="col-sm-6 text-block">
						<h2><?php the_title(); ?></h2>
						<h2><?php the_content(); ?></h2>
						<hr>
						<h3><?php echo $title2; ?></h3>
						<p><?php echo $content2; ?></p>
						<a href="http://www.easyeventos.com.br/EasyWeb/CredenciamentoWeb/Default.aspx?Identifica=EDUCAR_VISITANTE" target="_blank">
							<button>Faça seu cadastramento</button>
						</a>
					</div>
				
			</div>

			<div class="onda-laranja-top"></div>
			<div class="content-block orange-block">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.9033529637777!2d-46.63176418544937!3d-23.64363197051972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce595c9ce577dd%3A0x26790b89429a799c!2sS%C3%A3o+Paulo+Expo!5e0!3m2!1spt-BR!2sbr!4v1462462230886" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-sm-6 text-block">
							<h1><?php echo $title3; ?></h1>
							<p><?php echo $content3; ?></p>
							<a href="http://www.bettbrasileducar.com.br/page.cfm/link=301" target="_blank">
								<button>Mais informações</button>
							</a>
						</div>
					</div>
				</div>
			</div>

		</article>
		<?php endwhile; ?>
<?php get_footer(); ?>
