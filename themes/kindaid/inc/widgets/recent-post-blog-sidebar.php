<?php
/**
 * Recent Post Blog Sidebar Widget
 */

class Recent_Post_Blog_Sidebar_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'recent_post_blog_sidebar_widget',
            __('Recent Post Blog Sidebar Widget', 'kindaid'),
            ['description' => __('Show recent blog posts in sidebar.', 'kindaid')]
        );
    }

    /** Frontend Output */
    public function widget( $args, $instance ) {

        $title      = $instance['title'] ?? __('Recent Posts', 'kindaid');
        $post_count = $instance['post_count'] ?? 3;

        echo $args['before_widget'];

        if ( ! empty( $title ) ) {
            echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
        }

        $query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => (int) $post_count,
            'post_status'    => 'publish',
        ]);

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="tp-widget-post-list mb-15">
                    <div class="tp-widget-post-thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb.jpg" alt="">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="tp-widget-post-content">
                        <span><i class="far fa-clock"></i> <?php echo get_the_date(); ?></span>
                        <h4 class="tp-widget-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata();
        endif;

        echo $args['after_widget'];
    }

    /** Backend Form */
    public function form( $instance ) {

        $title      = $instance['title'] ?? '';
        $post_count = $instance['post_count'] ?? 3;
        ?>

        <p>
            <label><?php _e( 'Title:', 'kindaid' ); ?></label>
            <input class="widefat" type="text"
                   name="<?php echo $this->get_field_name( 'title' ); ?>"
                   value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label><?php _e( 'Number of Posts:', 'kindaid' ); ?></label>
            <input class="widefat" type="number" min="1" max="10"
                   name="<?php echo $this->get_field_name( 'post_count' ); ?>"
                   value="<?php echo esc_attr( $post_count ); ?>">
        </p>

        <?php
    }

    /** Save Data */
    public function update( $new_instance, $old_instance ) {
        return [
            'title'      => sanitize_text_field( $new_instance['title'] ),
            'post_count' => absint( $new_instance['post_count'] ),
        ];
    }
}

/** Register Widget */
add_action( 'widgets_init', function () {
    register_widget( 'Recent_Post_Blog_Sidebar_Widget' );
});
