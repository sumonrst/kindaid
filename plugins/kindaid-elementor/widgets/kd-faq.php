<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Faq_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-faq';
    }

    public function get_title() {
        return __( 'Kindaid FAQ', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-toggle';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'faq', 'accordion' ];
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
                    'label' => __( 'FAQ Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Fact Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'faq-style-1' => esc_html__('FAQ Style 1', 'kindaid'),
                        'faq-style-2' => esc_html__('FAQ Style 2', 'kindaid'),
                        'faq-style-3' => esc_html__('FAQ Style 3', 'kindaid'),
                    ],
                    'default' => 'faq-style-1',
                ]
            );

        $this->end_controls_section();



        //  FAQ List start

        $this->start_controls_section(
            'control_section_1',
                [
                    'label' => __( 'FAQ Content', 'kindaid' ),
                ]
            );
            $repeater = new \Elementor\Repeater();

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
                    'default' => esc_html__( 'How will my donation be used?' , 'kindaid' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'list_dec',
                [
                    'label' => esc_html__( 'Description', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'It is a long established fact that a reader will be distracted
                                    by the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages.' , 'kindaid' ),
                    'label_block' => true,
                ]
            );



            $this->add_control(
                'list',
                [
                    'label' => esc_html__( 'Service List', 'kindaid' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'list_num'    => esc_html__( '01', 'kindaid' ),
                            'list_title'    => esc_html__( 'Healthy Food', 'kindaid' ),
                            'list_dec'  => esc_html__( 'It is a long established fact that a reader will be distracted
                                    by the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages.', 'kindaid' ),
                        ],
                        [
                            'list_num'    => esc_html__( '02', 'kindaid' ),
                            'list_title'    => esc_html__( 'I do not have much money. Can I help?', 'kindaid' ),
                            'list_dec'  => esc_html__( 'It is a long established fact that a reader will be distracted
                                    by the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages.', 'kindaid' ),
                        ],
                        [
                            'list_num'    => esc_html__( '03', 'kindaid' ),
                            'list_title'    => esc_html__( 'How frequently do you update your recipe collection?', 'kindaid' ),
                            'list_dec'  => esc_html__( 'It is a long established fact that a reader will be distracted
                                    by the readable the a content of a page when looking at its layout.
                                    Many desktop publishing packages.', 'kindaid' ),
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
                    'label' => esc_html__('Title Style', 'kindaid'),
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
				'color_3',
				[
					'label' => esc_html__( 'Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_responsive_control(
				'color_4',
				[
					'label' => esc_html__( 'Active Color', 'kindaid' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .ele-kd-item.active .ele-kd-title' => 'color: {{VALUE}}',
					],
				]
			);

            $this->add_control(
                'color_5',
                [
                    'label' => __( 'Active Icon Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .tp-faq-item.active .tp-faq-button::before' => 'background: {{VALUE}};',
                        '{{WRAPPER}} .tp-faq-item.active .tp-faq-button::after'  => 'background: {{VALUE}};',
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

        if ($chose_style == 'faq-style-1'):   ?>

        <div class="tp-faq ml-15">
            <div class="accordion" id="accordionExample">
                <?php 
                foreach ( $settings['list'] as $key => $item ) : 
                extract( $item );
                $active = ($key == 0) ? 'active' : '';
                $collapse_id = 'collapse-' . $key;
                $heading_id  = 'heading-' . $key;
                ?>
                    <div class="tp-faq-item ele-kd-item <?php echo esc_attr( $active ); ?> wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <?php 
                        if (!empty($list_title)): ?>
                        <h2 class="accordion-header" id="<?php echo esc_attr( $heading_id ); ?>">
                            <button 
                            class="tp-faq-button ele-kd-title <?php echo $key === 0 ? '' : 'collapsed'; ?>"
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#<?php echo esc_attr( $collapse_id ); ?>" 
                            aria-expanded="<?php echo $key === 0 ? 'true' : 'false'; ?>" 
                            aria-controls="<?php echo esc_attr( $collapse_id ); ?>">
                                <?php 
                                if (!empty($list_num)): ?>
                                    <span><?php echo esc_html($list_num); ?></span>
                                <?php 
                                endif; ?>

                                <?php echo kd_kses($list_title); ?>
                            </button>
                        </h2>
                        <?php 
                        endif; ?>

                        <div id="<?php echo esc_attr( $collapse_id ); ?>" class="tp-faq-collapse collapse <?php echo $key === 0 ? 'show' : ''; ?>" data-bs-parent="#accordionExample">
                            <?php 
                            if (!empty($list_title)): ?>
                                <div class="tp-faq-body">
                                    <p class="ele-kd-dec"><?php echo esc_html($list_dec); ?></p>
                                </div>
                            <?php 
                            endif; ?>
                        </div>
                    </div>
                <?php 
                endforeach; ?>
            </div>
        </div>

        <?php
        endif; ?>
	<?php

       
    }
}