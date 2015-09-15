<?php

// Para não exibir a Admin Bar do Wordpress
add_filter('show_admin_bar', '__return_false');

// Para exibir a opção de imagem de destaque
add_theme_support('post-thumbnails'); 

// Post Type: Banners
add_action('init', 'type_post_banners');
 
function type_post_banners() { 
	$labels = array(
		'name' => _x('Banners', 'post type general name'),
		'singular_name' => _x('Banners', 'post type singular name')
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'register_meta_box_cb' => 'banners_meta_box',
		'supports' => array('title', 'thumbnail')
	);

	register_post_type( 'banners' , $args );
	flush_rewrite_rules();
}

// Post Type: Equipe
add_action('init', 'type_post_equipe');
 
function type_post_equipe() { 
	$labels = array(
		'name' => _x('Equipe', 'post type general name'),
		'singular_name' => _x('Equipe', 'post type singular name')
	);

	$args = array(
		'labels' => $labels,
		'public' => true,			
		'register_meta_box_cb' => 'equipe_meta_box',
		'supports' => array('title', 'thumbnail')
	);

	register_post_type( 'equipe' , $args );
	flush_rewrite_rules();
}

// Post Type: Personagens
add_action('init', 'type_post_personagens');
 
function type_post_personagens() { 
	$labels = array(
		'name' => _x('Personagens', 'post type general name'),
		'singular_name' => _x('Personagens', 'post type singular name')
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail')
	);

	register_post_type( 'personagens' , $args );
	flush_rewrite_rules();
}

// Pages Meta Box
function blocos_add_meta_box() {

	$screens = array( 'page' );

	foreach ( $screens as $screen ) {
		add_meta_box('meta_box_bloco_2_title', __( 'Bloco 2 - Título' ), 'bloco_2_title', $screen);
		add_meta_box('meta_box_bloco_2_content', __( 'Bloco 2 - Conteúdo' ), 'bloco_2_content', $screen);
		add_meta_box('meta_box_bloco_3_title', __( 'Bloco 3 - Título' ), 'bloco_3_title', $screen);
		add_meta_box('meta_box_bloco_3_content', __( 'Bloco 3 - Conteúdo' ), 'bloco_3_content', $screen);
		add_meta_box('meta_box_bloco_4_title', __( 'Bloco 4 - Título' ), 'bloco_4_title', $screen);
		add_meta_box('meta_box_bloco_4_content', __( 'Bloco 4 - Conteúdo' ), 'bloco_4_content', $screen);
		add_meta_box('meta_box_bloco_5_title', __( 'Bloco 5 - Título' ), 'bloco_5_title', $screen);
		add_meta_box('meta_box_bloco_5_content', __( 'Bloco 5 - Conteúdo' ), 'bloco_5_content', $screen);
		add_meta_box('meta_box_bloco_6_title', __( 'Bloco 6 - Título' ), 'bloco_6_title', $screen);
		add_meta_box('meta_box_bloco_6_content', __( 'Bloco 6 - Conteúdo' ), 'bloco_6_content', $screen);
	}
}
add_action( 'add_meta_boxes', 'blocos_add_meta_box' );

