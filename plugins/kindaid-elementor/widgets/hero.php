<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) exit;

class Hero_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-hero';
    }

    public function get_title() {
        return __( 'Kindaid Hero', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-slider-device';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'hero', 'slider', 'carousel' ];
	}

    protected function register_controls() {

        $this->register_controls_section();
        $this->register_style_section();

    }


    protected function register_controls_section(){

        $this->start_controls_section(
            'settings_section',
                [
                    'label' => __( 'Hero Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Hero Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'hero-style-1' => esc_html__('Hero Style 1', 'kindaid'),
                        'hero-style-2' => esc_html__('Hero Style 2', 'kindaid'),
                        'hero-style-3' => esc_html__('Hero Style 3', 'kindaid'),
                    ],
                    'default' => 'hero-style-1',
                ]
            );

        $this->end_controls_section();


        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Hero Content', 'kindaid' ),
                ]
            );

            $this->add_control(
                'sub_title',
                [
                    'label'       => __( 'Sub Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your sub title', 'kindaid' ),
                    'default'     => __( 'Need Help...', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
				'image_1',
				[
					'label' => esc_html__( 'Upload Sub Title Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'condition'   => [
                        'chose_style' => ['hero-style-4'],
                    ],
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'label_block' => true,
				]
			);

            $this->add_control(
                'title',
                [
                    'label'       => __( 'Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Being<br><span>life saver</span> for someone', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'content',
                [
                    'label'       => __( 'Content', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your content', 'kindaid' ),
                    'default'     => __( 'Hempel Foundation is the <br> majority owner of the Kindaid Group!', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
				'image_2',
				[
					'label' => esc_html__( 'Hero Image', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'condition'   => [
                        'chose_style' => ['hero-style-1'],
                    ],
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'label_block' => true,
				]
			);
        $this->end_controls_section();



        $this->start_controls_section(
            'button_style',
                [
                    'label' => __( 'Button Style', 'kindaid' ),
                ]
            );

            $this->add_control(
                'btn_text_1',
                [
                    'label'       => __( 'Button Text 1', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Get Help', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'btn_url_1',
                [
                    'label' => esc_html__( 'Button Link 1', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => true,
                        'nofollow' => true,
                        // 'custom_attributes' => '',
                    ],
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'btn_text_2',
                [
                    'label'       => __( 'Button Text 2', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Donate', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'btn_url_2',
                [
                    'label' => esc_html__( 'Button Link 2', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => true,
                        'nofollow' => true,
                        // 'custom_attributes' => '',
                    ],
                    'label_block' => true,
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



        /** Sub Title Style Tabs **/
        $this->start_controls_section(
            'style_tab_2',
                [
                    'label' => esc_html__('Sub Title Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
				'separator_heading_1',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Sub Title Style', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_1',
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
                    'name' => 'typography_1',
                    'selector' => '{{WRAPPER}} .ele-kd-subtitle',
                ]
            );

            $this->add_responsive_control(
                'padding_1',
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
                'margin_1',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

            $this->add_responsive_control(
				'color_2',
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
                    'name' => 'typography_2',
                    'selector' => '{{WRAPPER}} .ele-kd-title',
                ]
            );

            $this->add_responsive_control(
                'padding_2',
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
                'margin_2',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
				'separator_heading_2',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Title span Style', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_3',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-title span' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_3',
                    'selector' => '{{WRAPPER}} .ele-kd-title span',
                ]
            );

            $this->add_responsive_control(
                'padding_3',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-title span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-title span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();


        /** Shor Description Style Tabs **/
        $this->start_controls_section(
            'style_tab_4',
                [
                    'label' => esc_html__('Short Des Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
				'color_4',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-dec' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_4',
                    'selector' => '{{WRAPPER}} .ele-kd-dec',
                ]
            );

            $this->add_responsive_control(
                'padding_4',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();


        /** Button Style Tabs **/
        $this->start_controls_section(
            'style_tab_5',
                [
                    'label' => esc_html__('Button Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );


            $this->start_controls_tabs( 'title_style_tabs' );


            $this->start_controls_tab(
                'btn_normal_tab',
                    [
                    'label' => esc_html__( 'Normal', 'textdomain' ),
                    ]
            );

            $this->add_responsive_control(
				'color_5',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn-1' => 'color: {{VALUE}}',
					],
				]
			);

            
            $this->add_responsive_control(
				'background_1',
				[
					'label' => esc_html__( 'Background Color', 'zylo-elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn-1' => 'background: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_5',
                    'selector' => '{{WRAPPER}} .ele-kd-btn-1',
                ]
            );

            $this->add_responsive_control(
                'padding_5',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-btn-1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            $this->end_controls_tab();


            $this->start_controls_tab(
                'btn_hover_tab',
                [
                'label' => esc_html__( 'Hover', 'textdomain' ),
                ]
            );

            $this->add_responsive_control(
				'color_6',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn-1:hover' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_responsive_control(
				'background_2',
				[
					'label' => esc_html__( 'Background Color', 'zylo-elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn-1:hover' => 'background: {{VALUE}}',
					],
				]
			);

            $this->add_responsive_control(
                'padding_6',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn-1:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_6',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn-1:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            $this->end_controls_tab();


            $this->end_controls_tabs();

        $this->end_controls_section();


        /** Image Style Tabs **/
        $this->start_controls_section(
            'style_tab_6',
                [
                    'label' => esc_html__('Image Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'padding_7',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'border_radius_6',
                [
                    'label' => esc_html__('Border Radius', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    ],
                ]
            );

        $this->end_controls_section();

    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'hero-style-1'): 

        // Button Style 1
        if(!empty($settings['btn_text_1'])){
            $this->add_link_attributes( 'button_arg', $settings['btn_url_1'] );
            $this->add_render_attribute( 'button_arg', 'class', 'tp-btn tp-btn-animetion ele-kd-btn-1 mr-5 mb-10' );
        }
        
        // Button Style 2
        if(!empty($settings['btn_text_2'])){
            $this->add_link_attributes( 'button_arg_2', $settings['btn_url_2'] );
            $this->add_render_attribute( 'button_arg_2', 'class', 'tp-btn tp-btn-secondary tp-btn-animetion mb-10' );
        }
        ?>

        <div class="tp-hero-area ele-kd-bg fix">
            <div class="container-fluid p-0">
                <div class="row">
                <div class="col-xxl-6 col-xl-7 col-lg-6 offset-xxl-1">
                    <div class="tp-hero-content tp-hero-spacing">
                        <?php 
                        if (!empty($sub_title)): ?>
                            <span class="tp-hero-subtitle ele-kd-subtitle d-inline-block mb-25 ml-5  wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                <?php echo kd_kses($sub_title); ?>
                            </span>
                        <?php 
                        endif; ?>

                        <?php 
                        if (!empty($title)): ?>
                            <h2 class="tp-hero-title ele-kd-title mb-80 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <?php echo kd_kses($title); ?>
                            </h2>
                        <?php 
                        endif; ?>

                        <div class="tp-hero-btn-wrap">
                        <?php 
                        if (!empty($content)): ?>
                            <div class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <p class="tp-hero-dec ele-kd-dec mb-30"><?php echo kd_kses($content); ?></p>
                            </div>
                        <?php 
                        endif; ?>

                            <div class="tp-hero-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                <?php 
                                if (!empty($btn_text_1)): ?>
                                    <a <?php echo $this->get_render_attribute_string( 'button_arg' ); ?>>
                                        <span class="btn-text"><?php echo kd_kses($btn_text_1); ?></span>
                                        <span class="btn-icon">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                <?php 
                                endif; ?>

                                <?php 
                                if (!empty($btn_text_2)): ?>
                                    <a <?php echo $this->get_render_attribute_string( 'button_arg_2' ); ?>>
                                        <span class="btn-text"><?php echo kd_kses($btn_text_2); ?></span>
                                        <span class="btn-icon">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                <?php 
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6">
                    <div class="tp-hero-thumb ml-20">
                        <?php	
                        if ( kindaid_img_src($settings['image_2']) )  :  ?>
                            <?php echo kindaid_img_src( $settings['image_2'], 'w-100 ele-kd-img' ); ?>
                        <?php
                        endif; ?>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <?php
        endif; ?>
	<?php

       
    }
}