 <?php
/**
 * Displays all single pages unless specified otherwise.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header( );

?>

<div class="container">

	<div class="row">
		
		<div class="col-md-8 divider">
			
			<div class="post-content">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<!-- Title -->
				<h2 class="title"><?php the_field('lead'); ?> <em><?php the_title(); ?></em></h2>
				<p class="small-caps grey"><span class="right fright grey"><?php edit_post_link('Edit This / '); ?> <?php the_time('l jS F, Y'); ?></span>by <?php the_author_posts_link(); ?></p>

				<div class="content">

				<?php $content = get_the_content(); 
					if($content) {
						the_content();
					} else {
						echo '<h4>This page is coming soon.</h4>';
					}
				?>

				</div>

				<!-- Author -->
				<?php if (get_the_author_meta( 'description' )) { ?>
				<div class="profile">
					<?php $author_id = get_the_author_meta( 'ID' );
					if(get_field('avatar','user_'. $author_id)) { 
					$author_badge = get_field('avatar', 'user_'. $author_id );?>
					<img src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
					<?php } ?>
					<h5 class="sans caps"><?php the_author_posts_link(); ?> <span class="serif"><?php the_author_meta( 'nickname' ); ?></span></h5>
					<p><?php the_author_meta( 'description' ); ?> <span class="grey"><a href="<?php the_author_meta( 'user_url' ); ?>" target="_blank">www</a> &#149; <a href="mailto:<?php the_author_meta( 'user_email' ); ?>" target="_blank">email</a></span></p>
				</div>
				<?php } ?>
				
				<!-- Tags -->
				<div class="tags"><?php echo the_tags(); ?></div>
				<div class="nav"><?php previous_post('%', 'Previous', 'no'); ?> <?php next_post('%', 'Next', 'no'); ?></div>
				<?php get_template_part('sharing'); ?>

				<!-- Related -->
				<?php if(get_field('related')) { $posts = get_field('related'); } else {
					$args = array('posts_per_page'=>'4','category'=>$cat,'order'=>'rand');
					$posts = get_posts($args);
				}
				if( $posts ): ?>
		
				<div id="related" class="row">
					<h3 class="mt15">Explore More <em class="cat"><?php the_category( ' & ' ); ?></em></h3>
					<?php foreach( $posts as $post): ?>
					<?php setup_postdata($post); ?>
					<div class="col-xs-6 col-sm-6 col-md-6 related">
					    <a class="image-wrap" href="<?php the_permalink(); ?>">
					    	<?php if(has_post_thumbnail()) { the_post_thumbnail('small'); } else {
					    		echo '<img src="'.catch_that_image().'" alt="" />';
					    	} ?>
					    </a>
						<a href="<?php the_permalink(); ?>"><h4 class="sans sub-head"><?php the_title();?></h4></a>
						<p class="small-caps">by <?php the_author_posts_link(); ?></p>
					</div>
					<?php endforeach; ?>
				</div>

				<?php wp_reset_postdata();
				endif;
		
			endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		
		</div>
       
		</div>
		
		<ul class="col-md-4 push-left sidebar">
			
			<?php get_sidebar(); ?>
			
		</ul>
		
		</div>

</div>

<?php get_footer(); ?>