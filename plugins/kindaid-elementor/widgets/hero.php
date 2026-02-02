<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) exit;

class Hero_Widget extends Widget_Base {

    public function get_name() {
        return 'hero';
    }

    public function get_title() {
        return __( 'Hero', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-slider-device';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'hero'];
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

        // Hero Content Section
        $this->start_controls_section(
            'control_section_2',
                [
                    'label' => __( 'Hero Content', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['hero-style-1'],
                    ],
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


        // Slider Section Start
        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Slider', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['hero-style-2'],
                    ],
                ]
            );
            $repeater = new \Elementor\Repeater();

            // Button Icon 1 Start
            $repeater->add_control(
                'chose_icon_style',
                [
                    'label' => esc_html__( 'Select Btn Icon 1', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon',
                    'options'     => [
                        'fontawosome_icon' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $repeater->add_control(
                'list_icon',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style' => ['fontawosome_icon'],
                    ],

                ]
            );

            $repeater->add_control(
				'list_image_icon',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style' => ['image_icon'],
                    ],
				]
			);

            $repeater->add_control(
                'list_svg_icon',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style' => ['svg_icon'],
                    ],
                ]
            );

            // Button Icon 2 Start
            $repeater->add_control(
                'chose_icon_style_2',
                [
                    'label' => esc_html__( 'Select Btn Icon 2', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_2',
                    'options'     => [
                        'fontawosome_icon_2' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_2'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_2'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $repeater->add_control(
                'list_icon_2',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_2' => ['fontawosome_icon_2'],
                    ],

                ]
            );

            $repeater->add_control(
				'list_image_icon_2',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_2' => ['image_icon_2'],
                    ],
				]
			);

            $repeater->add_control(
                'list_svg_icon_2',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_2' => ['svg_icon_2'],
                    ],
                ]
            );


            $repeater->add_control(
                'list_subtitle',
                [
                    'label' => esc_html__( 'Sub Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Lorem ipsum is simply text the printing.' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_title',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Join our website' , 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $repeater->add_control(
				'list_image',
				[
					'label' => esc_html__( 'Slider Image', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);

            $repeater->add_control(
                'btn_text_2',
                [
                    'label'       => __( 'Button Text 1', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Get Help', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $repeater->add_control(
                'btn_url_2',
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
            $repeater->add_control(
                'btn_text_3',
                [
                    'label'       => __( 'Button Text 2', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Donate', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $repeater->add_control(
                'btn_url_3',
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




            $this->add_control(
                'list_slider',
                [
                    'label' => esc_html__( 'Slider List', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_title'    => esc_html__( 'Faith in action. Hope for all.', 'kindaid' ),
                            'list_subtitle'  => esc_html__( 'Hempel Foundation is the majority owner of the KindAid.', 'kindaid' ),
                        ],
                        [
                            'list_title'    => esc_html__( 'Faith inaction. Hope for all.', 'kindaid' ),
                            'list_subtitle'  => esc_html__( 'Hempel Foundation is<br>the majority owner of the KindAid.', 'kindaid' ),
                        ],
                        [
                            'list_title'    => esc_html__( 'Faith in action. Hope for all.', 'kindaid' ),
                            'list_subtitle'  => esc_html__( 'Hempel Foundation is the majority owner of the KindAid.', 'kindaid' ),
                        ],
                    ],
                    'title_field' => '{{{ list_title }}}',
                ]
            );

        $this->end_controls_section();




        // Slider Arrow Section Start
        $this->start_controls_section(
            'slider_arrow_style',
                [
                    'label' => __( 'Slider Navigation', 'kindaid' ),
                ]
            );

            $this->add_control(
				'separator_heading_3',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Left Arrow Section Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);


            // Navigation Left Icon 1 Start
            $this->add_control(
                'chose_icon_style_3',
                [
                    'label' => esc_html__( 'Select Btn Icon 2', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_3',
                    'options'     => [
                        'fontawosome_icon_3' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_3'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_3'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_3',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_3' => ['fontawosome_icon_3'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_3',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_3' => ['image_icon_3'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_3',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_3' => ['svg_icon_3'],
                    ],
                ]
            );

            // Navigation Right Icon 2 Start
            $this->add_control(
				'separator_heading_4',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Right Arrow Section Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);


            $this->add_control(
                'chose_icon_style_4',
                [
                    'label' => esc_html__( 'Select Btn Icon 2', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_4',
                    'options'     => [
                        'fontawosome_icon_4' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_4'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_4'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_4',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_4' => ['fontawosome_icon_4'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_4',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_4' => ['image_icon_4'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_4',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_4' => ['svg_icon_4'],
                    ],
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
        elseif ($chose_style == 'hero-style-2'): ?>  
        
        
        <div class="tp-hero-area fix p-relative">
            <div class="swiper tp-hero-2-slider-active">
                <div class="swiper-wrapper">
                    <?php 
                    $last_arrow_svg = count( $settings['list_slider'] );
                    foreach ( $settings['list_slider'] as $key => $item ) : 
                    extract( $item );
                    $slider_image = ! empty($item['list_image']['url']) ? esc_url( $item['list_image']['url'] ) : '';
                    ?>
                        <div class="swiper-slide">
                            <div class="tp-hero-2-wrap p-relative z-index-1">
                                <div class="tp-hero-2-thumb bg-position" style="background-image:url(<?php echo $slider_image; ?>)"></div>
                                <div class="container-fluid container-1790">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="tp-hero-2-content">
                                            <?php 
                                            if (!empty($list_title)): ?>
                                                <h2 class="tp-hero-2-title mb-20"><?php echo kd_kses($list_title); ?></h2>
                                            <?php
                                            endif;?>
                                            <div class="tp-hero-btn tp-hero-2-btn mb-155">
                                                <?php 
                                                if (!empty($btn_text_2)): ?>
                                                    <a class="tp-btn tp-btn-animetion mr-5 mb-10" href="<?php echo esc_html($btn_url_2['url']); ?>">
                                                        <span class="btn-text"><?php echo esc_html($btn_text_2); ?></span>
                                                        <span class="btn-icon">
                                                            <?php 
                                                                $icon_style = $item['chose_icon_style'] ?? ''; 
                                                                $has_icon = (
                                                                    ( $icon_style === 'fontawosome_icon' && ! empty( $list_icon['value'] ) ) ||
                                                                    ( $icon_style === 'image_icon' && ! empty( $list_image_icon['url'] ) ) ||
                                                                    ( $icon_style === 'svg_icon' && ! empty( $list_svg_icon ) )
                                                                );
                                                            ?>

                                                            <?php 
                                                            if ( $has_icon ) : ?>
                                                                <span class="btn-icon">
                                                                    <?php 
                                                                    if ( $icon_style === 'fontawosome_icon' && ! empty( $list_icon['value'] ) ) : ?>
                                                                        <i class="<?php echo esc_attr( $list_icon['value'] ); ?>"></i>

                                                                        <?php 
                                                                        elseif ( $icon_style === 'image_icon' && ! empty( $list_image_icon['url'] ) ) : ?>
                                                                            <img src="<?php echo esc_url( $list_image_icon['url'] ); ?>" alt="">

                                                                        <?php 
                                                                        elseif ( $icon_style === 'svg_icon' && ! empty( $list_svg_icon ) ) : ?>
                                                                            <?php echo kd_kses( $list_svg_icon ); ?>
                                                                    <?php 
                                                                    endif; ?>
                                                                </span>
                                                            <?php 
                                                            endif; ?>
                                                        </span>
                                                    </a>
                                                <?php
                                                endif;?>

                                                <?php 
                                                if (!empty($btn_text_3)): ?>
                                                    <a class="tp-btn tp-btn-secondary tp-btn-animetion mb-10" href="<?php echo esc_url($btn_url_3['url']); ?>">
                                                        <span class="btn-text"><?php echo esc_html($btn_text_3); ?></span>
                                                        <span class="btn-icon">
                                                            <?php 
                                                                $icon_style_2 = $item['chose_icon_style_2'] ?? ''; 
                                                                $has_icon_2 = (
                                                                    ( $icon_style_2 === 'fontawosome_icon_2' && ! empty( $list_icon_2['value'] ) ) ||
                                                                    ( $icon_style_2 === 'image_icon_2' && ! empty( $list_image_icon_2['url'] ) ) ||
                                                                    ( $icon_style_2 === 'svg_icon_2' && ! empty( $list_svg_icon_2 ) )
                                                                );
                                                            ?>

                                                            <?php 
                                                            if ( $has_icon_2 ) : ?>
                                                                <span class="btn-icon">
                                                                    <?php 
                                                                    if ( $icon_style_2 === 'fontawosome_icon_2' && ! empty( $list_icon_2['value'] ) ) : ?>
                                                                        <i class="<?php echo esc_attr( $list_icon_2['value'] ); ?>"></i>

                                                                        <?php 
                                                                        elseif ( $icon_style_2 === 'image_icon_2' && ! empty( $list_image_icon_2['url'] ) ) : ?>
                                                                            <img src="<?php echo esc_url( $list_image_icon_2['url'] ); ?>" alt="">

                                                                        <?php 
                                                                        elseif ( $icon_style_2 === 'svg_icon_2' && ! empty( $list_svg_icon_2 ) ) : ?>
                                                                            <?php echo kd_kses( $list_svg_icon_2 ); ?>
                                                                    <?php 
                                                                    endif; ?>
                                                                </span>
                                                            <?php 
                                                            endif; ?>
                                                        </span>
                                                    </a>
                                                <?php
                                                endif;?>
                                            </div>
                                            <?php 
                                            if (!empty($list_subtitle)): ?>
                                                <h4 class="tp-hero-2-dec"><?php echo kd_kses($list_subtitle); ?></h4>
                                            <?php
                                            endif;?>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    endforeach; ?>

                </div>
            </div>
            <div class="tp-hero-2-pagination d-flex gap-2">
                <span class="tp-hero-2-prev">

                    <?php 
                        $icon_style_3 = $settings['chose_icon_style_3'] ?? ''; 
                        $has_icon_3 = (
                            ( $icon_style_3 === 'fontawosome_icon_3' && ! empty( $list_icon_3['value'] ) ) ||
                            ( $icon_style_3 === 'image_icon_3' && ! empty( $list_image_icon_3['url'] ) ) ||
                            ( $icon_style_3 === 'svg_icon_3' && ! empty( $list_svg_icon_3 ) )
                        );
                    ?>

                    <?php 
                    if ( $has_icon_3 ) : ?>
                        <span class="btn-icon">
                            <?php 
                            if ( $icon_style_3 === 'fontawosome_icon_3' && ! empty( $list_icon_3['value'] ) ) : ?>
                                <i class="<?php echo esc_attr( $list_icon_3['value'] ); ?>"></i>

                                <?php 
                                elseif ( $icon_style_3 === 'image_icon_3' && ! empty( $list_image_icon_3['url'] ) ) : ?>
                                    <img src="<?php echo esc_url( $list_image_icon_3['url'] ); ?>" alt="">

                                <?php 
                                elseif ( $icon_style_3 === 'svg_icon_3' && ! empty( $list_svg_icon_3 ) ) : ?>
                                    <?php echo kd_kses( $list_svg_icon_3 ); ?>
                            <?php 
                            endif; ?>
                        </span>
                    <?php 
                    endif; ?>

                </span>
                <span class="tp-hero-2-next">
                    <?php 
                        $icon_style_4 = $settings['chose_icon_style_4'] ?? ''; 
                        $has_icon_4 = (
                            ( $icon_style_4 === 'fontawosome_icon_4' && ! empty( $list_icon_4['value'] ) ) ||
                            ( $icon_style_4 === 'image_icon_4' && ! empty( $list_image_icon_4['url'] ) ) ||
                            ( $icon_style_4 === 'svg_icon_4' && ! empty( $list_svg_icon_4 ) )
                        );
                    ?>

                    <?php 
                    if ( $has_icon_4 ) : ?>
                        <span class="btn-icon">
                            <?php 
                            if ( $icon_style_4 === 'fontawosome_icon_4' && ! empty( $list_icon_4['value'] ) ) : ?>
                                <i class="<?php echo esc_attr( $list_icon_4['value'] ); ?>"></i>

                                <?php 
                                elseif ( $icon_style_4 === 'image_icon_4' && ! empty( $list_image_icon_4['url'] ) ) : ?>
                                    <img src="<?php echo esc_url( $list_image_icon_4['url'] ); ?>" alt="">

                                <?php 
                                elseif ( $icon_style_4 === 'svg_icon_4' && ! empty( $list_svg_icon_4 ) ) : ?>
                                    <?php echo kd_kses( $list_svg_icon_4 ); ?>
                            <?php 
                            endif; ?>
                        </span>
                    <?php 
                    endif; ?>
                </span>
            </div>
        </div>




        <?php
        endif; ?>
	<?php

       
    }
}