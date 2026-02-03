<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Testimonial_Widget extends Widget_Base {

    public function get_name() {
        return 'testimonial';
    }

    public function get_title() {
        return __( 'Testimonial', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-toggle';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'testimonial' ];
	}

    protected function register_controls() {

        $this->register_controls_section();
        $this->register_style_section();
        $this->register_layout_section();

    }


    protected function register_controls_section(){

        $this->start_controls_section(
            'settings_section',
                [
                    'label' => __( 'Testimonial Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Testimonial Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'testimonial-style-1' => esc_html__('Testimonial Style 1', 'kindaid'),
                        'testimonial-style-2' => esc_html__('Testimonial Style 2', 'kindaid'),
                        'testimonial-style-3' => esc_html__('Testimonial Style 3', 'kindaid'),
                    ],
                    'default' => 'testimonial-style-1',
                ]
            );

        $this->end_controls_section();



        //  Testimonial List start
        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Testimonial', 'kindaid' ),
                ]
            );
            $repeater = new \Elementor\Repeater();


            $repeater->add_control(
                'chose_icon_style_20',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_20',
                    'options'     => [
                        'fontawosome_icon_20' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_20'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_20'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $repeater->add_control(
                'list_icon_20',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_20' => ['fontawosome_icon_20'],
                    ],

                ]
            );

            $repeater->add_control(
				'list_image_icon_20',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_20' => ['image_icon_20'],
                    ],
				]
			);

            $repeater->add_control(
                'list_svg_icon_20',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_20' => ['svg_icon_20'],
                    ],
                ]
            );

            $repeater->add_control(
                'rating',
                [
                    'label' => esc_html__( 'Show Rating', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '5',
                    'options' => [
                        '1' => '1 Star',
                        '2' => '2 Star',
                        '3' => '3 Star',
                        '4' => '4 Star',
                        '5' => '5 Star',
                    ],
                ]
            );

            $repeater->add_control(
                'list_title',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Helping others improves!' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_dec',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( 'Their transparency and commitment to making<br> a real difference is unmatched. I’m proud to support a<br> cause that brings hope' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_name',
                [
                    'label' => esc_html__( 'Client Name', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Arc Joan' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_desig',
                [
                    'label' => esc_html__( 'Designation', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Verified Buyer' , 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $repeater->add_control(
                'list_image',
                [
                    'label' => esc_html__( 'Client Image', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );



            $this->add_control(
                'list_testimonial',
                [
                    'label' => esc_html__( 'Service List', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_title'    => esc_html__( 'Healthy Food', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Their transparency and commitment to making<br> a real difference is unmatched. Im proud to support a<br> cause that brings hope', 'kindaid' ),
                            'list_name'  => esc_html__( 'Arc Joan', 'kindaid' ),
                            'list_desig'  => esc_html__( 'Verified Buyer', 'kindaid' ),
                        ],
                        [
                            'list_title'    => esc_html__( 'Healthy Food', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Their transparency and commitment to making<br> a real difference is unmatched. Im proud to support a<br> cause that brings hope', 'kindaid' ),
                            'list_name'  => esc_html__( 'Arc Joan', 'kindaid' ),
                            'list_desig'  => esc_html__( 'Verified Buyer', 'kindaid' ),
                        ],
                        [
                            'list_title'    => esc_html__( 'Healthy Food', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Their transparency and commitment to making<br> a real difference is unmatched. Im proud to support a<br> cause that brings hope', 'kindaid' ),
                            'list_name'  => esc_html__( 'Arc Joan', 'kindaid' ),
                            'list_desig'  => esc_html__( 'Verified Buyer', 'kindaid' ),
                        ],
                    ],
                    'title_field' => '{{{ list_title }}}',
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
                'show_sub_title',
                [
                    'label'   => esc_html__( 'Show Sub Title', 'cleenpro-elementor' ),
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

            // SubTitle style here start
            $this->add_control(
				'separator_heading_21',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Subtitle Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_21',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-subtitle' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_21',
                    'selector' => '{{WRAPPER}} .ele-kd-subtitle',
                ]
            );

            $this->add_responsive_control(
                'padding_21',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_21',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            // Short Description style here start
            $this->add_control(
				'separator_heading_6',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Short Description Style Here...', 'kindaid' ),
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


            // Client Name style Start
            $this->add_control(
				'separator_heading_4',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Client Name Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_2',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cle-name' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_2',
                    'selector' => '{{WRAPPER}} .ele-kd-cle-name',
                ]
            );

            $this->add_responsive_control(
                'padding_2',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cle-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-cle-name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );



            // Client Designation style Start
            $this->add_control(
				'separator_heading_22',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Client Designation Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_22',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cle-desig' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_22',
                    'selector' => '{{WRAPPER}} .ele-kd-cle-desig',
                ]
            );

            $this->add_responsive_control(
                'padding_22',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cle-desig' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_22',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cle-desig' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();


    }






    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);


        //  echo '<pre>';
        // print_r($settings);
        // echo '</pre>';

        if ($chose_style == 'testimonial-style-1'):   ?>

        <div class="tp-testimonial-area ele-kd-bg pt-115 pb-120">
            <div class="container container-1324 p-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-11 text-center">
                        <div class="swiper-container tp-testimonal-slider-active">
                            <div class="swiper-wrapper">
                                <?php 
                                foreach ( $settings['list_testimonial'] as $key => $item ) : 
                                extract( $item );
                               
                                ?>
                                    <div class="swiper-slide">
                                        <div class="tp-testimonal">
                                            <div class="tp-testimonal-star mb-5">
                                                <?php
                                                $rating = ! empty( $item['rating'] ) ? intval( $item['rating'] ) : 5;

                                                $has_icon_20 = (
                                                    ( $item['chose_icon_style_20'] === 'fontawosome_icon_20' && ! empty( $item['list_icon_20']['value'] ) ) ||
                                                    ( $item['chose_icon_style_20'] === 'image_icon_20' && ! empty( $item['list_image_icon_20']['url'] ) ) ||
                                                    ( $item['chose_icon_style_20'] === 'svg_icon_20' && ! empty( $item['list_svg_icon_20'] ) )
                                                );
                                                ?>

                                                <?php 
                                                if ( $has_icon_20 ) : ?>
                                                        <?php 
                                                        for ( $i = 1; $i <= $rating; $i++ ) : ?>

                                                            <?php 
                                                            if ( $item['chose_icon_style_20'] === 'fontawosome_icon_20' && ! empty( $item['list_icon_20']['value'] ) ) : ?>

                                                                <?php \Elementor\Icons_Manager::render_icon( $item['list_icon_20'], [ 'aria-hidden' => 'true' ] ); ?>

                                                            <?php 
                                                            elseif ( $item['chose_icon_style_20'] === 'image_icon_20' && ! empty( $item['list_image_icon_20']['url'] ) ) : ?>

                                                                <img src="<?php echo esc_url( $item['list_image_icon_20']['url'] ); ?>" alt="">

                                                            <?php 
                                                            elseif ( $item['chose_icon_style_20'] === 'svg_icon_20' && ! empty( $item['list_svg_icon_20'] ) ) : ?>

                                                                <?php echo kd_kses( $item['list_svg_icon_20'] ); ?>

                                                            <?php 
                                                            endif; ?>

                                                        <?php 
                                                        endfor; ?>
                                                <?php 
                                                endif; ?>

                                            </div>

                                            <?php 
                                            if (!empty($list_title)) : ?>
                                                <span class="tp-testimonal-label ele-kd-subtitle mb-20 d-inline-block"><?php echo esc_html($list_title); ?></span>
                                            <?php 
                                            endif; ?>

                                            <?php 
                                            if (!empty($list_dec)) : ?>
                                                <h4 class="tp-testimonal-dec ele-kd-title">
                                                    <?php echo kd_kses($list_dec); ?>
                                                </h4>
                                            <?php 
                                            endif; ?>
                                            <div class="tp-testimonal-user mt-40">
                                                <div class="tp-testimonal-img">
                                                    <?php
                                                    if ( kindaid_img_src($item['list_image']) )  : ?>
                                                        <?php echo kindaid_img_src( $item['list_image'], 'ele-kd-img' ); ?>
                                                    <?php
                                                    endif; ?>
                                                </div>
                                                <div class="tp-testimonal-bio">
                                                    <?php 
                                                    if (!empty($list_name)) : ?>
                                                        <h4 class="tp-testimonal-name ele-kd-cle-name"><?php echo esc_html($list_name); ?></h4>
                                                    <?php 
                                                    endif; ?>

                                                    <?php 
                                                    if (!empty($list_desig)) : ?>
                                                        <span class="ele-kd-cle-desig"><?php echo esc_html($list_desig); ?></span>
                                                    <?php 
                                                    endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-testimonial-arrow text-start text-md-end">
                <button class="tp-test-arrow-prev tp-test-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button class="tp-test-arrow-next tp-test-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00049 7H13.0005" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.00049 1L13.0005 7L7.00049 13" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                </div>
            </div>
        </div>

        <?php
        endif; ?>
	<?php

       
    }
}