<?php 
$kindaid_post_gallery = function_exists('tpmeta_gallery_field') ? tpmeta_gallery_field('kindaid_post_gallery') : '';
if(is_single()) :  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-30'); ?>>
        <div class="tp-postbox-thumb mb-30">
            <div class="swiper-container tp-postbox-gallery-active">
                <div class="swiper-wrapper">
                    <?php 
                    if ( ! empty($kindaid_post_gallery) && is_array($kindaid_post_gallery) ) :
                    foreach ($kindaid_post_gallery as $image_id) : ?>
                        <div class="swiper-slide">
                            <div class="tp-postbox-thumb-overlay">
                                <img src="<?php echo esc_url( $image_id['url'] ); ?>" alt="">
                            </div>
                        </div>
                        <?php 
                        endforeach;
                    endif; 
                    ?>
                </div>
            </div>
            <div class="tp-blog-gallery-arrow">
                <button class="tp-gallery-arrow-prev tp-gallery-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="tp-gallery-arrow-next tp-gallery-arrow ml-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

        </div>
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
    <div class="tp-postbox-thumb mb-30">
        <div class="swiper-container tp-postbox-gallery-active">
            <div class="swiper-wrapper">
                <?php 
                if ( ! empty($kindaid_post_gallery) && is_array($kindaid_post_gallery) ) :
                foreach ($kindaid_post_gallery as $image_id) : ?>
                    <div class="swiper-slide">
                        <div class="tp-postbox-thumb-overlay">
                            <img src="<?php echo esc_url( $image_id['url'] ); ?>" alt="">
                        </div>
                    </div>
                    <?php 
                    endforeach;
                endif; 
                ?>
            </div>
        </div>
        <div class="tp-blog-gallery-arrow">
            <button class="tp-gallery-arrow-prev tp-gallery-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="tp-gallery-arrow-next tp-gallery-arrow ml-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

         <?php get_template_part( 'templates/template-parts/blog/blog-category/blog-category' ); ?>

    </div>
    <div class="tp-postbox-content">
        <?php get_template_part( 'templates/template-parts/blog/blog-meta/blog-meta' ); ?>

        <h2 class="tp-postbox-title mb-15"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
        <?php get_template_part( 'templates/template-parts/blog/blog-button/blog-btn' ); ?>

    </div>
</article>
<?php 
endif; ?>