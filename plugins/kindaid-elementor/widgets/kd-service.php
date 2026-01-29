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

            $this->add_control(
                'sub_title',
                [
                    'label'       => __( 'Sub Title', 'kindaid' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'placeholder' => __( 'Enter your sub title', 'kindaid' ),
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

        $this->end_controls_section();



        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Service Content', 'kindaid' ),
                ]
            );

            $this->add_control(
                'tabs',
                [
                    'label'   => esc_html__('Service Item', 'kindaid'),
                    'type'    => Controls_Manager::REPEATER,
                    'default' => [
                        [
                            'tab_extra_text'   => esc_html__('k', 'kindaid'),
                            'tab_number'   => esc_html__('64', 'kindaid'),
                            'tab_title' => esc_html__('Children & families served', 'kindaid'),
                        ],
                        [
                            'tab_extra_text'   => esc_html__('+', 'kindaid'),
                            'tab_number'   => esc_html__('500', 'kindaid'),
                            'tab_title' => esc_html__('Successful Campaigns', 'kindaid'),
                        ],
                        [
                            'tab_extra_text'   => esc_html__('+', 'kindaid'),
                            'tab_number'   => esc_html__('240', 'kindaid'),
                            'tab_title' => esc_html__('Receipts we have', 'kindaid'),
                        ],
                        [
                            'tab_extra_text'   => esc_html__('+', 'kindaid'),
                            'tab_number'   => esc_html__('430', 'kindaid'),
                            'tab_title' => esc_html__('Monthly Donors', 'kindaid'),
                        ],
                    ],
                    'fields'  => [

                        [
                            'name'        => 'tab_extra_text',
                            'label'       => esc_html__('Fact Extra Text', 'kindaid'),
                            'type'        => Controls_Manager::TEXT,
                            'dynamic'     => ['active' => true],
                            'default'     => esc_html__('k', 'kindaid'),
                            'label_block' => true,
                        ],
                        [
                            'name'        => 'tab_number',
                            'label'       => esc_html__('Fact Number', 'kindaid'),
                            'type'        => Controls_Manager::TEXT,
                            'dynamic'     => ['active' => true],
                            'default'     => esc_html__('64', 'kindaid'),
                            'label_block' => true,
                        ],
                        [
                            'name'        => 'tab_title',
                            'label'       => esc_html__('Title', 'kindaid'),
                            'type'        => Controls_Manager::TEXT,
                            'dynamic'     => ['active' => true],
                            'default'     => esc_html__('Children & families served', 'kindaid'),
                            'label_block' => true,
                        ],
                        [
                            'name'        => 'tab_border_show',
                            'label_off'   => esc_html__( 'Hide', 'kindaid' ),
                            'type'        => Controls_Manager::SWITCHER,
                            'dynamic'     => ['active' => true],
                            'label_block' => true,
                            'return_value' => 'yes',
                            'default' => 'yes',
                        ],
                        [
                            'name'        => 'tab_border',
                            'label'       => esc_html__('Fact Border', 'kindaid'),
                            'type'        => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .tp-fact-item-border::before' => 'background-color: {{VALUE}};',
                            ],
                            'dynamic'     => ['active' => true],
                            'label_block' => true,
                        ],
                    ],
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



        /** Fact Number Style Tabs **/
        $this->start_controls_section(
            'style_tab_2',
                [
                    'label' => esc_html__('Fact Number Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
				'color_1',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-number' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_1',
                    'selector' => '{{WRAPPER}} .ele-kd-number',
                ]
            );

            $this->add_responsive_control(
                'padding_1',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-number' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $this->end_controls_section();


        /** Extra Text Style Tabs **/
        $this->start_controls_section(
            'style_tab_4',
                [
                    'label' => esc_html__('Extra Text Style', 'kindaid'),
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
				'color_4',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-extra' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_4',
                    'selector' => '{{WRAPPER}} .ele-kd-extra',
                ]
            );

            $this->add_responsive_control(
                'padding_4',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-extra' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-extra' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'show_sub_title',
                [
                    'label'   => esc_html__( 'Show Sub Title', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );
            
            
            //  Service Card Layout Start

            $this->add_control(
				'separator_heading_2',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Card Layout Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_control(
                'show_card_icon',
                [
                    'label'   => esc_html__( 'Show Card Icon', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );
            $this->add_control(
                'show_card_title',
                [
                    'label'   => esc_html__( 'Show Card Title', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );
            $this->add_control(
                'show_card_dec',
                [
                    'label'   => esc_html__( 'Show Card Description', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                ]
            );
            $this->add_control(
                'show_card_btn',
                [
                    'label'   => esc_html__( 'Show Card Button', 'cleenpro-elementor' ),
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
                'show_thumbnail_1',
                [
                    'label'   => esc_html__( 'Show Thumbnail 1', 'cleenpro-elementor' ),
                    'type'    => Controls_Manager::SWITCHER,
                    'default' => 'yes',
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



        $this->end_controls_section();


    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'service-style-1'):   ?>

        <div class="tp-service-area tp-bg-mulberry p-relative">
            <?php
            if ( kindaid_img_src($settings['shape_1']) && $settings['show_shape_1'] == 'yes' )  : ?>
                <?php echo kindaid_img_src( $settings['shape_1'], 'tp-service-shape ele-kd-img' ); ?>
            <?php
            endif; ?>

            <div class="container-fluid">
                <div class="row">
                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="tp-service-thumb">
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

                                <span class="tp-section-subtitle tp-section-subtitle-yellow d-inline-block mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                    How we help
                                </span>

                            <h2 class="tp-section-title tp-section-title-white wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">Delivering Solutions</h2>
                        </div>
                        <div class="row">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="tp-service-item icon-anime-wrap mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                                    <svg width="32" height="40" viewBox="0 0 32 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.1452 24.2838V21.4263H14.2877V24.2838C14.2877 24.6783 13.9679 24.9981 13.5733 24.9981H10.7158V27.8556H13.5733C13.9679 27.8556 14.2877 28.1755 14.2877 28.57V31.4275H17.1452V28.57C17.1452 28.1755 17.465 27.8556 17.8596 27.8556H20.7171V24.9981H17.8596C17.465 24.9981 17.1452 24.6783 17.1452 24.2838Z" fill="#FFCA24" />
                                        <path d="M14.9204 12.7272C15.382 12.8807 15.878 12.8981 16.3492 12.7772C16.1307 9.0792 14.538 5.59639 11.8836 3.01239C11.5802 2.76676 11.1361 2.8083 10.8835 3.10594C10.6349 3.41037 10.6735 3.85733 10.9707 4.11462C10.9934 4.13319 14.3768 6.95064 14.9204 12.7272Z" fill="#FFCA24" />
                                        <path d="M15.1992 4.79542C15.4135 5.13329 15.6278 5.49697 15.8421 5.89482C16.7226 6.90909 18.094 7.3496 19.4004 7.0378C21.9349 6.48952 24.1487 4.95869 25.5562 2.78083C26.0341 2.05176 26.3307 1.21894 26.4213 0.35194C25.0213 0.573281 23.5925 0.53457 22.2065 0.237649C20.7326 -0.090874 19.2031 -0.0786285 17.7345 0.273398C16.8127 0.485061 16.0147 1.05836 15.5199 1.86433C15.0374 2.64561 14.8894 3.58812 15.1092 4.47967C15.1334 4.58652 15.1634 4.69193 15.1992 4.79542Z" fill="#FFCA24" />
                                        <path d="M23.1844 12.1393C21.2819 12.1304 19.4168 12.6679 17.8109 13.6881C16.5293 14.4897 14.9026 14.4897 13.621 13.6881C12.0152 12.6682 10.1505 12.1306 8.24822 12.1393C3.5462 12.1393 0 16.8692 0 23.1407C0 32.9099 4.09699 40 9.74198 40C11.0981 39.994 12.4415 39.7387 13.7054 39.247C14.9974 38.7351 16.436 38.7351 17.728 39.247C18.9917 39.7385 20.3348 39.9938 21.6907 40C27.3358 40 31.4327 32.9098 31.4327 23.1407C31.4326 16.8692 27.8865 12.1393 23.1844 12.1393ZM22.1457 27.8556C22.1457 28.6447 21.506 29.2844 20.7169 29.2844H18.5738V31.4276C18.5738 32.2167 17.9341 32.8563 17.145 32.8563H14.2875C13.4984 32.8563 12.8587 32.2167 12.8587 31.4276V29.2844H10.7156C9.92645 29.2844 9.28679 28.6447 9.28679 27.8556V24.9981C9.28679 24.209 9.92645 23.5694 10.7156 23.5694H12.8587V21.4262C12.8587 20.6371 13.4984 19.9974 14.2875 19.9974H17.145C17.9341 19.9974 18.5738 20.6371 18.5738 21.4262V23.5694H20.7169C21.506 23.5694 22.1457 24.209 22.1457 24.9981V27.8556Z" fill="#FFCA24" />
                                    </svg>
                                </span>
                                <h3 class="tp-service-title mb-10"><a href="service.html">Healthy Food</a></h3>
                                <p class="tp-service-dec">Health care are essential for a child's growth.</p>
                                <a class="tp-service-btn" href="service.html">
                                    <span class="btn-text">Read more</span>
                                    <span class="btn-icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            </div> 
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="tp-service-item icon-anime-wrap mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M31.2378 7.8672C31.2378 3.57059 27.7414 0 23.4448 0C21.7705 0 20.2061 0.716434 18.9917 2.00584C17.7773 0.716434 16.2128 0 14.5386 0C10.242 0 6.74561 3.57059 6.74561 7.8672C6.74561 12.1888 9.9169 14.4197 13.5895 17.0039C15.1039 18.0693 16.6706 19.1718 18.2622 20.5525L18.9906 21.1852L19.7201 20.5536C21.5194 18.9967 23.2306 17.778 24.7396 16.7027C28.3698 14.1186 31.2378 12.0768 31.2378 7.8672ZM22.3315 11.207H20.105V13.4336H17.8784V11.207H15.6519V8.98048H17.8784V6.75391H20.105V8.98048H22.3315V11.207Z" fill="#FFCA24" />
                                        <path d="M36.6558 10.1827C34.3847 10.1827 33.7984 20.7367 33.7538 20.9594C33.5277 22.5058 32.4383 24.795 30.5985 26.1734L25.7765 29.6745L24.4414 27.8916L29.2635 24.3915C31.1737 22.9594 32.0443 20.514 29.6569 20.514C27.5188 20.514 23.5222 22.9894 22.3374 23.9714C20.9226 25.1441 20.105 26.8864 20.105 28.7241V38H26.7847C26.7847 36.9312 27.3636 35.766 28.2541 34.6527C29.1894 33.4281 30.5253 32.1812 31.9057 30.9121C34.533 28.4406 37.2569 25.9023 37.6132 23.3195C37.8247 21.5846 38.0004 18.609 37.9916 15.957C37.982 12.9872 37.7304 10.2787 36.6558 10.1827Z" fill="#FFCA24" />
                                        <path d="M15.3847 23.7649C12.2452 21.605 9.86289 20.514 8.32656 20.514C5.93924 20.514 6.80983 22.9594 8.71999 24.3915L13.5421 27.8916L12.207 29.6745L7.38495 26.1734C5.54506 24.795 4.45568 22.5058 4.22954 20.9594C4.18493 20.7367 3.59868 10.1827 1.32751 10.1827C0.0806346 10.2941 -0.0529593 13.9234 0.0139118 17.3968C0.0585172 19.9351 0.258834 22.4066 0.370088 23.3195C0.726412 25.9023 3.45024 28.4406 6.07758 30.9121C7.45805 32.1812 8.79392 33.4281 9.72915 34.6527C10.6197 35.766 11.1986 36.9312 11.1986 38H17.8783V28.7685C17.8784 26.8017 16.9551 24.9489 15.3847 23.7649Z" fill="#FFCA24" />
                                    </svg>
                                </span>
                                <h3 class="tp-service-title mb-10"><a href="service.html">Medical Care</a></h3>
                                <p class="tp-service-dec">Health care are essential for a child's growth.</p>
                                <a class="tp-service-btn" href="service.html">
                                    <span class="btn-text">Read more</span>
                                    <span class="btn-icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="tp-service-item icon-anime-wrap mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                                    <svg width="42" height="32" viewBox="0 0 42 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.40687 0.00012207C6.40574 0.00012207 6.40447 0.00012207 6.40334 0.00012207C6.00719 0.00012207 5.6346 0.154549 5.35324 0.435198C5.06879 0.718949 4.91211 1.09677 4.91211 1.49898V23.9741C4.91211 24.7983 5.58524 25.4705 6.41279 25.4726C9.90154 25.4809 15.7466 26.208 19.7789 30.4278V6.9069C19.7789 6.62752 19.7075 6.36506 19.5728 6.14788C16.2633 0.818093 9.90351 0.00830178 6.40687 0.00012207Z" fill="#FFCA24" />
                                        <path d="M36.9726 23.9742V1.49886C36.9726 1.09664 36.8159 0.718827 36.5314 0.435076C36.2501 0.154427 35.8772 0 35.4815 0C35.4802 0 35.4789 0 35.4778 0C31.9813 0.00832074 25.6215 0.818111 22.3119 6.1479C22.1772 6.36508 22.106 6.62754 22.106 6.90692V30.4277C26.1382 26.2079 31.9833 25.4808 35.472 25.4725C36.2994 25.4703 36.9726 24.7982 36.9726 23.9742Z" fill="#FFCA24" />
                                        <path d="M40.3869 5.18311H39.3002V23.974C39.3002 26.0783 37.5857 27.7942 35.4782 27.7994C32.519 27.8065 27.6397 28.3851 24.1841 31.6557C30.1606 30.1924 36.4609 31.1437 40.0514 31.9619C40.4998 32.064 40.963 31.9585 41.3222 31.6722C41.6802 31.3867 41.8855 30.9598 41.8855 30.5016V6.68168C41.8856 5.85539 41.2132 5.18311 40.3869 5.18311Z" fill="#FFCA24" />
                                        <path d="M2.58533 23.974V5.18311H1.49856C0.672422 5.18311 0 5.85539 0 6.68168V30.5011C0 30.9595 0.205337 31.3862 0.563266 31.6718C0.922182 31.958 1.38504 32.0639 1.83407 31.9615C5.42464 31.1431 11.7251 30.192 17.7013 31.6553C14.2458 28.3848 9.36652 27.8063 6.40733 27.7993C4.29994 27.7942 2.58533 26.0783 2.58533 23.974Z" fill="#FFCA24" />
                                    </svg>
                                </span>
                                <h3 class="tp-service-title mb-10"><a href="service.html">Education</a></h3>
                                <p class="tp-service-dec">Health care are essential for a child's growth.</p>
                                <a class="tp-service-btn" href="service.html">
                                    <span class="btn-text">Read more</span>
                                    <span class="btn-icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="tp-service-item icon-anime-wrap mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                                    <svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.7285 34.6721H9.64032C6.69837 34.673 4.31343 37.058 4.3125 39.9999H38.0563C38.0563 37.0571 35.6714 34.6721 32.7285 34.6721Z" fill="#FFCA24" />
                                        <path d="M21.1854 9.80896C14.9682 9.80896 10.5298 14.2483 10.5298 20.7691V32.8154H31.8411V20.7691C31.8411 14.2483 27.4054 9.80896 21.1854 9.80896ZM28.2929 23.1689C27.7805 23.1689 27.3646 22.753 27.3646 22.2405C27.3646 18.9096 25.7288 15.8525 23.5583 15.1303C23.0709 14.9678 22.8073 14.4424 22.9697 13.955C23.1322 13.4676 23.6576 13.2039 24.145 13.3664C27.0861 14.3477 29.2213 18.0797 29.2213 22.2405C29.2213 22.753 28.8054 23.1689 28.2929 23.1689Z" fill="#FFCA24" />
                                        <path d="M6.97688 21.393H1.64906C1.13661 21.393 0.720703 20.9771 0.720703 20.4646C0.720703 19.9522 1.13661 19.5363 1.64906 19.5363H6.97688C7.48933 19.5363 7.90523 19.9522 7.90523 20.4646C7.90523 20.9771 7.48933 21.393 6.97688 21.393Z" fill="#FFCA24" />
                                        <path d="M10.4546 11.1161C10.2086 11.1161 9.97186 11.0186 9.79826 10.844L6.24638 7.29124C5.88989 6.92268 5.9001 6.33503 6.26958 5.97854C6.62979 5.63134 7.19979 5.63134 7.55907 5.97854L11.1109 9.53135C11.473 9.89434 11.473 10.482 11.1109 10.844C10.9364 11.0186 10.7006 11.1161 10.4546 11.1161Z" fill="#FFCA24" />
                                        <path d="M21.1852 7.18453C20.6727 7.18453 20.2568 6.76863 20.2568 6.25618V0.928354C20.2568 0.415903 20.6727 0 21.1852 0C21.6976 0 22.1135 0.415903 22.1135 0.928354V6.25618C22.1135 6.76863 21.6976 7.18453 21.1852 7.18453Z" fill="#FFCA24" />
                                        <path d="M32.1166 10.9147C31.6041 10.9147 31.1882 10.4988 31.1882 9.98632C31.1882 9.74031 31.2857 9.50451 31.4602 9.32998L35.0121 5.77809C35.3742 5.41511 35.9628 5.41511 36.3257 5.77716C36.6887 6.13922 36.6887 6.7278 36.3257 7.09079L32.7729 10.6427C32.5993 10.8172 32.3626 10.9147 32.1166 10.9147Z" fill="#FFCA24" />
                                        <path d="M40.7215 21.393H35.3937C34.8812 21.393 34.4653 20.9771 34.4653 20.4646C34.4653 19.9522 34.8812 19.5363 35.3937 19.5363H40.7215C41.234 19.5363 41.6499 19.9522 41.6499 20.4646C41.6499 20.9771 41.234 21.393 40.7215 21.393Z" fill="#FFCA24" />
                                    </svg>
                                </span>
                                <h3 class="tp-service-title mb-10"><a href="service.html">Emergency</a></h3>
                                <p class="tp-service-dec">Health care are essential for a child's growth.</p>
                                <a class="tp-service-btn" href="service.html">
                                    <span class="btn-text">Read more</span>
                                    <span class="btn-icon">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
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