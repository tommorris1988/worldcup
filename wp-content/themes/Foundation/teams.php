<header id="header">
<?php 
$teams = get_terms('teams', array(
        'fields'=>'all',
        'hide_empty'=>0
    )
);
?>
	<nav>
		<a class="button pull-left left close" href="#">Back</a>
		<h1 class="title">Select Your Team / Group</h1>
	</nav>

	<section>
		<ul>
			<li class="letter"><a href="<?php echo get_term_link(34,'groups'); ?>">A</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'A': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(35,'groups'); ?>">B</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'B': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(36,'groups'); ?>">C</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'C': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(37,'groups'); ?>">D</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'D': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(38,'groups'); ?>">E</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'E': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(39,'groups'); ?>">F</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'F': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(40,'groups'); ?>">G</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'G': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
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
			<li class="letter"><a href="<?php echo get_term_link(41,'groups'); ?>">H</a></li>
			<?php foreach ($teams as $team):
			$group = get_field('group','teams_'.$team->term_id);
				switch ($group->name) {
					case 'H': ?>
					<li><a href="<?php echo get_term_link($team); ?>"><?php echo $team->name; ?></a></li>
					<?php
						break;
				} ?>
			<?php 
			endforeach;
			?>
		</ul>
	</section>

	<a class="button bar large" href="/">Show all</a>

</header>