<?php 

$textdoimain = 'miex';

$miex_redux_demo = get_option('redux_demo');

global $pre_text;



$pre_text = 'VG ';

//add



//Sention Hero





add_shortcode('slider_area', 'slider_area_func');

function slider_area_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'link' => '',

        'text_btn' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?>

    <section class="hero-section" >

                <div class="hero-img">

                    <img src="<?php echo esc_url($images[0]);?>" alt>

                </div>

                <div class="container">

                    <div class="row">

                        <div class="col col-md-7 col-sm-8">

                            <div class="content">

                                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                                <div class="btns">

                                    <a href="<?php echo esc_url($link); ?>" class="theme-btn"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section> 

<?php  return ob_get_clean();

}  



add_shortcode('about_area', 'about_area_func');

function about_area_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'image' => '',

        'link' => '',

        'text' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <section class="about-section" id="about">

      <div class="content">

          <div class="left-grid" style="   background: url(<?php echo esc_url($images[0]);?>) center center/cover no-repeat local;

    width: calc(50% - 160px);

    height: 100%;

    float: left;

    position: absolute;

    left: 0;"></div>

          <div class="right-grid">

              <div class="inner">

                  <div class="section-title">

                      <span><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></span>

                      <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                  </div>

                  <div class="details">

                      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>

                  </div>

                  <div class="video-holder">

                      <a href="<?php echo esc_url($link); ?>" class="video-btn" data-type="iframe">

                          <i class="fa fa-play"></i> <?php echo htmlspecialchars_decode(esc_attr($text));?>

                      </a>

                  </div>

              </div>

          </div>

      </div>

    </section>

<?php  return ob_get_clean();

}







add_shortcode('service_area', 'service_area_func');

function service_area_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'text1' => '',

        'text2' => '',

        'text3' => '',

        'para1' => '',

        'para2' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

        <section class="services-section section-padding" id="services2">

            <div class="container">

              <div class="row">

                <div class="col col-md-5">

                        <div class="section-title-s2">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                        <div class="skills">

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($text1));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="90"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($text2));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="80"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($text3));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="95"></div>

                                </div>

                            </div>

                        </div>                        

                    </div>

                    <div class="col col-md-7">

                        <div class="services-detail-text">

                            <p><?php echo htmlspecialchars_decode(esc_attr($para1));?></p>

                            <p><?php echo htmlspecialchars_decode(esc_attr($para2));?></p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}  



add_shortcode('service_area_1', 'service_area_1_func');

function service_area_1_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'icon' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 



                            <div class="grid">

                                <div class="icon">

                                    <i class="<?php echo esc_attr($icon); ?>"></i>

                                </div>

                                <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                                <p class="sub-grid">Varius blandit sit amet</p>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                            </div>



<?php  return ob_get_clean();

}



add_shortcode('Portfolio', 'Portfolio_func');

function Portfolio_func($atts, $content = null){

    extract(shortcode_atts(array(

        'number'  => '',

        'orderpost' => '',

        'orderby' => '',

        'text' => '',

    ), $atts));

    ob_start(); 

    global $redux_demo;

    ?> 

    <section class="portfolio-section" id="portfolio">

            <div class="portfolio-section-inner">

                <div class="portfolio-grids">

                      <?php 

                    $args = array(   

                                'post_type' => 'Portfolio',   

                                'paged' => $paged,

                                'posts_per_page' => $number,

                                'order' => $orderpost,

                                'orderby' => $orderby, 

                            );  

                            $wp_query = new WP_Query($args);

                            $i = 1;

                            while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                            $cates = get_the_terms(get_the_ID(),'type');

                            $cate_name ='';

                            $cate_slug = '';

                                  foreach((array)$cates as $cate){

                            if(count($cates)>0){

                                $cate_name .= $cate->name.'  ' ;

                                $cate_slug .= $cate->slug .' ';     

                                } 

                                } 

                    ?> 

                    <div class="grid">

                        <div class="img-details">

                            <div class="img-holder">

                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                            </div>

                            <div class="details">

                                <h3><?php the_title(); ?></h3>

                                <span class="cat"><?php echo esc_attr($cate_name);?></span>

                                <a href="<?php the_permalink();?>" class="view-project"><?php echo htmlspecialchars_decode(esc_attr($text));?></a>

                            </div>

                        </div>

                    </div>

                    <?php 

                    endwhile;?>

                </div>

            </div>

    </section>

<?php  return ob_get_clean();

} 



