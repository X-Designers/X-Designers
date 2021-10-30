<?php $miex_redux_demo = get_option('redux_demo');?> 
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer-area-1' ); ?>
                                  <?php endif; ?>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6">
                            <div class="widget contact-widget">
                                <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer-area-2' ); ?>
                                  <?php endif; ?>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget recent-post-widget">
                                <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer-area-3' ); ?>
                                  <?php endif; ?>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget quick-links-widget">
                                <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer-area-4' ); ?>
                                  <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end upper-footer -->
            <div class="copyright-info">
                <div class="container">
                    <p> <?php if(isset($miex_redux_demo['footer_text2'])){?>
                        <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['footer_text2'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( '2018 © All Rights Reserved by Themexriver', 'miex' );
                        }
                        ?></p>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
<?php wp_footer(); ?>
</body>
</html>