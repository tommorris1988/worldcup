<?php
/**
 * Displays all single pages.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <header>
        <nav>
            <a class="button pull-left left" href="<?php bloginfo('home'); ?>">Back</a>
        </nav>
    </header>

    <article class="content">
        <span class="icon-info-white circle clearfix"></span>
        <?php 
        if($content = $post->post_content ) :
            echo '<span class="icon-logo-white"></span>';
            the_content();
        else :
            echo '<p class="center">Sorry, this page is under construction..</p>';
        endif; ?>
    </article>

    <?php
    
endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;

get_footer(); ?>