function bloco_2_title() {
	global $post;
	$bloco_2_title_value = get_post_meta($post->ID, 'bloco_2_title_value_meta', true); ?>
<input type="text" name="bloco_2_title_value_meta" value="<?php echo $bloco_2_title_value; ?>" style="width:100%;" />
<?php
}
function bloco_2_content() {
	global $post;
	$bloco_2_content_value = get_post_meta($post->ID, 'bloco_2_content_value_meta', true); ?>
<textarea rows="10" name="bloco_2_content_value_meta" style="width:100%;"><?php echo $bloco_2_content_value; ?></textarea>
<?php
}
function bloco_3_title() {
	global $post;
	$bloco_3_title_value = get_post_meta($post->ID, 'bloco_3_title_value_meta', true); ?>
<input type="text" name="bloco_3_title_value_meta" value="<?php echo $bloco_3_title_value; ?>" style="width:100%;" />
<?php
}
function bloco_3_content() {
	global $post;
	$bloco_3_content_value = get_post_meta($post->ID, 'bloco_3_content_value_meta', true); ?>
<textarea rows="10" name="bloco_3_content_value_meta" style="width:100%;"><?php echo $bloco_3_content_value; ?></textarea>
<?php
}
function bloco_4_title() {
	global $post;
	$bloco_4_title_value = get_post_meta($post->ID, 'bloco_4_title_value_meta', true); ?>
<input type="text" name="bloco_4_title_value_meta" value="<?php echo $bloco_4_title_value; ?>" style="width:100%;" />
<?php
}
function bloco_4_content() {
	global $post;
	$bloco_4_content_value = get_post_meta($post->ID, 'bloco_4_content_value_meta', true); ?>
<textarea rows="10" name="bloco_4_content_value_meta" style="width:100%;"><?php echo $bloco_4_content_value; ?></textarea>
<?php
}
function bloco_5_title() {
	global $post;
	$bloco_5_title_value = get_post_meta($post->ID, 'bloco_5_title_value_meta', true); ?>
<input type="text" name="bloco_5_title_value_meta" value="<?php echo $bloco_5_title_value; ?>" style="width:100%;" />
<?php
}
function bloco_5_content() {
	global $post;
	$bloco_5_content_value = get_post_meta($post->ID, 'bloco_5_content_value_meta', true); ?>
<textarea rows="10" name="bloco_5_content_value_meta" style="width:100%;"><?php echo $bloco_5_content_value; ?></textarea>
<?php
}
function bloco_6_title() {
	global $post;
	$bloco_6_title_value = get_post_meta($post->ID, 'bloco_6_title_value_meta', true); ?>
<input type="text" name="bloco_6_title_value_meta" value="<?php echo $bloco_6_title_value; ?>" style="width:100%;" />
<?php
}
function bloco_6_content() {
	global $post;
	$bloco_6_content_value = get_post_meta($post->ID, 'bloco_6_content_value_meta', true); ?>
<textarea rows="10" name="bloco_6_content_value_meta" style="width:100%;"><?php echo $bloco_6_content_value; ?></textarea>
<?php
}

add_action('save_post', 'save_blocos');

function save_blocos(){
	global $post;
	update_post_meta($post->ID, 'bloco_2_title_value_meta', $_POST['bloco_2_title_value_meta']);
	update_post_meta($post->ID, 'bloco_2_content_value_meta', $_POST['bloco_2_content_value_meta']);
	update_post_meta($post->ID, 'bloco_3_title_value_meta', $_POST['bloco_3_title_value_meta']);
	update_post_meta($post->ID, 'bloco_3_content_value_meta', $_POST['bloco_3_content_value_meta']);
	update_post_meta($post->ID, 'bloco_4_title_value_meta', $_POST['bloco_4_title_value_meta']);
	update_post_meta($post->ID, 'bloco_4_content_value_meta', $_POST['bloco_4_content_value_meta']);
	update_post_meta($post->ID, 'bloco_5_title_value_meta', $_POST['bloco_5_title_value_meta']);
	update_post_meta($post->ID, 'bloco_5_content_value_meta', $_POST['bloco_5_content_value_meta']);
	update_post_meta($post->ID, 'bloco_6_title_value_meta', $_POST['bloco_6_title_value_meta']);
	update_post_meta($post->ID, 'bloco_6_content_value_meta', $_POST['bloco_6_content_value_meta']);
}

// Banners Meta Box
function banners_meta_box() {
	add_meta_box('meta_box_avaliable', __( 'Exibir na página' ), 'banner_show_hide', 'banners', 'normal', 'high');
}

