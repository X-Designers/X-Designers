<?php
/**
 * The Template for displaying all single posts
 */
 $miex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>

<?php $facebook_user = get_the_author_meta('facebook');?>
<?php $twitter_user = get_the_author_meta('twitter');?>
<?php $instagram_user = get_the_author_meta('instagram');?>

<?php $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true); ?>
<?php $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true); ?>
<?php $single_linkedin = get_post_meta(get_the_ID(),'_cmb_single_linkedin', true); ?>

<?php $single_image = get_post_meta(get_the_ID(),'_cmb_single_image', true); ?>
<div class="blog-banar" style ="background: rgba(0, 0, 0, 0) url(<?php echo esc_url($single_image);?>) center center/cover no-repeat local;
width: calc(100% - 40px);
height: 440px;
margin: 20px 0 0 20px;"></div>



        <!-- start blog-single-section -->
        <section class="blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="post">
                            <div class="entry-title-meta">
                                <h3><?php the_title();?></h3>
                                <ul class="entry-meta">
                                    <li><a><?php the_time(get_option( 'date_format' ));?></a></li>
                                    <li><a><i class="fa fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'miex'), 
                              esc_html__('1 Comment', 'miex'), esc_html__('% Comments', 'miex') ); ?></a></li>
                                    <li><i class="fa fa-tag"></i><?php echo get_the_tag_list(); ?></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <div class="single-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="tag-share">
                            <div>
                                <span><?php echo esc_html__( 'Share:', 'miex' ) ?></span>
                                <ul class="share">
                                    <li><a href="<?php echo esc_url($single_facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo esc_url($single_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo esc_url($single_linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
<?php endwhile; ?> 
                        <div class="related-posts">
                            <h4><?php echo esc_html__( 'Relate Posts', 'miex' ) ?></h4>
                            <div class="blog-grids related-posts-slider">
                                <?php $args2 = array(    
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        );
                                    $wp_query2 = new WP_Query($args2);
                                    while ( $wp_query2->have_posts()): $wp_query2->the_post(); 
                                ?>
                                <div class="grid">
                                    <div class="entry-media">
                                        <a href="<?php the_permalink();?>">
                                          <?php if ( has_post_thumbnail() ) { ?>
                                          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="" />
                                          <?php } ?>
                                        </a>
                                    </div>
                                    <div class="entry-body">
                                        <span class="cat"><?php echo get_the_tag_list(); ?></span>
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <p><?php if(isset($miex_redux_demo['blog_excerpt'])){?>
                                            <?php echo esc_attr(miex_excerpt($miex_redux_demo['blog_excerpt'])); ?>
                                            <?php }else{?>
                                            <?php echo esc_attr(miex_excerpt(25)); 
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
<?php 
    while (have_posts()): the_post();
?>
                        <div class="about-author">
                            <h4><?php echo esc_html__( 'About Author', 'miex' ) ?></h4>
                            <div class="inner">
                                <div class="author-pic">
                                    <?php echo get_avatar(get_the_author_meta('user_email'),$size='100',
                                    $default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=100' );?>
                                </div>
                                <div class="author-details">
                                    <h5><?php the_author_posts_link(); ?></h5>
                                    <span class="author-job"><?php echo get_the_author_meta('subtitle');?></span>
                                    <p><?php echo get_the_author_meta('description');?></p>
                                    <ul class="social">
                                        <?php if($facebook_user !=''){?>
                                        <li><a href="<?php echo $facebook_user;?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php } ?>
                                        <?php if($twitter_user !=''){?>
                                        <li><a href="<?php echo $twitter_user;?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php } ?>
                                        <?php if($instagram_user !=''){?>
                                        <li><a href="<?php echo $instagram_user;?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="comments">
                            <?php comments_template();?>  
                        </div> <!-- end comments -->      
                                          
                    </div>
                    <div class="col col-md-4">
                        <div class="blog-sidebar">
                            <?php get_sidebar();?>
                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-section -->               
<?php endwhile; ?>
<?php
get_footer();
?>
    