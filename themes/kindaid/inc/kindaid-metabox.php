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
            ),
            array(

                'label'           => esc_html__('Kindaid Footer Style', 'textdomain'),
                'id'              => "kindaid_page_footer_style",
                'type'            => 'select',
                'options'         => array(
                    '' => esc_html__( 'Default (Use Global Footer)', 'textdomain' ),
                    'footer_style_page_1' => esc_html__('Footer Style 1', 'textdomain'),
                    'footer_style_page_2' => esc_html__('Footer Style 2', 'textdomain'),
                ),
                'default' => '',
                'placeholder'     => esc_html__('Select Footer Style', 'textdomain'),
                'conditional' => array(),
                'multiple' => false,
            )
        ),
    );


    //  Post Video Metabox Start
    $meta_boxes[] = array(
        'metabox_id'       =>'kindaid_post_video_metabox',
        'title'    => esc_html__( 'Post Video Metabox', 'donafund' ),
        'post_type'=> 'post',
        'context'  => 'normal',
        'priority' => 'core',
        'fields'   => array(
            array(
                'label' => esc_html__( 'Enter Video Url', 'donafund' ),
                'id'    => "kindaid_post_video_url",
                'type'  => 'text',
                'placeholder' => esc_html__( 'Video url here', 'donafund' ),
                'default'     => '',
                'conditional' => array()
            ),
        ),
        'post_format' => 'video' // if u want to bind with post formats
    );


    $meta_boxes[] = array(
        'metabox_id'       =>'kindaid_post_audio_metabox',
        'title'    => esc_html__( 'Post Audio Metabox', 'donafund' ),
        'post_type'=> 'post',
        'context'  => 'normal',
        'priority' => 'core',
        'fields'   => array(
            array(
                'label' => esc_html__( 'Post Audio Format', 'donafund' ),
                'id'    => "kindaid_post_audio_url",
                'type'  => 'text',
                'placeholder' => esc_html__( 'Enter your Audio url here', 'donafund' ),
                'default'     => '',
                'conditional' => array()
            ),
        ),
        'post_format' => 'audio' // if u want to bind with post formats
    );

    //  Post Gallery Metabox Start
    $meta_boxes[] = array(
        'metabox_id'       => 'kindaid_post_gallery_metabox',
        'title'    => esc_html__( 'Post Gallery Image', 'donafund' ),
        'post_type'=> 'post',
        'context'  => 'normal',
        'priority' => 'core',
        'fields'   => array(
            array(

                'label'    => esc_html__( 'Gallery Format', 'textdomain' ),
                'id'      => "kindaid_post_gallery",
                'type'    => 'gallery',
                'default' => '',
                'conditional' => array(),
            ),
        ),
        'post_format' => 'gallery' // if u want to bind with post formats
    );

    return $meta_boxes;
}
add_filter( 'tp_meta_boxes', 'Kindaid_Metabox' );
















