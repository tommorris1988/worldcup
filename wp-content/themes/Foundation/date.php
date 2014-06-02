<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

$year     = get_query_var('year');
$monthnum = get_query_var('monthnum');

?>

<div class="container">

	<h4 class="divide"><span><?php echo $year; ?> / <?php echo $monthnum; ?></span></h4>

	<?php 
	$ids = array();
	$args = array(
		'posts_per_page' => 5,
		'date_query' => array(
			array(
				'year'  => $year,
				'month' => $monthnum,
			),
		),
		'meta_query' => array(
            array(
                'key' => 'masonry',
                'value' => 'feature',
                'compare' => '=',
                'type' => 'CHAR' 
            )
        )
	);
	$slides = new WP_Query($args);
	if($slides->have_posts()) { ?>

	<div class="flexslider fullslider postslider clearfix">
		<ul class="slides">
		<?php 
			while($slides->have_posts()) { $slides->the_post();
			$ids[] = $post->ID;
		?>
			<li>
				<div class="popup">
					<div class="overlay">
					<h3 class="serif"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('lead'); ?> <em><?php the_title();?></em></a></h3>
					<h5 class="small-caps">by <?php the_author_posts_link(); ?></h5>
					<p><?php the_time('jS F Y'); ?></p>
					</div>
				</div>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php 
				the_post_thumbnail('big');
				?>
				</a>
			</li>
		<?php 
			}
		?>
		</ul>
	</div>

	<?php
		}
		wp_reset_query();
	?>
</div>

<div class="container">
	<div class="row category">
<?php 
	$i = 1;
	$args2 = array(
		'posts_per_page'=> -1,
		'date_query' => array(
			array(
				'year'  => $year,
				'month' => $monthnum,
			),
		),
		'exclude' => $ids
		);
	$posts = new WP_Query($args2);
	if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();
	$catch = catch_that_image();
	if( has_post_thumbnail() ) { ?>

		<div class="col-xs-6 col-md-3 entry <?php if( $i == 5 ) { echo 'end'; $i = 1; } elseif( $i % 3 == 0 ) { echo 'even'; } ?>">
			<a href="<?php the_permalink(); ?>">
			<div class="image-wrap">
			<?php the_post_thumbnail('small'); ?>
			</div>
			
			</a>
			<h3 class="serif"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('lead'); ?> <em><?php the_title();?></em></a></h3>
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

			<h3 class="serif"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('lead'); ?> <em><?php the_title();?></em></a></h3>
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