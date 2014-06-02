<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png?ver=04.04.14" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_url' ); ?>?ver=19.05.14" />

<script type="text/javascript" src="//use.typekit.net/jvl7pcu.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--[if IE 7]>
<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie7.css" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie8.css" type="text/css" media="screen" />
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div id="wrapper">

<div id="content">

<div class="pull-down white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Coming Soon...</h4>
			</div>
		</div>
		<div class="tabs">
			<div id="log-in" class="tab">Log In</div>
			<div id="join" class="tab">Join</div>
		</div>
	</div>
</div>

<?php 
$navigation = wp_nav_menu( array('menu' => 'Main','container'=>'','items_wrap' => '%3$s', 'echo' => false ));

get_template_part('landscape'); ?>

<div class="light">

	<div class="logo-mob"></div>
	
	<div id="nav" class="clearfix">
		<ul class="container menu-main menu-meta-container menu">
			<?php echo $navigation; ?>
		</ul>
	</div>

	<div class="main">
		<div class="content-cover"></div>