add_shortcode('testimonial', 'testimonial_func');

function testimonial_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'author' => '',

        'position' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <div class="grid">

          <div class="img-holder">

              <img src="<?php echo esc_url($images[0]);?>" alt>

          </div>

          <div class="details">

              <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>

              <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

              <div class="client-info">

                  <h4><?php echo htmlspecialchars_decode(esc_attr($author));?></h4>

                  <span><?php echo htmlspecialchars_decode(esc_attr($position));?></span>

              </div>

              <div class="rating">

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

              </div>

          </div>

      </div>

<?php  return ob_get_clean();

}



 



add_shortcode('team', 'team_func');

function team_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'link' => '',

        'link1' => '',

        'link2' => '',

        'link3' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?>  

            <div class="col col-md-4 col-xs-6">

                <div class="grid">

                    <div class="img-holder">

                        <img src="<?php echo esc_url($images[0]);?>" alt>

                    </div>

                    <div class="details">

                        <h4><?php echo htmlspecialchars_decode(esc_attr($title));?><span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span></h4>

                        <div class="social">

                            <ul>

                                <li><a href="<?php echo esc_url($link); ?>"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="<?php echo esc_url($link1); ?>"><i class="fa fa-pinterest"></i></a></li>

                                <li><a href="<?php echo esc_url($link2); ?>"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="<?php echo esc_url($link3); ?>"><i class="fa fa-dribbble"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

<?php  return ob_get_clean();

} 





add_shortcode('blog', 'blog_func');

function blog_func($atts, $content = null){

    extract(shortcode_atts(array(

        'title' => '',

        'subtitle' => '',

        'number' => '3',

        'orderpost' => '',

        'orderby' => '',

        'link' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    ?>



    <section class="recent-news-section section-padding" id="news">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s3">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                    </div>

                </div>



                 <div class="row">

                  

                    <div class="col col-xs-12">

                        <div class="blog-grids">

                          <?php 

                        $args = array(    

                            'paged' => $paged,

                            'posts_per_page' => $number,

                            'order' => $orderpost,

                            'orderby' => $orderby, 

                            'post_type' => 'post',

                            );

                        $wp_query = new WP_Query($args);

                        $i=1;

                        while ($wp_query -> have_posts()): $wp_query -> the_post();

                    ?>

                            <div class="grid">

                              <?php if ( has_post_thumbnail() ) { ?>

                                <div class="entry-media">

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                </div>

                                <?php } ?>

                                <div class="entry-body">

                                    <span class="cat"><?php 

                                        // Show all category for post

                                        $i = 1; foreach((get_the_category()) as $category) { 

                                        if ($i == 1){echo ''; }else {echo ' , ';}

                                            echo '<a href="'.get_category_link($category->cat_ID).'" rel="category">'.$category->category_nicename . ' '.'</a>'; 

                                            

                                            $i++;

                                        } ?></span>



                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>



                                    <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>

                                <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>

                                <?php }else{?>

                                <?php echo esc_attr(miex_excerpt(20)); 

                                }

                                ?></p>

                                    <div class="read-more-date">

                                        <a href="<?php the_permalink();?>"><?php if(isset($miex_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['read_more']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'read more', 'miex' );

                                    }

                                    ?></a>

                                        <span class="date"><?php the_time(get_option( 'date_format' ));?></span>

                                    </div>

                                </div>

                            </div>

                            <?php endwhile; ?>

                        </div>

                    </div>

                    

                </div>

                <div class="more-news">

                    <a href="<?php echo esc_url($link); ?>" class="theme-btn-s2"><?php echo esc_html__( 'More News', 'miex' ) ?></a>

                </div>

            </div>

        </section>

<?php  return ob_get_clean(); 

}



add_shortcode('callto', 'callto_func');

function callto_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

                    

                        <div class="newsletter-text">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                            <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>

                        </div>

                    

<?php  return ob_get_clean();

}



add_shortcode('contact', 'contact_func');

function contact_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <div class="col col-md-9 col-md-offset-3 contact-1">

          <div class="contact-info ">

              <div>

                  <h5><?php echo htmlspecialchars_decode(esc_attr($title));?></h5>

                  <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

              </div>

          </div>

    </div>

<?php  return ob_get_clean();

}  





add_shortcode('map', 'map_func');

