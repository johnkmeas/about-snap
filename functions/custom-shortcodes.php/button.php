<?php

function snap_button_function( $atts, $content = null ) {

    // set up default parameters
    $atts = shortcode_atts( array(
        'url' => 'my own url here'
	), $atts, 'button' );

    return '<a href="'. site_url() . $atts[$url] .'" class="button">' . $content . '</a>';
}


add_shortcode('button', 'snap_button_function');