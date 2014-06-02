<?php
/**
 * This template displays the Taxonomy.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

global $wp_query;
$term = $wp_query->get_queried_object();

$id = get_queried_object()->term_id;
$tax = get_queried_object('cat');
$term = get_queried_object('term_id');

switch ($term->taxonomy) {
    case 'festival-of-nature-type' :
    $archive = 'festival-of-nature';
break;
    case 'communicate-type' :
    $archive = 'communicate';
break;
    case 'bioblitz-type' :
    $archive = 'bioblitz';
break;
    default :
    $archive = archive;
}

?>

<?php if (have_rows('slideshow','festival-of-nature-type_'.$id)): ?>
    <div class="container">

        <div class="flexslider fullslider">
            <ul class="slides">
            <?php while(have_rows('slideshow','festival-of-nature-type_'.$id)): the_row();
        	$slide = get_sub_field('image');
        	$post_object = get_sub_field('link');
        	$size = wp_get_attachment_image_src( $slide['id'], 'slide' ); ?>
                <li>
                	<img src="<?php echo $slide['sizes']['slide']; ?>" alt="<?php echo $slide['alt']; ?>" width="720" height="452" />
                </li>
            <?php endwhile; ?>
            </ul>
        </div>

    </div>

</div>
</div>

<div class="container">
<div class="main">

    <div class="flexslider carousel">
        <ul class="slides">
        <?php while(have_rows('slideshow','festival-of-nature-type_'.$id)): the_row();
        $post_object = get_sub_field('link'); ?>
            <li>
                <div class="caption">
                    <a href="<?php echo get_permalink($post_object->ID); ?>">
                        <h4><?php echo the_sub_field('caption');?></h4>
                    </a>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>


    <div class="slideshow-nav">
        <ul>
            <?php while(have_rows('slideshow','festival-of-nature-type_'.$id)): the_row(); 
            $post_object = get_sub_field('link');
            ?>
            <li class="<?php echo get_color(); ?>"><div></div></li>
            <?php endwhile; ?>
        </ul>
    </div>


<?php endif; ?>

</div>
</div>

<?php 
$page_content = get_post($page);
if ($page_content) : ?>
<div class="container clearfix">
    <div class="row">

        <div class="intro col-md-12 center mb">

            <h2 class="notm page-title"><?php echo $term->name; ?></h2>
            <?php if($term->description){ echo '<h4>'.$term->description.'</h4>'; }; ?>

        </div>

    </div>
</div>

<?php endif; ?>

<div class="grid <?php if(have_rows('slideshow','festival-of-nature-type_'.$id)): echo 'first'; endif; wp_reset_postdata(); ?>">

    <div class="container">
    <div class="row">
<?php 
    $i = 1;
	$args2 = array(
        'post_type' => $archive,
        'post_status' =>array('future','publish'),
        'showposts' => '-1',
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
    $posts = get_posts( $args2 );
    foreach ( $posts as $post ) :
    setup_postdata( $post );

	if($i == 4){ ?>
    </div>
    </div>

</div><!-- .grid -->

<div class="grid">

    <div class="container">
    <div class="row">

    <?php $i = 1; 
    } ?>

        <div class="entry col-sm-6 col-md-4 <?php if($i == 2){ echo 'middle'; } if($i == 3){ echo 'end'; } ?>">

            <?php if(has_post_thumbnail()) :
                echo '<div class="thumb '. get_color() .'"><a href="';
                the_permalink();
                echo '">';
                the_post_thumbnail('thumbnail');
                echo '</a><div class="icon"></div><span></span></div>';
            else : ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb placeholder <?php echo get_color(); ?>">
                        <div class="icon"></div><span></span>    
                    </div>
                </a>
            <?php endif; ?>
            <h4><?php the_title(); ?></h4>
            <p><?php echo get_my_excerpt(30); ?></p>
            
        </div>

    <?php
        $i++;

    endforeach; ?>

    </div>
</div>

</div> <!-- .grid -->

<div class="clearfix"></div>

<div class="grid">

	<div class="container clearfix center">
    <div class="row">

	<?php $args = array(
		'prepend' => '<h4 class="sub-head mb15">Sign Up</h4>', 
		'showname' => false,
		'emailtxt' => '',
		'emailholder' => 'EMAIL ADDRESS', 
		'showsubmit' => true, 
		'submittxt' => 'Send', 
		'jsthanks' => false,
		'thankyou' => 'Thank you for subscribing to our mailing list'
		);
		echo smlsubform($args);?>

	</div>
	</div>

</div>
<div class="bug butterfly"><span>Fig.2</span><div><h3>Polyommatus icarus</h3><p>Common Blue Butterfly</p></div></div>
<div class="bug spider"><span>Fig.4</span><div><h3>Nuctenea umbratica</h3><p>Walnut Orb-weaver</p></div></div>
<div class="bug green-bug" style=" left:100px;"><span>Fig.3</span><div><h3>Amara similata</h3><p>Ground Bettle</p></div></div>
<div class="bug wasp" style=" top: 400px; left:100px;" ><span>Fig.1</span><div><h3>Vespula vulgaris</h3><p>Common Wasp</p></div></div>
<?php get_footer(); ?>