<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();
?>

<article class="matches">

<?php 

global $post;

$year='';

$args = array(
	'post_type'=> 'post',
    'post_status' => array('future','publish'),
    'posts_per_page' => '-1',
    'orderby' => 'post_date',
    'order' => 'ASC'
    );

$custom_posts = get_posts($args);

foreach($custom_posts as $post) : setup_postdata($post);

    if (mysql2date("F", $post->post_date) != $year) {
        $year = mysql2date("F", $post->post_date);
        $count = 1;
        }

    $time = mysql2date("l", $post->post_date);

    echo '<ul class="day '.$time.'">';

    if ($count == 1) { ?>

        <li class="date"><?php echo the_time('j F'); ?></li>

    <?php } ?>
    
        <li class="match">

        	<div class="pitch">

        		<span class="icon-football"></span>

        		<h3><?php get_my_terms(); ?></h3>

            	<?php the_title(); ?>

        	</div>

        </li>

    <?php 

    $count++;

    echo '</ul>';

endforeach; 

?>

</article>

<?php get_footer(); ?>