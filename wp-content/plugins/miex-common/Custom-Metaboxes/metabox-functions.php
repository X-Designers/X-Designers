<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "miex";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'page_setting',
        'title'      => 'Page Setting',
        'pages'      => array('page'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('portfolio'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Image',
                'desc' => 'Image Upload',
                'default' => '',
                'id' => $prefix . 'single_image',
                'type' => 'file'
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('portfolio2'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Image',
                'desc' => 'Image Upload',
                'default' => '',
                'id' => $prefix . 'single_image',
                'type' => 'file'
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Video Post',
                'desc' => 'Input link video show in index',
                'id'   => $prefix . 'single_video',
                'type'    => 'text',
            ),
            array(
                'name' => 'Image',
                'desc' => 'Image Upload',
                'default' => '',
                'id' => $prefix . 'single_image',
                'type' => 'file'
            ),
            array(
                'name' => 'Facebook',
                'desc' => 'Input link facebook',
                'default' => '',
                'id' => $prefix . 'single_facebook',
                'type' => 'text'
            ), 
            array(
                'name' => 'Twitter',
                'desc' => 'Input link twitter',
                'default' => '',
                'id' => $prefix . 'single_twitter',
                'type' => 'text'
            ), 
            array(
                'name' => 'Linkedin',
                'desc' => 'Input link linkedin',
                'default' => '',
                'id' => $prefix . 'single_linkedin',
                'type' => 'text'
            ), 
        )
    );
    
    // Add other metaboxes as needed
    
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

} 
