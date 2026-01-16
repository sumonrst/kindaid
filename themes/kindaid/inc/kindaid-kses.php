<?php 

if ( ! function_exists( 'kindaid_kses' ) ) {
    function kindaid_kses( $content ) {

        $allowed_tags = array(

            'a' => array(
                'href'   => true,
                'title'  => true,
                'target' => true,
                'rel'    => true,
                'class'  => true,
                'id'     => true,
            ),

            'div' => array(
                'class' => true,
                'id'    => true,
                'style' => true,
            ),

            'span' => array(
                'class' => true,
                'id'    => true,
                'style' => true,
            ),

            'p' => array(
                'class' => true,
                'id'    => true,
                'style' => true,
            ),

            'br' => array(),
            'hr' => array(),

            'strong' => array(),
            'b'      => array(),
            'em'     => array(),
            'i'      => array(),
            'u'      => array(),

            'h1' => array( 'class' => true, 'id' => true ),
            'h2' => array( 'class' => true, 'id' => true ),
            'h3' => array( 'class' => true, 'id' => true ),
            'h4' => array( 'class' => true, 'id' => true ),
            'h5' => array( 'class' => true, 'id' => true ),
            'h6' => array( 'class' => true, 'id' => true ),

            'ul' => array( 'class' => true, 'id' => true ),
            'ol' => array( 'class' => true, 'id' => true ),
            'li' => array( 'class' => true, 'id' => true ),

            'img' => array(
                'src'    => true,
                'alt'    => true,
                'title'  => true,
                'width'  => true,
                'height' => true,
                'class'  => true,
                'id'     => true,
                'loading'=> true,
            ),

            'blockquote' => array(
                'cite'  => true,
                'class' => true,
                'id'    => true,
            ),

            'code' => array(),
            'pre'  => array( 'class' => true ),

            'iframe' => array(
                'src'             => true,
                'width'           => true,
                'height'          => true,
                'frameborder'     => true,
                'allow'           => true,
                'allowfullscreen' => true,
                'class'           => true,
                'id'              => true,
            ),

            'table' => array(
                'class' => true,
                'id'    => true,
            ),
            'thead' => array(),
            'tbody' => array(),
            'tr'    => array(),
            'th'    => array(
                'colspan' => true,
                'rowspan' => true,
            ),
            'td'    => array(
                'colspan' => true,
                'rowspan' => true,
            ),
        );

        return wp_kses( $content, $allowed_tags );
    }
}