function map_func($atts, $content = null){

    extract(shortcode_atts(array(

        'lat' => '',

        'long' => '',

        'image' => '',

        'zoom' => '',

    ), $atts));

    ob_start(); 

    global $redux_demo;

    $images = wp_get_attachment_image_src($image,'');

    ?>  

     <div class="map-area">

        <div id="googleMap" style="width:100%;height:380px;"></div>

      </div>

     <script src="http://maps.google.com/maps/api/js?key=AIzaSyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM"></script>  

     <script src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">

     (function($) {

    "use strict"

    $(document).ready(function(){



      function initialize() {

 "use strict";

  var mapOptions = {

  zoom: <?php echo esc_attr($zoom);?>,

  scrollwheel: false,

  center: new google.maps.LatLng(<?php echo esc_attr($lat);?>,<?php echo esc_attr($long);?>)

  };



  var map = new google.maps.Map(document.getElementById('googleMap'),

    mapOptions);





  var marker = new google.maps.Marker({

  position: map.getCenter(),

  animation:google.maps.Animation.BOUNCE,

  icon: '<?php echo esc_url($images[0]);?>',

  map: map

  });



}



google.maps.event.addDomListener(window, 'load', initialize);



            });

    })(jQuery);

        </script>



<?php  return ob_get_clean();

} 



/* Home 2 */



add_shortcode('slider_area_2', 'slider_area_2_func');

function slider_area_2_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'image1' => '',

        'link' => '',

        'text_btn' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    $images1 = wp_get_attachment_image_src($image1,''); 

    ?>

    <section class="hero hero-slider-wrapper hero-style-2">

            <div class="hero-slider">

                <div class="slide">

                    <div class="container">

                        <div class="row">

                            <div class="col col-md-6 hidden-sm hidden-xs">

                                <div class="img-holder">

                                    <img src="<?php echo esc_url($images[0]);?>" alt>

                                </div>

                            </div>

                            <div class="col col-md-6 slide-caption">

                                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                                <div class="btns">

                                    <a href="<?php echo esc_url($link); ?>" class="theme-btn"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="slide">

                    <div class="container">

                        <div class="row">

                            <div class="col col-md-6 hidden-sm hidden-xs">

                                <div class="img-holder">

                                    <img src="<?php echo esc_url($images1[0]);?>" alt>

                                </div>

                            </div>

                            <div class="col col-md-6 slide-caption">

                                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                                <div class="btns">

                                    <a href="<?php echo esc_url($link); ?>" class="theme-btn"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('about_area_2', 'about_area_2_func');

function about_area_2_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'subtitle' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'subtitle3' => '',

        'image' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <section class="about-section-s2 section-padding" >

            <div class="vertical-heading">

                <span><?php echo esc_html__( 'about us', 'miex' ) ?></span>

            </div>

            <div class="content">

                <div class="left-col">

                    <div class="inner">

                        <div class="section-title-s2">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                            <div class="text">

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                            </div>

                        </div>



                        <div class="features-grids">

                            <div class="grid">

                                <div class="icon">

                                    <i class="fi flaticon-graphic-design"></i>

                                </div>

                                <div class="details">

                                    <h3><?php echo htmlspecialchars_decode(esc_attr($title1));?></h3>

                                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p>

                                </div>

                            </div>

                            <div class="grid">

                                <div class="icon">

                                    <i class="fi flaticon-quality"></i>

                                </div>

                                <div class="details">

                                    <h3><?php echo htmlspecialchars_decode(esc_attr($title2));?></h3>

                                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>

                                </div>

                            </div>

                            <div class="grid">

                                <div class="icon">

                                    <i class="fi flaticon-technology"></i>

                                </div>

                                <div class="details">

                                    <h3><?php echo htmlspecialchars_decode(esc_attr($title3));?></h3>

                                    <p><?php echo htmlspecialchars_decode(esc_attr($subtitle3));?></p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="right-col">

                    <div class="img-holder">

                        <img src="<?php echo esc_url($images[0]);?>" alt>

                    </div>

                </div>

            </div> <!-- end content -->

        </section>

<?php  return ob_get_clean();

}



add_shortcode('portfolio_2', 'portfolio_2_func');

