<?php

$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(

    'el_class'        => '',

    'bg_image'        => '',

    'bg_image_repeat' => '',

    'padding'         => '',

    'margin_bottom'   => '',

    'css' => '',

    'wrap_class'=>'',

    'ses_title'=>'',

    'el_id'=>'',

    'type_row' => '',

    'ses_subtitle' => '',

    'ses_desc' => '',

    'ses_image' => '', 

    'ses_btn1' => '', 

    'ses_link1' => '', 

    'ses_btn2' => '', 

    'ses_link2' => '', 

), $atts));



wp_enqueue_script( 'wpb_composer_front_js' );



$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

$images = wp_get_attachment_image_src($ses_image,'');

if($type_row == 'type2'){

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}elseif($type_row == 'service_area_1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="services-section section-padding" id="services">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="service-features-grids service01">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .=' </div></div></div></div></section>';



}elseif($type_row == 'service_area'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<div class="service-area pt-100 pb-70 gray-bg">

            <div class="container">

              <div class="row">

                <div class="col-lg-12">

                  <div class="section-title text-center">

                     <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                     <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                  </div>

                </div>  

              </div>

            <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

      </div>

    </div>';



}elseif($type_row == 'fun_fact'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="fun-fact-area bg-img-5 bg-opacity-1" data-stellar-background-ratio="0.6" 

     style="background: rgba(0, 0, 0, 0) url('.esc_url($images[0]).') no-repeat scroll center center/cover;">

      <div class="container">

        <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

      </div>

    </section>';



}elseif($type_row == 'service'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<div class="service-area pt-100 pb-70 gray-bg">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="section-title text-center">

               <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

               <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

            </div>

          </div>  

        </div>

        <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

      </div>

    </div>';





}elseif($type_row == 'team'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="team-section section-padding">

            <div class="container">

                <div class="row">

                    <div class="col col-lg-4">

                        <div class="section-title-s4">

                            <span>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</span>

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                        </div>

                    </div>

                    <div class="col col-lg-8">

                        <div class="title-text">

                            <p>'.htmlspecialchars_decode(esc_attr($ses_desc)).'</p>

                        </div>

                    </div>

                </div>



                <div class="row team-grids">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        </div>

    </section>';



}elseif($type_row == 'testimonials'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-section section-padding">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s3">

                            <span>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</span>

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col col-lg-10 col-lg-offset-1">

                        <div class="testimonials-girds testimonials-slider">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        </div>

      </div>

    </div>

    </section>'; 



}elseif($type_row == 'testimonials_4'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-section-s4 section-padding" id="testimonials">

            <div class="container">

                <div class="row">

                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                        <div class="section-title-s11">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col col-lg-10 col-lg-offset-1">

                        <div class="testimonial-grids testimonials-slider-s3">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        </div>

      </div>

    </div>

    </section>';  



}elseif($type_row == 'accordion'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<div class="skill-area ptb-100">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="section-title text-center">

               <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

               <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

            </div>  

          </div>  

        </div>

        <div class="row">

          <div class="col-md-10 col-md-offset-1 col-sm-12">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

          </div>            

        </div>      

      </div>

    </div>';  



}elseif($type_row == 'about_me_1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="about-section-s5 section-padding" >

            <div class="container">

            <div class="row">

                    <div class="col col-xs-12">

                        <div class="features-grids about01">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

          </div>            

        </div>      

      </div>

    </section>';  





}elseif($type_row == 'education'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="education-section section-padding" id="education">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s10">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                        </div>

                    </div>

                </div>

                <div class="row education-grids">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';  





}elseif($type_row == 'price'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="services-package-section section-padding" id="services">

            <div class="container">

                <div class="row">

                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">

                        <div class="section-title-s5">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col col-xs-12">

                        <div class="package-grids">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

              </div>

            </div>

          </div>

        </section>';  



}elseif($type_row == 'contact_area'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="contact-section section-padding" id="contact">

                  <div class="container">

                      <div class="row">

                          <div class="col col-xs-12">

                              <div class="section-title-s3">

                                  <span>'.htmlspecialchars_decode(esc_attr($ses_title)).'</span>';
    if($ses_subtitle != ''){

               $output .=    '<h2>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</h2>';
           }

               $output .=    '</div>

                    </div>

                </div>    



                <div class="row contact-form-info">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

      </div>

    </section>'; 





}elseif($type_row == 'contact2_area'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="contact-section-s2 section-padding" id="contact">

            <div class="container">

                <div class="row contact-form-info">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

      </div>

    </section>'; 



}elseif($type_row == 'contact4_area'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="contact-section-s3 section-padding" id="contact">

            <div class="container">

                <div class="row">

                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                        <div class="section-title-s12">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                    </div>

                </div>



                <div class="contact-form">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

      </div>

    </section>'; 



}elseif($type_row == 'testimonial_2'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-section-s2 section-padding">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s6">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col col-lg-10 col-lg-offset-1">

                        <div class="testimonials-girds testimonials-slider-s2">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        </div>

      </div>

    </div>

    </section>'; 





}elseif($type_row == 'testimonial_3'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-section-s3 section-padding" id="testimonials">

            <div class="container">

                <div class="row">

                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                        <div class="section-title-s8">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                            <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col col-lg-10 col-lg-offset-1">

                        <div class="testimonial-grids testimonials-slider-s3">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        </div>

      </div>

    </div>

    </section>'; 



}elseif($type_row == 'features'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="features-section-s2 section-padding">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s7">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col col-xs-12">

                        <div class="features-grids">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

              </div>

            </div>

        </div>

    </section>';



}elseif($type_row == 'callto'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="news-letter-section">

            <div class="container">

                <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        </div>

    </section>';





}elseif($type_row == 'screenshot'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="screenshot-section section-padding" id="app-showcase">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s7">

                            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                        </div>

                    </div>

                </div>

            </div>



            <div class="row content">

                <div class="col col-xs-12">

                    <div class="screenshot-slider-outer">

                        <div class="screenshot-slider">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

                        <div class="mockup">

                            <div class="top"></div>

                            <div class="left"></div>

                            <div class="right"></div>

                            <div class="bottom"></div>

                        </div>

                    </div>

                </div>

            </div>

        </section>';







}else{

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}

echo $output; 