<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<div class="comments">
  <?php if ( have_comments() ) : ?>
                            <div class="title">
                                <h3><?php comments_number( esc_html__('0 Comments', 'miex'), esc_html__('1 Comment', 'miex'), esc_html__('% Comments', 'miex')); ?></h3>
                            </div>

                            <ol>
                                <?php wp_list_comments('callback=miex_theme_comment'); ?>
                            </ol>
        <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( array('prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>'));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php endif; ?>
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'comment',        
                'class_form' => 'clearfix',                         
                'title_reply'=> esc_html__( 'Leave a Comment', 'miex' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col col-md-6">
                                        <input type="text" class="form-control" placeholder="Full Name" name="author">
                                  </div>',
                    'email' => '<div class="col col-md-6">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>',                                                                            
                ) ),   
                'comment_field' => '<div class="col col-xs-12">
                                        <textarea name="comment"'.$aria_req.' class="form-control" placeholder="'.esc_attr__('Write a comment..', 'miex').'"></textarea>
                                    </div>',                    
                 'label_submit' => 'Post Comment',
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
  <?php if ( comments_open() ) : ?>
      <div class="comment-respond">
    <?php comment_form($comment_args); ?>
    </div>
                        <?php endif; ?> 
</div> <!-- end comments -->