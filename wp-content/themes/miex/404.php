<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $miex_redux_demo = get_option('redux_demo');
get_header(); ?> 
<?php if(isset($miex_redux_demo['404_image']['url']) && $miex_redux_demo['404_image']['url'] != ''){?>
<div class="breadcrumb-area opacity-1" style="    background: rgba(0, 0, 0, 0) url(<?php echo esc_url($miex_redux_demo['404_image']['url']);?>) no-repeat scroll center center / cover;
    padding-bottom: 100px;
    padding-top: 150px;
    position: relative;">
<?php }else{?>
<div class="breadcrumb-area opacity-1">
<?php } ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumbs text-center page-404">
              <h2><?php echo esc_html__( '404 Page', 'miex' );?></h2>
              <div class="list-o-i">
            <h4 class=" no-p pd-bt-40"><?php echo esc_html__( 'Oops! This Server Page not be found.', 'miex' );?> </h4>
        <div class="blog-info">
        <a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html__( 'Back To Home page', 'miex' );?></a>
                                    </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php get_footer(); ?>