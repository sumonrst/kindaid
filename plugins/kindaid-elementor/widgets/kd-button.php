<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;


if ( ! defined( 'ABSPATH' ) ) exit;


class Button_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-button';
    }

    public function get_title() {
        return __( 'Kindaid Button', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-heading';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'button', 'kindaid button' ];
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
                    'label' => __( 'Heading Settings', 'kindaid' ),
                ]
            );

            $this->add_control(
                'chose_style',
                [
                    'label' => esc_html__('Chose Button Style', 'kindaid'),
                    'type' => Controls_Manager::SELECT,
                    'label_block' => true,
                    'options' => [
                        'button-style-1' => esc_html__('Button Style 1', 'kindaid'),
                        'button-style-2' => esc_html__('Button Style 2', 'kindaid'),
                        'button-style-3' => esc_html__('Button Style 3', 'kindaid'),
                    ],
                    'default' => 'button-style-1',
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

    }



    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        if ($chose_style == 'button-style-1'):   ?>

            <?php 
            if ( ! empty( $btn_text_1 ) ) : ?>
                <div class="tp-event-btn-wrap ele-kd-bg mb-50 text-md-end wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                    <a class="tp-btn tp-btn-animetion mr-5 mb-10" href="<?php echo esc_url($btn_url_1['url']); ?>">
                    <span class="btn-text ele-kd-title"><?php echo kd_kses( $btn_text_1 ); ?></span>
                    <span class="btn-icon">
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
                    </span>
                    </a>
                </div>
            <?php 
            endif; ?>

    
        <?php
        endif; ?>
	<?php

       
    }
}