function portfolio_2_func($atts, $content = null){

    extract(shortcode_atts(array(

        'title' => '',

        'subtitle' => '',

        'subtitle1' => '',

        'number'        => '',

        'orderpost' => '',

        'orderby' => '',

        'text_btn' => '',

    ), $atts));

    ob_start(); 

    global $redux_demo;

    ?> 

    <section class="portfolio-section-s2 section-padding" id="portfolio">

        <div class="vertical-heading-s2">

            <span><?php echo esc_html__( 'our portfolio', 'miex' ) ?></span>

        </div>



        <div class="container">

            <div class="row">

                <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">

                    <div class="section-title-s5">

                        <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col col-xs-12">

                    <div class="sortable-gallery">

                        <div class="gallery-filters portfolio-list">

                            <ul>

                                <li>

                                <a data-filter="*" href="#" class="current"><?php echo esc_html__( 'All', 'miex' ); ?></a>

                                </li>

                                <?php 

                                    $categories = get_terms('type1');   

                                     foreach( (array)$categories as $categorie){

                                        $cat_name = $categorie->name;

                                        $cat_slug = $categorie->slug;

                                ?>

                                <li>

                                <a data-filter=".<?php echo esc_attr($cat_slug);?>" href="#"><?php echo esc_attr($cat_name);?></a>

                                </li>

                                <?php } ?>

                            </ul>

                        </div>



                        <div class="gallery-container portfolio-grids ">

                            <?php 

                            $args = array(   

                                        'post_type' => 'Portfolio2',   

                                        'paged' => $paged,

                                        'posts_per_page' => $number,

                                        'order' => $orderpost,

                                        'orderby' => $orderby, 

                                    );  

                                    $wp_query = new WP_Query($args);

                                    $i = 1;

                                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                                    $cates = get_the_terms(get_the_ID(),'type1');

                                    $cate_name ='';

                                    $cate_slug = '';

                                          foreach((array)$cates as $cate){

                                    if(count($cates)>0){

                                        $cate_name .= $cate->name.'  ' ;

                                        $cate_slug .= $cate->slug .' ';     

                                        } 

                                        } 

                            ?>

                            <div class="grid-item <?php echo esc_attr($cate_slug);?>">

                                <div class="inner">

                                    <?php if ( has_post_thumbnail() ) { ?>

                                    <div class="img-holder">

                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                    </div>

                                    <?php } ?>

                                    <div class="details">

                                        <h3><?php the_title(); ?></h3>

                                        <span class="cat"><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></span>

                                        <a href="<?php the_permalink();?>" class="view-project"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>

                                    </div>

                                    

                                </div>

                            </div>

                            <?php 

                                endwhile;?>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end container -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('testimonial_2', 'testimonial_2_func');

function testimonial_2_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'author' => '',

        'position' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

      <div class="grid">

            <div class="img-holder">

                <img src="<?php echo esc_url($images[0]);?>" alt>

            </div>

            <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>

            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

            <div class="client-info">

                <h4><?php echo htmlspecialchars_decode(esc_attr($author));?></h4>

                <span><?php echo htmlspecialchars_decode(esc_attr($position));?></span>

            </div>

        </div>

<?php  return ob_get_clean();

}



add_shortcode('price', 'price_func');

function price_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'unit' => '',

        'price' => '',

        'month' => '',

        'text_btn' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

        <div class="grid">

            <div class="pricing-header">

                <h4 class="type"><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>

                <div class="price">

                    <h3><span><?php echo htmlspecialchars_decode(esc_attr($unit));?></span><?php echo htmlspecialchars_decode(esc_attr($price));?></h3>

                </div>

                <h5 class="duration"><?php echo htmlspecialchars_decode(esc_attr($month));?></h5>

            </div>

            <div class="pricing-body">

                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                <a href="<?php echo esc_url($link); ?>" class="theme-btn-s3"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>

            </div>

        </div>

<?php  return ob_get_clean();

} 

add_shortcode('blog_2', 'blog_2_func');

