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

global $wp_query;

$group = get_queried_object();

$teams = get_terms('teams', array(
        'fields'=>'ids',
        'hide_empty'=>0,
        'meta_query' => array(
            'key' => 'group',
            'value' => $group->name,
            'compare' => 'LIKE'
        )
    )
);

// var_dump($group);

// var_dump($teams);

$args = array(
    'post_type'=> 'post',
    'post_status' => array('future','publish'),
    'posts_per_page' => '-1',
    'tax_query'=> array(
        array(
            'taxonomy'=> 'teams',
            'field'=> 'term_id',
            'terms'=> $teams
            )
        ),
    'order' => 'ASC'
);

$day_check = '';

$day = get_the_date('j');

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
        <li class="date"><span></span><?php echo the_time('D'); ?><h1><?php echo the_time('j'); ?></h1><?php echo the_time('F'); ?><span></span></li>
    <?php }

    $team = get_field('team_1');
    $team2 = get_field('team_2'); ?>
    
        <li class="match">

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

                	<span class="font-family-3"><?php the_time('g:i'); ?></span>

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