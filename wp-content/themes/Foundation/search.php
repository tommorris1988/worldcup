<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

?>

<div class="container">

	<h4 class="divide"><span>Results for: <?php echo get_search_query(); ?></span></h4>

	<div class="row category">
<?php 
	$i = 1;
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