function blog_2_func($atts, $content = null){

    extract(shortcode_atts(array(

        'title' => '',

        'subtitle' => '',

        'number' => '3',

        'orderpost' => '',

        'orderby' => '',

        'link' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    ?>



    <section class="recent-news-section section-padding blog-2" id="news">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s3">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                    </div>

                </div>



                 <div class="row">

                  

                    <div class="col col-xs-12">

                        <div class="blog-grids">

                          <?php 

                        $args = array(    

                            'paged' => $paged,

                            'posts_per_page' => $number,

                            'order' => $orderpost,

                            'orderby' => $orderby, 

                            'post_type' => 'post',

                            );

                        $wp_query = new WP_Query($args);

                        $i=1;

                        while ($wp_query -> have_posts()): $wp_query -> the_post();

                    ?>

                            <div class="grid">

                              <?php if ( has_post_thumbnail() ) { ?>

                                <div class="entry-media">

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                </div>

                                <?php } ?>

                                <div class="entry-body">

                                    <span class="cat"><?php 

                                        // Show all category for post

                                        $i = 1; foreach((get_the_category()) as $category) { 

                                        if ($i == 1){echo ''; }else {echo ' , ';}

                                            echo '<a href="'.get_category_link($category->cat_ID).'" rel="category">'.$category->category_nicename . ' '.'</a>'; 

                                            

                                            $i++;

                                        } ?></span>



                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>



                                    <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>

                                <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>

                                <?php }else{?>

                                <?php echo esc_attr(miex_excerpt(20)); 

                                }

                                ?></p>

                                    <div class="read-more-date">

                                        <a href="<?php the_permalink();?>"><?php if(isset($miex_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['read_more']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'read more', 'miex' );

                                    }

                                    ?></a>

                                        <span class="date"><?php the_time(get_option( 'date_format' ));?></span>

                                    </div>

                                </div>

                            </div>

                            <?php endwhile; ?>

                        </div>

                    </div>

                    

                </div>

                <div class="more-news">

                    <a href="<?php echo esc_url($link); ?>" class="theme-btn-s2">More News</a>

                </div>

            </div>

        </section>

<?php  return ob_get_clean(); 

}

add_shortcode('partner', 'partner_func');

function partner_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'image' => '',

        'image1' => '',

        'image2' => '',

        'image3' => '',

        'image4' => '',

        'image5' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    $images1 = wp_get_attachment_image_src($image1,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    $images3 = wp_get_attachment_image_src($image3,''); 

    $images4 = wp_get_attachment_image_src($image4,''); 

    $images5 = wp_get_attachment_image_src($image5,''); 

    ?> 

    <section class="partners-section">

            <h2 class="hidden"><?php echo esc_html__( 'Partners', 'miex' ) ?></h2>

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="partners-slider">

                            <div class="grid">

                                <img src="<?php echo esc_url($images[0]);?>" alt>

                            </div>

                            <div class="grid">

                                <img src="<?php echo esc_url($images1[0]);?>" alt>

                            </div>

                            <div class="grid">

                                <img src="<?php echo esc_url($images2[0]);?>" alt>

                            </div>

                            <div class="grid">

                                <img src="<?php echo esc_url($images3[0]);?>" alt>

                            </div>

                            <div class="grid">

                                <img src="<?php echo esc_url($images4[0]);?>" alt>

                            </div>

                            <div class="grid">

                                <img src="<?php echo esc_url($images5[0]);?>" alt>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- end container -->

        </section>

<?php  return ob_get_clean();

}  



add_shortcode('contact2', 'contact2_func');

function contact2_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'subtitle3' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

                        <div class="contact-info contact-2">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                            <div>

                                <h5><?php echo htmlspecialchars_decode(esc_attr($title1));?></h5>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p>

                            </div>

                            <div>

                                <h5><?php echo htmlspecialchars_decode(esc_attr($title2));?></h5>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>

                            </div>

                            <div>

                                <h5><?php echo htmlspecialchars_decode(esc_attr($title3));?></h5>

                                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle3));?></p>

                            </div>

                        </div>

<?php  return ob_get_clean();

}  



add_shortcode('slider_area_3', 'slider_area_3_func');

function slider_area_3_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'image1' => '',

        'image2' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    $images1 = wp_get_attachment_image_src($image1,''); 

    $images2 = wp_get_attachment_image_src($image2,''); 

    ?>

    <section class="hero-section-s3">

            <div class="container">

                <div class="row">

                    <div class="col col-md-6 col-sm-8">

                        <div class="content">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                            <div class="btns">

                                <a href="#"><img src="<?php echo esc_url($images[0]);?>" alt></a>

                                <a href="#"><img src="<?php echo esc_url($images1[0]);?>" alt></a>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="phone">

                    <img src="<?php echo esc_url($images2[0]);?>" alt>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('features', 'features_func');

function features_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'icon' => '',

    ), $atts));

    ob_start(); 

    ?> 

        <div class="grid">

            <div class="icon">

                <i class="<?php echo esc_attr($icon); ?>"></i>

            </div>

            <div class="details">

                <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>

                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

            </div>

        </div>

<?php  return ob_get_clean();

}  





