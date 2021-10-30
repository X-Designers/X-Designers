<?php
 $miex_redux_demo = get_option('redux_demo');
get_header(); ?>

              <h2 class="text-center"><?php printf( esc_html__( 'Search Results for: %s', 'miex' ), get_search_query() ); ?></h2>

    <!-- breadcrumb-area-end -->
    <!-- blog-area-start -->
    <section class="blog-main-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="blog-grids">
                          <?php if ( have_posts() ) :
                              while (have_posts()): the_post(); 
                          ?>
                          <?php $single_video = get_post_meta(get_the_ID(),'_cmb_single_video', true); ?>
                          <?php if ( has_post_format('video') ) { ?>
                            <div class="grid video-post">
                                <div class="entry-media">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>
                                    <div class="video-holder">
                                        <a href="<?php echo esc_url($single_video);?>" class="video-btn" data-type="iframe">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>                                    
                                </div>
                              <?php } else { ?>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt>
                                </div>
                              <?php } ?>
                                <div class="entry-title-meta">
                                    <ul class="entry-meta">
                                        <li><a href="#"><?php the_time(get_option( 'date_format' ));?></a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'miex'), 
                              esc_html__('1 Comment', 'miex'), esc_html__('% Comments', 'miex') ); ?></a></li>
                                        <li><a href="#"><i class="fa fa-tag"></i> <?php echo get_the_tag_list(); ?></a></li>
                                    </ul>
                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                </div>
                                <div class="entry-body">
                                    <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(miex_excerpt(50)); 
                                }
                                ?></p>
                                    <a href="<?php the_permalink();?>" class="read-more"><?php if(isset($miex_redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($miex_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'read more', 'miex' );
                                    }
                                    ?></a>
                                </div>
                            </div>
                          <?php endwhile; else :?>
                            <div class="search-custom" ><h4><?php
                                // If no content, include the "No posts found" template.
                                echo esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'miex' ) ;?></h4>
                
                            <?php get_search_form();  ?>
                            </div>
                            <?php endif;?>
                            
                          <div class="pagination-wrapper">
                              <?php miex_pagination();?>
                          </div>                        
                        </div>
                      </div>
                  <div class="col col-md-4">
                        <div class="blog-sidebar">
                            <?php get_sidebar();?>
                        </div>                        
                    </div>
              </div>
          </div> <!-- end container -->
      </section>
<?php
get_footer();
?>