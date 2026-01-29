<?php 
$kindaid_post_audio_url = function_exists('tpmeta_field') ? tpmeta_field('kindaid_post_audio_url') : ''; 
if(is_single()) :  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-30'); ?>>
        <?php 
        if ( ! empty( $kindaid_post_audio_url ) ) : ?>
            <div class="tp-postbox-thumb ratio ratio-16x9 mb-30">
                <?php echo wp_oembed_get($kindaid_post_audio_url); ?>
            </div>
        <?php 
        endif; ?>
        
        <div class="tp-postbox-content">
            <?php get_template_part( 'templates/template-parts/blog/blog-category/blog-category' ); ?>

            <h2 class="tp-postbox-title mb-15"><?php the_title(); ?></h2>
            
            <?php get_template_part( 'templates/template-parts/blog/blog-meta/blog-meta' ); ?>

            <div class="tp-postbox-details-content mb-30">
                <?php 
                the_content(); ?>
            </div>

        </div>
    </article>

<?php else : ?>



<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-30'); ?>>
    <?php 
    if ( ! empty( $kindaid_post_audio_url ) ) : ?>
        <div class="tp-postbox-thumb ratio ratio-16x9 mb-30">
            <?php echo wp_oembed_get($kindaid_post_audio_url); ?>
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
<?php 
endif; ?>







