
<?php 
    // $get_category = get_the_category();
    // $cat_name = $get_category[0]->name;
    // $cat_link = get_category_link( $get_category[0]->term_id );

    $kindaid_post_video_url = function_exists('tpmeta_field') ? tpmeta_field('kindaid_post_video_url') : '';
    $video_overlay = $kindaid_post_video_url ? 'tp-postbox-thumb-overlay' : '';
    
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-30'); ?>>
<?php 
if ( has_post_thumbnail() ) : ?>
    <div class="tp-postbox-thumb <?php echo esc_attr($video_overlay); ?> mb-30">
            <?php 
            the_post_thumbnail('large', array('class' => 'w-100')); ?>

        <?php 
        if ( ! empty( $kindaid_post_video_url ) ) : ?>
            <div class="tp-postbox-video">
                <a class="popup-video" href="<?php echo esc_url($kindaid_post_video_url); ?>">
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.24635e-08 1.80425C2.3978e-08 1.01881 0.863951 0.539969 1.53 0.956249L14.6432 9.152C15.2699 9.54367 15.2699 10.4563 14.6432 10.848L1.53 19.0438C0.863949 19.46 4.46728e-07 18.9812 4.28243e-07 18.1958L4.24635e-08 1.80425Z" fill="#0E0F11"/>
                    </svg>
                </a>
            </div>
        <?php 
        endif; ?>

        <?php get_template_part( 'templates/template-parts/blog/blog-category/blog-category' ); ?>

    </div>
<?php 
endif; ?>

<div class="tp-postbox-content">

    <?php get_template_part( 'templates/template-parts/blog/blog-meta/blog-meta' ); ?>

    <h2 class="tp-postbox-title mb-15"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); ?></p>
    <?php get_template_part( 'templates/template-parts/blog/blog-button/blog-btn' ); ?>
</div>
</article>


