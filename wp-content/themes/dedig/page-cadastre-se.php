<?php

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

<div class="container" id="em-testes">
	<h1 id="em-testes__title"><?php echo $title2; ?></h1>
	<form action="" id="em-testes__form" class="form">
		<label><?php echo $content2; ?></label>
		<input id="em-testes__email" type="email" name="cadastro" placeholder="<?php echo $content3; ?>" required>
		<input id="em-testes__submit" type="submit" value="Enviar">
	</form>
</div>

<?php
	endwhile;
	get_footer();
?>