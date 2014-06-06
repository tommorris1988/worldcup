<?php
/**
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>


<header>
    <nav>
        <a class="button pull-left left" href="<?php bloginfo('home'); ?>">Home</a>
    </nav>
</header>

<article class="content">

    <span class="icon-info-white circle clearfix"></span>

    <h2 class="mb30"><?php _e('Page Not Found', 'foundation'); ?></h2>
        
    <p class="large"><?php _e('We cannot find the page or file you requested. It has either been moved or deleted, or you entered the wrong URL or document name. Look at the URL. If a word looks misspelled, then correct it and try it again.', 'foundation'); ?></p>

    <h5>404</h5>

</article>

<?php get_footer(); ?>