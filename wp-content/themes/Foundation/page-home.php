<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<ul class="matches">

<?php 

global $post;

$year='';

$args = array(
    'post_status' => array('future','publish'),
    'posts_per_page' => '-1',
    'orderby' => 'post_date',
    'order' => 'ASC'
    );

$custom_posts = get_posts($args);

foreach($custom_posts as $post) : setup_postdata($post);

    echo '<li class="day">';

    if (mysql2date("F", $post->post_date) != $year) {
        $year = mysql2date("F", $post->post_date);
        $count=1;
        }

    if ($count == 1) { ?>

        <li class="date"><?php echo the_time('D j F'); ?></li>

    <?php } ?>
    
        <li>

            <?php the_title(); the_content(); ?>

        </li>

    <?php 

    $count++;

    echo '</li>';

endforeach; 

?>

</ul>

if (have_posts()) : while (have_posts()) : the_post(); ?>
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
    echo '<p>'. _e('Sorry, there are no matches scheduled for today') .'</p>';
endif;

get_footer(); ?>