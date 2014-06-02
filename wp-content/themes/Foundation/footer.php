<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
?>

<?php if ( have_rows( 'sponsors', 2 ) ): ?>
<div class="grid">
	<div class="sponsors container clearfix">
		
		<ul>
		<?php while( have_rows('sponsors', 2) ): the_row();
        	$slide = get_sub_field('logo');
        	$link = get_sub_field('link');
        	$name = get_sub_field('name');
        	$desc = get_sub_field('description'); ?>
			<li class="tooltip">
				<?php if($link): ?><a href="http://<?php echo $link; ?>" target="_blank" title="<?php echo the_sub_field('name'); ?>"><?php endif; ?> 
					<img src="<?php echo $slide['sizes']['thumbnail']; ?>" alt="<?php echo $slide['alt']; ?>" />
					<div>
						<?php if($name):?><h5 class="sub-head"><?php echo $name; ?></h5><?php endif; ?>
						<?php if($desc): echo '<hr/><p>'. $desc .'</p>'; endif; ?>
					</div>
				<?php if($link):?></a><?php endif; ?>
			</li>
		<?php endwhile; ?>
		</ul>
		<p class="note">Bristol Natural History Consortium is a charitable partnership of<br /> these 12 organisations. Registered Charity No. 1123432</p>
	</div>

	<?php if(is_front_page()){ ?>
		<div class="bug ladybird-side move"></div>
	<?php } ?>

</div>
<?php endif; ?>

<div class="footer connect">

	<div class="details top"></div>
	<div class="details bottom"></div>

	<div class="container clearfix">

		<div class="row clearfix">
			<div class="col-xs-6 col-sm-6 col-md-3 mt">
				<h4 class="serif notm">Connect with us:</h4>
			</div>
			<?php get_template_part('social'); ?>
		</div>

	</div>

</div>

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

</div><!-- #content -->

</div><!-- #wrapper -->

</body>
</html>