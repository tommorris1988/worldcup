<?php
/**
 * This template displays posts associated with a specific tag.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

$category = get_query_var('cat');

?>

<div class="container">

	<h4 class="divide"><span><?php single_cat_title(); ?></span></h4>

</div>

<div class="container">
	<div class="row category">
<?php 
	$i = 1;
	$args2 = array(
		'tag' => $category
		);
	get_posts( $args2 );
	if (have_posts()) : while (have_posts()) : the_post();
	$catch = catch_that_image();
	if( has_post_thumbnail() ) { ?>

		<div class="col-xs-6 col-md-3 entry <?php if( $i == 5 ) { echo 'end'; $i = 1; } elseif( $i % 3 == 0 ) { echo 'even'; } ?>">
			<a href="<?php the_permalink(); ?>">
			<div class="image-wrap">
			<?php the_post_thumbnail('small'); ?>
			</div>
			
			</a>
			<h3 class="serif"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('lead');?> <em><?php the_title();?></em></a></h3>
			<h5 class="small-caps">by <?php the_author_posts_link(); ?></h5>
			<p class="small-caps"><?php the_time('jS M Y'); ?></p>
		</div>

	<?php }
		else { ?>

		<div class="col-xs-6 col-md-3 entry no-image <?php if( $i == 5 ) { echo 'end'; $i = 1; } elseif( $i % 3 == 0 ) { echo 'even'; } ?>">

			<a href="<?php the_permalink(); ?>">
			<div class="image-wrap">
			<?php echo '<img src="'.$catch.'" alt="" />'; ?>
			</div>
			</a>

			<h3 class="serif"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('lead');?> <em><?php the_title();?></em></a></h3>
			<h5 class="small-caps">by <?php the_author_posts_link(); ?></h5>
			<p class="small-caps"><?php the_time('jS M Y'); ?></p>
			
		</div>

	<?php }
		$i++; 
	endwhile; 
else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>