   <!--search-form-start -->
   <div class="tp-search-body-overlay"></div>
   <div class="tp-search-form-toggle">
      <div class="container">
         <div class="row mb-70">
            <div class="col-lg-12">
               <div class="tp-search-top d-flex justify-content-between align-items-center">
                  <div class="cm-search-logo">
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img data-width="108" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                     </a>
                  </div>
                  <button class="tp-search-close">
                     <i class="fa-light fa-xmark"></i>
                  </button>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="tp-search-form">
                  <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                     <div class="tp-search-form-input">
                        <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__('What are you looking for?', 'kindaid'); ?>" required>
                        <span class="tp-search-focus-border"></span>
                        <button class="tp-search-form-icon" type="submit">
                           <i class="fa-sharp fa-regular fa-magnifying-glass"></i>
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search-form-end -->   