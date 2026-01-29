<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Fact_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-hero';
    }

    public function get_title() {
        return __( 'Kindaid Fact', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-counter';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'fact', 'counter' ];
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
                    'label' => esc_html__('Chose Fact Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'fact-style-1' => esc_html__('Fact Style 1', 'kindaid'),
                        'fact-style-2' => esc_html__('Fact Style 2', 'kindaid'),
                        'fact-style-3' => esc_html__('Fact Style 3', 'kindaid'),
                    ],
                    'default' => 'fact-style-1',
                ]
            );

        $this->end_controls_section();


        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'Fact Content', 'kindaid' ),
                ]
            );

            $this->add_control(
                'tabs',
                [
                    'label'   => esc_html__('Fact Item', 'kindaid'),
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



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'fact-style-1'):   ?>

        <div class="tp-fact-area tp-bg-mulberry ele-kd-bg pt-40 pb-35">
            <div class="container container-1424">
                <div class="row">
                    <?php 
                    foreach ( $settings['tabs'] as $key => $item ) : 
                    extract( $item ); 
                    $border_class = (isset($tab_border_show) && 'yes' === $tab_border_show) ? 'tp-fact-item-border' : '';
                    ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="tp-fact-item <?php echo esc_attr( $border_class ); ?> text-center pt-20 pb-25">
                                <?php 
                                if (!empty($tab_number)): ?>
                                <h2 class="tp-fact-title ele-kd-extra mb-5">
                                    <span class="purecounter ele-kd-number" data-purecounter-duration="2" data-purecounter-end="64">
                                        <?php echo kd_kses($tab_number); ?>
                                    </span>
                                    <?php echo kd_kses($tab_extra_text); ?>
                                </h2>
                                <?php 
                                endif; ?>

                                <?php 
                                if (!empty($tab_title)): ?>
                                    <p class="tp-fact-dec ele-kd-title mb-0"><?php echo esc_html($tab_title); ?></p>
                                <?php 
                                endif; ?>
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