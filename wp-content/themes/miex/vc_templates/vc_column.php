<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
	'subtitle' =>'',
	'type' => '',
    'image' => '',
), $atts));

if($type == 'column'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'contact_area'){

$images = wp_get_attachment_image_src($image,'');

$el_class = $this->getExtraClass($el_class);

$width = wpb_translateColumnWidthToSpan($width);



$el_class .= '';



$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);

$output .= "\n\t".'<div class="col col-md-8">
                        <div class="contact-form">';



$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

$output .= "\n\t".' </div></div>'.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'contact2_area'){

$images = wp_get_attachment_image_src($image,'');

$el_class = $this->getExtraClass($el_class);

$width = wpb_translateColumnWidthToSpan($width);



$el_class .= '';



$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);

$output .= "\n\t".'<section class="contact-section section-padding" id="contact">
                  <div class="container">
                      <div class="row">
                          <div class="col col-xs-12">
                              <div class="section-title-s3">
                                  <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>
                              </div>
                    </div>
                </div>    

                <div class="row contact-form-info"';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

$output .= "\n\t".' </div></div></section>'.$this->endBlockComment($el_class) . "\n";



}else{
	$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo $output;