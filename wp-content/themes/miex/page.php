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

<div class="blog-banar"><h3><?php the_title();?></h3></div>


        <!-- start blog-single-section -->
        <section class="blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="post">
                            <div class="entry-body">
                                <div class="single-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages( array(
                                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'miex' ),
                                'after'       => '</div>',
                                'link_before' => '<span class="page-number">',
                                'link_after'  => '</span>',
                            ) ); ?>
                                </div>
                                <?php           
                                if ( comments_open() || get_comments_number() ) {
                                  comments_template();
                                }
                                ?>
                            </div>
                        </div>
<?php endwhile; ?>                 
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
<?php
get_footer();
?>
    