function banner_show_hide() {
	global $post;
	$postValue = get_post_meta($post->ID, 'isAvaliable', true); ?>
<input type="radio" name="isAvaliable" value="Sim" <?php if ($postValue == 'Sim'): ?>checked<?php endif; ?> required />Sim&nbsp;&nbsp;&nbsp;
<input type="radio" name="isAvaliable" value="Nao" <?php if ($postValue == 'Nao'): ?>checked<?php endif; ?> />Não

<?php
}

add_action('save_post', 'save_banners_post');

function save_banners_post(){
	global $post;
	update_post_meta($post->ID, 'isAvaliable', $_POST['isAvaliable']);
}

// Equipe Meta Box
function equipe_meta_box() {
	add_meta_box('meta_box_ocupacao', __( 'Ocupação' ), 'equipe_ocupacao', 'equipe', 'normal', 'high');
	add_meta_box('meta_box_biografia', __( 'Biografia' ), 'equipe_biografia', 'equipe', 'normal', 'high');
	add_meta_box('meta_box_email', __( 'E-mail' ), 'equipe_email', 'equipe', 'normal', 'high');
	add_meta_box('meta_box_facebook', __( 'Facebook (Opcional)' ), 'equipe_facebook', 'equipe', 'normal', 'high');
	add_meta_box('meta_box_twitter', __( 'Twitter (Opcional)' ), 'equipe_twitter', 'equipe', 'normal', 'high');
	add_meta_box('meta_box_linkedin', __( 'LinkedIn (Opcional)' ), 'equipe_linkedin', 'equipe', 'normal', 'high');
}

function equipe_ocupacao() {
	global $post;
	$equipe_ocupacao_value = get_post_meta($post->ID, 'equipe_ocupacao_', true); ?>
<input type="text" name="equipe_ocupacao_" value="<?php echo $equipe_ocupacao_value; ?>" style="width:100%;" required />
<?php }

function equipe_biografia() {
	global $post;
	$equipe_biografia_value = get_post_meta($post->ID, 'equipe_biografia_', true); ?>
<textarea rows="5" name="equipe_biografia_" style="width:100%;" maxlength="170" required><?php echo $equipe_biografia_value; ?></textarea>
<?php }

function equipe_email() {
	global $post;
	$equipe_email_value = get_post_meta($post->ID, 'equipe_email_', true); ?>
<input type="text" name="equipe_email_" value="<?php echo $equipe_email_value; ?>" style="width:100%;" required />
<?php }

function equipe_facebook() {
	global $post;
	$equipe_facebook_value = get_post_meta($post->ID, 'equipe_facebook_', true); ?>
<input type="text" name="equipe_facebook_" value="<?php echo $equipe_facebook_value; ?>" style="width:100%;" />
<?php }

function equipe_twitter() {
	global $post;
	$equipe_twitter_value = get_post_meta($post->ID, 'equipe_twitter_', true); ?>
<input type="text" name="equipe_twitter_" value="<?php echo $equipe_twitter_value; ?>" style="width:100%;" />
<?php }

function equipe_linkedin() {
	global $post;
	$equipe_linkedin_value = get_post_meta($post->ID, 'equipe_linkedin_', true); ?>
<input type="text" name="equipe_linkedin_" value="<?php echo $equipe_linkedin_value; ?>" style="width:100%;" />
<?php }

add_action('save_post', 'save_equipe_post');

function save_equipe_post(){
	global $post;
	update_post_meta($post->ID, 'equipe_ocupacao_', $_POST['equipe_ocupacao_']);
	update_post_meta($post->ID, 'equipe_biografia_', $_POST['equipe_biografia_']);
	update_post_meta($post->ID, 'equipe_email_', $_POST['equipe_email_']);
	update_post_meta($post->ID, 'equipe_facebook_', $_POST['equipe_facebook_']);
	update_post_meta($post->ID, 'equipe_twitter_', $_POST['equipe_twitter_']);
	update_post_meta($post->ID, 'equipe_linkedin_', $_POST['equipe_linkedin_']);
}

$sessao = ['', '', '', '', ''];
$isIndex = False;