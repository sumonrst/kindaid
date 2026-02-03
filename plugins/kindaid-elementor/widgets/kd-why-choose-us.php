<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Why_Choose_Us_Widget extends Widget_Base {

    public function get_name() {
        return 'why-choose-us';
    }

    public function get_title() {
        return __( 'Kindaid Why Choose Us', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-heading';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'why choose us', 'why choose' ];
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
                    'label' => __( 'Who We Are Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Join Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'why-choose-style-1' => esc_html__('Why Choose Style 1', 'kindaid'),
                        'why-choose-style-2' => esc_html__('Why Choose Style 2', 'kindaid'),
                        'why-choose-style-3' => esc_html__('Why Choose Style 3', 'kindaid'),
                    ],
                    'default' => 'why-choose-style-1',
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
                    'default'     => __( 'Team section', 'kindaid' ),
                    'label_block' => true,
                ]
            );


            $this->add_control(
                'title',
                [
                    'label'       => __( 'Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Meet our Volunteer <span>Team</span> Members', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'phone_title',
                [
                    'label'       => __( 'Phone Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Call Us Anytime', 'kindaid' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_style' => ['why-choose-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'phone_num',
                [
                    'label'       => __( 'Phone', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( '406555-0120', 'kindaid' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_style' => ['why-choose-style-1'],
                    ],
                ]
            );
            $this->add_control(
                'phone_url',
                [
                    'label'       => __( 'Phone URL', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( '#', 'kindaid' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_style' => ['why-choose-style-1'],
                    ],
                ]
            );

            $this->add_control(
                'short_dec',
                [
                    'label'       => __( 'Short Dec', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'Shor Description It is a long established fact that a reader will be', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'btn_text',
                [
                    'label'       => __( 'Button Text', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your title', 'kindaid' ),
                    'default'     => __( 'More About Us', 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'btn_url',
                [
                    'label'       => __( 'Button URL', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your Url', 'kindaid' ),
                    'default'     => __( '#', 'kindaid' ),
                    'label_block' => true,
                ]
            );

        $this->end_controls_section();




        //  Who we are  List start
        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'List Item', 'kindaid' ),
                    'condition'   => [
                        'chose_style' => ['why-choose-style-2'],
                    ],
                ]
            );
            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'chose_icon_style_18',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_18',
                    'options'     => [
                        'fontawosome_icon_18' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_18'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_18'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $repeater->add_control(
                'list_icon_18',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_18' => ['fontawosome_icon_18'],
                    ],

                ]
            );

            $repeater->add_control(
				'list_image_icon_18',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_18' => ['image_icon_18'],
                    ],
				]
			);

            $repeater->add_control(
                'list_svg_icon_18',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_18' => ['svg_icon_18'],
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
                'list_dec',
                [
                    'label' => esc_html__( 'Description', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( 'Lorem ipsum is simply text the printing.' , 'kindaid' ),
                    'label_block' => true,
                ]
            );


            $this->add_control(
                'list_who_we_are',
                [
                    'label' => esc_html__( 'List Item', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_title'    => esc_html__( 'Fundraising', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Discover the inspiring stories of individuals and communities transformed by our programs.', 'kindaid' ),
                        ],
                        [
                            'list_title'    => esc_html__( 'Donation making', 'kindaid' ),
                            'list_dec'  => esc_html__( 'Discover the inspiring stories of individuals and communities transformed by our programs.', 'kindaid' ),
                        ],
                    ],
                    'title_field' => '{{{ list_title }}}',
                ]
            );

        $this->end_controls_section();




        // Button Section Start
        $this->start_controls_section(
            'button_style',
                [
                    'label' => __( 'Button', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_icon_style_19',
                [
                    'label' => esc_html__( 'Select Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default'     => 'fontawosome_icon_19',
                    'options'     => [
                        'fontawosome_icon_19' => esc_html__( 'Icon', 'kindaid' ),
                        'image_icon_19'       => esc_html__( 'Image', 'kindaid' ),
                        'svg_icon_19'         => esc_html__( 'SVG', 'kindaid' ),
                    ],
                ]
            );

            $this->add_control(
                'list_icon_19',
                [
                    'label' => esc_html__( 'Icon', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'label_block' => true,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'fa-solid',
                    ],
                    'condition'   => [
                        'chose_icon_style_19' => ['fontawosome_icon_19'],
                    ],

                ]
            );

            $this->add_control(
				'list_image_icon_19',
				[
					'label' => esc_html__( 'Image Icon', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
                    'condition'   => [
                        'chose_icon_style_19' => ['image_icon_19'],
                    ],
				]
			);

            $this->add_control(
                'list_svg_icon_19',
                [
                    'label' => esc_html__( 'SVG Code Here', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( '' , 'textdomain' ),
                    'label_block' => true,
                    'condition'   => [
                        'chose_icon_style_19' => ['svg_icon_19'],
                    ],
                ]
            );

            $this->add_control(
                'btn_text_1',
                [
                    'label'       => __( 'Button Text 1', 'kindaid' ),
                    'type'        => Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter your text', 'kindaid' ),
                    'default'     => __( 'all events', 'kindaid' ),
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
                    'label_block' => true,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition'   => [
                        'chose_style' => ['why-choose-style-1', 'why-choose-style-2'],
                    ],
                ]
            );

            $this->add_control(
                'bg_image_1',
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


            // Shor Description style here start

            $this->add_control(
				'separator_heading_7',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Shor Dec Style Here...', 'kindaid' ),
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




        /** List Item Style Tabs **/
        $this->start_controls_section(
            'style_tab_11',
                [
                    'label' => esc_html__('List Item Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );


            $this->add_control(
				'separator_heading_11',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'List item Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_11',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-list-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_11',
                    'selector' => '{{WRAPPER}} .ele-kd-list-title',
                ]
            );

            $this->add_responsive_control(
                'padding_11',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-list-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-list-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );



            //  List Item description style here
            $this->add_control(
				'separator_heading_8',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'List item Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_5',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-list-dec' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_5',
                    'selector' => '{{WRAPPER}} .ele-kd-list-dec',
                ]
            );

            $this->add_responsive_control(
                'padding_5',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-list-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-list-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();




        /** Button Style Tabs **/
        $this->start_controls_section(
            'style_tab_12',
                [
                    'label' => esc_html__('Button Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            //  List Item Title style here
            $this->add_control(
				'separator_heading_12',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'List Button Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_12',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-list-btn-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_12',
                    'selector' => '{{WRAPPER}} .ele-kd-list-btn-title',
                ]
            );

            $this->add_responsive_control(
                'padding_12',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-list-btn-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-list-btn-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            //  List Item button background style here
            $this->add_control(
				'separator_heading_13',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'List Button Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_13',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-list-btn' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_13',
                    'selector' => '{{WRAPPER}} .ele-kd-list-btn',
                ]
            );

            $this->add_responsive_control(
                'padding_13',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-list-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'margin_13',
                [
                    'label' => esc_html__('Margin', 'zylo-elementor'),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em'],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-list-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();

    }




    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'why-choose-style-1'):   ?>

            <div class="tp-chose-area ele-kd-bg tp-bg-mulberry pt-125 p-relative">
                <?php	
                if ( kindaid_img_src($settings['shape_1']) )  :  ?>
                    <?php echo kindaid_img_src( $settings['shape_1'], 'tp-service-shape ele-kd-shape-1' ); ?>
                <?php
                endif; ?>
                <div class="container container-1424">
                    <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="tp-chose-thumb p-relative mr-70">
                            <?php	
                            if ( kindaid_img_src($settings['bg_image_1']) )  :  ?>
                                <?php echo kindaid_img_src( $settings['bg_image_1'], 'w-100 ele-kd-shape-1' ); ?>
                            <?php
                            endif; ?>

                            <div class="tp-chose-contact-info d-flex align-items-center">
                                <span class="tp-chose-contact-icon mr-15">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.62 10.7501C17.19 10.7501 16.85 10.4001 16.85 9.9801C16.85 9.6101 16.48 8.8401 15.86 8.1701C15.25 7.5201 14.58 7.1401 14.02 7.1401C13.59 7.1401 13.25 6.7901 13.25 6.3701C13.25 5.9501 13.6 5.6001 14.02 5.6001C15.02 5.6001 16.07 6.1401 16.99 7.1101C17.85 8.0201 18.4 9.1501 18.4 9.9701C18.4 10.4001 18.05 10.7501 17.62 10.7501Z" fill="#620035" />
                                    <path d="M21.23 10.75C20.8 10.75 20.46 10.4 20.46 9.98C20.46 6.43 17.57 3.55 14.03 3.55C13.6 3.55 13.26 3.2 13.26 2.78C13.26 2.36 13.6 2 14.02 2C18.42 2 22 5.58 22 9.98C22 10.4 21.65 10.75 21.23 10.75Z" fill="#620035" />
                                    <path opacity="0.4" d="M11.79 14.21L8.52 17.48C8.16 17.16 7.81 16.83 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.09 13.57 11.44 13.91 11.79 14.21Z" fill="#620035" />
                                    <path d="M21.9701 18.33C21.9701 18.61 21.9201 18.9 21.8201 19.18C21.7901 19.26 21.7601 19.34 21.7201 19.42C21.5501 19.78 21.3301 20.12 21.0401 20.44C20.5501 20.98 20.0101 21.37 19.4001 21.62C19.3901 21.62 19.3801 21.63 19.3701 21.63C18.7801 21.87 18.1401 22 17.4501 22C16.4301 22 15.3401 21.76 14.1901 21.27C13.0401 20.78 11.8901 20.12 10.7501 19.29C10.3601 19 9.9701 18.71 9.6001 18.4L12.8701 15.13C13.1501 15.34 13.4001 15.5 13.6101 15.61C13.6601 15.63 13.7201 15.66 13.7901 15.69C13.8701 15.72 13.9501 15.73 14.0401 15.73C14.2101 15.73 14.3401 15.67 14.4501 15.56L15.2101 14.81C15.4601 14.56 15.7001 14.37 15.9301 14.25C16.1601 14.11 16.3901 14.04 16.6401 14.04C16.8301 14.04 17.0301 14.08 17.2501 14.17C17.4701 14.26 17.7001 14.39 17.9501 14.56L21.2601 16.91C21.5201 17.09 21.7001 17.3 21.8101 17.55C21.9101 17.8 21.9701 18.05 21.9701 18.33Z" fill="#620035" />
                                </svg>
                                </span>

                                <?php 
                                if(!empty($phone_title) || !empty($phone_num)) : ?>
                                    <div class="tp-chose-contact-numbar">
                                        <span class="d-block"><?php echo kd_kses($phone_title); ?></span>
                                        <a href="tel:<?php echo esc_attr($phone_num); ?>" class="common-underline"><?php echo kd_kses($phone_num); ?></a>
                                    </div>
                                <?php
                                endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-8 col-lg-8">
                        <div class="tp-chose-content pb-70 ml-35">
                            <?php 
                            if(!empty($title)) : ?>
                                <h3 class="tp-chose-title ele-kd-title mb-55"><?php echo kd_kses($title); ?></h3>
                            <?php
                            endif; ?>
                            <div class="tp-chose-dec d-md-flex">
                                <?php 
                                if(!empty($sub_title)) : ?>
                                    <span class="tp-chose-dec-subtitle ele-kd-subtitle mr-135 mb-20 d-inline-block"><?php echo esc_html($sub_title); ?></span>
                                <?php
                                endif; ?>
                                <div>

                                <?php 
                                if(!empty($short_dec)) : ?>
                                    <p class="ele-kd-dec mb-25"><?php echo esc_html($short_dec); ?></p>
                                <?php
                                endif; ?>

                                <?php 
                                if(!empty($btn_text)) : ?>
                                    <a class="tp-btn-nopading tp-btn tp-btn-animetion" href="<?php echo esc_url($btn_url); ?>">
                                        <span class="btn-text"><?php echo kd_kses($btn_text); ?></span>
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
                    </div>
                </div>
            </div>



        <?php 
        elseif ($chose_style == 'why-choose-style-2') :   ?>

            <div class="tp-about-area ele-kd-bg fix p-relative">
                <div class="container-fluid p-0">
                    <div class="row">
                    <div class="col-xl-3">
                        <div class="tp-about-2-thumb">
                            <?php	
                            if ( kindaid_img_src($settings['bg_image_1']) )  :  ?>
                                <?php echo kindaid_img_src( $settings['bg_image_1'], 'w-100 ele-kd-shape-4' ); ?>
                            <?php
                            endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tp-about-2-content-wrap ml-30 pt-165 pb-170 tp-bg-mulberry p-relative">
                            <?php	
                            if ( kindaid_img_src($settings['shape_1']) )  :  ?>
                                <?php echo kindaid_img_src( $settings['shape_1'], 'tp-about-2-map ele-kd-shape-4' ); ?>
                            <?php
                            endif; ?>
                            <div class="row">
                                <div class="offset-xxl-5 col-xxl-5 offset-xl-4 col-xl-7">
                                <div class="tp-about-2-content-inner mr-30">
                                    <div class="tp-about-2-info mb-40">
                                        <?php 
                                        if(!empty($sub_title)) : ?>
                                            <span class="tp-section-subtitle ele-kd-subtitle tp-section-subtitle-yellow d-inline-block mb-15 wow fadeInUp"  data-wow-duration=".9s" data-wow-delay=".3s">
                                                <?php echo esc_html($sub_title); ?>
                                            </span>
                                        <?php
                                        endif; ?>

                                        <?php 
                                        if(!empty($title)) : ?>
                                            <h2 class="tp-section-title ele-kd-title tp-section-title-white mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                                <?php echo kd_kses($title); ?>
                                            </h2>
                                        <?php
                                        endif; ?>

                                        <?php 
                                        if(!empty($short_dec)) : ?>
                                            <p class="tp-about-2-dec ele-kd-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                                <?php echo kd_kses($short_dec); ?>
                                            </p>
                                        <?php
                                        endif; ?>
                                    </div>
                                    <div class="tp-about-list-wrapper wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                        <?php 
                                        foreach ( $settings['list_who_we_are'] as $key => $item ) : 
                                        extract( $item );
                                        ?>
                                            <div class="tp-about-list mb-15">
                                                <div class="tp-about-list-icon">
                                                    <?php
                                                        $has_icon_18 = (
                                                            ( $item['chose_icon_style_18'] === 'fontawosome_icon_18' && ! empty( $item['list_icon_18']['value'] ) ) ||
                                                            ( $item['chose_icon_style_18'] === 'image_icon_18' && ! empty( $item['list_image_icon_18']['url'] ) ) ||
                                                            ( $item['chose_icon_style_18'] === 'svg_icon_18' && ! empty( $item['list_svg_icon_18'] ) )
                                                        );
                                                    ?>

                                                    <?php 
                                                    if ( $has_icon_18 ) : ?>
                                                        <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                                                            <?php 
                                                            if ( $item['chose_icon_style_18'] === 'fontawosome_icon_18' && ! empty( $item['list_icon_18']['value'] ) ) : ?>

                                                            <?php \Elementor\Icons_Manager::render_icon( $item['list_icon_18'], [ 'aria-hidden' => 'true' ] ); ?>

                                                            <?php 
                                                            elseif ( $item['chose_icon_style_18'] === 'image_icon_18' && ! empty( $item['list_image_icon_18']['url'] ) ) : ?>
                                                                <img src="<?php echo esc_url( $item['list_image_icon_18']['url'] ); ?>" alt="">

                                                            <?php 
                                                            elseif ( $item['chose_icon_style_18'] === 'svg_icon_18' && ! empty( $item['list_svg_icon_18'] ) ) : ?>
                                                                <?php echo kd_kses($item['list_svg_icon_18']); ?>
                                                            <?php 
                                                            endif; ?>
                                                        </span>
                                                    <?php 
                                                    endif; ?>
                                                </div>
                                                <div class="tp-about-list-text">
                                                    <?php 
                                                    if(!empty($list_title)) : ?>
                                                        <h3 class="tp-about-list-title ele-kd-list-title"><?php echo kd_kses($list_title); ?></h3>
                                                    <?php
                                                    endif; ?>

                                                    <?php 
                                                    if(!empty($list_dec)) : ?>
                                                        <p class="ele-kd-list-dec"><?php echo kd_kses($list_dec); ?></p>
                                                    <?php
                                                    endif; ?>
                                                </div>
                                            </div>
                                        <?php 
                                        endforeach; ?>
                                    </div>

                                    <?php 
                                    if(!empty($btn_text_1)) : ?>
                                        <div class="tp-about-btn mt-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                            <a class="tp-btn ele-kd-list-btn tp-btn-animetion tp-btn-secondary-white" href="<?php echo esc_url($btn_url_1['url']); ?>">
                                                <span class="btn-text ele-kd-list-btn-title"><?php echo kd_kses($btn_text_1); ?></span>
                                                <span class="btn-icon">
                                                    <?php
                                                        $icon_style_19 = $settings['chose_icon_style_19'] ?? '';
                                                        $has_icon_19 = (
                                                            ( $icon_style_19 === 'fontawosome_icon_19' && ! empty( $settings['list_icon_19']['value'] ) ) ||
                                                            ( $icon_style_19 === 'image_icon_19' && ! empty( $settings['list_image_icon_19']['url'] ) ) ||
                                                            ( $icon_style_19 === 'svg_icon_19' && ! empty( $settings['list_svg_icon_19'] ) )
                                                        );
                                                    ?>

                                                    <?php 
                                                    if ( $has_icon_19 ) : ?>
                                                        <span class="btn-icon">
                                                            <?php 
                                                            if ( $icon_style_19 === 'fontawosome_icon_19' && ! empty( $settings['list_icon_19']['value'] ) ) : ?>
                                                                <i class="<?php echo esc_attr( $settings['list_icon_19']['value'] ); ?>"></i>

                                                            <?php 
                                                            elseif ( $icon_style_19 === 'image_icon_19' && ! empty( $settings['list_image_icon_19']['url'] ) ) : ?>
                                                                <img src="<?php echo esc_url( $settings['list_image_icon_19']['url'] ); ?>" alt="">

                                                            <?php 
                                                            elseif ( $icon_style_19 === 'svg_icon_19' && ! empty( $settings['list_svg_icon_19'] ) ) : ?>
                                                                <?php echo kd_kses( $settings['list_svg_icon_19'] ); ?>
                                                            <?php 
                                                            endif; ?>
                                                        </span>
                                                    <?php 
                                                    endif; ?>
                                                </span>
                                            </a>
                                        </div>
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



        <?php
        endif; ?>
	<?php

       
    }
}