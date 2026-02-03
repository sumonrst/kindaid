<?php 

if ( ! function_exists( 'kindaid_kses' ) ) {
    function kd_kses( $content ) {

        $allowed_tags = array(

            'svg' => [
                'width' => true,
                'height' => true,
                'viewbox' => true,
                'fill' => true,
                'xmlns' => true,
                'class' => true,
                'aria-hidden' => true,
                'role' => true,
            ],

            'path' => [
                'd' => true,
                'fill' => true,
                'stroke' => true,
                'stroke-width' => true,
                'stroke-linecap' => true,
                'stroke-linejoin' => true,
            ],

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




if ( ! function_exists( 'kindaid_bg_style' ) ) {
    /**
     * Returns inline background-image style if a valid Elementor image exists.
     *
     * @since 1.0.0
     *
     * @param array $image Elementor image array.
     * @return string Inline style attribute or empty string.
     */
    function kindaid_bg_style( $image ) {
        // Check if image ID exists
        if ( ! empty( $image['id'] ) ) {
            $src = wp_get_attachment_image_src( $image['id'], 'full' );

            if ( ! empty( $src[0] ) ) {
                return 'style="background-image: url(' . esc_url( $src[0] ) . ');"';
            }
        }

        // Return empty string if no valid image
        return '';
    }
}


if ( ! function_exists( 'kd_img_src' ) ) {
	/**
	 * Get the image URL from an Elementor image array.
	 *
	 * This function extracts the image URL from the Elementor image array 
	 * using the attachment ID. Returns an escaped image URL or an empty 
	 * string if no valid image is found.
	 *
	 * @since 1.0.0
	 *
	 * @param array $image Elementor image array containing 'id', 'url', etc.
	 * @return string Escaped image URL or empty string if not available.
	 */
	function kd_img_src( $image ) {
		// Ensure a valid image ID exists
		if ( ! empty( $image['id'] ) ) {
			$src = wp_get_attachment_image_src( $image['id'], 'full' );

			// Return the sanitized image URL if found
			return ! empty( $src[0] ) ? esc_url( $src[0] ) : '';
		}

		// Return empty if no image found
		return '';
	}
}


if ( ! function_exists( 'kindaid_img_src' ) ) {
    /**
     * Returns an <img> tag from Elementor image control.
     *
     * @since 1.0.0
     *
     * @param array  $image Elementor image array.
     * @param string $class Optional CSS class.
     * @return string HTML img tag or empty string.
     */
    function kindaid_img_src( $image, $class = '' ) {
        if ( empty( $image['id'] ) ) {
            return '';
        }

        return wp_get_attachment_image(
            $image['id'],
            'full',
            false,
            [
                'class' => esc_attr( $class ),
            ]
        );
    }
}




if ( ! function_exists( 'kindaid_img_src_alt' ) ) {
    function kindaid_img_src_alt( $image, $class = '', $alt = '' ) {

        if ( empty( $image ) || empty( $image['url'] ) ) {
            return false;
        }

        $alt_text = ! empty( $alt ) 
            ? $alt 
            : ( ! empty( $image['alt'] ) ? $image['alt'] : '' );

        return sprintf(
            '<img src="%s" class="%s" alt="%s">',
            esc_url( $image['url'] ),
            esc_attr( $class ),
            esc_attr( $alt_text )
        );
    }
}


