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


    function post_list_shortcode($atts, $content = null){
        extract(shortcode_atts( array(
                'type'=>'post',
                'count'=>'count',
        ), $atts )); 

        $q= new Wp_Query(
            array(
                'posts_per_page'=>$count,
                'post_type'=>$type,
            ));

         $list="<ul>";
            while($q->have_posts()): $q->the_post();
                $list.='
                    <li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>
                ';
        endwhile;
         $list.="</ul>";   
         wp_reset_query();
         return $list;
       
    }

    add_shortcode( 'post', 'post_list_shortcode');

    function test_portfolio_shortcode($atts, $content = null){

        extract(shortcode_atts( array(
           'count'=>'10',
           'type'=>'portfolio'
    ), $atts )); 

    $q= new Wp_Query(
        array(
            'posts_per_page'=>$count,
            'post_type'=>$type,
        ));
     $list='<div class="row">
                <section id="projects">
                    <ul id="thumbs" class="portfolio">';

             while($q->have_posts()): $q->the_post();

              $portfolio_large= wp_get_attachment_image_src( get_post_thumbnail_id ($post->ID), 'large'); 
              $portfolio_small = wp_get_attachment_image_src( get_post_thumbnail_id ($post->ID), 'portfolio_thumb'); 

                    $list.=' 
                        
                        <li class="col-lg-3 design" data-id="id-0" data-type="web">
                        <div class="item-thumbs">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->

                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1"
                                href="'.$portfolio_large[0].'">

                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img src="'.$portfolio_small[0].'" alt="'.get_the_title().'"/>
                         

                        </div>
                    </li>';
                   
            endwhile;

     $list.="</ul></section></div>";   
     wp_reset_query();
     return $list;

    }

    add_shortcode('portfolio_list', 'test_portfolio_shortcode');
?>