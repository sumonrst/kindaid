<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Blog_Post_Widget extends Widget_Base {

    public function get_name() {
        return 'blog-post';
    }

    public function get_title() {
        return __( 'Kindaid Blog Post', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-post-list';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'blog', 'post' ];
	}

    protected function register_controls() {

        $this->register_controls_section();
        $this->register_style_section();
        $this->register_layout_section();

    }


    protected function get_blog_categories() {
        $categories = get_categories( [ 'hide_empty' => false ] );
        $options = [];

        if ( ! empty( $categories ) ) {
            foreach ( $categories as $cat ) {
                $options[ $cat->term_id ] = $cat->name;
            }
        }

        return $options;
    }

    protected function get_post_types() {
        $post_types = get_post_types( [ 'public' => true ], 'objects' );
        $options = [];

        foreach ( $post_types as $post_type ) {
            $options[ $post_type->name ] = $post_type->labels->singular_name;
        }

        return $options;
    }


    protected function get_all_posts() {
        $posts = get_posts( [
            'post_type'      => 'post', 
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        ] );

        $options = [];

        if ( ! empty( $posts ) ) {
            foreach ( $posts as $post ) {
                $options[ $post->ID ] = $post->post_title;
            }
        }

        return $options;
    }


    protected function register_controls_section(){

        $this->start_controls_section(
            'settings_section',
                [
                    'label' => __( 'Heading Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Blog Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'blog-style-1' => esc_html__('Blog Style 1', 'kindaid'),
                        'blog-style-2' => esc_html__('Blog Style 2', 'kindaid'),
                        'blog-style-3' => esc_html__('Blog Style 3', 'kindaid'),
                    ],
                    'default' => 'blog-style-1',
                ]
            );

        $this->end_controls_section();


        // Blog Section Start
        $this->start_controls_section(
            'control_section_2',
                [
                    'label' => __( 'Blog Post', 'kindaid' ),
                ]
            );

            $this->add_control(
				'separator_heading_2',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Select your post type. Which one will you show here? WordPres default post or the post you created as a custom post.', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_control(
                'post_type',
                [
                    'label' => __( 'Query Type', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'post',
                    'options' => $this->get_post_types(),
                ]
            );

            $this->add_control(
                'divider_1',
                [
                    'type' => \Elementor\Controls_Manager::DIVIDER,
                ]
            );

            $this->add_control(
                'posts_per_page',
                [
                    'label'       => __( 'Posts Per Page', 'kindaid' ),
                    'type'        => Controls_Manager::NUMBER,
                    'placeholder' => __( 'Enter your post', 'kindaid' ),
                    'default'     => __( '3', 'kindaid' ),
                ]
            );

            $this->add_control(
                'divider_2',
                [
                    'type' => \Elementor\Controls_Manager::DIVIDER,
                ]
            );



            $this->start_controls_tabs( 'posts_tabs' );

                // -------- INCLUDE TAB --------
                $this->start_controls_tab(
                    'include_tab',
                        [
                            'label' => __( 'Include', 'kindaid' ),
                        ]
                    );

                    $this->add_control(
                        'include_post_query_type',
                        [
                            'label' => esc_html__( 'Source Type', 'kindaid' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default'     => 'post_show_by_id',
                            'options'     => [
                                'post_show_by_id'       => esc_html__( 'Post Show By ID', 'kindaid' ),
                                'post_show_cat_term'      => esc_html__( 'Category / Term', 'kindaid' ),
                            ],
                        ]
                    );

                    $this->add_control(
                        'include_post_ids',
                        [
                            'label' => __( 'Select Posts ID', 'kindaid' ),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'multiple' => true,
                            'options' => $this->get_all_posts(),
                            'label_block' => true,
                            'condition'   => [
                                'include_post_query_type' => ['post_show_by_id'],
                            ],
                        ]
                    );

                    $this->add_control(
                        'select_categories',
                        [
                            'label' => __( 'Select Categories', 'kindaid' ),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'multiple' => true,
                            'options' => $this->get_blog_categories(),
                            'label_block' => true,
                            'condition'   => [
                                'include_post_query_type' => ['post_show_cat_term'],
                            ],
                        ]
                    );

                $this->end_controls_tab();

                // -------- EXCLUDE TAB --------
                $this->start_controls_tab(
                    'exclude_tab',
                        [
                            'label' => __( 'Exclude', 'kindaid' ),
                        ]
                    );

                    $this->add_control(
                        'exclude_post_query_type',
                        [
                            'label' => esc_html__( 'Source Type', 'kindaid' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default'     => 'post_show_by_id',
                            'options'     => [
                                'post_show_by_id'       => esc_html__( 'Post Show By ID', 'kindaid' ),
                                'post_show_cat_term'      => esc_html__( 'Category / Term', 'kindaid' ),
                            ],
                        ]
                    );

                    $this->add_control(
                        'exclude_post_ids',
                        [
                            'label' => __( 'Select Posts ID', 'kindaid' ),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'multiple' => true,
                            'options' => $this->get_all_posts(),
                            'label_block' => true,
                            'condition'   => [
                                'exclude_post_query_type' => ['post_show_by_id'],
                            ],
                        ]
                    );

                    $this->add_control(
                        'exclude_categories',
                        [
                            'label' => __( 'Exclude Categories', 'kindaid' ),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'multiple' => true,
                            'options' => $this->get_blog_categories(),
                            'label_block' => true,
                            'condition'   => [
                                'exclude_post_query_type' => ['post_show_cat_term'],
                            ],
                        ]
                    );

                $this->end_controls_tab();

            $this->end_controls_tabs();




            $this->add_control(
                'order',
                [
                    'label' => __( 'Order', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'DESC',
                    'options' => [
                        'DESC' => __( 'Descending', 'kindaid' ),
                        'ASC'  => __( 'Ascending', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'orderby',
                [
                    'label' => __( 'Order By', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'date',
                    'options' => [
                        'date'  => __( 'Date', 'kindaid' ),
                        'title' => __( 'Title', 'kindaid' ),
                        'ID'    => __( 'Post ID', 'kindaid' ),
                        'rand'  => __( 'Random', 'kindaid' ),
                    ],
                ]
            );


        $this->end_controls_section();

        
    }


    protected function register_layout_section(){
        $this->start_controls_section(
			'section_content_layout',
                [
                    'label' => esc_html__( 'Layout', 'kindaid' ),
                ]
            );

            $this->add_responsive_control(
                'align',
                [
                    'label'   => esc_html__( 'Alignment', 'kindaid' ),
                    'type'    => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => esc_html__( 'Left', 'kindaid' ),
                            'icon'  => 'eicon-text-align-left',
                        ],
                        'center' => [
                            'title' => esc_html__( 'Center', 'kindaid' ),
                            'icon'  => 'eicon-text-align-center',
                        ],
                        'right' => [
                            'title' => esc_html__( 'Right', 'kindaid' ),
                            'icon'  => 'eicon-text-align-right',
                        ],
                        'justify' => [
                            'title' => esc_html__( 'Justified', 'kindaid' ),
                            'icon'  => 'eicon-text-align-justify',
                        ],
                    ],
                    'prefix_class' => 'elementor%s-align-',
                    'description'  => 'Use align to match position',
                    'default'      => 'left',
                ]
            );

            $this->add_control(
				'separator_heading_1',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Title Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            
            $this->add_control(
                'show_title',
                [
                    'label'   => esc_html__( 'Show Title', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );	

            $this->add_control(
                'show_date',
                [
                    'label'   => esc_html__( 'Show Date', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'show_cat',
                [
                    'label'   => esc_html__( 'Show Category', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );
            

        $this->end_controls_section();

    }


    protected function register_style_section(){

        /** Section Padding Style Tabs **/
        $this->start_controls_section(
            'style_tab_1',
                [
                    'label' => esc_html__('Section Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'section_padding',
                [
                    'label' => esc_html__( 'Section Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_5',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
				'background_3',
				[
					'label' => esc_html__( 'Background Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-bg' => 'background-color: {{VALUE}}',
					],
				]
			);
        $this->end_controls_section();



        /** Title Style Tabs **/
        $this->start_controls_section(
            'style_tab_3',
                [
                    'label' => esc_html__('Title Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            
            // Title style here start

            $this->add_control(
				'separator_heading_6',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Title Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_3',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_3',
                    'selector' => '{{WRAPPER}} .ele-kd-title',
                ]
            );

            $this->add_responsive_control(
                'padding_3',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_3',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            // Category style here start

            $this->add_control(
				'separator_heading_7',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Category Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_4',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cat' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_4',
                    'selector' => '{{WRAPPER}} .ele-kd-cat',
                ]
            );

            $this->add_responsive_control(
                'padding_4',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_4',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();



        // date section here start
        $this->start_controls_section(
            'style_tab_4',
                [
                    'label' => esc_html__('Date Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );


            // Date Month Style Start
            $this->add_control(
				'separator_heading_4',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Date Month Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_2',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-date-1' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_2',
                    'selector' => '{{WRAPPER}} .ele-kd-date-1',
                ]
            );

            $this->add_responsive_control(
                'padding_2',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_2',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            // Date  Style Start
            $this->add_control(
				'separator_heading_5',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Date Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_6',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-date-2' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_5',
                    'selector' => '{{WRAPPER}} .ele-kd-date-2',
                ]
            );

            $this->add_responsive_control(
                'padding_6',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_7',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            // Date Background Style Start
            $this->add_control(
				'separator_heading_8',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Date Background Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
                'padding_5',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_8',
                [
                    'label' => __( 'Margin', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'width_1',
                [
                    'label' => esc_html__('Width', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-bg' => 'width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'height_1',
                [
                    'label' => esc_html__('Height', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-date-bg' => 'height: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
				'color_5',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-date-bg' => 'background: {{VALUE}}',
					],
				]
			);

        $this->end_controls_section();

    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'blog-style-1'):   
        
        $args = [
            // 'post_type'      => 'post',
            'post_type' => ! empty( $settings['post_type'] ) ? $settings['post_type'] : 'post',
            'posts_per_page' => ! empty( $posts_per_page ) ? $posts_per_page : 6,
            'post_status'    => 'publish',
            'order'   => ! empty( $settings['order'] ) ? $settings['order'] : 'DESC',
            'orderby' => ! empty( $settings['orderby'] ) ? $settings['orderby'] : 'date',
        ];

        // Include by ID
        if ( ! empty( $settings['include_post_ids'] ) ) {
            $args['post__in'] = $settings['include_post_ids'];
            $args['orderby'] = 'post__in'; // preserve order
        }

        // Exclude by ID
        if ( ! empty( $settings['exclude_post_ids'] ) ) {
            $args['post__not_in'] = array_map( 'intval', $settings['exclude_post_ids'] );
        }


        // include by category
        if ( ! empty( $settings['select_categories'] ) ) {
            $args['category__in'] = $settings['select_categories'];
        }
        
        // Exclude by category
        if ( ! empty( $settings['exclude_categories'] ) ) {
            $args['category__not_in'] = $settings['exclude_categories'];
        }

        $query = new \WP_Query( $args );  ?>

        <div class="tp-blog-area ele-kd-bg tp-blog-style pt-115 pb-90 fix p-relative">
            <div class="container container-1324">
                <div class="row">
                <?php  
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="col-xl-4 col-md-6">
                        <div class="tp-blog-item tp-event p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-blog-thumb tp-event-img fix mb-25">
                                 <?php 
                                 if ( has_post_thumbnail() ) : ?>
                                    <img class="w-100" src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php 
                                endif; ?>

                                <?php 
                                if('yes' === $settings['show_date']) : ?>
                                    <div class="tp-event-date ele-kd-date-bg">
                                        <span class="ele-kd-date-1"><?php echo esc_html( get_the_date( 'M' ) ); ?></span>
                                        <h4 class="ele-kd-date-2"><?php echo esc_html( get_the_date( 'd' ) ); ?></h4>
                                    </div>
                                <?php 
                                endif; ?>
                            </div>
                            <div class="tp-blog-content">
                                <?php 
                                if('yes' === $settings['show_cat']) : ?>
                                    <div class="tp-blog-cat mb-5 d-flex">
                                        <?php
                                        $cats = get_the_category();
                                        if ( ! empty( $cats ) ) :
                                            foreach ( array_slice( $cats, 0, 2 ) as $cat ) :
                                                ?>
                                                <span class="dvdr"><a class="ele-kd-cat" href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></span>
                                            <?php endforeach;
                                        endif;
                                        ?>
                                    </div>
                                <?php 
                                endif; ?>

                                <?php 
                                if('yes' === $settings['show_title']) : ?>
                                    <h3 class="tp-blog-title ele-kd-title"><a href="blog-details.html" class="common-underline"><?php the_title(); ?></a></h3>
                                <?php 
                                endif; ?>   
                            </div>
                        </div>
                    </div>

                        <?php 
                        endwhile; wp_reset_postdata(); ?>
                    <?php 
                    else : ?>
                    <?php echo esc_html__( 'Post Not Found', 'textdomain' ); ?>
                <?php 
                endif; ?>

                </div>
            </div>
        </div>


        <?php 
		elseif ($chose_style == 'blog-style-2') : ?>

        <div class="tp-event-area pt-120 pb-90 fix p-relative">
            <div class="container container-1424">
                <div class="row align-items-end">
                    <?php  
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="tp-event p-relative mb-30 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                                <div class="tp-event-img fix">
                                    <img class="w-100" src="assets/img/events/thumb.jpg" alt="">
                                    <div class="tp-event-date">
                                    <span>Feb</span>
                                    <h4>12</h4>
                                    </div>
                                </div>
                                <div class="tp-event-content">
                                    <div class="tp-event-meta mb-5">
                                    <span class="mr-20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                        9.00am - 10.00am
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> 
                                        London Park
                                    </span>
                                    </div>
                                    <h3 class="tp-event-title"><a href="events-details.html" class="common-underline">Promoting the right of Poor Children</a></h3>
                                    <div class="tp-event-link mt-15">
                                    <a class="tp-btn tp-btn-nopading tp-btn-animetion" href="events-details.html">
                                        <span class="btn-text">View event</span>
                                        <span class="btn-icon">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                            <?php 
                            endwhile; wp_reset_postdata(); ?>
                        <?php 
                        else : ?>
                        <?php echo esc_html__( 'Post Not Found', 'textdomain' ); ?>
                    <?php 
                    endif; ?>
                </div>
            </div>
        </div>








        <?php
        endif; ?>
	<?php

       
    }
}