add_shortcode('about_area_3', 'about_area_3_func');

function about_area_3_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'link' => '',

        'image' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <section class="about-section-s4" id="about">

            <div class="content">

                <div class="left-grid">

                    <div class="video-holder">

                        <a href="<?php echo esc_url($link); ?>" class="video-btn" data-type="iframe">

                            <i class="fa fa-play"></i>

                        </a>

                    </div>

                </div>

                <div class="right-grid">

                    <div class="inner">

                        <div class="section-title">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                        <div class="details">

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>

                        </div>

                        <div class="about-pic">

                            <img src="<?php echo esc_url($images[0]);?>" alt>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('screenshot', 'screenshot_func');

function screenshot_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'image' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <div>

        <img src="<?php echo esc_url($images[0]);?>" alt>

    </div>

<?php  return ob_get_clean();

}





add_shortcode('produce', 'produce_func');

function produce_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'text' => '',

        'title' => '',

        'subtitle' => '',

        'text1' => '',

        'title1' => '',

        'subtitle1' => '',

        'image' => '',

        'image1' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    $images1 = wp_get_attachment_image_src($image1,'');

    ?> 

    <section class="cat-section">

           <div class="container">

                <div class="row first-row">

                    <div class="col col-md-6">

                        <div class="img-holder">

                            <img src="<?php echo esc_url($images[0]);?>" alt>

                        </div>

                    </div>

                    <div class="col col-md-6">

                        <div class="cta-text">

                            <span><?php echo htmlspecialchars_decode(esc_attr($text));?></span>

                            <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                        </div>

                    </div>

                </div>

                <div class="row second-row">

                    <div class="col col-md-6">

                        <div class="cta-text">

                            <span><?php echo htmlspecialchars_decode(esc_attr($text1));?></span>

                            <h3><?php echo htmlspecialchars_decode(esc_attr($title1));?></h3>

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p>

                        </div>

                    </div>

                    <div class="col col-md-6">

                        <div class="img-holder">

                            <img src="<?php echo esc_url($images1[0]);?>" alt>

                        </div>

                    </div>

                </div>

            </div> <!-- end container -->

        </section>

<?php  return ob_get_clean();

}





add_shortcode('testimonial_3', 'testimonial_3_func');

function testimonial_3_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'text' => '',

        'image' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <div class="grid">

        <div class="icon">

            <i class="fi flaticon-quotation"></i>

        </div>

        <div class="client-info">

            <div class="img-holder">

                <img src="<?php echo esc_url($images[0]);?>" alt>

            </div>

            <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>

            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

        </div>

        <div class="details">

            <p><?php echo htmlspecialchars_decode(esc_attr($text));?></p>

            <div class="rating">

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

                <i class="fa fa-star"></i>

            </div>

        </div>

    </div>

<?php  return ob_get_clean();

}



add_shortcode('download', 'download_func');

function download_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'image1' => '',

        'link' => '',

        'link1' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    $images1 = wp_get_attachment_image_src($image1,''); 

    ?> 

    <section class="cta-s2-section section-padding">

            <div class="container">

                <div class="row">

                    <div class="col col-lg-7 col-md-7">

                        <div class="text">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?> <span>Free</span></h2>

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                        </div>

                    </div>

                    <div class="col col-lg-5 col-md-5">

                        <div class="download">

                            <a href="<?php echo esc_url($link); ?>"><img src="<?php echo esc_url($images[0]);?>" alt></a>

                            <a href="<?php echo esc_url($link1); ?>"><img src="<?php echo esc_url($images1[0]);?>" alt></a>

                        </div>

                    </div>

                </div>

            </div> <!-- end container -->

        </section>

<?php  return ob_get_clean();

}



add_shortcode('slider_area_4', 'slider_area_4_func');

