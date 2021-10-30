<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $miex_redux_demo; 
$b=$miex_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>
a:hover {
  color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  text-decoration: none;
}
.default-bg{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.main-menu nav ul li a::before {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
  bottom: 0px;
  content: "";
  height: 2px;
  left: 0;
  position: absolute;
  transform: scale(0);
  transition: all 0.3s ease 0s;
  width: 100%;
}
.default-btn {
  border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  }
  .default-btn:hover{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color:#fff;
} 
.default-btn.btn-active{  
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color:#fff;
} 
.slider-active .owl-nav div {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.about-icon i {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    font-size: 40px;
}
.single-about:hover .about-text h3{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.video-play.mfp-iframe i {
  color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  margin-left: 5px;
}
.video-play.mfp-iframe:hover {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color: #fff;
}
.service-icon i{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.single-service:hover .service-icon i{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.single-service:hover .service-text > h3{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.portfolio-menu button::before {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
  }
.single-portfolio .img-poppu:hover:before, .single-portfolio .img-poppu:hover:after{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.portfolio-text a h4:hover{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
a.coll-btn:hover{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;  
}
a.coll-btn{
  color: #fff !important;
}
.team-icon > a {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
  }
.team-icon > a:hover i{
  transition:all .4s;
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.client-text > h4 {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.testimonial-area .owl-carousel .owl-dot.active {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
  height: 14px;
  width: 14px;
}
.progress-bar > span {
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
  float: right;
  font-size: 11px;
  margin-top: -34px;
  padding: 4px 5px;
  position: relative;
}
.progress-bar > span::before {
    border-top-color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    border-width: 5px;
    left: 50%;
    margin-left: -5px;
}
.progress-bar {
    background-color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;}
.single-price:hover .price-btn button{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color:#fff;
    border: 1px solid #fff; 
}
.single-price:hover .price-title > h4 {
  color:#fff;
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.single-price.active .price-btn button{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color:#fff;
    border: 1px solid #fff; 
}
.single-price.active .price-title > h4{
  color:#fff;
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.blog-info h4 a:hover{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.blog-info > a:hover{
    color: #fff;
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;  
} 
.blog-date a:hover {
  color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.widget-posts-info a.post_title:hover {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.widget-list li a:hover {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
ul.widget-tags li a:hover {
    background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
    color: #ffffff;
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;  
}
.blog-meta a:hover {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.media-body > h3 a:hover{
  color:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
a.reply-link:hover {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.text-leave button:hover {
    background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    color: #ffffff;
}
.callto-btn a:hover{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color:#fff;
} 
.contact-sochil-icon  a:hover{
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    color:#fff; 
}
.cont-submit {
  background: #fff;
  border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  display: inline-block;
  font-size: 18px;
  font-weight: 700;
  margin-top: 40px;
  padding: 8px 30px;
  text-transform: capitalize;
  transition: all 0.4s ease 0s;
}
.cont-submit:hover{
  color:#fff;
  background:<?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
a#scrollUp {
  bottom: 30px;
  position: absolute;
  width: 40px;
  height: 40px;
  right: 30px;
  background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
  color: #fff;
  text-align: center;
  font-size: 30px;
  border-radius: 4px;
}
#wp-calendar tbody td#today {background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>; color: #fff;}
.form-submit input.submit:hover{
    background: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
    color: #ffffff;
}
a.comment-reply-link:hover {
    color: <?php echo esc_attr($miex_redux_demo['main-color-1']); ?>;
}
.contact-form .cont-submit {
    border: 1px solid <?php echo esc_attr($miex_redux_demo['main-color-1']); ?> !important;
    width: auto;
    border-radius: 0px !important;
    }