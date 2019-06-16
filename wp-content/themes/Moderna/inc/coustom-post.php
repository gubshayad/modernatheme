<?php 
    function moderna_custom_post(){
        register_post_type('slide', array(
            'public' => true ,
            'label'  => 'Slide',
            'labels' => array(
                'name'=>'Slider',
                'singular_name'=>'Slide',
                'add_new'=>'Add new Slide',
            ),
            'supports' => array ('title', 'editor', 'thumbnail', 'excerpt')
        ));
    }

    add_action('init', 'moderna_custom_post');
    
?>