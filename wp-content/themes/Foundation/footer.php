<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
?>

<div id="footer" class="footer">

	<div class="container clearfix">

		<div class="row">
			<ul class="col-xs-6 col-sm-4 col-md-3 menu-footer">
				<li class="sub-head">Contact Us</li>
				<li>Maxet House<br/>28 Baldwin St<br />Bristol / BS1 2NG</li>
				<li><a href="mailto:info@bnhc.org.uk" target="_blank">info@bnhc.org.uk</a></li>
				<li>0117 317 8751</li>
			</ul>
			<ul class="col-xs-6 col-sm-4 col-md-3 menu-footer menu-meta-container menu">
				<li class="sub-head">Extra Information</li>
				<?php wp_nav_menu( array('menu' => 'Extra Information','container'=>'','items_wrap' => '%3$s' )); ?>
			</ul>
			<ul class="col-xs-12 col-sm-4 col-md-3 menu-footer menu-meta-container menu end">
				<li class="sub-head">Copyright</li>
				<li>© Copyright Bristol <br />Natural History <br/>Consortium</li>
			</ul>
			<ul class="col-xs-12 col-sm-12 col-md-3 menu-footer">
				<li class="sub-head">Website</li>
				<li>Designed and crafted by <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fiascodesign.png" alt="Fiasco Design" /></li>
			</ul>
		</div>

	</div>

</div>

<?php wp_footer();?>

</body>
</html>