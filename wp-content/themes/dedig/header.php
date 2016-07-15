<!DOCTYPE html>
<html lang="pt-BR">
<head>
<!--

 __________________________________________
/ Oi, tudo bem? O que você tá fazendo aqui?\
\------------------------------------------/
        \   ^___^
         \  (ಠ_ಠ)\_______
            (___)\       )\/\
                ||----w |
                ||     ||


-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Plataforma de desafios digitais educativos onde os alunos aprendem se divertindo. Clique para saber mais...">
	<meta name="keywords" content="jogos, educativo, jogos educacionais, plataforma educativa">
	<meta name="author" content="Equipe Dedig : contato@dedig.com.br">

	<title><?php bloginfo('name');  wp_title( '|', true, 'left' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/logo-favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
	<script type="text/javascript">
		var LHCChatOptions = {};
		LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:'52.67.97.178'};
		(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
		var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
		po.src = '//52.67.108.96/livehelper/lhc_web/index.php/por/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true/(department)/1/(disable_pro_active)/true?r='+referrer+'&l='+location;
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script>
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