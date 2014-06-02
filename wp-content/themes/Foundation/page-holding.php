<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 * Template Name: Holding
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png?ver=25.04.14" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_url' ); ?>?ver=25.02.14" />
<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/open-baskerville" rel="stylesheet" type="text/css"/> 

<script type="text/javascript" src="//use.typekit.net/qfx0bic.js"></script>
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

<div class="holding" style="position:absolute;width:600px;height:600px;left:50%;top:50%;margin-left:-300px;margin-top:-300px;text-align:center;color:#666;">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/site-login-logo.png" alt="This is Glamorous" />
	<br/>
	<br/>
	<h2>Sorry, <?php bloginfo('site_title'); ?> is currently down for maintenance. Please check back soon.</h2>
</div>

<div class="bug ladybird-side"></div>

<?php wp_footer();?>

</body>
</html>