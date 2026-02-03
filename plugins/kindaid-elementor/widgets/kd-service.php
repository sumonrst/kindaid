<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Service_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-service';
    }

    public function get_title() {
        return __( 'Kindaid Service', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-share';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'service', 'services' ];
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
                    'label' => __( 'Service Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Fact Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'service-style-1' => esc_html__('Service Style 1', 'kindaid'),
                        'service-style-2' => esc_html__('Service Style 2', 'kindaid'),
                        'service-style-3' => esc_html__('Service Style 3', 'kindaid'),
                    ],
                    'default' => 'service-style-1',
                ]
            );

        $this->end_controls_section();


        // Title Section Start

        $this->start_controls_section(
            'control_section_2',
                [
                    'label' => __( 'Service Title', 'kindaid' ),
                ]
            );

            // Service icon section Start
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
                    'condition'   => [
                        'chose_style' => ['service-style-2'],
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
                    'condition'   => [
                        'chose_style' => ['service-style-2'],
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

            $this->add_control(
                'sub_title',
                [
                    'label'       => __( 'Sub Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'How we help', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'title',
                [
                    'label'       => __( 'Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Delivering Solutions', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'title_url',
                [
                    'label'       => __( 'Title URL', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( '#', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'short_dec',
                [
                    'label'       => __( 'Short Dec', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your sub title', 'kindaid' ),
                    'default'     => __( 'Education is the first to independence child.', 'kindaid' ),
                    'label_block' => true,
                ]
            );

        $this->end_controls_section();



        //  Service List start
        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Service Content', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );
            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'chose_icon_style',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
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
                'list_title_url',
                [
                    'label' => esc_html__( 'Title URL', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( '#' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_dec',
                [
                    'label' => esc_html__( 'Description', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( 'Lorem ipsum is simply text the printing.' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_btn_text',
                [
                    'label' => esc_html__( 'Button Text', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Read More' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_btn_url',
                [
                    'label' => esc_html__( 'Button URL', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( '#' , 'kindaid' ),
                    'label_block' => true,
                ]
            );



            $this->add_control(
                'list_service',
                [
                    'label' => esc_html__( 'Service List', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_num'    => esc_html__( '01', 'kindaid' ),
                            'list_title'    => esc_html__( 'Join our website', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Lorem ipsum is simply text the printing.', 'kindaid' ),
                        ],
                        [
                            'list_num'    => esc_html__( '02', 'kindaid' ),
                            'list_title'    => esc_html__( 'Start your Campagins', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Lorem ipsum is simply text the printing.', 'kindaid' ),
                        ],
                        [
                            'list_num'    => esc_html__( '03', 'kindaid' ),
                            'list_title'    => esc_html__( 'Share with friends', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Lorem ipsum is simply text the printing.', 'kindaid' ),
                        ],
                        [
                            'list_num'    => esc_html__( '04', 'kindaid' ),
                            'list_title'    => esc_html__( 'Manage donations', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Lorem ipsum is simply text the printing.', 'kindaid' ),
                        ],
                    ],
                    'title_field' => '{{{ list_title }}}',
                ]
            );

        $this->end_controls_section();




        // Thumbnail start
        $this->start_controls_section(
			'thumbnail_11',
                [
                    'label' => esc_html__( 'Thumbnail', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]	
            );

            $this->add_control(
                'shape_1',
                [
                    'label' => esc_html__( 'Background Image', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__( 'Add Your Service Background Image', 'kindaid' ),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition'   => [
                        'chose_style' => 'service-style-1',
                    ],
                ]
            );
            $this->add_control(
                'shape_2',
                [
                    'label' => esc_html__( 'Shape Image Top', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition'   => [
                        'chose_style' => 'service-style-1',
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



        /** Title Style Tabs **/
        $this->start_controls_section(
            'style_tab_3',
                [
                    'label' => esc_html__('Title Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
				'separator_heading_4',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Sub Title Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                    
				]
			);

            $this->add_responsive_control(
				'color_2',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-subtitle' => 'color: {{VALUE}}',
					],
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_2',
                    'selector' => '{{WRAPPER}} .ele-kd-subtitle',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );

            $this->add_responsive_control(
                'padding_2',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
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
                        '{{WRAPPER}} .ele-kd-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
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


            // Short Description here start

            $this->add_control(
				'separator_heading_9',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Short Dec Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_7',
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
                    'name' => 'typography_7',
                    'selector' => '{{WRAPPER}} .ele-kd-dec',
                ]
            );

            $this->add_responsive_control(
                'padding_8',
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
                'margin_8',
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


        /** Card Info Style Tabs **/
        $this->start_controls_section(
            'style_tab_4',
                [
                    'label' => esc_html__('Card Info Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            // Card Sub Title Style Here....

            $this->add_control(
				'separator_heading_5',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Sub Title Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_4',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cd-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_4',
                    'selector' => '{{WRAPPER}} .ele-kd-cd-title',
                ]
            );

            $this->add_responsive_control(
                'padding_4',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cd-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-cd-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            // Card Description Style Here....

            $this->add_control(
				'separator_heading_7',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Card Dec Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_5',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cd-dec' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_5',
                    'selector' => '{{WRAPPER}} .ele-kd-cd-dec',
                ]
            );

            $this->add_responsive_control(
                'padding_6',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cd-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-cd-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            // Card Button Style Here....

            $this->add_control(
				'separator_heading_8',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Card Btn Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_6',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cd-btn' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_6',
                    'selector' => '{{WRAPPER}} .ele-kd-cd-btn',
                ]
            );

            $this->add_responsive_control(
                'padding_7',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cd-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-cd-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();

        /** Thumbnail Style Tabs **/
        $this->start_controls_section(
            'style_tab_5',
                [
                    'label' => esc_html__('Thumbnail Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'padding_5',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-thmb-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-thmb-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'label' => __( 'Title Layout Section Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            
            $this->add_control(
                'show_title',
                [
                    'label'   => esc_html__( 'Show Title', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );	
            $this->add_control(
                'show_sub_title',
                [
                    'label'   => esc_html__( 'Show Sub Title', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'show_short_dec',
                [
                    'label'   => esc_html__( 'Show Short Dec', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-2'],
                    ],
                ]
            );

            
            
            //  Service Card Layout Start

            $this->add_control(
				'separator_heading_2',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Card Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
				]
			);

            $this->add_control(
                'show_card_icon',
                [
                    'label'   => esc_html__( 'Show Card Icon', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'show_card_title',
                [
                    'label'   => esc_html__( 'Show Card Title', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'show_card_dec',
                [
                    'label'   => esc_html__( 'Show Card Description', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'show_card_btn',
                [
                    'label'   => esc_html__( 'Show Card Button', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );


            //  Thumbnail & Shape Layout Start
            $this->add_control(
				'separator_heading_3',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Thumbnail & Shape Style Here...', 'kindaid' ),
					'separator' => 'before',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
				]
			);

            $this->add_control(
                'show_thumbnail_1',
                [
                    'label'   => esc_html__( 'Show Thumbnail 1', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );	
            $this->add_control(
                'show_shape_1',
                [
                    'label'   => esc_html__( 'Show Shape 1', 'kindaid' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'condition'   => [
                        'chose_style' => ['service-style-1'],
                    ],
                ]
            );	



        $this->end_controls_section();


    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'service-style-1'):   ?>

        <div class="tp-service-area ele-kd-bg tp-bg-mulberry p-relative">
            <?php
            if ( kindaid_img_src($settings['shape_1']) && $settings['show_shape_1'] == 'yes' )  : ?>
                <?php echo kindaid_img_src( $settings['shape_1'], 'tp-service-shape ele-kd-img' ); ?>
            <?php
            endif; ?>

            <div class="container-fluid">
                <div class="row">
                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="tp-service-thumb ele-kd-thmb-img">
                        <?php
                        if ( kindaid_img_src($settings['shape_2']) && $settings['show_thumbnail_1'] == 'yes' )  : ?>
                            <?php echo kindaid_img_src( $settings['shape_2'], 'ele-kd-img' ); ?>
                        <?php
                        endif; ?>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8">
                    <div class="tp-service-content-wrap pt-95 pb-90 pr-90">
                        <div class="tp-service-title-wrap mb-40">
                            <?php 
							if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
                                <span class="tp-section-subtitle ele-kd-subtitle tp-section-subtitle-yellow d-inline-block mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                    <?php echo kd_kses($sub_title); ?>
                                </span>
                            <?php
                            endif; ?>

                            <?php 
							if (( '' !== $title ) && ( $show_title )) : ?>
                                <h2 class="tp-section-title ele-kd-title tp-section-title-white wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo kd_kses($title); ?></h2>
                            <?php
                            endif; ?>
                        </div>
                        <div class="row">
                            <?php 
                            foreach ( $settings['list_service'] as $key => $item ) : 
                            extract( $item );
                            ?>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                    <div class="tp-service-item icon-anime-wrap mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <?php
                                            $has_icon = (
                                                ( $item['chose_icon_style'] === 'fontawosome_icon' && ! empty( $item['list_icon']['value'] ) ) ||
                                                ( $item['chose_icon_style'] === 'image_icon' && ! empty( $item['list_image_icon']['url'] ) ) ||
                                                ( $item['chose_icon_style'] === 'svg_icon' && ! empty( $item['list_svg_icon'] ) )
                                            );
                                        ?>

                                        <?php 
                                        if ( $has_icon ) : ?>
                                            <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                                                <?php 
                                                if ( $item['chose_icon_style'] === 'fontawosome_icon' && ! empty( $item['list_icon']['value'] ) ) : ?>

                                                <?php \Elementor\Icons_Manager::render_icon( $item['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>

                                                <?php 
                                                elseif ( $item['chose_icon_style'] === 'image_icon' && ! empty( $item['list_image_icon']['url'] ) ) : ?>
                                                    <img src="<?php echo esc_url( $item['list_image_icon']['url'] ); ?>" alt="">

                                                <?php 
                                                elseif ( $item['chose_icon_style'] === 'svg_icon' && ! empty( $item['list_svg_icon'] ) ) : ?>
                                                    <?php echo kd_kses($item['list_svg_icon']); ?>
                                                <?php 
                                                endif; ?>
                                            </span>
                                        <?php 
                                        endif; ?>

                                        <?php 
                                        if ( 'yes' === $show_card_title && ! empty( $list_title ) && ! empty( $list_title_url ) ) : ?>
                                            <h3 class="tp-service-title ele-kd-cd-title mb-10"><a href="<?php echo esc_url($list_title_url); ?>"><?php echo kd_kses($list_title); ?></a></h3>
                                        <?php 
                                        elseif ( 'yes' === $settings['show_card_title'] && ! empty( $list_title ) ) : ?>
                                            <h3 class="tp-service-title ele-kd-cd-title mb-10"><?php echo kd_kses($list_title); ?></h3>
                                        <?php 
                                        endif; ?>


                                        <?php 
                                        if ( 'yes' === $show_card_dec && ! empty( $list_dec ) ) : ?>
                                            <p class="tp-service-dec ele-kd-cd-dec"><?php echo kd_kses($list_dec); ?></p>
                                        <?php 
                                        endif; ?>

                                        <?php 
                                        if (!empty($list_btn_text)): ?>
                                            <a class="tp-service-btn" href="<?php echo esc_url($list_btn_url); ?>">
                                                <span class="btn-text ele-kd-cd-btn"><?php echo kd_kses($list_btn_text); ?></span>
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
                            <?php 
                            endforeach; ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>



        <?php 
        elseif ($chose_style == 'service-style-2'):   ?>

        <div class="tp-service-item tp-service-2-item icon-anime-wrap ele-kd-bg wow fadeInUp" data-wow-duration=".9s"  data-wow-delay=".3s" data-bg-color="#ffca24">
            <span class="tp-service-icon icon-anime mb-75 d-inline-block">
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

            <?php 
			if (!empty($title)) : ?>
                <h3 class="tp-service-title ele-kd-title mb-15">
                    <a href="<?php echo esc_url($title_url); ?>" class="common-underline">
                        <?php echo kd_kses( $title ); ?>
                    </a>
                </h3>
            <?php 
            endif; ?>

            <?php 
			if (!empty($short_dec)) : ?>
                <p class="tp-service-dec ele-kd-dec mb-0"><?php echo esc_html( $short_dec ); ?></p>
            <?php 
            endif; ?>
        </div>



        <?php
        endif; ?>
	<?php

       
    }
}