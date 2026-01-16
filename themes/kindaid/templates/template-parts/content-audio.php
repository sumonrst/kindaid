
<?php 

    $kindaid_post_audio_url = function_exists('tpmeta_field') ? tpmeta_field('kindaid_post_audio_url') : ''; 

    //var_dump($kindaid_post_gallery);

    // echo '<pre>';
    // print_r( $kindaid_post_audio_url );
    // echo '</pre>';
    
?>



<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-30'); ?>>
    <div class="tp-postbox-thumb ratio ratio-16x9 mb-30">
        <?php echo wp_oembed_get($kindaid_post_audio_url); ?>
    </div>
    <div class="tp-postbox-content">
        <?php get_template_part( 'templates/template-parts/blog/blog-meta/blog-meta' ); ?>

        <h2 class="tp-postbox-title mb-15"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
        <?php get_template_part( 'templates/template-parts/blog/blog-button/blog-btn' ); ?>

    </div>
</article>







