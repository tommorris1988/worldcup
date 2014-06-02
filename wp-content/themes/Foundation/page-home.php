<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>


<?php if (have_rows('slideshow')): ?>
    <div class="container">

        <div class="flexslider fullslider loading">
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
            
            $type = get_post_type( $post_object->ID );

            if('festival-of-nature' == $type) {
                $out = 'green';
            } elseif('bioblitz' == $type) {
                $out = 'orange';
            } elseif('communicate' == $type) {
                $out = 'red';
            } elseif('green-volunteers' == $type) {
                $out = 'yellow';
            } elseif('archive' == $type) {
                $out = 'blue';
            } else {
                $out = 'blue';
            }

            ?>
            <li class="<?php echo $out; ?>"><div>&nbsp;</div></li>
            <?php endwhile; ?>
        </ul>
    </div>


<?php endif; wp_reset_postdata(); ?>

</div><!-- .main -->
</div><!-- .container -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container clearfix">
    <div class="row">

        <div class="intro col-md-12 center mt mb">

            <?php the_content(); ?>
            <br />
            <a class="cta arrow" href="<?php bloginfo('home'); ?>/about/" title="Read More">Read More Here</a>

            <br /><br /><br/>

        </div>

    </div>
</div>

<?php endwhile; else:
    echo '<p>'. _e('Sorry, no posts matched your criteria.') .'</p>';
endif; ?>

<div class="grid">

    <div class="container">
    <div class="row">
<?php 
    $i = 1;

    $myposts = get_field('content_manager');

    if( empty($myposts) ) :

        $args2 = array(
        'posts_per_page' => '-1',
        'post_type'=>array(
            'festival-of-nature',
            'green-volunteers',
            'communicate',
            'bioblitz'
            ),
        'orderby'=>'date',
        'order'=>'asc'
        );
        global $post;
        $myposts = get_posts( $args2 );

    endif;

    if( $myposts ): 
        foreach( $myposts as $post):
        setup_postdata($post); ?>

    <?php if($i == 4){ ?>
    </div>
    </div>

</div><!-- .grid -->

<div class="grid">

    <div class="container">
    <div class="row">

    <?php $i = 1; } ?>

    <div class="entry col-sm-6 col-md-4 <?php if($i == 2){ echo 'middle'; } if($i == 3){ echo 'end'; } ?>">

        <?php if(has_post_thumbnail()) :
            echo '<div class="thumb '. get_color() .'"><a href="';
            the_permalink();
            echo '">';
            the_post_thumbnail('thumbnail');
            echo '</a><div class="icon"></div><span></span></div>';
        else : ?>
            <a href="<?php the_permalink(); ?>">
                <div class="thumb placeholder <?php echo get_color(); ?>">
                    <div class="icon"></div><span></span>    
                </div>
            </a>
        <?php endif; ?>
        <h4><?php the_title(); ?></h4>
        <p><?php echo get_my_excerpt(30); ?></p>
        
    </div>

    <?php
    $i++;
    endforeach;

    endif;

    wp_reset_postdata();

    ?>
    </div>
</div>

</div> <!-- .grid -->

<div class="bug butterfly"><span>Fig.1</span><div><h3>polyommatus icarus</h3><p>Common Blue Butterfly</p></div></div>

<?php get_footer(); ?>