function slider_area_4_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'image' => '',

        'link1' => '',

        'link2' => '',

        'link3' => '',

        'link4' => '',

        'link5' => '',

        'link6' => '',

        'icon1' => '',

        'icon2' => '',

        'icon3' => '',

        'icon4' => '',

        'icon5' => '',

        'icon6' => '',

        'text' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <section class="hero-section-s4">

            <div class="container">

                <div class="row">

                    <div class="col col-md-6">

                        <div class="content">

                            <h2><span><?php echo htmlspecialchars_decode(esc_attr($title1));?></span><?php echo htmlspecialchars_decode(esc_attr($title2));?></h2>

                            <h4><?php echo htmlspecialchars_decode(esc_attr($title3));?></h4>

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p>

                            <div class="social">

                                <span><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></span>

                                <ul>

                                    <li><a href="<?php echo esc_url($link1); ?>"><i class="<?php echo esc_attr($icon1); ?>"></i></a></li>

                                    <li><a href="<?php echo esc_url($link2); ?>"><i class="<?php echo esc_attr($icon2); ?>"></i></a></li>

                                    <li><a href="<?php echo esc_url($link3); ?>"><i class="<?php echo esc_attr($icon3); ?>"></i></a></li>

                                    <li><a href="<?php echo esc_url($link4); ?>"><i class="<?php echo esc_attr($icon4); ?>"></i></a></li>

                                    <li><a href="<?php echo esc_url($link5); ?>"><i class="<?php echo esc_attr($icon5); ?>"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="scroll">

                    <a href="<?php echo esc_url($link6); ?>" id="scroll"><?php echo htmlspecialchars_decode(esc_attr($text));?><i class="<?php echo esc_attr($icon6); ?>"></i></a>

                </div>

            </div>



            <div class="hero-left-pic">

                <img src="<?php echo esc_url($images[0]);?>" alt>

            </div>



            <div class="hero-right-pic">

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('about_area_4', 'about_area_4_func');

function about_area_4_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'link' => '',

        'image' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <section class="about-section-s4" >

            <div class="content">

                <div class="left-grid">

                    <div class="video-holder">

                        <a href="<?php echo esc_url($link); ?>" class="video-btn" data-type="iframe">

                            <i class="fa fa-play"></i>

                        </a>

                    </div>

                </div>

                <div class="right-grid">

                    <div class="inner">

                        <div class="section-title">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                        <div class="details">

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>

                        </div>

                        <div class="about-pic">

                            <img src="<?php echo esc_url($images[0]);?>" alt>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('about_me', 'about_me_func');

function about_me_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'title4' => '',

        'number1' => '',

        'number2' => '',

        'number3' => '',

        'number4' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

        <section class="about-section-s5 section-padding" id="about">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <div class="section-title-s9">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                        <div class="about-text">

                            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                        </div>

                        <div class="signature">

                            <img src="<?php echo esc_url($images[0]);?>" alt>

                        </div>

                    </div>



                    <div class="col col-md-6">

                        <div class="skills">

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title1));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number1));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title2));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number2));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title3));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number3));?>"></div>

                                </div>

                            </div>

                            <div class="skill">

                                <h6><?php echo htmlspecialchars_decode(esc_attr($title4));?></h6>

                                <div class="progress">

                                    <div class="progress-bar" data-percent="<?php echo htmlspecialchars_decode(esc_attr($number4));?>"></div>

                                </div>

                            </div>

                        </div>                        

                    </div>

                </div>

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('about_me_1', 'about_me_1_func');

function about_me_1_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'icon' => '',

        'title' => '',

        'subtitle' => '',

    ), $atts));

    ob_start(); 

    ?> 

        <div class="grid">

            <div class="icon">

                <i class="<?php echo esc_attr($icon); ?>"></i>

            </div>

            <div class="details">

                <h3><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>

                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

            </div>

        </div>

<?php  return ob_get_clean();

}



add_shortcode('experiences', 'experiences_func');

function experiences_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'subtitle1' => '',

        'subtitle2' => '',

        'subtitle3' => '',

        'the_time1' => '',

        'the_time2' => '',

        'the_time3' => '',

        'image' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

        <section class="experience-section section-padding" id="experience">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s10">

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col col-xs12">

                        <div class="experience-grids">

                            <div class="grid">

                                <div class="jobtitle">

                                    <h4><?php echo htmlspecialchars_decode(esc_attr($title1));?></h4>

                                    <span><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></span>

                                </div>

                                <div class="job-duration">

                                    <h4><?php echo htmlspecialchars_decode(esc_attr($the_time1));?></h4>

                                </div>

                            </div>

                            <div class="grid grid-s2">

                                <div class="job-duration">

                                    <h4><?php echo htmlspecialchars_decode(esc_attr($the_time2));?></h4>

                                </div>

                                <div class="jobtitle">

                                    <h4><?php echo htmlspecialchars_decode(esc_attr($title2));?></h4>

                                    <span><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></span>

                                </div>

                            </div>

                            <div class="grid">

                                <div class="jobtitle">

                                    <h4><?php echo htmlspecialchars_decode(esc_attr($title3));?></h4>

                                    <span><?php echo htmlspecialchars_decode(esc_attr($subtitle3));?></span>

                                </div>

                                <div class="job-duration">

                                    <h4><?php echo htmlspecialchars_decode(esc_attr($the_time3));?></h4>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- end container -->

            <div class="pencil-box">

                <img src="<?php echo esc_url($images[0]);?>" alt>

            </div>

        </section>

