<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Brand_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-brand';
    }

    public function get_title() {
        return __( 'Kindaid Brand', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-slides';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'brand', 'kindaid brand' ];
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
                    'label' => __( 'Brand Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Brand Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'brand-style-1' => esc_html__('Brand Style 1', 'kindaid'),
                        'brand-style-2' => esc_html__('Brand Style 2', 'kindaid'),
                        'brand-style-3' => esc_html__('Brand Style 3', 'kindaid'),
                    ],
                    'default' => 'brand-style-1',
                ]
            );

        $this->end_controls_section();



        //  Brand List start

        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Brand Content', 'kindaid' ),
                ]
            );
            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'list_title',
                [
                    'label' => esc_html__( 'Title', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'How will my donation be used?' , 'kindaid' ),
                    'label_block' => true,
                ]
            );

            $repeater->add_control(
				'list_image',
				[
					'label' => esc_html__( 'Image', 'kindaid' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
                    'label_block' => true,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);

            $repeater->add_control(
                'list_url',
                [
                    'label' => esc_html__( 'Image URL', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( '01' , 'kindaid' ),
                    'label_block' => true,
                ]
            );


            $this->add_control(
                'list_brand',
                [
                    'label' => esc_html__( 'Service List', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_title'    => esc_html__( 'Healthy Food', 'kindaid' ),
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
                    'label' => esc_html__('Brand Style', 'kindaid'),
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
                'padding_3',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-brand-2-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-brand-2-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border_1',
                    'label' => esc_html__( 'Border', 'kindaid' ),
                    'selector' => '{{WRAPPER}} .ele-kd-brand-2-item',
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
                        '{{WRAPPER}} .ele-kd-brand-2-item' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );


            

        $this->end_controls_section();


    }






    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'brand-style-1'):   ?>

            <div class="tp-brand-area ele-kd-bg pb-100">
                <div class="container container-1790">
                    <div class="swiper-container tp-brand-slider-active">
                    <div class="swiper-wrapper slide-transtion">
                    <?php 
                    foreach ( $settings['list_brand'] as $key => $item ) : 
                    extract( $item ); ?>

                        <div class="swiper-slide">
                            <div class="tp-brand-item">
                                <a class="tp-brand-logo" href="<?php echo esc_url($item['list_url']); ?>">
                                <?php 
                                if ( kindaid_img_src( $item['list_image'], 'ele-kd-shape-4' ) ) : ?>
                                    <?php echo kindaid_img_src( $item['list_image'], 'ele-kd-shape-4' ); ?>
                                <?php 
                                endif; ?>
                                </a>
                            </div>
                        </div>
                    <?php 
                    endforeach; ?>
                    </div>
                    </div>
                </div>
            </div>


        <?php 
		elseif ($chose_style == 'brand-style-2') : ?>

            <div class="tp-brand-area ele-kd-bg fix">
                <div class="swiper-container tp-brand-2-slider-active">
                    <div class="swiper-wrapper slide-transtion">
                        <?php 
                        foreach ( $settings['list_brand'] as $key => $item ) : 
                        extract( $item ); ?>
                            <div class="swiper-slide">
                                <div class="tp-brand-2-item ele-kd-brand-2-item">
                                    <a href="<?php echo esc_url($item['list_url']); ?>">
                                        <?php	
                                        if ( kindaid_img_src($item['list_image']) )  :  ?>
                                            <?php echo kindaid_img_src( $item['list_image'], 'ele-kd-shape-4' ); ?>
                                        <?php
                                        endif; ?>
                                    </a>
                                </div>
                            </div>
                        <?php 
                        endforeach; ?>
                    </div>
                </div>
            </div>


        <?php 
		elseif ($chose_style == 'brand-style-3') : ?>



        <div class="tp-brand-area ele-kd-bg pt-115 fix">
            <div class="container-fluid container-1790">
                <div class="row">
                <div class="col-12">
                    <div class="tp-brand-3-wrap text-center">
                        <div class="swiper-container tp-brand-3-slider-active">
                            <div class="swiper-wrapper slide-transtion">
                                <?php 
                                foreach ( $settings['list_brand'] as $key => $item ) : 
                                extract( $item ); ?>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-2-item ele-kd-brand-2-item">
                                            <a href="<?php echo esc_url($item['list_url']); ?>">
                                                <?php	
                                                if ( kindaid_img_src($item['list_image']) )  :  ?>
                                                    <?php echo kindaid_img_src( $item['list_image'], 'ele-kd-shape-4' ); ?>
                                                <?php
                                                endif; ?>
                                            </a>
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
        </div>





        <?php
        endif; ?>
	<?php

       
    }
}