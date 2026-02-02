<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class About_Widget extends Widget_Base {

    public function get_name() {
        return 'about';
    }

    public function get_title() {
        return __( 'About', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-heading';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'about', 'about-us' ];
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
                    'label' => __( 'About Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose About Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'about-style-1' => esc_html__('About Style 1', 'kindaid'),
                        'about-style-2' => esc_html__('About Style 2', 'kindaid'),
                        'about-style-3' => esc_html__('About Style 3', 'kindaid'),
                    ],
                    'default' => 'about-style-1',
                ]
            );

        $this->end_controls_section();


        // Title Section Start
        $this->start_controls_section(
            'control_section_2',
                [
                    'label' => __( 'Title', 'kindaid' ),
                ]
            );

            $this->add_control(
                'sub_title',
                [
                    'label'       => __( 'Sub Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your sub title', 'kindaid' ),
                    'default'     => __( 'About foundation', 'kindaid' ),
                    'label_block' => true,
                ]
            );


            $this->add_control(
                'title',
                [
                    'label'       => __( 'Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Helping Each<br> Other can Make <span>World</span><br> Better', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'short_dec',
                [
                    'label'       => __( 'Short Dec', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'To ensure a sustainable future we believe there is an urgent need to make change happen faster and at greater scale than what we witness today.', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            // Button Section Start
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

            $this->add_control(
                'button_text',
                [
                    'label'       => __( 'Button Text', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Discover More', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'button_url',
                [
                    'label'       => __( 'Button URL', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( '#', 'kindaid' ),
                    'label_block' => true,
                ]
            );

        $this->end_controls_section();




        // Counter Section Start
        $this->start_controls_section(
            'control_section_3',
                [
                    'label' => __( 'Counter', 'kindaid' ),
                ]
            );

            $this->add_control(
                'title_2',
                [
                    'label'       => __( 'Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( '50k', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'short_dec_1',
                [
                    'label'       => __( 'Short Dec', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Trust by Clients and<br> Organizations', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'bg_image_2',
                [
                    'label' => esc_html__( 'Counter Image', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Counter Image 1 From Here', 'kindaid'),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'label_block' => true,
                ]
            );
        $this->end_controls_section();



        // Thumbnail & Shape Section Start
        $this->start_controls_section(
            'Thumbnail_1',
                [
                    'label' => __( 'Thumbnail', 'kindaid' ),
                ]
            );

            $this->add_control(
                'bg_image_1',
                [
                    'label' => esc_html__( 'Background Image', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Background Image 1 From Here', 'kindaid'),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'label_block' => true,
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
                'show_sub_title',
                [
                    'label'   => esc_html__( 'Show Sub Title', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
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
                'show_short_dec',
                [
                    'label'   => esc_html__( 'Show Shor Dec', 'cleenpro-elementor' ),
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


            // SubTitle style here start
            $this->add_control(
				'separator_heading_8',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'SubTitle Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_6',
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
                    'name' => 'typography_5',
                    'selector' => '{{WRAPPER}} .ele-kd-subtitle',
                ]
            );

            $this->add_responsive_control(
                'padding_5',
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
                'margin_6',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            
            $this->add_responsive_control(
                'width_2',
                [
                    'label' => __( 'Width', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 0, 'max' => 2000 ],
                        '%'  => [ 'min' => 0, 'max' => 100 ],
                        'vw' => [ 'min' => 0, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-subtitle' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

           
            // Title style here start
            $this->add_control(
				'separator_heading_6',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Title Style Here...', 'kindaid' ),
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

            
            $this->add_responsive_control(
                'width_1',
                [
                    'label' => __( 'Width', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 0, 'max' => 2000 ],
                        '%'  => [ 'min' => 0, 'max' => 100 ],
                        'vw' => [ 'min' => 0, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-title' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );


            // Shor Description style here start

            $this->add_control(
				'separator_heading_7',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Title Style Here...', 'kindaid' ),
					'separator' => 'before',
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

            $this->add_control(
				'separator_heading_9',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Button Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_5',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_6',
                    'selector' => '{{WRAPPER}} .ele-kd-btn',
                ]
            );

            $this->add_responsive_control(
                'padding_6',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            
            $this->add_responsive_control(
                'width_4',
                [
                    'label' => __( 'Width', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 0, 'max' => 2000 ],
                        '%'  => [ 'min' => 0, 'max' => 100 ],
                        'vw' => [ 'min' => 0, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();


        /** Counter Style Tabs **/
        $this->start_controls_section(
            'style_tab_6',
                [
                    'label' => esc_html__('Counter Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
				'separator_heading_10',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Counter Title Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_11',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-coutitle' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_11',
                    'selector' => '{{WRAPPER}} .ele-kd-coutitle',
                ]
            );

            $this->add_responsive_control(
                'padding_11',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-coutitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_11',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-coutitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            
            $this->add_responsive_control(
                'width_11',
                [
                    'label' => __( 'Width', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 0, 'max' => 2000 ],
                        '%'  => [ 'min' => 0, 'max' => 100 ],
                        'vw' => [ 'min' => 0, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-coutitle' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            // Counter Description style start
            $this->add_control(
				'separator_heading_14',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Counter Title Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_14',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-cou-dec' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_14',
                    'selector' => '{{WRAPPER}} .ele-kd-cou-dec',
                ]
            );

            $this->add_responsive_control(
                'padding_14',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cou-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_14',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cou-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            
            $this->add_responsive_control(
                'width_14',
                [
                    'label' => __( 'Width', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 0, 'max' => 2000 ],
                        '%'  => [ 'min' => 0, 'max' => 100 ],
                        'vw' => [ 'min' => 0, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-cou-dec' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();

    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'about-style-1'):   ?>
 
        <div class="tp-about-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                <div class="col-xxl-6 col-xl-6">
                    <div class="tp-about-thumb mr-80 h-100">
                        <?php	
                        if ( kindaid_img_src($settings['bg_image_1']) )  :  ?>
                            <?php echo kindaid_img_src( $settings['bg_image_1'], 'w-100 ele-kd-shape-4' ); ?>
                        <?php
                        endif; ?>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6">
                    <div class="tp-about-content tp-about-2-text pt-80 pb-80 mr-100">
                        <?php 
                        if(!empty($sub_title)) : ?>
                            <span class="tp-section-subtitle ele-kd-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">
                                <?php echo esc_html($sub_title); ?>
                            </span>
                        <?php 
                        endif; ?>

                        <?php 
                        if(!empty($title)) : ?>
                            <h2 class="tp-section-title ele-kd-title mb-35 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                               <?php echo kd_kses( $title ); ?>
                            </h2>
                        <?php 
                        endif; ?>
                        <div class="tp-about-dec-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="tp-about-dec">
                                    <?php 
                                    if(!empty($short_dec)) : ?>
                                        <p class="ele-kd-dec mb-40"><?php echo esc_html( $short_dec ); ?></p>
                                    <?php 
                                    endif; ?>

                                    <?php 
                                    if(!empty($button_text)) : ?>
                                        <a class="tp-btn ele-kd-btn tp-btn-secondary tp-btn-animetion" href="<?php echo esc_url( $button_text ); ?>">
                                            <span class="btn-text"><?php echo esc_html( $button_text ); ?></span>
                                            <span class="btn-icon">
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
                                        </a>
                                    <?php 
                                    endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="tp-about-user pl-20">
                                    <?php 
                                    if(!empty($title_2)) : ?>
                                        <h4 class="ele-kd-coutitle"><?php echo kd_kses( $title_2 ); ?></h4>
                                    <?php 
                                    endif; ?>

                                    <?php 
                                    if(!empty($short_dec_1)) : ?>
                                        <p class="ele-kd-cou-dec mb-20"><?php echo kd_kses( $short_dec_1 ); ?></p>
                                    <?php 
                                    endif; ?>

                                    <?php	
                                    if ( kindaid_img_src($settings['bg_image_2']) )  :  ?>
                                        <?php echo kindaid_img_src( $settings['bg_image_2'], 'ele-kd-ab-bg' ); ?>
                                    <?php
                                    endif; ?>
                                </div>
                            </div>
                            </div>
                        </div>
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