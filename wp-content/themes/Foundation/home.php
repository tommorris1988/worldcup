<?php
/**
 * All community posts.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

?>
<div id="container3" class="container nopadding">

	<?php
	
	$args2 = array(
		'post_type' => 'post',
		'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future'),
		'numberposts' => -1
	);
	global $post;
	$myposts = get_posts( $args2 );
	foreach( $myposts as $post ) :
		
		$terms = get_the_terms( $post->ID, 'community-types' );
		$size = get_field('masonry');
		$status = get_post_status();
		
		if( $post->post_author == $current_user->ID && 'pending' == $status ) {
			if(has_post_thumbnail()) :
			 ?>
			<div class="item third teal current-user <?php echo $status; ?> <?php if('square' == $size) { echo 'tall'; } elseif('long' == $size) { echo 'long'; } else { echo 'thumbnail'; }?> <?php echo custom_taxonomy_terms(); ?> <?php the_field('difficulty'); ?> <?php echo the_time('Y'); ?> <?php echo the_time('F'); ?>">
				
			   <a class="thumb" href="<?php the_permalink(); ?>">
				<div class="status"><span>Pending</span></div>
				<?php  if('square' == $size) { the_post_thumbnail('tall'); } elseif('long' == $size) { the_post_thumbnail('slide'); } else { echo the_post_thumbnail('long'); }; ?>
				
					<div class="overlay">
						<span class="post-type"><?php if($terms) { foreach ( $terms as $term ) { echo $term->name; } } else { echo 'Community'; } ?></span>
						<h4><?php the_title();?></h4>
						<?php if('square' == $size || 'long' == $size) {
							my_excerpt();
						} elseif('thumbnail' == $size || !$size) {} else {
							my_excerpt(20);
						} ?>
						<span class="read-more"><?php echo get_more_type(); ?> »</span>
					</div>
				
				</a>
				
			</div>
				
		<?php endif;
		} elseif ('publish' == $status && has_post_thumbnail()) {
		?>
			<div class="item third teal <?php if('square' == $size) { echo 'tall'; } elseif('long' == $size) { echo 'long'; } else { echo 'thumbnail'; }?> <?php echo custom_taxonomy_terms(); ?> <?php the_field('difficulty'); ?> <?php the_time('Y'); ?> <?php echo the_time('F'); ?>">

			   <a class="thumb" href="<?php the_permalink(); ?>">
			   
					<?php  if('square' == $size) { 
						the_post_thumbnail('tall'); 
					} elseif('long' == $size) { 
						the_post_thumbnail('slide'); 
					} else { 
						echo the_post_thumbnail('long'); 
					}; ?>
				
					<div class="overlay">
						<span class="post-type"><?php if($terms) { foreach ( $terms as $term ) { echo $term->name; } } else { echo 'Community'; } ?></span>
						<h4><?php the_title();?></h4>
						<?php if('square' == $size || 'long' == $size) {
							my_excerpt();
						} elseif('thumbnail' == $size || !$size) {} else {
							my_excerpt(20);
						} ?>
						<span class="read-more"><?php echo get_more_type(); ?> »</span>
					</div>
				
				</a>

			</div>
		<?php 
		}
	endforeach; wp_reset_postdata();
	
	?>

	</div>
	
<script type="text/javascript">


// Isotope
$(function(h) {
    var $container3 = $('#container3'),
	filters = {};

	$container3.isotope({
		itemSelector: '.item, .element',
		stamp: '.stamp',
		masonry: {
			columnWidth: '.item.third'
		}
	});
	
	// Isotope filter buttons
	$('.filter a').click(function(n){
		var $this = $(this);
		// don't proceed if already selected
		if ( $this.hasClass('selected') ) {
		return;
		}
		
		var $optionSet = $this.parents('.option-set');
		// change selected class
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');
		
		// store filter value in object
		// i.e. filters.color = 'red'
		var group = $optionSet.attr('data-filter-group');
		filters[ group ] = $this.attr('data-filter-value');
		// convert object into array
		var isoFilters = [];
		for ( var prop in filters ) {
		isoFilters.push( filters[ prop ] )
		}
		var selector = isoFilters.join('');
		$container3.isotope({ filter: selector });
		
		return false;
	});
	
});

</script>

<?php get_footer(); ?>