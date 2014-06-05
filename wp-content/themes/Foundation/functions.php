<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

// Login Logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE1LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIyNTguNDcycHgiIGhlaWdodD0iMzAuNDQ0cHgiIHZpZXdCb3g9IjAgMCAyNTguNDcyIDMwLjQ0NCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjU4LjQ3MiAzMC40NDQiCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxwYXRoIGZpbGw9IiNFQTMxNDQiIGQ9Ik0xLjczNywxMi42OFY4LjQyM2g1Ljk5NGwxLjczNi04LjM4MWg0LjM0M2wtMS43MzYsOC4zODFoNC45NTFsMS42OTQtOC4zODFoNC4zNDNsLTEuNjk0LDguMzgxaDQuOTUxdjQuMjU3CgloLTUuODJsLTEuMDQyLDUuMTI1aDUuMTI0djQuMjU2aC01Ljk5M2wtMS43MzcsOC4zODJoLTQuMzQzbDEuNzM3LTguMzgySDkuMjk0TDcuNiwzMC40NDNIMy4yNTdsMS42OTQtOC4zODJIMHYtNC4yNTZoNS44MTkKCWwxLjA0My01LjEyNUgxLjczN3ogTTExLjIwNSwxMi42OGwtMS4wNDIsNS4xMjVoNC45NTFsMS4wNDItNS4xMjVIMTEuMjA1eiIvPgo8cmVjdCB4PSIzMC42MjIiIGZpbGw9IiNFQTMxNDQiIHdpZHRoPSI2LjQyMSIgaGVpZ2h0PSIzMC40NDMiLz4KPHBvbHlnb24gZmlsbD0iI0VBMzE0NCIgcG9pbnRzPSI1NC45ODEsMCA1NC45ODEsNS45NjMgNTAuNzQyLDUuOTYzIDUwLjc0MiwzMC40NDMgNDQuMzgzLDMwLjQ0MyA0NC4zODMsNS45NjMgNDAuMDYsNS45NjMgNDAuMDYsMCAKCSIvPgo8cG9seWdvbiBmaWxsPSIjRUEzMTQ0IiBwb2ludHM9Ijc0LjEwMyw0LjU3MiA3NC4xMDMsOS43MjUgNjcuOTczLDkuNzI1IDY3Ljk3Myw1LjYzMiA2My44MTcsNS42MzIgNjMuODE3LDExLjk1IDY5LjU1MiwxMi40MDcgCgk3NC4zMzIsMTYuOTc4IDc0LjMzMiwyNS44NzEgNjkuNTUyLDMwLjQ0NCA2Mi4yMTcsMzAuNDQ0IDU3LjQzNywyNS44NzEgNTcuNDM3LDIwLjc2IDYzLjc5NywyMC43NiA2My43OTcsMjQuODEyIDY4LjE0LDI0LjgxMiAKCTY4LjE0LDE4LjI4NyA2Mi4zNjIsMTcuODcxIDU3LjU4MiwxMy4zIDU3LjU4Miw0LjU3MiA2Mi4zNjIsMCA2OS4zMjMsMCAiLz4KPHBvbHlnb24gZmlsbD0iI0VBMzE0NCIgcG9pbnRzPSI4NS41NjEsMCA4NS41NjEsMTMuOTIyIDkwLjU1NiwwIDk3LjI1LDAgOTEuMjc1LDE0LjE5MiA5Ny45OTgsMzAuNDQzIDkwLjk5MSwzMC40NDMgODUuNTYxLDE2LjkzNiAKCTg1LjU2MSwzMC40NDMgNzkuMzI2LDMwLjQ0MyA3OS4zMjYsMCAiLz4KPHJlY3QgeD0iMTAwLjM4IiBmaWxsPSIjRUEzMTQ0IiB3aWR0aD0iNi40MjEiIGhlaWdodD0iMzAuNDQzIi8+Cjxwb2x5Z29uIGZpbGw9IiNFQTMxNDQiIHBvaW50cz0iMTI4LjAyMyw0LjU3MiAxMjguMDIzLDExLjUzMyAxMjEuOTM1LDExLjUzMyAxMjEuOTM1LDUuNjMyIDExNy40ODcsNS42MzIgMTE3LjQ4NywyNC44MTIgCgkxMjEuOTM1LDI0LjgxMiAxMjEuOTM1LDE3LjQzNSAxMjguMDIzLDE3LjQzNSAxMjguMDIzLDI1Ljg3MSAxMjMuMjQ0LDMwLjQ0NCAxMTYuMDM0LDMwLjQ0NCAxMTEuMjU0LDI1Ljg3MSAxMTEuMjU0LDQuNTcyIAoJMTE2LjAzNCwwIDEyMy4yNDQsMCAiLz4KPHBvbHlnb24gZmlsbD0iI0VBMzE0NCIgcG9pbnRzPSIxMzguMzk2LDAgMTM4LjM5NiwxMy45MjIgMTQzLjM5MiwwIDE1MC4wODUsMCAxNDQuMTEsMTQuMTkyIDE1MC44MzMsMzAuNDQzIDE0My44MjYsMzAuNDQzIAoJMTM4LjM5NiwxNi45MzYgMTM4LjM5NiwzMC40NDMgMTMyLjE2MSwzMC40NDMgMTMyLjE2MSwwICIvPgo8cmVjdCB4PSIxNTMuMjE3IiBmaWxsPSIjRUEzMTQ0IiB3aWR0aD0iNi40MjEiIGhlaWdodD0iMzAuNDQzIi8+Cjxwb2x5Z29uIGZpbGw9IiNFQTMxNDQiIHBvaW50cz0iMTgxLjQ2MSwwIDE4MS40NjEsMzAuNDQzIDE3NS43MzIsMzAuNDQzIDE3MC4zMDIsMTMuMDQ5IDE3MC4xMzcsMTMuMDQ5IDE3MC4xMzcsMzAuNDQzIAoJMTY0LjA4OSwzMC40NDMgMTY0LjA4OSwwIDE3MC4zNiwwIDE3NS4zMzEsMTYuMjkyIDE3NS40NzcsMTYuMjkyIDE3NS40NzcsMCAiLz4KPHBvbHlnb24gZmlsbD0iI0VBMzE0NCIgcG9pbnRzPSIyMDIuNTE3LDQuNTcyIDIwMi41MTcsMTEuMTYgMTk2LjM4NywxMS4xNiAxOTYuMzg3LDUuNjMyIDE5MS44NTYsNS42MzIgMTkxLjg1NiwyNC44MTIgCgkxOTYuMzg3LDI0LjgxMiAxOTYuMzg3LDIwLjA1MyAxOTMuODcyLDIwLjA1MyAxOTMuODcyLDE0LjQyMSAyMDIuNTE3LDE0LjQyMSAyMDIuNTE3LDI1Ljg3MSAxOTcuNzM3LDMwLjQ0NCAxOTAuMzE5LDMwLjQ0NCAKCTE4NS41MzksMjUuODcxIDE4NS41MzksNC41NzIgMTkwLjMxOSwwIDE5Ny43MzcsMCAiLz4KPHBhdGggZmlsbD0iI0VBMzE0NCIgZD0iTTIyNC4yNiw0LjU3MnYyMS4yOTlsLTQuNzc5LDQuNTcyaC03LjMxNmwtNC43NzgtNC41NzJWNC41NzJsNC43NzgtNC41NzFoNy4zMTZMMjI0LjI2LDQuNTcyegoJIE0yMTguMDI2LDUuNjMxaC00LjM0M3YxOS4xODFoNC4zNDNWNS42MzF6Ii8+Cjxwb2x5Z29uIGZpbGw9IiNFQTMxNDQiIHBvaW50cz0iMjQxLjg4NiwwIDI0MS44ODYsNS42MzEgMjM0LjY1NCw1LjYzMSAyMzQuNjU0LDExLjQ5MiAyNDAuNzAyLDExLjQ5MiAyNDAuNzAyLDE3LjIyOCAKCTIzNC42NTQsMTcuMjI4IDIzNC42NTQsMzAuNDQzIDIyOC4zMTYsMzAuNDQzIDIyOC4zMTYsMCAiLz4KPHBvbHlnb24gZmlsbD0iI0VBMzE0NCIgcG9pbnRzPSIyNTguNDcyLDAgMjU4LjQ3Miw1LjYzMSAyNTEuMjQxLDUuNjMxIDI1MS4yNDEsMTEuNDkyIDI1Ny4yODgsMTEuNDkyIDI1Ny4yODgsMTcuMjI4IAoJMjUxLjI0MSwxNy4yMjggMjUxLjI0MSwzMC40NDMgMjQ0LjkwMywzMC40NDMgMjQ0LjkwMywwICIvPgo8L3N2Zz4=');
			background-repeat: no-repeat;
			background-size:100% auto;
            height:150px;
            width:auto !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Custom Fields
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_features',
		'title' => 'Features',
		'fields' => array (
			array (
				'key' => 'field_53904edf2720a',
				'label' => 'Features',
				'name' => 'feature',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_53904f222720c',
						'label' => 'Object',
						'name' => 'object',
						'type' => 'wysiwyg',
						'instructions' => 'Maybe include an intro and video?',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Feature',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_groups',
		'title' => 'Groups',
		'fields' => array (
			array (
				'key' => 'field_538dcc9dd1be8',
				'label' => 'Group',
				'name' => 'group',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'groups',
				'field_type' => 'select',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'object',
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'teams',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_match-info',
		'title' => 'Match Info',
		'fields' => array (
			array (
				'key' => 'field_538db5a7650b6',
				'label' => 'Teams',
				'name' => 'teams',
				'type' => 'taxonomy',
				'required' => 1,
				'taxonomy' => 'teams',
				'field_type' => 'checkbox',
				'allow_null' => 0,
				'load_save_terms' => 1,
				'return_format' => 'object',
				'multiple' => 0,
			),
			array (
				'key' => 'field_538dfae98151c',
				'label' => 'Score',
				'name' => 'score_1',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_538dfbffeb030',
				'label' => 'Score 2',
				'name' => 'score_2',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_538f06eb727a5',
				'label' => 'Venue',
				'name' => 'venue',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_points',
		'title' => 'Points',
		'fields' => array (
			array (
				'key' => 'field_5390968356269',
				'label' => 'Points',
				'name' => 'points',
				'type' => 'number',
				'instructions' => '3 Points for a win. 1 Point for a draw.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'teams',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

// Taxonomies
add_action('init', 'cptui_register_my_taxes_teams');
function cptui_register_my_taxes_teams() {
register_taxonomy( 'teams',array (
  0 => 'post',
),
array( 'hierarchical' => false,
	'label' => 'Teams',
	'show_ui' => true,
	'query_var' => true,
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Team',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}
add_action('init', 'cptui_register_my_taxes_groups');
function cptui_register_my_taxes_groups() {
register_taxonomy( 'groups',array (
  0 => 'post',
),
array( 'hierarchical' => false,
	'label' => 'Groups',
	'show_ui' => true,
	'query_var' => true,
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Group',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
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

add_action('init', 'all_scripts');
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

// Link Classes
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $injection = 'class="button pull-right right"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

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

// Hide Admin Menus
function remove_post_custom_fields() {
	remove_meta_box( 'tagsdiv-teams' , 'post' , 'normal' );
	remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' );
	remove_meta_box( 'tagsdiv-groups' , 'post' , 'normal' );
	remove_meta_box( 'categorydiv' , 'post' , 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

?>