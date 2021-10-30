<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

return array(
	'name' => __( 'Row', 'js_composer' ),
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'show_settings_on_create' => false,
	'category' => __( 'Content', 'js_composer' ),
	'class' => 'vc_main-sortable-element',
	'description' => __( 'Place content elements inside the row', 'js_composer' ),
	'params' => array(
		
	),
	'js_view' => 'VcRowView',
);
