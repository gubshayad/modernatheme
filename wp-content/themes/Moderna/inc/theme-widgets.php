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
        register_sidebar(array(
            'name'=>'blog widgets',
            'id'=>'blog_sidebar',
            'before_widget'=>'<div class="widget"><ul class="cat"><a>',
            'after_widget'=>'</a></ul></div>',
            'before_title'=>'<h5 class="widgetheading">',
            'after_title'=>'</h5>'


        ));
    }

    add_action('widgets_init', 'moderna_theme_widgets');
?>