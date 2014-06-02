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

</div><!-- .main -->
</div><!-- .light -->

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


<?php endif; wp_reset_postdata(); ?>

</div><!-- .main -->
</div><!-- .container -->


<div class="post-wrapper first">
<div class="container main clearfix">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row">
	
	<div class="col-md-8 divider">

		<div id="<?php echo $post->ID; ?>" class="content clearfix">

			<div class="divider-left"></div>

			<h3 class="title"><?php the_title(); ?> <?php edit_post_link(); ?></h3>
			<?php the_content(); ?>
			
		</div>

	</div>

	<ul class="col-md-4 sidebar">
		
		<div id="side-nav" class="follow">
        <a class="mobile-menu-icon" href="#">
				<div></div>
				<div></div>
				<div></div>
				</a>
        <a class="sticky-mobile">
              <span></span>
        </a>
			<ul>
				<li><a href="<?php echo bloginfo('home'); ?>" class="back">« Back</a></li>
				<li><h5><a href="#<?php echo $post->ID; ?>"><?php the_title();?></a></h5></li>
			<?php

			$i = 1;
			$id = get_the_id();
			$type = get_post_type();
			$args = array(
				'post_parent'=>$id,
				'post_type'=> $type
				);
			$children = get_children( $args );
			if ( empty($children) ) {

			} else {

					foreach ( $children as $post ):
						setup_postdata($post);
			
					echo '<li><h5><a href="#'.$post->ID.'" class="scroll">';
					echo the_title();
					echo '</a></h5></li>';
			
					endforeach;

			}
			
			echo '</ul>';

				if ( have_rows('documents') ) :
				
				echo '<ul><li><h5 class="sub-head">Reports</h5></li>';

					while(have_rows('documents')): the_row();

					$attachment_id = get_sub_field('file');
					$url = wp_get_attachment_url( $attachment_id );
					$title = get_the_title( $attachment_id );
				
					echo '<li><h5><a class="file" href="'.$url.'" >'.$title.'</a></h5></li>';
				
					endwhile;

				echo '</ul>';

				endif;

				if ( have_rows('links') ) :

				echo '<ul>';

					echo '<li><h5 class="sub-head">External Links</h5></li>';

					while(have_rows('links')): the_row();
				
						echo '<li><h5><a class="link" target="_blank" href="http://'.get_sub_field('url').'" >'.get_sub_field('label').'</a></h5></li>';
				
					endwhile;
				
				echo '</ul>';

				endif;?>
		</div>
		
	</ul>

</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


</div>
</div>

<?php get_footer(); ?>