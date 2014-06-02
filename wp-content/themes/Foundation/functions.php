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

add_action( 'admin_menu', 'remove_admin_menus' );
function remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

//Rename Posts
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Matches';
    $submenu['edit.php'][5][0] = 'Matches';
    $submenu['edit.php'][10][0] = 'Add Match';
    $submenu['edit.php'][16][0] = 'Match Tags';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Matches';
    $labels->singular_name = 'Match';
    $labels->add_new = 'Add Match';
    $labels->add_new_item = 'Add Match';
    $labels->edit_item = 'Edit Match';
    $labels->new_item = 'Matches';
    $labels->view_item = 'View Match';
    $labels->search_items = 'Search Matches';
    $labels->not_found = 'No Matches found';
    $labels->not_found_in_trash = 'No Matches found in Trash';
    $labels->all_items = 'All Matches';
    $labels->menu_name = 'Matches';
    $labels->name_admin_bar = 'Matches';
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

// Register Post Types

// Taxonomies

// Footer
add_filter( 'admin_footer_text', 'my_admin_footer_text' );
function my_admin_footer_text( $default_text ) {
     return '<span id="footer-thankyou">Website created and crafted by <a href="http://fiascodesign.co.uk">Fiasco Design</a><span>';
}

// Editor Style
function my_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

//jQuery Scripts
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

// add_action('init', 'all_scripts');
function all_scripts() {
	wp_enqueue_script('jquery-scripts', get_stylesheet_directory_uri().'/js/scripts.js','','',true);
	wp_enqueue_script('jquery-init', get_stylesheet_directory_uri().'/js/init.js','','',true);
}


// Menus
register_nav_menu( 'primary', 'Main Menu' );


// IMAGES
if ( function_exists( 'add_image_size' ) ) {
	// add_image_size( 'post-header', 675, 385, true );
}

// Excerpt
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


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