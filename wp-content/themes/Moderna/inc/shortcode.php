<?php

    function button_shortcode( $atts, $content = null){
        extract(shortcode_atts( array(
            'link' => '',
            'type' => '',
            'icon'=>'',
            'text' => ''
        ), $atts ) );

        if($icon):
            return '<a href="'.$link.'" class="btn btn-'.$type.'"><i class="fa fa-'.$icon.'"></i> '.$text.'</a>';
        else :
            return '<a href="'.$link.'" class="btn btn-'.$type.'">'.$text.'</a>';
        endif ;

    }
    add_shortcode( 'btn', 'button_shortcode' );
     

    function progress_bar_shortcode( $atts, $content = null){
        extract(shortcode_atts( array(
            'link' => '',
            'value' => '',
            'text'=>'',
            'active' =>'',
            'type'=>''
        ), $atts ));

        return '<div class="progress progress-striped '.$active.'">
                <div class="progress-bar progress-bar-'.$type.'" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%">
                    <span class="sr-only">'.$text.'</span>
                </div>
            </div>';
    }
    add_shortcode( 'bar', 'progress_bar_shortcode');

    function priceing_table($atts, $content = null){
            extract(shortcode_atts( array(
                'heading_1' => 'Very',
                'heading_2' => 'Basic',
                'price'=>'30 / Month',
                'active' =>'',
                'column'=>'4',
                'btn_link'=>'#',
                'type'=>'theme',
                'btn_text'=>'Read More',
            ), $atts));

            return '
            <div class="col-md-'.$column.'">
            <div class="pricing-box-alt '.$active.'">
            <div class="pricing-heading">
                <h3>'.$heading_1.' <strong>'.$heading_2.'</strong></h3>
            </div>
            <div class="pricing-terms">
                <h6>'.$price.'</h6>
            </div>
            <div class="pricing-content">
                '.$content.',
            </div>
            <div class="pricing-action">
                <a href="'.$btn_link.'" class="btn btn-medium btn-'.$type.'"><i class="icon-bolt"></i>'.$btn_text.'</a>
            </div>
        </div>
        </div>';
    }

    add_shortcode( 'priceing', 'priceing_table' );
    
?>