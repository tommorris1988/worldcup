<?php
/**
 * Displays all single pages unless specified otherwise.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
	$teams = get_field('teams');
?>

	<header>
		<nav>
			<a class="button pull-left left" href="<?php bloginfo('home'); ?>">Back</a>
			<?php previous_post_link( '%link', 'Next Match', FALSE ); ?>
		</nav>
		<?php $score1 = get_field('score_1');
		$score2 = get_field('score_2');
		if ($score1) : ?>
			<div class="scores">
				<section class="left">
					<?php echo '<span>'.$score1.'</span>'; ?>
					<h1><?php echo $teams[0]->name; ?></h1>
				</section>
				<span class="vs">vs</span>
				<section class="right">
					<?php echo '<span>'.$score2.'</span>'; ?>
					<h1><?php echo $teams[1]->name; ?></h1>
				</section>
			</div>
		<?php else : ?>
			<div class="scores">
				<section class="left">
					<h1><?php echo $teams[0]->name; ?></h1>
				</section>
				<span class="vs">vs</span>
				<section class="right">
					<h1><?php echo $teams[1]->name; ?></h1>
				</section>
			</div>
		<?php endif; ?>
		<div class="details bar">
			<ul>
				<li><a class="icon-calendar-white tooltip" href="#"><span>Date of Match</span><?php the_time('jS F'); ?></a></li>
				<li class="venue"><a class="icon-pitch tooltip" href="#"><span>Match Venue</span><?php if(get_field('venue')){ the_field('venue'); } else {echo 'To be Confirmed';} ?></a></li>
				<li class="text-right"><a class="icon-whistle tooltip" href="#"><span>Kick Off Time</span><?php the_time('H:i'); ?></a></li>
			</ul>
		</div>
	</header>

	<article class="content">
		<?php 
		if($content = $post->post_content ) :
			echo '<p class="sub-head center">Did you know?</p>';
			the_content();
		else :
			echo '<p class="center">Sorry, facts coming soon.</p>';
		endif; ?>
	</article>

	<?php
	if( have_rows('feature') ):
		while ( have_rows('feature') ) : the_row(); ?>

	<div class="feature">
		<article class="content">

			<?php the_sub_field('object'); ?>

		</article>
	</div>

	<?php endwhile;

	endif;
	
endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;

	get_template_part('share');

get_footer(); ?>