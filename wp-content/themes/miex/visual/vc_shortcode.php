<?php 
$textdoimain = 'miex';
global $pre_text;

$pre_text = 'VG ';


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Area", 'miex'),
   "base" => "slider_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'miex'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'miex')
   ),

   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Area", 'miex'),
   "base" => "about_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'miex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Area", 'miex'),
   "base" => "service_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 1", 'miex'),
      "param_name" => "text1",
      "value" => "",
      "description" => __("Text 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 2", 'miex'),
      "param_name" => "text2",
      "value" => "",
      "description" => __("Text 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 3", 'miex'),
      "param_name" => "text3",
      "value" => "",
      "description" => __("Text 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Para 1", 'miex'),
      "param_name" => "para1",
      "value" => "",
      "description" => __("Para 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Para 2", 'miex'),
      "param_name" => "para2",
      "value" => "",
      "description" => __("Para 2", 'miex')
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Area 1", 'miex'),
   "base" => "service_area_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'miex'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'miex')
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Call to Area", 'miex'),
   "base" => "callto",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Team", 'miex'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Team", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Team", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Team 1", 'miex'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link Team 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Team 2", 'miex'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link Team 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Team 3", 'miex'),
      "param_name" => "link3",
      "value" => "",
      "description" => __("Link Team 3", 'miex')
   ),
    )));
}





