   
   <?php
      $header_button_text = get_theme_mod( 'button_text', __('Donnate Now', 'kindaid'));
      $header_button_url = get_theme_mod( 'button_url', __('#', 'kindaid'));
      $header_right_switch = get_theme_mod( 'header_right_switch', false);
      $header_menu_column = ($header_right_switch == false) ? 'col-xxl-9 col-xl-10' : 'col-xxl-6 col-xl-6';
      $header_menu_column_position = ($header_right_switch == false) ? 'text-end' : 'text-center';
      
   ?>
   
   <?php get_template_part( 'templates/header/offcanvas' ); ?>
   <?php get_template_part( 'templates/header/mini-cart' ); ?>

   <!-- header start -->
   <header>
      <div id="header-sticky" class="tp-header-area tp-header-lg-spacing tp-transparent tp-header-blur">
         <div class="container-fluid container-1790">
            <div class="row align-items-center">
               <div class="col-lg-10 col-5">
                  <div class="tp-header-content d-flex align-items-center">
                     <div class="tp-header-logo">
                        <a href="index.html"><img data-width="108" src="assets/img/logo/logo.png" alt="logo"></a>
                     </div>
                     <div class="tp-main-menu ml-80 d-none d-xl-block">
                        <nav class="tp-mobile-menu-active">
                           <ul>
                              <li class="has-dropdown">
                                 <a href="index.html">Home</a>
                                 <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                 </ul>
                              </li>
                              <li><a href="about.html">About</a>
                              </li>
                              <li class="has-dropdown">
                                 <a href="causes.html">Causes</a>
                                 <ul class="sub-menu">
                                    <li><a href="causes.html">Causes</a></li>
                                    <li><a href="causes-details.html">Causes Details</a></li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="#">Pages</a>
                                 <ul class="sub-menu">
                                    <li><a href="service.html">What We Do</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="events-details.html">Events Details</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li class="menu-item-has-children">
                                       <a href="shop.html">Shop</a>
                                       <ul class="sub-menu">
                                          <li><a href="shop.html">Shop</a></li>
                                          <li><a href="shop-details.html">Shop Details</a></li>
                                          <li><a href="cart.html">Cart</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul> 
                              </li>
                              <li class="has-dropdown">
                                 <a href="blog.html">Blog</a>
                                 <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                 </ul>
                              </li>
                              <li><a href="donate.html">Donation</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-7">
                  <div class="tp-header-action d-flex align-items-center justify-content-end">
                     <div class="tp-header-action-item">
                        <button class="tp-header-action-btn cartmini-open-btn">
                           <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.00211 17H11.9507C14.503 17 16.4611 16.0781 15.9049 12.3676L15.2573 7.33907C14.9145 5.48765 13.7335 4.77908 12.6973 4.77908H4.22497C3.17354 4.77908 2.06116 5.54098 1.66497 7.33907L1.01736 12.3676C0.544976 15.6591 2.44973 17 5.00211 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M4.88859 4.59622C4.88859 2.6101 6.49865 1.00003 8.48477 1.00003V1.00003C9.44117 0.99598 10.3598 1.37307 11.0375 2.04793C11.7152 2.72278 12.0962 3.6398 12.0962 4.59622V4.59622" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.01553 8.34478H6.05362" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M10.8695 8.34481H10.9076" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span class="tp-header-action-badge">3</span>
                        </button>
                     </div>
                     <div class="tp-header-action-item">
                        <button class="tp-header-action-btn tp-search-click">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.1108 15.2222C12.038 15.2222 15.2216 12.0385 15.2216 8.11111C15.2216 4.18375 12.038 1 8.1108 1C4.18361 1 1 4.18375 1 8.11111C1 12.0385 4.18361 15.2222 8.1108 15.2222Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M17.0003 17L13.1338 13.1333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                     <div class="tp-header-toogle-wrapper d-xl-none">
                        <button class="tp-header-toogle"><i class="far fa-bars"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header end -->