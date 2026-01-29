<?php 
    get_header(); 
      $error_title_text = get_theme_mod( 'error_title_text', esc_html__( '404', 'kindaid' ) );
      $error_sub_title_text = get_theme_mod( 'error_sub_title_text', esc_html__( 'page not found', 'kindaid' ) );
      $error_description = get_theme_mod( 'error_description', esc_html__( 'page not found', 'kindaid' ) );
      $error_btn_show_hide = get_theme_mod( 'error_btn_show_hide', 'on' );
      $error_button_text = get_theme_mod( 'error_button_text', esc_html__( 'Go To Home', 'kindaid' ) );
      
?>
      <div class="tp-blog-post-area pt-120 pb-80">
         <div class="container container-1424">
            <div class="row justify-content-center">
               <div class="col-xl-8 col-md-9">
                  <div class="tp-postbox-wrapper text-center mr-85 mb-40">
                     <?php 
                     if ( !empty($error_title_text) ) : ?>
                        <h2><?php echo esc_html($error_title_text); ?></h2>
                    <?php 
                    endif; ?>

                     <?php 
                     if ( !empty($error_sub_title_text) ) : ?>
                    <h4><?php echo esc_html($error_sub_title_text); ?></h4>
                    <?php 
                    endif; ?>

                     <?php 
                     if ( !empty($error_description) ) : ?>
                        <p><?php echo esc_html($error_description); ?></p>
                    <?php 
                    endif; ?>

                     <?php 
                     if ( !empty($error_button_text) ) : ?>
                        <div class="tp-hero-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                              <a class="tp-btn tp-btn-animetion mr-5 mb-10" href="<?php echo esc_url( home_url() ); ?>">
                                 <span class="btn-text"><?php echo esc_html($error_button_text); ?></span>
                                 <span class="btn-icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     <?php 
                     endif; ?>

               </div>
            </div>
         </div>
      </div>
<?php 
get_footer();