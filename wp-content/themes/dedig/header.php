<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Plataforma de desafios digitais educativos onde os alunos aprendem se divertindo.">
	<meta name="keywords" content="jogos, educativo, jogos educacionais, plataforma educativa">
	<meta name="author" content="Bruno Araujo <araujo.contato@gmail.com>">
	<title><?php bloginfo('name');  wp_title( '|', true, 'left' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/logo-favicon.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
<?php include_once("analyticstracking.php"); ?>
<div id="wrapper">
	<header id="main-menu">
		<a href="<?php echo home_url( '/' ); ?>"><img id="logo-header" src="<?php bloginfo('template_directory'); ?>/img/logo-dedig-header.png" alt="Logo Dedig" /></a>
		<div id="list">
			<img src="<?php bloginfo('template_directory'); ?>/img/list.png" alt="Menu" />
		</div>
		<nav id="buttons">
			<a href="<?php echo home_url( '/' ); ?>"><h2 class="menu-button" <?php global $sessao; echo $sessao[0]; ?> >Home</h2></a>
			<a href="<?php echo home_url( '/index.php/sobre' ); ?>"><h2 class="menu-button" <?php echo $sessao[1]; ?> >Quem Somos</h2></a>
			<a href="<?php echo home_url( '/index.php/plataforma' ); ?>"><h2 class="menu-button" <?php echo $sessao[2]; ?> >Plataforma</h2></a>
			<a href="<?php echo home_url( '/index.php/educadores' ); ?>"><h2 class="menu-button" <?php echo $sessao[3]; ?> >Para os Educadores</h2></a>
			<a href="<?php echo home_url( '/index.php/contato' ); ?>"><h2 class="menu-button" <?php echo $sessao[4]; ?> >Contato</h2></a>
		</nav>
	</header>
	<div id="content">