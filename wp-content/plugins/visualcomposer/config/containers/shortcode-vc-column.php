<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * @var $tag - shortcode tag;
 */
return array(
	'name' => __( 'Column', 'js_composer' ),
	'icon' => 'icon-wpb-row',
	'is_container' => true,
	'content_element' => false,
	'description' => __( 'Place content elements inside the column', 'js_composer' ),
	'params' => array(
		
		
		
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'js_composer' ),
			'param_name' => 'width',
			'value' => array(
				__( '1 column - 1/12', 'js_composer' ) => '1/12',
				__( '2 columns - 1/6', 'js_composer' ) => '1/6',
				__( '3 columns - 1/4', 'js_composer' ) => '1/4',
				__( '4 columns - 1/3', 'js_composer' ) => '1/3',
				__( '5 columns - 5/12', 'js_composer' ) => '5/12',
				__( '6 columns - 1/2', 'js_composer' ) => '1/2',
				__( '7 columns - 7/12', 'js_composer' ) => '7/12',
				__( '8 columns - 2/3', 'js_composer' ) => '2/3',
				__( '9 columns - 3/4', 'js_composer' ) => '3/4',
				__( '10 columns - 5/6', 'js_composer' ) => '5/6',
				__( '11 columns - 11/12', 'js_composer' ) => '11/12',
				__( '12 columns - 1/1', 'js_composer' ) => '1/1',
			),
			'description' => __( 'Select column width.', 'js_composer' ),
			'std' => '1/1',
		),
		
	),
	'js_view' => 'VcColumnView',
);
