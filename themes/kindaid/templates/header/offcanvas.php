<?php 
    $offcanvas_title   = esc_html( get_theme_mod( 'offcanvas_title', esc_html__( 'Hello There!', 'kindaid' ) ) );
    $offcanvas_sub_des   = esc_html( get_theme_mod( 'offcanvas_sub_des', esc_html__( 'Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kindaid' ) ) );
    $gallery_items = get_theme_mod('offcanvas_gallery_images', get_template_directory_uri() . '/assets/img/gallery/gallery-1.jpg');
    $offcanvas_title   = esc_html( get_theme_mod( 'offcanvas_title', esc_html__( 'Hello There!', 'kindaid' ) ) );
    $offcanvas_info_title   = esc_html( get_theme_mod( 'offcanvas_info_title', esc_html__( 'Information', 'kindaid' ) ) );
    $offcanvas_info_phone   = esc_html( get_theme_mod( 'offcanvas_info_phone', esc_html__( '+ 4 20 7700 1007', 'kindaid' ) ) );
    $offcanvas_info_phone_url = esc_url( get_theme_mod( 'offcanvas_info_phone_url', '#' ) );
    $offcanvas_info_email   = esc_html( get_theme_mod( 'offcanvas_info_email', esc_html__( 'hello@exdos.com', 'kindaid' ) ) );
    $offcanvas_info_email_url   = esc_url( get_theme_mod( 'offcanvas_info_email_url', '#' ) );
    $offcanvas_info_address   = esc_html( get_theme_mod( 'offcanvas_info_address', esc_html__( 'Avenue de Roma 158b, Lisboa', 'kindaid' ) ) );

    $has_offcanvas_info = $offcanvas_info_title || $offcanvas_info_phone || $offcanvas_info_email || $offcanvas_info_address;
?>
   
   <!-- tp-offcanvas start -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-header mb-50">
         <div class="tp-offcanvas-logo">
            <?php kindaid_offcanvas_logo(); ?>
         </div>
         <div class="tp-offcanvas-close">
            <button class="tp-offcanvas-close-button"><i class="fal fa-times"></i></button>
         </div>
      </div>
      <div class="tp-offcanvas-menu mb-50">
         <nav> 
         </nav>
      </div>

      <?php 
      if ( !empty($offcanvas_title) || !empty($offcanvas_sub_des) ) : ?>
        <div class="tp-offcanvas-content mb-40">
            <?php 
            if ( !empty($offcanvas_title) ) : ?>
                <h3 class="tp-offcanvas-title"><?php echo $offcanvas_title; ?></h3>
            <?php 
            endif; ?>

            <?php 
            if ( !empty($offcanvas_sub_des) ) : ?>
                <p><?php echo $offcanvas_sub_des; ?></p>
            <?php 
            endif; ?>
        </div>
      <?php 
      endif; ?>

      <?php 
      if ( !empty( $gallery_items ) ) : ?>
        <div class="tp-offcanvas-gallery mb-50">
            <?php 
            foreach ( $gallery_items as $item ) : 
                if ( empty( $item['image'] ) ) {
                    continue;
                }
            ?>
                <a class="popup-image" href="<?php echo esc_url($item['image']); ?>"><img src="<?php echo esc_url($item['image']); ?>  " alt=""></a>
            <?php 
            endforeach; ?>
        </div>
      <?php 
      endif; ?>

    <?php 
    if( $has_offcanvas_info ) : ?>
        <div class="tp-offcanvas-info mb-50">
            <?php 
            if ( $offcanvas_info_title ) : ?>
                <h3 class="tp-offcanvas-title"><?php echo $offcanvas_info_title; ?></h3>
            <?php 
            endif; ?>

            <?php 
            if ( $offcanvas_info_phone ) : ?>
                <span><a href="<?php echo $offcanvas_info_phone_url; ?>"><?php echo $offcanvas_info_phone; ?></a></span>
            <?php 
            endif; ?>

            <?php 
            if ( $offcanvas_info_email ) : ?>
                <span><a href="<?php echo $offcanvas_info_email_url; ?>"><?php echo $offcanvas_info_email; ?></a></span>
            <?php 
            endif; ?>

            <?php 
            if ( $offcanvas_info_address ) : ?>
                <span><a href="#"><?php echo $offcanvas_info_address; ?></a></span>
            <?php 
            endif; ?>
        </div>
      <?php 
      endif; ?>

      <div class="tp-offcanvas-social">
         <h3 class="tp-offcanvas-title"> Follow Us</h3>
         <?php kindaid_social_info(); ?>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- tp-offcanvas end -->

