   <footer>

      <!-- tp-footer-area-start -->
      <div class="tp-footer-area bg-position pt-130" data-img-bg="<?php echo get_template_directory_uri(); ?>/assets/img/footer/bg.jpg">
         <div class="container container-1424">
            <div class="row pb-60">
               <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                  <?php 
                  if ( is_active_sidebar( 'footer-1-widget-1' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-1-widget-1' ); ?>
                  <?php 
                  endif; ?>
               </div>            
               <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <?php 
                  if ( is_active_sidebar( 'footer-1-widget-2' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-1-widget-2' ); ?>
                  <?php 
                  endif; ?>
               </div>
               <div class="col-xxl-3 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                  <?php 
                  if ( is_active_sidebar( 'footer-1-widget-3' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-1-widget-3' ); ?>
                  <?php 
                  endif; ?>
               </div>
               <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                  <?php 
                  if ( is_active_sidebar( 'footer-1-widget-4' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-1-widget-4' ); ?>
                  <?php 
                  endif; ?>
               </div>
            </div>
         </div>
         <div class="tp-footer-bottom">
            <div class="container container-1424">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-footer-copyright mb-20">
                        <p class="mb-0">© 2025 Charity. is Proudly Powered by <a href="#">Aqlova</a></p>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tp-footer-policy mb-20 text-lg-end">
                        <a class="dvdr" href="#">Terms & Condition</a>
                        <a href="#">Privacy Policy</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-footer-area-end -->

   </footer>


   <?php wp_footer(); ?>

</body>

</html>