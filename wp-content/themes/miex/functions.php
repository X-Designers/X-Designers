<?php
$miex_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function miex_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('miex', $lang);

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video' ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'miex' ),
    'one-page' =>  esc_html__( 'One Page Navigation Menu: Chosen menu in Home page', 'miex' ),
    'home-4' => esc_html__( 'One Page Navigation Menu: Chosen menu in Home-4 page', 'miex' ),
    'home-3' => esc_html__( 'One Page Navigation Menu: Chosen menu in Home-3 page', 'miex' ),
    'home-2' => esc_html__( 'One Page Navigation Menu: Chosen menu in Home-2 page', 'miex' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'miex_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;
 
function miex_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'miex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open+Sans:300,400,600,700|Raleway:300,400,600,700,800&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function miex_theme_scripts_styles() {
	$miex_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/flaticon.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assets/css/owl.theme.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css');
    wp_enqueue_style( 'owl-transitions', get_template_directory_uri().'/assets/css/owl.transitions.css');
    wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style( 'miex-style', get_stylesheet_uri(), array(), '2018-11-10' );

if(isset($miex_redux_demo['chosen-color']) && $miex_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    } 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

    wp_enqueue_script("jquery", get_template_directory_uri()."/assets/js/jquery.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("jquery-plugin-collection", get_template_directory_uri()."/assets/js/jquery-plugin-collection.js",array(),false,true);
    wp_enqueue_script("script", get_template_directory_uri()."/assets/js/script.js",array(),false,true);
  //Javascript 

   }
add_action( 'wp_enqueue_scripts', 'miex_theme_scripts_styles' );


add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}


//Custom Excerpt Function
function miex_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}

add_filter('user_contactmethods', 'my_user_contactmethods');  
               
function my_user_contactmethods($user_contactmethods){  
  
  $user_contactmethods['subtitle'] = 'Subtitle';
  $user_contactmethods['facebook'] = 'Facebook Link';  
  $user_contactmethods['twitter'] = 'Twitter Link';
  $user_contactmethods['instagram'] = 'Instagram Link';  
  $user_contactmethods['job'] = 'Job';
  
  return $user_contactmethods;  
}   

// Widget Sidebar
function miex_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'miex' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'miex' ),        
		'before_widget' => '<div id="%1$s" class="single-widget mb-30 %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h3 class="widget-title">',        
		'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget', 'miex' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'miex' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget', 'miex' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'miex' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget', 'miex' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'miex' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget', 'miex' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'miex' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'miex_widgets_init' );

//function tag widgets
function miex_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'miex_tag_cloud_widget' );
function miex_excerpt() {
  $miex_redux_demo = get_option('redux_demo');
  if(isset($miex_redux_demo['blog_excerpt'])){
    $limit = $miex_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function miex_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => htmlspecialchars_decode(esc_html__( '<i class="fa fa-angle-double-left"></i>', 'miex' )),
    'next_text' => htmlspecialchars_decode(esc_html__( '<i class="fa fa-angle-double-right"></i>', 'miex' )),   
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pg-pagination">', $return );
}

function miex_search_form( $form ) {
    $form = '
  <form  method="get" class="search-form" action="' . esc_url(home_url('/')) . '"> 
            <input type="search" class="form-control" placeholder="'.esc_html__('Search', 'miex').'" value="' . get_search_query() . '" name="s" id="s"> 
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'miex_search_form' );
//Custom comment List:

// Comment Form
function miex_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
  <li>
      <div class="article">
          <div class="author-pic">
              <?php echo get_avatar($comment,$size='44' ); ?>
          </div>
          <div class="details">
              <div class="author-meta">
                  <div class="name"><h4><?php printf( get_comment_author_link()) ?></h4></div>
                  <div class="date"><span><?php the_time('F j, Y'); ?> - <?php the_time('g:i a'); ?></span></div>
              </div>
              <div class="comment-content">
                  <?php comment_text() ?>
              </div>
              <div class="replay">
                  <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
              </div>
          </div>
      </div>
  
<?php
}


function miex_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'miex_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'miex' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'miex' ) => 'type2',
                                esc_html__( 'Service Area 1', 'miex' ) => 'service_area_1',
                                esc_html__( 'Testimonials', 'miex' ) => 'testimonials',
                                esc_html__( 'Team', 'miex' ) => 'team',
                                esc_html__( 'Contact', 'miex' ) => 'contact_area',
                                esc_html__( 'Contact 2', 'miex' ) => 'contact2_area',
                                esc_html__( 'Contact 4', 'miex' ) => 'contact4_area',
                                esc_html__( 'Testimonials 2', 'miex' ) => 'testimonial_2',
                                esc_html__( 'Testimonials 3', 'miex' ) => 'testimonial_3',
                                esc_html__( 'Testimonials 4', 'miex' ) => 'testimonials_4',
                                esc_html__( 'Price', 'miex' ) => 'price',
                                esc_html__( 'Features', 'miex' ) => 'features',
                                esc_html__( 'Screenshot', 'miex' ) => 'screenshot',
                                esc_html__( 'About_me_1', 'miex' ) => 'about_me_1',
                                esc_html__( 'Education', 'miex' ) => 'education',
                                esc_html__( 'Call To Area', 'miex' ) => 'callto',
                                
                             ),
                             'description' => esc_html__( 'Select type row', 'miex' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'miex'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "miex"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'miex'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "miex"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Desc', 'miex'),
                              "param_name" => "ses_desc",
                              "value" => "",
                              "description" => esc_html__("Section Desc, Leave a blank do not show frontend.", "miex"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'miex' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'miex' )
      ));
// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'miex'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "miex"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Subtitle', 'miex'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Subtitle of column", "miex"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'miex'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Container Class", "miex"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column id', 'miex'),
                              "param_name" => "column_id",
                              "value" => "",
                              "description" => esc_html__("Column ID, Only use for content slider.", "miex"),      
                            ) 
    );  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'miex' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'miex' ) => 'none',
                                esc_html__( 'Column', 'miex' ) => 'column',
                                esc_html__( 'Contact area', 'miex' ) => 'contact_area',
                                esc_html__( 'Contact area 2', 'miex' ) => 'contact2_area',

                             ),
                             'description' => esc_html__( 'Select type section content', 'miex' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'miex' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'miex' )
      )); 
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'miex_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function miex_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'miex' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'miex' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'miex' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'miex' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Miex Common', 'miex' ),
            'slug'                     => 'miex-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/miex-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'miex' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'miex' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'miex' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'miex' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'miex' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'miex' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'miex' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'miex' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'miex' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'miex' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'miex' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'miex' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'miex' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'miex' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'miex' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'miex' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'miex' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}



function miex_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Miex',
            'import_file_url'            => 'http://shtheme.com/import/miex/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/miex/widget.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/miex/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example miex', 'miex' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'miex_import_files' );




function miex_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'miex_after_import_setup' );




?>