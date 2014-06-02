 <?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();


$archive = get_post_type(); 

?>

</div><!-- .light -->

<div id="options" class="container mtops">
	
	<a class="fleft cta left teal" href="<?php bloginfo('home'); ?>">Back</a>
	
	<ul class="combo-filters clear nobm">

		<li class="option-combo <?php echo get_color(); ?>" >
			Year
			<ul class="filter option-set" data-filter-group="year">
				<li><a data-filter-value="" href="#filter-any" class="selected">All Dates</a></li>
				<?php
				
				$year='';
				global $post;
				$args = array(
					'post_type' => $archive,
					'post_status' =>array('future','publish'),
					'posts_per_page' => '-1',
					'orderby' => 'post_date',
					'order' => 'ASC'
					);
				$custom_posts = get_posts($args);
				foreach($custom_posts as $post) : setup_postdata($post);
				if (mysql2date("Y", $post->post_date) != $year) {
					$year = mysql2date("Y", $post->post_date);
					$count=1;
					} 
				if ($count == 1) { ?>
				<li><a data-filter-value=".<?php the_time('Y'); ?>" href="#filter-when-<?php the_time('Y'); ?>"><?php the_time('Y'); ?></a></li>
				<?php $count++; } else { };
				endforeach; ?>
			</ul>
		</li>
		
		<li class="option-combo <?php echo get_color(); ?>" >
			Month
			<ul class="filter option-set" data-filter-group="month">
				<li><a data-filter-value="" href="#filter-any" class="selected">All Dates</a></li>
				<li><a data-filter-value=".January" href="#filter-january">January</a></li>
				<li><a data-filter-value=".February" href="#filter-february">February</a></li>
				<li><a data-filter-value=".March" href="#filter-march">March</a></li>
				<li><a data-filter-value=".April" href="#filter-april">April</a></li>
				<li><a data-filter-value=".May" href="#filter-may">May</a></li>
				<li><a data-filter-value=".June" href="#filter-june">June</a></li>
				<li><a data-filter-value=".July" href="#filter-july">July</a></li>
				<li><a data-filter-value=".August" href="#filter-august">August</a></li>
				<li><a data-filter-value=".September" href="#filter-september">September</a></li>
				<li><a data-filter-value=".October" href="#filter-october">October</a></li>
				<li><a data-filter-value=".November" href="#filter-november">November</a></li>
				<li><a data-filter-value=".December" href="#filter-december">December</a></li>
			</ul>
		</li>
		
		<li class="option-combo <?php echo get_color(); ?>" >
			Location
			<ul class="filter option-set" data-filter-group="locations">
				<li><a data-filter-value="" href="#filter-location-any" class="selected">All Locations</a></li>
			<?php $locations = get_terms( 'locations' );
			foreach ( $locations as $location ) { ?>
				<li><a data-filter-value=".<?php echo $location->slug; ?>" href="#filter-location-<?php echo $location->slug; ?>"><?php echo $location->name; ?></a></li>
			<?php } ?>
			</ul>
		</li>
		
	</ul><!-- #options -->

</div><!-- container -->

<div class="post-wrapper">

	<div id="isotope" class="container">

		<?php
	    $args = array(
			'post_type' => $archive,
	        'posts_per_page' => '-1',
	        'post_status' =>array('future','publish'),
	        'orderby' => 'post_date',
			'order' => 'ASC'
	        );
	    $posts = get_posts( $args );
	    foreach ( $posts as $post ) : setup_postdata( $post );
		$locations = get_the_terms( $post->ID, 'locations' ); ?>
			
		<div class="item <?php echo the_time('F Y').' '.the_field('difficulty').' ';
			foreach ( $locations as $location ) { echo $location->slug; echo ' '; };
			?>">
			<a class="thumb <?php echo get_color(); ?>" href="<?php the_permalink(); ?>">
			<?php if(has_post_thumbnail()) : 
					the_post_thumbnail('thumbnail');
					echo '<span></span>';
				else : ?>
					<div class="placeholder <?php echo get_color(); ?>">
						<span></span>
					</div>
				<?php endif; ?>
			</a>
			
				<div class="caption">
					
					<h4 class="nobm"><?php the_title();?></h4>
					<p class="mb10"><?php the_time('jS F'); foreach ( $locations as $location ) { echo ' - '.$location->name; } ?></p>
					<h6 class="sub-head more"><a href="<?php the_permalink(); ?>">Find Out More</a></h6>
					
				</div>

		</div>

	    <?php $count++; 
		endforeach; ?>

	</div>

</div><!-- post-wrapper -->

<?php get_footer(); ?>