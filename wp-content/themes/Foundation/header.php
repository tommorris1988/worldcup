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
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.gif?ver=06.06.14" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'stylesheet_url' ); ?>?ver=06.06.14" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/check.js"></script>
<script type="text/javascript" src="//use.typekit.net/jtg2rpm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script type="text/javascript">
WebFontConfig = { fontdeck: { id: '25706' } };
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-50754720-1', 'itskickingoff.com');
  ga('send', 'pageview');
</script>

<!--[if IE 7]>
<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie7.css" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie8.css" type="text/css" media="screen" />
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php if(is_single() || is_page() || is_404()) {} else {

	if(is_home()) { 
		get_template_part('landing');
		get_template_part('helper');
	} 

	?>

<nav class="clearfix">
	<ul class="menu">
		<li id="team"><a class="cta grey close" href="#"><span>Select </span>Your Team</a></li>
		<li id="logo"><a class="icon-logo" href="/">It's Kicking Off</a></li>
		<li class="icon"><a class="cta grey icon-calendar hidden-xs" href="<?php bloginfo('stylesheet_directory'); ?>/images/ItsKickingOff_Brazil_2014_World_Cup_Calendar.ics">Calendar</a></li>
		<li><a id="bookmarkme" href="#" rel="sidebar" title="Bookmark this Page" class="cta hidden-sm grey">Bookmark</a></li>
		<li>
			<a class="cta grey" href="#team">Share</a>
			<ul>
				<li><a class="cta grey icon icon-twitter" rel="nofollow" href="http://twitter.com/home?status=<?php echo bloginfo('home'); echo urlencode(" #itskickingoff");?>&text=<?php the_title(); ?>" title="Tweet This" target="_blank">Twitter</a></li>
				<li><a class="cta grey icon icon-facebook" rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php echo bloginfo('home'); ?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this on Facebook" target="_blank">Facebook</a></li>
			</ul>
		</li>
		<li class="icon"><a href="<?php bloginfo('home'); ?>/info" class="cta grey icon-info">Info</a></li>
	</ul>
	<ul class="dates">
		<li>
			<a class="header" href="#June12">June</a>
			<a href="#June12">12</a>
			<a href="#June13">13</a>
			<a href="#June14">14</a>
			<a href="#June15">15</a>
			<a href="#June16">16</a>
			<a href="#June17">17</a>
			<a href="#June18">18</a>
			<a href="#June19">19</a>
			<a href="#June20">20</a>
			<a href="#June21">21</a>
			<a href="#June22">22</a>
			<a href="#June23">23</a>
			<a href="#June24">24</a>
			<a href="#June25">25</a>
			<a href="#June26">26</a>
			<a href="#June28">28</a>
			<a href="#June29">29</a>
			<a href="#June30">30</a>
			<a class="header" href="#July01">July</a>
			<a href="#July01">01</a>
			<a href="#July04">04</a>
			<a href="#July05">05</a>
			<a href="#July08">08</a>
			<a href="#July09">09</a>
			<a href="#July12">12</a>
			<a href="#July13">13</a>
		</li>
	</ul>
</nav>

<?php get_template_part('teams');

} ?>