<?php

    function moderna_shortcode( $atts, $content = null){
        extract(shortcode_atts( array(
            'link' => '',
            'text' => '',
            'type' => '',
        ), $atts ));

        return '<a href="'.$link.'" class="btn btn-'.$type.'">'.$text.'</a>';

    }
    add_shortcode( 'btn', 'moderna_shortcode' );
    
?>