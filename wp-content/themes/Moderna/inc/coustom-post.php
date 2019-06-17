<?php 
    function moderna_custom_post(){
        register_post_type('slide', array(
            'public' => true ,
            'label'  => 'Slide',
            'labels' => array(
                'name'=>'Slides',
                'singular_name'=>'Slide',
                'add_new'=>'Add new Slide',
            ),
            'supports' => array ('title', 'editor', 'thumbnail', 'excerpt')
        ));

    register_post_type('service', array(
        'public' => true ,
        'label'  => 'service',
        'labels' => array(
            'name'=>'Services',
            'singular_name'=>'Service',
            'add_new'=>'Add new Service',
        ),
        'supports' => array ('title', 'editor', 'excerpt', 'custom-fields')
    ));

    register_post_type('Portfolio', array(
        'public' => true ,
        'label'  => 'Portfolio',
        'labels' => array(
            'name'=>'Portfolios',
            'singular_name'=>'portfolio',
            'add_new'=>'Add new portfolio',
        ),
        'supports' => array ('title', 'editor', 'excerpt', 'custom-fields','thumbnail')
    ));
}

    add_action('init', 'moderna_custom_post');
    
?>