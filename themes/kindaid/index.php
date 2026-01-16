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
                        <ul>
                           <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                           <li><a href="#"><span>01</span></a></li>
                           <li class="current"><a href="#"><span >02</span></a></li>
                           <li><a href="#"><span>03</span></a></li>
                           <li><a href="#"><span>04</span></a></li>
                           <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                     </div>

                  </div>
               </div>

               <div class="col-xl-3 col-lg-4">
                  <div class="tp-blog-sidebar mb-40">
                     <div class="tp-widget-search mb-20">
                        <form action="#">
                           <input type="text" placeholder="Search...">
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#121018" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M19.0004 19.0004L14.6504 14.6504" stroke="#121018" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </button>
                        </form>
                     </div>
                     <div class="tp-widget-author tp-widget-sidebar text-center mb-20">
                        <div class="tp-widget-author-thumb mb-35 pt-15">
                           <img src="assets/img/blog/sidebar/author.jpg" alt="">
                        </div>
                        <div class="tp-widget-author-content">
                           <span class="tp-widget-author-subtitle d-inline-block mb-5">Author of Blog</span>
                           <h3 class="tp-widget-author-title mb-15"><a href="#">Rosalina Willaim</a></h3>
                           <div class="tp-footer-social justify-content-center">
                              <a href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                              <a href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"/>
                                 </svg>
                              </a>
                              <a href="#">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9.99991" cy="9.99991" r="8.38077" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                              <a href="#">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                    <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>  
                        </div>
                     </div>
                     <div class="tp-widget-sidebar mb-20">
                        <h3 class="tp-widget-main-title mb-25">Categories</h3>
                        <div class="tp-widget-cat">
                           <ul>
                              <li><a href="#">Ecology<span>(3)</span></a></li>
                              <li><a href="#">Medical<span>(2)</span></a></li>
                              <li><a href="#">Ecology<span>(3)</span></a></li>
                              <li><a href="#">Children<span>(5)</span></a></li>
                              <li><a href="#">Education<span>(7)</span></a></li>
                              <li><a href="#">Animals<span>(3)</span></a></li>
                           </ul>
                        </div>
                     </div>  
                     <div class="tp-widget-sidebar mb-20">
                        <h3 class="tp-widget-main-title mb-35">Recent Posts</h3>
                        <div class="tp-widget-post-list mb-15">
                           <div class="tp-widget-post-thumb">
                              <a href="blog-details.html"><img src="assets/img/events/thumb.jpg" alt=""></a>
                           </div>
                           <div class="tp-widget-post-content">
                              <span><i class="far fa-clock"></i> Aug 1, 2021</span>
                              <h4 class="tp-widget-post-title">
                                 <a href="blog-details.html">Learn exactly how we made event</a>
                              </h4>
                           </div>
                        </div>
                        <div class="tp-widget-post-list mb-15">
                           <div class="tp-widget-post-thumb">
                              <a href="blog-details.html"><img src="assets/img/events/thumb-2.jpg" alt=""></a>
                           </div>
                           <div class="tp-widget-post-content">
                              <span><i class="far fa-clock"></i> Aug 1, 2021</span>
                              <h4 class="tp-widget-post-title">
                                 <a href="blog-details.html">Help with GlobalCharity</a>
                              </h4>
                           </div>
                        </div>
                        <div class="tp-widget-post-list">
                           <div class="tp-widget-post-thumb">
                              <a href="blog-details.html"><img src="assets/img/events/thumb-3.jpg" alt=""></a>
                           </div>
                           <div class="tp-widget-post-content">
                              <span><i class="far fa-clock"></i> Aug 1, 2021</span>
                              <h4 class="tp-widget-post-title">
                                 <a href="blog-details.html">Healthy Food for Growing</a>
                              </h4>
                           </div>
                        </div>
                     </div>
                     <div class="tp-widget-support bg-position mb-20" data-img-bg="assets/img/events/details/ad.jpg">
                        <div class="tp-widget-sidebar">
                           <span class="tp-section-subtitle mb-15 d-inline-block" data-color="#ffcf4e">Support Counts</span>
                           <h2 class="tp-widget-support-title">Let’s helps<br> other with your charity</h2>
                        </div>
                        <a class="tp-btn tp-btn-secondary-white text-capitalize tp-btn-animetion w-100 justify-content-center" href="donate.html">
                           <span class="btn-icon">
                              <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.15195 0.500138C6.71895 0.517281 7.26794 0.6157 7.79984 0.79554H7.85294C7.88894 0.812539 7.91594 0.831328 7.93394 0.848328C8.13283 0.911853 8.32093 0.983431 8.50093 1.08185L8.84293 1.23395C8.97793 1.30553 9.13992 1.43884 9.22992 1.49342C9.31992 1.54621 9.41892 1.60079 9.49992 1.66253C10.4998 0.902906 11.7139 0.491334 12.9649 0.500138C13.5328 0.500138 14.0998 0.579912 14.6389 0.759751C17.9607 1.83342 19.1577 5.45704 18.1578 8.62436C17.5908 10.2429 16.6638 11.7201 15.4498 12.9271C13.7119 14.6002 11.8048 16.0854 9.75192 17.3649L9.52692 17.5L9.29292 17.3559C7.23284 16.0854 5.31496 14.6002 3.56088 12.9181C2.3549 11.7111 1.42701 10.2429 0.851011 8.62436C-0.165978 5.45704 1.03101 1.83342 4.38887 0.740961C4.64987 0.651489 4.91897 0.588859 5.18897 0.553965H5.29696C5.54986 0.517281 5.80096 0.500138 6.05296 0.500138H6.15195ZM14.1709 3.3276C13.8019 3.20145 13.3969 3.39918 13.2619 3.77496C13.1359 4.15075 13.3339 4.56232 13.7119 4.69563C14.2888 4.91037 14.6749 5.47494 14.6749 6.10035V6.12808C14.6578 6.33297 14.7199 6.53071 14.8459 6.68281C14.9719 6.83491 15.1609 6.92349 15.3589 6.94228C15.7279 6.93244 16.0428 6.63807 16.0698 6.2614V6.15492C16.0968 4.90142 15.3328 3.76602 14.1709 3.3276Z" fill="currentColor" />
                              </svg>
                           </span>
                           <span class="btn-text">Donate for life</span>
                        </a>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>






<?php 
get_footer();