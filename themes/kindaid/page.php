<?php 
    get_header(); 
    $post_center = is_active_sidebar( 'blog-sidebar' ) ? '' : 'justify-content-center';
?>

      <div class="tp-blog-post-area pt-120 pb-80">
         <div class="container container-1424">
            <div class="tp-postbox-wrapper mr-85 mb-40">
               <?php 
                  if ( have_posts() ) : ?>
   
                  <?php 
                  while ( have_posts() ) : the_post(); ?>
                  
                     <?php echo  get_template_part( 'templates/template-parts/content', 'page' ); ?>

                  <?php 
                  endwhile; ?>

                  <?php 
                  else : ?>
                     <p>No posts found.</p>
                  <?php 
                  endif; ?>

               <div class="tp-pagination mt-40">
                  <?php kindaid_pagination(); ?>
               </div>
            </div>
         </div>
      </div>

<?php 
get_footer();