<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/24/17
 * Time: 4:43 PM
 */

/**
 *===================================
 * include css&js
 *===================================
 */

function myTheme_script_enqueue()
{
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',[],'3.2.0','all');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',[],'3.2.0','all');
    wp_enqueue_style('fixes',get_template_directory_uri().'/css/fixes.css',[],'1.0.0','all');

    wp_enqueue_script('jquery_js',get_template_directory_uri().'/js/jquery.js',[],'1.7.1',true);
    wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js',[],'3.2.0',true);

}
add_action('wp_enqueue_scripts',"myTheme_script_enqueue",1,1);
/**
 *===================================
 * add menus
 *===================================
 */

function myTheme_setUp()
{
    add_theme_support('menus');
    register_nav_menu('main_menu','main nav menu');
    register_nav_menu('footer_menu','footer nav menu');
}
add_action('init',"myTheme_setUp");
/**
 *===================================
 * remove admin bar from frontend
 *===================================
 */

add_filter('show_admin_bar', '__return_false');
/**
 *===================================
 * add custom bg image ("dory")
 *===================================
 */

add_theme_support('custom-background');
/**
 *===================================
 * add header image
 *===================================
 */

add_theme_support('custom-header');
/**
 *===================================
 * post with image
 *===================================
 */

add_theme_support('post-thumbnails');
/**
 *===================================
 * make theme support html5 
 *===================================
 */
add_theme_support('html5',['search-form','quote']);



/**
 *===================================
 * sidebar
 *===================================
 */
function myTheme_widget_setup()
{
    register_sidebar([
        'name'=>'sidebar',
        'id'=>'sidebar-1',
        'class'=>'class',// wp pre-append "sidebar-"
        'description'   => 'sidebar-in-my-life',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ]);
}
add_action('widgets_init',"myTheme_widget_setup");
/**
 *===================================
 * Incluse walker file
 *===================================
 */

require get_template_directory() . '/inc/walker.php';

/**
 *===================================
 * remove WP version
 *===================================
 */
function myTheme_remove_wp_version(){
    return '';
}
add_filter('the_generator','myTheme_remove_wp_version');
/**
 *===================================
 * Custome post type
 *===================================
 */
function myTheme_custom_post_type(){
    $labels=[
        'name'=>'custoom',//actual name
        'singular_name'=>'custom',//name used inside admin panel
        'all_item'=>'all custom',// 
        'add_new'=>'add New custom',//btn to add new
        'add_new_item'=>'add custom',//
        'edit_item'=>'edit custom',
        'view_item'=>'view custom',
        'search_item'=>'search',
        'not_found'=>'not found',
        'not_found_in_trash'=>'not found in trash',
        'parent_item_colon'=>'parent',
        ];
    $args = [
		'labels' => $labels,//used in backend
		'public' => true,//publicly accessable
//		'has_archive' => true,//if we need archive in this post type
//		'publicly_queryable' => true,//can customize query
//		'query_var' => true,//name of 
//		'rewrite' => true,//rewrite custome slug
//		'capability_type' => 'post',
//		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
//		'taxonomies' => array('category', 'post_tag'),
//		'menu_position' => 5,
//		'exclude_from_search' => false
	];
	register_post_type('custoom',$args);
}

add_action('init','myTheme_custom_post_type');
/**
 *===================================
 * Custome taxonomi
 *===================================
 */
function myTheme_custom_taxonomy()
{
    $labels=[
      'name'=>'new_taxomonies',
      'singular_name'=>'new_taxomonies',
        
    ];
    $args = [
                'hierarchical' => true,
		'labels' => $labels,
	
		'rewrite' => array( 'slug' => 'new_taxomony' )
	];
	
	register_taxonomy('new_taxomony', array('custoom'), $args);
}
add_action( 'init' , 'myTheme_custom_taxonomy' );
