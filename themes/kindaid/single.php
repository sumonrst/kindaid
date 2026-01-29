<?php 
    get_header(); 
    $post_center = is_active_sidebar( 'blog-sidebar' ) ? '' : 'justify-content-center';
?>
      <div class="tp-blog-post-area pt-120 pb-80">
         <div class="container container-1424">
            <div class="row <?php echo esc_attr( $post_center ); ?>">
               <div class="col-xl-9 col-lg-8">
                  <div class="tp-postbox-wrapper tp-postbox-details-wrap mr-85 mb-40">

                    <?php 
                    if ( have_posts() ) : ?>
    
                    <?php 
                    while ( have_posts() ) : the_post(); ?>
                    
                        <?php 
                        echo get_template_part( 'templates/template-parts/content', get_post_format() ); ?>

                    <?php 
                    endwhile; ?>

                    <?php 
                    else : ?>
                        <p>No posts found.</p>
                    <?php 
                    endif; ?>

                    <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        if ( $prev_post || $next_post ) :
                     ?>
                        <div class="tp-blog-navigation-wrap mb-35 mt-70">
                           <div class="row justify-content-between">
                              
                                 <div class="col-xl-5 col-lg-6 col-md-6">
                                    <?php 
                                    if ( $prev_post ) : ?>
                                       <div class="tp-blog-navigation mb-30">
                                          <a href="<?php echo esc_url( get_permalink($prev_post->ID) ); ?>">
                                             <i class="far fa-arrow-left"></i>
                                             <div class="tp-blog-navigation-text">
                                                <span>Previous Post</span>
                                                <h4 class="tp-blog-navigation-title"><?php echo esc_html( wp_trim_words( get_the_title($prev_post->ID), 8 ) ); ?></h4>
                                             </div>
                                          </a>
                                       </div>
                                    <?php 
                                    endif; ?>
                                 </div>

                                 <div class="col-xl-5 col-lg-6 col-md-6">
                                    <?php 
                                    if ( $next_post ) : ?>
                                       <div class="tp-blog-navigation mb-30 text-end">
                                          <a class="justify-content-end" href="<?php echo esc_url( get_permalink($next_post->ID) ); ?>">                                      
                                             <div class="tp-blog-navigation-text">
                                                <span>Next Post</span>
                                                <h4 class="tp-blog-navigation-title"><?php echo esc_html( wp_trim_words( get_the_title($next_post->ID), 8 ) ); ?></h4>
                                             </div>
                                             <i class="far fa-arrow-right"></i>
                                          </a>
                                       </div>
                                    <?php 
                                    endif; ?>
                                 </div>
                           </div>
                        </div>
                     <?php 
                     endif; ?>

  

                     <div class="tp-blog-tag-social">
                        <div class="row">
                           
                           <div class="col-xl-8">
                              <?php Kindaid_post_tags(); ?>
                           </div>

                           <div class="col-xl-4">
                              <?php Kindaid_post_share_links(); ?>
                           </div>

                        </div>
                     </div>


                     <?php 
                     if ( comments_open() || get_comments_number() ) :
                        comments_template();
                     endif; ?>

                  </div>
               </div>

               <?php 
               if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                  <div class="col-xl-3 col-lg-4">
                     <div class="tp-blog-sidebar mb-40">
                        <?php get_sidebar(); ?>
                     </div>
                  </div>
               <?php 
               endif; ?>

            </div>
         </div>
      </div>


<?php 
get_footer();