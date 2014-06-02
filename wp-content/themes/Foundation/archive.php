<?php
/**
 * This template displays the blog posts index page.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

$archive = get_post_type();

switch ($archive) {
    case 'festival-of-nature' :
        $page = '172';
    break;
        case 'communicate' :
        $page = '176';
    break;
        case 'bioblitz' :
        $page = '174';
    break;
        case 'green-volunteers' :
        $page = '178';
    break;
        default :
        $page = '172';
}

?>

<?php if (have_rows('slideshow',$page)): ?>
    <div class="container">

        <div class="flexslider fullslider loading">
            <ul class="slides">
            <?php while(have_rows('slideshow',$page)): the_row();
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

</div><!-- .main -->
</div><!-- .light -->

<div class="container">
<div class="main">

    <div class="flexslider carousel">
        <ul class="slides">
        <?php while(have_rows('slideshow',$page)): the_row();
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
            <?php while(have_rows('slideshow',$page)): the_row(); 
            $post_object = get_sub_field('link');
            ?>
            <li class="<?php echo get_color(); ?>"><div></div></li>
            <?php endwhile; ?>
        </ul>
    </div>


<?php endif; ?>

</div><!-- .main -->
</div><!-- .container -->

<?php 
$page_content = get_post($page);
if ($page_content) : ?>
<div class="container clearfix">
    <div class="row">

        <div class="intro col-md-12 center mb">

            <?php if (!have_rows('slideshow',$page)): ?><h2 class="page-title notm"><?php echo $page_content->post_title; ?></h2><?php endif; ?>
            <?php echo $page_content->post_content; ?>

        </div>

    </div>
</div>
<?php endif; ?>

<div class="grid">

    <div class="bug grasshopper"><span>Fig.2</span><div><h3>Leptophyes punctatissima</h3><p>Speckled Bush Cricket</p></div></div>

    <div class="container clearfix">
    <div class="row">
<?php 
    $i = 1;
	$args2 = array(
        'orderby'=>'custom_sort',
		'hide_empty'=>false
	);
    switch ($archive) {
        case 'festival-of-nature':
            $taxtype = 'festival-of-nature-type';
            $username = 'FestofNature';
        break;
        case 'communicate' :
            $taxtype = 'communicate-type';
            $username = 'Communicate2014';
        break;
        case 'bioblitz' :
            $taxtype = 'bioblitz-type';
            $username = 'BioBlitzUK';
        break;
        case 'green-volunteers' :
            $taxtype = 'green-volunteers-type';
        break;
        default :
            $taxtype = 'green-volunteers-type';
    }
	$cats = get_terms( $taxtype, $args2 );
	foreach ($cats as $cat):

    if($i == 3 && ($username) ){

        echo do_shortcode('[twitter-widget hiderss="true" showfollow="false" hidefrom="true" targetBlank="true" showintents="false" before_widget="<div class=\'twitter entry col-sm-6 col-md-4 end\'>" after_widget="</div>" username="'.$username.'" items="3" before_title=" " after_title=" " title=" "]');
        echo '<div class="bug robin"><span style="left: -100px; top:10%">Fig.1</span><div style="left: 80px"><h3>Erithacus rubecula</h3><p>Common Robin</p></div></div>';

    $i = 7; } if($i == 7){ ?>
    </div>
    </div>

</div><!-- .grid -->

<div class="grid">

    <div class="container clearfix">
    <div class="row">

    <?php $i = 4; } ?>

    <div class="entry col-sm-6 col-md-4 <?php if($i == 5 || $i == 2){ echo 'middle'; } if($i == 3){ echo 'end'; } ?>">

        <?php 
        $thumb = get_field('image', $taxtype.'_'.$cat->term_id);
        if($thumb) :
            echo '<div class="thumb '. get_color() .'"><a href="';
            echo get_term_link( $cat, $taxtype );
            echo '"><img src="'.$thumb['sizes']['thumbnail'].'"/></a><div class="icon"></div><span></span></div>';
        else : ?>
            <a href="<?php echo get_term_link( $cat, $taxtype ); ?>">
                <div class="thumb placeholder <?php echo get_color(); ?>">
                    <div class="icon"></div><span></span>    
                </div>
            </a>
        <?php 
        endif; ?>
        <h4><?php echo $cat->name; ?></h4>
        <?php if($cat->description){ echo '<p>'.$cat->description.'</p>'; } else { echo '<p>Info coming soon...</p>'; } ?>
        
    </div>

    <?php
    $i++;
    endforeach;

    ?>
    </div>
</div>

<div class="bug bottom spider"><span style="top:20%">Fig.3</span><div style="bottom:80px !important;"><h3>Nuctenea umbratica</h3><p>Walnut Orb-weaver</p></div></div>

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

<div class="bug green-bug"><span>Fig.3</span><div><h3>Amara similata</h3><p>Ground Bettle</p></div></div>
<div class="bug butterfly-2"><span>Fig.4</span><div><h3>Polygonia c-album</h3><p>Common Butterfly</p></div></div>

<?php get_footer(); ?>