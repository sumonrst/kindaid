<?php
/**
 * Blog Sidebar Banner Widget
 */

class Blog_Sidebar_Banner_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'blog_sidebar_banner_widget',
            __('Kindaid Blog Sidebar Banner Widget', 'kindaid'),
            ['description' => __('Kindaid Sidebar banner with background image and button.', 'kindaid')]
        );

        add_action( 'admin_enqueue_scripts', [$this, 'enqueue_admin_scripts'] );
    }

    /** Enqueue Media */
    public function enqueue_admin_scripts( $hook ) {
        if ( $hook !== 'widgets.php' && $hook !== 'customize.php' ) {
            return;
        }
        wp_enqueue_media();
    }

    /** Frontend Output */
    public function widget( $args, $instance ) {

        $subtitle    = $instance['subtitle'] ?? __('Support Counts', 'kindaid');
        $title       = $instance['title'] ?? __('Let’s helps<br> other with your charity', 'kindaid');
        $btn_text    = $instance['btn_text'] ?? __('Donate for life', 'kindaid');
        $btn_url     = $instance['btn_url'] ?? '#';
        $bg_image_id = $instance['bg_image_id'] ?? '';
        $bg_image    = $bg_image_id ? wp_get_attachment_image_url( $bg_image_id, 'full' ) : get_template_directory_uri() . '/assets/img/events/details/ad.jpg';

        echo kindaid_kses( $args['before_widget'] );
        ?>

        <div class="tp-widget-support bg-position" style="background-image:url('<?php echo esc_url( $bg_image ); ?>');">
            <div class="tp-widget-sidebar">
                <span class="tp-section-subtitle mb-15 d-inline-block" data-color="#ffcf4e">
                    <?php echo esc_html( $subtitle ); ?>
                </span>
                <h2 class="tp-widget-support-title">
                    <?php echo kindaid_kses( $title ); ?>
                </h2>
            </div>
            <a class="tp-btn tp-btn-secondary-white text-capitalize tp-btn-animetion w-100 justify-content-center"
               href="<?php echo esc_url( $btn_url ); ?>">
                <span class="btn-icon">
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.15195 0.500138C6.71895 0.517281 7.26794 0.6157 7.79984 0.79554H7.85294C7.88894 0.812539 7.91594 0.831328 7.93394 0.848328C8.13283 0.911853 8.32093 0.983431 8.50093 1.08185L8.84293 1.23395C8.97793 1.30553 9.13992 1.43884 9.22992 1.49342C9.31992 1.54621 9.41892 1.60079 9.49992 1.66253C10.4998 0.902906 11.7139 0.491334 12.9649 0.500138C13.5328 0.500138 14.0998 0.579912 14.6389 0.759751C17.9607 1.83342 19.1577 5.45704 18.1578 8.62436C17.5908 10.2429 16.6638 11.7201 15.4498 12.9271C13.7119 14.6002 11.8048 16.0854 9.75192 17.3649L9.52692 17.5L9.29292 17.3559C7.23284 16.0854 5.31496 14.6002 3.56088 12.9181C2.3549 11.7111 1.42701 10.2429 0.851011 8.62436C-0.165978 5.45704 1.03101 1.83342 4.38887 0.740961C4.64987 0.651489 4.91897 0.588859 5.18897 0.553965H5.29696C5.54986 0.517281 5.80096 0.500138 6.05296 0.500138H6.15195ZM14.1709 3.3276C13.8019 3.20145 13.3969 3.39918 13.2619 3.77496C13.1359 4.15075 13.3339 4.56232 13.7119 4.69563C14.2888 4.91037 14.6749 5.47494 14.6749 6.10035V6.12808C14.6578 6.33297 14.7199 6.53071 14.8459 6.68281C14.9719 6.83491 15.1609 6.92349 15.3589 6.94228C15.7279 6.93244 16.0428 6.63807 16.0698 6.2614V6.15492C16.0968 4.90142 15.3328 3.76602 14.1709 3.3276Z" fill="currentColor" />
                    </svg>
                </span>
                <span class="btn-text"><?php echo esc_html( $btn_text ); ?></span>
            </a>
        </div>

        <?php
        echo kindaid_kses( $args['after_widget'] );
    }

    /** Backend Form */
    public function form( $instance ) {

        $subtitle    = $instance['subtitle'] ?? '';
        $title       = $instance['title'] ?? '';
        $btn_text    = $instance['btn_text'] ?? '';
        $btn_url     = $instance['btn_url'] ?? '';
        $bg_image_id = $instance['bg_image_id'] ?? '';
        $image_url   = $bg_image_id ? wp_get_attachment_image_url( $bg_image_id, 'thumbnail' ) : '';
        ?>

        <p>
            <label><?php _e( 'Subtitle:', 'kindaid' ); ?></label>
            <input class="widefat" type="text"
                   name="<?php echo esc_attr( $this->get_field_name( 'subtitle' ) ); ?>"
                   value="<?php echo esc_attr( $subtitle ); ?>">
        </p>

        <p>
            <label><?php _e( 'Title (HTML allowed):', 'kindaid' ); ?></label>
            <textarea class="widefat" rows="3"
                      name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"><?php
                echo esc_textarea( $title ); ?></textarea>
        </p>

        <p>
            <label><?php _e( 'Button Text:', 'kindaid' ); ?></label>
            <input class="widefat" type="text"
                   name="<?php echo esc_attr( $this->get_field_name( 'btn_text' ) ); ?>"
                   value="<?php echo esc_attr( $btn_text ); ?>">
        </p>

        <p>
            <label><?php _e( 'Button URL:', 'kindaid' ); ?></label>
            <input class="widefat" type="url"
                   name="<?php echo esc_attr( $this->get_field_name( 'btn_url' ) ); ?>"
                   value="<?php echo esc_attr( $btn_url ); ?>">
        </p>

        <p>
            <label><?php _e( 'Background Image:', 'kindaid' ); ?></label><br>
            <img class="custom-media-preview" src="<?php echo esc_url( $image_url ); ?>" style="max-width:100%;margin-bottom:6px;">
            <input type="hidden"
                   class="widefat custom-media-id"
                   name="<?php echo esc_attr( $this->get_field_name( 'bg_image_id' ) ); ?>"
                   value="<?php echo esc_attr( $bg_image_id ); ?>">
            <button type="button" class="button select-media-button"><?php _e( 'Select Image', 'kindaid' ); ?></button>
        </p>

        <script>
        jQuery(document).ready(function($){
            function initUploader(widget){
                widget.find('.select-media-button').off('click').on('click', function(e){
                    e.preventDefault();
                    let button = $(this);
                    let input = button.prev('.custom-media-id');
                    let preview = button.prev().prev('.custom-media-preview');

                    let frame = wp.media({
                        title: 'Select Image',
                        button: { text: 'Use this image' },
                        multiple: false
                    });

                    frame.on('select', function(){
                        let attachment = frame.state().get('selection').first().toJSON();
                        input.val(attachment.id);
                        preview.attr('src', attachment.sizes.thumbnail.url);
                    });

                    frame.open();
                });
            }

            $(document).on('widget-added widget-updated', function(e, widget){
                initUploader($(widget));
            });

            $('.widget:has(.select-media-button)').each(function(){
                initUploader($(this));
            });
        });
        </script>

        <?php
    }

    /** Save Data */
    public function update( $new_instance, $old_instance ) {
        return [
            'subtitle'    => sanitize_text_field( $new_instance['subtitle'] ),
            'title'       => wp_kses_post( $new_instance['title'] ),
            'btn_text'    => sanitize_text_field( $new_instance['btn_text'] ),
            'btn_url'     => esc_url_raw( $new_instance['btn_url'] ),
            'bg_image_id' => absint( $new_instance['bg_image_id'] ),
        ];
    }
}

/** Register Widget */
add_action( 'widgets_init', function () {
    register_widget( 'Blog_Sidebar_Banner_Widget' );
});
