<?php
/**
 * Displays all single pages unless specified otherwise.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header( );
?>

<?php if (have_rows('slideshow')): ?>
    <div class="container">

        <div class="flexslider fullslider">
            <ul class="slides">
            <?php while(have_rows('slideshow')): the_row();
        	$slide = get_sub_field('image');
        	$post_object = get_sub_field('link');
        	$size = wp_get_attachment_image_src( $slide['id'], 'slide' ); ?>
                <li>
                	<img src="<?php echo $slide['sizes']['slide']; ?>" alt="<?php echo $slide['alt']; ?>" width="720" height="452" />
                </li>
            <?php endwhile; ?>
            </ul>
        </div>

    </div>

</div>
</div>

<div class="container">
<div class="main">

    <div class="flexslider carousel">
        <ul class="slides">
        <?php while(have_rows('slideshow')): the_row();
        	$post_object = get_sub_field('link'); ?>
            <li>
                <div class="caption">
                    <a href="<?php echo get_permalink($post_object->ID); ?>">
                        <h4><?php echo the_sub_field('caption');?></h4>
                    </a>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>


    <div class="slideshow-nav">
        <ul>
            <?php while(have_rows('slideshow')): the_row(); 
            $post_object = get_sub_field('link');
            ?>
            <li class="<?php echo get_color(); ?>"><div></div></li>
            <?php endwhile; ?>
        </ul>
    </div>

<?php endif; ?>

</div>
</div>

<?php 
$i = 1;
$id = get_the_id();
$type = get_post_type();
$args = array(
	'post_parent'=>$id,
	'post_type'=> $type,
	'post_status'=>array('publish','future'),
	'orderby' => 'parent menu_order',
    'order' => 'ASC'
	);
$children = get_children( $args );

if ( empty($children) ) { } else {

	if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="container">

		<div class="row">
			<div class="col-md-12 center intro">
				<h1 class="notm"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>

	</div>

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif;

} ?>


<div class="post-wrapper<?php if(have_rows('slideshow')): echo ' first'; endif; ?>">
<div class="container main clearfix">


<?php 
if ( empty($children) ) { ?>

<div class="row">

	<div class="col-md-8 divider">

		<div id="<?php echo $post->ID; ?>" class="content clearfix">

			<h3 class="title"><?php the_title(); ?> <?php edit_post_link(); ?></h3>

			<?php the_content(); ?>

			<div class="divider-left"></div>
			
		</div>

	</div>

	<ul class="col-md-4 sidebar">

		<div id="side-nav" class="follow">
			<?php get_template_part('sharing'); ?>
		</div>
		
	</ul>

</div>

	<?php } else {
		foreach ( $children as $post ):
			setup_postdata($post); ?>

<div class="row">
	
	<div class="col-md-8 divider">

		<div id="<?php echo $post->ID; ?>" class="content clearfix">

			<h3 class="title"><?php the_title(); ?> <?php edit_post_link(); ?></h3>
			<?php the_content(); ?>

			<div class="divider-left"></div>
			
		</div>

	</div>

	<?php if($i == 1): ?>
	<ul class="col-md-4 sidebar">

		<div id="side-nav" class="follow">
			<ul>
				<li><a href="<?php echo get_post_type_archive_link($archive); ?>" class="back">« Back</a></li>
			<?php
			if ( empty($children) ) {

				} else {
					foreach ( $children as $post ):
						setup_postdata($post);
			
				echo '<li><h4><a href="#'.$post->ID.'" class="scroll">';
				echo the_title();
				echo '</a></h4></li>';
			
					endforeach;
				}
			?>
			</ul>
		</div>
		
	</ul>
	<?php endif; ?>

</div>


		<?php $i++; endforeach;
	}
?>

</div>
</div>

<?php get_footer(); ?>