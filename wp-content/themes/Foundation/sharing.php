 <?php
/**
 * Sharing Features
 */

?>

<ul class="share">
	<div class="cta arrow">Share:</div><br/>
	<li><a class="twitter" rel="nofollow" href="http://twitter.com/home?status=<?php echo urlencode("Currently reading: "); ?><?php the_permalink(); ?>&text=<?php the_title(); ?>" title="Tweet This" target="_blank">Twitter</a></li>
	<li><a class="facebook" rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook" target="_blank">Facebook</a></li>
	<li><a class="google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Post it on Google+" style="background-position:64.5px 0px ">Google+</a></li>
</ul>