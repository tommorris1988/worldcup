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
            
            the_content(); ?>

            <ul class="social bar">
                <li><a class="icon icon-twitter" rel="nofollow" href="https://twitter.com/FiascoDesign" title="Twitter" target="_blank">Twitter</a></li>
                <li><a class="icon icon-facebook" rel="nofollow" href="https://www.facebook.com/fiascodesign" title="Facebook" target="_blank">Facebook</a></li>
                <li><a class="icon icon-email" href="mailto:hello@fiascodesign.co.uk" target="_blank" title="Send us an E-Mail">Email</a></li>
            </ul>

        <?php else :
            echo '<p class="center">Sorry, this page is under construction..</p>';
        endif; ?>
    </article>

    <?php
    
endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;

get_footer(); ?>