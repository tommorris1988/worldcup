<header id="landing" class="page fader">

    <article class="content">
        <span class="icon-whistle clearfix"></span>
        <span class="icon-logo-white clearfix"></span>
        <?php
        global $post;
        $page = get_posts( array( 'slug' => 'landing', 'post_type'=>'page' ) );

        if ( $page ) {
            $content = apply_filters('the_content', $page[0]->post_content);
            echo $content.'<br />';
            echo '<a class="cta wide close-landing" href="#">Let\'s Play</a>';
        } else {
            echo '<p class="center">Sorry, this page is under construction..</p>';
        }

        ?>
    </article>

</header>