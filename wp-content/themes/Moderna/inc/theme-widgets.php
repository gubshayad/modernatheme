<?php 
    function moderna_theme_widgets(){
        register_sidebar(array(
            'name'=>'Footer widgets 1',
            'id'=>'widgets-footer',
            'description'=>'This widgets for footer',
            'before_widget'=>'<div class="col-lg-3"><div class="widget widgets-footer">',
            'after_widget'=>'</div></div>',
            'before_title'=>'<h5 class="widgetheading">',
            'after_title'=>'</h5>'


        ));
    }

    add_action('widgets_init', 'moderna_theme_widgets');
?>