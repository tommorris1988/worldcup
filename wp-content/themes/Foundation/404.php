<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

	<div class="container clearfix center">

	    <div class="post-content mtops col-md-8 col-md-push-2" id="error-404">

            <h2 class="mb30"><?php _e('Page Not Found', 'foundation'); ?></h2>
            
            <p class="large"><?php _e('We cannot find the page or file you requested. It has either been moved or deleted, or you entered the wrong URL or document name. Look at the URL. If a word looks misspelled, then correct it and try it again.', 'foundation'); ?></p>

            <h5>404</h5>

            <br /><br /><br /><br /><br /> 

		</div>
  
	</div>


	</div> <!-- .main -->
</div> <!-- .light -->

<div class="footer connect">

	<div class="details top"></div>
	<div class="details bottom"></div>

	<div class="container clearfix">

		<div class="row clearfix">
			<div class="col-md-3 mt">
				<h4 class="serif notm">Connect with us:</h4>
			</div>
			<div class="social col-md-9 mt">
				<a class="facebook" href="http://www.facebook.com/UKBioBlitz" title="facebook" target="_blank">Follow us on Facebook</a>
				<a class="twitter" href="https://twitter.com/#!/bioblitzuk" title="twitter" target="_blank">Follow us on Twitter</a>
				<a class="youtube" href="http://www.youtube.com/user/bristolnaturalhistor" title="Youtube" target="_blank">Follow us on Youtube</a>
			</div>
		</div>

	</div>

</div>

<div id="footer" class="footer">

	<div class="container clearfix">

		<div class="row">
			<ul class="hidden-xs hidden-sm col-md-3 menu-footer">
				<li class="sub-head">Contact Us</li>
				<li>Maxet House<br/>28 Baldwin St<br />Bristol / BS1 2NG</li>
				<li><a href="mailto:info@bnhc.org.uk" target="_blank">info@bnhc.org.uk</a></li>
				<li>0117 317 8751</li>
			</ul>
			<ul class="col-xs-11 col-md-3 col-sm-11 menu-footer menu-meta-container menu">
				<li class="sub-head">Extra Information</li>
				<?php wp_nav_menu( array('menu' => 'Extra Information','container'=>'','items_wrap' => '%3$s' )); ?>
			</ul>
			<ul class="col-xs-11 col-md-3 col-sm-11 menu-footer menu-meta-container menu">
				<li class="sub-head">Copyright</li>
				<li>© Copyright Bristol <br />Natural History <br/>Consortium</li>
			</ul>
			<ul class="col-xs-1 col-sm-1 col-md-3 menu-footer">
				<li class="sub-head">Website</li>
				<li>Designed and crafted by <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fiascodesign.png" alt="Fiasco Design" /></li>
			</ul>
		</div>

	</div>

</div>

<?php wp_footer();?>