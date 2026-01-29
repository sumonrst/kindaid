<?php
namespace Kindaid\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit;

class Heading_Widget extends Widget_Base {

    public function get_name() {
        return 'kindaid-heading';
    }

    public function get_title() {
        return __( 'Kindaid Heading', 'kindaid' );
    }

    public function get_icon() {
        return 'eicon-t-letter';
    }

    public function get_categories() {
        return [ 'kindaid_widgets' ];
    }

    public function get_keywords(): array {
		return [ 'hero', 'kindaid' ];
	}

    protected function register_controls() {

        $this->start_controls_section(
            'heading_section',
            [
                'label' => __( 'Heading', 'kindaid' ),
            ]
        );

        $this->add_control(
            'heading_text',
            [
                'label' => __( 'Heading Text', 'kindaid' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Hello World', 'kindaid' ),
            ]
        );

        $this->add_control(
            'heading_size',
            [
                'label' => __( 'Heading Size', 'kindaid' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                ],
                'default' => 'h1',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        printf(
            '<%1$s>%2$s</%1$s>',
            esc_attr( $settings['heading_size'] ),
            esc_html( $settings['heading_text'] )
        );
    }
}