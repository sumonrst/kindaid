<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Kd_Join_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-join';
    }

    public function get_title() {
        return __( 'Kindaid Join', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-user-preferences';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'join', 'community' ];
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
                    'label' => __( 'Join Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Join Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'join-style-1' => esc_html__('Join Style 1', 'kindaid'),
                        'join-style-2' => esc_html__('Join Style 2', 'kindaid'),
                        'join-style-3' => esc_html__('Join Style 3', 'kindaid'),
                    ],
                    'default' => 'join-style-1',
                ]
            );

        $this->end_controls_section();


        // Title Section Start
        $this->start_controls_section(
            'control_section_2',
                [
                    'label' => __( 'Join Title', 'kindaid' ),
                ]
            );

            $this->add_control(
                'sub_title',
                [
                    'label'       => __( 'Sub Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your sub title', 'kindaid' ),
                    'default'     => __( 'Join Our Community', 'kindaid' ),
                    'label_block' => true,
                ]
            );


            $this->add_control(
                'title',
                [
                    'label'       => __( 'Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Join our community for donating and be a part of a positive change in the world. with over:', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'fact_number',
                [
                    'label'       => __( 'Fact Number', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( '120,859', 'kindaid' ),
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
                'content_1',
                [
                    'label'       => __( 'Short Dec', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'People already joining', 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
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

            $this->add_control(
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

            $this->add_control(
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

            $this->add_control(
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

            $this->add_control(
                'btn_text_1',
                [
                    'label'       => __( 'Button Text 1', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Explore more', 'kindaid' ),
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


        $this->end_controls_section();


        // Thumbnail & Shape Section Start
        $this->start_controls_section(
            'Thumbnail_1',
                [
                    'label' => __( 'Thumbnail', 'kindaid' ),
                ]
            );

            $this->add_control(
                'shape_1',
                [
                    'label' => esc_html__( 'Shape Image 1', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Background Image 2 From Here', 'kindaid'),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'shape_2',
                [
                    'label'       => esc_html__('Shape Image 2', 'kindaid'),
                    'description' => esc_html__('Add Shape Image 1 From Here', 'kindaid'),
                    'type'        => \Elementor\Controls_Manager::MEDIA,
                    'default'     => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'dynamic'     => ['active' => true],
                ]
            );
            $this->add_control(
                'shape_3',
                [
                    'label'       => esc_html__('Shape Image 3', 'kindaid'),
                    'description' => esc_html__('Add Shape Image 3 From Here', 'kindaid'),
                    'type'        => \Elementor\Controls_Manager::MEDIA,
                    'default'     => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'dynamic'     => ['active' => true],
                ]
            );
            $this->add_control(
                'shape_4',
                [
                    'label'       => esc_html__('Shape Image 4', 'kindaid'),
                    'description' => esc_html__('Add Shape Image 4 From Here', 'kindaid'),
                    'type'        => \Elementor\Controls_Manager::MEDIA,
                    'default'     => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'dynamic'     => ['active' => true],
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
            
            
            
            //  Thumbnail & Shape Layout Start
            $this->add_control(
				'separator_heading_3',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Thumbnail & Shape Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_control(
                'show_shape_1',
                [
                    'label'   => esc_html__( 'Show Shape 1', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );	
            $this->add_control(
                'show_shape_2',
                [
                    'label'   => esc_html__( 'Show Shape 2', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );	
            $this->add_control(
                'show_shape_3',
                [
                    'label'   => esc_html__( 'Show Shape 3', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );	
            $this->add_control(
                'show_shape_4',
                [
                    'label'   => esc_html__( 'Show Shape 4', 'cleenpro-elementor' ),
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

            $this->add_control(
				'separator_heading_4',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Sub Title Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
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
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_2',
                    'selector' => '{{WRAPPER}} .ele-kd-subtitle',
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

        $this->end_controls_section();


        /** Shape 1 Style Tabs **/
        $this->start_controls_section(
            'style_tab_5',
                [
                    'label' => esc_html__('Shape 1 Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'width_1',
                [
                    'label' => esc_html__( 'Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 50, 'max' => 1000 ],
                        '%' => [ 'min' => 1, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-1' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'max_width_1',
                [
                    'label' => esc_html__( 'Max Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-1' => 'max-width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'height_1',
                [
                    'label' => esc_html__( 'Height', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vh' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-1' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'padding_5',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-shape-1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border_1',
                    'selector' => '{{WRAPPER}} .ele-kd-shape-1',
                ]
            );

            $this->add_responsive_control(
                'border_radius_1',
                [
                    'label' => esc_html__( 'Border Radius', 'kindaid' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    ],
                ]
            );

        $this->end_controls_section();


        //  Shape 2 Style here
        $this->start_controls_section(
            'style_tab_6',
                [
                    'label' => esc_html__('Shape 2 Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
				'separator_heading_9',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Shape 2 Style here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
                'width_2',
                [
                    'label' => esc_html__( 'Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 50, 'max' => 1000 ],
                        '%' => [ 'min' => 1, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-2' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'max_width_2',
                [
                    'label' => esc_html__( 'Max Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-2' => 'max-width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'height_2',
                [
                    'label' => esc_html__( 'Height', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vh' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-2' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'padding_8',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-shape-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border_2',
                    'selector' => '{{WRAPPER}} .ele-kd-shape-2',
                ]
            );

            $this->add_responsive_control(
                'border_radius_2',
                [
                    'label' => esc_html__( 'Border Radius', 'kindaid' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    ],
                ]
            );
        
        $this->end_controls_section();


        //  Shape 3 Style here
        $this->start_controls_section(
            'style_tab_7',
                [
                    'label' => esc_html__('Shape 3 Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'width_3',
                [
                    'label' => esc_html__( 'Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 50, 'max' => 1000 ],
                        '%' => [ 'min' => 1, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-3' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'max_width_3',
                [
                    'label' => esc_html__( 'Max Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-3' => 'max-width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'height_3',
                [
                    'label' => esc_html__( 'Height', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vh' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-3' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'padding_9',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_9',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border_3',
                    'selector' => '{{WRAPPER}} .ele-kd-shape-3',
                ]
            );

            $this->add_responsive_control(
                'border_radius_3',
                [
                    'label' => esc_html__( 'Border Radius', 'kindaid' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    ],
                ]
            );
        $this->end_controls_section();


        //  Shape 4 Style here
        $this->start_controls_section(
            'style_tab_8',
                [
                    'label' => esc_html__('Shape 4 Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'width_4',
                [
                    'label' => esc_html__( 'Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 50, 'max' => 1000 ],
                        '%' => [ 'min' => 1, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-4' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'max_width_4',
                [
                    'label' => esc_html__( 'Max Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-4' => 'max-width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'height_4',
                [
                    'label' => esc_html__( 'Height', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vh' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-4' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'padding_10',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_10',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border_4',
                    'selector' => '{{WRAPPER}} .ele-kd-shape-4',
                ]
            );

            $this->add_responsive_control(
                'border_radius_4',
                [
                    'label' => esc_html__( 'Border Radius', 'kindaid' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-shape-4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    ],
                ]
            );
        $this->end_controls_section();


        //  Button Style here
        $this->start_controls_section(
            'style_tab_9',
                [
                    'label' => esc_html__('Button Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );


            // Button Short Description Star

            $this->add_control(
				'separator_heading_10',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Button Short Dec here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_4',
                    'selector' => '{{WRAPPER}} .ele-kd-btn-dec',
                ]
            );
            $this->add_responsive_control(
				'color_5',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn-dec' => 'color: {{VALUE}}',
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
                        '{{WRAPPER}} .ele-kd-btn-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            // Button Style Star
            $this->add_control(
				'separator_heading_11',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Button Style here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_5',
                    'selector' => '{{WRAPPER}} .ele-kd-btn-title',
                ]
            );

            $this->add_responsive_control(
				'color_4',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-btn-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_responsive_control(
                'width_5',
                [
                    'label' => esc_html__( 'Width', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vw' ],
                    'range' => [
                        'px' => [ 'min' => 50, 'max' => 1000 ],
                        '%' => [ 'min' => 1, 'max' => 100 ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'height_5',
                [
                    'label' => esc_html__( 'Height', 'kindaid' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'vh' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'padding_11',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border_5',
                    'selector' => '{{WRAPPER}} .ele-kd-btn',
                ]
            );

            $this->add_responsive_control(
                'border_radius_5',
                [
                    'label' => esc_html__( 'Border Radius', 'kindaid' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                    ],
                ]
            );
        $this->end_controls_section();

    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'join-style-1'):   ?>

        <div class="tp-join-area ele-kd-bg scene fix pt-115 pb-150">
            <div class="container container-1424">
                <div class="tp-join text-center p-relative" >
                <div class="tp-join-shape d-none d-md-block">

                    <?php	
                    if ( kindaid_img_src($settings['shape_1']) )  :  ?>
                        <?php echo kindaid_img_src( $settings['shape_1'], 'tp-join-shape-1 p-absolute d-none d-lg-block layer ele-kd-shape-1' ); ?>
                    <?php
                    endif; ?>

                    <?php	
                    if ( kindaid_img_src($settings['shape_2']) )  :  ?>
                        <?php echo kindaid_img_src( $settings['shape_2'], 'tp-join-shape-2 p-absolute layer ele-kd-shape-2' ); ?>
                    <?php
                    endif; ?>

                    <?php	
                    if ( kindaid_img_src($settings['shape_3']) )  :  ?>
                        <?php echo kindaid_img_src( $settings['shape_3'], 'tp-join-shape-3 p-absolute d-none d-lg-block layer ele-kd-shape-3' ); ?>
                    <?php
                    endif; ?>

                    <?php	
                    if ( kindaid_img_src($settings['shape_4']) )  :  ?>
                        <?php echo kindaid_img_src( $settings['shape_4'], 'tp-join-shape-4 p-absolute layer ele-kd-shape-4' ); ?>
                    <?php
                    endif; ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="tp-join-info mb-60 ml-10 mr-10">
                            <?php 
                            if(!empty($sub_title)) : ?>
                                <span class="tp-section-subtitle d-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                    <?php echo kd_kses($sub_title); ?>
                                </span>
                            <?php
                            endif; ?>

                            <?php 
                            if(!empty($title)) : ?>
                                <h3 class="tp-join-title mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                    <?php echo kd_kses($title); ?>
                                </h3> 
                            <?php
                            endif; ?>  
                        </div>
                    </div>
                </div>

                    <?php 
                    if(!empty($fact_number)) : ?>
                        <h2 class="tp-join-number mb-70 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s"> <?php echo kd_kses($fact_number); ?></h2>
                    <?php
                    endif; ?>  

                    <div class="tp-join-down wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">

                    <?php 
                    if(!empty($content_1)) : ?>
                        <p class="tp-join-down-tittle ele-kd-btn-dec mb-15"><?php echo kd_kses($content_1); ?></p>
                    <?php
                    endif; ?>

                    <?php 
                    if ( ! empty( $settings['btn_text_1'] ) ) : ?>
                        <a class="tp-join-btn tp-btn ele-kd-btn tp-btn-animetion" href="<?php echo esc_url( $settings['btn_url_1']['url'] ?? '#' ); ?>">
                            <span class="btn-text"><?php echo kd_kses( $settings['btn_text_1'] ); ?></span>

                            <?php
                            $icon_style = $settings['chose_icon_style'] ?? '';
                            $has_icon = (
                                ( $icon_style === 'fontawosome_icon' && ! empty( $settings['list_icon']['value'] ) ) ||
                                ( $icon_style === 'image_icon' && ! empty( $settings['list_image_icon']['url'] ) ) ||
                                ( $icon_style === 'svg_icon' && ! empty( $settings['list_svg_icon'] ) )
                            );
                            ?>

                            <?php 
                            if ( $has_icon ) : ?>
                                <span class="btn-icon">
                                    <?php 
                                    if ( $icon_style === 'fontawosome_icon' && ! empty( $settings['list_icon']['value'] ) ) : ?>
                                        <i class="<?php echo esc_attr( $settings['list_icon']['value'] ); ?>"></i>

                                    <?php 
                                    elseif ( $icon_style === 'image_icon' && ! empty( $settings['list_image_icon']['url'] ) ) : ?>
                                        <img src="<?php echo esc_url( $settings['list_image_icon']['url'] ); ?>" alt="">

                                    <?php 
                                    elseif ( $icon_style === 'svg_icon' && ! empty( $settings['list_svg_icon'] ) ) : ?>
                                        <?php echo kd_kses( $settings['list_svg_icon'] ); ?>
                                    <?php 
                                    endif; ?>
                                </span>
                            <?php 
                            endif; ?>
                        </a>
                    <?php 
                    endif; ?>
                     
                </div>
                </div>
            </div>
        </div>

        <?php
        endif; ?>
	<?php

       
    }
}