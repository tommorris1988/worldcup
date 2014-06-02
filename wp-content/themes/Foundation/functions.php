<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

// Login Logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/login-logo.png);
			background-size:320px auto;
            height:150px;
            width:auto !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// Remove Posts
add_action( 'admin_menu', 'remove_admin_menus' );
function remove_admin_menus() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}


// Admin Menu
function add_menu_icons_styles(){
?>
<style>
#adminmenu #menu-posts div.wp-menu-image:before {
	content: "\f109";
}
#adminmenu #toplevel_page_wpseo_dashboard div.wp-menu-image img {
	display:none;
	}
#adminmenu #toplevel_page_wpseo_dashboard div.wp-menu-image:before {
	content: "\f239";
}
#adminmenu #toplevel_page_wangguard_conf div.wp-menu-image,
#adminmenu #toplevel_page_wangguard_conf div.wp-menu-image:before {
	content: "\f334";
	background:none !important;
}
#adminmenu #toplevel_page_mail-subscribe-list-index div.wp-menu-image:before {
	content: "\f134";
}
#adminmenu #toplevel_page_mail-subscribe-list-index div.wp-menu-image img {
	display:none;
}
</style>
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );

// Register Post Types

// Taxonomies

//Footer
add_filter( 'admin_footer_text', 'my_admin_footer_text' );
function my_admin_footer_text( $default_text ) {
     return '<span id="footer-thankyou">Website created and crafted by <a href="http://fiascodesign.co.uk">Fiasco Design</a><span>';
}


// Editor Style
function my_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );


// Thumbnail Support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'gallery' ) );


//jQuery Scripts
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action('init', 'all_scripts');
function all_scripts() {
	wp_enqueue_script('jquery-scripts', get_stylesheet_directory_uri().'/js/scripts.js','','',true);
	wp_enqueue_script('jquery-init', get_stylesheet_directory_uri().'/js/init.js','','',true);
}

function theme_queue_js(){
if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
  wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'theme_queue_js');


// Menus
register_nav_menu( 'primary', 'Main Menu' );


/* IMAGES */
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'post-header', 675, 385, true );
	add_image_size( 'slide', 940, 350, true );
}


// EXCERPTS
function my_excerpt($excerpt_length = 20, $id = false, $echo = true) {
		 
	$text = '';
   
		  if($id) {
				$the_post = & get_post( $my_id = $id );
				$text = ($the_post->post_excerpt) ? $the_post->post_excerpt : $the_post->post_content;
		  } else {
				global $post;
				$text = ($post->post_excerpt) ? $post->post_excerpt : get_the_content('');
	}
		 
				$text = strip_shortcodes( $text );
				$text = apply_filters('the_content', $text);
				$text = str_replace(']]>', ']]&gt;', $text);
		  $text = strip_tags($text);
	   
				$excerpt_more = ' ' . '...';
				$words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
				if ( count($words) > $excerpt_length ) {
						array_pop($words);
						$text = implode(' ', $words);
						$text = $text . $excerpt_more;
				} else {
						$text = implode(' ', $words);
				}
		if($echo)
  echo apply_filters('the_content', $text);
		else
		return $text;
}
 
function get_my_excerpt($excerpt_length = 20, $id = false, $echo = false) {
 return my_excerpt($excerpt_length, $id, $echo);
}

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Get Images From Content
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = get_stylesheet_directory_uri()."/images/placeholder.gif";
  }
  return $first_img;
}


// Get Taxonomies
function get_my_terms(){
	
	$post = get_post( $post->ID );
	$post_type = $post->post_type;
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );
	
	$out = array();
	foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){
	
	$terms = get_the_terms( $post->ID, $taxonomy_slug );
	
	if ( !empty( $terms ) ) {
	  foreach ( $terms as $term ) {
	  	if($term->term_id != 1) {
			$out[] = $term->slug.' ';
		}
	  }
	  $out[] = "\n";
	}
	}
	
	return implode('', $out );
}

// Comments Call Back
function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
		<div class="comment-meta commentmetadata">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
				<?php printf( __('%1$s'), get_comment_date('d / m / y')) ?>
			</a><?php edit_comment_link(__('(Edit)'),'  ','' ); ?>
			<span class="reply"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
		</div>
		<?php $id = get_comment(get_comment_ID())->user_id;
		if(get_field('avatar','user_'. $id)) { 
			$author_badge = get_field('avatar', 'user_'. $id );?>
			<img width="20" height="20" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
		<?php } else { echo get_avatar( $comment, $args['avatar_size'] ); } ?>
		<?php printf(__('<cite class="fn">%s</cite> <span class="small-caps says">said...</span>'), get_comment_author_link()) ?>

		</div>
<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
<?php endif; ?>

		<?php comment_text() ?>
		
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
        }

// Hide Widgets
function unregister_default_widgets() {
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_RSS');
}
add_action('widgets_init', 'unregister_default_widgets', 11);

// Hide ACF Menu
function remove_acf_menu()
{
    $admins = array( 
        'administrator'
    );

    $current_user = wp_get_current_user();

    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }
 
}
 
add_action( 'admin_menu', 'remove_acf_menu', 999 );

// Get Color
function get_color(){
	
	$post = get_post( $post->ID );
	$type = $post->post_type;
	
	if('festival-of-nature' == $type) {
		$out = 'green';
	} elseif('bioblitz' == $type) {
		$out = 'orange';
	} elseif('communicate' == $type) {
		$out = 'red';
	} elseif('green-volunteers' == $type) {
		$out = 'yellow';
	} elseif('archive' == $type) {
		$out = 'blue';
	} else {
		$out = 'blue';
	}
	return $out;
}

// Show Future Posts
function show_future_posts($posts)
{
   global $wp_query, $wpdb;
   if(is_single() && $wp_query->post_count == 0)
   {
      $posts = $wpdb->get_results($wp_query->request);
   }
   return $posts;
}
add_filter('the_posts', 'show_future_posts');

?>