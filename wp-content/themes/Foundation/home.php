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

$day_check = '';

$day = get_the_date('j');

$args = array(
	'post_type'=> 'post',
    'post_status' => array('future','publish'),
    'posts_per_page' => '-1',
    'orderby' => 'post_date',
    'order' => 'ASC'
    );

$custom_posts = get_posts($args);

foreach($custom_posts as $post) : setup_postdata($post);

    $day = get_the_date('j');

    $time = get_the_time("l", $post->post_date);

    $dayid = get_the_time('Fd');

    if ($day != $day_check) {
        if ($day_check != '') {
            echo '</ul>';
        }
        echo '<ul id="'. $dayid .'" class="day '.$time.'">'; ?>
        <li class="date"><span></span><?php echo the_time('D'); ?><h1><?php echo the_time('j'); ?></h1><?php echo the_time('M'); ?><span></span></li>
    <?php }

    $teams = get_field('teams');

    $groups = get_field('group','teams_'.$teams[0]->term_id);

    ?>
    
        <li class="match<?php if('publish' == get_post_status()) { echo ' old'; } ?>">

            <a href="<?php the_permalink();?>">

            	<div class="pitch">

                    <?php include("images/top-left.svg"); ?>

                    <?php include("images/top-right.svg"); ?>

                    <?php include("images/bottom-left.svg"); ?>

                    <?php include("images/bottom-right.svg"); ?>

            		<?php if('publish' == get_post_status()) { echo '<span class="icon-whistle"></span>'; } else { echo '<span class="icon-football"></span>'; } ?>

                    <p class="sub-head">Group <?php echo $groups->name; ?></p>
                    
                    <?php $i=0; 
                    foreach( $teams as $team ): ?>
                		<h1><?php echo $team->name; ?></h1>
                    <?php
                        if($i==1){} else { echo '<span>vs</span>'; }; 
                        $i++; 
                    endforeach; 
                    ?>

                	<span class="sub-head font-family-3"><?php the_time('H:i'); ?></span>

            	</div>

            </a>

        </li>

    <?php
    $count++;

    $day_check = $day;

endforeach; 

?>

</article>

<?php get_footer(); ?>