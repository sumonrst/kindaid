

<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-30'); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="tp-postbox-thumb mb-30">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full', array('class' => 'w-100')); ?>
            </a>
            <div class="tp-postbox-cat">
                <?php 
                // ক্যাটাগরি ডাইনামিক করার নিয়ম
                $categories = get_the_category();
                if ( ! empty( $categories ) ) : ?>
                    <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.86489 8.14369L6.35396 12.6328C6.47025 12.7492 6.60835 12.8415 6.76036 12.9046C6.91238 12.9676 7.07532 13 7.23987 13C7.40443 13 7.56737 12.9676 7.71938 12.9046C7.8714 12.8415 8.0095 12.7492 8.12579 12.6328L13.5039 7.2609V1H7.24301L1.86489 6.37811C1.63167 6.61273 1.50077 6.93009 1.50077 7.2609C1.50077 7.59171 1.63167 7.90908 1.86489 8.14369Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo esc_html( $categories[0]->name ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="tp-postbox-content">
        <div class="tp-postbox-meta mb-15">
            <span>
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> 
                    <?php echo esc_html__( 'By', 'your-text-domain' ); ?> <?php the_author(); ?>
                </a>
            </span>
            <span>
                <a href="<?php the_permalink(); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <?php echo get_the_date(); ?>
                </a>
            </span>
            <span>
                <a href="<?php comments_link(); ?>">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 7.61112C15.0027 8.63769 14.7628 9.65036 14.3 10.5667C13.7512 11.6647 12.9076 12.5882 11.8636 13.2339C10.8195 13.8795 9.6164 14.2217 8.38888 14.2222C7.36231 14.2249 6.34964 13.9851 5.43333 13.5222L1 15L2.47778 10.5667C2.01494 9.65036 1.7751 8.63769 1.77778 7.61112C1.77825 6.3836 2.12047 5.18046 2.76611 4.13644C3.41175 3.09243 4.3353 2.24879 5.43333 1.70002C6.34964 1.23719 7.36231 0.997346 8.38888 1.00002H8.77777C10.3989 1.08946 11.9301 1.77372 13.0782 2.9218C14.2263 4.06987 14.9105 5.60108 15 7.22223V7.61112Z" stroke="#5A5860" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <?php comments_number( esc_html__( '0 Comments', 'your-text-domain' ), esc_html__( '1 Comment', 'your-text-domain' ), esc_html__( '% Comments', 'your-text-domain' ) ); ?>
                </a>
            </span>
        </div>
        
        <h2 class="tp-postbox-title mb-15">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <div class="tp-postbox-text">
            <?php the_excerpt(); ?>
        </div>

        <div class="tp-postbox-btn mt-35">
            <a class="tp-btn tp-btn-animetion mr-5 mb-10" href="<?php the_permalink(); ?>">
                <span class="btn-text"><?php echo esc_html__( 'Read More', 'your-text-domain' ); ?></span>
                <span class="btn-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</article>