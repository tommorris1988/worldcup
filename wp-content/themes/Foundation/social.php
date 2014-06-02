 <?php
/**
 * Social Links
 */

$archive = get_post_type();
if(empty($archive)) :
	global $wp_query;
	$term = $wp_query->get_queried_object();

	$id = get_queried_object()->term_id;
	$tax = get_queried_object('taxonomy');
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
	    $archive = 'all';
	}
endif;

switch ($archive) {
    case 'festival-of-nature' : ?>

    <div class="social col-xs-6 col-md-9 mt">
		<a class="facebook" href="https://www.facebook.com/BristolFON" title="facebook" target="_blank">Follow us on Facebook</a>
		<a class="twitter" href="https://twitter.com/FestofNature" title="twitter" target="_blank">Follow us on Twitter</a>
		<a class="youtube" href="https://www.youtube.com/user/bristolnaturalhistor/featured" title="Youtube" target="_blank">Follow us on Youtube</a>
	</div>

<?php	
break;
    case 'communicate' : ?>

    <div class="social col-xs-6 col-md-9 mt">
		<a class="twitter" href="https://twitter.com/Communicate2014" title="twitter" target="_blank">Follow us on Twitter</a>
		<a class="youtube" href="https://www.youtube.com/user/bristolnaturalhistor/featured" title="Youtube" target="_blank">Follow us on Youtube</a>
		<a class="linkedin" href="https://www.linkedin.com/groups?gid=3480996&trk=my_groups-b-grp-v" title="LinkedIn" target="_blank">Follow us on Facebook</a>
	</div>

<?php 	
break;
    case 'bioblitz' : ?>

    <div class="social col-xs-6 col-md-9 mt">
		<a class="facebook" href="http://www.facebook.com/UKBioBlitz" title="facebook" target="_blank">Follow us on Facebook</a>
		<a class="twitter" href="https://twitter.com/BioBlitzUK" title="twitter" target="_blank">Follow us on Twitter</a>
		<a class="youtube" href="https://www.youtube.com/user/bristolnaturalhistor/featured" title="Youtube" target="_blank">Follow us on Youtube</a>
		<a class="linkedin" href="https://www.linkedin.com/groups?home=&gid=7444158&trk=anet_ug_hm" title="LinkedIn" target="_blank">Follow us on Facebook</a>
	</div>

<?php 	
break;
    case 'green-volunteers' : ?>

    <div class="social col-xs-6 col-md-9 mt">
		<a class="facebook" href="http://www.facebook.com/UKBioBlitz" title="facebook" target="_blank">Follow us on Facebook</a>
		<a class="twitter" href="https://twitter.com/#!/bioblitzuk" title="twitter" target="_blank">Follow us on Twitter</a>
		<a class="youtube" href="https://www.youtube.com/user/bristolnaturalhistor/featured" title="Youtube" target="_blank">Follow us on Youtube</a>
	</div>

<?php
break;
    default : ?>
    
    <div class="social col-xs-6 col-md-9 mt">
		<a class="facebook" href="http://www.facebook.com/UKBioBlitz" title="facebook" target="_blank">Follow us on Facebook</a>
		<a class="twitter" href="https://twitter.com/#!/bioblitzuk" title="twitter" target="_blank">Follow us on Twitter</a>
		<a class="youtube" href="https://www.youtube.com/user/bristolnaturalhistor/featured" title="Youtube" target="_blank">Follow us on Youtube</a>
	</div>

<?php 
}
?>