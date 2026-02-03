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

        $this->end_controls_section();


        //  About List start
        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'About List', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['about-style-2'],
                    ],
                ]
            );

            $this->add_control(
				'separator_heading_16',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'About List 1 Style Here...', 'kindaid' ),
					'separator' => 'before',
                    'condition'   => [
                        'chose_style' => ['about-style-2'],
                    ],
                    
				]
			);

            $this->add_control(
                'chose_icon_style_11',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_11',
                    'options'     => [
                        'fontawosome_icon_11' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_11'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_11'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_11',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_11' => ['fontawosome_icon_11'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_11',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_11' => ['image_icon_11'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_11',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_11' => ['svg_icon_11'],
                    ],
                ]
            );

            $this->add_control(
                'list_title_11',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Registered Charities Supported' , 'kindaid' ),
                    'label_block' => true,
                ]
            );


            //  about list item 2 start
            $this->add_control(
				'separator_heading_17',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'About List 2 Style Here...', 'kindaid' ),
					'separator' => 'before',
                    'condition'   => [
                        'chose_style' => ['about-style-2'],
                    ],
                    
				]
			);

            $this->add_control(
                'chose_icon_style_16',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_16',
                    'options'     => [
                        'fontawosome_icon_16' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_16'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_16'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_16',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_16' => ['fontawosome_icon_16'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_16',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_16' => ['image_icon_16'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_16',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_16' => ['svg_icon_16'],
                    ],
                ]
            );

            $this->add_control(
                'list_title_12',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Registered Charities Supported' , 'kindaid' ),
                    'label_block' => true,
                ]
            );



        $this->end_controls_section();



        //  About Support start
        $this->start_controls_section(
            'control_section_3',
                [
                    'label' => __( 'Support Info', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['about-style-2'],
                    ],
                ]
            );


            $this->add_control(
                'title_2',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Support humanities' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'short_dec_2',
                [
                    'label'       => __( 'Short Dec', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'At its heart, charity is the act of giving, not merely material', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'shape_11',
                [
                    'label' => esc_html__( 'Background Image', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__( 'Add Your Service Background Image', 'kindaid' ),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition'   => [
                        'chose_style' => 'about-style-2',
                    ],
                ]
            );
        $this->end_controls_section();



        // Button Section Start
        $this->start_controls_section(
            'button_style',
                [
                    'label' => __( 'Button Section', 'kindaid' ),
                ]
            );

            $this->add_control(
				'separator_heading_13',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Button Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_control(
                'chose_icon_style_13',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_13',
                    'options'     => [
                        'fontawosome_icon_13' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_13'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_13'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_13',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_13' => ['fontawosome_icon_13'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_13',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_13' => ['image_icon_13'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_13',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_13' => ['svg_icon_13'],
                    ],
                ]
            );

            $this->add_control(
                'btn_text_1',
                [
                    'label'       => __( 'Button Text 1', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Discover More', 'kindaid' ),
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

            // CTA Style here
            $this->add_control(
				'separator_heading_14',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'CTA Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_control(
                'chose_icon_style_14',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_14',
                    'options'     => [
                        'fontawosome_icon_14' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_14'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_14'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_14',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_14' => ['fontawosome_icon_14'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_14',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_14' => ['image_icon_14'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_14',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_14' => ['svg_icon_14'],
                    ],
                ]
            );

            $this->add_control(
                'cta_text_14',
                [
                    'label'       => __( 'CTA Text', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'Call Us Anytime', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'phone_text_15',
                [
                    'label'       => __( 'CTA Phone', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( '(406) 555-0120', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'cta_url_14',
                [
                    'label'       => __( 'CTA Phone', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( '4065550120', 'kindaid' ),
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
                    'label_block' => true,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition'   => [
                        'chose_style' => ['about-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'bg_image_8',
                [
                    'label' => esc_html__( 'Thumbnail 1', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Thumbnail Image 1 From Here', 'kindaid'),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'bg_image_3',
                [
                    'label' => esc_html__( 'Thumbnail 2', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Thumbnail Image 2 From Here', 'kindaid'),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'bg_image_4',
                [
                    'label' => esc_html__( 'Thumbnail 3', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Thumbnail Image 3 From Here', 'kindaid'),
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'bg_image_5',
                [
                    'label' => esc_html__( 'Shape 1', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'description' => esc_html__('Add Thumbnail Image 4 From Here', 'kindaid'),
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
					'label' => __( 'Title Description Style Here...', 'kindaid' ),
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


        /** About List Style Tabs **/
        $this->start_controls_section(
            'style_tab_12',
                [
                    'label' => esc_html__('About List Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );


            // About List Title style here start
            $this->add_control(
				'separator_heading_12',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'About List Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_12',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-ab-list-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_12',
                    'selector' => '{{WRAPPER}} .ele-kd-ab-list-title',
                ]
            );

            $this->add_responsive_control(
                'padding_12',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-ab-list-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_12',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-ab-list-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


            // About List Icon style here start
            $this->add_control(
				'separator_heading_18',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'About List Icon Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);
            $this->add_responsive_control(
                'margin_13',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-ab-list-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            
            $this->add_responsive_control(
                'width_12',
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


        /** Thumbnail Style Tabs **/
        $this->start_controls_section(
            'style_tab_6',
                [
                    'label' => esc_html__('Thumbnail Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_control(
				'separator_heading_10',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Thumbnail Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);


            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'thumb_border_1',
                    'label' => esc_html__( 'Image Border', 'kindaid' ),
                    'selector' => '{{WRAPPER}} .tp-about-3-thumb-3',
                ]
            );


            $this->add_responsive_control(
                'margin_11',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .tp-about-3-thumb-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $this->end_controls_section();

    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'about-style-1') :   ?>
 
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
        elseif ($chose_style == 'about-style-2') : ?>

        <div class="tp-about-area ele-kd-bg pt-120 pb-90">
            <div class="container container-1424">
                <div class="row align-items-center">
                <div class="offset-xl-1 col-xl-5 offset-lg-2 col-lg-9">
                    <div class="tp-about-3-thumb-wrap text-md-end p-relative mb-30">

                        <?php	
                        if ( kd_img_src($settings['bg_image_8']) )  :  ?>
                            <img class="tp-about-3-thumb" src="<?php echo kd_img_src($settings['bg_image_8']); ?>" alt="<?php esc_attr_e( 'Shape 1', 'kindaid' ); ?>" >
                        <?php
                        endif; ?>

                        <?php	
                        if ( kd_img_src($settings['bg_image_3']) )  :  ?>
                            <img class="tp-about-3-thumb-2" data-parallax='{"y": 40, "smoothness": 10}' src="<?php echo kd_img_src($settings['bg_image_3']); ?>" alt="<?php esc_attr_e( 'Shape 2', 'kindaid' ); ?>" >
                        <?php
                        endif; ?>

                        <?php	
                        if ( kd_img_src($settings['bg_image_4']) )  :  ?>
                            <img class="tp-about-3-thumb-3" data-parallax='{"y": 40, "smoothness": 10}' src="<?php echo kd_img_src($settings['bg_image_4']); ?>" alt="<?php esc_attr_e( 'Shape 3', 'kindaid' ); ?>" >
                        <?php
                        endif; ?>

                        <?php	
                        if ( kd_img_src($settings['bg_image_5']) )  :  ?>
                            <img class="tp-about-3-thumb-shape" data-parallax='{"y": 40, "smoothness": 10}' src="<?php echo kd_img_src($settings['bg_image_5']); ?>" alt="<?php esc_attr_e( 'Shape 4', 'kindaid' ); ?>" >
                        <?php
                        endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tp-about-3 ml-100 mb-10">
                        <div class="tp-section-info mb-30 p-relative">
                            <?php
                            if(!empty($sub_title)) : ?>
                                <span class="tp-section-subtitle ele-kd-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($sub_title); ?></span>
                            <?php 
                            endif;?>

                            <?php
                            if(!empty($title)) : ?>
                                <h2 class="tp-section-title ele-kd-title mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s"><?php echo kd_kses($title); ?></h2> 
                            <?php 
                            endif;?>  

                            <?php
                            if(!empty($short_dec)) : ?>
                                <p class="tp-section-dec ele-kd-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s"><?php echo kd_kses($short_dec); ?></p>
                            <?php 
                            endif;?>  
                        </div>

                        <div class="tp-about-3-list-wrapper mb-35 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                            <?php
                            if(!empty($list_title_11)) : ?>
                                <div class="tp-about-3-list d-flex align-items-center flex-wrap mb-10">
                                    <span class="tp-about-3-list-icon mr-10">
                                        <?php
                                            $has_icon_11 = (
                                                ( $settings['chose_icon_style_11'] === 'fontawosome_icon_11' && ! empty( $settings['list_icon_11']['value'] ) ) ||
                                                ( $settings['chose_icon_style_11'] === 'image_icon_11' && ! empty( $settings['list_image_icon_11']['url'] ) ) ||
                                                ( $settings['chose_icon_style_11'] === 'svg_icon_11' && ! empty( $settings['list_svg_icon_11'] ) )
                                            );
                                        ?>

                                        <?php 
                                        if ( $has_icon_11 ) : ?>
                                            <span class="tp-service-icon ele-kd-ab-list-icon icon-anime mb-25 d-inline-block">
                                                <?php 
                                                if ( $settings['chose_icon_style_11'] === 'fontawosome_icon_11' && ! empty( $settings['list_icon_11']['value'] ) ) : ?>

                                                <?php \Elementor\Icons_Manager::render_icon( $settings['list_icon_11'], [ 'aria-hidden' => 'true' ] ); ?>

                                                <?php 
                                                elseif ( $settings['chose_icon_style_11'] === 'image_icon_11' && ! empty( $settings['list_image_icon_11']['url'] ) ) : ?>
                                                    <img src="<?php echo esc_url( $settings['list_image_icon_11']['url'] ); ?>" alt="">

                                                <?php 
                                                elseif ( $settings['chose_icon_style_11'] === 'svg_icon_11' && ! empty( $settings['list_svg_icon_11'] ) ) : ?>
                                                    <?php echo kd_kses($settings['list_svg_icon_11']); ?>
                                                <?php 
                                                endif; ?>
                                            </span>
                                        <?php 
                                        endif; ?>

                                    </span>
                                    <span class="tp-about-3-list-text ele-kd-ab-list-title"><?php echo esc_html($list_title_11); ?></span>
                                </div>
                            <?php 
                            endif;?>  

                            <?php
                            if(!empty($list_title_12)) : ?>
                                <div class="tp-about-3-list d-flex align-items-center flex-wrap mb-10">
                                    <span class="tp-about-3-list-icon mr-10">
                                        <?php
                                            $has_icon_16 = (
                                                ( $settings['chose_icon_style_16'] === 'fontawosome_icon_16' && ! empty( $settings['list_icon_16']['value'] ) ) ||
                                                ( $settings['chose_icon_style_16'] === 'image_icon_16' && ! empty( $settings['list_image_icon_16']['url'] ) ) ||
                                                ( $settings['chose_icon_style_16'] === 'svg_icon_16' && ! empty( $settings['list_svg_icon_16'] ) )
                                            );
                                        ?>

                                        <?php 
                                        if ( $has_icon_16 ) : ?>
                                            <span class="tp-service-icon ele-kd-ab-list-icon icon-anime mb-25 d-inline-block">
                                                <?php 
                                                if ( $settings['chose_icon_style_16'] === 'fontawosome_icon_16' && ! empty( $settings['list_icon_16']['value'] ) ) : ?>

                                                <?php \Elementor\Icons_Manager::render_icon( $settings['list_icon_16'], [ 'aria-hidden' => 'true' ] ); ?>

                                                <?php 
                                                elseif ( $settings['chose_icon_style_16'] === 'image_icon_16' && ! empty( $settings['list_image_icon_16']['url'] ) ) : ?>
                                                    <img src="<?php echo esc_url( $settings['list_image_icon_16']['url'] ); ?>" alt="">

                                                <?php 
                                                elseif ( $settings['chose_icon_style_16'] === 'svg_icon_16' && ! empty( $settings['list_svg_icon_16'] ) ) : ?>
                                                    <?php echo kd_kses($settings['list_svg_icon_16']); ?>
                                                <?php 
                                                endif; ?>
                                            </span>
                                        <?php 
                                        endif; ?>
                                    </span>
                                    <span class="tp-about-3-list-text ele-kd-ab-list-title"><?php echo esc_html($list_title_12); ?></span>
                                </div>
                            <?php 
                            endif;?> 
                        </div>


                            <?php
                            if(!empty($title_2)) : ?>
                                <div class="tp-about-3-support-wrap d-flex mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="tp-about-3-support-icon mr-20 mb-10">
                                        <?php
                                        if ( kindaid_img_src($settings['shape_11']) )  : ?>
                                            <?php echo kindaid_img_src( $settings['shape_11'], 'ele-kd-sup-img' ); ?>
                                        <?php
                                        endif; ?>
                                    </div>
                                    <div class="tp-about-3-support-dec mb-10">
                                        <?php
                                        if(!empty($title_2)) : ?>
                                            <span class="tp-about-3-support-title"><?php echo esc_html($title_2);?></span>
                                        <?php
                                        endif; ?>

                                        <?php
                                        if(!empty($short_dec_2)) : ?>
                                            <p><?php echo esc_html($short_dec_2);?></p>
                                        <?php
                                        endif; ?>
                                    </div>
                                </div>
                            <?php 
                            endif;?> 

                            <div class="tp-about-3-btn d-flex align-items-center flex-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".8s">
                                <?php
                                if(!empty($btn_text_1)) : ?>
                                    <a class="tp-btn tp-btn-animetion mb-20 mr-20" href="<?php echo esc_url($btn_url_1['url']);?>">
                                        <span class="btn-text"><?php echo esc_html($btn_text_1);?></span>
                                        <span class="btn-icon">
                                            <?php
                                                $icon_style_13 = $settings['chose_icon_style_13'] ?? '';
                                                $has_icon_13 = (
                                                    ( $icon_style_13 === 'fontawosome_icon_13' && ! empty( $settings['list_icon_13']['value'] ) ) ||
                                                    ( $icon_style_13 === 'image_icon_13' && ! empty( $settings['list_image_icon_13']['url'] ) ) ||
                                                    ( $icon_style_13 === 'svg_icon_13' && ! empty( $settings['list_svg_icon_13'] ) )
                                                );
                                            ?>

                                            <?php 
                                            if ( $has_icon_13 ) : ?>
                                                <span class="btn-icon">
                                                    <?php 
                                                    if ( $icon_style_13 === 'fontawosome_icon_13' && ! empty( $settings['list_icon_13']['value'] ) ) : ?>
                                                        <i class="<?php echo esc_attr( $settings['list_icon_13']['value'] ); ?>"></i>

                                                    <?php 
                                                    elseif ( $icon_style_13 === 'image_icon_13' && ! empty( $settings['list_image_icon_13']['url'] ) ) : ?>
                                                        <img src="<?php echo esc_url( $settings['list_image_icon_13']['url'] ); ?>" alt="">

                                                    <?php 
                                                    elseif ( $icon_style_13 === 'svg_icon_13' && ! empty( $settings['list_svg_icon_13'] ) ) : ?>
                                                        <?php echo kd_kses( $settings['list_svg_icon_13'] ); ?>
                                                    <?php 
                                                    endif; ?>
                                                </span>
                                            <?php 
                                            endif; ?>
                                        </span>
                                    </a>
                                <?php
                                endif; ?>

                                <?php
                                if(!empty($phone_text_15)) : ?>
                                    <div class="tp-about-3-contact-info d-flex mb-20">
                                        <span class="tp-about-3-contact-icon d-inline-flex justify-content-center align-items-center mr-15">
                                            <?php
                                                $icon_style_14 = $settings['chose_icon_style_14'] ?? '';
                                                $has_icon_14 = (
                                                    ( $icon_style_14 === 'fontawosome_icon_14' && ! empty( $settings['list_icon_14']['value'] ) ) ||
                                                    ( $icon_style_14 === 'image_icon_14' && ! empty( $settings['list_image_icon_14']['url'] ) ) ||
                                                    ( $icon_style_14 === 'svg_icon_14' && ! empty( $settings['list_svg_icon_14'] ) )
                                                );
                                            ?>

                                            <?php 
                                            if ( $has_icon_14 ) : ?>
                                                <span class="btn-icon">
                                                    <?php 
                                                    if ( $icon_style_14 === 'fontawosome_icon_14' && ! empty( $settings['list_icon_14']['value'] ) ) : ?>
                                                        <i class="<?php echo esc_attr( $settings['list_icon_14']['value'] ); ?>"></i>

                                                    <?php 
                                                    elseif ( $icon_style_14 === 'image_icon_14' && ! empty( $settings['list_image_icon_14']['url'] ) ) : ?>
                                                        <img src="<?php echo esc_url( $settings['list_image_icon_14']['url'] ); ?>" alt="">

                                                    <?php 
                                                    elseif ( $icon_style_14 === 'svg_icon_14' && ! empty( $settings['list_svg_icon_14'] ) ) : ?>
                                                        <?php echo kd_kses( $settings['list_svg_icon_14'] ); ?>
                                                    <?php 
                                                    endif; ?>
                                                </span>
                                            <?php 
                                            endif; ?>
                                        </span>
                                        <div class="tp-about-3-contact">
                                             <?php
                                            if(!empty($cta_text_14)) : ?>
                                                <span class="d-block"><?php echo kd_kses($cta_text_14); ?></span>
                                            <?php
                                            endif; ?>
                                            <a class="common-underline" href="tel:<?php echo esc_attr($cta_url_14); ?>"><?php echo kd_kses($phone_text_15); ?></a>
                                        </div>
                                    </div>
                                <?php
                                endif; ?>
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