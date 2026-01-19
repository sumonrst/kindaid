<?php 
    get_header(); 
?>



      <div class="tp-blog-post-area pt-120 pb-80">
         <div class="container container-1424">
            <div class="row">
               <div class="col-xl-9 col-lg-8">
                  <div class="tp-postbox-wrapper mr-85 mb-40">

                    <?php 
                    if ( have_posts() ) : ?>
    
                    <?php 
                    while ( have_posts() ) : the_post(); ?>
                    
                        <?php 
                        get_template_part( 'templates/template-parts/content', get_post_format() ); ?>

                    <?php 
                    endwhile; ?>

                    <?php 
                    else : ?>
                        <p>No posts found.</p>
                    <?php 
                    endif; ?>

                     <div class="tp-pagination mt-40">

                     <?php kindaid_pagination(); ?>
                        <!-- <ul>
                           <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                           <li><a href="#"><span>01</span></a></li>
                           <li class="current"><a href="#"><span >02</span></a></li>
                           <li><a href="#"><span>03</span></a></li>
                           <li><a href="#"><span>04</span></a></li>
                           <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                        </ul> -->
                     </div>

                  </div>
               </div>

               <div class="col-xl-3 col-lg-4">
                  <div class="tp-blog-sidebar mb-40">
                     <?php get_sidebar(); ?>
                  </div>
               </div>

            </div>
         </div>
      </div>






<?php 
get_footer();