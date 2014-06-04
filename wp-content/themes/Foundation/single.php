<?php
/**
 * Displays all single pages unless specified otherwise.
 * @package WordPress
 * @subpackage Foundation_Theme
 */
get_header( );
?>

<?php if(have_posts()): while(have_posts()): the_post(); 
	$teams = get_field('teams');
?>

		<header>
			<nav>
				<a class="button pull-left left" href="/">Back</a>
				<a class="button pull-right right" href="#">Next Match</a>
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
					<span class="icon-football"></span>
					<h3><?php echo $team; ?></h3>
					<h3><?php echo $team; ?></h3>
				</div>
			<?php endif; ?>
			<div class="bar">
				<ul>
					<li><?php the_time('jS F'); ?></li>
				</ul>
			</div>
		</header>

		<section></section>

		<article>
			<?php the_content(); ?>
		</article>
	
	<?php

	endwhile;

endif;

get_footer(); ?>