<?php
/*
Template Name: Holding Page
*/
?>

<?php get_header('no-menu'); ?>
			
	<div id="content" class="clearfix">
	
		<div id="main" class="ten columns centered clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				
				<section class="post_content">
					<?php the_content(); ?>
			
				</section> <!-- end article section -->
				
				<footer>
	
					<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
					
				</footer> <!-- end article footer -->
			
			</article> <!-- end article -->
								
			<?php endwhile; ?>	
			
			<?php else : ?>
			
			<article id="post-not-found">
			    <header>
			    	<h1>Not Found</h1>
			    </header>
			    <section class="post_content">
			    	<p>Sorry, but the requested resource was not found on this site.</p>
			    </section>
			    <footer>
			    </footer>
			</article>
			
			<?php endif; ?>
	
		</div> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer('2'); ?>