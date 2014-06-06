 <?php
/**
 * Sharing Features
 */
$teams = get_field('teams');
?>

<div class="social bar <?php if($content = $post->post_content ){} else { echo 'fixed'; }?>">
	<ul>
		<li>Share:</li>
		<li><a class="icon icon-twitter" rel="nofollow" href="http://twitter.com/home?status=<?php echo urlencode("#itskickingoff "); echo $teams[0]->name.'vs'.$teams[1]->name;?>&text=<?php the_title(); ?>" title="Tweet This" target="_blank">Twitter</a></li>
		<li><a class="icon icon-facebook" rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook" target="_blank">Facebook</a></li>
		<li><a class="icon icon-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Post it on Google+">Google+</a></li>
	</ul>
</div>