<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class What_We_Do_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-what-we-do';
    }

    public function get_title() {
        return __( 'Kindaid What We Do', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-toggle';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'what we do', 'step' ];
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
                    'label' => __( 'Step Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Step Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'step-style-1' => esc_html__('Step Style 1', 'kindaid'),
                        'step-style-2' => esc_html__('Step Style 2', 'kindaid'),
                        'step-style-3' => esc_html__('Step Style 3', 'kindaid'),
                    ],
                    'default' => 'step-style-1',
                ]
            );

        $this->end_controls_section();



        //  FAQ List start

        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Step Content', 'kindaid' ),
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
                'list_num',
                [
                    'label' => esc_html__( 'Number', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( '01' , 'kindaid' ),
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
                'list_dec',
                [
                    'label' => esc_html__( 'Description', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Lorem ipsum is simply text the printing.' , 'kindaid' ),
                    'label_block' => true,
                ]
            );



            $this->add_control(
                'list_step',
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

        
    }

    protected function register_layout_section(){
        $this->start_controls_section(
			'section_content_layout',
                [
                    'label' => esc_html__( 'Layout', 'kindaid' ),
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


            // Number style here start

            $this->add_control(
				'separator_heading_7',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Number Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_6',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-num' => 'color: {{VALUE}}',
					],
				]
			);


            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_4',
                    'selector' => '{{WRAPPER}} .ele-kd-num',
                ]
            );

            $this->add_responsive_control(
                'padding_4',
                [
                    'label' => __( 'Padding', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em', 'rem' ],
                    'selectors' => [
                        '{{WRAPPER}} .ele-kd-num' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .ele-kd-num' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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


            // Description  Start
            $this->add_control(
				'separator_heading_4',
				[
					'type' => \Elementor\Controls_Manager::HEADING,
					'label' => __( 'Description Style Here...', 'kindaid' ),
					'separator' => 'before',
				]
			);

            $this->add_responsive_control(
				'color_2',
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
                    'name' => 'typography_2',
                    'selector' => '{{WRAPPER}} .ele-kd-dec',
                ]
            );

            $this->add_responsive_control(
                'padding_2',
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
                'margin_2',
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


    }






    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'step-style-1'):   ?>



      <div class="tp-step-top-meinus tp-bg-mulberry"></div>
      <div class="tp-step-area ele-kd-bg tp-bg-mulberry pt-115 pb-95 p-relative">
        <div class="container">
         <div class="row ele-kd-row">
            
         <?php 
        $last_arrow_svg = count( $settings['list_step'] );
        foreach ( $settings['list_step'] as $key => $item ) : 
            extract( $item );
        ?>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tp-step text-center p-relative mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                    
                    <?php if ( $key !== $last_arrow_svg - 1 ) : ?>
                        <div class="tp-step-arrow d-none d-lg-block">
                            
                            <?php 
                            $icon_style = $item['chose_icon_style'] ?? ''; 
                            $has_icon = (
                                ( $icon_style === 'fontawosome_icon' && ! empty( $list_icon['value'] ) ) ||
                                ( $icon_style === 'image_icon' && ! empty( $list_image_icon['url'] ) ) ||
                                ( $icon_style === 'svg_icon' && ! empty( $list_svg_icon ) )
                            );
                            ?>

                            <?php if ( $has_icon ) : ?>
                                <span class="btn-icon">
                                    <?php if ( $icon_style === 'fontawosome_icon' && ! empty( $list_icon['value'] ) ) : ?>
                                        <i class="<?php echo esc_attr( $list_icon['value'] ); ?>"></i>

                                    <?php elseif ( $icon_style === 'image_icon' && ! empty( $list_image_icon['url'] ) ) : ?>
                                        <img src="<?php echo esc_url( $list_image_icon['url'] ); ?>" alt="">

                                    <?php elseif ( $icon_style === 'svg_icon' && ! empty( $list_svg_icon ) ) : ?>
                                        <?php echo kd_kses( $list_svg_icon ); ?>
                                    <?php endif; ?>
                                </span>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                    <?php if (!empty($list_num)): ?>
                        <div class="tp-step-number mb-35">
                            <h3 class="ele-kd-num"><?php echo esc_html($list_num); ?> <span></span></h3>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($list_title) || !empty($list_dec)): ?>
                        <div class="tp-step-content">
                            <h3 class="tp-step-title ele-kd-title"><?php echo kd_kses($list_title); ?></h3>
                            <p class="ele-kd-dec"><?php echo esc_html($list_dec); ?></p>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        <?php 
        endforeach; ?>

         </div>
        </div>
      </div>

        <?php
        endif; ?>
	<?php

       
    }
}