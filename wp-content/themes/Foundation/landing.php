<header id="landing" class="page fader view">

    <article class="content">
        <span class="icon-whistle clearfix"></span>
        <span class="icon-logo-white clearfix"></span>
        <?php 
        $page_id = 70;
		$page_data = get_page( $page_id );
		$content = apply_filters('the_content', $page_data->post_content);
        if($content) :
            echo $content;
        	echo '<a class="cta wide close-landing" href="#">Let\'s Play</a>';
        else :
            echo '<p class="center">Sorry, this page is under construction..</p>';
        endif; ?>
    </article>

</header>