<!DOCTYPE html>

<html lang="zxx">

<?php $miex_redux_demo = get_option('redux_demo'); ?>

<head>

    <!-- Meta Tags -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {

        ?>

    <link rel="shortcut icon" href="<?php if(isset($miex_redux_demo['favicon']['url'])){?><?php echo esc_url($miex_redux_demo['favicon']['url']); ?><?php }?>">

    <?php }?>

    <?php wp_head(); ?> 



</head>



<body <?php body_class(); ?>>





    <div class="page-wrapper" id="home">



        

        <div class="preloader">

            <div class="dots">

                <span></span>

                <span></span>

                <span></span>

                <span></span>

            </div>

        </div>





        <header id="header" class="site-header header-style-2">

            <nav class="navigation navbar navbar-default">

                <div class="site-logo">

                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($miex_redux_demo['logo']['url']); ?>" alt></a>

                </div>

                <div class="container">

                    <div class="navbar-header">

                        <button type="button" class="open-btn">

                            <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'miex' ) ?></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                    </div>

                    <div id="navbar" class="navbar-collapse navbar-right collapse navigation-holder">

                        <button class="close-navbar"><i class="fa fa-close"></i></button>

                        <?php 

                          wp_nav_menu( 

                          array( 

                            'theme_location' => 'home-3',

                            'container' => '',

                            'menu_class' => '', 

                            'menu_id' => '',

                            'menu'            => '',

                            'container_class' => '',

                            'container_id'    => '',

                            'echo'            => true,

                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                             'walker'            => new miex_wp_bootstrap_navwalker(),

                            'before'          => '',

                            'after'           => '',

                            'link_before'     => '',

                            'link_after'      => '',

                            'items_wrap'      => '<ul  class="nav navbar-nav  %2$s">%3$s</ul>',

                            'depth'           => 0,        

                              )

                           ); ?>

                    </div><!-- end of nav-collapse -->

                </div><!-- end of container -->

            </nav>

        </header>

        <!-- end of header -->



