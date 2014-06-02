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

<script type="text/javascript" src="//use.typekit.net/jtg2rpm.js"></script>
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

<nav class="clearfix">
	<ul class="menu">
		<li id="team"><a class="cta" href="#team">Select Your Team</a></li>
		<li id="logo"><a class="icon-logo" href="/">It's Kicking Off</a></li>
		<li class="icon"><a href="#team" class="cta icon-calendar">Calendar</a></li>
		<li><a class="cta" href="#team">Bookmark</a></li>
		<li><a class="cta" href="#team">Share</a></li>
		<li class="icon"><a href="/info" class="icon-info">Info</a></li>
	</ul>
	<ul class="dates">
		<li>
			<a class="header" href="#">June</a>
			<a href="#j12">12</a>
			<a href="#j13">13</a>
			<a href="#j14">14</a>
			<a href="#j15">15</a>
			<a href="#j16">16</a>
			<a href="#j17">17</a>
			<a href="#j18">18</a>
			<a href="#j19">19</a>
			<a href="#j12">20</a>
			<a href="#j12">21</a>
			<a href="#j12">22</a>
			<a href="#j12">23</a>
			<a href="#j12">24</a>
			<a href="#j12">25</a>
			<a href="#j12">26</a>
			<a href="#j12">27</a>
			<a href="#j12">28</a>
			<a href="#j12">29</a>
			<a href="#j12">30</a>
			<a class="header" href="#">July</a>
			<a href="#july01">01</a>
			<a href="#july02">02</a>
			<a href="#july03">03</a>
			<a href="#july04">04</a>
			<a href="#july05">05</a>
			<a href="#july06">06</a>
			<a href="#july07">07</a>
			<a href="#july08">08</a>
			<a href="#july09">09</a>
			<a href="#july10">10</a>
			<a href="#july11">11</a>
			<a href="#july12">12</a>
			<a href="#july13">13</a>
		</li>
	</ul>
</nav>