if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial", 'miex'),
   "base" => "testimonial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Author", 'miex'),
      "param_name" => "author",
      "value" => "",
      "description" => __("Author", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Position", 'miex'),
      "param_name" => "position",
      "value" => "",
      "description" => __("Position", 'miex')
   ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio", 'miex'),
   "base" => "Portfolio",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'miex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'miex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'miex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'miex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'miex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'miex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'miex' ) => 'date',
            __( 'Title', 'miex' ) => 'title',
            __( 'Random', 'miex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'miex'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'miex')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'miex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'miex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'miex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'miex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'miex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'miex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'miex' ) => 'date',
            __( 'Title', 'miex' ) => 'title',
            __( 'Random', 'miex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact Info", 'miex'),
   "base" => "contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps", 'miex'),
   "base" => "map",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("latitude", 'miex'),
      "param_name" => "lat",
      "value" => "",
      "description" => __("latitude", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("longitude", 'miex'),
      "param_name" => "long",
      "value" => "",
      "description" => __("longitude", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Zoom", 'miex'),
      "param_name" => "zoom",
      "value" => "",
      "description" => __("Zoom", 'miex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Map Marker', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Area 2", 'miex'),
   "base" => "slider_area_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'miex'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 1', 'miex' ),
      'param_name' => 'image1',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Area 2", 'miex'),
   "base" => "about_area_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'miex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'miex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'miex')
   ),array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'miex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'miex')
   ),array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 3", 'miex'),
      "param_name" => "subtitle3",
      "value" => "",
      "description" => __("Subtitle 3", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio 2", 'miex'),
   "base" => "portfolio_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'miex'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'miex')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'miex'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'miex')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle 1", 'miex'),
         "param_name" => "subtitle1",
         "value" => "",
         "description" => __("Subtitle 1", 'miex')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'miex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'miex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'miex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'miex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'miex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'miex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'miex' ) => 'date',
            __( 'Title', 'miex' ) => 'title',
            __( 'Random', 'miex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'miex'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Button", 'miex')
   ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 2", 'miex'),
   "base" => "testimonial_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Author", 'miex'),
      "param_name" => "author",
      "value" => "",
      "description" => __("Author", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Position", 'miex'),
      "param_name" => "position",
      "value" => "",
      "description" => __("Position", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Price", 'miex'),
   "base" => "price",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Price", 'miex'),
      "param_name" => "price",
      "value" => "",
      "description" => __("Price", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit Price", 'miex'),
      "param_name" => "unit",
      "value" => "",
      "description" => __("Unit Price", 'miex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'miex'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Text Btn", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Month", 'miex'),
      "param_name" => "month",
      "value" => "",
      "description" => __("Month", 'miex')
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog 2", 'miex'),
   "base" => "blog_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'miex')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'miex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'miex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'miex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'miex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'miex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'miex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'miex' ) => 'date',
            __( 'Title', 'miex' ) => 'title',
            __( 'Random', 'miex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Partner", 'miex'),
   "base" => "partner",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'miex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'miex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image 3', 'miex' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image 4', 'miex' ),
         'param_name' => 'image4',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image 5', 'miex' ),
         'param_name' => 'image5',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact 2", 'miex'),
   "base" => "contact2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'miex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'miex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Text subtitle 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle 2", 'miex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Text subtitle 2", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle 3", 'miex'),
      "param_name" => "subtitle3",
      "value" => "",
      "description" => __("Text subtitle 3", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Area 3", 'miex'),
   "base" => "slider_area_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),

   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 1', 'miex' ),
      'param_name' => 'image1',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 2', 'miex' ),
      'param_name' => 'image2',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Features", 'miex'),
   "base" => "features",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'miex'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Area 3", 'miex'),
   "base" => "about_area_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'miex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Screenshot", 'miex'),
   "base" => "screenshot",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Produce", 'miex'),
   "base" => "produce",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 1", 'miex'),
      "param_name" => "text1",
      "value" => "",
      "description" => __("Text 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image 1', 'miex' ),
      'param_name' => 'image1',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 3", 'miex'),
   "base" => "testimonial_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Download", 'miex'),
   "base" => "download",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),   
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'miex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'miex'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider Area 4", 'miex'),
   "base" => "slider_area_4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'miex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'miex')
   ),array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'miex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'miex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'miex'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon 1", 'miex'),
      "param_name" => "icon1",
      "value" => "",
      "description" => __("Class Icon 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'miex'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon 2", 'miex'),
      "param_name" => "icon2",
      "value" => "",
      "description" => __("Class Icon 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 3", 'miex'),
      "param_name" => "link3",
      "value" => "",
      "description" => __("Link 3", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon 3", 'miex'),
      "param_name" => "icon3",
      "value" => "",
      "description" => __("Class Icon 3", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 4", 'miex'),
      "param_name" => "link4",
      "value" => "",
      "description" => __("Link 4", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon 4", 'miex'),
      "param_name" => "icon4",
      "value" => "",
      "description" => __("Class Icon 4", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 5", 'miex'),
      "param_name" => "link5",
      "value" => "",
      "description" => __("Link 5", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon 5", 'miex'),
      "param_name" => "icon5",
      "value" => "",
      "description" => __("Class Icon 5", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 6", 'miex'),
      "param_name" => "link6",
      "value" => "",
      "description" => __("Link 6", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon 6", 'miex'),
      "param_name" => "icon6",
      "value" => "",
      "description" => __("Class Icon 6", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Me", 'miex'),
   "base" => "about_me",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number 1", 'miex'),
      "param_name" => "number1",
      "value" => "",
      "description" => __("Number 1", 'miex')
   ),  
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'miex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number 2", 'miex'),
      "param_name" => "number2",
      "value" => "",
      "description" => __("Number 2", 'miex')
   ), 
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'miex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number 3", 'miex'),
      "param_name" => "number3",
      "value" => "",
      "description" => __("Number 3", 'miex')
   ),   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 4", 'miex'),
      "param_name" => "title4",
      "value" => "",
      "description" => __("Title 4", 'miex')
   ),  
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number 4", 'miex'),
      "param_name" => "number4",
      "value" => "",
      "description" => __("Number 4", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Me 1", 'miex'),
   "base" => "about_me_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'miex'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Experiences", 'miex'),
   "base" => "experiences",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'miex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'miex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'miex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'miex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle 2", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 3", 'miex'),
      "param_name" => "subtitle3",
      "value" => "",
      "description" => __("Subtitle 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Time 1", 'miex'),
      "param_name" => "the_time1",
      "value" => "",
      "description" => __("Time 1", 'miex')
   ),array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Time 2", 'miex'),
      "param_name" => "the_time2",
      "value" => "",
      "description" => __("Time 2", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Time 3", 'miex'),
      "param_name" => "the_time3",
      "value" => "",
      "description" => __("Time 3", 'miex')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image ', 'miex' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'miex' )
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Education", 'miex'),
   "base" => "education",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'miex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'miex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'miex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'miex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 4", 'miex'),
   "base" => "testimonial_4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'miex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'miex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'miex' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'miex'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text", 'miex'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text", 'miex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog 1", 'miex'),
   "base" => "blog_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'miex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'miex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'miex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'miex')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'miex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'miex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'miex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'miex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'miex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'miex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'miex' ) => 'date',
            __( 'Title', 'miex' ) => 'title',
            __( 'Random', 'miex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'miex' )
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'miex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'miex')
   ),

    )));
}