
<?php

// Kindaid Logo

function kindaid_logo() {
    $header_logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
    ?>

    <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
        <img 
            src="<?php echo esc_url( $header_logo ); ?>"
            alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"
            data-width="108">
    </a>

    <?php
}


// Kindaid Offcanvas Logo
function kindaid_offcanvas_logo() {
    $header_offcanvas_logo = get_theme_mod('offcanves_logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
    ?>

    <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
        <img 
            src="<?php echo esc_url( $header_offcanvas_logo ); ?>"
            alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"
            data-width="108">
    </a>

    <?php
}


// Kindaid Header Menu

function kindaid_header_main_menu() {
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => '',
        'container_class' => '',
        'menu_class' => '',
        'fallback_cb' => 'KindAid_Walker_Nav_Menu::fallback',
        'walk' => new KindAid_Walker_Nav_Menu,
    ));
}









