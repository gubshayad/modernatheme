<?php 

    function moderna_theme_menus(){
        register_nav_menus(array(
            'main_menu'=>'Main Menu',
            'Footer_menu'=>'Footer Menu',
        ));
    }
    add_action('init','moderna_theme_menus');
    
?>