<?php
/**
 * Footer Logo & Social Widget
 */

class Blog_Author_Sidebar_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'blog_author_sidebar_widget',
            __('Blog Author Sidebar Widget', 'textdomain'),
            array( 'description' => __( 'Blog Author Sidebar Widget', 'textdomain' ) )
        );

        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
    }

    /** Enqueue Media */
    public function enqueue_admin_scripts( $hook ) {
        if ( $hook !== 'widgets.php' && $hook !== 'customize.php' ) {
            return;
        }

        wp_enqueue_media();

        wp_add_inline_script(
            'jquery',
            "
            jQuery(document).ready(function ($) {

                function initUploader(widget) {
                    widget.find('.upload-logo-button').off('click').on('click', function (e) {
                        e.preventDefault();

                        let button = $(this);
                        let input  = button.prev('.logo-url');

                        let frame = wp.media({
                            title: 'Select Logo',
                            button: { text: 'Use this logo' },
                            multiple: false
                        });

                        frame.on('select', function () {
                            let attachment = frame.state().get('selection').first().toJSON();
                            input.val(attachment.url).trigger('change');
                        });

                        frame.open();
                    });
                }

                $('.widget').each(function () {
                    initUploader($(this));
                });

                $(document).on('widget-added widget-updated', function (e, widget) {
                    initUploader($(widget));
                });
            });
            "
        );
    }

    /** Frontend Output */
    public function widget( $args, $instance ) {

        $image_upload        = $instance['image_upload'] ?? '';
        $author_name = $instance['author_name'] ?? '';
        $author_url    = $instance['author_url'] ?? '';
        $author_sub_title = $instance['author_sub_title'] ?? '';
        $fb_url    = $instance['fb_url'] ?? '';
        $twitter_url    = $instance['twitter_url'] ?? '';
        $driball_url    = $instance['driball_url'] ?? '';
        $instragram_url    = $instance['instragram_url'] ?? '';
        echo $args['before_widget'];
        ?>



        <div class="tp-widget-author text-center mb-20">
            <?php 
            if ( !empty($image_upload) ) : ?>
                <div class="tp-widget-author-thumb mb-35 pt-15">
                    <img src="<?php echo esc_url( $image_upload ); ?>" alt="">
                </div>
            <?php 
            endif; ?>

            <div class="tp-widget-author-content">
                <?php 
                if ( !empty($author_sub_title) ) : ?>
                    <span class="tp-widget-author-subtitle d-inline-block mb-5"><?php echo esc_html( $author_sub_title ); ?></span>
                <?php 
                endif; ?>

                <?php 
                if ( !empty($author_name) ) : ?>
                    <h3 class="tp-widget-author-title mb-15"><a href="<?php echo esc_url( $author_url ); ?>"><?php echo esc_html( $author_name ); ?></a></h3>
                <?php 
                endif; ?>
                <div class="tp-footer-social justify-content-center">
                    <?php 
                    if ( !empty($fb_url) ) : ?>
                        <a href="<?php echo esc_url( $fb_url ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    <?php 
                    endif; ?>

                    <?php 
                    if ( !empty($twitter_url) ) : ?>
                        <a href="<?php echo esc_url( $twitter_url ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"/>
                            </svg>
                        </a>
                    <?php 
                    endif; ?>

                    <?php 
                    if ( !empty($driball_url) ) : ?>
                        <a href="<?php echo esc_url( $driball_url ); ?>">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.99991" cy="9.99991" r="8.38077" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                            <path d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                            <path d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    <?php 
                    endif; ?>

                    <?php 
                    if ( !empty($instragram_url) ) : ?>
                        <a href="<?php echo esc_url( $instragram_url ); ?>">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                            <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    <?php 
                    endif; ?>
                </div>  
            </div>
        </div>

        <?php
        echo $args['after_widget'];
    }

    /** Backend Form */
    public function form( $instance ) {

        $image_upload        = $instance['image_upload'] ?? '';
        $author_name = $instance['author_name'] ?? '';
        $author_url = $instance['author_url'] ?? '';
        $author_sub_title = $instance['author_sub_title'] ?? '';
        $fb_url    = $instance['fb_url'] ?? '';
        $twitter_url     = $instance['twitter_url'] ?? '';
        $driball_url    = $instance['driball_url'] ?? '';
        $instragram_url    = $instance['instragram_url'] ?? '';
        ?>

        <p>
            <label><?php _e('Upload Author Image:', 'textdomain'); ?></label>
            <input class="widefat logo-url" type="text"
                name="<?php echo $this->get_field_name('image_upload'); ?>"
                value="<?php echo esc_attr( $image_upload ); ?>">
            <button class="button upload-logo-button"><?php _e('Upload', 'textdomain'); ?></button>
        </p>

        <p>
            <label><?php _e('Author Sub Title:', 'textdomain'); ?></label>
            <textarea class="widefat" rows="4"
                name="<?php echo $this->get_field_name('author_sub_title'); ?>"><?php
                echo esc_textarea( $author_sub_title ); ?></textarea>
        </p>

        <hr>

        <p>
            <label><?php _e('Author Name:', 'textdomain'); ?></label>
            <textarea class="widefat" rows="4"
                name="<?php echo $this->get_field_name('author_name'); ?>"><?php
                echo esc_textarea( $author_name ); ?></textarea>
        </p>

        <p>
            <label><?php _e('Author URL:', 'textdomain'); ?></label>
            <input class="widefat" type="url"
                name="<?php echo $this->get_field_name('author_url'); ?>"
                value="<?php echo esc_attr( $author_url ); ?>">
        </p>

        <hr>

        <p>
            <label><?php _e('Facebook URL:', 'textdomain'); ?></label>
            <input class="widefat" type="url"
                name="<?php echo $this->get_field_name('fb_url'); ?>"
                value="<?php echo esc_attr( $fb_url ); ?>">
        </p>


        <p>
            <label><?php _e('Twitter URL :', 'textdomain'); ?></label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('twitter_url'); ?>"
                value="<?php echo esc_attr( $twitter_url ); ?>">
        </p>

        <p>
            <label><?php _e('Driball URL :', 'textdomain'); ?></label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('driball_url'); ?>"
                value="<?php echo esc_attr( $driball_url ); ?>">
        </p>

        <p>
            <label><?php _e('Instagram URL :', 'textdomain'); ?></label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('instragram_url'); ?>"
                value="<?php echo esc_attr( $instragram_url ); ?>">
        </p>

        <?php
    }

    /** Save Data */
    public function update( $new_instance, $old_instance ) {
        return array(
            'image_upload'        => ! empty( $new_instance['image_upload'] ) ? esc_url_raw( $new_instance['image_upload'] ) : '',
            'author_name' => ! empty( $new_instance['author_name'] ) ? sanitize_textarea_field( $new_instance['author_name'] ) : '',
            'author_url' => ! empty( $new_instance['author_url'] ) ? sanitize_textarea_field( $new_instance['author_url'] ) : '',
            'author_sub_title' => ! empty( $new_instance['author_sub_title'] ) ? sanitize_textarea_field( $new_instance['author_sub_title'] ) : '',
            'fb_url'    => ! empty( $new_instance['fb_url'] ) ? esc_url_raw( $new_instance['fb_url'] ) : '',
            'twitter_url' => ! empty( $new_instance['twitter_url'] ) ? sanitize_text_field( $new_instance['twitter_url'] )  : '',
            'driball_url' => ! empty( $new_instance['driball_url'] ) ? sanitize_text_field( $new_instance['driball_url'] ) : '',
            'instragram_url' => ! empty( $new_instance['instragram_url'] ) ? sanitize_text_field( $new_instance['instragram_url'] ) : '',
        );
    }
}

/** Register Widget */
add_action( 'widgets_init', function () {
    register_widget( 'Blog_Author_Sidebar_Widget' );
});