<?php  return ob_get_clean();

}



add_shortcode('education', 'education_func');

function education_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title1' => '',

        'title2' => '',

        'title3' => '',

        'subtitle' => '',

        'text' => '',

    ), $atts));

    ob_start(); 

    ?> 

        <div class="col col-md-6">

            <div class="education-grid">

                <div class="title">

                    <h3><?php echo htmlspecialchars_decode(esc_attr($title1));?><span><?php echo htmlspecialchars_decode(esc_attr($title2));?></span> <?php echo htmlspecialchars_decode(esc_attr($title3));?></h3>

                    <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                </div>

                <div class="details">

                    <p><?php echo htmlspecialchars_decode(esc_attr($text));?></p>

                </div>

            </div>

        </div>

<?php  return ob_get_clean();

}



add_shortcode('testimonial_4', 'testimonial_4_func');

function testimonial_4_func($atts, $content = null){

    extract(shortcode_atts(array( 

        'title' => '',

        'subtitle' => '',

        'image' => '',

        'text' => '',

        'icon' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,''); 

    ?> 

    <div class="grid">

        <div class="client-quote">

            <p><?php echo htmlspecialchars_decode(esc_attr($text));?></p>

            <div class="icon">

                <i class="<?php echo esc_attr($icon); ?>"></i>

            </div>

        </div>



        <div class="client-info">

            <div class="img-holder">

                <img src="<?php echo esc_url($images[0]);?>" alt="">

            </div>

            <h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>

            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

        </div>

    </div>

<?php  return ob_get_clean();

}



add_shortcode('blog_1', 'blog_1_func');

function blog_1_func($atts, $content = null){

    extract(shortcode_atts(array(

        'title' => '',

        'subtitle' => '',

        'number' => '3',

        'orderpost' => '',

        'orderby' => '',

        'link' => '',

    ), $atts));

    ob_start(); 

    $images = wp_get_attachment_image_src($image,'');

    ?>



        <section class="recent-news-section section-padding" id="news">

            <div class="container">

                <div class="row">

                    <div class="col col-xs-12">

                        <div class="section-title-s10">

                            <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>

                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col col-xs-12">

                        <div class="blog-grids">

                          <?php 

                        $args = array(    

                            'paged' => $paged,

                            'posts_per_page' => $number,

                            'order' => $orderpost,

                            'orderby' => $orderby, 

                            'post_type' => 'post',

                            );

                        $wp_query = new WP_Query($args);

                        $i=1;

                        while ($wp_query -> have_posts()): $wp_query -> the_post();

                    ?>

                            <div class="grid">

                              <?php if ( has_post_thumbnail() ) { ?>

                                <div class="entry-media">

                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>

                                </div>

                                <?php } ?>

                                <div class="entry-body">

                                    <span class="cat"><?php 

                                        // Show all category for post

                                        $i = 1; foreach((get_the_category()) as $category) { 

                                        if ($i == 1){echo ''; }else {echo ' , ';}

                                            echo '<a href="'.get_category_link($category->cat_ID).'" rel="category">'.$category->category_nicename . ' '.'</a>'; 

                                            

                                            $i++;

                                        } ?></span>



                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>



                                    <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>

                                <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>

                                <?php }else{?>

                                <?php echo esc_attr(miex_excerpt(20)); 

                                }

                                ?></p>

                                    <div class="read-more-date">

                                        <a href="<?php the_permalink();?>"><?php if(isset($miex_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['read_more']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'read more', 'miex' );

                                    }

                                    ?></a>

                                        <span class="date"><?php the_time(get_option( 'date_format' ));?></span>

                                    </div>

                                </div>

                            </div>

                            <?php endwhile; ?>

                        </div>

                    </div>

                    

                </div>

                <div class="more-news">

                    <a href="<?php echo esc_url($link); ?>" class="theme-btn-s2"><?php echo esc_html__( 'More News', 'miex' ) ?></a>

                </div>

            </div>

        </section>

<?php  return ob_get_clean(); 

}