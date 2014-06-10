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
$term = $wp_query->get_queried_object();

$id = get_queried_object()->term_id;
$tax = get_queried_object('cat');
$term = get_queried_object('term_id');

$args = array(
    'post_type'=> 'post',
    'post_status' => array('future','publish'),
    'posts_per_page' => '-1',
    'tax_query'=> array(
        array(
            'taxonomy'=> $term->taxonomy,
            'field'=> 'term_id',
            'terms'=> $term->term_id
            )
        ),
    'orderby' => 'custom_sort',
    'order' => 'ASC'
);

$custom_posts = get_posts($args);

foreach($custom_posts as $post) : setup_postdata($post);

    $day = get_the_date('j');

    $time = get_the_time("l", $post->post_date);

    $dayid = get_the_time('Fd');

    if( date('Yz') == get_the_time('Yz') ) {
        $dayid = 'today';
    }

    if ($day != $day_check) {
        
        if ($day_check != '') {
            echo '</ul>';
        }
        
        echo '<ul id="'. $dayid .'" class="day '.$time.'">';
        
        if( date('Yz') == get_the_time('Yz') ) { ?>
            <li class="date"><span></span><?php echo 'Today' ?><span></span></li>
        <?php } else { ?>
            <li class="date"><span></span><?php echo the_time('D'); ?><h1><?php echo the_time('j'); ?></h1><?php echo the_time('M'); ?><span></span></li>
        <?php 
        };
    }

    $teams = get_field('teams');

    $groups = get_field('group','teams_'.$teams[0]->term_id);

    $stage = get_field('knockout');

    switch($stage) {
        case '0':
        ?>
    
        <li class="match<?php if('publish' == get_post_status()) { echo ' old'; } ?>">

            <a href="<?php the_permalink();?>">

                <div class="pitch">

                    <?php include("images/top-left.svg"); include("images/top-right.svg"); include("images/bottom-left.svg"); include("images/bottom-right.svg");

                    if('publish' == get_post_status()) { echo '<span class="icon-whistle"></span>'; } else { echo '<span class="icon-football"></span>'; } ?>

                    <p class="sub-head">Group <?php echo $groups->name; ?></p>
                    
                    <?php $i=0;
                    foreach( $teams as $team ):
                        echo '<h1>'.$team->name.'</h1>';

                        if($i==1){} else {
                            if('publish' == get_post_status()) {
                                echo '<h1 class="score sub-head">'.get_field('score_1').'-'.get_field('score_2').'</h1>';
                            } else {
                                echo '<span>vs</span>';
                            }
                        }
                        $i++;
                    endforeach;
                    ?>

                    <?php if('future' == get_post_status()) { ?>
                       <span class="sub-head font-family-3"><?php the_time('H:i'); ?></span>
                    <?php } ?>

                </div>

            </a>

        </li>

    <?php
        break;
        default:

        if(!$teams) {
            $teams = get_field('temps');
        }

        ?>

        <li class="match<?php if('publish' == get_post_status()) { echo ' old'; } ?>">

            <a href="<?php the_permalink();?>">

                <div class="pitch">

                    <?php include("images/top-left.svg"); include("images/top-right.svg"); include("images/bottom-left.svg"); include("images/bottom-right.svg");

                    if('publish' == get_post_status()) { echo '<span class="icon-whistle"></span>'; } else { echo '<span class="icon-football"></span>'; } ?>
                    
                    <?php $i=0;
                    foreach( $teams as $team ):
                    
                        $groups = get_field('group','temps_'.$team->term_id);

                        if($i==0){
                            echo '<p class="sub-head">'.$stage[0].'</p>';
                            echo '<h1>'.$team->name.'</h1>';
                        } else {
                            if('publish' == get_post_status()) {
                                echo '<h1 class="score sub-head">'.get_field('score_1').'-'.get_field('score_2').'</h1>';
                            } else {
                                echo '<span>vs</span>';
                            }
                            echo '<h1>'.$team->name.'</h1>';
                        }
                        
                        $i++;
                    endforeach;
                    ?>

                    <?php if('future' == get_post_status()) { ?>
                       <span class="sub-head font-family-3"><?php the_time('H:i'); ?></span>
                    <?php } ?>

                </div>

            </a>

        </li>

    <?php
        break;
    }

    $count++;

    $day_check = $day;

endforeach; 

?>

</article>

<?php get_footer(); ?>