<header id="header" class="fader">
<?php 

$teams = get_terms('teams', array(
        'fields'=>'all',
        'hide_empty'=>0,
        'orderby'=>'custom_sort'
    )
);

if(is_tax()) {
	$current = get_queried_object()->term_id;
}

?>
	<nav>
		<a class="button pull-left left close" href="#">Back</a>
		<h1 class="title"><span>Select Your </span>Team / Group</h1>
	</nav>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(3,'groups'); ?>">A</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'A': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(7,'groups'); ?>">B</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'B': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(11,'groups'); ?>">C</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'C': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(18,'groups'); ?>">D</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'D': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(19,'groups'); ?>">E</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'E': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(22,'groups'); ?>">F</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'F': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(24,'groups'); ?>">G</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'G': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(28,'groups'); ?>">H</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
			$points = get_field('points','teams_'.$team->term_id);
				switch ($group->name) {
					case 'H': ?>
					<li><a <?php if($current == $team->term_id){echo 'class="current"';}?> href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?><span>(<?php if($points){ echo $points; } else { echo '0'; } ?>)</span></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<a class="button bar large" href="<?php bloginfo('home'); ?>">Show all</a>

</header>