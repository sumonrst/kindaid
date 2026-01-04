<?php

function Kindaid_Metabox( $meta_boxes ) {
    $meta_boxes[] = array(
        'metabox_id'       => 'kindaid_metafields',
        'title'    => esc_html__( 'Your Metabox Title', 'kindaid' ),
        'post_type'=> 'page', // page, custom post type name
        'context'  => 'normal',
        'priority' => 'core',
        'fields'   => array(
            array(

                'label'           => esc_html__('Kindaid Header Style', 'textdomain'),
                'id'              => "kindaid_page_header_style",
                'type'            => 'select',
                'options'         => array(
                    '' => esc_html__( 'Default (Use Global Header)', 'textdomain' ),
                    'header_style_page_1' => esc_html__('Header Style 1', 'textdomain'),
                    'header_style_page_2' => esc_html__('Header Style 2', 'textdomain'),
                    'header_style_page_3' => esc_html__('Header Style 3', 'textdomain'),
                ),
                'default' => '',
                'placeholder'     => esc_html__('Select Header Style', 'textdomain'),
                'conditional' => array(),
                'multiple' => false,

            )
        ),
    );

    return $meta_boxes;
}
add_filter( 'tp_meta_boxes', 'Kindaid_Metabox' );
















