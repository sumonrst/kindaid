<?php
/**
 * Footer Logo & Social Widget
 */

class Footer_newsletter_shortcode_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'Footer_newsletter_shortcode_Widget',
            __('Kindaid Footer Newsletter Shortcode Widget', 'kindaid'),
            array( 'description' => __( 'Kindaid Footer logo with description & social links', 'kindaid' ) )
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

        $logo        = $instance['logo'] ?? '';
        $description = $instance['description'] ?? '';
        $facebook    = $instance['facebook'] ?? '';
        $newsletter_shortcode  = $instance['newsletter_shortcode'] ?? '';
        $twitter     = $instance['twitter'] ?? '';
        $dribbble    = $instance['dribbble'] ?? '';
        $instagram   = $instance['instagram'] ?? '';

        echo kindaid_kses( $args['before_widget'] );
        ?>

        <?php 
        if ( !empty($logo)) : ?>
            <div class="tp-footer-logo mb-25">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo esc_url( $logo ); ?>" alt="">
                </a>
            </div>
        <?php 
        endif; ?>

        <?php 
        if ( !empty($description) ) : ?>
            <p class="tp-footer-dec mb-15">
                <?php echo esc_html( $description ); ?>
            </p>
        <?php 
        endif; ?>


        <?php 
        if ( !empty($newsletter_shortcode) ) : ?>
            <div class="tp-footer-subscribe p-relative mb-30">
                <?php echo do_shortcode($newsletter_shortcode); ?>
            </div>
        <?php 
        endif; ?>

        <div class="tp-footer-social">

            <?php 
            if ( !empty($facebook )) : ?>
                <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </a>
            <?php 
            endif; ?>

            <?php 
            if ( !empty($twitter )) : ?>
                <a href="<?php echo esc_url( $twitter ); ?>" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z"
                            fill="currentColor"/>
                    </svg>
                </a>
            <?php 
            endif; ?>

            <?php 
            if ( !empty($dribbble) ) : ?>
                <a href="<?php echo esc_url( $dribbble ); ?>" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9.99991" cy="9.99991" r="8.38077"
                            stroke="currentColor" stroke-width="1.5"/>
                        <path d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </a>
            <?php 
            endif; ?>

            <?php 
            if ( !empty($instagram )) : ?>
                <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z"
                            stroke="currentColor" stroke-width="1.5"/>
                        <path d="M13.251 4.75391L13.242 4.75391"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            <?php 
            endif; ?>

        </div>

        <?php
        echo kindaid_kses( $args['after_widget'] );
    }

    /** Backend Form */
    public function form( $instance ) {

        $logo        = $instance['logo'] ?? '';
        $description = $instance['description'] ?? '';
        $facebook    = $instance['facebook'] ?? '';
        $newsletter_shortcode  = $instance['newsletter_shortcode'] ?? '';
        $twitter     = $instance['twitter'] ?? '';
        $dribbble    = $instance['dribbble'] ?? '';
        $instagram   = $instance['instagram'] ?? '';
        ?>

        <p>
            <label><?php _e('Upload Logo:', 'kindaid'); ?></label>
            <input class="widefat logo-url" type="text"
                name="<?php echo esc_attr( $this->get_field_name('logo') ); ?>"
                value="<?php echo esc_attr( $logo ); ?>">
            <button class="button upload-logo-button"><?php _e('Upload', 'kindaid'); ?></button>
        </p>

        <p>
            <label><?php _e('Description:', 'kindaid'); ?></label>
            <textarea class="widefat" rows="4"
                name="<?php echo esc_attr( $this->get_field_name('description') ); ?>"><?php
                echo esc_textarea( $description ); ?></textarea>
        </p>

        <hr>

        <p>
            <label><?php _e('Facebook URL:', 'kindaid'); ?></label>
            <input class="widefat" type="url"
                name="<?php echo esc_attr( $this->get_field_name('facebook') ); ?>"
                value="<?php echo esc_attr( $facebook ); ?>">
        </p>

        <p>
            <label><?php _e('Newsletter Shortcode:', 'kindaid'); ?></label>
            <input class="widefat" type="text"
                name="<?php echo esc_attr( $this->get_field_name('newsletter_shortcode') ); ?>"
                value="<?php echo esc_attr( $newsletter_shortcode ); ?>">
        </p>

        <p>
            <label><?php _e('Twitter / X URL:', 'kindaid'); ?></label>
            <input class="widefat" type="url"
                name="<?php echo esc_attr( $this->get_field_name('twitter') ); ?>"
                value="<?php echo esc_attr( $twitter ); ?>">
        </p>

        <p>
            <label><?php _e('Dribbble URL:', 'kindaid'); ?></label>
            <input class="widefat" type="url"
                name="<?php echo esc_attr( $this->get_field_name('dribbble') ); ?>"
                value="<?php echo esc_attr( $dribbble ); ?>">
        </p>

        <p>
            <label><?php _e('Instagram URL:', 'kindaid'); ?></label>
            <input class="widefat" type="url"
                name="<?php echo esc_attr( $this->get_field_name('instagram') ); ?>"
                value="<?php echo esc_attr( $instagram ); ?>">
        </p>
        <?php
    }

    /** Save Data */
    public function update( $new_instance, $old_instance ) {
        return array(
            'logo'        => ! empty( $new_instance['logo'] ) ? esc_url_raw( $new_instance['logo'] ) : '',
            'description' => ! empty( $new_instance['description'] ) ? sanitize_textarea_field( $new_instance['description'] ) : '',
            'facebook'    => ! empty( $new_instance['facebook'] ) ? esc_url_raw( $new_instance['facebook'] ) : '',
            'newsletter_shortcode' => ! empty( $new_instance['newsletter_shortcode'] )  ? sanitize_text_field( $new_instance['newsletter_shortcode'] )  : '',
            'twitter'     => ! empty( $new_instance['twitter'] ) ? esc_url_raw( $new_instance['twitter'] ) : '',
            'dribbble'    => ! empty( $new_instance['dribbble'] ) ? esc_url_raw( $new_instance['dribbble'] ) : '',
            'instagram'   => ! empty( $new_instance['instagram'] ) ? esc_url_raw( $new_instance['instagram'] ) : '',
        );
    }
}

/** Register Widget */
add_action( 'widgets_init', function () {
    register_widget( 'Footer_newsletter_shortcode_Widget' );
});
